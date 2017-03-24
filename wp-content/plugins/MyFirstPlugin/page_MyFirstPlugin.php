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
    <ul class="subsubsub">
	<li class="all"><a href="" class="current">Wszystkie <span class="count">(<span class="all-count">0</span>)</span></a> |</li>
	<li class="moderated"><a href="">Opublikowane <span class="count">(<span class="pending-count">0</span>)</span></a> |</li>
	<li class="approved"><a href="">Nieopublikowane <span class="count">(<span class="approved-count">0</span>)</span></a> |</li>
    </ul>
    
    <form id="posts-filter" method="get">
        
        <div class="tablenav top">

				<div class="alignleft actions bulkactions">
			<label for="bulk-action-selector-top" class="screen-reader-text">Wybierz działanie na wielu</label><select name="action" id="bulk-action-selector-top">
<option value="-1">Masowe działania</option>
	<option value="edit" class="hide-if-no-js">Edytuj</option>
	<option value="trash">Przenieś do kosza</option>
</select>
<input type="submit" id="doaction" class="button action" value="Zastosuj">
		</div>
				<div class="alignleft actions">
		<label for="filter-by-date" class="screen-reader-text">Filtruj po dacie</label>
		<select name="m" id="filter-by-date">
			<option selected="selected" value="0">Wszystkie daty</option>
<option value="201703">Marzec 2017</option>
		</select>
<input type="submit" name="filter_action" id="post-query-submit" class="button" value="Przefiltruj">		</div>
<div class="tablenav-pages one-page"><span class="displaying-num">4 elementy</span>
<span class="pagination-links"><span class="tablenav-pages-navspan" aria-hidden="true">«</span>
<span class="tablenav-pages-navspan" aria-hidden="true">‹</span>
<span class="paging-input"><label for="current-page-selector" class="screen-reader-text">Bieżąca strona</label><input class="current-page" id="current-page-selector" type="text" name="paged" value="1" size="1" aria-describedby="table-paging"><span class="tablenav-paging-text"> z <span class="total-pages">1</span></span></span>
<span class="tablenav-pages-navspan" aria-hidden="true">›</span>
<span class="tablenav-pages-navspan" aria-hidden="true">»</span></span></div>
		<br class="clear">
	</div>
        <!-- -->
        <table class="wp-list-table widefat fixed striped pages">
	<thead>
            <tr>
                <td id="cb" class="manage-column column-cb check-column">
                    <label class="screen-reader-text" for="cb-select-all-1">Wybierz wszystko</label>
                    <input id="cb-select-all-1" type="checkbox">
                </td>     
                <th scope="col" id="title" class="manage-column column-title column-primary sortable desc">
                    <a href="edit_product.php">
                        <span>Nazwa produktu</span><span class="sorting-indicator"></span>
                    </a>
                </th>
            </tr>
            
            
            <!-- --><!--  
            <tr>
		<td id="cb" class="manage-column column-cb check-column"><label class="screen-reader-text" for="cb-select-all-1">Wybierz wszystko</label><input id="cb-select-all-1" type="checkbox"></td><th scope="col" id="title" class="manage-column column-title column-primary sortable desc"><a href="http://localhost/wp-admin/edit.php?post_type=page&amp;orderby=title&amp;order=asc"><span>Tytuł</span><span class="sorting-indicator"></span></a></th><th scope="col" id="author" class="manage-column column-author">Autor</th><th scope="col" id="comments" class="manage-column column-comments num sortable desc"><a href="http://localhost/wp-admin/edit.php?post_type=page&amp;orderby=comment_count&amp;order=asc"><span><span class="vers comment-grey-bubble" title="Komentarze"><span class="screen-reader-text">Komentarze</span></span></span><span class="sorting-indicator"></span></a></th><th scope="col" id="date" class="manage-column column-date sortable asc"><a href="http://localhost/wp-admin/edit.php?post_type=page&amp;orderby=date&amp;order=desc"><span>Data</span><span class="sorting-indicator"></span></a></th>	
        </tr>
          -->
	
	</thead>

	<tbody id="the-list">
					<tr id="post-40" class="iedit author-self level-0 post-40 type-page status-publish hentry">
			<th scope="row" class="check-column">			<label class="screen-reader-text" for="cb-select-40">Wybierz Aktualności</label>
			<input id="cb-select-40" type="checkbox" name="post[]" value="40">
			<div class="locked-indicator">
				<span class="locked-indicator-icon" aria-hidden="true"></span>
				<span class="screen-reader-text">“Aktualności” jest zablokowany</span>
			</div>
		</th><td class="title column-title has-row-actions column-primary page-title" data-colname="Tytuł"><div class="locked-info"><span class="locked-avatar"></span> <span class="locked-text"></span></div>
