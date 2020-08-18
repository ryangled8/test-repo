@extends('layouts/app')

@section('content')
    <wrapper
        :site-header='@json($site_header ?? null)'
        :page-builder='@json($model['page-builder'] ?? null)'
        :site-footer='@json($site_footer ?? null)'
    ></wrapper>
@endsection
