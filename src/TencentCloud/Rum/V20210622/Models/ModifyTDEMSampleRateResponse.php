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
 * ModifyTDEMSampleRate返回参数结构体
 *
 * @method string getAppId() 获取<p>应用 ID</p>
 * @method void setAppId(string $AppId) 设置<p>应用 ID</p>
 * @method float getSampleRate() 获取<p>采集采样率 0-100</p>
 * @method void setSampleRate(float $SampleRate) 设置<p>采集采样率 0-100</p>
 * @method float getReplaySampleRate() 获取<p>会话回放采样率 0-100</p>
 * @method void setReplaySampleRate(float $ReplaySampleRate) 设置<p>会话回放采样率 0-100</p>
 * @method string getUpdatedAt() 获取<p>更新时间</p>
 * @method void setUpdatedAt(string $UpdatedAt) 设置<p>更新时间</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class ModifyTDEMSampleRateResponse extends AbstractModel
{
    /**
     * @var string <p>应用 ID</p>
     */
    public $AppId;

    /**
     * @var float <p>采集采样率 0-100</p>
     */
    public $SampleRate;

    /**
     * @var float <p>会话回放采样率 0-100</p>
     */
    public $ReplaySampleRate;

    /**
     * @var string <p>更新时间</p>
     */
    public $UpdatedAt;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $AppId <p>应用 ID</p>
     * @param float $SampleRate <p>采集采样率 0-100</p>
     * @param float $ReplaySampleRate <p>会话回放采样率 0-100</p>
     * @param string $UpdatedAt <p>更新时间</p>
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("SampleRate",$param) and $param["SampleRate"] !== null) {
            $this->SampleRate = $param["SampleRate"];
        }

        if (array_key_exists("ReplaySampleRate",$param) and $param["ReplaySampleRate"] !== null) {
            $this->ReplaySampleRate = $param["ReplaySampleRate"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
