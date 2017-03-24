<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<!DOCTYPE html>

    <!-- Pasek nawigacji   -->
    <br>
    <h3>Produkty</h3>   

    <table class="wp-list-table widefat fixed striped pages">
        <thead>
            <tr>
		<td id="cb" class="manage-column column-cb check-column">
                    <input id="cb-select-all-1" type="checkbox">
                </td>
                <th scope="col" id="product_name" class="manage-column column-title column-primary sortable desc">
                    <a href=""><!--  http://localhost/wp-admin/edit.php?post_type=page&amp;orderby=title&amp;order=asc  -->
                        <span>Nazwa produktu</span>
                        <span class="sorting-indicator"></span>
                    </a>
                </th>
                <th scope="col" id="product_image" class="manage-column column-title column-primary sortable desc">
                    <span>Grafika</span>
                </th>
                <th scope="col" id="product_category" class="manage-column column-title column-primary sortable desc">
                    <a href="">
                        <span>Kategoria</span>
                        <span class="sorting-indicator"></span>
                    </a>
                </th>
                <th scope="col" id="product_price" class="manage-column column-title column-primary sortable desc">
                    <a href="">
                        <span>Cena</span>
                        <span class="sorting-indicator"></span>
                    </a>
                </th>
                <th scope="col" id="product_company" class="manage-column column-title column-primary sortable desc">
                    <a href="">
                        <span>Firma</span>
                        <span class="sorting-indicator"></span>
                    </a>
                </th>
                <th scope="col" id="product_description" class="manage-column column-title column-primary sortable desc">
                    <span>Opis</span>
                </th>                
            </tr>             
        </thead>
        <tbody>
            <!-- wiersz -->
            <tr>
                <th id="cb" class="manage-column column-cb check-column">
                    <input id="cb-select-all-1" type="checkbox">
                </th>
                <td>
                    Ołówki
                </td>
                <td>
                    <img src="https://yt3.ggpht.com/-v0soe-ievYE/AAAAAAAAAAI/AAAAAAAAAAA/OixOH_h84Po/s900-c-k-no-mo-rj-c0xffffff/photo.jpg" alt="Smiley face" height="42" width="42">
                </td>
                <td>
                    Przybory
                </td>
                <td>
                    14.99 zł
                </td>
                <td>
                    Kredke
                </td>
                <td>
                    Ołówki artystyczne do rysowania portretów
                </td>
            </tr>
            <!-- -->
        </tbody>
        <tfoot>
            
        </tfoot>
    </table>