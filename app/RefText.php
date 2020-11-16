<?php


namespace App;
use Illuminate\Http\Request;


class RefText
{
    public static function AbntText($doc, $authors, $request)
    {
        $firstName1 = $request->get('firstname1');
        $lastName1 = $request->get('lastname1');
        $firstName2 = $request->get('firstname2');
        $lastName2 = $request->get('lastname2');
        $firstName3 = $request->get('firstname3');
        $lastName3 = $request->get('lastname3');
        if ($doc !== (3 || 10 || 22 || 53 || 28 || 34 || 46 || 49 || 50 || 51)) {
            switch ($authors) {
                case 1:
                    $names = strtoupper($lastName1) . ', ' . $firstName1[0] . '. ';
                    break;
                case 2:
                    $names = strtoupper($lastName1) . ', ' . $firstName1[0] . '.; '
                         . strtoupper($lastName2) . ', ' . $firstName2[0] . '. ';
                    break;
                case 3:
                    $names = strtoupper($lastName1) . ', ' . $firstName1[0] . '.; '
                         . strtoupper($lastName2) . ', ' . $firstName2[0] . '.; '
                         . strtoupper($lastName3) . ', ' . $firstName3[0]. '. ';
                    break;
                case 4:
                    $names = strtoupper($lastName1) . ', ' . $firstName1[0] . '. et al. ';
                    break;
            }
        }

        $title = $request->get('title') . '. ';
        $caption = $request->get('caption') . '. ';
        $edition = $request->get('edition') . '. ed. ';
        $location = $request->get('location');
        $publisher = $request->get('publisher') . ', ';
        $journal = $request->get('journal') . ', ';
        $day = $request->get('day') . ' ';
        $month = $request->get('month') . '. ';
        $year = $request->get('year') . '. ';
        $corporation = $request->get('corporation') . '. ';
        $translatorf = $request->get('translatorf');
        $translatorl = $request->get('translatorl'). '. ';
        $volume = 'v. ' . $request->get('volume') . '.';
        $serie = '(' . $request->get('serie') . ').';
        $issue = 'n. ' . $request->get('issue') . ', ';
        $part = 'pt. ' . $request->get('part');
        $pages = 'p. ' . $request->get('pages') . ', ';
        $supplement = $request->get('supplement') . '. ';
        $newspaper = $request->get('newspapper') . ', ';
        $section = $request->get('section') . ', ';
        $eventname = 'In: ' . $request->get('eventname') . ', ';
        $eventnum = $request->get('eventnum') . '. ';
        $eventcity = $request->get('eventcity') . '. ';
        $eventyear = $request->get('eventyear') . ', ';
        $pubtybe = $request->get('pubtype') . '... ';
        $defenseyear = $request->get('defenseyear');
        $degree = $request->get('degree') . ' ';
        $course = $request->get('course');
        $institution = $request->get('institution') . ', ';
        $entry = $request->get('entry') . '. ';
        $lawtype = $request->get('lawtype') . ' ';
        $lawnumber = 'nº ' . $request->get('lawnumber') . ', de ';
        $description = $request->get('description') . '. ';
        $diario = $request->get('diario') . ', ';
        $diariosec = 'Seção ' . $request->get('diariosec') . '. ';
        $lawdate = $request->get('lawdate') . '. ';
        $link = 'Disponível em: &lt' . $request->get('link') . '&gt. ';
        $accessdate = 'Acesso em: ' . $request->get('accessdate') . '. ';
        $softname = $request->get('softname') . '. ';
        $softversion = 'Versão ' . $request->get('softversion');
        $developer = $request->get('developer') . ', ';

        switch ($doc) {
            case 2:
                return '<div>' . $names . '<strong>' . $title . '</strong>' . $edition . $location . ': ' . $publisher . $year . '</div>';
            case 3:
                return '<div>' . strtoupper($corporation) . '<strong>' . $title . '</strong>' . $location . '. ' . $year. '</div>';
            case 4:
                return '<div>' . $names . '<strong>' . $title . '</strong>' . 'Tradução de ' . $translatorf[0] . '. ' . $translatorl . $location . ': ' . $publisher . $year . '</div>';
            case 5:
                return '<div>' . $names . '<strong>' . $title . '</strong>' . ': ' . $caption . $location . ': ' . $publisher . $year . '</div>';
            case 6:
                return '<div>' . $names . '<strong>' . $title . '</strong>' . $edition . $location . ': ' . $publisher . $year . $volume . '</div>';
            case 7:
                return '<div>' . $names . '<strong>' . $title . '</strong>' . $edition . $location . ': ' . $publisher . $year . $serie . '</div>';
            case 9:
                return '<div>' . $names . $title . '<strong>' . $journal . '</strong>' . $location . ', ' . $volume . $issue . $pages . $year . '</div>';
            case 10:
                return '<div>' . $title . '<strong>' . $journal . '</strong>' . $location . ', ' . $volume . $issue . $pages . $year . '</div>';
            case 11:
                return '<div>' . $names . $title . '<strong>' . $journal . '</strong>' . $location . ', ' . $pages . $year . '</div>';
            case 12:
                return '<div>' . $names . $title . '<strong>' . $journal . '</strong>' . $location . ', ' . $volume . $issue . $pages . $year . $supplement . '</div>';
            case 13:
                return '<div>' . $names . $title . '<strong>' . $journal . '</strong>' . $location . ', ' . $volume . $part . $pages . $year . '</div>';
            case 15:
                return '<div>' . $names . $title . '<strong>' . $journal . '</strong>' . $location . ', ' . $volume . $issue . $pages . $year . 'Editorial.' . '</div>';
            case 16:
                return '<div>' . $names . $title . '<strong>' . $journal . '</strong>' . $location . ', ' . $volume . $issue . $pages . $year . 'Carta.' . '</div>';
            case 18:
                return '<div>' . $names . $title . '<strong>' . $newspaper . '</strong>' . $location . ', ' . $day . $month . $year . $section . $pages . '</div>';
            case 20:
                return '<div>' . $names . $title . strtoupper($eventname) . $eventnum . $eventyear . $eventcity . '<strong>' . $pubtybe . '</strong>' . $location . ': ' . $year . $pages . '</div>';
            case 21:
                return '<div>' . $names . $title . '<strong>' . $journal . '</strong>' . $location . ', ' . $volume . $issue . $pages . $year . 'Apresentado no ' . $eventnum . $eventname . $eventcity. $eventyear . '</div>';
            case 22:
                return '<div>' . strtoupper($eventname) . $eventnum . $eventyear . $eventcity . '<strong>' . $pubtybe . '</strong>' . $location . ': ' . $publisher . $year . '</div>';
            case 24:
                return '<div>' . $names . '<strong>' . $title . '</strong>' . $year . $degree . '(' . $course . ') - ' . $institution . $location . ', ' . $defenseyear . '</div>';
            case 26:
                return '<div>' . $names . '<strong>' . $title . '</strong>' . 'Apostila do Curso de ' . $course . ' na ' . $institution . $year . '</div>';
            case 52:
                return '<div>' . $names . '<strong>' . $title . '</strong>' . $location . ': ' . $year .'</div>';
            case 53:
                return '<div>' . strtoupper($corporation) . '<strong>' . $title . '</strong>' . $location . ': ' . $year .'</div>';
            case 28:
                return '<div>' . strtoupper($corporation) . '<strong>' . $title . '</strong>' . $location . ', ' . $year . '</div>';
            case 30:
                return '<div>' . $names . '<strong>' . $title . '</strong>' . $location . ': ' . $publisher . $year . '</div>';
            case 31:
                return '<div>' . $names . $entry . 'In: ' . $title . $location . ': ' . $publisher . $year . $pages . '</div>';
            case 33:
                return '<div>' . 'BRASIL. Constituição (1988). <strong> Constituição da República Federativa do Brasil. </strong> Brasília, DF: Senado Federal, 1988.';
            case 35:
                return '<div>' . $location . '. ' . $lawtype . $lawnumber . $lawdate . $description . '<strong>' . $diario . '</strong>' . $day . $month . $year . $diariosec . '</div>';
            case 44:
                return '<div>' . $names . '<strong>' . $title . '</strong>' . $location . ': ' . $publisher . $year . $link . $accessdate . '</div>';
            case 45:
                return '<div>' . $names . $title . '<strong>' . $journal . '</strong>' . $location . ', ' . $volume . $issue . $pages . $year . $link . $accessdate . '</div>';
            case 46:
                return '<div>' . strtoupper($location) . '. ' . $lawtype . $lawnumber . $lawdate . $description . $link . $accessdate . '</div>';
            case 49:
                return '<div>' . strtoupper($corporation) . $title . $location . '. ' . $link . $accessdate . '</div>';
            case 50:
                return '<div>' . strtoupper($corporation) . $title . $location . ', c' . $year . $link . $accessdate . '</div>';
            case 51:
                return '<div>' . $softname . $softversion . $location . ': ' . $developer . $year . '</div>';

        }
    }
}
