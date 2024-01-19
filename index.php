<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<style>
	* {
		margin: 0;
		padding: 0;
		border: none;
	}

	html {
		background-color: #333;

		color: aliceblue;
	}

	.ct {
		align-items: center;
		text-align: center;
		width: 76%;
		margin-left: 12%;
		background-color: #666;
	}

	footer {
		text-align: center;
		bottom: 10px;
		margin-top: 10px;
		font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
	}

	h1 {
		font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
		margin-top: 40px;
		margin-bottom: 40px;
	}

	textarea {
		width: 80%;
		background-color: #333;
		resize: none;
		margin-bottom: 10px;
		color: aliceblue;
		border-radius: 5px;
		padding: 5px;
	}

	button {
		border-radius: 5px;
		font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
		width: 76%;
		background-color: #333;
		resize: none;
		margin-bottom: 30px;
		padding: 2%;
		color: aliceblue;
		font-size: 100%;
	}

	span {
		color: yellow;
		font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
		font-size: 30px;
		display: none;
	}
</style>

<body>
	<div class="ct">
		<h1>PHP Obfuscator</h1>
		<span id="span"></span>
		<textarea name="" id="t" cols="30" rows="10" placeholder="Paste your PHP code here..."></textarea>
		<br>
		<button id="b">Start</button>
		<button id="d">Decript (beta)</button>
	</div>
