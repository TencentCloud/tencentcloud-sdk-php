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
 * GetDeviceLocationHistory请求参数结构体
 *
 * @method string getProductId() 获取产品Id
 * @method void setProductId(string $ProductId) 设置产品Id
 * @method string getDeviceName() 获取设备名
 * @method void setDeviceName(string $DeviceName) 设置设备名
 * @method integer getStartTime() 获取查询起始时间，Unix时间，单位为毫秒
 * @method void setStartTime(integer $StartTime) 设置查询起始时间，Unix时间，单位为毫秒
 * @method integer getEndTime() 获取查询结束时间，Unix时间，单位为毫秒
 * @method void setEndTime(integer $EndTime) 设置查询结束时间，Unix时间，单位为毫秒
 * @method integer getCoordinateType() 获取坐标类型
 * @method void setCoordinateType(integer $CoordinateType) 设置坐标类型
 */
class GetDeviceLocationHistoryRequest extends AbstractModel
{
    /**
     * @var string 产品Id
     */
    public $ProductId;

    /**
     * @var string 设备名
     */
    public $DeviceName;

    /**
     * @var integer 查询起始时间，Unix时间，单位为毫秒
     */
    public $StartTime;

    /**
     * @var integer 查询结束时间，Unix时间，单位为毫秒
     */
    public $EndTime;

    /**
     * @var integer 坐标类型
     */
    public $CoordinateType;

    /**
     * @param string $ProductId 产品Id
     * @param string $DeviceName 设备名
     * @param integer $StartTime 查询起始时间，Unix时间，单位为毫秒
     * @param integer $EndTime 查询结束时间，Unix时间，单位为毫秒
     * @param integer $CoordinateType 坐标类型
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("CoordinateType",$param) and $param["CoordinateType"] !== null) {
            $this->CoordinateType = $param["CoordinateType"];
        }
    }
}
