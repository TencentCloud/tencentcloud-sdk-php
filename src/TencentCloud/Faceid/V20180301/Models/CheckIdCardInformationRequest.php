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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CheckIdCardInformation请求参数结构体
 *
 * @method string getImageBase64() 获取身份证人像面的 Base64 值。
- 支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。
- 支持的图片大小：所下载图片经Base64编码后不超过 7M。
- 请使用标准的Base64编码方式(带=补位)，编码规范参考RFC4648。
- ImageBase64、ImageUrl二者必须提供其中之一。若都提供了，则按照ImageUrl>ImageBase64的优先级使用参数。
 * @method void setImageBase64(string $ImageBase64) 设置身份证人像面的 Base64 值。
- 支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。
- 支持的图片大小：所下载图片经Base64编码后不超过 7M。
- 请使用标准的Base64编码方式(带=补位)，编码规范参考RFC4648。
- ImageBase64、ImageUrl二者必须提供其中之一。若都提供了，则按照ImageUrl>ImageBase64的优先级使用参数。
 * @method string getImageUrl() 获取身份证人像面的 Url 地址
- 支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。
- 支持的图片大小：所下载图片经 Base64 编码后不超过 3M。图片下载时间不超过 3 秒。
- 图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。
- 非腾讯云存储的 Url 速度和稳定性可能受一定影响。
 * @method void setImageUrl(string $ImageUrl) 设置身份证人像面的 Url 地址
- 支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。
- 支持的图片大小：所下载图片经 Base64 编码后不超过 3M。图片下载时间不超过 3 秒。
- 图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。
- 非腾讯云存储的 Url 速度和稳定性可能受一定影响。
 * @method string getConfig() 获取配置。
- 以下可选字段均为bool 类型，默认false。
CopyWarn，复印件告警。
BorderCheckWarn，边框和框内遮挡告警。
ReshootWarn，翻拍告警。
DetectPsWarn，PS检测告警（疑似存在PS痕迹）。
TempIdWarn，临时身份证告警。
Quality，图片质量告警（评价图片模糊程度）。

- SDK 设置方式参考：
Config = Json.stringify({"CopyWarn":true,"ReshootWarn":true})。

- API 3.0 Explorer 设置方式参考：
Config = {"CopyWarn":true,"ReshootWarn":true}。
 * @method void setConfig(string $Config) 设置配置。
- 以下可选字段均为bool 类型，默认false。
CopyWarn，复印件告警。
BorderCheckWarn，边框和框内遮挡告警。
ReshootWarn，翻拍告警。
DetectPsWarn，PS检测告警（疑似存在PS痕迹）。
TempIdWarn，临时身份证告警。
Quality，图片质量告警（评价图片模糊程度）。

- SDK 设置方式参考：
Config = Json.stringify({"CopyWarn":true,"ReshootWarn":true})。

- API 3.0 Explorer 设置方式参考：
Config = {"CopyWarn":true,"ReshootWarn":true}。
 * @method boolean getIsEncrypt() 获取是否需要对返回中的敏感信息进行加密。
- 默认false。
- 敏感信息包括：Response.IdNum、Response.Name。
 * @method void setIsEncrypt(boolean $IsEncrypt) 设置是否需要对返回中的敏感信息进行加密。
- 默认false。
- 敏感信息包括：Response.IdNum、Response.Name。
 * @method boolean getIsEncryptResponse() 获取是否需要对响应体加密。
 * @method void setIsEncryptResponse(boolean $IsEncryptResponse) 设置是否需要对响应体加密。
 * @method Encryption getEncryption() 获取是否需要对返回中的敏感信息进行加密,需指定加密算法Algorithm、CBC加密的初始向量、加密后的对称密钥。
 * @method void setEncryption(Encryption $Encryption) 设置是否需要对返回中的敏感信息进行加密,需指定加密算法Algorithm、CBC加密的初始向量、加密后的对称密钥。
 */
class CheckIdCardInformationRequest extends AbstractModel
{
    /**
     * @var string 身份证人像面的 Base64 值。
- 支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。
- 支持的图片大小：所下载图片经Base64编码后不超过 7M。
- 请使用标准的Base64编码方式(带=补位)，编码规范参考RFC4648。
- ImageBase64、ImageUrl二者必须提供其中之一。若都提供了，则按照ImageUrl>ImageBase64的优先级使用参数。
     */
    public $ImageBase64;

