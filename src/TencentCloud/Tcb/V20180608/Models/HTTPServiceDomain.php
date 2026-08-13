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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询HTTP访问服务输出的域名信息，每个域名内包含所有路由信息
 *
 * @method string getDomain() 获取<p>域名</p>
 * @method void setDomain(string $Domain) 设置<p>域名</p>
 * @method string getDomainType() 获取<p>域名类型。 HTTPSERVICE: HTTP访问服务，CBR: 云托管服务，ANYSERVICE: 任意服务，AI_AGENT: AI agent，VM: 主机，INTEGRATION_CALLBACK: 集成回调</p>
 * @method void setDomainType(string $DomainType) 设置<p>域名类型。 HTTPSERVICE: HTTP访问服务，CBR: 云托管服务，ANYSERVICE: 任意服务，AI_AGENT: AI agent，VM: 主机，INTEGRATION_CALLBACK: 集成回调</p>
 * @method string getAccessType() 获取<p>绑定类型。默认DIRECT。DIRECT: 直连到HTTP访问服务， CDN: 接入云开发CDN，CUSTOM: 自定义接入类型（其他CDN或者WAF）</p>
 * @method void setAccessType(string $AccessType) 设置<p>绑定类型。默认DIRECT。DIRECT: 直连到HTTP访问服务， CDN: 接入云开发CDN，CUSTOM: 自定义接入类型（其他CDN或者WAF）</p>
 * @method string getCertId() 获取<p>证书ID。当前账户下SSL平台的证书ID</p>
 * @method void setCertId(string $CertId) 设置<p>证书ID。当前账户下SSL平台的证书ID</p>
 * @method string getProtocol() 获取<p>协议类型。默认HTTP_AND_HTTPS。HTTP_AND_HTTPS: 同时开启http和https，HTTP_TO_HTTPS: http重定向成https，HTTPS_TO_HTTP: https重定向成http。如果未配置证书无法访问https或者进行重定向</p>
 * @method void setProtocol(string $Protocol) 设置<p>协议类型。默认HTTP_AND_HTTPS。HTTP_AND_HTTPS: 同时开启http和https，HTTP_TO_HTTPS: http重定向成https，HTTPS_TO_HTTP: https重定向成http。如果未配置证书无法访问https或者进行重定向</p>
 * @method string getCname() 获取<p>配置DNS解析的CNAME。根据AccessType返回不同的CNAME值。</p>
 * @method void setCname(string $Cname) 设置<p>配置DNS解析的CNAME。根据AccessType返回不同的CNAME值。</p>
 * @method boolean getIsDefault() 获取<p>是否是默认域名</p>
 * @method void setIsDefault(boolean $IsDefault) 设置<p>是否是默认域名</p>
 * @method boolean getEnable() 获取<p>域名开启状态</p>
 * @method void setEnable(boolean $Enable) 设置<p>域名开启状态</p>
 * @method string getStatus() 获取<p>状态。</p><p>枚举值：</p><ul><li>PROCESSING： 处理中</li><li>FAIL： 失败</li><li>EO_PENDING_VERIFICATION： 待验证edgeone归属权</li><li>SUCCESS： 成功</li></ul>
 * @method void setStatus(string $Status) 设置<p>状态。</p><p>枚举值：</p><ul><li>PROCESSING： 处理中</li><li>FAIL： 失败</li><li>EO_PENDING_VERIFICATION： 待验证edgeone归属权</li><li>SUCCESS： 成功</li></ul>
 * @method string getDNSStatus() 获取<p>DNS解析状态</p><p>枚举值：</p><ul><li>OK： 正常，命中目标 cname</li><li>EMPTY： 解析为空，域名尚未配置 CNAME 或未生效</li><li>INVALID： 异常，解析到其他非目标地址</li></ul>
 * @method void setDNSStatus(string $DNSStatus) 设置<p>DNS解析状态</p><p>枚举值：</p><ul><li>OK： 正常，命中目标 cname</li><li>EMPTY： 解析为空，域名尚未配置 CNAME 或未生效</li><li>INVALID： 异常，解析到其他非目标地址</li></ul>
 * @method array getRoutes() 获取<p>HTTP访问服务路由信息</p>
 * @method void setRoutes(array $Routes) 设置<p>HTTP访问服务路由信息</p>
 * @method HTTPServiceExtension getExtension() 获取<p>扩展字段，内部包含headers处理等</p>
 * @method void setExtension(HTTPServiceExtension $Extension) 设置<p>扩展字段，内部包含headers处理等</p>
 * @method string getCreateTime() 获取<p>域名创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>域名创建时间</p>
 * @method string getUpdateTime() 获取<p>域名更新时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>域名更新时间</p>
 */
class HTTPServiceDomain extends AbstractModel
{
    /**
     * @var string <p>域名</p>
     */
    public $Domain;

    /**
     * @var string <p>域名类型。 HTTPSERVICE: HTTP访问服务，CBR: 云托管服务，ANYSERVICE: 任意服务，AI_AGENT: AI agent，VM: 主机，INTEGRATION_CALLBACK: 集成回调</p>
     */
    public $DomainType;

