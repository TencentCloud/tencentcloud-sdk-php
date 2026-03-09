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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTelCallInfo返回参数结构体
 *
 * @method integer getTelCallOutCount() 获取<p>呼出套餐包消耗分钟数</p>
 * @method void setTelCallOutCount(integer $TelCallOutCount) 设置<p>呼出套餐包消耗分钟数</p>
 * @method integer getTelCallInCount() 获取<p>呼入套餐包消耗分钟数</p>
 * @method void setTelCallInCount(integer $TelCallInCount) 设置<p>呼入套餐包消耗分钟数</p>
 * @method integer getSeatUsedCount() 获取<p>坐席使用统计个数</p>
 * @method void setSeatUsedCount(integer $SeatUsedCount) 设置<p>坐席使用统计个数</p>
 * @method integer getVoipCallInCount() 获取<p>音频套餐包消耗分钟数</p>
 * @method void setVoipCallInCount(integer $VoipCallInCount) 设置<p>音频套餐包消耗分钟数</p>
 * @method integer getVOIPCallInCount() 获取<p>音频套餐包消耗分钟数</p>
 * @method void setVOIPCallInCount(integer $VOIPCallInCount) 设置<p>音频套餐包消耗分钟数</p>
 * @method integer getAsrOfflineCount() 获取<p>离线语音转文字套餐包消耗分钟数</p>
 * @method void setAsrOfflineCount(integer $AsrOfflineCount) 设置<p>离线语音转文字套餐包消耗分钟数</p>
 * @method integer getAsrRealtimeCount() 获取<p>实时语音转文字套餐包消耗分钟数</p>
 * @method void setAsrRealtimeCount(integer $AsrRealtimeCount) 设置<p>实时语音转文字套餐包消耗分钟数</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTelCallInfoResponse extends AbstractModel
{
    /**
     * @var integer <p>呼出套餐包消耗分钟数</p>
     */
    public $TelCallOutCount;

    /**
     * @var integer <p>呼入套餐包消耗分钟数</p>
     */
    public $TelCallInCount;

    /**
     * @var integer <p>坐席使用统计个数</p>
     */
    public $SeatUsedCount;

    /**
     * @var integer <p>音频套餐包消耗分钟数</p>
     * @deprecated
     */
    public $VoipCallInCount;

    /**
     * @var integer <p>音频套餐包消耗分钟数</p>
     */
    public $VOIPCallInCount;

    /**
     * @var integer <p>离线语音转文字套餐包消耗分钟数</p>
     */
    public $AsrOfflineCount;

    /**
     * @var integer <p>实时语音转文字套餐包消耗分钟数</p>
     */
    public $AsrRealtimeCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TelCallOutCount <p>呼出套餐包消耗分钟数</p>
     * @param integer $TelCallInCount <p>呼入套餐包消耗分钟数</p>
     * @param integer $SeatUsedCount <p>坐席使用统计个数</p>
     * @param integer $VoipCallInCount <p>音频套餐包消耗分钟数</p>
     * @param integer $VOIPCallInCount <p>音频套餐包消耗分钟数</p>
     * @param integer $AsrOfflineCount <p>离线语音转文字套餐包消耗分钟数</p>
     * @param integer $AsrRealtimeCount <p>实时语音转文字套餐包消耗分钟数</p>
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
        if (array_key_exists("TelCallOutCount",$param) and $param["TelCallOutCount"] !== null) {
            $this->TelCallOutCount = $param["TelCallOutCount"];
        }

        if (array_key_exists("TelCallInCount",$param) and $param["TelCallInCount"] !== null) {
            $this->TelCallInCount = $param["TelCallInCount"];
        }

        if (array_key_exists("SeatUsedCount",$param) and $param["SeatUsedCount"] !== null) {
            $this->SeatUsedCount = $param["SeatUsedCount"];
        }

        if (array_key_exists("VoipCallInCount",$param) and $param["VoipCallInCount"] !== null) {
            $this->VoipCallInCount = $param["VoipCallInCount"];
        }

        if (array_key_exists("VOIPCallInCount",$param) and $param["VOIPCallInCount"] !== null) {
            $this->VOIPCallInCount = $param["VOIPCallInCount"];
        }

        if (array_key_exists("AsrOfflineCount",$param) and $param["AsrOfflineCount"] !== null) {
            $this->AsrOfflineCount = $param["AsrOfflineCount"];
        }

        if (array_key_exists("AsrRealtimeCount",$param) and $param["AsrRealtimeCount"] !== null) {
            $this->AsrRealtimeCount = $param["AsrRealtimeCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
