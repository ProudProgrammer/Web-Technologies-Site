<?php
	header("Content-type: text/html;charset=UTF-8");
	if (isset($_GET["func"])) {
		echo select();
	}
	else {
		$nev = addslashes($_POST["nev"]);
		$szoveg = addslashes($_POST["szoveg"]);
		echo insert($nev, $szoveg);
	}
	function connect() {
		$conn = mysql_connect('localhost','levelezo','levelezo')
			or die('Hiba a kapcsolatban!');
		if ($conn) {
			mysql_select_db("hozzaszolas");
		}
		return $conn;
	}
	
	function insert($nev, $szoveg) {
		$conn = connect();
		$utasitas = "insert into bejegyzes (nev, szoveg, idopont) values('".
			$nev."','".$szoveg."','".date("Y.m.d H:i:s")."')";
		if (mysql_query($utasitas)) {
			mysql_close($conn);
			return select();
		}
		else {
			mysql_close($conn);
			return "A bejegyzés nem lett rögzítve!";
		}
	}
	
	function select() {
		$conn = connect();
		$utasitas = "select * from bejegyzes order by idopont desc";
		$eredmeny = mysql_query($utasitas);
		$ret="";
		if ($eredmeny) {
			$ret = '<table cellspacing="2px" cellpadding="2px"><tr><th>ID</th><th>Név</th><th>Szöveg</th><th>Időpont</th></tr>';
			while ($sor = mysql_fetch_array($eredmeny)) {
				$ret.="<tr><td>".$sor["id"]."</td><td>".$sor["nev"]."</td><td>".
					  $sor["szoveg"]."</td><td>".$sor["idopont"]."</td></tr>";
			}
			$ret.="</table>";
		}
		mysql_close($conn);
		return $ret;
	}
	
?>