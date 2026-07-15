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
 * @method Agent getAgent() 获取<p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p><p>此接口下面信息必填。</p><ul><li>渠道应用标识:  Agent.AppId</li><li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li></ul>
 * @method void setAgent(Agent $Agent) 设置<p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p><p>此接口下面信息必填。</p><ul><li>渠道应用标识:  Agent.AppId</li><li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li></ul>
 * @method string getProxyOrganizationName() 获取<p>第三方平台子客企业名称，请确认该名称与企业营业执照中注册的名称一致。<br>注: <code>如果名称中包含英文括号()，请使用中文括号（）代替。</code></p>
 * @method void setProxyOrganizationName(string $ProxyOrganizationName) 设置<p>第三方平台子客企业名称，请确认该名称与企业营业执照中注册的名称一致。<br>注: <code>如果名称中包含英文括号()，请使用中文括号（）代替。</code></p>
 * @method string getBusinessLicense() 获取<p>营业执照正面照(PNG或JPG) base64格式, 大小不超过5M</p>
 * @method void setBusinessLicense(string $BusinessLicense) 设置<p>营业执照正面照(PNG或JPG) base64格式, 大小不超过5M</p>
 * @method string getUniformSocialCreditCode() 获取<p>第三方平台子客企业统一社会信用代码，最大长度200个字符</p>
 * @method void setUniformSocialCreditCode(string $UniformSocialCreditCode) 设置<p>第三方平台子客企业统一社会信用代码，最大长度200个字符</p>
 * @method string getProxyLegalName() 获取<p>第三方平台子客企业法定代表人的名字</p>
 * @method void setProxyLegalName(string $ProxyLegalName) 设置<p>第三方平台子客企业法定代表人的名字</p>
 * @method UserInfo getOperator() 获取<p>暂未开放</p>
 * @method void setOperator(UserInfo $Operator) 设置<p>暂未开放</p>
 * @method string getProxyLegalIdCardType() 获取<p>第三方平台子客企业法定代表人的证件类型，支持以下类型</p><ul><li>ID_CARD : 中国大陆居民身份证 (默认值)</li></ul>注: <code>现在仅支持ID_CARD中国大陆居民身份证类型</code>
 * @method void setProxyLegalIdCardType(string $ProxyLegalIdCardType) 设置<p>第三方平台子客企业法定代表人的证件类型，支持以下类型</p><ul><li>ID_CARD : 中国大陆居民身份证 (默认值)</li></ul>注: <code>现在仅支持ID_CARD中国大陆居民身份证类型</code>
 * @method string getProxyLegalIdCardNumber() 获取<p>第三方平台子客企业法定代表人的证件号码, 应符合以下规则</p><ul><li>中国大陆居民身份证号码应为18位字符串，由数字和大写字母X组成（如存在X，请大写）。</li></ul>
 * @method void setProxyLegalIdCardNumber(string $ProxyLegalIdCardNumber) 设置<p>第三方平台子客企业法定代表人的证件号码, 应符合以下规则</p><ul><li>中国大陆居民身份证号码应为18位字符串，由数字和大写字母X组成（如存在X，请大写）。</li></ul>
 * @method string getProxyAddress() 获取<p>第三方平台子客企业详细住所，最大长度500个字符</p><p>注：<code>需要符合省市区详情的格式例如： XX省XX市XX区街道具体地址</code></p>
 * @method void setProxyAddress(string $ProxyAddress) 设置<p>第三方平台子客企业详细住所，最大长度500个字符</p><p>注：<code>需要符合省市区详情的格式例如： XX省XX市XX区街道具体地址</code></p>
 */
class SyncProxyOrganizationRequest extends AbstractModel
{
    /**
     * @var Agent <p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p><p>此接口下面信息必填。</p><ul><li>渠道应用标识:  Agent.AppId</li><li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li></ul>
     */
    public $Agent;

    /**
     * @var string <p>第三方平台子客企业名称，请确认该名称与企业营业执照中注册的名称一致。<br>注: <code>如果名称中包含英文括号()，请使用中文括号（）代替。</code></p>
     */
    public $ProxyOrganizationName;

    /**
     * @var string <p>营业执照正面照(PNG或JPG) base64格式, 大小不超过5M</p>
     */
    public $BusinessLicense;

    /**
     * @var string <p>第三方平台子客企业统一社会信用代码，最大长度200个字符</p>
     */
    public $UniformSocialCreditCode;

    /**
     * @var string <p>第三方平台子客企业法定代表人的名字</p>
     */
    public $ProxyLegalName;

    /**
     * @var UserInfo <p>暂未开放</p>
     * @deprecated
     */
    public $Operator;

    /**
     * @var string <p>第三方平台子客企业法定代表人的证件类型，支持以下类型</p><ul><li>ID_CARD : 中国大陆居民身份证 (默认值)</li></ul>注: <code>现在仅支持ID_CARD中国大陆居民身份证类型</code>
     */
    public $ProxyLegalIdCardType;

    /**
     * @var string <p>第三方平台子客企业法定代表人的证件号码, 应符合以下规则</p><ul><li>中国大陆居民身份证号码应为18位字符串，由数字和大写字母X组成（如存在X，请大写）。</li></ul>
     */
    public $ProxyLegalIdCardNumber;

    /**
     * @var string <p>第三方平台子客企业详细住所，最大长度500个字符</p><p>注：<code>需要符合省市区详情的格式例如： XX省XX市XX区街道具体地址</code></p>
     */
    public $ProxyAddress;

    /**
     * @param Agent $Agent <p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p><p>此接口下面信息必填。</p><ul><li>渠道应用标识:  Agent.AppId</li><li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li></ul>
     * @param string $ProxyOrganizationName <p>第三方平台子客企业名称，请确认该名称与企业营业执照中注册的名称一致。<br>注: <code>如果名称中包含英文括号()，请使用中文括号（）代替。</code></p>
     * @param string $BusinessLicense <p>营业执照正面照(PNG或JPG) base64格式, 大小不超过5M</p>
     * @param string $UniformSocialCreditCode <p>第三方平台子客企业统一社会信用代码，最大长度200个字符</p>
     * @param string $ProxyLegalName <p>第三方平台子客企业法定代表人的名字</p>
     * @param UserInfo $Operator <p>暂未开放</p>
     * @param string $ProxyLegalIdCardType <p>第三方平台子客企业法定代表人的证件类型，支持以下类型</p><ul><li>ID_CARD : 中国大陆居民身份证 (默认值)</li></ul>注: <code>现在仅支持ID_CARD中国大陆居民身份证类型</code>
     * @param string $ProxyLegalIdCardNumber <p>第三方平台子客企业法定代表人的证件号码, 应符合以下规则</p><ul><li>中国大陆居民身份证号码应为18位字符串，由数字和大写字母X组成（如存在X，请大写）。</li></ul>
     * @param string $ProxyAddress <p>第三方平台子客企业详细住所，最大长度500个字符</p><p>注：<code>需要符合省市区详情的格式例如： XX省XX市XX区街道具体地址</code></p>
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
