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
 * CreateOrganizationBatchSignUrl请求参数结构体
 *
 * @method UserInfo getOperator() 获取执行本接口操作的员工信息。使用此接口时，必须填写userId。
支持填入集团子公司经办人 userId 代发合同。

注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 * @method void setOperator(UserInfo $Operator) 设置执行本接口操作的员工信息。使用此接口时，必须填写userId。
支持填入集团子公司经办人 userId 代发合同。

注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 * @method array getFlowIds() 获取请指定需执行批量签署的流程ID，数量范围为1-100。
您可登录腾讯电子签控制台，浏览 "合同"->"合同中心" 以查阅某一合同的FlowId（在页面中显示为合同ID）。
用户将利用链接对这些合同实施批量操作。
 * @method void setFlowIds(array $FlowIds) 设置请指定需执行批量签署的流程ID，数量范围为1-100。
您可登录腾讯电子签控制台，浏览 "合同"->"合同中心" 以查阅某一合同的FlowId（在页面中显示为合同ID）。
用户将利用链接对这些合同实施批量操作。
 * @method Agent getAgent() 获取代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
 * @method void setAgent(Agent $Agent) 设置代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
 * @method string getUserId() 获取员工在腾讯电子签平台的独特身份标识，为32位字符串。
您可登录腾讯电子签控制台，在 "更多能力"->"组织管理" 中查阅某位员工的UserId（在页面中显示为用户ID）。
UserId必须是传入合同（FlowId）中的签署人。

<ul>
<li>1. 若UserId为空，Name和Mobile 必须提供。</li>
<li>2. 若UserId 与 Name，Mobile均存在，将优先采用UserId对应的员工。</li>
</ul>
 * @method void setUserId(string $UserId) 设置员工在腾讯电子签平台的独特身份标识，为32位字符串。
您可登录腾讯电子签控制台，在 "更多能力"->"组织管理" 中查阅某位员工的UserId（在页面中显示为用户ID）。
UserId必须是传入合同（FlowId）中的签署人。

<ul>
<li>1. 若UserId为空，Name和Mobile 必须提供。</li>
<li>2. 若UserId 与 Name，Mobile均存在，将优先采用UserId对应的员工。</li>
</ul>
 * @method string getName() 获取员工姓名，必须与手机号码一起使用。
如果UserId为空，则此字段不能为空。同时，姓名和手机号码必须与传入合同（FlowId）中的签署人信息一致。
 * @method void setName(string $Name) 设置员工姓名，必须与手机号码一起使用。
如果UserId为空，则此字段不能为空。同时，姓名和手机号码必须与传入合同（FlowId）中的签署人信息一致。
 * @method string getMobile() 获取员工手机号，必须与姓名一起使用。
 如果UserId为空，则此字段不能为空。同时，姓名和手机号码必须与传入合同（FlowId）中的签署人信息一致。
 * @method void setMobile(string $Mobile) 设置员工手机号，必须与姓名一起使用。
 如果UserId为空，则此字段不能为空。同时，姓名和手机号码必须与传入合同（FlowId）中的签署人信息一致。
 * @method array getRecipientIds() 获取为签署方经办人在签署合同中的参与方ID，必须与参数FlowIds数组一一对应。
您可以通过查询合同接口（DescribeFlowInfo）查询此参数。
若传了此参数，则可以不传 UserId, Name, Mobile等参数
 * @method void setRecipientIds(array $RecipientIds) 设置为签署方经办人在签署合同中的参与方ID，必须与参数FlowIds数组一一对应。
您可以通过查询合同接口（DescribeFlowInfo）查询此参数。
若传了此参数，则可以不传 UserId, Name, Mobile等参数
 * @method string getFlowGroupId() 获取合同组Id，传入此参数则可以不传FlowIds
 * @method void setFlowGroupId(string $FlowGroupId) 设置合同组Id，传入此参数则可以不传FlowIds
 */
class CreateOrganizationBatchSignUrlRequest extends AbstractModel
{
    /**
     * @var UserInfo 执行本接口操作的员工信息。使用此接口时，必须填写userId。
支持填入集团子公司经办人 userId 代发合同。

注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     */
    public $Operator;

