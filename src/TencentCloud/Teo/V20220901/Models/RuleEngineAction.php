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
 * @method string getName() 获取操作名称。名称需要与参数结构体对应，例如 Name=Cache，则 CacheParameters 必填。
<li>Cache：节点缓存 TTL；</li>
<li>CacheKey：自定义 Cache Key；</li>
<li>CachePrefresh：缓存预刷新；</li>
<li>AccessURLRedirect：访问 URL 重定向；</li>
<li>UpstreamURLRewrite：回源 URL 重写；</li>
<li>QUIC：QUIC；</li>
<li>WebSocket：WebSocket；</li>
<li>Authentication：Token 鉴权；</li>
<li>MaxAge：浏览器缓存 TTL；</li>
<li>StatusCodeCache：状态码缓存 TTL；</li>
<li>OfflineCache：离线缓存；</li>
<li>SmartRouting：智能加速；</li>
<li>RangeOriginPull：分片回源 ；</li>
<li>UpstreamHTTP2：HTTP2 回源；</li>
<li>HostHeader：Host Header 重写；</li>
<li>ForceRedirectHTTPS：访问协议强制 HTTPS 跳转配置；</li>
<li>OriginPullProtocol：回源 HTTPS；</li>
<li>Compression：智能压缩配置；</li>
<li>HSTS：HSTS；</li>
<li>ClientIPHeader：存储客户端请求 IP 的头部信息配置；</li>
<li>OCSPStapling：OCSP 装订；</li>
<li>HTTP2：HTTP2 接入；</li>
<li>PostMaxSize：POST 请求上传文件流式传输最大限制配置；</li>
<li>ClientIPCountry：回源时携带客户端 IP 所属地域信息；</li>
<li>UpstreamFollowRedirect：回源跟随重定向参数配置；</li>
<li>UpstreamRequest：回源请求参数；</li>
<li>TLSConfig：SSL/TLS 安全；</li>
<li>ModifyOrigin：修改源站；</li>
<li>HTTPUpstreamTimeout：七层回源超时配置；</li>
<li>HttpResponse：HTTP 应答；</li>
<li>ErrorPage：自定义错误页面；</li>
<li>ModifyResponseHeader：修改 HTTP 节点响应头；</li>
<li>ModifyRequestHeader：修改 HTTP 节点请求头；</li>
<li>ResponseSpeedLimit：单连接下载限速；</li>
<li>SetContentIdentifier：设置内容标识符；</li>
<li>Vary：Vary 特性配置。</li>
 * @method void setName(string $Name) 设置操作名称。名称需要与参数结构体对应，例如 Name=Cache，则 CacheParameters 必填。
