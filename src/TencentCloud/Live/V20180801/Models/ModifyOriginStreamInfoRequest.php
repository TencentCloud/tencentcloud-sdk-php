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
 * ModifyOriginStreamInfo请求参数结构体
 *
 * @method string getDomainName() 获取<p>域名。</p>
 * @method void setDomainName(string $DomainName) 设置<p>域名。</p>
 * @method string getOriginStreamPlayType() 获取<p>源站播放协议，可取值：rtmp、flv、hls、dash、hls|dash、customization。</p>
 * @method void setOriginStreamPlayType(string $OriginStreamPlayType) 设置<p>源站播放协议，可取值：rtmp、flv、hls、dash、hls|dash、customization。</p>
 * @method array getCdnStreamPlayType() 获取<p>播放协议，可取值：rtmp、flv、hls、dash、hls|dash、customization。<br>自定义回源协议填写 customization。</p>
 * @method void setCdnStreamPlayType(array $CdnStreamPlayType) 设置<p>播放协议，可取值：rtmp、flv、hls、dash、hls|dash、customization。<br>自定义回源协议填写 customization。</p>
 * @method integer getOriginStreamType() 获取<p>原站类型：<br>1 =&gt; 直播原站。<br>2 =&gt; mediaPackage。</p>
 * @method void setOriginStreamType(integer $OriginStreamType) 设置<p>原站类型：<br>1 =&gt; 直播原站。<br>2 =&gt; mediaPackage。</p>
 * @method array getOriginAddress() 获取<p>原站地址信息，每项用冒号分割域名（ip）、端口信息。<br>端口为空也要带上分号，表示取默认端口。<br>自定义回源协议填写 customization。</p>
 * @method void setOriginAddress(array $OriginAddress) 设置<p>原站地址信息，每项用冒号分割域名（ip）、端口信息。<br>端口为空也要带上分号，表示取默认端口。<br>自定义回源协议填写 customization。</p>
 * @method integer getOriginAddressType() 获取<p>原站地址类型：<br>1 =&gt; IP 类型。<br>2 =&gt; 域名类型。</p>
 * @method void setOriginAddressType(integer $OriginAddressType) 设置<p>原站地址类型：<br>1 =&gt; IP 类型。<br>2 =&gt; 域名类型。</p>
 * @method string getCustomerName() 获取<p>自定义名称</p>
 * @method void setCustomerName(string $CustomerName) 设置<p>自定义名称</p>
 * @method string getOriginHost() 获取<p>原站 host。<br>当原站播放协议为 hls 时，传递该字段才会生效。</p>
 * @method void setOriginHost(string $OriginHost) 设置<p>原站 host。<br>当原站播放协议为 hls 时，传递该字段才会生效。</p>
 * @method integer getOriginTimeout() 获取<p>超时时间，单位 ms，取值范围：1 ～ 60000，默认值：10000。</p>
 * @method void setOriginTimeout(integer $OriginTimeout) 设置<p>超时时间，单位 ms，取值范围：1 ～ 60000，默认值：10000。</p>
 * @method integer getOriginRetryTimes() 获取<p>重试次数，单位 次，取值范围：1 ～ 10，默认值：10。</p>
 * @method void setOriginRetryTimes(integer $OriginRetryTimes) 设置<p>重试次数，单位 次，取值范围：1 ～ 10，默认值：10。</p>
 * @method string getPassThroughHttpHeader() 获取<p>是否透传 http 头信息，可取值：on、off。<br>当原站播放协议为 hls 时，传递该字段才会生效。</p>
 * @method void setPassThroughHttpHeader(string $PassThroughHttpHeader) 设置<p>是否透传 http 头信息，可取值：on、off。<br>当原站播放协议为 hls 时，传递该字段才会生效。</p>
 * @method string getPassThroughResponse() 获取<p>是否透传相应，可取值：on、off。<br>当原站播放协议为 hls 时，传递该字段才会生效。</p>
 * @method void setPassThroughResponse(string $PassThroughResponse) 设置<p>是否透传相应，可取值：on、off。<br>当原站播放协议为 hls 时，传递该字段才会生效。</p>
 * @method string getPassThroughParam() 获取<p>是否透传参数，可取值：on、off。<br>当原站播放协议为 hls 时，传递该字段才会生效。</p>
 * @method void setPassThroughParam(string $PassThroughParam) 设置<p>是否透传参数，可取值：on、off。<br>当原站播放协议为 hls 时，传递该字段才会生效。</p>
 * @method integer getIndexerCache() 获取<p>索引缓存，单位 ms，取值范围：1 ～ 60000，默认值：10000。<br>当原站播放协议为 hls 时，传递该字段才会生效。</p>
 * @method void setIndexerCache(integer $IndexerCache) 设置<p>索引缓存，单位 ms，取值范围：1 ～ 60000，默认值：10000。<br>当原站播放协议为 hls 时，传递该字段才会生效。</p>
 * @method integer getFragmentCache() 获取<p>分片缓存，单位 ms，取值范围：1 ～ 60000，默认值：10000。<br>当原站播放协议为 hls 时，传递该字段才会生效。</p>
 * @method void setFragmentCache(integer $FragmentCache) 设置<p>分片缓存，单位 ms，取值范围：1 ～ 60000，默认值：10000。<br>当原站播放协议为 hls 时，传递该字段才会生效。</p>
 * @method integer getHlsPlayFragmentCount() 获取<p>分片数，单位 个，取值范围：1 ～ 10，默认值：3。</p>
 * @method void setHlsPlayFragmentCount(integer $HlsPlayFragmentCount) 设置<p>分片数，单位 个，取值范围：1 ～ 10，默认值：3。</p>
 * @method integer getHlsPlayFragmentDuration() 获取<p>分片时长，单位 ms，取值范围：1 ～ 10000，默认值：3000。</p>
 * @method void setHlsPlayFragmentDuration(integer $HlsPlayFragmentDuration) 设置<p>分片时长，单位 ms，取值范围：1 ～ 10000，默认值：3000。</p>
 * @method string getTimeJitter() 获取<p>时间戳修正，可取值：on、off，默认值：off。<br>当原站播放协议为 rtmp、flv 时，传递该字段才会生效。</p>
 * @method void setTimeJitter(string $TimeJitter) 设置<p>时间戳修正，可取值：on、off，默认值：off。<br>当原站播放协议为 rtmp、flv 时，传递该字段才会生效。</p>
 * @method string getUsingHttps() 获取<p>https 回源，可取值：on、off，默认值：off。<br>当原站播放协议为flv、hls时，传递此字段才会生效。</p>
 * @method void setUsingHttps(string $UsingHttps) 设置<p>https 回源，可取值：on、off，默认值：off。<br>当原站播放协议为flv、hls时，传递此字段才会生效。</p>
 * @method string getCacheFollowOrigin() 获取<p>遵循原站，可取值：on、off，默认值：off。<br>当原站播放协议为hls时，传递此字段才会生效。</p>
 * @method void setCacheFollowOrigin(string $CacheFollowOrigin) 设置<p>遵循原站，可取值：on、off，默认值：off。<br>当原站播放协议为hls时，传递此字段才会生效。</p>
 * @method array getCacheStatusCode() 获取<p>状态码缓存，数组元素格式：<br>cacheKey:interval<br>cacheKey 可取值：cache_400_sec、cache_403_sec、cache_404_sec、cache_405_sec、cache_500_sec、cache_503_sec、cache_504_sec。<br>interval 单位 ms。<br>当原站播放协议为hls时，传递此字段才会生效。</p>
 * @method void setCacheStatusCode(array $CacheStatusCode) 设置<p>状态码缓存，数组元素格式：<br>cacheKey:interval<br>cacheKey 可取值：cache_400_sec、cache_403_sec、cache_404_sec、cache_405_sec、cache_500_sec、cache_503_sec、cache_504_sec。<br>interval 单位 ms。<br>当原站播放协议为hls时，传递此字段才会生效。</p>
 * @method array getUrlReplaceRules() 获取<p>url改写， 格式为： url1&lt;|&gt;url2; 其中，&lt;|&gt; 为分隔符。<br>url1、url2 长度限制100，不可包含特殊字符。<br>当原站播放协议为hls时，传递此字段才会生效。</p>
 * @method void setUrlReplaceRules(array $UrlReplaceRules) 设置<p>url改写， 格式为： url1&lt;|&gt;url2; 其中，&lt;|&gt; 为分隔符。<br>url1、url2 长度限制100，不可包含特殊字符。<br>当原站播放协议为hls时，传递此字段才会生效。</p>
 * @method string getOptionsRequest() 获取<p>options 支持，可取值：on、off，默认值：off。<br>当原站播放协议为hls时，传递此字段才会生效。</p>
 * @method void setOptionsRequest(string $OptionsRequest) 设置<p>options 支持，可取值：on、off，默认值：off。<br>当原站播放协议为hls时，传递此字段才会生效。</p>
 * @method string getFollowRedirect() 获取<p>follow 301/302，可取值：on、off，默认值：off。<br>当原站播放协议为hls时，传递此字段才会生效。</p>
 * @method void setFollowRedirect(string $FollowRedirect) 设置<p>follow 301/302，可取值：on、off，默认值：off。<br>当原站播放协议为hls时，传递此字段才会生效。</p>
 * @method array getIndexerKeepParam() 获取<p>当 OriginStreamPlayType 为 hls 时生效，设置索引缓存保留指定参数列表，最多支持 30 组，每个参数小于等于 20 字符。</p>
 * @method void setIndexerKeepParam(array $IndexerKeepParam) 设置<p>当 OriginStreamPlayType 为 hls 时生效，设置索引缓存保留指定参数列表，最多支持 30 组，每个参数小于等于 20 字符。</p>
 * @method array getFragmentKeepParam() 获取<p>当 OriginStreamPlayType 为 hls 时生效，设置分片缓存保留指定参数列表，最多支持 30 组，每个参数小于等于 20 字符。</p>
 * @method void setFragmentKeepParam(array $FragmentKeepParam) 设置<p>当 OriginStreamPlayType 为 hls 时生效，设置分片缓存保留指定参数列表，最多支持 30 组，每个参数小于等于 20 字符。</p>
 * @method string getMediaPackageType() 获取<p>当 OriginStreamType = 2 时有效，表示 mediapackage 具体类型：<br>media_package =&gt; 仅配置普通频道。<br>media_package_pure_ad =&gt; 仅配置广告。<br>media_package_mix_ad =&gt; 同时配置普通频道和广告。<br>注意：配置时候，优先使用 media_package。和 MediaPackageChannelTypes 字段配合使用。</p>
 * @method void setMediaPackageType(string $MediaPackageType) 设置<p>当 OriginStreamType = 2 时有效，表示 mediapackage 具体类型：<br>media_package =&gt; 仅配置普通频道。<br>media_package_pure_ad =&gt; 仅配置广告。<br>media_package_mix_ad =&gt; 同时配置普通频道和广告。<br>注意：配置时候，优先使用 media_package。和 MediaPackageChannelTypes 字段配合使用。</p>
 * @method array getMediaPackageChannelTypes() 获取<p>当 OriginStreamType = 2 且 MediaPackageType = media_package 时有效，表示 mediapackage 频道类型，可组合如下值：normal（频道）、ssai（广告）、linear_assembly（线性组装）。</p>
 * @method void setMediaPackageChannelTypes(array $MediaPackageChannelTypes) 设置<p>当 OriginStreamType = 2 且 MediaPackageType = media_package 时有效，表示 mediapackage 频道类型，可组合如下值：normal（频道）、ssai（广告）、linear_assembly（线性组装）。</p>
 * @method array getIndexerHeader() 获取<p>当 OriginStreamPlayType 为 hls 时生效，设置索引自定义 header，最大支持 10 组，每一组参数、取值用空格分开，允许字符规则如下：<br>头部参数：由大小写字母、数字及-组成，长度支持1 ～100个字符，黑名单：Host、Connection、Content-Length、Range。<br>头部取值：不支持中文、不支持以$开头，长度支持1 ～ 100个字符，不允许有空格。</p>
 * @method void setIndexerHeader(array $IndexerHeader) 设置<p>当 OriginStreamPlayType 为 hls 时生效，设置索引自定义 header，最大支持 10 组，每一组参数、取值用空格分开，允许字符规则如下：<br>头部参数：由大小写字母、数字及-组成，长度支持1 ～100个字符，黑名单：Host、Connection、Content-Length、Range。<br>头部取值：不支持中文、不支持以$开头，长度支持1 ～ 100个字符，不允许有空格。</p>
 * @method array getFragmentHeader() 获取<p>当 OriginStreamPlayType 为 hls 时生效，设置分片自定义 header，最大支持 10 组，每一组参数、取值用空格分开，允许字符规则如下：<br>头部参数：由大小写字母、数字及-组成，长度支持1 ～100个字符，黑名单：Host、Connection、Content-Length、Range。<br>头部取值：不支持中文、不支持以$开头，长度支持1 ～ 100个字符，不允许有空格。</p>
 * @method void setFragmentHeader(array $FragmentHeader) 设置<p>当 OriginStreamPlayType 为 hls 时生效，设置分片自定义 header，最大支持 10 组，每一组参数、取值用空格分开，允许字符规则如下：<br>头部参数：由大小写字母、数字及-组成，长度支持1 ～100个字符，黑名单：Host、Connection、Content-Length、Range。<br>头部取值：不支持中文、不支持以$开头，长度支持1 ～ 100个字符，不允许有空格。</p>
 * @method array getCustomizationRules() 获取<p>自定义回源规则列表，当 OriginStreamPlayType 为 customization 时候生效。</p>
 * @method void setCustomizationRules(array $CustomizationRules) 设置<p>自定义回源规则列表，当 OriginStreamPlayType 为 customization 时候生效。</p>
 * @method integer getCacheFormatRule() 获取<p>缓存格式规则。<br>0：默认格式。<br>1：云直播源站格式。<br>当 OriginStreamPlayType 为 customization 时候生效。</p>
 * @method void setCacheFormatRule(integer $CacheFormatRule) 设置<p>缓存格式规则。<br>0：默认格式。<br>1：云直播源站格式。<br>当 OriginStreamPlayType 为 customization 时候生效。</p>
 */
