@extends('layouts.app')

@section('content')

<div class="ui message">
    <div class="header">
        Trier par :
    </div>
    <div class="ui radio checkbox">
        <input type="radio" name="radio" checked="checked" id="radiotri">
        <label>Personnel</label>
    </div>
    <div class="ui radio checkbox">
        <input type="radio" name="radio">
        <label>Services</label>
    </div>
    <div class="ui radio checkbox">
        <input type="radio" name="radio">
        <label>Médecins</label>
    </div>
</div>
<?=$planning?>
<div class="ui centered grid">
    <div class="three column row">
        <div class="three wide column">
            <button class="large ui right labeled icon brown button">
                <i class="add circle icon"></i> Ajouter
            </button>
        </div>
        <div class="ten wide column">
            <div class="ui pagination menu">
                <a class="icon item" href="/home/<?=$years['prev']?>/<?=$weeks['prev']?>">
                    <i class="left chevron icon"></i>Semaine précédente
                </a>
                <div class="icon item">Planning de l'année <?=$years['curr']?>, semaine <?=$weeks['curr']?></div>
                <a class="icon item" href="/home/<?=$years['next']?>/<?=$weeks['next']?>">
                    Semaine suivante<i class="right chevron icon"></i>
                </a>
            </div>
        </div>
        <div class="three wide column">
            <button class="circular ui labeled icon button">
                <i class="print icon"></i>
                Imprimer
            </button>
        </div>
    </div>
</div>
@endsection