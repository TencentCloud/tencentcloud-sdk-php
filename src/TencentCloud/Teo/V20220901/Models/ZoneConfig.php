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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 站点加速配置。
 *
 * @method SmartRoutingParameters getSmartRouting() 获取智能加速配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSmartRouting(SmartRoutingParameters $SmartRouting) 设置智能加速配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method CacheConfigParameters getCache() 获取缓存过期时间配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCache(CacheConfigParameters $Cache) 设置缓存过期时间配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method MaxAgeParameters getMaxAge() 获取浏览器缓存配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxAge(MaxAgeParameters $MaxAge) 设置浏览器缓存配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method CacheKeyConfigParameters getCacheKey() 获取节点缓存键配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCacheKey(CacheKeyConfigParameters $CacheKey) 设置节点缓存键配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method CachePrefreshParameters getCachePrefresh() 获取缓存预刷新配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCachePrefresh(CachePrefreshParameters $CachePrefresh) 设置缓存预刷新配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method OfflineCacheParameters getOfflineCache() 获取离线缓存配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOfflineCache(OfflineCacheParameters $OfflineCache) 设置离线缓存配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method CompressionParameters getCompression() 获取智能压缩配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompression(CompressionParameters $Compression) 设置智能压缩配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ForceRedirectHTTPSParameters getForceRedirectHTTPS() 获取访问协议强制 HTTPS 跳转配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setForceRedirectHTTPS(ForceRedirectHTTPSParameters $ForceRedirectHTTPS) 设置访问协议强制 HTTPS 跳转配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method HSTSParameters getHSTS() 获取HSTS 相关配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHSTS(HSTSParameters $HSTS) 设置HSTS 相关配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method TLSConfigParameters getTLSConfig() 获取TLS 相关配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTLSConfig(TLSConfigParameters $TLSConfig) 设置TLS 相关配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method OCSPStaplingParameters getOCSPStapling() 获取OCSP 装订配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOCSPStapling(OCSPStaplingParameters $OCSPStapling) 设置OCSP 装订配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method HTTP2Parameters getHTTP2() 获取HTTP2 相关配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHTTP2(HTTP2Parameters $HTTP2) 设置HTTP2 相关配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method QUICParameters getQUIC() 获取QUIC 访问配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQUIC(QUICParameters $QUIC) 设置QUIC 访问配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method UpstreamHTTP2Parameters getUpstreamHTTP2() 获取HTTP2 回源配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpstreamHTTP2(UpstreamHTTP2Parameters $UpstreamHTTP2) 设置HTTP2 回源配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method IPv6Parameters getIPv6() 获取IPv6 访问配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIPv6(IPv6Parameters $IPv6) 设置IPv6 访问配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method WebSocketParameters getWebSocket() 获取WebSocket 配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWebSocket(WebSocketParameters $WebSocket) 设置WebSocket 配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method PostMaxSizeParameters getPostMaxSize() 获取POST 请求传输配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPostMaxSize(PostMaxSizeParameters $PostMaxSize) 设置POST 请求传输配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ClientIPHeaderParameters getClientIPHeader() 获取客户端 IP 回源请求头配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClientIPHeader(ClientIPHeaderParameters $ClientIPHeader) 设置客户端 IP 回源请求头配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ClientIPCountryParameters getClientIPCountry() 获取回源时是否携带客户端 IP 所属地域信息的配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClientIPCountry(ClientIPCountryParameters $ClientIPCountry) 设置回源时是否携带客户端 IP 所属地域信息的配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method GrpcParameters getGrpc() 获取gRPC 协议支持配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGrpc(GrpcParameters $Grpc) 设置gRPC 协议支持配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method AccelerateMainlandParameters getAccelerateMainland() 获取中国大陆加速优化配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccelerateMainland(AccelerateMainlandParameters $AccelerateMainland) 设置中国大陆加速优化配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method StandardDebugParameters getStandardDebug() 获取标准 Debug 配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStandardDebug(StandardDebugParameters $StandardDebug) 设置标准 Debug 配置。
注意：此字段可能返回 null，表示取不到有效值。
 */
