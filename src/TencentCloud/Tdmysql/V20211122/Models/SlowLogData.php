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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 慢日志信息
 *
 * @method string getTimestamp() 获取<p>Sql的执行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimestamp(string $Timestamp) 设置<p>Sql的执行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getQueryTime() 获取<p>Sql的执行时长（秒）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQueryTime(float $QueryTime) 设置<p>Sql的执行时长（秒）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSqlText() 获取<p>Sql语句</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSqlText(string $SqlText) 设置<p>Sql语句</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserHost() 获取<p>客户端地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserHost(string $UserHost) 设置<p>客户端地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserName() 获取<p>用户名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserName(string $UserName) 设置<p>用户名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDatabase() 获取<p>数据库名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDatabase(string $Database) 设置<p>数据库名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getLockTime() 获取<p>锁时长（秒）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLockTime(float $LockTime) 设置<p>锁时长（秒）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRowsExamined() 获取<p>扫描行数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRowsExamined(integer $RowsExamined) 设置<p>扫描行数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRowsSent() 获取<p>结果集行数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRowsSent(integer $RowsSent) 设置<p>结果集行数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTransactionId() 获取<p>事物ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTransactionId(string $TransactionId) 设置<p>事物ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getRpcTime() 获取<p>rpc耗时</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRpcTime(float $RpcTime) 设置<p>rpc耗时</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getStorageRpcTime() 获取<p>与存储节点交互rpc耗时</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorageRpcTime(float $StorageRpcTime) 设置<p>与存储节点交互rpc耗时</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getRpcRetryDelayTime() 获取<p>rpc重试延迟耗时</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRpcRetryDelayTime(float $RpcRetryDelayTime) 设置<p>rpc重试延迟耗时</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNodeId() 获取<p>node名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeId(string $NodeId) 设置<p>node名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRpcTrace() 获取<p>rpc 链路追踪</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRpcTrace(string $RpcTrace) 设置<p>rpc 链路追踪</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getTDStoreLockTime() 获取<p>TDStore锁时长</p><p>单位：秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTDStoreLockTime(float $TDStoreLockTime) 设置<p>TDStore锁时长</p><p>单位：秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTraceId() 获取<p>全局标识ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTraceId(string $TraceId) 设置<p>全局标识ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getExplain() 获取<p>执行计划</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExplain(array $Explain) 设置<p>执行计划</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class SlowLogData extends AbstractModel
{
    /**
     * @var string <p>Sql的执行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Timestamp;

    /**
     * @var float <p>Sql的执行时长（秒）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QueryTime;

    /**
     * @var string <p>Sql语句</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SqlText;

    /**
     * @var string <p>客户端地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserHost;

    /**
     * @var string <p>用户名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserName;

    /**
     * @var string <p>数据库名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Database;

    /**
     * @var float <p>锁时长（秒）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LockTime;

    /**
     * @var integer <p>扫描行数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RowsExamined;

    /**
     * @var integer <p>结果集行数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RowsSent;

    /**
     * @var string <p>事物ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TransactionId;

    /**
     * @var float <p>rpc耗时</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RpcTime;

    /**
     * @var float <p>与存储节点交互rpc耗时</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StorageRpcTime;

    /**
     * @var float <p>rpc重试延迟耗时</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RpcRetryDelayTime;

    /**
     * @var string <p>node名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeId;

    /**
     * @var string <p>rpc 链路追踪</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RpcTrace;

    /**
     * @var float <p>TDStore锁时长</p><p>单位：秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TDStoreLockTime;

    /**
     * @var string <p>全局标识ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TraceId;

    /**
     * @var array <p>执行计划</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Explain;

    /**
     * @param string $Timestamp <p>Sql的执行时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $QueryTime <p>Sql的执行时长（秒）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SqlText <p>Sql语句</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserHost <p>客户端地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserName <p>用户名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Database <p>数据库名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $LockTime <p>锁时长（秒）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RowsExamined <p>扫描行数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RowsSent <p>结果集行数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TransactionId <p>事物ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $RpcTime <p>rpc耗时</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $StorageRpcTime <p>与存储节点交互rpc耗时</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $RpcRetryDelayTime <p>rpc重试延迟耗时</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NodeId <p>node名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RpcTrace <p>rpc 链路追踪</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $TDStoreLockTime <p>TDStore锁时长</p><p>单位：秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TraceId <p>全局标识ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Explain <p>执行计划</p>
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

        if (array_key_exists("TransactionId",$param) and $param["TransactionId"] !== null) {
            $this->TransactionId = $param["TransactionId"];
        }

        if (array_key_exists("RpcTime",$param) and $param["RpcTime"] !== null) {
            $this->RpcTime = $param["RpcTime"];
        }

        if (array_key_exists("StorageRpcTime",$param) and $param["StorageRpcTime"] !== null) {
            $this->StorageRpcTime = $param["StorageRpcTime"];
        }

        if (array_key_exists("RpcRetryDelayTime",$param) and $param["RpcRetryDelayTime"] !== null) {
            $this->RpcRetryDelayTime = $param["RpcRetryDelayTime"];
        }

        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("RpcTrace",$param) and $param["RpcTrace"] !== null) {
            $this->RpcTrace = $param["RpcTrace"];
        }

        if (array_key_exists("TDStoreLockTime",$param) and $param["TDStoreLockTime"] !== null) {
            $this->TDStoreLockTime = $param["TDStoreLockTime"];
        }

        if (array_key_exists("TraceId",$param) and $param["TraceId"] !== null) {
            $this->TraceId = $param["TraceId"];
        }

        if (array_key_exists("Explain",$param) and $param["Explain"] !== null) {
            $this->Explain = [];
            foreach ($param["Explain"] as $key => $value){
                $obj = new Explain();
                $obj->deserialize($value);
                array_push($this->Explain, $obj);
            }
        }
    }
}
