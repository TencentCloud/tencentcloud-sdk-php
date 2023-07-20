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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 基线实例
 *
 * @method integer getId() 获取基线实例id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置基线实例id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBaselineId() 获取基线id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBaselineId(integer $BaselineId) 设置基线id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBaselineName() 获取基线名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBaselineName(string $BaselineName) 设置基线名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBaselineType() 获取基线类型，D: 天基线 / H 小时基线
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBaselineType(string $BaselineType) 设置基线类型，D: 天基线 / H 小时基线
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBaselineDataTime() 获取基线实例数据时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBaselineDataTime(string $BaselineDataTime) 设置基线实例数据时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取基线实例生成时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置基线实例生成时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEstimatedEndTime() 获取基线实例预计完成时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEstimatedEndTime(string $EstimatedEndTime) 设置基线实例预计完成时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBaselineInstanceStatus() 获取基线实例状态，P:暂停/ SF:安全/ WN:预警/ BL:破线 / TF:任务失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBaselineInstanceStatus(string $BaselineInstanceStatus) 设置基线实例状态，P:暂停/ SF:安全/ WN:预警/ BL:破线 / TF:任务失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInChargeUin() 获取责任人uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInChargeUin(string $InChargeUin) 设置责任人uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInChargeName() 获取责任人名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInChargeName(string $InChargeName) 设置责任人名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWarningMargin() 获取预警余量/单位分钟
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWarningMargin(integer $WarningMargin) 设置预警余量/单位分钟
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPromiseTime() 获取承诺时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPromiseTime(string $PromiseTime) 设置承诺时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlarmLevel() 获取告警级别 N: 普通 / I重要 / E: 紧急
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarmLevel(string $AlarmLevel) 设置告警级别 N: 普通 / I重要 / E: 紧急
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置项目id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIsReady() 获取基线实例ready状态。NEW_GENERATED_INSTANCE:产生实例/RENDER_DAG:渲染DAG/CALCULATE_PATH:计算路径/COMPLETE:完成
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsReady(string $IsReady) 设置基线实例ready状态。NEW_GENERATED_INSTANCE:产生实例/RENDER_DAG:渲染DAG/CALCULATE_PATH:计算路径/COMPLETE:完成
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getShardKey() 获取该基线由哪个机器处理
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShardKey(string $ShardKey) 设置该基线由哪个机器处理
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getExceptionalTaskInstances() 获取异常任务实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExceptionalTaskInstances(array $ExceptionalTaskInstances) 设置异常任务实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTaskInstances() 获取关联的所有任务实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskInstances(array $TaskInstances) 设置关联的所有任务实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCriticalStartTime() 获取任务实例DAG整体启动时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCriticalStartTime(string $CriticalStartTime) 设置任务实例DAG整体启动时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCriticalTaskInstances() 获取基线实例上的关键任务实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCriticalTaskInstances(array $CriticalTaskInstances) 设置基线实例上的关键任务实例
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getBaselineTaskInstances() 获取基线实例与保障任务实例映射
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBaselineTaskInstances(array $BaselineTaskInstances) 设置基线实例与保障任务实例映射
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAppId() 获取租户id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(string $AppId) 设置租户id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnerUin() 获取主账号uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerUin(string $OwnerUin) 设置主账号uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserUin() 获取当前用户uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserUin(string $UserUin) 设置当前用户uin
注意：此字段可能返回 null，表示取不到有效值。
 */