    /**
     * @var string <p>绑定类型。默认DIRECT。DIRECT: 直连到HTTP访问服务， CDN: 接入云开发CDN，CUSTOM: 自定义接入类型（其他CDN或者WAF）</p>
     */
    public $AccessType;

    /**
     * @var string <p>证书ID。当前账户下SSL平台的证书ID</p>
     */
    public $CertId;

    /**
     * @var string <p>协议类型。默认HTTP_AND_HTTPS。HTTP_AND_HTTPS: 同时开启http和https，HTTP_TO_HTTPS: http重定向成https，HTTPS_TO_HTTP: https重定向成http。如果未配置证书无法访问https或者进行重定向</p>
     */
    public $Protocol;

    /**
     * @var string <p>配置DNS解析的CNAME。根据AccessType返回不同的CNAME值。</p>
     */
    public $Cname;

    /**
     * @var boolean <p>是否是默认域名</p>
     */
    public $IsDefault;

    /**
     * @var boolean <p>域名开启状态</p>
     */
    public $Enable;

    /**
     * @var string <p>状态。</p><p>枚举值：</p><ul><li>PROCESSING： 处理中</li><li>FAIL： 失败</li><li>EO_PENDING_VERIFICATION： 待验证edgeone归属权</li><li>SUCCESS： 成功</li></ul>
     */
    public $Status;

    /**
     * @var string <p>DNS解析状态</p><p>枚举值：</p><ul><li>OK： 正常，命中目标 cname</li><li>EMPTY： 解析为空，域名尚未配置 CNAME 或未生效</li><li>INVALID： 异常，解析到其他非目标地址</li></ul>
     */
    public $DNSStatus;

    /**
     * @var array <p>HTTP访问服务路由信息</p>
     */
    public $Routes;

    /**
     * @var HTTPServiceExtension <p>扩展字段，内部包含headers处理等</p>
     */
    public $Extension;

    /**
     * @var string <p>域名创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>域名更新时间</p>
     */
    public $UpdateTime;

    /**
     * @param string $Domain <p>域名</p>
     * @param string $DomainType <p>域名类型。 HTTPSERVICE: HTTP访问服务，CBR: 云托管服务，ANYSERVICE: 任意服务，AI_AGENT: AI agent，VM: 主机，INTEGRATION_CALLBACK: 集成回调</p>
     * @param string $AccessType <p>绑定类型。默认DIRECT。DIRECT: 直连到HTTP访问服务， CDN: 接入云开发CDN，CUSTOM: 自定义接入类型（其他CDN或者WAF）</p>
     * @param string $CertId <p>证书ID。当前账户下SSL平台的证书ID</p>
     * @param string $Protocol <p>协议类型。默认HTTP_AND_HTTPS。HTTP_AND_HTTPS: 同时开启http和https，HTTP_TO_HTTPS: http重定向成https，HTTPS_TO_HTTP: https重定向成http。如果未配置证书无法访问https或者进行重定向</p>
     * @param string $Cname <p>配置DNS解析的CNAME。根据AccessType返回不同的CNAME值。</p>
     * @param boolean $IsDefault <p>是否是默认域名</p>
     * @param boolean $Enable <p>域名开启状态</p>
     * @param string $Status <p>状态。</p><p>枚举值：</p><ul><li>PROCESSING： 处理中</li><li>FAIL： 失败</li><li>EO_PENDING_VERIFICATION： 待验证edgeone归属权</li><li>SUCCESS： 成功</li></ul>
     * @param string $DNSStatus <p>DNS解析状态</p><p>枚举值：</p><ul><li>OK： 正常，命中目标 cname</li><li>EMPTY： 解析为空，域名尚未配置 CNAME 或未生效</li><li>INVALID： 异常，解析到其他非目标地址</li></ul>
     * @param array $Routes <p>HTTP访问服务路由信息</p>
     * @param HTTPServiceExtension $Extension <p>扩展字段，内部包含headers处理等</p>
     * @param string $CreateTime <p>域名创建时间</p>
     * @param string $UpdateTime <p>域名更新时间</p>
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("DomainType",$param) and $param["DomainType"] !== null) {
            $this->DomainType = $param["DomainType"];
        }

        if (array_key_exists("AccessType",$param) and $param["AccessType"] !== null) {
            $this->AccessType = $param["AccessType"];
        }

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Cname",$param) and $param["Cname"] !== null) {
            $this->Cname = $param["Cname"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("DNSStatus",$param) and $param["DNSStatus"] !== null) {
            $this->DNSStatus = $param["DNSStatus"];
        }

        if (array_key_exists("Routes",$param) and $param["Routes"] !== null) {
            $this->Routes = [];
            foreach ($param["Routes"] as $key => $value){
                $obj = new HTTPServiceRoute();
                $obj->deserialize($value);
                array_push($this->Routes, $obj);
            }
        }

        if (array_key_exists("Extension",$param) and $param["Extension"] !== null) {
            $this->Extension = new HTTPServiceExtension();
            $this->Extension->deserialize($param["Extension"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
