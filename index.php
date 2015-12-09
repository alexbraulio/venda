<!DOCTYPE html>
<html>
<head>
  <title>IGCAR | PLANO MANUTENÇÃO</title>

  <meta charset="utf-8">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" href="dist/css/bootstrap-select.css">

  <style>
    body {
      padding-top: 70px;
    }
  </style>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script src="dist/js/bootstrap-select.js"></script>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" align="center">Sistema de cotação para seu veículo.</a>
    </div>
  </div>
</nav>

<div class="container">
  <form class="form-horizontal" role="form">
    <div class="form-group">
      <label for="basic" class="col-lg-2 control-label">Escolha qual é seu Tipo de Veiculo:</label>

      <div class="col-lg-10">
        <select id="basic" class="selectpicker show-tick form-control">
          <option>Nacional</option>
          <!--<option data-subtext="option subtext">bull</option>-->
          <option class="get-class" disabled>Importado</option>
          <optgroup label="test" data-subtext="optgroup subtext">
            <option disabled>ASD</option>
            <option disabled>Bla</option>
            
          </optgroup>
        </select>
      </div>
    </div>
    
    <hr>
<!--
    <div class="form-group">
      <label for="basic" class="col-lg-2 control-label">"Motor" (Escolha qual sua motorização)</label>

      <div class="col-lg-10">
        <select id="basic" class="selectpicker show-tick form-control">
          <option>Motor 1.0</option>
          <option>Motor 1.6</option>
          <option>Motor 1.4</option>
          <option>Motor 1.8</option>
          <option>Motor 2.0</option>
           <option class="get-class" disabled>Motor 2.4</option>
          <!--<option data-subtext="option subtext">bull</option>
          <option class="get-class" disabled>Importado</option>
          <optgroup label="test" data-subtext="optgroup subtext">
            <option disabled>ASD</option>
            <option disabled>Bla</option>
            
          </optgroup>
        </select>
      </div>
    </div>-->

    <hr>


    <div class="form-group">
      <label for="basic" class="col-lg-2 control-label">Escolha qual é seu Tipo:</label>

      <div class="col-lg-10">
        <select id="basic" class="selectpicker show-tick form-control">
          <option>Básico</option>
          <option>Completo</option>
          <!--<option data-subtext="option subtext">bull</option>
          <option class="get-class" disabled>Importado</option>
          <optgroup label="test" data-subtext="optgroup subtext">
            <option disabled>ASD</option>
            <option disabled>Bla</option>
            
          </optgroup>-->
        </select>
      </div>
    </div>
  </form>

  <hr>
       
  <form method="POST" class="form-horizontal" role="form">
    <div class="form-group">
      <label for="basic" class="col-lg-2 control-label">"Marca" (Escolha a marca)</label>

      <div class="col-lg-10">

        <select name="valor" id="basic" class="selectpicker show-tick form-control" data-live-search="true">
    
      <option disabled value="00038">ACURA</option>
      <option disabled value="00060">AGRALE</option>
      <option disabled value="00006">ALFA ROMEO</option>
      <option disabled value="00037">AM GEN</option>
      <option disabled value="00007">ASIA MOTORS</option>
      <option disabled value="00085">ASTON MARTIN</option>
      <option disabled value="00008">AUDI</option>
      <option disabled value="00009">BMW</option>
      <option disabled value="00039">BRM</option>
      <option disabled value="00040">BUGGY</option>
      <option disabled value="00062">BUGRE</option>
      <option disabled value="00041">CADILLAC</option>
      <option disabled value="00042">CBT JIPE</option>
      <option disabled value="00064">CHANA</option>
      <option disabled value="00081">CHANGAN</option>
      <option disabled value="00073">CHERY</option>
      <option disabled value="00010">CHRYSLER</option>
      <option disabled value="00011">CITROEN</option>
      <option disabled value="00059">CROSS LANDER</option>
      <option disabled value="00030">DAEWOO</option>
      <option disabled value="00012">DAIHATSU</option>
      <option disabled value="00013">DODGE</option>
      <option disabled value="00066">EFFA</option>
      <option disabled value="00043">ENGESA</option>
      <option disabled value="00044">ENVEMO</option>
      <option disabled value="00031">FERRARI</option>
      <option disabled value="00001">FIAT</option>
      <option disabled value="00067">FIBRAVAN</option>
      <option  value="00003">FORD</option>
      <option disabled value="00086">FOTON</option>
      <option disabled value="00079">FYBER</option>
      <option disabled value="00088">GEELY</option>
      <option  value="00004">GM - CHEVROLET</option>
      <option disabled value="00041">GMC</option>
      <option disabled value="00069">GREAT WALL</option>
      <option disabled value="00045">GURGEL</option>
      <option disabled value="00068">HAFEI</option>
      <option  value="00014">HONDA</option>
      <option disabled value="00050">HUMMER</option>
      <option disabled value="00015">HYUNDAI</option>
      <option disabled value="00069">INFINIT</option>
      <option disabled value="00133">INFINITI</option>
      <option disabled value="00046">ISUZU</option>
      <option disabled value="00080">JAC</option>
      <option disabled value="00016">JAGUAR</option>
      <option disabled value="00017">JEEP</option>
      <option disabled value="00070">JINBEI</option>
      <option disabled value="00032">JPX</option>
      <option disabled value="00018">KIA MOTORS</option>
      <option disabled value="00019">LADA</option>
      <option disabled value="00078">LAMBORGHINI</option>
      <option disabled value="00033">LAND ROVER</option>
      <option disabled value="00057">LEXUS</option>
      <option disabled value="00077">LIFAN</option>
      <option disabled value="00063">LOBINI</option>
      <option disabled value="00047">LOTUS</option>
      <option disabled value="00065">MAHINDRA</option>
      <option disabled value="00034">MASERATI</option>
      <option disabled value="00058">MATRA</option>
      <option disabled value="00021">MERCEDES-BENZ</option>
      <option disabled value="00048">MERCURY</option>
      <option disabled value="00076">MG</option>
      <option disabled value="00071">MINI</option>
      <option disabled value="00022">MITSUBISHI</option>
      <option disabled value="00023">NISSAN</option>
      <option disabled value="00024">PEUGEOT</option>
      <option disabled value="00050">PLYMOUTH</option>
      <option disabled value="00051">PONTIAC</option>
      <option disabled value="00035">PORSCHE</option>
      <option disabled value="00083">RAM</option>
      <option disabled value="00084">RELY</option>
      <option disabled value="00025">RENAULT</option>
      <option disabled value="00087">ROLLS-ROYCE</option>
      <option disabled value="00052">ROVER</option>
      <option disabled value="00053">SAAB</option>
      <option disabled value="00054">SATURN</option>
      <option disabled value="00026">SEAT</option>
      <option disabled value="00082">SHINERAY</option>
      <option disabled value="00072">SMART</option>
      <option disabled value="00055">SSANGYONG</option>
      <option disabled value="00027">SUBARU</option>
      <option disabled value="00028">SUZUKI</option>
      <option disabled value="00075">TAC</option>
      <option disabled value="00002">TOYOTA</option>
      <option disabled value="00056">TROLLER</option>
      <option disabled value="00029">VOLVO</option>
      <option  value="00005">VW - VOLKSWAGEN</option>
      <option disabled value="00074">WAKE</option>
      <option disabled value="00061">WALK</option>


       
        </select>
      </div>
    </div>
   
  </form>

  <hr>

  <form class="form-horizontal" role="form">
    <div class="form-group">
      <label for="basic" class="col-lg-2 control-label">"Tempo" (escolha por quanto tempo)</label>

      <div class="col-lg-10">
       <select id="basic" class="selectpicker show-tick form-control" data-live-search="true">
          <option>Básico de 6 meses</option>
          <option>Completo de 12 meses</option>
          <option>Profissional de 24 meses</option>
          <option>Economico de 36 meses</option>
          
        </select>
      </div>
    </div>
  </form>

  <hr>

  <form class="form-horizontal" role="form">
    <div class="form-group">
      <label for="basic" class="col-lg-2 control-label">Modelo / Versão:</label>

      <div class="col-lg-10">
       <select id="basic" class="selectpicker show-tick form-control" data-live-search="true">

<!--  CARROS FIAT -->

