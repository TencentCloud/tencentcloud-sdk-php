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
 * ModifyPartnerAutoSignAuthUrl请求参数结构体
 *
 * @method Agent getAgent() 获取代理企业和员工的信息。<br/>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
 * @method void setAgent(Agent $Agent) 设置代理企业和员工的信息。<br/>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
 * @method UserInfo getOperator() 获取执行本接口操作的员工信息。<br/>注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 * @method void setOperator(UserInfo $Operator) 设置执行本接口操作的员工信息。<br/>注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 * @method string getAuthorizedOrganizationId() 获取被授企业id/授权方企业id（即OrganizationId），和AuthorizedOrganizationName二选一传入
 * @method void setAuthorizedOrganizationId(string $AuthorizedOrganizationId) 设置被授企业id/授权方企业id（即OrganizationId），和AuthorizedOrganizationName二选一传入
 * @method string getAuthorizedOrganizationName() 获取被授企业名称/授权方企业的名字，和AuthorizedOrganizationId二选一传入即可。请确认该名称与企业营业执照中注册的名称一致。
注: `如果名称中包含英文括号()，请使用中文括号（）代替。`
 * @method void setAuthorizedOrganizationName(string $AuthorizedOrganizationName) 设置被授企业名称/授权方企业的名字，和AuthorizedOrganizationId二选一传入即可。请确认该名称与企业营业执照中注册的名称一致。
注: `如果名称中包含英文括号()，请使用中文括号（）代替。`
 * @method boolean getAuthToMe() 获取在处理授权关系时，授权的方向
<ul>
<li><strong>false</strong>（默认值）：表示我方授权他方。在这种情况下，<code>AuthorizedOrganizationName</code> 代表的是【被授权方】的企业名称，即接收授权的企业。</li>
<li><strong>true</strong>：表示他方授权我方。在这种情况下，<code>AuthorizedOrganizationName</code> 代表的是【授权方】的企业名称，即提供授权的企业。</li>
</ul>
 * @method void setAuthToMe(boolean $AuthToMe) 设置在处理授权关系时，授权的方向
<ul>
<li><strong>false</strong>（默认值）：表示我方授权他方。在这种情况下，<code>AuthorizedOrganizationName</code> 代表的是【被授权方】的企业名称，即接收授权的企业。</li>
<li><strong>true</strong>：表示他方授权我方。在这种情况下，<code>AuthorizedOrganizationName</code> 代表的是【授权方】的企业名称，即提供授权的企业。</li>
</ul>
 */
class ModifyPartnerAutoSignAuthUrlRequest extends AbstractModel
{
    /**
     * @var Agent 代理企业和员工的信息。<br/>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
     */
    public $Agent;

    /**
     * @var UserInfo 执行本接口操作的员工信息。<br/>注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     */
    public $Operator;

    /**
     * @var string 被授企业id/授权方企业id（即OrganizationId），和AuthorizedOrganizationName二选一传入
     */
    public $AuthorizedOrganizationId;

    /**
     * @var string 被授企业名称/授权方企业的名字，和AuthorizedOrganizationId二选一传入即可。请确认该名称与企业营业执照中注册的名称一致。
注: `如果名称中包含英文括号()，请使用中文括号（）代替。`
     */
    public $AuthorizedOrganizationName;

    /**
     * @var boolean 在处理授权关系时，授权的方向
<ul>
<li><strong>false</strong>（默认值）：表示我方授权他方。在这种情况下，<code>AuthorizedOrganizationName</code> 代表的是【被授权方】的企业名称，即接收授权的企业。</li>
<li><strong>true</strong>：表示他方授权我方。在这种情况下，<code>AuthorizedOrganizationName</code> 代表的是【授权方】的企业名称，即提供授权的企业。</li>
</ul>
     */
    public $AuthToMe;

    /**
     * @param Agent $Agent 代理企业和员工的信息。<br/>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
     * @param UserInfo $Operator 执行本接口操作的员工信息。<br/>注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     * @param string $AuthorizedOrganizationId 被授企业id/授权方企业id（即OrganizationId），和AuthorizedOrganizationName二选一传入
     * @param string $AuthorizedOrganizationName 被授企业名称/授权方企业的名字，和AuthorizedOrganizationId二选一传入即可。请确认该名称与企业营业执照中注册的名称一致。
注: `如果名称中包含英文括号()，请使用中文括号（）代替。`
     * @param boolean $AuthToMe 在处理授权关系时，授权的方向
<ul>
<li><strong>false</strong>（默认值）：表示我方授权他方。在这种情况下，<code>AuthorizedOrganizationName</code> 代表的是【被授权方】的企业名称，即接收授权的企业。</li>
<li><strong>true</strong>：表示他方授权我方。在这种情况下，<code>AuthorizedOrganizationName</code> 代表的是【授权方】的企业名称，即提供授权的企业。</li>
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

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("AuthorizedOrganizationId",$param) and $param["AuthorizedOrganizationId"] !== null) {
            $this->AuthorizedOrganizationId = $param["AuthorizedOrganizationId"];
        }

        if (array_key_exists("AuthorizedOrganizationName",$param) and $param["AuthorizedOrganizationName"] !== null) {
            $this->AuthorizedOrganizationName = $param["AuthorizedOrganizationName"];
        }

        if (array_key_exists("AuthToMe",$param) and $param["AuthToMe"] !== null) {
            $this->AuthToMe = $param["AuthToMe"];
        }
    }
}
