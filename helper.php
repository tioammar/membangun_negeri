<?php
  function getWitelId($witels){
    switch($witels){
      case "TR7";
        $div = "tr7";
        break;
      case "Makasar":
        $div = "makasar";
        break;
      case "Sulselbar":
        $div = "sulselbar";
        break;
      case "Sulteng":
        $div = "sulteng";
        break;
      case "Gorontalo":
        $div = "gorontalo";
        break;
      case "Sulut & Malut":
        $div = "sulut-malut";
        break;
      case "Sultra":
        $div = "sultra";
        break;
      case "Maluku":
        $div = "maluku";
        break;
      case "Papua Barat":
        $div = "papua-barat";
        break;
      case "Papua":
        $div = "papua";
        break;
      default:
        // do nothing
    }
    return $div;
  }

  function getAssuranceDB($assurances){
    switch($assurances){
      case "SLG":
        $dba = "slg";
        break;
      case "GAUL":
        $dba = "gaul";
        break;
      case "Q GGN":
        $dba  = "q_ggn";
        break;
      default:
          // do nothing
    }
    return $dba;
  }

  function getVariable($assurance){
    $vars = array();
    switch($assurance){
      case "SLG":
        $vars['var_1'] = "Tiket Close";
        $vars['var_2'] = "SLG Comply";
        $vars['var_3'] = "% SLG";
        break;
      case "GAUL":
        $vars['var_1'] = "Jumlah GGN";
        $vars['var_2'] = "Jumlah GAUL";
        $vars['var_3'] = "% GAUL";
        break;
      case "Q GGN":        
        $vars['var_1'] = "Jumlah LIS";
        $vars['var_2'] = "Jumlah GGN";
        $vars['var_3'] = "Q (%)";
        break;
      default:
          // do nothing
    }
    return $vars;
  }

  function getSegmentColor($revenues){
    switch($revenues){
      case "Consumer":
        $color = "green accent-4";
        break;
      case "Wholesale":
        $color = "indigo darken-2";
        break;
      case "EGBIS":
        $color = "blue darken-1";
        break;
      default:
          // do nothing
    }
    return $color;
  }

  function getSegmentDB($revenues){
    switch($revenues){
      case "Consumer":
        $db = "consumer";
        break;
      case "Wholesale":
        $db = "wholesale";
        break;
      case "EGBIS":
        $db  = "egbis";
        break;
      default:
          // do nothing
    }
    return $db;
  }

  function rounds($data){
    return round($data, 2);
  }
?>