class ZoneConfig extends AbstractModel
{
    /**
     * @var SmartRoutingParameters 智能加速配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SmartRouting;

    /**
     * @var CacheConfigParameters 缓存过期时间配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cache;

    /**
     * @var MaxAgeParameters 浏览器缓存配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxAge;

    /**
     * @var CacheKeyConfigParameters 节点缓存键配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CacheKey;

    /**
     * @var CachePrefreshParameters 缓存预刷新配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CachePrefresh;

    /**
     * @var OfflineCacheParameters 离线缓存配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OfflineCache;

    /**
     * @var CompressionParameters 智能压缩配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Compression;

    /**
     * @var ForceRedirectHTTPSParameters 访问协议强制 HTTPS 跳转配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ForceRedirectHTTPS;

    /**
     * @var HSTSParameters HSTS 相关配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HSTS;

    /**
     * @var TLSConfigParameters TLS 相关配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TLSConfig;

    /**
     * @var OCSPStaplingParameters OCSP 装订配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OCSPStapling;

    /**
     * @var HTTP2Parameters HTTP2 相关配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HTTP2;

    /**
     * @var QUICParameters QUIC 访问配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QUIC;

    /**
     * @var UpstreamHTTP2Parameters HTTP2 回源配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpstreamHTTP2;

    /**
     * @var IPv6Parameters IPv6 访问配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IPv6;

    /**
     * @var WebSocketParameters WebSocket 配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WebSocket;

    /**
     * @var PostMaxSizeParameters POST 请求传输配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PostMaxSize;

    /**
     * @var ClientIPHeaderParameters 客户端 IP 回源请求头配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClientIPHeader;

    /**
     * @var ClientIPCountryParameters 回源时是否携带客户端 IP 所属地域信息的配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClientIPCountry;

    /**
     * @var GrpcParameters gRPC 协议支持配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Grpc;

    /**
     * @var AccelerateMainlandParameters 中国大陆加速优化配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccelerateMainland;

    /**
     * @var StandardDebugParameters 标准 Debug 配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StandardDebug;

    /**
     * @param SmartRoutingParameters $SmartRouting 智能加速配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param CacheConfigParameters $Cache 缓存过期时间配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param MaxAgeParameters $MaxAge 浏览器缓存配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param CacheKeyConfigParameters $CacheKey 节点缓存键配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param CachePrefreshParameters $CachePrefresh 缓存预刷新配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param OfflineCacheParameters $OfflineCache 离线缓存配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param CompressionParameters $Compression 智能压缩配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ForceRedirectHTTPSParameters $ForceRedirectHTTPS 访问协议强制 HTTPS 跳转配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param HSTSParameters $HSTS HSTS 相关配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param TLSConfigParameters $TLSConfig TLS 相关配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param OCSPStaplingParameters $OCSPStapling OCSP 装订配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param HTTP2Parameters $HTTP2 HTTP2 相关配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param QUICParameters $QUIC QUIC 访问配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param UpstreamHTTP2Parameters $UpstreamHTTP2 HTTP2 回源配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param IPv6Parameters $IPv6 IPv6 访问配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param WebSocketParameters $WebSocket WebSocket 配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param PostMaxSizeParameters $PostMaxSize POST 请求传输配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ClientIPHeaderParameters $ClientIPHeader 客户端 IP 回源请求头配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ClientIPCountryParameters $ClientIPCountry 回源时是否携带客户端 IP 所属地域信息的配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param GrpcParameters $Grpc gRPC 协议支持配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param AccelerateMainlandParameters $AccelerateMainland 中国大陆加速优化配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param StandardDebugParameters $StandardDebug 标准 Debug 配置。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("SmartRouting",$param) and $param["SmartRouting"] !== null) {
            $this->SmartRouting = new SmartRoutingParameters();
            $this->SmartRouting->deserialize($param["SmartRouting"]);
        }

        if (array_key_exists("Cache",$param) and $param["Cache"] !== null) {
            $this->Cache = new CacheConfigParameters();
            $this->Cache->deserialize($param["Cache"]);
        }

        if (array_key_exists("MaxAge",$param) and $param["MaxAge"] !== null) {
            $this->MaxAge = new MaxAgeParameters();
            $this->MaxAge->deserialize($param["MaxAge"]);
        }

        if (array_key_exists("CacheKey",$param) and $param["CacheKey"] !== null) {
            $this->CacheKey = new CacheKeyConfigParameters();
            $this->CacheKey->deserialize($param["CacheKey"]);
        }

        if (array_key_exists("CachePrefresh",$param) and $param["CachePrefresh"] !== null) {
            $this->CachePrefresh = new CachePrefreshParameters();
            $this->CachePrefresh->deserialize($param["CachePrefresh"]);
        }

        if (array_key_exists("OfflineCache",$param) and $param["OfflineCache"] !== null) {
            $this->OfflineCache = new OfflineCacheParameters();
            $this->OfflineCache->deserialize($param["OfflineCache"]);
        }

        if (array_key_exists("Compression",$param) and $param["Compression"] !== null) {
            $this->Compression = new CompressionParameters();
            $this->Compression->deserialize($param["Compression"]);
        }

        if (array_key_exists("ForceRedirectHTTPS",$param) and $param["ForceRedirectHTTPS"] !== null) {
            $this->ForceRedirectHTTPS = new ForceRedirectHTTPSParameters();
            $this->ForceRedirectHTTPS->deserialize($param["ForceRedirectHTTPS"]);
        }

        if (array_key_exists("HSTS",$param) and $param["HSTS"] !== null) {
            $this->HSTS = new HSTSParameters();
            $this->HSTS->deserialize($param["HSTS"]);
        }

        if (array_key_exists("TLSConfig",$param) and $param["TLSConfig"] !== null) {
            $this->TLSConfig = new TLSConfigParameters();
            $this->TLSConfig->deserialize($param["TLSConfig"]);
        }

        if (array_key_exists("OCSPStapling",$param) and $param["OCSPStapling"] !== null) {
            $this->OCSPStapling = new OCSPStaplingParameters();
            $this->OCSPStapling->deserialize($param["OCSPStapling"]);
        }

        if (array_key_exists("HTTP2",$param) and $param["HTTP2"] !== null) {
            $this->HTTP2 = new HTTP2Parameters();
            $this->HTTP2->deserialize($param["HTTP2"]);
        }

        if (array_key_exists("QUIC",$param) and $param["QUIC"] !== null) {
            $this->QUIC = new QUICParameters();
            $this->QUIC->deserialize($param["QUIC"]);
        }

        if (array_key_exists("UpstreamHTTP2",$param) and $param["UpstreamHTTP2"] !== null) {
            $this->UpstreamHTTP2 = new UpstreamHTTP2Parameters();
            $this->UpstreamHTTP2->deserialize($param["UpstreamHTTP2"]);
        }

        if (array_key_exists("IPv6",$param) and $param["IPv6"] !== null) {
            $this->IPv6 = new IPv6Parameters();
            $this->IPv6->deserialize($param["IPv6"]);
        }

        if (array_key_exists("WebSocket",$param) and $param["WebSocket"] !== null) {
            $this->WebSocket = new WebSocketParameters();
            $this->WebSocket->deserialize($param["WebSocket"]);
        }

        if (array_key_exists("PostMaxSize",$param) and $param["PostMaxSize"] !== null) {
            $this->PostMaxSize = new PostMaxSizeParameters();
            $this->PostMaxSize->deserialize($param["PostMaxSize"]);
        }

        if (array_key_exists("ClientIPHeader",$param) and $param["ClientIPHeader"] !== null) {
            $this->ClientIPHeader = new ClientIPHeaderParameters();
            $this->ClientIPHeader->deserialize($param["ClientIPHeader"]);
        }

        if (array_key_exists("ClientIPCountry",$param) and $param["ClientIPCountry"] !== null) {
            $this->ClientIPCountry = new ClientIPCountryParameters();
            $this->ClientIPCountry->deserialize($param["ClientIPCountry"]);
        }

        if (array_key_exists("Grpc",$param) and $param["Grpc"] !== null) {
            $this->Grpc = new GrpcParameters();
            $this->Grpc->deserialize($param["Grpc"]);
        }

        if (array_key_exists("AccelerateMainland",$param) and $param["AccelerateMainland"] !== null) {
            $this->AccelerateMainland = new AccelerateMainlandParameters();
            $this->AccelerateMainland->deserialize($param["AccelerateMainland"]);
        }

        if (array_key_exists("StandardDebug",$param) and $param["StandardDebug"] !== null) {
            $this->StandardDebug = new StandardDebugParameters();
            $this->StandardDebug->deserialize($param["StandardDebug"]);
        }
    }
}
