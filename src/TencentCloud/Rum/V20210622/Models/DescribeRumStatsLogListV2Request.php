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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRumStatsLogListV2请求参数结构体
 *
 * @method integer getStartTime() 获取开始时间（必填）
 * @method void setStartTime(integer $StartTime) 设置开始时间（必填）
 * @method integer getLimit() 获取单次查询返回的原始日志条数，最大值为100（必填）
 * @method void setLimit(integer $Limit) 设置单次查询返回的原始日志条数，最大值为100（必填）
 * @method string getFilter() 获取过滤条件
 * @method void setFilter(string $Filter) 设置过滤条件
 * @method integer getEndTime() 获取结束时间（必填）
 * @method void setEndTime(integer $EndTime) 设置结束时间（必填）
 * @method integer getID() 获取项目ID（必填）
 * @method void setID(integer $ID) 设置项目ID（必填）
 */
class DescribeRumStatsLogListV2Request extends AbstractModel
{
    /**
     * @var integer 开始时间（必填）
     */
    public $StartTime;

    /**
     * @var integer 单次查询返回的原始日志条数，最大值为100（必填）
     */
    public $Limit;

    /**
     * @var string 过滤条件
     */
    public $Filter;

    /**
     * @var integer 结束时间（必填）
     */
    public $EndTime;

    /**
     * @var integer 项目ID（必填）
     */
    public $ID;

    /**
     * @param integer $StartTime 开始时间（必填）
     * @param integer $Limit 单次查询返回的原始日志条数，最大值为100（必填）
     * @param string $Filter 过滤条件
     * @param integer $EndTime 结束时间（必填）
     * @param integer $ID 项目ID（必填）
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = $param["Filter"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }
    }
}
