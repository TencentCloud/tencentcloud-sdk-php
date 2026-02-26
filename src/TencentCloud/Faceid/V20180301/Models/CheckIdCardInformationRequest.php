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
 * CheckIdCardInformation请求参数结构体
 *
 * @method string getImageBase64() 获取<p>身份证人像面的 Base64 值。</p><ul><li>支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。</li><li>支持的图片大小：所下载图片经Base64编码后不超过 7M。</li><li>请使用标准的Base64编码方式(带=补位)，编码规范参考RFC4648。</li><li>ImageBase64、ImageUrl二者必须提供其中之一。若都提供了，则按照ImageUrl&gt;ImageBase64的优先级使用参数。</li></ul>
 * @method void setImageBase64(string $ImageBase64) 设置<p>身份证人像面的 Base64 值。</p><ul><li>支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。</li><li>支持的图片大小：所下载图片经Base64编码后不超过 7M。</li><li>请使用标准的Base64编码方式(带=补位)，编码规范参考RFC4648。</li><li>ImageBase64、ImageUrl二者必须提供其中之一。若都提供了，则按照ImageUrl&gt;ImageBase64的优先级使用参数。</li></ul>
 * @method string getImageUrl() 获取<p>身份证人像面的 Url 地址</p><ul><li>支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。</li><li>支持的图片大小：所下载图片经 Base64 编码后不超过 3M。图片下载时间不超过 3 秒。</li><li>图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。</li><li>非腾讯云存储的 Url 速度和稳定性可能受一定影响。</li></ul>
 * @method void setImageUrl(string $ImageUrl) 设置<p>身份证人像面的 Url 地址</p><ul><li>支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。</li><li>支持的图片大小：所下载图片经 Base64 编码后不超过 3M。图片下载时间不超过 3 秒。</li><li>图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。</li><li>非腾讯云存储的 Url 速度和稳定性可能受一定影响。</li></ul>
 * @method string getConfig() 获取<p>配置。</p><ul><li><p>以下可选字段均为bool 类型，默认false。<br>CopyWarn，复印件告警。<br>BorderCheckWarn，边框和框内遮挡告警。<br>ReshootWarn，翻拍告警。<br>DetectPsWarn，PS检测告警（疑似存在PS痕迹）。<br>TempIdWarn，临时身份证告警。<br>Quality，图片质量告警（评价图片模糊程度）。</p></li><li><p>SDK 设置方式参考：<br>Config = Json.stringify({&quot;CopyWarn&quot;:true,&quot;ReshootWarn&quot;:true})。</p></li><li><p>API 3.0 Explorer 设置方式参考：<br>Config = {&quot;CopyWarn&quot;:true,&quot;ReshootWarn&quot;:true}。</p></li></ul>
 * @method void setConfig(string $Config) 设置<p>配置。</p><ul><li><p>以下可选字段均为bool 类型，默认false。<br>CopyWarn，复印件告警。<br>BorderCheckWarn，边框和框内遮挡告警。<br>ReshootWarn，翻拍告警。<br>DetectPsWarn，PS检测告警（疑似存在PS痕迹）。<br>TempIdWarn，临时身份证告警。<br>Quality，图片质量告警（评价图片模糊程度）。</p></li><li><p>SDK 设置方式参考：<br>Config = Json.stringify({&quot;CopyWarn&quot;:true,&quot;ReshootWarn&quot;:true})。</p></li><li><p>API 3.0 Explorer 设置方式参考：<br>Config = {&quot;CopyWarn&quot;:true,&quot;ReshootWarn&quot;:true}。</p></li></ul>
 * @method boolean getIsEncrypt() 获取<p>是否需要对返回中的敏感信息进行加密。</p><ul><li>默认false。</li><li>敏感信息包括：Response.IdNum、Response.Name。</li></ul>
 * @method void setIsEncrypt(boolean $IsEncrypt) 设置<p>是否需要对返回中的敏感信息进行加密。</p><ul><li>默认false。</li><li>敏感信息包括：Response.IdNum、Response.Name。</li></ul>
 * @method boolean getIsEncryptResponse() 获取<p>是否需要对响应体加密。</p>
 * @method void setIsEncryptResponse(boolean $IsEncryptResponse) 设置<p>是否需要对响应体加密。</p>
 * @method Encryption getEncryption() 获取<p>是否需要对返回中的敏感信息进行加密,需指定加密算法Algorithm、CBC加密的初始向量、加密后的对称密钥。</p>
 * @method void setEncryption(Encryption $Encryption) 设置<p>是否需要对返回中的敏感信息进行加密,需指定加密算法Algorithm、CBC加密的初始向量、加密后的对称密钥。</p>
 */
