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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 围栏绑定的产品信息
 *
 * @method array getDevices() 获取围栏绑定的设备信息
 * @method void setDevices(array $Devices) 设置围栏绑定的设备信息
 * @method string getProductId() 获取围栏绑定的产品Id
 * @method void setProductId(string $ProductId) 设置围栏绑定的产品Id
 */
class FenceBindProductItem extends AbstractModel
{
    /**
     * @var array 围栏绑定的设备信息
     */
    public $Devices;

    /**
     * @var string 围栏绑定的产品Id
     */
    public $ProductId;

    /**
     * @param array $Devices 围栏绑定的设备信息
     * @param string $ProductId 围栏绑定的产品Id
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
        if (array_key_exists("Devices",$param) and $param["Devices"] !== null) {
            $this->Devices = [];
            foreach ($param["Devices"] as $key => $value){
                $obj = new FenceBindDeviceItem();
                $obj->deserialize($value);
                array_push($this->Devices, $obj);
            }
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }
    }
}
