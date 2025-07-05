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
 * ModifyUpstreamNodeStatus请求参数结构体
 *
 * @method string getGatewayId() 获取网关实例ID
 * @method void setGatewayId(string $GatewayId) 设置网关实例ID
 * @method string getServiceName() 获取服务名称
 * @method void setServiceName(string $ServiceName) 设置服务名称
 * @method string getHost() 获取访问IP地址或域名
 * @method void setHost(string $Host) 设置访问IP地址或域名
 * @method integer getPort() 获取访问端口
 * @method void setPort(integer $Port) 设置访问端口
 * @method string getStatus() 获取HEALTHY或UNHEALTHY
 * @method void setStatus(string $Status) 设置HEALTHY或UNHEALTHY
 */
class ModifyUpstreamNodeStatusRequest extends AbstractModel
{
    /**
     * @var string 网关实例ID
     */
    public $GatewayId;

    /**
     * @var string 服务名称
     */
    public $ServiceName;

    /**
     * @var string 访问IP地址或域名
     */
    public $Host;

    /**
     * @var integer 访问端口
     */
    public $Port;

    /**
     * @var string HEALTHY或UNHEALTHY
     */
    public $Status;

    /**
     * @param string $GatewayId 网关实例ID
     * @param string $ServiceName 服务名称
     * @param string $Host 访问IP地址或域名
     * @param integer $Port 访问端口
     * @param string $Status HEALTHY或UNHEALTHY
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

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
