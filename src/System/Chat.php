<?php
namespace System;

/**
*	@author Ammar Faizi <ammarfaizi2@gmail.com>
*/
trait Chat
{
		/**
		*
		*/
		private $wl;
		private function word_list()
		{
			/**
			*
			* hai,hay,hi,hy
			*		mode,answer,wordcheck
			*/
			$this->wl = array(
				'hai,hay,hi,hy'=>array(
					1,array(),true,
				),
			
			
			
			
			);
		}
		private function chat()
		{
			$this->exms = explode(' ',$this->msg);
			$this->cword = count($this->exms);
			$this->mslg = strlen($this->msg);
			foreach($this->wl as $key => $val){
				if($r=$this->{'check'.$val[0]}($val[1],$val[2],$val[3])){
					
				}
			}
		}
		
		/**
		*		@param wordlist
		*/
		private function check1($wordlist,$wordcheck,$maxwords,$maxlength)
		{
			if(self::max_($this->mslg,$maxlength) or self::max_($this->cword,$maxwords)){
				return false;
			} else
			if(self::max_())
		}
		private static function max_(int $n,int $max)
		{
			return $n>$max;
		}
}