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
 * 风险级别详情的矩阵
 *
 * @method integer getId() 获取存储id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置存储id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSensitiveLevelId() 获取分类分级levelID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSensitiveLevelId(integer $SensitiveLevelId) 设置分类分级levelID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSensitiveLevelName() 获取分类分级名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSensitiveLevelName(string $SensitiveLevelName) 设置分类分级名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVulnerabilityLevel() 获取漏洞级别
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVulnerabilityLevel(string $VulnerabilityLevel) 设置漏洞级别
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRiskLevel() 获取风险级别
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskLevel(string $RiskLevel) 设置风险级别
注意：此字段可能返回 null，表示取不到有效值。
 */
class RiskLevelMatrix extends AbstractModel
{
    /**
     * @var integer 存储id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var integer 分类分级levelID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SensitiveLevelId;

    /**
     * @var string 分类分级名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SensitiveLevelName;

    /**
     * @var string 漏洞级别
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VulnerabilityLevel;

    /**
     * @var string 风险级别
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskLevel;

    /**
     * @param integer $Id 存储id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SensitiveLevelId 分类分级levelID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SensitiveLevelName 分类分级名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VulnerabilityLevel 漏洞级别
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RiskLevel 风险级别
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("SensitiveLevelId",$param) and $param["SensitiveLevelId"] !== null) {
            $this->SensitiveLevelId = $param["SensitiveLevelId"];
        }

        if (array_key_exists("SensitiveLevelName",$param) and $param["SensitiveLevelName"] !== null) {
            $this->SensitiveLevelName = $param["SensitiveLevelName"];
        }

        if (array_key_exists("VulnerabilityLevel",$param) and $param["VulnerabilityLevel"] !== null) {
            $this->VulnerabilityLevel = $param["VulnerabilityLevel"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }
    }
}
