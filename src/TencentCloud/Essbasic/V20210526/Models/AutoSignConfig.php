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
 * 自动签开启、签署相关配置
 *
 * @method UserThreeFactor getUserInfo() 获取<p>自动签开通个人用户信息, 包括名字,身份证等</p>
 * @method void setUserInfo(UserThreeFactor $UserInfo) 设置<p>自动签开通个人用户信息, 包括名字,身份证等</p>
 * @method boolean getCertInfoCallback() 获取<p>是否回调证书信息:</p><ul><li>**false**: 不需要(默认)</li><li>**true**:需要</li></ul><p>注：<code>该字段已经失效，请勿设置此参数。</code></p>
 * @method void setCertInfoCallback(boolean $CertInfoCallback) 设置<p>是否回调证书信息:</p><ul><li>**false**: 不需要(默认)</li><li>**true**:需要</li></ul><p>注：<code>该字段已经失效，请勿设置此参数。</code></p>
 * @method boolean getUserDefineSeal() 获取<p>是否支持用户自定义签名印章:</p><ul><li>**false**: 不能自己定义(默认)</li><li>**true**: 可以自己定义</li></ul>
 * @method void setUserDefineSeal(boolean $UserDefineSeal) 设置<p>是否支持用户自定义签名印章:</p><ul><li>**false**: 不能自己定义(默认)</li><li>**true**: 可以自己定义</li></ul>
 * @method boolean getSealImgCallback() 获取<p>回调中是否需要自动签将要使用的印章（签名）图片的 base64:</p><ul><li>**false**: 不需要(默认)</li><li>**true**: 需要</li></ul>
 * @method void setSealImgCallback(boolean $SealImgCallback) 设置<p>回调中是否需要自动签将要使用的印章（签名）图片的 base64:</p><ul><li>**false**: 不需要(默认)</li><li>**true**: 需要</li></ul>
 * @method string getCallbackUrl() 获取<p>该字段已废弃，请使用【应用号配置】中的回调地址统一接口消息</p>
 * @method void setCallbackUrl(string $CallbackUrl) 设置<p>该字段已废弃，请使用【应用号配置】中的回调地址统一接口消息</p>
 * @method array getVerifyChannels() 获取<p>开通时候的身份验证方式, 取值为：</p><ul><li>**WEIXINAPP** : 微信人脸识别</li><li>**INSIGHT** : 慧眼人脸识别</li><li>**TELECOM** : 运营商三要素验证</li></ul>注：<ul><li>如果是小程序开通链接，仅支持传 WEIXINAPP。为空默认 WEIXINAPP</li><li>如果是 H5 开通链接，支持传 INSIGHT / TELECOM。为空默认 INSIGHT </li></ul>
 * @method void setVerifyChannels(array $VerifyChannels) 设置<p>开通时候的身份验证方式, 取值为：</p><ul><li>**WEIXINAPP** : 微信人脸识别</li><li>**INSIGHT** : 慧眼人脸识别</li><li>**TELECOM** : 运营商三要素验证</li></ul>注：<ul><li>如果是小程序开通链接，仅支持传 WEIXINAPP。为空默认 WEIXINAPP</li><li>如果是 H5 开通链接，支持传 INSIGHT / TELECOM。为空默认 INSIGHT </li></ul>
 * @method integer getLicenseType() 获取<p>设置用户开通自动签时是否绑定个人自动签账号许可。</p><ul><li><b>1</b>: (默认)不绑定自动签账号许可开通，开通后一直有效,   后续使用合同份额进行合同发起</li></ul><p>注：<code>该字段已经失效，请勿设置此参数。</code></p>
 * @method void setLicenseType(integer $LicenseType) 设置<p>设置用户开通自动签时是否绑定个人自动签账号许可。</p><ul><li><b>1</b>: (默认)不绑定自动签账号许可开通，开通后一直有效,   后续使用合同份额进行合同发起</li></ul><p>注：<code>该字段已经失效，请勿设置此参数。</code></p>
 * @method string getJumpUrl() 获取<p>开通成功后前端页面跳转的url，此字段的用法场景请联系客户经理确认。</p><p>注：<code>仅支持H5开通场景</code>, <code>跳转链接仅支持 https:// , qianapp:// 开头</code></p><p>跳转场景：</p><ul><li>**贵方H5 -&gt; 腾讯电子签H5 -&gt; 贵方H5** : JumpUrl格式: https://YOUR_CUSTOM_URL/xxxx，只需满足 https:// 开头的正确且合规的网址即可。</li><li>**贵方原生App -&gt; 腾讯电子签H5 -&gt; 贵方原生App** : JumpUrl格式: qianapp://YOUR_CUSTOM_URL，只需满足 qianapp:// 开头的URL即可。<code>APP实现方，需要拦截Webview地址跳转，发现url是qianapp:// 开头时跳转到原生页面。</code>APP拦截地址跳转可参考：<a href="https://qian.tencent.com/developers/company/openqianh5/#3-%E8%BF%94%E5%9B%9E%E5%BA%94%E7%94%A8jumpurl%E6%A0%BC%E5%BC%8F">返回应用JumpUrl格式</a> </li></ul><p>成功结果返回：<br>若贵方需要在跳转回时通过链接query参数提示开通成功，JumpUrl中的query应携带如下参数：<code>appendResult=qian</code>。这样腾讯电子签H5会在跳转回的url后面会添加query参数提示贵方签署成功，例如：qianapp://YOUR_CUSTOM_URL?action=sign&amp;result=success&amp;from=tencent_ess</p>
 * @method void setJumpUrl(string $JumpUrl) 设置<p>开通成功后前端页面跳转的url，此字段的用法场景请联系客户经理确认。</p><p>注：<code>仅支持H5开通场景</code>, <code>跳转链接仅支持 https:// , qianapp:// 开头</code></p><p>跳转场景：</p><ul><li>**贵方H5 -&gt; 腾讯电子签H5 -&gt; 贵方H5** : JumpUrl格式: https://YOUR_CUSTOM_URL/xxxx，只需满足 https:// 开头的正确且合规的网址即可。</li><li>**贵方原生App -&gt; 腾讯电子签H5 -&gt; 贵方原生App** : JumpUrl格式: qianapp://YOUR_CUSTOM_URL，只需满足 qianapp:// 开头的URL即可。<code>APP实现方，需要拦截Webview地址跳转，发现url是qianapp:// 开头时跳转到原生页面。</code>APP拦截地址跳转可参考：<a href="https://qian.tencent.com/developers/company/openqianh5/#3-%E8%BF%94%E5%9B%9E%E5%BA%94%E7%94%A8jumpurl%E6%A0%BC%E5%BC%8F">返回应用JumpUrl格式</a> </li></ul><p>成功结果返回：<br>若贵方需要在跳转回时通过链接query参数提示开通成功，JumpUrl中的query应携带如下参数：<code>appendResult=qian</code>。这样腾讯电子签H5会在跳转回的url后面会添加query参数提示贵方签署成功，例如：qianapp://YOUR_CUSTOM_URL?action=sign&amp;result=success&amp;from=tencent_ess</p>
 */
