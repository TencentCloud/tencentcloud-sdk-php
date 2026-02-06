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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeQuestionMarkAgentJob返回参数结构体
 *
 * @method string getErrorCode() 获取任务执行错误码。当任务状态不为 FAIL 时，该值为""。
 * @method void setErrorCode(string $ErrorCode) 设置任务执行错误码。当任务状态不为 FAIL 时，该值为""。
 * @method string getErrorMessage() 获取任务执行错误信息。当任务状态不为 FAIL 时，该值为""。
 * @method void setErrorMessage(string $ErrorMessage) 设置任务执行错误信息。当任务状态不为 FAIL 时，该值为""。
 * @method string getJobStatus() 获取任务状态。WAIT：等待中，RUN：执行中，FAIL：任务失败，DONE：任务成功
 * @method void setJobStatus(string $JobStatus) 设置任务状态。WAIT：等待中，RUN：执行中，FAIL：任务失败，DONE：任务成功
 * @method float getAngle() 获取图片旋转角度(角度制)，文本的水平方向为 0；顺时针为正，逆时针为负。
 * @method void setAngle(float $Angle) 设置图片旋转角度(角度制)，文本的水平方向为 0；顺时针为正，逆时针为负。
 * @method array getMarkInfos() 获取试题批改信息
 * @method void setMarkInfos(array $MarkInfos) 设置试题批改信息
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeQuestionMarkAgentJobResponse extends AbstractModel
{
    /**
     * @var string 任务执行错误码。当任务状态不为 FAIL 时，该值为""。
     */
    public $ErrorCode;

    /**
     * @var string 任务执行错误信息。当任务状态不为 FAIL 时，该值为""。
     */
    public $ErrorMessage;

    /**
     * @var string 任务状态。WAIT：等待中，RUN：执行中，FAIL：任务失败，DONE：任务成功
     */
    public $JobStatus;

    /**
     * @var float 图片旋转角度(角度制)，文本的水平方向为 0；顺时针为正，逆时针为负。
     */
    public $Angle;

    /**
     * @var array 试题批改信息
     */
    public $MarkInfos;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ErrorCode 任务执行错误码。当任务状态不为 FAIL 时，该值为""。
     * @param string $ErrorMessage 任务执行错误信息。当任务状态不为 FAIL 时，该值为""。
     * @param string $JobStatus 任务状态。WAIT：等待中，RUN：执行中，FAIL：任务失败，DONE：任务成功
     * @param float $Angle 图片旋转角度(角度制)，文本的水平方向为 0；顺时针为正，逆时针为负。
     * @param array $MarkInfos 试题批改信息
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
        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("JobStatus",$param) and $param["JobStatus"] !== null) {
            $this->JobStatus = $param["JobStatus"];
        }

        if (array_key_exists("Angle",$param) and $param["Angle"] !== null) {
            $this->Angle = $param["Angle"];
        }

        if (array_key_exists("MarkInfos",$param) and $param["MarkInfos"] !== null) {
            $this->MarkInfos = [];
            foreach ($param["MarkInfos"] as $key => $value){
                $obj = new MarkInfo();
                $obj->deserialize($value);
                array_push($this->MarkInfos, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
