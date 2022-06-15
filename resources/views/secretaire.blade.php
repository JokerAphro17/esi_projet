@extends('layouts.master')
@section('content')

<div class="row justify-content-evenly">
    <div class="col-md-6">
        <h3 id="title2">FORMULAIRE D'INSCRIPTION D'un SECRETAIRE</h3>
    </div>
    <div class="col-md-6">
        <div id="btn1" class="btn btn-primary float-right">LISTE DES SECRETAIRE</div>
    </div>
</div>
<div class="card-body table-responsive p-3 d-none" id="list" style="height: 500px;">
    <table class="table table-head-fixed text-nowrap" id="myTable">
        <thead>
            <tr>