<option value="0110">BRAVA ELX  1.6 16V 4P</option>
<option value="0140">BRAVA HGT 1.8 MPI 16V  4P</option>
<option value="0109">BRAVA SX 1.6 16V 4P</option>
<option value="0340">BRAVO ABSOLUTE DUALOGIC 1.8 FLEX 16V 5P</option>
<option value="0339">BRAVO ABSOLUTE 1.8 FLEX 16V 5P</option>
<option value="0435">BRAVO BLACKMOTION 1.8 DUALOGIC FLEX 5P</option>
<option value="0434">BRAVO BLACKMOTION 1.8 FLEX 16V 5P</option>
<option value="0338">BRAVO ESSENCE DUALOGIC 1.8 FLEX 16V 5P</option>
<option value="0337">BRAVO ESSENCE 1.8 FLEX 16V 5P</option>
<option value="0385">BRAVO SPORTING 1.8 DUALOGIC FLEX 16V 5P</option>
<option value="0384">BRAVO SPORTING 1.8 FLEX 16V 5P</option>
<option value="0127">BRAVO SX 1.6</option>
<option value="0356">BRAVO T-JET 1.4 16V TURBO 5P</option>
<option value="0403">BRAVO WOLVERINE 1.8 DUALOGIC FLEX 16V 5P</option>
<option value="0671">BRAVO WOLVERINE 1.8 DUALOGIC FLEX 16V 5P</option>
<option value="0402">BRAVO WOLVERINE 1.8 FLEX 16V 5P</option>
<option value="0672">BRAVO WOLVERINE 1.8 FLEX 16V 5P</option>
<option value="0128">CINQUECENTO 0.7</option>
<option value="0057">COUPE 16V</option>
<option value="0302">DOBLO  CARGO 1.4 MPI FIRE FLEX 8V 4P</option>
<option value="0300">DOBLO  1.4 MPI FIRE FLEX  8V 4P</option>
<option value="0383">DOBLO ADV. XINGU LOCKER 1.8 FLEX 16V 5P</option>
<option value="0382">DOBLO ADV. XINGU 1.8 FLEX 16V 5P</option>
<option value="0234">DOBLO ADV/ADV TRYON/LOCKER 1.8 FLEX</option>
<option value="0204">DOBLO ADVENTURE/ ADV.ER 1.8 MPI 8V 103CV</option>
<option value="0353">DOBLO ATTRACTIVE 1.4 FIRE FLEX 8V 5P</option>
<option value="0170">DOBLO CARGO 1.3 FIRE 16V 4/5P</option>
<option value="0169">DOBLO CARGO 1.6 16V 4/5P</option>
<option value="0235">DOBLO CARGO 1.8 MPI FLEX</option>
<option value="0206">DOBLO CARGO 1.8 MPI 8V 103CV</option>
<option value="0301">DOBLO ELX 1.4 MPI FIRE FLEX 8V 4P</option>
<option value="0168">DOBLO ELX 1.6 16V 4/5P</option>
<option value="0236">DOBLO ELX 1.8 MPI 8V FLEX</option>
<option value="0205">DOBLO ELX 1.8 MPI 8V 103CV</option>
<option value="0352">DOBLO ESSENCE 1.8 FLEX 16V 5P</option>
<option value="0167">DOBLO EX 1.3 FIRE 16V 80CV 4/5P</option>
<option value="0240">DOBLO HLX 1.8 MPI FLEX 5P</option>
<option value="0282">DUCATO CARGO CURTO 2.3 ME DIESEL</option>
<option value="0283">DUCATO CARGO LONGO 2.3 ME DIESEL</option>
<option value="0190">DUCATO CARGO 2.8 CURTO/LONGO TB DIESEL</option>
<option value="0284">DUCATO COMBINATO 2.3 ME DIESEL</option>
<option value="0098">DUCATO COMBINATO 2.8 DIESEL</option>
<option value="0106">DUCATO COMBINATO 2.8 TURBO DIESEL</option>
<option value="0096">DUCATO FURGAO MAXI 2.8 DIESEL</option>
<option value="0288">DUCATO MAXI. CURTA 2.3 T.ALTO ME DIESEL</option>
<option value="0289">DUCATO MAXI. LONG. 2.3 T.ALTO ME DIESEL</option>
<option value="0107">DUCATO MAXICARGO/FURGAO MAXI 2.8 TB DIES</option>
<option value="0285">DUCATO MINIBUS 2.3 ME DIESEL</option>
<option value="0286">DUCATO MINIBUS 2.3 ME DIESEL</option>
<option value="0100">DUCATO MINIBUS 2.8 DIESEL</option>
<option value="0108">DUCATO MINIBUS 2.8 TURBO DIESEL</option>
<option value="0159">DUCATO MINIBUS 2.8 TURBO DIESEL</option>
<option value="0160">DUCATO MULT/ VETRATO 2.8 T.BAIXO TB DIES</option>
<option value="0287">DUCATO MULTI LONG. 2.3 T.ALTO ME DIESEL</option>
<option value="0132">DUCATO VAN 2.5  DIESEL</option>
<option value="0130">DUCATO-10 FURGAO 2.5 DIESEL</option>
<option value="0095">DUCATO-15 FURGAO 2.8 DIESEL</option>
<option value="0134">DUCATO-15 2.8 FURGAO TB DIESEL</option>
<option value="0131">DUCATO-8 FURGAO 2.5 DIESEL</option>
<option value="0025">ELBA 1.6I.E/TOP/CSL/ 1.6I.E/1.5 2P E 4P</option>
<option value="0027">FIORINO FURG.1.5/1.3/1.3 FIRE/1.3 F.FLEX</option>
<option value="0414">FIORINO FURGAO CELEB. EVO 1.4 FLEX 8V 2P</option>
<option value="0413">FIORINO FURGAO EVO 1.4 FLEX 8V 2P</option>
<option value="0680">FIORINO FURGAO EVO 1.4 FLEX 8V 2P</option>
<option value="0026">FIORINO FURGAO 1.0</option>
<option value="0001">FIORINO FURGAO 1.5 MPI / I.E.</option>
<option value="0030">FIORINO PICK-UP LX ( TODAS)</option>
<option value="0003">FIORINO PICK-UP TREKKING 1.5 MPI / I.E.</option>
<option value="0002">FIORINO PICK-UP WORKING 1.5 MPI / I.E.</option>
<option value="0028">FIORINO PICK-UP 1.0</option>
<option value="0029">FIORINO PICK-UP 1.5 I.E. / 1.3/1.5 /HD/</option>
<option value="0700">FREEMONT PRECISION 2 4 7P</option>
<option value="0669">FREEMONT PRECISION 2.4 16V 4P</option>
<option value="0365">FREEMONT 2.4 16V 5P AUT.</option>
<option value="0378">GRAND SIENA ATTRAC. 1.4 EVO F.FLEX 8V</option>
<option value="0423">GRAND SIENA ESSEN. ITALIA DUAL. 1.6 FLEX</option>
<option value="0400">GRAND SIENA ESSEN.SUBLIME DUAL. 1.6 FLEX</option>
<option value="0399">GRAND SIENA ESSEN.SUBLIME 1.6 FLEX</option>
<option value="0380">GRAND SIENA ESSENCE DUAL. 1.6 FLEX 16V</option>
<option value="0585">GRAND SIENA ESSENCE DUAL. 1.6 FLEX 16V</option>
<option value="0422">GRAND SIENA ESSENCE ITALIA 1.6 FLEX 16V</option>
<option value="0379">GRAND SIENA ESSENCE 1.6 FLEX 16V</option>
<option value="0381">GRAND SIENA TETRAFUEL 1.4 EVO F. FLEX 8V</option>
<option value="0281">IDEA ADV./ ADV.LOCK.DUALOGIC 1.8 FLEX 5P</option>
<option value="0242">IDEA ADVENT./ ADV.LOCKER 1.8 MPI FLEX 5P</option>
<option value="0328">IDEA ATTRACTIVE 1.4 FIRE FLEX 8V 5P</option>
<option value="0228">IDEA ELX 1.4 MPI FIRE FLEX 8V 5P</option>
<option value="0276">IDEA ELX 1.8 MPI FLEX 8V 5P</option>
<option value="0327">IDEA ESSENCE DUALOGIC 1.6 FLEX 16V 5P</option>
<option value="0417">IDEA ESSENCE SUBLIME DUAL.1.6 FLEX16V 5P</option>
<option value="0416">IDEA ESSENCE SUBLIME 1.6 FLEX 16V 5P</option>
<option value="0326">IDEA ESSENCE 1.6 FLEX 16V 5P</option>
<option value="0229">IDEA HLX 1.8 MPI FLEX 8V 5P</option>
<option value="0330">IDEA SPORTING DUALOGIC 1.8 FLEX 16V 5P</option>
<option value="0329">IDEA SPORTING 1.8 FLEX 16V 5P</option>
<option value="0260">LINEA ABSOLUTE 1.9/1.8 FLEX DUALOGIC 4P</option>
<option value="0410">LINEA ESSEN.SUBLIME DUAL.1.8 FLEX 16V 4P</option>
<option value="0677">LINEA ESSEN.SUBLIME DUAL.1.8 FLEX 16V 4P</option>
<option value="0409">LINEA ESSEN.SUBLIME 1.8 FLEX 16V 4P</option>
<option value="0676">LINEA ESSEN.SUBLIME 1.8 FLEX 16V 4P</option>
<option value="0355">LINEA ESSENCE DUALOGIC 1.8 FLEX 16V 4P</option>
<option value="0354">LINEA ESSENCE 1.8 FLEX 16V 4P</option>
<option value="0275">LINEA LX 1.9/ 1.8 FLEX 16V DUALOGIC 4P</option>
<option value="0274">LINEA LX 1.9/ 1.8 FLEX 16V 4P</option>
<option value="0261">LINEA T-JET 1.4 16V TURBO 4P</option>
<option value="0258">LINEA 1.9/ HLX 1.9/ 1.8 FLEX 16V 4P</option>
<option value="0259">LINEA 1.9/ HLX 1.9/1.8 FLEX  DUALOGIC 4P</option>
<option value="0185">MAREA ELX 1.8 MPI 16V 132CV 4P</option>
<option value="0144">MAREA ELX 2.4 MPI 20V 4P</option>
<option value="0173">MAREA HLX 2.4 MPI 20V 4P AUT.</option>
<option value="0145">MAREA HLX 2.4 MPI 20V 4P MEC.</option>
<option value="0226">MAREA SX 1.6 MPI 16V 106CV 4P</option>
<option value="0114">MAREA SX 1.8 16V 4P</option>
<option value="0694">MAREA SX 16V 4P</option>
<option value="0698">MAREA SX 4P</option>
<option value="0186">MAREA WEEKEND ELX 1.8 MPI 16V 132CV 4P</option>
<option value="0146">MAREA WEEKEND ELX 2.4 MPI 20V 4P</option>
<option value="0174">MAREA WEEKEND HLX 2.4 MPI 20V 4P AUT.</option>
<option value="0147">MAREA WEEKEND HLX 2.4 MPI 20V 4P MEC.</option>
<option value="0227">MAREA WEEKEND SX 1.6 MPI 16V 106CV 4P</option>
<option value="0133">MAREA WEEKEND SX 1.8 16V 4P</option>
<option value="0439">PALIO ATTRA. BEST SELLER 1.0 EVO FLEX 5P</option>
<option value="0438">PALIO ATTRA. BEST SELLER 1.4 EVO FLEX 5P</option>
<option value="0372">PALIO ATTRACTIVE 1.0 FIRE FLEX 8V 5P</option>
<option value="0314">PALIO ATTRACTIVE 1.4 FIRE FLEX 8V 5P</option>
<option value="0237">PALIO CELEBRATION 1.0 FIRE FLEX 8V 2P</option>
<option value="0238">PALIO CELEBRATION 1.0 FIRE FLEX 8V 4P</option>
<option value="0067">PALIO CITY 1.0 4P</option>
<option value="0069">PALIO CITY 1.5/1.6 4P</option>
<option value="0115">PALIO CITYMATIC 1.0 MPI</option>
<option value="0006">PALIO ED 1.0 MPI 2P E 4P</option>
<option value="0007">PALIO EDX 1.0 MPI 2P</option>
<option value="0008">PALIO EDX 1.0 MPI 4P</option>
<option value="0031">PALIO EL 1.5 MPI 2P E 4P</option>
<option value="0063">PALIO EL 1.6 SPI 2P E 4P</option>
<option value="0278">PALIO ELX DUALOGIC 1.8 MPI FLEX 8V 4P</option>
<option value="0151">PALIO ELX 1.0 MPI FIRE 16V 4P (25 ANOS)</option>
<option value="0207">PALIO ELX 1.0 MPI FIRE/ FIRE FLEX 8V 4P</option>
<option value="0066">PALIO ELX 1.0/ 1.0 FIRE FLEX 8V 2P</option>
<option value="0142">PALIO ELX 1.3 MPI  FIRE 16V 4P</option>
<option value="0208">PALIO ELX 1.3 MPI FLEX 8V 4P</option>
<option value="0223">PALIO ELX 1.4 MPI FIRE FLEX 8V 4P</option>
<option value="0071">PALIO ELX 1.5 4P</option>
<option value="0152">PALIO ELX 1.6 MPI 16V 4P</option>
<option value="0068">PALIO ELX 1.6 4P</option>
<option value="0196">PALIO ELX 1.8/ 1.8 MPI FLEX 8V 4P</option>
<option value="0065">PALIO ELX/ 500 1.0 4P</option>
<option value="0325">PALIO ESSENCE DUALOGIC 1.6 FLEX 16V 5P</option>
<option value="0324">PALIO ESSENCE 1.6 FLEX 16V 5P</option>
<option value="0171">PALIO EX CENTURY 1.0 MPI FIRE 16V 2P</option>
<option value="0172">PALIO EX CENTURY 1.0 MPI FIRE 16V 4P</option>
<option value="0154">PALIO EX 1.0 MPI FIRE 8V 4P</option>
<option value="0153">PALIO EX 1.0 MPI FIRE/ FIRE FLEX 8V 2P</option>
<option value="0004">PALIO EX 1.0 MPI 2P</option>
<option value="0005">PALIO EX 1.0 MPI 4P</option>
<option value="0178">PALIO EX 1.3 MPI FIRE 8V 67CV 2P</option>
<option value="0179">PALIO EX 1.3 MPI FIRE 8V 67CV 4P</option>
<option value="0195">PALIO EX 1.8 MPI 8V 103CV 4P</option>
<option value="0210">PALIO HLX 1.8 MPI FLEX 8V 4P</option>
<option value="0209">PALIO HLX 1.8 MPI 8V 103CV 4P</option>
<option value="0426">PALIO RUA 1.0 FIRE FLEX 8V 5P</option>
<option value="0398">PALIO SPORT.INTERLAGOS DUAL.1.6 FLEX 16V</option>
<option value="0644">PALIO SPORT.INTERLAGOS DUAL.1.6 FLEX 16V</option>
<option value="0397">PALIO SPORT.INTERLAGOS 1.6 FLEX 16V</option>
<option value="0643">PALIO SPORT.INTERLAGOS 1.6 FLEX 16V</option>
<option value="0371">PALIO SPORTING DUALOGIC 1.6 FLEX 16V 5P</option>
<option value="0370">PALIO SPORTING 1.6 FLEX 16V 5P</option>
<option value="0155">PALIO STILE 1.6 MPI 16V 4P</option>
<option value="0376">PALIO W.ADV. LOC. ITAL.DUAL.1.8 FLEX 16V</option>
<option value="0419">PALIO WAY CELEBRATION 1.0 F. FLEX 8V 5P</option>
<option value="0418">PALIO WAY 1.0 FIRE FLEX 8V 5P</option>
<option value="0357">PALIO WEEK. ADV. DUALOGIC 1.8 FLEX</option>
<option value="0373">PALIO WEEK. ADV. ITALIA 1.8 FLEX 16V</option>
<option value="0216">PALIO WEEK. ADV/ADV TRYON 1.8 MPI FLEX</option>
<option value="0315">PALIO WEEK. ATTRACTIVE 1.4 FIRE FLEX 8V</option>
<option value="0374">PALIO WEEK. LOCK. ITALIA 1.8 FLEX 16V</option>
<option value="0375">PALIO WEEK.ADV. ITAL. DUAL. 1.8 FLEX 16V</option>
<option value="0280">PALIO WEEK.ADV.LOCK.DUALOGIC 1.8 FLEX</option>
<option value="0255">PALIO WEEKEND ADVENTURE LOCKER 1.8 FLEX</option>
<option value="0111">PALIO WEEKEND ADVENTURE 1.6 8V/16V</option>
<option value="0194">PALIO WEEKEND ADVENTURE 1.8 8V 103CV 4P</option>
<option value="0136">PALIO WEEKEND CITY 1.5/ 1.6 4P</option>
<option value="0156">PALIO WEEKEND ELX 1.0 MPI FIRE 16V</option>
<option value="0143">PALIO WEEKEND ELX 1.3 MPI  FIRE 16V</option>
<option value="0214">PALIO WEEKEND ELX 1.3 MPI FLEX 8V 4P</option>
<option value="0225">PALIO WEEKEND ELX 1.4 MPI FIRE FLEX 8V</option>
<option value="0075">PALIO WEEKEND ELX 1.5 MPI 4P</option>
<option value="0073">PALIO WEEKEND ELX 1.6 MPI</option>
<option value="0191">PALIO WEEKEND EX 1.3 MPI FIRE 8V 67CV 4P</option>
<option value="0074">PALIO WEEKEND EX 1.5 MPI</option>
<option value="0192">PALIO WEEKEND EX 1.8 MPI 8V 103CV 4P</option>
<option value="0215">PALIO WEEKEND HLX 1.8 MPI FLEX 4P</option>
<option value="0013">PALIO WEEKEND SPORT 1.6 MPI 16V 4P</option>
<option value="0012">PALIO WEEKEND STILE 1.6 MPI 16V 4P</option>
<option value="0193">PALIO WEEKEND STILE 1.8 MPI 8V 103CV 4P</option>
<option value="0256">PALIO WEEKEND TREKKING 1.4 FIRE FLEX 8V</option>
<option value="0336">PALIO WEEKEND TREKKING 1.6 FLEX 16V 5P</option>
<option value="0294">PALIO WEEKEND TREKKING 1.8 MPI FLEX 8V</option>
<option value="0690">PALIO WEEKEND 1 4</option>
<option value="0104">PALIO WEEKEND 1.0 6-MARCHAS</option>
<option value="0010">PALIO WEEKEND 1.5 MPI 4P</option>
<option value="0011">PALIO WEEKEND 1.6 MPI 16V 4P</option>
<option value="0165">PALIO YOUNG 1.0 MPI FIRE 8V 2P</option>
<option value="0166">PALIO YOUNG 1.0 MPI FIRE 8V 4P</option>
<option value="0149">PALIO YOUNG 1.0 MPI 8V 2P</option>
<option value="0150">PALIO YOUNG 1.0 MPI 8V 4P</option>
<option value="0268">PALIO 1.0 CELEBR. ECONOMY F.FLEX 8V 2P</option>
<option value="0269">PALIO 1.0 CELEBR. ECONOMY F.FLEX 8V 4P</option>
<option value="0266">PALIO 1.0 ECONOMY FIRE FLEX 8V 2P</option>
<option value="0267">PALIO 1.0 ECONOMY FIRE FLEX 8V 4P</option>
<option value="0176">PALIO 1.0/ TROFEO 1.0 FIRE/ FIRE FLEX 2P</option>
<option value="0177">PALIO 1.0/ TROFEO 1.0 FIRE/ FIRE FLEX 4P</option>
<option value="0200">PALIO 1.5 MPI 8V 2P</option>
<option value="0201">PALIO 1.5 MPI 8V 4P</option>
<option value="0009">PALIO 1.6 MPI 16V 2P</option>
<option value="0070">PALIO 1.6 MPI 16V 4P</option>
<option value="0244">PALIO 1.8R MPI FLEX 8V 2P</option>
<option value="0231">PALIO 1.8R MPI FLEX 8V 4P</option>
<option value="0033">PREMIO CS 1.6/ 1.5/ 1.3 2P</option>
<option value="0036">PREMIO CSL 1.6 I.E./ 1.5 4P</option>
<option value="0035">PREMIO CSL 1.6/ 1.5</option>
<option value="0032">PREMIO S 1.5 I.E./ 1.5 / 1.3</option>
<option value="0249">PUNTO  ELX 1.4 FIRE FLEX 8V 5P</option>
<option value="0377">PUNTO ATTRACTIVE ITALIA 1.4 F.FLEX 8V 5P</option>
<option value="0313">PUNTO ATTRACTIVE 1.4 FIRE FLEX 8V 5P</option>
<option value="0408">PUNTO BLACKMOTION DUAL. 1.8 FLEX 16V 5P</option>
<option value="0407">PUNTO BLACKMOTION 1.8 FLEX 16V 5P.</option>
<option value="0675">PUNTO BLACKMOTION 1.8 16V FLEX 4P</option>
<option value="0120">PUNTO CABRIO</option>
<option value="0117">PUNTO EL/ELX</option>
<option value="0342">PUNTO ESSENCE DUALOGIC 1.6 FLEX 16V 5P</option>
<option value="0318">PUNTO ESSENCE DUALOGIC 1.8 FLEX 16V 5P</option>
<option value="0442">PUNTO ESSENCE SP DUALOGIC 1.6 FLEX 16V</option>
<option value="0437">PUNTO ESSENCE SP 1.6 FLEX 16V 5P</option>
<option value="0316">PUNTO ESSENCE 1.6 FLEX 16V 5P</option>
<option value="0317">PUNTO ESSENCE 1.8 FLEX 16V 5P</option>
<option value="0250">PUNTO HLX 1.8 FLEX 8V 5P</option>
<option value="0118">PUNTO S</option>
<option value="0319">PUNTO SPORTING DUALOGIC 1.8 FLEX 16V 5P</option>
<option value="0251">PUNTO SPORTING 1.8 FLEX 8V / 16V 5P</option>
<option value="0119">PUNTO SX</option>
<option value="0271">PUNTO T-JET 1.4 16V TURBO 5P</option>
<option value="0248">PUNTO 1.4 FIRE FLEX 8V 5P</option>
<option value="0320">SIENA ATTRACTIVE 1.0 FIRE FLEX 8V 4P</option>
<option value="0321">SIENA ATTRACTIVE 1.4 FIRE FLEX 8V 4P</option>
<option value="0239">SIENA CELEBRATION 1.0 FIRE FLEX 8V 4P</option>
<option value="0076">SIENA CITY 4P</option>
<option value="0273">SIENA EL CELEB. 1.0 MPI FIRE FLEX 8V 4P</option>
<option value="0332">SIENA EL CELEB. 1.4 MPI FIRE FLEX 8V 4P</option>
<option value="0272">SIENA EL 1.0 MPI FIRE FLEX 8V 4P</option>
<option value="0331">SIENA EL 1.4 MPI FIRE FLEX 8V 4P</option>
<option value="0015">SIENA EL 1.6 MPI 16V</option>
<option value="0014">SIENA EL 1.6 SPI</option>
<option value="0158">SIENA ELX 1.0 MPI FIRE 16V 4P (25 ANOS)</option>
<option value="0211">SIENA ELX 1.0 MPI FIRE/FIRE FLEX 8V 4P</option>
<option value="0141">SIENA ELX 1.3 MPI FIRE 16V 4P</option>
<option value="0212">SIENA ELX 1.3 MPI FLEX 8V 4P</option>
<option value="0224">SIENA ELX 1.4 MPI FIRE FLEX 8V 4P</option>
<option value="0112">SIENA ELX 1.5 MPI 4P</option>
<option value="0077">SIENA ELX 1.6 MPI 8V/16V 4P</option>
<option value="0199">SIENA ELX 1.8 MPI 8V 103CV 4P</option>
<option value="0323">SIENA ESSENCE DUALOGIC 1.6 FLEX 16V 4P</option>
<option value="0322">SIENA ESSENCE 1.6 FLEX 16V 4P</option>
<option value="0696">SIENA EX 1 8 MPI 8V 103CV 4P</option>
<option value="0157">SIENA EX 1.0 MPI FIRE 16V 4P</option>
<option value="0198">SIENA EX 1.3 MPI FIRE 8V 67CV 4P</option>
<option value="0016">SIENA HL 1.6 MPI 16V</option>
<option value="0279">SIENA HLX DUALOGIC 1.8 MPI FLEX 8V 4P</option>
<option value="0213">SIENA HLX 1.8 MPI FLEX 8V 4P</option>
<option value="0334">SIENA SPORTING DUALOGIC 1.6 FLEX 16V 4P</option>
<option value="0333">SIENA SPORTING 1.6 FLEX 16V 4P</option>
<option value="0017">SIENA STILE/SPORT MTV 1.6 MPI 16V</option>
<option value="0241">SIENA TETRAFUEL 1.4 MPI FIRE FLEX 8V 4P</option>
<option value="0078">SIENA 1.0 MPI/ 500 1.0 MPI</option>
<option value="0175">SIENA 1.0/ EX 1.0 MPI FIRE/ FIRE FLEX 8V</option>
<option value="0202">SIENA 1.5 MPI 8V 4P</option>
<option value="0270">STILO DUALOGIC 1.8 BLACKMOTION FLEX 8V</option>
<option value="0252">STILO DUALOGIC 1.8 FLEX 8V 5P</option>
<option value="0253">STILO DUALOGIC 1.8 SP FLEX 8V 5P</option>
<option value="0254">STILO DUALOGIC 1.8 SPORTING FLEX 8V 5P</option>
<option value="0299">STILO DUOLOGIC 1.8 ATTRACTIVE FLEX 8V 5P</option>
<option value="0298">STILO 1.8 ATTRACTIVE FLEX 8V 5P</option>
<option value="0220">STILO 1.8 MS LIM.EDIT./ MS SEASON 16V</option>
<option value="0243">STILO 1.8 SP FLEX 8V 5P</option>
<option value="0247">STILO 1.8 SPORTING FLEX 8V 5P</option>
<option value="0230">STILO 1.8/ 1.8 CONNECT FLEX 8V 5P</option>
<option value="0180">STILO 1.8/ 1.8 CONNECT 8V 103CV 5P</option>
<option value="0181">STILO 1.8/ 1.8 SP/ CONNECT 16V 122CV 5P</option>
<option value="0182">STILO 2.4 ABARTH 20V 167CV 5P</option>
<option value="0404">STRADA ADV. M. MARCH. 1.8 FLEX 16V CD</option>
<option value="0670">STRADA ADV. M. MARCH. 1.8 FLEX 16V CD</option>
<option value="0405">STRADA ADV. M. MARCH.1.8 DUAL. FLEX CD</option>
<option value="0673">STRADA ADV. M. MARCH.1.8 DUAL. FLEX CD</option>
<option value="0412">STRADA ADV.1.8 16V  LOCKER DUAL. FLEX CE</option>
<option value="0363">STRADA ADV.1.8 16V DUALOGIC FLEX CD</option>
<option value="0411">STRADA ADV.1.8 16V DUALOGIC FLEX CE</option>
<option value="0364">STRADA ADV.1.8 16V LOCKER DUALO. FLEX CD</option>
<option value="0572">STRADA ADV.1.8 16V LOCKER DUALO. FLEX CD</option>
<option value="0219">STRADA ADV/ADV TRYON 1.8 MPI FLEX 8V CE</option>
<option value="0257">STRADA ADVENTURE LOCKER 1.8 MPI FLEX CE</option>
<option value="0257">STRADA ADVENTURE LOCKER 1.8 MPI FLEX CE</option>
<option value="0163">STRADA ADVENTURE 1.6 MPI 16V CE</option>
<option value="0189">STRADA ADVENTURE 1.8 MPI 8V 103CV CE</option>
<option value="0277">STRADA ADVENTURE1.8/ 1.8 LOCKER FLEX CD</option>
<option value="0312">STRADA CELEB. 1.4 MPI FIRE FLEX 8V CE</option>
<option value="0311">STRADA CELEB. 1.4 MPI FIRE FLEX 8V CS</option>
<option value="0091">STRADA LX 1.6 MPI 16V</option>
<option value="0113">STRADA LX 1.6 16V CE</option>
<option value="0335">STRADA SPORTING 1.8 FLEX 16V CE</option>
<option value="0646">STRADA TREK 1.8 FLEX 132CV</option>
<option value="0406">STRADA TREK. M. MARCH. 1.6 FLEX 8V CE</option>
<option value="0674">STRADA TREK. M. MARCH. 1.6 FLEX 8V CE</option>
<option value="0233">STRADA TREKKING 1.4 MPI FIRE FLEX 8V CE</option>
<option value="0232">STRADA TREKKING 1.4 MPI FIRE FLEX 8V CS</option>
<option value="0090">STRADA TREKKING 1.6 MPI</option>
<option value="0388">STRADA TREKKING 1.6 16V FLEX CD</option>
<option value="0387">STRADA TREKKING 1.6 16V FLEX CE</option>
<option value="0386">STRADA TREKKING 1.6 16V FLEX CS</option>
<option value="0441">STRADA TREKKING 1.6 16V LOCKER FLEX  CD</option>
<option value="0218">STRADA TREKKING 1.8 MPI FLEX 8V CE</option>
<option value="0217">STRADA TREKKING 1.8 MPI FLEX 8V CS</option>
<option value="0391">STRADA WORKING CELEB.1.4 FIRE FLEX 8V CD</option>
<option value="0390">STRADA WORKING CELEB.1.4 FIRE FLEX 8V CE</option>
<option value="0389">STRADA WORKING CELEB.1.4 FIRE FLEX 8V CS</option>
<option value="0431">STRADA WORKING HARD 1.4 FIRE FLEX 8V CD</option>
<option value="0432">STRADA WORKING HARD 1.4 FIRE FLEX 8V CE</option>
<option value="0433">STRADA WORKING HARD 1.4 FIRE FLEX 8V CS</option>
<option value="0293">STRADA WORKING 1.4 MPI FIRE FLEX 8V CD</option>
<option value="0292">STRADA WORKING 1.4 MPI FIRE FLEX 8V CE</option>
<option value="0291">STRADA WORKING 1.4 MPI FIRE FLEX 8V CS</option>
<option value="0148">STRADA WORKING 1.6 MPI 16V CE</option>
<option value="0164">STRADA WORKING 1.6 MPI 16V CS</option>
<option value="0188">STRADA WORKING 1.8 MPI 8V 103CV CE</option>
<option value="0187">STRADA WORKING 1.8 MPI 8V 103CV CS</option>
<option value="0184">STRADA 1.3 MPI FIRE 8V 67CV CE</option>
<option value="0183">STRADA 1.3 MPI FIRE 8V 67CV CS</option>
<option value="0222">STRADA 1.4 MPI FIRE FLEX 8V CE</option>
<option value="0221">STRADA 1.4 MPI FIRE FLEX 8V CS</option>
<option value="0122">STRADA/ STRADA WORKING 1.5 MPI 8V CE</option>
<option value="0089">STRADA/ STRADA WORKING 1.5 MPI 8V CS</option>
<option value="0044">TEMPRA STILE 2.0 I.E. TURBO 4P</option>
<option value="0554">TIPO 1.6 I.E. 2P/4P</option>
<option value="0348">UNO ATTRACTI. CELEB.1.4 EVO F.FLEX 8V 2P</option>
<option value="0308">UNO ATTRACTIVE CELEB. 1.4 EVO F.FLEX 8V</option>
<option value="0424">UNO ATTRACTIVE 1.0 EVO FIRE FLEX 8V 5P</option>
<option value="0304">UNO ATTRACTIVE 1.4 EVO FIRE FLEX 8V</option>
<option value="0347">UNO ATTRACTIVE 1.4 EVO FIRE FLEX 8V 2P</option>
<option value="0094">UNO CITY / SMART CITY 1.0 4P</option>
<option value="0051">UNO CS/TOP/SPORT 1.5 I.E. / 1.5 /1.3</option>
<option value="0052">UNO CS/TOP/SPORT 1.5 I.E. / 1.5 4P</option>
<option value="0053">UNO CSL 1.6 4P (ARGENTINO)</option>
<option value="0368">UNO ECONOMY CELEB. 1.4 EVO F. FLEX 8V 2P</option>
<option value="0369">UNO ECONOMY CELEB. 1.4 EVO F. FLEX 8V 4P</option>
<option value="0366">UNO ECONOMY 1.4 EVO FIRE FLEX 8V 2P</option>
<option value="0367">UNO ECONOMY 1.4 EVO FIRE FLEX 8V 4P</option>
<option value="0425">UNO EVOLUTION 1.4 FIRE FLEX 8V 5P</option>
<option value="0430">UNO FURGAO 1.0 FIRE FLEX 8V 3P</option>
<option value="0203">UNO FURGAO 1.3 MPI FIRE/ FIRE FLEX 8V</option>
<option value="0021">UNO FURGAO 1.5 MPI/I.E.</option>
<option value="0049">UNO FURGAO 1.5/ 1.3</option>
<option value="0048">UNO MILLE  ELX  2P E 4P</option>
<option value="0264">UNO MILLE CELEB. WAY ECON. 1.0 F.FLEX 2P</option>
<option value="0265">UNO MILLE CELEB. WAY ECON. 1.0 F.FLEX 4P</option>
<option value="0245">UNO MILLE CELEB/CELEB.ECON 1.0 F.FLEX 2P</option>
<option value="0246">UNO MILLE CELEB/CELEB.ECON 1.0 F.FLEX 4P</option>
<option value="0064">UNO MILLE EP 2P E 4P</option>
<option value="0415">UNO MILLE GRAZIE 1.0 FIRE FLEX 8V 4P</option>
<option value="0103">UNO MILLE SX YOUNG 1.0 IE</option>
<option value="0020">UNO MILLE SX 2P E 4P</option>
<option value="0393">UNO MILLE WAY ECO.XINGU 1.0 F.FLEX 8V 5P</option>
<option value="0262">UNO MILLE WAY ECONOMY 1.0 F.FLEX 2P</option>
<option value="0263">UNO MILLE WAY ECONOMY 1.0 F.FLEX 4P</option>
<option value="0047">UNO MILLE 1.0 ELECTRONIC 4P</option>
<option value="0161">UNO MILLE 1.0 FIRE/ F.FLEX/ ECONOMY 2P</option>
<option value="0162">UNO MILLE 1.0 FIRE/ F.FLEX/ ECONOMY 4P</option>
<option value="0046">UNO MILLE 1.0/ I.E./ ELECTRONIC/  BRIO</option>
<option value="0018">UNO MILLE/ MILLE EX/ SMART 2P</option>
<option value="0137">UNO MILLE/ MILLE EX/ SMART 4P</option>
<option value="0050">UNO S 1.5 I.E. / 1.5 / 1.3/ SX 1.3</option>
<option value="0396">UNO SPORT.INTERLAGOS 1.4 EVO F.FLEX 8V</option>
<option value="0645">UNO SPORT.INTERLAGOS 1.4 EVO F.FLEX 8V</option>
<option value="0428">UNO SPORTING DUALOGIC 1.4 EVO FLEX 8V 4P</option>
<option value="0351">UNO SPORTING 1.4 EVO FIRE FLEX 8V 2P</option>
<option value="0341">UNO SPORTING 1.4 EVO FIRE FLEX 8V 4P</option>
<option value="0056">UNO TURBO 1.4 I.E. 2P</option>
<option value="0344">UNO VIVACE CELEB. 1.0 EVO F. FLEX 8V 2P</option>
<option value="0307">UNO VIVACE CELEB. 1.0 EVO F.FLEX 8V</option>
<option value="0401">UNO VIVACE COLLEGE 1.0 EVO FIREFLEX 5P</option>
<option value="0436">UNO VIVACE ITALIA 1.0 EVO F. FLEX 8V 5P</option>
<option value="0303">UNO VIVACE 1.0 EVO FIRE FLEX 8V</option>
<option value="0343">UNO VIVACE 1.0 EVO FIRE FLEX 8V 2P</option>
<option value="0309">UNO WAY CELEB. 1.0 EVO FIRE FLEX 8V</option>
<option value="0346">UNO WAY CELEB. 1.0 EVO FIRE FLEX 8V 2P</option>
<option value="0310">UNO WAY CELEB. 1.4 EVO FIRE FLEX 8V</option>
<option value="0350">UNO WAY CELEB. 1.4 EVO FIRE FLEX 8V 2P</option>
<option value="0440">UNO WAY RIO 450 1.0 EVO FLEX 8V 5P</option>
<option value="0394">UNO WAY XINGU 1.0 EVO F.FLEX 8V 5P</option>
<option value="0395">UNO WAY XINGU 1.4 EVO F.FLEX 8V 5P</option>
<option value="0305">UNO WAY 1.0 EVO FIRE FLEX 8V</option>
<option value="0345">UNO WAY 1.0 EVO FIRE FLEX 8V 2P</option>
<option value="0427">UNO WAY 1.4 EVO DUALOGIC FLEX 8V 5P</option>
<option value="0306">UNO WAY 1.4 EVO FIRE FLEX 8V</option>
<option value="0349">UNO WAY 1.4 EVO FIRE FLEX 8V 2P</option>
<option value="0054">UNO 1.6 MPI 2P E 4P</option>
<option value="0055">UNO 1.6R MPI / 1.6R / 1.5R</option>
<option value="0699">500 ABARTH MULTIAIR 1 4 TB 16V 3P</option>
<option value="0429">500 ABARTH MULTIAIR 1.4 TB 16V 3P</option>
<option value="0688">500 ABARTH 695</option>
<option value="0695">500 ABARTH 695 TRIBUTO FERRARI</option>
<option value="0420">500 CABRIO DUALOGIC FLEX 1.4 8V</option>
<option value="0421">500 CABRIO FLEX 1.4 8V MEC</option>
<option value="0392">500 CABRIO 1.4 16V AUT.</option>
<option value="0362">500 CULT 1.4 FLEX 8V EVO DUALOGIC</option>
<option value="0361">500 CULT 1.4 FLEX 8V EVO MEC.</option>
<option value="0360">500 LOUGE AIR 1.4 16V AUT.</option>
<option value="0296">500 LOUNGE 1.4 16V 100CV  MEC.</option>
<option value="0297">500 LOUNGE 1.4 16V 100CV DUALOGIC</option>
<option value="0359">500 SPORT AIR 1.4 16V AUT.</option>
<option value="0358">500 SPORT AIR 1.4 16V MEC.</option>
<option value="0295">500 SPORT 1.4 16V 100CV  DUALOGIC</option>
<option value="0290">500 SPORT 1.4 16V 100CV MEC.</option>












