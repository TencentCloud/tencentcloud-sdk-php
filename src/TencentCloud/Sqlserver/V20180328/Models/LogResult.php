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
 * @method integer getTimestamp() 获取<p>时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimestamp(integer $Timestamp) 设置<p>时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCategory() 获取<p>错误类别</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCategory(string $Category) 设置<p>错误类别</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClientAppName() 获取<p>客户端应用程序名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClientAppName(string $ClientAppName) 设置<p>客户端应用程序名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClientHostName() 获取<p>客户端主机名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClientHostName(string $ClientHostName) 设置<p>客户端主机名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCpuTime() 获取<p>CPU 时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCpuTime(integer $CpuTime) 设置<p>CPU 时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDatabaseId() 获取<p>数据库 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabaseId(integer $DatabaseId) 设置<p>数据库 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatabaseName() 获取<p>数据库名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabaseName(string $DatabaseName) 设置<p>数据库名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDuration() 获取<p>执行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDuration(integer $Duration) 设置<p>执行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getErrorNumber() 获取<p>错误编号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorNumber(integer $ErrorNumber) 设置<p>错误编号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIsIntercepted() 获取<p>是否被拦截</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsIntercepted(string $IsIntercepted) 设置<p>是否被拦截</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLastRowCount() 获取<p>最后行计数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastRowCount(integer $LastRowCount) 设置<p>最后行计数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLogicalReads() 获取<p>逻辑读取</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogicalReads(integer $LogicalReads) 设置<p>逻辑读取</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMessage() 获取<p>消息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessage(string $Message) 设置<p>消息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getObjectId() 获取<p>对象 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setObjectId(integer $ObjectId) 设置<p>对象 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getObjectName() 获取<p>对象名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setObjectName(string $ObjectName) 设置<p>对象名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getObjectType() 获取<p>对象类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setObjectType(string $ObjectType) 设置<p>对象类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOutputParameters() 获取<p>输出参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutputParameters(string $OutputParameters) 设置<p>输出参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParameterizedPlanHandle() 获取<p>参数化计划句柄</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParameterizedPlanHandle(string $ParameterizedPlanHandle) 设置<p>参数化计划句柄</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPhysicalReads() 获取<p>物理读取</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPhysicalReads(integer $PhysicalReads) 设置<p>物理读取</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResult() 获取<p>结果</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResult(string $Result) 设置<p>结果</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRowCount() 获取<p>行计数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRowCount(integer $RowCount) 设置<p>行计数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServerPrincipalName() 获取<p>服务器主体名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServerPrincipalName(string $ServerPrincipalName) 设置<p>服务器主体名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSessionServerPrincipalName() 获取<p>会话服务器主体名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSessionServerPrincipalName(string $SessionServerPrincipalName) 设置<p>会话服务器主体名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSeverity() 获取<p>严重性</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSeverity(integer $Severity) 设置<p>严重性</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSourceDatabaseId() 获取<p>源数据库 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceDatabaseId(integer $SourceDatabaseId) 设置<p>源数据库 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSqlText() 获取<p>SQL 文本</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSqlText(string $SqlText) 设置<p>SQL 文本</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getState() 获取<p>状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setState(integer $State) 设置<p>状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatement() 获取<p>语句</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatement(string $Statement) 设置<p>语句</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSystemThreadId() 获取<p>系统线程 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSystemThreadId(integer $SystemThreadId) 设置<p>系统线程 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTransactionId() 获取<p>事务 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTransactionId(integer $TransactionId) 设置<p>事务 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserDefined() 获取<p>用户定义</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserDefined(string $UserDefined) 设置<p>用户定义</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserName() 获取<p>用户名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserName(string $UserName) 设置<p>用户名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWrites() 获取<p>写入</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWrites(integer $Writes) 设置<p>写入</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDestination() 获取<p>目标</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDestination(string $Destination) 设置<p>目标</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEventName() 获取<p>事件名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventName(string $EventName) 设置<p>事件名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class LogResult extends AbstractModel
{
    /**
     * @var integer <p>时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Timestamp;

    /**
     * @var string <p>错误类别</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Category;

    /**
     * @var string <p>客户端应用程序名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClientAppName;

    /**
     * @var string <p>客户端主机名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClientHostName;

    /**
     * @var integer <p>CPU 时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CpuTime;

    /**
     * @var integer <p>数据库 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatabaseId;

    /**
     * @var string <p>数据库名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DatabaseName;

    /**
     * @var integer <p>执行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Duration;

    /**
     * @var integer <p>错误编号</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorNumber;

    /**
     * @var string <p>是否被拦截</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsIntercepted;

    /**
     * @var integer <p>最后行计数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastRowCount;

    /**
     * @var integer <p>逻辑读取</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogicalReads;

    /**
     * @var string <p>消息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Message;

    /**
     * @var integer <p>对象 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ObjectId;

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
     * @var string <p>输出参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutputParameters;

    /**
     * @var string <p>参数化计划句柄</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParameterizedPlanHandle;

    /**
     * @var integer <p>物理读取</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PhysicalReads;

    /**
     * @var string <p>结果</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Result;

    /**
     * @var integer <p>行计数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RowCount;

    /**
     * @var string <p>服务器主体名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServerPrincipalName;

    /**
     * @var string <p>会话服务器主体名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SessionServerPrincipalName;

    /**
     * @var integer <p>严重性</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Severity;

    /**
     * @var integer <p>源数据库 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceDatabaseId;

    /**
     * @var string <p>SQL 文本</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SqlText;

    /**
     * @var integer <p>状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $State;

    /**
     * @var string <p>语句</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Statement;

    /**
     * @var integer <p>系统线程 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SystemThreadId;

    /**
     * @var integer <p>事务 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TransactionId;

    /**
     * @var string <p>用户定义</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserDefined;

    /**
     * @var string <p>用户名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserName;

    /**
     * @var integer <p>写入</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Writes;

    /**
     * @var string <p>目标</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Destination;

    /**
     * @var string <p>事件名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventName;

    /**
     * @param integer $Timestamp <p>时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Category <p>错误类别</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClientAppName <p>客户端应用程序名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClientHostName <p>客户端主机名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CpuTime <p>CPU 时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DatabaseId <p>数据库 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DatabaseName <p>数据库名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Duration <p>执行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ErrorNumber <p>错误编号</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IsIntercepted <p>是否被拦截</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LastRowCount <p>最后行计数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LogicalReads <p>逻辑读取</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Message <p>消息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ObjectId <p>对象 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ObjectName <p>对象名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ObjectType <p>对象类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OutputParameters <p>输出参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParameterizedPlanHandle <p>参数化计划句柄</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PhysicalReads <p>物理读取</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Result <p>结果</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RowCount <p>行计数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServerPrincipalName <p>服务器主体名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SessionServerPrincipalName <p>会话服务器主体名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Severity <p>严重性</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SourceDatabaseId <p>源数据库 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SqlText <p>SQL 文本</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $State <p>状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Statement <p>语句</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SystemThreadId <p>系统线程 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TransactionId <p>事务 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserDefined <p>用户定义</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserName <p>用户名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Writes <p>写入</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Destination <p>目标</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EventName <p>事件名称</p>
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

        if (array_key_exists("EventName",$param) and $param["EventName"] !== null) {
            $this->EventName = $param["EventName"];
        }
    }
}
