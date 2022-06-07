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
 * 图像检测参数信息
 *
 * @method array getPoints() 获取点坐标列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPoints(array $Points) 设置点坐标列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLabels() 获取标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabels(array $Labels) 设置标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFrameType() 获取类别
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFrameType(string $FrameType) 设置类别
注意：此字段可能返回 null，表示取不到有效值。
 */
class DetectionLabelInfo extends AbstractModel
{
    /**
     * @var array 点坐标列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Points;

    /**
     * @var array 标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Labels;

    /**
     * @var string 类别
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FrameType;

    /**
     * @param array $Points 点坐标列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Labels 标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FrameType 类别
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

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = $param["Labels"];
        }

        if (array_key_exists("FrameType",$param) and $param["FrameType"] !== null) {
            $this->FrameType = $param["FrameType"];
        }
    }
}
