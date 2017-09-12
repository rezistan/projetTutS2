@extends('layouts.app')

@section('content')
<div class="ui menu">
    <a class="header item">
        Accueil
    </a>
    <a class="item">
        Services de soins
    </a>
    <a class="active item">
        Emploi du temps
    </a>
    <a class="item">
        A propos
    </a>
    <a class="item">
        Nous contacter
    </a>
    <div class="right menu">
        <div class="item">
            <div class="ui icon input">
                <input type="text" placeholder="Taper votre recherche...">
                <i class="search link icon"></i>
            </div>
        </div>
    </div>
</div>

<div class="ui message">
    <div class="header">
        Trier par :
    </div>
    <div class="ui radio checkbox">
        <input type="radio" name="radio" checked="checked" id="radiotri">
        <label>Général</label>
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

<table class="ui striped definition celled compact fixed table">
    <thead>
    <tr>
        <th class="one wide"></th>
        <th class="three wide center aligned">Lundi</th>
        <th class="three wide center aligned">Mardi</th>
        <th class="three wide center aligned">Mercredi</th>
        <th class="three wide center aligned">Jeudi</th>
        <th class="three wide center aligned">Vendredi</th>
    </tr>
    </thead>
    <tbody>
    <tr class="center aligned" >                                                         <!--        !!!!!!!!! ROW 8H !!!!!!!!!!!             -->
        <td style="overflow:visible">8h</td>
        <td style="overflow:visible" rowspan="2" class="deuxLignes">
            <button class="fluid ui center aligned simple dropdown orange button">
                <p class="services">Visite </p>
                <p>Dr Martin, Dr Dubois  </p>
                <p>Salle 2</p>
                <div class="menu">
                    <div class="item"><i class="edit icon"></i> Modifier</div>
                    <div class="item"><i class="delete icon"></i> Supprimer</div>
                    <div class="item"><i class="hide icon"></i> Cacher</div>
                </div>
            </button>
        </td>
        <td style="overflow:visible">
            <button class="fluid ui center aligned simple dropdown inverted basic button">
                <div class="menu">
                    <div class="item"><i class="edit icon"></i> Modifier</div>
                    <div class="item"><i class="delete icon"></i> Supprimer</div>
                    <div class="item"><i class="hide icon"></i> Cacher</div>
                </div>
            </button>
        </td>
        <td style="overflow:visible" >
            <button class="fluid ui center aligned simple dropdown inverted basic button">
                <div class="menu">
                    <div class="item"><i class="edit icon"></i> Modifier</div>
                    <div class="item"><i class="delete icon"></i> Supprimer</div>
                    <div class="item"><i class="hide icon"></i> Cacher</div>
                </div>
            </button>
        </td>
        <td style="overflow:visible" >
            <button class="fluid ui center aligned simple dropdown inverted basic button">
                <div class="menu">
                    <div class="item"><i class="edit icon"></i> Modifier</div>
                    <div class="item"><i class="delete icon"></i> Supprimer</div>
                    <div class="item"><i class="hide icon"></i> Cacher</div>
                </div>
            </button>
        </td>
        <td style="overflow:visible" >
            <button class="fluid ui center aligned simple dropdown inverted basic button">
                <div class="menu">
                    <div class="item"><i class="edit icon"></i> Modifier</div>
                    <div class="item"><i class="delete icon"></i> Supprimer</div>
                    <div class="item"><i class="hide icon"></i> Cacher</div>
                </div>
            </button>
        </td>
    </tr>

    <tr class="center aligned">
        <td style="overflow:visible">9h</td>                                 <!--        !!!!!!!!! ROW 9H !!!!!!!!!!!             -->
        <td style="overflow:visible" rowspan="3" class="troisLignes">
            <div class="three ui buttons">
                <button class=" ui center aligned simple dropdown purple button">
                    <p class="services">Holters</p>
                    <p>Dr Test</p>
                    <p>Salle 20</p>
                    <div class="menu">
                        <div class="item"><i class="edit icon"></i> Modifier</div>
                        <div class="item"><i class="delete icon"></i> Supprimer</div>
                        <div class="item"><i class="hide icon"></i> Cacher</div>
                    </div>
                </button>
                <button class="ui center aligned simple dropdown orange button">
                    <p class="services">Visite</p>
                    <p>Dr Durand, Dr Robert, Dr Martin</p>
                    <p>Salle 2</p>
                    <div class="menu">
                        <div class="item"><i class="edit icon"></i> Modifier</div>
                        <div class="item"><i class="delete icon"></i> Supprimer</div>
                        <div class="item"><i class="hide icon"></i> Cacher</div>
                    </div>
                </button>
                <button class="ui center aligned simple dropdown blue button">
                    <p class="services">Echo</p>
                    <p>Dr Test</p>
                    <p> Salle 13</p>
                    <div class="menu">
                        <div class="item"><i class="edit icon"></i> Modifier</div>
                        <div class="item"><i class="delete icon"></i> Supprimer</div>
                        <div class="item"><i class="hide icon"></i> Cacher</div>
                    </div>
                </button>
            </div>
        </td>
        <td style="overflow:visible" rowspan="3" class="troisLignes">
            <div class="three ui buttons">
                <button class="ui center aligned simple dropdown orange button">
                    <p class="services">Visite</p>
                    <p>Dr Martin, Dr Dubois, Dr Test3</p>
                    <p>Salle 3</p>
                    <div class="menu">
                        <div class="item"><i class="edit icon"></i> Modifier</div>
                        <div class="item"><i class="delete icon"></i> Supprimer</div>
                        <div class="item"><i class="hide icon"></i> Cacher</div>
                    </div>
                </button>
                <button class="ui center aligned simple dropdown blue button">
                    <p class="services">Echo</p>
                    <p>Dr Durand</p>
                    <p>Salle 14</p>
                    <div class="menu">
                        <div class="item"><i class="edit icon"></i> Modifier</div>
                        <div class="item"><i class="delete icon"></i> Supprimer</div>
                        <div class="item"><i class="hide icon"></i> Cacher</div>
                    </div>
                </button>
                <button class=" ui center aligned simple dropdown green button">
                    <p class="services">Test d'effort</p>
                    <p>Dr Test</p>
                    <p>Salle 15</p>
                    <div class="menu">
                        <div class="item"><i class="edit icon"></i> Modifier</div>
                        <div class="item"><i class="delete icon"></i> Supprimer</div>
                        <div class="item"><i class="hide icon"></i> Cacher</div>
                    </div>
                </button>
            </div>
        </td>
        <td style="overflow:visible" rowspan="3" class="troisLignes">
            <div class="three ui buttons">
                <button class="ui center aligned simple dropdown orange button">
                    <p class="services">Visite</p>
                    <p>Dr Robert, Dr Test2, Dr Test3</p>
                    <p> Salle 1</p>
                    <div class="menu">
                        <div class="item"><i class="edit icon"></i> Modifier</div>
                        <div class="item"><i class="delete icon"></i> Supprimer</div>
                        <div class="item"><i class="hide icon"></i> Cacher</div>
                    </div>
                </button>
                <button class="ui center aligned simple dropdown blue button">
                    <p class="services">Echo</p>
                    <p>Dr Durand</p>
                    <p> Salle 13</p>
                    <div class="menu">
                        <div class="item"><i class="edit icon"></i> Modifier</div>
                        <div class="item"><i class="delete icon"></i> Supprimer</div>
                        <div class="item"><i class="hide icon"></i> Cacher</div>
                    </div>
                </button>
                <button class=" ui center aligned simple dropdown green button">
                    <p class="services">Test d'effort</p>
                    <p>Dr Durand</p>
                    <p>Salle 16</p>
                    <div class="menu">
                        <div class="item"><i class="edit icon"></i> Modifier</div>
                        <div class="item"><i class="delete icon"></i> Supprimer</div>
                        <div class="item"><i class="hide icon"></i> Cacher</div>
                    </div>
                </button>
            </div>
        </td>
        <td style="overflow:visible" rowspan="3" class="troisLignes">
            <div class="three ui buttons">
                <button class="ui center aligned simple dropdown orange button">
                    <p class="services">Visite</p>
                    <p>Dr Martin, Dr Test2, Dr Test3</p>
                    <p>Salle 3</p>
                    <div class="menu">
                        <div class="item"><i class="edit icon"></i> Modifier</div>
                        <div class="item"><i class="delete icon"></i> Supprimer</div>
                        <div class="item"><i class="hide icon"></i> Cacher</div>
                    </div>
                </button>
                <button class="ui center aligned simple dropdown blue button">
                    <p class="services">Echo</p>
                    <p>Dr Test</p>
                    <p> Salle 14</p>
                    <div class="menu">
                        <div class="item"><i class="edit icon"></i> Modifier</div>
                        <div class="item"><i class="delete icon"></i> Supprimer</div>
                        <div class="item"><i class="hide icon"></i> Cacher</div>
                    </div>
                </button>
                <button class=" ui center aligned simple dropdown yellow button">
                    <p class="services">Cardiologie</p>
                    <p>Dr Test</p>
                    <p>Salle 11</p>
                    <div class="menu">
                        <div class="item"><i class="edit icon"></i> Modifier</div>
                        <div class="item"><i class="delete icon"></i> Supprimer</div>
                        <div class="item"><i class="hide icon"></i> Cacher</div>
                    </div>
                </button>
            </div>
        </td>
    </tr>

    <tr class="center aligned">                                                      <!--        !!!!!!!!! ROW 10H !!!!!!!!!!!             -->
        <td style="overflow:visible">10h</td>
        <td style="overflow:visible" rowspan="2" class="deuxLignes">
            <div class="three ui buttons">
                <button class=" ui center aligned simple dropdown red button">
                    <p class="services">Pédiatrie</p>
                    <p>Dr Robert</p>
                    <p>Salle 5</p>
                    <div class="menu">
                        <div class="item"><i class="edit icon"></i> Modifier</div>
                        <div class="item"><i class="delete icon"></i> Supprimer</div>
                        <div class="item"><i class="hide icon"></i> Cacher</div>
                    </div>
                </button>
                <button class="ui center aligned simple dropdown yellow button">
                    <p class="services">Cardiologie</p>
                    <p>Dr Test</p>
                    <p>Salle 10</p>
                    <div class="menu">
                        <div class="item"><i class="edit icon"></i> Modifier</div>
                        <div class="item"><i class="delete icon"></i> Supprimer</div>
                        <div class="item"><i class="hide icon"></i> Cacher</div>
                    </div>
                </button>
                <button class="ui center aligned simple dropdown blue button">
                    <p class="services">Echo</p>
                    <p>Dr Durand</p>
                    <p>Salle 12</p>
                    <div class="menu">
                        <div class="item"><i class="edit icon"></i> Modifier</div>
                        <div class="item"><i class="delete icon"></i> Supprimer</div>
                        <div class="item"><i class="hide icon"></i> Cacher</div>
                    </div>
                </button>
            </div>
        </td>
    </tr>

    <tr class="center aligned">                         <!--        !!!!!!!!! ROW 11H !!!!!!!!!!!             -->
        <td style="overflow:visible">11h</td>
    </tr>

    <tr class="center aligned">                              <!--        !!!!!!!!! ROW 12H !!!!!!!!!!!             -->
        <td style="overflow:visible">12h</td>
        <td style="overflow:visible"></td>
        <td style="overflow:visible"></td>
        <td style="overflow:visible"></td>
        <td style="overflow:visible"></td>
        <td style="overflow:visible"></td>
    </tr>

    <tr class="center aligned">                                  <!--        !!!!!!!!! ROW 13H !!!!!!!!!!!             -->
        <td style="overflow:visible">13h</td>
        <td style="overflow:visible" rowspan="4" class="quatreLignes">
            <div class="three ui buttons">
                <button class=" ui center aligned simple dropdown green button">
                    <p class="services">Test d'effort</p>
                    <p>Dr Dubois, Dr Robert</p>
                    <p>Salle 15</p>
                    <div class="menu">
                        <div class="item"><i class="edit icon"></i> Modifier</div>
                        <div class="item"><i class="delete icon"></i> Supprimer</div>
                        <div class="item"><i class="hide icon"></i> Cacher</div>
                    </div>
                </button>
                <button class="ui center aligned simple dropdown blue button">
                    <p class="services">Echo</p>
                    <p>Dr Test, Dr Test2</p>
                    <p>Salle 12</p>
                    <div class="menu">
                        <div class="item"><i class="edit icon"></i> Modifier</div>
                        <div class="item"><i class="delete icon"></i> Supprimer</div>
                        <div class="item"><i class="hide icon"></i> Cacher</div>
                    </div>
                </button>
                <button class="ui center aligned simple dropdown red button">
                    <p class="services">Pédiatrie</p>
                    <p>Dr Test, Dr Test2</p>
                    <p>Salle 5
                    <div class="menu">
                        <div class="item"><i class="edit icon"></i> Modifier</div>
                        <div class="item"><i class="delete icon"></i> Supprimer</div>
                        <div class="item"><i class="hide icon"></i> Cacher</div>
                    </div>
                </button>
            </div>
        </td>
        <td style="overflow:visible" >
            <button class="fluid ui center aligned simple dropdown inverted basic button">
                <div class="menu">
                    <div class="item"><i class="edit icon"></i> Modifier</div>
                    <div class="item"><i class="delete icon"></i> Supprimer</div>
                    <div class="item"><i class="hide icon"></i> Cacher</div>
                </div>
            </button>
        </td>
        <td style="overflow:visible" >
            <button class="fluid ui center aligned simple dropdown inverted basic button">
                <div class="menu">
                    <div class="item"><i class="edit icon"></i> Modifier</div>
                    <div class="item"><i class="delete icon"></i> Supprimer</div>
                    <div class="item"><i class="hide icon"></i> Cacher</div>
                </div>
            </button>
        </td>
        <td style="overflow:visible" >
            <button class="fluid ui center aligned simple dropdown inverted basic button">
                <div class="menu">
                    <div class="item"><i class="edit icon"></i> Modifier</div>
                    <div class="item"><i class="delete icon"></i> Supprimer</div>
                    <div class="item"><i class="hide icon"></i> Cacher</div>
                </div>
            </button>
        </td>
        <td style="overflow:visible" >
            <button class="fluid ui center aligned simple dropdown inverted basic button">
                <div class="menu">
                    <div class="item"><i class="edit icon"></i> Modifier</div>
                    <div class="item"><i class="delete icon"></i> Supprimer</div>
                    <div class="item"><i class="hide icon"></i> Cacher</div>
                </div>
            </button>
        </td>
    </tr>

    <tr class="center aligned">                                      <!--        !!!!!!!!! ROW 14H !!!!!!!!!!!             -->
        <td style="overflow:visible">14h</td>
        <td style="overflow:visible" rowspan="4" class="quatreLignes">
            <div class="three ui buttons">
                <button class=" ui center aligned simple dropdown green button">
                    <p class="services">Test d'effort</p>
                    <p>Dr Test</p>
                    <p>Salle 16</p>
                    <div class="menu">
                        <div class="item"><i class="edit icon"></i> Modifier</div>
                        <div class="item"><i class="delete icon"></i> Supprimer</div>
                        <div class="item"><i class="hide icon"></i> Cacher</div>
                    </div>
                </button>
                <button class="ui center aligned simple dropdown blue button">
                    <p class="services">Echo</p>
                    <p>Dr Test, Dr Test2</p>
                    <p>Salle 12</p>
                    <div class="menu">
                        <div class="item"><i class="edit icon"></i> Modifier</div>
                        <div class="item"><i class="delete icon"></i> Supprimer</div>
                        <div class="item"><i class="hide icon"></i> Cacher</div>
                    </div>
                </button>
                <button class="ui center aligned simple dropdown yellow button">
                    <p class="services">Cardiologie</p>
                    <p>Dr Dubois</p>
                    <p>Salle 11</p>
                    <div class="menu">
                        <div class="item"><i class="edit icon"></i> Modifier</div>
                        <div class="item"><i class="delete icon"></i> Supprimer</div>
                        <div class="item"><i class="hide icon"></i> Cacher</div>
                    </div>
                </button>
            </div>
        </td>
        <td style="overflow:visible" rowspan="3" class="troisLignes">
            <div class="two ui buttons">
                <button class="ui center aligned simple dropdown blue button">
                    <p class="services">Echo</p>
                    <p>Dr Test, Dr Test2</p>
                    <p>Salle 12</p>
                    <div class="menu">
                        <div class="item"><i class="edit icon"></i> Modifier</div>
                        <div class="item"><i class="delete icon"></i> Supprimer</div>
                        <div class="item"><i class="hide icon"></i> Cacher</div>
                    </div>
                </button>
                <button class=" ui center aligned simple dropdown red button">
                    <p class="services">Pédiatrie</p>
                    <p>Dr Test</p>
                    <p>Salle 5</p>
                    <div class="menu">
                        <div class="item"><i class="edit icon"></i> Modifier</div>
                        <div class="item"><i class="delete icon"></i> Supprimer</div>
                        <div class="item"><i class="hide icon"></i> Cacher</div>
                    </div>
                </button>
            </div>
        </td>
        <td style="overflow:visible" rowspan="4" class="quatreLignes">
            <div class="three ui buttons">
                <button class=" ui center aligned simple dropdown green button">
                    <p class="services">Test d'effort</p>
                    <p>Dr Test</p>
                    <p>Salle 15</p>
                    <div class="menu">
                        <div class="item"><i class="edit icon"></i> Modifier</div>
                        <div class="item"><i class="delete icon"></i> Supprimer</div>
                        <div class="item"><i class="hide icon"></i> Cacher</div>
                    </div>
                </button>
                <button class="ui center aligned simple dropdown blue button">
                    <p class="services">Echo</p>
                    <p>Dr Robert</p>
                    <p>Salle 13</p>
                    <div class="menu">
                        <div class="item"><i class="edit icon"></i> Modifier</div>
                        <div class="item"><i class="delete icon"></i> Supprimer</div>
                        <div class="item"><i class="hide icon"></i> Cacher</div>
                    </div>
                </button>
                <button class="ui center aligned simple dropdown yellow button">
                    <p class="services">Cardiologie</p>
                    <p>Dr Martin, Dr Dubois</p>
                    <p>Salle 10</p>
                    <div class="menu">
                        <div class="item"><i class="edit icon"></i> Modifier</div>
                        <div class="item"><i class="delete icon"></i> Supprimer</div>
                        <div class="item"><i class="hide icon"></i> Cacher</div>
                    </div>
                </button>
            </div>
        </td>
        <td style="overflow:visible" rowspan="4" class="quatreLignes">
            <div class="three ui buttons">
                <button class="ui center aligned simple dropdown blue button">
                    <p class="services">Echo</p>
                    <p>Dr Test, Dr Test2</p>
                    <p>Salle 13</p>
                    <div class="menu">
                        <div class="item"><i class="edit icon"></i> Modifier</div>
                        <div class="item"><i class="delete icon"></i> Supprimer</div>
                        <div class="item"><i class="hide icon"></i> Cacher</div>
                    </div>
                </button>
                <button class=" ui center aligned simple dropdown green button">
                    <p class="services">Test d'effort</p>
                    <p>Dr Test</p>
                    <p>Salle 16</p>
                    <div class="menu">
                        <div class="item"><i class="edit icon"></i> Modifier</div>
                        <div class="item"><i class="delete icon"></i> Supprimer</div>
                        <div class="item"><i class="hide icon"></i> Cacher</div>
                    </div>
                </button>
                <button class="ui center aligned simple dropdown yellow button">
                    <p class="services">Cardiologie</p>
                    <p>Dr Test</p>
                    <p>Salle 11</p>
                    <div class="menu">
                        <div class="item"><i class="edit icon"></i> Modifier</div>
                        <div class="item"><i class="delete icon"></i> Supprimer</div>
                        <div class="item"><i class="hide icon"></i> Cacher</div>
                    </div>
                </button>
            </div>
        </td>
    </tr>

    <tr class="center aligned">                                          <!--        !!!!!!!!! ROW 15H !!!!!!!!!!!             -->
        <td style="overflow:visible">15h</td>

    </tr>

    <tr class="center aligned">                                      <!--        !!!!!!!!! ROW 16H !!!!!!!!!!!             -->
        <td style="overflow:visible">16h</td>



    </tr>

    <tr class="center aligned">                                          <!--        !!!!!!!!! ROW 17H !!!!!!!!!!!             -->
        <td style="overflow:visible">17h</td>
        <td style="overflow:visible" class="uneLigne">
            <button class="fluid ui center aligned simple dropdown red button">
                <p><b>Pédiatrie</b> - Dr Test, Dr Test2 - Salle 5</p>
                <div class="menu">
                    <div class="item"><i class="edit icon"></i> Modifier</div>
                    <div class="item"><i class="delete icon"></i> Supprimer</div>
                    <div class="item"><i class="hide icon"></i> Cacher</div>
                </div>
            </button>
        </td>
        <td style="overflow:visible" >
            <button class="fluid ui center aligned simple dropdown inverted basic button">
                <div class="menu">
                    <div class="item"><i class="edit icon"></i> Modifier</div>
                    <div class="item"><i class="delete icon"></i> Supprimer</div>
                    <div class="item"><i class="hide icon"></i> Cacher</div>
                </div>
            </button>
        </td>
    </tr>
    </tbody>
</table>

<div class="ui centered grid ">
    <div class="three column row">
        <div class="five wide column">
            <div class="large ui right labeled icon brown button">
                <i class="add circle icon"></i> Ajouter
            </div>
        </div>
        <div class="six wide column ">
            <div class="ui pagination menu">
                <a class="icon item">
                    <i class="left chevron icon"></i>
                </a>
                <a class="item">1</a>
                <a class="item">2</a>
                <a class="item">3</a>
                <a class="item">4</a>
                <a class="icon item">
                    <i class="right chevron icon"></i>
                </a>
            </div>
        </div>
        <div class=" one wide column">
            <button class="circular ui labeled icon  button">
                <i class="print icon"></i>
                Imprimer
            </button>
        </div>
    </div>
</div>
<div class="ui divider"></div>
@endsection