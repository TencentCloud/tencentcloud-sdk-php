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
 * 企业认证信息参数， 需要保证这些参数跟营业执照中的信息一致。
 *
 * @method string getOrganizationName() 获取<p>组织机构名称。<br>请确认该名称与企业营业执照中注册的名称一致。<br>如果名称中包含英文括号()，请使用中文括号（）代替。</p>
 * @method void setOrganizationName(string $OrganizationName) 设置<p>组织机构名称。<br>请确认该名称与企业营业执照中注册的名称一致。<br>如果名称中包含英文括号()，请使用中文括号（）代替。</p>
 * @method string getUniformSocialCreditCode() 获取<p>组织机构企业统一社会信用代码。<br>请确认该企业统一社会信用代码与企业营业执照中注册的统一社会信用代码一致。</p>
 * @method void setUniformSocialCreditCode(string $UniformSocialCreditCode) 设置<p>组织机构企业统一社会信用代码。<br>请确认该企业统一社会信用代码与企业营业执照中注册的统一社会信用代码一致。</p>
 * @method string getLegalName() 获取<p>组织机构法人的姓名。<br>请确认该企业统一社会信用代码与企业营业执照中注册的法人姓名一致。</p>
 * @method void setLegalName(string $LegalName) 设置<p>组织机构法人的姓名。<br>请确认该企业统一社会信用代码与企业营业执照中注册的法人姓名一致。</p>
 * @method string getLegalIdCardType() 获取<p>组织机构法人的证件类型</p><p>枚举值：</p><ul><li>居民身份证： 中国大陆居民身份证</li></ul>
 * @method void setLegalIdCardType(string $LegalIdCardType) 设置<p>组织机构法人的证件类型</p><p>枚举值：</p><ul><li>居民身份证： 中国大陆居民身份证</li></ul>
 * @method string getLegalIdCardNumber() 获取<p>组织机构法人的证件号码</p>
 * @method void setLegalIdCardNumber(string $LegalIdCardNumber) 设置<p>组织机构法人的证件号码</p>
 * @method string getAdminName() 获取<p>组织机构超管姓名。</p>
 * @method void setAdminName(string $AdminName) 设置<p>组织机构超管姓名。</p>
 * @method string getAdminMobile() 获取<p>组织机构超管手机号。</p>
 * @method void setAdminMobile(string $AdminMobile) 设置<p>组织机构超管手机号。</p>
 * @method string getAdminIdCardType() 获取<p>组织机构超管证件类型</p><p>枚举值：</p><ul><li>居民身份证： 中国大陆居民身份证</li></ul>
 * @method void setAdminIdCardType(string $AdminIdCardType) 设置<p>组织机构超管证件类型</p><p>枚举值：</p><ul><li>居民身份证： 中国大陆居民身份证</li></ul>
 * @method string getAdminIdCardNumber() 获取<p>组织机构超管证件号码</p>
 * @method void setAdminIdCardNumber(string $AdminIdCardNumber) 设置<p>组织机构超管证件号码</p>
 * @method string getOldAdminName() 获取<p>原超管姓名</p>
 * @method void setOldAdminName(string $OldAdminName) 设置<p>原超管姓名</p>
 * @method string getOldAdminMobile() 获取<p>原超管手机号</p>
 * @method void setOldAdminMobile(string $OldAdminMobile) 设置<p>原超管手机号</p>
 * @method string getOldAdminIdCardType() 获取<p>原超管证件类型</p><p>枚举值：</p><ul><li>居民身份证： 中国大陆居民身份证</li></ul>
 * @method void setOldAdminIdCardType(string $OldAdminIdCardType) 设置<p>原超管证件类型</p><p>枚举值：</p><ul><li>居民身份证： 中国大陆居民身份证</li></ul>
 * @method string getOldAdminIdCardNumber() 获取<p>原超管证件号码</p>
 * @method void setOldAdminIdCardNumber(string $OldAdminIdCardNumber) 设置<p>原超管证件号码</p>
 */
class OrganizationCommonInfo extends AbstractModel
{
    /**
     * @var string <p>组织机构名称。<br>请确认该名称与企业营业执照中注册的名称一致。<br>如果名称中包含英文括号()，请使用中文括号（）代替。</p>
     */
    public $OrganizationName;

    /**
     * @var string <p>组织机构企业统一社会信用代码。<br>请确认该企业统一社会信用代码与企业营业执照中注册的统一社会信用代码一致。</p>
     */
    public $UniformSocialCreditCode;

    /**
     * @var string <p>组织机构法人的姓名。<br>请确认该企业统一社会信用代码与企业营业执照中注册的法人姓名一致。</p>
     */
    public $LegalName;

    /**
     * @var string <p>组织机构法人的证件类型</p><p>枚举值：</p><ul><li>居民身份证： 中国大陆居民身份证</li></ul>
     */
    public $LegalIdCardType;

    /**
     * @var string <p>组织机构法人的证件号码</p>
     */
    public $LegalIdCardNumber;

