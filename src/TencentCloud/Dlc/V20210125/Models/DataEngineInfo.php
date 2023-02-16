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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DataEngine详细信息
 *
 * @method string getDataEngineName() 获取DataEngine名称
 * @method void setDataEngineName(string $DataEngineName) 设置DataEngine名称
 * @method string getEngineType() 获取引擎类型 spark/presto
 * @method void setEngineType(string $EngineType) 设置引擎类型 spark/presto
 * @method string getClusterType() 获取集群资源类型 spark_private/presto_private/presto_cu/spark_cu
 * @method void setClusterType(string $ClusterType) 设置集群资源类型 spark_private/presto_private/presto_cu/spark_cu
 * @method string getQuotaId() 获取引用ID
 * @method void setQuotaId(string $QuotaId) 设置引用ID
 * @method integer getState() 获取数据引擎状态  -2已删除 -1失败 0初始化中 1挂起 2运行中 3准备删除 4删除中
 * @method void setState(integer $State) 设置数据引擎状态  -2已删除 -1失败 0初始化中 1挂起 2运行中 3准备删除 4删除中
 * @method integer getCreateTime() 获取创建时间
 * @method void setCreateTime(integer $CreateTime) 设置创建时间
 * @method integer getUpdateTime() 获取更新时间
 * @method void setUpdateTime(integer $UpdateTime) 设置更新时间
 * @method integer getSize() 获取集群规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSize(integer $Size) 设置集群规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMode() 获取计费模式 0共享模式 1按量计费 2包年包月
 * @method void setMode(integer $Mode) 设置计费模式 0共享模式 1按量计费 2包年包月
 * @method integer getMinClusters() 获取最小集群数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMinClusters(integer $MinClusters) 设置最小集群数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxClusters() 获取最大集群数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxClusters(integer $MaxClusters) 设置最大集群数
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getAutoResume() 获取是否自动恢复
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoResume(boolean $AutoResume) 设置是否自动恢复
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSpendAfter() 获取自动恢复时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpendAfter(integer $SpendAfter) 设置自动恢复时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCidrBlock() 获取集群网段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCidrBlock(string $CidrBlock) 设置集群网段
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getDefaultDataEngine() 获取是否为默认引擎
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDefaultDataEngine(boolean $DefaultDataEngine) 设置是否为默认引擎
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMessage() 获取返回信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessage(string $Message) 设置返回信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataEngineId() 获取引擎id
 * @method void setDataEngineId(string $DataEngineId) 设置引擎id
 * @method string getSubAccountUin() 获取操作者
 * @method void setSubAccountUin(string $SubAccountUin) 设置操作者
 * @method string getExpireTime() 获取到期时间
 * @method void setExpireTime(string $ExpireTime) 设置到期时间
 * @method string getIsolatedTime() 获取隔离时间
 * @method void setIsolatedTime(string $IsolatedTime) 设置隔离时间
 * @method string getReversalTime() 获取冲正时间
 * @method void setReversalTime(string $ReversalTime) 设置冲正时间
 * @method string getUserAlias() 获取用户名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserAlias(string $UserAlias) 设置用户名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTagList() 获取标签对集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagList(array $TagList) 设置标签对集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPermissions() 获取引擎拥有的权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPermissions(array $Permissions) 设置引擎拥有的权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getAutoSuspend() 获取是否自定挂起集群：false（默认）：不自动挂起、true：自动挂起
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoSuspend(boolean $AutoSuspend) 设置是否自定挂起集群：false（默认）：不自动挂起、true：自动挂起
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCrontabResumeSuspend() 获取定时启停集群策略：0（默认）：关闭定时策略、1：开启定时策略（注：定时启停策略与自动挂起策略互斥）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCrontabResumeSuspend(integer $CrontabResumeSuspend) 设置定时启停集群策略：0（默认）：关闭定时策略、1：开启定时策略（注：定时启停策略与自动挂起策略互斥）
注意：此字段可能返回 null，表示取不到有效值。
 * @method CrontabResumeSuspendStrategy getCrontabResumeSuspendStrategy() 获取定时启停策略，复杂类型：包含启停时间、挂起集群策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCrontabResumeSuspendStrategy(CrontabResumeSuspendStrategy $CrontabResumeSuspendStrategy) 设置定时启停策略，复杂类型：包含启停时间、挂起集群策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEngineExecType() 获取引擎执行任务类型，有效值：SQL/BATCH
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngineExecType(string $EngineExecType) 设置引擎执行任务类型，有效值：SQL/BATCH
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRenewFlag() 获取自动续费标志，0，初始状态，默认不自动续费，若用户有预付费不停服特权，自动续费。1：自动续费。2：明确不自动续费
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRenewFlag(integer $RenewFlag) 设置自动续费标志，0，初始状态，默认不自动续费，若用户有预付费不停服特权，自动续费。1：自动续费。2：明确不自动续费
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAutoSuspendTime() 获取集群自动挂起时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoSuspendTime(integer $AutoSuspendTime) 设置集群自动挂起时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getNetworkConnectionSet() 获取网络连接配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNetworkConnectionSet(array $NetworkConnectionSet) 设置网络连接配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUiURL() 获取ui的跳转地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUiURL(string $UiURL) 设置ui的跳转地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceType() 获取引擎的资源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceType(string $ResourceType) 设置引擎的资源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImageVersionId() 获取集群镜像版本ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageVersionId(string $ImageVersionId) 设置集群镜像版本ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChildImageVersionId() 获取集群镜像小版本ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChildImageVersionId(string $ChildImageVersionId) 设置集群镜像小版本ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImageVersionName() 获取集群镜像版本名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageVersionName(string $ImageVersionName) 设置集群镜像版本名字
注意：此字段可能返回 null，表示取不到有效值。
 */
