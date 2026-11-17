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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyNetworkAccessStrategy请求参数结构体
 *
 * @method string getGatewayId() 获取<p>云原生API网关实例ID。</p>
 * @method void setGatewayId(string $GatewayId) 设置<p>云原生API网关实例ID。</p>
 * @method string getGroupId() 获取<p>分组id</p>
 * @method void setGroupId(string $GroupId) 设置<p>分组id</p>
 * @method string getNetworkType() 获取<p>网络类型： </p><ul><li>Open 公网</li><li>Internal 内网    （暂不支持）</li></ul>
 * @method void setNetworkType(string $NetworkType) 设置<p>网络类型： </p><ul><li>Open 公网</li><li>Internal 内网    （暂不支持）</li></ul>
 * @method string getVip() 获取<p>ip地址</p>
 * @method void setVip(string $Vip) 设置<p>ip地址</p>
 * @method NetworkAccessControl getAccessControl() 获取<p>访问控制策略</p>
 * @method void setAccessControl(NetworkAccessControl $AccessControl) 设置<p>访问控制策略</p>
 * @method string getAccessControlSource() 获取<p>GlobalConfig / Custom；不传默认 Custom</p>
 * @method void setAccessControlSource(string $AccessControlSource) 设置<p>GlobalConfig / Custom；不传默认 Custom</p>
 * @method string getGlobalConfigId() 获取<p>全局配置ID</p>
 * @method void setGlobalConfigId(string $GlobalConfigId) 设置<p>全局配置ID</p>
 */
class ModifyNetworkAccessStrategyRequest extends AbstractModel
{
    /**
     * @var string <p>云原生API网关实例ID。</p>
     */
    public $GatewayId;

    /**
     * @var string <p>分组id</p>
     */
    public $GroupId;

    /**
     * @var string <p>网络类型： </p><ul><li>Open 公网</li><li>Internal 内网    （暂不支持）</li></ul>
     */
    public $NetworkType;

    /**
     * @var string <p>ip地址</p>
     */
    public $Vip;

    /**
     * @var NetworkAccessControl <p>访问控制策略</p>
     */
    public $AccessControl;

    /**
     * @var string <p>GlobalConfig / Custom；不传默认 Custom</p>
     */
    public $AccessControlSource;

    /**
     * @var string <p>全局配置ID</p>
     */
    public $GlobalConfigId;

    /**
     * @param string $GatewayId <p>云原生API网关实例ID。</p>
     * @param string $GroupId <p>分组id</p>
     * @param string $NetworkType <p>网络类型： </p><ul><li>Open 公网</li><li>Internal 内网    （暂不支持）</li></ul>
     * @param string $Vip <p>ip地址</p>
     * @param NetworkAccessControl $AccessControl <p>访问控制策略</p>
     * @param string $AccessControlSource <p>GlobalConfig / Custom；不传默认 Custom</p>
     * @param string $GlobalConfigId <p>全局配置ID</p>
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("NetworkType",$param) and $param["NetworkType"] !== null) {
            $this->NetworkType = $param["NetworkType"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("AccessControl",$param) and $param["AccessControl"] !== null) {
            $this->AccessControl = new NetworkAccessControl();
            $this->AccessControl->deserialize($param["AccessControl"]);
        }

        if (array_key_exists("AccessControlSource",$param) and $param["AccessControlSource"] !== null) {
            $this->AccessControlSource = $param["AccessControlSource"];
        }

        if (array_key_exists("GlobalConfigId",$param) and $param["GlobalConfigId"] !== null) {
            $this->GlobalConfigId = $param["GlobalConfigId"];
        }
    }
}
