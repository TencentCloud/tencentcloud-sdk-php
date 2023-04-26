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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyZoneSetting请求参数结构体
 *
 * @method string getZoneId() 获取待变更的站点 ID。
 * @method void setZoneId(string $ZoneId) 设置待变更的站点 ID。
 * @method CacheConfig getCacheConfig() 获取缓存过期时间配置。
不填写表示保持原有配置。
 * @method void setCacheConfig(CacheConfig $CacheConfig) 设置缓存过期时间配置。
不填写表示保持原有配置。
 * @method CacheKey getCacheKey() 获取节点缓存键配置。
不填写表示保持原有配置。
 * @method void setCacheKey(CacheKey $CacheKey) 设置节点缓存键配置。
不填写表示保持原有配置。
 * @method MaxAge getMaxAge() 获取浏览器缓存配置。
不填写表示保持原有配置。
 * @method void setMaxAge(MaxAge $MaxAge) 设置浏览器缓存配置。
不填写表示保持原有配置。
 * @method OfflineCache getOfflineCache() 获取离线缓存配置。
不填写表示保持原有配置。
 * @method void setOfflineCache(OfflineCache $OfflineCache) 设置离线缓存配置。
不填写表示保持原有配置。
 * @method Quic getQuic() 获取Quic 访问配置。
不填写表示保持原有配置。
 * @method void setQuic(Quic $Quic) 设置Quic 访问配置。
不填写表示保持原有配置。
 * @method PostMaxSize getPostMaxSize() 获取Post 请求传输配置。
不填写表示保持原有配置。
 * @method void setPostMaxSize(PostMaxSize $PostMaxSize) 设置Post 请求传输配置。
不填写表示保持原有配置。
 * @method Compression getCompression() 获取智能压缩配置。
不填写表示保持原有配置。
 * @method void setCompression(Compression $Compression) 设置智能压缩配置。
不填写表示保持原有配置。
 * @method UpstreamHttp2 getUpstreamHttp2() 获取Http2 回源配置。
不填写表示保持原有配置。
 * @method void setUpstreamHttp2(UpstreamHttp2 $UpstreamHttp2) 设置Http2 回源配置。
不填写表示保持原有配置。
 * @method ForceRedirect getForceRedirect() 获取访问协议强制 Https 跳转配置。
不填写表示保持原有配置。
 * @method void setForceRedirect(ForceRedirect $ForceRedirect) 设置访问协议强制 Https 跳转配置。
不填写表示保持原有配置。
 * @method Https getHttps() 获取Https 加速配置。
不填写表示保持原有配置。
 * @method void setHttps(Https $Https) 设置Https 加速配置。
不填写表示保持原有配置。
 * @method Origin getOrigin() 获取源站配置。
不填写表示保持原有配置。
 * @method void setOrigin(Origin $Origin) 设置源站配置。
不填写表示保持原有配置。
 * @method SmartRouting getSmartRouting() 获取智能加速配置。
不填写表示保持原有配置。
 * @method void setSmartRouting(SmartRouting $SmartRouting) 设置智能加速配置。
不填写表示保持原有配置。
 * @method WebSocket getWebSocket() 获取WebSocket 配置。
不填写表示保持原有配置。
 * @method void setWebSocket(WebSocket $WebSocket) 设置WebSocket 配置。
不填写表示保持原有配置。
 * @method ClientIpHeader getClientIpHeader() 获取客户端 IP 回源请求头配置。
不填写表示保持原有配置。
 * @method void setClientIpHeader(ClientIpHeader $ClientIpHeader) 设置客户端 IP 回源请求头配置。
不填写表示保持原有配置。
 * @method CachePrefresh getCachePrefresh() 获取缓存预刷新配置。
不填写表示保持原有配置。
 * @method void setCachePrefresh(CachePrefresh $CachePrefresh) 设置缓存预刷新配置。
不填写表示保持原有配置。
 * @method Ipv6 getIpv6() 获取Ipv6 访问配置。
不填写表示保持原有配置。
 * @method void setIpv6(Ipv6 $Ipv6) 设置Ipv6 访问配置。
