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
namespace TencentCloud\Vrs\V20200824\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 训练文本列表
 *
 * @method array getTrainingTextList() 获取训练文本列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTrainingTextList(array $TrainingTextList) 设置训练文本列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class TrainingTexts extends AbstractModel
{
    /**
     * @var array 训练文本列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TrainingTextList;

    /**
     * @param array $TrainingTextList 训练文本列表
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
        if (array_key_exists("TrainingTextList",$param) and $param["TrainingTextList"] !== null) {
            $this->TrainingTextList = [];
            foreach ($param["TrainingTextList"] as $key => $value){
                $obj = new TrainingText();
                $obj->deserialize($value);
                array_push($this->TrainingTextList, $obj);
            }
        }
    }
}
