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
 * 创建或修改HTTP访问服务输入的域名信息，修改HTTP访问服务域名时对应字段不传参数表示不需要修改。
 *
 * @method string getDomain() 获取<p>域名。全局唯一。如果域名在其他环境下占用或者腾讯云CDN占用，可能会导致创建失败</p>
 * @method void setDomain(string $Domain) 设置<p>域名。全局唯一。如果域名在其他环境下占用或者腾讯云CDN占用，可能会导致创建失败</p>
 * @method string getAccessType() 获取<p>绑定类型。默认DIRECT。DIRECT: 直连到HTTP访问服务， CDN: 接入云开发CDN，CUSTOM: 自定义接入类型（其他CDN或者WAF）</p>
 * @method void setAccessType(string $AccessType) 设置<p>绑定类型。默认DIRECT。DIRECT: 直连到HTTP访问服务， CDN: 接入云开发CDN，CUSTOM: 自定义接入类型（其他CDN或者WAF）</p>
 * @method string getCertId() 获取<p>证书ID。当前账户下SSL平台的证书ID</p>
 * @method void setCertId(string $CertId) 设置<p>证书ID。当前账户下SSL平台的证书ID</p>
 * @method string getProtocol() 获取<p>协议类型。默认HTTP_AND_HTTPS。HTTP_AND_HTTPS: 同时开启http和https，HTTP_TO_HTTPS: http重定向成https，HTTPS_TO_HTTP: https重定向成http。如果未配置证书无法访问https或者进行重定向</p>
 * @method void setProtocol(string $Protocol) 设置<p>协议类型。默认HTTP_AND_HTTPS。HTTP_AND_HTTPS: 同时开启http和https，HTTP_TO_HTTPS: http重定向成https，HTTPS_TO_HTTP: https重定向成http。如果未配置证书无法访问https或者进行重定向</p>
 * @method string getCustomCname() 获取<p>自定义CNAME。对应AccessType: Custom</p>
 * @method void setCustomCname(string $CustomCname) 设置<p>自定义CNAME。对应AccessType: Custom</p>
 * @method boolean getEnable() 获取<p>域名开启状态，不传默认开启</p>
 * @method void setEnable(boolean $Enable) 设置<p>域名开启状态，不传默认开启</p>
 * @method array getRoutes() 获取<p>创建/修改的HTTP访问服务路由列表。如果不传，仅创建或修改域名信息。列表最大支持传入20个</p>
 * @method void setRoutes(array $Routes) 设置<p>创建/修改的HTTP访问服务路由列表。如果不传，仅创建或修改域名信息。列表最大支持传入20个</p>
 * @method HTTPServiceExtension getExtension() 获取<p>扩展字段，内部包含headers处理等</p>
 * @method void setExtension(HTTPServiceExtension $Extension) 设置<p>扩展字段，内部包含headers处理等</p>
 */
class HTTPServiceDomainParam extends AbstractModel
{
    /**
     * @var string <p>域名。全局唯一。如果域名在其他环境下占用或者腾讯云CDN占用，可能会导致创建失败</p>
     */
    public $Domain;

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
     * @var string <p>自定义CNAME。对应AccessType: Custom</p>
     */
    public $CustomCname;

    /**
     * @var boolean <p>域名开启状态，不传默认开启</p>
     */
    public $Enable;

    /**
     * @var array <p>创建/修改的HTTP访问服务路由列表。如果不传，仅创建或修改域名信息。列表最大支持传入20个</p>
     */
    public $Routes;

    /**
     * @var HTTPServiceExtension <p>扩展字段，内部包含headers处理等</p>
     */
    public $Extension;

    /**
     * @param string $Domain <p>域名。全局唯一。如果域名在其他环境下占用或者腾讯云CDN占用，可能会导致创建失败</p>
     * @param string $AccessType <p>绑定类型。默认DIRECT。DIRECT: 直连到HTTP访问服务， CDN: 接入云开发CDN，CUSTOM: 自定义接入类型（其他CDN或者WAF）</p>
     * @param string $CertId <p>证书ID。当前账户下SSL平台的证书ID</p>
     * @param string $Protocol <p>协议类型。默认HTTP_AND_HTTPS。HTTP_AND_HTTPS: 同时开启http和https，HTTP_TO_HTTPS: http重定向成https，HTTPS_TO_HTTP: https重定向成http。如果未配置证书无法访问https或者进行重定向</p>
     * @param string $CustomCname <p>自定义CNAME。对应AccessType: Custom</p>
     * @param boolean $Enable <p>域名开启状态，不传默认开启</p>
     * @param array $Routes <p>创建/修改的HTTP访问服务路由列表。如果不传，仅创建或修改域名信息。列表最大支持传入20个</p>
     * @param HTTPServiceExtension $Extension <p>扩展字段，内部包含headers处理等</p>
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

        if (array_key_exists("AccessType",$param) and $param["AccessType"] !== null) {
            $this->AccessType = $param["AccessType"];
        }

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("CustomCname",$param) and $param["CustomCname"] !== null) {
            $this->CustomCname = $param["CustomCname"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("Routes",$param) and $param["Routes"] !== null) {
            $this->Routes = [];
            foreach ($param["Routes"] as $key => $value){
                $obj = new HTTPServiceRouteParam();
                $obj->deserialize($value);
                array_push($this->Routes, $obj);
            }
        }

        if (array_key_exists("Extension",$param) and $param["Extension"] !== null) {
            $this->Extension = new HTTPServiceExtension();
            $this->Extension->deserialize($param["Extension"]);
        }
    }
}
