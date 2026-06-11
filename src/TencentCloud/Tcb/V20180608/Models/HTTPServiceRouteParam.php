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
 * 创建或修改HTTP访问服务输入的路由信息，修改HTTP访问服务路由信息时对应字段不传参数表示不用修改。
 *
 * @method string getPath() 获取<p>路径</p>
 * @method void setPath(string $Path) 设置<p>路径</p>
 * @method string getUpstreamResourceType() 获取<p>上游服务类型。创建时必填，修改时可选填</p><p>枚举值：</p><ul><li>SCF： 云函数</li><li>CBR： 云托管</li><li>STATIC_STORE： 静态托管</li><li>WEB_SCF： web云函数</li><li>LH： Lighthouse</li></ul>
 * @method void setUpstreamResourceType(string $UpstreamResourceType) 设置<p>上游服务类型。创建时必填，修改时可选填</p><p>枚举值：</p><ul><li>SCF： 云函数</li><li>CBR： 云托管</li><li>STATIC_STORE： 静态托管</li><li>WEB_SCF： web云函数</li><li>LH： Lighthouse</li></ul>
 * @method string getUpstreamResourceName() 获取<p>上游服务名。创建时必填，修改时可选填</p>
 * @method void setUpstreamResourceName(string $UpstreamResourceName) 设置<p>上游服务名。创建时必填，修改时可选填</p>
 * @method HTTPServicePathRewrite getPathRewrite() 获取<p>路径重写</p>
 * @method void setPathRewrite(HTTPServicePathRewrite $PathRewrite) 设置<p>路径重写</p>
 * @method boolean getEnableSafeDomain() 获取<p>是否开启安全域名。默认开启</p>
 * @method void setEnableSafeDomain(boolean $EnableSafeDomain) 设置<p>是否开启安全域名。默认开启</p>
 * @method boolean getEnableAuth() 获取<p>是否开启身份认证。默认关闭</p>
 * @method void setEnableAuth(boolean $EnableAuth) 设置<p>是否开启身份认证。默认关闭</p>
 * @method boolean getEnablePathTransmission() 获取<p>是否开启路径透传。默认关闭</p>
 * @method void setEnablePathTransmission(boolean $EnablePathTransmission) 设置<p>是否开启路径透传。默认关闭</p>
 * @method HTTPServiceRouteQPSPolicy getQPSPolicy() 获取<p>QPS限频策略</p>
 * @method void setQPSPolicy(HTTPServiceRouteQPSPolicy $QPSPolicy) 设置<p>QPS限频策略</p>
 * @method boolean getEnable() 获取<p>是否开启路由</p>
 * @method void setEnable(boolean $Enable) 设置<p>是否开启路由</p>
 * @method HTTPServiceExtension getExtension() 获取<p>扩展字段，内部包含headers处理等</p>
 * @method void setExtension(HTTPServiceExtension $Extension) 设置<p>扩展字段，内部包含headers处理等</p>
 */
class HTTPServiceRouteParam extends AbstractModel
{
    /**
     * @var string <p>路径</p>
     */
    public $Path;

    /**
     * @var string <p>上游服务类型。创建时必填，修改时可选填</p><p>枚举值：</p><ul><li>SCF： 云函数</li><li>CBR： 云托管</li><li>STATIC_STORE： 静态托管</li><li>WEB_SCF： web云函数</li><li>LH： Lighthouse</li></ul>
     */
    public $UpstreamResourceType;

    /**
     * @var string <p>上游服务名。创建时必填，修改时可选填</p>
     */
    public $UpstreamResourceName;

    /**
     * @var HTTPServicePathRewrite <p>路径重写</p>
     */
    public $PathRewrite;

    /**
     * @var boolean <p>是否开启安全域名。默认开启</p>
     */
    public $EnableSafeDomain;

    /**
     * @var boolean <p>是否开启身份认证。默认关闭</p>
     */
    public $EnableAuth;

    /**
     * @var boolean <p>是否开启路径透传。默认关闭</p>
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
     * @param string $Path <p>路径</p>
     * @param string $UpstreamResourceType <p>上游服务类型。创建时必填，修改时可选填</p><p>枚举值：</p><ul><li>SCF： 云函数</li><li>CBR： 云托管</li><li>STATIC_STORE： 静态托管</li><li>WEB_SCF： web云函数</li><li>LH： Lighthouse</li></ul>
     * @param string $UpstreamResourceName <p>上游服务名。创建时必填，修改时可选填</p>
     * @param HTTPServicePathRewrite $PathRewrite <p>路径重写</p>
     * @param boolean $EnableSafeDomain <p>是否开启安全域名。默认开启</p>
     * @param boolean $EnableAuth <p>是否开启身份认证。默认关闭</p>
     * @param boolean $EnablePathTransmission <p>是否开启路径透传。默认关闭</p>
     * @param HTTPServiceRouteQPSPolicy $QPSPolicy <p>QPS限频策略</p>
     * @param boolean $Enable <p>是否开启路由</p>
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
        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("UpstreamResourceType",$param) and $param["UpstreamResourceType"] !== null) {
            $this->UpstreamResourceType = $param["UpstreamResourceType"];
        }

        if (array_key_exists("UpstreamResourceName",$param) and $param["UpstreamResourceName"] !== null) {
            $this->UpstreamResourceName = $param["UpstreamResourceName"];
        }

        if (array_key_exists("PathRewrite",$param) and $param["PathRewrite"] !== null) {
            $this->PathRewrite = new HTTPServicePathRewrite();
            $this->PathRewrite->deserialize($param["PathRewrite"]);
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
    }
}
