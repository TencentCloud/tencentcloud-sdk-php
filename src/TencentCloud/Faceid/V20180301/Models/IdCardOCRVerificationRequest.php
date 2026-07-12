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
 * IdCardOCRVerification请求参数结构体
 *
 * @method string getIdCard() 获取<p>身份证号。</p><ul><li>姓名和身份证号、ImageBase64、ImageUrl三者必须提供其中之一。</li><li>若都提供了，则按照姓名和身份证号&gt;ImageBase64&gt;ImageUrl的优先级使用参数。</li></ul>
 * @method void setIdCard(string $IdCard) 设置<p>身份证号。</p><ul><li>姓名和身份证号、ImageBase64、ImageUrl三者必须提供其中之一。</li><li>若都提供了，则按照姓名和身份证号&gt;ImageBase64&gt;ImageUrl的优先级使用参数。</li></ul>
 * @method string getName() 获取<p>姓名。</p>
 * @method void setName(string $Name) 设置<p>姓名。</p>
 * @method string getImageBase64() 获取<p>身份证人像面的 Base64 值。</p><ul><li>支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。</li><li>支持的图片大小：所下载图片经Base64编码后不超过 3M。请使用标准的Base64编码方式(带=补位)，编码规范参考RFC4648。</li></ul>
 * @method void setImageBase64(string $ImageBase64) 设置<p>身份证人像面的 Base64 值。</p><ul><li>支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。</li><li>支持的图片大小：所下载图片经Base64编码后不超过 3M。请使用标准的Base64编码方式(带=补位)，编码规范参考RFC4648。</li></ul>
 * @method string getImageUrl() 获取<p>身份证人像面的 Url 地址。</p><ul><li>支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。</li><li>支持的图片大小：所下载图片经 Base64 编码后不超过 3M。图片下载时间不超过 3 秒。</li><li>图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。</li><li>非腾讯云存储的 Url 速度和稳定性可能受一定影响。</li></ul>
 * @method void setImageUrl(string $ImageUrl) 设置<p>身份证人像面的 Url 地址。</p><ul><li>支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。</li><li>支持的图片大小：所下载图片经 Base64 编码后不超过 3M。图片下载时间不超过 3 秒。</li><li>图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。</li><li>非腾讯云存储的 Url 速度和稳定性可能受一定影响。</li></ul>
 * @method Encryption getEncryption() 获取<p>敏感数据加密信息。</p><ul><li>对传入信息（姓名、身份证号）有加密需求的用户可使用此参数，详情请点击左侧链接。</li></ul>
 * @method void setEncryption(Encryption $Encryption) 设置<p>敏感数据加密信息。</p><ul><li>对传入信息（姓名、身份证号）有加密需求的用户可使用此参数，详情请点击左侧链接。</li></ul>
 * @method string getConfig() 获取<p>告警配置。</p><ul><li>仅当使用ImageBase64或者ImageUrl时，告警配置生效</li><li>以下可选字段均为bool 类型，默认false。<ul><li>CopyWarn，复印件告警。</li><li>BorderCheckWarn，边框和框内遮挡告警。</li><li>ReshootWarn，翻拍告警。</li><li>DetectPsWarn，PS检测告警（疑似存在PS痕迹）。</li><li>TempIdWarn，临时身份证告警。</li><li>Quality，图片质量告警（评价图片模糊程度）。</li></ul></li><li>SDK 设置方式参考：Config = Json.stringify({&quot;CopyWarn&quot;:true,&quot;ReshootWarn&quot;:true})。</li><li>API 3.0 Explorer 设置方式参考：Config = {&quot;CopyWarn&quot;:true,&quot;Quality&quot;:true}。</li></ul>
 * @method void setConfig(string $Config) 设置<p>告警配置。</p><ul><li>仅当使用ImageBase64或者ImageUrl时，告警配置生效</li><li>以下可选字段均为bool 类型，默认false。<ul><li>CopyWarn，复印件告警。</li><li>BorderCheckWarn，边框和框内遮挡告警。</li><li>ReshootWarn，翻拍告警。</li><li>DetectPsWarn，PS检测告警（疑似存在PS痕迹）。</li><li>TempIdWarn，临时身份证告警。</li><li>Quality，图片质量告警（评价图片模糊程度）。</li></ul></li><li>SDK 设置方式参考：Config = Json.stringify({&quot;CopyWarn&quot;:true,&quot;ReshootWarn&quot;:true})。</li><li>API 3.0 Explorer 设置方式参考：Config = {&quot;CopyWarn&quot;:true,&quot;Quality&quot;:true}。</li></ul>
 */
