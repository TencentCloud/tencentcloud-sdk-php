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
 * @method string getPath() 获取路径
 * @method void setPath(string $Path) 设置路径
 * @method string getUpstreamResourceType() 获取上游服务类型。创建时必填，修改时可选填。SCF: 云函数，CBR: 云托管，STATIC_STORE: 静态托管，WEB_SCF: WEB云函数，LH: Lighthouse
 * @method void setUpstreamResourceType(string $UpstreamResourceType) 设置上游服务类型。创建时必填，修改时可选填。SCF: 云函数，CBR: 云托管，STATIC_STORE: 静态托管，WEB_SCF: WEB云函数，LH: Lighthouse
 * @method string getUpstreamResourceName() 获取上游服务名。创建时必填，修改时可选填
 * @method void setUpstreamResourceName(string $UpstreamResourceName) 设置上游服务名。创建时必填，修改时可选填
 * @method HTTPServicePathRewrite getPathRewrite() 获取路径重写
 * @method void setPathRewrite(HTTPServicePathRewrite $PathRewrite) 设置路径重写
 * @method boolean getEnableSafeDomain() 获取是否开启安全域名。默认开启
 * @method void setEnableSafeDomain(boolean $EnableSafeDomain) 设置是否开启安全域名。默认开启
 * @method boolean getEnableAuth() 获取是否开启身份认证。默认关闭
 * @method void setEnableAuth(boolean $EnableAuth) 设置是否开启身份认证。默认关闭
 * @method boolean getEnablePathTransmission() 获取是否开启路径透传。默认关闭
 * @method void setEnablePathTransmission(boolean $EnablePathTransmission) 设置是否开启路径透传。默认关闭
 * @method HTTPServiceRouteQPSPolicy getQPSPolicy() 获取QPS限频策略
 * @method void setQPSPolicy(HTTPServiceRouteQPSPolicy $QPSPolicy) 设置QPS限频策略
 * @method boolean getEnable() 获取是否开启路由
 * @method void setEnable(boolean $Enable) 设置是否开启路由
 */
class HTTPServiceRouteParam extends AbstractModel
{
    /**
     * @var string 路径
     */
    public $Path;

    /**
     * @var string 上游服务类型。创建时必填，修改时可选填。SCF: 云函数，CBR: 云托管，STATIC_STORE: 静态托管，WEB_SCF: WEB云函数，LH: Lighthouse
     */
    public $UpstreamResourceType;

    /**
     * @var string 上游服务名。创建时必填，修改时可选填
     */
    public $UpstreamResourceName;

    /**
     * @var HTTPServicePathRewrite 路径重写
     */
    public $PathRewrite;

    /**
     * @var boolean 是否开启安全域名。默认开启
     */
    public $EnableSafeDomain;

    /**
     * @var boolean 是否开启身份认证。默认关闭
     */
    public $EnableAuth;

    /**
     * @var boolean 是否开启路径透传。默认关闭
     */
    public $EnablePathTransmission;

    /**
     * @var HTTPServiceRouteQPSPolicy QPS限频策略
     */
    public $QPSPolicy;

    /**
     * @var boolean 是否开启路由
     */
    public $Enable;

    /**
     * @param string $Path 路径
     * @param string $UpstreamResourceType 上游服务类型。创建时必填，修改时可选填。SCF: 云函数，CBR: 云托管，STATIC_STORE: 静态托管，WEB_SCF: WEB云函数，LH: Lighthouse
     * @param string $UpstreamResourceName 上游服务名。创建时必填，修改时可选填
     * @param HTTPServicePathRewrite $PathRewrite 路径重写
     * @param boolean $EnableSafeDomain 是否开启安全域名。默认开启
     * @param boolean $EnableAuth 是否开启身份认证。默认关闭
     * @param boolean $EnablePathTransmission 是否开启路径透传。默认关闭
     * @param HTTPServiceRouteQPSPolicy $QPSPolicy QPS限频策略
     * @param boolean $Enable 是否开启路由
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
    }
}
