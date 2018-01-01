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

<pre>
    <?php
    //print_r($activities)
    ?>
</pre>
<?= $planning ?>

<table class="ui center aligned unstackable celled compact definition table">
    <thead>
    <tr>
        <th></th>
        <th>Lundi</th>
        <th>Mardi</th>
        <th>Mercredi</th>
        <th>Jeudi</th>
        <th>Vendredi</th>
    </tr>
    </thead>
    <tbody>
        <tr>
            <td>8h</td>
            <td rowspan="2">
                <a class="fluid ui simple dropdown orange button">
                    <p class="services">Visite </p>
                    <p>Dr Martin, Dr Dubois  </p>
                    <p>Salle 2</p>
                    <div class="menu">
                        <div class="item"><i class="edit icon"></i> Modifier</div>
                        <div class="item"><i class="delete icon"></i> Supprimer</div>
                        <div class="item"><i class="hide icon"></i> Cacher</div>
                    </div>
                </a>
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>9h</td>
            <td rowspan="3">
                <div class="three ui buttons">
                    <a class=" ui  simple dropdown purple button">
                        <p class="services">Holters</p>
                        <p>Dr Test</p>
                        <p>Salle 20</p>
                        <div class="menu">
                            <div class="item"><i class="edit icon"></i> Modifier</div>
                            <div class="item"><i class="delete icon"></i> Supprimer</div>
                            <div class="item"><i class="hide icon"></i> Cacher</div>
                        </div>
                    </a>
                    <a class="ui  simple dropdown orange button">
                        <p class="services">Visite</p>
                        <p>Dr Durand, Dr Robert, Dr Martin</p>
                        <p>Salle 2</p>
                        <div class="menu">
                            <div class="item"><i class="edit icon"></i> Modifier</div>
                            <div class="item"><i class="delete icon"></i> Supprimer</div>
                            <div class="item"><i class="hide icon"></i> Cacher</div>
                        </div>
                    </a>
                    <a class="ui  simple dropdown blue button">
                        <p class="services">Echo</p>
                        <p>Dr Test</p>
                        <p> Salle 13</p>
                        <div class="menu">
                            <div class="item"><i class="edit icon"></i> Modifier</div>
                            <div class="item"><i class="delete icon"></i> Supprimer</div>
                            <div class="item"><i class="hide icon"></i> Cacher</div>
                        </div>
                    </a>
                </div>
            </td>
            <td rowspan="3">
                <div class="three ui buttons">
                    <a class="ui  simple dropdown orange button">
                        <p class="services">Visite</p>
                        <p>Dr Martin, Dr Dubois, Dr Test3</p>
                        <p>Salle 3</p>
                        <div class="menu">
                            <div class="item"><i class="edit icon"></i> Modifier</div>
                            <div class="item"><i class="delete icon"></i> Supprimer</div>
                            <div class="item"><i class="hide icon"></i> Cacher</div>
                        </div>
                    </a>
                    <a class="ui  simple dropdown blue button">
                        <p class="services">Echo</p>
                        <p>Dr Durand</p>
                        <p>Salle 14</p>
                        <div class="menu">
                            <div class="item"><i class="edit icon"></i> Modifier</div>
                            <div class="item"><i class="delete icon"></i> Supprimer</div>
                            <div class="item"><i class="hide icon"></i> Cacher</div>
                        </div>
                    </a>
                    <a class="ui  simple dropdown green button">
                        <p class="services">Test d'effort</p>
                        <p>Dr Test</p>
                        <p>Salle 15</p>
                        <div class="menu">
                            <div class="item"><i class="edit icon"></i> Modifier</div>
                            <div class="item"><i class="delete icon"></i> Supprimer</div>
                            <div class="item"><i class="hide icon"></i> Cacher</div>
                        </div>
                    </a>
                </div>
            </td>
            <td rowspan="3">
                <div class="three ui buttons">
                    <a class="ui  simple dropdown orange button">
                        <p class="services">Visite</p>
                        <p>Dr Robert, Dr Test2, Dr Test3</p>
                        <p> Salle 1</p>
                        <div class="menu">
                            <div class="item"><i class="edit icon"></i> Modifier</div>
                            <div class="item"><i class="delete icon"></i> Supprimer</div>
                            <div class="item"><i class="hide icon"></i> Cacher</div>
                        </div>
                    </a>
                    <a class="ui  simple dropdown blue button">
                        <p class="services">Echo</p>
                        <p>Dr Durand</p>
                        <p> Salle 13</p>
                        <div class="menu">
                            <div class="item"><i class="edit icon"></i> Modifier</div>
                            <div class="item"><i class="delete icon"></i> Supprimer</div>
                            <div class="item"><i class="hide icon"></i> Cacher</div>
                        </div>
                    </a>
                    <a class="ui  simple dropdown green button">
                        <p class="services">Test d'effort</p>
                        <p>Dr Durand</p>
                        <p>Salle 16</p>
                        <div class="menu">
                            <div class="item"><i class="edit icon"></i> Modifier</div>
                            <div class="item"><i class="delete icon"></i> Supprimer</div>
                            <div class="item"><i class="hide icon"></i> Cacher</div>
                        </div>
                    </a>
                </div>
            </td>
            <td rowspan="3">
                <div class="three ui buttons">
                    <a class="ui  simple dropdown orange button">
                        <p class="services">Visite</p>
                        <p>Dr Martin, Dr Test2, Dr Test3</p>
                        <p>Salle 3</p>
                        <div class="menu">
                            <div class="item"><i class="edit icon"></i> Modifier</div>
                            <div class="item"><i class="delete icon"></i> Supprimer</div>
                            <div class="item"><i class="hide icon"></i> Cacher</div>
                        </div>
                    </a>
                    <a class="ui  simple dropdown blue button">
                        <p class="services">Echo</p>
                        <p>Dr Test</p>
                        <p> Salle 14</p>
                        <div class="menu">
                            <div class="item"><i class="edit icon"></i> Modifier</div>
                            <div class="item"><i class="delete icon"></i> Supprimer</div>
                            <div class="item"><i class="hide icon"></i> Cacher</div>
                        </div>
                    </a>
                    <a class="ui  simple dropdown yellow button">
                        <p class="services">Cardiologie</p>
                        <p>Dr Test</p>
                        <p>Salle 11</p>
                        <div class="menu">
                            <div class="item"><i class="edit icon"></i> Modifier</div>
                            <div class="item"><i class="delete icon"></i> Supprimer</div>
                            <div class="item"><i class="hide icon"></i> Cacher</div>
                        </div>
                    </a>
                </div>
            </td>
        </tr>
        <tr>
            <td >10h</td>
            <td rowspan="2">
                <div class="three ui buttons">
                    <a class=" ui  simple dropdown red button">
                        <p class="services">Pédiatrie</p>
                        <p>Dr Robert</p>
                        <p>Salle 5</p>
                        <div class="menu">
                            <div class="item"><i class="edit icon"></i> Modifier</div>
                            <div class="item"><i class="delete icon"></i> Supprimer</div>
                            <div class="item"><i class="hide icon"></i> Cacher</div>
                        </div>
                    </a>
                    <a class="ui  simple dropdown yellow button">
                        <p class="services">Cardiologie</p>
                        <p>Dr Test</p>
                        <p>Salle 10</p>
                        <div class="menu">
                            <div class="item"><i class="edit icon"></i> Modifier</div>
                            <div class="item"><i class="delete icon"></i> Supprimer</div>
                            <div class="item"><i class="hide icon"></i> Cacher</div>
                        </div>
                    </a>
                    <a class="ui  simple dropdown blue button">
                        <p class="services">Echo</p>
                        <p>Dr Durand</p>
                        <p>Salle 12</p>
                        <div class="menu">
                            <div class="item"><i class="edit icon"></i> Modifier</div>
                            <div class="item"><i class="delete icon"></i> Supprimer</div>
                            <div class="item"><i class="hide icon"></i> Cacher</div>
                        </div>
                    </a>
                </div>
            </td>
        </tr>
        <tr>
            <td>11h</td>
        </tr>
        <tr>
            <td>12h</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>13h</td>
            <td rowspan="3">
                <div class="three ui buttons">
                    <a class=" ui  simple dropdown green button">
                        <p class="services">Test d'effort</p>
                        <p>Dr Dubois, Dr Robert</p>
                        <p>Salle 15</p>
                        <div class="menu">
                            <div class="item"><i class="edit icon"></i> Modifier</div>
                            <div class="item"><i class="delete icon"></i> Supprimer</div>
                            <div class="item"><i class="hide icon"></i> Cacher</div>
                        </div>
                    </a>
                    <a class="ui  simple dropdown blue button">
                        <p class="services">Echo</p>
                        <p>Dr Test, Dr Test2</p>
                        <p>Salle 12</p>
                        <div class="menu">
                            <div class="item"><i class="edit icon"></i> Modifier</div>
                            <div class="item"><i class="delete icon"></i> Supprimer</div>
                            <div class="item"><i class="hide icon"></i> Cacher</div>
                        </div>
                    </a>
                    <a class="ui  simple dropdown red button">
                        <p class="services">Pédiatrie</p>
                        <p>Dr Test, Dr Test2</p>
                        <p>Salle 5
                        <div class="menu">
                            <div class="item"><i class="edit icon"></i> Modifier</div>
                            <div class="item"><i class="delete icon"></i> Supprimer</div>
                            <div class="item"><i class="hide icon"></i> Cacher</div>
                        </div>
                    </a>
                </div>
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>14h</td>
            <td rowspan="3">
                <div class="three ui buttons">
                    <a class="ui simple dropdown green button">
                        <p class="services">Test d'effort</p>
                        <p>Dr Test</p>
                        <p>Salle 16</p>
                        <div class="menu">
                            <div class="item"><i class="edit icon"></i> Modifier</div>
                            <div class="item"><i class="delete icon"></i> Supprimer</div>
                            <div class="item"><i class="hide icon"></i> Cacher</div>
                        </div>
                    </a>
                    <a class="ui simple dropdown blue button">
                        <p class="services">Echo</p>
                        <p>Dr Test, Dr Test2</p>
                        <p>Salle 12</p>
                        <div class="menu">
                            <div class="item"><i class="edit icon"></i> Modifier</div>
                            <div class="item"><i class="delete icon"></i> Supprimer</div>
                            <div class="item"><i class="hide icon"></i> Cacher</div>
                        </div>
                    </a>
                    <a class="ui simple dropdown yellow button">
                        <p class="services">Cardiologie</p>
                        <p>Dr Dubois</p>
                        <p>Salle 11</p>
                        <div class="menu">
                            <div class="item"><i class="edit icon"></i> Modifier</div>
                            <div class="item"><i class="delete icon"></i> Supprimer</div>
                            <div class="item"><i class="hide icon"></i> Cacher</div>
                        </div>
                    </a>
                </div>
            </td>
            <td rowspan="3">
                <div class="two ui buttons">
                    <a class="ui simple dropdown blue button">
                        <p class="services">Echo</p>
                        <p>Dr Test, Dr Test2</p>
                        <p>Salle 12</p>
                        <div class="menu">
                            <div class="item"><i class="edit icon"></i> Modifier</div>
                            <div class="item"><i class="delete icon"></i> Supprimer</div>
                            <div class="item"><i class="hide icon"></i> Cacher</div>
                        </div>
                    </a>
                    <a class="ui simple dropdown red button">
                        <p class="services">Pédiatrie</p>
                        <p>Dr Test</p>
                        <p>Salle 5</p>
                        <div class="menu">
                            <div class="item"><i class="edit icon"></i> Modifier</div>
                            <div class="item"><i class="delete icon"></i> Supprimer</div>
                            <div class="item"><i class="hide icon"></i> Cacher</div>
                        </div>
                    </a>
                </div>
            </td>
            <td rowspan="3">
                <div class="three ui buttons">
                    <a class=" ui  simple dropdown green button">
                        <p class="services">Test d'effort</p>
                        <p>Dr Test</p>
                        <p>Salle 15</p>
                        <div class="menu">
                            <div class="item"><i class="edit icon"></i> Modifier</div>
                            <div class="item"><i class="delete icon"></i> Supprimer</div>
                            <div class="item"><i class="hide icon"></i> Cacher</div>
                        </div>
                    </a>
                    <a class="ui  simple dropdown blue button">
                        <p class="services">Echo</p>
                        <p>Dr Robert</p>
                        <p>Salle 13</p>
                        <div class="menu">
                            <div class="item"><i class="edit icon"></i> Modifier</div>
                            <div class="item"><i class="delete icon"></i> Supprimer</div>
                            <div class="item"><i class="hide icon"></i> Cacher</div>
                        </div>
                    </a>
                    <a class="ui  simple dropdown yellow button">
                        <p class="services">Cardiologie</p>
                        <p>Dr Martin, Dr Dubois</p>
                        <p>Salle 10</p>
                        <div class="menu">
                            <div class="item"><i class="edit icon"></i> Modifier</div>
                            <div class="item"><i class="delete icon"></i> Supprimer</div>
                            <div class="item"><i class="hide icon"></i> Cacher</div>
                        </div>
                    </a>
                </div>
            </td>
            <td rowspan="3">
                <div class="three ui buttons">
                    <a class="ui  simple dropdown blue button">
                        <p class="services">Echo</p>
                        <p>Dr Test, Dr Test2</p>
                        <p>Salle 13</p>
                        <div class="menu">
                            <div class="item"><i class="edit icon"></i> Modifier</div>
                            <div class="item"><i class="delete icon"></i> Supprimer</div>
                            <div class="item"><i class="hide icon"></i> Cacher</div>
                        </div>
                    </a>
                    <a class=" ui  simple dropdown green button">
                        <p class="services">Test d'effort</p>
                        <p>Dr Test</p>
                        <p>Salle 16</p>
                        <div class="menu">
                            <div class="item"><i class="edit icon"></i> Modifier</div>
                            <div class="item"><i class="delete icon"></i> Supprimer</div>
                            <div class="item"><i class="hide icon"></i> Cacher</div>
                        </div>
                    </a>
                    <a class="ui  simple dropdown yellow button">
                        <p class="services">Cardiologie</p>
                        <p>Dr Test</p>
                        <p>Salle 11</p>
                        <div class="menu">
                            <div class="item"><i class="edit icon"></i> Modifier</div>
                            <div class="item"><i class="delete icon"></i> Supprimer</div>
                            <div class="item"><i class="hide icon"></i> Cacher</div>
                        </div>
                    </a>
                </div>
            </td>
        </tr>
        <tr>
            <td>15h</td>
        </tr>
        <tr>
            <td>16h</td>
            <td></td>
        </tr>
        <tr>
            <td>17h</td>
            <td>
                <a class="fluid ui simple dropdown red button">
                    <p><b>Pédiatrie</b> - Dr Test, Dr Test2 - Salle 5</p>
                    <div class="menu">
                        <div class="item"><i class="edit icon"></i> Modifier</div>
                        <div class="item"><i class="delete icon"></i> Supprimer</div>
                        <div class="item"><i class="hide icon"></i> Cacher</div>
                    </div>
                </a>
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table>

<div class="ui centered grid">
    <div class="three column row">
        <div class="five wide column">
            <button class="large ui right labeled icon brown button">
                <i class="add circle icon"></i> Ajouter
            </button>
        </div>
        <div class="six wide column">
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
        <div class="one wide column">
            <button class="circular ui labeled icon button">
                <i class="print icon"></i>
                Imprimer
            </button>
        </div>
    </div>
</div>
<div class="ui divider"></div>
@endsection