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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 检索可选配置
 *
 * @method ExpirationAwareness getExpirationAwareness() 获取<p>时效性检索增强配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpirationAwareness(ExpirationAwareness $ExpirationAwareness) 设置<p>时效性检索增强配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method GraphRAG getGraphRag() 获取<p>GraphRAG配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGraphRag(GraphRAG $GraphRag) 设置<p>GraphRAG配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method TableEnhancement getTableEnhancement() 获取<p>表格增强配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableEnhancement(TableEnhancement $TableEnhancement) 设置<p>表格增强配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class RetrievalOption extends AbstractModel
{
    /**
     * @var ExpirationAwareness <p>时效性检索增强配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpirationAwareness;

    /**
     * @var GraphRAG <p>GraphRAG配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GraphRag;

    /**
     * @var TableEnhancement <p>表格增强配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableEnhancement;

    /**
     * @param ExpirationAwareness $ExpirationAwareness <p>时效性检索增强配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param GraphRAG $GraphRag <p>GraphRAG配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param TableEnhancement $TableEnhancement <p>表格增强配置</p>
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
        if (array_key_exists("ExpirationAwareness",$param) and $param["ExpirationAwareness"] !== null) {
            $this->ExpirationAwareness = new ExpirationAwareness();
            $this->ExpirationAwareness->deserialize($param["ExpirationAwareness"]);
        }

        if (array_key_exists("GraphRag",$param) and $param["GraphRag"] !== null) {
            $this->GraphRag = new GraphRAG();
            $this->GraphRag->deserialize($param["GraphRag"]);
        }

        if (array_key_exists("TableEnhancement",$param) and $param["TableEnhancement"] !== null) {
            $this->TableEnhancement = new TableEnhancement();
            $this->TableEnhancement->deserialize($param["TableEnhancement"]);
        }
    }
}
