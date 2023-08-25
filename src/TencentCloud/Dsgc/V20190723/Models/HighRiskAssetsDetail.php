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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 高风险资产详情信息
 *
 * @method string getInstanceId() 获取实例id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置实例id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssetsName() 获取资产对象名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetsName(string $AssetsName) 设置资产对象名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHighRiskCount() 获取高风险个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHighRiskCount(integer $HighRiskCount) 设置高风险个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRiskType() 获取风险类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskType(string $RiskType) 设置风险类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalRiskCount() 获取总的风险个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalRiskCount(integer $TotalRiskCount) 设置总的风险个数
注意：此字段可能返回 null，表示取不到有效值。
 */
class HighRiskAssetsDetail extends AbstractModel
{
    /**
     * @var string 实例id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string 资产对象名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetsName;

    /**
     * @var integer 高风险个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HighRiskCount;

    /**
     * @var string 风险类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskType;

    /**
     * @var integer 总的风险个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalRiskCount;

    /**
     * @param string $InstanceId 实例id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssetsName 资产对象名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $HighRiskCount 高风险个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RiskType 风险类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalRiskCount 总的风险个数
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("AssetsName",$param) and $param["AssetsName"] !== null) {
            $this->AssetsName = $param["AssetsName"];
        }

        if (array_key_exists("HighRiskCount",$param) and $param["HighRiskCount"] !== null) {
            $this->HighRiskCount = $param["HighRiskCount"];
        }

        if (array_key_exists("RiskType",$param) and $param["RiskType"] !== null) {
            $this->RiskType = $param["RiskType"];
        }

        if (array_key_exists("TotalRiskCount",$param) and $param["TotalRiskCount"] !== null) {
            $this->TotalRiskCount = $param["TotalRiskCount"];
        }
    }
}
