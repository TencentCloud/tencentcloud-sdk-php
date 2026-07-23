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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreatePartnerAutoSignAuthUrl请求参数结构体
 *
 * @method Agent getAgent() 获取<p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
 * @method void setAgent(Agent $Agent) 设置<p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
 * @method UserInfo getOperator() 获取<p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
 * @method void setOperator(UserInfo $Operator) 设置<p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
 * @method string getAuthorizedOrganizationId() 获取<p>被授企业id/授权方企业id（即OrganizationId），和AuthorizedOrganizationName二选一传入</p>
 * @method void setAuthorizedOrganizationId(string $AuthorizedOrganizationId) 设置<p>被授企业id/授权方企业id（即OrganizationId），和AuthorizedOrganizationName二选一传入</p>
 * @method string getAuthorizedOrganizationName() 获取<p>被授企业名称/授权方企业的名字，和AuthorizedOrganizationId二选一传入即可。请确认该名称与企业营业执照中注册的名称一致。<br>注: <code>如果名称中包含英文括号()，请使用中文括号（）代替。</code></p>
 * @method void setAuthorizedOrganizationName(string $AuthorizedOrganizationName) 设置<p>被授企业名称/授权方企业的名字，和AuthorizedOrganizationId二选一传入即可。请确认该名称与企业营业执照中注册的名称一致。<br>注: <code>如果名称中包含英文括号()，请使用中文括号（）代替。</code></p>
 * @method array getSealTypes() 获取<p>在设置印章授权时，可以指定特定的印章类型，以确保在授权过程中只使用相应类型的印章。</p><p>枚举值：</p><ul><li>OFFICIAL： 企业公章，用于代表企业对外的正式文件和重要事务的认证</li><li>CONTRACT： 合同专用章，专门用于签署各类合同。</li><li>FINANCE： 财务专用章，用于企业的财务相关文件，如发票、收据等财务凭证的认证</li><li>PERSONNEL： 人事专用章，用于人事管理相关文件，如劳动合同、人事任命等。</li><li>OTHER： 其他类型印章，包含子类型</li></ul>
 * @method void setSealTypes(array $SealTypes) 设置<p>在设置印章授权时，可以指定特定的印章类型，以确保在授权过程中只使用相应类型的印章。</p><p>枚举值：</p><ul><li>OFFICIAL： 企业公章，用于代表企业对外的正式文件和重要事务的认证</li><li>CONTRACT： 合同专用章，专门用于签署各类合同。</li><li>FINANCE： 财务专用章，用于企业的财务相关文件，如发票、收据等财务凭证的认证</li><li>PERSONNEL： 人事专用章，用于人事管理相关文件，如劳动合同、人事任命等。</li><li>OTHER： 其他类型印章，包含子类型</li></ul>
 * @method boolean getAuthToMe() 获取<p>在处理授权关系时，授权的方向</p><ul><li><strong>false</strong>（默认值）：表示我方授权他方。在这种情况下，<code>AuthorizedOrganizationName</code> 代表的是【被授权方】的企业名称，即接收授权的企业。</li><li><strong>true</strong>：表示他方授权我方。在这种情况下，<code>AuthorizedOrganizationName</code> 代表的是【授权方】的企业名称，即提供授权的企业。</li></ul>
 * @method void setAuthToMe(boolean $AuthToMe) 设置<p>在处理授权关系时，授权的方向</p><ul><li><strong>false</strong>（默认值）：表示我方授权他方。在这种情况下，<code>AuthorizedOrganizationName</code> 代表的是【被授权方】的企业名称，即接收授权的企业。</li><li><strong>true</strong>：表示他方授权我方。在这种情况下，<code>AuthorizedOrganizationName</code> 代表的是【授权方】的企业名称，即提供授权的企业。</li></ul>
 */
class CreatePartnerAutoSignAuthUrlRequest extends AbstractModel
{
    /**
     * @var Agent <p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
     */
    public $Agent;

    /**
     * @var UserInfo <p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
     */
    public $Operator;

    /**
     * @var string <p>被授企业id/授权方企业id（即OrganizationId），和AuthorizedOrganizationName二选一传入</p>
     */
    public $AuthorizedOrganizationId;

    /**
     * @var string <p>被授企业名称/授权方企业的名字，和AuthorizedOrganizationId二选一传入即可。请确认该名称与企业营业执照中注册的名称一致。<br>注: <code>如果名称中包含英文括号()，请使用中文括号（）代替。</code></p>
     */
    public $AuthorizedOrganizationName;

    /**
     * @var array <p>在设置印章授权时，可以指定特定的印章类型，以确保在授权过程中只使用相应类型的印章。</p><p>枚举值：</p><ul><li>OFFICIAL： 企业公章，用于代表企业对外的正式文件和重要事务的认证</li><li>CONTRACT： 合同专用章，专门用于签署各类合同。</li><li>FINANCE： 财务专用章，用于企业的财务相关文件，如发票、收据等财务凭证的认证</li><li>PERSONNEL： 人事专用章，用于人事管理相关文件，如劳动合同、人事任命等。</li><li>OTHER： 其他类型印章，包含子类型</li></ul>
     */
    public $SealTypes;

    /**
     * @var boolean <p>在处理授权关系时，授权的方向</p><ul><li><strong>false</strong>（默认值）：表示我方授权他方。在这种情况下，<code>AuthorizedOrganizationName</code> 代表的是【被授权方】的企业名称，即接收授权的企业。</li><li><strong>true</strong>：表示他方授权我方。在这种情况下，<code>AuthorizedOrganizationName</code> 代表的是【授权方】的企业名称，即提供授权的企业。</li></ul>
     */
    public $AuthToMe;

    /**
     * @param Agent $Agent <p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
     * @param UserInfo $Operator <p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
     * @param string $AuthorizedOrganizationId <p>被授企业id/授权方企业id（即OrganizationId），和AuthorizedOrganizationName二选一传入</p>
     * @param string $AuthorizedOrganizationName <p>被授企业名称/授权方企业的名字，和AuthorizedOrganizationId二选一传入即可。请确认该名称与企业营业执照中注册的名称一致。<br>注: <code>如果名称中包含英文括号()，请使用中文括号（）代替。</code></p>
     * @param array $SealTypes <p>在设置印章授权时，可以指定特定的印章类型，以确保在授权过程中只使用相应类型的印章。</p><p>枚举值：</p><ul><li>OFFICIAL： 企业公章，用于代表企业对外的正式文件和重要事务的认证</li><li>CONTRACT： 合同专用章，专门用于签署各类合同。</li><li>FINANCE： 财务专用章，用于企业的财务相关文件，如发票、收据等财务凭证的认证</li><li>PERSONNEL： 人事专用章，用于人事管理相关文件，如劳动合同、人事任命等。</li><li>OTHER： 其他类型印章，包含子类型</li></ul>
     * @param boolean $AuthToMe <p>在处理授权关系时，授权的方向</p><ul><li><strong>false</strong>（默认值）：表示我方授权他方。在这种情况下，<code>AuthorizedOrganizationName</code> 代表的是【被授权方】的企业名称，即接收授权的企业。</li><li><strong>true</strong>：表示他方授权我方。在这种情况下，<code>AuthorizedOrganizationName</code> 代表的是【授权方】的企业名称，即提供授权的企业。</li></ul>
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

        if (array_key_exists("SealTypes",$param) and $param["SealTypes"] !== null) {
            $this->SealTypes = $param["SealTypes"];
        }

        if (array_key_exists("AuthToMe",$param) and $param["AuthToMe"] !== null) {
            $this->AuthToMe = $param["AuthToMe"];
        }
    }
}
