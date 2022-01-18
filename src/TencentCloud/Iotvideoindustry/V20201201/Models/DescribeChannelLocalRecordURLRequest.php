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
namespace TencentCloud\Iotvideoindustry\V20201201\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeChannelLocalRecordURL请求参数结构体
 *
 * @method string getDeviceId() 获取设备唯一标识
 * @method void setDeviceId(string $DeviceId) 设置设备唯一标识
 * @method string getChannelId() 获取通道唯一标识
 * @method void setChannelId(string $ChannelId) 设置通道唯一标识
 * @method string getRecordId() 获取录像文件Id，通过获取本地录像返回
 * @method void setRecordId(string $RecordId) 设置录像文件Id，通过获取本地录像返回
 * @method integer getExpireTime() 获取UNIX 时间戳，30天内，URL失效时间，如180s无人观看此流则URL提前失效
 * @method void setExpireTime(integer $ExpireTime) 设置UNIX 时间戳，30天内，URL失效时间，如180s无人观看此流则URL提前失效
 * @method integer getStartTime() 获取录像文件推送的开始时间，需要在RecordId参数起始时间内，可以通过此参数控制回放流起始点
 * @method void setStartTime(integer $StartTime) 设置录像文件推送的开始时间，需要在RecordId参数起始时间内，可以通过此参数控制回放流起始点
 * @method integer getEndTime() 获取录像文件推送的结束时间，需要在RecordId参数起始时间内，可以通过此参数控制回放流起始点
 * @method void setEndTime(integer $EndTime) 设置录像文件推送的结束时间，需要在RecordId参数起始时间内，可以通过此参数控制回放流起始点
 */
class DescribeChannelLocalRecordURLRequest extends AbstractModel
{
    /**
     * @var string 设备唯一标识
     */
    public $DeviceId;

    /**
     * @var string 通道唯一标识
     */
    public $ChannelId;

    /**
     * @var string 录像文件Id，通过获取本地录像返回
     */
    public $RecordId;

    /**
     * @var integer UNIX 时间戳，30天内，URL失效时间，如180s无人观看此流则URL提前失效
     */
    public $ExpireTime;

    /**
     * @var integer 录像文件推送的开始时间，需要在RecordId参数起始时间内，可以通过此参数控制回放流起始点
     */
    public $StartTime;

    /**
     * @var integer 录像文件推送的结束时间，需要在RecordId参数起始时间内，可以通过此参数控制回放流起始点
     */
    public $EndTime;

    /**
     * @param string $DeviceId 设备唯一标识
     * @param string $ChannelId 通道唯一标识
     * @param string $RecordId 录像文件Id，通过获取本地录像返回
     * @param integer $ExpireTime UNIX 时间戳，30天内，URL失效时间，如180s无人观看此流则URL提前失效
     * @param integer $StartTime 录像文件推送的开始时间，需要在RecordId参数起始时间内，可以通过此参数控制回放流起始点
     * @param integer $EndTime 录像文件推送的结束时间，需要在RecordId参数起始时间内，可以通过此参数控制回放流起始点
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

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