class DataEngineInfo extends AbstractModel
{
    /**
     * @var string DataEngine名称
     */
    public $DataEngineName;

    /**
     * @var string 引擎类型 spark/presto
     */
    public $EngineType;

    /**
     * @var string 集群资源类型 spark_private/presto_private/presto_cu/spark_cu
     */
    public $ClusterType;

    /**
     * @var string 引用ID
     */
    public $QuotaId;

    /**
     * @var integer 数据引擎状态  -2已删除 -1失败 0初始化中 1挂起 2运行中 3准备删除 4删除中
     */
    public $State;

    /**
     * @var integer 创建时间
     */
    public $CreateTime;

    /**
     * @var integer 更新时间
     */
    public $UpdateTime;

    /**
     * @var integer 集群规格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Size;

    /**
     * @var integer 计费模式 0共享模式 1按量计费 2包年包月
     */
    public $Mode;

    /**
     * @var integer 最小集群数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MinClusters;

    /**
     * @var integer 最大集群数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxClusters;

    /**
     * @var boolean 是否自动恢复
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoResume;

    /**
     * @var integer 自动恢复时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SpendAfter;

    /**
     * @var string 集群网段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CidrBlock;

    /**
     * @var boolean 是否为默认引擎
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DefaultDataEngine;

    /**
     * @var string 返回信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Message;

    /**
     * @var string 引擎id
     */
    public $DataEngineId;

    /**
     * @var string 操作者
     */
    public $SubAccountUin;

    /**
     * @var string 到期时间
     */
    public $ExpireTime;

    /**
     * @var string 隔离时间
     */
    public $IsolatedTime;

    /**
     * @var string 冲正时间
     */
    public $ReversalTime;

