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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 慢SQL查询接口返回 慢SQL列表详情
 *
 * @method string getRawQuery() 获取慢SQL 语句
 * @method void setRawQuery(string $RawQuery) 设置慢SQL 语句
 * @method string getDatabaseName() 获取慢SQL 查询的数据库
 * @method void setDatabaseName(string $DatabaseName) 设置慢SQL 查询的数据库
 * @method float getDuration() 获取慢SQL执行 耗时
 * @method void setDuration(float $Duration) 设置慢SQL执行 耗时
 * @method string getClientAddr() 获取执行慢SQL的客户端
 * @method void setClientAddr(string $ClientAddr) 设置执行慢SQL的客户端
 * @method string getUserName() 获取执行慢SQL的用户名
 * @method void setUserName(string $UserName) 设置执行慢SQL的用户名
 * @method string getSessionStartTime() 获取慢SQL执行的开始时间
 * @method void setSessionStartTime(string $SessionStartTime) 设置慢SQL执行的开始时间
 */
class RawSlowQuery extends AbstractModel
{
    /**
     * @var string 慢SQL 语句
     */
    public $RawQuery;

    /**
     * @var string 慢SQL 查询的数据库
     */
    public $DatabaseName;

    /**
     * @var float 慢SQL执行 耗时
     */
    public $Duration;

    /**
     * @var string 执行慢SQL的客户端
     */
    public $ClientAddr;

    /**
     * @var string 执行慢SQL的用户名
     */
    public $UserName;

    /**
     * @var string 慢SQL执行的开始时间
     */
    public $SessionStartTime;

    /**
     * @param string $RawQuery 慢SQL 语句
     * @param string $DatabaseName 慢SQL 查询的数据库
     * @param float $Duration 慢SQL执行 耗时
     * @param string $ClientAddr 执行慢SQL的客户端
     * @param string $UserName 执行慢SQL的用户名
     * @param string $SessionStartTime 慢SQL执行的开始时间
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
        if (array_key_exists("RawQuery",$param) and $param["RawQuery"] !== null) {
            $this->RawQuery = $param["RawQuery"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("ClientAddr",$param) and $param["ClientAddr"] !== null) {
            $this->ClientAddr = $param["ClientAddr"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("SessionStartTime",$param) and $param["SessionStartTime"] !== null) {
            $this->SessionStartTime = $param["SessionStartTime"];
        }
    }
}
