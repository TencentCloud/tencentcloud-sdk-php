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
 * 生成的建议的风险等级矩阵
 *
 * @method array getRiskLevelMatrix() 获取矩阵
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskLevelMatrix(array $RiskLevelMatrix) 设置矩阵
注意：此字段可能返回 null，表示取不到有效值。
 */
class SuggestRiskLevelMatrix extends AbstractModel
{
    /**
     * @var array 矩阵
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskLevelMatrix;

    /**
     * @param array $RiskLevelMatrix 矩阵
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
        if (array_key_exists("RiskLevelMatrix",$param) and $param["RiskLevelMatrix"] !== null) {
            $this->RiskLevelMatrix = [];
            foreach ($param["RiskLevelMatrix"] as $key => $value){
                $obj = new SuggestRiskLevelMatrixItem();
                $obj->deserialize($value);
                array_push($this->RiskLevelMatrix, $obj);
            }
        }
    }
}
