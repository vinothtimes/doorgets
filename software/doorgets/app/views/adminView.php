<?php

/*******************************************************************************
/*******************************************************************************
    doorGets 7.0 - 20, February 2014
    doorGets it's free PHP Open Source CMS PHP & MySQL
    Copyright (C) 2012 - 2015 By Mounir R'Quiba -> Crazy PHP Lover
    
/*******************************************************************************

    Website : http://www.doorgets.com
    Contact : moonair@doorgets.com
    
/*******************************************************************************
    -= One life, One code =-
/*******************************************************************************
    
    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
    
******************************************************************************
******************************************************************************/

class adminView extends doorgetsView{
    
    public $info;
    
    public function __construct(&$doorgets) {
        
        $fileTemp = BASE.'temp/admin.php';
        if (is_file($fileTemp)) {
            
            $cFile = file_get_contents($fileTemp);
            $this->info = @unserialize($cFile);
            
        }
        
        parent::__construct($doorgets);

    }
    
}