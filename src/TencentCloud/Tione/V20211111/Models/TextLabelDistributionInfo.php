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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文本标签
 *
 * @method string getTheme() 获取文本分类题目名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTheme(string $Theme) 设置文本分类题目名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getClassLabelList() 获取一级标签分布
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClassLabelList(array $ClassLabelList) 设置一级标签分布
注意：此字段可能返回 null，表示取不到有效值。
 */
class TextLabelDistributionInfo extends AbstractModel
{
    /**
     * @var string 文本分类题目名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Theme;

    /**
     * @var array 一级标签分布
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClassLabelList;

    /**
     * @param string $Theme 文本分类题目名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ClassLabelList 一级标签分布
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
        if (array_key_exists("Theme",$param) and $param["Theme"] !== null) {
            $this->Theme = $param["Theme"];
        }

        if (array_key_exists("ClassLabelList",$param) and $param["ClassLabelList"] !== null) {
            $this->ClassLabelList = [];
            foreach ($param["ClassLabelList"] as $key => $value){
                $obj = new TextLabelDistributionDetailInfoFirstClass();
                $obj->deserialize($value);
                array_push($this->ClassLabelList, $obj);
            }
        }
    }
}
