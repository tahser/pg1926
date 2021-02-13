
<!doctype html>
<html>
<head>
    <script src="script.js"> </script>
    <script type="text/javascript"></script>
    <script src="./vendor/jquery/jquery-3.2.1.min.js"></script>
    <meta charset="utf-8">
    <link type="image/png" href="favicon.ico" rel="shortcut icon">
    <link rel="stylesheet" href="./css2/style.css">
    <link rel="stylesheet" href="./css/style.css" />
</header>

 <div class="logo" ><img src="images/logo.png" /></div>
 <h1>GERÇEK YARDIMA MUHTAÇ İNSANLAR</h1>
</header>
  <div class="selector-content">
    <div class="selector-column selector-column-1">
      <a id="js-link-adi" data-evid="404" >
        <h2 class="title">YARDIMA MUHTAÇ KİŞİ EKLEME</h2>
        <p class="subtitle">Buradan Gerçekten  Yardıma İhtiyaç Duyan İnsanları Sisteme Kayıt Edebilirsiniz.</p>
        <button class="button">Kayıt Ekle</button>
      </a>
    </div>
    <div class="selector-or">
      <div class="selector-or-word">
        Veya
      </div>
    </div>
    <div class="selector-column selector-column-2">
      <a id="js-link-editor" data-evid="403" >
        <h2 class="title">YARDIMA MUHTAÇ KİŞİ GÖRÜNTÜLEME</h2>
        <p class="subtitle">Buradan Yardıma İhtiyaç duyan kişilere il  seçerek ulaşabilirsiniz.</p>
        <button class="button">Kayıt Göster</button>
      </a>
    </div>
  </div>
