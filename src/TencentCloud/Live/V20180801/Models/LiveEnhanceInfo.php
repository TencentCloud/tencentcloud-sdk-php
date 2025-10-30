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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 直播增强计费信息。
 *
 * @method string getDomain() 获取域名。
 * @method void setDomain(string $Domain) 设置域名。
 * @method string getTime() 获取时间。
 * @method void setTime(string $Time) 设置时间。
 * @method integer getDuration() 获取计费时长，单位分钟。
 * @method void setDuration(integer $Duration) 设置计费时长，单位分钟。
 * @method string getFps() 获取帧率。
 * @method void setFps(string $Fps) 设置帧率。
 * @method string getResolution() 获取分辨率。
 * @method void setResolution(string $Resolution) 设置分辨率。
 * @method string getType() 获取增强服务类型。
 * @method void setType(string $Type) 设置增强服务类型。
 */
class LiveEnhanceInfo extends AbstractModel
{
    /**
     * @var string 域名。
     */
    public $Domain;

    /**
     * @var string 时间。
     */
    public $Time;

    /**
     * @var integer 计费时长，单位分钟。
     */
    public $Duration;

    /**
     * @var string 帧率。
     */
    public $Fps;

    /**
     * @var string 分辨率。
     */
    public $Resolution;

    /**
     * @var string 增强服务类型。
     */
    public $Type;

    /**
     * @param string $Domain 域名。
     * @param string $Time 时间。
     * @param integer $Duration 计费时长，单位分钟。
     * @param string $Fps 帧率。
     * @param string $Resolution 分辨率。
     * @param string $Type 增强服务类型。
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("Fps",$param) and $param["Fps"] !== null) {
            $this->Fps = $param["Fps"];
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
