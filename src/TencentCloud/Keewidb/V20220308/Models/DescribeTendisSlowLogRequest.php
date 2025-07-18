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
namespace TencentCloud\Keewidb\V20220308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTendisSlowLog请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID，如：kee-6ubh****。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID，如：kee-6ubh****。
 * @method string getBeginTime() 获取开始时间。
 * @method void setBeginTime(string $BeginTime) 设置开始时间。
 * @method string getEndTime() 获取结束时间。
 * @method void setEndTime(string $EndTime) 设置结束时间。
 * @method integer getMinQueryTime() 获取慢查询平均执行时间阈值。<ul><li>单位：毫秒。</li><li>取值范围：10、20、30、40、50。</li></ul>
 * @method void setMinQueryTime(integer $MinQueryTime) 设置慢查询平均执行时间阈值。<ul><li>单位：毫秒。</li><li>取值范围：10、20、30、40、50。</li></ul>
 * @method integer getLimit() 获取每个页面大小，即每个页面输出慢日志的数量。取值范围为：10、20、30、40、50。默认为 20。
 * @method void setLimit(integer $Limit) 设置每个页面大小，即每个页面输出慢日志的数量。取值范围为：10、20、30、40、50。默认为 20。
 * @method integer getOffset() 获取页面偏移量，取Limit整数倍，计算公式：offset=limit*(页码-1)。
 * @method void setOffset(integer $Offset) 设置页面偏移量，取Limit整数倍，计算公式：offset=limit*(页码-1)。
 */
class DescribeTendisSlowLogRequest extends AbstractModel
{
    /**
     * @var string 实例 ID，如：kee-6ubh****。
     */
    public $InstanceId;

    /**
     * @var string 开始时间。
     */
    public $BeginTime;

    /**
     * @var string 结束时间。
     */
    public $EndTime;

    /**
     * @var integer 慢查询平均执行时间阈值。<ul><li>单位：毫秒。</li><li>取值范围：10、20、30、40、50。</li></ul>
     */
    public $MinQueryTime;

    /**
     * @var integer 每个页面大小，即每个页面输出慢日志的数量。取值范围为：10、20、30、40、50。默认为 20。
     */
    public $Limit;

    /**
     * @var integer 页面偏移量，取Limit整数倍，计算公式：offset=limit*(页码-1)。
     */
    public $Offset;

    /**
     * @param string $InstanceId 实例 ID，如：kee-6ubh****。
     * @param string $BeginTime 开始时间。
     * @param string $EndTime 结束时间。
     * @param integer $MinQueryTime 慢查询平均执行时间阈值。<ul><li>单位：毫秒。</li><li>取值范围：10、20、30、40、50。</li></ul>
     * @param integer $Limit 每个页面大小，即每个页面输出慢日志的数量。取值范围为：10、20、30、40、50。默认为 20。
     * @param integer $Offset 页面偏移量，取Limit整数倍，计算公式：offset=limit*(页码-1)。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("MinQueryTime",$param) and $param["MinQueryTime"] !== null) {
            $this->MinQueryTime = $param["MinQueryTime"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
