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
 * DescribeMetricSubscribePreview返回参数结构体
 *
 * @method integer getTotalCount() 获取总数量
 * @method void setTotalCount(integer $TotalCount) 设置总数量
 * @method integer getSuccessCount() 获取成功数量
 * @method void setSuccessCount(integer $SuccessCount) 设置成功数量
 * @method integer getFailCount() 获取失败数量
 * @method void setFailCount(integer $FailCount) 设置失败数量
 * @method array getSuccessInstances() 获取成功实例数据
 * @method void setSuccessInstances(array $SuccessInstances) 设置成功实例数据
 * @method array getFailInstances() 获取失败实例数据
 * @method void setFailInstances(array $FailInstances) 设置失败实例数据
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeMetricSubscribePreviewResponse extends AbstractModel
{
    /**
     * @var integer 总数量
     */
    public $TotalCount;

    /**
     * @var integer 成功数量
     */
    public $SuccessCount;

    /**
     * @var integer 失败数量
     */
    public $FailCount;

    /**
     * @var array 成功实例数据
     */
    public $SuccessInstances;

    /**
     * @var array 失败实例数据
     */
    public $FailInstances;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 总数量
     * @param integer $SuccessCount 成功数量
     * @param integer $FailCount 失败数量
     * @param array $SuccessInstances 成功实例数据
     * @param array $FailInstances 失败实例数据
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("SuccessCount",$param) and $param["SuccessCount"] !== null) {
            $this->SuccessCount = $param["SuccessCount"];
        }

        if (array_key_exists("FailCount",$param) and $param["FailCount"] !== null) {
            $this->FailCount = $param["FailCount"];
        }

        if (array_key_exists("SuccessInstances",$param) and $param["SuccessInstances"] !== null) {
            $this->SuccessInstances = [];
            foreach ($param["SuccessInstances"] as $key => $value){
                $obj = new InstanceData();
                $obj->deserialize($value);
                array_push($this->SuccessInstances, $obj);
            }
        }

        if (array_key_exists("FailInstances",$param) and $param["FailInstances"] !== null) {
            $this->FailInstances = [];
            foreach ($param["FailInstances"] as $key => $value){
                $obj = new InstanceData();
                $obj->deserialize($value);
                array_push($this->FailInstances, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
