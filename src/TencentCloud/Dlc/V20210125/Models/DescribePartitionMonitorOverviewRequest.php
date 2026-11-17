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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePartitionMonitorOverview请求参数结构体
 *
 * @method string getPartitionCode() 获取<p>资源分区编码</p>
 * @method void setPartitionCode(string $PartitionCode) 设置<p>资源分区编码</p>
 * @method string getQueueName() 获取<p>资源组（队列）名称，可选。不传时返回 partition 维度指标（含 pending_workloads / admission_wait_seconds / top_queue_by_cpu 排队卡片、<em>_limit_business 计费口径已使用量、</em><em>quota_total 配额、postpay_month_consumed_total 当月已消耗）；传入时切换为 queue 维度：仅返回 queue</em> 前缀指标（queue_<em><em>limit_business 计费口径已使用量 / queue</em></em>_admitted Kueue 对照口径 / queue_pending_workloads / queue_admission_wait_seconds）+ 该队列的配额指标（cpu_quota_total / memory_quota_total / gpu_quota_total / vram_quota_total，数值来自队列的 resource_usage 而非分区 resource_config）+ postpay_month_consumed_total</p>
 * @method void setQueueName(string $QueueName) 设置<p>资源组（队列）名称，可选。不传时返回 partition 维度指标（含 pending_workloads / admission_wait_seconds / top_queue_by_cpu 排队卡片、<em>_limit_business 计费口径已使用量、</em><em>quota_total 配额、postpay_month_consumed_total 当月已消耗）；传入时切换为 queue 维度：仅返回 queue</em> 前缀指标（queue_<em><em>limit_business 计费口径已使用量 / queue</em></em>_admitted Kueue 对照口径 / queue_pending_workloads / queue_admission_wait_seconds）+ 该队列的配额指标（cpu_quota_total / memory_quota_total / gpu_quota_total / vram_quota_total，数值来自队列的 resource_usage 而非分区 resource_config）+ postpay_month_consumed_total</p>
 * @method array getMetricKeys() 获取<p>指标 key 过滤列表，为空则返回全部指标</p>
 * @method void setMetricKeys(array $MetricKeys) 设置<p>指标 key 过滤列表，为空则返回全部指标</p>
 */
class DescribePartitionMonitorOverviewRequest extends AbstractModel
{
    /**
     * @var string <p>资源分区编码</p>
     */
    public $PartitionCode;

    /**
     * @var string <p>资源组（队列）名称，可选。不传时返回 partition 维度指标（含 pending_workloads / admission_wait_seconds / top_queue_by_cpu 排队卡片、<em>_limit_business 计费口径已使用量、</em><em>quota_total 配额、postpay_month_consumed_total 当月已消耗）；传入时切换为 queue 维度：仅返回 queue</em> 前缀指标（queue_<em><em>limit_business 计费口径已使用量 / queue</em></em>_admitted Kueue 对照口径 / queue_pending_workloads / queue_admission_wait_seconds）+ 该队列的配额指标（cpu_quota_total / memory_quota_total / gpu_quota_total / vram_quota_total，数值来自队列的 resource_usage 而非分区 resource_config）+ postpay_month_consumed_total</p>
     */
    public $QueueName;

    /**
     * @var array <p>指标 key 过滤列表，为空则返回全部指标</p>
     */
    public $MetricKeys;

    /**
     * @param string $PartitionCode <p>资源分区编码</p>
     * @param string $QueueName <p>资源组（队列）名称，可选。不传时返回 partition 维度指标（含 pending_workloads / admission_wait_seconds / top_queue_by_cpu 排队卡片、<em>_limit_business 计费口径已使用量、</em><em>quota_total 配额、postpay_month_consumed_total 当月已消耗）；传入时切换为 queue 维度：仅返回 queue</em> 前缀指标（queue_<em><em>limit_business 计费口径已使用量 / queue</em></em>_admitted Kueue 对照口径 / queue_pending_workloads / queue_admission_wait_seconds）+ 该队列的配额指标（cpu_quota_total / memory_quota_total / gpu_quota_total / vram_quota_total，数值来自队列的 resource_usage 而非分区 resource_config）+ postpay_month_consumed_total</p>
     * @param array $MetricKeys <p>指标 key 过滤列表，为空则返回全部指标</p>
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
        if (array_key_exists("PartitionCode",$param) and $param["PartitionCode"] !== null) {
            $this->PartitionCode = $param["PartitionCode"];
        }

        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
        }

        if (array_key_exists("MetricKeys",$param) and $param["MetricKeys"] !== null) {
            $this->MetricKeys = $param["MetricKeys"];
        }
    }
}
