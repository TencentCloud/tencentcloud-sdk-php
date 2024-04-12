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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 检索配置
 *
 * @method string getType() 获取知识来源 doc：文档，qa：问答  taskflow：业务流程，search：搜索增强
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置知识来源 doc：文档，qa：问答  taskflow：业务流程，search：搜索增强
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getReplyFlexibility() 获取问答-回复灵活度 1：已采纳答案直接回复 2：已采纳润色后回复
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReplyFlexibility(integer $ReplyFlexibility) 设置问答-回复灵活度 1：已采纳答案直接回复 2：已采纳润色后回复
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getUseSearchEngine() 获取搜索增强-搜索引擎状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUseSearchEngine(boolean $UseSearchEngine) 设置搜索增强-搜索引擎状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getShowSearchEngine() 获取是否显示搜索引擎检索状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShowSearchEngine(boolean $ShowSearchEngine) 设置是否显示搜索引擎检索状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsEnabled() 获取知识来源，是否选择
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsEnabled(boolean $IsEnabled) 设置知识来源，是否选择
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getQaTopN() 获取问答最大召回数量, 默认2，限制5
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQaTopN(integer $QaTopN) 设置问答最大召回数量, 默认2，限制5
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDocTopN() 获取文档最大召回数量, 默认3，限制5
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDocTopN(integer $DocTopN) 设置文档最大召回数量, 默认3，限制5
注意：此字段可能返回 null，表示取不到有效值。
 */
class KnowledgeQaSearch extends AbstractModel
{
    /**
     * @var string 知识来源 doc：文档，qa：问答  taskflow：业务流程，search：搜索增强
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var integer 问答-回复灵活度 1：已采纳答案直接回复 2：已采纳润色后回复
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReplyFlexibility;

    /**
     * @var boolean 搜索增强-搜索引擎状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UseSearchEngine;

    /**
     * @var boolean 是否显示搜索引擎检索状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShowSearchEngine;

    /**
     * @var boolean 知识来源，是否选择
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsEnabled;

    /**
     * @var integer 问答最大召回数量, 默认2，限制5
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QaTopN;

    /**
     * @var integer 文档最大召回数量, 默认3，限制5
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DocTopN;

    /**
     * @param string $Type 知识来源 doc：文档，qa：问答  taskflow：业务流程，search：搜索增强
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ReplyFlexibility 问答-回复灵活度 1：已采纳答案直接回复 2：已采纳润色后回复
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $UseSearchEngine 搜索增强-搜索引擎状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ShowSearchEngine 是否显示搜索引擎检索状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsEnabled 知识来源，是否选择
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $QaTopN 问答最大召回数量, 默认2，限制5
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DocTopN 文档最大召回数量, 默认3，限制5
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ReplyFlexibility",$param) and $param["ReplyFlexibility"] !== null) {
            $this->ReplyFlexibility = $param["ReplyFlexibility"];
        }

        if (array_key_exists("UseSearchEngine",$param) and $param["UseSearchEngine"] !== null) {
            $this->UseSearchEngine = $param["UseSearchEngine"];
        }

        if (array_key_exists("ShowSearchEngine",$param) and $param["ShowSearchEngine"] !== null) {
            $this->ShowSearchEngine = $param["ShowSearchEngine"];
        }

        if (array_key_exists("IsEnabled",$param) and $param["IsEnabled"] !== null) {
            $this->IsEnabled = $param["IsEnabled"];
        }

        if (array_key_exists("QaTopN",$param) and $param["QaTopN"] !== null) {
            $this->QaTopN = $param["QaTopN"];
        }

        if (array_key_exists("DocTopN",$param) and $param["DocTopN"] !== null) {
            $this->DocTopN = $param["DocTopN"];
        }
    }
}
