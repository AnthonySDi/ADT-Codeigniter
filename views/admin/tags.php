<?PHP $this->load->view('admin/header'); ?>
<!-- ++++++++++ Start of Add-ct.php +++++++++ -->

<div id="left">
        <button id="ButtonAC">
            Add Tags
        </button>
    <form action="<?php echo base_url() ;?>AdminForms/addtags" method="POST">
        <label>
            Tags
        </label>
        <div id="AddTagsFields">

        </div>
        <div id="submit" style="display:none;">
            <input type="submit" name="submit" value="submit">
        </div>
    </form>
    
</div>
<div id="right">

    <?php

    if($tags == null){
        //if $categories is null tell user no categories
        echo '<p> No Tags yet</p>';

    } // end if
    else
    {
        // if $categories is not null tell give user categories
        foreach($tags as $row){

        ?>
        <section class="acat">
            <div class="catName">
                <?php echo $row->adtTagsTag; ?>
            </div>
            <div class="Edits">

            </div>
            <div class="catEdit">
                <button id="ButtonEdit">
                    Edit
                </button>
            </div>
        </section>
    <?php
        } //end of foreach
    } // end else

    ?>

</div>

        <script type="text/javascript">
            jQuery(document).ready(function($){
                 $(document).on('click', 'Button#ButtonAC', function(event){
                    event.preventDefault();

                    $("div#submit").css("display","block");
                    addCategories();
                
                });

                function addCategories()
                {
                    var html = '';    

                    html += '<div class="field">';
                    html += '<input type="text" name="categories[]">';
                    html += '</div>';

                    $("div#AddTagsFields").append(html);
                }
            });


        </script>
<!-- ++++++++++ End of Add-Ct.php +++++++++ -->
<?PHP $this->load->view('footer'); ?>