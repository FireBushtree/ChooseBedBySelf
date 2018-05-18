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
        <li :class="{active: status=='school'}"><a href="{{ url('admin/school') }}">学校</a></li>

        <li :class="{active: status=='campus'}" class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            校区 <b class="caret"></b>
          </a>
          <ul class="dropdown-menu">
            <li><a href="{{ url('/admin/campus') }}">All</a></li>
            <li><a href="{{ url('/admin/campus/create') }}">Add</a></li>
          </ul>
        </li>

        <li :class="{active: status=='apartment'}" class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            公寓 <b class="caret"></b>
          </a>
          <ul class="dropdown-menu">
            <li><a href="{{ url('/admin/apartment') }}">All</a></li>
            <li><a href="{{ url('/admin/apartment/create') }}">Add</a></li>
          </ul>
        </li>

        <li :class="{active: status=='room'}" class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            房间 <b class="caret"></b>
          </a>
          <ul class="dropdown-menu">
            <li><a href="{{ url('/admin/room') }}">All</a></li>
            <li><a href="{{ url('/admin/room/auto-add') }}">Auto-Add</a></li>
            <li><a href="{{ url('/admin/room/create') }}">Add</a></li>
          </ul>
        </li>

        <li :class="{active: status=='notice'}" class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            通知 <b class="caret"></b>
          </a>
          <ul class="dropdown-menu">
            <li><a href="{{ url('/admin/notice') }}">All</a></li>
            <li><a href="{{ url('/admin/notice/create') }}">Add</a></li>
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
            <li><a href="{{ url('/admin/detail') }}">个人信息</a></li>
            <li><a href="{{ url('/admin/change-password') }}">修改密码</a></li>
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
          您确定要退出吗？
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-warning" @click="logout">
            <span>确定</span>
          </button>
          <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
        </div>
      </div>
    </div>
  </div>
</nav>