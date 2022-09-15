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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务分组动作
 *
 * @method integer getTaskGroupActionId() 获取任务分组动作ID
 * @method void setTaskGroupActionId(integer $TaskGroupActionId) 设置任务分组动作ID
 * @method array getTaskGroupInstances() 获取任务分组动作实例列表
 * @method void setTaskGroupInstances(array $TaskGroupInstances) 设置任务分组动作实例列表
 * @method integer getActionId() 获取动作ID
 * @method void setActionId(integer $ActionId) 设置动作ID
 * @method integer getTaskGroupActionOrder() 获取分组动作顺序
 * @method void setTaskGroupActionOrder(integer $TaskGroupActionOrder) 设置分组动作顺序
 * @method string getTaskGroupActionGeneralConfiguration() 获取分组动作通用配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskGroupActionGeneralConfiguration(string $TaskGroupActionGeneralConfiguration) 设置分组动作通用配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskGroupActionCustomConfiguration() 获取分组动作自定义配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskGroupActionCustomConfiguration(string $TaskGroupActionCustomConfiguration) 设置分组动作自定义配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskGroupActionStatus() 获取分组动作状态
 * @method void setTaskGroupActionStatus(integer $TaskGroupActionStatus) 设置分组动作状态
 * @method string getTaskGroupActionCreateTime() 获取动作分组创建时间
 * @method void setTaskGroupActionCreateTime(string $TaskGroupActionCreateTime) 设置动作分组创建时间
 * @method string getTaskGroupActionUpdateTime() 获取动作分组更新时间
 * @method void setTaskGroupActionUpdateTime(string $TaskGroupActionUpdateTime) 设置动作分组更新时间
 * @method string getActionTitle() 获取动作名称
 * @method void setActionTitle(string $ActionTitle) 设置动作名称
 * @method integer getTaskGroupActionStatusType() 获取状态类型: 0 -- 无状态，1 -- 成功，2-- 失败，3--终止，4--跳过
 * @method void setTaskGroupActionStatusType(integer $TaskGroupActionStatusType) 设置状态类型: 0 -- 无状态，1 -- 成功，2-- 失败，3--终止，4--跳过
 * @method integer getTaskGroupActionRandomId() 获取RandomId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskGroupActionRandomId(integer $TaskGroupActionRandomId) 设置RandomId
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskGroupActionRecoverId() 获取RecoverId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskGroupActionRecoverId(integer $TaskGroupActionRecoverId) 设置RecoverId
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskGroupActionExecuteId() 获取ExecuteId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskGroupActionExecuteId(integer $TaskGroupActionExecuteId) 设置ExecuteId
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getActionApiType() 获取调用api类型，0:tat, 1:云api
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActionApiType(integer $ActionApiType) 设置调用api类型，0:tat, 1:云api
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getActionAttribute() 获取1:故障，2:恢复
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActionAttribute(integer $ActionAttribute) 设置1:故障，2:恢复
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getActionType() 获取动作类型：平台、自定义
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActionType(string $ActionType) 设置动作类型：平台、自定义
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsExecuteRedo() 获取是否可重试
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsExecuteRedo(boolean $IsExecuteRedo) 设置是否可重试
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getActionRisk() 获取动作风险级别
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActionRisk(string $ActionRisk) 设置动作风险级别
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskGroupActionExecuteTime() 获取动作运行时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskGroupActionExecuteTime(integer $TaskGroupActionExecuteTime) 设置动作运行时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskGroupAction extends AbstractModel
{
    /**
     * @var integer 任务分组动作ID
     */
    public $TaskGroupActionId;

    /**
     * @var array 任务分组动作实例列表
     */
    public $TaskGroupInstances;

    /**
     * @var integer 动作ID
     */
    public $ActionId;

    /**
     * @var integer 分组动作顺序
     */
    public $TaskGroupActionOrder;

    /**
     * @var string 分组动作通用配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskGroupActionGeneralConfiguration;

    /**
     * @var string 分组动作自定义配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskGroupActionCustomConfiguration;

    /**
     * @var integer 分组动作状态
     */
    public $TaskGroupActionStatus;

    /**
     * @var string 动作分组创建时间
     */
    public $TaskGroupActionCreateTime;

    /**
     * @var string 动作分组更新时间
     */
    public $TaskGroupActionUpdateTime;

    /**
     * @var string 动作名称
     */
    public $ActionTitle;

    /**
     * @var integer 状态类型: 0 -- 无状态，1 -- 成功，2-- 失败，3--终止，4--跳过
     */
    public $TaskGroupActionStatusType;

    /**
     * @var integer RandomId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskGroupActionRandomId;

    /**
     * @var integer RecoverId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskGroupActionRecoverId;

    /**
     * @var integer ExecuteId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskGroupActionExecuteId;

    /**
     * @var integer 调用api类型，0:tat, 1:云api
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActionApiType;

    /**
     * @var integer 1:故障，2:恢复
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActionAttribute;

    /**
     * @var string 动作类型：平台、自定义
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActionType;

    /**
     * @var boolean 是否可重试
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsExecuteRedo;

    /**
     * @var string 动作风险级别
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActionRisk;

    /**
     * @var integer 动作运行时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskGroupActionExecuteTime;

    /**
     * @param integer $TaskGroupActionId 任务分组动作ID
     * @param array $TaskGroupInstances 任务分组动作实例列表
     * @param integer $ActionId 动作ID
     * @param integer $TaskGroupActionOrder 分组动作顺序
     * @param string $TaskGroupActionGeneralConfiguration 分组动作通用配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskGroupActionCustomConfiguration 分组动作自定义配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskGroupActionStatus 分组动作状态
     * @param string $TaskGroupActionCreateTime 动作分组创建时间
     * @param string $TaskGroupActionUpdateTime 动作分组更新时间
     * @param string $ActionTitle 动作名称
     * @param integer $TaskGroupActionStatusType 状态类型: 0 -- 无状态，1 -- 成功，2-- 失败，3--终止，4--跳过
     * @param integer $TaskGroupActionRandomId RandomId
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskGroupActionRecoverId RecoverId
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskGroupActionExecuteId ExecuteId
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ActionApiType 调用api类型，0:tat, 1:云api
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ActionAttribute 1:故障，2:恢复
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ActionType 动作类型：平台、自定义
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsExecuteRedo 是否可重试
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ActionRisk 动作风险级别
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskGroupActionExecuteTime 动作运行时间
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
        if (array_key_exists("TaskGroupActionId",$param) and $param["TaskGroupActionId"] !== null) {
            $this->TaskGroupActionId = $param["TaskGroupActionId"];
        }

        if (array_key_exists("TaskGroupInstances",$param) and $param["TaskGroupInstances"] !== null) {
            $this->TaskGroupInstances = [];
            foreach ($param["TaskGroupInstances"] as $key => $value){
                $obj = new TaskGroupInstance();
                $obj->deserialize($value);
                array_push($this->TaskGroupInstances, $obj);
            }
        }

        if (array_key_exists("ActionId",$param) and $param["ActionId"] !== null) {
            $this->ActionId = $param["ActionId"];
        }

        if (array_key_exists("TaskGroupActionOrder",$param) and $param["TaskGroupActionOrder"] !== null) {
            $this->TaskGroupActionOrder = $param["TaskGroupActionOrder"];
        }

        if (array_key_exists("TaskGroupActionGeneralConfiguration",$param) and $param["TaskGroupActionGeneralConfiguration"] !== null) {
            $this->TaskGroupActionGeneralConfiguration = $param["TaskGroupActionGeneralConfiguration"];
        }

        if (array_key_exists("TaskGroupActionCustomConfiguration",$param) and $param["TaskGroupActionCustomConfiguration"] !== null) {
            $this->TaskGroupActionCustomConfiguration = $param["TaskGroupActionCustomConfiguration"];
        }

        if (array_key_exists("TaskGroupActionStatus",$param) and $param["TaskGroupActionStatus"] !== null) {
            $this->TaskGroupActionStatus = $param["TaskGroupActionStatus"];
        }

        if (array_key_exists("TaskGroupActionCreateTime",$param) and $param["TaskGroupActionCreateTime"] !== null) {
            $this->TaskGroupActionCreateTime = $param["TaskGroupActionCreateTime"];
        }

        if (array_key_exists("TaskGroupActionUpdateTime",$param) and $param["TaskGroupActionUpdateTime"] !== null) {
            $this->TaskGroupActionUpdateTime = $param["TaskGroupActionUpdateTime"];
        }

        if (array_key_exists("ActionTitle",$param) and $param["ActionTitle"] !== null) {
            $this->ActionTitle = $param["ActionTitle"];
        }

        if (array_key_exists("TaskGroupActionStatusType",$param) and $param["TaskGroupActionStatusType"] !== null) {
            $this->TaskGroupActionStatusType = $param["TaskGroupActionStatusType"];
        }

        if (array_key_exists("TaskGroupActionRandomId",$param) and $param["TaskGroupActionRandomId"] !== null) {
            $this->TaskGroupActionRandomId = $param["TaskGroupActionRandomId"];
        }

        if (array_key_exists("TaskGroupActionRecoverId",$param) and $param["TaskGroupActionRecoverId"] !== null) {
            $this->TaskGroupActionRecoverId = $param["TaskGroupActionRecoverId"];
        }

        if (array_key_exists("TaskGroupActionExecuteId",$param) and $param["TaskGroupActionExecuteId"] !== null) {
            $this->TaskGroupActionExecuteId = $param["TaskGroupActionExecuteId"];
        }

        if (array_key_exists("ActionApiType",$param) and $param["ActionApiType"] !== null) {
            $this->ActionApiType = $param["ActionApiType"];
        }

        if (array_key_exists("ActionAttribute",$param) and $param["ActionAttribute"] !== null) {
            $this->ActionAttribute = $param["ActionAttribute"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("IsExecuteRedo",$param) and $param["IsExecuteRedo"] !== null) {
            $this->IsExecuteRedo = $param["IsExecuteRedo"];
        }

        if (array_key_exists("ActionRisk",$param) and $param["ActionRisk"] !== null) {
            $this->ActionRisk = $param["ActionRisk"];
        }

        if (array_key_exists("TaskGroupActionExecuteTime",$param) and $param["TaskGroupActionExecuteTime"] !== null) {
            $this->TaskGroupActionExecuteTime = $param["TaskGroupActionExecuteTime"];
        }
    }
}
