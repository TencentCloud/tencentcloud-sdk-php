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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 外部子商户扩展信息
 *
 * @method string getRegionCode() 获取地区代码，国标码
HELIPAY渠道必传
 * @method void setRegionCode(string $RegionCode) 设置地区代码，国标码
HELIPAY渠道必传
 * @method string getRegisterAddress() 获取注册地址
 * @method void setRegisterAddress(string $RegisterAddress) 设置注册地址
 * @method string getMailingAddress() 获取通讯地址
HELIPAY渠道必传
 * @method void setMailingAddress(string $MailingAddress) 设置通讯地址
HELIPAY渠道必传
 * @method string getBusinessAddress() 获取营业地址/经营地址
 * @method void setBusinessAddress(string $BusinessAddress) 设置营业地址/经营地址
 * @method string getServicePhone() 获取客服电话
 * @method void setServicePhone(string $ServicePhone) 设置客服电话
 * @method string getWebSiteUrl() 获取网站url
 * @method void setWebSiteUrl(string $WebSiteUrl) 设置网站url
 * @method string getEmailAddress() 获取邮箱地址
 * @method void setEmailAddress(string $EmailAddress) 设置邮箱地址
 */
class OutSubMerchantExtensionInfo extends AbstractModel
{
    /**
     * @var string 地区代码，国标码
HELIPAY渠道必传
     */
    public $RegionCode;

    /**
     * @var string 注册地址
     */
    public $RegisterAddress;

    /**
     * @var string 通讯地址
HELIPAY渠道必传
     */
    public $MailingAddress;

    /**
     * @var string 营业地址/经营地址
     */
    public $BusinessAddress;

    /**
     * @var string 客服电话
     */
    public $ServicePhone;

    /**
     * @var string 网站url
     */
    public $WebSiteUrl;

    /**
     * @var string 邮箱地址
     */
    public $EmailAddress;

    /**
     * @param string $RegionCode 地区代码，国标码
HELIPAY渠道必传
     * @param string $RegisterAddress 注册地址
     * @param string $MailingAddress 通讯地址
HELIPAY渠道必传
     * @param string $BusinessAddress 营业地址/经营地址
     * @param string $ServicePhone 客服电话
     * @param string $WebSiteUrl 网站url
     * @param string $EmailAddress 邮箱地址
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
        if (array_key_exists("RegionCode",$param) and $param["RegionCode"] !== null) {
            $this->RegionCode = $param["RegionCode"];
        }

        if (array_key_exists("RegisterAddress",$param) and $param["RegisterAddress"] !== null) {
            $this->RegisterAddress = $param["RegisterAddress"];
        }

        if (array_key_exists("MailingAddress",$param) and $param["MailingAddress"] !== null) {
            $this->MailingAddress = $param["MailingAddress"];
        }

        if (array_key_exists("BusinessAddress",$param) and $param["BusinessAddress"] !== null) {
            $this->BusinessAddress = $param["BusinessAddress"];
        }

        if (array_key_exists("ServicePhone",$param) and $param["ServicePhone"] !== null) {
            $this->ServicePhone = $param["ServicePhone"];
        }

        if (array_key_exists("WebSiteUrl",$param) and $param["WebSiteUrl"] !== null) {
            $this->WebSiteUrl = $param["WebSiteUrl"];
        }

        if (array_key_exists("EmailAddress",$param) and $param["EmailAddress"] !== null) {
            $this->EmailAddress = $param["EmailAddress"];
        }
    }
}
