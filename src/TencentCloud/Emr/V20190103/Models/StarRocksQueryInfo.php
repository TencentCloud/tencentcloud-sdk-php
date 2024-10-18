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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * StarRocks 查询信息
 *
 * @method string getClientIP() 获取提交IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClientIP(string $ClientIP) 设置提交IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCPUCost() 获取CPU总时间(ns)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCPUCost(integer $CPUCost) 设置CPU总时间(ns)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDefaultDB() 获取默认DB
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDefaultDB(string $DefaultDB) 设置默认DB
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEndTime() 获取结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(integer $EndTime) 设置结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutionIP() 获取执行IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionIP(string $ExecutionIP) 设置执行IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQueryID() 获取查询ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQueryID(string $QueryID) 设置查询ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQueryType() 获取查询类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQueryType(string $QueryType) 设置查询类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMemCost() 获取消耗总内存(bytes)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemCost(integer $MemCost) 设置消耗总内存(bytes)
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPlanCpuCosts() 获取plan阶段CPU占用(ns)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPlanCpuCosts(integer $PlanCpuCosts) 设置plan阶段CPU占用(ns)
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPlanMemCosts() 获取plan阶段内存占用(bytes)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPlanMemCosts(integer $PlanMemCosts) 设置plan阶段内存占用(bytes)
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getQueryTime() 获取执行时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQueryTime(integer $QueryTime) 设置执行时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceGroup() 获取资源组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceGroup(string $ResourceGroup) 设置资源组
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getReturnRows() 获取获取行数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReturnRows(integer $ReturnRows) 设置获取行数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScanBytes() 获取扫描数据量(bytes)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScanBytes(integer $ScanBytes) 设置扫描数据量(bytes)
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScanRows() 获取扫描行数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScanRows(integer $ScanRows) 设置扫描行数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBeginTime() 获取开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBeginTime(integer $BeginTime) 设置开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutionState() 获取执行状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionState(string $ExecutionState) 设置执行状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutionStatement() 获取执行语句
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionStatement(string $ExecutionStatement) 设置执行语句
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUser() 获取用户
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUser(string $User) 设置用户
注意：此字段可能返回 null，表示取不到有效值。
 */
class StarRocksQueryInfo extends AbstractModel
{
    /**
     * @var string 提交IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClientIP;

    /**
     * @var integer CPU总时间(ns)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CPUCost;

    /**
     * @var string 默认DB
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DefaultDB;

    /**
     * @var integer 结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var string 执行IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutionIP;

    /**
     * @var string 查询ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QueryID;

    /**
     * @var string 查询类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QueryType;

    /**
     * @var integer 消耗总内存(bytes)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MemCost;

    /**
     * @var integer plan阶段CPU占用(ns)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PlanCpuCosts;

    /**
     * @var integer plan阶段内存占用(bytes)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PlanMemCosts;

    /**
     * @var integer 执行时长
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QueryTime;

    /**
     * @var string 资源组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceGroup;

    /**
     * @var integer 获取行数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReturnRows;

    /**
     * @var integer 扫描数据量(bytes)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScanBytes;

    /**
     * @var integer 扫描行数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScanRows;

    /**
     * @var integer 开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BeginTime;

    /**
     * @var string 执行状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutionState;

    /**
     * @var string 执行语句
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutionStatement;

    /**
     * @var string 用户
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $User;

    /**
     * @param string $ClientIP 提交IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CPUCost CPU总时间(ns)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DefaultDB 默认DB
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EndTime 结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionIP 执行IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $QueryID 查询ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $QueryType 查询类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MemCost 消耗总内存(bytes)
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PlanCpuCosts plan阶段CPU占用(ns)
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PlanMemCosts plan阶段内存占用(bytes)
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $QueryTime 执行时长
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceGroup 资源组
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ReturnRows 获取行数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ScanBytes 扫描数据量(bytes)
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ScanRows 扫描行数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BeginTime 开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionState 执行状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionStatement 执行语句
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $User 用户
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
        if (array_key_exists("ClientIP",$param) and $param["ClientIP"] !== null) {
            $this->ClientIP = $param["ClientIP"];
        }

        if (array_key_exists("CPUCost",$param) and $param["CPUCost"] !== null) {
            $this->CPUCost = $param["CPUCost"];
        }

        if (array_key_exists("DefaultDB",$param) and $param["DefaultDB"] !== null) {
            $this->DefaultDB = $param["DefaultDB"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ExecutionIP",$param) and $param["ExecutionIP"] !== null) {
            $this->ExecutionIP = $param["ExecutionIP"];
        }

        if (array_key_exists("QueryID",$param) and $param["QueryID"] !== null) {
            $this->QueryID = $param["QueryID"];
        }

        if (array_key_exists("QueryType",$param) and $param["QueryType"] !== null) {
            $this->QueryType = $param["QueryType"];
        }

        if (array_key_exists("MemCost",$param) and $param["MemCost"] !== null) {
            $this->MemCost = $param["MemCost"];
        }

        if (array_key_exists("PlanCpuCosts",$param) and $param["PlanCpuCosts"] !== null) {
            $this->PlanCpuCosts = $param["PlanCpuCosts"];
        }

        if (array_key_exists("PlanMemCosts",$param) and $param["PlanMemCosts"] !== null) {
            $this->PlanMemCosts = $param["PlanMemCosts"];
        }

        if (array_key_exists("QueryTime",$param) and $param["QueryTime"] !== null) {
            $this->QueryTime = $param["QueryTime"];
        }

        if (array_key_exists("ResourceGroup",$param) and $param["ResourceGroup"] !== null) {
            $this->ResourceGroup = $param["ResourceGroup"];
        }

        if (array_key_exists("ReturnRows",$param) and $param["ReturnRows"] !== null) {
            $this->ReturnRows = $param["ReturnRows"];
        }

        if (array_key_exists("ScanBytes",$param) and $param["ScanBytes"] !== null) {
            $this->ScanBytes = $param["ScanBytes"];
        }

        if (array_key_exists("ScanRows",$param) and $param["ScanRows"] !== null) {
            $this->ScanRows = $param["ScanRows"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("ExecutionState",$param) and $param["ExecutionState"] !== null) {
            $this->ExecutionState = $param["ExecutionState"];
        }

        if (array_key_exists("ExecutionStatement",$param) and $param["ExecutionStatement"] !== null) {
            $this->ExecutionStatement = $param["ExecutionStatement"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }
    }
}
