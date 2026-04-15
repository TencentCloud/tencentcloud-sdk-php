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
 * ChannelCreateBatchQuickSignUrl请求参数结构体
 *
 * @method FlowApproverInfo getFlowApproverInfo() 获取<p>批量签署的流程签署人，其中姓名(ApproverName)、参与人类型(ApproverType)必传，手机号(ApproverMobile)和证件信息(ApproverIdCardType、ApproverIdCardNumber)可任选一种或全部传入。</p><ul><li>若为个人参与方：ApproverType:"PERSON"</li><li>若为企业参与方：ApproverType:"ORGANIZATION"。同时若签署方为saas企业员工， OrganizationName 参数需传入参与方企业名称。若签署方为渠道子客企业员工，除了 OrganizationName 还需要传 OpenId、OrganizationOpenId。（如果OrganizationOpenId对应子客企业已经认证激活，则可以省略OrganizationName参数）</li></ul><p>注:<br><code>1. 暂不支持签署人拖动签署控件功能，以及签批控件。</code><br><code>2. 当需要通过短信验证码签署时，手机号ApproverMobile需要与发起合同时填写的用户手机号一致。</code></p>
 * @method void setFlowApproverInfo(FlowApproverInfo $FlowApproverInfo) 设置<p>批量签署的流程签署人，其中姓名(ApproverName)、参与人类型(ApproverType)必传，手机号(ApproverMobile)和证件信息(ApproverIdCardType、ApproverIdCardNumber)可任选一种或全部传入。</p><ul><li>若为个人参与方：ApproverType:"PERSON"</li><li>若为企业参与方：ApproverType:"ORGANIZATION"。同时若签署方为saas企业员工， OrganizationName 参数需传入参与方企业名称。若签署方为渠道子客企业员工，除了 OrganizationName 还需要传 OpenId、OrganizationOpenId。（如果OrganizationOpenId对应子客企业已经认证激活，则可以省略OrganizationName参数）</li></ul><p>注:<br><code>1. 暂不支持签署人拖动签署控件功能，以及签批控件。</code><br><code>2. 当需要通过短信验证码签署时，手机号ApproverMobile需要与发起合同时填写的用户手机号一致。</code></p>
 * @method Agent getAgent() 获取<p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p>
 * @method void setAgent(Agent $Agent) 设置<p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p>
 * @method array getFlowIds() 获取<p>批量签署的合同流程ID数组。<br>注: <code>在调用此接口时，请确保合同流程均为本企业发起，且合同数量不超过100个。</code></p>
 * @method void setFlowIds(array $FlowIds) 设置<p>批量签署的合同流程ID数组。<br>注: <code>在调用此接口时，请确保合同流程均为本企业发起，且合同数量不超过100个。</code></p>
 * @method string getFlowGroupId() 获取<p>合同组编号<br>注：<code>该参数和合同流程ID数组必须二选一</code></p>
 * @method void setFlowGroupId(string $FlowGroupId) 设置<p>合同组编号<br>注：<code>该参数和合同流程ID数组必须二选一</code></p>
 * @method string getJumpUrl() 获取<p>签署完之后的H5页面的跳转链接，此链接及支持http://和https://，最大长度1000个字符。(建议https协议)</p>
 * @method void setJumpUrl(string $JumpUrl) 设置<p>签署完之后的H5页面的跳转链接，此链接及支持http://和https://，最大长度1000个字符。(建议https协议)</p>
 * @method array getSignatureTypes() 获取<p>指定批量签署合同的签名类型，可传递以下值：</p><ul><li>**0**：手写签名(默认)</li><li>**1**：OCR楷体</li><li>**2**：姓名印章</li><li>**3**：图片印章</li><li>**4**：系统签名</li><li>**5**：长效手写签名（包含手写签名）</li></ul>注：<ul><li>默认情况下，签名类型为手写签名</li><li>您可以传递多种值，表示可用多种签名类型。</li><li>该参数会覆盖您合同中的签名类型，若您在发起合同时限定了签名类型(赋值签名类型给ComponentTypeLimit)，请将这些签名类型赋予此参数</li><li>若签署方为个人，签名类型“5:长效手写签名”不可用，签名方式将以合同中为准。</li></ul>
 * @method void setSignatureTypes(array $SignatureTypes) 设置<p>指定批量签署合同的签名类型，可传递以下值：</p><ul><li>**0**：手写签名(默认)</li><li>**1**：OCR楷体</li><li>**2**：姓名印章</li><li>**3**：图片印章</li><li>**4**：系统签名</li><li>**5**：长效手写签名（包含手写签名）</li></ul>注：<ul><li>默认情况下，签名类型为手写签名</li><li>您可以传递多种值，表示可用多种签名类型。</li><li>该参数会覆盖您合同中的签名类型，若您在发起合同时限定了签名类型(赋值签名类型给ComponentTypeLimit)，请将这些签名类型赋予此参数</li><li>若签署方为个人，签名类型“5:长效手写签名”不可用，签名方式将以合同中为准。</li></ul>
 * @method array getApproverSignTypes() 获取<p>指定批量签署合同的认证校验方式，可传递以下值：</p><ul><li>**1**：人脸认证(默认)，需进行人脸识别成功后才能签署合同</li><li>**2**：密码认证(默认)，需输入与用户在腾讯电子签设置的密码一致才能校验成功进行合同签署</li><li>**3**：运营商三要素，需到运营商处比对手机号实名信息(名字、手机号、证件号)校验一致才能成功进行合同签署。</li></ul>注：<ul><li>默认情况下，认证校验方式为人脸和密码认证</li><li>您可以传递多种值，表示可用多种认证校验方式。</li></ul>
 * @method void setApproverSignTypes(array $ApproverSignTypes) 设置<p>指定批量签署合同的认证校验方式，可传递以下值：</p><ul><li>**1**：人脸认证(默认)，需进行人脸识别成功后才能签署合同</li><li>**2**：密码认证(默认)，需输入与用户在腾讯电子签设置的密码一致才能校验成功进行合同签署</li><li>**3**：运营商三要素，需到运营商处比对手机号实名信息(名字、手机号、证件号)校验一致才能成功进行合同签署。</li></ul>注：<ul><li>默认情况下，认证校验方式为人脸和密码认证</li><li>您可以传递多种值，表示可用多种认证校验方式。</li></ul>
 * @method integer getSignTypeSelector() 获取<p>生成H5签署链接时，您可以指定签署方签署合同的认证校验方式的选择模式，可传递一下值：</p><ul><li>**0**：签署方自行选择，签署方可以从预先指定的认证方式中自由选择；</li><li>**1**：自动按顺序首位推荐，签署方无需选择，系统会优先推荐使用第一种认证方式。</li></ul>注：<code>不指定该值时，默认为签署方自行选择。</code>
 * @method void setSignTypeSelector(integer $SignTypeSelector) 设置<p>生成H5签署链接时，您可以指定签署方签署合同的认证校验方式的选择模式，可传递一下值：</p><ul><li>**0**：签署方自行选择，签署方可以从预先指定的认证方式中自由选择；</li><li>**1**：自动按顺序首位推荐，签署方无需选择，系统会优先推荐使用第一种认证方式。</li></ul>注：<code>不指定该值时，默认为签署方自行选择。</code>
 * @method FlowBatchUrlInfo getFlowBatchUrlInfo() 获取<p>批量签署合同相关信息，指定合同和签署方的信息，用于补充动态签署人。    </p><p>注: <code>若签署方为企业员工，暂不支持通过H5端进行动态签署人的补充</code></p>
 * @method void setFlowBatchUrlInfo(FlowBatchUrlInfo $FlowBatchUrlInfo) 设置<p>批量签署合同相关信息，指定合同和签署方的信息，用于补充动态签署人。    </p><p>注: <code>若签署方为企业员工，暂不支持通过H5端进行动态签署人的补充</code></p>
 * @method Intention getIntention() 获取<p><b>只有在生成H5签署链接的情形下</b>（ 如调用<a href="https://qian.tencent.com/developers/partnerApis/operateFlows/ChannelCreateFlowSignUrl" target="_blank">获取H5签署链接</a>、<a href="https://qian.tencent.com/developers/partnerApis/operateFlows/ChannelCreateBatchQuickSignUrl" target="_blank">获取H5批量签署链接</a>等接口），该配置才会生效。  您可以指定H5签署视频核身的意图配置，选择问答模式或点头模式的语音文本。  注意： 1. 视频认证为<b>白名单功能，使用前请联系对接的客户经理沟通</b>。 2. 使用视频认证时，<b>生成H5签署链接的时候必须将签署认证方式指定为人脸</b>（即ApproverSignTypes设置成人脸签署）。 3. 签署完成后，可以通过<a href="https://qian.tencent.com/developers/partnerApis/flows/ChannelDescribeSignFaceVideo" target="_blank">查询签署认证人脸视频</a>获取到当时的视频。</p>
 * @method void setIntention(Intention $Intention) 设置<p><b>只有在生成H5签署链接的情形下</b>（ 如调用<a href="https://qian.tencent.com/developers/partnerApis/operateFlows/ChannelCreateFlowSignUrl" target="_blank">获取H5签署链接</a>、<a href="https://qian.tencent.com/developers/partnerApis/operateFlows/ChannelCreateBatchQuickSignUrl" target="_blank">获取H5批量签署链接</a>等接口），该配置才会生效。  您可以指定H5签署视频核身的意图配置，选择问答模式或点头模式的语音文本。  注意： 1. 视频认证为<b>白名单功能，使用前请联系对接的客户经理沟通</b>。 2. 使用视频认证时，<b>生成H5签署链接的时候必须将签署认证方式指定为人脸</b>（即ApproverSignTypes设置成人脸签署）。 3. 签署完成后，可以通过<a href="https://qian.tencent.com/developers/partnerApis/flows/ChannelDescribeSignFaceVideo" target="_blank">查询签署认证人脸视频</a>获取到当时的视频。</p>
 * @method integer getVideoVerifyTimesLimit() 获取<p>用于指定进入视频签署的限制次数，次数取值范围：1 - 10，不设置则默认为5次，仅视频签署时生效。</p>
 * @method void setVideoVerifyTimesLimit(integer $VideoVerifyTimesLimit) 设置<p>用于指定进入视频签署的限制次数，次数取值范围：1 - 10，不设置则默认为5次，仅视频签署时生效。</p>
 * @method boolean getCacheApproverInfo() 获取<p>缓存签署人信息。在H5签署链接动态领取场景，首次填写后，选择缓存签署人信息，在下次签署人点击领取链接时，会自动将个人信息（姓名、身份证号、手机号）填入，否则需要每次手动填写。</p><p>注: <code>若参与方为企业员工时，暂不支持对参与方信息进行缓存</code></p>
 * @method void setCacheApproverInfo(boolean $CacheApproverInfo) 设置<p>缓存签署人信息。在H5签署链接动态领取场景，首次填写后，选择缓存签署人信息，在下次签署人点击领取链接时，会自动将个人信息（姓名、身份证号、手机号）填入，否则需要每次手动填写。</p><p>注: <code>若参与方为企业员工时，暂不支持对参与方信息进行缓存</code></p>
 * @method boolean getCanBatchReject() 获取<p>是否允许此链接中签署方批量拒签。 <ul><li>false (默认): 不允许批量拒签</li> <li>true : 允许批量拒签。</li></ul>注：<code>当前合同组不支持批量拒签功能。请对合同组中的每个子合同逐一执行拒签操作，以达到拒签整个合同组的效果。</code></p>
 * @method void setCanBatchReject(boolean $CanBatchReject) 设置<p>是否允许此链接中签署方批量拒签。 <ul><li>false (默认): 不允许批量拒签</li> <li>true : 允许批量拒签。</li></ul>注：<code>当前合同组不支持批量拒签功能。请对合同组中的每个子合同逐一执行拒签操作，以达到拒签整个合同组的效果。</code></p>
 * @method PresetApproverInfo getPresetApproverInfo() 获取<p>预设的动态签署方的补充信息，仅匹配对应信息的签署方才能领取合同。暂时仅对个人参与方生效。</p>
 * @method void setPresetApproverInfo(PresetApproverInfo $PresetApproverInfo) 设置<p>预设的动态签署方的补充信息，仅匹配对应信息的签署方才能领取合同。暂时仅对个人参与方生效。</p>
 * @method boolean getCanSkipReadFlow() 获取<p>是否允许此链接中签署方批量确认已读文件。 <ul><li>false (默认): 不允许批量确认已读文件。</li> <li>true : 允许批量确认已读文件。</li></ul>注：<code>1. 此功能为白名单功能，使用前请联系对应客户经理进行开通。2. 若批量签署的合同中第一份待签署合同所选择的印章或者签名无法完全覆盖后续合同要求，或者当前签署人没有指定印章使用权限，则无法使用此功能，会自动退化为逐份确认。</code></p>
 * @method void setCanSkipReadFlow(boolean $CanSkipReadFlow) 设置<p>是否允许此链接中签署方批量确认已读文件。 <ul><li>false (默认): 不允许批量确认已读文件。</li> <li>true : 允许批量确认已读文件。</li></ul>注：<code>1. 此功能为白名单功能，使用前请联系对应客户经理进行开通。2. 若批量签署的合同中第一份待签署合同所选择的印章或者签名无法完全覆盖后续合同要求，或者当前签署人没有指定印章使用权限，则无法使用此功能，会自动退化为逐份确认。</code></p>
 * @method integer getExpiredOn() 获取<p>链接的有效时间，单位为秒。取值范围为 30分钟（1800）-90天（7776000）。如果不传，默认有效期为30分钟。</p><p>注意：</p><ol><li><code>出于安全性考虑，若有效期大于30分钟，同设备24小时内点击链接查看合同需要进行手机验证码校验。</code></li><li><code>动态签署方链接暂不支持修改过期时间。</code></li></ol>
 * @method void setExpiredOn(integer $ExpiredOn) 设置<p>链接的有效时间，单位为秒。取值范围为 30分钟（1800）-90天（7776000）。如果不传，默认有效期为30分钟。</p><p>注意：</p><ol><li><code>出于安全性考虑，若有效期大于30分钟，同设备24小时内点击链接查看合同需要进行手机验证码校验。</code></li><li><code>动态签署方链接暂不支持修改过期时间。</code></li></ol>
 */
