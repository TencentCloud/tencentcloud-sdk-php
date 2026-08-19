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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 基线概览页头部的统计指标。
 *
 * @method integer getNotPassItemCount() 获取<p>当前未通过的检测项总数（含主机和容器集群）。</p>
 * @method void setNotPassItemCount(integer $NotPassItemCount) 设置<p>当前未通过的检测项总数（含主机和容器集群）。</p>
 * @method array getNotPassItemStatistic() 获取<p>未通过检测项按策略分组的统计列表。</p>
 * @method void setNotPassItemStatistic(array $NotPassItemStatistic) 设置<p>未通过检测项按策略分组的统计列表。</p>
 * @method integer getLastYearFixCount() 获取<p>近一年累计已修复的基线风险数量。</p>
 * @method void setLastYearFixCount(integer $LastYearFixCount) 设置<p>近一年累计已修复的基线风险数量。</p>
 */
class BaselineOverviewStatistic extends AbstractModel
{
    /**
     * @var integer <p>当前未通过的检测项总数（含主机和容器集群）。</p>
     */
    public $NotPassItemCount;

    /**
     * @var array <p>未通过检测项按策略分组的统计列表。</p>
     */
    public $NotPassItemStatistic;

    /**
     * @var integer <p>近一年累计已修复的基线风险数量。</p>
     */
    public $LastYearFixCount;

    /**
     * @param integer $NotPassItemCount <p>当前未通过的检测项总数（含主机和容器集群）。</p>
     * @param array $NotPassItemStatistic <p>未通过检测项按策略分组的统计列表。</p>
     * @param integer $LastYearFixCount <p>近一年累计已修复的基线风险数量。</p>
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
        if (array_key_exists("NotPassItemCount",$param) and $param["NotPassItemCount"] !== null) {
            $this->NotPassItemCount = $param["NotPassItemCount"];
        }

        if (array_key_exists("NotPassItemStatistic",$param) and $param["NotPassItemStatistic"] !== null) {
            $this->NotPassItemStatistic = [];
            foreach ($param["NotPassItemStatistic"] as $key => $value){
                $obj = new NotPassItemStatistic();
                $obj->deserialize($value);
                array_push($this->NotPassItemStatistic, $obj);
            }
        }

        if (array_key_exists("LastYearFixCount",$param) and $param["LastYearFixCount"] !== null) {
            $this->LastYearFixCount = $param["LastYearFixCount"];
        }
    }
}
