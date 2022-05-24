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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 位置点
 *
 * @method integer getCreateTime() 获取位置点的时间
 * @method void setCreateTime(integer $CreateTime) 设置位置点的时间
 * @method float getLongitude() 获取位置点的经度
 * @method void setLongitude(float $Longitude) 设置位置点的经度
 * @method float getLatitude() 获取位置点的纬度
 * @method void setLatitude(float $Latitude) 设置位置点的纬度
 * @method string getLocationType() 获取位置点的定位类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLocationType(string $LocationType) 设置位置点的定位类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getAccuracy() 获取位置点的精度预估，单位为米
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccuracy(float $Accuracy) 设置位置点的精度预估，单位为米
注意：此字段可能返回 null，表示取不到有效值。
 */
class PositionItem extends AbstractModel
{
    /**
     * @var integer 位置点的时间
     */
    public $CreateTime;

    /**
     * @var float 位置点的经度
     */
    public $Longitude;

    /**
     * @var float 位置点的纬度
     */
    public $Latitude;

    /**
     * @var string 位置点的定位类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LocationType;

    /**
     * @var float 位置点的精度预估，单位为米
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Accuracy;

    /**
     * @param integer $CreateTime 位置点的时间
     * @param float $Longitude 位置点的经度
     * @param float $Latitude 位置点的纬度
     * @param string $LocationType 位置点的定位类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Accuracy 位置点的精度预估，单位为米
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
        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Longitude",$param) and $param["Longitude"] !== null) {
            $this->Longitude = $param["Longitude"];
        }

        if (array_key_exists("Latitude",$param) and $param["Latitude"] !== null) {
            $this->Latitude = $param["Latitude"];
        }

        if (array_key_exists("LocationType",$param) and $param["LocationType"] !== null) {
            $this->LocationType = $param["LocationType"];
        }

        if (array_key_exists("Accuracy",$param) and $param["Accuracy"] !== null) {
            $this->Accuracy = $param["Accuracy"];
        }
    }
}
