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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * HTTP/HTTPS转发规则（输入）
 *
 * @method string getUrl() 获取<p>转发规则的路径。长度限制为：1~200。</p>
 * @method void setUrl(string $Url) 设置<p>转发规则的路径。长度限制为：1~200。</p>
 * @method string getDomain() 获取<p>转发规则的域名。长度限制为：1~80。Domain和Domains只需要传一个，单域名规则传Domain，多域名规则传Domains。</p>
 * @method void setDomain(string $Domain) 设置<p>转发规则的域名。长度限制为：1~80。Domain和Domains只需要传一个，单域名规则传Domain，多域名规则传Domains。</p>
 * @method integer getSessionExpireTime() 获取<p>会话保持时间。设置为0表示关闭会话保持，开启会话保持可取值30~86400，单位：秒。</p>
 * @method void setSessionExpireTime(integer $SessionExpireTime) 设置<p>会话保持时间。设置为0表示关闭会话保持，开启会话保持可取值30~86400，单位：秒。</p>
 * @method HealthCheck getHealthCheck() 获取<p>健康检查信息。详情请参见：<a href="https://cloud.tencent.com/document/product/214/6097">健康检查</a></p>
 * @method void setHealthCheck(HealthCheck $HealthCheck) 设置<p>健康检查信息。详情请参见：<a href="https://cloud.tencent.com/document/product/214/6097">健康检查</a></p>
 * @method CertificateInput getCertificate() 获取<p>证书信息；此参数和MultiCertInfo不能同时传入。</p>
 * @method void setCertificate(CertificateInput $Certificate) 设置<p>证书信息；此参数和MultiCertInfo不能同时传入。</p>
 * @method string getScheduler() 获取<p>规则的请求转发方式，可选值：WRR、LEAST_CONN、IP_HASH<br>分别表示按权重轮询、最小连接数、按IP哈希， 默认为 WRR。</p>
 * @method void setScheduler(string $Scheduler) 设置<p>规则的请求转发方式，可选值：WRR、LEAST_CONN、IP_HASH<br>分别表示按权重轮询、最小连接数、按IP哈希， 默认为 WRR。</p>
 * @method string getForwardType() 获取<p>负载均衡与后端服务之间的转发协议，目前支持 HTTP/HTTPS/GRPC/GRPCS/TRPC，TRPC暂未对外开放，默认HTTP。</p>
 * @method void setForwardType(string $ForwardType) 设置<p>负载均衡与后端服务之间的转发协议，目前支持 HTTP/HTTPS/GRPC/GRPCS/TRPC，TRPC暂未对外开放，默认HTTP。</p>
 * @method boolean getDefaultServer() 获取<p>是否将该域名设为默认域名，注意，一个监听器下只能设置一个默认域名。</p>
 * @method void setDefaultServer(boolean $DefaultServer) 设置<p>是否将该域名设为默认域名，注意，一个监听器下只能设置一个默认域名。</p>
 * @method boolean getHttp2() 获取<p>是否开启Http2，注意，只有HTTPS域名才能开启Http2。</p>
 * @method void setHttp2(boolean $Http2) 设置<p>是否开启Http2，注意，只有HTTPS域名才能开启Http2。</p>
 * @method string getTargetType() 获取<p>后端目标类型，NODE表示绑定普通节点，TARGETGROUP表示绑定目标组</p><p>枚举值：</p><ul><li>NODE： 绑定普通节点</li><li>TARGETGROUP： 绑定目标组 v1</li><li>TARGETGROUP-V2： 绑定目标组 v2</li></ul>
 * @method void setTargetType(string $TargetType) 设置<p>后端目标类型，NODE表示绑定普通节点，TARGETGROUP表示绑定目标组</p><p>枚举值：</p><ul><li>NODE： 绑定普通节点</li><li>TARGETGROUP： 绑定目标组 v1</li><li>TARGETGROUP-V2： 绑定目标组 v2</li></ul>
 * @method string getTrpcCallee() 获取<p>TRPC被调服务器路由，ForwardType为TRPC时必填。目前暂未对外开放。</p>
 * @method void setTrpcCallee(string $TrpcCallee) 设置<p>TRPC被调服务器路由，ForwardType为TRPC时必填。目前暂未对外开放。</p>
 * @method string getTrpcFunc() 获取<p>TRPC调用服务接口，ForwardType为TRPC时必填。目前暂未对外开放</p>
 * @method void setTrpcFunc(string $TrpcFunc) 设置<p>TRPC调用服务接口，ForwardType为TRPC时必填。目前暂未对外开放</p>
 * @method boolean getQuic() 获取<p>是否开启QUIC，注意，只有HTTPS域名才能开启QUIC</p>
 * @method void setQuic(boolean $Quic) 设置<p>是否开启QUIC，注意，只有HTTPS域名才能开启QUIC</p>
 * @method array getDomains() 获取<p>转发规则的域名列表。每个域名的长度限制为：1~80。Domain和Domains只需要传一个，单域名规则传Domain，多域名规则传Domains。</p>
 * @method void setDomains(array $Domains) 设置<p>转发规则的域名列表。每个域名的长度限制为：1~80。Domain和Domains只需要传一个，单域名规则传Domain，多域名规则传Domains。</p>
 * @method MultiCertInfo getMultiCertInfo() 获取<p>证书信息，支持同时传入不同算法类型的多本服务端证书；此参数和Certificate不能同时传入。</p>
 * @method void setMultiCertInfo(MultiCertInfo $MultiCertInfo) 设置<p>证书信息，支持同时传入不同算法类型的多本服务端证书；此参数和Certificate不能同时传入。</p>
 * @method string getCookieName() 获取<p>自定义cookie名</p>
 * @method void setCookieName(string $CookieName) 设置<p>自定义cookie名</p>
 */
