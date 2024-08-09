<?php

return function($site) {

    return $site->children()->not('error');
    // return $site->children()->listed();
    
};