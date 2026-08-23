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
 * DescribeImageRegistryConnectivityTaskResult返回参数结构体
 *
 * @method array getConnDetectResult() 获取<p>链接检查结果</p>
 * @method void setConnDetectResult(array $ConnDetectResult) 设置<p>链接检查结果</p>
 * @method integer getFinished() 获取<p>任务是否结束</p><p>枚举值：</p><ul><li>1： 任务已结束</li><li>0： 任务未结束</li></ul>
 * @method void setFinished(integer $Finished) 设置<p>任务是否结束</p><p>枚举值：</p><ul><li>1： 任务已结束</li><li>0： 任务未结束</li></ul>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeImageRegistryConnectivityTaskResultResponse extends AbstractModel
{
    /**
     * @var array <p>链接检查结果</p>
     */
    public $ConnDetectResult;

    /**
     * @var integer <p>任务是否结束</p><p>枚举值：</p><ul><li>1： 任务已结束</li><li>0： 任务未结束</li></ul>
     */
    public $Finished;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $ConnDetectResult <p>链接检查结果</p>
     * @param integer $Finished <p>任务是否结束</p><p>枚举值：</p><ul><li>1： 任务已结束</li><li>0： 任务未结束</li></ul>
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
        if (array_key_exists("ConnDetectResult",$param) and $param["ConnDetectResult"] !== null) {
            $this->ConnDetectResult = [];
            foreach ($param["ConnDetectResult"] as $key => $value){
                $obj = new ImageRegistryConnectivityTaskResult();
                $obj->deserialize($value);
                array_push($this->ConnDetectResult, $obj);
            }
        }

        if (array_key_exists("Finished",$param) and $param["Finished"] !== null) {
            $this->Finished = $param["Finished"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