    /**
     * @var array 请指定需执行批量签署的流程ID，数量范围为1-100。
您可登录腾讯电子签控制台，浏览 "合同"->"合同中心" 以查阅某一合同的FlowId（在页面中显示为合同ID）。
用户将利用链接对这些合同实施批量操作。
     */
    public $FlowIds;

    /**
     * @var Agent 代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
     */
    public $Agent;

    /**
     * @var string 员工在腾讯电子签平台的独特身份标识，为32位字符串。
您可登录腾讯电子签控制台，在 "更多能力"->"组织管理" 中查阅某位员工的UserId（在页面中显示为用户ID）。
UserId必须是传入合同（FlowId）中的签署人。

<ul>
<li>1. 若UserId为空，Name和Mobile 必须提供。</li>
<li>2. 若UserId 与 Name，Mobile均存在，将优先采用UserId对应的员工。</li>
</ul>
     */
    public $UserId;

    /**
     * @var string 员工姓名，必须与手机号码一起使用。
如果UserId为空，则此字段不能为空。同时，姓名和手机号码必须与传入合同（FlowId）中的签署人信息一致。
     */
    public $Name;

    /**
     * @var string 员工手机号，必须与姓名一起使用。
 如果UserId为空，则此字段不能为空。同时，姓名和手机号码必须与传入合同（FlowId）中的签署人信息一致。
     */
    public $Mobile;

    /**
     * @var array 为签署方经办人在签署合同中的参与方ID，必须与参数FlowIds数组一一对应。
您可以通过查询合同接口（DescribeFlowInfo）查询此参数。
若传了此参数，则可以不传 UserId, Name, Mobile等参数
     */
    public $RecipientIds;

    /**
     * @var string 合同组Id，传入此参数则可以不传FlowIds
     */
    public $FlowGroupId;

    /**
     * @param UserInfo $Operator 执行本接口操作的员工信息。使用此接口时，必须填写userId。
支持填入集团子公司经办人 userId 代发合同。

注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     * @param array $FlowIds 请指定需执行批量签署的流程ID，数量范围为1-100。
您可登录腾讯电子签控制台，浏览 "合同"->"合同中心" 以查阅某一合同的FlowId（在页面中显示为合同ID）。
用户将利用链接对这些合同实施批量操作。
     * @param Agent $Agent 代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
     * @param string $UserId 员工在腾讯电子签平台的独特身份标识，为32位字符串。
您可登录腾讯电子签控制台，在 "更多能力"->"组织管理" 中查阅某位员工的UserId（在页面中显示为用户ID）。
UserId必须是传入合同（FlowId）中的签署人。

<ul>
<li>1. 若UserId为空，Name和Mobile 必须提供。</li>
<li>2. 若UserId 与 Name，Mobile均存在，将优先采用UserId对应的员工。</li>
</ul>
     * @param string $Name 员工姓名，必须与手机号码一起使用。
如果UserId为空，则此字段不能为空。同时，姓名和手机号码必须与传入合同（FlowId）中的签署人信息一致。
     * @param string $Mobile 员工手机号，必须与姓名一起使用。
 如果UserId为空，则此字段不能为空。同时，姓名和手机号码必须与传入合同（FlowId）中的签署人信息一致。
     * @param array $RecipientIds 为签署方经办人在签署合同中的参与方ID，必须与参数FlowIds数组一一对应。
您可以通过查询合同接口（DescribeFlowInfo）查询此参数。
若传了此参数，则可以不传 UserId, Name, Mobile等参数
     * @param string $FlowGroupId 合同组Id，传入此参数则可以不传FlowIds
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
        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("FlowIds",$param) and $param["FlowIds"] !== null) {
            $this->FlowIds = $param["FlowIds"];
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Mobile",$param) and $param["Mobile"] !== null) {
            $this->Mobile = $param["Mobile"];
        }

        if (array_key_exists("RecipientIds",$param) and $param["RecipientIds"] !== null) {
            $this->RecipientIds = $param["RecipientIds"];
        }

        if (array_key_exists("FlowGroupId",$param) and $param["FlowGroupId"] !== null) {
            $this->FlowGroupId = $param["FlowGroupId"];
        }
    }
}