class IdCardOCRVerificationRequest extends AbstractModel
{
    /**
     * @var string <p>身份证号。</p><ul><li>姓名和身份证号、ImageBase64、ImageUrl三者必须提供其中之一。</li><li>若都提供了，则按照姓名和身份证号&gt;ImageBase64&gt;ImageUrl的优先级使用参数。</li></ul>
     */
    public $IdCard;

    /**
     * @var string <p>姓名。</p>
     */
    public $Name;

    /**
     * @var string <p>身份证人像面的 Base64 值。</p><ul><li>支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。</li><li>支持的图片大小：所下载图片经Base64编码后不超过 3M。请使用标准的Base64编码方式(带=补位)，编码规范参考RFC4648。</li></ul>
     */
    public $ImageBase64;

    /**
     * @var string <p>身份证人像面的 Url 地址。</p><ul><li>支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。</li><li>支持的图片大小：所下载图片经 Base64 编码后不超过 3M。图片下载时间不超过 3 秒。</li><li>图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。</li><li>非腾讯云存储的 Url 速度和稳定性可能受一定影响。</li></ul>
     */
    public $ImageUrl;

    /**
     * @var Encryption <p>敏感数据加密信息。</p><ul><li>对传入信息（姓名、身份证号）有加密需求的用户可使用此参数，详情请点击左侧链接。</li></ul>
     */
    public $Encryption;

    /**
     * @var string <p>告警配置。</p><ul><li>仅当使用ImageBase64或者ImageUrl时，告警配置生效</li><li>以下可选字段均为bool 类型，默认false。<ul><li>CopyWarn，复印件告警。</li><li>BorderCheckWarn，边框和框内遮挡告警。</li><li>ReshootWarn，翻拍告警。</li><li>DetectPsWarn，PS检测告警（疑似存在PS痕迹）。</li><li>TempIdWarn，临时身份证告警。</li><li>Quality，图片质量告警（评价图片模糊程度）。</li></ul></li><li>SDK 设置方式参考：Config = Json.stringify({&quot;CopyWarn&quot;:true,&quot;ReshootWarn&quot;:true})。</li><li>API 3.0 Explorer 设置方式参考：Config = {&quot;CopyWarn&quot;:true,&quot;Quality&quot;:true}。</li></ul>
     */
    public $Config;

    /**
     * @param string $IdCard <p>身份证号。</p><ul><li>姓名和身份证号、ImageBase64、ImageUrl三者必须提供其中之一。</li><li>若都提供了，则按照姓名和身份证号&gt;ImageBase64&gt;ImageUrl的优先级使用参数。</li></ul>
     * @param string $Name <p>姓名。</p>
     * @param string $ImageBase64 <p>身份证人像面的 Base64 值。</p><ul><li>支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。</li><li>支持的图片大小：所下载图片经Base64编码后不超过 3M。请使用标准的Base64编码方式(带=补位)，编码规范参考RFC4648。</li></ul>
     * @param string $ImageUrl <p>身份证人像面的 Url 地址。</p><ul><li>支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。</li><li>支持的图片大小：所下载图片经 Base64 编码后不超过 3M。图片下载时间不超过 3 秒。</li><li>图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。</li><li>非腾讯云存储的 Url 速度和稳定性可能受一定影响。</li></ul>
     * @param Encryption $Encryption <p>敏感数据加密信息。</p><ul><li>对传入信息（姓名、身份证号）有加密需求的用户可使用此参数，详情请点击左侧链接。</li></ul>
     * @param string $Config <p>告警配置。</p><ul><li>仅当使用ImageBase64或者ImageUrl时，告警配置生效</li><li>以下可选字段均为bool 类型，默认false。<ul><li>CopyWarn，复印件告警。</li><li>BorderCheckWarn，边框和框内遮挡告警。</li><li>ReshootWarn，翻拍告警。</li><li>DetectPsWarn，PS检测告警（疑似存在PS痕迹）。</li><li>TempIdWarn，临时身份证告警。</li><li>Quality，图片质量告警（评价图片模糊程度）。</li></ul></li><li>SDK 设置方式参考：Config = Json.stringify({&quot;CopyWarn&quot;:true,&quot;ReshootWarn&quot;:true})。</li><li>API 3.0 Explorer 设置方式参考：Config = {&quot;CopyWarn&quot;:true,&quot;Quality&quot;:true}。</li></ul>
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
        if (array_key_exists("IdCard",$param) and $param["IdCard"] !== null) {
            $this->IdCard = $param["IdCard"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ImageBase64",$param) and $param["ImageBase64"] !== null) {
            $this->ImageBase64 = $param["ImageBase64"];
        }

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("Encryption",$param) and $param["Encryption"] !== null) {
            $this->Encryption = new Encryption();
            $this->Encryption->deserialize($param["Encryption"]);
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = $param["Config"];
        }
    }
}
