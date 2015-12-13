<?php
    $rolesList = Auth::user()->roles->load('permissions')->fetch('permissions')->toArray();
    $permissionsList = array();
    foreach ($rolesList as $r_item) {
        foreach ($r_item as $p_item) {
            if ($p_item["menu_show"] == 1) {
                $permissionsList[$p_item["menu_module"]]["icon"] = $p_item["menu_module_icon"];
                $permissionsList[$p_item["menu_module"]]["items"][] = [$p_item["menu_item_route"], $p_item["menu_item"]];
            }
        }
    }
?>
<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">            
            <div class="pull-left image">
            @if (Auth::user()->avatar)
                <img src="{{ Auth::user()->avatar }}" class="img-circle" alt="{{ Auth::user()->name }}" />
                @else 
                &nbsp;
            @endif
            </div>                 
            <div class="pull-left info">
                <p>{!! Auth::user()->name !!}</p>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="active"><a href="{!! url('admin') !!}"><span>{{ trans('admin/dashboard.menu.dashboard') }}</span></a></li>
            <li class="treeview active">
                <ul class="treeview-menu menu-open" style="display: block;">
                    <?php foreach ($permissionsList as $p_key => $p_value) { ?>
                        <li>
                            <a href="#"><i class="fa {{ $p_value["icon"] }}"></i>{{ $p_key }}<i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <?php foreach ($p_value["items"] as $item) { ?>
                                    <li><a href="{!! route($item[0]) !!}"><i class="fa fa-circle-o"></i>{{ $item[1] }}</a></li>
                                <?php }?>
                            </ul>
                        </li>
                    <?php } ?>
                </ul>
            </li>
        </ul>
        <span style="color:#fff;">
        </span>
    </section>
</aside>