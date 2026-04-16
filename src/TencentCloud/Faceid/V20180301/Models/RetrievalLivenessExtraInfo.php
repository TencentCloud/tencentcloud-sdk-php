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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 模板检索详细信息
 *
 * @method string getHitGroup() 获取<p>命中的模板类型，其中Common-公共库；Auto-自动聚类库；Owner-自建模板库</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHitGroup(string $HitGroup) 设置<p>命中的模板类型，其中Common-公共库；Auto-自动聚类库；Owner-自建模板库</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getSimilarityScore() 获取<p>请求图像与命中攻击模板的相似度，相似度取值范围[0,2]，取值越小表示命中攻击模板的概率越高。默认阈值为0.6，当SimilarityScore≥0.6时判断为正常，SimilarityScore&lt;0.6是判断为攻击。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSimilarityScore(float $SimilarityScore) 设置<p>请求图像与命中攻击模板的相似度，相似度取值范围[0,2]，取值越小表示命中攻击模板的概率越高。默认阈值为0.6，当SimilarityScore≥0.6时判断为正常，SimilarityScore&lt;0.6是判断为攻击。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHitTemplate() 获取<p>命中的模板id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHitTemplate(string $HitTemplate) 设置<p>命中的模板id</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class RetrievalLivenessExtraInfo extends AbstractModel
{
    /**
     * @var string <p>命中的模板类型，其中Common-公共库；Auto-自动聚类库；Owner-自建模板库</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HitGroup;

    /**
     * @var float <p>请求图像与命中攻击模板的相似度，相似度取值范围[0,2]，取值越小表示命中攻击模板的概率越高。默认阈值为0.6，当SimilarityScore≥0.6时判断为正常，SimilarityScore&lt;0.6是判断为攻击。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SimilarityScore;

    /**
     * @var string <p>命中的模板id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HitTemplate;

    /**
     * @param string $HitGroup <p>命中的模板类型，其中Common-公共库；Auto-自动聚类库；Owner-自建模板库</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $SimilarityScore <p>请求图像与命中攻击模板的相似度，相似度取值范围[0,2]，取值越小表示命中攻击模板的概率越高。默认阈值为0.6，当SimilarityScore≥0.6时判断为正常，SimilarityScore&lt;0.6是判断为攻击。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HitTemplate <p>命中的模板id</p>
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