class ChannelCreateBatchQuickSignUrlRequest extends AbstractModel
{
    /**
     * @var FlowApproverInfo <p>批量签署的流程签署人，其中姓名(ApproverName)、参与人类型(ApproverType)必传，手机号(ApproverMobile)和证件信息(ApproverIdCardType、ApproverIdCardNumber)可任选一种或全部传入。</p><ul><li>若为个人参与方：ApproverType:"PERSON"</li><li>若为企业参与方：ApproverType:"ORGANIZATION"。同时若签署方为saas企业员工， OrganizationName 参数需传入参与方企业名称。若签署方为渠道子客企业员工，除了 OrganizationName 还需要传 OpenId、OrganizationOpenId。（如果OrganizationOpenId对应子客企业已经认证激活，则可以省略OrganizationName参数）</li></ul><p>注:<br><code>1. 暂不支持签署人拖动签署控件功能，以及签批控件。</code><br><code>2. 当需要通过短信验证码签署时，手机号ApproverMobile需要与发起合同时填写的用户手机号一致。</code></p>
     */
    public $FlowApproverInfo;

    /**
     * @var Agent <p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p>
     */
    public $Agent;

    /**
     * @var array <p>批量签署的合同流程ID数组。<br>注: <code>在调用此接口时，请确保合同流程均为本企业发起，且合同数量不超过100个。</code></p>
     */
    public $FlowIds;

