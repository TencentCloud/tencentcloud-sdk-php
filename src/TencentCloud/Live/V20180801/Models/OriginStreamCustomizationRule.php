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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 播放域名回源自定义协议规则。
 *
 * @method string getMatchRule() 获取<p>匹配规则，可选项如下：<br>.m3u8、.mpd、.ts、.mp4、.m4s、.m4a、.m4i、.m4v、.m4f、.aac、.webm。</p>
 * @method void setMatchRule(string $MatchRule) 设置<p>匹配规则，可选项如下：<br>.m3u8、.mpd、.ts、.mp4、.m4s、.m4a、.m4i、.m4v、.m4f、.aac、.webm。</p>
 * @method integer getOriginAddressType() 获取<p>原站地址类型： 1 =&gt; IP 类型。 2 =&gt; 域名类型。</p>
 * @method void setOriginAddressType(integer $OriginAddressType) 设置<p>原站地址类型： 1 =&gt; IP 类型。 2 =&gt; 域名类型。</p>
 * @method string getOriginHost() 获取<p>原站 host。</p>
 * @method void setOriginHost(string $OriginHost) 设置<p>原站 host。</p>
 * @method array getOriginAddress() 获取<p>原站地址信息，每项用冒号分割域名（ip）、端口信息。 端口为空也要带上分号，表示取默认端口。</p>
 * @method void setOriginAddress(array $OriginAddress) 设置<p>原站地址信息，每项用冒号分割域名（ip）、端口信息。 端口为空也要带上分号，表示取默认端口。</p>
 * @method string getPassThroughHttpHeader() 获取<p>是否透传 http 头信息，可取值：on、off。</p>
 * @method void setPassThroughHttpHeader(string $PassThroughHttpHeader) 设置<p>是否透传 http 头信息，可取值：on、off。</p>
 * @method string getPassThroughResponse() 获取<p>是否透传相应，可取值：on、off。</p>
 * @method void setPassThroughResponse(string $PassThroughResponse) 设置<p>是否透传相应，可取值：on、off。</p>
 * @method string getPassThroughParam() 获取<p>是否透传参数，可取值：on、off。</p>
 * @method void setPassThroughParam(string $PassThroughParam) 设置<p>是否透传参数，可取值：on、off。</p>
 * @method array getUrlReplaceRules() 获取<p>url改写， 格式为： url1&lt;|&gt;url2; 其中，&lt;|&gt; 为分隔符。 url1、url2 长度限制100，不可包含特殊字符。</p>
 * @method void setUrlReplaceRules(array $UrlReplaceRules) 设置<p>url改写， 格式为： url1&lt;|&gt;url2; 其中，&lt;|&gt; 为分隔符。 url1、url2 长度限制100，不可包含特殊字符。</p>
 * @method string getOptionsRequest() 获取<p>options 支持，可取值：on、off，默认值：off。</p>
 * @method void setOptionsRequest(string $OptionsRequest) 设置<p>options 支持，可取值：on、off，默认值：off。</p>
 * @method integer getOriginTimeout() 获取<p>回源超时时间，单位 ms，取值范围：1 ～ 60000，默认值：10000。</p>
 * @method void setOriginTimeout(integer $OriginTimeout) 设置<p>回源超时时间，单位 ms，取值范围：1 ～ 60000，默认值：10000。</p>
 * @method integer getOriginRetryTimes() 获取<p>重试次数，单位 次，取值范围：1 ～ 10。</p>
 * @method void setOriginRetryTimes(integer $OriginRetryTimes) 设置<p>重试次数，单位 次，取值范围：1 ～ 10。</p>
 * @method array getCacheStatusCode() 获取<p>状态码缓存，数组元素格式： cacheKey:interval cacheKey 可取值：cache_400_sec、cache_403_sec、cache_404_sec、cache_405_sec、cache_500_sec、cache_503_sec、cache_504_sec。 interval 单位 s。</p>
 * @method void setCacheStatusCode(array $CacheStatusCode) 设置<p>状态码缓存，数组元素格式： cacheKey:interval cacheKey 可取值：cache_400_sec、cache_403_sec、cache_404_sec、cache_405_sec、cache_500_sec、cache_503_sec、cache_504_sec。 interval 单位 s。</p>
 * @method integer getCache() 获取<p>缓存时间，单位 s，取值范围：0 ～ 31536000。</p>
 * @method void setCache(integer $Cache) 设置<p>缓存时间，单位 s，取值范围：0 ～ 31536000。</p>
 * @method array getKeepParam() 获取<p>缓存键。</p>
 * @method void setKeepParam(array $KeepParam) 设置<p>缓存键。</p>
 * @method array getHttpHeader() 获取<p>设置索引自定义 header，最大支持 10 组，每一组参数、取值用空格分开，允许字符规则如下： 头部参数：由大小写字母、数字及-组成，长度支持1 ～100个字符，黑名单：Host、Connection、Content-Length、Range。 头部取值：不支持中文、不支持以$开头，长度支持1 ～ 100个字符，不允许有空格。</p>
 * @method void setHttpHeader(array $HttpHeader) 设置<p>设置索引自定义 header，最大支持 10 组，每一组参数、取值用空格分开，允许字符规则如下： 头部参数：由大小写字母、数字及-组成，长度支持1 ～100个字符，黑名单：Host、Connection、Content-Length、Range。 头部取值：不支持中文、不支持以$开头，长度支持1 ～ 100个字符，不允许有空格。</p>
 * @method integer getCustomizationCacheFollowOrigin() 获取<p>自定义回源缓存随源配置。<br>0：不开启。<br>1：开启。</p>
 * @method void setCustomizationCacheFollowOrigin(integer $CustomizationCacheFollowOrigin) 设置<p>自定义回源缓存随源配置。<br>0：不开启。<br>1：开启。</p>
 * @method array getKeepHttpHeader() 获取<p>缓存 Http 头部键。</p>
 * @method void setKeepHttpHeader(array $KeepHttpHeader) 设置<p>缓存 Http 头部键。</p>
 */
