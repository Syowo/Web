<?php
/* Smarty version 3.1.32, created on 2019-04-10 18:10:34
  from 'E:\xampp\htdocs\npstore\html\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5cae157ac721b7_35203847',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e18c07111acd57ddded28cb88b3a2edb0f7717a3' => 
    array (
      0 => 'E:\\xampp\\htdocs\\npstore\\html\\index.html',
      1 => 1554912632,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cae157ac721b7_35203847 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="zh">
<head>
    <meta http-equiv="UserContent-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="expires" content="0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://cdn.bootcss.com/jquery/1.11.3/jquery.min.js" ><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"><?php echo '</script'; ?>
>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>無人商店</title>
    <style type="text/css">
        #logrow{
            margin:2px 0 10px 0 ;
        }
        li{
            list-style: none ;
            display: inline ;
        } 
        a{
            text-decoration:none;
        }
        #goods img{
            max-width:45px ;
            max-height:45px ;
        }
    </style>
    <?php echo '<script'; ?>
 type="text/javascript">
        $(function(){
            
            if( <?php echo $_smarty_tpl->tpl_vars['login']->value;?>
 ){
                $("#log_frame").hide() ;
                $("#log_out").show();
                if( <?php echo $_smarty_tpl->tpl_vars['host']->value;?>
 ){
                    $("#host_link").show() ;  
                }else{
                    $("#member_link").html( '<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
' ) ;
                    $("#member_link").show() ;  
                }
            };
            
            if( <?php echo $_smarty_tpl->tpl_vars['commodity']->value;?>
 ){
                $("#index").hide() ;
                commodity_show() ;
                $("#commodity_data").show();
            };
            if( <?php echo $_smarty_tpl->tpl_vars['news']->value;?>
 ){
                $("#index").hide() ;
                $("#news").show();
            };
            function commodity_show(){
                $.ajax({
                    //url: 'http://120.101.8.8/npstore/php/client.php' ,
                    url: 'http://localhost/npstore/php/client.php' ,
                    data:{ action : 'index_goods_show' } ,
                    success : function( goods ){
                        $("#good_show").html(goods) ;
                    }
                })
            } ;
            $("#log_out").click(function(){
                window.location.href = '../web/index.php?log=0' ;
            });
        });
    <?php echo '</script'; ?>
>
</head>
<body>
    <div class=" container ">
        <div class="row">
            <div class="col-sm-3 col-xs-3">
                <a href="../web/index.php">
                    <img src="../logo/logo1.png" width="75%" height="75%" alt="">
                </a>
            </div>
            <div id="logrow" class="col-sm col-xs">
                <form id="log_frame" class="" action="../web/login.php" method="post">
                    <button type="submit" id="log_btn" class="float-right btn btn-sm btn-outline-warning ">登入</button>
                </form>
                <button type="submit" id="log_out" class="float-right btn btn-sm btn-outline-warning "name="log_out" style="display:none;">登出</button>
            </div>
        </div>
        <div class="container bg-warning">
                <ul class="nav navbar list-inline">
                    <li>
                        <a class="disabled" style="color:#f0f0f0 ;">
                            網頁導覽列
                        </a>
                    </li>
                    <li> 
                        <a href="../index.php">
                            首頁
                        </a> 
                    </li>
                    <li> 
                        <a href="?news=show">
                            消息專區
                        </a> 
                    </li>
                    <li>
                        <a href="?commodity=show">
                            商品專區
                        </a>
                    </li>
                    <li>
                        <a id="member_link" href="../web/host.php" style="display:none;" >
                            
                        </a>
                    </li>
                    <li>
                        <a id="host_link" href="../web/host.php" style="display:none;" >
                            店家專區
                        </a>
                    </li>
                </ul>
            
        </div>
        <div id="main_frame" class="">
            <div id="index" class="">
                <div id="carousel" class=" carousel slide " data-ride="carousel" data-interval="3500">
                    <div class="carousel-inner text-center">
                      <div class="carousel-item active">
                        <img class="w-50" src="../img/img3.jpg" alt="" style="width:1000px;" >
                      </div>
                      <div class="carousel-item">
                        <img class="w-50" src="../img/img4.jpg" alt="">
                      </div>
                      <div class="carousel-item">
                        <img class="w-50" src="../img/img5.jpg" alt="">
                      </div>
                    </div>
                    <a href="#carousel" class="carousel-control-prev" role="button" data-slide="prev" >
                      <span class="bg-dark carousel-control-prev-icon"></span>
                    </a>
                    <a href="#carousel" class="carousel-control-next" role="button" data-slide="next" >
                      <span class="bg-dark carousel-control-next-icon"></span>
                    </a>
                    <ol class=" carousel-indicators" >
                      <li data-target="#carousel" data-slide-to="0" class="active"></li>
                      <li data-target="#carousel" data-slide-to="1" ></li>
                      <li data-target="#carousel" data-slide-to="2" ></li>
                    </ol>
                  </div>
                </div>
            </div>
            <div id="news" class="" style="display:none ;">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <table class="table text-center">
                                <thead>
                                    <th>發布時間</th>
                                    <th>消息內容</th>
                                </thead>
                                <tbody>
                                    <td>2019/4/10</td>
                                    <td>5/1即將開幕</td>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div id="commodity_data" class="" style="display:none ;" >
                <div id="commodity" style="margin-top:3%;" >
                    <div class=" container ">
                        <div class=" row ">
                            <div class=" col-sm-6 col-xs-6">
                                查詢 : <input id="commodity_search" type="text" name="" value="" placeholder="輸入商品名">
                            </div>
                            <div class=" col-sm-3 col-xs-3 ">
                                <h6 id="remainder_order_resulte"></h6>
                            </div>
                        </div>
                    </div>
                    <br>
                    <table id="goods" class=" table table-bordered text-center">
                        <thead class="thead-light" >
                            <tr>
                                <th>商品</th>
                                <th>照片</th>
                                <th>價格</th>
                                <th>商品</th>
                                <th>照片</th>
                                <th>價格</th>
                            </tr>
                        </thead>
                        <tbody id="good_show">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html><?php }
}
