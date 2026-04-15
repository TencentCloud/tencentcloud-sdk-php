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
namespace TencentCloud\Vclm\V20240523\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMotionControlKlingJob返回参数结构体
 *
 * @method string getStatus() 获取<p>任务状态。WAIT：等待中，RUN：执行中，FAIL：任务失败，DONE：任务成功</p>
 * @method void setStatus(string $Status) 设置<p>任务状态。WAIT：等待中，RUN：执行中，FAIL：任务失败，DONE：任务成功</p>
 * @method string getErrorCode() 获取<p>任务执行错误码。当任务状态不为 FAIL 时，该值为&quot;&quot;。</p>
 * @method void setErrorCode(string $ErrorCode) 设置<p>任务执行错误码。当任务状态不为 FAIL 时，该值为&quot;&quot;。</p>
 * @method string getErrorMessage() 获取<p>任务执行错误信息。当任务状态不为 FAIL 时，该值为&quot;&quot;。</p>
 * @method void setErrorMessage(string $ErrorMessage) 设置<p>任务执行错误信息。当任务状态不为 FAIL 时，该值为&quot;&quot;。</p>
 * @method string getResultVideoUrl() 获取<p>结果视频 URL。有效期 24 小时。</p>
 * @method void setResultVideoUrl(string $ResultVideoUrl) 设置<p>结果视频 URL。有效期 24 小时。</p>
 * @method string getDuration() 获取<p>视频时长。</p>
 * @method void setDuration(string $Duration) 设置<p>视频时长。</p>
 * @method string getFinalUnitDeduction() 获取<p>消耗积分数。</p>
 * @method void setFinalUnitDeduction(string $FinalUnitDeduction) 设置<p>消耗积分数。</p>
 * @method string getVideoId() 获取<p>视频id</p>
 * @method void setVideoId(string $VideoId) 设置<p>视频id</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeMotionControlKlingJobResponse extends AbstractModel
{
    /**
     * @var string <p>任务状态。WAIT：等待中，RUN：执行中，FAIL：任务失败，DONE：任务成功</p>
     */
    public $Status;

    /**
     * @var string <p>任务执行错误码。当任务状态不为 FAIL 时，该值为&quot;&quot;。</p>
     */
    public $ErrorCode;

    /**
     * @var string <p>任务执行错误信息。当任务状态不为 FAIL 时，该值为&quot;&quot;。</p>
     */
    public $ErrorMessage;

    /**
     * @var string <p>结果视频 URL。有效期 24 小时。</p>
     */
    public $ResultVideoUrl;

    /**
     * @var string <p>视频时长。</p>
     */
    public $Duration;

    /**
     * @var string <p>消耗积分数。</p>
     */
    public $FinalUnitDeduction;

    /**
     * @var string <p>视频id</p>
     */
    public $VideoId;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Status <p>任务状态。WAIT：等待中，RUN：执行中，FAIL：任务失败，DONE：任务成功</p>
     * @param string $ErrorCode <p>任务执行错误码。当任务状态不为 FAIL 时，该值为&quot;&quot;。</p>
     * @param string $ErrorMessage <p>任务执行错误信息。当任务状态不为 FAIL 时，该值为&quot;&quot;。</p>
     * @param string $ResultVideoUrl <p>结果视频 URL。有效期 24 小时。</p>
     * @param string $Duration <p>视频时长。</p>
     * @param string $FinalUnitDeduction <p>消耗积分数。</p>
     * @param string $VideoId <p>视频id</p>
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("ResultVideoUrl",$param) and $param["ResultVideoUrl"] !== null) {
            $this->ResultVideoUrl = $param["ResultVideoUrl"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("FinalUnitDeduction",$param) and $param["FinalUnitDeduction"] !== null) {
            $this->FinalUnitDeduction = $param["FinalUnitDeduction"];
        }

        if (array_key_exists("VideoId",$param) and $param["VideoId"] !== null) {
            $this->VideoId = $param["VideoId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
