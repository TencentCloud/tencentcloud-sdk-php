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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 媒体质检的检测策略。
 *
 * @method integer getCheckDuration() 获取抽检策略的每次循环检测的时长。取值范围（单位s）：

- 最小值：10
- 最大值：86400

 * @method void setCheckDuration(integer $CheckDuration) 设置抽检策略的每次循环检测的时长。取值范围（单位s）：

- 最小值：10
- 最大值：86400

 * @method integer getCheckInterval() 获取抽检测略的检测间隔，表示在一次检测结束后，等待多长时间后，再次检测。
 * @method void setCheckInterval(integer $CheckInterval) 设置抽检测略的检测间隔，表示在一次检测结束后，等待多长时间后，再次检测。
 * @method integer getSkipDuration() 获取片头跳过时长。
 * @method void setSkipDuration(integer $SkipDuration) 设置片头跳过时长。
 * @method integer getCirclesNumber() 获取循环次数，该字段为空或 0 时，默认循环直至视频结束。
 * @method void setCirclesNumber(integer $CirclesNumber) 设置循环次数，该字段为空或 0 时，默认循环直至视频结束。
 */
class TimeSpotCheck extends AbstractModel
{
    /**
     * @var integer 抽检策略的每次循环检测的时长。取值范围（单位s）：

- 最小值：10
- 最大值：86400

     */
    public $CheckDuration;

    /**
     * @var integer 抽检测略的检测间隔，表示在一次检测结束后，等待多长时间后，再次检测。
     */
    public $CheckInterval;

    /**
     * @var integer 片头跳过时长。
     */
    public $SkipDuration;

    /**
     * @var integer 循环次数，该字段为空或 0 时，默认循环直至视频结束。
     */
    public $CirclesNumber;

    /**
     * @param integer $CheckDuration 抽检策略的每次循环检测的时长。取值范围（单位s）：

- 最小值：10
- 最大值：86400

     * @param integer $CheckInterval 抽检测略的检测间隔，表示在一次检测结束后，等待多长时间后，再次检测。
     * @param integer $SkipDuration 片头跳过时长。
     * @param integer $CirclesNumber 循环次数，该字段为空或 0 时，默认循环直至视频结束。
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
        if (array_key_exists("CheckDuration",$param) and $param["CheckDuration"] !== null) {
            $this->CheckDuration = $param["CheckDuration"];
        }

        if (array_key_exists("CheckInterval",$param) and $param["CheckInterval"] !== null) {
            $this->CheckInterval = $param["CheckInterval"];
        }

        if (array_key_exists("SkipDuration",$param) and $param["SkipDuration"] !== null) {
            $this->SkipDuration = $param["SkipDuration"];
        }

        if (array_key_exists("CirclesNumber",$param) and $param["CirclesNumber"] !== null) {
            $this->CirclesNumber = $param["CirclesNumber"];
        }
    }
}
