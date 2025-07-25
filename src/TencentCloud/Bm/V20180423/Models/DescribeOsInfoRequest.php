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
namespace TencentCloud\Bm\V20180423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeOsInfo请求参数结构体
 *
 * @method string getDeviceClassCode() 获取设备类型代号。 可以从DescribeDeviceClass查询设备类型列表
 * @method void setDeviceClassCode(string $DeviceClassCode) 设置设备类型代号。 可以从DescribeDeviceClass查询设备类型列表
 */
class DescribeOsInfoRequest extends AbstractModel
{
    /**
     * @var string 设备类型代号。 可以从DescribeDeviceClass查询设备类型列表
     */
    public $DeviceClassCode;

    /**
     * @param string $DeviceClassCode 设备类型代号。 可以从DescribeDeviceClass查询设备类型列表
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
        if (array_key_exists("DeviceClassCode",$param) and $param["DeviceClassCode"] !== null) {
            $this->DeviceClassCode = $param["DeviceClassCode"];
        }
    }
}
