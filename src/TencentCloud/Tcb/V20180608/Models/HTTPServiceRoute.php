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
 * 查询HTTP访问服务输出路由信息
 *
 * @method string getPath() 获取<p>路径</p>
 * @method void setPath(string $Path) 设置<p>路径</p>
 * @method HTTPServicePathRewrite getPathRewrite() 获取<p>路径重写规则</p>
 * @method void setPathRewrite(HTTPServicePathRewrite $PathRewrite) 设置<p>路径重写规则</p>
 * @method string getUpstreamResourceType() 获取<p>上游服务类型。SCF: 云函数，CBR: 云托管，STATIC_STORE: 静态托管，WEB_SCF: WEB云函数，LH: Lighthouse</p>
 * @method void setUpstreamResourceType(string $UpstreamResourceType) 设置<p>上游服务类型。SCF: 云函数，CBR: 云托管，STATIC_STORE: 静态托管，WEB_SCF: WEB云函数，LH: Lighthouse</p>
 * @method string getUpstreamResourceName() 获取<p>上游服务名</p>
 * @method void setUpstreamResourceName(string $UpstreamResourceName) 设置<p>上游服务名</p>
 * @method boolean getEnableSafeDomain() 获取<p>是否开启安全域名</p>
 * @method void setEnableSafeDomain(boolean $EnableSafeDomain) 设置<p>是否开启安全域名</p>
 * @method boolean getEnableAuth() 获取<p>是否开启身份认证</p>
 * @method void setEnableAuth(boolean $EnableAuth) 设置<p>是否开启身份认证</p>
 * @method boolean getEnablePathTransmission() 获取<p>是否开启路径透传</p>
 * @method void setEnablePathTransmission(boolean $EnablePathTransmission) 设置<p>是否开启路径透传</p>
 * @method HTTPServiceRouteQPSPolicy getQPSPolicy() 获取<p>QPS限频策略</p>
 * @method void setQPSPolicy(HTTPServiceRouteQPSPolicy $QPSPolicy) 设置<p>QPS限频策略</p>
 * @method boolean getEnable() 获取<p>是否开启路由</p>
 * @method void setEnable(boolean $Enable) 设置<p>是否开启路由</p>
 * @method HTTPServiceExtension getExtension() 获取<p>扩展字段，内部包含headers处理等</p>
 * @method void setExtension(HTTPServiceExtension $Extension) 设置<p>扩展字段，内部包含headers处理等</p>
 * @method string getCreateTime() 获取<p>路由创建时间，格式  YYYY-MM-DDTHH:mm:ss±HH:mm，时区为 UTC+8</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>路由创建时间，格式  YYYY-MM-DDTHH:mm:ss±HH:mm，时区为 UTC+8</p>
 * @method string getUpdateTime() 获取<p>路由更新时间，格式  YYYY-MM-DDTHH:mm:ss±HH:mm，时区为 UTC+8</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>路由更新时间，格式  YYYY-MM-DDTHH:mm:ss±HH:mm，时区为 UTC+8</p>
 */
class HTTPServiceRoute extends AbstractModel
{
    /**
     * @var string <p>路径</p>
     */
    public $Path;

    /**
     * @var HTTPServicePathRewrite <p>路径重写规则</p>
     */
    public $PathRewrite;

    /**
     * @var string <p>上游服务类型。SCF: 云函数，CBR: 云托管，STATIC_STORE: 静态托管，WEB_SCF: WEB云函数，LH: Lighthouse</p>
     */
    public $UpstreamResourceType;

    /**
     * @var string <p>上游服务名</p>
     */
    public $UpstreamResourceName;

    /**
     * @var boolean <p>是否开启安全域名</p>
     */
    public $EnableSafeDomain;

    /**
     * @var boolean <p>是否开启身份认证</p>
     */
    public $EnableAuth;

    /**
     * @var boolean <p>是否开启路径透传</p>
     */
    public $EnablePathTransmission;

    /**
     * @var HTTPServiceRouteQPSPolicy <p>QPS限频策略</p>
     */
    public $QPSPolicy;

    /**
     * @var boolean <p>是否开启路由</p>
     */
    public $Enable;

    /**
     * @var HTTPServiceExtension <p>扩展字段，内部包含headers处理等</p>
     */
    public $Extension;

    /**
     * @var string <p>路由创建时间，格式  YYYY-MM-DDTHH:mm:ss±HH:mm，时区为 UTC+8</p>
     */
    public $CreateTime;

    /**
     * @var string <p>路由更新时间，格式  YYYY-MM-DDTHH:mm:ss±HH:mm，时区为 UTC+8</p>
     */
    public $UpdateTime;

    /**
     * @param string $Path <p>路径</p>
     * @param HTTPServicePathRewrite $PathRewrite <p>路径重写规则</p>
     * @param string $UpstreamResourceType <p>上游服务类型。SCF: 云函数，CBR: 云托管，STATIC_STORE: 静态托管，WEB_SCF: WEB云函数，LH: Lighthouse</p>
     * @param string $UpstreamResourceName <p>上游服务名</p>
     * @param boolean $EnableSafeDomain <p>是否开启安全域名</p>
     * @param boolean $EnableAuth <p>是否开启身份认证</p>
     * @param boolean $EnablePathTransmission <p>是否开启路径透传</p>
     * @param HTTPServiceRouteQPSPolicy $QPSPolicy <p>QPS限频策略</p>
     * @param boolean $Enable <p>是否开启路由</p>
     * @param HTTPServiceExtension $Extension <p>扩展字段，内部包含headers处理等</p>
     * @param string $CreateTime <p>路由创建时间，格式  YYYY-MM-DDTHH:mm:ss±HH:mm，时区为 UTC+8</p>
     * @param string $UpdateTime <p>路由更新时间，格式  YYYY-MM-DDTHH:mm:ss±HH:mm，时区为 UTC+8</p>
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
        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("PathRewrite",$param) and $param["PathRewrite"] !== null) {
            $this->PathRewrite = new HTTPServicePathRewrite();
            $this->PathRewrite->deserialize($param["PathRewrite"]);
        }

        if (array_key_exists("UpstreamResourceType",$param) and $param["UpstreamResourceType"] !== null) {
            $this->UpstreamResourceType = $param["UpstreamResourceType"];
        }

        if (array_key_exists("UpstreamResourceName",$param) and $param["UpstreamResourceName"] !== null) {
            $this->UpstreamResourceName = $param["UpstreamResourceName"];
        }

        if (array_key_exists("EnableSafeDomain",$param) and $param["EnableSafeDomain"] !== null) {
            $this->EnableSafeDomain = $param["EnableSafeDomain"];
        }

        if (array_key_exists("EnableAuth",$param) and $param["EnableAuth"] !== null) {
            $this->EnableAuth = $param["EnableAuth"];
        }

        if (array_key_exists("EnablePathTransmission",$param) and $param["EnablePathTransmission"] !== null) {
            $this->EnablePathTransmission = $param["EnablePathTransmission"];
        }

        if (array_key_exists("QPSPolicy",$param) and $param["QPSPolicy"] !== null) {
            $this->QPSPolicy = new HTTPServiceRouteQPSPolicy();
            $this->QPSPolicy->deserialize($param["QPSPolicy"]);
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
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