class OriginStreamCustomizationRule extends AbstractModel
{
    /**
     * @var string <p>匹配规则，可选项如下：<br>.m3u8、.mpd、.ts、.mp4、.m4s、.m4a、.m4i、.m4v、.m4f、.aac、.webm。</p>
     */
    public $MatchRule;

    /**
     * @var integer <p>原站地址类型： 1 =&gt; IP 类型。 2 =&gt; 域名类型。</p>
     */
    public $OriginAddressType;

    /**
     * @var string <p>原站 host。</p>
     */
    public $OriginHost;

    /**
     * @var array <p>原站地址信息，每项用冒号分割域名（ip）、端口信息。 端口为空也要带上分号，表示取默认端口。</p>
     */
    public $OriginAddress;

    /**
     * @var string <p>是否透传 http 头信息，可取值：on、off。</p>
     */
    public $PassThroughHttpHeader;

    /**
     * @var string <p>是否透传相应，可取值：on、off。</p>
     */
    public $PassThroughResponse;

    /**
     * @var string <p>是否透传参数，可取值：on、off。</p>
     */
    public $PassThroughParam;

    /**
     * @var array <p>url改写， 格式为： url1&lt;|&gt;url2; 其中，&lt;|&gt; 为分隔符。 url1、url2 长度限制100，不可包含特殊字符。</p>
     */
    public $UrlReplaceRules;

    /**
     * @var string <p>options 支持，可取值：on、off，默认值：off。</p>
     */
    public $OptionsRequest;

    /**
     * @var integer <p>回源超时时间，单位 ms，取值范围：1 ～ 60000，默认值：10000。</p>
     */
    public $OriginTimeout;

    /**
     * @var integer <p>重试次数，单位 次，取值范围：1 ～ 10。</p>
     */
    public $OriginRetryTimes;

    /**
     * @var array <p>状态码缓存，数组元素格式： cacheKey:interval cacheKey 可取值：cache_400_sec、cache_403_sec、cache_404_sec、cache_405_sec、cache_500_sec、cache_503_sec、cache_504_sec。 interval 单位 s。</p>
     */
    public $CacheStatusCode;

    /**
     * @var integer <p>缓存时间，单位 s，取值范围：0 ～ 31536000。</p>
     */
    public $Cache;

    /**
     * @var array <p>缓存键。</p>
     */
    public $KeepParam;

    /**
     * @var array <p>设置索引自定义 header，最大支持 10 组，每一组参数、取值用空格分开，允许字符规则如下： 头部参数：由大小写字母、数字及-组成，长度支持1 ～100个字符，黑名单：Host、Connection、Content-Length、Range。 头部取值：不支持中文、不支持以$开头，长度支持1 ～ 100个字符，不允许有空格。</p>
     */
    public $HttpHeader;

    /**
     * @var integer <p>自定义回源缓存随源配置。<br>0：不开启。<br>1：开启。</p>
     */
    public $CustomizationCacheFollowOrigin;

    /**
     * @var array <p>缓存 Http 头部键。</p>
     */
    public $KeepHttpHeader;

