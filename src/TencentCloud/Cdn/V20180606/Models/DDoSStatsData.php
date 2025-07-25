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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DDoS统计数据
 *
 * @method string getTime() 获取时间
 * @method void setTime(string $Time) 设置时间
 * @method float getValue() 获取带宽数值，单位bps
 * @method void setValue(float $Value) 设置带宽数值，单位bps
 */
class DDoSStatsData extends AbstractModel
{
    /**
     * @var string 时间
     */
    public $Time;

    /**
     * @var float 带宽数值，单位bps
     */
    public $Value;

    /**
     * @param string $Time 时间
     * @param float $Value 带宽数值，单位bps
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

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
