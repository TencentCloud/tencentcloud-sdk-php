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
 * ActivateTWeCallLicense返回参数结构体
 *
 * @method array getDeviceList() 获取设备激活返回数据
 * @method void setDeviceList(array $DeviceList) 设置设备激活返回数据
 * @method array getFailureList() 获取设备激活失败返回数据
 * @method void setFailureList(array $FailureList) 设置设备激活失败返回数据
 * @method array getSuccessList() 获取设备激活成功返回数据
 * @method void setSuccessList(array $SuccessList) 设置设备激活成功返回数据
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class ActivateTWeCallLicenseResponse extends AbstractModel
{
    /**
     * @var array 设备激活返回数据
     * @deprecated
     */
    public $DeviceList;

    /**
     * @var array 设备激活失败返回数据
     */
    public $FailureList;

    /**
     * @var array 设备激活成功返回数据
     */
    public $SuccessList;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $DeviceList 设备激活返回数据
     * @param array $FailureList 设备激活失败返回数据
     * @param array $SuccessList 设备激活成功返回数据
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("DeviceList",$param) and $param["DeviceList"] !== null) {
            $this->DeviceList = [];
            foreach ($param["DeviceList"] as $key => $value){
                $obj = new DeviceActiveResult();
                $obj->deserialize($value);
                array_push($this->DeviceList, $obj);
            }
        }

        if (array_key_exists("FailureList",$param) and $param["FailureList"] !== null) {
            $this->FailureList = [];
            foreach ($param["FailureList"] as $key => $value){
                $obj = new DeviceActiveResult();
                $obj->deserialize($value);
                array_push($this->FailureList, $obj);
            }
        }

        if (array_key_exists("SuccessList",$param) and $param["SuccessList"] !== null) {
            $this->SuccessList = [];
            foreach ($param["SuccessList"] as $key => $value){
                $obj = new DeviceActiveResult();
                $obj->deserialize($value);
                array_push($this->SuccessList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
