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
 * @method string getGatewayId() 获取云原生API网关实例ID。
 * @method void setGatewayId(string $GatewayId) 设置云原生API网关实例ID。
 * @method string getGroupId() 获取分组id
 * @method void setGroupId(string $GroupId) 设置分组id
 * @method string getNetworkType() 获取网络类型： 
- Open 公网
- Internal 内网	（暂不支持）
 * @method void setNetworkType(string $NetworkType) 设置网络类型： 
- Open 公网
- Internal 内网	（暂不支持）
 * @method string getVip() 获取ip地址
 * @method void setVip(string $Vip) 设置ip地址
 * @method NetworkAccessControl getAccessControl() 获取访问控制策略
 * @method void setAccessControl(NetworkAccessControl $AccessControl) 设置访问控制策略
 */
class ModifyNetworkAccessStrategyRequest extends AbstractModel
{
    /**
     * @var string 云原生API网关实例ID。
     */
    public $GatewayId;

    /**
     * @var string 分组id
     */
    public $GroupId;

    /**
     * @var string 网络类型： 
- Open 公网
- Internal 内网	（暂不支持）
     */
    public $NetworkType;

    /**
     * @var string ip地址
     */
    public $Vip;

    /**
     * @var NetworkAccessControl 访问控制策略
     */
    public $AccessControl;

    /**
     * @param string $GatewayId 云原生API网关实例ID。
     * @param string $GroupId 分组id
     * @param string $NetworkType 网络类型： 
- Open 公网
- Internal 内网	（暂不支持）
     * @param string $Vip ip地址
     * @param NetworkAccessControl $AccessControl 访问控制策略
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
    }
}
