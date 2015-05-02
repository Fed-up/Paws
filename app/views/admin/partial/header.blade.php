
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Time 4 Paws Admin</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
			<li><a href="#"> HI {{ Auth::user()->fname }}</a></li>
            <li>{{ HTML::link('/', 'Homepage') }}</li>
            <li><a href="/admin/user/members">Users</a></li>
            <li><a href="/logout">Logout</a></li>
          </ul>
        </div>
      </div>
    </div>
    
