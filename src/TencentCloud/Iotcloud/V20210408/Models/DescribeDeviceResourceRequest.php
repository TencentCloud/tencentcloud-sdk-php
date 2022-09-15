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
namespace TencentCloud\Iotcloud\V20210408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDeviceResource请求参数结构体
 *
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 * @method string getProductID() 获取产品ID
 * @method void setProductID(string $ProductID) 设置产品ID
 * @method string getName() 获取具体的设备资源名称
 * @method void setName(string $Name) 设置具体的设备资源名称
 */
class DescribeDeviceResourceRequest extends AbstractModel
{
    /**
     * @var string 设备名称
     */
    public $DeviceName;

    /**
     * @var string 产品ID
     */
    public $ProductID;

    /**
     * @var string 具体的设备资源名称
     */
    public $Name;

    /**
     * @param string $DeviceName 设备名称
     * @param string $ProductID 产品ID
     * @param string $Name 具体的设备资源名称
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
        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("ProductID",$param) and $param["ProductID"] !== null) {
            $this->ProductID = $param["ProductID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
