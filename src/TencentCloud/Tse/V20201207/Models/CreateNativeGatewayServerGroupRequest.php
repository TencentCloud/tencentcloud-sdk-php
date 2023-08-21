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
 * CreateNativeGatewayServerGroup请求参数结构体
 *
 * @method string getGatewayId() 获取网关实例id。
只支持后付费实例
 * @method void setGatewayId(string $GatewayId) 设置网关实例id。
只支持后付费实例
 * @method string getName() 获取网关分组名
 * @method void setName(string $Name) 设置网关分组名
 * @method CloudNativeAPIGatewayNodeConfig getNodeConfig() 获取节点配置
 * @method void setNodeConfig(CloudNativeAPIGatewayNodeConfig $NodeConfig) 设置节点配置
 * @method string getSubnetId() 获取子网id
 * @method void setSubnetId(string $SubnetId) 设置子网id
 * @method string getDescription() 获取描述信息
 * @method void setDescription(string $Description) 设置描述信息
 * @method integer getInternetMaxBandwidthOut() 获取公网带宽信息
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) 设置公网带宽信息
 * @method InternetConfig getInternetConfig() 获取公网配置。
 * @method void setInternetConfig(InternetConfig $InternetConfig) 设置公网配置。
 */
class CreateNativeGatewayServerGroupRequest extends AbstractModel
{
    /**
     * @var string 网关实例id。
只支持后付费实例
     */
    public $GatewayId;

    /**
     * @var string 网关分组名
     */
    public $Name;

    /**
     * @var CloudNativeAPIGatewayNodeConfig 节点配置
     */
    public $NodeConfig;

    /**
     * @var string 子网id
     */
    public $SubnetId;

    /**
     * @var string 描述信息
     */
    public $Description;

    /**
     * @var integer 公网带宽信息
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var InternetConfig 公网配置。
     */
    public $InternetConfig;

    /**
     * @param string $GatewayId 网关实例id。
只支持后付费实例
     * @param string $Name 网关分组名
     * @param CloudNativeAPIGatewayNodeConfig $NodeConfig 节点配置
     * @param string $SubnetId 子网id
     * @param string $Description 描述信息
     * @param integer $InternetMaxBandwidthOut 公网带宽信息
     * @param InternetConfig $InternetConfig 公网配置。
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("NodeConfig",$param) and $param["NodeConfig"] !== null) {
            $this->NodeConfig = new CloudNativeAPIGatewayNodeConfig();
            $this->NodeConfig->deserialize($param["NodeConfig"]);
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }

        if (array_key_exists("InternetConfig",$param) and $param["InternetConfig"] !== null) {
            $this->InternetConfig = new InternetConfig();
            $this->InternetConfig->deserialize($param["InternetConfig"]);
        }
    }
}
