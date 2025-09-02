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
 * DeleteOrganizationAuthorizations请求参数结构体
 *
 * @method Agent getAgent() 获取关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
</ul>

 * @method void setAgent(Agent $Agent) 设置关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
</ul>

 * @method array getAuthorizationIds() 获取认证流Ids数组 认证流 Id 是指在企业认证过程中，当前操作人的认证流程的唯一标识。每个企业在认证过程中只能有一条认证流认证成功。这意味着在同一认证过程内，一个企业只能有一个认证流程处于成功状态，以确保认证的唯一性和有效性。 
 * @method void setAuthorizationIds(array $AuthorizationIds) 设置认证流Ids数组 认证流 Id 是指在企业认证过程中，当前操作人的认证流程的唯一标识。每个企业在认证过程中只能有一条认证流认证成功。这意味着在同一认证过程内，一个企业只能有一个认证流程处于成功状态，以确保认证的唯一性和有效性。 
 * @method string getAdminName() 获取认证人姓名，组织机构超管姓名。 在注册流程中，必须是超管本人进行操作。 
 * @method void setAdminName(string $AdminName) 设置认证人姓名，组织机构超管姓名。 在注册流程中，必须是超管本人进行操作。 
 * @method string getAdminMobile() 获取认证人手机号，组织机构超管手机号。 在注册流程中，必须是超管本人进行操作。 
 * @method void setAdminMobile(string $AdminMobile) 设置认证人手机号，组织机构超管手机号。 在注册流程中，必须是超管本人进行操作。 
 */
class DeleteOrganizationAuthorizationsRequest extends AbstractModel
{
    /**
     * @var Agent 关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
</ul>

     */
    public $Agent;

    /**
     * @var array 认证流Ids数组 认证流 Id 是指在企业认证过程中，当前操作人的认证流程的唯一标识。每个企业在认证过程中只能有一条认证流认证成功。这意味着在同一认证过程内，一个企业只能有一个认证流程处于成功状态，以确保认证的唯一性和有效性。 
     */
    public $AuthorizationIds;

    /**
     * @var string 认证人姓名，组织机构超管姓名。 在注册流程中，必须是超管本人进行操作。 
     */
    public $AdminName;

    /**
     * @var string 认证人手机号，组织机构超管手机号。 在注册流程中，必须是超管本人进行操作。 
     */
    public $AdminMobile;

    /**
     * @param Agent $Agent 关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
</ul>

     * @param array $AuthorizationIds 认证流Ids数组 认证流 Id 是指在企业认证过程中，当前操作人的认证流程的唯一标识。每个企业在认证过程中只能有一条认证流认证成功。这意味着在同一认证过程内，一个企业只能有一个认证流程处于成功状态，以确保认证的唯一性和有效性。 
     * @param string $AdminName 认证人姓名，组织机构超管姓名。 在注册流程中，必须是超管本人进行操作。 
     * @param string $AdminMobile 认证人手机号，组织机构超管手机号。 在注册流程中，必须是超管本人进行操作。 
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

        if (array_key_exists("AuthorizationIds",$param) and $param["AuthorizationIds"] !== null) {
            $this->AuthorizationIds = $param["AuthorizationIds"];
        }

        if (array_key_exists("AdminName",$param) and $param["AdminName"] !== null) {
            $this->AdminName = $param["AdminName"];
        }

        if (array_key_exists("AdminMobile",$param) and $param["AdminMobile"] !== null) {
            $this->AdminMobile = $param["AdminMobile"];
        }
    }
}
