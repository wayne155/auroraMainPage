<?php
/* Smarty version 3.1.33, created on 2019-08-06 08:12:46
  from 'P:\php\blog\App\Home\View\Member\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d49367e268770_81375327',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6701ba6870fdc41d6c394af126def68111d1c79e' => 
    array (
      0 => 'P:\\php\\blog\\App\\Home\\View\\Member\\index.html',
      1 => 1565079108,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Public/head.html' => 1,
  ),
),false)) {
function content_5d49367e268770_81375327 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../Public/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body class="landing-page sidebar-collapse">
     <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
                <div class="container">
                    <div class="dropdown button-dropdown">
                        <a href="#pablo" class="dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">
                            <span class="button-bar"></span>
                            <span class="button-bar"></span>
                            <span class="button-bar"></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-header">顶部导航栏</a>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['firstCate']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                            <a class="dropdown-item" href="index.php?p=Home&c=Article&a=Cate&c_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['cate_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['cate_name'];?>
</a>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <div class="dropdown-divider"></div>
                             <a class="dropdown-item" href="#">友情链接</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">合作方式</a>
                        </div>
                    </div>
                    <div class="navbar-translate">
                        <a class="navbar-brand" href="#" rel="tooltip" title="" data-placement="bottom">
                           <span onclick="window.location.href='index.php'">Aurora</span> 
                            <div class="bubble-wrapper d-inline-block align-top"><svg class="bulb" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px"
                                height="20px" viewBox="0 0 128 128" enable-background="new 0 0 128 128" preserveAspectRatio="xMinYMin meet" xml:space="preserve">
                                <g id="s-bulb">
                               <g>
                                   <path fill-rule="evenodd" clip-rule="evenodd" d="M104.145,42.922c-0.258-9.541-3.436-19.458-10.576-27.913
                                       C88.695,9.245,82.706,5.05,75.47,2.746c-3.798-1.209-7.682-1.965-11.683-1.916c-3.553,0.043-7.022,0.693-10.406,1.747
                                       c-9.279,2.88-16.414,8.597-21.776,16.625C28.182,24.328,26.107,29.98,24.958,36c-0.742,3.904-1.014,7.844-0.657,11.804
                                       c0.858,9.513,4,18.144,10.17,25.542c2.009,2.413,4.117,4.748,5.545,7.566c1.062,2.094,1.989,4.256,2.942,6.4
                                       c1.076,2.427,2.774,4.205,5.371,4.859c1.925,0.485,3.702,1.281,5.499,2.063c2.902,1.265,5.809,2.526,8.709,3.795
                                       c2.195,0.955,4.388,1.918,6.581,2.884c2.589,1.138,5.17,2.287,7.762,3.413c1.31,0.57,2.841,0.235,3.577-0.708
                                       c1.095-1.397,0.673-3.48-1.087-4.271c-1.669-0.753-3.345-1.488-5.019-2.222c-2.038-0.891-4.08-1.776-6.12-2.666
                                       c-2.604-1.136-5.216-2.268-7.821-3.411c-2.003-0.878-4-1.771-6.005-2.644c-1.102-0.479-2.207-0.95-3.326-1.39
                                       c-0.417-0.161-0.891-0.179-1.308-0.344c-0.764-0.298-1.278-0.869-1.553-1.646c-1.768-4.971-4.392-9.464-7.759-13.508
                                       c-1.509-1.809-3.09-3.554-4.336-5.57c-3.335-5.383-5.46-11.171-6.052-17.516c-0.915-9.789,1.291-18.79,6.863-26.889
                                       c4.957-7.208,11.708-12.015,20.204-14.157c6.392-1.611,12.689-1.011,18.773,1.573c9.279,3.942,15.587,10.785,19.488,19.984
                                       c2.296,5.405,3.22,11.05,3.011,16.889c-0.317,8.925-3.272,16.896-8.946,23.792c-2.068,2.513-4.124,5.015-5.803,7.807
                                       c-1.402,2.332-2.552,4.787-3.472,7.349c-0.474,1.314-1.366,2.028-2.757,2.188c-0.928,0.106-1.761,0.435-2.275,1.309
                                       c-0.89,1.508-0.273,3.811,1.588,4.196c1.883,0.39,3.575-0.188,5.144-1.113c1.738-1.026,2.893-2.557,3.605-4.471
                                       c1.734-4.653,4.226-8.836,7.528-12.581c4.964-5.618,8.227-12.141,9.869-19.48C103.665,51.369,104.143,47.883,104.145,42.922z"/>
                                   <path fill-rule="evenodd" clip-rule="evenodd" d="M77.257,116.188c0.884,0.346,1.702,0.202,2.46-0.188
                                       c0.947-0.494,1.366-1.401,1.348-2.405c-0.02-1.136-0.615-2.013-1.687-2.491c-1.944-0.869-3.899-1.721-5.848-2.575
                                       c-1.709-0.747-3.419-1.491-5.13-2.234c-2.676-1.171-5.354-2.338-8.028-3.509c-2.347-1.031-4.684-2.087-7.038-3.102
                                       c-0.792-0.343-1.614-0.626-2.435-0.891c-0.897-0.287-2.432,0.154-2.961,1.172c-0.715,1.37-0.362,3.355,1.264,4.016
                                       c2.498,1.021,4.943,2.155,7.415,3.23c2.935,1.281,5.875,2.56,8.81,3.84c2.003,0.878,3.997,1.774,6.002,2.646
                                       c0.324,0.139,0.452,0.309,0.4,0.68c-0.46,3.388-2.759,5.917-6.027,6.749c-3.471,0.886-7.294-1.126-8.787-4.443
                                       c-0.481-1.063-0.592-2.182-0.792-3.296c-0.254-1.407-1.227-2.001-2.529-2.222c-0.908-0.151-2.159,0.46-2.663,1.422
                                       c-0.438,0.83-0.415,1.74-0.272,2.663c0.696,4.489,2.935,7.963,6.953,10.109c3.115,1.666,6.446,2.109,9.915,1.108
                                       c5.003-1.449,8.154-4.682,9.476-9.707C77.146,116.592,77.19,116.428,77.257,116.188z"/>
                               </g>
                           </g>
                           <g id="www-filament">
                               <path fill-rule="evenodd" clip-rule="evenodd" d="M82.985,29.716c0.897-0.62,1.849-0.822,2.957-0.547
                                   c1.471,0.363,2.109,1.95,1.953,3.176c-0.134,1.05-0.666,1.823-1.564,2.383c-0.25,0.155-0.498,0.438-0.585,0.712
                                   c-0.553,1.734-1.059,3.483-1.584,5.222c-1.027,3.403-2.059,6.806-3.089,10.205c-0.604,1.997-1.211,3.989-1.814,5.985
                                   c-1.007,3.331-2.012,6.67-3.021,10.001c-0.741,2.449-1.484,4.895-2.227,7.345c-1.016,3.353-2.025,6.708-3.051,10.062
                                   c-0.217,0.716-0.948,1.105-1.604,0.909c-0.719-0.215-1.057-0.821-0.822-1.608c1.04-3.506,2.104-7.005,3.151-10.508
                                   c0.364-1.205,0.724-2.423,1.126-3.771c-0.78,0.522-1.44,0.955-2.093,1.4c-0.971,0.659-2.496,0.685-3.463-0.059
                                   c-1.034-0.789-2.072-1.576-3.105-2.36c-1.011,0.771-2.009,1.495-2.968,2.274c-1.044,0.847-2.709,0.815-3.751,0.048
                                   c-0.78-0.574-1.604-1.091-2.516-1.7c0.321,1.07,0.595,2.012,0.879,2.952c1.155,3.807,2.311,7.614,3.46,11.425
                                   c0.084,0.283,0.161,0.6,0.131,0.887c-0.055,0.601-0.562,1.034-1.146,1.081c-0.543,0.045-1.157-0.374-1.344-0.949
                                   c-0.223-0.688-0.418-1.38-0.628-2.069c-1.357-4.498-2.712-8.995-4.074-13.494c-2.142-7.073-4.292-14.143-6.432-21.218
                                   c-0.945-3.118-1.818-6.26-2.834-9.356c-0.494-1.505-0.604-3.163-1.934-4.375c-0.766-0.701-0.747-1.802-0.425-2.832
                                   c0.275-0.885,0.818-1.444,1.703-1.732c1.167-0.381,2.189-0.102,3.155,0.579c0.963,0.675,1.942,1.331,2.909,2.001
                                   c1.774,1.23,3.548,2.467,5.34,3.713c0.854-0.667,1.69-1.326,2.526-1.98c2.092-1.639,4.174-3.288,6.276-4.914
                                   c0.789-0.609,2.453-0.664,3.224-0.089c1.265,0.942,2.491,1.93,3.729,2.9c1.731,1.358,3.462,2.715,5.197,4.082
                                   C77.429,33.558,80.204,31.632,82.985,29.716z M76.578,46.931c0.969-0.69,1.972-1.112,3.223-0.72
                                   c0.871-2.883,1.733-5.738,2.598-8.592c-0.037-0.027-0.071-0.052-0.107-0.082c-0.538,0.37-1.078,0.729-1.615,1.101
                                   c-1.452,1.002-2.898,2.017-4.356,3.011c-1.11,0.759-2.634,0.747-3.716-0.083c-1.969-1.515-3.91-3.071-5.864-4.604
                                   c-0.852-0.669-1.703-1.334-2.583-2.02c-1.043,0.813-2.09,1.621-3.129,2.439c-1.82,1.425-3.612,2.896-5.469,4.276
                                   c-0.99,0.738-2.432,0.763-3.523,0.02c-1.913-1.306-3.813-2.632-5.719-3.947c-0.295-0.206-0.593-0.406-1.044-0.714
                                   c0.96,3.179,1.871,6.201,2.794,9.26c0.205-0.032,0.395-0.032,0.566-0.086c1.027-0.336,1.94-0.049,2.781,0.529
                                   c1.647,1.127,3.29,2.26,4.912,3.415c0.35,0.255,0.56,0.217,0.875-0.037c1.671-1.344,3.368-2.654,5.042-3.993
                                   c1.141-0.916,2.937-0.785,4.069,0.181c1.643,1.404,3.388,2.689,5.091,4.024c0.042,0.033,0.102,0.047,0.187,0.083
                                   C73.242,49.245,74.926,48.105,76.578,46.931z M58.842,56.22c-1.109,0.887-2.681,0.887-3.8,0.103
                                   c-1.462-1.027-2.936-2.034-4.404-3.048c-0.141-0.099-0.283-0.189-0.567-0.375c0.981,3.251,1.921,6.36,2.869,9.502
                                   c0.791-0.181,1.538-0.45,2.304-0.103c0.256,0.118,0.54,0.186,0.773,0.334c0.95,0.628,1.891,1.271,2.826,1.924
                                   c0.253,0.175,0.43,0.189,0.693-0.025c0.866-0.709,1.776-1.363,2.642-2.074c1.126-0.928,2.846-0.918,3.977,0.019
                                   c0.864,0.716,1.772,1.371,2.641,2.077c0.246,0.201,0.415,0.177,0.647,0.017c0.734-0.512,1.478-1,2.207-1.517
                                   c0.595-0.423,1.191-0.828,1.945-0.873c0.422-0.024,0.845-0.004,1.382-0.004c0.854-2.827,1.741-5.768,2.629-8.712
                                   c-0.035-0.022-0.074-0.045-0.11-0.066c-1.198,0.829-2.402,1.652-3.601,2.488c-0.624,0.432-1.232,0.851-2.021,0.982
                                   c-0.781,0.128-1.497-0.009-2.094-0.452c-1.885-1.412-3.73-2.875-5.633-4.353C62.366,53.453,60.59,54.814,58.842,56.22z
                                    M49.028,49.956c2.344,1.648,4.709,3.274,7.077,4.887c0.628,0.428,1.043,0.387,1.659-0.094c1.708-1.326,3.414-2.657,5.121-3.987
                                   c0.839-0.653,1.699-0.653,2.537,0c1.704,1.331,3.409,2.661,5.121,3.987c0.615,0.481,1.028,0.522,1.658,0.094
                                   c2.369-1.613,4.725-3.247,7.086-4.874c0.473-0.325,0.651-0.772,0.525-1.338c-0.091-0.433-0.369-0.79-0.793-0.757
                                   c-0.429,0.026-0.88,0.21-1.245,0.443c-0.899,0.564-1.756,1.198-2.628,1.804c-0.794,0.555-1.589,1.109-2.388,1.659
                                   c-0.772,0.534-1.678,0.551-2.419-0.02c-1.791-1.381-3.56-2.781-5.33-4.185c-0.543-0.429-1.167-0.429-1.71,0
                                   c-1.771,1.404-3.541,2.804-5.328,4.181c-0.742,0.575-1.648,0.562-2.425,0.024c-1.653-1.146-3.304-2.295-4.958-3.439
                                   c-0.204-0.143-0.413-0.278-0.636-0.376c-0.814-0.355-1.507,0.114-1.61,1.089C48.567,49.361,48.733,49.747,49.028,49.956z
                                    M69.706,69.17c1.593-1.068,3.174-2.148,4.762-3.23c0.433-0.293,0.533-0.718,0.451-1.198c-0.075-0.439-0.348-0.77-0.781-0.783
                                   c-0.331-0.012-0.712,0.114-0.997,0.293c-0.946,0.599-1.859,1.252-2.787,1.878c-0.884,0.597-1.77,0.554-2.615-0.106
                                   c-0.926-0.729-1.854-1.457-2.781-2.18c-0.52-0.405-1.094-0.403-1.619,0.008c-0.927,0.722-1.851,1.449-2.779,2.176
                                   c-0.841,0.661-1.728,0.694-2.615,0.096c-0.913-0.617-1.818-1.245-2.732-1.857c-0.725-0.484-1.3-0.452-1.658,0.066
                                   c-0.386,0.562-0.22,1.265,0.432,1.712c1.502,1.037,3.008,2.06,4.521,3.081c0.596,0.396,1.035,0.381,1.624-0.062
                                   c0.955-0.717,1.889-1.463,2.849-2.173c0.768-0.572,1.585-0.569,2.355,0.003c0.96,0.716,1.895,1.462,2.854,2.174
                                   c0.232,0.173,0.526,0.271,0.787,0.399C69.262,69.355,69.511,69.304,69.706,69.17z"/>
                           </g>
                           </svg>
                                 <div class="light"><span class="glow"></span><span class="flare"></span></div>
                           </div>
                        </a>
                        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse justify-content-end" data-nav-image="<?php echo @constant('IMAGES_DIR');?>
blurred-image-1.jpg">
                        <ul class="navbar-nav">
                            <li class="nav-item">   
                                        <a class="nav-link" href="index.php?p=Home&c=Member&a=index">成员简介</a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link" href="index.php?p=Home&c=Article&a=index">最新文章</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">回到顶部</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#/issues">此网站有问题？</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" rel="tooltip" title="在微博上关注我们" data-placement="bottom" href="#CreativeTim" target="_blank">
                                    <i class="fa fa-weibo"></i>
                                    <p class="d-lg-none d-xl-none">在微博上关注我们</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" rel="tooltip" title="在微信上关注我们" data-placement="bottom" href="#CreativeTim" target="_blank">
                                    <i class="fa fa-wechat"></i>
                                    <p class="d-lg-none d-xl-none">在微信上关注我们</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" rel="tooltip" title="通过邮箱联系我们" data-placement="bottom" href="#" target="_blank">
                                    <i class="fa fa-envelope-o"></i>
                                    <p class="d-lg-none d-xl-none">通过邮箱联系我们</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
    <!-- End Navbar -->
    <div class="wrapper">
        <div class="page-header page-header-small">
            <div class="page-header-image" data-parallax="true" style="background-image: url('<?php echo @constant('IMAGES_DIR');?>
aurora1.jpg');">
            </div>
            <div class="container">
                <div class="content-center banner-center">
                    <div class="page-icon mx-auto rounded-circle">
                    <i class="fa fa-user-o fa-5x"></i>

                    </div>
                       <h1 style="margin-top:30px;">成员简介</h1>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container ">
                <!-- team-member-start -->
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['member_list']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                <div class="row text-center mt-auto">
                    <div class="col-md-4  ml-auto mt-3">
                        <div class="team-player">
                            <div>
                                <a href="index.php?p=Home&c=Article&a=member&m_id=<?php echo $_smarty_tpl->tpl_vars['row']->value['member_id'];?>
">
                            <img src="/Uploads/member_profile/<?php echo $_smarty_tpl->tpl_vars['row']->value['member_profile'];?>
" alt="Thumbnail Image" class="rounded-circle img-fluid img-raised" style="max-width: 100px;height: 100px">
                                </a>

                            </div>
                            <h4 class="title mt-0"><?php echo $_smarty_tpl->tpl_vars['row']->value['member_name'];?>
</h4>
                            <p class="category text-primary md-0"><?php echo $_smarty_tpl->tpl_vars['row']->value['group_name'];?>
</p>
                        </div>
                    </div>
                    <div class="col-md-4 my-auto  mr-auto ">
                        <p class="description"><?php echo $_smarty_tpl->tpl_vars['row']->value['member_desc'];?>

                        </p>
                    </div>
                </div>
                <hr class="mt-0 mb-5" style="filter: alpha(opacity=100,finishopacity=0,style=3)" width="10%" color="#6f5499" size="3" />


                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <!-- team-member-end -->
            </div>
        </div>
        <div class="tlinks">Collect from <a href="http://www.cssmoban.com/" >网站建设</a></div>
        <div class="section section-team text-center">
            <div class="container">
                <?php echo $_smarty_tpl->tpl_vars['strPage']->value;?>

            </div>
        </div>

        <footer class="footer footer-default">
            <div class="container">
                <nav>
                    <ul>
                        <li>
                            <a href="#">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                关于我们
                            </a>
                        </li>
                        <li>
                            <a href="#">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright">
                    &copy;
                    <?php echo '<script'; ?>
>
                        document.write(new Date().getFullYear())
                    <?php echo '</script'; ?>
>
                </div>
            </div>
        </footer>
    </div>
</body>
<!--   Core JS Files   -->
<?php echo '<script'; ?>
 src="<?php echo @constant('JS_DIR');?>
core/jquery.3.2.1.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo @constant('JS_DIR');?>
core/popper.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo @constant('JS_DIR');?>
core/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<?php echo '<script'; ?>
 src="<?php echo @constant('JS_DIR');?>
plugins/bootstrap-switch.js"><?php echo '</script'; ?>
>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<?php echo '<script'; ?>
 src="<?php echo @constant('JS_DIR');?>
plugins/nouislider.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<?php echo '<script'; ?>
 src="<?php echo @constant('JS_DIR');?>
plugins/bootstrap-datepicker.js" type="text/javascript"><?php echo '</script'; ?>
>
<!-- Share Library etc -->
<?php echo '<script'; ?>
 src="<?php echo @constant('JS_DIR');?>
plugins/jquery.sharrre.js" type="text/javascript"><?php echo '</script'; ?>
>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<?php echo '<script'; ?>
 src="<?php echo @constant('JS_DIR');?>
now-ui-kit.js?v=1.1.0" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo @constant('JS_DIR');?>
plugins/bubble.js"><?php echo '</script'; ?>
>

</html><?php }
}