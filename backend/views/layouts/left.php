<?php
use yii\bootstrap\Nav;

?>
<aside class="main-sidebar ">

    <section class="sidebar ">

        <!-- Sidebar user panel -->
        <div class="user-panel">
           
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?=
        Nav::widget(
            [
                'encodeLabels' => false,
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    '<li class="header">Menu Yii2</li>',
                    ['label' => '<i class="fa fa-file-code-o"></i><span>Agendamentos</span>', 'url' => ['/agendamentos']],
                    ['label' => '<i class="fa fa-dashboard"></i><span>Pacientes</span>', 'url' => ['/pacientes']],
                    ['label' => '<i class="fa fa-dashboard"></i><span>Exames</span>', 'url' => ['/exames']],
                    ['label' => '<i class="fa fa-dashboard"></i><span>Profissionais</span>', 'url' => ['/debug']],
                    ['label' => '<i class="fa fa-dashboard"></i><span>Resultados exames</span>', 'url' => ['/debug']],
                    
                ],
            ]
        );
        ?>

       
    </section>

</aside>
