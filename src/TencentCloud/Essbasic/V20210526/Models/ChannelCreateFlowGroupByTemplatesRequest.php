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
 * ChannelCreateFlowGroupByTemplates请求参数结构体
 *
 * @method Agent getAgent() 获取应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 均必填。
 * @method void setAgent(Agent $Agent) 设置应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 均必填。
 * @method array getFlowInfos() 获取每个子合同的发起所需的信息，数量限制2-50（合同组暂不支持抄送功能）
 * @method void setFlowInfos(array $FlowInfos) 设置每个子合同的发起所需的信息，数量限制2-50（合同组暂不支持抄送功能）
 * @method string getFlowGroupName() 获取合同组名称，长度不超过200个字符
 * @method void setFlowGroupName(string $FlowGroupName) 设置合同组名称，长度不超过200个字符
 */
class ChannelCreateFlowGroupByTemplatesRequest extends AbstractModel
{
    /**
     * @var Agent 应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 均必填。
     */
    public $Agent;

    /**
     * @var array 每个子合同的发起所需的信息，数量限制2-50（合同组暂不支持抄送功能）
     */
    public $FlowInfos;

    /**
     * @var string 合同组名称，长度不超过200个字符
     */
    public $FlowGroupName;

    /**
     * @param Agent $Agent 应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 均必填。
     * @param array $FlowInfos 每个子合同的发起所需的信息，数量限制2-50（合同组暂不支持抄送功能）
     * @param string $FlowGroupName 合同组名称，长度不超过200个字符
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

        if (array_key_exists("FlowGroupName",$param) and $param["FlowGroupName"] !== null) {
            $this->FlowGroupName = $param["FlowGroupName"];
        }
    }
}