    /**
     * @var string <p>合同组编号<br>注：<code>该参数和合同流程ID数组必须二选一</code></p>
     */
    public $FlowGroupId;

    /**
     * @var string <p>签署完之后的H5页面的跳转链接，此链接及支持http://和https://，最大长度1000个字符。(建议https协议)</p>
     */
    public $JumpUrl;

    /**
     * @var array <p>指定批量签署合同的签名类型，可传递以下值：</p><ul><li>**0**：手写签名(默认)</li><li>**1**：OCR楷体</li><li>**2**：姓名印章</li><li>**3**：图片印章</li><li>**4**：系统签名</li><li>**5**：长效手写签名（包含手写签名）</li></ul>注：<ul><li>默认情况下，签名类型为手写签名</li><li>您可以传递多种值，表示可用多种签名类型。</li><li>该参数会覆盖您合同中的签名类型，若您在发起合同时限定了签名类型(赋值签名类型给ComponentTypeLimit)，请将这些签名类型赋予此参数</li><li>若签署方为个人，签名类型“5:长效手写签名”不可用，签名方式将以合同中为准。</li></ul>
     */
    public $SignatureTypes;

    /**
     * @var array <p>指定批量签署合同的认证校验方式，可传递以下值：</p><ul><li>**1**：人脸认证(默认)，需进行人脸识别成功后才能签署合同</li><li>**2**：密码认证(默认)，需输入与用户在腾讯电子签设置的密码一致才能校验成功进行合同签署</li><li>**3**：运营商三要素，需到运营商处比对手机号实名信息(名字、手机号、证件号)校验一致才能成功进行合同签署。</li></ul>注：<ul><li>默认情况下，认证校验方式为人脸和密码认证</li><li>您可以传递多种值，表示可用多种认证校验方式。</li></ul>
     */
    public $ApproverSignTypes;