</div>
    <!--Kayıt Form-->
    <div id="contact-popup">
        <form class="contact-form" action="" id="contact-form"
            method="post" enctype="multipart/form-data">
            <h1>Muhtaç Kişi Bilgileri   <input id="id_left_modal_close" type="button" value="X"> </h1>
            <div>
                <div>
                    <label>Ad: </label><span id="userName-info"  
                        class="info"></span>
                </div>
                <div>
                    <input type="text" id="userName" name="userName" autocomplete="off"
                        class="inputBox" />
                </div>
            </div>
            <div>
                <div>
                    <label>Soyad: </label><span id="surName-info"
                        class="info"></span>
                </div>
                <div>
                    <input type="text" id="userName" name="surName" autocomplete="off"
                        class="inputBox" />
                </div>
            </div>
            
    <div>
                <div>
                        <div>
                            <label>Adres: </label><span id="addres-info"
                                class="info"></span>
                        </div>
                        <div>
                            <textarea id="addres" name="addres" autocomplete="off"
                                class="inputBox"   ></textarea>
                        </div>
                   </div>

                <div>
                    <label>İl: </label><span id="city-info"
                        class="info"></span>
                
                                <form action="" method="post">

                         
                                <select name="il_id" id="il_id" >
                                    <?php  
                                            $kullaniciAdi = 'root';
                                                $parola = '';
                                                $veritabani = 'PROJE';
                                            $conn = mysqli_connect("localhost", $kullaniciAdi, $parola, $veritabani);
                                            $conn->set_charset("utf8");
                                            if ($conn->connect_error) {
                                                die("Connection failed: " . $conn->connect_error);
                                            }
                                            $sql = "select IL_ID, IL_AD FROM il";
                                            $sonuc= $conn->query($sql); 
                                            if ($sonuc->num_rows > 0) 
                                            {
                                                while($cek = $sonuc->fetch_assoc()) 
                                            {
                                                $id=$cek["IL_ID"];
                                                $ad=$cek["IL_AD"];

                                                echo $id."-".$ad."<br>";
                                                echo '<option value="'.$id  . '">' .$ad. '</option>';

                                            }
                                            }
                                            $conn->close();

                                        ?>

                                    </select>
                                </form>
                    </div>
            
            
                    
                   <div>
                        <div>
                            <label>Telefon: </label><span id="telefon-info"
                                class="info"></span>
                        
                        <input type="text" required="" name="gsmNo" placeholder="GSM No"   autocomplete="off" >
                        </div>
                   </div>
                    <div>
                        <input type="submit" id="send" name="send" class="button" value="Kaydet" />
                    </div>
        </form>
    </div>
    </div>
    <!--Görüntüleme Form-->
    <div id="goruntu-popup">
        <form class="goruntu-form" action="" id="goruntu-form"
            method="post" enctype="multipart/form-data">
            <h1>Muhtaç Kişi Listesi  <input id="id_right_modal_close" type="button" value="  X"> </h1>
            <div>
                <div>
                    <label>İl: </label><span id="il-info"class="info"></span>
                    <form action="" method="post"> 
                        <select name="iller_id" id="iller_id" >
                            <?php  
                                    $kullaniciAdi = 'root';
                                        $parola = '';
                                        $veritabani = 'PROJE';
                                    $conn = mysqli_connect("localhost", $kullaniciAdi, $parola, $veritabani);
                                    $conn->set_charset("utf8");
                                    if ($conn->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);
                                    }
                                    $sql = "select IL_ID, IL_AD FROM il";
                                    $sonuc= $conn->query($sql); 
                                    if ($sonuc->num_rows > 0) 
                                    {
                                        while($cek = $sonuc->fetch_assoc()) 
                                    {
                                        $id=$cek["IL_ID"];
                                        $ad=$cek["IL_AD"];

                                        echo $id."-".$ad."<br>";

                                        $secili_il_id = (isset($_POST["iller_id"]) ? $_POST["iller_id"] : 0);
                                        $option = "";
                                        $option = '<option value="'.$id  . '"'; 

                                        if ($id == $secili_il_id){
                                            $option .= 'selected="selected"';
                                        }

                                        $option .= '>' .$ad. '</option>';

                                        echo $option;

                                    }
                                    }
                                    $conn->close();

                                ?>

                        </select>

                        <?php // print_r($_POST); ?>
                  
                        <input id="id_hidden_listele" name="id_hidden_listele" type="hidden" value="0" ></input>
                    </form>
                    <button type="button"   id="btn_listele" name="listele" > Listele</button>
                </div>
                            <div class="container">
                                <table style="width:100%"  class="table" >
                                
                                    <tr>
                                            <th width="20%">
                                               Ad
                                            </th>
                                            <th width="20%">
                                                Soyad
                                            </th>
                                            <th width="30%">
                                                    Adres
                                            </th>
                                            <th width="100%">
                                                    Telefon
                                            </th>
                                            <th width="10%">
                                                    İl Ad
                                            </th>
                                    </tr>
                                <tbody>
                                    <tr>
                                        <?php
                                        if (! empty($_POST["id_hidden_listele"])) {
                                            $ilid = filter_var($_POST["iller_id"], FILTER_SANITIZE_STRING);
                                                $kullaniciAdi = 'root';
                                                $parola = '';
                                                $veritabani = 'PROJE';
                                                $conn = mysqli_connect("localhost", $kullaniciAdi, $parola, $veritabani);
                                                $conn->set_charset("utf8");
                                                if ($conn->connect_error) {
                                                die("Connection failed: " . $conn->connect_error);
                                                }
                                                    // burada for döngüsü kullanılıyor
                                                    $sql = "select h.HASTA_AD,h.HASTA_SOYAD,H.ADRES, i.IL_AD,h.TELEFON from hasta AS H left join il as i on i.IL_ID =H.IL_ID where h.IL_ID ='".$ilid."'" ; 
                                                   $sonuc= $conn->query($sql); 
                                                    if ($sonuc->num_rows > 0) {
                                                    while($cek = $sonuc->fetch_assoc()) {
                                                        echo "<td>".$cek["HASTA_AD"]."</td>";
                                                        echo "<td>".$cek["HASTA_SOYAD"]."</td>";
                                                        echo "<td>".$cek["ADRES"]."</td>";
                                                        echo "<td>".$cek["TELEFON"]."</td>";
                                                        echo "<td>".$cek["IL_AD"]."</td> </tr>";
                                                       
                                                    }}
                                                    $conn->close();
                                                }
                                            ?>
                                    
                                </tbody>
                            </table>
                            </div>
                        
           </div>
            </div>
        </form>
    </div>

                <?php
                            if (! empty($_POST["send"])) {
                                $name = filter_var($_POST["userName"], FILTER_SANITIZE_STRING);
                                $surName = filter_var($_POST["surName"], FILTER_SANITIZE_STRING);
                                $city = filter_var($_POST["il_id"], FILTER_SANITIZE_STRING);
                                $gsmNo = filter_var($_POST["gsmNo"], FILTER_SANITIZE_STRING);
                                $addres = filter_var($_POST["addres"], FILTER_SANITIZE_STRING);

                                $servername = "localhost";
                                $username = "root";
                                $password = "";
                                $dbname = "proje";
                                
                                // Create connection
                                $conn = mysqli_connect("localhost", $kullaniciAdi, $parola, $veritabani);
                                $conn->set_charset("utf8");
                                // Check connection
                                if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                                }
                            $sql = "insert into HASTA (HASTA_AD, HASTA_SOYAD, IL_ID,ADRES,TELEFON) VALUES('".$name."','".$surName."','".$city."','".$addres."','".$gsmNo."')";
                                   
                            if ($conn->query($sql) === TRUE) {
                            ?>
                            <div id="success">Kayıt işlemi başarılı!</div>
                        <?php
                        } else {
                            ?>
                            <div id="error">Kayıt işlemi hatalı!</div>
                        <?php
                    }
                    
                    $conn->close();
                    }
                ?>
        
