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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DetectAuth请求参数结构体
 *
 * @method string getRuleId() 获取<p>业务流程ID。</p><ul><li>用于细分客户使用场景, 可为业务配置不同的业务流程。</li><li>申请开通服务后，登录腾讯云<a href="https://console.cloud.tencent.com/faceid">慧眼人脸核身控制</a>进行创建，审核通过后即可调用。</li><li>如有疑问，请添加<a href="https://cloud.tencent.com/document/product/1007/56130">腾讯云人脸核身小助手</a>进行咨询。</li></ul>
 * @method void setRuleId(string $RuleId) 设置<p>业务流程ID。</p><ul><li>用于细分客户使用场景, 可为业务配置不同的业务流程。</li><li>申请开通服务后，登录腾讯云<a href="https://console.cloud.tencent.com/faceid">慧眼人脸核身控制</a>进行创建，审核通过后即可调用。</li><li>如有疑问，请添加<a href="https://cloud.tencent.com/document/product/1007/56130">腾讯云人脸核身小助手</a>进行咨询。</li></ul>
 * @method string getTerminalType() 获取<p>本接口不需要传递此参数。</p>
 * @method void setTerminalType(string $TerminalType) 设置<p>本接口不需要传递此参数。</p>
 * @method string getIdCard() 获取<p>验证人的身份证号码。</p><ul><li>调用 detectAuth 时，该字段是否必传，以在<a href="https://console.cloud.tencent.com/faceid/access">控制台</a>申请 ruleId 时的配置提示为准，具体必填字段请参阅控制台界面。</li><li>若身份证号包含字母，该字母必须为大写 X，小写 x 将无法通过校验。</li></ul>
 * @method void setIdCard(string $IdCard) 设置<p>验证人的身份证号码。</p><ul><li>调用 detectAuth 时，该字段是否必传，以在<a href="https://console.cloud.tencent.com/faceid/access">控制台</a>申请 ruleId 时的配置提示为准，具体必填字段请参阅控制台界面。</li><li>若身份证号包含字母，该字母必须为大写 X，小写 x 将无法通过校验。</li></ul>
 * @method string getName() 获取<p>验证人的姓名。</p><ul><li>调用 detectAuth 时，该字段是否必传，以在<a href="https://console.cloud.tencent.com/faceid/access">控制台</a>申请 ruleId 时的配置提示为准，具体必填字段请参阅控制台界面。</li><li>最长长度32位。中文请使用UTF-8编码。</li></ul>
 * @method void setName(string $Name) 设置<p>验证人的姓名。</p><ul><li>调用 detectAuth 时，该字段是否必传，以在<a href="https://console.cloud.tencent.com/faceid/access">控制台</a>申请 ruleId 时的配置提示为准，具体必填字段请参阅控制台界面。</li><li>最长长度32位。中文请使用UTF-8编码。</li></ul>
 * @method string getRedirectUrl() 获取<p>认证结束后重定向的回调链接地址，仅微信H5场景使用。</p><ul><li>最长长度1024位。</li><li>默认值：[腾讯云人脸核身产品介绍页](URL Here)https://cloud.tencent.com/product/faceid?Is=sdk-topnav</li></ul>
 * @method void setRedirectUrl(string $RedirectUrl) 设置<p>认证结束后重定向的回调链接地址，仅微信H5场景使用。</p><ul><li>最长长度1024位。</li><li>默认值：[腾讯云人脸核身产品介绍页](URL Here)https://cloud.tencent.com/product/faceid?Is=sdk-topnav</li></ul>
 * @method string getExtra() 获取<p>透传字段，在获取验证结果时返回。</p><ul><li>最长长度1024位。</li></ul>
 * @method void setExtra(string $Extra) 设置<p>透传字段，在获取验证结果时返回。</p><ul><li>最长长度1024位。</li></ul>
 * @method string getImageBase64() 获取<p>用于人脸比对的图像数据，使用base64编码。</p><ul><li>Base64编码后的图片数据大小不超过3M。</li><li>仅支持jpg、png格式。</li><li>请使用标准的Base64编码方式(带=补位)，编码规范参考RFC4648。</li></ul>
 * @method void setImageBase64(string $ImageBase64) 设置<p>用于人脸比对的图像数据，使用base64编码。</p><ul><li>Base64编码后的图片数据大小不超过3M。</li><li>仅支持jpg、png格式。</li><li>请使用标准的Base64编码方式(带=补位)，编码规范参考RFC4648。</li></ul>
 * @method Encryption getEncryption() 获取<p>敏感数据加密信息。对传入信息（姓名、身份证号）有加密需求的用户可使用此参数，详情请点击左侧链接。</p>
 * @method void setEncryption(Encryption $Encryption) 设置<p>敏感数据加密信息。对传入信息（姓名、身份证号）有加密需求的用户可使用此参数，详情请点击左侧链接。</p>
 * @method string getIntentionVerifyText() 获取<p>意愿核身（朗读模式）使用的文案。</p><ul><li>若未使用意愿核身（朗读模式），则该字段无需传入。</li><li>最长可接受120的字符串长度。</li></ul>
 * @method void setIntentionVerifyText(string $IntentionVerifyText) 设置<p>意愿核身（朗读模式）使用的文案。</p><ul><li>若未使用意愿核身（朗读模式），则该字段无需传入。</li><li>最长可接受120的字符串长度。</li></ul>
 * @method array getIntentionQuestions() 获取<p>意愿核身（语音播报+语音回答模式）使用的文案。</p><ul><li>包括：系统语音播报的文本、需要核验的标准文本。</li><li>问答模式支持1-10轮（不超过10轮）的意愿确认。</li></ul>
 * @method void setIntentionQuestions(array $IntentionQuestions) 设置<p>意愿核身（语音播报+语音回答模式）使用的文案。</p><ul><li>包括：系统语音播报的文本、需要核验的标准文本。</li><li>问答模式支持1-10轮（不超过10轮）的意愿确认。</li></ul>
 * @method array getIntentionActions() 获取<p>意愿核身（点头确认模式）使用的文案。</p><ul><li>若未使用意愿核身（点头确认模式），则该字段无需传入。</li><li>点头确认模式支持1-10轮（不超过10轮）的意愿确认。</li></ul>
 * @method void setIntentionActions(array $IntentionActions) 设置<p>意愿核身（点头确认模式）使用的文案。</p><ul><li>若未使用意愿核身（点头确认模式），则该字段无需传入。</li><li>点头确认模式支持1-10轮（不超过10轮）的意愿确认。</li></ul>
 * @method RuleIdConfig getConfig() 获取<p>意愿核身流程配置。</p>
 * @method void setConfig(RuleIdConfig $Config) 设置<p>意愿核身流程配置。</p>
 */
