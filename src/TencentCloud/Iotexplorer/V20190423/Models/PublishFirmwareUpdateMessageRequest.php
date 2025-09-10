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
 * PublishFirmwareUpdateMessage请求参数结构体
 *
 * @method string getProductID() 获取产品 ID。
 * @method void setProductID(string $ProductID) 设置产品 ID。
 * @method string getDeviceName() 获取设备名称。
 * @method void setDeviceName(string $DeviceName) 设置设备名称。
 * @method string getFwType() 获取固件类型
 * @method void setFwType(string $FwType) 设置固件类型
 */
class PublishFirmwareUpdateMessageRequest extends AbstractModel
{
    /**
     * @var string 产品 ID。
     */
    public $ProductID;

    /**
     * @var string 设备名称。
     */
    public $DeviceName;

    /**
     * @var string 固件类型
     */
    public $FwType;

    /**
     * @param string $ProductID 产品 ID。
     * @param string $DeviceName 设备名称。
     * @param string $FwType 固件类型
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
        if (array_key_exists("ProductID",$param) and $param["ProductID"] !== null) {
            $this->ProductID = $param["ProductID"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("FwType",$param) and $param["FwType"] !== null) {
            $this->FwType = $param["FwType"];
        }
    }
}