不填写表示保持原有配置。
 * @method ClientIpCountry getClientIpCountry() 获取回源时是否携带客户端 IP 所属地域信息的配置。
不填写表示保持原有配置。
 * @method void setClientIpCountry(ClientIpCountry $ClientIpCountry) 设置回源时是否携带客户端 IP 所属地域信息的配置。
不填写表示保持原有配置。
 * @method Grpc getGrpc() 获取Grpc 协议支持配置。
不填写表示保持原有配置。
 * @method void setGrpc(Grpc $Grpc) 设置Grpc 协议支持配置。
不填写表示保持原有配置。
 * @method ImageOptimize getImageOptimize() 获取图片优化配置。
不填写表示关闭。
 * @method void setImageOptimize(ImageOptimize $ImageOptimize) 设置图片优化配置。
不填写表示关闭。
 */
class ModifyZoneSettingRequest extends AbstractModel
{
    /**
     * @var string 待变更的站点 ID。
     */
    public $ZoneId;

    /**
     * @var CacheConfig 缓存过期时间配置。
不填写表示保持原有配置。
     */
    public $CacheConfig;

    /**
     * @var CacheKey 节点缓存键配置。
不填写表示保持原有配置。
     */
    public $CacheKey;

    /**
     * @var MaxAge 浏览器缓存配置。
不填写表示保持原有配置。
     */
    public $MaxAge;

    /**
     * @var OfflineCache 离线缓存配置。
不填写表示保持原有配置。
     */
    public $OfflineCache;

    /**
     * @var Quic Quic 访问配置。
不填写表示保持原有配置。
     */
    public $Quic;

    /**
     * @var PostMaxSize Post 请求传输配置。
不填写表示保持原有配置。
     */
    public $PostMaxSize;

    /**
     * @var Compression 智能压缩配置。
不填写表示保持原有配置。
     */
    public $Compression;

    /**
     * @var UpstreamHttp2 Http2 回源配置。
不填写表示保持原有配置。
     */
    public $UpstreamHttp2;

    /**
     * @var ForceRedirect 访问协议强制 Https 跳转配置。
不填写表示保持原有配置。
     */
    public $ForceRedirect;

    /**
     * @var Https Https 加速配置。
不填写表示保持原有配置。
     */
    public $Https;

    /**
     * @var Origin 源站配置。
不填写表示保持原有配置。
     */
    public $Origin;

    /**
     * @var SmartRouting 智能加速配置。
不填写表示保持原有配置。
     */
    public $SmartRouting;

    /**
     * @var WebSocket WebSocket 配置。
不填写表示保持原有配置。
     */
    public $WebSocket;

    /**
     * @var ClientIpHeader 客户端 IP 回源请求头配置。
不填写表示保持原有配置。
     */
    public $ClientIpHeader;

    /**
     * @var CachePrefresh 缓存预刷新配置。
不填写表示保持原有配置。
     */
    public $CachePrefresh;

    /**
     * @var Ipv6 Ipv6 访问配置。
不填写表示保持原有配置。
     */
    public $Ipv6;

    /**
     * @var ClientIpCountry 回源时是否携带客户端 IP 所属地域信息的配置。
不填写表示保持原有配置。
     */
    public $ClientIpCountry;

    /**
     * @var Grpc Grpc 协议支持配置。
不填写表示保持原有配置。
     */
    public $Grpc;

    /**
     * @var ImageOptimize 图片优化配置。
不填写表示关闭。
     */
    public $ImageOptimize;

