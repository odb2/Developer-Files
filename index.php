<?php
include 'php/helpers.php';

standardHeader();
?>
<script>
window.onload = function() {
    enablePopovers();
};
</script>
<div class="fixed-container">
    <?php writeUIButtons(); ?>
    <div class="green-box" style="left: 0;right: 0;width: 70%;height: 100px;top: 15px;">
        Conclusion
    </div>
    <div class="green-box" style="left: 90px;right: 0;width: 1150px;height: 200px;top: 125px;line-height: 50px;">
        TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST <?php vocabularyWord('observation', 'Noun', 'The gathering of information') ?> TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST TEST <?php vocabularyWord('hypothesis', 'Noun', 'An idea or explanation for something that is based on known facts but has not yet been proved') ?>
    </div>
    <img class="sewer-image" src="images/icons/storm-drain.jpg">
    <img class="shark-image" src="images/icons/shark.png">
    <div class="solid-blue-box">
    <?php questionMarker(1) ?>What did you discover by the outflow.
    <?php writeQuestionInput('sewerinput', 'line-input-holder') ?>
    </div>
    <div class="solid-light-purple-box">
    <?php questionMarker(1) ?>How did that affect the Mako sharks live in their environment?
        <?php writeQuestionTextarea('sharkinput', 'line-input-holder') ?>
    </div>

</div>

<?php
standardFooter();
?>