<!--CARROS GM- CHEVROLET-->












<option value="0114">A-10 DE LUXE 2.5/4.1</option>

<option value="0113">A-10 2.5/4.1</option>

<option value="0126">A-20 CUSTOM STD. CD/ DE LUXE CD</option>

<option value="0024">A-20 CUSTOM/ C-20 LUXE 4.1</option>

<option value="0023">A-20 CUSTOM/ C-20 S 4.1</option>

<option value="0362">AGILE LT 1.4 MPFI 8V FLEXPOWER 5P</option>

<option value="0427">AGILE LTZ EASYTRONIC 1.4 8V FLEXPOWER 5P</option>

<option value="0447">AGILE LTZ EFFECT EASYTR.1.4 8V FLEXP. 5P</option>

<option value="0446">AGILE LTZ EFFECT 1.4 8V FLEXPOWER 5P MEC</option>

<option value="0382">AGILE LTZ WI-FI 1.4 8V FLEXPOWER 5P</option>

<option value="0363">AGILE LTZ 1.4 MPFI 8V FLEXPOWER 5P</option>

<option value="0330">ASTRA ADVANT. 2.0 MPFI 8V FLEXP. 5P AUT.</option>

<option value="0312">ASTRA ADVANTAGE 2.0 MPFI FLEXPOWER 8V 3P</option>

