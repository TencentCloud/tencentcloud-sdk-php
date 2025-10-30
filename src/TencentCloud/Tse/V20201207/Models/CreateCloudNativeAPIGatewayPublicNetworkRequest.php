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
 * CreateCloudNativeAPIGatewayPublicNetwork请求参数结构体
 *
 * @method string getGatewayId() 获取云原生API网关实例ID。
 * @method void setGatewayId(string $GatewayId) 设置云原生API网关实例ID。
 * @method string getGroupId() 获取分组id。
 * @method void setGroupId(string $GroupId) 设置分组id。
 * @method InternetConfig getInternetConfig() 获取公网负载均衡配置。
 * @method void setInternetConfig(InternetConfig $InternetConfig) 设置公网负载均衡配置。
 */
class CreateCloudNativeAPIGatewayPublicNetworkRequest extends AbstractModel
{
    /**
     * @var string 云原生API网关实例ID。
     */
    public $GatewayId;

    /**
     * @var string 分组id。
     */
    public $GroupId;

    /**
     * @var InternetConfig 公网负载均衡配置。
     */
    public $InternetConfig;

    /**
     * @param string $GatewayId 云原生API网关实例ID。
     * @param string $GroupId 分组id。
     * @param InternetConfig $InternetConfig 公网负载均衡配置。
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

        if (array_key_exists("InternetConfig",$param) and $param["InternetConfig"] !== null) {
            $this->InternetConfig = new InternetConfig();
            $this->InternetConfig->deserialize($param["InternetConfig"]);
        }
    }
}
