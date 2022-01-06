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
 * DescribeDeviceMonitorData请求参数结构体
 *
 * @method integer getStartTime() 获取开始时间戳
 * @method void setStartTime(integer $StartTime) 设置开始时间戳
 * @method integer getEndTime() 获取结束时间戳
 * @method void setEndTime(integer $EndTime) 设置结束时间戳
 * @method string getType() 获取类型 支持 OnlineChannels/OnlineDevices/RecordingChannels
 * @method void setType(string $Type) 设置类型 支持 OnlineChannels/OnlineDevices/RecordingChannels
 * @method string getTimesSpec() 获取时间粒度 目前只支持 1h
 * @method void setTimesSpec(string $TimesSpec) 设置时间粒度 目前只支持 1h
 */
class DescribeDeviceMonitorDataRequest extends AbstractModel
{
    /**
     * @var integer 开始时间戳
     */
    public $StartTime;

    /**
     * @var integer 结束时间戳
     */
    public $EndTime;

    /**
     * @var string 类型 支持 OnlineChannels/OnlineDevices/RecordingChannels
     */
    public $Type;

    /**
     * @var string 时间粒度 目前只支持 1h
     */
    public $TimesSpec;

    /**
     * @param integer $StartTime 开始时间戳
     * @param integer $EndTime 结束时间戳
     * @param string $Type 类型 支持 OnlineChannels/OnlineDevices/RecordingChannels
     * @param string $TimesSpec 时间粒度 目前只支持 1h
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("TimesSpec",$param) and $param["TimesSpec"] !== null) {
            $this->TimesSpec = $param["TimesSpec"];
        }
    }
}
