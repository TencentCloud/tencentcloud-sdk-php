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
 * CreateChannelOrganizationInfoChangeUrl请求参数结构体
 *
 * @method Agent getAgent() 获取关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li>
<li>第三方平台子客企业中的员工标识: Agent.ProxyOperator.OpenId</li>
</ul>
第三方平台子客企业和员工必须已经过实名认证
 * @method void setAgent(Agent $Agent) 设置关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li>
<li>第三方平台子客企业中的员工标识: Agent.ProxyOperator.OpenId</li>
</ul>
第三方平台子客企业和员工必须已经过实名认证
 * @method integer getChangeType() 获取企业信息变更类型，可选类型如下：
<ul><li>**1**：企业超管变更, 可以将超管换成同企业的其他员工</li>
<li>**2**：企业基础信息变更, 可以改企业名称 , 所在地址 , 法人名字等信息</li></ul>
 * @method void setChangeType(integer $ChangeType) 设置企业信息变更类型，可选类型如下：
<ul><li>**1**：企业超管变更, 可以将超管换成同企业的其他员工</li>
<li>**2**：企业基础信息变更, 可以改企业名称 , 所在地址 , 法人名字等信息</li></ul>
 * @method string getEndpoint() 获取变更链接类型：
<ul>
<li>**WEIXINAPP** : 创建变更短链。需要在移动端打开，会跳转到微信腾讯电子签小程序进行更换。（默认）</li>
<li>**APP** : 创建变更小程序链接，可从第三方App或者小程序跳转到微信腾讯电子签小程序进行更换。</li>
</ul>
 * @method void setEndpoint(string $Endpoint) 设置变更链接类型：
<ul>
<li>**WEIXINAPP** : 创建变更短链。需要在移动端打开，会跳转到微信腾讯电子签小程序进行更换。（默认）</li>
<li>**APP** : 创建变更小程序链接，可从第三方App或者小程序跳转到微信腾讯电子签小程序进行更换。</li>
</ul>
 */
class CreateChannelOrganizationInfoChangeUrlRequest extends AbstractModel
{
    /**
     * @var Agent 关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li>
<li>第三方平台子客企业中的员工标识: Agent.ProxyOperator.OpenId</li>
</ul>
第三方平台子客企业和员工必须已经过实名认证
     */
    public $Agent;

    /**
     * @var integer 企业信息变更类型，可选类型如下：
<ul><li>**1**：企业超管变更, 可以将超管换成同企业的其他员工</li>
<li>**2**：企业基础信息变更, 可以改企业名称 , 所在地址 , 法人名字等信息</li></ul>
     */
    public $ChangeType;

    /**
     * @var string 变更链接类型：
<ul>
<li>**WEIXINAPP** : 创建变更短链。需要在移动端打开，会跳转到微信腾讯电子签小程序进行更换。（默认）</li>
<li>**APP** : 创建变更小程序链接，可从第三方App或者小程序跳转到微信腾讯电子签小程序进行更换。</li>
</ul>
     */
    public $Endpoint;

    /**
     * @param Agent $Agent 关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li>
<li>第三方平台子客企业中的员工标识: Agent.ProxyOperator.OpenId</li>
</ul>
第三方平台子客企业和员工必须已经过实名认证
     * @param integer $ChangeType 企业信息变更类型，可选类型如下：
<ul><li>**1**：企业超管变更, 可以将超管换成同企业的其他员工</li>
<li>**2**：企业基础信息变更, 可以改企业名称 , 所在地址 , 法人名字等信息</li></ul>
     * @param string $Endpoint 变更链接类型：
<ul>
<li>**WEIXINAPP** : 创建变更短链。需要在移动端打开，会跳转到微信腾讯电子签小程序进行更换。（默认）</li>
<li>**APP** : 创建变更小程序链接，可从第三方App或者小程序跳转到微信腾讯电子签小程序进行更换。</li>
</ul>
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

        if (array_key_exists("ChangeType",$param) and $param["ChangeType"] !== null) {
            $this->ChangeType = $param["ChangeType"];
        }

        if (array_key_exists("Endpoint",$param) and $param["Endpoint"] !== null) {
            $this->Endpoint = $param["Endpoint"];
        }
    }
}