    /**
     * @var string 身份证人像面的 Url 地址
- 支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。
- 支持的图片大小：所下载图片经 Base64 编码后不超过 3M。图片下载时间不超过 3 秒。
- 图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。
- 非腾讯云存储的 Url 速度和稳定性可能受一定影响。
     */
    public $ImageUrl;

    /**
     * @var string 配置。
- 以下可选字段均为bool 类型，默认false。
CopyWarn，复印件告警。
BorderCheckWarn，边框和框内遮挡告警。
ReshootWarn，翻拍告警。
DetectPsWarn，PS检测告警（疑似存在PS痕迹）。
TempIdWarn，临时身份证告警。
Quality，图片质量告警（评价图片模糊程度）。

- SDK 设置方式参考：
Config = Json.stringify({"CopyWarn":true,"ReshootWarn":true})。

- API 3.0 Explorer 设置方式参考：
Config = {"CopyWarn":true,"ReshootWarn":true}。
     */
    public $Config;

    /**
     * @var boolean 是否需要对返回中的敏感信息进行加密。
- 默认false。
- 敏感信息包括：Response.IdNum、Response.Name。
     */
    public $IsEncrypt;

    /**
     * @var boolean 是否需要对响应体加密。
     */
    public $IsEncryptResponse;

    /**
     * @var Encryption 是否需要对返回中的敏感信息进行加密,需指定加密算法Algorithm、CBC加密的初始向量、加密后的对称密钥。
     */
    public $Encryption;

    /**
     * @param string $ImageBase64 身份证人像面的 Base64 值。
- 支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。
- 支持的图片大小：所下载图片经Base64编码后不超过 7M。
- 请使用标准的Base64编码方式(带=补位)，编码规范参考RFC4648。
- ImageBase64、ImageUrl二者必须提供其中之一。若都提供了，则按照ImageUrl>ImageBase64的优先级使用参数。
     * @param string $ImageUrl 身份证人像面的 Url 地址
- 支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。
- 支持的图片大小：所下载图片经 Base64 编码后不超过 3M。图片下载时间不超过 3 秒。
- 图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。
- 非腾讯云存储的 Url 速度和稳定性可能受一定影响。
     * @param string $Config 配置。
- 以下可选字段均为bool 类型，默认false。
CopyWarn，复印件告警。
BorderCheckWarn，边框和框内遮挡告警。
ReshootWarn，翻拍告警。
DetectPsWarn，PS检测告警（疑似存在PS痕迹）。
TempIdWarn，临时身份证告警。
Quality，图片质量告警（评价图片模糊程度）。

- SDK 设置方式参考：
Config = Json.stringify({"CopyWarn":true,"ReshootWarn":true})。

- API 3.0 Explorer 设置方式参考：
Config = {"CopyWarn":true,"ReshootWarn":true}。
     * @param boolean $IsEncrypt 是否需要对返回中的敏感信息进行加密。
- 默认false。
- 敏感信息包括：Response.IdNum、Response.Name。
     * @param boolean $IsEncryptResponse 是否需要对响应体加密。
     * @param Encryption $Encryption 是否需要对返回中的敏感信息进行加密,需指定加密算法Algorithm、CBC加密的初始向量、加密后的对称密钥。
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
        if (array_key_exists("ImageBase64",$param) and $param["ImageBase64"] !== null) {
            $this->ImageBase64 = $param["ImageBase64"];
        }

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = $param["Config"];
        }

        if (array_key_exists("IsEncrypt",$param) and $param["IsEncrypt"] !== null) {
            $this->IsEncrypt = $param["IsEncrypt"];
        }

        if (array_key_exists("IsEncryptResponse",$param) and $param["IsEncryptResponse"] !== null) {
            $this->IsEncryptResponse = $param["IsEncryptResponse"];
        }

        if (array_key_exists("Encryption",$param) and $param["Encryption"] !== null) {
            $this->Encryption = new Encryption();
            $this->Encryption->deserialize($param["Encryption"]);
        }
    }
}
