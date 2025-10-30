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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 知识库高级设置
 *
 * @method string getRerankModel() 获取重排序模型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRerankModel(string $RerankModel) 设置重排序模型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRerankRecallNum() 获取召回数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRerankRecallNum(integer $RerankRecallNum) 设置召回数量
注意：此字段可能返回 null，表示取不到有效值。
 */
class KnowledgeAdvancedConfig extends AbstractModel
{
    /**
     * @var string 重排序模型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RerankModel;

    /**
     * @var integer 召回数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RerankRecallNum;

    /**
     * @param string $RerankModel 重排序模型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RerankRecallNum 召回数量
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
        if (array_key_exists("RerankModel",$param) and $param["RerankModel"] !== null) {
            $this->RerankModel = $param["RerankModel"];
        }

        if (array_key_exists("RerankRecallNum",$param) and $param["RerankRecallNum"] !== null) {
            $this->RerankRecallNum = $param["RerankRecallNum"];
        }
    }
}