<li>Cache：节点缓存 TTL；</li>
<li>CacheKey：自定义 Cache Key；</li>
<li>CachePrefresh：缓存预刷新；</li>
<li>AccessURLRedirect：访问 URL 重定向；</li>
<li>UpstreamURLRewrite：回源 URL 重写；</li>
<li>QUIC：QUIC；</li>
<li>WebSocket：WebSocket；</li>
<li>Authentication：Token 鉴权；</li>
<li>MaxAge：浏览器缓存 TTL；</li>
<li>StatusCodeCache：状态码缓存 TTL；</li>
<li>OfflineCache：离线缓存；</li>
<li>SmartRouting：智能加速；</li>
<li>RangeOriginPull：分片回源 ；</li>
<li>UpstreamHTTP2：HTTP2 回源；</li>
<li>HostHeader：Host Header 重写；</li>
<li>ForceRedirectHTTPS：访问协议强制 HTTPS 跳转配置；</li>
<li>OriginPullProtocol：回源 HTTPS；</li>
<li>Compression：智能压缩配置；</li>
<li>HSTS：HSTS；</li>
<li>ClientIPHeader：存储客户端请求 IP 的头部信息配置；</li>
<li>OCSPStapling：OCSP 装订；</li>
<li>HTTP2：HTTP2 接入；</li>
<li>PostMaxSize：POST 请求上传文件流式传输最大限制配置；</li>
<li>ClientIPCountry：回源时携带客户端 IP 所属地域信息；</li>
<li>UpstreamFollowRedirect：回源跟随重定向参数配置；</li>
<li>UpstreamRequest：回源请求参数；</li>
<li>TLSConfig：SSL/TLS 安全；</li>
<li>ModifyOrigin：修改源站；</li>
<li>HTTPUpstreamTimeout：七层回源超时配置；</li>
<li>HttpResponse：HTTP 应答；</li>
<li>ErrorPage：自定义错误页面；</li>
<li>ModifyResponseHeader：修改 HTTP 节点响应头；</li>
<li>ModifyRequestHeader：修改 HTTP 节点请求头；</li>
<li>ResponseSpeedLimit：单连接下载限速；</li>
<li>SetContentIdentifier：设置内容标识符；</li>
<li>Vary：Vary 特性配置。</li>
 * @method CacheParameters getCacheParameters() 获取节点缓存 TTL 配置参数，当 Name 取值为 Cache 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCacheParameters(CacheParameters $CacheParameters) 设置节点缓存 TTL 配置参数，当 Name 取值为 Cache 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method CacheKeyParameters getCacheKeyParameters() 获取自定义 Cache Key 配置参数，当 Name 取值为 CacheKey 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCacheKeyParameters(CacheKeyParameters $CacheKeyParameters) 设置自定义 Cache Key 配置参数，当 Name 取值为 CacheKey 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method CachePrefreshParameters getCachePrefreshParameters() 获取缓存预刷新配置参数，当 Name 取值为 CachePrefresh 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCachePrefreshParameters(CachePrefreshParameters $CachePrefreshParameters) 设置缓存预刷新配置参数，当 Name 取值为 CachePrefresh 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method AccessURLRedirectParameters getAccessURLRedirectParameters() 获取访问 URL 重定向配置参数，当 Name 取值为 AccessURLRedirect 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccessURLRedirectParameters(AccessURLRedirectParameters $AccessURLRedirectParameters) 设置访问 URL 重定向配置参数，当 Name 取值为 AccessURLRedirect 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method UpstreamURLRewriteParameters getUpstreamURLRewriteParameters() 获取回源 URL 重写配置参数，当 Name 取值为 UpstreamURLRewrite 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpstreamURLRewriteParameters(UpstreamURLRewriteParameters $UpstreamURLRewriteParameters) 设置回源 URL 重写配置参数，当 Name 取值为 UpstreamURLRewrite 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method QUICParameters getQUICParameters() 获取QUIC 配置参数，当 Name 取值为 QUIC 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQUICParameters(QUICParameters $QUICParameters) 设置QUIC 配置参数，当 Name 取值为 QUIC 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method WebSocketParameters getWebSocketParameters() 获取WebSocket 配置参数，当 Name 取值为 WebSocket 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWebSocketParameters(WebSocketParameters $WebSocketParameters) 设置WebSocket 配置参数，当 Name 取值为 WebSocket 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method AuthenticationParameters getAuthenticationParameters() 获取Token 鉴权配置参数，当 Name 取值为 Authentication 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthenticationParameters(AuthenticationParameters $AuthenticationParameters) 设置Token 鉴权配置参数，当 Name 取值为 Authentication 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method MaxAgeParameters getMaxAgeParameters() 获取浏览器缓存 TTL 配置参数，当 Name 取值为 MaxAge 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxAgeParameters(MaxAgeParameters $MaxAgeParameters) 设置浏览器缓存 TTL 配置参数，当 Name 取值为 MaxAge 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method StatusCodeCacheParameters getStatusCodeCacheParameters() 获取状态码缓存 TTL 配置参数，当 Name 取值为 StatusCodeCache 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatusCodeCacheParameters(StatusCodeCacheParameters $StatusCodeCacheParameters) 设置状态码缓存 TTL 配置参数，当 Name 取值为 StatusCodeCache 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method OfflineCacheParameters getOfflineCacheParameters() 获取离线缓存配置参数，当 Name 取值为 OfflineCache 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOfflineCacheParameters(OfflineCacheParameters $OfflineCacheParameters) 设置离线缓存配置参数，当 Name 取值为 OfflineCache 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method SmartRoutingParameters getSmartRoutingParameters() 获取智能加速配置参数，当 Name 取值为 SmartRouting 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSmartRoutingParameters(SmartRoutingParameters $SmartRoutingParameters) 设置智能加速配置参数，当 Name 取值为 SmartRouting 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method RangeOriginPullParameters getRangeOriginPullParameters() 获取分片回源配置参数，当 Name 取值为 RangeOriginPull 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRangeOriginPullParameters(RangeOriginPullParameters $RangeOriginPullParameters) 设置分片回源配置参数，当 Name 取值为 RangeOriginPull 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method UpstreamHTTP2Parameters getUpstreamHTTP2Parameters() 获取HTTP2 回源配置参数，当 Name 取值为 UpstreamHTTP2 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpstreamHTTP2Parameters(UpstreamHTTP2Parameters $UpstreamHTTP2Parameters) 设置HTTP2 回源配置参数，当 Name 取值为 UpstreamHTTP2 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method HostHeaderParameters getHostHeaderParameters() 获取Host Header 重写配置参数，当 Name 取值为 HostHeader 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostHeaderParameters(HostHeaderParameters $HostHeaderParameters) 设置Host Header 重写配置参数，当 Name 取值为 HostHeader 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ForceRedirectHTTPSParameters getForceRedirectHTTPSParameters() 获取访问协议强制 HTTPS 跳转配置，当 Name 取值为 ForceRedirectHTTPS 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setForceRedirectHTTPSParameters(ForceRedirectHTTPSParameters $ForceRedirectHTTPSParameters) 设置访问协议强制 HTTPS 跳转配置，当 Name 取值为 ForceRedirectHTTPS 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method OriginPullProtocolParameters getOriginPullProtocolParameters() 获取回源 HTTPS 配置参数，当 Name 取值为 OriginPullProtocol 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriginPullProtocolParameters(OriginPullProtocolParameters $OriginPullProtocolParameters) 设置回源 HTTPS 配置参数，当 Name 取值为 OriginPullProtocol 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method CompressionParameters getCompressionParameters() 获取智能压缩配置，当 Name 取值为 Compression 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompressionParameters(CompressionParameters $CompressionParameters) 设置智能压缩配置，当 Name 取值为 Compression 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method HSTSParameters getHSTSParameters() 获取HSTS 配置参数，当 Name 取值为 HSTS 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHSTSParameters(HSTSParameters $HSTSParameters) 设置HSTS 配置参数，当 Name 取值为 HSTS 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ClientIPHeaderParameters getClientIPHeaderParameters() 获取存储客户端请求 IP 的头部信息配置，当 Name 取值为 ClientIPHeader 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClientIPHeaderParameters(ClientIPHeaderParameters $ClientIPHeaderParameters) 设置存储客户端请求 IP 的头部信息配置，当 Name 取值为 ClientIPHeader 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method OCSPStaplingParameters getOCSPStaplingParameters() 获取OCSP 装订配置参数，当 Name 取值为 OCSPStapling 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOCSPStaplingParameters(OCSPStaplingParameters $OCSPStaplingParameters) 设置OCSP 装订配置参数，当 Name 取值为 OCSPStapling 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method HTTP2Parameters getHTTP2Parameters() 获取HTTP2 接入配置参数，当 Name 取值为 HTTP2 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHTTP2Parameters(HTTP2Parameters $HTTP2Parameters) 设置HTTP2 接入配置参数，当 Name 取值为 HTTP2 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method PostMaxSizeParameters getPostMaxSizeParameters() 获取POST 请求上传文件流式传输最大限制配置，当 Name 取值为 PostMaxSize 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPostMaxSizeParameters(PostMaxSizeParameters $PostMaxSizeParameters) 设置POST 请求上传文件流式传输最大限制配置，当 Name 取值为 PostMaxSize 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ClientIPCountryParameters getClientIPCountryParameters() 获取回源时携带客户端 IP 所属地域信息配置参数，当 Name 取值为 ClientIPCountry 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClientIPCountryParameters(ClientIPCountryParameters $ClientIPCountryParameters) 设置回源时携带客户端 IP 所属地域信息配置参数，当 Name 取值为 ClientIPCountry 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method UpstreamFollowRedirectParameters getUpstreamFollowRedirectParameters() 获取回源跟随重定向参数配置，当 Name 取值为 UpstreamFollowRedirect 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpstreamFollowRedirectParameters(UpstreamFollowRedirectParameters $UpstreamFollowRedirectParameters) 设置回源跟随重定向参数配置，当 Name 取值为 UpstreamFollowRedirect 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method UpstreamRequestParameters getUpstreamRequestParameters() 获取回源请求参数配置参数，当 Name 取值为 UpstreamRequest 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpstreamRequestParameters(UpstreamRequestParameters $UpstreamRequestParameters) 设置回源请求参数配置参数，当 Name 取值为 UpstreamRequest 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method TLSConfigParameters getTLSConfigParameters() 获取SSL/TLS 安全配置参数，当 Name 取值为 TLSConfig 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTLSConfigParameters(TLSConfigParameters $TLSConfigParameters) 设置SSL/TLS 安全配置参数，当 Name 取值为 TLSConfig 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ModifyOriginParameters getModifyOriginParameters() 获取修改源站配置参数，当 Name 取值为 ModifyOrigin 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifyOriginParameters(ModifyOriginParameters $ModifyOriginParameters) 设置修改源站配置参数，当 Name 取值为 ModifyOrigin 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method HTTPUpstreamTimeoutParameters getHTTPUpstreamTimeoutParameters() 获取七层回源超时配置，当 Name 取值为 HTTPUpstreamTimeout 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHTTPUpstreamTimeoutParameters(HTTPUpstreamTimeoutParameters $HTTPUpstreamTimeoutParameters) 设置七层回源超时配置，当 Name 取值为 HTTPUpstreamTimeout 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method HTTPResponseParameters getHttpResponseParameters() 获取HTTP 应答配置参数，当 Name 取值为 HttpResponse 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHttpResponseParameters(HTTPResponseParameters $HttpResponseParameters) 设置HTTP 应答配置参数，当 Name 取值为 HttpResponse 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ErrorPageParameters getErrorPageParameters() 获取自定义错误页面配置参数，当 Name 取值为 ErrorPage 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorPageParameters(ErrorPageParameters $ErrorPageParameters) 设置自定义错误页面配置参数，当 Name 取值为 ErrorPage 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ModifyResponseHeaderParameters getModifyResponseHeaderParameters() 获取修改 HTTP 节点响应头配置参数，当 Name 取值为 ModifyResponseHeader 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifyResponseHeaderParameters(ModifyResponseHeaderParameters $ModifyResponseHeaderParameters) 设置修改 HTTP 节点响应头配置参数，当 Name 取值为 ModifyResponseHeader 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ModifyRequestHeaderParameters getModifyRequestHeaderParameters() 获取修改 HTTP 节点请求头配置参数，当 Name 取值为 ModifyRequestHeader 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifyRequestHeaderParameters(ModifyRequestHeaderParameters $ModifyRequestHeaderParameters) 设置修改 HTTP 节点请求头配置参数，当 Name 取值为 ModifyRequestHeader 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ResponseSpeedLimitParameters getResponseSpeedLimitParameters() 获取单连接下载限速配置参数，当 Name 取值为 ResponseSpeedLimit 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResponseSpeedLimitParameters(ResponseSpeedLimitParameters $ResponseSpeedLimitParameters) 设置单连接下载限速配置参数，当 Name 取值为 ResponseSpeedLimit 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method SetContentIdentifierParameters getSetContentIdentifierParameters() 获取内容标识配置参数，当 Name 取值为 SetContentIdentifier 时，该参数必填。

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSetContentIdentifierParameters(SetContentIdentifierParameters $SetContentIdentifierParameters) 设置内容标识配置参数，当 Name 取值为 SetContentIdentifier 时，该参数必填。

