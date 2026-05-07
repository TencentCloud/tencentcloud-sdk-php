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
 * ChannelCreateMultiFlowSignQRCode请求参数结构体
 *
 * @method Agent getAgent() 获取<p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p><p>此接口下面信息必填。</p><ul><li>渠道应用标识:  Agent.AppId</li><li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li><li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li></ul>第三方平台子客企业和员工必须已经经过实名认证
 * @method void setAgent(Agent $Agent) 设置<p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p><p>此接口下面信息必填。</p><ul><li>渠道应用标识:  Agent.AppId</li><li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li><li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li></ul>第三方平台子客企业和员工必须已经经过实名认证
 * @method string getTemplateId() 获取<p>合同模板ID，为32位字符串。</p>
 * @method void setTemplateId(string $TemplateId) 设置<p>合同模板ID，为32位字符串。</p>
 * @method string getFlowName() 获取<p>合同流程的名称（可自定义此名称），长度不能超过200，只能由中文、字母、数字和下划线组成。 该名称还将用于合同签署完成后的下载文件名。</p>
 * @method void setFlowName(string $FlowName) 设置<p>合同流程的名称（可自定义此名称），长度不能超过200，只能由中文、字母、数字和下划线组成。 该名称还将用于合同签署完成后的下载文件名。</p>
 * @method integer getMaxFlowNum() 获取<p>通过此二维码可发起的流程最大限额，如未明确指定，默认为5份。 一旦发起流程数超越该限制，该二维码将自动失效。</p>
 * @method void setMaxFlowNum(integer $MaxFlowNum) 设置<p>通过此二维码可发起的流程最大限额，如未明确指定，默认为5份。 一旦发起流程数超越该限制，该二维码将自动失效。</p>
 * @method integer getFlowEffectiveDay() 获取<p>合同流程的签署有效期限，若未设定签署截止日期，则默认为自合同流程创建起的7天内截止。 若在签署截止日期前未完成签署，合同状态将变更为已过期，从而导致合同无效。 最长设定期限不得超过30天。</p>
 * @method void setFlowEffectiveDay(integer $FlowEffectiveDay) 设置<p>合同流程的签署有效期限，若未设定签署截止日期，则默认为自合同流程创建起的7天内截止。 若在签署截止日期前未完成签署，合同状态将变更为已过期，从而导致合同无效。 最长设定期限不得超过30天。</p>
 * @method integer getFlowDisplayType() 获取<p>在短信通知、填写、签署流程中，若标题、按钮、合同详情等地方存在“合同”字样时，可根据此配置指定文案，可选文案如下：<br> <ul><li> <b>0</b> :合同（默认值）</li> <li> <b>1</b> :文件</li> <li> <b>2</b> :协议</li><li> <b>3</b> :文书</li></ul></p><p>效果如下:<br><img src="https://qcloudimg.tencent-cloud.cn/raw/e4a2c4d638717cc901d3dbd5137c9bbc.png" alt="FlowDisplayType"></p><p>枚举值：</p><ul><li>0： 合同</li><li>1： 文件</li><li>2： 协议</li><li>3： 文书</li></ul><p>默认值：0</p>
 * @method void setFlowDisplayType(integer $FlowDisplayType) 设置<p>在短信通知、填写、签署流程中，若标题、按钮、合同详情等地方存在“合同”字样时，可根据此配置指定文案，可选文案如下：<br> <ul><li> <b>0</b> :合同（默认值）</li> <li> <b>1</b> :文件</li> <li> <b>2</b> :协议</li><li> <b>3</b> :文书</li></ul></p><p>效果如下:<br><img src="https://qcloudimg.tencent-cloud.cn/raw/e4a2c4d638717cc901d3dbd5137c9bbc.png" alt="FlowDisplayType"></p><p>枚举值：</p><ul><li>0： 合同</li><li>1： 文件</li><li>2： 协议</li><li>3： 文书</li></ul><p>默认值：0</p>
 * @method integer getQrEffectiveDay() 获取<p>二维码的有效期限，默认为7天，最高设定不得超过90天。 一旦超过二维码的有效期限，该二维码将自动失效。</p>
 * @method void setQrEffectiveDay(integer $QrEffectiveDay) 设置<p>二维码的有效期限，默认为7天，最高设定不得超过90天。 一旦超过二维码的有效期限，该二维码将自动失效。</p>
 * @method array getRestrictions() 获取<p>指定签署人信息。 在指定签署人后，仅允许特定签署人通过扫描二维码进行签署。</p>
 * @method void setRestrictions(array $Restrictions) 设置<p>指定签署人信息。 在指定签署人后，仅允许特定签署人通过扫描二维码进行签署。</p>
 * @method array getApproverComponentLimitTypes() 获取<p>指定签署方经办人控件类型是个人印章签署控件（SIGN_SIGNATURE） 时，可选的签名方式。</p>
 * @method void setApproverComponentLimitTypes(array $ApproverComponentLimitTypes) 设置<p>指定签署方经办人控件类型是个人印章签署控件（SIGN_SIGNATURE） 时，可选的签名方式。</p>
 * @method string getCallbackUrl() 获取<p>已废弃，回调配置统一使用企业应用管理-应用集成-第三方应用中的配置<br><br> 通过一码多扫二维码发起的合同，回调消息可参考文档 https://qian.tencent.com/developers/partner/callback_types_contracts_sign<br><br> 用户通过签署二维码发起合同时，因企业额度不足导致失败 会触发签署二维码相关回调,具体参考文档 https://qian.tencent.com/developers/partner/callback_types_commons#%E7%AD%BE%E7%BD%B2%E4%BA%8C%E7%BB%B4%E7%A0%81%E7%9B%B8%E5%85%B3%E5%9B%9E%E8%B0%83</p>
 * @method void setCallbackUrl(string $CallbackUrl) 设置<p>已废弃，回调配置统一使用企业应用管理-应用集成-第三方应用中的配置<br><br> 通过一码多扫二维码发起的合同，回调消息可参考文档 https://qian.tencent.com/developers/partner/callback_types_contracts_sign<br><br> 用户通过签署二维码发起合同时，因企业额度不足导致失败 会触发签署二维码相关回调,具体参考文档 https://qian.tencent.com/developers/partner/callback_types_commons#%E7%AD%BE%E7%BD%B2%E4%BA%8C%E7%BB%B4%E7%A0%81%E7%9B%B8%E5%85%B3%E5%9B%9E%E8%B0%83</p>
 * @method ApproverRestriction getApproverRestrictions() 获取<p>限制二维码用户条件（已弃用）</p>
 * @method void setApproverRestrictions(ApproverRestriction $ApproverRestrictions) 设置<p>限制二维码用户条件（已弃用）</p>
 * @method UserInfo getOperator() 获取<p>暂未开放</p>
 * @method void setOperator(UserInfo $Operator) 设置<p>暂未开放</p>
 * @method boolean getForbidPersonalMultipleSign() 获取<p>禁止个人用户重复签署，默认不禁止，即同一用户可多次扫码签署多份合同。若要求同一用户仅能扫码签署一份合同，请传入true。</p>
 * @method void setForbidPersonalMultipleSign(boolean $ForbidPersonalMultipleSign) 设置<p>禁止个人用户重复签署，默认不禁止，即同一用户可多次扫码签署多份合同。若要求同一用户仅能扫码签署一份合同，请传入true。</p>
 * @method boolean getFlowNameAppendScannerInfo() 获取<p>合同流程名称是否应包含扫码签署人的信息，且遵循特定格式（flowname-姓名-手机号后四位）。 例如，通过参数FlowName设定的扫码发起合同名称为“员工入职合同”，当扫码人张三（手机号18800009527）扫码签署时，合同名称将自动生成为“员工入职合同-张三-9527”。</p>
 * @method void setFlowNameAppendScannerInfo(boolean $FlowNameAppendScannerInfo) 设置<p>合同流程名称是否应包含扫码签署人的信息，且遵循特定格式（flowname-姓名-手机号后四位）。 例如，通过参数FlowName设定的扫码发起合同名称为“员工入职合同”，当扫码人张三（手机号18800009527）扫码签署时，合同名称将自动生成为“员工入职合同-张三-9527”。</p>
 * @method string getQrCodeName() 获取<p>签署二维码的名称（可自定义此名称），长度不能超过200，只能由中文、字母、数字和下划线组成,会在生成的二维码图片上展示，若为空，则使用FlowName</p>
 * @method void setQrCodeName(string $QrCodeName) 设置<p>签署二维码的名称（可自定义此名称），长度不能超过200，只能由中文、字母、数字和下划线组成,会在生成的二维码图片上展示，若为空，则使用FlowName</p>
 * @method integer getQrCodeExpiredOn() 获取<p>签署二维码截止时间，格式为Unix标准时间戳（秒），如果未设置签署截止时间，则默认为签署二维码创建后的7天时截止，最长可设置为签署二维码创建后的365天时截止。</p>
 * @method void setQrCodeExpiredOn(integer $QrCodeExpiredOn) 设置<p>签署二维码截止时间，格式为Unix标准时间戳（秒），如果未设置签署截止时间，则默认为签署二维码创建后的7天时截止，最长可设置为签署二维码创建后的365天时截止。</p>
 */
