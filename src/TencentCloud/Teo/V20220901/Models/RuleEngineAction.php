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
 * 规则引擎操作。
 *
 * @method string getName() 获取<p>操作名称。名称需要与参数结构体对应，例如 Name=Cache，则 CacheParameters 必填。</p><li>Cache：节点缓存 TTL；</li><li>CacheKey：自定义 Cache Key；</li><li>CachePrefresh：缓存预刷新；</li><li>AccessURLRedirect：访问 URL 重定向；</li><li>UpstreamURLRewrite：回源 URL 重写；</li><li>QUIC：QUIC；</li><li>WebSocket：WebSocket；</li><li>Authentication：Token 鉴权；</li><li>MaxAge：浏览器缓存 TTL；</li><li>StatusCodeCache：状态码缓存 TTL；</li><li>OfflineCache：离线缓存；</li><li>SmartRouting：智能加速；</li><li>AdvancedOriginRouting：高级回源优化；</li><li>RangeOriginPull：分片回源 ；</li><li>UpstreamHTTP2：HTTP2 回源；</li><li>HostHeader：Host Header 重写；</li><li>ForceRedirectHTTPS：访问协议强制 HTTPS 跳转配置；</li><li>OriginPullProtocol：回源 HTTPS；</li><li>Compression：智能压缩配置；</li><li>HSTS：HSTS；</li><li>ClientIPHeader：存储客户端请求 IP 的头部信息配置；</li><li>OCSPStapling：OCSP 装订；</li><li>HTTP2：HTTP2 接入；</li><li>PostMaxSize：POST 请求上传文件流式传输最大限制配置；</li><li>ClientIPCountry：回源时携带客户端 IP 所属地域信息；</li><li>UpstreamFollowRedirect：回源跟随重定向参数配置；</li><li>UpstreamRequest：回源请求参数；</li><li>Shield：源站卸载配置；</li><li>TLSConfig：SSL/TLS 安全；</li><li>ModifyOrigin：修改源站；</li><li> SiteFailover：源站故障转移；</li><li>HTTPUpstreamTimeout：七层回源超时配置；</li><li>HttpResponse：HTTP 应答；</li><li>ErrorPage：自定义错误页面；</li><li>ModifyResponseHeader：修改 HTTP 节点响应头；</li><li>ModifyRequestHeader：修改 HTTP 节点请求头；</li><li>ResponseSpeedLimit：单连接下载限速；</li><li>SetContentIdentifier：设置内容标识符；</li><li>Vary：Vary 特性配置；</li><li>ContentCompression：内容压缩配置；</li><li>OriginAuthentication：回源鉴权配置。</li>
 * @method void setName(string $Name) 设置<p>操作名称。名称需要与参数结构体对应，例如 Name=Cache，则 CacheParameters 必填。</p><li>Cache：节点缓存 TTL；</li><li>CacheKey：自定义 Cache Key；</li><li>CachePrefresh：缓存预刷新；</li><li>AccessURLRedirect：访问 URL 重定向；</li><li>UpstreamURLRewrite：回源 URL 重写；</li><li>QUIC：QUIC；</li><li>WebSocket：WebSocket；</li><li>Authentication：Token 鉴权；</li><li>MaxAge：浏览器缓存 TTL；</li><li>StatusCodeCache：状态码缓存 TTL；</li><li>OfflineCache：离线缓存；</li><li>SmartRouting：智能加速；</li><li>AdvancedOriginRouting：高级回源优化；</li><li>RangeOriginPull：分片回源 ；</li><li>UpstreamHTTP2：HTTP2 回源；</li><li>HostHeader：Host Header 重写；</li><li>ForceRedirectHTTPS：访问协议强制 HTTPS 跳转配置；</li><li>OriginPullProtocol：回源 HTTPS；</li><li>Compression：智能压缩配置；</li><li>HSTS：HSTS；</li><li>ClientIPHeader：存储客户端请求 IP 的头部信息配置；</li><li>OCSPStapling：OCSP 装订；</li><li>HTTP2：HTTP2 接入；</li><li>PostMaxSize：POST 请求上传文件流式传输最大限制配置；</li><li>ClientIPCountry：回源时携带客户端 IP 所属地域信息；</li><li>UpstreamFollowRedirect：回源跟随重定向参数配置；</li><li>UpstreamRequest：回源请求参数；</li><li>Shield：源站卸载配置；</li><li>TLSConfig：SSL/TLS 安全；</li><li>ModifyOrigin：修改源站；</li><li> SiteFailover：源站故障转移；</li><li>HTTPUpstreamTimeout：七层回源超时配置；</li><li>HttpResponse：HTTP 应答；</li><li>ErrorPage：自定义错误页面；</li><li>ModifyResponseHeader：修改 HTTP 节点响应头；</li><li>ModifyRequestHeader：修改 HTTP 节点请求头；</li><li>ResponseSpeedLimit：单连接下载限速；</li><li>SetContentIdentifier：设置内容标识符；</li><li>Vary：Vary 特性配置；</li><li>ContentCompression：内容压缩配置；</li><li>OriginAuthentication：回源鉴权配置。</li>
 * @method CacheParameters getCacheParameters() 获取<p>节点缓存 TTL 配置参数，当 Name 取值为 Cache 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCacheParameters(CacheParameters $CacheParameters) 设置<p>节点缓存 TTL 配置参数，当 Name 取值为 Cache 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method CacheKeyParameters getCacheKeyParameters() 获取<p>自定义 Cache Key 配置参数，当 Name 取值为 CacheKey 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCacheKeyParameters(CacheKeyParameters $CacheKeyParameters) 设置<p>自定义 Cache Key 配置参数，当 Name 取值为 CacheKey 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method CachePrefreshParameters getCachePrefreshParameters() 获取<p>缓存预刷新配置参数，当 Name 取值为 CachePrefresh 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCachePrefreshParameters(CachePrefreshParameters $CachePrefreshParameters) 设置<p>缓存预刷新配置参数，当 Name 取值为 CachePrefresh 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method AccessURLRedirectParameters getAccessURLRedirectParameters() 获取<p>访问 URL 重定向配置参数，当 Name 取值为 AccessURLRedirect 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccessURLRedirectParameters(AccessURLRedirectParameters $AccessURLRedirectParameters) 设置<p>访问 URL 重定向配置参数，当 Name 取值为 AccessURLRedirect 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method UpstreamURLRewriteParameters getUpstreamURLRewriteParameters() 获取<p>回源 URL 重写配置参数，当 Name 取值为 UpstreamURLRewrite 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpstreamURLRewriteParameters(UpstreamURLRewriteParameters $UpstreamURLRewriteParameters) 设置<p>回源 URL 重写配置参数，当 Name 取值为 UpstreamURLRewrite 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method QUICParameters getQUICParameters() 获取<p>QUIC 配置参数，当 Name 取值为 QUIC 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQUICParameters(QUICParameters $QUICParameters) 设置<p>QUIC 配置参数，当 Name 取值为 QUIC 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method WebSocketParameters getWebSocketParameters() 获取<p>WebSocket 配置参数，当 Name 取值为 WebSocket 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWebSocketParameters(WebSocketParameters $WebSocketParameters) 设置<p>WebSocket 配置参数，当 Name 取值为 WebSocket 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method AuthenticationParameters getAuthenticationParameters() 获取<p>Token 鉴权配置参数，当 Name 取值为 Authentication 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthenticationParameters(AuthenticationParameters $AuthenticationParameters) 设置<p>Token 鉴权配置参数，当 Name 取值为 Authentication 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method MaxAgeParameters getMaxAgeParameters() 获取<p>浏览器缓存 TTL 配置参数，当 Name 取值为 MaxAge 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxAgeParameters(MaxAgeParameters $MaxAgeParameters) 设置<p>浏览器缓存 TTL 配置参数，当 Name 取值为 MaxAge 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method StatusCodeCacheParameters getStatusCodeCacheParameters() 获取<p>状态码缓存 TTL 配置参数，当 Name 取值为 StatusCodeCache 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatusCodeCacheParameters(StatusCodeCacheParameters $StatusCodeCacheParameters) 设置<p>状态码缓存 TTL 配置参数，当 Name 取值为 StatusCodeCache 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method OfflineCacheParameters getOfflineCacheParameters() 获取<p>离线缓存配置参数，当 Name 取值为 OfflineCache 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOfflineCacheParameters(OfflineCacheParameters $OfflineCacheParameters) 设置<p>离线缓存配置参数，当 Name 取值为 OfflineCache 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method SmartRoutingParameters getSmartRoutingParameters() 获取<p>智能加速配置参数，当 Name 取值为 SmartRouting 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSmartRoutingParameters(SmartRoutingParameters $SmartRoutingParameters) 设置<p>智能加速配置参数，当 Name 取值为 SmartRouting 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method AdvancedOriginRoutingParameters getAdvancedOriginRoutingParameters() 获取<p>高级回源优化配置参数，当 Name 取值为 AdvancedOriginRouting 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdvancedOriginRoutingParameters(AdvancedOriginRoutingParameters $AdvancedOriginRoutingParameters) 设置<p>高级回源优化配置参数，当 Name 取值为 AdvancedOriginRouting 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method RangeOriginPullParameters getRangeOriginPullParameters() 获取<p>分片回源配置参数，当 Name 取值为 RangeOriginPull 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRangeOriginPullParameters(RangeOriginPullParameters $RangeOriginPullParameters) 设置<p>分片回源配置参数，当 Name 取值为 RangeOriginPull 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method UpstreamHTTP2Parameters getUpstreamHTTP2Parameters() 获取<p>HTTP2 回源配置参数，当 Name 取值为 UpstreamHTTP2 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpstreamHTTP2Parameters(UpstreamHTTP2Parameters $UpstreamHTTP2Parameters) 设置<p>HTTP2 回源配置参数，当 Name 取值为 UpstreamHTTP2 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method HostHeaderParameters getHostHeaderParameters() 获取<p>Host Header 重写配置参数，当 Name 取值为 HostHeader 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostHeaderParameters(HostHeaderParameters $HostHeaderParameters) 设置<p>Host Header 重写配置参数，当 Name 取值为 HostHeader 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ForceRedirectHTTPSParameters getForceRedirectHTTPSParameters() 获取<p>访问协议强制 HTTPS 跳转配置，当 Name 取值为 ForceRedirectHTTPS 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setForceRedirectHTTPSParameters(ForceRedirectHTTPSParameters $ForceRedirectHTTPSParameters) 设置<p>访问协议强制 HTTPS 跳转配置，当 Name 取值为 ForceRedirectHTTPS 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method OriginPullProtocolParameters getOriginPullProtocolParameters() 获取<p>回源 HTTPS 配置参数，当 Name 取值为 OriginPullProtocol 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriginPullProtocolParameters(OriginPullProtocolParameters $OriginPullProtocolParameters) 设置<p>回源 HTTPS 配置参数，当 Name 取值为 OriginPullProtocol 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method CompressionParameters getCompressionParameters() 获取<p>智能压缩配置，当 Name 取值为 Compression 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompressionParameters(CompressionParameters $CompressionParameters) 设置<p>智能压缩配置，当 Name 取值为 Compression 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method HSTSParameters getHSTSParameters() 获取<p>HSTS 配置参数，当 Name 取值为 HSTS 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHSTSParameters(HSTSParameters $HSTSParameters) 设置<p>HSTS 配置参数，当 Name 取值为 HSTS 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ClientIPHeaderParameters getClientIPHeaderParameters() 获取<p>存储客户端请求 IP 的头部信息配置，当 Name 取值为 ClientIPHeader 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClientIPHeaderParameters(ClientIPHeaderParameters $ClientIPHeaderParameters) 设置<p>存储客户端请求 IP 的头部信息配置，当 Name 取值为 ClientIPHeader 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method OCSPStaplingParameters getOCSPStaplingParameters() 获取<p>OCSP 装订配置参数，当 Name 取值为 OCSPStapling 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOCSPStaplingParameters(OCSPStaplingParameters $OCSPStaplingParameters) 设置<p>OCSP 装订配置参数，当 Name 取值为 OCSPStapling 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method HTTP2Parameters getHTTP2Parameters() 获取<p>HTTP2 接入配置参数，当 Name 取值为 HTTP2 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHTTP2Parameters(HTTP2Parameters $HTTP2Parameters) 设置<p>HTTP2 接入配置参数，当 Name 取值为 HTTP2 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method PostMaxSizeParameters getPostMaxSizeParameters() 获取<p>POST 请求上传文件流式传输最大限制配置，当 Name 取值为 PostMaxSize 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPostMaxSizeParameters(PostMaxSizeParameters $PostMaxSizeParameters) 设置<p>POST 请求上传文件流式传输最大限制配置，当 Name 取值为 PostMaxSize 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ClientIPCountryParameters getClientIPCountryParameters() 获取<p>回源时携带客户端 IP 所属地域信息配置参数，当 Name 取值为 ClientIPCountry 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClientIPCountryParameters(ClientIPCountryParameters $ClientIPCountryParameters) 设置<p>回源时携带客户端 IP 所属地域信息配置参数，当 Name 取值为 ClientIPCountry 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method UpstreamFollowRedirectParameters getUpstreamFollowRedirectParameters() 获取<p>回源跟随重定向参数配置，当 Name 取值为 UpstreamFollowRedirect 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpstreamFollowRedirectParameters(UpstreamFollowRedirectParameters $UpstreamFollowRedirectParameters) 设置<p>回源跟随重定向参数配置，当 Name 取值为 UpstreamFollowRedirect 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method UpstreamRequestParameters getUpstreamRequestParameters() 获取<p>回源请求参数配置参数，当 Name 取值为 UpstreamRequest 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpstreamRequestParameters(UpstreamRequestParameters $UpstreamRequestParameters) 设置<p>回源请求参数配置参数，当 Name 取值为 UpstreamRequest 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ShieldParameters getShieldParameters() 获取<p>源站卸载配置参数，当 Name 取值为 Shield 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShieldParameters(ShieldParameters $ShieldParameters) 设置<p>源站卸载配置参数，当 Name 取值为 Shield 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method TLSConfigParameters getTLSConfigParameters() 获取<p>SSL/TLS 安全配置参数，当 Name 取值为 TLSConfig 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTLSConfigParameters(TLSConfigParameters $TLSConfigParameters) 设置<p>SSL/TLS 安全配置参数，当 Name 取值为 TLSConfig 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ModifyOriginParameters getModifyOriginParameters() 获取<p>修改源站配置参数，当 Name 取值为 ModifyOrigin 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifyOriginParameters(ModifyOriginParameters $ModifyOriginParameters) 设置<p>修改源站配置参数，当 Name 取值为 ModifyOrigin 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method SiteFailoverParameters getSiteFailoverParameters() 获取<p>源站故障转移配置参数，当 Name 取值为 SiteFailover 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSiteFailoverParameters(SiteFailoverParameters $SiteFailoverParameters) 设置<p>源站故障转移配置参数，当 Name 取值为 SiteFailover 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method HTTPUpstreamTimeoutParameters getHTTPUpstreamTimeoutParameters() 获取<p>七层回源超时配置，当 Name 取值为 HTTPUpstreamTimeout 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHTTPUpstreamTimeoutParameters(HTTPUpstreamTimeoutParameters $HTTPUpstreamTimeoutParameters) 设置<p>七层回源超时配置，当 Name 取值为 HTTPUpstreamTimeout 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method HTTPResponseParameters getHttpResponseParameters() 获取<p>HTTP 应答配置参数，当 Name 取值为 HttpResponse 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHttpResponseParameters(HTTPResponseParameters $HttpResponseParameters) 设置<p>HTTP 应答配置参数，当 Name 取值为 HttpResponse 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ErrorPageParameters getErrorPageParameters() 获取<p>自定义错误页面配置参数，当 Name 取值为 ErrorPage 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorPageParameters(ErrorPageParameters $ErrorPageParameters) 设置<p>自定义错误页面配置参数，当 Name 取值为 ErrorPage 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ModifyResponseHeaderParameters getModifyResponseHeaderParameters() 获取<p>修改 HTTP 节点响应头配置参数，当 Name 取值为 ModifyResponseHeader 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifyResponseHeaderParameters(ModifyResponseHeaderParameters $ModifyResponseHeaderParameters) 设置<p>修改 HTTP 节点响应头配置参数，当 Name 取值为 ModifyResponseHeader 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ModifyRequestHeaderParameters getModifyRequestHeaderParameters() 获取<p>修改 HTTP 节点请求头配置参数，当 Name 取值为 ModifyRequestHeader 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifyRequestHeaderParameters(ModifyRequestHeaderParameters $ModifyRequestHeaderParameters) 设置<p>修改 HTTP 节点请求头配置参数，当 Name 取值为 ModifyRequestHeader 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ResponseSpeedLimitParameters getResponseSpeedLimitParameters() 获取<p>单连接下载限速配置参数，当 Name 取值为 ResponseSpeedLimit 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResponseSpeedLimitParameters(ResponseSpeedLimitParameters $ResponseSpeedLimitParameters) 设置<p>单连接下载限速配置参数，当 Name 取值为 ResponseSpeedLimit 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method SetContentIdentifierParameters getSetContentIdentifierParameters() 获取<p>内容标识配置参数，当 Name 取值为 SetContentIdentifier 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSetContentIdentifierParameters(SetContentIdentifierParameters $SetContentIdentifierParameters) 设置<p>内容标识配置参数，当 Name 取值为 SetContentIdentifier 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method VaryParameters getVaryParameters() 获取<p>Vary 特性配置参数，当 Name 取值为 Vary 时，该参数必填。</p>
 * @method void setVaryParameters(VaryParameters $VaryParameters) 设置<p>Vary 特性配置参数，当 Name 取值为 Vary 时，该参数必填。</p>
 * @method ContentCompressionParameters getContentCompressionParameters() 获取<p>内容压缩配置参数，当 Name 取值为 ContentCompression 时，该参数必填。该参数为白名单功能，如有需要，请联系腾讯云工程师处理。</p>
 * @method void setContentCompressionParameters(ContentCompressionParameters $ContentCompressionParameters) 设置<p>内容压缩配置参数，当 Name 取值为 ContentCompression 时，该参数必填。该参数为白名单功能，如有需要，请联系腾讯云工程师处理。</p>
 * @method OriginAuthenticationParameters getOriginAuthenticationParameters() 获取<p>回源鉴权配置参数，当 Name 取值为 OriginAuthentication 时，该参数必填。该参数为白名单功能，如有需要，请联系腾讯云工程师处理。</p>
 * @method void setOriginAuthenticationParameters(OriginAuthenticationParameters $OriginAuthenticationParameters) 设置<p>回源鉴权配置参数，当 Name 取值为 OriginAuthentication 时，该参数必填。该参数为白名单功能，如有需要，请联系腾讯云工程师处理。</p>
 */
