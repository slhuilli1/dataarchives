<?php
	defined('_JEXEC') or die('Access deny');

	class plgContentDataarchives extends JPlugin 
	{
		function onContentPrepare($content, $article, $params, $limit){				
			$document = JFactory::getDocument();
			$document->addStyleSheet('plugins/content/aranger/style.css');	

			//ici si on ne veux que faire un remplacement 
			$subst = "class=\"archives-seo\"";
			//ici si on veux garder la data-archive comme metadonnées
			$subst = "$1 class=\"archives-seo\"";
			
			$re = '/(data-archive.*=.*"oui")|(data-archive.*=.*\'oui\')/m';
			
			
			$article->text = preg_replace($re, $subst, $article->text);
		}	
	}