class ChannelCreateMultiFlowSignQRCodeRequest extends AbstractModel
{
    /**
     * @var Agent <p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p><p>此接口下面信息必填。</p><ul><li>渠道应用标识:  Agent.AppId</li><li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li><li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li></ul>第三方平台子客企业和员工必须已经经过实名认证
     */
    public $Agent;

    /**
     * @var string <p>合同模板ID，为32位字符串。</p>
     */
    public $TemplateId;

    /**
     * @var string <p>合同流程的名称（可自定义此名称），长度不能超过200，只能由中文、字母、数字和下划线组成。 该名称还将用于合同签署完成后的下载文件名。</p>
     */
    public $FlowName;

    /**
     * @var integer <p>通过此二维码可发起的流程最大限额，如未明确指定，默认为5份。 一旦发起流程数超越该限制，该二维码将自动失效。</p>
     */
    public $MaxFlowNum;

    /**
     * @var integer <p>合同流程的签署有效期限，若未设定签署截止日期，则默认为自合同流程创建起的7天内截止。 若在签署截止日期前未完成签署，合同状态将变更为已过期，从而导致合同无效。 最长设定期限不得超过30天。</p>
     */
    public $FlowEffectiveDay;

    /**
     * @var integer <p>在短信通知、填写、签署流程中，若标题、按钮、合同详情等地方存在“合同”字样时，可根据此配置指定文案，可选文案如下：<br> <ul><li> <b>0</b> :合同（默认值）</li> <li> <b>1</b> :文件</li> <li> <b>2</b> :协议</li><li> <b>3</b> :文书</li></ul></p><p>效果如下:<br><img src="https://qcloudimg.tencent-cloud.cn/raw/e4a2c4d638717cc901d3dbd5137c9bbc.png" alt="FlowDisplayType"></p><p>枚举值：</p><ul><li>0： 合同</li><li>1： 文件</li><li>2： 协议</li><li>3： 文书</li></ul><p>默认值：0</p>
     */
    public $FlowDisplayType;

