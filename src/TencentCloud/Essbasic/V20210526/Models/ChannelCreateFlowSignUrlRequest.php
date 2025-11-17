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
 * ChannelCreateFlowSignUrl请求参数结构体
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
建议开发者妥善保存此流程ID，以便于顺利进行后续操作。
可登录腾讯电子签控制台，在 "合同"->"合同中心" 中查看某个合同的FlowId(在页面中展示为合同ID)。
 * @method void setFlowId(string $FlowId) 设置合同流程ID，为32位字符串。
建议开发者妥善保存此流程ID，以便于顺利进行后续操作。
可登录腾讯电子签控制台，在 "合同"->"合同中心" 中查看某个合同的FlowId(在页面中展示为合同ID)。
 * @method array getFlowApproverInfos() 获取流程签署人列表，其中结构体的ApproverType必传。
若为个人签署方或saas企业签署方，则Name，Mobile必传。OrganizationName 传对应企业名称。
若为子客企业签署方则需传OpenId、OrganizationOpenId、OrganizationName， 其他可不传。（如果对应OrganizationOpenId 子客已经认证激活了，则可以省去OrganizationName）

此结构体和发起接口参与方结构体复用，除了上述参数外，可传递的参数有：
1. RecipientId: 发起合同会返回，可以直接用于指定需要生成链接的签署方。
2. ApproverSignTypes: 指定签署方签署时候的认证方式，仅此链接生效。
3. SignTypeSelector: 可以指定签署方签署合同的认证校验方式的选择模式。
4. Intention: 指定H5签署视频核身的意图配置，仅视频签署需要使用。

注:
`1. 签署人只能有手写签名、时间类型、印章类型、签批类型的签署控件和内容填写控件，其他类型的签署控件暂时未支持。`
`2. 生成发起方预览链接时，该字段（FlowApproverInfos）传空或者不传`
 * @method void setFlowApproverInfos(array $FlowApproverInfos) 设置流程签署人列表，其中结构体的ApproverType必传。
若为个人签署方或saas企业签署方，则Name，Mobile必传。OrganizationName 传对应企业名称。
若为子客企业签署方则需传OpenId、OrganizationOpenId、OrganizationName， 其他可不传。（如果对应OrganizationOpenId 子客已经认证激活了，则可以省去OrganizationName）

此结构体和发起接口参与方结构体复用，除了上述参数外，可传递的参数有：
1. RecipientId: 发起合同会返回，可以直接用于指定需要生成链接的签署方。
2. ApproverSignTypes: 指定签署方签署时候的认证方式，仅此链接生效。
3. SignTypeSelector: 可以指定签署方签署合同的认证校验方式的选择模式。
4. Intention: 指定H5签署视频核身的意图配置，仅视频签署需要使用。

注:
`1. 签署人只能有手写签名、时间类型、印章类型、签批类型的签署控件和内容填写控件，其他类型的签署控件暂时未支持。`
`2. 生成发起方预览链接时，该字段（FlowApproverInfos）传空或者不传`
 * @method integer getVideoVerifyTimesLimit() 获取用于指定进入视频签署的限制次数，次数取值范围：1 - 10，不设置则默认为5次，仅视频签署时生效。
 * @method void setVideoVerifyTimesLimit(integer $VideoVerifyTimesLimit) 设置用于指定进入视频签署的限制次数，次数取值范围：1 - 10，不设置则默认为5次，仅视频签署时生效。
 * @method UserInfo getOperator() 获取用户信息，暂未开放
 * @method void setOperator(UserInfo $Operator) 设置用户信息，暂未开放
 * @method OrganizationInfo getOrganization() 获取机构信息，暂未开放
 * @method void setOrganization(OrganizationInfo $Organization) 设置机构信息，暂未开放
 * @method string getJumpUrl() 获取签署完之后的H5页面的跳转链接，最大长度1000个字符。链接类型请参考 <a href="https://qian.tencent.com/developers/company/openqianh5" target="_blank">跳转电子签H5</a>

 * @method void setJumpUrl(string $JumpUrl) 设置签署完之后的H5页面的跳转链接，最大长度1000个字符。链接类型请参考 <a href="https://qian.tencent.com/developers/company/openqianh5" target="_blank">跳转电子签H5</a>

 * @method integer getUrlType() 获取链接类型，支持指定以下类型
<ul><li>0 : 签署链接 (默认值)</li>
<li>1 : 预览链接</li></ul>
注:
`1. 当指定链接类型为1时，链接为预览链接，打开链接无法签署仅支持预览以及查看当前合同状态。`
`2. 如需生成发起方预览链接，则签署方信息传空，即FlowApproverInfos传空或者不传。`
 * @method void setUrlType(integer $UrlType) 设置链接类型，支持指定以下类型
<ul><li>0 : 签署链接 (默认值)</li>
<li>1 : 预览链接</li></ul>
注:
`1. 当指定链接类型为1时，链接为预览链接，打开链接无法签署仅支持预览以及查看当前合同状态。`
`2. 如需生成发起方预览链接，则签署方信息传空，即FlowApproverInfos传空或者不传。`
 */
