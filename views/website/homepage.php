<?php 
/**
 * This is the homepage layout. All content placed here we'll be displayed when the user
 * calls '/' at browser. Since we have a backend framework it's not needed to import
 * every php file to build header and footer. Our backend already do this.
 */
?>

<!-- 
    This code renders our RD Station acquisition form. 
    All style should be changed according to the HTML and CSS generated here. 
-->
<div role="main" id="newtimes-formulario-leads-page-9cc80504cb28de1971aa"></div>

<!-- 
    Based on the fact that the following divs are script, we should leave them
    loading at bottom of this page. 
-->
<script type="text/javascript" src="https://d335luupugsy2.cloudfront.net/js/rdstation-forms/stable/rdstation-forms.min.js"></script>
<script type="text/javascript">
    new RDStationForms('newtimes-formulario-leads-page-9cc80504cb28de1971aa', 'UA-154439101-1').createForm();
</script>
