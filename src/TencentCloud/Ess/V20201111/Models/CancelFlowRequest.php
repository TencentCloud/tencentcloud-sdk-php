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
 * CancelFlow请求参数结构体
 *
 * @method UserInfo getOperator() 获取调用方用户信息，userId 必填
 * @method void setOperator(UserInfo $Operator) 设置调用方用户信息，userId 必填
 * @method string getFlowId() 获取签署流程id
 * @method void setFlowId(string $FlowId) 设置签署流程id
 * @method string getCancelMessage() 获取撤销原因，最长200个字符；
 * @method void setCancelMessage(string $CancelMessage) 设置撤销原因，最长200个字符；
 * @method Agent getAgent() 获取应用相关信息
 * @method void setAgent(Agent $Agent) 设置应用相关信息
 */
class CancelFlowRequest extends AbstractModel
{
    /**
     * @var UserInfo 调用方用户信息，userId 必填
     */
    public $Operator;

    /**
     * @var string 签署流程id
     */
    public $FlowId;

    /**
     * @var string 撤销原因，最长200个字符；
     */
    public $CancelMessage;

    /**
     * @var Agent 应用相关信息
     */
    public $Agent;

    /**
     * @param UserInfo $Operator 调用方用户信息，userId 必填
     * @param string $FlowId 签署流程id
     * @param string $CancelMessage 撤销原因，最长200个字符；
     * @param Agent $Agent 应用相关信息
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
        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("CancelMessage",$param) and $param["CancelMessage"] !== null) {
            $this->CancelMessage = $param["CancelMessage"];
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }
    }
}