    /**
     * @var integer <p>二维码的有效期限，默认为7天，最高设定不得超过90天。 一旦超过二维码的有效期限，该二维码将自动失效。</p>
     * @deprecated
     */
    public $QrEffectiveDay;

    /**
     * @var array <p>指定签署人信息。 在指定签署人后，仅允许特定签署人通过扫描二维码进行签署。</p>
     */
    public $Restrictions;

    /**
     * @var array <p>指定签署方经办人控件类型是个人印章签署控件（SIGN_SIGNATURE） 时，可选的签名方式。</p>
     */
    public $ApproverComponentLimitTypes;

    /**
     * @var string <p>已废弃，回调配置统一使用企业应用管理-应用集成-第三方应用中的配置<br><br> 通过一码多扫二维码发起的合同，回调消息可参考文档 https://qian.tencent.com/developers/partner/callback_types_contracts_sign<br><br> 用户通过签署二维码发起合同时，因企业额度不足导致失败 会触发签署二维码相关回调,具体参考文档 https://qian.tencent.com/developers/partner/callback_types_commons#%E7%AD%BE%E7%BD%B2%E4%BA%8C%E7%BB%B4%E7%A0%81%E7%9B%B8%E5%85%B3%E5%9B%9E%E8%B0%83</p>
     * @deprecated
     */
    public $CallbackUrl;