注意：此字段可能返回 null，表示取不到有效值。
 * @method VaryParameters getVaryParameters() 获取Vary 特性配置参数，当 Name 取值为 Vary 时，该参数必填。
 * @method void setVaryParameters(VaryParameters $VaryParameters) 设置Vary 特性配置参数，当 Name 取值为 Vary 时，该参数必填。
 * @method ContentCompressionParameters getContentCompressionParameters() 获取内容压缩配置参数，当 Name 取值为 ContentCompression 时，该参数必填。该参数为白名单功能，如有需要，请联系腾讯云工程师处理。
 * @method void setContentCompressionParameters(ContentCompressionParameters $ContentCompressionParameters) 设置内容压缩配置参数，当 Name 取值为 ContentCompression 时，该参数必填。该参数为白名单功能，如有需要，请联系腾讯云工程师处理。
 */
class RuleEngineAction extends AbstractModel
{
    /**
     * @var string 操作名称。名称需要与参数结构体对应，例如 Name=Cache，则 CacheParameters 必填。
<li>Cache：节点缓存 TTL；</li>
<li>CacheKey：自定义 Cache Key；</li>
<li>CachePrefresh：缓存预刷新；</li>
<li>AccessURLRedirect：访问 URL 重定向；</li>
<li>UpstreamURLRewrite：回源 URL 重写；</li>
<li>QUIC：QUIC；</li>
<li>WebSocket：WebSocket；</li>
<li>Authentication：Token 鉴权；</li>
<li>MaxAge：浏览器缓存 TTL；</li>
<li>StatusCodeCache：状态码缓存 TTL；</li>
<li>OfflineCache：离线缓存；</li>
<li>SmartRouting：智能加速；</li>
<li>RangeOriginPull：分片回源 ；</li>
<li>UpstreamHTTP2：HTTP2 回源；</li>
<li>HostHeader：Host Header 重写；</li>
<li>ForceRedirectHTTPS：访问协议强制 HTTPS 跳转配置；</li>
<li>OriginPullProtocol：回源 HTTPS；</li>
<li>Compression：智能压缩配置；</li>
<li>HSTS：HSTS；</li>
<li>ClientIPHeader：存储客户端请求 IP 的头部信息配置；</li>
<li>OCSPStapling：OCSP 装订；</li>
<li>HTTP2：HTTP2 接入；</li>
<li>PostMaxSize：POST 请求上传文件流式传输最大限制配置；</li>
<li>ClientIPCountry：回源时携带客户端 IP 所属地域信息；</li>
<li>UpstreamFollowRedirect：回源跟随重定向参数配置；</li>
<li>UpstreamRequest：回源请求参数；</li>
<li>TLSConfig：SSL/TLS 安全；</li>
<li>ModifyOrigin：修改源站；</li>
<li>HTTPUpstreamTimeout：七层回源超时配置；</li>
<li>HttpResponse：HTTP 应答；</li>
<li>ErrorPage：自定义错误页面；</li>
<li>ModifyResponseHeader：修改 HTTP 节点响应头；</li>
<li>ModifyRequestHeader：修改 HTTP 节点请求头；</li>
<li>ResponseSpeedLimit：单连接下载限速；</li>
<li>SetContentIdentifier：设置内容标识符；</li>
<li>Vary：Vary 特性配置。</li>
     */
    public $Name;

