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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 加速域名全量配置信息
 *
 * @method string getResourceId() 获取<p>域名 ID</p>
 * @method void setResourceId(string $ResourceId) 设置<p>域名 ID</p>
 * @method integer getAppId() 获取<p>腾讯云账号ID</p>
 * @method void setAppId(integer $AppId) 设置<p>腾讯云账号ID</p>
 * @method string getDomain() 获取<p>加速域名</p>
 * @method void setDomain(string $Domain) 设置<p>加速域名</p>
 * @method string getCname() 获取<p>域名对应的 CNAME 地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCname(string $Cname) 设置<p>域名对应的 CNAME 地址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取<p>加速服务状态<br>rejected：域名审核未通过，域名备案过期/被注销导致<br>processing：部署中<br>closing：关闭中<br>online：已启动<br>offline：已关闭</p>
 * @method void setStatus(string $Status) 设置<p>加速服务状态<br>rejected：域名审核未通过，域名备案过期/被注销导致<br>processing：部署中<br>closing：关闭中<br>online：已启动<br>offline：已关闭</p>
 * @method integer getProjectId() 获取<p>项目 ID，可前往腾讯云项目管理页面查看</p>
 * @method void setProjectId(integer $ProjectId) 设置<p>项目 ID，可前往腾讯云项目管理页面查看</p>
 * @method string getServiceType() 获取<p>加速域名业务类型<br>web：网页小文件<br>download：下载大文件<br>media：音视频点播<br>hybrid:  动静加速<br>dynamic:  动态加速</p>
 * @method void setServiceType(string $ServiceType) 设置<p>加速域名业务类型<br>web：网页小文件<br>download：下载大文件<br>media：音视频点播<br>hybrid:  动静加速<br>dynamic:  动态加速</p>
 * @method string getCreateTime() 获取<p>域名创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>域名创建时间</p>
 * @method string getUpdateTime() 获取<p>域名更新时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>域名更新时间</p>
 * @method Origin getOrigin() 获取<p>源站配置</p>
 * @method void setOrigin(Origin $Origin) 设置<p>源站配置</p>
 * @method IpFilter getIpFilter() 获取<p>IP 黑白名单配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpFilter(IpFilter $IpFilter) 设置<p>IP 黑白名单配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method IpFreqLimit getIpFreqLimit() 获取<p>IP 访问限频配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpFreqLimit(IpFreqLimit $IpFreqLimit) 设置<p>IP 访问限频配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method StatusCodeCache getStatusCodeCache() 获取<p>状态码缓存配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatusCodeCache(StatusCodeCache $StatusCodeCache) 设置<p>状态码缓存配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method Compression getCompression() 获取<p>智能压缩配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompression(Compression $Compression) 设置<p>智能压缩配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method BandwidthAlert getBandwidthAlert() 获取<p>带宽封顶配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBandwidthAlert(BandwidthAlert $BandwidthAlert) 设置<p>带宽封顶配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method RangeOriginPull getRangeOriginPull() 获取<p>Range 回源配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRangeOriginPull(RangeOriginPull $RangeOriginPull) 设置<p>Range 回源配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method FollowRedirect getFollowRedirect() 获取<p>301/302 回源自动跟随配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFollowRedirect(FollowRedirect $FollowRedirect) 设置<p>301/302 回源自动跟随配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ErrorPage getErrorPage() 获取<p>自定义错误页面配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorPage(ErrorPage $ErrorPage) 设置<p>自定义错误页面配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method RequestHeader getRequestHeader() 获取<p>自定义请求头部配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRequestHeader(RequestHeader $RequestHeader) 设置<p>自定义请求头部配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ResponseHeader getResponseHeader() 获取<p>自定义响应头部配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResponseHeader(ResponseHeader $ResponseHeader) 设置<p>自定义响应头部配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method DownstreamCapping getDownstreamCapping() 获取<p>单链接下行限速配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDownstreamCapping(DownstreamCapping $DownstreamCapping) 设置<p>单链接下行限速配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method CacheKey getCacheKey() 获取<p>带参/不带参缓存配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCacheKey(CacheKey $CacheKey) 设置<p>带参/不带参缓存配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ResponseHeaderCache getResponseHeaderCache() 获取<p>源站头部缓存配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResponseHeaderCache(ResponseHeaderCache $ResponseHeaderCache) 设置<p>源站头部缓存配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method VideoSeek getVideoSeek() 获取<p>视频拖拽配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVideoSeek(VideoSeek $VideoSeek) 设置<p>视频拖拽配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method Cache getCache() 获取<p>节点缓存过期规则配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCache(Cache $Cache) 设置<p>节点缓存过期规则配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method OriginPullOptimization getOriginPullOptimization() 获取<p>跨国链路优化配置（功能灰度中，敬请期待）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriginPullOptimization(OriginPullOptimization $OriginPullOptimization) 设置<p>跨国链路优化配置（功能灰度中，敬请期待）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method Https getHttps() 获取<p>Https 加速相关配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHttps(Https $Https) 设置<p>Https 加速相关配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method Authentication getAuthentication() 获取<p>时间戳防盗链配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthentication(Authentication $Authentication) 设置<p>时间戳防盗链配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method Seo getSeo() 获取<p>SEO 优化配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSeo(Seo $Seo) 设置<p>SEO 优化配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDisable() 获取<p>域名封禁状态<br>normal：正常状态<br>overdue：账号欠费导致域名关闭，充值完成后可自行启动加速服务<br>malicious：域名出现恶意行为，强制关闭加速服务<br>ddos：域名被大规模 DDoS 攻击，关闭加速服务<br>ddos_risk: 域名存在ddos攻击风险<br>idle：域名超过 90 天内无任何操作、数据产生，判定为不活跃域名自动关闭加速服务，可自行启动加速服务<br>unlicensed：域名未备案/备案注销，自动关闭加速服务，备案完成后可自行启动加速服务<br>capping：触发配置的带宽阈值上限<br>readonly：域名存在特殊配置，被锁定</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDisable(string $Disable) 设置<p>域名封禁状态<br>normal：正常状态<br>overdue：账号欠费导致域名关闭，充值完成后可自行启动加速服务<br>malicious：域名出现恶意行为，强制关闭加速服务<br>ddos：域名被大规模 DDoS 攻击，关闭加速服务<br>ddos_risk: 域名存在ddos攻击风险<br>idle：域名超过 90 天内无任何操作、数据产生，判定为不活跃域名自动关闭加速服务，可自行启动加速服务<br>unlicensed：域名未备案/备案注销，自动关闭加速服务，备案完成后可自行启动加速服务<br>capping：触发配置的带宽阈值上限<br>readonly：域名存在特殊配置，被锁定</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ForceRedirect getForceRedirect() 获取<p>访问协议强制跳转配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setForceRedirect(ForceRedirect $ForceRedirect) 设置<p>访问协议强制跳转配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method Referer getReferer() 获取<p>Referer 防盗链配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReferer(Referer $Referer) 设置<p>Referer 防盗链配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method MaxAge getMaxAge() 获取<p>浏览器缓存过期规则配置（功能灰度中，敬请期待）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxAge(MaxAge $MaxAge) 设置<p>浏览器缓存过期规则配置（功能灰度中，敬请期待）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method Ipv6 getIpv6() 获取<p>Ipv6 回源配置（功能灰度中，敬请期待）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpv6(Ipv6 $Ipv6) 设置<p>Ipv6 回源配置（功能灰度中，敬请期待）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method Compatibility getCompatibility() 获取<p>是否兼容旧版本配置（内部兼容性字段）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompatibility(Compatibility $Compatibility) 设置<p>是否兼容旧版本配置（内部兼容性字段）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method SpecificConfig getSpecificConfig() 获取<p>区域特殊配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpecificConfig(SpecificConfig $SpecificConfig) 设置<p>区域特殊配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getArea() 获取<p>加速区域<br>mainland：中国境内加速<br>overseas：中国境外加速<br>global：全球加速</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setArea(string $Area) 设置<p>加速区域<br>mainland：中国境内加速<br>overseas：中国境外加速<br>global：全球加速</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReadonly() 获取<p>域名锁定状态<br>normal：未锁定<br>mainland：中国境内锁定<br>overseas：中国境外锁定<br>global：全球锁定</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReadonly(string $Readonly) 设置<p>域名锁定状态<br>normal：未锁定<br>mainland：中国境内锁定<br>overseas：中国境外锁定<br>global：全球锁定</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method OriginPullTimeout getOriginPullTimeout() 获取<p>回源超时配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriginPullTimeout(OriginPullTimeout $OriginPullTimeout) 设置<p>回源超时配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method AwsPrivateAccess getAwsPrivateAccess() 获取<p>回源S3鉴权配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAwsPrivateAccess(AwsPrivateAccess $AwsPrivateAccess) 设置<p>回源S3鉴权配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method SecurityConfig getSecurityConfig() 获取<p>Scdn配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecurityConfig(SecurityConfig $SecurityConfig) 设置<p>Scdn配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ImageOptimization getImageOptimization() 获取<p>ImageOptimization配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageOptimization(ImageOptimization $ImageOptimization) 设置<p>ImageOptimization配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method UserAgentFilter getUserAgentFilter() 获取<p>UA黑白名单配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserAgentFilter(UserAgentFilter $UserAgentFilter) 设置<p>UA黑白名单配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method AccessControl getAccessControl() 获取<p>访问控制</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccessControl(AccessControl $AccessControl) 设置<p>访问控制</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAdvance() 获取<p>是否支持高级配置项<br>on：支持<br>off：不支持</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdvance(string $Advance) 设置<p>是否支持高级配置项<br>on：支持<br>off：不支持</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method UrlRedirect getUrlRedirect() 获取<p>URL重定向配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUrlRedirect(UrlRedirect $UrlRedirect) 设置<p>URL重定向配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAccessPort() 获取<p>访问端口配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccessPort(array $AccessPort) 设置<p>访问端口配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTag() 获取<p>标签配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTag(array $Tag) 设置<p>标签配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method AdvancedAuthentication getAdvancedAuthentication() 获取<p>时间戳防盗链高级配置，白名单功能</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdvancedAuthentication(AdvancedAuthentication $AdvancedAuthentication) 设置<p>时间戳防盗链高级配置，白名单功能</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method OriginAuthentication getOriginAuthentication() 获取<p>回源鉴权高级配置，白名单功能</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriginAuthentication(OriginAuthentication $OriginAuthentication) 设置<p>回源鉴权高级配置，白名单功能</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method Ipv6Access getIpv6Access() 获取<p>Ipv6访问配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIpv6Access(Ipv6Access $Ipv6Access) 设置<p>Ipv6访问配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAdvanceSet() 获取<p>高级配置集合</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdvanceSet(array $AdvanceSet) 设置<p>高级配置集合</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method OfflineCache getOfflineCache() 获取<p>离线缓存（功能灰度中，尚未全量，请等待后续全量发布）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOfflineCache(OfflineCache $OfflineCache) 设置<p>离线缓存（功能灰度中，尚未全量，请等待后续全量发布）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method OriginCombine getOriginCombine() 获取<p>合并回源（白名单功能）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriginCombine(OriginCombine $OriginCombine) 设置<p>合并回源（白名单功能）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method PostSize getPostMaxSize() 获取<p>POST上传配置项</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPostMaxSize(PostSize $PostMaxSize) 设置<p>POST上传配置项</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method Quic getQuic() 获取<p>Quic配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQuic(Quic $Quic) 设置<p>Quic配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method OssPrivateAccess getOssPrivateAccess() 获取<p>回源OSS私有鉴权</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOssPrivateAccess(OssPrivateAccess $OssPrivateAccess) 设置<p>回源OSS私有鉴权</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method WebSocket getWebSocket() 获取<p>WebSocket配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWebSocket(WebSocket $WebSocket) 设置<p>WebSocket配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method RemoteAuthentication getRemoteAuthentication() 获取<p>远程鉴权配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemoteAuthentication(RemoteAuthentication $RemoteAuthentication) 设置<p>远程鉴权配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ShareCname getShareCname() 获取<p>共享CNAME配置（白名单功能）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShareCname(ShareCname $ShareCname) 设置<p>共享CNAME配置（白名单功能）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method RuleEngine getRuleEngine() 获取<p>规则引擎</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleEngine(RuleEngine $RuleEngine) 设置<p>规则引擎</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParentHost() 获取<p>主域名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParentHost(string $ParentHost) 设置<p>主域名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method HwPrivateAccess getHwPrivateAccess() 获取<p>华为云对象存储回源鉴权</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHwPrivateAccess(HwPrivateAccess $HwPrivateAccess) 设置<p>华为云对象存储回源鉴权</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method QnPrivateAccess getQnPrivateAccess() 获取<p>七牛云对象存储回源鉴权</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQnPrivateAccess(QnPrivateAccess $QnPrivateAccess) 设置<p>七牛云对象存储回源鉴权</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method HttpsBilling getHttpsBilling() 获取<p>HTTPS服务，缺省时默认开启</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHttpsBilling(HttpsBilling $HttpsBilling) 设置<p>HTTPS服务，缺省时默认开启</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method OthersPrivateAccess getOthersPrivateAccess() 获取<p>其他厂商对象存储回源鉴权</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOthersPrivateAccess(OthersPrivateAccess $OthersPrivateAccess) 设置<p>其他厂商对象存储回源鉴权</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ParamFilter getParamFilter() 获取<p>参数黑名单</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParamFilter(ParamFilter $ParamFilter) 设置<p>参数黑名单</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method AutoGuard getAutoGuard() 获取<p>流量一键防盗刷配置</p>
 * @method void setAutoGuard(AutoGuard $AutoGuard) 设置<p>流量一键防盗刷配置</p>
 * @method GeoBlocker getGeoBlocker() 获取<p>区域访问控制配置</p>
 * @method void setGeoBlocker(GeoBlocker $GeoBlocker) 设置<p>区域访问控制配置</p>
 */
