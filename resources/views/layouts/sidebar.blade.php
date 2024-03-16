@php use App\Http\Services\GateService;use Illuminate\Support\Facades\Gate; @endphp
<div class="main-sidebar sidebar-style-2">
    <div class="sidebar-brand mt-3">
        <a href="{{url('/')}}">
            <img src="{{ asset('img/no-img.png')}}" class="img-fluid h-100 img-thumbnail">
        </a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{url('/')}}">
            <img src="{{ asset('img/no-img.png')}}" class="img-fluid h-100 img-thumbnail">
        </a>


    </div>
    <ul class="sidebar-menu">
        {{-- [ name=>str, title=>str,child=>[]]--}}
        <form action="{{route('web.logout')}}" method="POST">
            @csrf
            <li><a class="nav-link " href="{{route('web.logout')}}"
                   onclick="this.closest('form').submit();return false;">
                    <i class="fas fa-arrow-left"></i>
                    <span>Đăng xuất</span></a>
            </li>

        </form>


        @php
            $listLanguage="Danh sách";

            $addLanguage="Khởi tạo";
        @endphp
        @foreach([
        ['title'=>'Quản trị tài nguyên'],
        ['name'=>'User','icon'=>'<i class="fas fa-user"></i>','routeName'=>'web.users','child'=>
        [
        ['name'=>$listLanguage,'icon'=>'<i class="fas fa-table"></i>','routeName'=>'web.users.index'],
        ['name'=>$addLanguage,'icon'=>'<i class="fas fa-plus"></i>','routeName'=>'web.users.create' ],
        ]],
        ['name'=>'Role','icon'=>'<i class="fas fa-passport"></i>','child'=>
        [
        ['name'=>$listLanguage,'icon'=>'<i class="fas fa-table"></i>','routeName'=>'web.roles.index'],
        ['name'=>$addLanguage,'icon'=>'<i class="fas fa-plus"></i>','routeName'=>'web.roles.create' ],
        ]],
       ['name'=>'Nơi tái chế','icon'=>'<i class="fas fa-place-of-worship"></i>','child'=>
        [
        ['name'=>$listLanguage,'icon'=>'<i class="fas fa-table"></i>','routeName'=>'web.recycle-places.index'],
        ['name'=>$addLanguage,'icon'=>'<i class="fas fa-plus"></i>','routeName'=>'web.recycle-places.create' ],
        ]]

        ,
        ] as $nav
        )

            {{-- <li><a class="nav-link " --}} {{-- href="{{ route('admin.subscribers.index') }}"><i
                    class="fas fa-user"></i>--}}
            {{-- <span>Subscribers</span></a></li>--}}
            @if(isset($nav['title']))
                <li class="menu-header">{{__($nav['title'])}}</li>
            @endif
            @if(isset($nav['name']))
                @if(empty($nav['child']))

                    @can(GateService::getGateDefineFromRouteName($nav['routeName']))
                        <li><a class="nav-link " href="{{route($nav['routeName'])}}">
                                {!! $nav['icon']!!}
                                <span>{{__($nav['name'])}}</span></a></li>
                    @endcan

                @else
                    <li class="dropdown">

                        @php
                            $nameRouteList=[];
                            $html='';
                            foreach($nav['child'] as $child)
                            {
                            $nameRoute=GateService::getGateDefineFromRouteName($child['routeName']);
                            $nameRouteList[]=$nameRoute;

                            if(Gate::allows($nameRoute))
                            {
                            $html.='
                        <li><a class="nav-link " href="'.route($child['routeName']).'">

                                <span>'.$child['icon'].__($child['name']).'</span></a></li>';

                        }
                        }

                        @endphp
                        @canany($nameRouteList)
                            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                                {!! $nav['icon']!!}
                                <span> {{__($nav['name'])}}</span></a>
                            <ul class="dropdown-menu">
                                {!! $html !!}

                            </ul>
                        @endcan

                    </li>

                @endif
            @endif
        @endforeach


    </ul>

    </aside>
</div>
{{--dynamic sidebar--}}
@push('scripts')
    <script>
        const dynamicSidebar = function () {

            // for single sidebar menu
            var url = document.location.protocol + "//" + document.location.hostname + document.location.pathname;

            // multiple
            var navActive = Array.from(document.querySelectorAll('ul.sidebar-menu a')).filter(function (a) {
                return url.includes(a.href);
            });
            navActive.forEach(nav => {
                if (nav.href == url) {
                    nav.parentElement.classList.add('active');
                }
                var parent = nav.closest('li.dropdown');
                if (parent)
                    parent.classList.add('active');
            });
        }
        dynamicSidebar()
        // document.querySelector('[data-toggle="sidebar"]').addEventListener('click', (e) => {
        //     dynamicSidebar();
        // });

    </script>
@endpush
