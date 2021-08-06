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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 转码总量数据
 *
 * @method string getTime() 获取时间点，北京时间，
示例：2019-03-01 00:00:00。
 * @method void setTime(string $Time) 设置时间点，北京时间，
示例：2019-03-01 00:00:00。
 * @method integer getDuration() 获取转码时长，单位：分钟。
 * @method void setDuration(integer $Duration) 设置转码时长，单位：分钟。
 * @method string getModuleCodec() 获取编码方式，带模块，
示例：
liveprocessor_H264 =》直播转码-H264，
liveprocessor_H265 =》 直播转码-H265，
topspeed_H264 =》极速高清-H264，
topspeed_H265 =》极速高清-H265。
 * @method void setModuleCodec(string $ModuleCodec) 设置编码方式，带模块，
示例：
liveprocessor_H264 =》直播转码-H264，
liveprocessor_H265 =》 直播转码-H265，
topspeed_H264 =》极速高清-H264，
topspeed_H265 =》极速高清-H265。
 * @method string getResolution() 获取分辨率，
示例：540*480。
 * @method void setResolution(string $Resolution) 设置分辨率，
示例：540*480。
 */
class TranscodeTotalInfo extends AbstractModel
{
    /**
     * @var string 时间点，北京时间，
示例：2019-03-01 00:00:00。
     */
    public $Time;

    /**
     * @var integer 转码时长，单位：分钟。
     */
    public $Duration;

    /**
     * @var string 编码方式，带模块，
示例：
liveprocessor_H264 =》直播转码-H264，
liveprocessor_H265 =》 直播转码-H265，
topspeed_H264 =》极速高清-H264，
topspeed_H265 =》极速高清-H265。
     */
    public $ModuleCodec;

    /**
     * @var string 分辨率，
示例：540*480。
     */
    public $Resolution;

    /**
     * @param string $Time 时间点，北京时间，
示例：2019-03-01 00:00:00。
     * @param integer $Duration 转码时长，单位：分钟。
     * @param string $ModuleCodec 编码方式，带模块，
示例：
liveprocessor_H264 =》直播转码-H264，
liveprocessor_H265 =》 直播转码-H265，
topspeed_H264 =》极速高清-H264，
topspeed_H265 =》极速高清-H265。
     * @param string $Resolution 分辨率，
示例：540*480。
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("ModuleCodec",$param) and $param["ModuleCodec"] !== null) {
            $this->ModuleCodec = $param["ModuleCodec"];
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }
    }
}