    /**
     * @var string 用户名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserAlias;

    /**
     * @var array 标签对集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagList;

    /**
     * @var array 引擎拥有的权限
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Permissions;

    /**
     * @var boolean 是否自定挂起集群：false（默认）：不自动挂起、true：自动挂起
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoSuspend;

    /**
     * @var integer 定时启停集群策略：0（默认）：关闭定时策略、1：开启定时策略（注：定时启停策略与自动挂起策略互斥）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CrontabResumeSuspend;

    /**
     * @var CrontabResumeSuspendStrategy 定时启停策略，复杂类型：包含启停时间、挂起集群策略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CrontabResumeSuspendStrategy;

    /**
     * @var string 引擎执行任务类型，有效值：SQL/BATCH
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EngineExecType;

    /**
     * @var integer 自动续费标志，0，初始状态，默认不自动续费，若用户有预付费不停服特权，自动续费。1：自动续费。2：明确不自动续费
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RenewFlag;

    /**
     * @var integer 集群自动挂起时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoSuspendTime;

    /**
     * @var array 网络连接配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NetworkConnectionSet;

    /**
     * @var string ui的跳转地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UiURL;

    /**
     * @var string 引擎的资源类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceType;

    /**
     * @var string 集群镜像版本ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageVersionId;

    /**
     * @var string 集群镜像小版本ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChildImageVersionId;

    /**
     * @var string 集群镜像版本名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageVersionName;

    /**
     * @param string $DataEngineName DataEngine名称
     * @param string $EngineType 引擎类型 spark/presto
     * @param string $ClusterType 集群资源类型 spark_private/presto_private/presto_cu/spark_cu
     * @param string $QuotaId 引用ID
     * @param integer $State 数据引擎状态  -2已删除 -1失败 0初始化中 1挂起 2运行中 3准备删除 4删除中
     * @param integer $CreateTime 创建时间
     * @param integer $UpdateTime 更新时间
     * @param integer $Size 集群规格
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Mode 计费模式 0共享模式 1按量计费 2包年包月
     * @param integer $MinClusters 最小集群数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxClusters 最大集群数
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $AutoResume 是否自动恢复
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SpendAfter 自动恢复时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CidrBlock 集群网段
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $DefaultDataEngine 是否为默认引擎
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Message 返回信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataEngineId 引擎id
     * @param string $SubAccountUin 操作者
     * @param string $ExpireTime 到期时间
     * @param string $IsolatedTime 隔离时间
     * @param string $ReversalTime 冲正时间
     * @param string $UserAlias 用户名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TagList 标签对集合
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Permissions 引擎拥有的权限
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $AutoSuspend 是否自定挂起集群：false（默认）：不自动挂起、true：自动挂起
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CrontabResumeSuspend 定时启停集群策略：0（默认）：关闭定时策略、1：开启定时策略（注：定时启停策略与自动挂起策略互斥）
注意：此字段可能返回 null，表示取不到有效值。
     * @param CrontabResumeSuspendStrategy $CrontabResumeSuspendStrategy 定时启停策略，复杂类型：包含启停时间、挂起集群策略
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EngineExecType 引擎执行任务类型，有效值：SQL/BATCH
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RenewFlag 自动续费标志，0，初始状态，默认不自动续费，若用户有预付费不停服特权，自动续费。1：自动续费。2：明确不自动续费
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AutoSuspendTime 集群自动挂起时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $NetworkConnectionSet 网络连接配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UiURL ui的跳转地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceType 引擎的资源类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ImageVersionId 集群镜像版本ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChildImageVersionId 集群镜像小版本ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ImageVersionName 集群镜像版本名字
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
        if (array_key_exists("DataEngineName",$param) and $param["DataEngineName"] !== null) {
            $this->DataEngineName = $param["DataEngineName"];
        }

        if (array_key_exists("EngineType",$param) and $param["EngineType"] !== null) {
            $this->EngineType = $param["EngineType"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("QuotaId",$param) and $param["QuotaId"] !== null) {
            $this->QuotaId = $param["QuotaId"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("MinClusters",$param) and $param["MinClusters"] !== null) {
            $this->MinClusters = $param["MinClusters"];
        }

        if (array_key_exists("MaxClusters",$param) and $param["MaxClusters"] !== null) {
            $this->MaxClusters = $param["MaxClusters"];
        }

        if (array_key_exists("AutoResume",$param) and $param["AutoResume"] !== null) {
            $this->AutoResume = $param["AutoResume"];
        }

        if (array_key_exists("SpendAfter",$param) and $param["SpendAfter"] !== null) {
            $this->SpendAfter = $param["SpendAfter"];
        }

        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }

        if (array_key_exists("DefaultDataEngine",$param) and $param["DefaultDataEngine"] !== null) {
            $this->DefaultDataEngine = $param["DefaultDataEngine"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("DataEngineId",$param) and $param["DataEngineId"] !== null) {
            $this->DataEngineId = $param["DataEngineId"];
        }

        if (array_key_exists("SubAccountUin",$param) and $param["SubAccountUin"] !== null) {
            $this->SubAccountUin = $param["SubAccountUin"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("IsolatedTime",$param) and $param["IsolatedTime"] !== null) {
            $this->IsolatedTime = $param["IsolatedTime"];
        }

        if (array_key_exists("ReversalTime",$param) and $param["ReversalTime"] !== null) {
            $this->ReversalTime = $param["ReversalTime"];
        }

        if (array_key_exists("UserAlias",$param) and $param["UserAlias"] !== null) {
            $this->UserAlias = $param["UserAlias"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }

        if (array_key_exists("Permissions",$param) and $param["Permissions"] !== null) {
            $this->Permissions = $param["Permissions"];
        }

        if (array_key_exists("AutoSuspend",$param) and $param["AutoSuspend"] !== null) {
            $this->AutoSuspend = $param["AutoSuspend"];
        }

        if (array_key_exists("CrontabResumeSuspend",$param) and $param["CrontabResumeSuspend"] !== null) {
            $this->CrontabResumeSuspend = $param["CrontabResumeSuspend"];
        }

        if (array_key_exists("CrontabResumeSuspendStrategy",$param) and $param["CrontabResumeSuspendStrategy"] !== null) {
            $this->CrontabResumeSuspendStrategy = new CrontabResumeSuspendStrategy();
            $this->CrontabResumeSuspendStrategy->deserialize($param["CrontabResumeSuspendStrategy"]);
        }

        if (array_key_exists("EngineExecType",$param) and $param["EngineExecType"] !== null) {
            $this->EngineExecType = $param["EngineExecType"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("AutoSuspendTime",$param) and $param["AutoSuspendTime"] !== null) {
            $this->AutoSuspendTime = $param["AutoSuspendTime"];
        }

        if (array_key_exists("NetworkConnectionSet",$param) and $param["NetworkConnectionSet"] !== null) {
            $this->NetworkConnectionSet = [];
            foreach ($param["NetworkConnectionSet"] as $key => $value){
                $obj = new NetworkConnection();
                $obj->deserialize($value);
                array_push($this->NetworkConnectionSet, $obj);
            }
        }

        if (array_key_exists("UiURL",$param) and $param["UiURL"] !== null) {
            $this->UiURL = $param["UiURL"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ImageVersionId",$param) and $param["ImageVersionId"] !== null) {
            $this->ImageVersionId = $param["ImageVersionId"];
        }

        if (array_key_exists("ChildImageVersionId",$param) and $param["ChildImageVersionId"] !== null) {
            $this->ChildImageVersionId = $param["ChildImageVersionId"];
        }

        if (array_key_exists("ImageVersionName",$param) and $param["ImageVersionName"] !== null) {
            $this->ImageVersionName = $param["ImageVersionName"];
        }
    }
}
