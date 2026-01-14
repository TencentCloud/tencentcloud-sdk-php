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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EstimateRebuildIndexTask返回参数结构体
 *
 * @method integer getRemainTime() 获取预估索引重建需要时间，单位秒
 * @method void setRemainTime(integer $RemainTime) 设置预估索引重建需要时间，单位秒
 * @method integer getWriteTraffic() 获取预估写流量大小，单位MB
 * @method void setWriteTraffic(integer $WriteTraffic) 设置预估写流量大小，单位MB
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class EstimateRebuildIndexTaskResponse extends AbstractModel
{
    /**
     * @var integer 预估索引重建需要时间，单位秒
     */
    public $RemainTime;

    /**
     * @var integer 预估写流量大小，单位MB
     */
    public $WriteTraffic;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $RemainTime 预估索引重建需要时间，单位秒
     * @param integer $WriteTraffic 预估写流量大小，单位MB
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
        if (array_key_exists("RemainTime",$param) and $param["RemainTime"] !== null) {
            $this->RemainTime = $param["RemainTime"];
        }

        if (array_key_exists("WriteTraffic",$param) and $param["WriteTraffic"] !== null) {
            $this->WriteTraffic = $param["WriteTraffic"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
