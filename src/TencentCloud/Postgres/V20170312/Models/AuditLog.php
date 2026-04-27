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
 * 审计日志详情
 *
 * @method string getTimestamp() 获取<p>日志时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimestamp(string $Timestamp) 设置<p>日志时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAffectRows() 获取<p>影响行数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAffectRows(integer $AffectRows) 设置<p>影响行数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDBName() 获取<p>数据库</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDBName(string $DBName) 设置<p>数据库</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrCode() 获取<p>错误码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrCode(string $ErrCode) 设置<p>错误码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorMessage() 获取<p>错误信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorMessage(string $ErrorMessage) 设置<p>错误信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getExecTime() 获取<p>执行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecTime(integer $ExecTime) 设置<p>执行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHost() 获取<p>访问来源</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHost(string $Host) 设置<p>访问来源</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取<p>实例Id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置<p>实例Id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getObjectName() 获取<p>对象名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setObjectName(string $ObjectName) 设置<p>对象名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getObjectType() 获取<p>对象类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setObjectType(string $ObjectType) 设置<p>对象类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSql() 获取<p>sql</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSql(string $Sql) 设置<p>sql</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSqlType() 获取<p>sql类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSqlType(string $SqlType) 设置<p>sql类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getThreadId() 获取<p>线程ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setThreadId(string $ThreadId) 设置<p>线程ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUser() 获取<p>用户</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUser(string $User) 设置<p>用户</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class AuditLog extends AbstractModel
{
    /**
     * @var string <p>日志时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Timestamp;

    /**
     * @var integer <p>影响行数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AffectRows;

    /**
     * @var string <p>数据库</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DBName;

    /**
     * @var string <p>错误码</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrCode;

    /**
     * @var string <p>错误信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorMessage;

    /**
     * @var integer <p>执行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecTime;

    /**
     * @var string <p>访问来源</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Host;

    /**
     * @var string <p>实例Id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string <p>对象名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ObjectName;

    /**
     * @var string <p>对象类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ObjectType;

    /**
     * @var string <p>sql</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Sql;

    /**
     * @var string <p>sql类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SqlType;

    /**
     * @var string <p>线程ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ThreadId;

    /**
     * @var string <p>用户</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $User;

    /**
     * @param string $Timestamp <p>日志时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AffectRows <p>影响行数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DBName <p>数据库</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrCode <p>错误码</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorMessage <p>错误信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ExecTime <p>执行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Host <p>访问来源</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId <p>实例Id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ObjectName <p>对象名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ObjectType <p>对象类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Sql <p>sql</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SqlType <p>sql类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ThreadId <p>线程ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $User <p>用户</p>
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
        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("AffectRows",$param) and $param["AffectRows"] !== null) {
            $this->AffectRows = $param["AffectRows"];
        }

        if (array_key_exists("DBName",$param) and $param["DBName"] !== null) {
            $this->DBName = $param["DBName"];
        }

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("ExecTime",$param) and $param["ExecTime"] !== null) {
            $this->ExecTime = $param["ExecTime"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ObjectName",$param) and $param["ObjectName"] !== null) {
            $this->ObjectName = $param["ObjectName"];
        }

        if (array_key_exists("ObjectType",$param) and $param["ObjectType"] !== null) {
            $this->ObjectType = $param["ObjectType"];
        }

        if (array_key_exists("Sql",$param) and $param["Sql"] !== null) {
            $this->Sql = $param["Sql"];
        }

        if (array_key_exists("SqlType",$param) and $param["SqlType"] !== null) {
            $this->SqlType = $param["SqlType"];
        }

        if (array_key_exists("ThreadId",$param) and $param["ThreadId"] !== null) {
            $this->ThreadId = $param["ThreadId"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }
    }
}