class ModifyOriginStreamInfoRequest extends AbstractModel
{
    /**
     * @var string <p>域名。</p>
     */
    public $DomainName;

    /**
     * @var string <p>源站播放协议，可取值：rtmp、flv、hls、dash、hls|dash、customization。</p>
     */
    public $OriginStreamPlayType;

    /**
     * @var array <p>播放协议，可取值：rtmp、flv、hls、dash、hls|dash、customization。<br>自定义回源协议填写 customization。</p>
     */
    public $CdnStreamPlayType;

    /**
     * @var integer <p>原站类型：<br>1 =&gt; 直播原站。<br>2 =&gt; mediaPackage。</p>
     */
    public $OriginStreamType;

    /**
     * @var array <p>原站地址信息，每项用冒号分割域名（ip）、端口信息。<br>端口为空也要带上分号，表示取默认端口。<br>自定义回源协议填写 customization。</p>
     */
    public $OriginAddress;

    /**
     * @var integer <p>原站地址类型：<br>1 =&gt; IP 类型。<br>2 =&gt; 域名类型。</p>
     */
    public $OriginAddressType;

    /**
     * @var string <p>自定义名称</p>
     */
    public $CustomerName;

    /**
     * @var string <p>原站 host。<br>当原站播放协议为 hls 时，传递该字段才会生效。</p>
     */
    public $OriginHost;

