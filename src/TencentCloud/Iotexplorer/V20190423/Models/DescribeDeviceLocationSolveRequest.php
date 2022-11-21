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
 * DescribeDeviceLocationSolve请求参数结构体
 *
 * @method string getProductId() 获取产品ID
 * @method void setProductId(string $ProductId) 设置产品ID
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 * @method string getLocationType() 获取定位解析类型，wifi或GNSSNavigation
 * @method void setLocationType(string $LocationType) 设置定位解析类型，wifi或GNSSNavigation
 * @method string getGNSSNavigation() 获取LoRaEdge卫星导航电文
 * @method void setGNSSNavigation(string $GNSSNavigation) 设置LoRaEdge卫星导航电文
 * @method array getWiFiInfo() 获取wifi信息
 * @method void setWiFiInfo(array $WiFiInfo) 设置wifi信息
 */
class DescribeDeviceLocationSolveRequest extends AbstractModel
{
    /**
     * @var string 产品ID
     */
    public $ProductId;

    /**
     * @var string 设备名称
     */
    public $DeviceName;

    /**
     * @var string 定位解析类型，wifi或GNSSNavigation
     */
    public $LocationType;

    /**
     * @var string LoRaEdge卫星导航电文
     */
    public $GNSSNavigation;

    /**
     * @var array wifi信息
     */
    public $WiFiInfo;

    /**
     * @param string $ProductId 产品ID
     * @param string $DeviceName 设备名称
     * @param string $LocationType 定位解析类型，wifi或GNSSNavigation
     * @param string $GNSSNavigation LoRaEdge卫星导航电文
     * @param array $WiFiInfo wifi信息
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("LocationType",$param) and $param["LocationType"] !== null) {
            $this->LocationType = $param["LocationType"];
        }

        if (array_key_exists("GNSSNavigation",$param) and $param["GNSSNavigation"] !== null) {
            $this->GNSSNavigation = $param["GNSSNavigation"];
        }

        if (array_key_exists("WiFiInfo",$param) and $param["WiFiInfo"] !== null) {
            $this->WiFiInfo = [];
            foreach ($param["WiFiInfo"] as $key => $value){
                $obj = new WifiInfo();
                $obj->deserialize($value);
                array_push($this->WiFiInfo, $obj);
            }
        }
    }
}
