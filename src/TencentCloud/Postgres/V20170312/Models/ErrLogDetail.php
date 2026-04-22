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
 * 错误日志详情
 *
 * @method string getUserName() 获取<p>用户名</p>
 * @method void setUserName(string $UserName) 设置<p>用户名</p>
 * @method string getDatabase() 获取<p>数据库名字</p>
 * @method void setDatabase(string $Database) 设置<p>数据库名字</p>
 * @method string getErrTime() 获取<p>错误发生时间</p>
 * @method void setErrTime(string $ErrTime) 设置<p>错误发生时间</p>
 * @method string getErrMsg() 获取<p>错误消息</p>
 * @method void setErrMsg(string $ErrMsg) 设置<p>错误消息</p>
 * @method integer getProcessId() 获取<p>进程ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcessId(integer $ProcessId) 设置<p>进程ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClientAddr() 获取<p>客户端地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClientAddr(string $ClientAddr) 设置<p>客户端地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSessionId() 获取<p>会话ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSessionId(string $SessionId) 设置<p>会话ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSessionStartTime() 获取<p>会话开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSessionStartTime(string $SessionStartTime) 设置<p>会话开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVirtualTransactionId() 获取<p>虚拟事务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVirtualTransactionId(string $VirtualTransactionId) 设置<p>虚拟事务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSqlStateCode() 获取<p>SQLSTATE错误码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSqlStateCode(string $SqlStateCode) 设置<p>SQLSTATE错误码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApplicationName() 获取<p>客户端应用名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationName(string $ApplicationName) 设置<p>客户端应用名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ErrLogDetail extends AbstractModel
{
    /**
     * @var string <p>用户名</p>
     */
    public $UserName;

    /**
     * @var string <p>数据库名字</p>
     */
    public $Database;

    /**
     * @var string <p>错误发生时间</p>
     */
    public $ErrTime;

    /**
     * @var string <p>错误消息</p>
     */
    public $ErrMsg;

    /**
     * @var integer <p>进程ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcessId;

    /**
     * @var string <p>客户端地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClientAddr;

    /**
     * @var string <p>会话ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SessionId;

    /**
     * @var string <p>会话开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SessionStartTime;

    /**
     * @var string <p>虚拟事务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VirtualTransactionId;

    /**
     * @var string <p>SQLSTATE错误码</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SqlStateCode;

    /**
     * @var string <p>客户端应用名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicationName;

    /**
     * @param string $UserName <p>用户名</p>
     * @param string $Database <p>数据库名字</p>
     * @param string $ErrTime <p>错误发生时间</p>
     * @param string $ErrMsg <p>错误消息</p>
     * @param integer $ProcessId <p>进程ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClientAddr <p>客户端地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SessionId <p>会话ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SessionStartTime <p>会话开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VirtualTransactionId <p>虚拟事务ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SqlStateCode <p>SQLSTATE错误码</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApplicationName <p>客户端应用名称</p>
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
        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }

        if (array_key_exists("ErrTime",$param) and $param["ErrTime"] !== null) {
            $this->ErrTime = $param["ErrTime"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }

        if (array_key_exists("ProcessId",$param) and $param["ProcessId"] !== null) {
            $this->ProcessId = $param["ProcessId"];
        }

        if (array_key_exists("ClientAddr",$param) and $param["ClientAddr"] !== null) {
            $this->ClientAddr = $param["ClientAddr"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("SessionStartTime",$param) and $param["SessionStartTime"] !== null) {
            $this->SessionStartTime = $param["SessionStartTime"];
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