<option value="0328">ASTRA ADVANTAGE 2.0 MPFI 8V FLEXPOWER 5P</option>

<option value="0252">ASTRA COMFORT 2.0 MPFI FLEXPOWER 8V 3P</option>
<option value="0254">ASTRA COMFORT 2.0 MPFI FLEXPOWER 8V 5P</option>
<option value="0256">ASTRA ELEG. 2.0 MPFI FLEXPOWER 8V 5P AUT</option>
<option value="0253">ASTRA ELEGANCE 2.0 MPFI FLEXPOWER 8V 3P</option>
<option value="0255">ASTRA ELEGANCE 2.0 MPFI FLEXPOWER 8V 5P</option>
<option value="0310">ASTRA ELITE 2.0 MPFI FLEX POW. 8V 5P AUT</option>
<option value="0257">ASTRA ELITE 2.0 MPFI FLEXPOWER 8V 5P MEC</option>
<option value="0120">ASTRA GL MILENIUM 1.8 MPFI 4P</option>
<option value="0081">ASTRA GL 1.8 MPFI 3P</option>
<option value="0072">ASTRA GLS 2.0 MPFI</option>
<option value="0073">ASTRA GLS 2.0 MPFI SW</option>
<option value="0230">ASTRA GSI 2.0 16V 136CV HATCHBACK 5P</option>
<option value="0195">ASTRA S.SPORT 2.0 F.POW. 5P/SPORT 2.0 3P</option>
<option value="0329">ASTRA SED. ADVANT. 2.0 8V MPFI FLEXP. 4P</option>
<option value="0331">ASTRA SED.ADVANT. 2.0 8V MPFI FLEXP. AUT</option>
<option value="0258">ASTRA SED.COMF. 2.0 MPFI FLEXPOWER 8V 4P</option>
<option value="0313">ASTRA SED.COMF.2.0 MPFI MULTIPOWER 8V 4P</option>
<option value="0260">ASTRA SED.ELEG. 2.0 MPFI FLEXP.8V 4P AUT</option>
<option value="0259">ASTRA SED.ELEG.2.0 MPFI FLEXPOWER 8V 4P</option>
<option value="0314">ASTRA SED.ELEG.2.0 MPFI MULTIPOWER 8V 4P</option>
<option value="0262">ASTRA SED.ELITE 2.0 MPFI FLEXP.8V 4P AUT</option>
<option value="0261">ASTRA SED.ELITE 2.0 MPFI FLEXPOWER 8V 4P</option>
<option value="0263">ASTRA SEDAN COMFORT 1.8 MPFI 8V 4P</option>
<option value="0216">ASTRA SEDAN 1.8 MPFI 8V 4P (TAXI)</option>
<option value="0215">ASTRA SEDAN 2.0/ CD 2.0 MPFI 8V 4P AUT.</option>
<option value="0168">ASTRA SEDAN 2.0/CD/ EXPRES.GLS 2.0 8V 4P</option>
<option value="0083">ASTRA SEDAN 2.0/CD/ GLS/ ADV. 2.0 16V 4P</option>
<option value="0084">ASTRA SEDAN/ ASTRA GL SEDAN 1.8 MPFI 4P</option>
<option value="0232">ASTRA 2.0 8V/ CD 2.0 8V HATCHBACK 5P AUT</option>
<option value="0231">ASTRA 2.0 8V/ CD 2.0 8V HATCHBACK 5P MEC</option>
<option value="0223">ASTRA 2.0/ CD 2.0 8V 3P AUT.</option>
<option value="0169">ASTRA 2.0/ CD/ GLS 2.0 MPFI 16V 3P</option>
<option value="0082">ASTRA 2.0/ CD/ SUNNY/ GLS 2.0 8V 3P</option>
<option value="0194">ASTRA 500 SEDAN 2.0 MPFI 16V 4P</option>
<option value="0117">AVALANCHE LTZ 5.3 L 4P FLEX</option>
<option value="0158">BLAZER JIMMY 4.3 V6</option>
<option value="0159">BLAZER S-10 4.3 V6</option>
<option value="0160">BLAZER SS-10 4.3 V6</option>
<option value="0026">BONANZA S / LUXE 4.0 DIESEL TURBO</option>
<option value="0025">BONANZA S / LUXE 4.1</option>
<option value="0183">BRASINCA BLAZER CD 4.0 DIESEL</option>
<option value="0117">BRASINCA BLAZER CD 4.1</option>
<option value="0127">C-10 CD 2.5/ 4.1</option>
<option value="0128">C-10 DE LUXE CD 2.5/ 4.1</option>
<option value="0116">C-10 DE LUXE 2.5/4.1</option>
<option value="0115">C-10 2.5/4.1</option>
<option value="0131">C-20 CUSTOM DE LUXE CD 4.1</option>
<option value="0129">C-20 CUSTOM DE LUXE 4.1</option>
<option value="0132">C-20 CUSTOM STD. CD 4.1</option>
<option value="0130">C-20 CUSTOM STD. 4.1</option>
<option value="0074">CALIBRA 16V</option>
<option value="0134">CAMARO CONVERSIVEL 2LT</option>
<option value="0102">CAMARO LS 3.6 V-6(AT) 2P</option>
<option value="0107">CAMARO LT 3.6 V-6(MT) 2P</option>
<option value="0155">CAMARO RS 5.0 V8</option>
<option value="0156">CAMARO SPORT 5.0 CONV.</option>
<option value="0453">CAMARO SS CONVERSIVEL 6.2 V8 16V 406CV</option>
<option value="0371">CAMARO SS 6.2 V8 16V 406CV</option>
<option value="0111">CAMARO Z-28 TARGA/CONV. 5.7</option>
<option value="0103">CAMARO 2LS 3.6 V-6 AUT</option>
<option value="0130">CAMARO 3.6 LT COUPE V6 GASOLINA 2P AUT</option>
<option value="0002">CAMARO 6.2 SS COUPE V8 2P AUT</option>
<option value="0134">CAPRICE SW 4.3 V8</option>
<option value="0135">CAPRICE VICTORIA</option>
<option value="0133">CAPRICE 4.3 V8</option>
<option value="0377">CAPTIVA SPORT AWD 3.0 V6 24V 268CV 4X4</option>
<option value="0352">CAPTIVA SPORT AWD 3.6 V6 24V 261CV 4X4</option>
<option value="0357">CAPTIVA SPORT FWD 2.4 16V 171CV 4X2</option>
<option value="0376">CAPTIVA SPORT FWD 3.0 V6 24V 268CV 4X2</option>
<option value="0351">CAPTIVA SPORT FWD 3.6 V6 24V 261CV 4X2</option>
<option value="0027">CARAVAN COMODORO 4.1 / 2.5</option>
<option value="0028">CARAVAN DIPLOMATA 4.1 / 2.5</option>
<option value="0137">CARAVAN L/SL/S/SS 2.5/4.1/4.2</option>
<option value="0139">CAVALIER L 2.0</option>
<option value="0138">CAVALIER 3.1 CONV.</option>
<option value="0124">CELTA ADVANTAGE 1.0 8V FLEXPOWER 5P</option>
<option value="0445">CELTA ADVANTAGE 1.0 8V FLEXPOWER 5P</option>
<option value="0264">CELTA LIFE 1.0 MPFI VHC 8V 3P</option>
<option value="0266">CELTA LIFE 1.0 MPFI VHC 8V 5P</option>
<option value="0318">CELTA LIFE 1.0 MPFI 8V FLEXPOWER 3P</option>
<option value="0319">CELTA LIFE 1.0 MPFI 8V FLEXPOWER 5P</option>
<option value="0268">CELTA LIFE 1.4 MPFI 8V 85CV 3P</option>
<option value="0270">CELTA LIFE 1.4 MPFI 8V 85CV 5P</option>
<option value="0265">CELTA SPIRIT 1.0 MPFI VHC 8V 3P</option>
<option value="0267">CELTA SPIRIT 1.0 MPFI VHC 8V 5P</option>
<option value="0320">CELTA SPIRIT 1.0 MPFI 8V FLEXPOWER 3P</option>
<option value="0321">CELTA SPIRIT 1.0 MPFI 8V FLEXPOWER 5P</option>
<option value="0269">CELTA SPIRIT 1.4 MPFI 8V 85CV 3P</option>
<option value="0271">CELTA SPIRIT 1.4 MPFI 8V 85CV 5P</option>
<option value="0316">CELTA SUPER 1.0 MPFI 8V FLEXPOWER 3P</option>
<option value="0317">CELTA SUPER 1.0 MPFI 8V FLEXPOWER 5P</option>
<option value="0140">CELTA 1 0L LT FLEX 4P</option>
<option value="0227">CELTA 1.0/ SUPER 1.0 MPFI VHC 8V 5P</option>
<option value="0202">CELTA 1.0/SUPER/N.PIQ.1.0 MPFI VHC 8V 3P</option>
<option value="0235">CELTA 1.4/ SUPER/ ENERGY 1.4 8V 85CV 3P</option>
<option value="0236">CELTA 1.4/ SUPER/ ENERGY 1.4 8V 85CV 5P</option>
<option value="0030">CHEVETTE L / SL / SL/E / DL / SE 1.6</option>
<option value="0135">CHEYENNE LTZ</option>
<option value="0161">CHEYNNE 4.3 V6</option>
<option value="0450">CLASSIC ADVANTAGE 1.0 VHC FLEXPOWER 4P</option>
<option value="0360">CLASSIC/ CLASSIC LS 1.0 VHC FLEXPOWER 4P</option>
<option value="0119">COBALT ADVANTAGE 1.4 MPFI 8V F.POWER 4P</option>
<option value="0442">COBALT ADVANTAGE 1.4 MPFI 8V F.POWER 4P</option>
<option value="0120">COBALT ADVANTAGE 1.8 8V ECO.FLEX 4P AUT.</option>
<option value="0443">COBALT ADVANTAGE 1.8 8V ECO.FLEX 4P AUT.</option>
<option value="0463">COBALT GRAPHITE 1.8 8V ECONO.FLEX 4P AUT</option>
<option value="0462">COBALT GRAPHITE 1.8 8V ECONO.FLEX 4P MEC</option>
<option value="0383">COBALT LS 1.4 8V FLEXPOWER 4P</option>
<option value="0384">COBALT LT 1.4 8V FLEXPOWER 4P</option>
<option value="0419">COBALT LT 1.8 8V ECONO.FLEX 4P AUT.</option>
<option value="0418">COBALT LT 1.8 8V ECONO.FLEX 4P MEC.</option>
<option value="0385">COBALT LTZ 1.4 8V FLEXPOWER 4P</option>
<option value="0421">COBALT LTZ 1.8 8V ECONO.FLEX 4P AUT.</option>
<option value="0420">COBALT LTZ 1.8 8V ECONO.FLEX 4P MEC.</option>
<option value="0144">COLORADO REG CAB</option>
<option value="0199">CORSA FURGAO 1.6 MPFI POWERTECH 92CV</option>
<option value="0004">CORSA GL 1.6 MPFI / 1.4 EFI 2P E 4P</option>
<option value="0085">CORSA GLS 1.6 MPFI 5P</option>
<option value="0033">CORSA GSI 16V</option>
<option value="0280">CORSA HAT. JOY 1.0/ 1.0 FLEXPOWER 8V 5P</option>
<option value="0286">CORSA HAT. JOY 1.8 MPFI 8V FLEXPOWER 5P</option>
<option value="0281">CORSA HAT. MAXX 1.0/ 1.0 FLEXPOWER 8V 5P</option>
<option value="0339">CORSA HAT. MAXX 1.4 8V ECONOFLEX 5P</option>
<option value="0287">CORSA HAT. MAXX 1.8 MPFI 8V FLEXPOWER 5P</option>
<option value="0282">CORSA HAT. PREM. 1.0/1.0 FLEXPOWER 8V 5P</option>
<option value="0340">CORSA HAT. PREMIUM 1.4 8V ECONOFLEX 5P</option>
<option value="0326">CORSA HAT. SS 1.8 MPFI 8V FLEXPOWER 5P</option>
<option value="0288">CORSA HAT.PREMIUM 1.8 MPFI 8V F.POWER 5P</option>
<option value="0218">CORSA HATCHBACK 1.0 MPFI 8V 71CV 5P</option>
<option value="0233">CORSA HATCHBACK 1.8 MPFI FLEXPOWER 8V 5P</option>
<option value="0220">CORSA HATCHBACK 1.8 MPFI 8V 102CV 5P</option>
<option value="0003">CORSA PICK-UP GL/ CHAMP 1.6 MPFI / EFI</option>
<option value="0213">CORSA PICK-UP SPORT 1.6 MPFI</option>
<option value="0086">CORSA PICK-UP STD/ RODEIO 1.6 MPFI</option>
<option value="0278">CORSA SED CLAS.SPIRIT 1.6MPFI VHC 8V AUT</option>
<option value="0279">CORSA SED CLAS.SUPER 1.6MPFI VHC 8V AUT</option>
<option value="0272">CORSA SED CLASS.LIFE 1.0/1.0 FLEXPOWER</option>
<option value="0273">CORSA SED CLASS.SPIRIT 1.0/1.0 FLEXPOWER</option>
<option value="0274">CORSA SED CLASS.SUPER 1.0/1.0 FLEXPOWER</option>
<option value="0275">CORSA SED CLASSIC LIFE 1.6 MPFI VHC 8V</option>
<option value="0276">CORSA SED CLASSIC SPIRIT 1.6 MPFI VHC 8V</option>
<option value="0277">CORSA SED CLASSIC SUPER 1.6 MPFI VHC 8V</option>
<option value="0111">CORSA SED MAXX 1.4 8V ECONOFLEX</option>
<option value="0283">CORSA SED. JOY 1.0/ 1.0 FLEXPOWER 8V 4P</option>
<option value="0289">CORSA SED. JOY 1.8 MPFI 8V FLEXPOWER</option>
<option value="0284">CORSA SED. MAXX 1.0/ 1.0 FLEXPOWER 8V 4P</option>
<option value="0341">CORSA SED. MAXX 1.4 8V ECONOFLEX 4P</option>
<option value="0290">CORSA SED. MAXX 1.8 MPFI 8V FLEXPOWER</option>
<option value="0342">CORSA SED. PREMIUM 1.4 8V ECONOFLEX 4P</option>
<option value="0291">CORSA SED. PREMIUM 1.8 MPFI 8V FLEXPOWER</option>
<option value="0285">CORSA SED.PREM. 1.0/ 1.0 FLEXPOWER 8V 4P</option>
<option value="0121">CORSA SED.WIND 1.0/MILLENIUM/CLASSIC VHC</option>
<option value="0005">CORSA SEDAN GL 1.6  MPFI 4P</option>
<option value="0032">CORSA SEDAN GLS 1.6 MPFI 4P</option>
<option value="0006">CORSA SEDAN GLS 1.6 16V MPFI 4P</option>
<option value="0122">CORSA SEDAN SUPER MILENIUM 1.0 MPFI 16V</option>
<option value="0171">CORSA SEDAN SUPER 1.0 MPFI 16V 4P</option>
<option value="0080">CORSA SEDAN SUPER 1.0 MPFI 4P</option>
<option value="0208">CORSA SEDAN SUPER/ CLASSIC 1.6 MPFI 8V 4</option>
<option value="0219">CORSA SEDAN 1.0 MPFI 8V 71CV 4P</option>
<option value="0234">CORSA SEDAN 1.8 MPFI FLEXPOWER 8V 4P</option>
<option value="0221">CORSA SEDAN 1.8 MPFI 8V  102CV 4P</option>
<option value="0002">CORSA SUPER 1.0 MPFI / 2P E 4P</option>
<option value="0087">CORSA SUPER 1.0 MPFI 16V 3P</option>
<option value="0172">CORSA SUPER 1.0 MPFI 16V 5P</option>
<option value="0207">CORSA SUPER 1.6 MPFI 8V 5P</option>
<option value="0007">CORSA WAGON GL 1.6 MPFI 4P</option>
<option value="0008">CORSA WAGON GLS 1.6 16V MPFI 4P</option>
<option value="0186">CORSA WAGON GLS 1.6 8V 4P</option>
<option value="0112">CORSA WAGON SUPER 1.0 MPFI 16V</option>
<option value="0209">CORSA WAGON SUPER 1.6 MPFI 8V</option>
<option value="0203">CORSA WIND PIQUET/ CHAMP 1.0 MPFI 2P</option>
<option value="0173">CORSA WIND 1.0 MPF/MILLENIUMI/ EFI 4P</option>
<option value="0001">CORSA WIND 1.0 MPFI / EFI  2P</option>
<option value="0197">CORSA WIND 1.6 MPFI 2P</option>
<option value="0198">CORSA WIND 1.6 MPFI 4P</option>
<option value="0147">CORVETTE ZR1</option>
<option value="0140">CORVETTE 5.7/ 6.0. 6.2 CONV.</option>
<option value="0141">CORVETTE 5.7/ 6.0. 6.2 TARGA</option>
<option value="0399">CRUZE HB SPORT LT 1.8 16V FLEXP. 5P AUT</option>
<option value="0398">CRUZE HB SPORT LT 1.8 16V FLEXP. 5P MEC</option>
<option value="0401">CRUZE HB SPORT LTZ 1.8 16V FLEXP. 5P AUT</option>
<option value="0400">CRUZE HB SPORT LTZ 1.8 16V FLEXP. 5P MEC</option>
<option value="0380">CRUZE LT 1.8 16V FLEXPOWER 4P AUT.</option>
<option value="0379">CRUZE LT 1.8 16V FLEXPOWER 4P MEC.</option>
<option value="0381">CRUZE LTZ 1.8 16V FLEXPOWER 4P AUT.</option>
<option value="0184">D-10 CD DIESEL</option>
<option value="0118">D-10 DIESEL</option>
<option value="0037">D-20 CD LX S4T/TRO.PLUS/LX 3.9/4.0 TDIES</option>
<option value="0036">D-20 S / EL CAMINHO 3.9/4.0 CD T.DIES</option>
<option value="0034">D-20 S / LUXE 3.9/4.0 DIESEL</option>
<option value="0035">D-20 S / LUXE 3.9/4.0 T.DIESEL</option>
<option value="0187">D-20 S 3.9/4.0 TURBO DIESEL</option>
<option value="0142">D-20 4.0 CHAMP/CONQUEST/EL CAMINHO DIES.</option>
<option value="0127">HUMMER H3 4X4 3.7 V-6(AUT.) 4P</option>
<option value="0038">IPANEMA GL 1.8 MPFI / EFI /SL 4P</option>
<option value="0039">IPANEMA GL/ FLAIR 2.0 MPFI / EFI 4P</option>
<option value="0040">IPANEMA GLS/SLE 2.0EFI /SL/E1.8/SOL/WAVE</option>
<option value="0042">KADETT GL 2.0 MPFI / EFI</option>
<option value="0041">KADETT GL/SL/LITE/TURIM 1.8</option>
<option value="0043">KADETT GLS 1.8 EFI / SL/E 1.8</option>
<option value="0009">KADETT GLS 2.0 MPFI</option>
<option value="0044">KADETT GSI / GS 2.0</option>
<option value="0045">KADETT GSI 2.0 CONVERSIVEL</option>
<option value="0046">KADETT SPORT 2.0 MPFI / EFI</option>
<option value="0075">LUMINA</option>
<option value="0366">MALIBU LTZ 2.4 16V 171CV 4P</option>
<option value="0119">MARAJO SL/SLE/SE</option>
<option value="0408">MERIVA COLLECTION 1.4 8V ECONOFLEX 5P</option>
<option value="0355">MERIVA EXPRES.EASYTRONIC 1.8 FLEXPOWER</option>
<option value="0353">MERIVA JOY 1.4 MPFI 8V ECONOFLEX 5P</option>
<option value="0292">MERIVA JOY 1.8 MPFI 8V FLEXPOWER</option>
<option value="0354">MERIVA MAXX 1.4 MPFI 8V ECONOFLEX 5P</option>
<option value="0293">MERIVA MAXX 1.8 MPFI 8V FLEXPOWER</option>
<option value="0347">MERIVA PREM.EASYTRONIC 1.8 FLEXPOWER 5P</option>
<option value="0294">MERIVA PREMIUM 1.8 MPFI 8V FLEXPOWER</option>
<option value="0356">MERIVA SS EASYTRONIC 1.8 FLEXPOWER 5P</option>
<option value="0327">MERIVA SS 1.8 MPFI 8V FLEXPOWER 5P</option>
<option value="0242">MERIVA 1.8/ CD 1.8 MPFI FLEXPOWER 8V</option>
<option value="0229">MERIVA 1.8/ CD 1.8 MPFI 16V 122CV 5P</option>
<option value="0228">MERIVA 1.8/ CD 1.8 MPFI 8V 102CV 5P</option>
<option value="0240">MONTANA  SPORT 1.8 MPFI FLEXPOWER 8V</option>
<option value="0364">MONTANA ARENA 1.4 ECONOFLEX  8V 2P</option>
<option value="0361">MONTANA COMBO 1.4 8V ECONOFLEX</option>
<option value="0146">MONTANA ENGESIG FURGAO</option>
<option value="0422">MONTANA LS COMBO 1.4 8V ECONOFLEX 2P</option>
<option value="0370">MONTANA LS 1.4 ECONOFLEX 8V 2P</option>
<option value="0241">MONTANA OFF ROAD 1.8 MPFI FLEXPOWER 8V</option>
<option value="0365">MONTANA SPORT 1.4 ECONOFLEX 8V 2P</option>
<option value="0338">MONTANA 1.4 8V CONQUEST ECONOFLEX  2P</option>
<option value="0239">MONTANA 1.8/ 1.8 CONQUEST FLEXPOWER 8V</option>
<option value="0191">MONZA CLASS 1.8/ 2.0</option>
<option value="0051">MONZA CLASSIC SE 2.0 /MPFI E EFI 2P E 4P</option>
<option value="0048">MONZA CLASSIC/ SL/E SR 1.8</option>
<option value="0047">MONZA GL 1.8 EFI/ SL/ L/ 650/BARC. 2E4P</option>
<option value="0049">MONZA GL 2.0 EFI/SL/L/650/CLUB/BARC.2E4P</option>
<option value="0050">MONZA GLS/ HI-TECH 2.0 EFI 2P E 4P</option>
<option value="0200">MONZA SL/E SR 2.0</option>
<option value="0143">MONZA 1.6I/ 1.8I  (RESTANTE)</option>
<option value="0315">OMEGA CD 3.6 V6 24V 254/258CV</option>
<option value="0090">OMEGA CD 3.8 V6</option>
<option value="0011">OMEGA CD 4.1 / 3.0</option>
<option value="0103">OMEGA DIAMOND</option>
<option value="0052">OMEGA GL 2.0/ 2.2</option>
<option value="0010">OMEGA GLS 2.2 / 2.0</option>
<option value="0053">OMEGA GLS 4.1</option>
<option value="0451">ONIX  LOLLAPALOOZA 1.0 F.POWER 5P MEC.</option>
<option value="0460">ONIX HATCH EFFECT 1.4 8V F.POWER 5P MEC.</option>
<option value="0423">ONIX HATCH LS 1.0 8V FLEXPOWER 5P MEC.</option>
<option value="0424">ONIX HATCH LT 1.0 8V FLEXPOWER 5P MEC.</option>
<option value="0438">ONIX HATCH LT 1.4 8V FLEXPOWER 5P AUT.</option>
<option value="0425">ONIX HATCH LT 1.4 8V FLEXPOWER 5P MEC.</option>
<option value="0113">ONIX HATCH LTZ 1.4 8V FLEXPOWER 5P AUT.</option>
<option value="0439">ONIX HATCH LTZ 1.4 8V FLEXPOWER 5P AUT.</option>
<option value="0426">ONIX HATCH LTZ 1.4 8V FLEXPOWER 5P MEC.</option>
<option value="0461">ONIX HATCH SELEÇAO 1.0 8V FLEX 5P MEC.</option>
<option value="0054">OPALA COMODORO/ COMOD. SLE  4.1 / 2.5</option>
<option value="0055">OPALA DIPLOMATA/ DIPLOM. SLE 4.1 / 2.5</option>
<option value="0104">OPALA L/SL/SS/ 2.5/4.1</option>
<option value="0333">PRISMA  SED. MAXX 1.4 8V ECONOFLEX 4P</option>
<option value="0452">PRISMA SED. ADVANT. 1.0 8V FLEXPOWER 4P</option>
<option value="0466">PRISMA SED. ADVANT. 1.4 8V F.POWER AUT.</option>
<option value="0358">PRISMA SED. JOY 1.0 8V FLEXPOWER 4P</option>
<option value="0332">PRISMA SED. JOY 1.4 8V ECONOFLEX 4P</option>
<option value="0432">PRISMA SED. LT 1.0 8V FLEXPOWER 4P</option>
<option value="0433">PRISMA SED. LT 1.4 8V FLEXPOWER 4P</option>
<option value="0114">PRISMA SED. LT 1.4 8V FLEXPOWER 4P AUT.</option>
<option value="0436">PRISMA SED. LT 1.4 8V FLEXPOWER 4P AUT.</option>
<option value="0434">PRISMA SED. LTZ 1.4 8V FLEXPOWER 4P</option>
<option value="0116">PRISMA SED. LTZ 1.4 8V FLEXPOWER 4P AUT</option>
<option value="0115">PRISMA SED. LTZ 1.4 8V FLEXPOWER 4P AUT.</option>
<option value="0437">PRISMA SED. LTZ 1.4 8V FLEXPOWER 4P AUT.</option>
<option value="0359">PRISMA SED. MAXX 1.0 8V FLEXPOWER 4P</option>
<option value="0106">SATURN SL</option>
<option value="0164">SIERRA CE 5.7 V8</option>
<option value="0165">SIERRA SPORT 5.0 V8</option>
<option value="0076">SILVERADO</option>
<option value="0109">SILVERADO CONQUEST 4.1 DIESEL</option>
<option value="0110">SILVERADO CONQUEST 4.2 DIESEL TURBO</option>
<option value="0097">SILVERADO DLX 4.1</option>
<option value="0180">SILVERADO DLX 4.2 CONQUEST HD DIESEL</option>
<option value="0098">SILVERADO DLX 4.2 DIESEL</option>
<option value="0196">SILVERADO D20/ RODEIO 4.2 TB DIESEL</option>
<option value="0089">SILVERADO G. BLAZER DLX/ STD 4.2 DIES.TB</option>
<option value="0088">SILVERADO GRAND BLAZER DLX 4.1 MPFI</option>
<option value="0151">SILVERADO SPORT/ FLEET SIDE 5.7 CS</option>
<option value="0151">SILVERADO SPORT/ FLEET SIDE 5.7 CS</option>
<option value="0152">SILVERADO SPORT/FLEET SIDE 6.5 DIES. CS</option>
<option value="0214">SILVERADO TROP. SL/ VAN T.DIESEL (TODAS)</option>
<option value="0149">SILVERADO TROPICAL CD 4.1 DIESEL</option>
<option value="0148">SILVERADO TROPICAL CD 4.1 MPFI</option>
<option value="0150">SILVERADO TROPICAL CD 4.2 DIESEL</option>
<option value="0131">SILVERADO 1500 CD</option>
<option value="0094">SILVERADO 4.1</option>
<option value="0095">SILVERADO 4.1 DIESEL</option>
<option value="0096">SILVERADO 4.2 TURBO DIESEL</option>
<option value="0428">SONIC HB LT 1.6 16V FLEXPOWER 5P AUT.</option>
<option value="0402">SONIC HB LT 1.6 16V FLEXPOWER 5P MEC.</option>
<option value="0448">SONIC HB LTZ EFFECT 1.6 16V FLEXP 5P AUT</option>
<option value="0404">SONIC HB LTZ 1.6 16V FLEXPOWER 5P AUT.</option>
<option value="0403">SONIC HB LTZ 1.6 16V FLEXPOWER 5P MEC.</option>
<option value="0429">SONIC SED. LT 1.6 16V FLEXPOWER 4P AUT.</option>
<option value="0405">SONIC SED. LT 1.6 16V FLEXPOWER 4P MEC.</option>
<option value="0407">SONIC SED. LTZ 1.6 16V FLEXPOWER 4P AUT.</option>
<option value="0406">SONIC SED. LTZ 1.6 16V FLEXPOWER 4P MEC.</option>
<option value="0166">SONOMA CE 4.3 V6</option>
<option value="0107">SPACEVAN FURGAO 2.1 DIESEL</option>
<option value="0099">SPACEVAN FURGAO 2.2 .6I/ 1.6</option>
<option value="0101">SPACEVAN PASSAGEIRO 2.1DIESEL</option>
<option value="0100">SPACEVAN PASSAGEIRO 2.2</option>
<option value="0458">SPIN ACTIV 1.8 8V ECONO. FLEX 5P AUT.</option>
<option value="0459">SPIN ACTIV 1.8 8V ECONO. FLEX 5P MEC.</option>
<option value="0121">SPIN ADVANTAGE 1.8 8V ECONO.FLEX 5P AUT.</option>
<option value="0441">SPIN ADVANTAGE 1.8 8V ECONO.FLEX 5P AUT.</option>
<option value="0122">SPIN ADVANTAGE 1.8 8V ECONO.FLEX 5P MEC.</option>
<option value="0440">SPIN ADVANTAGE 1.8 8V ECONO.FLEX 5P MEC.</option>
<option value="0435">SPIN LS 1.8 8V ECONO.FLEX 5P MEC.</option>
<option value="0088">SPIN LS 1.8 8V(ECONO.FLEX) 4P</option>
<option value="0415">SPIN LT 1.8 8V ECONO.FLEX 5P AUT.</option>
<option value="0414">SPIN LT 1.8 8V ECONO.FLEX 5P MEC.</option>
<option value="0417">SPIN LTZ 1.8 8V ECONO.FLEX 5P AUT.</option>
<option value="0416">SPIN LTZ 1.8 8V ECONO.FLEX 5P MEC.</option>
<option value="0028">SSR 5.6 V8 GASOLINA</option>
<option value="0163">SS10 PICK-UP 4.3 V6</option>
<option value="0153">SUBURBAN 5.7/ 6.5 V8/ 5.3 V8</option>
<option value="0064">SUPREMA CD 4.1 / 3.0</option>
<option value="0108">SUPREMA DIAMOND</option>
<option value="0061">SUPREMA GL 2.0</option>
<option value="0062">SUPREMA GLS 2.2 / 2.0</option>
<option value="0063">SUPREMA GLS 4.1</option>
<option value="0167">SYCLONE 5.7 V8</option>
<option value="0226">S10 BLAZER  DTI 2.8 4X2 TURBO DIESEL</option>
<option value="0308">S10 BLAZER ADVANT. 2.4/2.4 MPFI F.POWER</option>
<option value="0306">S10 BLAZER COLINA 2.4/2.4 MPFI F.POWER</option>
<option value="0309">S10 BLAZER COLINA 2.8 TDI 4X4 DIESEL</option>
<option value="0019">S10 BLAZER DLX 2.2 MPFI / EFI</option>
<option value="0237">S10 BLAZER DLX 2.4 MPFI 128CV 4P</option>
<option value="0022">S10 BLAZER DLX 2.5 DIESEL TURBO</option>
<option value="0193">S10 BLAZER DLX 2.8 4X4 TB INTERC. DIESEL</option>
<option value="0020">S10 BLAZER DLX 4.3 V6</option>
<option value="0244">S10 BLAZER EXECUTIVE 2.8 4X4 TDI DIESEL</option>
<option value="0091">S10 BLAZER EXECUTIVE 4.3 V6</option>
<option value="0018">S10 BLAZER STD. 2.2 MPFI / EFI</option>
<option value="0021">S10 BLAZER STD. 2.5 DIESEL TURBO</option>
<option value="0307">S10 BLAZER TORNADO 2.4 MPFI 8V 128CV</option>
<option value="0204">S10 BLAZER 2.4 MPFI 8V 128CV 4P</option>
<option value="0190">S10 BLAZER 4.3 V6</option>
<option value="0139">S10 LTZ 2 5 ECOTEC 4X4 CD</option>
<option value="0322">S10 P-UP ADVANT. 2.4/2.4 MPFI F.POWER CD</option>
<option value="0349">S10 P-UP ADVANTAGE 2.4 MPFI F.POWER CS</option>
<option value="0302">S10 P-UP COLINA 2.4 MPFI 128CV CD 4P</option>
<option value="0311">S10 P-UP COLINA 2.4/2.4 MPFI F.POWER CS</option>
<option value="0304">S10 P-UP COLINA 2.8 TDI 4X2/4X4 CD DIES.</option>
<option value="0301">S10 P-UP COLINA 2.8 TDI 4X2/4X4 CS DIES.</option>
<option value="0350">S10 P-UP EXECUTIVE 2.4 MPFI F.POWER CD</option>
<option value="0060">S10 P-UP LUXE 2.5 4X2 CD TB MAX HST DIES</option>
<option value="0145">S10 P-UP LUXE 2.5 4X4 CD TB MAX HST DIES</option>
<option value="0177">S10 P-UP LX/SERT/ROD 2.8 4X4 CD TDI DIES</option>
<option value="0305">S10 P-UP TORNADO 2.8 TDI 4X2/4X4 CD DIES</option>
<option value="0175">S10 P-UP 2.8/SERT. 2.8 4X4 TB INT. DIES.</option>
<option value="0464">S10 PIC-UP H.COUNTRY 2.8 4X4 CD DIES.AUT</option>
<option value="0201">S10 PICK-UP BARRETOS 2.2 MPFI 2P</option>
<option value="0105">S10 PICK-UP CHAMP 4.3 V6</option>
<option value="0238">S10 PICK-UP DLX 2.4 MPFI 128CV CD 4P</option>
<option value="0300">S10 PICK-UP EXEC. 2.8 4X2 CD TB INT.DIES</option>
<option value="0217">S10 PICK-UP EXEC. 2.8 4X4 CD TB INT.DIES</option>
<option value="0146">S10 PICK-UP EXECUTIVE CD 4.3</option>
<option value="0147">S10 PICK-UP EXECUTIVE CD 4.3 4X4</option>
<option value="0465">S10 PICK-UP FREERIDE 2.5 FLEX 4X2 CD MEC</option>
<option value="0388">S10 PICK-UP LS 2.4 F.POWER 4X2 CD</option>
<option value="0386">S10 PICK-UP LS 2.4 F.POWER 4X2 CS</option>
<option value="0412">S10 PICK-UP LS 2.8 TDI 4X2 CD DIES. MEC.</option>
<option value="0411">S10 PICK-UP LS 2.8 TDI 4X2 CS DIES. MEC.</option>
<option value="0413">S10 PICK-UP LS 2.8 TDI 4X4 CD DIES. MEC.</option>
<option value="0391">S10 PICK-UP LS 2.8 TDI 4X4 CS DIESEL</option>
<option value="0389">S10 PICK-UP LT 2.4 F.POWER 4X2 CD</option>
<option value="0387">S10 PICK-UP LT 2.4 F.POWER 4X2 CS</option>
<option value="0455">S10 PICK-UP LT 2.5 FLEX 4X2 CD</option>
<option value="0456">S10 PICK-UP LT 2.5 FLEX 4X4 CD</option>
<option value="0392">S10 PICK-UP LT 2.8 TDI 4X2 CD DIESEL</option>
<option value="0393">S10 PICK-UP LT 2.8 TDI 4X2 CD DIESEL AUT</option>
<option value="0394">S10 PICK-UP LT 2.8 TDI 4X4 CD DIESEL</option>
<option value="0395">S10 PICK-UP LT 2.8 TDI 4X4 CD DIESEL AUT</option>
<option value="0390">S10 PICK-UP LTZ 2.4 F.POWER 4X2 CD</option>
<option value="0454">S10 PICK-UP LTZ 2.5 FLEX 4X2 CD</option>
<option value="0457">S10 PICK-UP LTZ 2.5 FLEX 4X4 CD</option>
<option value="0410">S10 PICK-UP LTZ 2.8 TDI 4X2 CD DIES. MEC</option>
<option value="0396">S10 PICK-UP LTZ 2.8 TDI 4X2 CD DIES.AUT</option>
<option value="0397">S10 PICK-UP LTZ 2.8 TDI 4X4 CD DIES.AUT</option>
<option value="0056">S10 PICK-UP LUXE 2.2 EFI CD</option>
<option value="0013">S10 PICK-UP LUXE 2.2 MPFI / EFI</option>
<option value="0015">S10 PICK-UP LUXE 2.2 MPFI/EFI CE</option>
<option value="0059">S10 PICK-UP LUXE 2.5 CE TB DIESEL</option>
<option value="0058">S10 PICK-UP LUXE 2.5 DIESEL TURBO</option>
<option value="0176">S10 PICK-UP LUXE 2.8 4X2 CD TB INT.DIES.</option>
<option value="0014">S10 PICK-UP LUXE 4.3 V6</option>
<option value="0017">S10 PICK-UP LUXE 4.3 V6 CD</option>
<option value="0016">S10 PICK-UP LUXE 4.3 V6 CE</option>
<option value="0367">S10 PICK-UP RODEIO 2.4 MPFI F.POWER CD</option>
<option value="0368">S10 PICK-UP RODEIO 2.8 TDI 4X2 CD DIES.</option>
<option value="0369">S10 PICK-UP RODEIO 2.8 TDI 4X4 CD DIES.</option>
<option value="0178">S10 PICK-UP STD 2.8 4X2 CD TB INT.DIES.</option>
<option value="0101">S10 PICK-UP STD 2.8 4X4 CD DIESEL</option>
<option value="0179">S10 PICK-UP STD 2.8 4X4 CD TB INT.DIES.</option>
<option value="0012">S10 PICK-UP STD. 2.2 MPFI / EFI</option>
<option value="0092">S10 PICK-UP STD. 2.2 MPFI CD</option>
<option value="0057">S10 PICK-UP STD. 2.5 DIESEL TURBO</option>
<option value="0303">S10 PICK-UP TORNADO 2.4 MPFI 128CV CD 4P</option>
<option value="0206">S10 PICK-UP 2.4 MPFI 8V 128CV CD 4P</option>
<option value="0205">S10 PICK-UP 2.4 MPFI 8V 128CV/ RODEIO</option>
<option value="0093">S10 PICK-UP 2.5 4X2 CD TB MAX HST DIES</option>
<option value="0144">S10 PICK-UP 2.5 4X4 CD TB MAX HST DIES.</option>
<option value="0174">S10 PICK-UP 2.8 4X2 TURBO INTERC. DIES.</option>
<option value="0162">S10 PICK-UP 4.3 V6</option>
<option value="0123">TIGRA POWER TECH COUPE 1.6 SFI</option>
<option value="0102">TIGRA 1.6 16V</option>
<option value="0449">TRACKER FREERIDE 1.8 16V FLEX 4X2 MEC.</option>
<option value="0125">TRACKER FREERIDE 1.8 4X2 16V 5L</option>
<option value="0123">TRACKER LTZ 1.8 AT</option>
<option value="0444">TRACKER LTZ 1.8 16V FLEX 4X2 AUT.</option>
<option value="0334">TRACKER 2.0 16V 128CV MPFI 4X4 5P</option>
<option value="0210">TRACKER 2.0 4X4 TB INT. DIESEL 4P</option>
<option value="0077">TRAFIC CHASSI LONGO DIESEL</option>
<option value="0431">TRAILBLAZER LTZ 2.8 CTDI DIESEL AUT.</option>
<option value="0430">TRAILBLAZER LTZ 3.6 V6 VVT AUT.</option>
<option value="0068">VECTRA CD 2.0 (MODELO ANTIGO)</option>
<option value="0067">VECTRA CD 2.2 16V / 2.0 16V MEC./AUT.</option>
<option value="0378">VECTRA COLLECTION 2.0 FLEXPOWER 8V AUT.</option>
<option value="0295">VECTRA COMFORT 2.0 MPFI</option>
<option value="0324">VECTRA ELEGAN. 2.0 MPFI 8V FLEXPOWER AUT</option>
<option value="0323">VECTRA ELEGAN. 2.0 MPFI 8V FLEXPOWER MEC</option>
<option value="0296">VECTRA ELEGANCE 2.0 MPFI</option>
<option value="0298">VECTRA ELEGANCE 2.2 MPFI 16V AUT.</option>
<option value="0297">VECTRA ELITE 2.0 MPFI</option>
<option value="0348">VECTRA ELITE 2.0 MPFI 8V FLEXPOWER AUT.</option>
<option value="0299">VECTRA ELITE 2.2 MPFI 16V AUT.</option>
<option value="0325">VECTRA ELITE 2.4 MPFI 16V FLEXPOWER AUT.</option>
<option value="0243">VECTRA EXPRES./ COLLECTION  2.0 MPFI 8V</option>
<option value="0337">VECTRA EXPRESSION 2.0 MPFI FLEXPOWER AUT</option>
<option value="0336">VECTRA EXPRESSION 2.0 MPFI FLEXPOWER MEC</option>
<option value="0065">VECTRA GL 2.2 / 2.0 MPFI</option>
<option value="0181">VECTRA GL 2.2 MPFI MILENIUM</option>
<option value="0182">VECTRA GLS/ CHALLENGE 2.2 MPFI 16V</option>
<option value="0066">VECTRA GLS/EXPRES.2.2/ 2.0 E 2.0 CD 8V</option>
<option value="0069">VECTRA GSI 2.0 16V (MODELO ANTIGO)</option>
<option value="0344">VECTRA GT 2.0 MPFI 8V FLEXPOWER AUT.</option>
<option value="0343">VECTRA GT 2.0 MPFI 8V FLEXPOWER MEC.</option>
<option value="0346">VECTRA GT-X 2.0 MPFI 8V FLEXPOWER AUT.</option>
<option value="0345">VECTRA GT-X 2.0 MPFI 8V FLEXPOWER MEC.</option>
<option value="0070">VERANEIO S / LUXE 4.1</option>
<option value="0071">VERANEIO S/ LUXE 4.0 DIES./TB DIES.</option>
<option value="0409">ZAFIRA COLLECTION 2.0 FLEXPOWER 8V AUT.</option>
<option value="0245">ZAFIRA COMFORT 2.0 MPFI FLEXPOWER 8V 5P</option>
<option value="0247">ZAFIRA ELEG.2.0 MPFI FLEXPOWER 8V 5P AUT</option>
<option value="0246">ZAFIRA ELEGANCE 2.0 MPFI FLEXPOWER 8V 5P</option>
<option value="0250">ZAFIRA ELEGANCE 2.0 MPFI 16V 136CV 5P</option>
<option value="0249">ZAFIRA ELITE 2.0 MPFI FLEXPOWER 8V  AUT</option>
<option value="0248">ZAFIRA ELITE 2.0 MPFI FLEXPOWER 8V 5P</option>
<option value="0251">ZAFIRA ELITE 2.0 MPFI 16V 136CV 5P</option>
<option value="0335">ZAFIRA EXPRES. 2.0 MPFI FLEXPOWER 5P AUT</option>
<option value="0211">ZAFIRA 2.0/ CD 2.0  8V  MPFI 5P MEC.</option>
<option value="0212">ZAFIRA 2.0/ CD 2.0 16V  MPFI 5P</option>
<option value="0222">ZAFIRA 2.0/ CD 2.0 8V MPFI 5P AUT.</option>