    /**
     * @var ApproverRestriction <p>限制二维码用户条件（已弃用）</p>
     * @deprecated
     */
    public $ApproverRestrictions;

    /**
     * @var UserInfo <p>暂未开放</p>
     * @deprecated
     */
    public $Operator;

    /**
     * @var boolean <p>禁止个人用户重复签署，默认不禁止，即同一用户可多次扫码签署多份合同。若要求同一用户仅能扫码签署一份合同，请传入true。</p>
     */
    public $ForbidPersonalMultipleSign;

    /**
     * @var boolean <p>合同流程名称是否应包含扫码签署人的信息，且遵循特定格式（flowname-姓名-手机号后四位）。 例如，通过参数FlowName设定的扫码发起合同名称为“员工入职合同”，当扫码人张三（手机号18800009527）扫码签署时，合同名称将自动生成为“员工入职合同-张三-9527”。</p>
     */
    public $FlowNameAppendScannerInfo;

    /**
     * @var string <p>签署二维码的名称（可自定义此名称），长度不能超过200，只能由中文、字母、数字和下划线组成,会在生成的二维码图片上展示，若为空，则使用FlowName</p>
     */
    public $QrCodeName;

    /**
     * @var integer <p>签署二维码截止时间，格式为Unix标准时间戳（秒），如果未设置签署截止时间，则默认为签署二维码创建后的7天时截止，最长可设置为签署二维码创建后的365天时截止。</p>
     */
    public $QrCodeExpiredOn;

