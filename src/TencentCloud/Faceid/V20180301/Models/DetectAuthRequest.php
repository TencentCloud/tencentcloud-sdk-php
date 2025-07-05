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
 * @method string getRuleId() 获取业务流程ID。
- 用于细分客户使用场景, 可为业务配置不同的业务流程。
- 申请开通服务后，登录腾讯云[慧眼人脸核身控制](https://console.cloud.tencent.com/faceid)进行创建，审核通过后即可调用。
- 如有疑问，请添加[腾讯云人脸核身小助手](https://cloud.tencent.com/document/product/1007/56130)进行咨询。
 * @method void setRuleId(string $RuleId) 设置业务流程ID。
- 用于细分客户使用场景, 可为业务配置不同的业务流程。
- 申请开通服务后，登录腾讯云[慧眼人脸核身控制](https://console.cloud.tencent.com/faceid)进行创建，审核通过后即可调用。
- 如有疑问，请添加[腾讯云人脸核身小助手](https://cloud.tencent.com/document/product/1007/56130)进行咨询。
 * @method string getTerminalType() 获取本接口不需要传递此参数。
 * @method void setTerminalType(string $TerminalType) 设置本接口不需要传递此参数。
 * @method string getIdCard() 获取验证人的身份证号码。
- 是否必传基于[控制台](https://console.cloud.tencent.com/faceid/access)申请业务流程时配置的提示。

 * @method void setIdCard(string $IdCard) 设置验证人的身份证号码。
- 是否必传基于[控制台](https://console.cloud.tencent.com/faceid/access)申请业务流程时配置的提示。

 * @method string getName() 获取验证人的姓名。
- 是否必传基于[控制台](https://console.cloud.tencent.com/faceid/access)申请业务流程时配置的提示。
- 最长长度32位。中文请使用UTF-8编码。
 * @method void setName(string $Name) 设置验证人的姓名。
- 是否必传基于[控制台](https://console.cloud.tencent.com/faceid/access)申请业务流程时配置的提示。
- 最长长度32位。中文请使用UTF-8编码。
 * @method string getRedirectUrl() 获取认证结束后重定向的回调链接地址。
- 最长长度1024位。
 * @method void setRedirectUrl(string $RedirectUrl) 设置认证结束后重定向的回调链接地址。
- 最长长度1024位。
 * @method string getExtra() 获取透传字段，在获取验证结果时返回。
- 最长长度1024位。
 * @method void setExtra(string $Extra) 设置透传字段，在获取验证结果时返回。
- 最长长度1024位。
 * @method string getImageBase64() 获取用于人脸比对的图像数据，使用base64编码。
- Base64编码后的图片数据大小不超过3M。
- 仅支持jpg、png格式。
- 请使用标准的Base64编码方式(带=补位)，编码规范参考RFC4648。
 * @method void setImageBase64(string $ImageBase64) 设置用于人脸比对的图像数据，使用base64编码。
- Base64编码后的图片数据大小不超过3M。
- 仅支持jpg、png格式。
- 请使用标准的Base64编码方式(带=补位)，编码规范参考RFC4648。
 * @method Encryption getEncryption() 获取敏感数据加密信息。对传入信息（姓名、身份证号）有加密需求的用户可使用此参数，详情请点击左侧链接。
 * @method void setEncryption(Encryption $Encryption) 设置敏感数据加密信息。对传入信息（姓名、身份证号）有加密需求的用户可使用此参数，详情请点击左侧链接。
 * @method string getIntentionVerifyText() 获取意愿核身（朗读模式）使用的文案。
- 若未使用意愿核身（朗读模式），则该字段无需传入。
- 最长可接受120的字符串长度。
 * @method void setIntentionVerifyText(string $IntentionVerifyText) 设置意愿核身（朗读模式）使用的文案。
- 若未使用意愿核身（朗读模式），则该字段无需传入。
- 最长可接受120的字符串长度。
 * @method array getIntentionQuestions() 获取意愿核身（语音播报+语音回答模式）使用的文案。
- 包括：系统语音播报的文本、需要核验的标准文本。
- 问答模式支持1-10轮（不超过10轮）的意愿确认。
 * @method void setIntentionQuestions(array $IntentionQuestions) 设置意愿核身（语音播报+语音回答模式）使用的文案。
- 包括：系统语音播报的文本、需要核验的标准文本。
- 问答模式支持1-10轮（不超过10轮）的意愿确认。
 * @method array getIntentionActions() 获取意愿核身（点头确认模式）使用的文案。
- 若未使用意愿核身（点头确认模式），则该字段无需传入。
- 点头确认模式支持1-10轮（不超过10轮）的意愿确认。
 * @method void setIntentionActions(array $IntentionActions) 设置意愿核身（点头确认模式）使用的文案。
- 若未使用意愿核身（点头确认模式），则该字段无需传入。
- 点头确认模式支持1-10轮（不超过10轮）的意愿确认。
 * @method RuleIdConfig getConfig() 获取意愿核身流程配置。
 * @method void setConfig(RuleIdConfig $Config) 设置意愿核身流程配置。
 */
class DetectAuthRequest extends AbstractModel
{
    /**
     * @var string 业务流程ID。
- 用于细分客户使用场景, 可为业务配置不同的业务流程。
- 申请开通服务后，登录腾讯云[慧眼人脸核身控制](https://console.cloud.tencent.com/faceid)进行创建，审核通过后即可调用。
- 如有疑问，请添加[腾讯云人脸核身小助手](https://cloud.tencent.com/document/product/1007/56130)进行咨询。
     */
    public $RuleId;

    /**
     * @var string 本接口不需要传递此参数。
     */
    public $TerminalType;

    /**
     * @var string 验证人的身份证号码。
- 是否必传基于[控制台](https://console.cloud.tencent.com/faceid/access)申请业务流程时配置的提示。

     */
    public $IdCard;

    /**
     * @var string 验证人的姓名。
- 是否必传基于[控制台](https://console.cloud.tencent.com/faceid/access)申请业务流程时配置的提示。
- 最长长度32位。中文请使用UTF-8编码。
     */
    public $Name;

    /**
     * @var string 认证结束后重定向的回调链接地址。
- 最长长度1024位。
     */
    public $RedirectUrl;

    /**
     * @var string 透传字段，在获取验证结果时返回。
- 最长长度1024位。
     */
    public $Extra;

    /**
     * @var string 用于人脸比对的图像数据，使用base64编码。
- Base64编码后的图片数据大小不超过3M。
- 仅支持jpg、png格式。
- 请使用标准的Base64编码方式(带=补位)，编码规范参考RFC4648。
     */
    public $ImageBase64;

    /**
     * @var Encryption 敏感数据加密信息。对传入信息（姓名、身份证号）有加密需求的用户可使用此参数，详情请点击左侧链接。
     */
    public $Encryption;

    /**
     * @var string 意愿核身（朗读模式）使用的文案。
- 若未使用意愿核身（朗读模式），则该字段无需传入。
- 最长可接受120的字符串长度。
     */
    public $IntentionVerifyText;

    /**
     * @var array 意愿核身（语音播报+语音回答模式）使用的文案。
- 包括：系统语音播报的文本、需要核验的标准文本。
- 问答模式支持1-10轮（不超过10轮）的意愿确认。
     */
    public $IntentionQuestions;

    /**
     * @var array 意愿核身（点头确认模式）使用的文案。
- 若未使用意愿核身（点头确认模式），则该字段无需传入。
- 点头确认模式支持1-10轮（不超过10轮）的意愿确认。
     */
    public $IntentionActions;

    /**
     * @var RuleIdConfig 意愿核身流程配置。
     */
    public $Config;

    /**
     * @param string $RuleId 业务流程ID。
- 用于细分客户使用场景, 可为业务配置不同的业务流程。
- 申请开通服务后，登录腾讯云[慧眼人脸核身控制](https://console.cloud.tencent.com/faceid)进行创建，审核通过后即可调用。
- 如有疑问，请添加[腾讯云人脸核身小助手](https://cloud.tencent.com/document/product/1007/56130)进行咨询。
     * @param string $TerminalType 本接口不需要传递此参数。
     * @param string $IdCard 验证人的身份证号码。
- 是否必传基于[控制台](https://console.cloud.tencent.com/faceid/access)申请业务流程时配置的提示。

     * @param string $Name 验证人的姓名。
- 是否必传基于[控制台](https://console.cloud.tencent.com/faceid/access)申请业务流程时配置的提示。
- 最长长度32位。中文请使用UTF-8编码。
     * @param string $RedirectUrl 认证结束后重定向的回调链接地址。
- 最长长度1024位。
     * @param string $Extra 透传字段，在获取验证结果时返回。
- 最长长度1024位。
     * @param string $ImageBase64 用于人脸比对的图像数据，使用base64编码。
- Base64编码后的图片数据大小不超过3M。
- 仅支持jpg、png格式。
- 请使用标准的Base64编码方式(带=补位)，编码规范参考RFC4648。
     * @param Encryption $Encryption 敏感数据加密信息。对传入信息（姓名、身份证号）有加密需求的用户可使用此参数，详情请点击左侧链接。
     * @param string $IntentionVerifyText 意愿核身（朗读模式）使用的文案。
- 若未使用意愿核身（朗读模式），则该字段无需传入。
- 最长可接受120的字符串长度。
     * @param array $IntentionQuestions 意愿核身（语音播报+语音回答模式）使用的文案。
- 包括：系统语音播报的文本、需要核验的标准文本。
- 问答模式支持1-10轮（不超过10轮）的意愿确认。
     * @param array $IntentionActions 意愿核身（点头确认模式）使用的文案。
- 若未使用意愿核身（点头确认模式），则该字段无需传入。
- 点头确认模式支持1-10轮（不超过10轮）的意愿确认。
     * @param RuleIdConfig $Config 意愿核身流程配置。
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
