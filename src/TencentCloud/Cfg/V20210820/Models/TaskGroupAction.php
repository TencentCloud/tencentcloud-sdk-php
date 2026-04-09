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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务分组动作
 *
 * @method integer getTaskGroupActionId() 获取<p>任务分组动作ID</p>
 * @method void setTaskGroupActionId(integer $TaskGroupActionId) 设置<p>任务分组动作ID</p>
 * @method array getTaskGroupInstances() 获取<p>任务分组动作实例列表</p>
 * @method void setTaskGroupInstances(array $TaskGroupInstances) 设置<p>任务分组动作实例列表</p>
 * @method integer getActionId() 获取<p>动作ID</p>
 * @method void setActionId(integer $ActionId) 设置<p>动作ID</p>
 * @method integer getTaskGroupActionOrder() 获取<p>分组动作顺序</p>
 * @method void setTaskGroupActionOrder(integer $TaskGroupActionOrder) 设置<p>分组动作顺序</p>
 * @method string getTaskGroupActionGeneralConfiguration() 获取<p>分组动作通用配置</p>
 * @method void setTaskGroupActionGeneralConfiguration(string $TaskGroupActionGeneralConfiguration) 设置<p>分组动作通用配置</p>
 * @method string getTaskGroupActionCustomConfiguration() 获取<p>分组动作自定义配置</p>
 * @method void setTaskGroupActionCustomConfiguration(string $TaskGroupActionCustomConfiguration) 设置<p>分组动作自定义配置</p>
 * @method integer getTaskGroupActionStatus() 获取<p>分组动作状态</p><p>枚举值：</p><ul><li>2001： 未开始</li><li>2002： 待执行</li><li>2003： 执行中</li><li>2004： 执行结束</li></ul>
 * @method void setTaskGroupActionStatus(integer $TaskGroupActionStatus) 设置<p>分组动作状态</p><p>枚举值：</p><ul><li>2001： 未开始</li><li>2002： 待执行</li><li>2003： 执行中</li><li>2004： 执行结束</li></ul>
 * @method string getTaskGroupActionCreateTime() 获取<p>动作分组创建时间</p>
 * @method void setTaskGroupActionCreateTime(string $TaskGroupActionCreateTime) 设置<p>动作分组创建时间</p>
 * @method string getTaskGroupActionUpdateTime() 获取<p>动作分组更新时间</p>
 * @method void setTaskGroupActionUpdateTime(string $TaskGroupActionUpdateTime) 设置<p>动作分组更新时间</p>
 * @method string getActionTitle() 获取<p>动作名称</p>
 * @method void setActionTitle(string $ActionTitle) 设置<p>动作名称</p>
 * @method integer getTaskGroupActionStatusType() 获取<p>状态类型: 0 -- 无状态，1 -- 成功，2-- 失败，3--终止，4--跳过</p>
 * @method void setTaskGroupActionStatusType(integer $TaskGroupActionStatusType) 设置<p>状态类型: 0 -- 无状态，1 -- 成功，2-- 失败，3--终止，4--跳过</p>
 * @method integer getTaskGroupActionRandomId() 获取<p>RandomId</p>
 * @method void setTaskGroupActionRandomId(integer $TaskGroupActionRandomId) 设置<p>RandomId</p>
 * @method integer getTaskGroupActionRecoverId() 获取<p>RecoverId</p>
 * @method void setTaskGroupActionRecoverId(integer $TaskGroupActionRecoverId) 设置<p>RecoverId</p>
 * @method integer getTaskGroupActionExecuteId() 获取<p>ExecuteId</p>
 * @method void setTaskGroupActionExecuteId(integer $TaskGroupActionExecuteId) 设置<p>ExecuteId</p>
 * @method integer getActionApiType() 获取<p>调用api类型，0:tat, 1:云api</p>
 * @method void setActionApiType(integer $ActionApiType) 设置<p>调用api类型，0:tat, 1:云api</p>
 * @method integer getActionAttribute() 获取<p>1:故障，2:恢复</p>
 * @method void setActionAttribute(integer $ActionAttribute) 设置<p>1:故障，2:恢复</p>
 * @method string getActionType() 获取<p>动作类型：平台、自定义</p>
 * @method void setActionType(string $ActionType) 设置<p>动作类型：平台、自定义</p>
 * @method boolean getIsExecuteRedo() 获取<p>是否可重试</p>
 * @method void setIsExecuteRedo(boolean $IsExecuteRedo) 设置<p>是否可重试</p>
 * @method string getActionRisk() 获取<p>动作风险级别</p>
 * @method void setActionRisk(string $ActionRisk) 设置<p>动作风险级别</p>
 * @method integer getTaskGroupActionExecuteTime() 获取<p>动作运行时间</p><p>单位：秒</p>
 * @method void setTaskGroupActionExecuteTime(integer $TaskGroupActionExecuteTime) 设置<p>动作运行时间</p><p>单位：秒</p>
 * @method string getTaskGroupActionStartTime() 获取<p>动作开始执行时间</p>
 * @method void setTaskGroupActionStartTime(string $TaskGroupActionStartTime) 设置<p>动作开始执行时间</p>
 */
