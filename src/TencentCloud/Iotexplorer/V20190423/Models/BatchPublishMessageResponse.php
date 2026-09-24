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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BatchPublishMessage返回参数结构体
 *
 * @method integer getTotal() 获取<p>批量推送总数</p>
 * @method void setTotal(integer $Total) 设置<p>批量推送总数</p>
 * @method integer getSuccessCount() 获取<p>成功数量</p>
 * @method void setSuccessCount(integer $SuccessCount) 设置<p>成功数量</p>
 * @method array getFailures() 获取<p>失败明细</p>
 * @method void setFailures(array $Failures) 设置<p>失败明细</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class BatchPublishMessageResponse extends AbstractModel
{
    /**
     * @var integer <p>批量推送总数</p>
     */
    public $Total;

    /**
     * @var integer <p>成功数量</p>
     */
    public $SuccessCount;

    /**
     * @var array <p>失败明细</p>
     */
    public $Failures;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Total <p>批量推送总数</p>
     * @param integer $SuccessCount <p>成功数量</p>
     * @param array $Failures <p>失败明细</p>
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
        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("SuccessCount",$param) and $param["SuccessCount"] !== null) {
            $this->SuccessCount = $param["SuccessCount"];
        }

        if (array_key_exists("Failures",$param) and $param["Failures"] !== null) {
            $this->Failures = [];
            foreach ($param["Failures"] as $key => $value){
                $obj = new DeviceResult();
                $obj->deserialize($value);
                array_push($this->Failures, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
