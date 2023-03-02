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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 病理详细
 *
 * @method string getPart() 获取部位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPart(string $Part) 设置部位
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHistologicalType() 获取类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHistologicalType(string $HistologicalType) 设置类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHistologicalGrade() 获取等级
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHistologicalGrade(string $HistologicalGrade) 设置等级
注意：此字段可能返回 null，表示取不到有效值。
 */
class PathologicalDiagnosisDetailBlock extends AbstractModel
{
    /**
     * @var string 部位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Part;

    /**
     * @var string 类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HistologicalType;

    /**
     * @var string 等级
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HistologicalGrade;

    /**
     * @param string $Part 部位
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HistologicalType 类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HistologicalGrade 等级
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
        if (array_key_exists("Part",$param) and $param["Part"] !== null) {
            $this->Part = $param["Part"];
        }

        if (array_key_exists("HistologicalType",$param) and $param["HistologicalType"] !== null) {
            $this->HistologicalType = $param["HistologicalType"];
        }

        if (array_key_exists("HistologicalGrade",$param) and $param["HistologicalGrade"] !== null) {
            $this->HistologicalGrade = $param["HistologicalGrade"];
        }
    }
}