    /**
     * @var integer <p>超时时间，单位 ms，取值范围：1 ～ 60000，默认值：10000。</p>
     */
    public $OriginTimeout;

    /**
     * @var integer <p>重试次数，单位 次，取值范围：1 ～ 10，默认值：10。</p>
     */
    public $OriginRetryTimes;

    /**
     * @var string <p>是否透传 http 头信息，可取值：on、off。<br>当原站播放协议为 hls 时，传递该字段才会生效。</p>
     */
    public $PassThroughHttpHeader;

    /**
     * @var string <p>是否透传相应，可取值：on、off。<br>当原站播放协议为 hls 时，传递该字段才会生效。</p>
     */
    public $PassThroughResponse;

    /**
     * @var string <p>是否透传参数，可取值：on、off。<br>当原站播放协议为 hls 时，传递该字段才会生效。</p>
     */
    public $PassThroughParam;

    /**
     * @var integer <p>索引缓存，单位 ms，取值范围：1 ～ 60000，默认值：10000。<br>当原站播放协议为 hls 时，传递该字段才会生效。</p>
     */
    public $IndexerCache;

    /**
     * @var integer <p>分片缓存，单位 ms，取值范围：1 ～ 60000，默认值：10000。<br>当原站播放协议为 hls 时，传递该字段才会生效。</p>
     */
    public $FragmentCache;

