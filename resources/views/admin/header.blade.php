<!-- 顶部区域 -->
<div class="layui-header header-menu">
    <div class="logo posb" id="log">
        <div style="color: #fff;font-size: 28px;text-align: center;line-height: 54px;">
            {{config('app.name')}}
        </div>
    </div>
    <div class="layui-main posb">
        <!-- 左侧导航收缩开关 -->
        <div class="side-menu-switch posb" id="toggle"><span class="switch"  ara-hidden="true"></span></div>
        <!-- 顶级菜单 -->
        <div class="larry-top-menu posb">
            <ul class="layui-nav clearfix" id="menu">
            </ul>
        </div>
        <!-- 右侧常用菜单导航 -->
        <div class="larry-right-menu posb">
            <ul class="layui-nav clearfix">
                <li class="layui-nav-item">
                    <a class="onFullScreen" id="FullScreen"><i class="larry-icon larry-quanping"></i>全屏</a>
                </li>
                <li class="layui-nav-item">
                    <a id="lock"><i class="larry-icon larry-diannao5"></i>锁屏</a>
                </li>
                <li class="layui-nav-item exit">
                    <a id="logout" data-url='{{ route('admin.index.outLogin') }}'>
                        <i class="larry-icon larry-exit"></i>
                        <cite>退出</cite>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>