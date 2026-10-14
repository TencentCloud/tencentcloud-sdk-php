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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeStreamPackageIngestStatistics请求参数结构体
 *
 * @method string getStartTime() 获取<p>查询起始时间，RFC3339 格式，如2026-08-24T00:00:00+08:00</p>
 * @method void setStartTime(string $StartTime) 设置<p>查询起始时间，RFC3339 格式，如2026-08-24T00:00:00+08:00</p>
 * @method string getEndTime() 获取<p>查询结束时间，RFC3339 格式，如 2026-08-24T00:00:00+08:00；必须晚于 StartTime</p>
 * @method void setEndTime(string $EndTime) 设置<p>查询结束时间，RFC3339 格式，如 2026-08-24T00:00:00+08:00；必须晚于 StartTime</p>
 * @method array getChannelIds() 获取<p>频道ID列表，不传则查全部频道</p>
 * @method void setChannelIds(array $ChannelIds) 设置<p>频道ID列表，不传则查全部频道</p>
 * @method array getTypes() 获取<p>频道类型过滤，枚举值：LiveChannel、SSAI、FASTChannel</p>
 * @method void setTypes(array $Types) 设置<p>频道类型过滤，枚举值：LiveChannel、SSAI、FASTChannel</p>
 * @method boolean getDimension() 获取<p>维度，false(默认): summary 汇总模式；true: detail 明细模式（按时间拆分），当为false时粒度不生效</p>
 * @method void setDimension(boolean $Dimension) 设置<p>维度，false(默认): summary 汇总模式；true: detail 明细模式（按时间拆分），当为false时粒度不生效</p>
 * @method integer getGranularity() 获取<p>时间粒度（分钟），支持5（默认）/ 60 / 1440</p>
 * @method void setGranularity(integer $Granularity) 设置<p>时间粒度（分钟），支持5（默认）/ 60 / 1440</p>
 */
class DescribeStreamPackageIngestStatisticsRequest extends AbstractModel
{
    /**
     * @var string <p>查询起始时间，RFC3339 格式，如2026-08-24T00:00:00+08:00</p>
     */
    public $StartTime;

    /**
     * @var string <p>查询结束时间，RFC3339 格式，如 2026-08-24T00:00:00+08:00；必须晚于 StartTime</p>
     */
    public $EndTime;

    /**
     * @var array <p>频道ID列表，不传则查全部频道</p>
     */
    public $ChannelIds;

    /**
     * @var array <p>频道类型过滤，枚举值：LiveChannel、SSAI、FASTChannel</p>
     */
    public $Types;

    /**
     * @var boolean <p>维度，false(默认): summary 汇总模式；true: detail 明细模式（按时间拆分），当为false时粒度不生效</p>
     */
    public $Dimension;

    /**
     * @var integer <p>时间粒度（分钟），支持5（默认）/ 60 / 1440</p>
     */
    public $Granularity;

    /**
     * @param string $StartTime <p>查询起始时间，RFC3339 格式，如2026-08-24T00:00:00+08:00</p>
     * @param string $EndTime <p>查询结束时间，RFC3339 格式，如 2026-08-24T00:00:00+08:00；必须晚于 StartTime</p>
     * @param array $ChannelIds <p>频道ID列表，不传则查全部频道</p>
     * @param array $Types <p>频道类型过滤，枚举值：LiveChannel、SSAI、FASTChannel</p>
     * @param boolean $Dimension <p>维度，false(默认): summary 汇总模式；true: detail 明细模式（按时间拆分），当为false时粒度不生效</p>
     * @param integer $Granularity <p>时间粒度（分钟），支持5（默认）/ 60 / 1440</p>
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

        if (array_key_exists("ChannelIds",$param) and $param["ChannelIds"] !== null) {
            $this->ChannelIds = $param["ChannelIds"];
        }

        if (array_key_exists("Types",$param) and $param["Types"] !== null) {
            $this->Types = $param["Types"];
        }

        if (array_key_exists("Dimension",$param) and $param["Dimension"] !== null) {
            $this->Dimension = $param["Dimension"];
        }

        if (array_key_exists("Granularity",$param) and $param["Granularity"] !== null) {
            $this->Granularity = $param["Granularity"];
        }
    }
}
