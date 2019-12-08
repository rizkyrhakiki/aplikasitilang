
<!-- MASTER MENU -->
<li class="nav-main-heading"><span class="sidebar-mini-visible">M</span><span class="sidebar-mini-hidden">Dashboard</span></li>
<li class="{{ Request::is('informasiTilangs*') ? 'active' : '' }}">
    <a href="{!! route('informasiTilangs.index') !!}"><i class="fa fa-edit"></i><span>Manage Informasi Tilang</span></a>
</li>
{{--<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-edit"></i><span>Company User</span></a>
</li>
<li class="{{ Request::is('competencyGroups*') ? 'active' : '' }}">
    <a href="{!! route('competencyGroups.index') !!}"><i class="fa fa-edit"></i><span>Competency Groups</span></a>
</li>
<li class="{{ Request::is('competencies*') ? 'active' : '' }}">
    <a href="{!! route('competencies.index') !!}"><i class="fa fa-edit"></i><span>Competencies</span></a>
</li>
<li class="{{ Request::is('roles*') ? 'active' : '' }}">
    <a href="{!! route('roles.index') !!}"><i class="fa fa-edit"></i><span>Roles</span></a>
</li>--}}
<!-- END MASTER MENU -->

<!-- ASSESSMENT MENU -->
{{--<li class="nav-main-heading"><span class="sidebar-mini-visible">A</span><span class="sidebar-mini-hidden">Assessment</span></li>
<li class="{{ Request::is('assessmentSessions*') ? 'active' : '' }}">
    <a href="{!! route('assessmentSessions.index') !!}"><i class="fa fa-edit"></i><span>Assessment Sessions</span></a>
</li>
<li class="{{ Request::is('assessorMaps*') ? 'active' : '' }}">
    <a href="{!! route('assessorMaps.index') !!}"><i class="fa fa-edit"></i><span>Mapping Ase-aso</span></a>
<li class="{{ Request::is('keyBehaviours*') ? 'active' : '' }}">
    <a href="{!! route('keyBehaviours.index') !!}"><i class="fa fa-edit"></i><span>Key Behaviours</span></a>
</li>
<li class="{{ Request::is('competencyModels*') ? 'active' : '' }}">
    <a href="{!! route('competencyModels.index') !!}"><i class="fa fa-edit"></i><span>Competency Models</span></a>
</li>--}}
<!-- END ASSESSMENT MENU -->

<!-- REKOMENDASI MENU -->

<!-- END REKOMENDASI MENU -->

{{--
<li class="{{ Request::is('groupMemberships*') ? 'active' : '' }}">
    <a href="{!! route('groupMemberships.index') !!}"><i class="fa fa-edit"></i><span>Group Memberships</span></a>
</li>


<li class="{{ Request::is('assessorMapLogs*') ? 'active' : '' }}">
    <a href="{!! route('assessorMapLogs.index') !!}"><i class="fa fa-edit"></i><span>Assessor Map Logs</span></a>
</li>
--}}

{{--<li class="{{ Request::is('kotas*') ? 'active' : '' }}">--}}
    {{--<a href="{!! route('kotas.index') !!}"><i class="fa fa-edit"></i><span>Kotas</span></a>--}}
{{--</li>--}}

