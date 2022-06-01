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
 * ModifyZoneSetting请求参数结构体
 *
 * @method string getZoneId() 获取待变更的站点ID
 * @method void setZoneId(string $ZoneId) 设置待变更的站点ID
 * @method CacheConfig getCache() 获取缓存过期时间配置
 * @method void setCache(CacheConfig $Cache) 设置缓存过期时间配置
 * @method CacheKey getCacheKey() 获取节点缓存键配置
 * @method void setCacheKey(CacheKey $CacheKey) 设置节点缓存键配置
 * @method MaxAge getMaxAge() 获取浏览器缓存配置
 * @method void setMaxAge(MaxAge $MaxAge) 设置浏览器缓存配置
 * @method OfflineCache getOfflineCache() 获取离线缓存
 * @method void setOfflineCache(OfflineCache $OfflineCache) 设置离线缓存
 * @method Quic getQuic() 获取Quic访问
 * @method void setQuic(Quic $Quic) 设置Quic访问
 * @method PostMaxSize getPostMaxSize() 获取POST请求传输配置
 * @method void setPostMaxSize(PostMaxSize $PostMaxSize) 设置POST请求传输配置
 * @method Compression getCompression() 获取智能压缩配置
 * @method void setCompression(Compression $Compression) 设置智能压缩配置
 * @method UpstreamHttp2 getUpstreamHttp2() 获取http2回源配置
 * @method void setUpstreamHttp2(UpstreamHttp2 $UpstreamHttp2) 设置http2回源配置
 * @method ForceRedirect getForceRedirect() 获取访问协议强制https跳转配置
 * @method void setForceRedirect(ForceRedirect $ForceRedirect) 设置访问协议强制https跳转配置
 * @method Https getHttps() 获取Https 加速配置
 * @method void setHttps(Https $Https) 设置Https 加速配置
 * @method Origin getOrigin() 获取源站配置
 * @method void setOrigin(Origin $Origin) 设置源站配置
 * @method SmartRouting getSmartRouting() 获取智能加速配置
 * @method void setSmartRouting(SmartRouting $SmartRouting) 设置智能加速配置
 * @method WebSocket getWebSocket() 获取WebSocket配置
 * @method void setWebSocket(WebSocket $WebSocket) 设置WebSocket配置
 * @method ClientIp getClientIpHeader() 获取客户端IP回源请求头配置
 * @method void setClientIpHeader(ClientIp $ClientIpHeader) 设置客户端IP回源请求头配置
 */
class ModifyZoneSettingRequest extends AbstractModel
{
    /**
     * @var string 待变更的站点ID
     */
    public $ZoneId;

    /**
     * @var CacheConfig 缓存过期时间配置
     */
    public $Cache;

    /**
     * @var CacheKey 节点缓存键配置
     */
    public $CacheKey;

    /**
     * @var MaxAge 浏览器缓存配置
     */
    public $MaxAge;

    /**
     * @var OfflineCache 离线缓存
     */
    public $OfflineCache;

    /**
     * @var Quic Quic访问
     */
    public $Quic;

    /**
     * @var PostMaxSize POST请求传输配置
     */
    public $PostMaxSize;

    /**
     * @var Compression 智能压缩配置
     */
    public $Compression;

    /**
     * @var UpstreamHttp2 http2回源配置
     */
    public $UpstreamHttp2;

    /**
     * @var ForceRedirect 访问协议强制https跳转配置
     */
    public $ForceRedirect;

    /**
     * @var Https Https 加速配置
     */
    public $Https;

    /**
     * @var Origin 源站配置
     */
    public $Origin;

    /**
     * @var SmartRouting 智能加速配置
     */
    public $SmartRouting;

    /**
     * @var WebSocket WebSocket配置
     */
    public $WebSocket;

    /**
     * @var ClientIp 客户端IP回源请求头配置
     */
    public $ClientIpHeader;

    /**
     * @param string $ZoneId 待变更的站点ID
     * @param CacheConfig $Cache 缓存过期时间配置
     * @param CacheKey $CacheKey 节点缓存键配置
     * @param MaxAge $MaxAge 浏览器缓存配置
     * @param OfflineCache $OfflineCache 离线缓存
     * @param Quic $Quic Quic访问
     * @param PostMaxSize $PostMaxSize POST请求传输配置
     * @param Compression $Compression 智能压缩配置
     * @param UpstreamHttp2 $UpstreamHttp2 http2回源配置
     * @param ForceRedirect $ForceRedirect 访问协议强制https跳转配置
     * @param Https $Https Https 加速配置
     * @param Origin $Origin 源站配置
     * @param SmartRouting $SmartRouting 智能加速配置
     * @param WebSocket $WebSocket WebSocket配置
     * @param ClientIp $ClientIpHeader 客户端IP回源请求头配置
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

        if (array_key_exists("Cache",$param) and $param["Cache"] !== null) {
            $this->Cache = new CacheConfig();
            $this->Cache->deserialize($param["Cache"]);
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
            $this->ClientIpHeader = new ClientIp();
            $this->ClientIpHeader->deserialize($param["ClientIpHeader"]);
        }
    }
}
