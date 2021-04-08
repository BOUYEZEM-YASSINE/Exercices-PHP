<!-- W3hubs.com - Download Free Responsive Website Layout Templates designed on HTML5 CSS3,
  Bootstrap which are 100% Mobile friendly. w3Hubs all Layouts are responsive cross browser 
  supported, best quality world class designs. -->
  <!DOCTYPE html>
<html>
  <head>
    <title>Facebook UI Template In Bootstrap 4</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Manjari:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style type="text/css">
      body {
     
      background: #3b5997;
      padding: 0;
      margin: 0;
      font-family: 'Manjari', sans-serif;
      overflow-x: hidden;
      }
      h1{
      text-transform: uppercase;
      padding-top: 20px;
      }
      .btn-custom {
      background: #2a4784;
      color: #fff;
      }
      .btn.focus,
      .btn:focus {
      box-shadow: none;
      }
      .btn-custom:hover {
      color: #fff;
      background: #223a6d;
      }
      .container {
      box-shadow: 1px 0 10px 15px rgba(0, 0, 0, .3);
      background: linear-gradient(to bottom, #3b5997 0%, #3b5997 50%, #000000 50%, #ddd 50%, #ddd 100%);
      padding: 10px 0 15px 0px;
      }
      .center-content {
      display: block;
      margin: 20px auto;
      width: 40%;
      }
      .float-right .form-control {
      border-radius: 0px;
      width: 35% !important;
      }
      .center-content .form-control {
      outline: none;
      border: none;
      background: none;
      border-bottom: 1px solid #ddd;
      border-radius: 0px !important;
      }
      .center-content .form-control:focus,
      .center-content .form-control:hover {
      border: none;
      margin: 0 auto;
      background: none;
      box-shadow: none;
      border-bottom: 1px solid #AAB7B8;
      }
      .form-group {
      margin-top: 25px;
      }
      @media(max-width: 992px){
      h2{
      text-align: center;
      }
      .center-content{
      width: 60%;
      }
      }
      @media(max-width: 768px){
      h2{
      text-align: center;
      }
      .center-content{
      width: 60%;
      }
      .form-inline{
      display: block;
      text-align: center;
      float: none !important;
      }
      }
      @media(max-width: 575px){
      .pl-5{
      padding-left: 0 !important;
      }
      .center-content{
      width: 80%;
      }
      .float-right .form-control{
      width: 100% !important;
      margin-top: 15px;
      }
      .float-right .form-control:nth-child(2){
      margin-bottom: 15px;
      }
      .container{
      background: linear-gradient(to bottom, #3b5997 0%, #3b5997 60%, #000000 50%, #ddd 52%, #ddd 100%);
      max-width: 80%;
      }
      }
      @media(max-width: 425px){
      h3,h2{
      font-size: 1.5rem;
      }
      h1{
      font-size: 2rem;
      }
      h2{
      margin: 0;
      }
      }
    </style>
  </head>
  <body>
    <div class="container mt-5 mb-5">
      <div class="row p-4">
        <div class="col-lg-7 col-md-12">
          <h2 class="text-white pl-5">Facebook</h2>
        </div>
       
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="text-center text-white">
            <h3>Welcome To Facebook</h3>
            <p class="mb-0">The World Biggest Social Network</p>
          </div>
        </div>
      </div>
      <div class="row bg-white center-content">
        <div class="col-lg-12 p-4">
          <h1>Sign Up</h1>
          <form action="#">
        
        
            <div class="form-group">
              <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
         
            <button type="submit" name="submit" class="btn btn-custom">Submit</button>
          </form>
        </div>
      </div>
    </div>
    </div>


  <?php  
  

    $password= $_REQUEST['password'];
if (preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).*$#", $password)){
echo  "<p style='color:green;background-color:white;'>" ."good ". "</p>";
} else {
    echo  "<p style='color:red;background-color:white'>" ."bad ". "</p>";
}

?>
  </body>
</html>