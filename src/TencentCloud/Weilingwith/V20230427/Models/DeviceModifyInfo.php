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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 设备修改信息入参
 *
 * @method string getWID() 获取设备id
 * @method void setWID(string $WID) 设置设备id
 * @method string getDeviceName() 获取修改后的设备名字
 * @method void setDeviceName(string $DeviceName) 设置修改后的设备名字
 */
class DeviceModifyInfo extends AbstractModel
{
    /**
     * @var string 设备id
     */
    public $WID;

    /**
     * @var string 修改后的设备名字
     */
    public $DeviceName;

    /**
     * @param string $WID 设备id
     * @param string $DeviceName 修改后的设备名字
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
        if (array_key_exists("WID",$param) and $param["WID"] !== null) {
            $this->WID = $param["WID"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }
    }
}
