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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询客户端公网信息
 *
 * @method string getGatewayId() 获取网关实例ID
 * @method void setGatewayId(string $GatewayId) 设置网关实例ID
 * @method string getGroupId() 获取网关分组ID
 * @method void setGroupId(string $GroupId) 设置网关分组ID
 * @method CloudNativeAPIGatewayConfig getPublicNetwork() 获取客户端公网信息
 * @method void setPublicNetwork(CloudNativeAPIGatewayConfig $PublicNetwork) 设置客户端公网信息
 */
class DescribePublicNetworkResult extends AbstractModel
{
    /**
     * @var string 网关实例ID
     */
    public $GatewayId;

    /**
     * @var string 网关分组ID
     */
    public $GroupId;

    /**
     * @var CloudNativeAPIGatewayConfig 客户端公网信息
     */
    public $PublicNetwork;

    /**
     * @param string $GatewayId 网关实例ID
     * @param string $GroupId 网关分组ID
     * @param CloudNativeAPIGatewayConfig $PublicNetwork 客户端公网信息
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

        if (array_key_exists("PublicNetwork",$param) and $param["PublicNetwork"] !== null) {
            $this->PublicNetwork = new CloudNativeAPIGatewayConfig();
            $this->PublicNetwork->deserialize($param["PublicNetwork"]);
        }
    }
}