</body>
<script>

	function cripto(str) {
		var linhas = str.split('\n');
		for (var i = 0; i < linhas.length; i++) {
			var linhaatual = linhas[i];
			if (linhaatual.includes(';')) {
				//-----------------------------------------------------------
				if (!linhaatual.includes('for') && !linhaatual.includes('while')) {
					linhaatual = linhaatual.replace(/;/g, ';' +
						'$b = pow($b, ($b * 0xAB) / ($b + 0xB) * M_PI); ' +
						'$_0b = pow(round($b), ($b * 0xAB) / ($b + 0xAB) * M_PI); ' +
						'$_0c = pow(round($_0b), ($b * 0xAB) / ($_0b + 0xAB) * M_PI); ' +
						'' + '/*BresoDEV*/', true);
				}

			}
			//------------------------------------------------------------
			if (linhaatual.includes('{')) {
				if (!linhaatual.includes('= {') && !linhaatual.includes('={')&& 
					!linhaatual.includes(', {') && !linhaatual.includes(',{')&&
					!linhaatual.includes('switch') && !linhaatual.includes(',{')) {
					linhaatual = linhaatual.replace(/{/g, '{' +
						'global $b;global $b;global $_0b;global $_0c;global $_0c;global $_03;' +
						'$b = pow(round($b), ($b * 0xAB) - ($b + 0xAB) * M_PI); ' +
						'$b = pow($b, ($b * 0xAB) - ($b + 0xAB) * M_PI); ' +
						'$b = ($b * 0xAB) - ($b + 0xAB) * M_PI; ' +
						'$b = $b+pow($b, ($b * 0xAB) - ($b + 0xB) * M_PI); ' +
						'$b = $b+pow(round($b), ($b * 0xAB) - ($b + 0xAB) * M_PI); ' +
						'$b = $b+pow($b, ($b * 0xAB) - ($b + 0xAB) * M_PI); ' +
						'$b = ($b * 0xAB) - ($b + 0xAB) * M_PI; ' +
						'$b = pow($b, ($b * 0xAB) - ($b + 0xB) * M_PI); ' +
						'$_0c = pow(round($_0b), ($b * 0xAB) - ($_0c + 0xAB) * M_PI); ' +
						'$b = $b+pow($b, ($b * 0xAB) - ($b + 0x2) * M_PI); ' +
						'$b = $b+pow(round($b), ($b * 0xAB) - ($b + 0xAB) * M_PI); ' +
						'$b = $b+pow($b, ($b * 0xAB) - ($b + 0xAB) * M_PI); ' +
						'$b = ($b * 0xAB) - ($b + 0xAB) * M_PI; ' +
						'$b = pow($b, ($b * 0xAB) - ($b + 0xB) * M_PI); ' +
						'$_0c = pow(round($_0b), ($b * 0xAB) - ($_0c + 0xAB) * M_PI); ' +
						'$b = $b+pow(round($b), ($b * 0xAB) - ($b + 0xAB) * M_PI); ' +
						'$b = $b+pow($b, ($b * 0xAB) - ($b + 0xAB) * M_PI);' +
						'$b = $b+pow($b, ($b * 0xAB) - ($b + 0x2) * M_PI); ' +
						'$b = $b+pow(round($b), ($b * 0xAB) - ($b + 0xAB) * M_PI); ' +
						'$b = $b+pow($b, ($b * 0xAB) - ($b + 0xAB) * M_PI); ' +
						'$_0c = pow(round($_0b), ($b * 0xAB) - ($_0c + 0xAB) * M_PI); ' +
						'$b = ($b * 0xAB) - ($b + 0xAB) * M_PI; ' +
						'$b = pow($b, ($b * 0xAB) - ($b + 0xB) * M_PI); ' +
						'$b = pow(round($b), ($b * 0xAB) - ($b + 0xAB) * M_PI); ' +
						'$b = pow($b, ($b * 0xAB) - ($b + 0xAB) * M_PI); ' +
						'$b = ($b * 0xAB) - ($b + 0xAB) * M_PI; ' +
						'$b = pow($b, ($b * 0xAB) - ($b + 0xB) * M_PI); ' +
						'$_0c = pow(round($_0b), ($b * 0xAB) - ($_0c + 0xAB) * M_PI); ' +
						'$b = pow($b, ($b * 0xAB) - ($b + 0x2) * M_PI); ' +
						'$b = pow(round($b), ($b * 0xAB) - ($b + 0xAB) * M_PI); ' +
						'$b = pow($b, ($b * 0xAB) - ($b + 0xAB) * M_PI); ' +
						'$b = ($b * 0xAB) - ($b + 0xAB) * M_PI; ' +
						'$b = $b+pow($b, ($b * 0xAB) - ($b + 0xB) * M_PI); ' +
						'$b = $b+pow(round($b), ($b * 0xAB) - ($b + 0xAB) * M_PI); ' +
						'$b = $b+pow($b, ($b * 0xAB) - ($b + 0xAB) * M_PI); ' +
						'$_0c = pow(round($_0b), ($b * 0xAB) - ($_0b + 0xAB) * M_PI); ' +
						'$b = pow(round($b), ($b * 0xAB) - ($b + 0xAB) * M_PI); ' +
						'$b = pow($b, ($b * 0xAB) - ($b + 0xAB) * M_PI); ' +
						'$_0c = pow(round($_0b), ($b * 0xAB) - ($_0b + 0xAB) * M_PI); ' +
						'$b = $b+pow(round($b), ($b * 0xAB) - ($b + 0xAB) * M_PI); ' +
						'$b = $b+pow($b, ($b * 0xAB) - ($b + 0xAB) * M_PI); ' +
						'$b = ($b * 0xAB) - ($b + 0xAB) * M_PI; ' +
						'$b = pow($b, ($b * 0xAB) - ($b + 0xB) * M_PI);' +
						'$b = $b+pow($b, ($b * 0xAB) - ($b + 0x2) * M_PI); ' +
						'$b = $b+pow(round($b), ($b * 0xAB) - ($b + 0xAB) * M_PI); ' +
						'$b = $b+pow($b, ($b * 0xAB) - ($b + 0xAB) * M_PI); ' +
						'$b = ($b * 0xAB) - ($b + 0xAB) * M_PI; ' +
						'$b = $b+pow($b, ($b * 0xAB) - ($b + 0xB) * M_PI);' +
						'$b = $b+pow(round($b), ($b * 0xAB) - ($b + 0xAB) * M_PI); ' +
						'$b = $b+pow($b, ($b * 0xAB) - ($b + 0xAB) * M_PI); ' +
						'$_0c = pow(round($_0b), ($b * 0xAB) - ($_0c + 0xAB) * M_PI); ' +
						'/*BresoDEV*/');
				}
			}
			if (linhaatual.includes('()')) {
				linhaatual = linhaatual.replace('()', '(/*BresoDEV*/)');
			}

			if (linhaatual.includes('NaN')) {
				linhaatual = linhaatual.replace('NaN', '');
			}

			


			linhas[i] = linhaatual;
		}
		var final = linhas.join('\n');
		final = '$b = 0x01;$b = pow($b, ($b * 0xAB) + ($b + 0xB) * M_PI);' +
			'$_0b = pow(round($b), ($b * 0xAB) + ($b + 0xAB) * M_PI);' +
			'$_0c = pow(round($_0b), ($b * 0xAB) + ($_0b + 0xAB) * M_PI);' +
			'$_0c = pow(round($_0b), ($b * 0xAB) + ($_0b + 0xAB) * M_PI);' +
			'$_03 = pow(round($_0c), ($b * 0xAB) + ($_0b + 0xAB) * M_PI);' +
			'' + final;
		return final;
	}


	document.getElementById('b').addEventListener('click', () => {
		document.getElementById('span').style.display = 'none';
		if (document.getElementById('t').value.includes(';')) {
			if (document.getElementById('t').value.includes('BresoDEVV')) {
				document.getElementById('span').textContent = 'Code allready obfuscated';
				document.getElementById('span').style.display = 'block';
			}
			else {
				document.getElementById('t').value = cripto(document.getElementById('t').value);
			}
		}
		else {
			document.getElementById('span').textContent = 'Fix your code,";" missing';
			document.getElementById('span').style.display = 'block';
		}
	});

	document.getElementById('d').addEventListener('click', () => {
		document.getElementById('span').style.display = 'none';

		var txt = document.getElementById('t').value;
		if (txt.includes('BresoDEV')) {
			var i = 0;
			while (i !== 2000) {
				txt = dr(txt);
				i++
			}
			document.getElementById('t').value = txt;
		}
		else {
			document.getElementById('span').textContent = 'Invalid code';
			document.getElementById('span').style.display = 'block';
		}

	});



	//-----------------------------------------------------------


	function dr(st) {


		if (st.includes('$b = pow($b, ($b * 0xAB) + ($b + 0xB) * M_PI);')) {
			st = st.replace('$b = pow($b, ($b * 0xAB) + ($b + 0xB) * M_PI);', '');
		}
		if (st.includes('$_0b = pow(round($b), ($b * 0xAB) + ($b + 0xAB) * M_PI);')) {
			st = st.replace('$_0b = pow(round($b), ($b * 0xAB) + ($b + 0xAB) * M_PI);', '');
		}
		if (st.includes('$_0c = pow(round($_0b), ($b * 0xAB) + ($_0b + 0xAB) * M_PI);')) {
			st = st.replace('var _0c = Math.pow(Math.round(_0b), (b * 0xAB) + (_0b + 0xAB) * Math.PI);', '');
		}
		if (st.includes('$_0c = pow(round($_0b), ($b * 0xAB) + ($_0b + 0xAB) * M_PI);')) {
			st = st.replace('$_0c = pow(round($_0b), ($b * 0xAB) + ($_0b + 0xAB) * M_PI);', '');
		}
		if (st.includes('$_03 = pow(round($_0c), ($b * 0xAB) + ($_0b + 0xAB) * M_PI);')) {
			st = st.replace('$_03 = pow(round($_0c), ($b * 0xAB) + ($_0b + 0xAB) * M_PI);', '');
		}
		if (st.includes('console.error("JS Obfuscated by BresoDEV");')) {
			st = st.replace('console.error("JS Obfuscated by BresoDEV");', '');
		}
		if (st.includes('$b = pow($b, ($b * 0xAB) / ($b + 0xB) * M_PI);')) {
			st = st.replace('$b = pow($b, ($b * 0xAB) / ($b + 0xB) * M_PI);', '');
		}
		if (st.includes('$_0b = pow(round($b), ($b * 0xAB) / ($b + 0xAB) * M_PI);')) {
			st = st.replace('$_0b = pow(round($b), ($b * 0xAB) / ($b + 0xAB) * M_PI);', '');
		}
		if (st.includes('$_0c = pow(round($_0b), ($b * 0xAB) / ($_0b + 0xAB) * M_PI);')) {
			st = st.replace('$_0c = pow(round($_0b), ($b * 0xAB) / ($_0b + 0xAB) * M_PI);', '');
		}
		if (st.includes('/*BresoDEV*/')) {
			st = st.replace('/*BresoDEV*/', '');
		}
		if (st.includes('$b = pow(round($b), ($b * 0xAB) - ($b + 0xAB) * M_PI);')) {
			st = st.replace('$b = pow(round($b), ($b * 0xAB) - ($b + 0xAB) * M_PI);', '');
		}
		if (st.includes('$b = pow($b, ($b * 0xAB) - ($b + 0xAB) * M_PI);')) {
			st = st.replace('$b = pow($b, ($b * 0xAB) - ($b + 0xAB) * M_PI);', '');
		}
		if (st.includes('$b = ($b * 0xAB) - ($b + 0xAB) * M_PI;')) {
			st = st.replace('$b = ($b * 0xAB) - ($b + 0xAB) * Math.PI;', '');
		}
		if (st.includes('$b = $b + pow($b, ($b * 0xAB) - ($b + 0xB) * M_PI);')) {
			st = st.replace('$b = $b + pow($b, ($b * 0xAB) - ($b + 0xB) * M_PI);', '');
		}

		if (st.includes('$b = $b + pow(round($b), ($b * 0xAB) - ($b + 0xAB) * M_PI);')) {
			st = st.replace('$b = $b + pow(round($b), ($b * 0xAB) - ($b + 0xAB) * M_PI);', '');
		}

		
		if (st.includes('$b = b + pow($b, ($b * 0xAB) - ($b + 0xAB) * M_PI);')) {
			st = st.replace('$b = b + pow($b, ($b * 0xAB) - ($b + 0xAB) * PI);', '');
		}
		if (st.includes('$b = $b+pow($b, ($b * 0xAB) - ($b + 0xB) * M_PI);')) {
			st = st.replace('$b = $b+pow($b, ($b * 0xAB) - ($b + 0xB) * PI);', '');
		}
		if (st.includes('$b = $b+pow(round($b), ($b * 0xAB) - ($b + 0xAB) * M_PI);')) {
			st = st.replace('$b = $b+pow(round($b), ($b * 0xAB) - ($b + 0xAB) * PI);', '');
		}
		if (st.includes('$b = $b+pow($b, ($b * 0xAB) - ($b + 0xAB) * M_PI);')) {
			st = st.replace('$b = $b+pow($b, ($b * 0xAB) - ($b + 0xAB) * PI);', '');
		}
		if (st.includes('$b = pow($b, ($b * 0xAB) - ($b + 0xB) * M_PI);')) {
			st = st.replace('$b = pow($b, ($b * 0xAB) - ($b + 0xB) * PI);', '');
		}

		if (st.includes('$_0c = pow(round($_0b), ($b * 0xAB) - ($_0b + 0xAB) * M_PI);')) {
			st = st.replace('$_0c = pow(round($_0b), ($b * 0xAB) - ($_0b + 0xAB) * PI);', '');
		}
		if (st.includes('$b = $b+pow($b, ($b * 0xAB) - ($b + 0x2) * M_PI);')) {
			st = st.replace('$b = $b+pow($b, ($b * 0xAB) - ($b + 0x2) * PI);', '');
		}
		if (st.includes('$b = $b+pow($b, ($b * 0xAB) - ($b + 0x2) * M_PI);')) {
			st = st.replace('$b = $b+pow($b, ($b * 0xAB) - ($b + 0x2) * PI);', '');
		}
		if (st.includes('$b = pow($b, ($b * 0xAB) - ($b + 0x2) * M_PI);')) {
			st = st.replace('$b = pow($b, ($b * 0xAB) - ($b + 0x2) * PI);', '');
		}
		if (st.includes('c = pow(round($b), ($b * 0xAB) - ($b + 0xAB) * M_PI);')) {
			st = st.replace('c = pow(round($b), ($b * 0xAB) - ($b + 0xAB) * PI);', '');
		}
		if (st.includes('_0')) {
			st = st.replace('_0', '');
		}
		if (st.includes('  ')) {
			st = st.replace('  ', ' ');
		}
		if (st.includes('$b = 0x01;$c = pow(round($b), ($b * 0xAB) + ($b + 0xAB) * M_PI);')) {
			st = st.replace('$b = 0x01;$c = pow(round($b), ($b * 0xAB) + ($b + 0xAB) * M_PI);', '');
		}
		if (st.includes('global $b;global $b;global $b;global $c;global $c;global $3; $b = ($b * 0xAB) - ($b + 0xAB) * M_PI; $b = $b+pow($b, ($b * 0xAB) - ($b + 0xB) * M_PI); $b = $b+pow(round($b)')) {
			st = st.replace('global $b;global $b;global $b;global $c;global $c;global $3; $b = ($b * 0xAB) - ($b + 0xAB) * M_PI; $b = $b+pow($b, ($b * 0xAB) - ($b + 0xB) * M_PI); $b = $b+pow(round($b)', '');
		}
		if (st.includes(', ($b * 0xAB) - ($b + 0xAB) * M_PI); $b = $b+pow($b, ($b * 0xAB) - ($b + 0xAB) * M_PI); $b = ($b * 0xAB) - ($b + 0xAB) * M_PI; $b = pow($b, ($b * 0xAB) - ($b + 0xB) * M_PI); $c = pow(round($b)')) {
			st = st.replace(', ($b * 0xAB) - ($b + 0xAB) * M_PI); $b = $b+pow($b, ($b * 0xAB) - ($b + 0xAB) * M_PI); $b = ($b * 0xAB) - ($b + 0xAB) * M_PI; $b = pow($b, ($b * 0xAB) - ($b + 0xB) * M_PI); $c = pow(round($b)', '');
		}
		if (st.includes(', ($b * 0xAB) - ($c + 0xAB) * M_PI); $b = $b+pow($b, ($b * 0xAB) - ($b + 0x2) * M_PI); $b = $b+pow(round($b), ($b * 0xAB) - ($b + 0xAB) * M_PI); $b = $b+pow($b, ($b * 0xAB) - ($b + 0xAB) * M_PI); $b = ($b * 0xAB) - ($b + 0xAB) * M_PI; $b = pow($b, ($b * 0xAB) - ($b + 0xB) * M_PI); $c = pow(round($b), ($b * 0xAB) - ($c + 0xAB) * M_PI); $b = $b+pow(round($b), ($b * 0xAB) - ($b + 0xAB) * M_PI); $b = $b+pow($b, ($b * 0xAB) - ($b + 0xAB) * M_PI);$b = $b+pow($b, ($b * 0xAB) - ($b + 0x2) * M_PI); $b = $b+pow(round($b), ($b * 0xAB) - ($b + 0xAB) * M_PI); $b = $b+pow($b, ($b * 0xAB) - ($b + 0xAB) * M_PI); $c = pow(round($b), ($b * 0xAB) - ($c + 0xAB) * M_PI); $b = ($b * 0xAB) - ($b + 0xAB) * M_PI; $b = pow($b, ($b * 0xAB) - ($b + 0xB) * M_PI); $b = ($b * 0xAB) - ($b + 0xAB) * M_PI; $b = pow($b, ($b * 0xAB) - ($b + 0xB) * M_PI); $c = pow(round($b), ($b * 0xAB) - ($c + 0xAB) * M_PI); $b = pow($b, ($b * 0xAB) - ($b + 0x2) * M_PI); $b = ($b * 0xAB) - ($b + 0xAB) * M_PI; $b = $b+pow($b, ($b * 0xAB) - ($b + 0xB) * M_PI); $b = $b+pow(round($b), ($b * 0xAB) - ($b + 0xAB) * M_PI); $b = $b+pow($b, ($b * 0xAB) - ($b + 0xAB) * M_PI); $c = pow(round($b), ($b * 0xAB) - ($b + 0xAB) * M_PI); $c = pow(round($b), ($b * 0xAB) - ($b + 0xAB) * M_PI); $b = $b+pow(round($b), ($b * 0xAB) - ($b + 0xAB) * M_PI); $b = $b+pow($b, ($b * 0xAB) - ($b + 0xAB) * M_PI); $b = ($b * 0xAB) - ($b + 0xAB) * M_PI; $b = pow($b, ($b * 0xAB) - ($b + 0xB) * M_PI);$b = $b+pow($b, ($b * 0xAB) - ($b + 0x2) * M_PI); $b = $b+pow(round($b), ($b * 0xAB) - ($b + 0xAB) * M_PI); $b = $b+pow($b, ($b * 0xAB) - ($b + 0xAB) * M_PI); $b = ($b * 0xAB) - ($b + 0xAB) * M_PI; $b = $b+pow($b, ($b * 0xAB) - ($b + 0xB) * M_PI);$b = $b+pow(round($b), ($b * 0xAB) - ($b + 0xAB) * M_PI); $b = $b+pow($b, ($b * 0xAB) - ($b + 0xAB) * M_PI); $c = pow(round($b), ($b * 0xAB) - ($c + 0xAB) * M_PI); ')) {
			st = st.replace(', ($b * 0xAB) - ($c + 0xAB) * M_PI); $b = $b+pow($b, ($b * 0xAB) - ($b + 0x2) * M_PI); $b = $b+pow(round($b), ($b * 0xAB) - ($b + 0xAB) * M_PI); $b = $b+pow($b, ($b * 0xAB) - ($b + 0xAB) * M_PI); $b = ($b * 0xAB) - ($b + 0xAB) * M_PI; $b = pow($b, ($b * 0xAB) - ($b + 0xB) * M_PI); $c = pow(round($b), ($b * 0xAB) - ($c + 0xAB) * M_PI); $b = $b+pow(round($b), ($b * 0xAB) - ($b + 0xAB) * M_PI); $b = $b+pow($b, ($b * 0xAB) - ($b + 0xAB) * M_PI);$b = $b+pow($b, ($b * 0xAB) - ($b + 0x2) * M_PI); $b = $b+pow(round($b), ($b * 0xAB) - ($b + 0xAB) * M_PI); $b = $b+pow($b, ($b * 0xAB) - ($b + 0xAB) * M_PI); $c = pow(round($b), ($b * 0xAB) - ($c + 0xAB) * M_PI); $b = ($b * 0xAB) - ($b + 0xAB) * M_PI; $b = pow($b, ($b * 0xAB) - ($b + 0xB) * M_PI); $b = ($b * 0xAB) - ($b + 0xAB) * M_PI; $b = pow($b, ($b * 0xAB) - ($b + 0xB) * M_PI); $c = pow(round($b), ($b * 0xAB) - ($c + 0xAB) * M_PI); $b = pow($b, ($b * 0xAB) - ($b + 0x2) * M_PI); $b = ($b * 0xAB) - ($b + 0xAB) * M_PI; $b = $b+pow($b, ($b * 0xAB) - ($b + 0xB) * M_PI); $b = $b+pow(round($b), ($b * 0xAB) - ($b + 0xAB) * M_PI); $b = $b+pow($b, ($b * 0xAB) - ($b + 0xAB) * M_PI); $c = pow(round($b), ($b * 0xAB) - ($b + 0xAB) * M_PI); $c = pow(round($b), ($b * 0xAB) - ($b + 0xAB) * M_PI); $b = $b+pow(round($b), ($b * 0xAB) - ($b + 0xAB) * M_PI); $b = $b+pow($b, ($b * 0xAB) - ($b + 0xAB) * M_PI); $b = ($b * 0xAB) - ($b + 0xAB) * M_PI; $b = pow($b, ($b * 0xAB) - ($b + 0xB) * M_PI);$b = $b+pow($b, ($b * 0xAB) - ($b + 0x2) * M_PI); $b = $b+pow(round($b), ($b * 0xAB) - ($b + 0xAB) * M_PI); $b = $b+pow($b, ($b * 0xAB) - ($b + 0xAB) * M_PI); $b = ($b * 0xAB) - ($b + 0xAB) * M_PI; $b = $b+pow($b, ($b * 0xAB) - ($b + 0xB) * M_PI);$b = $b+pow(round($b), ($b * 0xAB) - ($b + 0xAB) * M_PI); $b = $b+pow($b, ($b * 0xAB) - ($b + 0xAB) * M_PI); $c = pow(round($b), ($b * 0xAB) - ($c + 0xAB) * M_PI); ', '');
		}
		if (st.includes(', ($b * 0xAB) - ($c + 0xAB) * M_PI); $b = $b+pow($b, ($b * 0xAB) - ($b + 0x2) * M_PI); $b = $b+pow(round($b), ($b * 0xAB) - ($c + 0xAB) * M_PI);')) {
			st = st.replace(', ($b * 0xAB) - ($c + 0xAB) * M_PI); $b = $b+pow($b, ($b * 0xAB) - ($b + 0x2) * M_PI); $b = $b+pow(round($b), ($b * 0xAB) - ($c + 0xAB) * M_PI);', '');
		}
		if (st.includes('$b = $b+pow(round($b), ($b * 0xAB) - ($b + 0xAB) * M_PI);')) {
			st = st.replace('$b = $b+pow(round($b), ($b * 0xAB) - ($b + 0xAB) * M_PI);', '');
		}
		if (st.includes('$b = $b+pow($b, ($b * 0xAB) - ($b + 0xAB) * M_PI);')) {
			st = st.replace('$b = $b+pow($b, ($b * 0xAB) - ($b + 0xAB) * M_PI);', '');
		}
		if (st.includes('$b = $b+pow($b, ($b * 0xAB) - ($b + 0x2) * M_PI);')) {
			st = st.replace('$b = $b+pow($b, ($b * 0xAB) - ($b + 0x2) * M_PI);', '');
		}

		if (st.includes('$b = $b+pow(round($b), ($b * 0xAB) - ($b + 0xAB) * M_PI);')) {
			st = st.replace('$b = $b+pow(round($b), ($b * 0xAB) - ($b + 0xAB) * M_PI);', '');
		}
		if (st.includes('$b = $b+pow($b, ($b * 0xAB) - ($b + 0xAB) * M_PI);')) {
			st = st.replace('$b = $b+pow($b, ($b * 0xAB) - ($b + 0xAB) * M_PI);', '');
		}
		if (st.includes('$c = pow(round($b), ($b * 0xAB) - ($c + 0xAB) * M_PI);')) {
			st = st.replace('$c = pow(round($b), ($b * 0xAB) - ($c + 0xAB) * M_PI);', '');
		}
		if (st.includes('$b = ($b * 0xAB) - ($b + 0xAB) * M_PI;')) {
			st = st.replace('$b = ($b * 0xAB) - ($b + 0xAB) * M_PI;', '');
		}
		if (st.includes('$b = pow($b, ($b * 0xAB) - ($b + 0xB) * M_PI);')) {
			st = st.replace('$b = pow($b, ($b * 0xAB) - ($b + 0xB) * M_PI);', '');
		}
		if (st.includes('$b = ($b * 0xAB) - ($b + 0xAB) * M_PI;')) {
			st = st.replace('$b = ($b * 0xAB) - ($b + 0xAB) * M_PI;', '');
		}
		if (st.includes('$b = pow($b, ($b * 0xAB) - ($b + 0xB) * M_PI);')) {
			st = st.replace('$b = pow($b, ($b * 0xAB) - ($b + 0xB) * M_PI);', '');
		}
		if (st.includes('global $b;global $b;global $b;global $c;global $c;global $3;')) {
			st = st.replace('global $b;global $b;global $b;global $c;global $c;global $3;', '');
		}
		if (st.includes('$b = $b+pow($b, ($b * 0xAB) - ($b + 0xB) * M_PI);')) {
			st = st.replace('$b = $b+pow($b, ($b * 0xAB) - ($b + 0xB) * M_PI);', '');
		}
		if (st.includes('$b = pow($b, ($b * 0xAB) - ($b + 0x2) * M_PI);')) {
			st = st.replace('$b = pow($b, ($b * 0xAB) - ($b + 0x2) * M_PI);', '');
		}
		if (st.includes('$b = $b+pow($b, ($b * 0xAB) - ($b + 0xB) * M_PI);')) {
			st = st.replace('$b = $b+pow($b, ($b * 0xAB) - ($b + 0xB) * M_PI);', '');
		}
		if (st.includes('$c = pow(round($b), ($b * 0xAB) - ($b + 0xAB) * M_PI);')) {
			st = st.replace('$c = pow(round($b), ($b * 0xAB) - ($b + 0xAB) * M_PI);', '');
		}
		if (st.includes('$c = pow(round($b), ($b * 0xAB) - ($b + 0xAB) * M_PI);')) {
			st = st.replace('$c = pow(round($b), ($b * 0xAB) - ($b + 0xAB) * M_PI);', '');
		}
		if (st.includes('$b = $b+pow($b, ($b * 0xAB) - ($b + 0xB) * M_PI);')) {
			st = st.replace('$b = $b+pow($b, ($b * 0xAB) - ($b + 0xB) * M_PI);', '');
		}
		if (st.includes('')) {
			st = st.replace('', '');
		}
		if (st.includes('')) {
			st = st.replace('', '');
		}
		if (st.includes('')) {
			st = st.replace('', '');
		}
		if (st.includes('')) {
			st = st.replace('', '');
		}
		if (st.includes('')) {
			st = st.replace('', '');
		}
		if (st.includes('')) {
			st = st.replace('', '');
		}
		if (st.includes('')) {
			st = st.replace('', '');
		}



		return st;



	}


</script>
<footer>
	Created by BresoDEV
</footer>

</html>