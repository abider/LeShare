<?php

/**
 * 转换HTML字符串编码至UTF-8
 *
 * @param  string  $data     需转换的字符串
 * @param  string  $dafault  默认编码
 * @return string  转换后的字符串
 */
function characet($data, $default = 'UTF-8')
{
  	if(!empty($data)) {
    	$fileType = mb_detect_encoding($data, ['UTF-8','GBK','LATIN1','BIG5','GB2312']) ;
    	if($fileType != $default) {
      		$data = mb_convert_encoding($data, $default, $fileType);
    	}
  	}
  	return $data;
}

/**
 * 格式化打印输出
 *
 * @param  [type]  $data
 */
function printer($data)
{
	echo '<pre>;';
	print_r($data);
}