<script>
$(document).ready(function () {
    

    <?php

    if(isset($_POST["id_hidden_listele"]) && $_POST["id_hidden_listele"] == "1"){
        //echo 'alert(1);';
        echo '$("#goruntu-popup").show();';
    }

    ?>

    $("#btn_listele").click(function(){
        $("#id_hidden_listele").val("1");
        console.log($("goruntu-form"));
        console.log('hidden value: <?php  print( isset($_POST["id_hidden_listele"]) ? $_POST["id_hidden_listele"] : "degeryok"); ?>');
        $("#goruntu-form").submit();
    });


    $("#id_right_modal_close").click(function(){
        $("#goruntu-popup").hide();
        
    });

    $("#id_left_modal_close").click(function(){
        $("#contact-popup").hide();
        
    });

    $("#js-link-adi").click(function () {
        $("#contact-popup").show();
    });
    $("#js-link-adi").click(function () {
        $("#contact-popup").show();
    });
    
    $("#contact-form").on("submit", function () {
        var valid = true;
        $(".info").html("");
        $("inputBox").removeClass("input-error");
        
        var userName = $("#userName").val();
        var surName = $("#surName").val();
        var city = $("#il_id").val();
        var addres = $("#addres").val();

        if (userName == "") {
            $("#userName-info").html("zorunlu.");
            $("#userName").addClass("input-error");
        }
        if (surName == "") {
            $("#surName-info").html("zorunlu.");
            $("#surName").addClass("input-error");
            valid = false;
        }
        if (city == "") {
            $("#city-info").html("zorunlu.");
            $("#city").addClass("input-error");
            valid = false;
        }
        
        if (addres == "") {
            $("#addres-info").html("zorunlu.");
            $("#addres").addClass("input-error");
            valid = false;
        }
        return valid;

    });

    $("#js-link-editor").click(function () {
        $("#goruntu-popup").show();
    });
    $("#goruntu-form").on("submit", function () {
        var valid = true;
        $(".info").html("");
        $("inputBox").removeClass("input-error");
        
        var userName = $("#userName").val();
        

        if (userName == "") {
            $("#userName-info").html("zorunlu.");
            $("#userName").addClass("input-error");
        }
        
        return valid;

    });


    

 


});



</script>





</body>
</html>
