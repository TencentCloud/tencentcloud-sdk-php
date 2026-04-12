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
 * SubmitQuestionMarkAgentJob返回参数结构体
 *
 * @method string getJobId() 获取<p>任务唯一ID。由服务端生成.</p>
 * @method void setJobId(string $JobId) 设置<p>任务唯一ID。由服务端生成.</p>
 * @method array getQuestionInfo() 获取<p>切题题目边框坐标列表 （如果BoolSingleQuestion为true则返回空）</p>
 * @method void setQuestionInfo(array $QuestionInfo) 设置<p>切题题目边框坐标列表 （如果BoolSingleQuestion为true则返回空）</p>
 * @method string getQuestionCount() 获取<p>题目切题数量，作为计费题目数总量</p>
 * @method void setQuestionCount(string $QuestionCount) 设置<p>题目切题数量，作为计费题目数总量</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class SubmitQuestionMarkAgentJobResponse extends AbstractModel
{
    /**
     * @var string <p>任务唯一ID。由服务端生成.</p>
     */
    public $JobId;

    /**
     * @var array <p>切题题目边框坐标列表 （如果BoolSingleQuestion为true则返回空）</p>
     */
    public $QuestionInfo;

    /**
     * @var string <p>题目切题数量，作为计费题目数总量</p>
     */
    public $QuestionCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $JobId <p>任务唯一ID。由服务端生成.</p>
     * @param array $QuestionInfo <p>切题题目边框坐标列表 （如果BoolSingleQuestion为true则返回空）</p>
     * @param string $QuestionCount <p>题目切题数量，作为计费题目数总量</p>
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("QuestionInfo",$param) and $param["QuestionInfo"] !== null) {
            $this->QuestionInfo = [];
            foreach ($param["QuestionInfo"] as $key => $value){
                $obj = new QuestionInfo();
                $obj->deserialize($value);
                array_push($this->QuestionInfo, $obj);
            }
        }

        if (array_key_exists("QuestionCount",$param) and $param["QuestionCount"] !== null) {
            $this->QuestionCount = $param["QuestionCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
