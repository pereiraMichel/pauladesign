<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of telas
 *
 * @author Debug
 */
class Telas {
    
    
    public function telaSuperior(){
        echo "<div class='navbar-header navbar-text-top' style='border-color: #000000; position: absolute;'>";
        echo "  <div class='container-fluid'>";
        echo "          <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#menu' aria-expanded='false'>";
        echo "              <span class='sr-only'>Menu</span>";
        echo "              <span class='icon-bar'></span>";
        echo "              <span class='icon-bar'></span>";
        echo "              <span class='icon-bar'></span>";
        echo "          </button>";
        echo "          <div class='navbar-subtext-top' style='padding-top: 5px; padding-left: 15px;'>";
        echo "                  <span>";
//        echo "                      <img src='images/logoMapTi100x50.png' width='40' height='41'>";
        echo "                  <a href='index.php' style='text-decoration: none; color: #3F6CA1; font-family: arial; font-size: 12px;' id='tituloRuv'><img src='images/logoMapTI.png' title='MAP TI' width='150' height='40' style='width: 16%; height: 8%'></a> ";
        echo "                  </span>";
//        echo "                  <img src='images/hanzipenImage.png' width='230' height='23' class='image-responsive' style='width: 20%; height: 20%; padding-bottom: 0px;'>";
        echo "          </div>";
        echo "  </div>";
        echo "</div>";
        echo "<div class='collapse navbar-collapse navbar-right' id='menu'>";
        echo "  <ul class='nav navbar-nav' style='padding-right: 25px;'>";
        echo "      <li>";
	echo "          <a href='sistema/' class='text-link'>";
        echo "              <button class='btn btn-warning btn-sm btn-responsive' style='border-radius: 4px; border: none; font-size: 14px;'>";
        echo "                  Entrar";
        echo "              </button>";
        echo "          </a>";
        echo "      </li>";
        echo "      <li>";
        echo "          <a href='formAdesao.php' role='button' style='text-decoration: none;' class='text-link'>";
        echo "              <button class='btn btn-primary btn-sm btn-responsive' style='border-radius: 4px; border: none; font-size: 14px;'>";
        echo "                  Cadastre-se";
        echo "              </button>";
        echo "          </a>";
        echo "      </li>";
        echo "  </ul>";
        echo "</div>";

    }
    
}
