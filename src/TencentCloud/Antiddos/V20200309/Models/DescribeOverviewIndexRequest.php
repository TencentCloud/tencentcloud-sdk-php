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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeOverviewIndex请求参数结构体
 *
 * @method string getStartTime() 获取拉取指标起始时间
 * @method void setStartTime(string $StartTime) 设置拉取指标起始时间
 * @method string getEndTime() 获取拉取指标结束时间
 * @method void setEndTime(string $EndTime) 设置拉取指标结束时间
 */
class DescribeOverviewIndexRequest extends AbstractModel
{
    /**
     * @var string 拉取指标起始时间
     */
    public $StartTime;

    /**
     * @var string 拉取指标结束时间
     */
    public $EndTime;

    /**
     * @param string $StartTime 拉取指标起始时间
     * @param string $EndTime 拉取指标结束时间
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
