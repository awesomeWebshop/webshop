<?php
    class Template {
        
        /**
         * Render head tags (always required)
         * @param type $title
         * @param type $options
         */
        public static function renderHead($title, $options = array()){
            return '
<!DOCTYPE html>
<html>
    <head>
        <title>'.$title.'</title>
';
        }
        
        /**
         * Render body head powered by the selected template
         * @param type $options
         */
        public static function renderBodyHead($options = array()){
            return Theme::renderThemeHead();
        }
        
        /**
         * Render body footer powered by the selected template
         * @param type $options
         */
        public static function renderBodyFooter($options = array()){
            return Theme::renderThemeFooter();
        }
        
        /**
         * Render footer tags (always required)
         * @param type $options
         */
        public static function renderFooter($options = array()){
            return '
    </body>
</html>';
        }
    }