    /**
     * @var integer <p>生成H5签署链接时，您可以指定签署方签署合同的认证校验方式的选择模式，可传递一下值：</p><ul><li>**0**：签署方自行选择，签署方可以从预先指定的认证方式中自由选择；</li><li>**1**：自动按顺序首位推荐，签署方无需选择，系统会优先推荐使用第一种认证方式。</li></ul>注：<code>不指定该值时，默认为签署方自行选择。</code>
     */
    public $SignTypeSelector;

    /**
     * @var FlowBatchUrlInfo <p>批量签署合同相关信息，指定合同和签署方的信息，用于补充动态签署人。    </p><p>注: <code>若签署方为企业员工，暂不支持通过H5端进行动态签署人的补充</code></p>
     */
    public $FlowBatchUrlInfo;

    /**
     * @var Intention <p><b>只有在生成H5签署链接的情形下</b>（ 如调用<a href="https://qian.tencent.com/developers/partnerApis/operateFlows/ChannelCreateFlowSignUrl" target="_blank">获取H5签署链接</a>、<a href="https://qian.tencent.com/developers/partnerApis/operateFlows/ChannelCreateBatchQuickSignUrl" target="_blank">获取H5批量签署链接</a>等接口），该配置才会生效。  您可以指定H5签署视频核身的意图配置，选择问答模式或点头模式的语音文本。  注意： 1. 视频认证为<b>白名单功能，使用前请联系对接的客户经理沟通</b>。 2. 使用视频认证时，<b>生成H5签署链接的时候必须将签署认证方式指定为人脸</b>（即ApproverSignTypes设置成人脸签署）。 3. 签署完成后，可以通过<a href="https://qian.tencent.com/developers/partnerApis/flows/ChannelDescribeSignFaceVideo" target="_blank">查询签署认证人脸视频</a>获取到当时的视频。</p>
     */
    public $Intention;