class RuleEngineAction extends AbstractModel
{
    /**
     * @var string <p>操作名称。名称需要与参数结构体对应，例如 Name=Cache，则 CacheParameters 必填。</p><li>Cache：节点缓存 TTL；</li><li>CacheKey：自定义 Cache Key；</li><li>CachePrefresh：缓存预刷新；</li><li>AccessURLRedirect：访问 URL 重定向；</li><li>UpstreamURLRewrite：回源 URL 重写；</li><li>QUIC：QUIC；</li><li>WebSocket：WebSocket；</li><li>Authentication：Token 鉴权；</li><li>MaxAge：浏览器缓存 TTL；</li><li>StatusCodeCache：状态码缓存 TTL；</li><li>OfflineCache：离线缓存；</li><li>SmartRouting：智能加速；</li><li>AdvancedOriginRouting：高级回源优化；</li><li>RangeOriginPull：分片回源 ；</li><li>UpstreamHTTP2：HTTP2 回源；</li><li>HostHeader：Host Header 重写；</li><li>ForceRedirectHTTPS：访问协议强制 HTTPS 跳转配置；</li><li>OriginPullProtocol：回源 HTTPS；</li><li>Compression：智能压缩配置；</li><li>HSTS：HSTS；</li><li>ClientIPHeader：存储客户端请求 IP 的头部信息配置；</li><li>OCSPStapling：OCSP 装订；</li><li>HTTP2：HTTP2 接入；</li><li>PostMaxSize：POST 请求上传文件流式传输最大限制配置；</li><li>ClientIPCountry：回源时携带客户端 IP 所属地域信息；</li><li>UpstreamFollowRedirect：回源跟随重定向参数配置；</li><li>UpstreamRequest：回源请求参数；</li><li>Shield：源站卸载配置；</li><li>TLSConfig：SSL/TLS 安全；</li><li>ModifyOrigin：修改源站；</li><li> SiteFailover：源站故障转移；</li><li>HTTPUpstreamTimeout：七层回源超时配置；</li><li>HttpResponse：HTTP 应答；</li><li>ErrorPage：自定义错误页面；</li><li>ModifyResponseHeader：修改 HTTP 节点响应头；</li><li>ModifyRequestHeader：修改 HTTP 节点请求头；</li><li>ResponseSpeedLimit：单连接下载限速；</li><li>SetContentIdentifier：设置内容标识符；</li><li>Vary：Vary 特性配置；</li><li>ContentCompression：内容压缩配置；</li><li>OriginAuthentication：回源鉴权配置。</li>
     */
    public $Name;

