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
 * @method Agent getAgent() 获取<p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p><p>此接口下面信息必填。</p><ul><li>渠道应用标识:  Agent.AppId</li><li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li><li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li></ul>第三方平台子客企业和员工必须已经经过实名认证
 * @method void setAgent(Agent $Agent) 设置<p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p><p>此接口下面信息必填。</p><ul><li>渠道应用标识:  Agent.AppId</li><li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li><li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li></ul>第三方平台子客企业和员工必须已经经过实名认证
 * @method string getFlowId() 获取<p>合同流程ID，为32位字符串。<br>建议开发者妥善保存此流程ID，以便于顺利进行后续操作。<br>可登录腾讯电子签控制台，在 &quot;合同&quot;-&gt;&quot;合同中心&quot; 中查看某个合同的FlowId(在页面中展示为合同ID)。</p>
 * @method void setFlowId(string $FlowId) 设置<p>合同流程ID，为32位字符串。<br>建议开发者妥善保存此流程ID，以便于顺利进行后续操作。<br>可登录腾讯电子签控制台，在 &quot;合同&quot;-&gt;&quot;合同中心&quot; 中查看某个合同的FlowId(在页面中展示为合同ID)。</p>
 * @method array getFlowApproverInfos() 获取<p>流程签署人列表，其中结构体的ApproverType必传。<br>若为个人签署方或saas企业签署方，则Name，Mobile必传。OrganizationName 传对应企业名称。<br>若为子客企业签署方则需传OpenId、OrganizationOpenId、OrganizationName， 其他可不传。（如果对应OrganizationOpenId 子客已经认证激活了，则可以省去OrganizationName）</p><p>此结构体和发起接口参与方结构体复用，除了上述参数外，可传递的参数有：</p><ol><li>RecipientId: 发起合同会返回，可以直接用于指定需要生成链接的签署方。</li><li>ApproverSignTypes: 指定签署方签署时候的认证方式，仅此链接生效。</li><li>SignTypeSelector: 可以指定签署方签署合同的认证校验方式的选择模式。</li><li>Intention: 指定H5签署视频核身的意图配置，仅视频签署需要使用。</li></ol><p>注:<br><code>1. 签署人只能有手写签名、时间类型、印章类型、签批类型的签署控件和内容填写控件，其他类型的签署控件暂时未支持。</code><br><code>2. 生成发起方预览链接时，该字段（FlowApproverInfos）传空或者不传</code></p>
 * @method void setFlowApproverInfos(array $FlowApproverInfos) 设置<p>流程签署人列表，其中结构体的ApproverType必传。<br>若为个人签署方或saas企业签署方，则Name，Mobile必传。OrganizationName 传对应企业名称。<br>若为子客企业签署方则需传OpenId、OrganizationOpenId、OrganizationName， 其他可不传。（如果对应OrganizationOpenId 子客已经认证激活了，则可以省去OrganizationName）</p><p>此结构体和发起接口参与方结构体复用，除了上述参数外，可传递的参数有：</p><ol><li>RecipientId: 发起合同会返回，可以直接用于指定需要生成链接的签署方。</li><li>ApproverSignTypes: 指定签署方签署时候的认证方式，仅此链接生效。</li><li>SignTypeSelector: 可以指定签署方签署合同的认证校验方式的选择模式。</li><li>Intention: 指定H5签署视频核身的意图配置，仅视频签署需要使用。</li></ol><p>注:<br><code>1. 签署人只能有手写签名、时间类型、印章类型、签批类型的签署控件和内容填写控件，其他类型的签署控件暂时未支持。</code><br><code>2. 生成发起方预览链接时，该字段（FlowApproverInfos）传空或者不传</code></p>
 * @method integer getVideoVerifyTimesLimit() 获取<p>用于指定进入视频签署的限制次数，次数取值范围：1 - 10，不设置则默认为5次，仅视频签署时生效。</p>
 * @method void setVideoVerifyTimesLimit(integer $VideoVerifyTimesLimit) 设置<p>用于指定进入视频签署的限制次数，次数取值范围：1 - 10，不设置则默认为5次，仅视频签署时生效。</p>
 * @method UserInfo getOperator() 获取<p>用户信息，暂未开放</p>
 * @method void setOperator(UserInfo $Operator) 设置<p>用户信息，暂未开放</p>
 * @method OrganizationInfo getOrganization() 获取<p>机构信息，暂未开放</p>
 * @method void setOrganization(OrganizationInfo $Organization) 设置<p>机构信息，暂未开放</p>
 * @method string getJumpUrl() 获取<p>签署完之后的H5页面的跳转链接，最大长度1000个字符。链接类型请参考 <a href="https://qian.tencent.com/developers/company/openqianh5" target="_blank">跳转电子签H5</a></p>
 * @method void setJumpUrl(string $JumpUrl) 设置<p>签署完之后的H5页面的跳转链接，最大长度1000个字符。链接类型请参考 <a href="https://qian.tencent.com/developers/company/openqianh5" target="_blank">跳转电子签H5</a></p>
 * @method integer getUrlType() 获取<p>链接类型，支持指定以下类型</p><ul><li>0 : 签署链接 (默认值)</li><li>1 : 预览链接</li></ul>注:<code>1. 当指定链接类型为1时，链接为预览链接，打开链接无法签署仅支持预览以及查看当前合同状态。</code><code>2. 如需生成发起方预览链接，则签署方信息传空，即FlowApproverInfos传空或者不传。</code>
 * @method void setUrlType(integer $UrlType) 设置<p>链接类型，支持指定以下类型</p><ul><li>0 : 签署链接 (默认值)</li><li>1 : 预览链接</li></ul>注:<code>1. 当指定链接类型为1时，链接为预览链接，打开链接无法签署仅支持预览以及查看当前合同状态。</code><code>2. 如需生成发起方预览链接，则签署方信息传空，即FlowApproverInfos传空或者不传。</code>
 * @method integer getExpiredOn() 获取<p>链接的有效时间，单位为秒。取值范围为 30分钟（1800）-90天（7776000）。如果不传，默认有效期为30分钟。</p><p>注意：</p><ol><li><code>出于安全性考虑，若有效期大于30分钟，同设备24小时内点击链接查看合同需要进行手机验证码校验。</code></li><li><code>若生成合同发起方预览链接，有效期大于30分钟，则需要进行验证码校验的手机号为发起方账号绑定的手机号。</code></li></ol>
 * @method void setExpiredOn(integer $ExpiredOn) 设置<p>链接的有效时间，单位为秒。取值范围为 30分钟（1800）-90天（7776000）。如果不传，默认有效期为30分钟。</p><p>注意：</p><ol><li><code>出于安全性考虑，若有效期大于30分钟，同设备24小时内点击链接查看合同需要进行手机验证码校验。</code></li><li><code>若生成合同发起方预览链接，有效期大于30分钟，则需要进行验证码校验的手机号为发起方账号绑定的手机号。</code></li></ol>
 */
