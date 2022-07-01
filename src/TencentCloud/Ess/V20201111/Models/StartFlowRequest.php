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
 * StartFlow请求参数结构体
 *
 * @method string getFlowId() 获取签署流程编号，由CreateFlow接口返回
 * @method void setFlowId(string $FlowId) 设置签署流程编号，由CreateFlow接口返回
 * @method UserInfo getOperator() 获取用户信息
 * @method void setOperator(UserInfo $Operator) 设置用户信息
 * @method Agent getAgent() 获取应用相关信息
 * @method void setAgent(Agent $Agent) 设置应用相关信息
 * @method string getClientToken() 获取客户端Token，保持接口幂等性,最大长度64个字符
 * @method void setClientToken(string $ClientToken) 设置客户端Token，保持接口幂等性,最大长度64个字符
 */
class StartFlowRequest extends AbstractModel
{
    /**
     * @var string 签署流程编号，由CreateFlow接口返回
     */
    public $FlowId;

    /**
     * @var UserInfo 用户信息
     */
    public $Operator;

    /**
     * @var Agent 应用相关信息
     */
    public $Agent;

    /**
     * @var string 客户端Token，保持接口幂等性,最大长度64个字符
     */
    public $ClientToken;

    /**
     * @param string $FlowId 签署流程编号，由CreateFlow接口返回
     * @param UserInfo $Operator 用户信息
     * @param Agent $Agent 应用相关信息
     * @param string $ClientToken 客户端Token，保持接口幂等性,最大长度64个字符
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
        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }
    }
}
