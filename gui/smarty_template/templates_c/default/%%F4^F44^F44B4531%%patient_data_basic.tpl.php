<?php /* Smarty version 2.6.22, created on 2015-04-03 12:08:29
         compiled from laboratory/patient_data_basic.tpl */ ?>

<table>
<tbody>
	<tr>
		<td class="adm_item"><?php echo $this->_tpl_vars['LDCaseNr']; ?>
:</td>
		<td class="adm_input"><?php echo $this->_tpl_vars['encounter_nr']; ?>
</td>
	</tr>
	<tr>
		<td class="adm_item"><?php echo $this->_tpl_vars['LDLastName']; ?>
, <?php echo $this->_tpl_vars['LDName']; ?>
, <?php echo $this->_tpl_vars['LDBday']; ?>
:</td>
		<td class="adm_input"><b><?php echo $this->_tpl_vars['sLastName']; ?>
, <?php echo $this->_tpl_vars['sName']; ?>
 <?php echo $this->_tpl_vars['sBday']; ?>
</b></td>
	</tr>
</tbody>
</table>