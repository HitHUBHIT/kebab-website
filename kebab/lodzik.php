<?php 
session_start(); 
?>
<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Kebab Website</title>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&display=swap" rel="stylesheet">
<style>
/* RESET i bazowe ustawienia */
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

html {
    font-size: 16px;
    scroll-behavior: smooth;
}

body {
    font-family: 'Open Sans', Arial, sans-serif;
    background: #f2f2f2;
    color: #333;
}

/* ------------------------------- */
/* ANIMACJE */
/* ------------------------------- */
@keyframes slideDown {
    from {
        transform: translateY(-100%);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: scale(0.95);
    }
    to {
        opacity: 1;
        transform: scale(1);
    }
}

@keyframes fadeInUp {
    from {
        transform: translateY(20px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

@keyframes fadeInDelayed {
    0% {
        opacity: 0;
        transform: translateY(10px);
    }
    50% {
        opacity: 0.5;
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes slideFromLeft {
    from {
        transform: translateX(-50px);
        opacity: 0;
    }
    to {
        transform: translateX(0);
        opacity: 1;
    }
}

@keyframes slideFromRight {
    from {
        transform: translateX(50px);
        opacity: 0;
    }
    to {
        transform: translateX(0);
        opacity: 1;
    }
}

@keyframes zoomIn {
    from {
        transform: scale(0.5);
        opacity: 0;
    }
    to {
        transform: scale(1);
        opacity: 1;
    }
}

@keyframes ripple {
    to {
        width: 120px;
        height: 120px;
        opacity: 0;
    }
}

/* Klasy pomocnicze do animacji */
.fade-in {
    animation: fadeIn 2s forwards;
}

.fade-in-up {
    animation: fadeInUp 1.5s ease forwards;
}

.fade-in-delayed {
    animation: fadeInDelayed 1.5s ease forwards;
}

.slide-in-left {
    animation: slideFromLeft 1s ease-out forwards;
}

.slide-in-right {
    animation: slideFromRight 1s ease-out forwards;
}

.zoom-in {
    animation: zoomIn 1s ease forwards;
}

/* Efekty hover */
.hover-scale:hover {
    transform: scale(1.1);
    transition: transform 0.3s;
}

.shadow-on-hover:hover {
    box-shadow: 0 0 10px rgba(0,0,0,0.3);
}

/* Efekt obrotu na hover (np. do loga) */
.rotate-on-hover {
    display: inline-block;
    transition: transform 0.5s;
}

.rotate-on-hover:hover {
    transform: rotate(360deg);
}

/* ------------------------------- */
/* NAGŁÓWEK I NAWIGACJA */
/* ------------------------------- */

header {
    background: linear-gradient(135deg, #4a90e2, #357abd);
    color: #fff;
    text-align: center;
    padding: 1em;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    animation: slideDown 1s ease-in-out;
}

header h1 {
    margin: 0;
    font-size: 2em;
    display: inline-block;
    cursor: pointer;
    /* używamy rotate-on-hover */
    transition: transform 0.5s;
}
header h1:hover {
    transform: rotate(360deg);
}

nav ul {
    display: flex;
    justify-content: center;
    list-style: none;
    padding: 0;
    margin: 1em 0 0 0;
    gap: 20px;
}

nav ul li {
    animation: fadeInUp 0.5s ease-in-out;
}

nav ul li a {
    text-decoration: none;
    color: #fff;
    font-weight: 600;
    padding: 10px 15px;
    border-radius: 20px;
    transition: background 0.3s, transform 0.3s;
    background: #4a90e2;
}

nav ul li a:hover {
    background: #336699;
    transform: scale(1.05);
}

/* ------------------------------- */
/* SEKCJA GŁÓWNA */
/* ------------------------------- */

main {
    padding: 20px;
    max-width: 1000px;
    margin: 100px auto 60px auto;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.05);
    animation: fadeInUp 1s ease-in-out;
}

/* ------------------------------- */
/* STOPKA */
/* ------------------------------- */

footer {
    text-align: center;
    background-color: #333;
    color: #fff;
    padding: 10px;
    position: fixed;
    bottom: 0;
    width: 100%;
    font-size: 0.9em;
    box-shadow: 0 -2px 5px rgba(0,0,0,0.1);
}

/* ------------------------------- */
/* PRZYCISKI */
/* ------------------------------- */

.btn {
    display: inline-block;
    padding: 10px 20px;
    background-color: #4CAF50;
    color: #fff;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    font-weight: 600;
    text-align: center;
    text-decoration: none;
    position: relative;
    overflow: hidden;
    transition: background-color 0.3s, transform 0.3s;
}

.btn:hover {
    background-color: #45A049;
    transform: translateY(-2px);
}

.btn:active::after {
    content: "";
    position: absolute;
    top: 50%;
    left: 50%;
    width: 5px;
    height: 5px;
    background: rgba(255,255,255,0.4);
    border-radius: 50%;
    transform: translate(-50%, -50%);
    animation: ripple 0.6s linear;
}

/* ------------------------------- */
/* FORMULARZE, POLA I KOMUNIKATY */
/* ------------------------------- */

label {
    font-weight: bold;
    display: block;
    margin-top: 10px;
}

input, textarea, select {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    transition: box-shadow 0.3s, border-color 0.3s;
}

input:focus, textarea:focus, select:focus {
    outline: none;
    border-color: #4a90e2;
    box-shadow: 0 0 5px rgba(74,144,226,0.5);
}

input:hover, textarea:hover, select:hover {
    border-color: #4a90e2;
}

.error {
    color: red;
    font-weight: bold;
}

/* ------------------------------- */
/* GALERIA */
/* ------------------------------- */

.gallery {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    margin-top: 20px;
}

.gallery img {
    width: 200px;
    height: auto;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.08);
    transition: transform 0.3s, box-shadow 0.3s, filter 0.3s;
    opacity: 0;
    animation: fadeIn 1s forwards;
    animation-delay: 0.3s;
}

.gallery img:hover {
    transform: scale(1.05) rotate(1deg);
    box-shadow: 0 6px 15px rgba(0,0,0,0.15);
    filter: brightness(1.1);
}

/* ------------------------------- */
/* PROFIL UŻYTKOWNIKA */
/* ------------------------------- */

.account-avatar img {
    border-radius: 50%;
    transition: transform 0.3s;
}

.account-avatar img:hover {
    transform: scale(1.1);
}

.account-avatar p {
    margin-top: 10px;
}

/* ------------------------------- */
/* SEKCJA RECENZJI */
/* ------------------------------- */

.review-section {
    margin-top: 30px;
}

.review {
    background: #eee;
    padding: 10px;
    border-radius: 5px;
    margin-bottom: 10px;
    animation: fadeIn 1s ease-in-out;
}

/* Ikona lupy obok czasu */
.magnifier {
    width: 20px;
    height: 20px;
    background: url('magnifier_icon.png') no-repeat center center;
    display: inline-block;
    vertical-align: middle;
}

/* Dodatkowe klasy do tworzenia bardziej złożonych efektów */
.appear-late {
    opacity: 0;
    animation: fadeInDelayed 2s forwards;
    animation-delay: 1s;
}

.slide-in-bounce {
    animation: slideFromLeft 0.8s ease-out forwards;
}

/* Możliwe animacje dla list - np. opóźniane pojawianie się elementów */
ul li {
    position: relative;
}

ul li::before {
    content: "•";
    color: #4a90e2;
    position: absolute;
    left: -20px;
    top: 50%;
    transform: translateY(-50%);
    opacity: 0;
    animation: fadeIn 0.5s forwards;
    animation-delay: 0.2s;
}
</style>
</head>
<body>
<header>
  <h1>Witamy w Królestwie Kebabów</h1>
  <nav>
    <ul>
      <li><a href="?page=home">Strona główna</a></li>
      <li><a href="?page=about">O nas</a></li>
      <li><a href="?page=menu">Menu</a></li>
      <li><a href="?page=contact">Kontakt</a></li>
      <li><a href="?page=register">Rejestracja</a></li>
      <li><a href="?page=login">Logowanie</a></li>
      <li><a href="?page=panel">Panel użytkownika</a></li>
      <li><a href="?page=offers">Promocje (API)</a></li>
      <li><a href="?page=stats">Statystyki</a></li>
    </ul>
  </nav>
</header>

<main>
<?php
$conn=new mysqli('localhost','root','','kebab_db2');
if($conn->connect_error){die("Błąd połączenia z bazą danych: ".$conn->connect_error);}

function validate_input($data){return htmlspecialchars(stripslashes(trim($data)));}

$page=$_GET['page']??'home';

// Jeśli page=offers_api - zwróć JSON i zakończ skrypt
if($page==='offers_api'){
    header('Content-Type: application/json; charset=utf-8');
    // Pobieramy aktywne oferty z bazy
    $sql="SELECT promo_code, discount_percentage, start_date, end_date, menu_id FROM discounts 
          WHERE end_date >= NOW()
          ORDER BY end_date ASC";
    $res=$conn->query($sql);
    $offers=[];
    if($res && $res->num_rows>0){
        while($row=$res->fetch_assoc()){
            $menu_id=(int)$row['menu_id'];
            $product_res=$conn->query("SELECT name FROM menu WHERE id=$menu_id");
            $product_name=$product_res && $product_res->num_rows>0?$product_res->fetch_assoc()['name']:'Produkt nieznany';

            $offers[]=[
              "title"=>"Promocja na ".$product_name,
              "discount"=>$row['discount_percentage'],
              "promo_code"=>$row['promo_code'],
              "product_name"=>$product_name,
              "start_date"=>$row['start_date'],
              "end_date"=>$row['end_date']
            ];
        }
    }
    echo json_encode($offers);
    $conn->close();
    exit; // Nie wyświetlaj dalszej części strony
}

if(isset($_POST['action'])){
  $action=$_POST['action'];

  if($action==='register'){
    $username=validate_input($_POST['username']);
    $password=validate_input($_POST['password']);
    if(!empty($username)&&!empty($password)){
      $hash=password_hash($password,PASSWORD_DEFAULT);
      $stmt=$conn->prepare("INSERT INTO users (username,password,role) VALUES (?,?,?)");
      $role='user';
      $stmt->bind_param("sss",$username,$hash,$role);
      if($stmt->execute()){
        echo"<p>Zarejestrowano użytkownika: $username</p>";
      }else{
        echo"<p class='error'>Błąd rejestracji: ".$stmt->error."</p>";
      }
      $stmt->close();
    }else{
      echo"<p class='error'>Proszę wypełnić wszystkie pola.</p>";
    }
  }elseif($action==='login'){
    $username=validate_input($_POST['username']);
    $password=validate_input($_POST['password']);
    if(!empty($username)&&!empty($password)){
      $stmt=$conn->prepare("SELECT id,password,role FROM users WHERE username=?");
      $stmt->bind_param("s",$username);
      $stmt->execute();
      $stmt->bind_result($uid,$hashed_password,$role);
      if($stmt->fetch() && password_verify($password,$hashed_password)){
        $_SESSION['loggedin']=$username;
        $_SESSION['user_id']=$uid;
        $_SESSION['role']=$role;
        echo"<p>Witaj ponownie, $username! Jesteś zalogowany jako $role.</p>";
      }else{
        echo"<p class='error'>Nieprawidłowa nazwa użytkownika lub hasło.</p>";
      }
      $stmt->close();
    }else{
      echo"<p class='error'>Proszę wypełnić wszystkie pola.</p>";
    }
  }elseif($action==='logout'){
    session_destroy();
    echo"<p>Wylogowano pomyślnie.</p>";
  }elseif($action==='add_product' && isset($_SESSION['role']) && $_SESSION['role']==='admin'){
    $product_name=validate_input($_POST['product_name']??'');
    $price=floatval(validate_input($_POST['product_price']??0));

    if(isset($_FILES['product_image']) && $_FILES['product_image']['error']===UPLOAD_ERR_OK){
      $imageData=file_get_contents($_FILES['product_image']['tmp_name']);
    }else{
      $imageData=null;
    }

    if(!empty($product_name)&&$price>0){
      $stmt=$conn->prepare("INSERT INTO menu (name,price,image) VALUES (?,?,?)");
      $null = NULL; 
      $stmt->bind_param("sdb",$product_name,$price,$null);
      $stmt->send_long_data(2,$imageData);
      if($stmt->execute()){
        echo"<p>Dodano produkt: $product_name</p>";
      }else{
        echo"<p class='error'>Błąd dodawania produktu: ".$stmt->error."</p>";
      }
      $stmt->close();
    }else{
      echo"<p class='error'>Proszę wypełnić wszystkie pola.</p>";
    }
  }elseif($action==='update_product' && isset($_SESSION['role']) && $_SESSION['role']==='admin'){
    $product_id=intval($_POST['product_id']);
    $product_name=validate_input($_POST['product_name']);
    $price=floatval(validate_input($_POST['product_price']));
    if(!empty($product_name)&&$price>0){
      if(isset($_FILES['product_image']) && $_FILES['product_image']['error']===UPLOAD_ERR_OK){
        $imageData=file_get_contents($_FILES['product_image']['tmp_name']);
        $stmt=$conn->prepare("UPDATE menu SET name=?, price=?, image=? WHERE id=?");
        $null = NULL;
        $stmt->bind_param("sdbi",$product_name,$price,$null,$product_id);
        $stmt->send_long_data(2,$imageData);
      }else{
        $stmt=$conn->prepare("UPDATE menu SET name=?, price=? WHERE id=?");
        $stmt->bind_param("sdi",$product_name,$price,$product_id);
      }
      if($stmt->execute()){
        echo"<p>Zaktualizowano produkt: $product_name</p>";
      }else{
        echo"<p class='error'>Błąd aktualizacji produktu: ".$stmt->error."</p>";
      }
      $stmt->close();
    }else{
      echo"<p class='error'>Proszę wypełnić wszystkie pola.</p>";
    }
  }elseif($action==='delete_product' && isset($_SESSION['role']) && $_SESSION['role']==='admin'){
    $product_id=intval($_POST['product_id']);
    $stmt=$conn->prepare("DELETE FROM menu WHERE id=?");
    $stmt->bind_param("i",$product_id);
    if($stmt->execute()){
      echo"<p>Usunięto produkt o ID: $product_id</p>";
    }else{
      echo"<p class='error'>Błąd usuwania produktu: ".$stmt->error."</p>";
    }
    $stmt->close();
  }elseif($action==='order' && isset($_SESSION['loggedin']) && isset($_SESSION['user_id'])){
    $product_id=intval($_POST['product_id']);
    $promo_code=validate_input($_POST['promo_code']??'');
    $user_id=(int)$_SESSION['user_id'];
    $promo_code_id=null;
    $promo_code_used=false;

    if(!empty($promo_code)){
      $stmt=$conn->prepare("SELECT id,discount_percentage FROM discounts WHERE promo_code=? AND menu_id=? AND start_date<=NOW() AND end_date>=NOW()");
      $stmt->bind_param("si",$promo_code,$product_id);
      $stmt->execute();
      $result=$stmt->get_result();
      $discount=$result->fetch_assoc();
      $stmt->close();
      if($discount){
        $promo_code_id=$discount['id'];
        $promo_code_used=true;
        echo"<p>Użyto kodu promocyjnego: $promo_code - zniżka {$discount['discount_percentage']}%!</p>";
      }else{
        echo"<p class='error'>Kod promocyjny jest nieprawidłowy lub nieaktywny.</p>";
      }
    }

    $stmt=$conn->prepare("INSERT INTO orders (user_id,product_id,promo_code_used,promo_code_id,order_date) VALUES (?,?,?,?,NOW())");
    $stmt->bind_param("iibi",$user_id,$product_id,$promo_code_used,$promo_code_id);
    if($stmt->execute()){
      echo"<p>Zamówienie zostało złożone pomyślnie!</p>";
    }else{
      echo"<p class='error'>Błąd: Nie udało się złożyć zamówienia.</p>";
    }
    $stmt->close();
  }elseif($action==='upload_avatar' && isset($_SESSION['loggedin']) && isset($_SESSION['user_id'])){
    if(isset($_FILES['avatar'])&&$_FILES['avatar']['error']===UPLOAD_ERR_OK){
      $username=$_SESSION['loggedin'];
      $avatar_file=$_FILES['avatar'];
      $allowed_types=['image/png','image/jpeg','image/gif'];
      $file_type=mime_content_type($avatar_file['tmp_name']);
      if(!in_array($file_type,$allowed_types)){
        echo"<p>Nieobsługiwany typ pliku.</p>";
      }else{
        $avatar=file_get_contents($avatar_file['tmp_name']);
        $stmt=$conn->prepare("UPDATE users SET avatar=? WHERE username=?");
        $stmt->bind_param("bs",$avatar,$username);
        $stmt->send_long_data(0,$avatar);
        if($stmt->execute()){
          echo"<p>Awatar został zaktualizowany.</p>";
        }else{
          echo"<p>Wystąpił błąd podczas aktualizacji awatara.</p>";
        }
        $stmt->close();
      }
    }else{
      echo"<p>Wystąpił błąd podczas przesyłania pliku.</p>";
    }
  }elseif($action==='add_review' && isset($_SESSION['loggedin']) && isset($_SESSION['user_id'])){
    $product_id=intval($_POST['product_id']);
    $rating=intval($_POST['rating']);
    $comment=validate_input($_POST['comment']);
    $user_id=(int)$_SESSION['user_id'];
    if($rating>0 && $rating<=5 && !empty($comment)){
      $stmt=$conn->prepare("INSERT INTO reviews (user_id,product_id,rating,comment,review_date) VALUES (?,?,?,?,NOW())");
      $stmt->bind_param("iiis",$user_id,$product_id,$rating,$comment);
      if($stmt->execute()){
        echo"<p>Dziękujemy za opinię!</p>";
      }else{
        echo"<p class='error'>Błąd dodawania opinii: ".$stmt->error."</p>";
      }
      $stmt->close();
    }else{
      echo"<p class='error'>Proszę podać ocenę (1-5) i komentarz.</p>";
    }
  }elseif($action==='contact_submit'){
    $name=validate_input($_POST['name']);
    $email=validate_input($_POST['email']);
    $message=validate_input($_POST['message']);
    if(strlen($name)>1 && strlen($message)>4 && filter_var($email,FILTER_VALIDATE_EMAIL)){
      $stmt=$conn->prepare("INSERT INTO contacts (name,email,message) VALUES (?,?,?)");
      $stmt->bind_param("sss",$name,$email,$message);
      if($stmt->execute()){
        echo"<p>Dziękujemy za kontakt! Twoja wiadomość została zapisana.</p>";
      }else{
        echo"<p class='error'>Błąd podczas zapisywania wiadomości: ".$stmt->error."</p>";
      }
      $stmt->close();
    }else{
      echo"<p class='error'>Nieprawidłowe dane w formularzu kontaktowym.</p>";
    }
  }
}

switch($page){
  case'home':
    echo"<h2 class='fade-in'>Strona główna</h2>";
    echo"<p class='hover-scale'>Witaj w Królestwie Kebabów! To miejsce stworzone z pasji do wyjątkowego smaku i miłości do jedzenia...</p>";
    echo"<div class='gallery'>
          <img src='images/kebab1.png' alt='Zdjęcie 1'>
          <img src='images/kebab2.png' alt='Zdjęcie 2'>
        </div>";
    if(isset($_SESSION['loggedin']) && isset($_SESSION['user_id'])){
      $user_id=(int)$_SESSION['user_id'];
      $sql="SELECT m.name, COUNT(o.id) as order_count 
            FROM orders o 
            JOIN menu m ON o.product_id=m.id 
            WHERE o.user_id=$user_id
            GROUP BY m.id 
            ORDER BY order_count DESC 
            LIMIT 1";
      $res=$conn->query($sql);
      if($res && $res->num_rows>0){
        $fav=$res->fetch_assoc();
        echo"<p>Rekomendacja dla Ciebie: Najczęściej zamawiasz <strong>{$fav['name']}</strong>. Może zamówisz ponownie?</p>";
      }else{
        echo"<p>Brak danych do rekomendacji.</p>";
      }
    } else {
      echo"<p>Zaloguj się, aby zobaczyć rekomendacje!</p>";
    }
    break;

  case'about':
    echo"<h2>O nas</h2>";
    echo"<p>Nasza misja to tworzenie wyjątkowych doznań kulinarnych...</p>";
    echo"<div class='gallery'>
          <img src='images/kebab3.png' alt='Zdjęcie 3'>
          <img src='images/kebab4.png' alt='Zdjęcie 4'>
        </div>";
    break;

  case'menu':
    echo"<h2>Menu</h2>";
    $result=$conn->query("SELECT m.id,m.name,m.price,c.category_name FROM menu m 
      JOIN menu_categories mc ON m.id=mc.menu_id
      JOIN categories c ON mc.category_id=c.id 
      ORDER BY c.category_name");
    if($result && $result->num_rows>0){
      echo"<ul>";
      while($row=$result->fetch_assoc()){
        echo"<li>{$row['name']} - {$row['price']} zł (Kategoria: {$row['category_name']}) 
             <form method='post' style='display:inline; margin-left:10px;'>
              <input type='hidden' name='action' value='order'>
              <input type='hidden' name='product_id' value='{$row['id']}'>
              <input type='text' name='promo_code' placeholder='Kod rabatowy'>
              <button type='submit' class='btn'>Zamów</button>
             </form></li>";
      }
      echo"</ul>";
    }else{
      echo"<p>Menu jest puste.</p>";
    }
    break;

  case'contact':
    echo"<h2>Kontakt</h2>
        <form method='post' id='contact-form'>
        <input type='hidden' name='action' value='contact_submit'>
        <label>Imię:</label><input type='text' name='name' required><br>
        <label>Email:</label><input type='email' name='email' required><br>
        <label>Wiadomość:</label><textarea name='message' required></textarea><br>
        <button type='submit' class='btn'>Wyślij</button>
        </form>
        <p id='contact-response'></p>";
    break;

  case'register':
    echo"<h2>Rejestracja</h2>
        <form method='post' onsubmit='return validateRegisterForm()'>
        <input type='hidden' name='action' value='register'>
        <label>Nazwa użytkownika:</label><input type='text' id='reg_username' name='username' required><br>
        <label>Hasło:</label><input type='password' id='reg_password' name='password' required><br>
        <button type='submit' class='btn'>Zarejestruj się</button>
        </form>
        <p id='register-error' class='error'></p>";
    break;

  case'login':
    echo"<h2>Logowanie</h2>
        <form method='post' onsubmit='return validateLoginForm()'>
        <input type='hidden' name='action' value='login'>
        <label>Nazwa użytkownika:</label><input type='text' id='log_username' name='username' required><br>
        <label>Hasło:</label><input type='password' id='log_password' name='password' required><br>
        <button type='submit' class='btn'>Zaloguj się</button>
        </form>
        <p id='login-error' class='error'></p>";
    break;

  case'panel':
    if(isset($_SESSION['loggedin']) && isset($_SESSION['user_id'])){
      $username=$_SESSION['loggedin'];
      $stmt=$conn->prepare("SELECT id,role,avatar FROM users WHERE username=?");
      $stmt->bind_param("s",$username);
      $stmt->execute();
      $result=$stmt->get_result();
      $user=$result->fetch_assoc();
      $role=$user['role'];
      $stmt->close();
      echo"<h2>Panel użytkownika</h2><p>Witaj, $username! (Rola: $role)</p>";
      echo"<div class='account-avatar'><h3>Twój awatar:</h3>";
      if($user['avatar']){
        echo"<img src='data:image/png;base64,".base64_encode($user['avatar'])."' alt='Awatar' style='width:100px;height:100px;border-radius:50%;'>";
      }else{
        echo"<p>Nie ustawiono awatara.</p>";
      }
      echo"</div>";
      echo"<form method='post' enctype='multipart/form-data'>
           <input type='hidden' name='action' value='upload_avatar'>
           <label for='avatar'>Zmień awatar:</label>
           <input type='file' id='avatar' name='avatar' accept='image/png, image/jpeg, image/gif' required>
           <button type='submit' class='btn'>Zmień awatar</button>
           </form>";

      echo"<form method='post'>
           <input type='hidden' name='action' value='logout'>
           <button type='submit' class='btn'>Wyloguj się</button>
           </form>";

      echo"<div class='review-section'>
           <h3>Dodaj opinię o produkcie</h3>
           <form method='post'>
           <input type='hidden' name='action' value='add_review'>
           <label for='product_id'>Produkt:</label>
           <select name='product_id' required>";
      $pm=$conn->query("SELECT id,name FROM menu");
      while($p=$pm->fetch_assoc()){
        echo"<option value='{$p['id']}'>{$p['name']}</option>";
      }
      echo"</select>
           <label>Ocena (1-5):</label>
           <input type='number' name='rating' min='1' max='5' required>
           <label>Komentarz:</label>
           <textarea name='comment' required></textarea>
           <button type='submit' class='btn'>Dodaj opinię</button>
           </form></div>";

      if(isset($_SESSION['user_id'])){
        $uid=(int)$_SESSION['user_id'];
        echo"<h3>Twoje opinie:</h3>";
        $rev=$conn->query("SELECT r.rating,r.comment,m.name,r.review_date FROM reviews r JOIN menu m ON r.product_id=m.id WHERE r.user_id=$uid");
        if($rev && $rev->num_rows>0){
          while($rw=$rev->fetch_assoc()){
            echo"<div class='review'><strong>{$rw['name']}:</strong> Ocena: {$rw['rating']}/5<br>{$rw['comment']}<br><em>{$rw['review_date']}</em></div>";
          }
        }else{
          echo"<p>Brak opinii.</p>";
        }
      }

      if($role==='admin'){
        echo"<h3>Panel administratora - Zarządzanie produktami</h3>";
        echo"<form method='post' enctype='multipart/form-data'>
             <input type='hidden' name='action' value='add_product'>
             <label for='product_name'>Nazwa produktu:</label>
             <input type='text' id='product_name' name='product_name' required>
             <label for='product_price'>Cena (PLN):</label>
             <input type='number' id='product_price' name='product_price' step='0.01' required>
             <label for='product_image'>Zdjęcie produktu:</label>
             <input type='file' id='product_image' name='product_image' accept='image/*'>
             <button type='submit' class='btn'>Dodaj produkt</button>
             </form>";

        $all_products=$conn->query("SELECT id,name,price FROM menu");
        if($all_products && $all_products->num_rows>0){
          echo"<h4>Lista produktów:</h4><ul>";
          while($ap=$all_products->fetch_assoc()){
            echo"<li>{$ap['name']} - {$ap['price']} zł
                 <form method='post' enctype='multipart/form-data' style='display:inline;'>
                 <input type='hidden' name='action' value='update_product'>
                 <input type='hidden' name='product_id' value='{$ap['id']}'>
                 <input type='text' name='product_name' placeholder='Nowa nazwa' required>
                 <input type='number' name='product_price' step='0.01' placeholder='Nowa cena' required>
                 <input type='file' name='product_image' accept='image/*'>
                 <button type='submit' class='btn'>Edytuj</button>
                 </form>
                 <form method='post' style='display:inline;'>
                 <input type='hidden' name='action' value='delete_product'>
                 <input type='hidden' name='product_id' value='{$ap['id']}'>
                 <button type='submit' class='btn'>Usuń</button>
                 </form>
                 </li>";
          }
          echo"</ul>";
        }
      }

    }else{
      echo"<p class='error'>Musisz być zalogowany, aby zobaczyć panel użytkownika.</p>";
    }
    break;

  case'offers':
    echo"<h2>Aktualne promocje</h2>
         <p>Kliknij przycisk, aby pobrać aktualne promocje z naszej bazy danych.</p>
         <button class='btn' id='fetch-offers-btn'>Pobierz promocje</button>
         <ul id='offers-list'></ul>";
    break;

  case'stats':
    echo"<h2>Statystyki</h2>";
    $prod_count=$conn->query("SELECT COUNT(*) as cnt FROM menu")->fetch_assoc()['cnt'];
    $users_count=$conn->query("SELECT COUNT(*) as cnt FROM users")->fetch_assoc()['cnt'];
    echo"<p>Liczba produktów w bazie: $prod_count</p>";
    echo"<p>Liczba użytkowników w bazie: $users_count</p>";
    break;

  default:
    echo"<h2>Strona nie znaleziona</h2>";
    break;
}

$conn->close();
?>
</main>
<footer>
<div id='date-time-container'><div class='magnifier'></div><span id='time-text'></span></div>
<p>&copy; 2024 Królestwo Kebabów. Wszelkie prawa zastrzeżone.</p>
</footer>

<script>
let jsVar1="promoCode";
let jsVar2=0;
let jsVar3=true;
let jsVar4=["kebab","falafel","shawarma"];
let jsVar5={name:"Użytkownik",role:"user"};

for(let i=0;i<5;i++){console.log("Pętla for: "+i);}
let j=0;
while(j<3){console.log("Pętla while: "+j);j++;}
jsVar4.forEach(item=>console.log("forEach: "+item));
for(let key in jsVar5){console.log("for in: "+key+"="+jsVar5[key]);}
for(const letter of "Kebab"){console.log("for of: "+letter);}

function calculateDiscount(price,percentage){
  return price-(price*(percentage/100));
}
function updateDOM(elementId,text){
  document.getElementById(elementId).textContent=text;
}
function validateRegisterForm(){
  let username=document.getElementById('reg_username').value;
  let password=document.getElementById('reg_password').value;
  if(username.length<3||password.length<3){
    document.getElementById('register-error').textContent='Nazwa użytkownika i hasło muszą mieć co najmniej 3 znaki.';
    return false;
  }
  return true;
}
function validateLoginForm(){
  let username=document.getElementById('log_username').value;
  let password=document.getElementById('log_password').value;
  if(username===""||password===""){
    document.getElementById('login-error').textContent='Wypełnij oba pola.';
    return false;
  }
  return true;
}
function displayOffers(offers){
  const list=document.getElementById('offers-list');
  list.innerHTML="";
  if(offers.length===0){
    let li=document.createElement('li');
    li.textContent="Brak aktualnych promocji.";
    list.appendChild(li);
    return;
  }
  offers.forEach(o=>{
    let li=document.createElement('li');
    li.textContent=`${o.title} - ${o.discount}% zniżki (Kod: ${o.promo_code}, ważne do: ${o.end_date})`;
    list.appendChild(li);
  });
}

document.getElementById('fetch-offers-btn')?.addEventListener('click',()=>{
  fetch('?page=offers_api')
  .then(response=>response.json())
  .then(data=>{
    displayOffers(data);
  })
  .catch(err=>console.error("Błąd pobierania ofert:",err));
});

function updateTime(){
  const now=new Date();
  const formattedDate=now.toLocaleDateString('pl-PL',{day:'2-digit',month:'2-digit',year:'numeric'});
  const formattedTime=now.toLocaleTimeString('pl-PL',{hour:'2-digit',minute:'2-digit',second:'2-digit'});
  document.getElementById('time-text').textContent=`${formattedDate} ${formattedTime}`;
}
setInterval(updateTime,1000);
updateTime();
</script>

</body>
</html>
