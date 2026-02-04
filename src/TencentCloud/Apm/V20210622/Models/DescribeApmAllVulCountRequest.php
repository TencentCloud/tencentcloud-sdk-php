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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeApmAllVulCount请求参数结构体
 *
 * @method integer getStartTime() 获取秒级时间戳
 * @method void setStartTime(integer $StartTime) 设置秒级时间戳
 * @method integer getEndTime() 获取秒级时间戳
 * @method void setEndTime(integer $EndTime) 设置秒级时间戳
 */
class DescribeApmAllVulCountRequest extends AbstractModel
{
    /**
     * @var integer 秒级时间戳
     */
    public $StartTime;

    /**
     * @var integer 秒级时间戳
     */
    public $EndTime;

    /**
     * @param integer $StartTime 秒级时间戳
     * @param integer $EndTime 秒级时间戳
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