    /**
     * @var CacheParameters 节点缓存 TTL 配置参数，当 Name 取值为 Cache 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CacheParameters;

    /**
     * @var CacheKeyParameters 自定义 Cache Key 配置参数，当 Name 取值为 CacheKey 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CacheKeyParameters;

    /**
     * @var CachePrefreshParameters 缓存预刷新配置参数，当 Name 取值为 CachePrefresh 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CachePrefreshParameters;

    /**
     * @var AccessURLRedirectParameters 访问 URL 重定向配置参数，当 Name 取值为 AccessURLRedirect 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccessURLRedirectParameters;

    /**
     * @var UpstreamURLRewriteParameters 回源 URL 重写配置参数，当 Name 取值为 UpstreamURLRewrite 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpstreamURLRewriteParameters;

    /**
     * @var QUICParameters QUIC 配置参数，当 Name 取值为 QUIC 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QUICParameters;

    /**
     * @var WebSocketParameters WebSocket 配置参数，当 Name 取值为 WebSocket 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WebSocketParameters;

    /**
     * @var AuthenticationParameters Token 鉴权配置参数，当 Name 取值为 Authentication 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuthenticationParameters;

    /**
     * @var MaxAgeParameters 浏览器缓存 TTL 配置参数，当 Name 取值为 MaxAge 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxAgeParameters;

    /**
     * @var StatusCodeCacheParameters 状态码缓存 TTL 配置参数，当 Name 取值为 StatusCodeCache 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatusCodeCacheParameters;

    /**
     * @var OfflineCacheParameters 离线缓存配置参数，当 Name 取值为 OfflineCache 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OfflineCacheParameters;

    /**
     * @var SmartRoutingParameters 智能加速配置参数，当 Name 取值为 SmartRouting 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SmartRoutingParameters;

    /**
     * @var RangeOriginPullParameters 分片回源配置参数，当 Name 取值为 RangeOriginPull 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RangeOriginPullParameters;

    /**
     * @var UpstreamHTTP2Parameters HTTP2 回源配置参数，当 Name 取值为 UpstreamHTTP2 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpstreamHTTP2Parameters;

    /**
     * @var HostHeaderParameters Host Header 重写配置参数，当 Name 取值为 HostHeader 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostHeaderParameters;

    /**
     * @var ForceRedirectHTTPSParameters 访问协议强制 HTTPS 跳转配置，当 Name 取值为 ForceRedirectHTTPS 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ForceRedirectHTTPSParameters;

    /**
     * @var OriginPullProtocolParameters 回源 HTTPS 配置参数，当 Name 取值为 OriginPullProtocol 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OriginPullProtocolParameters;

    /**
     * @var CompressionParameters 智能压缩配置，当 Name 取值为 Compression 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CompressionParameters;

    /**
     * @var HSTSParameters HSTS 配置参数，当 Name 取值为 HSTS 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HSTSParameters;

    /**
     * @var ClientIPHeaderParameters 存储客户端请求 IP 的头部信息配置，当 Name 取值为 ClientIPHeader 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClientIPHeaderParameters;

    /**
     * @var OCSPStaplingParameters OCSP 装订配置参数，当 Name 取值为 OCSPStapling 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OCSPStaplingParameters;

    /**
     * @var HTTP2Parameters HTTP2 接入配置参数，当 Name 取值为 HTTP2 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HTTP2Parameters;

    /**
     * @var PostMaxSizeParameters POST 请求上传文件流式传输最大限制配置，当 Name 取值为 PostMaxSize 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PostMaxSizeParameters;

    /**
     * @var ClientIPCountryParameters 回源时携带客户端 IP 所属地域信息配置参数，当 Name 取值为 ClientIPCountry 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClientIPCountryParameters;

    /**
     * @var UpstreamFollowRedirectParameters 回源跟随重定向参数配置，当 Name 取值为 UpstreamFollowRedirect 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpstreamFollowRedirectParameters;

    /**
     * @var UpstreamRequestParameters 回源请求参数配置参数，当 Name 取值为 UpstreamRequest 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpstreamRequestParameters;

    /**
     * @var TLSConfigParameters SSL/TLS 安全配置参数，当 Name 取值为 TLSConfig 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TLSConfigParameters;

    /**
     * @var ModifyOriginParameters 修改源站配置参数，当 Name 取值为 ModifyOrigin 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifyOriginParameters;

    /**
     * @var HTTPUpstreamTimeoutParameters 七层回源超时配置，当 Name 取值为 HTTPUpstreamTimeout 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HTTPUpstreamTimeoutParameters;

    /**
     * @var HTTPResponseParameters HTTP 应答配置参数，当 Name 取值为 HttpResponse 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HttpResponseParameters;

    /**
     * @var ErrorPageParameters 自定义错误页面配置参数，当 Name 取值为 ErrorPage 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorPageParameters;

    /**
     * @var ModifyResponseHeaderParameters 修改 HTTP 节点响应头配置参数，当 Name 取值为 ModifyResponseHeader 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifyResponseHeaderParameters;

    /**
     * @var ModifyRequestHeaderParameters 修改 HTTP 节点请求头配置参数，当 Name 取值为 ModifyRequestHeader 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifyRequestHeaderParameters;

    /**
     * @var ResponseSpeedLimitParameters 单连接下载限速配置参数，当 Name 取值为 ResponseSpeedLimit 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResponseSpeedLimitParameters;

    /**
     * @var SetContentIdentifierParameters 内容标识配置参数，当 Name 取值为 SetContentIdentifier 时，该参数必填。

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SetContentIdentifierParameters;

    /**
     * @var VaryParameters Vary 特性配置参数，当 Name 取值为 Vary 时，该参数必填。
     */
    public $VaryParameters;

