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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCfwRiskOverview请求参数结构体
 *
 * @method string getStartTime() 获取<p>自定义开始时间。可选，格式 YYYY-MM-DD HH:MM:SS；必须和 EndTime 同时传。</p>
 * @method void setStartTime(string $StartTime) 设置<p>自定义开始时间。可选，格式 YYYY-MM-DD HH:MM:SS；必须和 EndTime 同时传。</p>
 * @method string getEndTime() 获取<p>自定义结束时间。可选，格式 YYYY-MM-DD HH:MM:SS；必须和 StartTime 同时传。</p>
 * @method void setEndTime(string $EndTime) 设置<p>自定义结束时间。可选，格式 YYYY-MM-DD HH:MM:SS；必须和 StartTime 同时传。</p>
 */
class DescribeCfwRiskOverviewRequest extends AbstractModel
{
    /**
     * @var string <p>自定义开始时间。可选，格式 YYYY-MM-DD HH:MM:SS；必须和 EndTime 同时传。</p>
     */
    public $StartTime;

    /**
     * @var string <p>自定义结束时间。可选，格式 YYYY-MM-DD HH:MM:SS；必须和 StartTime 同时传。</p>
     */
    public $EndTime;

    /**
     * @param string $StartTime <p>自定义开始时间。可选，格式 YYYY-MM-DD HH:MM:SS；必须和 EndTime 同时传。</p>
     * @param string $EndTime <p>自定义结束时间。可选，格式 YYYY-MM-DD HH:MM:SS；必须和 StartTime 同时传。</p>
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
    }
}
