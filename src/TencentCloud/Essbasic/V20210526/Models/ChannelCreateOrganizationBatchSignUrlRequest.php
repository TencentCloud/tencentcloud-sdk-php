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
 * ChannelCreateOrganizationBatchSignUrl请求参数结构体
 *
 * @method Agent getAgent() 获取<p>关于渠道应用的相关信息，包括子客企业及应用编、号等详细内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p>
 * @method void setAgent(Agent $Agent) 设置<p>关于渠道应用的相关信息，包括子客企业及应用编、号等详细内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p>
 * @method array getFlowIds() 获取<p>请指定需执行批量签署的流程ID，数量范围为1-100。 您可登录腾讯电子签控制台，浏览 &quot;合同&quot;-&gt;&quot;合同中心&quot; 以查阅某一合同的FlowId（在页面中显示为合同ID）。 用户将利用链接对这些合同实施批量操作。</p>
 * @method void setFlowIds(array $FlowIds) 设置<p>请指定需执行批量签署的流程ID，数量范围为1-100。 您可登录腾讯电子签控制台，浏览 &quot;合同&quot;-&gt;&quot;合同中心&quot; 以查阅某一合同的FlowId（在页面中显示为合同ID）。 用户将利用链接对这些合同实施批量操作。</p>
 * @method string getOpenId() 获取<p>第三方应用平台的用户openid。 您可登录腾讯电子签控制台，在 &quot;更多能力&quot;-&gt;&quot;组织管理&quot; 中查阅某位员工的OpenId。 OpenId必须是传入合同（FlowId）中的签署人。</p><ul><li>1. 若OpenId为空，Name和Mobile 必须提供。</li><li>2. 若OpenId 与 Name，Mobile均存在，将优先采用OpenId对应的员工。    </li></ul>
 * @method void setOpenId(string $OpenId) 设置<p>第三方应用平台的用户openid。 您可登录腾讯电子签控制台，在 &quot;更多能力&quot;-&gt;&quot;组织管理&quot; 中查阅某位员工的OpenId。 OpenId必须是传入合同（FlowId）中的签署人。</p><ul><li>1. 若OpenId为空，Name和Mobile 必须提供。</li><li>2. 若OpenId 与 Name，Mobile均存在，将优先采用OpenId对应的员工。    </li></ul>
 * @method string getName() 获取<p>签署方经办人的姓名。<br>经办人的姓名将用于身份认证和电子签名，请确保填写的姓名为签署方的真实姓名，而非昵称等代名。</p><p>注：<code>请确保和合同中填入的一致</code></p>
 * @method void setName(string $Name) 设置<p>签署方经办人的姓名。<br>经办人的姓名将用于身份认证和电子签名，请确保填写的姓名为签署方的真实姓名，而非昵称等代名。</p><p>注：<code>请确保和合同中填入的一致</code></p>
 * @method string getMobile() 获取<p>员工手机号，必须与姓名一起使用。 如果OpenId为空，则此字段不能为空。同时，姓名和手机号码必须与传入合同（FlowId）中的签署人信息一致。</p>
 * @method void setMobile(string $Mobile) 设置<p>员工手机号，必须与姓名一起使用。 如果OpenId为空，则此字段不能为空。同时，姓名和手机号码必须与传入合同（FlowId）中的签署人信息一致。</p>
 * @method string getFlowGroupId() 获取<p>合同组Id，传入此参数则可以不传FlowIds</p>
 * @method void setFlowGroupId(string $FlowGroupId) 设置<p>合同组Id，传入此参数则可以不传FlowIds</p>
 * @method boolean getCanBatchReject() 获取<p>是否允许此链接中签署方批量拒签。 <ul><li>false (默认): 不允许批量拒签</li> <li>true : 允许批量拒签。</li></ul></p>
 * @method void setCanBatchReject(boolean $CanBatchReject) 设置<p>是否允许此链接中签署方批量拒签。 <ul><li>false (默认): 不允许批量拒签</li> <li>true : 允许批量拒签。</li></ul></p>
 * @method DynamicSignOption getDynamicSignOption() 获取<p>动态签署方领取链接配置。</p>
 * @method void setDynamicSignOption(DynamicSignOption $DynamicSignOption) 设置<p>动态签署方领取链接配置。</p>
 * @method array getRecipientIds() 获取<p>为签署方经办人在签署合同中的参与方ID，必须与参数FlowIds数组一一对应。 注：生成动态签署方领取时此参数必传。</p>
 * @method void setRecipientIds(array $RecipientIds) 设置<p>为签署方经办人在签署合同中的参与方ID，必须与参数FlowIds数组一一对应。 注：生成动态签署方领取时此参数必传。</p>
 */
