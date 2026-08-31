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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TWeSee 每日与每周总结配置
 *
 * @method boolean getEnableDailySummary() 获取是否开启每日总结
 * @method void setEnableDailySummary(boolean $EnableDailySummary) 设置是否开启每日总结
 * @method boolean getEnableWeeklySummary() 获取是否开启每周总结
 * @method void setEnableWeeklySummary(boolean $EnableWeeklySummary) 设置是否开启每周总结
 * @method string getSummaryVerbosity() 获取<p>生成总结的详细程度</p><p>枚举值：</p><ul><li>low： 精简</li><li>medium： 概要（默认值）</li></ul>
 * @method void setSummaryVerbosity(string $SummaryVerbosity) 设置<p>生成总结的详细程度</p><p>枚举值：</p><ul><li>low： 精简</li><li>medium： 概要（默认值）</li></ul>
 */
class SeeSummarizeConfig extends AbstractModel
{
    /**
     * @var boolean 是否开启每日总结
     */
    public $EnableDailySummary;

    /**
     * @var boolean 是否开启每周总结
     */
    public $EnableWeeklySummary;

    /**
     * @var string <p>生成总结的详细程度</p><p>枚举值：</p><ul><li>low： 精简</li><li>medium： 概要（默认值）</li></ul>
     */
    public $SummaryVerbosity;

    /**
     * @param boolean $EnableDailySummary 是否开启每日总结
     * @param boolean $EnableWeeklySummary 是否开启每周总结
     * @param string $SummaryVerbosity <p>生成总结的详细程度</p><p>枚举值：</p><ul><li>low： 精简</li><li>medium： 概要（默认值）</li></ul>
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
        if (array_key_exists("EnableDailySummary",$param) and $param["EnableDailySummary"] !== null) {
            $this->EnableDailySummary = $param["EnableDailySummary"];
        }

        if (array_key_exists("EnableWeeklySummary",$param) and $param["EnableWeeklySummary"] !== null) {
            $this->EnableWeeklySummary = $param["EnableWeeklySummary"];
        }

        if (array_key_exists("SummaryVerbosity",$param) and $param["SummaryVerbosity"] !== null) {
            $this->SummaryVerbosity = $param["SummaryVerbosity"];
        }
    }
}