    /**
     * @var CacheParameters <p>节点缓存 TTL 配置参数，当 Name 取值为 Cache 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CacheParameters;

    /**
     * @var CacheKeyParameters <p>自定义 Cache Key 配置参数，当 Name 取值为 CacheKey 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CacheKeyParameters;

    /**
     * @var CachePrefreshParameters <p>缓存预刷新配置参数，当 Name 取值为 CachePrefresh 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CachePrefreshParameters;

    /**
     * @var AccessURLRedirectParameters <p>访问 URL 重定向配置参数，当 Name 取值为 AccessURLRedirect 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccessURLRedirectParameters;

    /**
     * @var UpstreamURLRewriteParameters <p>回源 URL 重写配置参数，当 Name 取值为 UpstreamURLRewrite 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpstreamURLRewriteParameters;

    /**
     * @var QUICParameters <p>QUIC 配置参数，当 Name 取值为 QUIC 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QUICParameters;

    /**
     * @var WebSocketParameters <p>WebSocket 配置参数，当 Name 取值为 WebSocket 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WebSocketParameters;

    /**
     * @var AuthenticationParameters <p>Token 鉴权配置参数，当 Name 取值为 Authentication 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuthenticationParameters;

    /**
     * @var MaxAgeParameters <p>浏览器缓存 TTL 配置参数，当 Name 取值为 MaxAge 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxAgeParameters;

    /**
     * @var StatusCodeCacheParameters <p>状态码缓存 TTL 配置参数，当 Name 取值为 StatusCodeCache 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatusCodeCacheParameters;

    /**
     * @var OfflineCacheParameters <p>离线缓存配置参数，当 Name 取值为 OfflineCache 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OfflineCacheParameters;

    /**
     * @var SmartRoutingParameters <p>智能加速配置参数，当 Name 取值为 SmartRouting 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SmartRoutingParameters;

    /**
     * @var AdvancedOriginRoutingParameters <p>高级回源优化配置参数，当 Name 取值为 AdvancedOriginRouting 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdvancedOriginRoutingParameters;

    /**
     * @var RangeOriginPullParameters <p>分片回源配置参数，当 Name 取值为 RangeOriginPull 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RangeOriginPullParameters;

    /**
     * @var UpstreamHTTP2Parameters <p>HTTP2 回源配置参数，当 Name 取值为 UpstreamHTTP2 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpstreamHTTP2Parameters;

    /**
     * @var HostHeaderParameters <p>Host Header 重写配置参数，当 Name 取值为 HostHeader 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostHeaderParameters;

    /**
     * @var ForceRedirectHTTPSParameters <p>访问协议强制 HTTPS 跳转配置，当 Name 取值为 ForceRedirectHTTPS 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ForceRedirectHTTPSParameters;

    /**
     * @var OriginPullProtocolParameters <p>回源 HTTPS 配置参数，当 Name 取值为 OriginPullProtocol 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OriginPullProtocolParameters;

    /**
     * @var CompressionParameters <p>智能压缩配置，当 Name 取值为 Compression 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CompressionParameters;

    /**
     * @var HSTSParameters <p>HSTS 配置参数，当 Name 取值为 HSTS 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HSTSParameters;

    /**
     * @var ClientIPHeaderParameters <p>存储客户端请求 IP 的头部信息配置，当 Name 取值为 ClientIPHeader 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClientIPHeaderParameters;

    /**
     * @var OCSPStaplingParameters <p>OCSP 装订配置参数，当 Name 取值为 OCSPStapling 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OCSPStaplingParameters;

    /**
     * @var HTTP2Parameters <p>HTTP2 接入配置参数，当 Name 取值为 HTTP2 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HTTP2Parameters;

    /**
     * @var PostMaxSizeParameters <p>POST 请求上传文件流式传输最大限制配置，当 Name 取值为 PostMaxSize 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PostMaxSizeParameters;

    /**
     * @var ClientIPCountryParameters <p>回源时携带客户端 IP 所属地域信息配置参数，当 Name 取值为 ClientIPCountry 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClientIPCountryParameters;

    /**
     * @var UpstreamFollowRedirectParameters <p>回源跟随重定向参数配置，当 Name 取值为 UpstreamFollowRedirect 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpstreamFollowRedirectParameters;

    /**
     * @var UpstreamRequestParameters <p>回源请求参数配置参数，当 Name 取值为 UpstreamRequest 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpstreamRequestParameters;

    /**
     * @var ShieldParameters <p>源站卸载配置参数，当 Name 取值为 Shield 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShieldParameters;

    /**
     * @var TLSConfigParameters <p>SSL/TLS 安全配置参数，当 Name 取值为 TLSConfig 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TLSConfigParameters;

    /**
     * @var ModifyOriginParameters <p>修改源站配置参数，当 Name 取值为 ModifyOrigin 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifyOriginParameters;

    /**
     * @var SiteFailoverParameters <p>源站故障转移配置参数，当 Name 取值为 SiteFailover 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SiteFailoverParameters;

    /**
     * @var HTTPUpstreamTimeoutParameters <p>七层回源超时配置，当 Name 取值为 HTTPUpstreamTimeout 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HTTPUpstreamTimeoutParameters;

    /**
     * @var HTTPResponseParameters <p>HTTP 应答配置参数，当 Name 取值为 HttpResponse 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HttpResponseParameters;

    /**
     * @var ErrorPageParameters <p>自定义错误页面配置参数，当 Name 取值为 ErrorPage 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorPageParameters;

    /**
     * @var ModifyResponseHeaderParameters <p>修改 HTTP 节点响应头配置参数，当 Name 取值为 ModifyResponseHeader 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifyResponseHeaderParameters;

    /**
     * @var ModifyRequestHeaderParameters <p>修改 HTTP 节点请求头配置参数，当 Name 取值为 ModifyRequestHeader 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifyRequestHeaderParameters;

    /**
     * @var ResponseSpeedLimitParameters <p>单连接下载限速配置参数，当 Name 取值为 ResponseSpeedLimit 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResponseSpeedLimitParameters;

    /**
     * @var SetContentIdentifierParameters <p>内容标识配置参数，当 Name 取值为 SetContentIdentifier 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SetContentIdentifierParameters;

    /**
     * @var VaryParameters <p>Vary 特性配置参数，当 Name 取值为 Vary 时，该参数必填。</p>
     */
    public $VaryParameters;

