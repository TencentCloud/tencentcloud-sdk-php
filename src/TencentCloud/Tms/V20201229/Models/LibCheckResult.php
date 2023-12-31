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
 * 库检测结果
 *
 * @method string getLibId() 获取库ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLibId(string $LibId) 设置库ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLibName() 获取库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLibName(string $LibName) 设置库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLibType() 获取库类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLibType(integer $LibType) 设置库类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKeyword() 获取命中的关键词
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeyword(string $Keyword) 设置命中的关键词
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPositions() 获取命中的关键词在送审文本的位置，可能存在多个位置，每个位置显示开始位置和结束位置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPositions(array $Positions) 设置命中的关键词在送审文本的位置，可能存在多个位置，每个位置显示开始位置和结束位置
注意：此字段可能返回 null，表示取不到有效值。
 */
class LibCheckResult extends AbstractModel
{
    /**
     * @var string 库ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LibId;

    /**
     * @var string 库名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LibName;

    /**
     * @var integer 库类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LibType;

    /**
     * @var string 命中的关键词
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Keyword;

    /**
     * @var array 命中的关键词在送审文本的位置，可能存在多个位置，每个位置显示开始位置和结束位置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Positions;

    /**
     * @param string $LibId 库ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LibName 库名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LibType 库类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Keyword 命中的关键词
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Positions 命中的关键词在送审文本的位置，可能存在多个位置，每个位置显示开始位置和结束位置
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
        if (array_key_exists("LibId",$param) and $param["LibId"] !== null) {
            $this->LibId = $param["LibId"];
        }

        if (array_key_exists("LibName",$param) and $param["LibName"] !== null) {
            $this->LibName = $param["LibName"];
        }

        if (array_key_exists("LibType",$param) and $param["LibType"] !== null) {
            $this->LibType = $param["LibType"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("Positions",$param) and $param["Positions"] !== null) {
            $this->Positions = [];
            foreach ($param["Positions"] as $key => $value){
                $obj = new Positions();
                $obj->deserialize($value);
                array_push($this->Positions, $obj);
            }
        }
    }
}
