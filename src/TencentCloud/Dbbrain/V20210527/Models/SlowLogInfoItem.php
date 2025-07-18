<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 慢日志详细信息
 *
 * @method string getTimestamp() 获取慢日志开始时间
 * @method void setTimestamp(string $Timestamp) 设置慢日志开始时间
 * @method string getSqlText() 获取sql语句
 * @method void setSqlText(string $SqlText) 设置sql语句
 * @method string getDatabase() 获取数据库
 * @method void setDatabase(string $Database) 设置数据库
 * @method string getUserName() 获取User来源
 * @method void setUserName(string $UserName) 设置User来源
 * @method string getUserHost() 获取IP来源
 * @method void setUserHost(string $UserHost) 设置IP来源
 * @method float getQueryTime() 获取执行时间,单位秒
 * @method void setQueryTime(float $QueryTime) 设置执行时间,单位秒
 * @method float getLockTime() 获取锁时间,单位秒
 * @method void setLockTime(float $LockTime) 设置锁时间,单位秒
 * @method integer getRowsExamined() 获取扫描行数
 * @method void setRowsExamined(integer $RowsExamined) 设置扫描行数
 * @method integer getRowsSent() 获取返回行数
 * @method void setRowsSent(integer $RowsSent) 设置返回行数
 */
class SlowLogInfoItem extends AbstractModel
{
    /**
     * @var string 慢日志开始时间
     */
    public $Timestamp;

    /**
     * @var string sql语句
     */
    public $SqlText;

    /**
     * @var string 数据库
     */
    public $Database;

    /**
     * @var string User来源
     */
    public $UserName;

    /**
     * @var string IP来源
     */
    public $UserHost;

    /**
     * @var float 执行时间,单位秒
     */
    public $QueryTime;

    /**
     * @var float 锁时间,单位秒
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
     * @param string $Timestamp 慢日志开始时间
     * @param string $SqlText sql语句
     * @param string $Database 数据库
     * @param string $UserName User来源
     * @param string $UserHost IP来源
     * @param float $QueryTime 执行时间,单位秒
     * @param float $LockTime 锁时间,单位秒
     * @param integer $RowsExamined 扫描行数
     * @param integer $RowsSent 返回行数
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

        if (array_key_exists("SqlText",$param) and $param["SqlText"] !== null) {
            $this->SqlText = $param["SqlText"];
        }

        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("UserHost",$param) and $param["UserHost"] !== null) {
            $this->UserHost = $param["UserHost"];
        }

        if (array_key_exists("QueryTime",$param) and $param["QueryTime"] !== null) {
            $this->QueryTime = $param["QueryTime"];
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
    }
}