class AutoSignConfig extends AbstractModel
{
    /**
     * @var UserThreeFactor <p>自动签开通个人用户信息, 包括名字,身份证等</p>
     */
    public $UserInfo;

    /**
     * @var boolean <p>是否回调证书信息:</p><ul><li>**false**: 不需要(默认)</li><li>**true**:需要</li></ul><p>注：<code>该字段已经失效，请勿设置此参数。</code></p>
     */
    public $CertInfoCallback;

    /**
     * @var boolean <p>是否支持用户自定义签名印章:</p><ul><li>**false**: 不能自己定义(默认)</li><li>**true**: 可以自己定义</li></ul>
     */
    public $UserDefineSeal;

    /**
     * @var boolean <p>回调中是否需要自动签将要使用的印章（签名）图片的 base64:</p><ul><li>**false**: 不需要(默认)</li><li>**true**: 需要</li></ul>
     */
    public $SealImgCallback;

    /**
     * @var string <p>该字段已废弃，请使用【应用号配置】中的回调地址统一接口消息</p>
     * @deprecated
     */
    public $CallbackUrl;

    /**
     * @var array <p>开通时候的身份验证方式, 取值为：</p><ul><li>**WEIXINAPP** : 微信人脸识别</li><li>**INSIGHT** : 慧眼人脸识别</li><li>**TELECOM** : 运营商三要素验证</li></ul>注：<ul><li>如果是小程序开通链接，仅支持传 WEIXINAPP。为空默认 WEIXINAPP</li><li>如果是 H5 开通链接，支持传 INSIGHT / TELECOM。为空默认 INSIGHT </li></ul>
     */
    public $VerifyChannels;

    /**
     * @var integer <p>设置用户开通自动签时是否绑定个人自动签账号许可。</p><ul><li><b>1</b>: (默认)不绑定自动签账号许可开通，开通后一直有效,   后续使用合同份额进行合同发起</li></ul><p>注：<code>该字段已经失效，请勿设置此参数。</code></p>
     */
    public $LicenseType;

    /**
     * @var string <p>开通成功后前端页面跳转的url，此字段的用法场景请联系客户经理确认。</p><p>注：<code>仅支持H5开通场景</code>, <code>跳转链接仅支持 https:// , qianapp:// 开头</code></p><p>跳转场景：</p><ul><li>**贵方H5 -&gt; 腾讯电子签H5 -&gt; 贵方H5** : JumpUrl格式: https://YOUR_CUSTOM_URL/xxxx，只需满足 https:// 开头的正确且合规的网址即可。</li><li>**贵方原生App -&gt; 腾讯电子签H5 -&gt; 贵方原生App** : JumpUrl格式: qianapp://YOUR_CUSTOM_URL，只需满足 qianapp:// 开头的URL即可。<code>APP实现方，需要拦截Webview地址跳转，发现url是qianapp:// 开头时跳转到原生页面。</code>APP拦截地址跳转可参考：<a href="https://qian.tencent.com/developers/company/openqianh5/#3-%E8%BF%94%E5%9B%9E%E5%BA%94%E7%94%A8jumpurl%E6%A0%BC%E5%BC%8F">返回应用JumpUrl格式</a> </li></ul><p>成功结果返回：<br>若贵方需要在跳转回时通过链接query参数提示开通成功，JumpUrl中的query应携带如下参数：<code>appendResult=qian</code>。这样腾讯电子签H5会在跳转回的url后面会添加query参数提示贵方签署成功，例如：qianapp://YOUR_CUSTOM_URL?action=sign&amp;result=success&amp;from=tencent_ess</p>
     */
    public $JumpUrl;

