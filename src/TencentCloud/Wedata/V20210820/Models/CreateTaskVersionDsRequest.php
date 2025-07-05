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
 * @method BatchCreateTaskVersionDTO getTask() 获取任务id
 * @method void setTask(BatchCreateTaskVersionDTO $Task) 设置任务id
 * @method boolean getNeedCheckParentSubmitted() 获取是否需要校验父任务已经提交到调度
 * @method void setNeedCheckParentSubmitted(boolean $NeedCheckParentSubmitted) 设置是否需要校验父任务已经提交到调度
 * @method boolean getAutoRun() 获取是否自动运行
 * @method void setAutoRun(boolean $AutoRun) 设置是否自动运行
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getRequestFromSource() 获取请求来源，WEB 前端；CLIENT 客户端
 * @method void setRequestFromSource(string $RequestFromSource) 设置请求来源，WEB 前端；CLIENT 客户端
 * @method string getAlarmWays() 获取告警方式:email-邮件;sms-短信;wecom-企业微信
 * @method void setAlarmWays(string $AlarmWays) 设置告警方式:email-邮件;sms-短信;wecom-企业微信
 * @method string getAlarmRecipientTypes() 获取告警对象:1-项目管理员，2-任务责任人
 * @method void setAlarmRecipientTypes(string $AlarmRecipientTypes) 设置告警对象:1-项目管理员，2-任务责任人
 * @method boolean getEnableCheckTaskCycleLink() 获取是否需要校验循环依赖，默认为 true，如果使用了 CheckTaskCycleLink 和 CheckTaskCycleConfiguration 两个接口校验成功可以传 false，后台服务器不再做校验
 * @method void setEnableCheckTaskCycleLink(boolean $EnableCheckTaskCycleLink) 设置是否需要校验循环依赖，默认为 true，如果使用了 CheckTaskCycleLink 和 CheckTaskCycleConfiguration 两个接口校验成功可以传 false，后台服务器不再做校验
 */
class CreateTaskVersionDsRequest extends AbstractModel
{
    /**
     * @var BatchCreateTaskVersionDTO 任务id
     */
    public $Task;

    /**
     * @var boolean 是否需要校验父任务已经提交到调度
     */
    public $NeedCheckParentSubmitted;

    /**
     * @var boolean 是否自动运行
     */
    public $AutoRun;

    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 请求来源，WEB 前端；CLIENT 客户端
     */
    public $RequestFromSource;

    /**
     * @var string 告警方式:email-邮件;sms-短信;wecom-企业微信
     */
    public $AlarmWays;

    /**
     * @var string 告警对象:1-项目管理员，2-任务责任人
     */
    public $AlarmRecipientTypes;

    /**
     * @var boolean 是否需要校验循环依赖，默认为 true，如果使用了 CheckTaskCycleLink 和 CheckTaskCycleConfiguration 两个接口校验成功可以传 false，后台服务器不再做校验
     */
    public $EnableCheckTaskCycleLink;

    /**
     * @param BatchCreateTaskVersionDTO $Task 任务id
     * @param boolean $NeedCheckParentSubmitted 是否需要校验父任务已经提交到调度
     * @param boolean $AutoRun 是否自动运行
     * @param string $ProjectId 项目ID
     * @param string $RequestFromSource 请求来源，WEB 前端；CLIENT 客户端
     * @param string $AlarmWays 告警方式:email-邮件;sms-短信;wecom-企业微信
     * @param string $AlarmRecipientTypes 告警对象:1-项目管理员，2-任务责任人
     * @param boolean $EnableCheckTaskCycleLink 是否需要校验循环依赖，默认为 true，如果使用了 CheckTaskCycleLink 和 CheckTaskCycleConfiguration 两个接口校验成功可以传 false，后台服务器不再做校验
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
    }
}
