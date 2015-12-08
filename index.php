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
            <option disabled>Bla</option>-->
            
          </optgroup>
        </select>
      </div>
    </div>

    <hr>

    <div class="form-group">
      <label for="basic" class="col-lg-2 control-label">Escolha qual é seu Conforto:</label>

      <div class="col-lg-10">
        <select id="basic" class="selectpicker show-tick form-control">
          <option>Básico</option>
          <option>Completo</option>
          <!--<option data-subtext="option subtext">bull</option>-->
          <option class="get-class" disabled>Importado</option>
          <optgroup label="test" data-subtext="optgroup subtext">
            <option disabled>ASD</option>
            <option disabled>Bla</option>
            
          </optgroup>
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
      <label for="basic" class="col-lg-2 control-label">"Conforto" (Básico ou Completo)</label>

      <div class="col-lg-10">
       <select id="basic" class="selectpicker show-tick form-control" data-live-search="true">
          <option>Básico</option>
          <option>Completo</option>
          
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
          <button type="button" class="btn btn-info" data-dismiss="modal">Contratar</button>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>
</div>
  </form>

  <hr>


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
