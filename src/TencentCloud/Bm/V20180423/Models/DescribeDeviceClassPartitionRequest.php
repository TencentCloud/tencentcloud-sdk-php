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
namespace TencentCloud\Bm\V20180423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getDeviceClassCode() 获取设备类型代号。代号通过接口[查询设备型号(DescribeDeviceClass)](https://cloud.tencent.com/document/api/386/32911)查询。标准机型需要传入此参数。虽是可选参数，但DeviceClassCode和InstanceId参数，必须要填写一个。
 * @method void setDeviceClassCode(string $DeviceClassCode) 设置设备类型代号。代号通过接口[查询设备型号(DescribeDeviceClass)](https://cloud.tencent.com/document/api/386/32911)查询。标准机型需要传入此参数。虽是可选参数，但DeviceClassCode和InstanceId参数，必须要填写一个。
 * @method string getInstanceId() 获取需要查询自定义机型RAID信息时，传入自定义机型实例ID。InstanceId存在时DeviceClassCode失效。 虽是可选参数，但DeviceClassCode和InstanceId参数，必须要填写一个。
 * @method void setInstanceId(string $InstanceId) 设置需要查询自定义机型RAID信息时，传入自定义机型实例ID。InstanceId存在时DeviceClassCode失效。 虽是可选参数，但DeviceClassCode和InstanceId参数，必须要填写一个。
 */

/**
 *DescribeDeviceClassPartition请求参数结构体
 */
class DescribeDeviceClassPartitionRequest extends AbstractModel
{
    /**
     * @var string 设备类型代号。代号通过接口[查询设备型号(DescribeDeviceClass)](https://cloud.tencent.com/document/api/386/32911)查询。标准机型需要传入此参数。虽是可选参数，但DeviceClassCode和InstanceId参数，必须要填写一个。
     */
    public $DeviceClassCode;

    /**
     * @var string 需要查询自定义机型RAID信息时，传入自定义机型实例ID。InstanceId存在时DeviceClassCode失效。 虽是可选参数，但DeviceClassCode和InstanceId参数，必须要填写一个。
     */
    public $InstanceId;
    /**
     * @param string $DeviceClassCode 设备类型代号。代号通过接口[查询设备型号(DescribeDeviceClass)](https://cloud.tencent.com/document/api/386/32911)查询。标准机型需要传入此参数。虽是可选参数，但DeviceClassCode和InstanceId参数，必须要填写一个。
     * @param string $InstanceId 需要查询自定义机型RAID信息时，传入自定义机型实例ID。InstanceId存在时DeviceClassCode失效。 虽是可选参数，但DeviceClassCode和InstanceId参数，必须要填写一个。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("DeviceClassCode",$param) and $param["DeviceClassCode"] !== null) {
            $this->DeviceClassCode = $param["DeviceClassCode"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
