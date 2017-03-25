<?php

wp_enqueue_script('jquery');
wp_enqueue_media();

?>
<!DOCTYPE html>

    <!-- Pasek nawigacji   -->
    <br>
    <h3>Dodaj nowy produkt</h3>   

    
    
    <form action="../wp-content/plugins/MyFirstPlugin/add_product.php" method="post" name="myForm">
        
        <table class="wp-list-table widefat fixed striped pages">
            
            <tr>
		<td style="width:15%;">
                    <label for="name_product"><b>Nazwa produktu</b></label>
                </td>
                <td style="width:85%;">
                    <input type="text" name="name_product" id="name_product" class="regular-text">
                </td>
            </tr>
            <tr>
		<td>
                     <label for="image_url"><b>Grafika</b></label>
                </td>
                <td>
                    <div>                       
                        <input type="text" name="image_url" id="image_url" class="regular-text">
                        <input type="button" name="upload-btn" id="upload-btn" class="button-secondary" value="Upload Image">
                    </div>
                </td>
            </tr>
            <tr>
		<td>
                    <label for="category"><b>Kategoria</b></label>
                </td>
                <td>
                    <input type="text" name="category" id="category" class="regular-text">
                </td>
            </tr>
             <tr>
		<td>
                    <label for="price"><b>Cena</b></label>
                </td>
                <td>
                    <input type="number" onchange="setTwoNumberDecimal" min="0" max="2000" step="0.25" value="0.00"  name="price" id="price" class="regular-text">
                </td>
            </tr>
            <tr>
		<td>
                    <label for="company"><b>Firma</b></label>
                </td>
                <td>
                    <input type="text" name="company" id="company" class="regular-text">
                </td>
            </tr>
            <tr>
		<td>
                    <label for="description"><b>Opis</b></label>
                </td>
                <td>
                    
                    <textarea rows="7" cols="50" name="description" id="description" class="regular-text">
                    </textarea>
                </td>
            </tr>
            <tr>
                <td>
                </td>
		<td>
                    <input type="submit" value="Zatwierdź" class="button action" />
                    <input type="reset" value="Wyczyść" class="button action" />
                </td>
            </tr>            
        </table>    
    </form>
    
    
    <script type="text/javascript">
        jQuery(document).ready(function($){
            $('#upload-btn').click(function(e) {
                e.preventDefault();
                var image = wp.media({ 
                    title: 'Upload Image',
                    // mutiple: true if you want to upload multiple files at once
                    multiple: false
                }).open()
                .on('select', function(e){
                    // This will return the selected image from the Media Uploader, the result is an object
                    var uploaded_image = image.state().get('selection').first();
                    // We convert uploaded_image to a JSON object to make accessing it easier
                    // Output to the console uploaded_image
                    console.log(uploaded_image);
                    var image_url = uploaded_image.toJSON().url;
                    // Let's assign the url value to the input field
                    $('#image_url').val(image_url);
                });
            });
        });
        
        myHTMLNumberInput.onchange = setTwoNumberDecimal;
        
        function setTwoNumberDecimal(event) {
            this.value = parseFloat(this.value).toFixed(2);
        }
        
    </script>