class DetailDomain extends AbstractModel
{
    /**
     * @var string <p>域名 ID</p>
     */
    public $ResourceId;

    /**
     * @var integer <p>腾讯云账号ID</p>
     */
    public $AppId;

    /**
     * @var string <p>加速域名</p>
     */
    public $Domain;

    /**
     * @var string <p>域名对应的 CNAME 地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cname;

    /**
     * @var string <p>加速服务状态<br>rejected：域名审核未通过，域名备案过期/被注销导致<br>processing：部署中<br>closing：关闭中<br>online：已启动<br>offline：已关闭</p>
     */
    public $Status;

    /**
     * @var integer <p>项目 ID，可前往腾讯云项目管理页面查看</p>
     */
    public $ProjectId;

    /**
     * @var string <p>加速域名业务类型<br>web：网页小文件<br>download：下载大文件<br>media：音视频点播<br>hybrid:  动静加速<br>dynamic:  动态加速</p>
     */
    public $ServiceType;

    /**
     * @var string <p>域名创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>域名更新时间</p>
     */
    public $UpdateTime;

    /**
     * @var Origin <p>源站配置</p>
     */
    public $Origin;

    /**
     * @var IpFilter <p>IP 黑白名单配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IpFilter;

    /**
     * @var IpFreqLimit <p>IP 访问限频配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IpFreqLimit;

    /**
     * @var StatusCodeCache <p>状态码缓存配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatusCodeCache;

    /**
     * @var Compression <p>智能压缩配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Compression;

    /**
     * @var BandwidthAlert <p>带宽封顶配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BandwidthAlert;

    /**
     * @var RangeOriginPull <p>Range 回源配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RangeOriginPull;

    /**
     * @var FollowRedirect <p>301/302 回源自动跟随配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FollowRedirect;

    /**
     * @var ErrorPage <p>自定义错误页面配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorPage;

    /**
     * @var RequestHeader <p>自定义请求头部配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RequestHeader;

    /**
     * @var ResponseHeader <p>自定义响应头部配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResponseHeader;

    /**
     * @var DownstreamCapping <p>单链接下行限速配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DownstreamCapping;

    /**
     * @var CacheKey <p>带参/不带参缓存配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CacheKey;

    /**
     * @var ResponseHeaderCache <p>源站头部缓存配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResponseHeaderCache;

    /**
     * @var VideoSeek <p>视频拖拽配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VideoSeek;

    /**
     * @var Cache <p>节点缓存过期规则配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cache;

    /**
     * @var OriginPullOptimization <p>跨国链路优化配置（功能灰度中，敬请期待）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OriginPullOptimization;

    /**
     * @var Https <p>Https 加速相关配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Https;

    /**
     * @var Authentication <p>时间戳防盗链配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Authentication;

    /**
     * @var Seo <p>SEO 优化配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Seo;

    /**
     * @var string <p>域名封禁状态<br>normal：正常状态<br>overdue：账号欠费导致域名关闭，充值完成后可自行启动加速服务<br>malicious：域名出现恶意行为，强制关闭加速服务<br>ddos：域名被大规模 DDoS 攻击，关闭加速服务<br>ddos_risk: 域名存在ddos攻击风险<br>idle：域名超过 90 天内无任何操作、数据产生，判定为不活跃域名自动关闭加速服务，可自行启动加速服务<br>unlicensed：域名未备案/备案注销，自动关闭加速服务，备案完成后可自行启动加速服务<br>capping：触发配置的带宽阈值上限<br>readonly：域名存在特殊配置，被锁定</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Disable;

    /**
     * @var ForceRedirect <p>访问协议强制跳转配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ForceRedirect;

    /**
     * @var Referer <p>Referer 防盗链配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Referer;

    /**
     * @var MaxAge <p>浏览器缓存过期规则配置（功能灰度中，敬请期待）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxAge;

    /**
     * @var Ipv6 <p>Ipv6 回源配置（功能灰度中，敬请期待）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ipv6;

    /**
     * @var Compatibility <p>是否兼容旧版本配置（内部兼容性字段）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Compatibility;

    /**
     * @var SpecificConfig <p>区域特殊配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SpecificConfig;

    /**
     * @var string <p>加速区域<br>mainland：中国境内加速<br>overseas：中国境外加速<br>global：全球加速</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Area;

    /**
     * @var string <p>域名锁定状态<br>normal：未锁定<br>mainland：中国境内锁定<br>overseas：中国境外锁定<br>global：全球锁定</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Readonly;

    /**
     * @var OriginPullTimeout <p>回源超时配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OriginPullTimeout;

    /**
     * @var AwsPrivateAccess <p>回源S3鉴权配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AwsPrivateAccess;

    /**
     * @var SecurityConfig <p>Scdn配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecurityConfig;

    /**
     * @var ImageOptimization <p>ImageOptimization配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageOptimization;

    /**
     * @var UserAgentFilter <p>UA黑白名单配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserAgentFilter;

    /**
     * @var AccessControl <p>访问控制</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccessControl;

    /**
     * @var string <p>是否支持高级配置项<br>on：支持<br>off：不支持</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Advance;

    /**
     * @var UrlRedirect <p>URL重定向配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UrlRedirect;

    /**
     * @var array <p>访问端口配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccessPort;

    /**
     * @var array <p>标签配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tag;

    /**
     * @var AdvancedAuthentication <p>时间戳防盗链高级配置，白名单功能</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdvancedAuthentication;

    /**
     * @var OriginAuthentication <p>回源鉴权高级配置，白名单功能</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OriginAuthentication;

    /**
     * @var Ipv6Access <p>Ipv6访问配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ipv6Access;

    /**
     * @var array <p>高级配置集合</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdvanceSet;

    /**
     * @var OfflineCache <p>离线缓存（功能灰度中，尚未全量，请等待后续全量发布）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OfflineCache;

    /**
     * @var OriginCombine <p>合并回源（白名单功能）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OriginCombine;

    /**
     * @var PostSize <p>POST上传配置项</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PostMaxSize;

    /**
     * @var Quic <p>Quic配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Quic;

    /**
     * @var OssPrivateAccess <p>回源OSS私有鉴权</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OssPrivateAccess;

    /**
     * @var WebSocket <p>WebSocket配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WebSocket;

    /**
     * @var RemoteAuthentication <p>远程鉴权配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RemoteAuthentication;

    /**
     * @var ShareCname <p>共享CNAME配置（白名单功能）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShareCname;

    /**
     * @var RuleEngine <p>规则引擎</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleEngine;

    /**
     * @var string <p>主域名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParentHost;

    /**
     * @var HwPrivateAccess <p>华为云对象存储回源鉴权</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HwPrivateAccess;

    /**
     * @var QnPrivateAccess <p>七牛云对象存储回源鉴权</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QnPrivateAccess;

    /**
     * @var HttpsBilling <p>HTTPS服务，缺省时默认开启</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HttpsBilling;

    /**
     * @var OthersPrivateAccess <p>其他厂商对象存储回源鉴权</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OthersPrivateAccess;

    /**
     * @var ParamFilter <p>参数黑名单</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParamFilter;

    /**
     * @var AutoGuard <p>流量一键防盗刷配置</p>
     */
    public $AutoGuard;

