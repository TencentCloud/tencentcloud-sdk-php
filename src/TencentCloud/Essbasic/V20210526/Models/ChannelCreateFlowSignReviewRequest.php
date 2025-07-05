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
 * ChannelCreateFlowSignReview请求参数结构体
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
 * @method string getFlowId() 获取合同流程ID，为32位字符串。
 * @method void setFlowId(string $FlowId) 设置合同流程ID，为32位字符串。
 * @method string getReviewType() 获取企业内部审核结果
<ul><li>PASS: 审核通过（流程可以继续签署或者发起）</li>
<li>REJECT: 审核拒绝（流程状态不变，可以继续调用审核接口通过审核）</li>
<li>SIGN_REJECT:拒签(流程终止，流程状态变为拒签状态)</li></ul>
 * @method void setReviewType(string $ReviewType) 设置企业内部审核结果
<ul><li>PASS: 审核通过（流程可以继续签署或者发起）</li>
<li>REJECT: 审核拒绝（流程状态不变，可以继续调用审核接口通过审核）</li>
<li>SIGN_REJECT:拒签(流程终止，流程状态变为拒签状态)</li></ul>
 * @method string getReviewMessage() 获取审核结果原因
<ul><li>字符串长度不超过200</li>
<li>当ReviewType 是拒绝（REJECT） 时此字段必填。</li>
<li>当ReviewType 是拒绝（SIGN_REJECT） 时此字段必填。</li></ul>
 * @method void setReviewMessage(string $ReviewMessage) 设置审核结果原因
<ul><li>字符串长度不超过200</li>
<li>当ReviewType 是拒绝（REJECT） 时此字段必填。</li>
<li>当ReviewType 是拒绝（SIGN_REJECT） 时此字段必填。</li></ul>
 * @method string getRecipientId() 获取审核节点的签署人标志，用于指定当前审核的签署方。
<font color= "red">注意：以下情况必须传递RecipientId</font>
<ul><li> **发起签署流程时，指定签署人需要审批（即签署人需要审批
<a href="https://qian.tencent.com/developers/partnerApis/dataTypes#flowapproverinfo" target="_blank">ApproverNeedSignReview</a>为true），则必须指定RecipientId**</li><li>**如果签署审核节点是个人， 此参数必填**。</li></ul>
 * @method void setRecipientId(string $RecipientId) 设置审核节点的签署人标志，用于指定当前审核的签署方。
<font color= "red">注意：以下情况必须传递RecipientId</font>
<ul><li> **发起签署流程时，指定签署人需要审批（即签署人需要审批
<a href="https://qian.tencent.com/developers/partnerApis/dataTypes#flowapproverinfo" target="_blank">ApproverNeedSignReview</a>为true），则必须指定RecipientId**</li><li>**如果签署审核节点是个人， 此参数必填**。</li></ul>
 * @method string getOperateType() 获取流程审核操作类型，取值如下：
<ul><li>**SignReview**：（默认）签署审核</li>
<li>**CreateReview**：发起审核</li>
<li>注意：`该字段不传或者为空，则默认为SignReview签署审核，走签署审核流程`</li></ul>


 * @method void setOperateType(string $OperateType) 设置流程审核操作类型，取值如下：
<ul><li>**SignReview**：（默认）签署审核</li>
<li>**CreateReview**：发起审核</li>
<li>注意：`该字段不传或者为空，则默认为SignReview签署审核，走签署审核流程`</li></ul>
 */
class ChannelCreateFlowSignReviewRequest extends AbstractModel
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
     * @var string 合同流程ID，为32位字符串。
     */
    public $FlowId;

    /**
     * @var string 企业内部审核结果
<ul><li>PASS: 审核通过（流程可以继续签署或者发起）</li>
<li>REJECT: 审核拒绝（流程状态不变，可以继续调用审核接口通过审核）</li>
<li>SIGN_REJECT:拒签(流程终止，流程状态变为拒签状态)</li></ul>
     */
    public $ReviewType;

    /**
     * @var string 审核结果原因
<ul><li>字符串长度不超过200</li>
<li>当ReviewType 是拒绝（REJECT） 时此字段必填。</li>
<li>当ReviewType 是拒绝（SIGN_REJECT） 时此字段必填。</li></ul>
     */
    public $ReviewMessage;

    /**
     * @var string 审核节点的签署人标志，用于指定当前审核的签署方。
<font color= "red">注意：以下情况必须传递RecipientId</font>
<ul><li> **发起签署流程时，指定签署人需要审批（即签署人需要审批
<a href="https://qian.tencent.com/developers/partnerApis/dataTypes#flowapproverinfo" target="_blank">ApproverNeedSignReview</a>为true），则必须指定RecipientId**</li><li>**如果签署审核节点是个人， 此参数必填**。</li></ul>
     */
    public $RecipientId;

    /**
     * @var string 流程审核操作类型，取值如下：
<ul><li>**SignReview**：（默认）签署审核</li>
<li>**CreateReview**：发起审核</li>
<li>注意：`该字段不传或者为空，则默认为SignReview签署审核，走签署审核流程`</li></ul>


     */
    public $OperateType;

    /**
     * @param Agent $Agent 关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li>
<li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li>
</ul>
第三方平台子客企业和员工必须已经经过实名认证
     * @param string $FlowId 合同流程ID，为32位字符串。
     * @param string $ReviewType 企业内部审核结果
<ul><li>PASS: 审核通过（流程可以继续签署或者发起）</li>
<li>REJECT: 审核拒绝（流程状态不变，可以继续调用审核接口通过审核）</li>
<li>SIGN_REJECT:拒签(流程终止，流程状态变为拒签状态)</li></ul>
     * @param string $ReviewMessage 审核结果原因
<ul><li>字符串长度不超过200</li>
<li>当ReviewType 是拒绝（REJECT） 时此字段必填。</li>
<li>当ReviewType 是拒绝（SIGN_REJECT） 时此字段必填。</li></ul>
     * @param string $RecipientId 审核节点的签署人标志，用于指定当前审核的签署方。
<font color= "red">注意：以下情况必须传递RecipientId</font>
<ul><li> **发起签署流程时，指定签署人需要审批（即签署人需要审批
<a href="https://qian.tencent.com/developers/partnerApis/dataTypes#flowapproverinfo" target="_blank">ApproverNeedSignReview</a>为true），则必须指定RecipientId**</li><li>**如果签署审核节点是个人， 此参数必填**。</li></ul>
     * @param string $OperateType 流程审核操作类型，取值如下：
<ul><li>**SignReview**：（默认）签署审核</li>
<li>**CreateReview**：发起审核</li>
<li>注意：`该字段不传或者为空，则默认为SignReview签署审核，走签署审核流程`</li></ul>
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

        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("ReviewType",$param) and $param["ReviewType"] !== null) {
            $this->ReviewType = $param["ReviewType"];
        }

        if (array_key_exists("ReviewMessage",$param) and $param["ReviewMessage"] !== null) {
            $this->ReviewMessage = $param["ReviewMessage"];
        }

        if (array_key_exists("RecipientId",$param) and $param["RecipientId"] !== null) {
            $this->RecipientId = $param["RecipientId"];
        }

        if (array_key_exists("OperateType",$param) and $param["OperateType"] !== null) {
            $this->OperateType = $param["OperateType"];
        }
    }
}
