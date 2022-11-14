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
namespace TencentCloud\Tms\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 该字段用于返回审核结果明细字段的标签及分数
 *
 * @method string getKeyword() 获取该字段用于返回命中的关键词
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeyword(string $Keyword) 设置该字段用于返回命中的关键词
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubLabel() 获取该字段用于返回子标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubLabel(string $SubLabel) 设置该字段用于返回子标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScore() 获取该字段用于返回子标签对应的分数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScore(integer $Score) 设置该字段用于返回子标签对应的分数
注意：此字段可能返回 null，表示取不到有效值。
 */
class Tag extends AbstractModel
{
    /**
     * @var string 该字段用于返回命中的关键词
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Keyword;

    /**
     * @var string 该字段用于返回子标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubLabel;

    /**
     * @var integer 该字段用于返回子标签对应的分数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Score;

    /**
     * @param string $Keyword 该字段用于返回命中的关键词
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubLabel 该字段用于返回子标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Score 该字段用于返回子标签对应的分数
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
        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("SubLabel",$param) and $param["SubLabel"] !== null) {
            $this->SubLabel = $param["SubLabel"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }
    }
}