class TaskGroupAction extends AbstractModel
{
    /**
     * @var integer <p>任务分组动作ID</p>
     */
    public $TaskGroupActionId;

    /**
     * @var array <p>任务分组动作实例列表</p>
     */
    public $TaskGroupInstances;

    /**
     * @var integer <p>动作ID</p>
     */
    public $ActionId;

    /**
     * @var integer <p>分组动作顺序</p>
     */
    public $TaskGroupActionOrder;

    /**
     * @var string <p>分组动作通用配置</p>
     */
    public $TaskGroupActionGeneralConfiguration;

    /**
     * @var string <p>分组动作自定义配置</p>
     */
    public $TaskGroupActionCustomConfiguration;

    /**
     * @var integer <p>分组动作状态</p><p>枚举值：</p><ul><li>2001： 未开始</li><li>2002： 待执行</li><li>2003： 执行中</li><li>2004： 执行结束</li></ul>
     */
    public $TaskGroupActionStatus;

    /**
     * @var string <p>动作分组创建时间</p>
     */
    public $TaskGroupActionCreateTime;

    /**
     * @var string <p>动作分组更新时间</p>
     */
    public $TaskGroupActionUpdateTime;

    /**
     * @var string <p>动作名称</p>
     */
    public $ActionTitle;

    /**
     * @var integer <p>状态类型: 0 -- 无状态，1 -- 成功，2-- 失败，3--终止，4--跳过</p>
     */
    public $TaskGroupActionStatusType;

    /**
     * @var integer <p>RandomId</p>
     */
    public $TaskGroupActionRandomId;

    /**
     * @var integer <p>RecoverId</p>
     */
    public $TaskGroupActionRecoverId;

    /**
     * @var integer <p>ExecuteId</p>
     */
    public $TaskGroupActionExecuteId;

    /**
     * @var integer <p>调用api类型，0:tat, 1:云api</p>
     */
    public $ActionApiType;

    /**
     * @var integer <p>1:故障，2:恢复</p>
     */
    public $ActionAttribute;

    /**
     * @var string <p>动作类型：平台、自定义</p>
     */
    public $ActionType;

    /**
     * @var boolean <p>是否可重试</p>
     */
    public $IsExecuteRedo;

    /**
     * @var string <p>动作风险级别</p>
     */
    public $ActionRisk;

    /**
     * @var integer <p>动作运行时间</p><p>单位：秒</p>
     */
    public $TaskGroupActionExecuteTime;

    /**
     * @var string <p>动作开始执行时间</p>
     */
    public $TaskGroupActionStartTime;

    /**
     * @param integer $TaskGroupActionId <p>任务分组动作ID</p>
     * @param array $TaskGroupInstances <p>任务分组动作实例列表</p>
     * @param integer $ActionId <p>动作ID</p>
     * @param integer $TaskGroupActionOrder <p>分组动作顺序</p>
     * @param string $TaskGroupActionGeneralConfiguration <p>分组动作通用配置</p>
     * @param string $TaskGroupActionCustomConfiguration <p>分组动作自定义配置</p>
     * @param integer $TaskGroupActionStatus <p>分组动作状态</p><p>枚举值：</p><ul><li>2001： 未开始</li><li>2002： 待执行</li><li>2003： 执行中</li><li>2004： 执行结束</li></ul>
     * @param string $TaskGroupActionCreateTime <p>动作分组创建时间</p>
     * @param string $TaskGroupActionUpdateTime <p>动作分组更新时间</p>
     * @param string $ActionTitle <p>动作名称</p>
     * @param integer $TaskGroupActionStatusType <p>状态类型: 0 -- 无状态，1 -- 成功，2-- 失败，3--终止，4--跳过</p>
     * @param integer $TaskGroupActionRandomId <p>RandomId</p>
     * @param integer $TaskGroupActionRecoverId <p>RecoverId</p>
     * @param integer $TaskGroupActionExecuteId <p>ExecuteId</p>
     * @param integer $ActionApiType <p>调用api类型，0:tat, 1:云api</p>
     * @param integer $ActionAttribute <p>1:故障，2:恢复</p>
     * @param string $ActionType <p>动作类型：平台、自定义</p>
     * @param boolean $IsExecuteRedo <p>是否可重试</p>
     * @param string $ActionRisk <p>动作风险级别</p>
     * @param integer $TaskGroupActionExecuteTime <p>动作运行时间</p><p>单位：秒</p>
     * @param string $TaskGroupActionStartTime <p>动作开始执行时间</p>
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

        if (array_key_exists("TaskGroupActionStartTime",$param) and $param["TaskGroupActionStartTime"] !== null) {
            $this->TaskGroupActionStartTime = $param["TaskGroupActionStartTime"];
        }
    }
}
