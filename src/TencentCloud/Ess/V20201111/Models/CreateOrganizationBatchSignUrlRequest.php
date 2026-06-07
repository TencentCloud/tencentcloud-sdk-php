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
 * CreateOrganizationBatchSignUrl请求参数结构体
 *
 * @method UserInfo getOperator() 获取<p>执行本接口操作的员工信息。使用此接口时，必须填写userId。<br>支持填入集团子公司经办人 userId 代发合同。</p><p>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
 * @method void setOperator(UserInfo $Operator) 设置<p>执行本接口操作的员工信息。使用此接口时，必须填写userId。<br>支持填入集团子公司经办人 userId 代发合同。</p><p>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
 * @method array getFlowIds() 获取<p>请指定需执行批量签署的流程ID，数量范围为1-100。您可登录腾讯电子签控制台，浏览 &quot;合同&quot;-&gt;&quot;合同中心&quot; 以查阅某一合同的FlowId（在页面中显示为合同ID）。用户将利用链接对这些合同实施批量操作。  注：生成动态签署方领取时此参数必传。</p>
 * @method void setFlowIds(array $FlowIds) 设置<p>请指定需执行批量签署的流程ID，数量范围为1-100。您可登录腾讯电子签控制台，浏览 &quot;合同&quot;-&gt;&quot;合同中心&quot; 以查阅某一合同的FlowId（在页面中显示为合同ID）。用户将利用链接对这些合同实施批量操作。  注：生成动态签署方领取时此参数必传。</p>
 * @method Agent getAgent() 获取<p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
 * @method void setAgent(Agent $Agent) 设置<p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
 * @method string getUserId() 获取<p>员工在腾讯电子签平台的独特身份标识，为32位字符串。<br>您可登录腾讯电子签控制台，在 &quot;更多能力&quot;-&gt;&quot;组织管理&quot; 中查阅某位员工的UserId（在页面中显示为用户ID）。<br>UserId必须是传入合同（FlowId）中的签署人。</p><ul><li>1. 若UserId为空，Name和Mobile 必须提供。</li><li>2. 若UserId 与 Name，Mobile均存在，将优先采用UserId对应的员工。</li></ul>
 * @method void setUserId(string $UserId) 设置<p>员工在腾讯电子签平台的独特身份标识，为32位字符串。<br>您可登录腾讯电子签控制台，在 &quot;更多能力&quot;-&gt;&quot;组织管理&quot; 中查阅某位员工的UserId（在页面中显示为用户ID）。<br>UserId必须是传入合同（FlowId）中的签署人。</p><ul><li>1. 若UserId为空，Name和Mobile 必须提供。</li><li>2. 若UserId 与 Name，Mobile均存在，将优先采用UserId对应的员工。</li></ul>
 * @method string getName() 获取<p>员工姓名，必须与手机号码一起使用。<br>如果UserId为空，则此字段不能为空。同时，姓名和手机号码必须与传入合同（FlowId）中的签署人信息一致。</p>
 * @method void setName(string $Name) 设置<p>员工姓名，必须与手机号码一起使用。<br>如果UserId为空，则此字段不能为空。同时，姓名和手机号码必须与传入合同（FlowId）中的签署人信息一致。</p>
 * @method string getMobile() 获取<p>员工手机号，必须与姓名一起使用。<br> 如果UserId为空，则此字段不能为空。同时，姓名和手机号码必须与传入合同（FlowId）中的签署人信息一致。</p>
 * @method void setMobile(string $Mobile) 设置<p>员工手机号，必须与姓名一起使用。<br> 如果UserId为空，则此字段不能为空。同时，姓名和手机号码必须与传入合同（FlowId）中的签署人信息一致。</p>
 * @method array getRecipientIds() 获取<p>为签署方经办人在签署合同中的参与方ID，必须与参数FlowIds数组一一对应。您可以通过查询合同接口（DescribeFlowInfo）查询此参数。若传了此参数，则可以不传 UserId, Name, Mobile等参数  注：生成动态签署方领取时此参数必传。</p>
 * @method void setRecipientIds(array $RecipientIds) 设置<p>为签署方经办人在签署合同中的参与方ID，必须与参数FlowIds数组一一对应。您可以通过查询合同接口（DescribeFlowInfo）查询此参数。若传了此参数，则可以不传 UserId, Name, Mobile等参数  注：生成动态签署方领取时此参数必传。</p>
 * @method string getFlowGroupId() 获取<p>合同组Id，传入此参数则可以不传FlowIds</p>
 * @method void setFlowGroupId(string $FlowGroupId) 设置<p>合同组Id，传入此参数则可以不传FlowIds</p>
 * @method boolean getCanBatchReject() 获取<p>是否允许此链接中签署方批量拒签。 <ul><li>false (默认): 不允许批量拒签</li> <li>true : 允许批量拒签。</li></ul></p>
 * @method void setCanBatchReject(boolean $CanBatchReject) 设置<p>是否允许此链接中签署方批量拒签。 <ul><li>false (默认): 不允许批量拒签</li> <li>true : 允许批量拒签。</li></ul></p>
 * @method DynamicSignOption getDynamicSignOption() 获取<p>动态签署方领取链接配置。</p>
 * @method void setDynamicSignOption(DynamicSignOption $DynamicSignOption) 设置<p>动态签署方领取链接配置。</p>
 */
