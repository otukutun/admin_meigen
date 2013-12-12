<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>
        BoostCake -
        <?php echo $title_for_layout; ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <style>
    body {
        padding-top: 70px; /* 70px to make the container go all the way to the bottom of the topbar */
    }
    .affix {
        position: fixed;
        top: 60px;
        width: 220px;
    }
    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

<?php
echo $this->fetch('meta');
echo $this->fetch('css');
?>
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
<?php echo $this->Html->link('名言管理画面', array(
    'controller' => 'meigens',
    'action' => 'index'
), array('class' => 'navbar-brand')); ?>
            </div>

            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                <li class="divider"></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">タグ<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><?php echo $this->Html->link(__('タグ追加'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
                        <li class="divider"></li>
                        <li><?php echo $this->Html->link(__('タグ一覧'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">名言<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><?php echo $this->Html->link(__('追加'), array('controller' => 'meigens', 'action' => 'add')); ?> </li>
                        <li class="divider"></li>
                        <li><?php echo $this->Html->link(__('一覧'), array('controller' => 'meigens', 'action' => 'add')); ?> </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">シーン<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><?php echo $this->Html->link(__('追加'), array('controller' => 'scenes', 'action' => 'add')); ?> </li>
                        <li class="divider"></li>
                        <li><?php echo $this->Html->link(__('一覧'), array('controller' => 'scenes', 'action' => 'add')); ?> </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">著者<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><?php echo $this->Html->link(__('追加'), array('controller' => 'authors', 'action' => 'add')); ?> </li>
                        <li class="divider"></li>
                        <li><?php echo $this->Html->link(__('一覧'), array('controller' => 'authors', 'action' => 'add')); ?> </li>
                    </ul>
                </li>
               </ul>
            </div>
        </div>
    </nav>

    <div class="container">

        <?php echo $this->fetch('content'); ?>

    </div><!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
    <?php echo $this->fetch('script'); ?>

</body>
</html>
