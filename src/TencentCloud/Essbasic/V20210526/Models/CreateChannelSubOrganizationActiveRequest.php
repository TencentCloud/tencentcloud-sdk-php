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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateChannelSubOrganizationActive请求参数结构体
 *
 * @method Agent getAgent() 获取关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li>
<li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li>
</ul>
第三方平台子客企业和员工必须已经经过实名认证
 * @method void setAgent(Agent $Agent) 设置关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li>
<li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li>
</ul>
第三方平台子客企业和员工必须已经经过实名认证
 * @method array getSubOrganizationOpenIds() 获取要进行激活或者续期的子客企业OrganizationOpenId列表，请确保所有列出的子客企业均已完成认证。
 * @method void setSubOrganizationOpenIds(array $SubOrganizationOpenIds) 设置要进行激活或者续期的子客企业OrganizationOpenId列表，请确保所有列出的子客企业均已完成认证。
 * @method boolean getRenew() 获取操作类型，可以选择如下：

**false**：（默认）激活子客企业
**true**：续期子客企业

 * @method void setRenew(boolean $Renew) 设置操作类型，可以选择如下：

**false**：（默认）激活子客企业
**true**：续期子客企业
 */
class CreateChannelSubOrganizationActiveRequest extends AbstractModel
{
    /**
     * @var Agent 关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li>
<li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li>
</ul>
第三方平台子客企业和员工必须已经经过实名认证
     */
    public $Agent;

    /**
     * @var array 要进行激活或者续期的子客企业OrganizationOpenId列表，请确保所有列出的子客企业均已完成认证。
     */
    public $SubOrganizationOpenIds;

    /**
     * @var boolean 操作类型，可以选择如下：

**false**：（默认）激活子客企业
**true**：续期子客企业

     */
    public $Renew;

    /**
     * @param Agent $Agent 关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li>
<li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li>
</ul>
第三方平台子客企业和员工必须已经经过实名认证
     * @param array $SubOrganizationOpenIds 要进行激活或者续期的子客企业OrganizationOpenId列表，请确保所有列出的子客企业均已完成认证。
     * @param boolean $Renew 操作类型，可以选择如下：

**false**：（默认）激活子客企业
**true**：续期子客企业
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

        if (array_key_exists("SubOrganizationOpenIds",$param) and $param["SubOrganizationOpenIds"] !== null) {
            $this->SubOrganizationOpenIds = $param["SubOrganizationOpenIds"];
        }

        if (array_key_exists("Renew",$param) and $param["Renew"] !== null) {
            $this->Renew = $param["Renew"];
        }
    }
}