    /**
     * @var ContentCompressionParameters <p>内容压缩配置参数，当 Name 取值为 ContentCompression 时，该参数必填。该参数为白名单功能，如有需要，请联系腾讯云工程师处理。</p>
     */
    public $ContentCompressionParameters;

    /**
     * @var OriginAuthenticationParameters <p>回源鉴权配置参数，当 Name 取值为 OriginAuthentication 时，该参数必填。该参数为白名单功能，如有需要，请联系腾讯云工程师处理。</p>
     */
    public $OriginAuthenticationParameters;

    /**
     * @param string $Name <p>操作名称。名称需要与参数结构体对应，例如 Name=Cache，则 CacheParameters 必填。</p><li>Cache：节点缓存 TTL；</li><li>CacheKey：自定义 Cache Key；</li><li>CachePrefresh：缓存预刷新；</li><li>AccessURLRedirect：访问 URL 重定向；</li><li>UpstreamURLRewrite：回源 URL 重写；</li><li>QUIC：QUIC；</li><li>WebSocket：WebSocket；</li><li>Authentication：Token 鉴权；</li><li>MaxAge：浏览器缓存 TTL；</li><li>StatusCodeCache：状态码缓存 TTL；</li><li>OfflineCache：离线缓存；</li><li>SmartRouting：智能加速；</li><li>AdvancedOriginRouting：高级回源优化；</li><li>RangeOriginPull：分片回源 ；</li><li>UpstreamHTTP2：HTTP2 回源；</li><li>HostHeader：Host Header 重写；</li><li>ForceRedirectHTTPS：访问协议强制 HTTPS 跳转配置；</li><li>OriginPullProtocol：回源 HTTPS；</li><li>Compression：智能压缩配置；</li><li>HSTS：HSTS；</li><li>ClientIPHeader：存储客户端请求 IP 的头部信息配置；</li><li>OCSPStapling：OCSP 装订；</li><li>HTTP2：HTTP2 接入；</li><li>PostMaxSize：POST 请求上传文件流式传输最大限制配置；</li><li>ClientIPCountry：回源时携带客户端 IP 所属地域信息；</li><li>UpstreamFollowRedirect：回源跟随重定向参数配置；</li><li>UpstreamRequest：回源请求参数；</li><li>Shield：源站卸载配置；</li><li>TLSConfig：SSL/TLS 安全；</li><li>ModifyOrigin：修改源站；</li><li> SiteFailover：源站故障转移；</li><li>HTTPUpstreamTimeout：七层回源超时配置；</li><li>HttpResponse：HTTP 应答；</li><li>ErrorPage：自定义错误页面；</li><li>ModifyResponseHeader：修改 HTTP 节点响应头；</li><li>ModifyRequestHeader：修改 HTTP 节点请求头；</li><li>ResponseSpeedLimit：单连接下载限速；</li><li>SetContentIdentifier：设置内容标识符；</li><li>Vary：Vary 特性配置；</li><li>ContentCompression：内容压缩配置；</li><li>OriginAuthentication：回源鉴权配置。</li>
     * @param CacheParameters $CacheParameters <p>节点缓存 TTL 配置参数，当 Name 取值为 Cache 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param CacheKeyParameters $CacheKeyParameters <p>自定义 Cache Key 配置参数，当 Name 取值为 CacheKey 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param CachePrefreshParameters $CachePrefreshParameters <p>缓存预刷新配置参数，当 Name 取值为 CachePrefresh 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param AccessURLRedirectParameters $AccessURLRedirectParameters <p>访问 URL 重定向配置参数，当 Name 取值为 AccessURLRedirect 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param UpstreamURLRewriteParameters $UpstreamURLRewriteParameters <p>回源 URL 重写配置参数，当 Name 取值为 UpstreamURLRewrite 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param QUICParameters $QUICParameters <p>QUIC 配置参数，当 Name 取值为 QUIC 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param WebSocketParameters $WebSocketParameters <p>WebSocket 配置参数，当 Name 取值为 WebSocket 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param AuthenticationParameters $AuthenticationParameters <p>Token 鉴权配置参数，当 Name 取值为 Authentication 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param MaxAgeParameters $MaxAgeParameters <p>浏览器缓存 TTL 配置参数，当 Name 取值为 MaxAge 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param StatusCodeCacheParameters $StatusCodeCacheParameters <p>状态码缓存 TTL 配置参数，当 Name 取值为 StatusCodeCache 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param OfflineCacheParameters $OfflineCacheParameters <p>离线缓存配置参数，当 Name 取值为 OfflineCache 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param SmartRoutingParameters $SmartRoutingParameters <p>智能加速配置参数，当 Name 取值为 SmartRouting 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param AdvancedOriginRoutingParameters $AdvancedOriginRoutingParameters <p>高级回源优化配置参数，当 Name 取值为 AdvancedOriginRouting 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param RangeOriginPullParameters $RangeOriginPullParameters <p>分片回源配置参数，当 Name 取值为 RangeOriginPull 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param UpstreamHTTP2Parameters $UpstreamHTTP2Parameters <p>HTTP2 回源配置参数，当 Name 取值为 UpstreamHTTP2 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param HostHeaderParameters $HostHeaderParameters <p>Host Header 重写配置参数，当 Name 取值为 HostHeader 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ForceRedirectHTTPSParameters $ForceRedirectHTTPSParameters <p>访问协议强制 HTTPS 跳转配置，当 Name 取值为 ForceRedirectHTTPS 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param OriginPullProtocolParameters $OriginPullProtocolParameters <p>回源 HTTPS 配置参数，当 Name 取值为 OriginPullProtocol 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param CompressionParameters $CompressionParameters <p>智能压缩配置，当 Name 取值为 Compression 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param HSTSParameters $HSTSParameters <p>HSTS 配置参数，当 Name 取值为 HSTS 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ClientIPHeaderParameters $ClientIPHeaderParameters <p>存储客户端请求 IP 的头部信息配置，当 Name 取值为 ClientIPHeader 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param OCSPStaplingParameters $OCSPStaplingParameters <p>OCSP 装订配置参数，当 Name 取值为 OCSPStapling 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param HTTP2Parameters $HTTP2Parameters <p>HTTP2 接入配置参数，当 Name 取值为 HTTP2 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param PostMaxSizeParameters $PostMaxSizeParameters <p>POST 请求上传文件流式传输最大限制配置，当 Name 取值为 PostMaxSize 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ClientIPCountryParameters $ClientIPCountryParameters <p>回源时携带客户端 IP 所属地域信息配置参数，当 Name 取值为 ClientIPCountry 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param UpstreamFollowRedirectParameters $UpstreamFollowRedirectParameters <p>回源跟随重定向参数配置，当 Name 取值为 UpstreamFollowRedirect 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param UpstreamRequestParameters $UpstreamRequestParameters <p>回源请求参数配置参数，当 Name 取值为 UpstreamRequest 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ShieldParameters $ShieldParameters <p>源站卸载配置参数，当 Name 取值为 Shield 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param TLSConfigParameters $TLSConfigParameters <p>SSL/TLS 安全配置参数，当 Name 取值为 TLSConfig 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ModifyOriginParameters $ModifyOriginParameters <p>修改源站配置参数，当 Name 取值为 ModifyOrigin 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param SiteFailoverParameters $SiteFailoverParameters <p>源站故障转移配置参数，当 Name 取值为 SiteFailover 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param HTTPUpstreamTimeoutParameters $HTTPUpstreamTimeoutParameters <p>七层回源超时配置，当 Name 取值为 HTTPUpstreamTimeout 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param HTTPResponseParameters $HttpResponseParameters <p>HTTP 应答配置参数，当 Name 取值为 HttpResponse 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ErrorPageParameters $ErrorPageParameters <p>自定义错误页面配置参数，当 Name 取值为 ErrorPage 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ModifyResponseHeaderParameters $ModifyResponseHeaderParameters <p>修改 HTTP 节点响应头配置参数，当 Name 取值为 ModifyResponseHeader 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ModifyRequestHeaderParameters $ModifyRequestHeaderParameters <p>修改 HTTP 节点请求头配置参数，当 Name 取值为 ModifyRequestHeader 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ResponseSpeedLimitParameters $ResponseSpeedLimitParameters <p>单连接下载限速配置参数，当 Name 取值为 ResponseSpeedLimit 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param SetContentIdentifierParameters $SetContentIdentifierParameters <p>内容标识配置参数，当 Name 取值为 SetContentIdentifier 时，该参数必填。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param VaryParameters $VaryParameters <p>Vary 特性配置参数，当 Name 取值为 Vary 时，该参数必填。</p>
     * @param ContentCompressionParameters $ContentCompressionParameters <p>内容压缩配置参数，当 Name 取值为 ContentCompression 时，该参数必填。该参数为白名单功能，如有需要，请联系腾讯云工程师处理。</p>
     * @param OriginAuthenticationParameters $OriginAuthenticationParameters <p>回源鉴权配置参数，当 Name 取值为 OriginAuthentication 时，该参数必填。该参数为白名单功能，如有需要，请联系腾讯云工程师处理。</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CacheParameters",$param) and $param["CacheParameters"] !== null) {
            $this->CacheParameters = new CacheParameters();
            $this->CacheParameters->deserialize($param["CacheParameters"]);
        }

        if (array_key_exists("CacheKeyParameters",$param) and $param["CacheKeyParameters"] !== null) {
            $this->CacheKeyParameters = new CacheKeyParameters();
            $this->CacheKeyParameters->deserialize($param["CacheKeyParameters"]);
        }

        if (array_key_exists("CachePrefreshParameters",$param) and $param["CachePrefreshParameters"] !== null) {
            $this->CachePrefreshParameters = new CachePrefreshParameters();
            $this->CachePrefreshParameters->deserialize($param["CachePrefreshParameters"]);
        }

        if (array_key_exists("AccessURLRedirectParameters",$param) and $param["AccessURLRedirectParameters"] !== null) {
            $this->AccessURLRedirectParameters = new AccessURLRedirectParameters();
            $this->AccessURLRedirectParameters->deserialize($param["AccessURLRedirectParameters"]);
        }

        if (array_key_exists("UpstreamURLRewriteParameters",$param) and $param["UpstreamURLRewriteParameters"] !== null) {
            $this->UpstreamURLRewriteParameters = new UpstreamURLRewriteParameters();
            $this->UpstreamURLRewriteParameters->deserialize($param["UpstreamURLRewriteParameters"]);
        }

        if (array_key_exists("QUICParameters",$param) and $param["QUICParameters"] !== null) {
            $this->QUICParameters = new QUICParameters();
            $this->QUICParameters->deserialize($param["QUICParameters"]);
        }

        if (array_key_exists("WebSocketParameters",$param) and $param["WebSocketParameters"] !== null) {
            $this->WebSocketParameters = new WebSocketParameters();
            $this->WebSocketParameters->deserialize($param["WebSocketParameters"]);
        }

        if (array_key_exists("AuthenticationParameters",$param) and $param["AuthenticationParameters"] !== null) {
            $this->AuthenticationParameters = new AuthenticationParameters();
            $this->AuthenticationParameters->deserialize($param["AuthenticationParameters"]);
        }

        if (array_key_exists("MaxAgeParameters",$param) and $param["MaxAgeParameters"] !== null) {
            $this->MaxAgeParameters = new MaxAgeParameters();
            $this->MaxAgeParameters->deserialize($param["MaxAgeParameters"]);
        }

        if (array_key_exists("StatusCodeCacheParameters",$param) and $param["StatusCodeCacheParameters"] !== null) {
            $this->StatusCodeCacheParameters = new StatusCodeCacheParameters();
            $this->StatusCodeCacheParameters->deserialize($param["StatusCodeCacheParameters"]);
        }

        if (array_key_exists("OfflineCacheParameters",$param) and $param["OfflineCacheParameters"] !== null) {
            $this->OfflineCacheParameters = new OfflineCacheParameters();
            $this->OfflineCacheParameters->deserialize($param["OfflineCacheParameters"]);
        }

        if (array_key_exists("SmartRoutingParameters",$param) and $param["SmartRoutingParameters"] !== null) {
            $this->SmartRoutingParameters = new SmartRoutingParameters();
            $this->SmartRoutingParameters->deserialize($param["SmartRoutingParameters"]);
        }

        if (array_key_exists("AdvancedOriginRoutingParameters",$param) and $param["AdvancedOriginRoutingParameters"] !== null) {
            $this->AdvancedOriginRoutingParameters = new AdvancedOriginRoutingParameters();
            $this->AdvancedOriginRoutingParameters->deserialize($param["AdvancedOriginRoutingParameters"]);
        }

        if (array_key_exists("RangeOriginPullParameters",$param) and $param["RangeOriginPullParameters"] !== null) {
            $this->RangeOriginPullParameters = new RangeOriginPullParameters();
            $this->RangeOriginPullParameters->deserialize($param["RangeOriginPullParameters"]);
        }

        if (array_key_exists("UpstreamHTTP2Parameters",$param) and $param["UpstreamHTTP2Parameters"] !== null) {
            $this->UpstreamHTTP2Parameters = new UpstreamHTTP2Parameters();
            $this->UpstreamHTTP2Parameters->deserialize($param["UpstreamHTTP2Parameters"]);
        }

        if (array_key_exists("HostHeaderParameters",$param) and $param["HostHeaderParameters"] !== null) {
            $this->HostHeaderParameters = new HostHeaderParameters();
            $this->HostHeaderParameters->deserialize($param["HostHeaderParameters"]);
        }

        if (array_key_exists("ForceRedirectHTTPSParameters",$param) and $param["ForceRedirectHTTPSParameters"] !== null) {
            $this->ForceRedirectHTTPSParameters = new ForceRedirectHTTPSParameters();
            $this->ForceRedirectHTTPSParameters->deserialize($param["ForceRedirectHTTPSParameters"]);
        }

        if (array_key_exists("OriginPullProtocolParameters",$param) and $param["OriginPullProtocolParameters"] !== null) {
            $this->OriginPullProtocolParameters = new OriginPullProtocolParameters();
            $this->OriginPullProtocolParameters->deserialize($param["OriginPullProtocolParameters"]);
        }

        if (array_key_exists("CompressionParameters",$param) and $param["CompressionParameters"] !== null) {
            $this->CompressionParameters = new CompressionParameters();
            $this->CompressionParameters->deserialize($param["CompressionParameters"]);
        }

        if (array_key_exists("HSTSParameters",$param) and $param["HSTSParameters"] !== null) {
            $this->HSTSParameters = new HSTSParameters();
            $this->HSTSParameters->deserialize($param["HSTSParameters"]);
        }

        if (array_key_exists("ClientIPHeaderParameters",$param) and $param["ClientIPHeaderParameters"] !== null) {
            $this->ClientIPHeaderParameters = new ClientIPHeaderParameters();
            $this->ClientIPHeaderParameters->deserialize($param["ClientIPHeaderParameters"]);
        }

        if (array_key_exists("OCSPStaplingParameters",$param) and $param["OCSPStaplingParameters"] !== null) {
            $this->OCSPStaplingParameters = new OCSPStaplingParameters();
            $this->OCSPStaplingParameters->deserialize($param["OCSPStaplingParameters"]);
        }

        if (array_key_exists("HTTP2Parameters",$param) and $param["HTTP2Parameters"] !== null) {
            $this->HTTP2Parameters = new HTTP2Parameters();
            $this->HTTP2Parameters->deserialize($param["HTTP2Parameters"]);
        }

        if (array_key_exists("PostMaxSizeParameters",$param) and $param["PostMaxSizeParameters"] !== null) {
            $this->PostMaxSizeParameters = new PostMaxSizeParameters();
            $this->PostMaxSizeParameters->deserialize($param["PostMaxSizeParameters"]);
        }

        if (array_key_exists("ClientIPCountryParameters",$param) and $param["ClientIPCountryParameters"] !== null) {
            $this->ClientIPCountryParameters = new ClientIPCountryParameters();
            $this->ClientIPCountryParameters->deserialize($param["ClientIPCountryParameters"]);
        }

        if (array_key_exists("UpstreamFollowRedirectParameters",$param) and $param["UpstreamFollowRedirectParameters"] !== null) {
            $this->UpstreamFollowRedirectParameters = new UpstreamFollowRedirectParameters();
            $this->UpstreamFollowRedirectParameters->deserialize($param["UpstreamFollowRedirectParameters"]);
        }

        if (array_key_exists("UpstreamRequestParameters",$param) and $param["UpstreamRequestParameters"] !== null) {
            $this->UpstreamRequestParameters = new UpstreamRequestParameters();
            $this->UpstreamRequestParameters->deserialize($param["UpstreamRequestParameters"]);
        }

        if (array_key_exists("ShieldParameters",$param) and $param["ShieldParameters"] !== null) {
            $this->ShieldParameters = new ShieldParameters();
            $this->ShieldParameters->deserialize($param["ShieldParameters"]);
        }

        if (array_key_exists("TLSConfigParameters",$param) and $param["TLSConfigParameters"] !== null) {
            $this->TLSConfigParameters = new TLSConfigParameters();
            $this->TLSConfigParameters->deserialize($param["TLSConfigParameters"]);
        }

        if (array_key_exists("ModifyOriginParameters",$param) and $param["ModifyOriginParameters"] !== null) {
            $this->ModifyOriginParameters = new ModifyOriginParameters();
            $this->ModifyOriginParameters->deserialize($param["ModifyOriginParameters"]);
        }

        if (array_key_exists("SiteFailoverParameters",$param) and $param["SiteFailoverParameters"] !== null) {
            $this->SiteFailoverParameters = new SiteFailoverParameters();
            $this->SiteFailoverParameters->deserialize($param["SiteFailoverParameters"]);
        }

        if (array_key_exists("HTTPUpstreamTimeoutParameters",$param) and $param["HTTPUpstreamTimeoutParameters"] !== null) {
            $this->HTTPUpstreamTimeoutParameters = new HTTPUpstreamTimeoutParameters();
            $this->HTTPUpstreamTimeoutParameters->deserialize($param["HTTPUpstreamTimeoutParameters"]);
        }

        if (array_key_exists("HttpResponseParameters",$param) and $param["HttpResponseParameters"] !== null) {
            $this->HttpResponseParameters = new HTTPResponseParameters();
            $this->HttpResponseParameters->deserialize($param["HttpResponseParameters"]);
        }

        if (array_key_exists("ErrorPageParameters",$param) and $param["ErrorPageParameters"] !== null) {
            $this->ErrorPageParameters = new ErrorPageParameters();
            $this->ErrorPageParameters->deserialize($param["ErrorPageParameters"]);
        }

        if (array_key_exists("ModifyResponseHeaderParameters",$param) and $param["ModifyResponseHeaderParameters"] !== null) {
            $this->ModifyResponseHeaderParameters = new ModifyResponseHeaderParameters();
            $this->ModifyResponseHeaderParameters->deserialize($param["ModifyResponseHeaderParameters"]);
        }

        if (array_key_exists("ModifyRequestHeaderParameters",$param) and $param["ModifyRequestHeaderParameters"] !== null) {
            $this->ModifyRequestHeaderParameters = new ModifyRequestHeaderParameters();
            $this->ModifyRequestHeaderParameters->deserialize($param["ModifyRequestHeaderParameters"]);
        }

        if (array_key_exists("ResponseSpeedLimitParameters",$param) and $param["ResponseSpeedLimitParameters"] !== null) {
            $this->ResponseSpeedLimitParameters = new ResponseSpeedLimitParameters();
            $this->ResponseSpeedLimitParameters->deserialize($param["ResponseSpeedLimitParameters"]);
        }

        if (array_key_exists("SetContentIdentifierParameters",$param) and $param["SetContentIdentifierParameters"] !== null) {
            $this->SetContentIdentifierParameters = new SetContentIdentifierParameters();
            $this->SetContentIdentifierParameters->deserialize($param["SetContentIdentifierParameters"]);
        }

        if (array_key_exists("VaryParameters",$param) and $param["VaryParameters"] !== null) {
            $this->VaryParameters = new VaryParameters();
            $this->VaryParameters->deserialize($param["VaryParameters"]);
        }

        if (array_key_exists("ContentCompressionParameters",$param) and $param["ContentCompressionParameters"] !== null) {
            $this->ContentCompressionParameters = new ContentCompressionParameters();
            $this->ContentCompressionParameters->deserialize($param["ContentCompressionParameters"]);
        }

        if (array_key_exists("OriginAuthenticationParameters",$param) and $param["OriginAuthenticationParameters"] !== null) {
            $this->OriginAuthenticationParameters = new OriginAuthenticationParameters();
            $this->OriginAuthenticationParameters->deserialize($param["OriginAuthenticationParameters"]);
        }
    }
}
