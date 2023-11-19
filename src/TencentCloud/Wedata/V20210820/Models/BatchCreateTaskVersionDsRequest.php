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
 * BatchCreateTaskVersionDs请求参数结构体
 *
 * @method array getTaskVersionDTOs() 获取任务版本信息
 * @method void setTaskVersionDTOs(array $TaskVersionDTOs) 设置任务版本信息
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method boolean getAutoRun() 获取是否自动运行
 * @method void setAutoRun(boolean $AutoRun) 设置是否自动运行
 * @method string getAlarmWays() 获取告警方式:email-邮件;sms-短信;wecom-企业微信
 * @method void setAlarmWays(string $AlarmWays) 设置告警方式:email-邮件;sms-短信;wecom-企业微信
 * @method string getAlarmRecipientTypes() 获取告警对象:1-项目管理员，2-任务责任人
 * @method void setAlarmRecipientTypes(string $AlarmRecipientTypes) 设置告警对象:1-项目管理员，2-任务责任人
 */
class BatchCreateTaskVersionDsRequest extends AbstractModel
{
    /**
     * @var array 任务版本信息
     */
    public $TaskVersionDTOs;

    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var boolean 是否自动运行
     */
    public $AutoRun;

    /**
     * @var string 告警方式:email-邮件;sms-短信;wecom-企业微信
     */
    public $AlarmWays;

    /**
     * @var string 告警对象:1-项目管理员，2-任务责任人
     */
    public $AlarmRecipientTypes;

    /**
     * @param array $TaskVersionDTOs 任务版本信息
     * @param string $ProjectId 项目ID
     * @param boolean $AutoRun 是否自动运行
     * @param string $AlarmWays 告警方式:email-邮件;sms-短信;wecom-企业微信
     * @param string $AlarmRecipientTypes 告警对象:1-项目管理员，2-任务责任人
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
        if (array_key_exists("TaskVersionDTOs",$param) and $param["TaskVersionDTOs"] !== null) {
            $this->TaskVersionDTOs = [];
            foreach ($param["TaskVersionDTOs"] as $key => $value){
                $obj = new BatchCreateTaskVersionDsDTOLite();
                $obj->deserialize($value);
                array_push($this->TaskVersionDTOs, $obj);
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
    }
}