class RuleInput extends AbstractModel
{
    /**
     * @var string <p>转发规则的路径。长度限制为：1~200。</p>
     */
    public $Url;

    /**
     * @var string <p>转发规则的域名。长度限制为：1~80。Domain和Domains只需要传一个，单域名规则传Domain，多域名规则传Domains。</p>
     */
    public $Domain;

    /**
     * @var integer <p>会话保持时间。设置为0表示关闭会话保持，开启会话保持可取值30~86400，单位：秒。</p>
     */
    public $SessionExpireTime;

    /**
     * @var HealthCheck <p>健康检查信息。详情请参见：<a href="https://cloud.tencent.com/document/product/214/6097">健康检查</a></p>
     */
    public $HealthCheck;

    /**
     * @var CertificateInput <p>证书信息；此参数和MultiCertInfo不能同时传入。</p>
     */
    public $Certificate;

    /**
     * @var string <p>规则的请求转发方式，可选值：WRR、LEAST_CONN、IP_HASH<br>分别表示按权重轮询、最小连接数、按IP哈希， 默认为 WRR。</p>
     */
    public $Scheduler;

    /**
     * @var string <p>负载均衡与后端服务之间的转发协议，目前支持 HTTP/HTTPS/GRPC/GRPCS/TRPC，TRPC暂未对外开放，默认HTTP。</p>
     */
    public $ForwardType;

    /**
     * @var boolean <p>是否将该域名设为默认域名，注意，一个监听器下只能设置一个默认域名。</p>
     */
    public $DefaultServer;

    /**
     * @var boolean <p>是否开启Http2，注意，只有HTTPS域名才能开启Http2。</p>
     */
    public $Http2;

    /**
     * @var string <p>后端目标类型，NODE表示绑定普通节点，TARGETGROUP表示绑定目标组</p><p>枚举值：</p><ul><li>NODE： 绑定普通节点</li><li>TARGETGROUP： 绑定目标组 v1</li><li>TARGETGROUP-V2： 绑定目标组 v2</li></ul>
     */
    public $TargetType;

    /**
     * @var string <p>TRPC被调服务器路由，ForwardType为TRPC时必填。目前暂未对外开放。</p>
     */
    public $TrpcCallee;

    /**
     * @var string <p>TRPC调用服务接口，ForwardType为TRPC时必填。目前暂未对外开放</p>
     */
    public $TrpcFunc;

    /**
     * @var boolean <p>是否开启QUIC，注意，只有HTTPS域名才能开启QUIC</p>
     */
    public $Quic;

    /**
     * @var array <p>转发规则的域名列表。每个域名的长度限制为：1~80。Domain和Domains只需要传一个，单域名规则传Domain，多域名规则传Domains。</p>
     */
    public $Domains;

    /**
     * @var MultiCertInfo <p>证书信息，支持同时传入不同算法类型的多本服务端证书；此参数和Certificate不能同时传入。</p>
     */
    public $MultiCertInfo;

    /**
     * @var string <p>自定义cookie名</p>
     */
    public $CookieName;

