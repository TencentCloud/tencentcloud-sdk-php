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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实时音视频用量在某一时间段的统计信息。
 *
 * @method string getTimeKey() 获取时间点，格式为YYYY-MM-DD HH:mm:ss。多天查询时，HH:mm:ss为00:00:00。
 * @method void setTimeKey(string $TimeKey) 设置时间点，格式为YYYY-MM-DD HH:mm:ss。多天查询时，HH:mm:ss为00:00:00。
 * @method array getUsageValue() 获取用量数组。每个数值含义与UsageKey对应。单位：分钟。
 * @method void setUsageValue(array $UsageValue) 设置用量数组。每个数值含义与UsageKey对应。单位：分钟。
 */
class TrtcUsage extends AbstractModel
{
    /**
     * @var string 时间点，格式为YYYY-MM-DD HH:mm:ss。多天查询时，HH:mm:ss为00:00:00。
     */
    public $TimeKey;

    /**
     * @var array 用量数组。每个数值含义与UsageKey对应。单位：分钟。
     */
    public $UsageValue;

    /**
     * @param string $TimeKey 时间点，格式为YYYY-MM-DD HH:mm:ss。多天查询时，HH:mm:ss为00:00:00。
     * @param array $UsageValue 用量数组。每个数值含义与UsageKey对应。单位：分钟。
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
        if (array_key_exists("TimeKey",$param) and $param["TimeKey"] !== null) {
            $this->TimeKey = $param["TimeKey"];
        }

        if (array_key_exists("UsageValue",$param) and $param["UsageValue"] !== null) {
            $this->UsageValue = $param["UsageValue"];
        }
    }
}
