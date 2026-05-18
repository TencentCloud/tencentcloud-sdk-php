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
 * CreateTaskVersionDs请求参数结构体
 *
 * @method BatchCreateTaskVersionDTO getTask() 获取<p>任务id</p>
 * @method void setTask(BatchCreateTaskVersionDTO $Task) 设置<p>任务id</p>
 * @method boolean getNeedCheckParentSubmitted() 获取<p>是否需要校验父任务已经提交到调度</p>
 * @method void setNeedCheckParentSubmitted(boolean $NeedCheckParentSubmitted) 设置<p>是否需要校验父任务已经提交到调度</p>
 * @method boolean getAutoRun() 获取<p>是否自动运行</p>
 * @method void setAutoRun(boolean $AutoRun) 设置<p>是否自动运行</p>
 * @method string getProjectId() 获取<p>项目ID</p>
 * @method void setProjectId(string $ProjectId) 设置<p>项目ID</p>
 * @method string getRequestFromSource() 获取请求来源，WEB 前端；CLIENT 客户端
 * @method void setRequestFromSource(string $RequestFromSource) 设置请求来源，WEB 前端；CLIENT 客户端
 * @method string getAlarmWays() 获取<p>告警方式:email-邮件;sms-短信;wecom-企业微信</p>
 * @method void setAlarmWays(string $AlarmWays) 设置<p>告警方式:email-邮件;sms-短信;wecom-企业微信</p>
 * @method string getAlarmRecipientTypes() 获取<p>告警对象:1-项目管理员，2-任务责任人</p>
 * @method void setAlarmRecipientTypes(string $AlarmRecipientTypes) 设置<p>告警对象:1-项目管理员，2-任务责任人</p>
 * @method boolean getEnableCheckTaskCycleLink() 获取<p>是否需要校验循环依赖，默认为 true，如果使用了 CheckTaskCycleLink 和 CheckTaskCycleConfiguration 两个接口校验成功可以传 false，后台服务器不再做校验</p>
 * @method void setEnableCheckTaskCycleLink(boolean $EnableCheckTaskCycleLink) 设置<p>是否需要校验循环依赖，默认为 true，如果使用了 CheckTaskCycleLink 和 CheckTaskCycleConfiguration 两个接口校验成功可以传 false，后台服务器不再做校验</p>
 * @method boolean getEnableMakeUp() 获取<p>是否需要补录中间实例</p>
 * @method void setEnableMakeUp(boolean $EnableMakeUp) 设置<p>是否需要补录中间实例</p>
 * @method array getAssignApprovalList() 获取<p>指定审批人列表</p>
 * @method void setAssignApprovalList(array $AssignApprovalList) 设置<p>指定审批人列表</p>
 * @method string getMissingInstanceStrategy() 获取<p>MAKEUP:补录缺失的实例;FORCE_SUCCESS:将缺失的实例置成功;SKIP:不处理，忽略缺失的实例</p>
 * @method void setMissingInstanceStrategy(string $MissingInstanceStrategy) 设置<p>MAKEUP:补录缺失的实例;FORCE_SUCCESS:将缺失的实例置成功;SKIP:不处理，忽略缺失的实例</p>
 */
class CreateTaskVersionDsRequest extends AbstractModel
{
    /**
     * @var BatchCreateTaskVersionDTO <p>任务id</p>
     */
    public $Task;

    /**
     * @var boolean <p>是否需要校验父任务已经提交到调度</p>
     */
    public $NeedCheckParentSubmitted;

    /**
     * @var boolean <p>是否自动运行</p>
     */
    public $AutoRun;

    /**
     * @var string <p>项目ID</p>
     */
    public $ProjectId;

    /**
     * @var string 请求来源，WEB 前端；CLIENT 客户端
     */
    public $RequestFromSource;

    /**
     * @var string <p>告警方式:email-邮件;sms-短信;wecom-企业微信</p>
     */
    public $AlarmWays;

