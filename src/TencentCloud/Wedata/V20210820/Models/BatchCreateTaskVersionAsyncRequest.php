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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BatchCreateTaskVersionAsync请求参数结构体
 *
 * @method array getTasks() 获取<p>任务信息</p>
 * @method void setTasks(array $Tasks) 设置<p>任务信息</p>
 * @method string getProjectId() 获取<p>项目ID</p>
 * @method void setProjectId(string $ProjectId) 设置<p>项目ID</p>
 * @method boolean getAutoRun() 获取<p>是否自动运行</p>
 * @method void setAutoRun(boolean $AutoRun) 设置<p>是否自动运行</p>
 * @method string getAlarmWays() 获取<p>告警方式:email-邮件;sms-短信;wecom-企业微信</p>
 * @method void setAlarmWays(string $AlarmWays) 设置<p>告警方式:email-邮件;sms-短信;wecom-企业微信</p>
 * @method string getAlarmRecipientTypes() 获取<p>告警对象:1-项目管理员，2-任务责任人</p>
 * @method void setAlarmRecipientTypes(string $AlarmRecipientTypes) 设置<p>告警对象:1-项目管理员，2-任务责任人</p>
 * @method boolean getNeedCheckParentSubmitted() 获取<p>是否需要校验父任务已经提交到调度</p>
 * @method void setNeedCheckParentSubmitted(boolean $NeedCheckParentSubmitted) 设置<p>是否需要校验父任务已经提交到调度</p>
 * @method boolean getEnableMakeUp() 获取<p>是否需要补录中间实例</p>
 * @method void setEnableMakeUp(boolean $EnableMakeUp) 设置<p>是否需要补录中间实例</p>
 * @method array getAssignApprovalList() 获取<p>指定审批人列表</p>
 * @method void setAssignApprovalList(array $AssignApprovalList) 设置<p>指定审批人列表</p>
 * @method array getPerTaskMissingInstanceStrategy() 获取<p>任务缺失实例处理策略</p><p>MAKEUP:补录缺失的实例;FORCE_SUCCESS:将缺失的实例置成功;SKIP:不处理，忽略缺失的实例</p>
 * @method void setPerTaskMissingInstanceStrategy(array $PerTaskMissingInstanceStrategy) 设置<p>任务缺失实例处理策略</p><p>MAKEUP:补录缺失的实例;FORCE_SUCCESS:将缺失的实例置成功;SKIP:不处理，忽略缺失的实例</p>
 */
class BatchCreateTaskVersionAsyncRequest extends AbstractModel
{
    /**
     * @var array <p>任务信息</p>
     */
    public $Tasks;

    /**
     * @var string <p>项目ID</p>
     */
    public $ProjectId;

    /**
     * @var boolean <p>是否自动运行</p>
     */
    public $AutoRun;

    /**
     * @var string <p>告警方式:email-邮件;sms-短信;wecom-企业微信</p>
     */
    public $AlarmWays;

    /**
     * @var string <p>告警对象:1-项目管理员，2-任务责任人</p>
     */
    public $AlarmRecipientTypes;

    /**
     * @var boolean <p>是否需要校验父任务已经提交到调度</p>
     */
    public $NeedCheckParentSubmitted;

    /**
     * @var boolean <p>是否需要补录中间实例</p>
     */
    public $EnableMakeUp;

    /**
     * @var array <p>指定审批人列表</p>
     */
    public $AssignApprovalList;

    /**
     * @var array <p>任务缺失实例处理策略</p><p>MAKEUP:补录缺失的实例;FORCE_SUCCESS:将缺失的实例置成功;SKIP:不处理，忽略缺失的实例</p>
     */
    public $PerTaskMissingInstanceStrategy;

    /**
     * @param array $Tasks <p>任务信息</p>
     * @param string $ProjectId <p>项目ID</p>
     * @param boolean $AutoRun <p>是否自动运行</p>
     * @param string $AlarmWays <p>告警方式:email-邮件;sms-短信;wecom-企业微信</p>
     * @param string $AlarmRecipientTypes <p>告警对象:1-项目管理员，2-任务责任人</p>
     * @param boolean $NeedCheckParentSubmitted <p>是否需要校验父任务已经提交到调度</p>
     * @param boolean $EnableMakeUp <p>是否需要补录中间实例</p>
     * @param array $AssignApprovalList <p>指定审批人列表</p>
     * @param array $PerTaskMissingInstanceStrategy <p>任务缺失实例处理策略</p><p>MAKEUP:补录缺失的实例;FORCE_SUCCESS:将缺失的实例置成功;SKIP:不处理，忽略缺失的实例</p>
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
        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = [];
            foreach ($param["Tasks"] as $key => $value){
                $obj = new BatchCreateTaskVersionDTO();
                $obj->deserialize($value);
                array_push($this->Tasks, $obj);
            }
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("AutoRun",$param) and $param["AutoRun"] !== null) {
            $this->AutoRun = $param["AutoRun"];
        }

        if (array_key_exists("AlarmWays",$param) and $param["AlarmWays"] !== null) {
            $this->AlarmWays = $param["AlarmWays"];
        }

        if (array_key_exists("AlarmRecipientTypes",$param) and $param["AlarmRecipientTypes"] !== null) {
            $this->AlarmRecipientTypes = $param["AlarmRecipientTypes"];
        }

        if (array_key_exists("NeedCheckParentSubmitted",$param) and $param["NeedCheckParentSubmitted"] !== null) {
            $this->NeedCheckParentSubmitted = $param["NeedCheckParentSubmitted"];
        }

        if (array_key_exists("EnableMakeUp",$param) and $param["EnableMakeUp"] !== null) {
            $this->EnableMakeUp = $param["EnableMakeUp"];
        }

        if (array_key_exists("AssignApprovalList",$param) and $param["AssignApprovalList"] !== null) {
            $this->AssignApprovalList = $param["AssignApprovalList"];
        }

        if (array_key_exists("PerTaskMissingInstanceStrategy",$param) and $param["PerTaskMissingInstanceStrategy"] !== null) {
            $this->PerTaskMissingInstanceStrategy = [];
            foreach ($param["PerTaskMissingInstanceStrategy"] as $key => $value){
                $obj = new TaskMissingInstanceStrategy();
                $obj->deserialize($value);
                array_push($this->PerTaskMissingInstanceStrategy, $obj);
            }
        }
    }
}