class DetectAuthRequest extends AbstractModel
{
    /**
     * @var string <p>业务流程ID。</p><ul><li>用于细分客户使用场景, 可为业务配置不同的业务流程。</li><li>申请开通服务后，登录腾讯云<a href="https://console.cloud.tencent.com/faceid">慧眼人脸核身控制</a>进行创建，审核通过后即可调用。</li><li>如有疑问，请添加<a href="https://cloud.tencent.com/document/product/1007/56130">腾讯云人脸核身小助手</a>进行咨询。</li></ul>
     */
    public $RuleId;

    /**
     * @var string <p>本接口不需要传递此参数。</p>
     */
    public $TerminalType;

    /**
     * @var string <p>验证人的身份证号码。</p><ul><li>调用 detectAuth 时，该字段是否必传，以在<a href="https://console.cloud.tencent.com/faceid/access">控制台</a>申请 ruleId 时的配置提示为准，具体必填字段请参阅控制台界面。</li><li>若身份证号包含字母，该字母必须为大写 X，小写 x 将无法通过校验。</li></ul>
     */
    public $IdCard;

    /**
     * @var string <p>验证人的姓名。</p><ul><li>调用 detectAuth 时，该字段是否必传，以在<a href="https://console.cloud.tencent.com/faceid/access">控制台</a>申请 ruleId 时的配置提示为准，具体必填字段请参阅控制台界面。</li><li>最长长度32位。中文请使用UTF-8编码。</li></ul>
     */
    public $Name;

    /**
     * @var string <p>认证结束后重定向的回调链接地址，仅微信H5场景使用。</p><ul><li>最长长度1024位。</li><li>默认值：[腾讯云人脸核身产品介绍页](URL Here)https://cloud.tencent.com/product/faceid?Is=sdk-topnav</li></ul>
     */
    public $RedirectUrl;

    /**
     * @var string <p>透传字段，在获取验证结果时返回。</p><ul><li>最长长度1024位。</li></ul>
     */
    public $Extra;

    /**
     * @var string <p>用于人脸比对的图像数据，使用base64编码。</p><ul><li>Base64编码后的图片数据大小不超过3M。</li><li>仅支持jpg、png格式。</li><li>请使用标准的Base64编码方式(带=补位)，编码规范参考RFC4648。</li></ul>
     */
    public $ImageBase64;

    /**
     * @var Encryption <p>敏感数据加密信息。对传入信息（姓名、身份证号）有加密需求的用户可使用此参数，详情请点击左侧链接。</p>
     */
    public $Encryption;

    /**
     * @var string <p>意愿核身（朗读模式）使用的文案。</p><ul><li>若未使用意愿核身（朗读模式），则该字段无需传入。</li><li>最长可接受120的字符串长度。</li></ul>
     */
    public $IntentionVerifyText;

    /**
     * @var array <p>意愿核身（语音播报+语音回答模式）使用的文案。</p><ul><li>包括：系统语音播报的文本、需要核验的标准文本。</li><li>问答模式支持1-10轮（不超过10轮）的意愿确认。</li></ul>
     */
    public $IntentionQuestions;

    /**
     * @var array <p>意愿核身（点头确认模式）使用的文案。</p><ul><li>若未使用意愿核身（点头确认模式），则该字段无需传入。</li><li>点头确认模式支持1-10轮（不超过10轮）的意愿确认。</li></ul>
     */
    public $IntentionActions;