    /**
     * @var integer <p>分片数，单位 个，取值范围：1 ～ 10，默认值：3。</p>
     */
    public $HlsPlayFragmentCount;

    /**
     * @var integer <p>分片时长，单位 ms，取值范围：1 ～ 10000，默认值：3000。</p>
     */
    public $HlsPlayFragmentDuration;

    /**
     * @var string <p>时间戳修正，可取值：on、off，默认值：off。<br>当原站播放协议为 rtmp、flv 时，传递该字段才会生效。</p>
     */
    public $TimeJitter;

    /**
     * @var string <p>https 回源，可取值：on、off，默认值：off。<br>当原站播放协议为flv、hls时，传递此字段才会生效。</p>
     */
    public $UsingHttps;

    /**
     * @var string <p>遵循原站，可取值：on、off，默认值：off。<br>当原站播放协议为hls时，传递此字段才会生效。</p>
     */
    public $CacheFollowOrigin;

    /**
     * @var array <p>状态码缓存，数组元素格式：<br>cacheKey:interval<br>cacheKey 可取值：cache_400_sec、cache_403_sec、cache_404_sec、cache_405_sec、cache_500_sec、cache_503_sec、cache_504_sec。<br>interval 单位 ms。<br>当原站播放协议为hls时，传递此字段才会生效。</p>
     */
    public $CacheStatusCode;

