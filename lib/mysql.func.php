<?php
/**
 * 连接数据库
 * @return resource
 */
function connect(){
	$link=mysql_connect(DB_HOST,DB_USER,DB_PWD) or die("数据库连接失败Error:".mysql_errno().":".mysql_error());
	mysql_set_charset(DB_CHARSET);
	mysql_select_db(DB_DBNAME) or die ("指定数据库打开失败");
	return $link;
}

/**
 * 完成记录插入的操作
 * @param  [type]
 * @param  [type]
 * @return [type]
 */
function insert($table,$array){
	$keys=join(",",array_keys($array));
	$vals="'".join("','",array_values($array))."'";
	$sql="insert {$table}($keys) values({$vals})";
	mysql_query($sql);
	return mysql_insert_id();
}

/**
 * 记录更新操作
 * @param  [string] $table
 * @param  [array] $array
 * @param  [string]	$where
 * @return [number]
 * @example update imooc_admin set username=king where id=1
 */
function updata($table,$array,$where=null){
	foreach($array as $ke=>$val){
		if($str==null){
			$sep="";
		}else{
			$sep=',';
		}
	}
	$str.=$sep.$key."='".$val."'";
	$sql="updata {$table} set {$str} ".($where==null?null:"where".$where);
	mysql_query($sql);
	return mysql_affected_rows();
}

/**
 * @param  [string] $table
 * @param  [string] $where
 * @return [number]
 */
function delete($table,$where=null){
	$where=$where==null?null:"where".$where;
	$sql;="delete from {$table} {$where}";
	mysql_query($sql);
	return mysql_affected_rows();
}

/**
 * 得道指定一条记录
 * @param [string] $sql
 * @param [string] $result_type
 * @return multitype
 */
function fetchOne($sql,$result_type=MYSQL_ASSOC){
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result,$result_type);
	return $row;
}

/**
 *  得道结果集中所有记录
 *  @param string $sql
 *  @param [string] $result_type
 * 	@return multitype
 */
function fetchAll($sql;,$result_type=MYSQL_ASSOC){
	$result=mysql_query($sql);
	while (@$row=mysql_fetch_array($result,$result_type)) {
		$rows[]=$row;
	}
	return $rows;
}

/**
 * 得道结果集中记录的条数
 * @param  [string] $sql
 * @return [number]
 */
function getResultNum($sql){
	$result=mysql_query($ssql);
	return mysql_num_rows($result);
}