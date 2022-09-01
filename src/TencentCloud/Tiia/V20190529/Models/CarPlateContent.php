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
 * 车牌信息
 *
 * @method string getPlate() 获取车牌信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPlate(string $Plate) 设置车牌信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getColor() 获取车牌颜色。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColor(string $Color) 设置车牌颜色。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取车牌类型，包含：0普通蓝牌，1双层黄牌，2单层黄牌，3新能源车牌，4使馆车牌，5领馆车牌，6澳门车牌，7香港车牌，8警用车牌，9教练车牌，10武警车牌，11军用车牌   -2遮挡污损模糊车牌/异常   其他无牌
注意：
此字段可能返回 null，表示取不到有效值。
此字段结果遮挡污损模糊车牌/异常：包含PlateStatus参数的“遮挡污损模糊车牌”，针对车牌异常，建议参考此字段，更全面
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置车牌类型，包含：0普通蓝牌，1双层黄牌，2单层黄牌，3新能源车牌，4使馆车牌，5领馆车牌，6澳门车牌，7香港车牌，8警用车牌，9教练车牌，10武警车牌，11军用车牌   -2遮挡污损模糊车牌/异常   其他无牌
注意：
此字段可能返回 null，表示取不到有效值。
此字段结果遮挡污损模糊车牌/异常：包含PlateStatus参数的“遮挡污损模糊车牌”，针对车牌异常，建议参考此字段，更全面
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPlateLocation() 获取车牌在图片中的坐标信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPlateLocation(array $PlateLocation) 设置车牌在图片中的坐标信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPlateStatus() 获取判断车牌是否遮挡：“遮挡污损模糊车牌”和"正常车牌"。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPlateStatus(string $PlateStatus) 设置判断车牌是否遮挡：“遮挡污损模糊车牌”和"正常车牌"。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPlateStatusConfidence() 获取车牌遮挡的置信度，0-100。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPlateStatusConfidence(integer $PlateStatusConfidence) 设置车牌遮挡的置信度，0-100。
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getPlateAngle() 获取车牌角度。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPlateAngle(float $PlateAngle) 设置车牌角度。
注意：此字段可能返回 null，表示取不到有效值。
 */
class CarPlateContent extends AbstractModel
{
    /**
     * @var string 车牌信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Plate;

    /**
     * @var string 车牌颜色。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Color;

    /**
     * @var string 车牌类型，包含：0普通蓝牌，1双层黄牌，2单层黄牌，3新能源车牌，4使馆车牌，5领馆车牌，6澳门车牌，7香港车牌，8警用车牌，9教练车牌，10武警车牌，11军用车牌   -2遮挡污损模糊车牌/异常   其他无牌
注意：
此字段可能返回 null，表示取不到有效值。
此字段结果遮挡污损模糊车牌/异常：包含PlateStatus参数的“遮挡污损模糊车牌”，针对车牌异常，建议参考此字段，更全面
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var array 车牌在图片中的坐标信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PlateLocation;

    /**
     * @var string 判断车牌是否遮挡：“遮挡污损模糊车牌”和"正常车牌"。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PlateStatus;

    /**
     * @var integer 车牌遮挡的置信度，0-100。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PlateStatusConfidence;

    /**
     * @var float 车牌角度。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PlateAngle;

    /**
     * @param string $Plate 车牌信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Color 车牌颜色。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 车牌类型，包含：0普通蓝牌，1双层黄牌，2单层黄牌，3新能源车牌，4使馆车牌，5领馆车牌，6澳门车牌，7香港车牌，8警用车牌，9教练车牌，10武警车牌，11军用车牌   -2遮挡污损模糊车牌/异常   其他无牌
注意：
此字段可能返回 null，表示取不到有效值。
此字段结果遮挡污损模糊车牌/异常：包含PlateStatus参数的“遮挡污损模糊车牌”，针对车牌异常，建议参考此字段，更全面
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PlateLocation 车牌在图片中的坐标信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PlateStatus 判断车牌是否遮挡：“遮挡污损模糊车牌”和"正常车牌"。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PlateStatusConfidence 车牌遮挡的置信度，0-100。
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $PlateAngle 车牌角度。
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
        if (array_key_exists("Plate",$param) and $param["Plate"] !== null) {
            $this->Plate = $param["Plate"];
        }

        if (array_key_exists("Color",$param) and $param["Color"] !== null) {
            $this->Color = $param["Color"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("PlateLocation",$param) and $param["PlateLocation"] !== null) {
            $this->PlateLocation = [];
            foreach ($param["PlateLocation"] as $key => $value){
                $obj = new Coord();
                $obj->deserialize($value);
                array_push($this->PlateLocation, $obj);
            }
        }

        if (array_key_exists("PlateStatus",$param) and $param["PlateStatus"] !== null) {
            $this->PlateStatus = $param["PlateStatus"];
        }

        if (array_key_exists("PlateStatusConfidence",$param) and $param["PlateStatusConfidence"] !== null) {
            $this->PlateStatusConfidence = $param["PlateStatusConfidence"];
        }

        if (array_key_exists("PlateAngle",$param) and $param["PlateAngle"] !== null) {
            $this->PlateAngle = $param["PlateAngle"];
        }
    }
}
