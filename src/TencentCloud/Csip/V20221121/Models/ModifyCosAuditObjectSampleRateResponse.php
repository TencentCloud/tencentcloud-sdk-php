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
 * ModifyCosAuditObjectSampleRate返回参数结构体
 *
 * @method boolean getDefaultSampleRateUpdated() 获取<p>本次是否实际提交了默认采样率</p>
 * @method void setDefaultSampleRateUpdated(boolean $DefaultSampleRateUpdated) 设置<p>本次是否实际提交了默认采样率</p>
 * @method float getDefaultSampleRate() 获取<p>DefaultSampleRateUpdated=true 时返回修改后的值</p>
 * @method void setDefaultSampleRate(float $DefaultSampleRate) 设置<p>DefaultSampleRateUpdated=true 时返回修改后的值</p>
 * @method integer getUpdatedBucketCount() 获取<p>本次成功提交的已有桶数量</p>
 * @method void setUpdatedBucketCount(integer $UpdatedBucketCount) 设置<p>本次成功提交的已有桶数量</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class ModifyCosAuditObjectSampleRateResponse extends AbstractModel
{
    /**
     * @var boolean <p>本次是否实际提交了默认采样率</p>
     */
    public $DefaultSampleRateUpdated;

    /**
     * @var float <p>DefaultSampleRateUpdated=true 时返回修改后的值</p>
     */
    public $DefaultSampleRate;

    /**
     * @var integer <p>本次成功提交的已有桶数量</p>
     */
    public $UpdatedBucketCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param boolean $DefaultSampleRateUpdated <p>本次是否实际提交了默认采样率</p>
     * @param float $DefaultSampleRate <p>DefaultSampleRateUpdated=true 时返回修改后的值</p>
     * @param integer $UpdatedBucketCount <p>本次成功提交的已有桶数量</p>
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
        if (array_key_exists("DefaultSampleRateUpdated",$param) and $param["DefaultSampleRateUpdated"] !== null) {
            $this->DefaultSampleRateUpdated = $param["DefaultSampleRateUpdated"];
        }

        if (array_key_exists("DefaultSampleRate",$param) and $param["DefaultSampleRate"] !== null) {
            $this->DefaultSampleRate = $param["DefaultSampleRate"];
        }

        if (array_key_exists("UpdatedBucketCount",$param) and $param["UpdatedBucketCount"] !== null) {
            $this->UpdatedBucketCount = $param["UpdatedBucketCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