<!--<option value="09118">FORD</option>-->

















<option value="0118">AEROSTAR MINI-VAN 3.8</option>
<option value="0152">ASPIRE 1.3</option>
<option value="0119">CLUB WAGON V8</option>
<option value="0120">CLUB WAGON XLT 4.9 V6</option>
<option value="0121">CONTOUR SE/ GL/ LX  2.0 16V</option>
<option value="0122">CONTOUR SE/GL/ LX 2.5 24V</option>
<option value="0002">COURIER CLX 1.4I 16V</option>
<option value="0003">COURIER SI 1.4I 16V</option>
<option value="0231">COURIER SPORT 1.6 8V</option>
<option value="0312">COURIER VAN 1.6/ 1.6 FLEX 8V  ( CARGA )</option>
<option value="0140">COURIER XL/XL-RS 1.6/ XL 1.6 FLEX</option>
<option value="0001">COURIER 1.3I/FURGAO</option>
<option value="0139">COURIER 1.6 L/ 1.6 FLEX</option>
<option value="0367">ECOSPORT FREESTYLE 1.6 16V FLEX 5P</option>
<option value="0420">ECOSPORT FREESTYLE 1.6 16V FLEX 5P AUT.</option>
<option value="0369">ECOSPORT FREESTYLE 2.0 16V FLEX 5P</option>
<option value="0407">ECOSPORT FREESTYLE 2.0 16V FLEX 5P AUT.</option>
<option value="0391">ECOSPORT FREESTYLE 2.0 16V 4WD FLEX 5P</option>
<option value="0365">ECOSPORT S 1.6 16V FLEX 5P</option>
<option value="0366">ECOSPORT SE 1.6 16V FLEX 5P</option>
<option value="0419">ECOSPORT SE 1.6 16V FLEX 5P AUT.</option>
<option value="0373">ECOSPORT SE 2.0 16V FLEX 5P AUT.</option>
<option value="0368">ECOSPORT TITANIUM 1.6 16V FLEX 5P</option>
<option value="0370">ECOSPORT TITANIUM 2.0 16V FLEX 5P</option>
<option value="0374">ECOSPORT TITANIUM 2.0 16V FLEX 5P AUT.</option>
<option value="0267">ECOSPORT XL SUPERCHARGER 1.0 8V 95CV 5P</option>
<option value="0268">ECOSPORT XL 1.6/ 1.6 FLEX 8V 5P</option>
<option value="0303">ECOSPORT XLS FREESTYLE 1.6 FLEX 8V 5P</option>
<option value="0269">ECOSPORT XLS 1.6/ 1.6 FLEX 8V 5P</option>
<option value="0319">ECOSPORT XLS 2.0/2.0 FLEX 16V 5P AUT.</option>
<option value="0318">ECOSPORT XLT FREESTYLE 1.6 FLEX 8V 5P</option>
<option value="0330">ECOSPORT XLT FREESTYLE 2.0 FLEX 16V 5P</option>
<option value="0270">ECOSPORT XLT 1.6/ 1.6 FLEX 8V 5P</option>
<option value="0320">ECOSPORT XLT 2.0/ 2.0 FLEX 16V 5P AUT.</option>
<option value="0271">ECOSPORT XLT 2.0/ 2.0 FLEX 16V 5P MEC.</option>
<option value="0285">ECOSPORT 4WD 2.0/ 2.0 FLEX 16V 5P</option>
<option value="0352">EDGE LIMITED 3.5 V6 24V FWD AUT.</option>
<option value="0344">EDGE LIMITED 3.5 V6 24V 289CV AWD AUT.</option>
<option value="0353">EDGE SEL 3.5 V6  24V FWD AUT.</option>
<option value="0329">EDGE SEL 3.5 V6 24V 269CV AWD AUT.</option>
<option value="0123">ESCORT  RACER 2.0I</option>
<option value="0035">ESCORT GHIA 1.8I / 1.8 / 1.6</option>
<option value="0036">ESCORT GHIA 2.0I / 2.0</option>
<option value="0207">ESCORT GL 1.6 MPI</option>
<option value="0030">ESCORT GL 1.6I / 1.6</option>
<option value="0031">ESCORT GL 1.8I / 1.8</option>
<option value="0004">ESCORT GL 1.8I 16V 3P</option>
<option value="0005">ESCORT GL 1.8I 16V 4P</option>
<option value="0032">ESCORT GLX 1.6I</option>
<option value="0007">ESCORT GLX 1.8I 16V 4P</option>
<option value="0033">ESCORT GLX 1.8I 8V</option>
<option value="0034">ESCORT GUARUJA 1.8 4P</option>
<option value="0026">ESCORT HOBBY 1.0</option>
<option value="0027">ESCORT HOBBY 1.6</option>
<option value="0029">ESCORT L 1.8I / 1.8</option>
<option value="0028">ESCORT L/LX 1.6</option>
<option value="0095">ESCORT RS 1.8I 16V</option>
<option value="0006">ESCORT S.W GL 1.8I 16V</option>
<option value="0008">ESCORT S.W. GLX 1.8I 16V</option>
<option value="0208">ESCORT SW GL 1.6 MPI</option>
<option value="0230">ESCORT SW 1.9 16V</option>
<option value="0038">ESCORT XR3 1.8 / 1.6 BENETON/FORM./LASER</option>
<option value="0039">ESCORT XR3 1.8 / 1.6 CONVERSIVEL</option>
<option value="0040">ESCORT XR3 2.0I</option>
<option value="0041">ESCORT XR3 2.0I CONVERSIVEL</option>
<option value="0154">EXPEDITION 5.4 V8</option>
<option value="0290">EXPLORER LIMITED 4.0 4X4 V6 213CV</option>
<option value="0138">EXPLORER LIMITED 5.0 4X4 V8</option>
<option value="0157">EXPLORER SPORT 4.0 V6</option>
<option value="0155">EXPLORER XL 4X2 4.0 V6</option>
<option value="0156">EXPLORER XL 4X4 4.0 V6</option>
<option value="0073">EXPLORER XLT 4X2 4.0 V6</option>
<option value="0074">EXPLORER XLT 4X4 4.0 V6</option>
<option value="0689">F 150 SS CREW 4X2</option>
<option value="0671">F 150 SVT RAPTOR</option>
<option value="0186">F-100 BLAZER 2.3</option>
<option value="0187">F-100 CD 2.3</option>
<option value="0189">F-100 SUPER SERIE 2.3</option>
<option value="0188">F-100 SUPER 2.3</option>
<option value="0185">F-100 2.3</option>
<option value="0162">F-1000 CD/BLAZER 3.6</option>
<option value="0163">F-1000 CD/BLAZER 3.9 DIES.</option>
<option value="0164">F-1000 LIGHTNING/ SUPER 4.9I</option>
<option value="0009">F-1000 REGULAR CAB. 4.9I</option>
<option value="0048">F-1000 S. S. DIESEL / S.S. DIESEL TURBO</option>
<option value="0124">F-1000 SR XK  DESERTER DIESEL</option>
<option value="0222">F-1000 SR XK DESERTER</option>
<option value="0043">F-1000 SUPER CE 4.9I / 3.6</option>
<option value="0046">F-1000 SUPER DIESEL / SUPER DIESEL TURBO</option>
<option value="0045">F-1000 SUPER DIESEL CE 3.9</option>
<option value="0047">F-1000 SUPER SERIE CE DIESEL 3.9</option>
<option value="0044">F-1000 SUPER SERIE CE 4.9I / 3.6</option>
<option value="0042">F-1000 SUPER 3.6 / SUPER SERIE 3.6</option>
<option value="0049">F-1000 SUPER/ S.SERIE 4X4 3.9 DIESEL</option>
<option value="0165">F-1000 TROPICAL CD 2.5 HSD/4.3 DIESEL TB</option>
<option value="0166">F-1000 TROPICAL CD 4.9I</option>
<option value="0241">F-1000 TROPICAL SL/ VAN T.DIESEL (TODAS)</option>
<option value="0243">F-1000 TROPICAL SL/ VAN 4.9I</option>
<option value="0012">F-1000 XL DIESEL TURBO</option>
<option value="0167">F-1000 XL 2.5 HSD DIESEL TB</option>
<option value="0199">F-1000 XL 4.9I</option>
<option value="0010">F-1000 XL 4.9I CE</option>
<option value="0014">F-1000 XL 4X4 DIESEL TURBO</option>
<option value="0197">F-1000 XLT CE 4.9I</option>
<option value="0013">F-1000 XLT DIESEL TURBO</option>
<option value="0168">F-1000 XLT 2.5 HSD DIESEL TB</option>
<option value="0015">F-1000 XLT 4X4 DIESEL TURBO</option>
<option value="0011">F-1000 XLT/XL LIGHTING 4.9I</option>
<option value="0635">F-150 HARLEY-DAVIDSON 4X4 5.4 V8 4P</option>
<option value="0126">F-150 XL TRITON 4.3 V6</option>
<option value="0159">F-150 XLT TRITON 4.3</option>
<option value="0217">F-150 XLT TRITON 4.6 V8</option>
<option value="0160">F-150 XLT TRITON 5.8</option>
<option value="0338">F-250 F-MILHA CD 3.9 TB DIESEL</option>
<option value="0640">F-250 GALAXI CD 4.2 TURBO DIESEL</option>
<option value="0313">F-250 TROPICAB CE 3.9 TB DIESEL</option>
<option value="0242">F-250 TROPICAL SL/ VAN T.DIESEL (TODAS)</option>
<option value="0170">F-250 TROPICAL 3.9 DIESEL</option>
<option value="0172">F-250 TROPICAL 4.2 CE / CD DIESEL TB</option>
<option value="0171">F-250 TROPICAL 4.2 V6</option>
<option value="0314">F-250 TROPICAMPO CD 3.9 TB DIESEL</option>
<option value="0355">F-250 TROPICAMPO EXECUTIVE 3.9 TB DIESEL</option>
<option value="0315">F-250 TROPICLASSIC 3.9 TB DIESEL</option>
<option value="0316">F-250 TROPIVAN EXECUTIVE 3.9 TB DIESEL</option>
<option value="0317">F-250 TROPIVAN/TROPI. PLUS 3.9 TB DIESEL</option>
<option value="0142">F-250 XL SUPER DUTY 3.9 DIESEL</option>
<option value="0272">F-250 XL SUPER DUTY 4.2 TB DIESEL</option>
<option value="0141">F-250 XL SUPER DUTY 4.2 V6</option>
<option value="0306">F-250 XL 3.9 CD TB DIESEL</option>
<option value="0115">F-250 XL 3.9 4X2 DIESEL</option>
<option value="0305">F-250 XL 3.9 4X4 TB DIESEL</option>
<option value="0198">F-250 XL 4.2 TURBO DIESEL</option>
<option value="0114">F-250 XL 4.2 V6</option>
<option value="0279">F-250 XL 4.2 180CV CD TB DIESEL</option>
<option value="0308">F-250 XLT 3.9 4X2 CD TB DIESEL</option>
<option value="0117">F-250 XLT 3.9 4X2 DIESEL TB</option>
<option value="0309">F-250 XLT 3.9 4X4 CD TB DIESEL</option>
<option value="0307">F-250 XLT 3.9 4X4 TB DIESEL</option>
<option value="0206">F-250 XLT 4.2 TB DIESEL</option>
<option value="0116">F-250 XLT 4.2 V6</option>
<option value="0280">F-250 XLT 4.2 180CV CD TB DIESEL</option>
<option value="0200">FIESTA CLASS 1.0 2P</option>
<option value="0201">FIESTA CLASS 1.0 4P</option>
<option value="0261">FIESTA CLASS 1.6 8V 98CV 5P</option>
<option value="0052">FIESTA CLX 1.3I 3P</option>
<option value="0053">FIESTA CLX 1.3I 5P</option>
<option value="0017">FIESTA CLX 1.4I 16V 3P E 5P</option>
<option value="0096">FIESTA GL CLASS 1.0I 5P</option>
<option value="0143">FIESTA GL 1.0 3P</option>
<option value="0192">FIESTA GL 1.0 5P</option>
<option value="0144">FIESTA GLX 1.6 8V 3P</option>
<option value="0193">FIESTA GLX 1.6 8V 5P</option>
<option value="0690">FIESTA HA 1 6 SE AT</option>
<option value="0259">FIESTA PERSONNALITE 1.0 8V 66CV 5P</option>
<option value="0380">FIESTA S 1.0 8V FLEX 5P</option>
<option value="0381">FIESTA SE 1.0 8V FLEX 5P</option>
<option value="0637">FIESTA SE 1.6 FLEX 16V 4P</option>
<option value="0351">FIESTA SE 1.6 16V FLEX 5P</option>
<option value="0382">FIESTA SE 1.6 8V FLEX 5P</option>
<option value="0287">FIESTA SED. PERSONNALITE 1.0 8V 4P</option>
<option value="0288">FIESTA SED. SUPERCHARGER 1.0 8V 4P</option>
<option value="0289">FIESTA SED. 1.6 8V FLEX 4P</option>
<option value="0383">FIESTA SEDAN S 1.0 8V FLEX 4P</option>
<option value="0384">FIESTA SEDAN SE 1.0 8V FLEX 4P</option>
<option value="0340">FIESTA SEDAN SE 1.6 16V FLEX 4P</option>
<option value="0385">FIESTA SEDAN SE 1.6 8V FLEX 4P</option>
<option value="0245">FIESTA SEDAN STREET 1.0 8V 4P</option>
<option value="0246">FIESTA SEDAN STREET 1.6 8V 4P</option>
<option value="0400">FIESTA SEDAN TITANIUM 1.6 16V FLEX AUT.</option>
<option value="0649">FIESTA SEDAN TITANIUM 1.6 16V FLEX AUT.</option>
<option value="0399">FIESTA SEDAN TITANIUM 1.6 16V FLEX MEC</option>
<option value="0650">FIESTA SEDAN TITANIUM 1.6 16V FLEX MEC</option>
<option value="0311">FIESTA SEDAN 1.0 8V FLEX 4P</option>
<option value="0398">FIESTA SEDAN 1.6 16V FLEX AUT.</option>
<option value="0647">FIESTA SEDAN 1.6 16V FLEX AUT.</option>
<option value="0397">FIESTA SEDAN 1.6 16V FLEX MEC.</option>
<option value="0648">FIESTA SEDAN 1.6 16V FLEX MEC.</option>
<option value="0219">FIESTA SPORT 1.0MPI 4P</option>
<option value="0416">FIESTA SPORT 1.6 16V FLEX MEC.</option>
<option value="0221">FIESTA SPORT 1.6MPI 4P</option>
<option value="0229">FIESTA STREET 1.0 8V 3P</option>
<option value="0256">FIESTA STREET 1.6 8V 95CV 5P</option>
<option value="0244">FIESTA STREET/ ACTION 1.0 8V 5P</option>
<option value="0260">FIESTA SUPERCHARGER 1.0 8V 95CV 5P</option>
<option value="0390">FIESTA TITANIUM 1.6 16V FLEX AUT.</option>
<option value="0389">FIESTA TITANIUM 1.6 16V FLEX MEC.</option>
<option value="0322">FIESTA TRAIL 1.0 8V FLEX 5P</option>
<option value="0323">FIESTA TRAIL 1.6 8V FLEX 5P</option>
<option value="0310">FIESTA 1.0 8V FLEX 5P</option>
<option value="0651">FIESTA 1.0 8V 5P</option>
<option value="0016">FIESTA 1.0I 3P E 5P</option>
<option value="0075">FIESTA 1.3  3P E 5P</option>
<option value="0386">FIESTA 1.5 16V FLEX MEC.</option>
<option value="0388">FIESTA 1.6 16V FLEX AUT.</option>
<option value="0387">FIESTA 1.6 16V FLEX MEC.</option>
<option value="0286">FIESTA 1.6 8V FLEX 5P</option>
<option value="0417">FOCUS FASTBACK SE/SE PLUS 2.0 FLEX AUT.</option>
<option value="0418">FOCUS FASTBACK TIT./T.PLUS 2.0 FLEX AUT.</option>
<option value="0266">FOCUS GHIA  2.0 16V/ 2.0 16V FLEX 5P AUT</option>
<option value="0226">FOCUS GHIA SED. 2.0 16V/ 2.0 16V FLEX 4P</option>
<option value="0262">FOCUS GHIA SED. 2.0 16V/2.0 16V FLEX AUT</option>
<option value="0227">FOCUS GHIA/ XR 2.0 /GHIA 2.0 16V FLEX 5P</option>
<option value="0680">FOCUS SE AT 2 0 H</option>
<option value="0655">FOCUS SE AT 2.0 H</option>
<option value="0663">FOCUS SEDAN AT 1 6 S</option>
<option value="0348">FOCUS SEDAN TITANIUM 2.0 16V FLEX  AUT</option>
<option value="0284">FOCUS SEDAN 1.6/ 1.6 FLEX 8V/16V  4P</option>
<option value="0265">FOCUS SEDAN 1.8 16V 115CV 4P</option>
<option value="0225">FOCUS SEDAN 2.0 16V/ 2.0 16V FLEX 4P</option>
<option value="0282">FOCUS SEDAN 2.0 16V/ 2.0 16V FLEX 4P AUT</option>
<option value="0347">FOCUS TITANIUM 2.0 16V FLEX 5P AUT.</option>
<option value="0346">FOCUS TITANIUM 2.0 16V FLEX 5P MEC.</option>
<option value="0404">FOCUS 1.6 FLEX 16V 5P AUT</option>
<option value="0654">FOCUS 1.6 FLEX 16V 5P AUT</option>
<option value="0281">FOCUS 1.6/ 1.6 FLEX 8V/16V  5P</option>
<option value="0224">FOCUS 1.8 16V 5P</option>
<option value="0228">FOCUS 2.0 16V/ 2.0 16V FLEX 5P</option>
<option value="0283">FOCUS 2.0 16V/ 2.0 16V FLEX 5P AUT.</option>
<option value="0175">FURGLAINE CHATEAUX/EXEC. 3.9 DIESEL</option>
<option value="0173">FURGLAINE 3.6</option>
<option value="0174">FURGLAINE 3.9 DIESEL</option>
<option value="0345">FUSION HYBRID 2.5 16V 193CV AUT.</option>
<option value="0304">FUSION SEL 2.3 16V  162CV AUT.</option>
<option value="0335">FUSION SEL 2.5 16V 173CV AUT.</option>
<option value="0349">FUSION SEL 3.0 V6  24V 243CV AUT.</option>
<option value="0336">FUSION SEL 3.0 V6 AMD 24V 243CV AUT.</option>
<option value="0402">FUSION TITANIUM HYBRID 2.0 145CV AUT.</option>
<option value="0653">FUSION TITANIUM HYBRID 2.0 145CV AUT.</option>
<option value="0376">FUSION TITANIUM 2.0 GTDI ECOBO. AWD AUT</option>
<option value="0377">FUSION TITANIUM 2.0 GTDI ECOBO. FWD AUT.</option>
<option value="0378">FUSION 2.5L I-VCT FLEX AUT.</option>
<option value="0177">IBIZA CHAT./EXEC. 3.9 DIESEL</option>
<option value="0176">IBIZA 3.9 FURGAO DIESEL</option>
<option value="0264">KA ACTION 1.6 MPI 8V 95CV</option>
<option value="0233">KA BLACK 1.0 MPI 8V 65CV</option>
<option value="0234">KA BLACK 1.6 MPI 8V 95CV</option>
<option value="0019">KA CLX 1.3I 3P</option>
<option value="0161">KA GL IMAGE 1.0I/ 1.0I ZETEC ROCAM</option>
<option value="0145">KA GL 1.0I ZETEC ROCAM</option>
<option value="0098">KA IMAGE 1.0I</option>
<option value="0301">KA MP3 1.0 MPI 8V 65CV</option>
<option value="0302">KA MP3 1.6 MPI 8V 95CV</option>
<option value="0662">KA SE 1 0</option>
<option value="0411">KA SEL 1.5 16V FLEX 5P</option>
<option value="0350">KA SPORT 1.6 8V FLEX 3P</option>
<option value="0097">KA STREET 1.0I</option>
<option value="0169">KA TECNO 1.0I 8V ZETEC ROCAM</option>
<option value="0232">KA XR 1.6 MPI 8V</option>
<option value="0409">KA 1.0 SEL TICVT FLEX 5P</option>
<option value="0327">KA 1.0 TECNO 8V FLEX 3P</option>
<option value="0408">KA 1.0 TICVT FLEX 5P</option>
<option value="0325">KA 1.0 8V FLEX 3P</option>
<option value="0018">KA 1.0I 3P</option>
<option value="0410">KA 1.5 16V FLEX 5P</option>
<option value="0328">KA 1.6 TECNO 8V FLEX 3P</option>
<option value="0326">KA 1.6 8V FLEX 3P</option>
<option value="0413">KA+ SEDAN 1.0 SEL TICVT FLEX 4P</option>
<option value="0412">KA+ SEDAN 1.0 TICVT FLEX 4P</option>
<option value="0415">KA+ SEDAN 1.5 SEL 16V FLEX 4P</option>
<option value="0414">KA+ SEDAN 1.5 16V FLEX 4P</option>
<option value="0076">MONDEO CLX 1.8 4P E 5P</option>
<option value="0077">MONDEO CLX 1.8I SW</option>
<option value="0195">MONDEO CLX 2.0I SW AUT</option>
<option value="0079">MONDEO CLX 2.0I SW MEC</option>
<option value="0194">MONDEO CLX 2.0I 4P AUT</option>
<option value="0078">MONDEO CLX 2.0I 4P MEC</option>
<option value="0258">MONDEO GHIA 2.0 16V 143CV 4P AUT</option>
<option value="0257">MONDEO GHIA 2.0 16V 143CV 4P MEC</option>
<option value="0104">MONDEO GHIA 2.5 V6 AUT</option>
<option value="0103">MONDEO GHIA 2.5 V6 MEC</option>
<option value="0223">MONDEO GLX 2.0 16V 4P AUT</option>
<option value="0080">MONDEO GLX 2.0 4P E 5P</option>
<option value="0082">MONDEO GLX 2.0I SW MEC./ AUT.</option>
<option value="0190">MUSTANG COBRA 5.7 V8</option>
<option value="0681">MUSTANG COUPE SHELBY COBRA GT 500 5 8 67</option>
<option value="0083">MUSTANG GT V8</option>
<option value="0084">MUSTANG GT V8 CONVERSIVEL</option>
<option value="0661">MUSTANG SHELBY GT 5400CC</option>
<option value="0641">MUSTANG V6 COUPE 4.0 213CV MEC</option>
<option value="0575">MUSTANG V6 PREMIUM</option>
<option value="0676">MUSTANG V6 PREMIUM 2P</option>
<option value="0565">MUSTANG V6 3.7</option>
<option value="0618">MUSTANG 3.7 CONVERSIVEL V6 TI-VCT 2P AUT</option>
<option value="0179">MUSTANG 3.8 V6</option>
<option value="0180">MUSTANG 3.8 V6 CONV.</option>
<option value="0622">MUSTANG 4.0 CONVERSIVEL V6 12V 2P</option>
<option value="0660">MUSTANG 4.0 V6 AUTOMATICO</option>
<option value="0675">MUSTANG 5 0 GT BOSS 302</option>
<option value="0620">MUSTANG 5.4 SHELBY GT 500 CONVERSIVEL</option>
<option value="0624">NEW FIESTA SE 1.5 FLEX 16V 4P</option>
<option value="0625">NEW FIESTA SE 1.6 FLEX 16V 4P</option>
<option value="0056">PAMPA GL 1.6/ 1.8</option>
<option value="0182">PROBE GT 2.5 V6</option>
<option value="0125">PROBE 2.0/2.2</option>
<option value="0645">RANGER  XLT 2.5 4X2 CD</option>
<option value="0337">RANGER LIMITED 2.3 150CV CD</option>
<option value="0359">RANGER LIMITED 2.5 16V 4X2 CD</option>
<option value="0296">RANGER LIMITED 3.0 PSE 4X4 CD TB DIESEL</option>
<option value="0604">RANGER LIMITED 3.2 20V 4X4 CD AUT.</option>
<option value="0364">RANGER LIMITED 3.2 20V 4X4 CD AUT. DIES.</option>
<option value="0364">RANGER LIMITED 3.2 20V 4X4 CD AUT. DIES.</option>
<option value="0220">RANGER SPLASH CE</option>
<option value="0089">RANGER SPLASH CS</option>
<option value="0406">RANGER SPORT 2.5 FLEX 16V 4X2 CS</option>
<option value="0090">RANGER STX 4.0 CS/ CE</option>
<option value="0396">RANGER TROPICAB 2.5 16V 4X2 FLEX</option>
<option value="0395">RANGER TROPICAB 3.2 20V 4X4 TB DIESEL</option>
<option value="0341">RANGER TROPIVAN XLT 2.3 16V 150CV</option>
<option value="0342">RANGER TROPIVAN XLT 3.0 PSE 4X2 TB DIES.</option>
<option value="0343">RANGER TROPIVAN XLT 3.0 PSE 4X4 TB DIES.</option>
<option value="0394">RANGER TROPIVAN 2.5 16V 4X2 FLEX</option>
<option value="0393">RANGER TROPIVAN 3.2 20V 4X4 TB DIES.AUT.</option>
<option value="0392">RANGER TROPIVAN 3.2 20V 4X4 TB DIESEL</option>
<option value="0658">RANGER XL CD 2.5 4X2</option>
<option value="0607">RANGER XL CD 4X4 2.2 4P</option>
<option value="0673">RANGER XL CD4 2 2</option>
<option value="0659">RANGER XL CS 4X4 2.2</option>
<option value="0608">RANGER XL CS 4X4 2.2 2P</option>
<option value="0436">RANGER XL 13D</option>
<option value="0679">RANGER XL 2 2 CS 4X4 DIESEL</option>
<option value="0085">RANGER XL 2.3 CS</option>
<option value="0237">RANGER XL 2.3 16V 137CV 4X2 CD REPOWER.</option>
<option value="0236">RANGER XL 2.3 16V 137CV 4X2 CE REPOWER.</option>
<option value="0235">RANGER XL 2.3 16V 137CV 4X2 CS REPOWER.</option>
<option value="0254">RANGER XL 2.8 8V 135CV 4X2 CD TB DIESEL</option>
<option value="0249">RANGER XL 2.8 8V 135CV 4X2 CE TB DIESEL</option>
<option value="0247">RANGER XL 2.8 8V 135CV 4X2 CS TB DIESEL</option>
<option value="0255">RANGER XL 2.8 8V 135CV 4X4 CD TB DIESEL</option>
<option value="0250">RANGER XL 2.8 8V 135CV 4X4 CE TB DIESEL</option>
<option value="0248">RANGER XL 2.8 8V 135CV 4X4 CS TB DIESEL</option>
<option value="0298">RANGER XL 3.0 PSE 163CV 4X2 CD TB DIESEL</option>
<option value="0299">RANGER XL 3.0 PSE 163CV 4X2 CS TB DIESEL</option>
<option value="0300">RANGER XL 3.0 PSE 163CV 4X4 CD TB DIESEL</option>
<option value="0297">RANGER XL 3.0 PSE 163CV 4X4 CS TB DIESEL</option>
<option value="0086">RANGER XL 4.0 CS</option>
<option value="0238">RANGER XL 4.0 12V V6 210CV 4X2 CS REPOW.</option>
<option value="0324">RANGER XLS SPORT 2.3 16V 150CV CS</option>
<option value="0656">RANGER XLS 2.2 CD DIESEL 4X4</option>
<option value="0405">RANGER XLS 2.2 4X4 CD DIESEL MEC.</option>
<option value="0276">RANGER XLS 2.3 16V 145CV/150CV 4X2 CD</option>
<option value="0275">RANGER XLS 2.3 16V 145CV/150CV 4X2 CS</option>
<option value="0357">RANGER XLS 2.5 16V 4X2 CD</option>
<option value="0356">RANGER XLS 2.5 16V 4X2 CS</option>
<option value="0278">RANGER XLS 2.8 8V 135CV 4X2 CD TB DIESEL</option>
<option value="0277">RANGER XLS 2.8 8V 135CV 4X2 CS TB DIESEL</option>
<option value="0273">RANGER XLS 2.8 8V 135CV 4X4 CS TB DIESEL</option>
<option value="0274">RANGER XLS 2.8/2.8 STORM  4X4 CD TB DIES</option>
<option value="0334">RANGER XLS 3.0 PSE STORM 4X4 CD TB DIES.</option>
<option value="0291">RANGER XLS 3.0 PSE 163CV 4X2 CD TB DIES.</option>
<option value="0292">RANGER XLS 3.0 PSE 163CV 4X2 CS TB DIES.</option>
<option value="0293">RANGER XLS 3.0 PSE 163CV 4X4 CD TB DIES.</option>
<option value="0361">RANGER XLS 3.2 20V 4X4 CD DIESEL</option>
<option value="0401">RANGER XLS 3.2 20V 4X4 CD DIESEL AUT.</option>
<option value="0360">RANGER XLS 3.2 20V 4X4 CS DIESEL</option>
<option value="0263">RANGER XLT LIMIT./L.CENT. 2.8 CD TB DIES</option>
<option value="0087">RANGER XLT 2.3 CS</option>
<option value="0321">RANGER XLT 2.3 16V 150CV CD REPOWER.</option>
<option value="0358">RANGER XLT 2.5 16V 4X2 CD</option>
<option value="0204">RANGER XLT 2.5 4X2 CD DIESEL</option>
<option value="0202">RANGER XLT 2.5 4X2 CE DIESEL</option>
<option value="0203">RANGER XLT 2.5 4X2 CS DIESEL</option>
<option value="0110">RANGER XLT 2.5 4X4 CD DIESEL</option>
<option value="0148">RANGER XLT 2.5 4X4 CE TB DIESEL</option>
<option value="0109">RANGER XLT 2.5 4X4 CS TB DIESEL</option>
<option value="0252">RANGER XLT 2.8 8V 135CV 4X2 CD TB DIESEL</option>
<option value="0253">RANGER XLT 2.8 8V 135CV 4X4 CD TB DIESEL</option>
<option value="0251">RANGER XLT 2.8 8V 135CV 4X4 CE TB DIESEL</option>
<option value="0294">RANGER XLT 3.0 PSE 163CV 4X2 CD TB DIES.</option>
<option value="0295">RANGER XLT 3.0 PSE 163CV 4X4 CD TB DIES.</option>
<option value="0362">RANGER XLT 3.2 20V 4X4 CD DIESEL</option>
<option value="0363">RANGER XLT 3.2 20V 4X4 CD DIESEL AUT.</option>
<option value="0240">RANGER XLT 4.0 12V V6 210CV 4X4 CD REPOW</option>
<option value="0239">RANGER XLT 4.0 12V V6 210CV 4X4 CE REPOW</option>
<option value="0149">RANGER XLT 4.0 4X2 CE</option>
<option value="0088">RANGER XLT 4.0 4X2 CS</option>
<option value="0112">RANGER XLT 4.0 4X4 CD</option>
<option value="0150">RANGER XLT 4.0 4X4 CE</option>
<option value="0111">RANGER XLT 4.0 4X4 CS</option>
<option value="0210">RANGER 2.5 4X2 CD TB DIESEL</option>
<option value="0209">RANGER 2.5 4X2 CE DIESEL</option>
<option value="0205">RANGER 2.5 4X2 TB DIESEL</option>
<option value="0108">RANGER 2.5 4X4 CD TB DIESEL</option>
<option value="0147">RANGER 2.5 4X4 CE TB DIESEL</option>
<option value="0107">RANGER 2.5 4X4 TB DIESEL</option>
<option value="0105">RANGER 2.5I CD</option>
<option value="0146">RANGER 2.5I CE</option>
<option value="0106">RANGER 2.5I CS</option>
<option value="0127">TAURUS GL SW 3.0 V6 24V</option>
<option value="0091">TAURUS GL 3.0 V6</option>
<option value="0092">TAURUS L/LX 3.0 V6</option>
<option value="0191">TAURUS LX SW 3.0 V6 24V</option>
<option value="0183">TAURUS SHO 3.0 V6</option>
<option value="0184">THUNDERBIRD SC 3.8 V6</option>
<option value="0372">TRANSIT CHASSI 2.2 TDCI DIESEL</option>
<option value="0339">TRANSIT CHASSI 2.4 TDCI DIESEL</option>
<option value="0379">TRANSIT FURGAO 2.2 TDCI CURTO DIESEL</option>
<option value="0375">TRANSIT FURGAO 2.2 TDCI LONGA DIESEL</option>
<option value="0354">TRANSIT FURGAO 2.4 TDCI LONGO JUMBO DIES</option>
<option value="0331">TRANSIT FURGAO 3330 2.4 TDCI CURTO DIES.</option>
<option value="0332">TRANSIT FURGAO 3550 2.4 TDCI LONGO DIES.</option>
<option value="0371">TRANSIT VAN 3550 2.2 TDCI 14/16LUG. DIES</option>
<option value="0333">TRANSIT VAN 3550 2.4 TDCI 14LUG. DIESEL</option>

      </select>
    </div>



    <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center">Contrate seu plano abaixo:</h1>
         
          
         </div>
         </div>
       </div>
     </div>
  
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Enviar cotação</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Cotação Plano de Manutenção</h4>
        </div>
        <div class="modal-body">
          <p>Sua cotação dicou no valor de R$</p>





          

