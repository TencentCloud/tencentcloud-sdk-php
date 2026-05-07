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
 * DescribeOriginStreamInfo返回参数结构体
 *
 * @method integer getStatus() 获取<p>配置状态信息：0 配置中，1 成功，2 关闭中，3 关闭成功。</p>
 * @method void setStatus(integer $Status) 设置<p>配置状态信息：0 配置中，1 成功，2 关闭中，3 关闭成功。</p>
 * @method array getCdnStreamPlayType() 获取<p>播放类型。</p>
 * @method void setCdnStreamPlayType(array $CdnStreamPlayType) 设置<p>播放类型。</p>
 * @method integer getOriginStreamType() 获取<p>原站配置类型：1 直播原站。<br>2 streamPackage。</p>
 * @method void setOriginStreamType(integer $OriginStreamType) 设置<p>原站配置类型：1 直播原站。<br>2 streamPackage。</p>
 * @method string getOriginStreamPlayType() 获取<p>原站播放类型。</p>
 * @method void setOriginStreamPlayType(string $OriginStreamPlayType) 设置<p>原站播放类型。</p>
 * @method integer getOriginAddressType() 获取<p>原站地址类型：1 ip，2 域名。</p>
 * @method void setOriginAddressType(integer $OriginAddressType) 设置<p>原站地址类型：1 ip，2 域名。</p>
 * @method array getOriginAddress() 获取<p>原站地址信息，每项用分号分割域名（ip）、端口信息。<br>端口为空也要带上分号，表示取默认端口。</p>
 * @method void setOriginAddress(array $OriginAddress) 设置<p>原站地址信息，每项用分号分割域名（ip）、端口信息。<br>端口为空也要带上分号，表示取默认端口。</p>
 * @method integer getOriginTimeout() 获取<p>超时时间，单位 ms。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriginTimeout(integer $OriginTimeout) 设置<p>超时时间，单位 ms。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOriginRetryTimes() 获取<p>重试次数，单位 次。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriginRetryTimes(integer $OriginRetryTimes) 设置<p>重试次数，单位 次。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTimeJitter() 获取<p>时间戳修正，可取值：on、off。<br>当原站播放协议为 rtmp、flv 时，传递该字段才会生效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeJitter(string $TimeJitter) 设置<p>时间戳修正，可取值：on、off。<br>当原站播放协议为 rtmp、flv 时，传递该字段才会生效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHlsPlayFragmentCount() 获取<p>分片数，单位 个。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHlsPlayFragmentCount(integer $HlsPlayFragmentCount) 设置<p>分片数，单位 个。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHlsPlayFragmentDuration() 获取<p>分片时长，单位 ms。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHlsPlayFragmentDuration(integer $HlsPlayFragmentDuration) 设置<p>分片时长，单位 ms。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPassThroughHttpHeader() 获取<p>是否透传 http 头信息，可取值：on、off。<br>当原站播放协议为 hls 时，传递该字段才会生效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPassThroughHttpHeader(string $PassThroughHttpHeader) 设置<p>是否透传 http 头信息，可取值：on、off。<br>当原站播放协议为 hls 时，传递该字段才会生效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPassThroughResponse() 获取<p>是否透传相应，可取值：on、off。<br>当原站播放协议为 hls 时，传递该字段才会生效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPassThroughResponse(string $PassThroughResponse) 设置<p>是否透传相应，可取值：on、off。<br>当原站播放协议为 hls 时，传递该字段才会生效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPassThroughParam() 获取<p>是否透传参数，可取值：on、off。<br>当原站播放协议为 hls 时，传递该字段才会生效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPassThroughParam(string $PassThroughParam) 设置<p>是否透传参数，可取值：on、off。<br>当原站播放协议为 hls 时，传递该字段才会生效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOriginHost() 获取<p>原站 host。<br>当原站播放协议为 hls 时，传递该字段才会生效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriginHost(string $OriginHost) 设置<p>原站 host。<br>当原站播放协议为 hls 时，传递该字段才会生效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIndexerCache() 获取<p>索引缓存，单位 ms。<br>当原站播放协议为 hls 时，传递该字段才会生效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexerCache(integer $IndexerCache) 设置<p>索引缓存，单位 ms。<br>当原站播放协议为 hls 时，传递该字段才会生效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFragmentCache() 获取<p>分片缓存，单位 ms。<br>当原站播放协议为 hls 时，传递该字段才会生效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFragmentCache(integer $FragmentCache) 设置<p>分片缓存，单位 ms。<br>当原站播放协议为 hls 时，传递该字段才会生效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDomainName() 获取<p>域名。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomainName(string $DomainName) 设置<p>域名。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUsingHttps() 获取<p>https 回源，可取值：on、off。<br>当原站播放协议为flv、hls时，传递此字段才会生效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsingHttps(string $UsingHttps) 设置<p>https 回源，可取值：on、off。<br>当原站播放协议为flv、hls时，传递此字段才会生效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCacheFollowOrigin() 获取<p>是否遵循原站，可取值：on、off。<br>当原站播放协议为hls时，此字段才会生效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCacheFollowOrigin(string $CacheFollowOrigin) 设置<p>是否遵循原站，可取值：on、off。<br>当原站播放协议为hls时，此字段才会生效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCacheStatusCode() 获取<p>状态码缓存，数组元素格式：<br>cacheKey:interval<br>cacheKey 可取值：cache_400_sec、cache_403_sec、cache_404_sec、cache_405_sec、cache_500_sec、cache_503_sec、cache_504_sec。<br>interval 单位 ms。<br>当原站播放协议为hls时，此字段才会生效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCacheStatusCode(array $CacheStatusCode) 设置<p>状态码缓存，数组元素格式：<br>cacheKey:interval<br>cacheKey 可取值：cache_400_sec、cache_403_sec、cache_404_sec、cache_405_sec、cache_500_sec、cache_503_sec、cache_504_sec。<br>interval 单位 ms。<br>当原站播放协议为hls时，此字段才会生效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getUrlReplaceRules() 获取<p>url改写， 格式为： url1&lt;|&gt;url2; 其中，&lt;|&gt; 为分隔符。<br>url1、url2 长度限制100，不可包含特殊字符。<br>当原站播放协议为hls时，此字段才会生效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUrlReplaceRules(array $UrlReplaceRules) 设置<p>url改写， 格式为： url1&lt;|&gt;url2; 其中，&lt;|&gt; 为分隔符。<br>url1、url2 长度限制100，不可包含特殊字符。<br>当原站播放协议为hls时，此字段才会生效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOptionsRequest() 获取<p>是否 options 支持，可取值：on、off。<br>当原站播放协议为hls时，此字段才会生效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOptionsRequest(string $OptionsRequest) 设置<p>是否 options 支持，可取值：on、off。<br>当原站播放协议为hls时，此字段才会生效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFollowRedirect() 获取<p>是否 follow 301/302，可取值：on、off。<br>当原站播放协议为hls时，此字段才会生效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFollowRedirect(string $FollowRedirect) 设置<p>是否 follow 301/302，可取值：on、off。<br>当原站播放协议为hls时，此字段才会生效。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getStreamPackageRegion() 获取<p>源站类型 OriginStreamType 为 2 时，该字段有效。 代表源站地址 OriginAddress 对应的地区 region。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStreamPackageRegion(array $StreamPackageRegion) 设置<p>源站类型 OriginStreamType 为 2 时，该字段有效。 代表源站地址 OriginAddress 对应的地区 region。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCustomerName() 获取<p>客户名。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomerName(string $CustomerName) 设置<p>客户名。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getIndexerKeepParam() 获取<p>当 OriginStreamPlayType 为 hls 时生效，设置索引缓存保留指定参数列表，最多支持 30 组，每个参数小于等于 20 字符。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexerKeepParam(array $IndexerKeepParam) 设置<p>当 OriginStreamPlayType 为 hls 时生效，设置索引缓存保留指定参数列表，最多支持 30 组，每个参数小于等于 20 字符。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFragmentKeepParam() 获取<p>当 OriginStreamPlayType 为 hls 时生效，设置分片缓存保留指定参数列表，最多支持 30 组，每个参数小于等于 20 字符。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFragmentKeepParam(array $FragmentKeepParam) 设置<p>当 OriginStreamPlayType 为 hls 时生效，设置分片缓存保留指定参数列表，最多支持 30 组，每个参数小于等于 20 字符。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMediaPackageType() 获取<p>当 OriginStreamType = 2 时有效，表示 mediapackage 具体类型：<br>media_package =&gt; 仅配置普通频道。<br>media_package_pure_ad =&gt; 仅配置广告。<br>media_package_mix_ad =&gt; 同时配置普通频道和广告。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMediaPackageType(string $MediaPackageType) 设置<p>当 OriginStreamType = 2 时有效，表示 mediapackage 具体类型：<br>media_package =&gt; 仅配置普通频道。<br>media_package_pure_ad =&gt; 仅配置广告。<br>media_package_mix_ad =&gt; 同时配置普通频道和广告。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getMediaPackageChannelTypes() 获取<p>当 OriginStreamType = 2 且 MediaPackageType = media_package 时有效，表示 mediapackage 频道类型，可组合如下值：normal（频道）、ssai（广告）、linear_assembly（线性组装）。</p>
 * @method void setMediaPackageChannelTypes(array $MediaPackageChannelTypes) 设置<p>当 OriginStreamType = 2 且 MediaPackageType = media_package 时有效，表示 mediapackage 频道类型，可组合如下值：normal（频道）、ssai（广告）、linear_assembly（线性组装）。</p>
 * @method array getIndexerHeader() 获取<p>当 OriginStreamPlayType 为 hls 时生效，设置索引自定义 header，每一组参数、取值用空格分开。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexerHeader(array $IndexerHeader) 设置<p>当 OriginStreamPlayType 为 hls 时生效，设置索引自定义 header，每一组参数、取值用空格分开。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFragmentHeader() 获取<p>当 OriginStreamPlayType 为 hls 时生效，设置分片自定义 header，每一组参数、取值用空格分开。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFragmentHeader(array $FragmentHeader) 设置<p>当 OriginStreamPlayType 为 hls 时生效，设置分片自定义 header，每一组参数、取值用空格分开。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCustomizationRules() 获取<p>自定义规则列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomizationRules(array $CustomizationRules) 设置<p>自定义规则列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCacheFormatRule() 获取<p>缓存格式规则。<br>0：默认格式。<br>1：云直播源站格式。<br>当 OriginStreamPlayType 为 customization 时候生效。</p>
 * @method void setCacheFormatRule(integer $CacheFormatRule) 设置<p>缓存格式规则。<br>0：默认格式。<br>1：云直播源站格式。<br>当 OriginStreamPlayType 为 customization 时候生效。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeOriginStreamInfoResponse extends AbstractModel
{
    /**
     * @var integer <p>配置状态信息：0 配置中，1 成功，2 关闭中，3 关闭成功。</p>
     */
    public $Status;

    /**
     * @var array <p>播放类型。</p>
     */
    public $CdnStreamPlayType;

    /**
     * @var integer <p>原站配置类型：1 直播原站。<br>2 streamPackage。</p>
     */
    public $OriginStreamType;

    /**
     * @var string <p>原站播放类型。</p>
     */
    public $OriginStreamPlayType;

    /**
     * @var integer <p>原站地址类型：1 ip，2 域名。</p>
     */
    public $OriginAddressType;

    /**
     * @var array <p>原站地址信息，每项用分号分割域名（ip）、端口信息。<br>端口为空也要带上分号，表示取默认端口。</p>
     */
    public $OriginAddress;

    /**
     * @var integer <p>超时时间，单位 ms。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OriginTimeout;

    /**
     * @var integer <p>重试次数，单位 次。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OriginRetryTimes;

    /**
     * @var string <p>时间戳修正，可取值：on、off。<br>当原站播放协议为 rtmp、flv 时，传递该字段才会生效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeJitter;

    /**
     * @var integer <p>分片数，单位 个。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HlsPlayFragmentCount;

    /**
     * @var integer <p>分片时长，单位 ms。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HlsPlayFragmentDuration;

    /**
     * @var string <p>是否透传 http 头信息，可取值：on、off。<br>当原站播放协议为 hls 时，传递该字段才会生效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PassThroughHttpHeader;

    /**
     * @var string <p>是否透传相应，可取值：on、off。<br>当原站播放协议为 hls 时，传递该字段才会生效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PassThroughResponse;

    /**
     * @var string <p>是否透传参数，可取值：on、off。<br>当原站播放协议为 hls 时，传递该字段才会生效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PassThroughParam;

    /**
     * @var string <p>原站 host。<br>当原站播放协议为 hls 时，传递该字段才会生效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OriginHost;

    /**
     * @var integer <p>索引缓存，单位 ms。<br>当原站播放协议为 hls 时，传递该字段才会生效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexerCache;

    /**
     * @var integer <p>分片缓存，单位 ms。<br>当原站播放协议为 hls 时，传递该字段才会生效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FragmentCache;

    /**
     * @var string <p>域名。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DomainName;

    /**
     * @var string <p>https 回源，可取值：on、off。<br>当原站播放协议为flv、hls时，传递此字段才会生效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UsingHttps;

    /**
     * @var string <p>是否遵循原站，可取值：on、off。<br>当原站播放协议为hls时，此字段才会生效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CacheFollowOrigin;

    /**
     * @var array <p>状态码缓存，数组元素格式：<br>cacheKey:interval<br>cacheKey 可取值：cache_400_sec、cache_403_sec、cache_404_sec、cache_405_sec、cache_500_sec、cache_503_sec、cache_504_sec。<br>interval 单位 ms。<br>当原站播放协议为hls时，此字段才会生效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CacheStatusCode;

    /**
     * @var array <p>url改写， 格式为： url1&lt;|&gt;url2; 其中，&lt;|&gt; 为分隔符。<br>url1、url2 长度限制100，不可包含特殊字符。<br>当原站播放协议为hls时，此字段才会生效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UrlReplaceRules;

    /**
     * @var string <p>是否 options 支持，可取值：on、off。<br>当原站播放协议为hls时，此字段才会生效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OptionsRequest;

    /**
     * @var string <p>是否 follow 301/302，可取值：on、off。<br>当原站播放协议为hls时，此字段才会生效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FollowRedirect;

    /**
     * @var array <p>源站类型 OriginStreamType 为 2 时，该字段有效。 代表源站地址 OriginAddress 对应的地区 region。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StreamPackageRegion;

    /**
     * @var string <p>客户名。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomerName;

    /**
     * @var array <p>当 OriginStreamPlayType 为 hls 时生效，设置索引缓存保留指定参数列表，最多支持 30 组，每个参数小于等于 20 字符。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexerKeepParam;

    /**
     * @var array <p>当 OriginStreamPlayType 为 hls 时生效，设置分片缓存保留指定参数列表，最多支持 30 组，每个参数小于等于 20 字符。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FragmentKeepParam;

    /**
     * @var string <p>当 OriginStreamType = 2 时有效，表示 mediapackage 具体类型：<br>media_package =&gt; 仅配置普通频道。<br>media_package_pure_ad =&gt; 仅配置广告。<br>media_package_mix_ad =&gt; 同时配置普通频道和广告。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MediaPackageType;

    /**
     * @var array <p>当 OriginStreamType = 2 且 MediaPackageType = media_package 时有效，表示 mediapackage 频道类型，可组合如下值：normal（频道）、ssai（广告）、linear_assembly（线性组装）。</p>
     */
    public $MediaPackageChannelTypes;

    /**
     * @var array <p>当 OriginStreamPlayType 为 hls 时生效，设置索引自定义 header，每一组参数、取值用空格分开。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexerHeader;

    /**
     * @var array <p>当 OriginStreamPlayType 为 hls 时生效，设置分片自定义 header，每一组参数、取值用空格分开。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FragmentHeader;

    /**
     * @var array <p>自定义规则列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomizationRules;

    /**
     * @var integer <p>缓存格式规则。<br>0：默认格式。<br>1：云直播源站格式。<br>当 OriginStreamPlayType 为 customization 时候生效。</p>
     */
    public $CacheFormatRule;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Status <p>配置状态信息：0 配置中，1 成功，2 关闭中，3 关闭成功。</p>
     * @param array $CdnStreamPlayType <p>播放类型。</p>
     * @param integer $OriginStreamType <p>原站配置类型：1 直播原站。<br>2 streamPackage。</p>
     * @param string $OriginStreamPlayType <p>原站播放类型。</p>
     * @param integer $OriginAddressType <p>原站地址类型：1 ip，2 域名。</p>
     * @param array $OriginAddress <p>原站地址信息，每项用分号分割域名（ip）、端口信息。<br>端口为空也要带上分号，表示取默认端口。</p>
     * @param integer $OriginTimeout <p>超时时间，单位 ms。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OriginRetryTimes <p>重试次数，单位 次。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TimeJitter <p>时间戳修正，可取值：on、off。<br>当原站播放协议为 rtmp、flv 时，传递该字段才会生效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $HlsPlayFragmentCount <p>分片数，单位 个。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $HlsPlayFragmentDuration <p>分片时长，单位 ms。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PassThroughHttpHeader <p>是否透传 http 头信息，可取值：on、off。<br>当原站播放协议为 hls 时，传递该字段才会生效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PassThroughResponse <p>是否透传相应，可取值：on、off。<br>当原站播放协议为 hls 时，传递该字段才会生效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PassThroughParam <p>是否透传参数，可取值：on、off。<br>当原站播放协议为 hls 时，传递该字段才会生效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OriginHost <p>原站 host。<br>当原站播放协议为 hls 时，传递该字段才会生效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IndexerCache <p>索引缓存，单位 ms。<br>当原站播放协议为 hls 时，传递该字段才会生效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FragmentCache <p>分片缓存，单位 ms。<br>当原站播放协议为 hls 时，传递该字段才会生效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DomainName <p>域名。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UsingHttps <p>https 回源，可取值：on、off。<br>当原站播放协议为flv、hls时，传递此字段才会生效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CacheFollowOrigin <p>是否遵循原站，可取值：on、off。<br>当原站播放协议为hls时，此字段才会生效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CacheStatusCode <p>状态码缓存，数组元素格式：<br>cacheKey:interval<br>cacheKey 可取值：cache_400_sec、cache_403_sec、cache_404_sec、cache_405_sec、cache_500_sec、cache_503_sec、cache_504_sec。<br>interval 单位 ms。<br>当原站播放协议为hls时，此字段才会生效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $UrlReplaceRules <p>url改写， 格式为： url1&lt;|&gt;url2; 其中，&lt;|&gt; 为分隔符。<br>url1、url2 长度限制100，不可包含特殊字符。<br>当原站播放协议为hls时，此字段才会生效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OptionsRequest <p>是否 options 支持，可取值：on、off。<br>当原站播放协议为hls时，此字段才会生效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FollowRedirect <p>是否 follow 301/302，可取值：on、off。<br>当原站播放协议为hls时，此字段才会生效。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $StreamPackageRegion <p>源站类型 OriginStreamType 为 2 时，该字段有效。 代表源站地址 OriginAddress 对应的地区 region。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CustomerName <p>客户名。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $IndexerKeepParam <p>当 OriginStreamPlayType 为 hls 时生效，设置索引缓存保留指定参数列表，最多支持 30 组，每个参数小于等于 20 字符。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FragmentKeepParam <p>当 OriginStreamPlayType 为 hls 时生效，设置分片缓存保留指定参数列表，最多支持 30 组，每个参数小于等于 20 字符。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MediaPackageType <p>当 OriginStreamType = 2 时有效，表示 mediapackage 具体类型：<br>media_package =&gt; 仅配置普通频道。<br>media_package_pure_ad =&gt; 仅配置广告。<br>media_package_mix_ad =&gt; 同时配置普通频道和广告。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $MediaPackageChannelTypes <p>当 OriginStreamType = 2 且 MediaPackageType = media_package 时有效，表示 mediapackage 频道类型，可组合如下值：normal（频道）、ssai（广告）、linear_assembly（线性组装）。</p>
     * @param array $IndexerHeader <p>当 OriginStreamPlayType 为 hls 时生效，设置索引自定义 header，每一组参数、取值用空格分开。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FragmentHeader <p>当 OriginStreamPlayType 为 hls 时生效，设置分片自定义 header，每一组参数、取值用空格分开。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CustomizationRules <p>自定义规则列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CacheFormatRule <p>缓存格式规则。<br>0：默认格式。<br>1：云直播源站格式。<br>当 OriginStreamPlayType 为 customization 时候生效。</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CdnStreamPlayType",$param) and $param["CdnStreamPlayType"] !== null) {
            $this->CdnStreamPlayType = $param["CdnStreamPlayType"];
        }

        if (array_key_exists("OriginStreamType",$param) and $param["OriginStreamType"] !== null) {
            $this->OriginStreamType = $param["OriginStreamType"];
        }

        if (array_key_exists("OriginStreamPlayType",$param) and $param["OriginStreamPlayType"] !== null) {
            $this->OriginStreamPlayType = $param["OriginStreamPlayType"];
        }

        if (array_key_exists("OriginAddressType",$param) and $param["OriginAddressType"] !== null) {
            $this->OriginAddressType = $param["OriginAddressType"];
        }

        if (array_key_exists("OriginAddress",$param) and $param["OriginAddress"] !== null) {
            $this->OriginAddress = $param["OriginAddress"];
        }

        if (array_key_exists("OriginTimeout",$param) and $param["OriginTimeout"] !== null) {
            $this->OriginTimeout = $param["OriginTimeout"];
        }

        if (array_key_exists("OriginRetryTimes",$param) and $param["OriginRetryTimes"] !== null) {
            $this->OriginRetryTimes = $param["OriginRetryTimes"];
        }

        if (array_key_exists("TimeJitter",$param) and $param["TimeJitter"] !== null) {
            $this->TimeJitter = $param["TimeJitter"];
        }

        if (array_key_exists("HlsPlayFragmentCount",$param) and $param["HlsPlayFragmentCount"] !== null) {
            $this->HlsPlayFragmentCount = $param["HlsPlayFragmentCount"];
        }

        if (array_key_exists("HlsPlayFragmentDuration",$param) and $param["HlsPlayFragmentDuration"] !== null) {
            $this->HlsPlayFragmentDuration = $param["HlsPlayFragmentDuration"];
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

        if (array_key_exists("OriginHost",$param) and $param["OriginHost"] !== null) {
            $this->OriginHost = $param["OriginHost"];
        }

        if (array_key_exists("IndexerCache",$param) and $param["IndexerCache"] !== null) {
            $this->IndexerCache = $param["IndexerCache"];
        }

        if (array_key_exists("FragmentCache",$param) and $param["FragmentCache"] !== null) {
            $this->FragmentCache = $param["FragmentCache"];
        }

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
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

        if (array_key_exists("StreamPackageRegion",$param) and $param["StreamPackageRegion"] !== null) {
            $this->StreamPackageRegion = $param["StreamPackageRegion"];
        }

        if (array_key_exists("CustomerName",$param) and $param["CustomerName"] !== null) {
            $this->CustomerName = $param["CustomerName"];
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
