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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 设备流量信息
 *
 * @method array getNetDetails() 获取流量数据点
 * @method void setNetDetails(array $NetDetails) 设置流量数据点
 * @method string getDeviceId() 获取设备ID
 * @method void setDeviceId(string $DeviceId) 设置设备ID
 * @method float getMaxValue() 获取流量最大值（单位：bytes）
 * @method void setMaxValue(float $MaxValue) 设置流量最大值（单位：bytes）
 * @method float getAvgValue() 获取流量平均值（单位：bytes）
 * @method void setAvgValue(float $AvgValue) 设置流量平均值（单位：bytes）
 * @method float getTotalValue() 获取流量总值（单位：bytes）
 * @method void setTotalValue(float $TotalValue) 设置流量总值（单位：bytes）
 */
class FlowDetails extends AbstractModel
{
    /**
     * @var array 流量数据点
     */
    public $NetDetails;

    /**
     * @var string 设备ID
     */
    public $DeviceId;

    /**
     * @var float 流量最大值（单位：bytes）
     */
    public $MaxValue;

    /**
     * @var float 流量平均值（单位：bytes）
     */
    public $AvgValue;

    /**
     * @var float 流量总值（单位：bytes）
     */
    public $TotalValue;

    /**
     * @param array $NetDetails 流量数据点
     * @param string $DeviceId 设备ID
     * @param float $MaxValue 流量最大值（单位：bytes）
     * @param float $AvgValue 流量平均值（单位：bytes）
     * @param float $TotalValue 流量总值（单位：bytes）
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
        if (array_key_exists("NetDetails",$param) and $param["NetDetails"] !== null) {
            $this->NetDetails = [];
            foreach ($param["NetDetails"] as $key => $value){
                $obj = new NetDetails();
                $obj->deserialize($value);
                array_push($this->NetDetails, $obj);
            }
        }

        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("MaxValue",$param) and $param["MaxValue"] !== null) {
            $this->MaxValue = $param["MaxValue"];
        }

        if (array_key_exists("AvgValue",$param) and $param["AvgValue"] !== null) {
            $this->AvgValue = $param["AvgValue"];
        }

        if (array_key_exists("TotalValue",$param) and $param["TotalValue"] !== null) {
            $this->TotalValue = $param["TotalValue"];
        }
    }
}