class BaselineInstanceVo extends AbstractModel
{
    /**
     * @var integer 基线实例id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var integer 基线id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BaselineId;

    /**
     * @var string 基线名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BaselineName;

    /**
     * @var string 基线类型，D: 天基线 / H 小时基线
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BaselineType;

    /**
     * @var string 基线实例数据时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BaselineDataTime;

    /**
     * @var string 基线实例生成时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 基线实例预计完成时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EstimatedEndTime;

    /**
     * @var string 基线实例状态，P:暂停/ SF:安全/ WN:预警/ BL:破线 / TF:任务失败
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BaselineInstanceStatus;

    /**
     * @var string 责任人uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InChargeUin;

    /**
     * @var string 责任人名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InChargeName;

    /**
     * @var integer 预警余量/单位分钟
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WarningMargin;

    /**
     * @var string 承诺时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PromiseTime;

    /**
     * @var string 告警级别 N: 普通 / I重要 / E: 紧急
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlarmLevel;

    /**
     * @var string 项目id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string 基线实例ready状态。NEW_GENERATED_INSTANCE:产生实例/RENDER_DAG:渲染DAG/CALCULATE_PATH:计算路径/COMPLETE:完成
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsReady;

    /**
     * @var string 该基线由哪个机器处理
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShardKey;

    /**
     * @var array 异常任务实例
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExceptionalTaskInstances;

    /**
     * @var array 关联的所有任务实例
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskInstances;

    /**
     * @var string 任务实例DAG整体启动时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CriticalStartTime;

    /**
     * @var array 基线实例上的关键任务实例
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CriticalTaskInstances;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var array 基线实例与保障任务实例映射
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BaselineTaskInstances;

    /**
     * @var string 租户id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var string 主账号uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerUin;

    /**
     * @var string 当前用户uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserUin;

    /**
     * @param integer $Id 基线实例id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BaselineId 基线id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BaselineName 基线名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BaselineType 基线类型，D: 天基线 / H 小时基线
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BaselineDataTime 基线实例数据时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 基线实例生成时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EstimatedEndTime 基线实例预计完成时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BaselineInstanceStatus 基线实例状态，P:暂停/ SF:安全/ WN:预警/ BL:破线 / TF:任务失败
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InChargeUin 责任人uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InChargeName 责任人名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $WarningMargin 预警余量/单位分钟
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PromiseTime 承诺时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AlarmLevel 告警级别 N: 普通 / I重要 / E: 紧急
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId 项目id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IsReady 基线实例ready状态。NEW_GENERATED_INSTANCE:产生实例/RENDER_DAG:渲染DAG/CALCULATE_PATH:计算路径/COMPLETE:完成
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ShardKey 该基线由哪个机器处理
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ExceptionalTaskInstances 异常任务实例
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TaskInstances 关联的所有任务实例
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CriticalStartTime 任务实例DAG整体启动时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CriticalTaskInstances 基线实例上的关键任务实例
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $BaselineTaskInstances 基线实例与保障任务实例映射
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AppId 租户id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerUin 主账号uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserUin 当前用户uin
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("BaselineId",$param) and $param["BaselineId"] !== null) {
            $this->BaselineId = $param["BaselineId"];
        }

        if (array_key_exists("BaselineName",$param) and $param["BaselineName"] !== null) {
            $this->BaselineName = $param["BaselineName"];
        }

        if (array_key_exists("BaselineType",$param) and $param["BaselineType"] !== null) {
            $this->BaselineType = $param["BaselineType"];
        }

        if (array_key_exists("BaselineDataTime",$param) and $param["BaselineDataTime"] !== null) {
            $this->BaselineDataTime = $param["BaselineDataTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("EstimatedEndTime",$param) and $param["EstimatedEndTime"] !== null) {
            $this->EstimatedEndTime = $param["EstimatedEndTime"];
        }

        if (array_key_exists("BaselineInstanceStatus",$param) and $param["BaselineInstanceStatus"] !== null) {
            $this->BaselineInstanceStatus = $param["BaselineInstanceStatus"];
        }

        if (array_key_exists("InChargeUin",$param) and $param["InChargeUin"] !== null) {
            $this->InChargeUin = $param["InChargeUin"];
        }

        if (array_key_exists("InChargeName",$param) and $param["InChargeName"] !== null) {
            $this->InChargeName = $param["InChargeName"];
        }

        if (array_key_exists("WarningMargin",$param) and $param["WarningMargin"] !== null) {
            $this->WarningMargin = $param["WarningMargin"];
        }

        if (array_key_exists("PromiseTime",$param) and $param["PromiseTime"] !== null) {
            $this->PromiseTime = $param["PromiseTime"];
        }

        if (array_key_exists("AlarmLevel",$param) and $param["AlarmLevel"] !== null) {
            $this->AlarmLevel = $param["AlarmLevel"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("IsReady",$param) and $param["IsReady"] !== null) {
            $this->IsReady = $param["IsReady"];
        }

        if (array_key_exists("ShardKey",$param) and $param["ShardKey"] !== null) {
            $this->ShardKey = $param["ShardKey"];
        }

        if (array_key_exists("ExceptionalTaskInstances",$param) and $param["ExceptionalTaskInstances"] !== null) {
            $this->ExceptionalTaskInstances = [];
            foreach ($param["ExceptionalTaskInstances"] as $key => $value){
                $obj = new BaselineTaskInstanceDto();
                $obj->deserialize($value);
                array_push($this->ExceptionalTaskInstances, $obj);
            }
        }

        if (array_key_exists("TaskInstances",$param) and $param["TaskInstances"] !== null) {
            $this->TaskInstances = [];
            foreach ($param["TaskInstances"] as $key => $value){
                $obj = new BaselineTaskInstanceDto();
                $obj->deserialize($value);
                array_push($this->TaskInstances, $obj);
            }
        }

        if (array_key_exists("CriticalStartTime",$param) and $param["CriticalStartTime"] !== null) {
            $this->CriticalStartTime = $param["CriticalStartTime"];
        }

        if (array_key_exists("CriticalTaskInstances",$param) and $param["CriticalTaskInstances"] !== null) {
            $this->CriticalTaskInstances = [];
            foreach ($param["CriticalTaskInstances"] as $key => $value){
                $obj = new BaselineTaskInstanceDto();
                $obj->deserialize($value);
                array_push($this->CriticalTaskInstances, $obj);
            }
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("BaselineTaskInstances",$param) and $param["BaselineTaskInstances"] !== null) {
            $this->BaselineTaskInstances = [];
            foreach ($param["BaselineTaskInstances"] as $key => $value){
                $obj = new BaselineTaskInstanceDto();
                $obj->deserialize($value);
                array_push($this->BaselineTaskInstances, $obj);
            }
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("UserUin",$param) and $param["UserUin"] !== null) {
            $this->UserUin = $param["UserUin"];
        }
    }
}
