<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';
//załaduj Smarty
require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';

//pobranie parametrów
function getParams(&$form){
	$form['x'] = isset($_REQUEST['x']) ? $_REQUEST['x'] : null;
	$form['y'] = isset($_REQUEST['y']) ? $_REQUEST['y'] : null;
        $form['z'] = isset($_REQUEST['z']) ? $_REQUEST['z'] : null;
	$form['op'] = isset($_REQUEST['op']) ? $_REQUEST['op'] : null;	
}

//walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(&$form,&$infos,&$msgs,&$hide_intro){

	//sprawdzenie, czy parametry zostały przekazane - jeśli nie to zakończ walidację
	if ( ! (isset($form['x']) && isset($form['y']) && isset($form['z']) && isset($form['op']) ))	return false;	
	
	//parametry przekazane zatem
	//nie pokazuj wstępu strony gdy tryb obliczeń (aby nie trzeba było przesuwać)
	// - ta zmienna zostanie użyta w widoku aby nie wyświetlać całego bloku itro z tłem 
	$hide_intro = true;

	$infos [] = 'Przekazano parametry.';

	// sprawdzenie, czy potrzebne wartości zostały przekazane
	if ( $form['x'] == "") $msgs [] = 'Nie podano kwoty';
	if ( $form['y'] == "") $msgs [] = 'Nie podano liczby lat';
        if ( $form['z'] == "") $msgs [] = 'Nie podano liczby oprocentowania';
	
	//nie ma sensu walidować dalej gdy brak parametrów
	if ( count($msgs)==0 ) {
		// sprawdzenie, czy $x , $y i $z są liczbami całkowitymi
		if (! is_numeric( $form['x'] )) $msgs [] = 'Pierwsza wartość nie jest liczbą';
		if (! is_numeric( $form['y'] )) $msgs [] = 'Druga wartość nie jest liczbą';
                if (! is_numeric( $form['y'] )) $msgs [] = 'Trzecia wartość nie jest liczbą';
	}
	
	if (count($msgs)>0) return false;
	else return true;
}
	
// wykonaj obliczenia
function process(&$form,&$infos,&$msgs,&$result){
	$infos [] = 'Parametry poprawne. Wykonuję obliczenia.';
	
	//konwersja parametrów na float
	$form['x'] = floatval($form['x']);
	$form['y'] = floatval($form['y']);
        $form['z'] = floatval($form['z']);
	
	//wykonanie operacji
	switch ($form['op']) {
	case 'kredyt' :
                $zysk = ($form['x'] * $form['z'])/100;
		$suma = $form['x'] + $zysk;
                $miesiace = $form['y'] * 12; 
                $result = ($suma / $miesiace);
                
		$form['op_name'] = 'kredyt';
		break;
	case 'lokata' :

            $proc = $form['z'] * 0.01;
                
            for($a = 0; $a < $form['y']; $a++){
                if($a==0){
                $b = $form['x'] * $proc;
                $koncowy = $b + $form['x'];
                } else {
                   $b = $koncowy * $proc;
                   $wynik = $koncowy + $b;
                   $koncowy = $wynik;
                }                              
            }
            
            //Obliczania kwoty kredytu
            $sumakred = $form['x'] + ($form['x'] * ($form['z']/100));
            
            
                $result = $koncowy;
                
                $form['op_name'] = 'lokata';
		break;
	default : $result = 12;
                $form['op_name'] = 'kredyt';
		break;
	}
}

//inicjacja zmiennych
$form = null;
$infos = array();
$messages = array();
$result = null;
$hide_intro = false;
	
getParams($form);
if ( validate($form,$infos,$messages,$hide_intro) ){
	process($form,$infos,$messages,$result);
}

// 4. Przygotowanie danych dla szablonu

$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title', 'Valentine Bank Calculator');
$smarty->assign('page_description','Prosty kalkulator do obliczeń kredytu lub lokaty');
$smarty->assign('page_header','Szablony Smarty');

$smarty->assign('hide_intro',$hide_intro);

//pozostałe zmienne niekoniecznie muszą istnieć, dlatego sprawdzamy aby nie otrzymać ostrzeżenia
$smarty->assign('form',$form);
$smarty->assign('result',$result);
$smarty->assign('messages',$messages);
$smarty->assign('infos',$infos);

// 5. Wywołanie szablonu
$smarty->display(_ROOT_PATH.'/app/calc.tpl');