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
 * Deployment 活跃容量配置
 *
 * @method integer getMinInstanceCount() 获取<p>活跃 Sandbox Instance 下限，必须大于等于 0。</p>
 * @method void setMinInstanceCount(integer $MinInstanceCount) 设置<p>活跃 Sandbox Instance 下限，必须大于等于 0。</p>
 * @method integer getMaxInstanceCount() 获取<p>活跃 Sandbox Instance 上限，必须大于等于 1，并且不小于 MinInstanceCount。</p>
 * @method void setMaxInstanceCount(integer $MaxInstanceCount) 设置<p>活跃 Sandbox Instance 上限，必须大于等于 1，并且不小于 MinInstanceCount。</p>
 * @method integer getMaxInstanceRequestConcurrency() 获取<p>每个活跃 Sandbox Instance 同时持有的 Deployment 请求或连接 Lease 上限，必须大于等于 1。</p>
 * @method void setMaxInstanceRequestConcurrency(integer $MaxInstanceRequestConcurrency) 设置<p>每个活跃 Sandbox Instance 同时持有的 Deployment 请求或连接 Lease 上限，必须大于等于 1。</p>
 */
class ScalingConfiguration extends AbstractModel
{
    /**
     * @var integer <p>活跃 Sandbox Instance 下限，必须大于等于 0。</p>
     */
    public $MinInstanceCount;

    /**
     * @var integer <p>活跃 Sandbox Instance 上限，必须大于等于 1，并且不小于 MinInstanceCount。</p>
     */
    public $MaxInstanceCount;

    /**
     * @var integer <p>每个活跃 Sandbox Instance 同时持有的 Deployment 请求或连接 Lease 上限，必须大于等于 1。</p>
     */
    public $MaxInstanceRequestConcurrency;

    /**
     * @param integer $MinInstanceCount <p>活跃 Sandbox Instance 下限，必须大于等于 0。</p>
     * @param integer $MaxInstanceCount <p>活跃 Sandbox Instance 上限，必须大于等于 1，并且不小于 MinInstanceCount。</p>
     * @param integer $MaxInstanceRequestConcurrency <p>每个活跃 Sandbox Instance 同时持有的 Deployment 请求或连接 Lease 上限，必须大于等于 1。</p>
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
        if (array_key_exists("MinInstanceCount",$param) and $param["MinInstanceCount"] !== null) {
            $this->MinInstanceCount = $param["MinInstanceCount"];
        }

        if (array_key_exists("MaxInstanceCount",$param) and $param["MaxInstanceCount"] !== null) {
            $this->MaxInstanceCount = $param["MaxInstanceCount"];
        }

        if (array_key_exists("MaxInstanceRequestConcurrency",$param) and $param["MaxInstanceRequestConcurrency"] !== null) {
            $this->MaxInstanceRequestConcurrency = $param["MaxInstanceRequestConcurrency"];
        }
    }
}
