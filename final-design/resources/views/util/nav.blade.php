<nav class="navbar navbar-inverse" role="navigation" id="navbar">
  <div class="container-fluid">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse"
          data-target="#backup-navbar">
        <span class="sr-only">Change navbar</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="{{ url('/admin/index') }}" class="navbar-brand">CHY</a>
    </div>

    <div class="collapse navbar-collapse" id="backup-navbar">

      <ul class="nav navbar-nav navbar-left">
        <li :class="{active: status=='school'}" @click="school"><a href="#">School</a></li>
        <li :class="{active: status=='academy'}"  @click="academy"><a href="#">Academy</a></li>
        <li :class="{active: status=='apartment'}" class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            Apartment <b class="caret"></b>
          </a>
          <ul class="dropdown-menu">
            <li><a href="#">1</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">1</a></li>
          </ul>
        </li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown active">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            {!! session('user')->name !!}<b class="caret"></b>
          </a>
          <ul class="dropdown-menu">
            <li>
              <a href="#" data-toggle="modal" data-target="#logout">Logout</a>
            </li>
            <li @click="detail"><a href="#">个人信息</a></li>
            <li @click="changePassword"><a href="#">Change password</a></li>
          </ul>
        </li>
      </ul>

    </div>

  </div>

  <div class="modal fade" id="logout" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <span class="modal-title">提示</span>
        </div>

        <div class="modal-body">
          您确定要注销吗？
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-warning">
            <a href="{{ url('/admin/logout') }}">确定</a>
          </button>
          <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
        </div>
      </div>
    </div>
  </div>
</nav>