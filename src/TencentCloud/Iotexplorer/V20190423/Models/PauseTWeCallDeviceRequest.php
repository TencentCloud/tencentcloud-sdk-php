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
 * PauseTWeCallDevice请求参数结构体
 *
 * @method array getDeviceList() 获取设备列表
 * @method void setDeviceList(array $DeviceList) 设置设备列表
 */
class PauseTWeCallDeviceRequest extends AbstractModel
{
    /**
     * @var array 设备列表
     */
    public $DeviceList;

    /**
     * @param array $DeviceList 设备列表
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
                $obj = new TWeCallInfo();
                $obj->deserialize($value);
                array_push($this->DeviceList, $obj);
            }
        }
    }
}
