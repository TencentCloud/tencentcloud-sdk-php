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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeIotDevice请求参数结构体
 *
 * @method integer getDeviceId() 获取设备id，传0值表示此参数无效
 * @method void setDeviceId(integer $DeviceId) 设置设备id，传0值表示此参数无效
 * @method string getProductID() 获取无
 * @method void setProductID(string $ProductID) 设置无
 * @method string getDeviceName() 获取无
 * @method void setDeviceName(string $DeviceName) 设置无
 */
class DescribeIotDeviceRequest extends AbstractModel
{
    /**
     * @var integer 设备id，传0值表示此参数无效
     */
    public $DeviceId;

    /**
     * @var string 无
     */
    public $ProductID;

    /**
     * @var string 无
     */
    public $DeviceName;

    /**
     * @param integer $DeviceId 设备id，传0值表示此参数无效
     * @param string $ProductID 无
     * @param string $DeviceName 无
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
        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("ProductID",$param) and $param["ProductID"] !== null) {
            $this->ProductID = $param["ProductID"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }
    }
}