    /**
     * @param string $ZoneId 待变更的站点 ID。
     * @param CacheConfig $CacheConfig 缓存过期时间配置。
不填写表示保持原有配置。
     * @param CacheKey $CacheKey 节点缓存键配置。
不填写表示保持原有配置。
     * @param MaxAge $MaxAge 浏览器缓存配置。
不填写表示保持原有配置。
     * @param OfflineCache $OfflineCache 离线缓存配置。
不填写表示保持原有配置。
     * @param Quic $Quic Quic 访问配置。
不填写表示保持原有配置。
     * @param PostMaxSize $PostMaxSize Post 请求传输配置。
不填写表示保持原有配置。
     * @param Compression $Compression 智能压缩配置。
不填写表示保持原有配置。
     * @param UpstreamHttp2 $UpstreamHttp2 Http2 回源配置。
不填写表示保持原有配置。
     * @param ForceRedirect $ForceRedirect 访问协议强制 Https 跳转配置。
不填写表示保持原有配置。
     * @param Https $Https Https 加速配置。
不填写表示保持原有配置。
     * @param Origin $Origin 源站配置。
不填写表示保持原有配置。
     * @param SmartRouting $SmartRouting 智能加速配置。
不填写表示保持原有配置。
     * @param WebSocket $WebSocket WebSocket 配置。
不填写表示保持原有配置。
     * @param ClientIpHeader $ClientIpHeader 客户端 IP 回源请求头配置。
不填写表示保持原有配置。
     * @param CachePrefresh $CachePrefresh 缓存预刷新配置。
不填写表示保持原有配置。
     * @param Ipv6 $Ipv6 Ipv6 访问配置。
不填写表示保持原有配置。
     * @param ClientIpCountry $ClientIpCountry 回源时是否携带客户端 IP 所属地域信息的配置。
不填写表示保持原有配置。
     * @param Grpc $Grpc Grpc 协议支持配置。
不填写表示保持原有配置。
     * @param ImageOptimize $ImageOptimize 图片优化配置。
不填写表示关闭。
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

        if (array_key_exists("CacheConfig",$param) and $param["CacheConfig"] !== null) {
            $this->CacheConfig = new CacheConfig();
            $this->CacheConfig->deserialize($param["CacheConfig"]);
        }

        if (array_key_exists("CacheKey",$param) and $param["CacheKey"] !== null) {
            $this->CacheKey = new CacheKey();
            $this->CacheKey->deserialize($param["CacheKey"]);
        }

        if (array_key_exists("MaxAge",$param) and $param["MaxAge"] !== null) {
            $this->MaxAge = new MaxAge();
            $this->MaxAge->deserialize($param["MaxAge"]);
        }

        if (array_key_exists("OfflineCache",$param) and $param["OfflineCache"] !== null) {
            $this->OfflineCache = new OfflineCache();
            $this->OfflineCache->deserialize($param["OfflineCache"]);
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

        if (array_key_exists("WebSocket",$param) and $param["WebSocket"] !== null) {
            $this->WebSocket = new WebSocket();
            $this->WebSocket->deserialize($param["WebSocket"]);
        }

        if (array_key_exists("ClientIpHeader",$param) and $param["ClientIpHeader"] !== null) {
            $this->ClientIpHeader = new ClientIpHeader();
            $this->ClientIpHeader->deserialize($param["ClientIpHeader"]);
        }

        if (array_key_exists("CachePrefresh",$param) and $param["CachePrefresh"] !== null) {
            $this->CachePrefresh = new CachePrefresh();
            $this->CachePrefresh->deserialize($param["CachePrefresh"]);
        }

        if (array_key_exists("Ipv6",$param) and $param["Ipv6"] !== null) {
            $this->Ipv6 = new Ipv6();
            $this->Ipv6->deserialize($param["Ipv6"]);
        }

        if (array_key_exists("ClientIpCountry",$param) and $param["ClientIpCountry"] !== null) {
            $this->ClientIpCountry = new ClientIpCountry();
            $this->ClientIpCountry->deserialize($param["ClientIpCountry"]);
        }

        if (array_key_exists("Grpc",$param) and $param["Grpc"] !== null) {
            $this->Grpc = new Grpc();
            $this->Grpc->deserialize($param["Grpc"]);
        }

        if (array_key_exists("ImageOptimize",$param) and $param["ImageOptimize"] !== null) {
            $this->ImageOptimize = new ImageOptimize();
            $this->ImageOptimize->deserialize($param["ImageOptimize"]);
        }
    }
}
