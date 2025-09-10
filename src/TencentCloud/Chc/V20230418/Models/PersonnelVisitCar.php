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
namespace TencentCloud\Chc\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 人员到访时的车辆信息
 *
 * @method string getCarNumber() 获取车牌号
 * @method void setCarNumber(string $CarNumber) 设置车牌号
 * @method string getDriverName() 获取驾驶人姓名
 * @method void setDriverName(string $DriverName) 设置驾驶人姓名
 * @method string getDriverNumber() 获取驾驶人身份证号
 * @method void setDriverNumber(string $DriverNumber) 设置驾驶人身份证号
 */
class PersonnelVisitCar extends AbstractModel
{
    /**
     * @var string 车牌号
     */
    public $CarNumber;

    /**
     * @var string 驾驶人姓名
     */
    public $DriverName;

    /**
     * @var string 驾驶人身份证号
     */
    public $DriverNumber;

    /**
     * @param string $CarNumber 车牌号
     * @param string $DriverName 驾驶人姓名
     * @param string $DriverNumber 驾驶人身份证号
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
        if (array_key_exists("CarNumber",$param) and $param["CarNumber"] !== null) {
            $this->CarNumber = $param["CarNumber"];
        }

        if (array_key_exists("DriverName",$param) and $param["DriverName"] !== null) {
            $this->DriverName = $param["DriverName"];
        }

        if (array_key_exists("DriverNumber",$param) and $param["DriverNumber"] !== null) {
            $this->DriverNumber = $param["DriverNumber"];
        }
    }
}
