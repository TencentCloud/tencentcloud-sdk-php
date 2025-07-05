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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeConcurrencyUsageGraph返回参数结构体
 *
 * @method array getX() 获取X轴: 时间区域；根据查询条件的粒度返回“分/小时/日”两种区间范围
 * @method void setX(array $X) 设置X轴: 时间区域；根据查询条件的粒度返回“分/小时/日”两种区间范围
 * @method array getAvailableY() 获取可用并发y轴坐标
 * @method void setAvailableY(array $AvailableY) 设置可用并发y轴坐标
 * @method array getSuccessCallY() 获取成功调用并发y轴坐标
 * @method void setSuccessCallY(array $SuccessCallY) 设置成功调用并发y轴坐标
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeConcurrencyUsageGraphResponse extends AbstractModel
{
    /**
     * @var array X轴: 时间区域；根据查询条件的粒度返回“分/小时/日”两种区间范围
     */
    public $X;

    /**
     * @var array 可用并发y轴坐标
     */
    public $AvailableY;

    /**
     * @var array 成功调用并发y轴坐标
     */
    public $SuccessCallY;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $X X轴: 时间区域；根据查询条件的粒度返回“分/小时/日”两种区间范围
     * @param array $AvailableY 可用并发y轴坐标
     * @param array $SuccessCallY 成功调用并发y轴坐标
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
        if (array_key_exists("X",$param) and $param["X"] !== null) {
            $this->X = $param["X"];
        }

        if (array_key_exists("AvailableY",$param) and $param["AvailableY"] !== null) {
            $this->AvailableY = $param["AvailableY"];
        }

        if (array_key_exists("SuccessCallY",$param) and $param["SuccessCallY"] !== null) {
            $this->SuccessCallY = $param["SuccessCallY"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
