<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * @method Agent getAgent() 获取应用信息
此接口Agent.AppId、Agent.ProxyOrganizationOpenId必填
 * @method void setAgent(Agent $Agent) 设置应用信息
此接口Agent.AppId、Agent.ProxyOrganizationOpenId必填
 * @method string getProxyOrganizationName() 获取第三方平台子客企业名称，最大长度64个字符
 * @method void setProxyOrganizationName(string $ProxyOrganizationName) 设置第三方平台子客企业名称，最大长度64个字符
 * @method string getBusinessLicense() 获取营业执照正面照(PNG或JPG) base64格式, 大小不超过5M
 * @method void setBusinessLicense(string $BusinessLicense) 设置营业执照正面照(PNG或JPG) base64格式, 大小不超过5M
 * @method string getUniformSocialCreditCode() 获取第三方平台子客企业统一社会信用代码，最大长度200个字符
 * @method void setUniformSocialCreditCode(string $UniformSocialCreditCode) 设置第三方平台子客企业统一社会信用代码，最大长度200个字符
 * @method string getProxyLegalName() 获取第三方平台子客企业法人/负责人姓名
 * @method void setProxyLegalName(string $ProxyLegalName) 设置第三方平台子客企业法人/负责人姓名
 * @method UserInfo getOperator() 获取暂未开放
 * @method void setOperator(UserInfo $Operator) 设置暂未开放
 */
class SyncProxyOrganizationRequest extends AbstractModel
{
    /**
     * @var Agent 应用信息
此接口Agent.AppId、Agent.ProxyOrganizationOpenId必填
     */
    public $Agent;

    /**
     * @var string 第三方平台子客企业名称，最大长度64个字符
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
     * @var string 第三方平台子客企业法人/负责人姓名
     */
    public $ProxyLegalName;

    /**
     * @var UserInfo 暂未开放
     */
    public $Operator;

    /**
     * @param Agent $Agent 应用信息
此接口Agent.AppId、Agent.ProxyOrganizationOpenId必填
     * @param string $ProxyOrganizationName 第三方平台子客企业名称，最大长度64个字符
     * @param string $BusinessLicense 营业执照正面照(PNG或JPG) base64格式, 大小不超过5M
     * @param string $UniformSocialCreditCode 第三方平台子客企业统一社会信用代码，最大长度200个字符
     * @param string $ProxyLegalName 第三方平台子客企业法人/负责人姓名
     * @param UserInfo $Operator 暂未开放
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
    }
}
