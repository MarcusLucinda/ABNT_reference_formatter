<?php


namespace App;


class Formats
{
    /**
     * @var string
     */



    static public function naming($authors, $doc_id)
    {
        $name = '<div class="col-auto mt-3"><label for="%1$s">%2$s</label>
                                  <input type="text" class="form-control" style="min-width:250px;" name="%1$s" id="%1$s">
                                  </div>';
        $firstName1 = sprintf($name, 'firstname1', 'Nome do autor 1');
        $lastName1 = sprintf($name, 'lastname1', 'Último nome do autor 1');
        $firstName2 = sprintf($name, 'firstname2', 'Nome do autor 2');
        $lastName2 = sprintf($name, 'lastname2', 'Último nome do autor 2');
        $firstName3 = sprintf($name, 'firstname3', 'Nome do autor 3');
        $lastName3 = sprintf($name, 'lastname3', 'Último nome do autor 3');

        if (!in_array($doc_id, array(3, 10, 22, 53, 28, 34, 35, 46, 49, 50, 51))) {
            switch ($authors) {
                case 4:
                case 1:
                    return '<div class="form-row">' . $firstName1 . $lastName1;
                case 2:
                    return '<div class="form-row">' . $firstName1 . $lastName1
                        . $firstName2 . $lastName2;
                case 3:
                    return '<div class="form-row">' . $firstName1 . $lastName1
                        . $firstName2 . $lastName2
                        . $firstName3 . $lastName3;
            }
        }
    }