    /**
     * @var string <p>组织机构超管姓名。</p>
     */
    public $AdminName;

    /**
     * @var string <p>组织机构超管手机号。</p>
     */
    public $AdminMobile;

    /**
     * @var string <p>组织机构超管证件类型</p><p>枚举值：</p><ul><li>居民身份证： 中国大陆居民身份证</li></ul>
     */
    public $AdminIdCardType;

    /**
     * @var string <p>组织机构超管证件号码</p>
     */
    public $AdminIdCardNumber;

    /**
     * @var string <p>原超管姓名</p>
     */
    public $OldAdminName;

    /**
     * @var string <p>原超管手机号</p>
     */
    public $OldAdminMobile;

    /**
     * @var string <p>原超管证件类型</p><p>枚举值：</p><ul><li>居民身份证： 中国大陆居民身份证</li></ul>
     */
    public $OldAdminIdCardType;

    /**
     * @var string <p>原超管证件号码</p>
     */
    public $OldAdminIdCardNumber;

    /**
     * @param string $OrganizationName <p>组织机构名称。<br>请确认该名称与企业营业执照中注册的名称一致。<br>如果名称中包含英文括号()，请使用中文括号（）代替。</p>
     * @param string $UniformSocialCreditCode <p>组织机构企业统一社会信用代码。<br>请确认该企业统一社会信用代码与企业营业执照中注册的统一社会信用代码一致。</p>
     * @param string $LegalName <p>组织机构法人的姓名。<br>请确认该企业统一社会信用代码与企业营业执照中注册的法人姓名一致。</p>
     * @param string $LegalIdCardType <p>组织机构法人的证件类型</p><p>枚举值：</p><ul><li>居民身份证： 中国大陆居民身份证</li></ul>
     * @param string $LegalIdCardNumber <p>组织机构法人的证件号码</p>
     * @param string $AdminName <p>组织机构超管姓名。</p>
     * @param string $AdminMobile <p>组织机构超管手机号。</p>
     * @param string $AdminIdCardType <p>组织机构超管证件类型</p><p>枚举值：</p><ul><li>居民身份证： 中国大陆居民身份证</li></ul>
     * @param string $AdminIdCardNumber <p>组织机构超管证件号码</p>
     * @param string $OldAdminName <p>原超管姓名</p>
     * @param string $OldAdminMobile <p>原超管手机号</p>
     * @param string $OldAdminIdCardType <p>原超管证件类型</p><p>枚举值：</p><ul><li>居民身份证： 中国大陆居民身份证</li></ul>
     * @param string $OldAdminIdCardNumber <p>原超管证件号码</p>
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
        if (array_key_exists("OrganizationName",$param) and $param["OrganizationName"] !== null) {
            $this->OrganizationName = $param["OrganizationName"];
        }

        if (array_key_exists("UniformSocialCreditCode",$param) and $param["UniformSocialCreditCode"] !== null) {
            $this->UniformSocialCreditCode = $param["UniformSocialCreditCode"];
        }

        if (array_key_exists("LegalName",$param) and $param["LegalName"] !== null) {
            $this->LegalName = $param["LegalName"];
        }

        if (array_key_exists("LegalIdCardType",$param) and $param["LegalIdCardType"] !== null) {
            $this->LegalIdCardType = $param["LegalIdCardType"];
        }

        if (array_key_exists("LegalIdCardNumber",$param) and $param["LegalIdCardNumber"] !== null) {
            $this->LegalIdCardNumber = $param["LegalIdCardNumber"];
        }

        if (array_key_exists("AdminName",$param) and $param["AdminName"] !== null) {
            $this->AdminName = $param["AdminName"];
        }

        if (array_key_exists("AdminMobile",$param) and $param["AdminMobile"] !== null) {
            $this->AdminMobile = $param["AdminMobile"];
        }

        if (array_key_exists("AdminIdCardType",$param) and $param["AdminIdCardType"] !== null) {
            $this->AdminIdCardType = $param["AdminIdCardType"];
        }

        if (array_key_exists("AdminIdCardNumber",$param) and $param["AdminIdCardNumber"] !== null) {
            $this->AdminIdCardNumber = $param["AdminIdCardNumber"];
        }

        if (array_key_exists("OldAdminName",$param) and $param["OldAdminName"] !== null) {
            $this->OldAdminName = $param["OldAdminName"];
        }

        if (array_key_exists("OldAdminMobile",$param) and $param["OldAdminMobile"] !== null) {
            $this->OldAdminMobile = $param["OldAdminMobile"];
        }

        if (array_key_exists("OldAdminIdCardType",$param) and $param["OldAdminIdCardType"] !== null) {
            $this->OldAdminIdCardType = $param["OldAdminIdCardType"];
        }

        if (array_key_exists("OldAdminIdCardNumber",$param) and $param["OldAdminIdCardNumber"] !== null) {
            $this->OldAdminIdCardNumber = $param["OldAdminIdCardNumber"];
        }
    }
}
