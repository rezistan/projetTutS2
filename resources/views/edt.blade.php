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
    <div>
        <a class="large ui left floated simple dropdown right labeled icon brown button">
            <i class="add circle icon"></i> Ajouter
            <div class="menu">
                <h3>Ajouter un créneau</h3>
                <form class="ui form" method="post" action="{{route('edt.create')}}">
                    <div class="field">
                        <label>Tâche</label>
                        <div class="ui selection dropdown">
                            <input type="hidden" name="task">
                            <i class="dropdown icon"></i>
                            <div class="default text">Tâche souhaitée</div>
                            <div class="menu">
                                <div class="item" data-value="1">tâche1</div>
                                <div class="item" data-value="2">tâche2</div>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label>Salle</label>
                        <div class="ui selection dropdown">
                            <input type="hidden" name="room">
                            <i class="dropdown icon"></i>
                            <div class="default text">Salle souhaitée</div>
                            <div class="menu">
                                <div class="item" data-value="1">salleDispo1</div>
                                <div class="item" data-value="2">salleDispo2</div>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label>Médecins</label>
                        <select multiple="" class="ui dropdown">
                            <option value="">Sélectionnez un ou plusieurs médecins</option>
                            <option value="AF">Vincent</option>
                            <option value="AF">Philippe</option>
                        </select>
                    </div>
                    <div class="field">
                        <label>Jour</label>
                        <input type="date" name="day">
                    </div>
                    <div class="field">
                        <label>Heure de début</label>
                        <input type="time" name="begin">
                    </div>
                    <div class="field">
                        <label>Heure de fin</label>
                        <input type="time" name="end">
                    </div>
                    <button class="ui button" type="submit">Ajouter</button>
                </form>
            </div>
        </a>
        <button class="circular ui right floated labeled icon button">
            <i class="print icon"></i>
            Imprimer
        </button>
        <div class="ui clearing divider"></div>
    </div>
    <?=$planning;?>
    <div class="ui centered grid">
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
@endsection