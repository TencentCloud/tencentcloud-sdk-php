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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 结论信息
 *
 * @method BaseInfo getText() 获取段落文本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setText(BaseInfo $Text) 设置段落文本
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getItems() 获取结论详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setItems(array $Items) 设置结论详情
注意：此字段可能返回 null，表示取不到有效值。
 */
class ResultInfo extends AbstractModel
{
    /**
     * @var BaseInfo 段落文本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Text;

    /**
     * @var array 结论详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Items;

    /**
     * @param BaseInfo $Text 段落文本
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Items 结论详情
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
        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = new BaseInfo();
            $this->Text->deserialize($param["Text"]);
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new BaseInfo();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }
    }
}
