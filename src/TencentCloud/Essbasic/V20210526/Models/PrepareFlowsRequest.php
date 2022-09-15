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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PrepareFlows请求参数结构体
 *
 * @method Agent getAgent() 获取渠道应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 均必填。
 * @method void setAgent(Agent $Agent) 设置渠道应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 均必填。
 * @method array getFlowInfos() 获取多个合同（签署流程）信息，最大支持20个签署流程。
 * @method void setFlowInfos(array $FlowInfos) 设置多个合同（签署流程）信息，最大支持20个签署流程。
 * @method string getJumpUrl() 获取操作完成后的跳转地址，最大长度200
 * @method void setJumpUrl(string $JumpUrl) 设置操作完成后的跳转地址，最大长度200
 * @method UserInfo getOperator() 获取操作者的信息
 * @method void setOperator(UserInfo $Operator) 设置操作者的信息
 */
class PrepareFlowsRequest extends AbstractModel
{
    /**
     * @var Agent 渠道应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 均必填。
     */
    public $Agent;

    /**
     * @var array 多个合同（签署流程）信息，最大支持20个签署流程。
     */
    public $FlowInfos;

    /**
     * @var string 操作完成后的跳转地址，最大长度200
     */
    public $JumpUrl;

    /**
     * @var UserInfo 操作者的信息
     */
    public $Operator;

    /**
     * @param Agent $Agent 渠道应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 均必填。
     * @param array $FlowInfos 多个合同（签署流程）信息，最大支持20个签署流程。
     * @param string $JumpUrl 操作完成后的跳转地址，最大长度200
     * @param UserInfo $Operator 操作者的信息
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
        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("FlowInfos",$param) and $param["FlowInfos"] !== null) {
            $this->FlowInfos = [];
            foreach ($param["FlowInfos"] as $key => $value){
                $obj = new FlowInfo();
                $obj->deserialize($value);
                array_push($this->FlowInfos, $obj);
            }
        }

        if (array_key_exists("JumpUrl",$param) and $param["JumpUrl"] !== null) {
            $this->JumpUrl = $param["JumpUrl"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }
    }
}