    /**
     * @param string $Url <p>转发规则的路径。长度限制为：1~200。</p>
     * @param string $Domain <p>转发规则的域名。长度限制为：1~80。Domain和Domains只需要传一个，单域名规则传Domain，多域名规则传Domains。</p>
     * @param integer $SessionExpireTime <p>会话保持时间。设置为0表示关闭会话保持，开启会话保持可取值30~86400，单位：秒。</p>
     * @param HealthCheck $HealthCheck <p>健康检查信息。详情请参见：<a href="https://cloud.tencent.com/document/product/214/6097">健康检查</a></p>
     * @param CertificateInput $Certificate <p>证书信息；此参数和MultiCertInfo不能同时传入。</p>
     * @param string $Scheduler <p>规则的请求转发方式，可选值：WRR、LEAST_CONN、IP_HASH<br>分别表示按权重轮询、最小连接数、按IP哈希， 默认为 WRR。</p>
     * @param string $ForwardType <p>负载均衡与后端服务之间的转发协议，目前支持 HTTP/HTTPS/GRPC/GRPCS/TRPC，TRPC暂未对外开放，默认HTTP。</p>
     * @param boolean $DefaultServer <p>是否将该域名设为默认域名，注意，一个监听器下只能设置一个默认域名。</p>
     * @param boolean $Http2 <p>是否开启Http2，注意，只有HTTPS域名才能开启Http2。</p>
     * @param string $TargetType <p>后端目标类型，NODE表示绑定普通节点，TARGETGROUP表示绑定目标组</p><p>枚举值：</p><ul><li>NODE： 绑定普通节点</li><li>TARGETGROUP： 绑定目标组 v1</li><li>TARGETGROUP-V2： 绑定目标组 v2</li></ul>
     * @param string $TrpcCallee <p>TRPC被调服务器路由，ForwardType为TRPC时必填。目前暂未对外开放。</p>
     * @param string $TrpcFunc <p>TRPC调用服务接口，ForwardType为TRPC时必填。目前暂未对外开放</p>
     * @param boolean $Quic <p>是否开启QUIC，注意，只有HTTPS域名才能开启QUIC</p>
     * @param array $Domains <p>转发规则的域名列表。每个域名的长度限制为：1~80。Domain和Domains只需要传一个，单域名规则传Domain，多域名规则传Domains。</p>
     * @param MultiCertInfo $MultiCertInfo <p>证书信息，支持同时传入不同算法类型的多本服务端证书；此参数和Certificate不能同时传入。</p>
     * @param string $CookieName <p>自定义cookie名</p>
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("SessionExpireTime",$param) and $param["SessionExpireTime"] !== null) {
            $this->SessionExpireTime = $param["SessionExpireTime"];
        }

        if (array_key_exists("HealthCheck",$param) and $param["HealthCheck"] !== null) {
            $this->HealthCheck = new HealthCheck();
            $this->HealthCheck->deserialize($param["HealthCheck"]);
        }

        if (array_key_exists("Certificate",$param) and $param["Certificate"] !== null) {
            $this->Certificate = new CertificateInput();
            $this->Certificate->deserialize($param["Certificate"]);
        }

        if (array_key_exists("Scheduler",$param) and $param["Scheduler"] !== null) {
            $this->Scheduler = $param["Scheduler"];
        }

        if (array_key_exists("ForwardType",$param) and $param["ForwardType"] !== null) {
            $this->ForwardType = $param["ForwardType"];
        }

        if (array_key_exists("DefaultServer",$param) and $param["DefaultServer"] !== null) {
            $this->DefaultServer = $param["DefaultServer"];
        }

        if (array_key_exists("Http2",$param) and $param["Http2"] !== null) {
            $this->Http2 = $param["Http2"];
        }

        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            $this->TargetType = $param["TargetType"];
        }

        if (array_key_exists("TrpcCallee",$param) and $param["TrpcCallee"] !== null) {
            $this->TrpcCallee = $param["TrpcCallee"];
        }

        if (array_key_exists("TrpcFunc",$param) and $param["TrpcFunc"] !== null) {
            $this->TrpcFunc = $param["TrpcFunc"];
        }

        if (array_key_exists("Quic",$param) and $param["Quic"] !== null) {
            $this->Quic = $param["Quic"];
        }

        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }

        if (array_key_exists("MultiCertInfo",$param) and $param["MultiCertInfo"] !== null) {
            $this->MultiCertInfo = new MultiCertInfo();
            $this->MultiCertInfo->deserialize($param["MultiCertInfo"]);
        }

        if (array_key_exists("CookieName",$param) and $param["CookieName"] !== null) {
            $this->CookieName = $param["CookieName"];
        }
    }
}