    /**
     * @var integer <p>用于指定进入视频签署的限制次数，次数取值范围：1 - 10，不设置则默认为5次，仅视频签署时生效。</p>
     */
    public $VideoVerifyTimesLimit;

    /**
     * @var boolean <p>缓存签署人信息。在H5签署链接动态领取场景，首次填写后，选择缓存签署人信息，在下次签署人点击领取链接时，会自动将个人信息（姓名、身份证号、手机号）填入，否则需要每次手动填写。</p><p>注: <code>若参与方为企业员工时，暂不支持对参与方信息进行缓存</code></p>
     */
    public $CacheApproverInfo;

    /**
     * @var boolean <p>是否允许此链接中签署方批量拒签。 <ul><li>false (默认): 不允许批量拒签</li> <li>true : 允许批量拒签。</li></ul>注：<code>当前合同组不支持批量拒签功能。请对合同组中的每个子合同逐一执行拒签操作，以达到拒签整个合同组的效果。</code></p>
     */
    public $CanBatchReject;

    /**
     * @var PresetApproverInfo <p>预设的动态签署方的补充信息，仅匹配对应信息的签署方才能领取合同。暂时仅对个人参与方生效。</p>
     */
    public $PresetApproverInfo;

    /**
     * @var boolean <p>是否允许此链接中签署方批量确认已读文件。 <ul><li>false (默认): 不允许批量确认已读文件。</li> <li>true : 允许批量确认已读文件。</li></ul>注：<code>1. 此功能为白名单功能，使用前请联系对应客户经理进行开通。2. 若批量签署的合同中第一份待签署合同所选择的印章或者签名无法完全覆盖后续合同要求，或者当前签署人没有指定印章使用权限，则无法使用此功能，会自动退化为逐份确认。</code></p>
     */
    public $CanSkipReadFlow;