<!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
<form action="https://pagseguro.uol.com.br/v2/pre-approvals/request.html" method="post">
<!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
<input type="hidden" name="code" value="E56010C37E7E71899458BFAED78241E0" />
<input type="image" src="https://p.simg.uol.com.br/out/pagseguro/i/botoes/assinaturas/120x53-contratar.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
</form>
<!-- FINAL FORMULARIO BOTAO PAGSEGURO -->

          

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div> </div>
</div>
  </form>

  <hr>

<!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
<form action="https://pagseguro.uol.com.br/checkout/v2/cart.html?action=add" method="post" onsubmit="PagSeguroLightbox(this); return false;">
<!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
<input type="hidden" name="itemCode" value="B7A079DCEBEB714EE4845FAA2CD981EA" />
<input type="image" src="https://p.simg.uol.com.br/out/pagseguro/i/botoes/pagamentos/120x53-comprar.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
</form>
<script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script>
<!-- FINAL FORMULARIO BOTAO PAGSEGURO -->


</div>

<script>
  $(document).ready(function () {
    var mySelect = $('#first-disabled2');

    $('#special').on('click', function () {
      mySelect.find('option:selected').prop('disabled', true);
      mySelect.selectpicker('refresh');
    });

    $('#special2').on('click', function () {
      mySelect.find('option:disabled').prop('disabled', false);
      mySelect.selectpicker('refresh');
    });

    $('#basic2').selectpicker({
      liveSearch: true,
      maxOptions: 1
    });
  });
</script>
</body>
</html>