    /**
     * @var GeoBlocker <p>区域访问控制配置</p>
     */
    public $GeoBlocker;

    /**
     * @param string $ResourceId <p>域名 ID</p>
     * @param integer $AppId <p>腾讯云账号ID</p>
     * @param string $Domain <p>加速域名</p>
     * @param string $Cname <p>域名对应的 CNAME 地址</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status <p>加速服务状态<br>rejected：域名审核未通过，域名备案过期/被注销导致<br>processing：部署中<br>closing：关闭中<br>online：已启动<br>offline：已关闭</p>
     * @param integer $ProjectId <p>项目 ID，可前往腾讯云项目管理页面查看</p>
     * @param string $ServiceType <p>加速域名业务类型<br>web：网页小文件<br>download：下载大文件<br>media：音视频点播<br>hybrid:  动静加速<br>dynamic:  动态加速</p>
     * @param string $CreateTime <p>域名创建时间</p>
     * @param string $UpdateTime <p>域名更新时间</p>
     * @param Origin $Origin <p>源站配置</p>
     * @param IpFilter $IpFilter <p>IP 黑白名单配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param IpFreqLimit $IpFreqLimit <p>IP 访问限频配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param StatusCodeCache $StatusCodeCache <p>状态码缓存配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param Compression $Compression <p>智能压缩配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param BandwidthAlert $BandwidthAlert <p>带宽封顶配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param RangeOriginPull $RangeOriginPull <p>Range 回源配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param FollowRedirect $FollowRedirect <p>301/302 回源自动跟随配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ErrorPage $ErrorPage <p>自定义错误页面配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param RequestHeader $RequestHeader <p>自定义请求头部配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ResponseHeader $ResponseHeader <p>自定义响应头部配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param DownstreamCapping $DownstreamCapping <p>单链接下行限速配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param CacheKey $CacheKey <p>带参/不带参缓存配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ResponseHeaderCache $ResponseHeaderCache <p>源站头部缓存配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param VideoSeek $VideoSeek <p>视频拖拽配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param Cache $Cache <p>节点缓存过期规则配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param OriginPullOptimization $OriginPullOptimization <p>跨国链路优化配置（功能灰度中，敬请期待）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param Https $Https <p>Https 加速相关配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param Authentication $Authentication <p>时间戳防盗链配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param Seo $Seo <p>SEO 优化配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Disable <p>域名封禁状态<br>normal：正常状态<br>overdue：账号欠费导致域名关闭，充值完成后可自行启动加速服务<br>malicious：域名出现恶意行为，强制关闭加速服务<br>ddos：域名被大规模 DDoS 攻击，关闭加速服务<br>ddos_risk: 域名存在ddos攻击风险<br>idle：域名超过 90 天内无任何操作、数据产生，判定为不活跃域名自动关闭加速服务，可自行启动加速服务<br>unlicensed：域名未备案/备案注销，自动关闭加速服务，备案完成后可自行启动加速服务<br>capping：触发配置的带宽阈值上限<br>readonly：域名存在特殊配置，被锁定</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ForceRedirect $ForceRedirect <p>访问协议强制跳转配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param Referer $Referer <p>Referer 防盗链配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param MaxAge $MaxAge <p>浏览器缓存过期规则配置（功能灰度中，敬请期待）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param Ipv6 $Ipv6 <p>Ipv6 回源配置（功能灰度中，敬请期待）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param Compatibility $Compatibility <p>是否兼容旧版本配置（内部兼容性字段）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param SpecificConfig $SpecificConfig <p>区域特殊配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Area <p>加速区域<br>mainland：中国境内加速<br>overseas：中国境外加速<br>global：全球加速</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Readonly <p>域名锁定状态<br>normal：未锁定<br>mainland：中国境内锁定<br>overseas：中国境外锁定<br>global：全球锁定</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param OriginPullTimeout $OriginPullTimeout <p>回源超时配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param AwsPrivateAccess $AwsPrivateAccess <p>回源S3鉴权配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param SecurityConfig $SecurityConfig <p>Scdn配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ImageOptimization $ImageOptimization <p>ImageOptimization配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param UserAgentFilter $UserAgentFilter <p>UA黑白名单配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param AccessControl $AccessControl <p>访问控制</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Advance <p>是否支持高级配置项<br>on：支持<br>off：不支持</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param UrlRedirect $UrlRedirect <p>URL重定向配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AccessPort <p>访问端口配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tag <p>标签配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param AdvancedAuthentication $AdvancedAuthentication <p>时间戳防盗链高级配置，白名单功能</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param OriginAuthentication $OriginAuthentication <p>回源鉴权高级配置，白名单功能</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param Ipv6Access $Ipv6Access <p>Ipv6访问配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AdvanceSet <p>高级配置集合</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param OfflineCache $OfflineCache <p>离线缓存（功能灰度中，尚未全量，请等待后续全量发布）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param OriginCombine $OriginCombine <p>合并回源（白名单功能）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param PostSize $PostMaxSize <p>POST上传配置项</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param Quic $Quic <p>Quic配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param OssPrivateAccess $OssPrivateAccess <p>回源OSS私有鉴权</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param WebSocket $WebSocket <p>WebSocket配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param RemoteAuthentication $RemoteAuthentication <p>远程鉴权配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ShareCname $ShareCname <p>共享CNAME配置（白名单功能）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param RuleEngine $RuleEngine <p>规则引擎</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParentHost <p>主域名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param HwPrivateAccess $HwPrivateAccess <p>华为云对象存储回源鉴权</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param QnPrivateAccess $QnPrivateAccess <p>七牛云对象存储回源鉴权</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param HttpsBilling $HttpsBilling <p>HTTPS服务，缺省时默认开启</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param OthersPrivateAccess $OthersPrivateAccess <p>其他厂商对象存储回源鉴权</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ParamFilter $ParamFilter <p>参数黑名单</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param AutoGuard $AutoGuard <p>流量一键防盗刷配置</p>
     * @param GeoBlocker $GeoBlocker <p>区域访问控制配置</p>
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Cname",$param) and $param["Cname"] !== null) {
            $this->Cname = $param["Cname"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Origin",$param) and $param["Origin"] !== null) {
            $this->Origin = new Origin();
            $this->Origin->deserialize($param["Origin"]);
        }

        if (array_key_exists("IpFilter",$param) and $param["IpFilter"] !== null) {
            $this->IpFilter = new IpFilter();
            $this->IpFilter->deserialize($param["IpFilter"]);
        }

        if (array_key_exists("IpFreqLimit",$param) and $param["IpFreqLimit"] !== null) {
            $this->IpFreqLimit = new IpFreqLimit();
            $this->IpFreqLimit->deserialize($param["IpFreqLimit"]);
        }

        if (array_key_exists("StatusCodeCache",$param) and $param["StatusCodeCache"] !== null) {
            $this->StatusCodeCache = new StatusCodeCache();
            $this->StatusCodeCache->deserialize($param["StatusCodeCache"]);
        }

        if (array_key_exists("Compression",$param) and $param["Compression"] !== null) {
            $this->Compression = new Compression();
            $this->Compression->deserialize($param["Compression"]);
        }

        if (array_key_exists("BandwidthAlert",$param) and $param["BandwidthAlert"] !== null) {
            $this->BandwidthAlert = new BandwidthAlert();
            $this->BandwidthAlert->deserialize($param["BandwidthAlert"]);
        }

        if (array_key_exists("RangeOriginPull",$param) and $param["RangeOriginPull"] !== null) {
            $this->RangeOriginPull = new RangeOriginPull();
            $this->RangeOriginPull->deserialize($param["RangeOriginPull"]);
        }

        if (array_key_exists("FollowRedirect",$param) and $param["FollowRedirect"] !== null) {
            $this->FollowRedirect = new FollowRedirect();
            $this->FollowRedirect->deserialize($param["FollowRedirect"]);
        }

        if (array_key_exists("ErrorPage",$param) and $param["ErrorPage"] !== null) {
            $this->ErrorPage = new ErrorPage();
            $this->ErrorPage->deserialize($param["ErrorPage"]);
        }

        if (array_key_exists("RequestHeader",$param) and $param["RequestHeader"] !== null) {
            $this->RequestHeader = new RequestHeader();
            $this->RequestHeader->deserialize($param["RequestHeader"]);
        }

        if (array_key_exists("ResponseHeader",$param) and $param["ResponseHeader"] !== null) {
            $this->ResponseHeader = new ResponseHeader();
            $this->ResponseHeader->deserialize($param["ResponseHeader"]);
        }

        if (array_key_exists("DownstreamCapping",$param) and $param["DownstreamCapping"] !== null) {
            $this->DownstreamCapping = new DownstreamCapping();
            $this->DownstreamCapping->deserialize($param["DownstreamCapping"]);
        }

        if (array_key_exists("CacheKey",$param) and $param["CacheKey"] !== null) {
            $this->CacheKey = new CacheKey();
            $this->CacheKey->deserialize($param["CacheKey"]);
        }

        if (array_key_exists("ResponseHeaderCache",$param) and $param["ResponseHeaderCache"] !== null) {
            $this->ResponseHeaderCache = new ResponseHeaderCache();
            $this->ResponseHeaderCache->deserialize($param["ResponseHeaderCache"]);
        }

        if (array_key_exists("VideoSeek",$param) and $param["VideoSeek"] !== null) {
            $this->VideoSeek = new VideoSeek();
            $this->VideoSeek->deserialize($param["VideoSeek"]);
        }

        if (array_key_exists("Cache",$param) and $param["Cache"] !== null) {
            $this->Cache = new Cache();
            $this->Cache->deserialize($param["Cache"]);
        }

        if (array_key_exists("OriginPullOptimization",$param) and $param["OriginPullOptimization"] !== null) {
            $this->OriginPullOptimization = new OriginPullOptimization();
            $this->OriginPullOptimization->deserialize($param["OriginPullOptimization"]);
        }

        if (array_key_exists("Https",$param) and $param["Https"] !== null) {
            $this->Https = new Https();
            $this->Https->deserialize($param["Https"]);
        }

        if (array_key_exists("Authentication",$param) and $param["Authentication"] !== null) {
            $this->Authentication = new Authentication();
            $this->Authentication->deserialize($param["Authentication"]);
        }

        if (array_key_exists("Seo",$param) and $param["Seo"] !== null) {
            $this->Seo = new Seo();
            $this->Seo->deserialize($param["Seo"]);
        }

        if (array_key_exists("Disable",$param) and $param["Disable"] !== null) {
            $this->Disable = $param["Disable"];
        }

        if (array_key_exists("ForceRedirect",$param) and $param["ForceRedirect"] !== null) {
            $this->ForceRedirect = new ForceRedirect();
            $this->ForceRedirect->deserialize($param["ForceRedirect"]);
        }

        if (array_key_exists("Referer",$param) and $param["Referer"] !== null) {
            $this->Referer = new Referer();
            $this->Referer->deserialize($param["Referer"]);
        }

        if (array_key_exists("MaxAge",$param) and $param["MaxAge"] !== null) {
            $this->MaxAge = new MaxAge();
            $this->MaxAge->deserialize($param["MaxAge"]);
        }

        if (array_key_exists("Ipv6",$param) and $param["Ipv6"] !== null) {
            $this->Ipv6 = new Ipv6();
            $this->Ipv6->deserialize($param["Ipv6"]);
        }

        if (array_key_exists("Compatibility",$param) and $param["Compatibility"] !== null) {
            $this->Compatibility = new Compatibility();
            $this->Compatibility->deserialize($param["Compatibility"]);
        }

        if (array_key_exists("SpecificConfig",$param) and $param["SpecificConfig"] !== null) {
            $this->SpecificConfig = new SpecificConfig();
            $this->SpecificConfig->deserialize($param["SpecificConfig"]);
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Readonly",$param) and $param["Readonly"] !== null) {
            $this->Readonly = $param["Readonly"];
        }

        if (array_key_exists("OriginPullTimeout",$param) and $param["OriginPullTimeout"] !== null) {
            $this->OriginPullTimeout = new OriginPullTimeout();
            $this->OriginPullTimeout->deserialize($param["OriginPullTimeout"]);
        }

        if (array_key_exists("AwsPrivateAccess",$param) and $param["AwsPrivateAccess"] !== null) {
            $this->AwsPrivateAccess = new AwsPrivateAccess();
            $this->AwsPrivateAccess->deserialize($param["AwsPrivateAccess"]);
        }

        if (array_key_exists("SecurityConfig",$param) and $param["SecurityConfig"] !== null) {
            $this->SecurityConfig = new SecurityConfig();
            $this->SecurityConfig->deserialize($param["SecurityConfig"]);
        }

        if (array_key_exists("ImageOptimization",$param) and $param["ImageOptimization"] !== null) {
            $this->ImageOptimization = new ImageOptimization();
            $this->ImageOptimization->deserialize($param["ImageOptimization"]);
        }

        if (array_key_exists("UserAgentFilter",$param) and $param["UserAgentFilter"] !== null) {
            $this->UserAgentFilter = new UserAgentFilter();
            $this->UserAgentFilter->deserialize($param["UserAgentFilter"]);
        }

        if (array_key_exists("AccessControl",$param) and $param["AccessControl"] !== null) {
            $this->AccessControl = new AccessControl();
            $this->AccessControl->deserialize($param["AccessControl"]);
        }

        if (array_key_exists("Advance",$param) and $param["Advance"] !== null) {
            $this->Advance = $param["Advance"];
        }

        if (array_key_exists("UrlRedirect",$param) and $param["UrlRedirect"] !== null) {
            $this->UrlRedirect = new UrlRedirect();
            $this->UrlRedirect->deserialize($param["UrlRedirect"]);
        }

        if (array_key_exists("AccessPort",$param) and $param["AccessPort"] !== null) {
            $this->AccessPort = $param["AccessPort"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = [];
            foreach ($param["Tag"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tag, $obj);
            }
        }

        if (array_key_exists("AdvancedAuthentication",$param) and $param["AdvancedAuthentication"] !== null) {
            $this->AdvancedAuthentication = new AdvancedAuthentication();
            $this->AdvancedAuthentication->deserialize($param["AdvancedAuthentication"]);
        }

        if (array_key_exists("OriginAuthentication",$param) and $param["OriginAuthentication"] !== null) {
            $this->OriginAuthentication = new OriginAuthentication();
            $this->OriginAuthentication->deserialize($param["OriginAuthentication"]);
        }

        if (array_key_exists("Ipv6Access",$param) and $param["Ipv6Access"] !== null) {
            $this->Ipv6Access = new Ipv6Access();
            $this->Ipv6Access->deserialize($param["Ipv6Access"]);
        }

        if (array_key_exists("AdvanceSet",$param) and $param["AdvanceSet"] !== null) {
            $this->AdvanceSet = [];
            foreach ($param["AdvanceSet"] as $key => $value){
                $obj = new AdvanceConfig();
                $obj->deserialize($value);
                array_push($this->AdvanceSet, $obj);
            }
        }

        if (array_key_exists("OfflineCache",$param) and $param["OfflineCache"] !== null) {
            $this->OfflineCache = new OfflineCache();
            $this->OfflineCache->deserialize($param["OfflineCache"]);
        }

        if (array_key_exists("OriginCombine",$param) and $param["OriginCombine"] !== null) {
            $this->OriginCombine = new OriginCombine();
            $this->OriginCombine->deserialize($param["OriginCombine"]);
        }

        if (array_key_exists("PostMaxSize",$param) and $param["PostMaxSize"] !== null) {
            $this->PostMaxSize = new PostSize();
            $this->PostMaxSize->deserialize($param["PostMaxSize"]);
        }

        if (array_key_exists("Quic",$param) and $param["Quic"] !== null) {
            $this->Quic = new Quic();
            $this->Quic->deserialize($param["Quic"]);
        }

        if (array_key_exists("OssPrivateAccess",$param) and $param["OssPrivateAccess"] !== null) {
            $this->OssPrivateAccess = new OssPrivateAccess();
            $this->OssPrivateAccess->deserialize($param["OssPrivateAccess"]);
        }

        if (array_key_exists("WebSocket",$param) and $param["WebSocket"] !== null) {
            $this->WebSocket = new WebSocket();
            $this->WebSocket->deserialize($param["WebSocket"]);
        }

        if (array_key_exists("RemoteAuthentication",$param) and $param["RemoteAuthentication"] !== null) {
            $this->RemoteAuthentication = new RemoteAuthentication();
            $this->RemoteAuthentication->deserialize($param["RemoteAuthentication"]);
        }

        if (array_key_exists("ShareCname",$param) and $param["ShareCname"] !== null) {
            $this->ShareCname = new ShareCname();
            $this->ShareCname->deserialize($param["ShareCname"]);
        }

        if (array_key_exists("RuleEngine",$param) and $param["RuleEngine"] !== null) {
            $this->RuleEngine = new RuleEngine();
            $this->RuleEngine->deserialize($param["RuleEngine"]);
        }

        if (array_key_exists("ParentHost",$param) and $param["ParentHost"] !== null) {
            $this->ParentHost = $param["ParentHost"];
        }

        if (array_key_exists("HwPrivateAccess",$param) and $param["HwPrivateAccess"] !== null) {
            $this->HwPrivateAccess = new HwPrivateAccess();
            $this->HwPrivateAccess->deserialize($param["HwPrivateAccess"]);
        }

        if (array_key_exists("QnPrivateAccess",$param) and $param["QnPrivateAccess"] !== null) {
            $this->QnPrivateAccess = new QnPrivateAccess();
            $this->QnPrivateAccess->deserialize($param["QnPrivateAccess"]);
        }

        if (array_key_exists("HttpsBilling",$param) and $param["HttpsBilling"] !== null) {
            $this->HttpsBilling = new HttpsBilling();
            $this->HttpsBilling->deserialize($param["HttpsBilling"]);
        }

        if (array_key_exists("OthersPrivateAccess",$param) and $param["OthersPrivateAccess"] !== null) {
            $this->OthersPrivateAccess = new OthersPrivateAccess();
            $this->OthersPrivateAccess->deserialize($param["OthersPrivateAccess"]);
        }

        if (array_key_exists("ParamFilter",$param) and $param["ParamFilter"] !== null) {
            $this->ParamFilter = new ParamFilter();
            $this->ParamFilter->deserialize($param["ParamFilter"]);
        }

        if (array_key_exists("AutoGuard",$param) and $param["AutoGuard"] !== null) {
            $this->AutoGuard = new AutoGuard();
            $this->AutoGuard->deserialize($param["AutoGuard"]);
        }

        if (array_key_exists("GeoBlocker",$param) and $param["GeoBlocker"] !== null) {
            $this->GeoBlocker = new GeoBlocker();
            $this->GeoBlocker->deserialize($param["GeoBlocker"]);
        }
    }
}
