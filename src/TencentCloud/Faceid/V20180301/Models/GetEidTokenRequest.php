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
 * GetEidToken请求参数结构体
 *
 * @method string getMerchantId() 获取<p>EID商户ID。</p><ul><li>商户ID通过人脸核身控制台<a href="https://console.cloud.tencent.com/faceid/access">自助接入</a>申请。</li><li>商户ID与您通过腾讯云人脸核身控制台完成自助接入时所使用的腾讯云账号绑定。</li><li>必须使用申请该商户ID时登录的腾讯云账号所对应的腾讯云API密钥调用该接口。</li></ul>
 * @method void setMerchantId(string $MerchantId) 设置<p>EID商户ID。</p><ul><li>商户ID通过人脸核身控制台<a href="https://console.cloud.tencent.com/faceid/access">自助接入</a>申请。</li><li>商户ID与您通过腾讯云人脸核身控制台完成自助接入时所使用的腾讯云账号绑定。</li><li>必须使用申请该商户ID时登录的腾讯云账号所对应的腾讯云API密钥调用该接口。</li></ul>
 * @method string getIdCard() 获取<p>身份标识。</p><ul><li>未使用OCR服务时，必须传入。</li><li>规则：a-z，A-Z，0-9组合。</li><li>最长长度32位。</li></ul>
 * @method void setIdCard(string $IdCard) 设置<p>身份标识。</p><ul><li>未使用OCR服务时，必须传入。</li><li>规则：a-z，A-Z，0-9组合。</li><li>最长长度32位。</li></ul>
 * @method string getName() 获取<p>姓名。</p><ul><li>未使用OCR服务时，必须传入。</li><li>最长长度32位。</li><li>中文请使用UTF-8编码。</li></ul>
 * @method void setName(string $Name) 设置<p>姓名。</p><ul><li>未使用OCR服务时，必须传入。</li><li>最长长度32位。</li><li>中文请使用UTF-8编码。</li></ul>
 * @method string getExtra() 获取<p>透传字段，在获取验证结果时返回。</p><ul><li>最长长度1024位。</li></ul>
 * @method void setExtra(string $Extra) 设置<p>透传字段，在获取验证结果时返回。</p><ul><li>最长长度1024位。</li></ul>
 * @method GetEidTokenConfig getConfig() 获取<p>小程序模式配置，包括如何传入姓名身份证的配置，以及是否使用意愿核身。</p>
 * @method void setConfig(GetEidTokenConfig $Config) 设置<p>小程序模式配置，包括如何传入姓名身份证的配置，以及是否使用意愿核身。</p>
 * @method string getRedirectUrl() 获取<p>用户从Url中进入核身认证结束后重定向的回调链接地址。</p><ul><li>最长长度1024位。</li><li>EidToken会在该链接的query参数中。</li></ul>
 * @method void setRedirectUrl(string $RedirectUrl) 设置<p>用户从Url中进入核身认证结束后重定向的回调链接地址。</p><ul><li>最长长度1024位。</li><li>EidToken会在该链接的query参数中。</li></ul>
 * @method Encryption getEncryption() 获取<p>敏感数据加密信息。</p><ul><li>对传入信息（姓名、身份证号）有加密需求的用户可使用此参数，详情请点击左侧链接。</li></ul>
 * @method void setEncryption(Encryption $Encryption) 设置<p>敏感数据加密信息。</p><ul><li>对传入信息（姓名、身份证号）有加密需求的用户可使用此参数，详情请点击左侧链接。</li></ul>
 */
class GetEidTokenRequest extends AbstractModel
{
    /**
     * @var string <p>EID商户ID。</p><ul><li>商户ID通过人脸核身控制台<a href="https://console.cloud.tencent.com/faceid/access">自助接入</a>申请。</li><li>商户ID与您通过腾讯云人脸核身控制台完成自助接入时所使用的腾讯云账号绑定。</li><li>必须使用申请该商户ID时登录的腾讯云账号所对应的腾讯云API密钥调用该接口。</li></ul>
     */
    public $MerchantId;

    /**
     * @var string <p>身份标识。</p><ul><li>未使用OCR服务时，必须传入。</li><li>规则：a-z，A-Z，0-9组合。</li><li>最长长度32位。</li></ul>
     */
    public $IdCard;

    /**
     * @var string <p>姓名。</p><ul><li>未使用OCR服务时，必须传入。</li><li>最长长度32位。</li><li>中文请使用UTF-8编码。</li></ul>
     */
    public $Name;

    /**
     * @var string <p>透传字段，在获取验证结果时返回。</p><ul><li>最长长度1024位。</li></ul>
     */
    public $Extra;

    /**
     * @var GetEidTokenConfig <p>小程序模式配置，包括如何传入姓名身份证的配置，以及是否使用意愿核身。</p>
     */
    public $Config;

    /**
     * @var string <p>用户从Url中进入核身认证结束后重定向的回调链接地址。</p><ul><li>最长长度1024位。</li><li>EidToken会在该链接的query参数中。</li></ul>
     */
    public $RedirectUrl;

    /**
     * @var Encryption <p>敏感数据加密信息。</p><ul><li>对传入信息（姓名、身份证号）有加密需求的用户可使用此参数，详情请点击左侧链接。</li></ul>
     */
    public $Encryption;

    /**
     * @param string $MerchantId <p>EID商户ID。</p><ul><li>商户ID通过人脸核身控制台<a href="https://console.cloud.tencent.com/faceid/access">自助接入</a>申请。</li><li>商户ID与您通过腾讯云人脸核身控制台完成自助接入时所使用的腾讯云账号绑定。</li><li>必须使用申请该商户ID时登录的腾讯云账号所对应的腾讯云API密钥调用该接口。</li></ul>
     * @param string $IdCard <p>身份标识。</p><ul><li>未使用OCR服务时，必须传入。</li><li>规则：a-z，A-Z，0-9组合。</li><li>最长长度32位。</li></ul>
     * @param string $Name <p>姓名。</p><ul><li>未使用OCR服务时，必须传入。</li><li>最长长度32位。</li><li>中文请使用UTF-8编码。</li></ul>
     * @param string $Extra <p>透传字段，在获取验证结果时返回。</p><ul><li>最长长度1024位。</li></ul>
     * @param GetEidTokenConfig $Config <p>小程序模式配置，包括如何传入姓名身份证的配置，以及是否使用意愿核身。</p>
     * @param string $RedirectUrl <p>用户从Url中进入核身认证结束后重定向的回调链接地址。</p><ul><li>最长长度1024位。</li><li>EidToken会在该链接的query参数中。</li></ul>
     * @param Encryption $Encryption <p>敏感数据加密信息。</p><ul><li>对传入信息（姓名、身份证号）有加密需求的用户可使用此参数，详情请点击左侧链接。</li></ul>
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
        if (array_key_exists("MerchantId",$param) and $param["MerchantId"] !== null) {
            $this->MerchantId = $param["MerchantId"];
        }

        if (array_key_exists("IdCard",$param) and $param["IdCard"] !== null) {
            $this->IdCard = $param["IdCard"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Extra",$param) and $param["Extra"] !== null) {
            $this->Extra = $param["Extra"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = new GetEidTokenConfig();
            $this->Config->deserialize($param["Config"]);
        }

        if (array_key_exists("RedirectUrl",$param) and $param["RedirectUrl"] !== null) {
            $this->RedirectUrl = $param["RedirectUrl"];
        }

        if (array_key_exists("Encryption",$param) and $param["Encryption"] !== null) {
            $this->Encryption = new Encryption();
            $this->Encryption->deserialize($param["Encryption"]);
        }
    }
}