class ChannelCreateFlowSignUrlRequest extends AbstractModel
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
建议开发者妥善保存此流程ID，以便于顺利进行后续操作。
可登录腾讯电子签控制台，在 "合同"->"合同中心" 中查看某个合同的FlowId(在页面中展示为合同ID)。
     */
    public $FlowId;

    /**
     * @var array 流程签署人列表，其中结构体的ApproverType必传。
若为个人签署方或saas企业签署方，则Name，Mobile必传。OrganizationName 传对应企业名称。
若为子客企业签署方则需传OpenId、OrganizationOpenId、OrganizationName， 其他可不传。（如果对应OrganizationOpenId 子客已经认证激活了，则可以省去OrganizationName）

此结构体和发起接口参与方结构体复用，除了上述参数外，可传递的参数有：
1. RecipientId: 发起合同会返回，可以直接用于指定需要生成链接的签署方。
2. ApproverSignTypes: 指定签署方签署时候的认证方式，仅此链接生效。
3. SignTypeSelector: 可以指定签署方签署合同的认证校验方式的选择模式。
4. Intention: 指定H5签署视频核身的意图配置，仅视频签署需要使用。

注:
`1. 签署人只能有手写签名、时间类型、印章类型、签批类型的签署控件和内容填写控件，其他类型的签署控件暂时未支持。`
`2. 生成发起方预览链接时，该字段（FlowApproverInfos）传空或者不传`
     */
    public $FlowApproverInfos;

    /**
     * @var integer 用于指定进入视频签署的限制次数，次数取值范围：1 - 10，不设置则默认为5次，仅视频签署时生效。
     */
    public $VideoVerifyTimesLimit;

    /**
     * @var UserInfo 用户信息，暂未开放
     * @deprecated
     */
    public $Operator;

    /**
     * @var OrganizationInfo 机构信息，暂未开放
     * @deprecated
     */
    public $Organization;

    /**
     * @var string 签署完之后的H5页面的跳转链接，最大长度1000个字符。链接类型请参考 <a href="https://qian.tencent.com/developers/company/openqianh5" target="_blank">跳转电子签H5</a>

     */
    public $JumpUrl;

    /**
     * @var integer 链接类型，支持指定以下类型
<ul><li>0 : 签署链接 (默认值)</li>
<li>1 : 预览链接</li></ul>
注:
`1. 当指定链接类型为1时，链接为预览链接，打开链接无法签署仅支持预览以及查看当前合同状态。`
`2. 如需生成发起方预览链接，则签署方信息传空，即FlowApproverInfos传空或者不传。`
     */
    public $UrlType;

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
建议开发者妥善保存此流程ID，以便于顺利进行后续操作。
可登录腾讯电子签控制台，在 "合同"->"合同中心" 中查看某个合同的FlowId(在页面中展示为合同ID)。
     * @param array $FlowApproverInfos 流程签署人列表，其中结构体的ApproverType必传。
若为个人签署方或saas企业签署方，则Name，Mobile必传。OrganizationName 传对应企业名称。
若为子客企业签署方则需传OpenId、OrganizationOpenId、OrganizationName， 其他可不传。（如果对应OrganizationOpenId 子客已经认证激活了，则可以省去OrganizationName）

此结构体和发起接口参与方结构体复用，除了上述参数外，可传递的参数有：
1. RecipientId: 发起合同会返回，可以直接用于指定需要生成链接的签署方。
2. ApproverSignTypes: 指定签署方签署时候的认证方式，仅此链接生效。
3. SignTypeSelector: 可以指定签署方签署合同的认证校验方式的选择模式。
4. Intention: 指定H5签署视频核身的意图配置，仅视频签署需要使用。

注:
`1. 签署人只能有手写签名、时间类型、印章类型、签批类型的签署控件和内容填写控件，其他类型的签署控件暂时未支持。`
`2. 生成发起方预览链接时，该字段（FlowApproverInfos）传空或者不传`
     * @param integer $VideoVerifyTimesLimit 用于指定进入视频签署的限制次数，次数取值范围：1 - 10，不设置则默认为5次，仅视频签署时生效。
     * @param UserInfo $Operator 用户信息，暂未开放
     * @param OrganizationInfo $Organization 机构信息，暂未开放
     * @param string $JumpUrl 签署完之后的H5页面的跳转链接，最大长度1000个字符。链接类型请参考 <a href="https://qian.tencent.com/developers/company/openqianh5" target="_blank">跳转电子签H5</a>

     * @param integer $UrlType 链接类型，支持指定以下类型
<ul><li>0 : 签署链接 (默认值)</li>
<li>1 : 预览链接</li></ul>
注:
`1. 当指定链接类型为1时，链接为预览链接，打开链接无法签署仅支持预览以及查看当前合同状态。`
`2. 如需生成发起方预览链接，则签署方信息传空，即FlowApproverInfos传空或者不传。`
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

        if (array_key_exists("FlowApproverInfos",$param) and $param["FlowApproverInfos"] !== null) {
            $this->FlowApproverInfos = [];
            foreach ($param["FlowApproverInfos"] as $key => $value){
                $obj = new FlowApproverInfo();
                $obj->deserialize($value);
                array_push($this->FlowApproverInfos, $obj);
            }
        }

        if (array_key_exists("VideoVerifyTimesLimit",$param) and $param["VideoVerifyTimesLimit"] !== null) {
            $this->VideoVerifyTimesLimit = $param["VideoVerifyTimesLimit"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("Organization",$param) and $param["Organization"] !== null) {
            $this->Organization = new OrganizationInfo();
            $this->Organization->deserialize($param["Organization"]);
        }

        if (array_key_exists("JumpUrl",$param) and $param["JumpUrl"] !== null) {
            $this->JumpUrl = $param["JumpUrl"];
        }

        if (array_key_exists("UrlType",$param) and $param["UrlType"] !== null) {
            $this->UrlType = $param["UrlType"];
        }
    }
}
