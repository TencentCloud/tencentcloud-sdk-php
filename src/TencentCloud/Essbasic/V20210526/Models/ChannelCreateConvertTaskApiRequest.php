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
 * ChannelCreateConvertTaskApi请求参数结构体
 *
 * @method Agent getAgent() 获取应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 均必填。
 * @method void setAgent(Agent $Agent) 设置应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 均必填。
 * @method string getResourceType() 获取资源类型 取值范围doc,docx,html,xls,xlsx之一
 * @method void setResourceType(string $ResourceType) 设置资源类型 取值范围doc,docx,html,xls,xlsx之一
 * @method string getResourceName() 获取资源名称，长度限制为256字符
 * @method void setResourceName(string $ResourceName) 设置资源名称，长度限制为256字符
 * @method string getResourceId() 获取资源Id，通过UploadFiles获取
 * @method void setResourceId(string $ResourceId) 设置资源Id，通过UploadFiles获取
 * @method UserInfo getOperator() 获取调用方用户信息，不用传
 * @method void setOperator(UserInfo $Operator) 设置调用方用户信息，不用传
 * @method OrganizationInfo getOrganization() 获取暂未开放
 * @method void setOrganization(OrganizationInfo $Organization) 设置暂未开放
 */
class ChannelCreateConvertTaskApiRequest extends AbstractModel
{
    /**
     * @var Agent 应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 均必填。
     */
    public $Agent;

    /**
     * @var string 资源类型 取值范围doc,docx,html,xls,xlsx之一
     */
    public $ResourceType;

    /**
     * @var string 资源名称，长度限制为256字符
     */
    public $ResourceName;

    /**
     * @var string 资源Id，通过UploadFiles获取
     */
    public $ResourceId;

    /**
     * @var UserInfo 调用方用户信息，不用传
     */
    public $Operator;

    /**
     * @var OrganizationInfo 暂未开放
     */
    public $Organization;

    /**
     * @param Agent $Agent 应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 均必填。
     * @param string $ResourceType 资源类型 取值范围doc,docx,html,xls,xlsx之一
     * @param string $ResourceName 资源名称，长度限制为256字符
     * @param string $ResourceId 资源Id，通过UploadFiles获取
     * @param UserInfo $Operator 调用方用户信息，不用传
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
        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("Organization",$param) and $param["Organization"] !== null) {
            $this->Organization = new OrganizationInfo();
            $this->Organization->deserialize($param["Organization"]);
        }
    }
}
