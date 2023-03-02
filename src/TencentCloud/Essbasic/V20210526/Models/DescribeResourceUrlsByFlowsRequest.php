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
 * DescribeResourceUrlsByFlows请求参数结构体
 *
 * @method Agent getAgent() 获取应用相关信息。
此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 均必填。
 * @method void setAgent(Agent $Agent) 设置应用相关信息。
此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 均必填。
 * @method array getFlowIds() 获取查询资源所对应的签署流程Id，最多支持50个
 * @method void setFlowIds(array $FlowIds) 设置查询资源所对应的签署流程Id，最多支持50个
 * @method UserInfo getOperator() 获取操作者的信息，不用传
 * @method void setOperator(UserInfo $Operator) 设置操作者的信息，不用传
 */
class DescribeResourceUrlsByFlowsRequest extends AbstractModel
{
    /**
     * @var Agent 应用相关信息。
此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 均必填。
     */
    public $Agent;

    /**
     * @var array 查询资源所对应的签署流程Id，最多支持50个
     */
    public $FlowIds;

    /**
     * @var UserInfo 操作者的信息，不用传
     */
    public $Operator;

    /**
     * @param Agent $Agent 应用相关信息。
此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 均必填。
     * @param array $FlowIds 查询资源所对应的签署流程Id，最多支持50个
     * @param UserInfo $Operator 操作者的信息，不用传
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

        if (array_key_exists("FlowIds",$param) and $param["FlowIds"] !== null) {
            $this->FlowIds = $param["FlowIds"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }
    }
}