    /**
     * @var RuleIdConfig <p>意愿核身流程配置。</p>
     */
    public $Config;

    /**
     * @param string $RuleId <p>业务流程ID。</p><ul><li>用于细分客户使用场景, 可为业务配置不同的业务流程。</li><li>申请开通服务后，登录腾讯云<a href="https://console.cloud.tencent.com/faceid">慧眼人脸核身控制</a>进行创建，审核通过后即可调用。</li><li>如有疑问，请添加<a href="https://cloud.tencent.com/document/product/1007/56130">腾讯云人脸核身小助手</a>进行咨询。</li></ul>
     * @param string $TerminalType <p>本接口不需要传递此参数。</p>
     * @param string $IdCard <p>验证人的身份证号码。</p><ul><li>调用 detectAuth 时，该字段是否必传，以在<a href="https://console.cloud.tencent.com/faceid/access">控制台</a>申请 ruleId 时的配置提示为准，具体必填字段请参阅控制台界面。</li><li>若身份证号包含字母，该字母必须为大写 X，小写 x 将无法通过校验。</li></ul>
     * @param string $Name <p>验证人的姓名。</p><ul><li>调用 detectAuth 时，该字段是否必传，以在<a href="https://console.cloud.tencent.com/faceid/access">控制台</a>申请 ruleId 时的配置提示为准，具体必填字段请参阅控制台界面。</li><li>最长长度32位。中文请使用UTF-8编码。</li></ul>
     * @param string $RedirectUrl <p>认证结束后重定向的回调链接地址，仅微信H5场景使用。</p><ul><li>最长长度1024位。</li><li>默认值：[腾讯云人脸核身产品介绍页](URL Here)https://cloud.tencent.com/product/faceid?Is=sdk-topnav</li></ul>
     * @param string $Extra <p>透传字段，在获取验证结果时返回。</p><ul><li>最长长度1024位。</li></ul>
     * @param string $ImageBase64 <p>用于人脸比对的图像数据，使用base64编码。</p><ul><li>Base64编码后的图片数据大小不超过3M。</li><li>仅支持jpg、png格式。</li><li>请使用标准的Base64编码方式(带=补位)，编码规范参考RFC4648。</li></ul>
     * @param Encryption $Encryption <p>敏感数据加密信息。对传入信息（姓名、身份证号）有加密需求的用户可使用此参数，详情请点击左侧链接。</p>
     * @param string $IntentionVerifyText <p>意愿核身（朗读模式）使用的文案。</p><ul><li>若未使用意愿核身（朗读模式），则该字段无需传入。</li><li>最长可接受120的字符串长度。</li></ul>
     * @param array $IntentionQuestions <p>意愿核身（语音播报+语音回答模式）使用的文案。</p><ul><li>包括：系统语音播报的文本、需要核验的标准文本。</li><li>问答模式支持1-10轮（不超过10轮）的意愿确认。</li></ul>
     * @param array $IntentionActions <p>意愿核身（点头确认模式）使用的文案。</p><ul><li>若未使用意愿核身（点头确认模式），则该字段无需传入。</li><li>点头确认模式支持1-10轮（不超过10轮）的意愿确认。</li></ul>
     * @param RuleIdConfig $Config <p>意愿核身流程配置。</p>
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("TerminalType",$param) and $param["TerminalType"] !== null) {
            $this->TerminalType = $param["TerminalType"];
        }

        if (array_key_exists("IdCard",$param) and $param["IdCard"] !== null) {
            $this->IdCard = $param["IdCard"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("RedirectUrl",$param) and $param["RedirectUrl"] !== null) {
            $this->RedirectUrl = $param["RedirectUrl"];
        }

        if (array_key_exists("Extra",$param) and $param["Extra"] !== null) {
            $this->Extra = $param["Extra"];
        }

        if (array_key_exists("ImageBase64",$param) and $param["ImageBase64"] !== null) {
            $this->ImageBase64 = $param["ImageBase64"];
        }

        if (array_key_exists("Encryption",$param) and $param["Encryption"] !== null) {
            $this->Encryption = new Encryption();
            $this->Encryption->deserialize($param["Encryption"]);
        }

        if (array_key_exists("IntentionVerifyText",$param) and $param["IntentionVerifyText"] !== null) {
            $this->IntentionVerifyText = $param["IntentionVerifyText"];
        }

        if (array_key_exists("IntentionQuestions",$param) and $param["IntentionQuestions"] !== null) {
            $this->IntentionQuestions = [];
            foreach ($param["IntentionQuestions"] as $key => $value){
                $obj = new IntentionQuestion();
                $obj->deserialize($value);
                array_push($this->IntentionQuestions, $obj);
            }
        }

        if (array_key_exists("IntentionActions",$param) and $param["IntentionActions"] !== null) {
            $this->IntentionActions = [];
            foreach ($param["IntentionActions"] as $key => $value){
                $obj = new IntentionActionConfig();
                $obj->deserialize($value);
                array_push($this->IntentionActions, $obj);
            }
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = new RuleIdConfig();
            $this->Config->deserialize($param["Config"]);
        }
    }
}