    /**
     * @param Agent $Agent <p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p><p>此接口下面信息必填。</p><ul><li>渠道应用标识:  Agent.AppId</li><li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li><li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li></ul>第三方平台子客企业和员工必须已经经过实名认证
     * @param string $TemplateId <p>合同模板ID，为32位字符串。</p>
     * @param string $FlowName <p>合同流程的名称（可自定义此名称），长度不能超过200，只能由中文、字母、数字和下划线组成。 该名称还将用于合同签署完成后的下载文件名。</p>
     * @param integer $MaxFlowNum <p>通过此二维码可发起的流程最大限额，如未明确指定，默认为5份。 一旦发起流程数超越该限制，该二维码将自动失效。</p>
     * @param integer $FlowEffectiveDay <p>合同流程的签署有效期限，若未设定签署截止日期，则默认为自合同流程创建起的7天内截止。 若在签署截止日期前未完成签署，合同状态将变更为已过期，从而导致合同无效。 最长设定期限不得超过30天。</p>
     * @param integer $FlowDisplayType <p>在短信通知、填写、签署流程中，若标题、按钮、合同详情等地方存在“合同”字样时，可根据此配置指定文案，可选文案如下：<br> <ul><li> <b>0</b> :合同（默认值）</li> <li> <b>1</b> :文件</li> <li> <b>2</b> :协议</li><li> <b>3</b> :文书</li></ul></p><p>效果如下:<br><img src="https://qcloudimg.tencent-cloud.cn/raw/e4a2c4d638717cc901d3dbd5137c9bbc.png" alt="FlowDisplayType"></p><p>枚举值：</p><ul><li>0： 合同</li><li>1： 文件</li><li>2： 协议</li><li>3： 文书</li></ul><p>默认值：0</p>
     * @param integer $QrEffectiveDay <p>二维码的有效期限，默认为7天，最高设定不得超过90天。 一旦超过二维码的有效期限，该二维码将自动失效。</p>
     * @param array $Restrictions <p>指定签署人信息。 在指定签署人后，仅允许特定签署人通过扫描二维码进行签署。</p>
     * @param array $ApproverComponentLimitTypes <p>指定签署方经办人控件类型是个人印章签署控件（SIGN_SIGNATURE） 时，可选的签名方式。</p>
     * @param string $CallbackUrl <p>已废弃，回调配置统一使用企业应用管理-应用集成-第三方应用中的配置<br><br> 通过一码多扫二维码发起的合同，回调消息可参考文档 https://qian.tencent.com/developers/partner/callback_types_contracts_sign<br><br> 用户通过签署二维码发起合同时，因企业额度不足导致失败 会触发签署二维码相关回调,具体参考文档 https://qian.tencent.com/developers/partner/callback_types_commons#%E7%AD%BE%E7%BD%B2%E4%BA%8C%E7%BB%B4%E7%A0%81%E7%9B%B8%E5%85%B3%E5%9B%9E%E8%B0%83</p>
     * @param ApproverRestriction $ApproverRestrictions <p>限制二维码用户条件（已弃用）</p>
     * @param UserInfo $Operator <p>暂未开放</p>
     * @param boolean $ForbidPersonalMultipleSign <p>禁止个人用户重复签署，默认不禁止，即同一用户可多次扫码签署多份合同。若要求同一用户仅能扫码签署一份合同，请传入true。</p>
     * @param boolean $FlowNameAppendScannerInfo <p>合同流程名称是否应包含扫码签署人的信息，且遵循特定格式（flowname-姓名-手机号后四位）。 例如，通过参数FlowName设定的扫码发起合同名称为“员工入职合同”，当扫码人张三（手机号18800009527）扫码签署时，合同名称将自动生成为“员工入职合同-张三-9527”。</p>
     * @param string $QrCodeName <p>签署二维码的名称（可自定义此名称），长度不能超过200，只能由中文、字母、数字和下划线组成,会在生成的二维码图片上展示，若为空，则使用FlowName</p>
     * @param integer $QrCodeExpiredOn <p>签署二维码截止时间，格式为Unix标准时间戳（秒），如果未设置签署截止时间，则默认为签署二维码创建后的7天时截止，最长可设置为签署二维码创建后的365天时截止。</p>
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

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("FlowName",$param) and $param["FlowName"] !== null) {
            $this->FlowName = $param["FlowName"];
        }

        if (array_key_exists("MaxFlowNum",$param) and $param["MaxFlowNum"] !== null) {
            $this->MaxFlowNum = $param["MaxFlowNum"];
        }

        if (array_key_exists("FlowEffectiveDay",$param) and $param["FlowEffectiveDay"] !== null) {
            $this->FlowEffectiveDay = $param["FlowEffectiveDay"];
        }

        if (array_key_exists("FlowDisplayType",$param) and $param["FlowDisplayType"] !== null) {
            $this->FlowDisplayType = $param["FlowDisplayType"];
        }

        if (array_key_exists("QrEffectiveDay",$param) and $param["QrEffectiveDay"] !== null) {
            $this->QrEffectiveDay = $param["QrEffectiveDay"];
        }

        if (array_key_exists("Restrictions",$param) and $param["Restrictions"] !== null) {
            $this->Restrictions = [];
            foreach ($param["Restrictions"] as $key => $value){
                $obj = new ApproverRestriction();
                $obj->deserialize($value);
                array_push($this->Restrictions, $obj);
            }
        }

        if (array_key_exists("ApproverComponentLimitTypes",$param) and $param["ApproverComponentLimitTypes"] !== null) {
            $this->ApproverComponentLimitTypes = [];
            foreach ($param["ApproverComponentLimitTypes"] as $key => $value){
                $obj = new ApproverComponentLimitType();
                $obj->deserialize($value);
                array_push($this->ApproverComponentLimitTypes, $obj);
            }
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }

        if (array_key_exists("ApproverRestrictions",$param) and $param["ApproverRestrictions"] !== null) {
            $this->ApproverRestrictions = new ApproverRestriction();
            $this->ApproverRestrictions->deserialize($param["ApproverRestrictions"]);
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("ForbidPersonalMultipleSign",$param) and $param["ForbidPersonalMultipleSign"] !== null) {
            $this->ForbidPersonalMultipleSign = $param["ForbidPersonalMultipleSign"];
        }

        if (array_key_exists("FlowNameAppendScannerInfo",$param) and $param["FlowNameAppendScannerInfo"] !== null) {
            $this->FlowNameAppendScannerInfo = $param["FlowNameAppendScannerInfo"];
        }

        if (array_key_exists("QrCodeName",$param) and $param["QrCodeName"] !== null) {
            $this->QrCodeName = $param["QrCodeName"];
        }

        if (array_key_exists("QrCodeExpiredOn",$param) and $param["QrCodeExpiredOn"] !== null) {
            $this->QrCodeExpiredOn = $param["QrCodeExpiredOn"];
        }
    }
}
