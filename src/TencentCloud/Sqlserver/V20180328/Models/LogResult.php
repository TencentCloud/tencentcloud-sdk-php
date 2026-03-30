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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 日志结果
 *
 * @method integer getTimestamp() 获取时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimestamp(integer $Timestamp) 设置时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCategory() 获取错误类别
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCategory(string $Category) 设置错误类别
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClientAppName() 获取客户端应用程序名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClientAppName(string $ClientAppName) 设置客户端应用程序名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClientHostName() 获取客户端主机名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClientHostName(string $ClientHostName) 设置客户端主机名
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCpuTime() 获取CPU 时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCpuTime(integer $CpuTime) 设置CPU 时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDatabaseId() 获取数据库 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabaseId(integer $DatabaseId) 设置数据库 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatabaseName() 获取数据库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabaseName(string $DatabaseName) 设置数据库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDuration() 获取执行时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDuration(integer $Duration) 设置执行时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getErrorNumber() 获取错误编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorNumber(integer $ErrorNumber) 设置错误编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIsIntercepted() 获取是否被拦截
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsIntercepted(string $IsIntercepted) 设置是否被拦截
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLastRowCount() 获取最后行计数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastRowCount(integer $LastRowCount) 设置最后行计数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLogicalReads() 获取逻辑读取
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogicalReads(integer $LogicalReads) 设置逻辑读取
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMessage() 获取消息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessage(string $Message) 设置消息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getObjectId() 获取对象 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setObjectId(integer $ObjectId) 设置对象 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getObjectName() 获取对象名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setObjectName(string $ObjectName) 设置对象名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getObjectType() 获取对象类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setObjectType(string $ObjectType) 设置对象类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOutputParameters() 获取输出参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutputParameters(string $OutputParameters) 设置输出参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParameterizedPlanHandle() 获取参数化计划句柄
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParameterizedPlanHandle(string $ParameterizedPlanHandle) 设置参数化计划句柄
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPhysicalReads() 获取物理读取
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPhysicalReads(integer $PhysicalReads) 设置物理读取
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResult() 获取结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResult(string $Result) 设置结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRowCount() 获取行计数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRowCount(integer $RowCount) 设置行计数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServerPrincipalName() 获取服务器主体名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServerPrincipalName(string $ServerPrincipalName) 设置服务器主体名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSessionServerPrincipalName() 获取会话服务器主体名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSessionServerPrincipalName(string $SessionServerPrincipalName) 设置会话服务器主体名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSeverity() 获取严重性
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSeverity(integer $Severity) 设置严重性
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSourceDatabaseId() 获取源数据库 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceDatabaseId(integer $SourceDatabaseId) 设置源数据库 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSqlText() 获取SQL 文本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSqlText(string $SqlText) 设置SQL 文本
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getState() 获取状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setState(integer $State) 设置状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatement() 获取语句
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatement(string $Statement) 设置语句
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSystemThreadId() 获取系统线程 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSystemThreadId(integer $SystemThreadId) 设置系统线程 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTransactionId() 获取事务 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTransactionId(integer $TransactionId) 设置事务 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserDefined() 获取用户定义
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserDefined(string $UserDefined) 设置用户定义
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserName() 获取用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserName(string $UserName) 设置用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWrites() 获取写入
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWrites(integer $Writes) 设置写入
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDestination() 获取目标
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDestination(string $Destination) 设置目标
注意：此字段可能返回 null，表示取不到有效值。
 */
