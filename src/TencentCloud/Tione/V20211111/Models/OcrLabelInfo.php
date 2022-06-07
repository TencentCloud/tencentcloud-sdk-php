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
 * OCR场景标签列表
 *
 * @method array getPoints() 获取坐标点围起来的框
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPoints(array $Points) 设置坐标点围起来的框
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFrameType() 获取框的形状：
FRAME_TYPE_RECTANGLE
FRAME_TYPE_POLYGON
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFrameType(string $FrameType) 设置框的形状：
FRAME_TYPE_RECTANGLE
FRAME_TYPE_POLYGON
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKey() 获取智能结构化：key区域对应的内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKey(string $Key) 设置智能结构化：key区域对应的内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKeyId() 获取智能结构化：上述key的ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeyId(string $KeyId) 设置智能结构化：上述key的ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValue() 获取识别：框区域的内容
智能结构化：value区域对应的内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(string $Value) 设置识别：框区域的内容
智能结构化：value区域对应的内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getKeyIdsForValue() 获取智能结构化：value区域所关联的key 区域的keyID的集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeyIdsForValue(array $KeyIdsForValue) 设置智能结构化：value区域所关联的key 区域的keyID的集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDirection() 获取key或者value区域内容的方向：
DIRECTION_VERTICAL
DIRECTION_HORIZONTAL
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDirection(string $Direction) 设置key或者value区域内容的方向：
DIRECTION_VERTICAL
DIRECTION_HORIZONTAL
注意：此字段可能返回 null，表示取不到有效值。
 */
class OcrLabelInfo extends AbstractModel
{
    /**
     * @var array 坐标点围起来的框
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Points;

    /**
     * @var string 框的形状：
FRAME_TYPE_RECTANGLE
FRAME_TYPE_POLYGON
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FrameType;

    /**
     * @var string 智能结构化：key区域对应的内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Key;

    /**
     * @var string 智能结构化：上述key的ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KeyId;

    /**
     * @var string 识别：框区域的内容
智能结构化：value区域对应的内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @var array 智能结构化：value区域所关联的key 区域的keyID的集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KeyIdsForValue;

    /**
     * @var string key或者value区域内容的方向：
DIRECTION_VERTICAL
DIRECTION_HORIZONTAL
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Direction;

    /**
     * @param array $Points 坐标点围起来的框
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FrameType 框的形状：
FRAME_TYPE_RECTANGLE
FRAME_TYPE_POLYGON
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Key 智能结构化：key区域对应的内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KeyId 智能结构化：上述key的ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Value 识别：框区域的内容
智能结构化：value区域对应的内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $KeyIdsForValue 智能结构化：value区域所关联的key 区域的keyID的集合
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Direction key或者value区域内容的方向：
DIRECTION_VERTICAL
DIRECTION_HORIZONTAL
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
        if (array_key_exists("Points",$param) and $param["Points"] !== null) {
            $this->Points = [];
            foreach ($param["Points"] as $key => $value){
                $obj = new PointInfo();
                $obj->deserialize($value);
                array_push($this->Points, $obj);
            }
        }

        if (array_key_exists("FrameType",$param) and $param["FrameType"] !== null) {
            $this->FrameType = $param["FrameType"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("KeyIdsForValue",$param) and $param["KeyIdsForValue"] !== null) {
            $this->KeyIdsForValue = $param["KeyIdsForValue"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }
    }
}