    /**
     * @var array <p>url改写， 格式为： url1&lt;|&gt;url2; 其中，&lt;|&gt; 为分隔符。<br>url1、url2 长度限制100，不可包含特殊字符。<br>当原站播放协议为hls时，传递此字段才会生效。</p>
     */
    public $UrlReplaceRules;

    /**
     * @var string <p>options 支持，可取值：on、off，默认值：off。<br>当原站播放协议为hls时，传递此字段才会生效。</p>
     */
    public $OptionsRequest;

    /**
     * @var string <p>follow 301/302，可取值：on、off，默认值：off。<br>当原站播放协议为hls时，传递此字段才会生效。</p>
     */
    public $FollowRedirect;

    /**
     * @var array <p>当 OriginStreamPlayType 为 hls 时生效，设置索引缓存保留指定参数列表，最多支持 30 组，每个参数小于等于 20 字符。</p>
     */
    public $IndexerKeepParam;

    /**
     * @var array <p>当 OriginStreamPlayType 为 hls 时生效，设置分片缓存保留指定参数列表，最多支持 30 组，每个参数小于等于 20 字符。</p>
     */
    public $FragmentKeepParam;

    /**
     * @var string <p>当 OriginStreamType = 2 时有效，表示 mediapackage 具体类型：<br>media_package =&gt; 仅配置普通频道。<br>media_package_pure_ad =&gt; 仅配置广告。<br>media_package_mix_ad =&gt; 同时配置普通频道和广告。<br>注意：配置时候，优先使用 media_package。和 MediaPackageChannelTypes 字段配合使用。</p>
     */
    public $MediaPackageType;

    /**
     * @var array <p>当 OriginStreamType = 2 且 MediaPackageType = media_package 时有效，表示 mediapackage 频道类型，可组合如下值：normal（频道）、ssai（广告）、linear_assembly（线性组装）。</p>
     */
    public $MediaPackageChannelTypes;

    /**
     * @var array <p>当 OriginStreamPlayType 为 hls 时生效，设置索引自定义 header，最大支持 10 组，每一组参数、取值用空格分开，允许字符规则如下：<br>头部参数：由大小写字母、数字及-组成，长度支持1 ～100个字符，黑名单：Host、Connection、Content-Length、Range。<br>头部取值：不支持中文、不支持以$开头，长度支持1 ～ 100个字符，不允许有空格。</p>
     */
    public $IndexerHeader;

