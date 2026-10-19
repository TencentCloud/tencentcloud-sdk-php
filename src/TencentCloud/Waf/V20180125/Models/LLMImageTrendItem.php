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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 近7天图片送检趋势的单日数据点
 *
 * @method string getDayTime() 获取<p>YYYYMMDD 格式日期</p>
 * @method void setDayTime(string $DayTime) 设置<p>YYYYMMDD 格式日期</p>
 * @method integer getImageUsage() 获取<p>当日图片送检量（单位：张）</p>
 * @method void setImageUsage(integer $ImageUsage) 设置<p>当日图片送检量（单位：张）</p>
 */
class LLMImageTrendItem extends AbstractModel
{
    /**
     * @var string <p>YYYYMMDD 格式日期</p>
     */
    public $DayTime;

    /**
     * @var integer <p>当日图片送检量（单位：张）</p>
     */
    public $ImageUsage;

    /**
     * @param string $DayTime <p>YYYYMMDD 格式日期</p>
     * @param integer $ImageUsage <p>当日图片送检量（单位：张）</p>
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
        if (array_key_exists("DayTime",$param) and $param["DayTime"] !== null) {
            $this->DayTime = $param["DayTime"];
        }

        if (array_key_exists("ImageUsage",$param) and $param["ImageUsage"] !== null) {
            $this->ImageUsage = $param["ImageUsage"];
        }
    }
}