    /**
     * @param UserThreeFactor $UserInfo <p>自动签开通个人用户信息, 包括名字,身份证等</p>
     * @param boolean $CertInfoCallback <p>是否回调证书信息:</p><ul><li>**false**: 不需要(默认)</li><li>**true**:需要</li></ul><p>注：<code>该字段已经失效，请勿设置此参数。</code></p>
     * @param boolean $UserDefineSeal <p>是否支持用户自定义签名印章:</p><ul><li>**false**: 不能自己定义(默认)</li><li>**true**: 可以自己定义</li></ul>
     * @param boolean $SealImgCallback <p>回调中是否需要自动签将要使用的印章（签名）图片的 base64:</p><ul><li>**false**: 不需要(默认)</li><li>**true**: 需要</li></ul>
     * @param string $CallbackUrl <p>该字段已废弃，请使用【应用号配置】中的回调地址统一接口消息</p>
     * @param array $VerifyChannels <p>开通时候的身份验证方式, 取值为：</p><ul><li>**WEIXINAPP** : 微信人脸识别</li><li>**INSIGHT** : 慧眼人脸识别</li><li>**TELECOM** : 运营商三要素验证</li></ul>注：<ul><li>如果是小程序开通链接，仅支持传 WEIXINAPP。为空默认 WEIXINAPP</li><li>如果是 H5 开通链接，支持传 INSIGHT / TELECOM。为空默认 INSIGHT </li></ul>
     * @param integer $LicenseType <p>设置用户开通自动签时是否绑定个人自动签账号许可。</p><ul><li><b>1</b>: (默认)不绑定自动签账号许可开通，开通后一直有效,   后续使用合同份额进行合同发起</li></ul><p>注：<code>该字段已经失效，请勿设置此参数。</code></p>
     * @param string $JumpUrl <p>开通成功后前端页面跳转的url，此字段的用法场景请联系客户经理确认。</p><p>注：<code>仅支持H5开通场景</code>, <code>跳转链接仅支持 https:// , qianapp:// 开头</code></p><p>跳转场景：</p><ul><li>**贵方H5 -&gt; 腾讯电子签H5 -&gt; 贵方H5** : JumpUrl格式: https://YOUR_CUSTOM_URL/xxxx，只需满足 https:// 开头的正确且合规的网址即可。</li><li>**贵方原生App -&gt; 腾讯电子签H5 -&gt; 贵方原生App** : JumpUrl格式: qianapp://YOUR_CUSTOM_URL，只需满足 qianapp:// 开头的URL即可。<code>APP实现方，需要拦截Webview地址跳转，发现url是qianapp:// 开头时跳转到原生页面。</code>APP拦截地址跳转可参考：<a href="https://qian.tencent.com/developers/company/openqianh5/#3-%E8%BF%94%E5%9B%9E%E5%BA%94%E7%94%A8jumpurl%E6%A0%BC%E5%BC%8F">返回应用JumpUrl格式</a> </li></ul><p>成功结果返回：<br>若贵方需要在跳转回时通过链接query参数提示开通成功，JumpUrl中的query应携带如下参数：<code>appendResult=qian</code>。这样腾讯电子签H5会在跳转回的url后面会添加query参数提示贵方签署成功，例如：qianapp://YOUR_CUSTOM_URL?action=sign&amp;result=success&amp;from=tencent_ess</p>
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
        if (array_key_exists("UserInfo",$param) and $param["UserInfo"] !== null) {
            $this->UserInfo = new UserThreeFactor();
            $this->UserInfo->deserialize($param["UserInfo"]);
        }

        if (array_key_exists("CertInfoCallback",$param) and $param["CertInfoCallback"] !== null) {
            $this->CertInfoCallback = $param["CertInfoCallback"];
        }

        if (array_key_exists("UserDefineSeal",$param) and $param["UserDefineSeal"] !== null) {
            $this->UserDefineSeal = $param["UserDefineSeal"];
        }

        if (array_key_exists("SealImgCallback",$param) and $param["SealImgCallback"] !== null) {
            $this->SealImgCallback = $param["SealImgCallback"];
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }

        if (array_key_exists("VerifyChannels",$param) and $param["VerifyChannels"] !== null) {
            $this->VerifyChannels = $param["VerifyChannels"];
        }

        if (array_key_exists("LicenseType",$param) and $param["LicenseType"] !== null) {
            $this->LicenseType = $param["LicenseType"];
        }

        if (array_key_exists("JumpUrl",$param) and $param["JumpUrl"] !== null) {
            $this->JumpUrl = $param["JumpUrl"];
        }
    }
}