class CreateOrganizationBatchSignUrlRequest extends AbstractModel
{
    /**
     * @var UserInfo <p>执行本接口操作的员工信息。使用此接口时，必须填写userId。<br>支持填入集团子公司经办人 userId 代发合同。</p><p>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
     */
    public $Operator;

    /**
     * @var array <p>请指定需执行批量签署的流程ID，数量范围为1-100。您可登录腾讯电子签控制台，浏览 &quot;合同&quot;-&gt;&quot;合同中心&quot; 以查阅某一合同的FlowId（在页面中显示为合同ID）。用户将利用链接对这些合同实施批量操作。  注：生成动态签署方领取时此参数必传。</p>
     */
    public $FlowIds;

    /**
     * @var Agent <p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
     */
    public $Agent;

    /**
     * @var string <p>员工在腾讯电子签平台的独特身份标识，为32位字符串。<br>您可登录腾讯电子签控制台，在 &quot;更多能力&quot;-&gt;&quot;组织管理&quot; 中查阅某位员工的UserId（在页面中显示为用户ID）。<br>UserId必须是传入合同（FlowId）中的签署人。</p><ul><li>1. 若UserId为空，Name和Mobile 必须提供。</li><li>2. 若UserId 与 Name，Mobile均存在，将优先采用UserId对应的员工。</li></ul>
     */
    public $UserId;

    /**
     * @var string <p>员工姓名，必须与手机号码一起使用。<br>如果UserId为空，则此字段不能为空。同时，姓名和手机号码必须与传入合同（FlowId）中的签署人信息一致。</p>
     */
    public $Name;

    /**
     * @var string <p>员工手机号，必须与姓名一起使用。<br> 如果UserId为空，则此字段不能为空。同时，姓名和手机号码必须与传入合同（FlowId）中的签署人信息一致。</p>
     */
    public $Mobile;

    /**
     * @var array <p>为签署方经办人在签署合同中的参与方ID，必须与参数FlowIds数组一一对应。您可以通过查询合同接口（DescribeFlowInfo）查询此参数。若传了此参数，则可以不传 UserId, Name, Mobile等参数  注：生成动态签署方领取时此参数必传。</p>
     */
    public $RecipientIds;

    /**
     * @var string <p>合同组Id，传入此参数则可以不传FlowIds</p>
     */
    public $FlowGroupId;

    /**
     * @var boolean <p>是否允许此链接中签署方批量拒签。 <ul><li>false (默认): 不允许批量拒签</li> <li>true : 允许批量拒签。</li></ul></p>
     */
    public $CanBatchReject;

    /**
     * @var DynamicSignOption <p>动态签署方领取链接配置。</p>
     */
    public $DynamicSignOption;

    /**
     * @param UserInfo $Operator <p>执行本接口操作的员工信息。使用此接口时，必须填写userId。<br>支持填入集团子公司经办人 userId 代发合同。</p><p>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
     * @param array $FlowIds <p>请指定需执行批量签署的流程ID，数量范围为1-100。您可登录腾讯电子签控制台，浏览 &quot;合同&quot;-&gt;&quot;合同中心&quot; 以查阅某一合同的FlowId（在页面中显示为合同ID）。用户将利用链接对这些合同实施批量操作。  注：生成动态签署方领取时此参数必传。</p>
     * @param Agent $Agent <p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
     * @param string $UserId <p>员工在腾讯电子签平台的独特身份标识，为32位字符串。<br>您可登录腾讯电子签控制台，在 &quot;更多能力&quot;-&gt;&quot;组织管理&quot; 中查阅某位员工的UserId（在页面中显示为用户ID）。<br>UserId必须是传入合同（FlowId）中的签署人。</p><ul><li>1. 若UserId为空，Name和Mobile 必须提供。</li><li>2. 若UserId 与 Name，Mobile均存在，将优先采用UserId对应的员工。</li></ul>
     * @param string $Name <p>员工姓名，必须与手机号码一起使用。<br>如果UserId为空，则此字段不能为空。同时，姓名和手机号码必须与传入合同（FlowId）中的签署人信息一致。</p>
     * @param string $Mobile <p>员工手机号，必须与姓名一起使用。<br> 如果UserId为空，则此字段不能为空。同时，姓名和手机号码必须与传入合同（FlowId）中的签署人信息一致。</p>
     * @param array $RecipientIds <p>为签署方经办人在签署合同中的参与方ID，必须与参数FlowIds数组一一对应。您可以通过查询合同接口（DescribeFlowInfo）查询此参数。若传了此参数，则可以不传 UserId, Name, Mobile等参数  注：生成动态签署方领取时此参数必传。</p>
     * @param string $FlowGroupId <p>合同组Id，传入此参数则可以不传FlowIds</p>
     * @param boolean $CanBatchReject <p>是否允许此链接中签署方批量拒签。 <ul><li>false (默认): 不允许批量拒签</li> <li>true : 允许批量拒签。</li></ul></p>
     * @param DynamicSignOption $DynamicSignOption <p>动态签署方领取链接配置。</p>
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

        if (array_key_exists("CanBatchReject",$param) and $param["CanBatchReject"] !== null) {
            $this->CanBatchReject = $param["CanBatchReject"];
        }

        if (array_key_exists("DynamicSignOption",$param) and $param["DynamicSignOption"] !== null) {
            $this->DynamicSignOption = new DynamicSignOption();
            $this->DynamicSignOption->deserialize($param["DynamicSignOption"]);
        }
    }
}
