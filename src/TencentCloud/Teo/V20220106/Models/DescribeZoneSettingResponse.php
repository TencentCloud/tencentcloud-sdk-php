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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeZoneSetting返回参数结构体
 *
 * @method string getZoneId() 获取站点ID。
 * @method void setZoneId(string $ZoneId) 设置站点ID。
 * @method string getZone() 获取站点名称。
 * @method void setZone(string $Zone) 设置站点名称。
 * @method CacheConfig getCache() 获取缓存过期时间配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCache(CacheConfig $Cache) 设置缓存过期时间配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method CacheKey getCacheKey() 获取节点缓存键配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCacheKey(CacheKey $CacheKey) 设置节点缓存键配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method Quic getQuic() 获取Quic访问配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQuic(Quic $Quic) 设置Quic访问配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method PostMaxSize getPostMaxSize() 获取POST请求传输配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPostMaxSize(PostMaxSize $PostMaxSize) 设置POST请求传输配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method Compression getCompression() 获取智能压缩配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompression(Compression $Compression) 设置智能压缩配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method UpstreamHttp2 getUpstreamHttp2() 获取Http2回源配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpstreamHttp2(UpstreamHttp2 $UpstreamHttp2) 设置Http2回源配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ForceRedirect getForceRedirect() 获取访问协议强制Https跳转配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setForceRedirect(ForceRedirect $ForceRedirect) 设置访问协议强制Https跳转配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method Https getHttps() 获取Https 加速配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHttps(Https $Https) 设置Https 加速配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method Origin getOrigin() 获取源站配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrigin(Origin $Origin) 设置源站配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method SmartRouting getSmartRouting() 获取智能加速配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSmartRouting(SmartRouting $SmartRouting) 设置智能加速配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method MaxAge getMaxAge() 获取浏览器缓存配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxAge(MaxAge $MaxAge) 设置浏览器缓存配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method OfflineCache getOfflineCache() 获取离线缓存配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOfflineCache(OfflineCache $OfflineCache) 设置离线缓存配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method WebSocket getWebSocket() 获取WebSocket配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWebSocket(WebSocket $WebSocket) 设置WebSocket配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ClientIp getClientIpHeader() 获取客户端IP回源请求头配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClientIpHeader(ClientIp $ClientIpHeader) 设置客户端IP回源请求头配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method CachePrefresh getCachePrefresh() 获取缓存预刷新配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCachePrefresh(CachePrefresh $CachePrefresh) 设置缓存预刷新配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method Ipv6Access getIpv6() 获取Ipv6访问配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpv6(Ipv6Access $Ipv6) 设置Ipv6访问配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getArea() 获取站点加速区域信息，取值有：
<li>mainland：中国境内加速；</li>
<li>overseas：中国境外加速。</li>
 * @method void setArea(string $Area) 设置站点加速区域信息，取值有：