<strong><a class="row-title" href="http://localhost/wp-admin/post.php?post=40&amp;action=edit" aria-label="„Aktualności” (Edycja)">Aktualności</a> — <span class="post-state">Strona z wpisami</span></strong>

<div class="hidden" id="inline_40">
	<div class="post_title">Aktualności</div><div class="post_name">aktualnosci</div>
	<div class="post_author">1</div>
	<div class="comment_status">closed</div>
	<div class="ping_status">closed</div>
	<div class="_status">publish</div>
	<div class="jj">22</div>
	<div class="mm">03</div>
	<div class="aa">2017</div>
	<div class="hh">12</div>
	<div class="mn">54</div>
	<div class="ss">53</div>
	<div class="post_password"></div><div class="post_parent">0</div><div class="page_template">template-left-sidebar.php</div><div class="menu_order">0</div></div><div class="row-actions"><span class="edit"><a href="http://localhost/wp-admin/post.php?post=40&amp;action=edit" aria-label="Edytuj „Aktualności”">Edytuj</a> | </span><span class="inline hide-if-no-js"><a href="#" class="editinline" aria-label="Szybka edycja „Aktualności”">Szybka&nbsp;edycja</a> | </span><span class="trash"><a href="http://localhost/wp-admin/post.php?post=40&amp;action=trash&amp;_wpnonce=14941b2e0d" class="submitdelete" aria-label="Przenieś „Aktualności” do kosza">Do kosza</a> | </span><span class="view"><a href="http://localhost/aktualnosci/" rel="permalink" aria-label="Zobacz „Aktualności”">Zobacz</a></span></div><button type="button" class="toggle-row"><span class="screen-reader-text">Pokaż więcej szczegółów</span></button></td><td class="author column-author" data-colname="Autor"><a href="edit.php?post_type=page&amp;author=1">admin</a></td><td class="comments column-comments" data-colname="Komentarze">		<div class="post-com-count-wrapper">
		<span aria-hidden="true">—</span><span class="screen-reader-text">Brak komentarzy</span><span class="post-com-count post-com-count-pending post-com-count-no-pending"><span class="comment-count comment-count-no-pending" aria-hidden="true">0</span><span class="screen-reader-text">Brak komentarzy</span></span>		</div>
		</td><td class="date column-date" data-colname="Data">Opublikowano<br><abbr title="2017-03-22 12:54:53">22.03.2017</abbr></td>		</tr>
			
			
			
		</tbody>

	<tfoot>
	<tr>
		<td class="manage-column column-cb check-column">
                    <label class="screen-reader-text" for="cb-select-all-2">Wybierz wszystko</label>
                    <input id="cb-select-all-2" type="checkbox">
                </td>
                <th scope="col" class="manage-column column-title column-primary sortable desc">
                    <a href="http://localhost/wp-admin/edit.php?post_type=page&amp;orderby=title&amp;order=asc"><span>Tytuł</span><span class="sorting-indicator"></span></a>
                </th>
                <th scope="col" class="manage-column column-author">Autor</th>
                <th scope="col" class="manage-column column-comments num sortable desc">
                    <a href="http://localhost/wp-admin/edit.php?post_type=page&amp;orderby=comment_count&amp;order=asc">
                        <span><span class="vers comment-grey-bubble" title="Komentarze"><span class="screen-reader-text">Komentarze</span></span></span>
                        <span class="sorting-indicator"></span>
                    </a></th>
                    <th scope="col" class="manage-column column-date sortable asc">
                        <a href="http://localhost/wp-admin/edit.php?post_type=page&amp;orderby=date&amp;order=desc"><span>Data</span><span class="sorting-indicator"></span>
                        </a>
                    </th>	
        </tr>
	</tfoot>

</table>
    </form>