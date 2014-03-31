<?php
/**
* This file is part of the Checkbook NYC financial transparency software.
* 
* Copyright (C) 2012, 2013 New York City
* 
* This program is free software: you can redistribute it and/or modify
* it under the terms of the GNU Affero General Public License as
* published by the Free Software Foundation, either version 3 of the
* License, or (at your option) any later version.
* 
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU Affero General Public License for more details.
* 
* You should have received a copy of the GNU Affero General Public License
* along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/
?>
<div class="home_totals_links">
      <?php
      foreach($node->data as $key=>$row){
        $dollars_by_cat[$row['category_category']] = $row['check_amount_sum'];
        $total +=  $row['check_amount_sum'];
      }
 //     $link = RequestUtil::preparePayrollBottomNavFilter("spending_landing",null);
      $link = "spending_landing/yeartype/B/year/114?expandBottomCont=true";
      $dollars = "<span class='dollars'>" . custom_number_formatter_format($total,1,'$') . "</span>";      
      ?>
        <div class="positioning">
      <?php if($total != 0 ){?>        
          <a href="/<?php echo $link; ?>"><?php echo $count; ?>Total Spending<br>Previous Fiscal Year<br><?php echo $dollars; ?>
          <span class="div-link"></span>
          </a>
        <?php }else{?>
        <?php echo $count; ?>Total Spending<br>Previous Fiscal Year<br><?php echo $dollars; ?>
        <?php }?>           
        </div>
</div>