    /**
     * @var array <p>当 OriginStreamPlayType 为 hls 时生效，设置分片自定义 header，最大支持 10 组，每一组参数、取值用空格分开，允许字符规则如下：<br>头部参数：由大小写字母、数字及-组成，长度支持1 ～100个字符，黑名单：Host、Connection、Content-Length、Range。<br>头部取值：不支持中文、不支持以$开头，长度支持1 ～ 100个字符，不允许有空格。</p>
     */
    public $FragmentHeader;

    /**
     * @var array <p>自定义回源规则列表，当 OriginStreamPlayType 为 customization 时候生效。</p>
     */
    public $CustomizationRules;

    /**
     * @var integer <p>缓存格式规则。<br>0：默认格式。<br>1：云直播源站格式。<br>当 OriginStreamPlayType 为 customization 时候生效。</p>
     */
    public $CacheFormatRule;

    /**
     * @param string $DomainName <p>域名。</p>
     * @param string $OriginStreamPlayType <p>源站播放协议，可取值：rtmp、flv、hls、dash、hls|dash、customization。</p>
     * @param array $CdnStreamPlayType <p>播放协议，可取值：rtmp、flv、hls、dash、hls|dash、customization。<br>自定义回源协议填写 customization。</p>
     * @param integer $OriginStreamType <p>原站类型：<br>1 =&gt; 直播原站。<br>2 =&gt; mediaPackage。</p>
     * @param array $OriginAddress <p>原站地址信息，每项用冒号分割域名（ip）、端口信息。<br>端口为空也要带上分号，表示取默认端口。<br>自定义回源协议填写 customization。</p>
     * @param integer $OriginAddressType <p>原站地址类型：<br>1 =&gt; IP 类型。<br>2 =&gt; 域名类型。</p>
     * @param string $CustomerName <p>自定义名称</p>
     * @param string $OriginHost <p>原站 host。<br>当原站播放协议为 hls 时，传递该字段才会生效。</p>
     * @param integer $OriginTimeout <p>超时时间，单位 ms，取值范围：1 ～ 60000，默认值：10000。</p>
     * @param integer $OriginRetryTimes <p>重试次数，单位 次，取值范围：1 ～ 10，默认值：10。</p>
     * @param string $PassThroughHttpHeader <p>是否透传 http 头信息，可取值：on、off。<br>当原站播放协议为 hls 时，传递该字段才会生效。</p>
     * @param string $PassThroughResponse <p>是否透传相应，可取值：on、off。<br>当原站播放协议为 hls 时，传递该字段才会生效。</p>
     * @param string $PassThroughParam <p>是否透传参数，可取值：on、off。<br>当原站播放协议为 hls 时，传递该字段才会生效。</p>
     * @param integer $IndexerCache <p>索引缓存，单位 ms，取值范围：1 ～ 60000，默认值：10000。<br>当原站播放协议为 hls 时，传递该字段才会生效。</p>
     * @param integer $FragmentCache <p>分片缓存，单位 ms，取值范围：1 ～ 60000，默认值：10000。<br>当原站播放协议为 hls 时，传递该字段才会生效。</p>
     * @param integer $HlsPlayFragmentCount <p>分片数，单位 个，取值范围：1 ～ 10，默认值：3。</p>
     * @param integer $HlsPlayFragmentDuration <p>分片时长，单位 ms，取值范围：1 ～ 10000，默认值：3000。</p>
     * @param string $TimeJitter <p>时间戳修正，可取值：on、off，默认值：off。<br>当原站播放协议为 rtmp、flv 时，传递该字段才会生效。</p>
     * @param string $UsingHttps <p>https 回源，可取值：on、off，默认值：off。<br>当原站播放协议为flv、hls时，传递此字段才会生效。</p>
     * @param string $CacheFollowOrigin <p>遵循原站，可取值：on、off，默认值：off。<br>当原站播放协议为hls时，传递此字段才会生效。</p>
     * @param array $CacheStatusCode <p>状态码缓存，数组元素格式：<br>cacheKey:interval<br>cacheKey 可取值：cache_400_sec、cache_403_sec、cache_404_sec、cache_405_sec、cache_500_sec、cache_503_sec、cache_504_sec。<br>interval 单位 ms。<br>当原站播放协议为hls时，传递此字段才会生效。</p>
     * @param array $UrlReplaceRules <p>url改写， 格式为： url1&lt;|&gt;url2; 其中，&lt;|&gt; 为分隔符。<br>url1、url2 长度限制100，不可包含特殊字符。<br>当原站播放协议为hls时，传递此字段才会生效。</p>
     * @param string $OptionsRequest <p>options 支持，可取值：on、off，默认值：off。<br>当原站播放协议为hls时，传递此字段才会生效。</p>
     * @param string $FollowRedirect <p>follow 301/302，可取值：on、off，默认值：off。<br>当原站播放协议为hls时，传递此字段才会生效。</p>
     * @param array $IndexerKeepParam <p>当 OriginStreamPlayType 为 hls 时生效，设置索引缓存保留指定参数列表，最多支持 30 组，每个参数小于等于 20 字符。</p>
     * @param array $FragmentKeepParam <p>当 OriginStreamPlayType 为 hls 时生效，设置分片缓存保留指定参数列表，最多支持 30 组，每个参数小于等于 20 字符。</p>
     * @param string $MediaPackageType <p>当 OriginStreamType = 2 时有效，表示 mediapackage 具体类型：<br>media_package =&gt; 仅配置普通频道。<br>media_package_pure_ad =&gt; 仅配置广告。<br>media_package_mix_ad =&gt; 同时配置普通频道和广告。<br>注意：配置时候，优先使用 media_package。和 MediaPackageChannelTypes 字段配合使用。</p>
     * @param array $MediaPackageChannelTypes <p>当 OriginStreamType = 2 且 MediaPackageType = media_package 时有效，表示 mediapackage 频道类型，可组合如下值：normal（频道）、ssai（广告）、linear_assembly（线性组装）。</p>
     * @param array $IndexerHeader <p>当 OriginStreamPlayType 为 hls 时生效，设置索引自定义 header，最大支持 10 组，每一组参数、取值用空格分开，允许字符规则如下：<br>头部参数：由大小写字母、数字及-组成，长度支持1 ～100个字符，黑名单：Host、Connection、Content-Length、Range。<br>头部取值：不支持中文、不支持以$开头，长度支持1 ～ 100个字符，不允许有空格。</p>
     * @param array $FragmentHeader <p>当 OriginStreamPlayType 为 hls 时生效，设置分片自定义 header，最大支持 10 组，每一组参数、取值用空格分开，允许字符规则如下：<br>头部参数：由大小写字母、数字及-组成，长度支持1 ～100个字符，黑名单：Host、Connection、Content-Length、Range。<br>头部取值：不支持中文、不支持以$开头，长度支持1 ～ 100个字符，不允许有空格。</p>
     * @param array $CustomizationRules <p>自定义回源规则列表，当 OriginStreamPlayType 为 customization 时候生效。</p>
     * @param integer $CacheFormatRule <p>缓存格式规则。<br>0：默认格式。<br>1：云直播源站格式。<br>当 OriginStreamPlayType 为 customization 时候生效。</p>
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
        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("OriginStreamPlayType",$param) and $param["OriginStreamPlayType"] !== null) {
            $this->OriginStreamPlayType = $param["OriginStreamPlayType"];
        }

        if (array_key_exists("CdnStreamPlayType",$param) and $param["CdnStreamPlayType"] !== null) {
            $this->CdnStreamPlayType = $param["CdnStreamPlayType"];
        }

        if (array_key_exists("OriginStreamType",$param) and $param["OriginStreamType"] !== null) {
            $this->OriginStreamType = $param["OriginStreamType"];
        }

        if (array_key_exists("OriginAddress",$param) and $param["OriginAddress"] !== null) {
            $this->OriginAddress = $param["OriginAddress"];
        }

        if (array_key_exists("OriginAddressType",$param) and $param["OriginAddressType"] !== null) {
            $this->OriginAddressType = $param["OriginAddressType"];
        }

        if (array_key_exists("CustomerName",$param) and $param["CustomerName"] !== null) {
            $this->CustomerName = $param["CustomerName"];
        }

        if (array_key_exists("OriginHost",$param) and $param["OriginHost"] !== null) {
            $this->OriginHost = $param["OriginHost"];
        }

        if (array_key_exists("OriginTimeout",$param) and $param["OriginTimeout"] !== null) {
            $this->OriginTimeout = $param["OriginTimeout"];
        }

        if (array_key_exists("OriginRetryTimes",$param) and $param["OriginRetryTimes"] !== null) {
            $this->OriginRetryTimes = $param["OriginRetryTimes"];
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

        if (array_key_exists("IndexerCache",$param) and $param["IndexerCache"] !== null) {
            $this->IndexerCache = $param["IndexerCache"];
        }

        if (array_key_exists("FragmentCache",$param) and $param["FragmentCache"] !== null) {
            $this->FragmentCache = $param["FragmentCache"];
        }

        if (array_key_exists("HlsPlayFragmentCount",$param) and $param["HlsPlayFragmentCount"] !== null) {
            $this->HlsPlayFragmentCount = $param["HlsPlayFragmentCount"];
        }

        if (array_key_exists("HlsPlayFragmentDuration",$param) and $param["HlsPlayFragmentDuration"] !== null) {
            $this->HlsPlayFragmentDuration = $param["HlsPlayFragmentDuration"];
        }

        if (array_key_exists("TimeJitter",$param) and $param["TimeJitter"] !== null) {
            $this->TimeJitter = $param["TimeJitter"];
        }

        if (array_key_exists("UsingHttps",$param) and $param["UsingHttps"] !== null) {
            $this->UsingHttps = $param["UsingHttps"];
        }

        if (array_key_exists("CacheFollowOrigin",$param) and $param["CacheFollowOrigin"] !== null) {
            $this->CacheFollowOrigin = $param["CacheFollowOrigin"];
        }

        if (array_key_exists("CacheStatusCode",$param) and $param["CacheStatusCode"] !== null) {
            $this->CacheStatusCode = $param["CacheStatusCode"];
        }

        if (array_key_exists("UrlReplaceRules",$param) and $param["UrlReplaceRules"] !== null) {
            $this->UrlReplaceRules = $param["UrlReplaceRules"];
        }

        if (array_key_exists("OptionsRequest",$param) and $param["OptionsRequest"] !== null) {
            $this->OptionsRequest = $param["OptionsRequest"];
        }

        if (array_key_exists("FollowRedirect",$param) and $param["FollowRedirect"] !== null) {
            $this->FollowRedirect = $param["FollowRedirect"];
        }

        if (array_key_exists("IndexerKeepParam",$param) and $param["IndexerKeepParam"] !== null) {
            $this->IndexerKeepParam = $param["IndexerKeepParam"];
        }

        if (array_key_exists("FragmentKeepParam",$param) and $param["FragmentKeepParam"] !== null) {
            $this->FragmentKeepParam = $param["FragmentKeepParam"];
        }

        if (array_key_exists("MediaPackageType",$param) and $param["MediaPackageType"] !== null) {
            $this->MediaPackageType = $param["MediaPackageType"];
        }

        if (array_key_exists("MediaPackageChannelTypes",$param) and $param["MediaPackageChannelTypes"] !== null) {
            $this->MediaPackageChannelTypes = $param["MediaPackageChannelTypes"];
        }

        if (array_key_exists("IndexerHeader",$param) and $param["IndexerHeader"] !== null) {
            $this->IndexerHeader = $param["IndexerHeader"];
        }

        if (array_key_exists("FragmentHeader",$param) and $param["FragmentHeader"] !== null) {
            $this->FragmentHeader = $param["FragmentHeader"];
        }

        if (array_key_exists("CustomizationRules",$param) and $param["CustomizationRules"] !== null) {
            $this->CustomizationRules = [];
            foreach ($param["CustomizationRules"] as $key => $value){
                $obj = new OriginStreamCustomizationRule();
                $obj->deserialize($value);
                array_push($this->CustomizationRules, $obj);
            }
        }

        if (array_key_exists("CacheFormatRule",$param) and $param["CacheFormatRule"] !== null) {
            $this->CacheFormatRule = $param["CacheFormatRule"];
        }
    }
}
