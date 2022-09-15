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
 * DescribeGatewayBindDevices返回参数结构体
 *
 * @method integer getTotalCount() 获取子设备总数
 * @method void setTotalCount(integer $TotalCount) 设置子设备总数
 * @method array getDevices() 获取子设备信息
 * @method void setDevices(array $Devices) 设置子设备信息
 * @method string getProductName() 获取子设备所属的产品名
 * @method void setProductName(string $ProductName) 设置子设备所属的产品名
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeGatewayBindDevicesResponse extends AbstractModel
{
    /**
     * @var integer 子设备总数
     */
    public $TotalCount;

    /**
     * @var array 子设备信息
     */
    public $Devices;

    /**
     * @var string 子设备所属的产品名
     */
    public $ProductName;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 子设备总数
     * @param array $Devices 子设备信息
     * @param string $ProductName 子设备所属的产品名
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("Devices",$param) and $param["Devices"] !== null) {
            $this->Devices = [];
            foreach ($param["Devices"] as $key => $value){
                $obj = new BindDeviceInfo();
                $obj->deserialize($value);
                array_push($this->Devices, $obj);
            }
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