    static public function docFormat($doc_id)
    {
        $field = '<div class="col-auto mt-3"><label for=%1$s>%2$s</label>
                                 <input type="text" class="form-control" style="min-width:250px;" placeholder="%3$s" name="%1$s" id="%1$s">
                                 </div>';
        $title = sprintf($field, 'title', 'Título', 'A comunicação científica');
        $caption = sprintf($field, 'caption', 'Subtítulo', 'um retrato da ação social');
        $edition = sprintf($field,'edition', 'Edição (se houver)', '2');
        $location = sprintf($field, 'location', 'Local', 'São Paulo');
        $publisher = sprintf($field, 'publisher', 'Editora', 'Bookman');
        $journal = sprintf($field, 'journal', 'Periódico', 'Science Materials');
        $day = sprintf($field, 'day', 'Dia', '08');
        $month = sprintf($field, 'month', 'Mês', 'mar');
        $year = sprintf($field, 'year', 'Ano', '2016');
        $corporation = sprintf($field, 'corporation', 'Entidade', 'Ibama');
        $translatorf = sprintf($field, 'translatorf', 'Nome do tradutor', 'Yuri');
        $translatorl = sprintf($field, 'translatorl', 'Sobrenome do tradutor', 'Toledo');
        $volume = sprintf($field, 'volume', 'Volume', '6');
        $serie = sprintf($field, 'serie', 'Nota de série', 'OPS publicación 580');
        $issue = sprintf($field, 'issue', 'Fascículo', '4');
        $part = sprintf($field, 'part', 'Parte', '2');
        $pages = sprintf($field, 'pages', 'Paginação', '105-110');
        $supplement = sprintf($field, 'supplement', 'Suplemento', 'Suplemento 1');
        $newspaper = sprintf($field, 'newspaper', 'Nome do jornal', 'Estadão');
        $section = sprintf($field, 'section', 'Seção', 'Economia');
        $eventname = sprintf($field, 'eventname', 'Nome do evento', 'IFP Food Tech');
        $eventnum = sprintf($field, 'eventnum', 'Número do evento', '36');
        $eventcity = sprintf($field, 'eventcity', 'Cidade do evento', 'Toronto');
        $eventyear = sprintf($field, 'eventyear', 'Ano do evento', '2004');
        $pubtybe = sprintf($field, 'pubtype', 'Tipo de publicação', 'Anais');
        $defenseyear = sprintf($field, 'defenseyear', 'Ano da defesa', '2013');
        $degree = sprintf($field, 'degree', 'Tipo', 'Dissertação');
        $course = sprintf($field, 'course', 'Curso', 'Mestrado em Nutrição');
        $institution = sprintf($field, 'institution', 'Instituição', 'Universidade Federal do ABC');
        $entry = sprintf($field, 'entry', 'Verbete', 'Ácidos Nucleicos');
        $lawtype = sprintf($field, 'lawtype', 'Tipo', 'Decreto');
        $lawnumber = sprintf($field, 'lawnumber', 'Número', '60.732');
        $description = sprintf($field, 'description', 'Descrição', 'Disciplina a execução...');
        $diario = sprintf($field, 'diario', 'Diário de publicação', 'Diário Oficial da União');
        $diariosec = sprintf($field, 'diariosec', 'Seção', '2:5');
        $lawdate = sprintf($field, 'lawdate', 'Data', '19 de setembro de 1990');
        $link = sprintf($field, 'link', 'URL', 'https://bit.ly/33Mpn0c');
        $accessdate = sprintf($field, 'accessdate', 'Data de acesso', '13 ago. 2019');
        $softname = sprintf($field, 'softname', 'Nome do software', 'Solidworks');
        $softversion = sprintf($field, 'softversion', 'Versão do software', '6.10.8');
        $developer = sprintf($field, 'developer', 'Desenvolvedora', 'Dassault');

        switch($doc_id){
            case 2:
                return $title . $edition . $location . $publisher . $year . '</div>';
            case 28:
            case 53:
            case 3:
                return '<div class="form-row">' . $corporation . $title . $location . $year . '</div>';
            case 4:
                return $title . $translatorf . $translatorl . $location . $publisher . $year . '</div>';
            case 5:
                return $title . $caption . $edition . $location . $publisher . $year . '</div>';
            case 6:
                return $title . $edition . $location . $publisher . $year . $volume . '</div>';
            case 7:
                return $title . $edition . $location . $publisher . $year . $serie . '</div>';
            case 9:
            case 15:
            case 16:
                return $title . $journal . $location . $volume . $issue . $pages . $year . '</div>';
            case 10:
                return '<div class="form-row">' . $title . $journal . $location . $volume . $issue . $pages . $year . '</div>';
            case 11:
                return $title . $journal . $location . $pages . $month . $year . '</div>';
            case 12:
                return $title . $journal . $location . $volume . $issue . $pages . $year . $supplement . '</div>';
            case 13:
                return $title . $journal . $location . $volume . $part . $pages . $year . '</div>';
            case 18:
                return $title . $newspaper . $location . $day . $month . $year . $section . $pages . '</div>';
            case 20:
                return $title . $eventname . $eventnum . $eventyear . $eventcity . $pubtybe . $location . $publisher . $year . $pages . '</div>';
            case 21:
                return $title . $journal . $location . $volume . $issue . $pages . $year . $eventname . $eventnum . $eventcity . $eventyear . '</div>';
            case 22:
                return '<div class="form-row">' . $eventname . $eventnum . $eventyear . $pubtybe . $location . $publisher . $year . '</div>';
            case 24:
                return $title . $year . $degree . $course . $institution . $location . $defenseyear . '</div>';
            case 26:
                return $title . $location . $course . $institution . $year . '</div>';
            case 52:
                return $title . $location . $year . '</div>';
            case 30:
                return $title . $location . $publisher . $year . '</div>';
            case 31:
                return $entry . $title . $location . $publisher . $year . $pages . '</div>';
            case 35:
                return '<div class="form-row">' . $location . $lawtype . $lawnumber . $lawdate . $description . $diario . $day . $month . $year . $diariosec . '</div>';
            case 44:
                return $title . $location . $publisher . $year .$link . $accessdate . '</div>';
            case 45:
                return $title . $journal . $location . $volume . $issue . $year . $link . $accessdate . '</div>';
            case 46:
                return '<div class="form-row">' . $location . $lawtype . $lawnumber . $lawdate . $description . $link . $accessdate . '</div>';
            case 49:
                return '<div class="form-row">' . $corporation . $title . $location . $link . $accessdate . '</div>';
            case 50:
                return '<div class="form-row">' . $corporation . $title . $location . $year . $link . $accessdate . '</div>';
            case 51:
                return '<div class="form-row">' . $softname . $softversion . $location . $developer .$year . '</div>';
        }
    }
}


