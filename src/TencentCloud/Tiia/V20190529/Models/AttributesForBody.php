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
namespace TencentCloud\Tiia\V20190529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 属性检测到的人体
 *
 * @method ImageRect getRect() 获取人体框。当不开启人体检测时，内部参数默认为0。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRect(ImageRect $Rect) 设置人体框。当不开启人体检测时，内部参数默认为0。
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getDetectConfidence() 获取人体检测置信度。取值0-1之间，当不开启人体检测开关时默认为0。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDetectConfidence(float $DetectConfidence) 设置人体检测置信度。取值0-1之间，当不开启人体检测开关时默认为0。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAttributes() 获取属性信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAttributes(array $Attributes) 设置属性信息。
注意：此字段可能返回 null，表示取不到有效值。
 */
class AttributesForBody extends AbstractModel
{
    /**
     * @var ImageRect 人体框。当不开启人体检测时，内部参数默认为0。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Rect;

    /**
     * @var float 人体检测置信度。取值0-1之间，当不开启人体检测开关时默认为0。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DetectConfidence;

    /**
     * @var array 属性信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Attributes;

    /**
     * @param ImageRect $Rect 人体框。当不开启人体检测时，内部参数默认为0。
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $DetectConfidence 人体检测置信度。取值0-1之间，当不开启人体检测开关时默认为0。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Attributes 属性信息。
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
        if (array_key_exists("Rect",$param) and $param["Rect"] !== null) {
            $this->Rect = new ImageRect();
            $this->Rect->deserialize($param["Rect"]);
        }

        if (array_key_exists("DetectConfidence",$param) and $param["DetectConfidence"] !== null) {
            $this->DetectConfidence = $param["DetectConfidence"];
        }

        if (array_key_exists("Attributes",$param) and $param["Attributes"] !== null) {
            $this->Attributes = [];
            foreach ($param["Attributes"] as $key => $value){
                $obj = new BodyAttributes();
                $obj->deserialize($value);
                array_push($this->Attributes, $obj);
            }
        }
    }
}