    /**
     * @param string $MatchRule <p>匹配规则，可选项如下：<br>.m3u8、.mpd、.ts、.mp4、.m4s、.m4a、.m4i、.m4v、.m4f、.aac、.webm。</p>
     * @param integer $OriginAddressType <p>原站地址类型： 1 =&gt; IP 类型。 2 =&gt; 域名类型。</p>
     * @param string $OriginHost <p>原站 host。</p>
     * @param array $OriginAddress <p>原站地址信息，每项用冒号分割域名（ip）、端口信息。 端口为空也要带上分号，表示取默认端口。</p>
     * @param string $PassThroughHttpHeader <p>是否透传 http 头信息，可取值：on、off。</p>
     * @param string $PassThroughResponse <p>是否透传相应，可取值：on、off。</p>
     * @param string $PassThroughParam <p>是否透传参数，可取值：on、off。</p>
     * @param array $UrlReplaceRules <p>url改写， 格式为： url1&lt;|&gt;url2; 其中，&lt;|&gt; 为分隔符。 url1、url2 长度限制100，不可包含特殊字符。</p>
     * @param string $OptionsRequest <p>options 支持，可取值：on、off，默认值：off。</p>
     * @param integer $OriginTimeout <p>回源超时时间，单位 ms，取值范围：1 ～ 60000，默认值：10000。</p>
     * @param integer $OriginRetryTimes <p>重试次数，单位 次，取值范围：1 ～ 10。</p>
     * @param array $CacheStatusCode <p>状态码缓存，数组元素格式： cacheKey:interval cacheKey 可取值：cache_400_sec、cache_403_sec、cache_404_sec、cache_405_sec、cache_500_sec、cache_503_sec、cache_504_sec。 interval 单位 s。</p>
     * @param integer $Cache <p>缓存时间，单位 s，取值范围：0 ～ 31536000。</p>
     * @param array $KeepParam <p>缓存键。</p>
     * @param array $HttpHeader <p>设置索引自定义 header，最大支持 10 组，每一组参数、取值用空格分开，允许字符规则如下： 头部参数：由大小写字母、数字及-组成，长度支持1 ～100个字符，黑名单：Host、Connection、Content-Length、Range。 头部取值：不支持中文、不支持以$开头，长度支持1 ～ 100个字符，不允许有空格。</p>
     * @param integer $CustomizationCacheFollowOrigin <p>自定义回源缓存随源配置。<br>0：不开启。<br>1：开启。</p>
     * @param array $KeepHttpHeader <p>缓存 Http 头部键。</p>
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
        if (array_key_exists("MatchRule",$param) and $param["MatchRule"] !== null) {
            $this->MatchRule = $param["MatchRule"];
        }

        if (array_key_exists("OriginAddressType",$param) and $param["OriginAddressType"] !== null) {
            $this->OriginAddressType = $param["OriginAddressType"];
        }

        if (array_key_exists("OriginHost",$param) and $param["OriginHost"] !== null) {
            $this->OriginHost = $param["OriginHost"];
        }

        if (array_key_exists("OriginAddress",$param) and $param["OriginAddress"] !== null) {
            $this->OriginAddress = $param["OriginAddress"];
        }

        if (array_key_exists("PassThroughHttpHeader",$param) and $param["PassThroughHttpHeader"] !== null) {
            $this->PassThroughHttpHeader = $param["PassThroughHttpHeader"];
        }

        if (array_key_exists("PassThroughResponse",$param) and $param["PassThroughResponse"] !== null) {
            $this->PassThroughResponse = $param["PassThroughResponse"];
        }

        if (array_key_exists("PassThroughParam",$param) and $param["PassThroughParam"] !== null) {
            $this->PassThroughParam = $param["PassThroughParam"];
        }

        if (array_key_exists("UrlReplaceRules",$param) and $param["UrlReplaceRules"] !== null) {
            $this->UrlReplaceRules = $param["UrlReplaceRules"];
        }

        if (array_key_exists("OptionsRequest",$param) and $param["OptionsRequest"] !== null) {
            $this->OptionsRequest = $param["OptionsRequest"];
        }

        if (array_key_exists("OriginTimeout",$param) and $param["OriginTimeout"] !== null) {
            $this->OriginTimeout = $param["OriginTimeout"];
        }

        if (array_key_exists("OriginRetryTimes",$param) and $param["OriginRetryTimes"] !== null) {
            $this->OriginRetryTimes = $param["OriginRetryTimes"];
        }

        if (array_key_exists("CacheStatusCode",$param) and $param["CacheStatusCode"] !== null) {
            $this->CacheStatusCode = $param["CacheStatusCode"];
        }

        if (array_key_exists("Cache",$param) and $param["Cache"] !== null) {
            $this->Cache = $param["Cache"];
        }

        if (array_key_exists("KeepParam",$param) and $param["KeepParam"] !== null) {
            $this->KeepParam = $param["KeepParam"];
        }

        if (array_key_exists("HttpHeader",$param) and $param["HttpHeader"] !== null) {
            $this->HttpHeader = $param["HttpHeader"];
        }

        if (array_key_exists("CustomizationCacheFollowOrigin",$param) and $param["CustomizationCacheFollowOrigin"] !== null) {
            $this->CustomizationCacheFollowOrigin = $param["CustomizationCacheFollowOrigin"];
        }

        if (array_key_exists("KeepHttpHeader",$param) and $param["KeepHttpHeader"] !== null) {
            $this->KeepHttpHeader = $param["KeepHttpHeader"];
        }
    }
}
