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
 * ChannelCreateFlowApprovers请求参数结构体
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
 * @method array getApprovers() 获取补充企业签署人信息。

- 如果发起方指定的补充签署人是企业签署人，则需要提供企业名称或者企业OpenId；

- 如果不指定，则使用姓名和手机号进行补充。
 * @method void setApprovers(array $Approvers) 设置补充企业签署人信息。

- 如果发起方指定的补充签署人是企业签署人，则需要提供企业名称或者企业OpenId；

- 如果不指定，则使用姓名和手机号进行补充。
 * @method string getFlowId() 获取合同流程ID，为32位字符串。 
- 建议开发者妥善保存此流程ID，以便于顺利进行后续操作。
- 可登录腾讯电子签控制台，在 "合同"->"合同中心" 中查看某个合同的FlowId(在页面中展示为合同ID)。
- <font color="red">不建议继续使用</font>，请使用<a href="https://qian.tencent.com/developers/partnerApis/dataTypes/#fillapproverinfo/" target="_blank">补充签署人结构体</a>中的FlowId指定合同
 * @method void setFlowId(string $FlowId) 设置合同流程ID，为32位字符串。 
- 建议开发者妥善保存此流程ID，以便于顺利进行后续操作。
- 可登录腾讯电子签控制台，在 "合同"->"合同中心" 中查看某个合同的FlowId(在页面中展示为合同ID)。
- <font color="red">不建议继续使用</font>，请使用<a href="https://qian.tencent.com/developers/partnerApis/dataTypes/#fillapproverinfo/" target="_blank">补充签署人结构体</a>中的FlowId指定合同
 * @method integer getFillApproverType() 获取签署人信息补充方式

<ul><li>**1**: 表示往未指定签署人的节点，添加一个明确的签署人，支持企业或个人签署方。</li></ul>
 * @method void setFillApproverType(integer $FillApproverType) 设置签署人信息补充方式

<ul><li>**1**: 表示往未指定签署人的节点，添加一个明确的签署人，支持企业或个人签署方。</li></ul>
 * @method UserInfo getOperator() 获取操作人信息
 * @method void setOperator(UserInfo $Operator) 设置操作人信息
 * @method string getFlowGroupId() 获取合同流程组的组ID, 在合同流程组场景下，生成合同流程组的签署链接时需要赋值
 * @method void setFlowGroupId(string $FlowGroupId) 设置合同流程组的组ID, 在合同流程组场景下，生成合同流程组的签署链接时需要赋值
 */
class ChannelCreateFlowApproversRequest extends AbstractModel
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
     * @var array 补充企业签署人信息。

- 如果发起方指定的补充签署人是企业签署人，则需要提供企业名称或者企业OpenId；

- 如果不指定，则使用姓名和手机号进行补充。
     */
    public $Approvers;

    /**
     * @var string 合同流程ID，为32位字符串。 
- 建议开发者妥善保存此流程ID，以便于顺利进行后续操作。
- 可登录腾讯电子签控制台，在 "合同"->"合同中心" 中查看某个合同的FlowId(在页面中展示为合同ID)。
- <font color="red">不建议继续使用</font>，请使用<a href="https://qian.tencent.com/developers/partnerApis/dataTypes/#fillapproverinfo/" target="_blank">补充签署人结构体</a>中的FlowId指定合同
     */
    public $FlowId;

    /**
     * @var integer 签署人信息补充方式

<ul><li>**1**: 表示往未指定签署人的节点，添加一个明确的签署人，支持企业或个人签署方。</li></ul>
     */
    public $FillApproverType;

    /**
     * @var UserInfo 操作人信息
     */
    public $Operator;

    /**
     * @var string 合同流程组的组ID, 在合同流程组场景下，生成合同流程组的签署链接时需要赋值
     */
    public $FlowGroupId;

    /**
     * @param Agent $Agent 关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li>
<li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li>
</ul>
第三方平台子客企业和员工必须已经经过实名认证
     * @param array $Approvers 补充企业签署人信息。

- 如果发起方指定的补充签署人是企业签署人，则需要提供企业名称或者企业OpenId；

- 如果不指定，则使用姓名和手机号进行补充。
     * @param string $FlowId 合同流程ID，为32位字符串。 
- 建议开发者妥善保存此流程ID，以便于顺利进行后续操作。
- 可登录腾讯电子签控制台，在 "合同"->"合同中心" 中查看某个合同的FlowId(在页面中展示为合同ID)。
- <font color="red">不建议继续使用</font>，请使用<a href="https://qian.tencent.com/developers/partnerApis/dataTypes/#fillapproverinfo/" target="_blank">补充签署人结构体</a>中的FlowId指定合同
     * @param integer $FillApproverType 签署人信息补充方式

<ul><li>**1**: 表示往未指定签署人的节点，添加一个明确的签署人，支持企业或个人签署方。</li></ul>
     * @param UserInfo $Operator 操作人信息
     * @param string $FlowGroupId 合同流程组的组ID, 在合同流程组场景下，生成合同流程组的签署链接时需要赋值
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

        if (array_key_exists("Approvers",$param) and $param["Approvers"] !== null) {
            $this->Approvers = [];
            foreach ($param["Approvers"] as $key => $value){
                $obj = new FillApproverInfo();
                $obj->deserialize($value);
                array_push($this->Approvers, $obj);
            }
        }

        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("FillApproverType",$param) and $param["FillApproverType"] !== null) {
            $this->FillApproverType = $param["FillApproverType"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("FlowGroupId",$param) and $param["FlowGroupId"] !== null) {
            $this->FlowGroupId = $param["FlowGroupId"];
        }
    }
}