class ChannelCreateFlowSignUrlRequest extends AbstractModel
{
    /**
     * @var Agent <p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p><p>此接口下面信息必填。</p><ul><li>渠道应用标识:  Agent.AppId</li><li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li><li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li></ul>第三方平台子客企业和员工必须已经经过实名认证
     */
    public $Agent;

    /**
     * @var string <p>合同流程ID，为32位字符串。<br>建议开发者妥善保存此流程ID，以便于顺利进行后续操作。<br>可登录腾讯电子签控制台，在 &quot;合同&quot;-&gt;&quot;合同中心&quot; 中查看某个合同的FlowId(在页面中展示为合同ID)。</p>
     */
    public $FlowId;

    /**
     * @var array <p>流程签署人列表，其中结构体的ApproverType必传。<br>若为个人签署方或saas企业签署方，则Name，Mobile必传。OrganizationName 传对应企业名称。<br>若为子客企业签署方则需传OpenId、OrganizationOpenId、OrganizationName， 其他可不传。（如果对应OrganizationOpenId 子客已经认证激活了，则可以省去OrganizationName）</p><p>此结构体和发起接口参与方结构体复用，除了上述参数外，可传递的参数有：</p><ol><li>RecipientId: 发起合同会返回，可以直接用于指定需要生成链接的签署方。</li><li>ApproverSignTypes: 指定签署方签署时候的认证方式，仅此链接生效。</li><li>SignTypeSelector: 可以指定签署方签署合同的认证校验方式的选择模式。</li><li>Intention: 指定H5签署视频核身的意图配置，仅视频签署需要使用。</li></ol><p>注:<br><code>1. 签署人只能有手写签名、时间类型、印章类型、签批类型的签署控件和内容填写控件，其他类型的签署控件暂时未支持。</code><br><code>2. 生成发起方预览链接时，该字段（FlowApproverInfos）传空或者不传</code></p>
     */
    public $FlowApproverInfos;

    /**
     * @var integer <p>用于指定进入视频签署的限制次数，次数取值范围：1 - 10，不设置则默认为5次，仅视频签署时生效。</p>
     */
    public $VideoVerifyTimesLimit;

    /**
     * @var UserInfo <p>用户信息，暂未开放</p>
     * @deprecated
     */
    public $Operator;

    /**
     * @var OrganizationInfo <p>机构信息，暂未开放</p>
     * @deprecated
     */
    public $Organization;

