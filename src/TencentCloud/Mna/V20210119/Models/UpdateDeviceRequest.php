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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateDevice请求参数结构体
 *
 * @method string getDeviceId() 获取设备id
 * @method void setDeviceId(string $DeviceId) 设置设备id
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 * @method string getRemark() 获取设备备注
 * @method void setRemark(string $Remark) 设置设备备注
 * @method array getUpdateNetInfo() 获取更新设备网络信息
 * @method void setUpdateNetInfo(array $UpdateNetInfo) 设置更新设备网络信息
 */
class UpdateDeviceRequest extends AbstractModel
{
    /**
     * @var string 设备id
     */
    public $DeviceId;

    /**
     * @var string 设备名称
     */
    public $DeviceName;

    /**
     * @var string 设备备注
     */
    public $Remark;

    /**
     * @var array 更新设备网络信息
     */
    public $UpdateNetInfo;

    /**
     * @param string $DeviceId 设备id
     * @param string $DeviceName 设备名称
     * @param string $Remark 设备备注
     * @param array $UpdateNetInfo 更新设备网络信息
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

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("UpdateNetInfo",$param) and $param["UpdateNetInfo"] !== null) {
            $this->UpdateNetInfo = [];
            foreach ($param["UpdateNetInfo"] as $key => $value){
                $obj = new UpdateNetInfo();
                $obj->deserialize($value);
                array_push($this->UpdateNetInfo, $obj);
            }
        }
    }
}
