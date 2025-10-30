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
namespace TencentCloud\Keewidb\V20220308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeConnectionConfig返回参数结构体
 *
 * @method integer getInNetLimit() 获取单分片入流量带宽限制，单位：MB。
 * @method void setInNetLimit(integer $InNetLimit) 设置单分片入流量带宽限制，单位：MB。
 * @method integer getOutNetLimit() 获取单分片出流量带宽限制，单位：MB。
 * @method void setOutNetLimit(integer $OutNetLimit) 设置单分片出流量带宽限制，单位：MB。
 * @method integer getClientLimit() 获取实例当前单分片连接数限制。
 * @method void setClientLimit(integer $ClientLimit) 设置实例当前单分片连接数限制。
 * @method integer getClientLimitMin() 获取单分片连接数限制最小值。
 * @method void setClientLimitMin(integer $ClientLimitMin) 设置单分片连接数限制最小值。
 * @method integer getClientLimitMax() 获取单分片连接数限制最大值。
 * @method void setClientLimitMax(integer $ClientLimitMax) 设置单分片连接数限制最大值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeConnectionConfigResponse extends AbstractModel
{
    /**
     * @var integer 单分片入流量带宽限制，单位：MB。
     */
    public $InNetLimit;

    /**
     * @var integer 单分片出流量带宽限制，单位：MB。
     */
    public $OutNetLimit;

    /**
     * @var integer 实例当前单分片连接数限制。
     */
    public $ClientLimit;

    /**
     * @var integer 单分片连接数限制最小值。
     */
    public $ClientLimitMin;

    /**
     * @var integer 单分片连接数限制最大值。
     */
    public $ClientLimitMax;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $InNetLimit 单分片入流量带宽限制，单位：MB。
     * @param integer $OutNetLimit 单分片出流量带宽限制，单位：MB。
     * @param integer $ClientLimit 实例当前单分片连接数限制。
     * @param integer $ClientLimitMin 单分片连接数限制最小值。
     * @param integer $ClientLimitMax 单分片连接数限制最大值。
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
        if (array_key_exists("InNetLimit",$param) and $param["InNetLimit"] !== null) {
            $this->InNetLimit = $param["InNetLimit"];
        }

        if (array_key_exists("OutNetLimit",$param) and $param["OutNetLimit"] !== null) {
            $this->OutNetLimit = $param["OutNetLimit"];
        }

        if (array_key_exists("ClientLimit",$param) and $param["ClientLimit"] !== null) {
            $this->ClientLimit = $param["ClientLimit"];
        }

        if (array_key_exists("ClientLimitMin",$param) and $param["ClientLimitMin"] !== null) {
            $this->ClientLimitMin = $param["ClientLimitMin"];
        }

        if (array_key_exists("ClientLimitMax",$param) and $param["ClientLimitMax"] !== null) {
            $this->ClientLimitMax = $param["ClientLimitMax"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
