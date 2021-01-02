{extends file="../templates/main.html"}

{block name=footer}Kalkulator{/block}

{block name=content}

<h2 class="content-head is-center">Kalkulator kredytu oraz lokaty</h2>

<div class="pure-g">
<div class="l-box-lrg pure-u-1 pure-u-med-2-5">
	<form class="pure-form pure-form-stacked" action="{$app_url}/app/calc.php" method="post">
		<fieldset>

			<label for="x">Kwota</label>
			<input id="x" type="text" placeholder="wartość kwota" name="x" value="{$form['x']}">
                        
                        <label for="y">Liczba lat</label>
			<input id="y" type="text" placeholder="wartość liczba lat" name="y" value="{$form['y']}">
                        
                        <label for="z">Oprocentowanie</label>
			<input id="z" type="text" placeholder="wartość oprocentowanie" name="z" value="{$form['z']}">

			<label for="op">Operacja</label>
					<select id="op" name="op">

{if isset($form['op_name'])}
<option value="{$form['op']}">ponownie: {$form['op_name']}</option>
<option value="" disabled="true">---</option>
{/if}
						<option value="kredyt">kredyt</option>
						<option value="lokata">lokata</option>
					</select>
					
			

			<button type="submit" class="pure-button">Oblicz</button>
		</fieldset>
	</form>
</div>

<div class="l-box-lrg pure-u-1 pure-u-med-3-5">

{* wyświeltenie listy błędów, jeśli istnieją *}
{if isset($messages)}
	{if count($messages) > 0} 
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		{foreach  $messages as $msg}
		{strip}
			<li>{$msg}</li>
		{/strip}
		{/foreach}
		</ol>
	{/if}
{/if}

{* wyświeltenie listy informacji, jeśli istnieją *}
{if isset($infos)}
	{if count($infos) > 0} 
		<h4>Informacje: </h4>
		<ol class="inf">
		{foreach  $infos as $msg}
		{strip}
			<li>{$msg}</li>
		{/strip}
		{/foreach}
		</ol>
	{/if}
{/if}

{if isset($result) && $form['op'] == 'kredyt'}
	<h4>Wynik</h4>
	<p class="res">
	Miesięczna rata kredytu wyniesie {$result} zl.
	</p>
{/if}

{if isset($result) && $form['op'] == 'lokata'}
	<h4>Wynik</h4>
	<p class="res">
	Lokata po {$form['y']} latach z oprocentowaniem rocznym {$form['z']}% wyniesie = {$result} zł.
	</p>
{/if}

</div>
</div>

{/block}