    /**
     * @var string <p>告警对象:1-项目管理员，2-任务责任人</p>
     */
    public $AlarmRecipientTypes;

    /**
     * @var boolean <p>是否需要校验循环依赖，默认为 true，如果使用了 CheckTaskCycleLink 和 CheckTaskCycleConfiguration 两个接口校验成功可以传 false，后台服务器不再做校验</p>
     */
    public $EnableCheckTaskCycleLink;

    /**
     * @var boolean <p>是否需要补录中间实例</p>
     */
    public $EnableMakeUp;

    /**
     * @var array <p>指定审批人列表</p>
     */
    public $AssignApprovalList;

    /**
     * @var string <p>MAKEUP:补录缺失的实例;FORCE_SUCCESS:将缺失的实例置成功;SKIP:不处理，忽略缺失的实例</p>
     */
    public $MissingInstanceStrategy;

    /**
     * @param BatchCreateTaskVersionDTO $Task <p>任务id</p>
     * @param boolean $NeedCheckParentSubmitted <p>是否需要校验父任务已经提交到调度</p>
     * @param boolean $AutoRun <p>是否自动运行</p>
     * @param string $ProjectId <p>项目ID</p>
     * @param string $RequestFromSource 请求来源，WEB 前端；CLIENT 客户端
     * @param string $AlarmWays <p>告警方式:email-邮件;sms-短信;wecom-企业微信</p>
     * @param string $AlarmRecipientTypes <p>告警对象:1-项目管理员，2-任务责任人</p>
     * @param boolean $EnableCheckTaskCycleLink <p>是否需要校验循环依赖，默认为 true，如果使用了 CheckTaskCycleLink 和 CheckTaskCycleConfiguration 两个接口校验成功可以传 false，后台服务器不再做校验</p>
     * @param boolean $EnableMakeUp <p>是否需要补录中间实例</p>
     * @param array $AssignApprovalList <p>指定审批人列表</p>
     * @param string $MissingInstanceStrategy <p>MAKEUP:补录缺失的实例;FORCE_SUCCESS:将缺失的实例置成功;SKIP:不处理，忽略缺失的实例</p>
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
        if (array_key_exists("Task",$param) and $param["Task"] !== null) {
            $this->Task = new BatchCreateTaskVersionDTO();
            $this->Task->deserialize($param["Task"]);
        }

        if (array_key_exists("NeedCheckParentSubmitted",$param) and $param["NeedCheckParentSubmitted"] !== null) {
            $this->NeedCheckParentSubmitted = $param["NeedCheckParentSubmitted"];
        }

        if (array_key_exists("AutoRun",$param) and $param["AutoRun"] !== null) {
            $this->AutoRun = $param["AutoRun"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("RequestFromSource",$param) and $param["RequestFromSource"] !== null) {
            $this->RequestFromSource = $param["RequestFromSource"];
        }

        if (array_key_exists("AlarmWays",$param) and $param["AlarmWays"] !== null) {
            $this->AlarmWays = $param["AlarmWays"];
        }

        if (array_key_exists("AlarmRecipientTypes",$param) and $param["AlarmRecipientTypes"] !== null) {
            $this->AlarmRecipientTypes = $param["AlarmRecipientTypes"];
        }

        if (array_key_exists("EnableCheckTaskCycleLink",$param) and $param["EnableCheckTaskCycleLink"] !== null) {
            $this->EnableCheckTaskCycleLink = $param["EnableCheckTaskCycleLink"];
        }

        if (array_key_exists("EnableMakeUp",$param) and $param["EnableMakeUp"] !== null) {
            $this->EnableMakeUp = $param["EnableMakeUp"];
        }

        if (array_key_exists("AssignApprovalList",$param) and $param["AssignApprovalList"] !== null) {
            $this->AssignApprovalList = $param["AssignApprovalList"];
        }

        if (array_key_exists("MissingInstanceStrategy",$param) and $param["MissingInstanceStrategy"] !== null) {
            $this->MissingInstanceStrategy = $param["MissingInstanceStrategy"];
        }
    }
}
