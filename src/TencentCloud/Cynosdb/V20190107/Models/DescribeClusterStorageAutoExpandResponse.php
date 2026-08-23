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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClusterStorageAutoExpand返回参数结构体
 *
 * @method integer getStorageUsageThreshold() 获取<p>存储使用率阈值</p>
 * @method void setStorageUsageThreshold(integer $StorageUsageThreshold) 设置<p>存储使用率阈值</p>
 * @method integer getExpandStep() 获取<p>扩容步长</p>
 * @method void setExpandStep(integer $ExpandStep) 设置<p>扩容步长</p>
 * @method integer getMaxStorageLimit() 获取<p>最大存储上限</p>
 * @method void setMaxStorageLimit(integer $MaxStorageLimit) 设置<p>最大存储上限</p>
 * @method string getStorageAutoExpand() 获取<p>是否开启：yes-开启，no-关闭</p>
 * @method void setStorageAutoExpand(string $StorageAutoExpand) 设置<p>是否开启：yes-开启，no-关闭</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeClusterStorageAutoExpandResponse extends AbstractModel
{
    /**
     * @var integer <p>存储使用率阈值</p>
     */
    public $StorageUsageThreshold;

    /**
     * @var integer <p>扩容步长</p>
     */
    public $ExpandStep;

    /**
     * @var integer <p>最大存储上限</p>
     */
    public $MaxStorageLimit;

    /**
     * @var string <p>是否开启：yes-开启，no-关闭</p>
     */
    public $StorageAutoExpand;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $StorageUsageThreshold <p>存储使用率阈值</p>
     * @param integer $ExpandStep <p>扩容步长</p>
     * @param integer $MaxStorageLimit <p>最大存储上限</p>
     * @param string $StorageAutoExpand <p>是否开启：yes-开启，no-关闭</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("StorageUsageThreshold",$param) and $param["StorageUsageThreshold"] !== null) {
            $this->StorageUsageThreshold = $param["StorageUsageThreshold"];
        }

        if (array_key_exists("ExpandStep",$param) and $param["ExpandStep"] !== null) {
            $this->ExpandStep = $param["ExpandStep"];
        }

        if (array_key_exists("MaxStorageLimit",$param) and $param["MaxStorageLimit"] !== null) {
            $this->MaxStorageLimit = $param["MaxStorageLimit"];
        }

        if (array_key_exists("StorageAutoExpand",$param) and $param["StorageAutoExpand"] !== null) {
            $this->StorageAutoExpand = $param["StorageAutoExpand"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
