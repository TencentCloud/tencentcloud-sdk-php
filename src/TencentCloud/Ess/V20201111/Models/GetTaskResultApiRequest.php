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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetTaskResultApi请求参数结构体
 *
 * @method string getTaskId() 获取任务Id，通过CreateConvertTaskApi得到
 * @method void setTaskId(string $TaskId) 设置任务Id，通过CreateConvertTaskApi得到
 * @method UserInfo getOperator() 获取操作人信息
 * @method void setOperator(UserInfo $Operator) 设置操作人信息
 * @method Agent getAgent() 获取应用号信息
 * @method void setAgent(Agent $Agent) 设置应用号信息
 * @method OrganizationInfo getOrganization() 获取暂未开放
 * @method void setOrganization(OrganizationInfo $Organization) 设置暂未开放
 */
class GetTaskResultApiRequest extends AbstractModel
{
    /**
     * @var string 任务Id，通过CreateConvertTaskApi得到
     */
    public $TaskId;

    /**
     * @var UserInfo 操作人信息
     */
    public $Operator;

    /**
     * @var Agent 应用号信息
     */
    public $Agent;

    /**
     * @var OrganizationInfo 暂未开放
     */
    public $Organization;

    /**
     * @param string $TaskId 任务Id，通过CreateConvertTaskApi得到
     * @param UserInfo $Operator 操作人信息
     * @param Agent $Agent 应用号信息
     * @param OrganizationInfo $Organization 暂未开放
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("Organization",$param) and $param["Organization"] !== null) {
            $this->Organization = new OrganizationInfo();
            $this->Organization->deserialize($param["Organization"]);
        }
    }
}
