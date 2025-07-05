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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 漏洞概览
 *
 * @method integer getTotalCount() 获取总数
 * @method void setTotalCount(integer $TotalCount) 设置总数
 * @method integer getTodayCount() 获取今日新增数量
 * @method void setTodayCount(integer $TodayCount) 设置今日新增数量
 */
class VulOverview extends AbstractModel
{
    /**
     * @var integer 总数
     */
    public $TotalCount;

    /**
     * @var integer 今日新增数量
     */
    public $TodayCount;

    /**
     * @param integer $TotalCount 总数
     * @param integer $TodayCount 今日新增数量
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("TodayCount",$param) and $param["TodayCount"] !== null) {
            $this->TodayCount = $param["TodayCount"];
        }
    }
}
