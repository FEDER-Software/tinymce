<?php 

	require_once '../../../../../classes/class.Factory.inc';
	/**
	 * wg. der Session-ID benoetigen wir die Session
	 * dann wird aus der Tabell sessdata die <option> Liste der Playceholder gelesen
	 */
	@session_start();
	
	$strPlaceholderOptions = SessionData::getValue('PRINTING', 'PLACEHOLDER');
	Header::Expires(0);

?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../../../../../../css/select2.css">
		<script type="text/javascript" src="../../../../../../SCRIPTE/jquery-1.11.1.min.js" ></script>
		<script type="text/javascript" src="../../../../../../SCRIPTE/select2.full.min.js" ></script>
		<style type="text/css">
			body {font-family: arial, helvetica,sans-serif; font-size:12px; }
			select { font-size:12px; }
			.rtf, .disabled { color: #CCCC00; background-color: #F00000; }
			.ok, .pdf		{ color: #006000; background-color: #F0FFF0; }
			.na				{ color: #707070; }
			.intern			{ color: #C09090; background-color: #F8F4F4; text-decoration: italic}
			option:disabled { display:none; color: #777700}
	</style>
	</head>
<body>
	<div style="padding:10px; padding-left: 5px; text-align:center">
			<select style="text-align:left" id="someval" name="someval">
		<?php
			if(! empty($strPlaceholderOptions)){
				echo $strPlaceholderOptions;
			} else {
		?>			
				<optgroup label="allgemein">
				<option value='${CURDATE}'>CURDATE</option>
				<option value='${CURTIME}'>CURTIME</option>
				<option value='${ERSTELLT}'>Erstellt</option>
				<option value='${GEANDERT}'>Geändert</option>
				<option value='${ANSPRECHPARTNER}'>Ansprechpartner</option>
				<option value='${PERSONEN}'>Personen</option>
				<option value='${KINDER}'>Kinder</option>
				<option value='[[${KINDER} > 1][${KINDER} Kinder][]][[${KINDER} == 1][ein Kind][]]'>Kinder (Bedingung...)</option></optgroup>
				<optgroup label="Mieter/Interessent">
				<option value='${MIET_ANREDE}'>Mieter: Anrede</option>
				<option value='${GEEHRT}'>Mieter: Geehrt</option>
				<option value='${MIET_NAME}'>Mieter: Nachname</option>
				<option value='${MIET_VORNAME}'>Mieter: Vorname</option>
				<option value='${MIET_VORNAME}'>Mieter: Strasse</option>
				<option value='${MIET_STRASSE}'>Mieter: PLZ</option>
				<option value='${MIET_ORT}'>Mieter: Ort</option>
				<option value='${MIET_TEL}'>Mieter: Telefon</option>
				<option value='${MIET_FAX}'>Mieter: Fax</option>
				<option value='${MIET_EMAIL}'>Mieter: Email</option>
				<option value='${MIET_ID}'>Mieter: Kundenummer</option></optgroup>
				<optgroup label="Firma">
				<option value='${FIRMA_NAME}'>Firma: Name</option>
				<option value='${FIRMA_VORNAME}'>Firma: Strasse</option>
				<option value='${FIRMA_STRASSE}'>Firma: PLZ</option>
				<option value='${FIRMA_ORT}'>Firma: Ort</option>
				<option value='${FIRMA_TEL}'>Firma: Telefon</option>
				<option value='${FIRMA_FAX}'>Firma: Fax</option>
				<option value='${FIRMA_EMAIL}'>Firma: Email</option>
				<option value='${FIRMA_WWW}'>Firma: www</option></optgroup>
				<optgroup label="Firma Bankverb. 2">
				<option value='${FIRMA_BV/1/BANK}'>Firma: Bank (1)</option>
				<option value='${FIRMA_BV/1/KONTOBEZ}'>Firma: Kontoname (1)</option>
				<option value='${FIRMA_BV/1/KONTO}'>Firma: Kontonr (1)</option>
				<option value='${FIRMA_BV/1/BLZ}'>Firma: BLZ (1)</option>
				<option value='${FIRMA_BV/1/IBAN}'>Firma: IBAN (1)</option>
				<option value='${FIRMA_BV/1/SWIFT}'>Firma: BIC (1)</option>
				<option value='${FIRMA_BV/2/BANK}'>Firma: Bank (2)</option>
				<option value='${FIRMA_BV/2/KONTOBEZ}'>Firma: Kontoname (2)</option>
				<option value='${FIRMA_BV/2/KONTO}'>Firma: Kontonr (2)</option>
				<option value='${FIRMA_BV/2/BLZ}'>Firma: BLZ (2)</option>
				<option value='${FIRMA_BV/2/IBAN}'>Firma: IBAN (2)</option>
				<option value='${FIRMA_BV/2/SWIFT}'>Firma: BIC (2)</option></optgroup>
		<?php
			}
		?>		
			</select>
	</div>
	<script type="text/javascript">

	$("#someval").select2({
		allowClear: true
	});
	</script>
</body>
</html>