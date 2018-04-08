<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ToDo-App</title>
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl"
        crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:500" rel="stylesheet">
    <link rel="stylesheet" href="./resources/css/reset.css">
    <link rel="stylesheet" href="./resources/css/style.css">
</head>

<body>
    <!-- HEADER SECTION Start -->
    <header>
        <section class="logo">
            <div class="rahmen">
                <h2>Web Developer</h2>
                <h3>PHP</h3>
            </div>
        </section>

        <section class="title">
            <h1>ToDo-App</h1>
        </section>
    </header>
    <!-- HEADER SECTION End -->

    <main>
        <section class="input">
            <div class="input_box">
                <form action="">
                    <button>
                        <i class="fa fa-plus"></i>
                    </button>
                    <input type="text" name="task" id="task" value="" placeholder="Aufgabe">
                    <select name="kategorie">
                        <option value="teaglich">Täglich</option>
                        <option value="gedanken">Gedanken</option>
                        <option value="kaufen">Einkauf</option>
                    </select>
                    <fieldset>
                        <input type="radio" id="eins" name="prio" value="1">
                        <label for="eins">1</label>
                        <input type="radio" id="zwei" name="prio" value="2">
                        <label for="zwei">2</label>
                        <input type="radio" id="drei" name="prio" value="3" checked>
                        <label class="checked" for="drei">3</label>
                        <input type="radio" id="vier" name="prio" value="4">
                        <label for="vier">4</label>
                        <input type="radio" id="fuenf" name="prio" value="5">
                        <label for="fuenf">5</label>
                    </fieldset>
                </form>
            </div>
        </section>

        <section class="task">
            <table>
                <thead>
                    <tr>
                        <th><i class="fa fa-square"></i></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><i class="fa fa-square"></i></td>
                        <td class="text">viel zu tun jljölkjlö</td>
                        <td>Kategorie</td>
                        <td>Priorität</td>
                        <td><i class="fa fa-trash-alt"></i></td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-square"></i></td>
                        <td>Aufgabe</td>
                        <td>Kategorie</td>
                        <td>Priorität</td>
                        <td><i class="fa fa-trash-alt"></i></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td><i class="fa fa-trash-alt"></i></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tfoot>
            </table>
        </section>

        <section class="done">
            <table>
                <thead>
                    <tr>
                        <th><i class="fa fa-check-square"></i></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><i class="fa fa-check-square"></i></td>
                        <td>Aufgabe</td>
                        <td>Kategorie</td>
                        <td>Priorität</td>
                        <td><i class="fa fa-trash-alt"></i></td>
                    </tr>
                    <tr>
                            <td><i class="fa fa-check-square"></i></td>
                            <td>Aufgabe</td>
                            <td>Kategorie</td>
                            <td>Priorität</td>
                            <td><i class="fa fa-trash-alt"></i></td>
                        </tr>
                    <tr>
                        <td><i class="fa fa-check-square"></i></td>
                        <td>Aufgabe</td>
                        <td>Kategorie</td>
                        <td>Priorität</td>
                        <td><i class="fa fa-trash-alt"></i></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td><i class="fa fa-trash-alt"></i></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tfoot>
            </table>
        </section>

    </main>

    <footer>&COPY; 2108 TL</footer>
    <script src="./resources/js/todo.js"></script>
</body>

</html>