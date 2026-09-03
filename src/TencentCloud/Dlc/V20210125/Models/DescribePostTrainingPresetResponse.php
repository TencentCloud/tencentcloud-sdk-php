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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePostTrainingPreset返回参数结构体
 *
 * @method PostTrainingResources getResource() 获取<p>推荐的训练资源</p>
 * @method void setResource(PostTrainingResources $Resource) 设置<p>推荐的训练资源</p>
 * @method TrainingParams getTrainingParams() 获取<p>推荐的训练参数</p>
 * @method void setTrainingParams(TrainingParams $TrainingParams) 设置<p>推荐的训练参数</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribePostTrainingPresetResponse extends AbstractModel
{
    /**
     * @var PostTrainingResources <p>推荐的训练资源</p>
     */
    public $Resource;

    /**
     * @var TrainingParams <p>推荐的训练参数</p>
     */
    public $TrainingParams;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param PostTrainingResources $Resource <p>推荐的训练资源</p>
     * @param TrainingParams $TrainingParams <p>推荐的训练参数</p>
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
        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = new PostTrainingResources();
            $this->Resource->deserialize($param["Resource"]);
        }

        if (array_key_exists("TrainingParams",$param) and $param["TrainingParams"] !== null) {
            $this->TrainingParams = new TrainingParams();
            $this->TrainingParams->deserialize($param["TrainingParams"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