class LogResult extends AbstractModel
{
    /**
     * @var integer 时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Timestamp;

    /**
     * @var string 错误类别
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Category;

    /**
     * @var string 客户端应用程序名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClientAppName;

    /**
     * @var string 客户端主机名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClientHostName;

    /**
     * @var integer CPU 时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CpuTime;

    /**
     * @var integer 数据库 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatabaseId;

    /**
     * @var string 数据库名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatabaseName;

    /**
     * @var integer 执行时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Duration;

    /**
     * @var integer 错误编号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorNumber;

    /**
     * @var string 是否被拦截
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsIntercepted;

    /**
     * @var integer 最后行计数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastRowCount;

    /**
     * @var integer 逻辑读取
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogicalReads;

    /**
     * @var string 消息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Message;

    /**
     * @var integer 对象 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ObjectId;

    /**
     * @var string 对象名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ObjectName;

    /**
     * @var string 对象类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ObjectType;

    /**
     * @var string 输出参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutputParameters;

    /**
     * @var string 参数化计划句柄
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParameterizedPlanHandle;

    /**
     * @var integer 物理读取
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PhysicalReads;

    /**
     * @var string 结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Result;

    /**
     * @var integer 行计数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RowCount;

    /**
     * @var string 服务器主体名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServerPrincipalName;

    /**
     * @var string 会话服务器主体名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SessionServerPrincipalName;

    /**
     * @var integer 严重性
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Severity;

    /**
     * @var integer 源数据库 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceDatabaseId;

    /**
     * @var string SQL 文本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SqlText;

    /**
     * @var integer 状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $State;

    /**
     * @var string 语句
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Statement;

    /**
     * @var integer 系统线程 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SystemThreadId;

    /**
     * @var integer 事务 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TransactionId;

    /**
     * @var string 用户定义
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserDefined;

    /**
     * @var string 用户名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserName;

    /**
     * @var integer 写入
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Writes;

    /**
     * @var string 目标
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Destination;

    /**
     * @param integer $Timestamp 时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Category 错误类别
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClientAppName 客户端应用程序名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClientHostName 客户端主机名
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CpuTime CPU 时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DatabaseId 数据库 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatabaseName 数据库名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Duration 执行时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ErrorNumber 错误编号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IsIntercepted 是否被拦截
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LastRowCount 最后行计数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LogicalReads 逻辑读取
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Message 消息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ObjectId 对象 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ObjectName 对象名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ObjectType 对象类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OutputParameters 输出参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParameterizedPlanHandle 参数化计划句柄
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PhysicalReads 物理读取
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Result 结果
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RowCount 行计数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServerPrincipalName 服务器主体名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SessionServerPrincipalName 会话服务器主体名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Severity 严重性
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SourceDatabaseId 源数据库 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SqlText SQL 文本
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $State 状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Statement 语句
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SystemThreadId 系统线程 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TransactionId 事务 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserDefined 用户定义
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserName 用户名
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Writes 写入
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Destination 目标
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

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("ClientAppName",$param) and $param["ClientAppName"] !== null) {
            $this->ClientAppName = $param["ClientAppName"];
        }

        if (array_key_exists("ClientHostName",$param) and $param["ClientHostName"] !== null) {
            $this->ClientHostName = $param["ClientHostName"];
        }

        if (array_key_exists("CpuTime",$param) and $param["CpuTime"] !== null) {
            $this->CpuTime = $param["CpuTime"];
        }

        if (array_key_exists("DatabaseId",$param) and $param["DatabaseId"] !== null) {
            $this->DatabaseId = $param["DatabaseId"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("ErrorNumber",$param) and $param["ErrorNumber"] !== null) {
            $this->ErrorNumber = $param["ErrorNumber"];
        }

        if (array_key_exists("IsIntercepted",$param) and $param["IsIntercepted"] !== null) {
            $this->IsIntercepted = $param["IsIntercepted"];
        }

        if (array_key_exists("LastRowCount",$param) and $param["LastRowCount"] !== null) {
            $this->LastRowCount = $param["LastRowCount"];
        }

        if (array_key_exists("LogicalReads",$param) and $param["LogicalReads"] !== null) {
            $this->LogicalReads = $param["LogicalReads"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("ObjectId",$param) and $param["ObjectId"] !== null) {
            $this->ObjectId = $param["ObjectId"];
        }

        if (array_key_exists("ObjectName",$param) and $param["ObjectName"] !== null) {
            $this->ObjectName = $param["ObjectName"];
        }

        if (array_key_exists("ObjectType",$param) and $param["ObjectType"] !== null) {
            $this->ObjectType = $param["ObjectType"];
        }

        if (array_key_exists("OutputParameters",$param) and $param["OutputParameters"] !== null) {
            $this->OutputParameters = $param["OutputParameters"];
        }

        if (array_key_exists("ParameterizedPlanHandle",$param) and $param["ParameterizedPlanHandle"] !== null) {
            $this->ParameterizedPlanHandle = $param["ParameterizedPlanHandle"];
        }

        if (array_key_exists("PhysicalReads",$param) and $param["PhysicalReads"] !== null) {
            $this->PhysicalReads = $param["PhysicalReads"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("RowCount",$param) and $param["RowCount"] !== null) {
            $this->RowCount = $param["RowCount"];
        }

        if (array_key_exists("ServerPrincipalName",$param) and $param["ServerPrincipalName"] !== null) {
            $this->ServerPrincipalName = $param["ServerPrincipalName"];
        }

        if (array_key_exists("SessionServerPrincipalName",$param) and $param["SessionServerPrincipalName"] !== null) {
            $this->SessionServerPrincipalName = $param["SessionServerPrincipalName"];
        }

        if (array_key_exists("Severity",$param) and $param["Severity"] !== null) {
            $this->Severity = $param["Severity"];
        }

        if (array_key_exists("SourceDatabaseId",$param) and $param["SourceDatabaseId"] !== null) {
            $this->SourceDatabaseId = $param["SourceDatabaseId"];
        }

        if (array_key_exists("SqlText",$param) and $param["SqlText"] !== null) {
            $this->SqlText = $param["SqlText"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Statement",$param) and $param["Statement"] !== null) {
            $this->Statement = $param["Statement"];
        }

        if (array_key_exists("SystemThreadId",$param) and $param["SystemThreadId"] !== null) {
            $this->SystemThreadId = $param["SystemThreadId"];
        }

        if (array_key_exists("TransactionId",$param) and $param["TransactionId"] !== null) {
            $this->TransactionId = $param["TransactionId"];
        }

        if (array_key_exists("UserDefined",$param) and $param["UserDefined"] !== null) {
            $this->UserDefined = $param["UserDefined"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Writes",$param) and $param["Writes"] !== null) {
            $this->Writes = $param["Writes"];
        }

        if (array_key_exists("Destination",$param) and $param["Destination"] !== null) {
            $this->Destination = $param["Destination"];
        }
    }
}
