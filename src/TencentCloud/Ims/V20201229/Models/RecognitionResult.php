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
namespace TencentCloud\Ims\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 识别类型标签结果信息
 *
 * @method string getLabel() 获取当前可能的取值：Scene（图片场景模型）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabel(string $Label) 设置当前可能的取值：Scene（图片场景模型）
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取Label对应模型下的识别标签信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置Label对应模型下的识别标签信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class RecognitionResult extends AbstractModel
{
    /**
     * @var string 当前可能的取值：Scene（图片场景模型）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Label;

    /**
     * @var array Label对应模型下的识别标签信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @param string $Label 当前可能的取值：Scene（图片场景模型）
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags Label对应模型下的识别标签信息
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
        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new RecognitionTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
