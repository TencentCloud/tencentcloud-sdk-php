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
 * 规则引擎功能项操作，对于一种功能只对应下面三种类型的其中一种，RuleAction 数组中的每一项只能是其中一个类型，更多功能项的填写规范可调用接口 [查询规则引擎的设置参数](https://tcloud4api.woa.com/document/product/1657/79433?!preview&!document=1) 查看。
 *
 * @method RuleNormalAction getNormalAction() 获取常规功能操作，选择该类型的功能项有：
<li> 访问URL 重写（AccessUrlRedirect）；</li>
<li> 回源 URL 重写 （UpstreamUrlRedirect）；</li>
<li> QUIC（QUIC）；</li>
<li> WebSocket （WebSocket）；</li>
<li> 视频拖拽（VideoSeek）；</li>
<li> Token 鉴权（Authentication）；</li>
<li> 自定义CacheKey（CacheKey）；</li>
<li> 节点缓存 TTL （Cache）；</li>
<li> 浏览器缓存 TTL（MaxAge）；</li>
<li> 离线缓存（OfflineCache）；</li>
<li> 智能加速（SmartRouting）；</li>
<li> 分片回源（RangeOriginPull）；</li>
<li> HTTP/2 回源（UpstreamHttp2）；</li>
<li> Host Header 重写（HostHeader）；</li>
<li> 强制 HTTPS（ForceRedirect）；</li>
<li> 回源 HTTPS（OriginPullProtocol）；</li>
<li> 缓存预刷新（CachePrefresh）；</li>
<li> 智能压缩（Compression）；</li>
<li> Hsts；</li>
<li> ClientIpHeader；</li>
<li> TlsVersion；</li>
<li> OcspStapling。</li>
<li> HTTP/2 访问（Http2）。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNormalAction(RuleNormalAction $NormalAction) 设置常规功能操作，选择该类型的功能项有：
<li> 访问URL 重写（AccessUrlRedirect）；</li>
<li> 回源 URL 重写 （UpstreamUrlRedirect）；</li>
<li> QUIC（QUIC）；</li>
<li> WebSocket （WebSocket）；</li>
<li> 视频拖拽（VideoSeek）；</li>
<li> Token 鉴权（Authentication）；</li>
<li> 自定义CacheKey（CacheKey）；</li>
<li> 节点缓存 TTL （Cache）；</li>
<li> 浏览器缓存 TTL（MaxAge）；</li>
<li> 离线缓存（OfflineCache）；</li>
<li> 智能加速（SmartRouting）；</li>
<li> 分片回源（RangeOriginPull）；</li>
<li> HTTP/2 回源（UpstreamHttp2）；</li>
<li> Host Header 重写（HostHeader）；</li>
<li> 强制 HTTPS（ForceRedirect）；</li>
<li> 回源 HTTPS（OriginPullProtocol）；</li>
<li> 缓存预刷新（CachePrefresh）；</li>
<li> 智能压缩（Compression）；</li>
<li> Hsts；</li>
<li> ClientIpHeader；</li>
<li> TlsVersion；</li>
<li> OcspStapling。</li>
<li> HTTP/2 访问（Http2）。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method RuleRewriteAction getRewriteAction() 获取带有请求头/响应头的功能操作，选择该类型的功能项有：
<li> 修改 HTTP 请求头（RequestHeader）；</li>
<li> 修改HTTP响应头（ResponseHeader）。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRewriteAction(RuleRewriteAction $RewriteAction) 设置带有请求头/响应头的功能操作，选择该类型的功能项有：
<li> 修改 HTTP 请求头（RequestHeader）；</li>
<li> 修改HTTP响应头（ResponseHeader）。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method RuleCodeAction getCodeAction() 获取带有状态码的功能操作，选择该类型的功能项有：
<li> 自定义错误页面（ErrorPage）；</li>
<li> 状态码缓存 TTL（StatusCodeCache）。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCodeAction(RuleCodeAction $CodeAction) 设置带有状态码的功能操作，选择该类型的功能项有：
<li> 自定义错误页面（ErrorPage）；</li>
<li> 状态码缓存 TTL（StatusCodeCache）。</li>
注意：此字段可能返回 null，表示取不到有效值。
 */
class RuleAction extends AbstractModel
{
    /**
     * @var RuleNormalAction 常规功能操作，选择该类型的功能项有：
<li> 访问URL 重写（AccessUrlRedirect）；</li>
<li> 回源 URL 重写 （UpstreamUrlRedirect）；</li>
<li> QUIC（QUIC）；</li>
<li> WebSocket （WebSocket）；</li>
<li> 视频拖拽（VideoSeek）；</li>
<li> Token 鉴权（Authentication）；</li>
<li> 自定义CacheKey（CacheKey）；</li>
<li> 节点缓存 TTL （Cache）；</li>
<li> 浏览器缓存 TTL（MaxAge）；</li>
<li> 离线缓存（OfflineCache）；</li>
<li> 智能加速（SmartRouting）；</li>
<li> 分片回源（RangeOriginPull）；</li>
<li> HTTP/2 回源（UpstreamHttp2）；</li>
<li> Host Header 重写（HostHeader）；</li>
<li> 强制 HTTPS（ForceRedirect）；</li>
<li> 回源 HTTPS（OriginPullProtocol）；</li>
<li> 缓存预刷新（CachePrefresh）；</li>
<li> 智能压缩（Compression）；</li>
<li> Hsts；</li>
<li> ClientIpHeader；</li>
<li> TlsVersion；</li>
<li> OcspStapling。</li>
<li> HTTP/2 访问（Http2）。</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NormalAction;

    /**
     * @var RuleRewriteAction 带有请求头/响应头的功能操作，选择该类型的功能项有：
<li> 修改 HTTP 请求头（RequestHeader）；</li>
<li> 修改HTTP响应头（ResponseHeader）。</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RewriteAction;

    /**
     * @var RuleCodeAction 带有状态码的功能操作，选择该类型的功能项有：
<li> 自定义错误页面（ErrorPage）；</li>
<li> 状态码缓存 TTL（StatusCodeCache）。</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CodeAction;

    /**
     * @param RuleNormalAction $NormalAction 常规功能操作，选择该类型的功能项有：
<li> 访问URL 重写（AccessUrlRedirect）；</li>
<li> 回源 URL 重写 （UpstreamUrlRedirect）；</li>
<li> QUIC（QUIC）；</li>
<li> WebSocket （WebSocket）；</li>
<li> 视频拖拽（VideoSeek）；</li>
<li> Token 鉴权（Authentication）；</li>
<li> 自定义CacheKey（CacheKey）；</li>
<li> 节点缓存 TTL （Cache）；</li>
<li> 浏览器缓存 TTL（MaxAge）；</li>
<li> 离线缓存（OfflineCache）；</li>
<li> 智能加速（SmartRouting）；</li>
<li> 分片回源（RangeOriginPull）；</li>
<li> HTTP/2 回源（UpstreamHttp2）；</li>
<li> Host Header 重写（HostHeader）；</li>
<li> 强制 HTTPS（ForceRedirect）；</li>
<li> 回源 HTTPS（OriginPullProtocol）；</li>
<li> 缓存预刷新（CachePrefresh）；</li>
<li> 智能压缩（Compression）；</li>
<li> Hsts；</li>
<li> ClientIpHeader；</li>
<li> TlsVersion；</li>
<li> OcspStapling。</li>
<li> HTTP/2 访问（Http2）。</li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param RuleRewriteAction $RewriteAction 带有请求头/响应头的功能操作，选择该类型的功能项有：
<li> 修改 HTTP 请求头（RequestHeader）；</li>
<li> 修改HTTP响应头（ResponseHeader）。</li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param RuleCodeAction $CodeAction 带有状态码的功能操作，选择该类型的功能项有：
<li> 自定义错误页面（ErrorPage）；</li>
<li> 状态码缓存 TTL（StatusCodeCache）。</li>
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
        if (array_key_exists("NormalAction",$param) and $param["NormalAction"] !== null) {
            $this->NormalAction = new RuleNormalAction();
            $this->NormalAction->deserialize($param["NormalAction"]);
        }

        if (array_key_exists("RewriteAction",$param) and $param["RewriteAction"] !== null) {
            $this->RewriteAction = new RuleRewriteAction();
            $this->RewriteAction->deserialize($param["RewriteAction"]);
        }

        if (array_key_exists("CodeAction",$param) and $param["CodeAction"] !== null) {
            $this->CodeAction = new RuleCodeAction();
            $this->CodeAction->deserialize($param["CodeAction"]);
        }
    }
}
