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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 慢SQL查询接口返回 慢SQL列表详情
 *
 * @method string getRawQuery() 获取<p>慢SQL 语句</p>
 * @method void setRawQuery(string $RawQuery) 设置<p>慢SQL 语句</p>
 * @method string getDatabaseName() 获取<p>慢SQL 查询的数据库</p>
 * @method void setDatabaseName(string $DatabaseName) 设置<p>慢SQL 查询的数据库</p>
 * @method float getDuration() 获取<p>慢SQL执行 耗时</p>
 * @method void setDuration(float $Duration) 设置<p>慢SQL执行 耗时</p>
 * @method string getClientAddr() 获取<p>执行慢SQL的客户端</p>
 * @method void setClientAddr(string $ClientAddr) 设置<p>执行慢SQL的客户端</p>
 * @method string getUserName() 获取<p>执行慢SQL的用户名</p>
 * @method void setUserName(string $UserName) 设置<p>执行慢SQL的用户名</p>
 * @method string getSessionStartTime() 获取<p>慢SQL执行的开始时间</p>
 * @method void setSessionStartTime(string $SessionStartTime) 设置<p>慢SQL执行的开始时间</p>
 * @method integer getProcessId() 获取<p>执行慢SQL的进程ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcessId(integer $ProcessId) 设置<p>执行慢SQL的进程ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSessionId() 获取<p>执行慢SQL的会话ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSessionId(string $SessionId) 设置<p>执行慢SQL的会话ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVirtualTransactionId() 获取<p>执行慢SQL的事务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVirtualTransactionId(string $VirtualTransactionId) 设置<p>执行慢SQL的事务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSqlStateCode() 获取<p>执行慢SQL的状态码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSqlStateCode(string $SqlStateCode) 设置<p>执行慢SQL的状态码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApplicationName() 获取<p>执行慢SQL的客户端名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationName(string $ApplicationName) 设置<p>执行慢SQL的客户端名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class RawSlowQuery extends AbstractModel
{
    /**
     * @var string <p>慢SQL 语句</p>
     */
    public $RawQuery;

    /**
     * @var string <p>慢SQL 查询的数据库</p>
     */
    public $DatabaseName;

    /**
     * @var float <p>慢SQL执行 耗时</p>
     */
    public $Duration;

    /**
     * @var string <p>执行慢SQL的客户端</p>
     */
    public $ClientAddr;

    /**
     * @var string <p>执行慢SQL的用户名</p>
     */
    public $UserName;

    /**
     * @var string <p>慢SQL执行的开始时间</p>
     */
    public $SessionStartTime;

    /**
     * @var integer <p>执行慢SQL的进程ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcessId;

    /**
     * @var string <p>执行慢SQL的会话ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SessionId;

    /**
     * @var string <p>执行慢SQL的事务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VirtualTransactionId;

    /**
     * @var string <p>执行慢SQL的状态码</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SqlStateCode;

    /**
     * @var string <p>执行慢SQL的客户端名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicationName;

    /**
     * @param string $RawQuery <p>慢SQL 语句</p>
     * @param string $DatabaseName <p>慢SQL 查询的数据库</p>
     * @param float $Duration <p>慢SQL执行 耗时</p>
     * @param string $ClientAddr <p>执行慢SQL的客户端</p>
     * @param string $UserName <p>执行慢SQL的用户名</p>
     * @param string $SessionStartTime <p>慢SQL执行的开始时间</p>
     * @param integer $ProcessId <p>执行慢SQL的进程ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SessionId <p>执行慢SQL的会话ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VirtualTransactionId <p>执行慢SQL的事务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SqlStateCode <p>执行慢SQL的状态码</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApplicationName <p>执行慢SQL的客户端名称</p>
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("ProcessId",$param) and $param["ProcessId"] !== null) {
            $this->ProcessId = $param["ProcessId"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("VirtualTransactionId",$param) and $param["VirtualTransactionId"] !== null) {
            $this->VirtualTransactionId = $param["VirtualTransactionId"];
        }

        if (array_key_exists("SqlStateCode",$param) and $param["SqlStateCode"] !== null) {
            $this->SqlStateCode = $param["SqlStateCode"];
        }

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }
    }
}
