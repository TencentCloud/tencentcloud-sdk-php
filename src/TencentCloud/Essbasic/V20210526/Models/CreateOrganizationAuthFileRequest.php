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
 * CreateOrganizationAuthFile请求参数结构体
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
 * @method OrganizationCommonInfo getOrganizationCommonInfo() 获取企业授权书信息参数， 需要自行保证这些参数跟营业执照中的信息一致。
 * @method void setOrganizationCommonInfo(OrganizationCommonInfo $OrganizationCommonInfo) 设置企业授权书信息参数， 需要自行保证这些参数跟营业执照中的信息一致。
 * @method integer getType() 获取授权书类型：

<ul><li>0: 企业认证超管授权书</li><li>1: 超管变更授权书</li><li>2: 企业注销授权书</li></ul>
 * @method void setType(integer $Type) 设置授权书类型：

<ul><li>0: 企业认证超管授权书</li><li>1: 超管变更授权书</li><li>2: 企业注销授权书</li></ul>
 */
class CreateOrganizationAuthFileRequest extends AbstractModel
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
     * @var OrganizationCommonInfo 企业授权书信息参数， 需要自行保证这些参数跟营业执照中的信息一致。
     */
    public $OrganizationCommonInfo;

    /**
     * @var integer 授权书类型：

<ul><li>0: 企业认证超管授权书</li><li>1: 超管变更授权书</li><li>2: 企业注销授权书</li></ul>
     */
    public $Type;

    /**
     * @param Agent $Agent 关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li>
<li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li>
</ul>
第三方平台子客企业和员工必须已经经过实名认证
     * @param OrganizationCommonInfo $OrganizationCommonInfo 企业授权书信息参数， 需要自行保证这些参数跟营业执照中的信息一致。
     * @param integer $Type 授权书类型：

<ul><li>0: 企业认证超管授权书</li><li>1: 超管变更授权书</li><li>2: 企业注销授权书</li></ul>
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

        if (array_key_exists("OrganizationCommonInfo",$param) and $param["OrganizationCommonInfo"] !== null) {
            $this->OrganizationCommonInfo = new OrganizationCommonInfo();
            $this->OrganizationCommonInfo->deserialize($param["OrganizationCommonInfo"]);
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
