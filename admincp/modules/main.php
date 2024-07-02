<div class="Clear"></div>
<div class="main"></div>
<?php
            if  (isset($_GET['action'])){
                $tam=$_GET['action'];
            } else{
                $tam ='';
            }
            if($tam=='quanlydanhmucsanpham'){
                include('modules/quanlydanhmuc_sp/them.php'); 
            }else{
                include('modules/dashboard.php');
            }
            ?>   