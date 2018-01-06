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
                <div class="homeworkArrow">
                    <button class="large ui right labeled icon brown button">
                        <i class="add circle icon"></i> Ajouter
                    </button>
                </div>
                <div class="homeworkArrow"></div>
                <div id="form">
                    <h3>Ajouter un créneau</h3>
                    <form method="post" action="index?week=">
                        <label for="subject">Type de service:</label>
                        <select id="subject" name="subject"></select>
                        <label for="type">Nom du médecin:</label>
                        <select id="type" name="type">
                            <option></option>
                            <option value="1">Devoir</option>
                            <option value="2">Interrogation</option>
                        </select>

                        <label for="salle">Salle:</label>
                        <select id="salle" name="salle"></select>

                        <label for="date">Date:</label>
                        <input type="date" name="date"/>

                        <label for="description">Description:</label>
                        <textarea name="description"></textarea>

                        <label for="password">Code d'accès</label>
                        <input type="password" name="password"/>

                        <input type="hidden" name="formid" value="1"/>

                        <p>Tous les champs sont obligatoires</p>

                        <input type="submit" value="Poster"/>
                    </form>
                </div>


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
<script>
    $(".addLink").click(function (event) {
        $("#addHomework").show();
    });
</script>