class CheckIdCardInformationRequest extends AbstractModel
{
    /**
     * @var string <p>身份证人像面的 Base64 值。</p><ul><li>支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。</li><li>支持的图片大小：所下载图片经Base64编码后不超过 7M。</li><li>请使用标准的Base64编码方式(带=补位)，编码规范参考RFC4648。</li><li>ImageBase64、ImageUrl二者必须提供其中之一。若都提供了，则按照ImageUrl&gt;ImageBase64的优先级使用参数。</li></ul>
     */
    public $ImageBase64;

    /**
     * @var string <p>身份证人像面的 Url 地址</p><ul><li>支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。</li><li>支持的图片大小：所下载图片经 Base64 编码后不超过 3M。图片下载时间不超过 3 秒。</li><li>图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。</li><li>非腾讯云存储的 Url 速度和稳定性可能受一定影响。</li></ul>
     */
    public $ImageUrl;

    /**
     * @var string <p>配置。</p><ul><li><p>以下可选字段均为bool 类型，默认false。<br>CopyWarn，复印件告警。<br>BorderCheckWarn，边框和框内遮挡告警。<br>ReshootWarn，翻拍告警。<br>DetectPsWarn，PS检测告警（疑似存在PS痕迹）。<br>TempIdWarn，临时身份证告警。<br>Quality，图片质量告警（评价图片模糊程度）。</p></li><li><p>SDK 设置方式参考：<br>Config = Json.stringify({&quot;CopyWarn&quot;:true,&quot;ReshootWarn&quot;:true})。</p></li><li><p>API 3.0 Explorer 设置方式参考：<br>Config = {&quot;CopyWarn&quot;:true,&quot;ReshootWarn&quot;:true}。</p></li></ul>
     */
    public $Config;

    /**
     * @var boolean <p>是否需要对返回中的敏感信息进行加密。</p><ul><li>默认false。</li><li>敏感信息包括：Response.IdNum、Response.Name。</li></ul>
     */
    public $IsEncrypt;

    /**
     * @var boolean <p>是否需要对响应体加密。</p>
     */
    public $IsEncryptResponse;

    /**
     * @var Encryption <p>是否需要对返回中的敏感信息进行加密,需指定加密算法Algorithm、CBC加密的初始向量、加密后的对称密钥。</p>
     */
    public $Encryption;

    /**
     * @param string $ImageBase64 <p>身份证人像面的 Base64 值。</p><ul><li>支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。</li><li>支持的图片大小：所下载图片经Base64编码后不超过 7M。</li><li>请使用标准的Base64编码方式(带=补位)，编码规范参考RFC4648。</li><li>ImageBase64、ImageUrl二者必须提供其中之一。若都提供了，则按照ImageUrl&gt;ImageBase64的优先级使用参数。</li></ul>
     * @param string $ImageUrl <p>身份证人像面的 Url 地址</p><ul><li>支持的图片格式：PNG、JPG、JPEG，暂不支持 GIF 格式。</li><li>支持的图片大小：所下载图片经 Base64 编码后不超过 3M。图片下载时间不超过 3 秒。</li><li>图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。</li><li>非腾讯云存储的 Url 速度和稳定性可能受一定影响。</li></ul>
     * @param string $Config <p>配置。</p><ul><li><p>以下可选字段均为bool 类型，默认false。<br>CopyWarn，复印件告警。<br>BorderCheckWarn，边框和框内遮挡告警。<br>ReshootWarn，翻拍告警。<br>DetectPsWarn，PS检测告警（疑似存在PS痕迹）。<br>TempIdWarn，临时身份证告警。<br>Quality，图片质量告警（评价图片模糊程度）。</p></li><li><p>SDK 设置方式参考：<br>Config = Json.stringify({&quot;CopyWarn&quot;:true,&quot;ReshootWarn&quot;:true})。</p></li><li><p>API 3.0 Explorer 设置方式参考：<br>Config = {&quot;CopyWarn&quot;:true,&quot;ReshootWarn&quot;:true}。</p></li></ul>
     * @param boolean $IsEncrypt <p>是否需要对返回中的敏感信息进行加密。</p><ul><li>默认false。</li><li>敏感信息包括：Response.IdNum、Response.Name。</li></ul>
     * @param boolean $IsEncryptResponse <p>是否需要对响应体加密。</p>
     * @param Encryption $Encryption <p>是否需要对返回中的敏感信息进行加密,需指定加密算法Algorithm、CBC加密的初始向量、加密后的对称密钥。</p>
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