    /**
     * @var string <p>签署完之后的H5页面的跳转链接，最大长度1000个字符。链接类型请参考 <a href="https://qian.tencent.com/developers/company/openqianh5" target="_blank">跳转电子签H5</a></p>
     */
    public $JumpUrl;

    /**
     * @var integer <p>链接类型，支持指定以下类型</p><ul><li>0 : 签署链接 (默认值)</li><li>1 : 预览链接</li></ul>注:<code>1. 当指定链接类型为1时，链接为预览链接，打开链接无法签署仅支持预览以及查看当前合同状态。</code><code>2. 如需生成发起方预览链接，则签署方信息传空，即FlowApproverInfos传空或者不传。</code>
     */
    public $UrlType;

    /**
     * @var integer <p>链接的有效时间，单位为秒。取值范围为 30分钟（1800）-90天（7776000）。如果不传，默认有效期为30分钟。</p><p>注意：</p><ol><li><code>出于安全性考虑，若有效期大于30分钟，同设备24小时内点击链接查看合同需要进行手机验证码校验。</code></li><li><code>若生成合同发起方预览链接，有效期大于30分钟，则需要进行验证码校验的手机号为发起方账号绑定的手机号。</code></li></ol>
     */
    public $ExpiredOn;

    /**
     * @param Agent $Agent <p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p><p>此接口下面信息必填。</p><ul><li>渠道应用标识:  Agent.AppId</li><li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li><li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li></ul>第三方平台子客企业和员工必须已经经过实名认证
     * @param string $FlowId <p>合同流程ID，为32位字符串。<br>建议开发者妥善保存此流程ID，以便于顺利进行后续操作。<br>可登录腾讯电子签控制台，在 &quot;合同&quot;-&gt;&quot;合同中心&quot; 中查看某个合同的FlowId(在页面中展示为合同ID)。</p>
     * @param array $FlowApproverInfos <p>流程签署人列表，其中结构体的ApproverType必传。<br>若为个人签署方或saas企业签署方，则Name，Mobile必传。OrganizationName 传对应企业名称。<br>若为子客企业签署方则需传OpenId、OrganizationOpenId、OrganizationName， 其他可不传。（如果对应OrganizationOpenId 子客已经认证激活了，则可以省去OrganizationName）</p><p>此结构体和发起接口参与方结构体复用，除了上述参数外，可传递的参数有：</p><ol><li>RecipientId: 发起合同会返回，可以直接用于指定需要生成链接的签署方。</li><li>ApproverSignTypes: 指定签署方签署时候的认证方式，仅此链接生效。</li><li>SignTypeSelector: 可以指定签署方签署合同的认证校验方式的选择模式。</li><li>Intention: 指定H5签署视频核身的意图配置，仅视频签署需要使用。</li></ol><p>注:<br><code>1. 签署人只能有手写签名、时间类型、印章类型、签批类型的签署控件和内容填写控件，其他类型的签署控件暂时未支持。</code><br><code>2. 生成发起方预览链接时，该字段（FlowApproverInfos）传空或者不传</code></p>
     * @param integer $VideoVerifyTimesLimit <p>用于指定进入视频签署的限制次数，次数取值范围：1 - 10，不设置则默认为5次，仅视频签署时生效。</p>
     * @param UserInfo $Operator <p>用户信息，暂未开放</p>
     * @param OrganizationInfo $Organization <p>机构信息，暂未开放</p>
     * @param string $JumpUrl <p>签署完之后的H5页面的跳转链接，最大长度1000个字符。链接类型请参考 <a href="https://qian.tencent.com/developers/company/openqianh5" target="_blank">跳转电子签H5</a></p>
     * @param integer $UrlType <p>链接类型，支持指定以下类型</p><ul><li>0 : 签署链接 (默认值)</li><li>1 : 预览链接</li></ul>注:<code>1. 当指定链接类型为1时，链接为预览链接，打开链接无法签署仅支持预览以及查看当前合同状态。</code><code>2. 如需生成发起方预览链接，则签署方信息传空，即FlowApproverInfos传空或者不传。</code>
     * @param integer $ExpiredOn <p>链接的有效时间，单位为秒。取值范围为 30分钟（1800）-90天（7776000）。如果不传，默认有效期为30分钟。</p><p>注意：</p><ol><li><code>出于安全性考虑，若有效期大于30分钟，同设备24小时内点击链接查看合同需要进行手机验证码校验。</code></li><li><code>若生成合同发起方预览链接，有效期大于30分钟，则需要进行验证码校验的手机号为发起方账号绑定的手机号。</code></li></ol>
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

        if (array_key_exists("ExpiredOn",$param) and $param["ExpiredOn"] !== null) {
            $this->ExpiredOn = $param["ExpiredOn"];
        }
    }
}
