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
 * ModifyConsoleNetwork请求参数结构体
 *
 * @method string getGatewayId() 获取云原生API网关实例ID。
 * @method void setGatewayId(string $GatewayId) 设置云原生API网关实例ID。
 * @method string getNetworkType() 获取网络类型：
- Open 公网
- Internal 内网（暂不支持）
 * @method void setNetworkType(string $NetworkType) 设置网络类型：
- Open 公网
- Internal 内网（暂不支持）
 * @method string getOperate() 获取开启Konga网络，不填时默认为Open
- Open，开启
- Close，关闭
 * @method void setOperate(string $Operate) 设置开启Konga网络，不填时默认为Open
- Open，开启
- Close，关闭
 * @method NetworkAccessControl getAccessControl() 获取访问控制策略
 * @method void setAccessControl(NetworkAccessControl $AccessControl) 设置访问控制策略
 */
class ModifyConsoleNetworkRequest extends AbstractModel
{
    /**
     * @var string 云原生API网关实例ID。
     */
    public $GatewayId;

    /**
     * @var string 网络类型：
- Open 公网
- Internal 内网（暂不支持）
     */
    public $NetworkType;

    /**
     * @var string 开启Konga网络，不填时默认为Open
- Open，开启
- Close，关闭
     */
    public $Operate;

    /**
     * @var NetworkAccessControl 访问控制策略
     */
    public $AccessControl;

    /**
     * @param string $GatewayId 云原生API网关实例ID。
     * @param string $NetworkType 网络类型：
- Open 公网
- Internal 内网（暂不支持）
     * @param string $Operate 开启Konga网络，不填时默认为Open
- Open，开启
- Close，关闭
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

        if (array_key_exists("NetworkType",$param) and $param["NetworkType"] !== null) {
            $this->NetworkType = $param["NetworkType"];
        }

        if (array_key_exists("Operate",$param) and $param["Operate"] !== null) {
            $this->Operate = $param["Operate"];
        }

        if (array_key_exists("AccessControl",$param) and $param["AccessControl"] !== null) {
            $this->AccessControl = new NetworkAccessControl();
            $this->AccessControl->deserialize($param["AccessControl"]);
        }
    }
}
