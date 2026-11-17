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
namespace TencentCloud\Ags\V20250920\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 组内当前资源统计。可用/占用是额外维度，不能与 StateCounts 相加。
 *
 * @method integer getTotalCount() 获取<p>组内当前资源总数，单位台；不含已销毁和补偿完成的失败资源。</p>
 * @method void setTotalCount(integer $TotalCount) 设置<p>组内当前资源总数，单位台；不含已销毁和补偿完成的失败资源。</p>
 * @method integer getAvailableCount() 获取<p>Active、无占用且物理状态当前可领取的资源数量，单位台。</p>
 * @method void setAvailableCount(integer $AvailableCount) 设置<p>Active、无占用且物理状态当前可领取的资源数量，单位台。</p>
 * @method integer getAllocatedCount() 获取<p>仍被占用或绑定的资源数量，含领取中、使用中及归还未完成，单位台。</p>
 * @method void setAllocatedCount(integer $AllocatedCount) 设置<p>仍被占用或绑定的资源数量，含领取中、使用中及归还未完成，单位台。</p>
 * @method GPUResourceStateCount getStateCounts() 获取<p>资源状态计数，四项之和等于本组 TotalCount。</p>
 * @method void setStateCounts(GPUResourceStateCount $StateCounts) 设置<p>资源状态计数，四项之和等于本组 TotalCount。</p>
 */
class GPUResourceGroupStatistics extends AbstractModel
{
    /**
     * @var integer <p>组内当前资源总数，单位台；不含已销毁和补偿完成的失败资源。</p>
     */
    public $TotalCount;

    /**
     * @var integer <p>Active、无占用且物理状态当前可领取的资源数量，单位台。</p>
     */
    public $AvailableCount;

    /**
     * @var integer <p>仍被占用或绑定的资源数量，含领取中、使用中及归还未完成，单位台。</p>
     */
    public $AllocatedCount;

    /**
     * @var GPUResourceStateCount <p>资源状态计数，四项之和等于本组 TotalCount。</p>
     */
    public $StateCounts;

    /**
     * @param integer $TotalCount <p>组内当前资源总数，单位台；不含已销毁和补偿完成的失败资源。</p>
     * @param integer $AvailableCount <p>Active、无占用且物理状态当前可领取的资源数量，单位台。</p>
     * @param integer $AllocatedCount <p>仍被占用或绑定的资源数量，含领取中、使用中及归还未完成，单位台。</p>
     * @param GPUResourceStateCount $StateCounts <p>资源状态计数，四项之和等于本组 TotalCount。</p>
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

        if (array_key_exists("AvailableCount",$param) and $param["AvailableCount"] !== null) {
            $this->AvailableCount = $param["AvailableCount"];
        }

        if (array_key_exists("AllocatedCount",$param) and $param["AllocatedCount"] !== null) {
            $this->AllocatedCount = $param["AllocatedCount"];
        }

        if (array_key_exists("StateCounts",$param) and $param["StateCounts"] !== null) {
            $this->StateCounts = new GPUResourceStateCount();
            $this->StateCounts->deserialize($param["StateCounts"]);
        }
    }
}
