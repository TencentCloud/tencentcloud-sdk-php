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
 * DescribeExtractDocAgentJob返回参数结构体
 *
 * @method float getAngle() 获取<p>图片旋转角度(角度制)，文本的水平方向为 0；顺时针为正，逆时针为负。</p>
 * @method void setAngle(float $Angle) 设置<p>图片旋转角度(角度制)，文本的水平方向为 0；顺时针为正，逆时针为负。</p>
 * @method array getStructuralList() 获取<p>配置结构化文本信息。AgentType为0按照这个结构返回</p>
 * @method void setStructuralList(array $StructuralList) 设置<p>配置结构化文本信息。AgentType为0按照这个结构返回</p>
 * @method string getErrorCode() 获取<p>任务执行错误码。当任务状态不为 FAIL 时，该值为&quot;&quot;。</p>
 * @method void setErrorCode(string $ErrorCode) 设置<p>任务执行错误码。当任务状态不为 FAIL 时，该值为&quot;&quot;。</p>
 * @method string getErrorMessage() 获取<p>任务执行错误信息。当任务状态不为 FAIL 时，该值为&quot;&quot;。</p>
 * @method void setErrorMessage(string $ErrorMessage) 设置<p>任务执行错误信息。当任务状态不为 FAIL 时，该值为&quot;&quot;。</p>
 * @method string getJobStatus() 获取<p>任务状态。WAIT：等待中，RUN：执行中，FAIL：任务失败，DONE：任务成功</p>
 * @method void setJobStatus(string $JobStatus) 设置<p>任务状态。WAIT：等待中，RUN：执行中，FAIL：任务失败，DONE：任务成功</p>
 * @method string getThoughtContent() 获取<p>思考过程</p>
 * @method void setThoughtContent(string $ThoughtContent) 设置<p>思考过程</p>
 * @method string getAgentResultJson() 获取<p>定制的json结构字符串，主要用于快速定制输出的agent输出结构。推荐用于POC场景</p>
 * @method void setAgentResultJson(string $AgentResultJson) 设置<p>定制的json结构字符串，主要用于快速定制输出的agent输出结构。推荐用于POC场景</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeExtractDocAgentJobResponse extends AbstractModel
{
    /**
     * @var float <p>图片旋转角度(角度制)，文本的水平方向为 0；顺时针为正，逆时针为负。</p>
     */
    public $Angle;

    /**
     * @var array <p>配置结构化文本信息。AgentType为0按照这个结构返回</p>
     */
    public $StructuralList;

    /**
     * @var string <p>任务执行错误码。当任务状态不为 FAIL 时，该值为&quot;&quot;。</p>
     */
    public $ErrorCode;

    /**
     * @var string <p>任务执行错误信息。当任务状态不为 FAIL 时，该值为&quot;&quot;。</p>
     */
    public $ErrorMessage;

    /**
     * @var string <p>任务状态。WAIT：等待中，RUN：执行中，FAIL：任务失败，DONE：任务成功</p>
     */
    public $JobStatus;

    /**
     * @var string <p>思考过程</p>
     */
    public $ThoughtContent;

    /**
     * @var string <p>定制的json结构字符串，主要用于快速定制输出的agent输出结构。推荐用于POC场景</p>
     */
    public $AgentResultJson;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param float $Angle <p>图片旋转角度(角度制)，文本的水平方向为 0；顺时针为正，逆时针为负。</p>
     * @param array $StructuralList <p>配置结构化文本信息。AgentType为0按照这个结构返回</p>
     * @param string $ErrorCode <p>任务执行错误码。当任务状态不为 FAIL 时，该值为&quot;&quot;。</p>
     * @param string $ErrorMessage <p>任务执行错误信息。当任务状态不为 FAIL 时，该值为&quot;&quot;。</p>
     * @param string $JobStatus <p>任务状态。WAIT：等待中，RUN：执行中，FAIL：任务失败，DONE：任务成功</p>
     * @param string $ThoughtContent <p>思考过程</p>
     * @param string $AgentResultJson <p>定制的json结构字符串，主要用于快速定制输出的agent输出结构。推荐用于POC场景</p>
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
        if (array_key_exists("Angle",$param) and $param["Angle"] !== null) {
            $this->Angle = $param["Angle"];
        }

        if (array_key_exists("StructuralList",$param) and $param["StructuralList"] !== null) {
            $this->StructuralList = [];
            foreach ($param["StructuralList"] as $key => $value){
                $obj = new GroupInfo();
                $obj->deserialize($value);
                array_push($this->StructuralList, $obj);
            }
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

        if (array_key_exists("ThoughtContent",$param) and $param["ThoughtContent"] !== null) {
            $this->ThoughtContent = $param["ThoughtContent"];
        }

        if (array_key_exists("AgentResultJson",$param) and $param["AgentResultJson"] !== null) {
            $this->AgentResultJson = $param["AgentResultJson"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
