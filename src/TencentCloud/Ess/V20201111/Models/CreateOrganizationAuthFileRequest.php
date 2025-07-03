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
 * CreateOrganizationAuthFile请求参数结构体
 *
 * @method OrganizationCommonInfo getOrganizationCommonInfo() 获取企业授权书信息参数， 需要自行保证这些参数跟营业执照中的信息一致。
 * @method void setOrganizationCommonInfo(OrganizationCommonInfo $OrganizationCommonInfo) 设置企业授权书信息参数， 需要自行保证这些参数跟营业执照中的信息一致。
 * @method Agent getAgent() 获取代理企业和员工的信息。<br/>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
 * @method void setAgent(Agent $Agent) 设置代理企业和员工的信息。<br/>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
 * @method UserInfo getOperator() 获取执行本接口操作的员工信息。<br/>注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 * @method void setOperator(UserInfo $Operator) 设置执行本接口操作的员工信息。<br/>注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 * @method integer getType() 获取授权书类型：
- 0: 企业认证超管授权书
- 1: 超管变更授权书
- 2: 企业注销授权书
 * @method void setType(integer $Type) 设置授权书类型：
- 0: 企业认证超管授权书
- 1: 超管变更授权书
- 2: 企业注销授权书
 */
class CreateOrganizationAuthFileRequest extends AbstractModel
{
    /**
     * @var OrganizationCommonInfo 企业授权书信息参数， 需要自行保证这些参数跟营业执照中的信息一致。
     */
    public $OrganizationCommonInfo;

    /**
     * @var Agent 代理企业和员工的信息。<br/>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
     */
    public $Agent;

    /**
     * @var UserInfo 执行本接口操作的员工信息。<br/>注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     */
    public $Operator;

    /**
     * @var integer 授权书类型：
- 0: 企业认证超管授权书
- 1: 超管变更授权书
- 2: 企业注销授权书
     */
    public $Type;

    /**
     * @param OrganizationCommonInfo $OrganizationCommonInfo 企业授权书信息参数， 需要自行保证这些参数跟营业执照中的信息一致。
     * @param Agent $Agent 代理企业和员工的信息。<br/>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
     * @param UserInfo $Operator 执行本接口操作的员工信息。<br/>注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     * @param integer $Type 授权书类型：
- 0: 企业认证超管授权书
- 1: 超管变更授权书
- 2: 企业注销授权书
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
        if (array_key_exists("OrganizationCommonInfo",$param) and $param["OrganizationCommonInfo"] !== null) {
            $this->OrganizationCommonInfo = new OrganizationCommonInfo();
            $this->OrganizationCommonInfo->deserialize($param["OrganizationCommonInfo"]);
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
