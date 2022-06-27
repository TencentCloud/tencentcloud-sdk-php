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
 * UploadOpenBankSubMerchantCredential请求参数结构体
 *
 * @method string getChannelMerchantId() 获取渠道商户ID。
 * @method void setChannelMerchantId(string $ChannelMerchantId) 设置渠道商户ID。
 * @method string getChannelSubMerchantId() 获取渠道子商户ID。
 * @method void setChannelSubMerchantId(string $ChannelSubMerchantId) 设置渠道子商户ID。
 * @method string getChannelName() 获取渠道名称。详见附录-枚举类型-ChannelName。
 * @method void setChannelName(string $ChannelName) 设置渠道名称。详见附录-枚举类型-ChannelName。
 * @method string getOutApplyId() 获取外部序列进件号。
 * @method void setOutApplyId(string $OutApplyId) 设置外部序列进件号。
 * @method string getCredentialType() 获取资质类型，详见附录-枚举类型-CredentialType。
 * @method void setCredentialType(string $CredentialType) 设置资质类型，详见附录-枚举类型-CredentialType。
 * @method string getFileType() 获取文件类型。
合利宝渠道，文件类型为PNG/JPG格式。
 * @method void setFileType(string $FileType) 设置文件类型。
合利宝渠道，文件类型为PNG/JPG格式。
 * @method string getPaymentMethod() 获取支付方式。
合利宝渠道不需要传。
 * @method void setPaymentMethod(string $PaymentMethod) 设置支付方式。
合利宝渠道不需要传。
 * @method string getCredentialContent() 获取资质文件内容。Base64编码，资质文件内容和链接二选一。
合利宝渠道，文件限制大小5M以内。
 * @method void setCredentialContent(string $CredentialContent) 设置资质文件内容。Base64编码，资质文件内容和链接二选一。
合利宝渠道，文件限制大小5M以内。
 * @method string getCredentialUrl() 获取资质文件链接。资质文件内容和链接二选一。
合利宝渠道，文件限制大小5M以内。
 * @method void setCredentialUrl(string $CredentialUrl) 设置资质文件链接。资质文件内容和链接二选一。
合利宝渠道，文件限制大小5M以内。
 * @method string getEnvironment() 获取环境类型。
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
 * @method void setEnvironment(string $Environment) 设置环境类型。
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
 */
class UploadOpenBankSubMerchantCredentialRequest extends AbstractModel
{
    /**
     * @var string 渠道商户ID。
     */
    public $ChannelMerchantId;

    /**
     * @var string 渠道子商户ID。
     */
    public $ChannelSubMerchantId;

    /**
     * @var string 渠道名称。详见附录-枚举类型-ChannelName。
     */
    public $ChannelName;

    /**
     * @var string 外部序列进件号。
     */
    public $OutApplyId;

    /**
     * @var string 资质类型，详见附录-枚举类型-CredentialType。
     */
    public $CredentialType;

    /**
     * @var string 文件类型。
合利宝渠道，文件类型为PNG/JPG格式。
     */
    public $FileType;

    /**
     * @var string 支付方式。
合利宝渠道不需要传。
     */
    public $PaymentMethod;

    /**
     * @var string 资质文件内容。Base64编码，资质文件内容和链接二选一。
合利宝渠道，文件限制大小5M以内。
     */
    public $CredentialContent;

    /**
     * @var string 资质文件链接。资质文件内容和链接二选一。
合利宝渠道，文件限制大小5M以内。
     */
    public $CredentialUrl;

    /**
     * @var string 环境类型。
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
     */
    public $Environment;

    /**
     * @param string $ChannelMerchantId 渠道商户ID。
     * @param string $ChannelSubMerchantId 渠道子商户ID。
     * @param string $ChannelName 渠道名称。详见附录-枚举类型-ChannelName。
     * @param string $OutApplyId 外部序列进件号。
     * @param string $CredentialType 资质类型，详见附录-枚举类型-CredentialType。
     * @param string $FileType 文件类型。
合利宝渠道，文件类型为PNG/JPG格式。
     * @param string $PaymentMethod 支付方式。
合利宝渠道不需要传。
     * @param string $CredentialContent 资质文件内容。Base64编码，资质文件内容和链接二选一。
合利宝渠道，文件限制大小5M以内。
     * @param string $CredentialUrl 资质文件链接。资质文件内容和链接二选一。
合利宝渠道，文件限制大小5M以内。
     * @param string $Environment 环境类型。
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
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
        if (array_key_exists("ChannelMerchantId",$param) and $param["ChannelMerchantId"] !== null) {
            $this->ChannelMerchantId = $param["ChannelMerchantId"];
        }

        if (array_key_exists("ChannelSubMerchantId",$param) and $param["ChannelSubMerchantId"] !== null) {
            $this->ChannelSubMerchantId = $param["ChannelSubMerchantId"];
        }

        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }

        if (array_key_exists("OutApplyId",$param) and $param["OutApplyId"] !== null) {
            $this->OutApplyId = $param["OutApplyId"];
        }

        if (array_key_exists("CredentialType",$param) and $param["CredentialType"] !== null) {
            $this->CredentialType = $param["CredentialType"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("PaymentMethod",$param) and $param["PaymentMethod"] !== null) {
            $this->PaymentMethod = $param["PaymentMethod"];
        }

        if (array_key_exists("CredentialContent",$param) and $param["CredentialContent"] !== null) {
            $this->CredentialContent = $param["CredentialContent"];
        }

        if (array_key_exists("CredentialUrl",$param) and $param["CredentialUrl"] !== null) {
            $this->CredentialUrl = $param["CredentialUrl"];
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = $param["Environment"];
        }
    }
}
