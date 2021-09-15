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
namespace TencentCloud\Af\V20200226\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 借贷反欺返回结果出参中的多模型返回结果
 *
 * @method string getModelId() 获取模型ID序号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelId(string $ModelId) 设置模型ID序号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModelScore() 获取模型ID序号对应的评分结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelScore(string $ModelScore) 设置模型ID序号对应的评分结果
注意：此字段可能返回 null，表示取不到有效值。
 */
class FinanceOtherModelScores extends AbstractModel
{
    /**
     * @var string 模型ID序号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelId;

    /**
     * @var string 模型ID序号对应的评分结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelScore;

    /**
     * @param string $ModelId 模型ID序号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModelScore 模型ID序号对应的评分结果
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
        if (array_key_exists("ModelId",$param) and $param["ModelId"] !== null) {
            $this->ModelId = $param["ModelId"];
        }

        if (array_key_exists("ModelScore",$param) and $param["ModelScore"] !== null) {
            $this->ModelScore = $param["ModelScore"];
        }
    }
}