class ChannelCreateOrganizationBatchSignUrlRequest extends AbstractModel
{
    /**
     * @var Agent <p>关于渠道应用的相关信息，包括子客企业及应用编、号等详细内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p>
     */
    public $Agent;

    /**
     * @var array <p>请指定需执行批量签署的流程ID，数量范围为1-100。 您可登录腾讯电子签控制台，浏览 &quot;合同&quot;-&gt;&quot;合同中心&quot; 以查阅某一合同的FlowId（在页面中显示为合同ID）。 用户将利用链接对这些合同实施批量操作。</p>
     */
    public $FlowIds;

    /**
     * @var string <p>第三方应用平台的用户openid。 您可登录腾讯电子签控制台，在 &quot;更多能力&quot;-&gt;&quot;组织管理&quot; 中查阅某位员工的OpenId。 OpenId必须是传入合同（FlowId）中的签署人。</p><ul><li>1. 若OpenId为空，Name和Mobile 必须提供。</li><li>2. 若OpenId 与 Name，Mobile均存在，将优先采用OpenId对应的员工。    </li></ul>
     */
    public $OpenId;

    /**
     * @var string <p>签署方经办人的姓名。<br>经办人的姓名将用于身份认证和电子签名，请确保填写的姓名为签署方的真实姓名，而非昵称等代名。</p><p>注：<code>请确保和合同中填入的一致</code></p>
     */
    public $Name;

    /**
     * @var string <p>员工手机号，必须与姓名一起使用。 如果OpenId为空，则此字段不能为空。同时，姓名和手机号码必须与传入合同（FlowId）中的签署人信息一致。</p>
     */
    public $Mobile;

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
     * @var array <p>为签署方经办人在签署合同中的参与方ID，必须与参数FlowIds数组一一对应。 注：生成动态签署方领取时此参数必传。</p>
     */
    public $RecipientIds;

    /**
     * @param Agent $Agent <p>关于渠道应用的相关信息，包括子客企业及应用编、号等详细内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p>
     * @param array $FlowIds <p>请指定需执行批量签署的流程ID，数量范围为1-100。 您可登录腾讯电子签控制台，浏览 &quot;合同&quot;-&gt;&quot;合同中心&quot; 以查阅某一合同的FlowId（在页面中显示为合同ID）。 用户将利用链接对这些合同实施批量操作。</p>
     * @param string $OpenId <p>第三方应用平台的用户openid。 您可登录腾讯电子签控制台，在 &quot;更多能力&quot;-&gt;&quot;组织管理&quot; 中查阅某位员工的OpenId。 OpenId必须是传入合同（FlowId）中的签署人。</p><ul><li>1. 若OpenId为空，Name和Mobile 必须提供。</li><li>2. 若OpenId 与 Name，Mobile均存在，将优先采用OpenId对应的员工。    </li></ul>
     * @param string $Name <p>签署方经办人的姓名。<br>经办人的姓名将用于身份认证和电子签名，请确保填写的姓名为签署方的真实姓名，而非昵称等代名。</p><p>注：<code>请确保和合同中填入的一致</code></p>
     * @param string $Mobile <p>员工手机号，必须与姓名一起使用。 如果OpenId为空，则此字段不能为空。同时，姓名和手机号码必须与传入合同（FlowId）中的签署人信息一致。</p>
     * @param string $FlowGroupId <p>合同组Id，传入此参数则可以不传FlowIds</p>
     * @param boolean $CanBatchReject <p>是否允许此链接中签署方批量拒签。 <ul><li>false (默认): 不允许批量拒签</li> <li>true : 允许批量拒签。</li></ul></p>
     * @param DynamicSignOption $DynamicSignOption <p>动态签署方领取链接配置。</p>
     * @param array $RecipientIds <p>为签署方经办人在签署合同中的参与方ID，必须与参数FlowIds数组一一对应。 注：生成动态签署方领取时此参数必传。</p>
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

        if (array_key_exists("FlowIds",$param) and $param["FlowIds"] !== null) {
            $this->FlowIds = $param["FlowIds"];
        }

        if (array_key_exists("OpenId",$param) and $param["OpenId"] !== null) {
            $this->OpenId = $param["OpenId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Mobile",$param) and $param["Mobile"] !== null) {
            $this->Mobile = $param["Mobile"];
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

        if (array_key_exists("RecipientIds",$param) and $param["RecipientIds"] !== null) {
            $this->RecipientIds = $param["RecipientIds"];
        }
    }
}
