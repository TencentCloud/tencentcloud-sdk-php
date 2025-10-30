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
 * CreateAutoScalerResourceStrategy请求参数结构体
 *
 * @method string getGatewayId() 获取网关实例ID
 * @method void setGatewayId(string $GatewayId) 设置网关实例ID
 * @method string getStrategyName() 获取策略名称
 * @method void setStrategyName(string $StrategyName) 设置策略名称
 * @method string getDescription() 获取策略描述
 * @method void setDescription(string $Description) 设置策略描述
 * @method CloudNativeAPIGatewayStrategyAutoScalerConfig getConfig() 获取指标伸缩配置
 * @method void setConfig(CloudNativeAPIGatewayStrategyAutoScalerConfig $Config) 设置指标伸缩配置
 * @method CloudNativeAPIGatewayStrategyCronScalerConfig getCronScalerConfig() 获取定时伸缩配置列表
 * @method void setCronScalerConfig(CloudNativeAPIGatewayStrategyCronScalerConfig $CronScalerConfig) 设置定时伸缩配置列表
 * @method integer getMaxReplicas() 获取最大节点数
 * @method void setMaxReplicas(integer $MaxReplicas) 设置最大节点数
 * @method CloudNativeAPIGatewayStrategyCronScalerConfig getCronConfig() 获取定时伸缩配置
 * @method void setCronConfig(CloudNativeAPIGatewayStrategyCronScalerConfig $CronConfig) 设置定时伸缩配置
 */
class CreateAutoScalerResourceStrategyRequest extends AbstractModel
{
    /**
     * @var string 网关实例ID
     */
    public $GatewayId;

    /**
     * @var string 策略名称
     */
    public $StrategyName;

    /**
     * @var string 策略描述
     */
    public $Description;

    /**
     * @var CloudNativeAPIGatewayStrategyAutoScalerConfig 指标伸缩配置
     */
    public $Config;

    /**
     * @var CloudNativeAPIGatewayStrategyCronScalerConfig 定时伸缩配置列表
     * @deprecated
     */
    public $CronScalerConfig;

    /**
     * @var integer 最大节点数
     * @deprecated
     */
    public $MaxReplicas;

    /**
     * @var CloudNativeAPIGatewayStrategyCronScalerConfig 定时伸缩配置
     */
    public $CronConfig;

    /**
     * @param string $GatewayId 网关实例ID
     * @param string $StrategyName 策略名称
     * @param string $Description 策略描述
     * @param CloudNativeAPIGatewayStrategyAutoScalerConfig $Config 指标伸缩配置
     * @param CloudNativeAPIGatewayStrategyCronScalerConfig $CronScalerConfig 定时伸缩配置列表
     * @param integer $MaxReplicas 最大节点数
     * @param CloudNativeAPIGatewayStrategyCronScalerConfig $CronConfig 定时伸缩配置
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

        if (array_key_exists("StrategyName",$param) and $param["StrategyName"] !== null) {
            $this->StrategyName = $param["StrategyName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = new CloudNativeAPIGatewayStrategyAutoScalerConfig();
            $this->Config->deserialize($param["Config"]);
        }

        if (array_key_exists("CronScalerConfig",$param) and $param["CronScalerConfig"] !== null) {
            $this->CronScalerConfig = new CloudNativeAPIGatewayStrategyCronScalerConfig();
            $this->CronScalerConfig->deserialize($param["CronScalerConfig"]);
        }

        if (array_key_exists("MaxReplicas",$param) and $param["MaxReplicas"] !== null) {
            $this->MaxReplicas = $param["MaxReplicas"];
        }

        if (array_key_exists("CronConfig",$param) and $param["CronConfig"] !== null) {
            $this->CronConfig = new CloudNativeAPIGatewayStrategyCronScalerConfig();
            $this->CronConfig->deserialize($param["CronConfig"]);
        }
    }
}
