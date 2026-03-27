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
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getDomainType() 获取域名类型。 HTTPSERVICE: HTTP访问服务，CBR: 云托管服务，ANYSERVICE: 任意服务，AI_AGENT: AI agent，VM: 主机，INTEGRATION_CALLBACK: 集成回调
 * @method void setDomainType(string $DomainType) 设置域名类型。 HTTPSERVICE: HTTP访问服务，CBR: 云托管服务，ANYSERVICE: 任意服务，AI_AGENT: AI agent，VM: 主机，INTEGRATION_CALLBACK: 集成回调
 * @method string getAccessType() 获取绑定类型。默认DIRECT。DIRECT: 直连到HTTP访问服务， CDN: 接入云开发CDN，CUSTOM: 自定义接入类型（其他CDN或者WAF）
 * @method void setAccessType(string $AccessType) 设置绑定类型。默认DIRECT。DIRECT: 直连到HTTP访问服务， CDN: 接入云开发CDN，CUSTOM: 自定义接入类型（其他CDN或者WAF）
 * @method string getCertId() 获取证书ID。当前账户下SSL平台的证书ID
 * @method void setCertId(string $CertId) 设置证书ID。当前账户下SSL平台的证书ID
 * @method string getProtocol() 获取协议类型。默认HTTP_AND_HTTPS。HTTP_AND_HTTPS: 同时开启http和https，HTTP_TO_HTTPS: http重定向成https，HTTPS_TO_HTTP: https重定向成http。如果未配置证书无法访问https或者进行重定向
 * @method void setProtocol(string $Protocol) 设置协议类型。默认HTTP_AND_HTTPS。HTTP_AND_HTTPS: 同时开启http和https，HTTP_TO_HTTPS: http重定向成https，HTTPS_TO_HTTP: https重定向成http。如果未配置证书无法访问https或者进行重定向
 * @method string getCname() 获取配置DNS解析的CNAME。根据AccessType返回不同的CNAME值。
 * @method void setCname(string $Cname) 设置配置DNS解析的CNAME。根据AccessType返回不同的CNAME值。
 * @method boolean getIsDefault() 获取是否是默认域名
 * @method void setIsDefault(boolean $IsDefault) 设置是否是默认域名
 * @method boolean getEnable() 获取域名开启状态
 * @method void setEnable(boolean $Enable) 设置域名开启状态
 * @method string getStatus() 获取状态。PROCESSING、FAIL，SUCCESS。
 * @method void setStatus(string $Status) 设置状态。PROCESSING、FAIL，SUCCESS。
 * @method string getDNSStatus() 获取DNS解析状态。OK： 解析正常，INVALID：解析不正确，域名未解析到当前Cname域名。
 * @method void setDNSStatus(string $DNSStatus) 设置DNS解析状态。OK： 解析正常，INVALID：解析不正确，域名未解析到当前Cname域名。
 * @method array getRoutes() 获取HTTP访问服务路由信息
 * @method void setRoutes(array $Routes) 设置HTTP访问服务路由信息
 * @method string getCreateTime() 获取域名创建时间
 * @method void setCreateTime(string $CreateTime) 设置域名创建时间
 * @method string getUpdateTime() 获取域名更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置域名更新时间
 */
class HTTPServiceDomain extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string 域名类型。 HTTPSERVICE: HTTP访问服务，CBR: 云托管服务，ANYSERVICE: 任意服务，AI_AGENT: AI agent，VM: 主机，INTEGRATION_CALLBACK: 集成回调
     */
    public $DomainType;

    /**
     * @var string 绑定类型。默认DIRECT。DIRECT: 直连到HTTP访问服务， CDN: 接入云开发CDN，CUSTOM: 自定义接入类型（其他CDN或者WAF）
     */
    public $AccessType;

    /**
     * @var string 证书ID。当前账户下SSL平台的证书ID
     */
    public $CertId;

    /**
     * @var string 协议类型。默认HTTP_AND_HTTPS。HTTP_AND_HTTPS: 同时开启http和https，HTTP_TO_HTTPS: http重定向成https，HTTPS_TO_HTTP: https重定向成http。如果未配置证书无法访问https或者进行重定向
     */
    public $Protocol;

    /**
     * @var string 配置DNS解析的CNAME。根据AccessType返回不同的CNAME值。
     */
    public $Cname;

    /**
     * @var boolean 是否是默认域名
     */
    public $IsDefault;

    /**
     * @var boolean 域名开启状态
     */
    public $Enable;

    /**
     * @var string 状态。PROCESSING、FAIL，SUCCESS。
     */
    public $Status;

    /**
     * @var string DNS解析状态。OK： 解析正常，INVALID：解析不正确，域名未解析到当前Cname域名。
     */
    public $DNSStatus;

    /**
     * @var array HTTP访问服务路由信息
     */
    public $Routes;

    /**
     * @var string 域名创建时间
     */
    public $CreateTime;

    /**
     * @var string 域名更新时间
     */
    public $UpdateTime;

    /**
     * @param string $Domain 域名
     * @param string $DomainType 域名类型。 HTTPSERVICE: HTTP访问服务，CBR: 云托管服务，ANYSERVICE: 任意服务，AI_AGENT: AI agent，VM: 主机，INTEGRATION_CALLBACK: 集成回调
     * @param string $AccessType 绑定类型。默认DIRECT。DIRECT: 直连到HTTP访问服务， CDN: 接入云开发CDN，CUSTOM: 自定义接入类型（其他CDN或者WAF）
     * @param string $CertId 证书ID。当前账户下SSL平台的证书ID
     * @param string $Protocol 协议类型。默认HTTP_AND_HTTPS。HTTP_AND_HTTPS: 同时开启http和https，HTTP_TO_HTTPS: http重定向成https，HTTPS_TO_HTTP: https重定向成http。如果未配置证书无法访问https或者进行重定向
     * @param string $Cname 配置DNS解析的CNAME。根据AccessType返回不同的CNAME值。
     * @param boolean $IsDefault 是否是默认域名
     * @param boolean $Enable 域名开启状态
     * @param string $Status 状态。PROCESSING、FAIL，SUCCESS。
     * @param string $DNSStatus DNS解析状态。OK： 解析正常，INVALID：解析不正确，域名未解析到当前Cname域名。
     * @param array $Routes HTTP访问服务路由信息
     * @param string $CreateTime 域名创建时间
     * @param string $UpdateTime 域名更新时间
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
