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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 模版检索详细信息
 *
 * @method string getHitGroup() 获取命中的模版类型，其中Common-公共库；Auto-自动聚类库；Owner-自建模版库
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHitGroup(string $HitGroup) 设置命中的模版类型，其中Common-公共库；Auto-自动聚类库；Owner-自建模版库
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getSimilarityScore() 获取命中的相似度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSimilarityScore(float $SimilarityScore) 设置命中的相似度
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHitTemplate() 获取命中的模板id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHitTemplate(string $HitTemplate) 设置命中的模板id
注意：此字段可能返回 null，表示取不到有效值。
 */
class RetrievalLivenessExtraInfo extends AbstractModel
{
    /**
     * @var string 命中的模版类型，其中Common-公共库；Auto-自动聚类库；Owner-自建模版库
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HitGroup;

    /**
     * @var float 命中的相似度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SimilarityScore;

    /**
     * @var string 命中的模板id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HitTemplate;

    /**
     * @param string $HitGroup 命中的模版类型，其中Common-公共库；Auto-自动聚类库；Owner-自建模版库
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $SimilarityScore 命中的相似度
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HitTemplate 命中的模板id
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
        if (array_key_exists("HitGroup",$param) and $param["HitGroup"] !== null) {
            $this->HitGroup = $param["HitGroup"];
        }

        if (array_key_exists("SimilarityScore",$param) and $param["SimilarityScore"] !== null) {
            $this->SimilarityScore = $param["SimilarityScore"];
        }

        if (array_key_exists("HitTemplate",$param) and $param["HitTemplate"] !== null) {
            $this->HitTemplate = $param["HitTemplate"];
        }
    }
}
