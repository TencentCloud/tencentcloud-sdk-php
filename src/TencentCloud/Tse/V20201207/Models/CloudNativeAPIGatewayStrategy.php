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
 * 网关实例策略
 *
 * @method string getStrategyId() 获取策略ID
 * @method void setStrategyId(string $StrategyId) 设置策略ID
 * @method string getStrategyName() 获取策略名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStrategyName(string $StrategyName) 设置策略名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifyTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifyTime(string $ModifyTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取策略描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置策略描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method CloudNativeAPIGatewayStrategyAutoScalerConfig getConfig() 获取弹性伸缩配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfig(CloudNativeAPIGatewayStrategyAutoScalerConfig $Config) 设置弹性伸缩配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGatewayId() 获取网关实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGatewayId(string $GatewayId) 设置网关实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method CloudNativeAPIGatewayStrategyCronScalerConfig getCronConfig() 获取定时伸缩配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCronConfig(CloudNativeAPIGatewayStrategyCronScalerConfig $CronConfig) 设置定时伸缩配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxReplicas() 获取最大节点数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxReplicas(integer $MaxReplicas) 设置最大节点数
注意：此字段可能返回 null，表示取不到有效值。
 */
class CloudNativeAPIGatewayStrategy extends AbstractModel
{
    /**
     * @var string 策略ID
     */
    public $StrategyId;

    /**
     * @var string 策略名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StrategyName;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifyTime;

    /**
     * @var string 策略描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var CloudNativeAPIGatewayStrategyAutoScalerConfig 弹性伸缩配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Config;

    /**
     * @var string 网关实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GatewayId;

    /**
     * @var CloudNativeAPIGatewayStrategyCronScalerConfig 定时伸缩配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CronConfig;

    /**
     * @var integer 最大节点数
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $MaxReplicas;

    /**
     * @param string $StrategyId 策略ID
     * @param string $StrategyName 策略名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifyTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 策略描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param CloudNativeAPIGatewayStrategyAutoScalerConfig $Config 弹性伸缩配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GatewayId 网关实例ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param CloudNativeAPIGatewayStrategyCronScalerConfig $CronConfig 定时伸缩配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxReplicas 最大节点数
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
            $this->StrategyId = $param["StrategyId"];
        }

        if (array_key_exists("StrategyName",$param) and $param["StrategyName"] !== null) {
            $this->StrategyName = $param["StrategyName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = new CloudNativeAPIGatewayStrategyAutoScalerConfig();
            $this->Config->deserialize($param["Config"]);
        }

        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("CronConfig",$param) and $param["CronConfig"] !== null) {
            $this->CronConfig = new CloudNativeAPIGatewayStrategyCronScalerConfig();
            $this->CronConfig->deserialize($param["CronConfig"]);
        }

        if (array_key_exists("MaxReplicas",$param) and $param["MaxReplicas"] !== null) {
            $this->MaxReplicas = $param["MaxReplicas"];
        }
    }
}
