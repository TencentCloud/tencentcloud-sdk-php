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
 * CreatePartnerAutoSignAuthUrl请求参数结构体
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
 * @method string getAuthorizedOrganizationId() 获取被授企业id，和AuthorizedOrganizationName二选一，不能同时为空
注：`被授权企业必须和当前企业在同一应用号下`
 * @method void setAuthorizedOrganizationId(string $AuthorizedOrganizationId) 设置被授企业id，和AuthorizedOrganizationName二选一，不能同时为空
注：`被授权企业必须和当前企业在同一应用号下`
 * @method string getAuthorizedOrganizationName() 获取被授权企业名，和AuthorizedOrganizationId二选一，不能同时为空
注：`被授权企业必须和当前企业在同一应用号下`
 * @method void setAuthorizedOrganizationName(string $AuthorizedOrganizationName) 设置被授权企业名，和AuthorizedOrganizationId二选一，不能同时为空
注：`被授权企业必须和当前企业在同一应用号下`
 * @method boolean getPlatformAppAuthorization() 获取是否给平台应用授权:
- true: 是（无需设置AuthorizedOrganizationId和AuthorizedOrganizationName）
- false: 否（默认）
 注：该参数需要开通“基于子客授权第三方应用可文件发起子客自动签署”，请联系运营经理开通

 * @method void setPlatformAppAuthorization(boolean $PlatformAppAuthorization) 设置是否给平台应用授权:
- true: 是（无需设置AuthorizedOrganizationId和AuthorizedOrganizationName）
- false: 否（默认）
 注：该参数需要开通“基于子客授权第三方应用可文件发起子客自动签署”，请联系运营经理开通
 */
class CreatePartnerAutoSignAuthUrlRequest extends AbstractModel
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
     * @var string 被授企业id，和AuthorizedOrganizationName二选一，不能同时为空
注：`被授权企业必须和当前企业在同一应用号下`
     */
    public $AuthorizedOrganizationId;

    /**
     * @var string 被授权企业名，和AuthorizedOrganizationId二选一，不能同时为空
注：`被授权企业必须和当前企业在同一应用号下`
     */
    public $AuthorizedOrganizationName;

    /**
     * @var boolean 是否给平台应用授权:
- true: 是（无需设置AuthorizedOrganizationId和AuthorizedOrganizationName）
- false: 否（默认）
 注：该参数需要开通“基于子客授权第三方应用可文件发起子客自动签署”，请联系运营经理开通

     */
    public $PlatformAppAuthorization;

    /**
     * @param Agent $Agent 关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li>
<li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li>
</ul>
第三方平台子客企业和员工必须已经经过实名认证
     * @param string $AuthorizedOrganizationId 被授企业id，和AuthorizedOrganizationName二选一，不能同时为空
注：`被授权企业必须和当前企业在同一应用号下`
     * @param string $AuthorizedOrganizationName 被授权企业名，和AuthorizedOrganizationId二选一，不能同时为空
注：`被授权企业必须和当前企业在同一应用号下`
     * @param boolean $PlatformAppAuthorization 是否给平台应用授权:
- true: 是（无需设置AuthorizedOrganizationId和AuthorizedOrganizationName）
- false: 否（默认）
 注：该参数需要开通“基于子客授权第三方应用可文件发起子客自动签署”，请联系运营经理开通
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

        if (array_key_exists("AuthorizedOrganizationId",$param) and $param["AuthorizedOrganizationId"] !== null) {
            $this->AuthorizedOrganizationId = $param["AuthorizedOrganizationId"];
        }

        if (array_key_exists("AuthorizedOrganizationName",$param) and $param["AuthorizedOrganizationName"] !== null) {
            $this->AuthorizedOrganizationName = $param["AuthorizedOrganizationName"];
        }

        if (array_key_exists("PlatformAppAuthorization",$param) and $param["PlatformAppAuthorization"] !== null) {
            $this->PlatformAppAuthorization = $param["PlatformAppAuthorization"];
        }
    }
}
