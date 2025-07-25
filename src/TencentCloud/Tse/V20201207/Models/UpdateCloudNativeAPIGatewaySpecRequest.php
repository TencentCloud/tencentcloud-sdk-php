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
 * UpdateCloudNativeAPIGatewaySpec请求参数结构体
 *
 * @method string getGatewayId() 获取云原生API网关实例ID。
只支持后付费实例
 * @method void setGatewayId(string $GatewayId) 设置云原生API网关实例ID。
只支持后付费实例
 * @method string getGroupId() 获取网关分组id
 * @method void setGroupId(string $GroupId) 设置网关分组id
 * @method CloudNativeAPIGatewayNodeConfig getNodeConfig() 获取网关分组节点规格配置。
 * @method void setNodeConfig(CloudNativeAPIGatewayNodeConfig $NodeConfig) 设置网关分组节点规格配置。
 */
class UpdateCloudNativeAPIGatewaySpecRequest extends AbstractModel
{
    /**
     * @var string 云原生API网关实例ID。
只支持后付费实例
     */
    public $GatewayId;

    /**
     * @var string 网关分组id
     */
    public $GroupId;

    /**
     * @var CloudNativeAPIGatewayNodeConfig 网关分组节点规格配置。
     */
    public $NodeConfig;

    /**
     * @param string $GatewayId 云原生API网关实例ID。
只支持后付费实例
     * @param string $GroupId 网关分组id
     * @param CloudNativeAPIGatewayNodeConfig $NodeConfig 网关分组节点规格配置。
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

        if (array_key_exists("NodeConfig",$param) and $param["NodeConfig"] !== null) {
            $this->NodeConfig = new CloudNativeAPIGatewayNodeConfig();
            $this->NodeConfig->deserialize($param["NodeConfig"]);
        }
    }
}
