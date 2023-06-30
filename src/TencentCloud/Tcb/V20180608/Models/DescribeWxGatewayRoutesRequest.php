<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * DescribeWxGatewayRoutes请求参数结构体
 *
 * @method string getEnvId() 获取环境ID
 * @method void setEnvId(string $EnvId) 设置环境ID
 * @method string getGatewayId() 获取网关名称
 * @method void setGatewayId(string $GatewayId) 设置网关名称
 * @method string getGatewayRouteName() 获取网关路由名称
 * @method void setGatewayRouteName(string $GatewayRouteName) 设置网关路由名称
 * @method string getGatewayVersion() 获取网关版本名
 * @method void setGatewayVersion(string $GatewayVersion) 设置网关版本名
 */
class DescribeWxGatewayRoutesRequest extends AbstractModel
{
    /**
     * @var string 环境ID
     */
    public $EnvId;

    /**
     * @var string 网关名称
     */
    public $GatewayId;

    /**
     * @var string 网关路由名称
     */
    public $GatewayRouteName;

    /**
     * @var string 网关版本名
     */
    public $GatewayVersion;

    /**
     * @param string $EnvId 环境ID
     * @param string $GatewayId 网关名称
     * @param string $GatewayRouteName 网关路由名称
     * @param string $GatewayVersion 网关版本名
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("GatewayRouteName",$param) and $param["GatewayRouteName"] !== null) {
            $this->GatewayRouteName = $param["GatewayRouteName"];
        }

        if (array_key_exists("GatewayVersion",$param) and $param["GatewayVersion"] !== null) {
            $this->GatewayVersion = $param["GatewayVersion"];
        }
    }
}
