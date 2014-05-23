<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// Falta trabajar en esto, para hacerlo de verdad modular
// y no tener que hacer cambios en el codigo, para cada nuevo proyecto

if (!function_exists('allowed_or_redirect'))
{
	function allowed_or_redirect($sController,$sAction)
	{		
		$CI =& get_instance();
		// tipo que diferencia a los usuarios entre si
    	$sType = $CI->session->userdata('type');
    	$CI->config->load('roles_config');
       	if(!isset($sType))
		{
			// redireccionar al logout
			// redirect(base_url().'accounts/logout');
		}
		else
		{
			$aPermissions = $CI->config->item($sType);
			if (in_array($sAction, $aPermissions[$sController]))
			{
				return TRUE;
			}
			else
			{
				if ($sType == 'owner')
				{
					redirect(base_url().'owners/profile');
				}
				elseif ($sType == 'agent')
				{
					redirect(base_url().'agents/profile');
				}
			}
		}
	}
}