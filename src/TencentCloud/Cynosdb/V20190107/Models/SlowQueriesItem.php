<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例慢查询信息
 *
 * @method integer getTimestamp() 获取执行时间戳
 * @method void setTimestamp(integer $Timestamp) 设置执行时间戳
 * @method float getQueryTime() 获取执行时长，单位秒
 * @method void setQueryTime(float $QueryTime) 设置执行时长，单位秒
 * @method string getSqlText() 获取sql语句
 * @method void setSqlText(string $SqlText) 设置sql语句
 * @method string getUserHost() 获取客户端host
 * @method void setUserHost(string $UserHost) 设置客户端host
 * @method string getUserName() 获取用户名
 * @method void setUserName(string $UserName) 设置用户名
 * @method string getDatabase() 获取数据库名
 * @method void setDatabase(string $Database) 设置数据库名
 * @method float getLockTime() 获取锁时长，单位秒
 * @method void setLockTime(float $LockTime) 设置锁时长，单位秒
 * @method integer getRowsExamined() 获取扫描行数
 * @method void setRowsExamined(integer $RowsExamined) 设置扫描行数
 * @method integer getRowsSent() 获取返回行数
 * @method void setRowsSent(integer $RowsSent) 设置返回行数
 * @method string getSqlTemplate() 获取sql模版
 * @method void setSqlTemplate(string $SqlTemplate) 设置sql模版
 * @method string getSqlMd5() 获取sql语句md5
 * @method void setSqlMd5(string $SqlMd5) 设置sql语句md5
 */
class SlowQueriesItem extends AbstractModel
{
    /**
     * @var integer 执行时间戳
     */
    public $Timestamp;

    /**
     * @var float 执行时长，单位秒
     */
    public $QueryTime;

    /**
     * @var string sql语句
     */
    public $SqlText;

    /**
     * @var string 客户端host
     */
    public $UserHost;

    /**
     * @var string 用户名
     */
    public $UserName;

    /**
     * @var string 数据库名
     */
    public $Database;

    /**
     * @var float 锁时长，单位秒
     */
    public $LockTime;

    /**
     * @var integer 扫描行数
     */
    public $RowsExamined;

    /**
     * @var integer 返回行数
     */
    public $RowsSent;

    /**
     * @var string sql模版
     */
    public $SqlTemplate;

    /**
     * @var string sql语句md5
     */
    public $SqlMd5;

    /**
     * @param integer $Timestamp 执行时间戳
     * @param float $QueryTime 执行时长，单位秒
     * @param string $SqlText sql语句
     * @param string $UserHost 客户端host
     * @param string $UserName 用户名
     * @param string $Database 数据库名
     * @param float $LockTime 锁时长，单位秒
     * @param integer $RowsExamined 扫描行数
     * @param integer $RowsSent 返回行数
     * @param string $SqlTemplate sql模版
     * @param string $SqlMd5 sql语句md5
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("QueryTime",$param) and $param["QueryTime"] !== null) {
            $this->QueryTime = $param["QueryTime"];
        }

        if (array_key_exists("SqlText",$param) and $param["SqlText"] !== null) {
            $this->SqlText = $param["SqlText"];
        }

        if (array_key_exists("UserHost",$param) and $param["UserHost"] !== null) {
            $this->UserHost = $param["UserHost"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }

        if (array_key_exists("LockTime",$param) and $param["LockTime"] !== null) {
            $this->LockTime = $param["LockTime"];
        }

        if (array_key_exists("RowsExamined",$param) and $param["RowsExamined"] !== null) {
            $this->RowsExamined = $param["RowsExamined"];
        }

        if (array_key_exists("RowsSent",$param) and $param["RowsSent"] !== null) {
            $this->RowsSent = $param["RowsSent"];
        }

        if (array_key_exists("SqlTemplate",$param) and $param["SqlTemplate"] !== null) {
            $this->SqlTemplate = $param["SqlTemplate"];
        }

        if (array_key_exists("SqlMd5",$param) and $param["SqlMd5"] !== null) {
            $this->SqlMd5 = $param["SqlMd5"];
        }
    }
}
