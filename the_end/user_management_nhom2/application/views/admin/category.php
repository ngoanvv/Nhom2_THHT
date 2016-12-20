<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="">NHÓM 2 TÍCH HỢP HỆ THỐNG</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
            </a>

            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->
    <script>
        function setURL(url){
            document.getElementById('iframe').src = url;
        }
    </script>
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                    </div>
                    <!-- /input-group -->
                </li>
                <li>
                    <a href="#"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Quản lý user<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?php echo base_url() ?>admin/user">Danh sách thành viên</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
<!--                <li>-->
<!--                        <a class="btn btn-lg btn-primary btn-block" name="clickme1" id="clickme1"-->
<!--                        onclick="setURL('http://localhost/hvol/index.php/hospice')"/>Tình nguyện viên</a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a class="btn btn-lg btn-primary btn-block" name="clickme1" id="clickme1"-->
<!--                       onclick="setURL('http://localhost/chikitsa/module/index')"/>Tình nguyện viên</a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a class="btn btn-lg btn-primary btn-block" name="clickme1" id="clickme1"-->
<!--                       onclick="setURL('http://localhost/thirra/index.php/ehr/ehr/index/ehr_dashboard/ehr_dashboard/index')"/>Tình nguyện viên</a>-->
<!--                </li>-->


            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
<!--        <div style="width:90%;margin-left: 300px; margin-top: 200px;">-->
<!--            <div id="result">-->
<!--            </div>-->
<!--            <iframe id="iframe" width="800px" height="600px" frameborder="0"/>-->
<!---->
<!--        </div>-->
    <!-- /.navbar-static-side -->
</nav>