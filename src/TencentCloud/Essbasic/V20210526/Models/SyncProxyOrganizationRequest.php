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
 * SyncProxyOrganization请求参数结构体
 *
 * @method Agent getAgent() 获取关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li>
</ul>

 * @method void setAgent(Agent $Agent) 设置关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li>
</ul>

 * @method string getProxyOrganizationName() 获取第三方平台子客企业名称，请确认该名称与企业营业执照中注册的名称一致。
注: `如果名称中包含英文括号()，请使用中文括号（）代替。`
 * @method void setProxyOrganizationName(string $ProxyOrganizationName) 设置第三方平台子客企业名称，请确认该名称与企业营业执照中注册的名称一致。
注: `如果名称中包含英文括号()，请使用中文括号（）代替。`
 * @method string getBusinessLicense() 获取营业执照正面照(PNG或JPG) base64格式, 大小不超过5M
 * @method void setBusinessLicense(string $BusinessLicense) 设置营业执照正面照(PNG或JPG) base64格式, 大小不超过5M
 * @method string getUniformSocialCreditCode() 获取第三方平台子客企业统一社会信用代码，最大长度200个字符
 * @method void setUniformSocialCreditCode(string $UniformSocialCreditCode) 设置第三方平台子客企业统一社会信用代码，最大长度200个字符
 * @method string getProxyLegalName() 获取第三方平台子客企业法定代表人的名字
 * @method void setProxyLegalName(string $ProxyLegalName) 设置第三方平台子客企业法定代表人的名字
 * @method UserInfo getOperator() 获取暂未开放
 * @method void setOperator(UserInfo $Operator) 设置暂未开放
 * @method string getProxyLegalIdCardType() 获取第三方平台子客企业法定代表人的证件类型，支持以下类型
<ul><li>ID_CARD : 中国大陆居民身份证 (默认值)</li></ul>
注: `现在仅支持ID_CARD中国大陆居民身份证类型`
 * @method void setProxyLegalIdCardType(string $ProxyLegalIdCardType) 设置第三方平台子客企业法定代表人的证件类型，支持以下类型
<ul><li>ID_CARD : 中国大陆居民身份证 (默认值)</li></ul>
注: `现在仅支持ID_CARD中国大陆居民身份证类型`
 * @method string getProxyLegalIdCardNumber() 获取第三方平台子客企业法定代表人的证件号码, 应符合以下规则
<ul><li>中国大陆居民身份证号码应为18位字符串，由数字和大写字母X组成（如存在X，请大写）。</li></ul>
 * @method void setProxyLegalIdCardNumber(string $ProxyLegalIdCardNumber) 设置第三方平台子客企业法定代表人的证件号码, 应符合以下规则
<ul><li>中国大陆居民身份证号码应为18位字符串，由数字和大写字母X组成（如存在X，请大写）。</li></ul>
 * @method string getProxyAddress() 获取第三方平台子客企业详细住所，最大长度500个字符

注：`需要符合省市区详情的格式例如： XX省XX市XX区街道具体地址`
 * @method void setProxyAddress(string $ProxyAddress) 设置第三方平台子客企业详细住所，最大长度500个字符

注：`需要符合省市区详情的格式例如： XX省XX市XX区街道具体地址`
 */
class SyncProxyOrganizationRequest extends AbstractModel
{
    /**
     * @var Agent 关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li>
</ul>

     */
    public $Agent;

    /**
     * @var string 第三方平台子客企业名称，请确认该名称与企业营业执照中注册的名称一致。
注: `如果名称中包含英文括号()，请使用中文括号（）代替。`
     */
    public $ProxyOrganizationName;

    /**
     * @var string 营业执照正面照(PNG或JPG) base64格式, 大小不超过5M
     */
    public $BusinessLicense;

    /**
     * @var string 第三方平台子客企业统一社会信用代码，最大长度200个字符
     */
    public $UniformSocialCreditCode;

    /**
     * @var string 第三方平台子客企业法定代表人的名字
     */
    public $ProxyLegalName;

    /**
     * @var UserInfo 暂未开放
     * @deprecated
     */
    public $Operator;

    /**
     * @var string 第三方平台子客企业法定代表人的证件类型，支持以下类型
<ul><li>ID_CARD : 中国大陆居民身份证 (默认值)</li></ul>
注: `现在仅支持ID_CARD中国大陆居民身份证类型`
     */
    public $ProxyLegalIdCardType;

    /**
     * @var string 第三方平台子客企业法定代表人的证件号码, 应符合以下规则
<ul><li>中国大陆居民身份证号码应为18位字符串，由数字和大写字母X组成（如存在X，请大写）。</li></ul>
     */
    public $ProxyLegalIdCardNumber;

    /**
     * @var string 第三方平台子客企业详细住所，最大长度500个字符

注：`需要符合省市区详情的格式例如： XX省XX市XX区街道具体地址`
     */
    public $ProxyAddress;

    /**
     * @param Agent $Agent 关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li>
</ul>

     * @param string $ProxyOrganizationName 第三方平台子客企业名称，请确认该名称与企业营业执照中注册的名称一致。
注: `如果名称中包含英文括号()，请使用中文括号（）代替。`
     * @param string $BusinessLicense 营业执照正面照(PNG或JPG) base64格式, 大小不超过5M
     * @param string $UniformSocialCreditCode 第三方平台子客企业统一社会信用代码，最大长度200个字符
     * @param string $ProxyLegalName 第三方平台子客企业法定代表人的名字
     * @param UserInfo $Operator 暂未开放
     * @param string $ProxyLegalIdCardType 第三方平台子客企业法定代表人的证件类型，支持以下类型
<ul><li>ID_CARD : 中国大陆居民身份证 (默认值)</li></ul>
注: `现在仅支持ID_CARD中国大陆居民身份证类型`
     * @param string $ProxyLegalIdCardNumber 第三方平台子客企业法定代表人的证件号码, 应符合以下规则
<ul><li>中国大陆居民身份证号码应为18位字符串，由数字和大写字母X组成（如存在X，请大写）。</li></ul>
     * @param string $ProxyAddress 第三方平台子客企业详细住所，最大长度500个字符

注：`需要符合省市区详情的格式例如： XX省XX市XX区街道具体地址`
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

        if (array_key_exists("ProxyOrganizationName",$param) and $param["ProxyOrganizationName"] !== null) {
            $this->ProxyOrganizationName = $param["ProxyOrganizationName"];
        }

        if (array_key_exists("BusinessLicense",$param) and $param["BusinessLicense"] !== null) {
            $this->BusinessLicense = $param["BusinessLicense"];
        }

        if (array_key_exists("UniformSocialCreditCode",$param) and $param["UniformSocialCreditCode"] !== null) {
            $this->UniformSocialCreditCode = $param["UniformSocialCreditCode"];
        }

        if (array_key_exists("ProxyLegalName",$param) and $param["ProxyLegalName"] !== null) {
            $this->ProxyLegalName = $param["ProxyLegalName"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("ProxyLegalIdCardType",$param) and $param["ProxyLegalIdCardType"] !== null) {
            $this->ProxyLegalIdCardType = $param["ProxyLegalIdCardType"];
        }

        if (array_key_exists("ProxyLegalIdCardNumber",$param) and $param["ProxyLegalIdCardNumber"] !== null) {
            $this->ProxyLegalIdCardNumber = $param["ProxyLegalIdCardNumber"];
        }

        if (array_key_exists("ProxyAddress",$param) and $param["ProxyAddress"] !== null) {
            $this->ProxyAddress = $param["ProxyAddress"];
        }
    }
}
