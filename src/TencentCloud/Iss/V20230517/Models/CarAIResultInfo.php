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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 车辆车牌识别结果信息
 *
 * @method string getSerial() 获取车系
 * @method void setSerial(string $Serial) 设置车系
 * @method string getBrand() 获取车辆品牌
 * @method void setBrand(string $Brand) 设置车辆品牌
 * @method string getType() 获取车辆类型
 * @method void setType(string $Type) 设置车辆类型
 * @method string getColor() 获取车辆颜色
 * @method void setColor(string $Color) 设置车辆颜色
 * @method integer getConfidence() 获取置信度，0 - 100
 * @method void setConfidence(integer $Confidence) 设置置信度，0 - 100
 * @method integer getYear() 获取年份，识别不出年份时返回0
 * @method void setYear(integer $Year) 设置年份，识别不出年份时返回0
 * @method PlateContent getPlateContent() 获取车牌信息
 * @method void setPlateContent(PlateContent $PlateContent) 设置车牌信息
 * @method Location getLocation() 获取截图中坐标信息
 * @method void setLocation(Location $Location) 设置截图中坐标信息
 */
class CarAIResultInfo extends AbstractModel
{
    /**
     * @var string 车系
     */
    public $Serial;

    /**
     * @var string 车辆品牌
     */
    public $Brand;

    /**
     * @var string 车辆类型
     */
    public $Type;

    /**
     * @var string 车辆颜色
     */
    public $Color;

    /**
     * @var integer 置信度，0 - 100
     */
    public $Confidence;

    /**
     * @var integer 年份，识别不出年份时返回0
     */
    public $Year;

    /**
     * @var PlateContent 车牌信息
     */
    public $PlateContent;

    /**
     * @var Location 截图中坐标信息
     */
    public $Location;

    /**
     * @param string $Serial 车系
     * @param string $Brand 车辆品牌
     * @param string $Type 车辆类型
     * @param string $Color 车辆颜色
     * @param integer $Confidence 置信度，0 - 100
     * @param integer $Year 年份，识别不出年份时返回0
     * @param PlateContent $PlateContent 车牌信息
     * @param Location $Location 截图中坐标信息
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
        if (array_key_exists("Serial",$param) and $param["Serial"] !== null) {
            $this->Serial = $param["Serial"];
        }

        if (array_key_exists("Brand",$param) and $param["Brand"] !== null) {
            $this->Brand = $param["Brand"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Color",$param) and $param["Color"] !== null) {
            $this->Color = $param["Color"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("Year",$param) and $param["Year"] !== null) {
            $this->Year = $param["Year"];
        }

        if (array_key_exists("PlateContent",$param) and $param["PlateContent"] !== null) {
            $this->PlateContent = new PlateContent();
            $this->PlateContent->deserialize($param["PlateContent"]);
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = new Location();
            $this->Location->deserialize($param["Location"]);
        }
    }
}