<li>mainland：中国境内加速；</li>
<li>overseas：中国境外加速。</li>
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeZoneSettingResponse extends AbstractModel
{
    /**
     * @var string 站点ID。
     */
    public $ZoneId;

    /**
     * @var string 站点名称。
     */
    public $Zone;

    /**
     * @var CacheConfig 缓存过期时间配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cache;

    /**
     * @var CacheKey 节点缓存键配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CacheKey;

    /**
     * @var Quic Quic访问配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Quic;

    /**
     * @var PostMaxSize POST请求传输配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PostMaxSize;

    /**
     * @var Compression 智能压缩配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Compression;

    /**
     * @var UpstreamHttp2 Http2回源配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpstreamHttp2;

    /**
     * @var ForceRedirect 访问协议强制Https跳转配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ForceRedirect;

    /**
     * @var Https Https 加速配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Https;

    /**
     * @var Origin 源站配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Origin;

    /**
     * @var SmartRouting 智能加速配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SmartRouting;

    /**
     * @var MaxAge 浏览器缓存配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxAge;

    /**
     * @var OfflineCache 离线缓存配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OfflineCache;

    /**
     * @var WebSocket WebSocket配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WebSocket;

    /**
     * @var ClientIp 客户端IP回源请求头配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClientIpHeader;

    /**
     * @var CachePrefresh 缓存预刷新配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CachePrefresh;

    /**
     * @var Ipv6Access Ipv6访问配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ipv6;

    /**
     * @var string 站点加速区域信息，取值有：
<li>mainland：中国境内加速；</li>
<li>overseas：中国境外加速。</li>
     */
    public $Area;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ZoneId 站点ID。
     * @param string $Zone 站点名称。
     * @param CacheConfig $Cache 缓存过期时间配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param CacheKey $CacheKey 节点缓存键配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param Quic $Quic Quic访问配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param PostMaxSize $PostMaxSize POST请求传输配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param Compression $Compression 智能压缩配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param UpstreamHttp2 $UpstreamHttp2 Http2回源配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ForceRedirect $ForceRedirect 访问协议强制Https跳转配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param Https $Https Https 加速配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param Origin $Origin 源站配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param SmartRouting $SmartRouting 智能加速配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param MaxAge $MaxAge 浏览器缓存配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param OfflineCache $OfflineCache 离线缓存配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param WebSocket $WebSocket WebSocket配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ClientIp $ClientIpHeader 客户端IP回源请求头配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param CachePrefresh $CachePrefresh 缓存预刷新配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param Ipv6Access $Ipv6 Ipv6访问配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Area 站点加速区域信息，取值有：
<li>mainland：中国境内加速；</li>
<li>overseas：中国境外加速。</li>
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Cache",$param) and $param["Cache"] !== null) {
            $this->Cache = new CacheConfig();
            $this->Cache->deserialize($param["Cache"]);
        }

        if (array_key_exists("CacheKey",$param) and $param["CacheKey"] !== null) {
            $this->CacheKey = new CacheKey();
            $this->CacheKey->deserialize($param["CacheKey"]);
        }

        if (array_key_exists("Quic",$param) and $param["Quic"] !== null) {
            $this->Quic = new Quic();
            $this->Quic->deserialize($param["Quic"]);
        }

        if (array_key_exists("PostMaxSize",$param) and $param["PostMaxSize"] !== null) {
            $this->PostMaxSize = new PostMaxSize();
            $this->PostMaxSize->deserialize($param["PostMaxSize"]);
        }

        if (array_key_exists("Compression",$param) and $param["Compression"] !== null) {
            $this->Compression = new Compression();
            $this->Compression->deserialize($param["Compression"]);
        }

        if (array_key_exists("UpstreamHttp2",$param) and $param["UpstreamHttp2"] !== null) {
            $this->UpstreamHttp2 = new UpstreamHttp2();
            $this->UpstreamHttp2->deserialize($param["UpstreamHttp2"]);
        }

        if (array_key_exists("ForceRedirect",$param) and $param["ForceRedirect"] !== null) {
            $this->ForceRedirect = new ForceRedirect();
            $this->ForceRedirect->deserialize($param["ForceRedirect"]);
        }

        if (array_key_exists("Https",$param) and $param["Https"] !== null) {
            $this->Https = new Https();
            $this->Https->deserialize($param["Https"]);
        }

        if (array_key_exists("Origin",$param) and $param["Origin"] !== null) {
            $this->Origin = new Origin();
            $this->Origin->deserialize($param["Origin"]);
        }

        if (array_key_exists("SmartRouting",$param) and $param["SmartRouting"] !== null) {
            $this->SmartRouting = new SmartRouting();
            $this->SmartRouting->deserialize($param["SmartRouting"]);
        }

        if (array_key_exists("MaxAge",$param) and $param["MaxAge"] !== null) {
            $this->MaxAge = new MaxAge();
            $this->MaxAge->deserialize($param["MaxAge"]);
        }

        if (array_key_exists("OfflineCache",$param) and $param["OfflineCache"] !== null) {
            $this->OfflineCache = new OfflineCache();
            $this->OfflineCache->deserialize($param["OfflineCache"]);
        }

        if (array_key_exists("WebSocket",$param) and $param["WebSocket"] !== null) {
            $this->WebSocket = new WebSocket();
            $this->WebSocket->deserialize($param["WebSocket"]);
        }

        if (array_key_exists("ClientIpHeader",$param) and $param["ClientIpHeader"] !== null) {
            $this->ClientIpHeader = new ClientIp();
            $this->ClientIpHeader->deserialize($param["ClientIpHeader"]);
        }

        if (array_key_exists("CachePrefresh",$param) and $param["CachePrefresh"] !== null) {
            $this->CachePrefresh = new CachePrefresh();
            $this->CachePrefresh->deserialize($param["CachePrefresh"]);
        }

        if (array_key_exists("Ipv6",$param) and $param["Ipv6"] !== null) {
            $this->Ipv6 = new Ipv6Access();
            $this->Ipv6->deserialize($param["Ipv6"]);
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