    /**
     * @var integer <p>链接的有效时间，单位为秒。取值范围为 30分钟（1800）-90天（7776000）。如果不传，默认有效期为30分钟。</p><p>注意：</p><ol><li><code>出于安全性考虑，若有效期大于30分钟，同设备24小时内点击链接查看合同需要进行手机验证码校验。</code></li><li><code>动态签署方链接暂不支持修改过期时间。</code></li></ol>
     */
    public $ExpiredOn;

    /**
     * @param FlowApproverInfo $FlowApproverInfo <p>批量签署的流程签署人，其中姓名(ApproverName)、参与人类型(ApproverType)必传，手机号(ApproverMobile)和证件信息(ApproverIdCardType、ApproverIdCardNumber)可任选一种或全部传入。</p><ul><li>若为个人参与方：ApproverType:"PERSON"</li><li>若为企业参与方：ApproverType:"ORGANIZATION"。同时若签署方为saas企业员工， OrganizationName 参数需传入参与方企业名称。若签署方为渠道子客企业员工，除了 OrganizationName 还需要传 OpenId、OrganizationOpenId。（如果OrganizationOpenId对应子客企业已经认证激活，则可以省略OrganizationName参数）</li></ul><p>注:<br><code>1. 暂不支持签署人拖动签署控件功能，以及签批控件。</code><br><code>2. 当需要通过短信验证码签署时，手机号ApproverMobile需要与发起合同时填写的用户手机号一致。</code></p>
     * @param Agent $Agent <p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p>
     * @param array $FlowIds <p>批量签署的合同流程ID数组。<br>注: <code>在调用此接口时，请确保合同流程均为本企业发起，且合同数量不超过100个。</code></p>
     * @param string $FlowGroupId <p>合同组编号<br>注：<code>该参数和合同流程ID数组必须二选一</code></p>
     * @param string $JumpUrl <p>签署完之后的H5页面的跳转链接，此链接及支持http://和https://，最大长度1000个字符。(建议https协议)</p>
     * @param array $SignatureTypes <p>指定批量签署合同的签名类型，可传递以下值：</p><ul><li>**0**：手写签名(默认)</li><li>**1**：OCR楷体</li><li>**2**：姓名印章</li><li>**3**：图片印章</li><li>**4**：系统签名</li><li>**5**：长效手写签名（包含手写签名）</li></ul>注：<ul><li>默认情况下，签名类型为手写签名</li><li>您可以传递多种值，表示可用多种签名类型。</li><li>该参数会覆盖您合同中的签名类型，若您在发起合同时限定了签名类型(赋值签名类型给ComponentTypeLimit)，请将这些签名类型赋予此参数</li><li>若签署方为个人，签名类型“5:长效手写签名”不可用，签名方式将以合同中为准。</li></ul>
     * @param array $ApproverSignTypes <p>指定批量签署合同的认证校验方式，可传递以下值：</p><ul><li>**1**：人脸认证(默认)，需进行人脸识别成功后才能签署合同</li><li>**2**：密码认证(默认)，需输入与用户在腾讯电子签设置的密码一致才能校验成功进行合同签署</li><li>**3**：运营商三要素，需到运营商处比对手机号实名信息(名字、手机号、证件号)校验一致才能成功进行合同签署。</li></ul>注：<ul><li>默认情况下，认证校验方式为人脸和密码认证</li><li>您可以传递多种值，表示可用多种认证校验方式。</li></ul>
     * @param integer $SignTypeSelector <p>生成H5签署链接时，您可以指定签署方签署合同的认证校验方式的选择模式，可传递一下值：</p><ul><li>**0**：签署方自行选择，签署方可以从预先指定的认证方式中自由选择；</li><li>**1**：自动按顺序首位推荐，签署方无需选择，系统会优先推荐使用第一种认证方式。</li></ul>注：<code>不指定该值时，默认为签署方自行选择。</code>
     * @param FlowBatchUrlInfo $FlowBatchUrlInfo <p>批量签署合同相关信息，指定合同和签署方的信息，用于补充动态签署人。    </p><p>注: <code>若签署方为企业员工，暂不支持通过H5端进行动态签署人的补充</code></p>
     * @param Intention $Intention <p><b>只有在生成H5签署链接的情形下</b>（ 如调用<a href="https://qian.tencent.com/developers/partnerApis/operateFlows/ChannelCreateFlowSignUrl" target="_blank">获取H5签署链接</a>、<a href="https://qian.tencent.com/developers/partnerApis/operateFlows/ChannelCreateBatchQuickSignUrl" target="_blank">获取H5批量签署链接</a>等接口），该配置才会生效。  您可以指定H5签署视频核身的意图配置，选择问答模式或点头模式的语音文本。  注意： 1. 视频认证为<b>白名单功能，使用前请联系对接的客户经理沟通</b>。 2. 使用视频认证时，<b>生成H5签署链接的时候必须将签署认证方式指定为人脸</b>（即ApproverSignTypes设置成人脸签署）。 3. 签署完成后，可以通过<a href="https://qian.tencent.com/developers/partnerApis/flows/ChannelDescribeSignFaceVideo" target="_blank">查询签署认证人脸视频</a>获取到当时的视频。</p>
     * @param integer $VideoVerifyTimesLimit <p>用于指定进入视频签署的限制次数，次数取值范围：1 - 10，不设置则默认为5次，仅视频签署时生效。</p>
     * @param boolean $CacheApproverInfo <p>缓存签署人信息。在H5签署链接动态领取场景，首次填写后，选择缓存签署人信息，在下次签署人点击领取链接时，会自动将个人信息（姓名、身份证号、手机号）填入，否则需要每次手动填写。</p><p>注: <code>若参与方为企业员工时，暂不支持对参与方信息进行缓存</code></p>
     * @param boolean $CanBatchReject <p>是否允许此链接中签署方批量拒签。 <ul><li>false (默认): 不允许批量拒签</li> <li>true : 允许批量拒签。</li></ul>注：<code>当前合同组不支持批量拒签功能。请对合同组中的每个子合同逐一执行拒签操作，以达到拒签整个合同组的效果。</code></p>
     * @param PresetApproverInfo $PresetApproverInfo <p>预设的动态签署方的补充信息，仅匹配对应信息的签署方才能领取合同。暂时仅对个人参与方生效。</p>
     * @param boolean $CanSkipReadFlow <p>是否允许此链接中签署方批量确认已读文件。 <ul><li>false (默认): 不允许批量确认已读文件。</li> <li>true : 允许批量确认已读文件。</li></ul>注：<code>1. 此功能为白名单功能，使用前请联系对应客户经理进行开通。2. 若批量签署的合同中第一份待签署合同所选择的印章或者签名无法完全覆盖后续合同要求，或者当前签署人没有指定印章使用权限，则无法使用此功能，会自动退化为逐份确认。</code></p>
     * @param integer $ExpiredOn <p>链接的有效时间，单位为秒。取值范围为 30分钟（1800）-90天（7776000）。如果不传，默认有效期为30分钟。</p><p>注意：</p><ol><li><code>出于安全性考虑，若有效期大于30分钟，同设备24小时内点击链接查看合同需要进行手机验证码校验。</code></li><li><code>动态签署方链接暂不支持修改过期时间。</code></li></ol>
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
        if (array_key_exists("FlowApproverInfo",$param) and $param["FlowApproverInfo"] !== null) {
            $this->FlowApproverInfo = new FlowApproverInfo();
            $this->FlowApproverInfo->deserialize($param["FlowApproverInfo"]);
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("FlowIds",$param) and $param["FlowIds"] !== null) {
            $this->FlowIds = $param["FlowIds"];
        }

        if (array_key_exists("FlowGroupId",$param) and $param["FlowGroupId"] !== null) {
            $this->FlowGroupId = $param["FlowGroupId"];
        }

        if (array_key_exists("JumpUrl",$param) and $param["JumpUrl"] !== null) {
            $this->JumpUrl = $param["JumpUrl"];
        }

        if (array_key_exists("SignatureTypes",$param) and $param["SignatureTypes"] !== null) {
            $this->SignatureTypes = $param["SignatureTypes"];
        }

        if (array_key_exists("ApproverSignTypes",$param) and $param["ApproverSignTypes"] !== null) {
            $this->ApproverSignTypes = $param["ApproverSignTypes"];
        }

        if (array_key_exists("SignTypeSelector",$param) and $param["SignTypeSelector"] !== null) {
            $this->SignTypeSelector = $param["SignTypeSelector"];
        }

        if (array_key_exists("FlowBatchUrlInfo",$param) and $param["FlowBatchUrlInfo"] !== null) {
            $this->FlowBatchUrlInfo = new FlowBatchUrlInfo();
            $this->FlowBatchUrlInfo->deserialize($param["FlowBatchUrlInfo"]);
        }

        if (array_key_exists("Intention",$param) and $param["Intention"] !== null) {
            $this->Intention = new Intention();
            $this->Intention->deserialize($param["Intention"]);
        }

        if (array_key_exists("VideoVerifyTimesLimit",$param) and $param["VideoVerifyTimesLimit"] !== null) {
            $this->VideoVerifyTimesLimit = $param["VideoVerifyTimesLimit"];
        }

        if (array_key_exists("CacheApproverInfo",$param) and $param["CacheApproverInfo"] !== null) {
            $this->CacheApproverInfo = $param["CacheApproverInfo"];
        }

        if (array_key_exists("CanBatchReject",$param) and $param["CanBatchReject"] !== null) {
            $this->CanBatchReject = $param["CanBatchReject"];
        }

        if (array_key_exists("PresetApproverInfo",$param) and $param["PresetApproverInfo"] !== null) {
            $this->PresetApproverInfo = new PresetApproverInfo();
            $this->PresetApproverInfo->deserialize($param["PresetApproverInfo"]);
        }

        if (array_key_exists("CanSkipReadFlow",$param) and $param["CanSkipReadFlow"] !== null) {
            $this->CanSkipReadFlow = $param["CanSkipReadFlow"];
        }

        if (array_key_exists("ExpiredOn",$param) and $param["ExpiredOn"] !== null) {
            $this->ExpiredOn = $param["ExpiredOn"];
        }
    }
}
