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
                    <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                    {!! csrf_field() !!}
                    <div class="field">
                        <label>Tâche</label>             
                        <select name="tache" class="ui simple selection dropdown item">
                            <option value="">Tâche souhaitée</option>
                                <?php
                                $editeurs1 = DB::table('tasks')->select('id','task')->get();
                                foreach ($editeurs1 as $editeur) { 
                                    echo '<option value="'.$editeur->id.'">'; 
                                    echo $editeur->task; 
                                    echo '</option>';
                                }        
                                ?> 
                        </select>
                    </div>
                    <div class="field">
                        <label>Salle</label>
                        <select name="salle" class="ui simple selection scrolling dropdown item">
                            <option value="">Salle souhaitée</option>
                                <?php
                                $editeurs2 = DB::table('rooms')->select('id','room')->get();
                                foreach ($editeurs2 as $editeur) { 
                                    echo '<option value="'.$editeur->id.'">'; 
                                    echo $editeur->room;     
                                    echo '</option>';
                                }        
                                ?> 
                        </select>
                    </div>
                    <div class="field">
                        <label>Médecins</label>
                        <select name="medecin[]" multiple="" class="ui simple selection dropdown item">
                            <option value="">Sélectionnez un ou plusieurs médecins</option>
                            <?php
                                $editeurs3 = DB::table('users')->select('id','firstname','lastname')->whereIn('job_id', [1])->get();
                                foreach ($editeurs3 as $editeur) {
                                    echo '<option value="'.$editeur->id.'">';
                                    echo $editeur->firstname;
                                    echo " ";
                                    echo $editeur->lastname;
                                    echo '</option>';
                                }        
                            ?>
                        </select>
                    </div>
                    <div class="field">
                        <label>Jour</label>
                        <input type="number" placeholder="D" min="1" max="5" name="jour" style="width:60px">
                        <input type="number" placeholder="W" min="1" max="52" name="semaine" style="width:65px">
                        <input type="number" placeholder="Y" min="2017" max="" name="annee" style="width:80px">
                    </div>
                    <div class="field">
                        <label>Heure de début</label>
                        <input type="time" name="begin" min="08:00" max="16:00" style="width:120px">
                    </div>
                    <div class="field">
                        <label>Heure de fin</label>
                        <input type="time" name="end" min="10:00" max="18:00" style="width:120px">
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
                <i class="left chevron icon"></i> Semaine précédente
            </a>
            <div class="icon item">Planning de l'année <?=$years['curr']?>, semaine <?=$weeks['curr']?></div>
            <a class="icon item" href="/home/<?=$years['next']?>/<?=$weeks['next']?>">
                Semaine suivante <i class="right chevron icon"></i>
            </a>
        </div>
    </div>
@endsection