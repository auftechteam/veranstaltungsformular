
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Veranstaltung erstellen</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>


  
  <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
<link rel='stylesheet' href='http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <div class="container">

    <form class="well form-horizontal" action="/cgi-bin/test.py " method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend>Veranstaltung erstellen</legend>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Veranstaltungstitel</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="name" placeholder="Titel" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Name des Verantstaltungsortes</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="last_name" placeholder="Name" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->
 

<!-- Select Basic -->
   
<div class="form-group"> 
  <label class="col-md-4 control-label">Veranstaltungstyp</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="typ" class="form-control selectpicker" >
      <option value=" " >Welche Art von Veranstaltung ?</option>
      <option>Kennenlerntreffen</option>
      <option>Stammtisch</option>
      <option >Aktion</option>

    </select>
  </div>
</div>
</div>


  
  
<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Telefon</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="phone" placeholder="0157 55577555" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text input-->
      
<div class="form-group">
  <label class="col-md-4 control-label">Adresse</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="address" placeholder="des Veranstaltungsortes" class="form-control" type="text">
    </div>
  </div>
</div>

 
          
          <!-- Datepicker as text field -->         
  <div class="form-group">       
  <label class="col-md-4 control-label">Datum</label>  
    <div class="col-md-4 inputGroupContainer">
    
      <div class="input-group date" data-date-format="dd.mm.yyyy">
    <div class="input-group-addon" >
              <span class="glyphicon glyphicon-th"></span>      
            </div>       
      <input  name="datum" type="text" class="form-control" placeholder="dd.mm.yyyy">
      
          </div>
        </div>  
  </div>
  
   <div class="form-group">       
  <label class="col-md-4 control-label">Zeit</label>  
    <div class="col-md-4 inputGroupContainer">
   
     
                <div class='input-group time' id='datetimepicker3'>
                  <span class="input-group-addon">
                        <span class="glyphicon glyphicon-time"></span>  
                    </span>
                    <input  name="zeit" type='text' class="form-control" placeholder="19:30"/>
                  
                </div>
            </div> 
       </div>
             


  
<!-- Text input-->
 
<div class="form-group">
  <label class="col-md-4 control-label">Stadt</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="city" placeholder="Stadt" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Select Basic -->
   
<div class="form-group"> 
  <label class="col-md-4 control-label">Bundesland</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="state" class="form-control selectpicker" >
       <option value=" " >Bundesland</option>
      <option>Hamburg</option>
      <option>Berlin</option>
      <option >Nordrhein-Westfalen</option>
      <option >Bayern</option>
      <option >Baden-Württemberg</option>
      <option >Niedersachsen</option>
      <option >Hessen</option>
      <option >Schleswig-Holstein</option>
      <option >Sachsen</option>
      <option> Sachsen-Anhalt</option>
      <option >Brandenburg</option>
      <option >Thüringen</option>
      <option >Mecklenburg-Vorpommern</option>
      <option >Saarland</option>
      <option >Bremen</option>
      <option >Rheinland-Pfalz</option>      
      <option> Ausland</option>
    </select>
  </div>
</div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Postleitzahl </label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="zip" placeholder="PLZ des Veranstaltungsortes" class="form-control"  type="text">
    </div>
</div>
</div>

<!-- Text input-->

<!-- radio checks -->


<!-- Text area -->
  
<div class="form-group">
  <label class="col-md-4 control-label">Veranstaltungsbeschreibung</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
        	<textarea class="form-control" name="comment" placeholder="Beschreib die Veranstaltung und warum andere Menschen teilnehmen sollten"></textarea>
  </div>
  </div>
</div>


<div class="form-group">
  <input name="email" value="<?php echo $_GET['m']; ?>" class="form-control"  type="hidden">
</div> 
  

<div class="form-group">

    
  <input name="password" value="<?php echo $_GET['p']; ?>" class="form-control"  type="hidden">
</div>

<!-- Success message -->
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-danger" >Absenden <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>

</fieldset>
</form>
</div>
    </div><!-- /.container -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/js/bootstrap-datepicker.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js'></script>
<script src='http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>