    /**
     * @var ContentCompressionParameters 内容压缩配置参数，当 Name 取值为 ContentCompression 时，该参数必填。该参数为白名单功能，如有需要，请联系腾讯云工程师处理。
     */
    public $ContentCompressionParameters;

    /**
     * @param string $Name 操作名称。名称需要与参数结构体对应，例如 Name=Cache，则 CacheParameters 必填。
<li>Cache：节点缓存 TTL；</li>
<li>CacheKey：自定义 Cache Key；</li>
<li>CachePrefresh：缓存预刷新；</li>
<li>AccessURLRedirect：访问 URL 重定向；</li>
<li>UpstreamURLRewrite：回源 URL 重写；</li>
<li>QUIC：QUIC；</li>
<li>WebSocket：WebSocket；</li>
<li>Authentication：Token 鉴权；</li>
<li>MaxAge：浏览器缓存 TTL；</li>
<li>StatusCodeCache：状态码缓存 TTL；</li>
<li>OfflineCache：离线缓存；</li>
<li>SmartRouting：智能加速；</li>
<li>RangeOriginPull：分片回源 ；</li>
<li>UpstreamHTTP2：HTTP2 回源；</li>
<li>HostHeader：Host Header 重写；</li>
<li>ForceRedirectHTTPS：访问协议强制 HTTPS 跳转配置；</li>
<li>OriginPullProtocol：回源 HTTPS；</li>
<li>Compression：智能压缩配置；</li>
<li>HSTS：HSTS；</li>
<li>ClientIPHeader：存储客户端请求 IP 的头部信息配置；</li>
<li>OCSPStapling：OCSP 装订；</li>
<li>HTTP2：HTTP2 接入；</li>
<li>PostMaxSize：POST 请求上传文件流式传输最大限制配置；</li>
<li>ClientIPCountry：回源时携带客户端 IP 所属地域信息；</li>
<li>UpstreamFollowRedirect：回源跟随重定向参数配置；</li>
<li>UpstreamRequest：回源请求参数；</li>
<li>TLSConfig：SSL/TLS 安全；</li>
<li>ModifyOrigin：修改源站；</li>
<li>HTTPUpstreamTimeout：七层回源超时配置；</li>
<li>HttpResponse：HTTP 应答；</li>
<li>ErrorPage：自定义错误页面；</li>
<li>ModifyResponseHeader：修改 HTTP 节点响应头；</li>
<li>ModifyRequestHeader：修改 HTTP 节点请求头；</li>
<li>ResponseSpeedLimit：单连接下载限速；</li>
<li>SetContentIdentifier：设置内容标识符；</li>
<li>Vary：Vary 特性配置。</li>
     * @param CacheParameters $CacheParameters 节点缓存 TTL 配置参数，当 Name 取值为 Cache 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     * @param CacheKeyParameters $CacheKeyParameters 自定义 Cache Key 配置参数，当 Name 取值为 CacheKey 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     * @param CachePrefreshParameters $CachePrefreshParameters 缓存预刷新配置参数，当 Name 取值为 CachePrefresh 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     * @param AccessURLRedirectParameters $AccessURLRedirectParameters 访问 URL 重定向配置参数，当 Name 取值为 AccessURLRedirect 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     * @param UpstreamURLRewriteParameters $UpstreamURLRewriteParameters 回源 URL 重写配置参数，当 Name 取值为 UpstreamURLRewrite 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     * @param QUICParameters $QUICParameters QUIC 配置参数，当 Name 取值为 QUIC 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     * @param WebSocketParameters $WebSocketParameters WebSocket 配置参数，当 Name 取值为 WebSocket 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     * @param AuthenticationParameters $AuthenticationParameters Token 鉴权配置参数，当 Name 取值为 Authentication 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     * @param MaxAgeParameters $MaxAgeParameters 浏览器缓存 TTL 配置参数，当 Name 取值为 MaxAge 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     * @param StatusCodeCacheParameters $StatusCodeCacheParameters 状态码缓存 TTL 配置参数，当 Name 取值为 StatusCodeCache 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     * @param OfflineCacheParameters $OfflineCacheParameters 离线缓存配置参数，当 Name 取值为 OfflineCache 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     * @param SmartRoutingParameters $SmartRoutingParameters 智能加速配置参数，当 Name 取值为 SmartRouting 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     * @param RangeOriginPullParameters $RangeOriginPullParameters 分片回源配置参数，当 Name 取值为 RangeOriginPull 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     * @param UpstreamHTTP2Parameters $UpstreamHTTP2Parameters HTTP2 回源配置参数，当 Name 取值为 UpstreamHTTP2 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     * @param HostHeaderParameters $HostHeaderParameters Host Header 重写配置参数，当 Name 取值为 HostHeader 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ForceRedirectHTTPSParameters $ForceRedirectHTTPSParameters 访问协议强制 HTTPS 跳转配置，当 Name 取值为 ForceRedirectHTTPS 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     * @param OriginPullProtocolParameters $OriginPullProtocolParameters 回源 HTTPS 配置参数，当 Name 取值为 OriginPullProtocol 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     * @param CompressionParameters $CompressionParameters 智能压缩配置，当 Name 取值为 Compression 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     * @param HSTSParameters $HSTSParameters HSTS 配置参数，当 Name 取值为 HSTS 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ClientIPHeaderParameters $ClientIPHeaderParameters 存储客户端请求 IP 的头部信息配置，当 Name 取值为 ClientIPHeader 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     * @param OCSPStaplingParameters $OCSPStaplingParameters OCSP 装订配置参数，当 Name 取值为 OCSPStapling 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     * @param HTTP2Parameters $HTTP2Parameters HTTP2 接入配置参数，当 Name 取值为 HTTP2 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     * @param PostMaxSizeParameters $PostMaxSizeParameters POST 请求上传文件流式传输最大限制配置，当 Name 取值为 PostMaxSize 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ClientIPCountryParameters $ClientIPCountryParameters 回源时携带客户端 IP 所属地域信息配置参数，当 Name 取值为 ClientIPCountry 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     * @param UpstreamFollowRedirectParameters $UpstreamFollowRedirectParameters 回源跟随重定向参数配置，当 Name 取值为 UpstreamFollowRedirect 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     * @param UpstreamRequestParameters $UpstreamRequestParameters 回源请求参数配置参数，当 Name 取值为 UpstreamRequest 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     * @param TLSConfigParameters $TLSConfigParameters SSL/TLS 安全配置参数，当 Name 取值为 TLSConfig 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ModifyOriginParameters $ModifyOriginParameters 修改源站配置参数，当 Name 取值为 ModifyOrigin 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     * @param HTTPUpstreamTimeoutParameters $HTTPUpstreamTimeoutParameters 七层回源超时配置，当 Name 取值为 HTTPUpstreamTimeout 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     * @param HTTPResponseParameters $HttpResponseParameters HTTP 应答配置参数，当 Name 取值为 HttpResponse 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ErrorPageParameters $ErrorPageParameters 自定义错误页面配置参数，当 Name 取值为 ErrorPage 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ModifyResponseHeaderParameters $ModifyResponseHeaderParameters 修改 HTTP 节点响应头配置参数，当 Name 取值为 ModifyResponseHeader 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ModifyRequestHeaderParameters $ModifyRequestHeaderParameters 修改 HTTP 节点请求头配置参数，当 Name 取值为 ModifyRequestHeader 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ResponseSpeedLimitParameters $ResponseSpeedLimitParameters 单连接下载限速配置参数，当 Name 取值为 ResponseSpeedLimit 时，该参数必填。
注意：此字段可能返回 null，表示取不到有效值。
     * @param SetContentIdentifierParameters $SetContentIdentifierParameters 内容标识配置参数，当 Name 取值为 SetContentIdentifier 时，该参数必填。

注意：此字段可能返回 null，表示取不到有效值。
     * @param VaryParameters $VaryParameters Vary 特性配置参数，当 Name 取值为 Vary 时，该参数必填。
     * @param ContentCompressionParameters $ContentCompressionParameters 内容压缩配置参数，当 Name 取值为 ContentCompression 时，该参数必填。该参数为白名单功能，如有需要，请联系腾讯云工程师处理。
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

        if (array_key_exists("TLSConfigParameters",$param) and $param["TLSConfigParameters"] !== null) {
            $this->TLSConfigParameters = new TLSConfigParameters();
            $this->TLSConfigParameters->deserialize($param["TLSConfigParameters"]);
        }

        if (array_key_exists("ModifyOriginParameters",$param) and $param["ModifyOriginParameters"] !== null) {
            $this->ModifyOriginParameters = new ModifyOriginParameters();
            $this->ModifyOriginParameters->deserialize($param["ModifyOriginParameters"]);
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
    }
}
