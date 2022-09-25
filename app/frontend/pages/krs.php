<div class="container">

<section class="tabelWrapper">
    <?php if($data){?>
        <div class="row full"><b>Nazwa</b><?php echo $danePodmiotu->nazwa?></div>
        <div class="row full"><b>Forma Prawna</b><?php echo $danePodmiotu->formaPrawna?></div>
        <div class="row col-3"><b>Status</b><?php echo $data->odpis->rodzaj?></div>
        <div class="row col-9"><b>Data wpisu do Rejestru</b><?php echo $naglowekA->dataRejestracjiWKRS?></div>
        <div class="row col-3"><b>Numer KRS</b><?php echo $naglowekA->numerKRS?></div>
        <div class="row col-3"><b>NIP</b><?php echo $danePodmiotu->identyfikatory->nip?></div>
        <div class="row col-3"><b>REGON</b><?php echo $danePodmiotu->identyfikatory->regon?></div>
        <div class="row col-3"><b>Województwo</b><?php echo $siedzibalAdres->siedziba->wojewodztwo?></div>
        <div class="row col-3"><b>Gmina</b><?php echo $siedzibalAdres->siedziba->gmina?></div>
        <div class="row col-3"><b>Powiat</b><?php echo $siedzibalAdres->siedziba->powiat?></div>
        <div class="row col-3"><b>Miejscowość</b><?php echo $siedzibalAdres->siedziba->miejscowosc?></div>
        <div class="row col-3"><b>Adres</b><?php echo $siedzibalAdres->adres->ulica.' '.$siedzibalAdres->adres->nrDomu?></div>
        <div class="row col-3"><b>Kod pocztowy</b><?php echo $siedzibalAdres->adres->kodPocztowy?></div>
        <div class="row full"><b>Nazwa organu reprezentacji</b><?php echo $reprezentacja->nazwaOrganu?></div>
        <div class="row full"><b>Sposób reprezentacji</b><?php echo $reprezentacja->sposobReprezentacji?></div>
        <div class="row full table"><b>Członkowie reprezentacji</b>
            <table class="czlonkowieReprezentacji" type="czlonkowieGrid">
                <thead>
                    <tr>
                        <th class="nazwanazwiskoLubNazwa t-first">Nazwisko lub nazwa</th>
                        <th class="nazwanazwiskoDrugie">Nazwisko drugi człon</th>
                        <th class="nazwaimiePierwsze">Imię pierwsze</th>
                        <th class="nazwaimieDrugie">Imię drugie</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($sklad as $osoba){ 
                    echo "
                    <tr>
                        <td class='nazwanazwiskoLubNazwa'>". $osoba->nazwisko->nazwiskoICzlon."</td>
                        <td class='nazwanazwiskoDrugie'>".($osoba->nazwisko->nazwiskoIICzlon ?: '&nbsp;')."</td>
                        <td class='nazwaimiePierwsze'>". $osoba->imiona->imie."</td>
                        <td class='nazwaimieDrugie'>".($osoba->imiona->imieDrugie ?: '&nbsp;')."</td>
                    </tr>";
                    } ?>
                </tbody>
            </table>
        <?php } ?>    
        </div>
        <a href="/index.php" class="button">Wróc do wyszukiwania</a>
    </section>
</div>
