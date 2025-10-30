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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 拖拉机行驶证副页正面的识别结果
 *
 * @method string getPlateNo() 获取号牌号码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPlateNo(string $PlateNo) 设置号牌号码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAllowNum() 获取准乘人数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAllowNum(string $AllowNum) 设置准乘人数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCombineHarvesterQuality() 获取联合收割机质量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCombineHarvesterQuality(string $CombineHarvesterQuality) 设置联合收割机质量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTractorMinUsageWeight() 获取拖拉机最小使用质量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTractorMinUsageWeight(string $TractorMinUsageWeight) 设置拖拉机最小使用质量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTractorMaxAllowLoadCapacity() 获取拖拉机最大允许载质量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTractorMaxAllowLoadCapacity(string $TractorMaxAllowLoadCapacity) 设置拖拉机最大允许载质量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExternalSize() 获取外廓尺寸
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExternalSize(string $ExternalSize) 设置外廓尺寸
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRecord() 获取检验记录
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecord(string $Record) 设置检验记录
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVehicleType() 获取类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVehicleType(string $VehicleType) 设置类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAddress() 获取住址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddress(string $Address) 设置住址
注意：此字段可能返回 null，表示取不到有效值。
 */
class TextTractorVehicleBack extends AbstractModel
{
    /**
     * @var string 号牌号码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PlateNo;

    /**
     * @var string 准乘人数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AllowNum;

    /**
     * @var string 联合收割机质量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CombineHarvesterQuality;

    /**
     * @var string 拖拉机最小使用质量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TractorMinUsageWeight;

    /**
     * @var string 拖拉机最大允许载质量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TractorMaxAllowLoadCapacity;

    /**
     * @var string 外廓尺寸
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExternalSize;

    /**
     * @var string 检验记录
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Record;

    /**
     * @var string 类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VehicleType;

    /**
     * @var string 住址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Address;

    /**
     * @param string $PlateNo 号牌号码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AllowNum 准乘人数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CombineHarvesterQuality 联合收割机质量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TractorMinUsageWeight 拖拉机最小使用质量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TractorMaxAllowLoadCapacity 拖拉机最大允许载质量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExternalSize 外廓尺寸
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Record 检验记录
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VehicleType 类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Address 住址
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
        if (array_key_exists("PlateNo",$param) and $param["PlateNo"] !== null) {
            $this->PlateNo = $param["PlateNo"];
        }

        if (array_key_exists("AllowNum",$param) and $param["AllowNum"] !== null) {
            $this->AllowNum = $param["AllowNum"];
        }

        if (array_key_exists("CombineHarvesterQuality",$param) and $param["CombineHarvesterQuality"] !== null) {
            $this->CombineHarvesterQuality = $param["CombineHarvesterQuality"];
        }

        if (array_key_exists("TractorMinUsageWeight",$param) and $param["TractorMinUsageWeight"] !== null) {
            $this->TractorMinUsageWeight = $param["TractorMinUsageWeight"];
        }

        if (array_key_exists("TractorMaxAllowLoadCapacity",$param) and $param["TractorMaxAllowLoadCapacity"] !== null) {
            $this->TractorMaxAllowLoadCapacity = $param["TractorMaxAllowLoadCapacity"];
        }

        if (array_key_exists("ExternalSize",$param) and $param["ExternalSize"] !== null) {
            $this->ExternalSize = $param["ExternalSize"];
        }

        if (array_key_exists("Record",$param) and $param["Record"] !== null) {
            $this->Record = $param["Record"];
        }

        if (array_key_exists("VehicleType",$param) and $param["VehicleType"] !== null) {
            $this->VehicleType = $param["VehicleType"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }
    }
}
