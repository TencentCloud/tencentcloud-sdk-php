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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Presto监控指标
 *
 * @method float getLocalCacheHitRate() 获取	Alluxio本地缓存命中率
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLocalCacheHitRate(float $LocalCacheHitRate) 设置	Alluxio本地缓存命中率
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getFragmentCacheHitRate() 获取Fragment缓存命中率
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFragmentCacheHitRate(float $FragmentCacheHitRate) 设置Fragment缓存命中率
注意：此字段可能返回 null，表示取不到有效值。
 */
class PrestoMonitorMetrics extends AbstractModel
{
    /**
     * @var float 	Alluxio本地缓存命中率
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LocalCacheHitRate;

    /**
     * @var float Fragment缓存命中率
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FragmentCacheHitRate;

    /**
     * @param float $LocalCacheHitRate 	Alluxio本地缓存命中率
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $FragmentCacheHitRate Fragment缓存命中率
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("LocalCacheHitRate",$param) and $param["LocalCacheHitRate"] !== null) {
            $this->LocalCacheHitRate = $param["LocalCacheHitRate"];
        }

        if (array_key_exists("FragmentCacheHitRate",$param) and $param["FragmentCacheHitRate"] !== null) {
            $this->FragmentCacheHitRate = $param["FragmentCacheHitRate"];
        }
    }
}
