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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddInstances返回参数结构体
 *
 * @method string getTranId() 获取冻结流水，一次开通一个冻结流水。
 * @method void setTranId(string $TranId) 设置冻结流水，一次开通一个冻结流水。
 * @method array getDealNames() 获取后付费订单号。
 * @method void setDealNames(array $DealNames) 设置后付费订单号。
 * @method array getResourceIds() 获取发货资源id列表。
 * @method void setResourceIds(array $ResourceIds) 设置发货资源id列表。
 * @method array getBigDealIds() 获取大订单号
 * @method void setBigDealIds(array $BigDealIds) 设置大订单号
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class AddInstancesResponse extends AbstractModel
{
    /**
     * @var string 冻结流水，一次开通一个冻结流水。
     */
    public $TranId;

    /**
     * @var array 后付费订单号。
     */
    public $DealNames;

    /**
     * @var array 发货资源id列表。
     */
    public $ResourceIds;

    /**
     * @var array 大订单号
     */
    public $BigDealIds;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $TranId 冻结流水，一次开通一个冻结流水。
     * @param array $DealNames 后付费订单号。
     * @param array $ResourceIds 发货资源id列表。
     * @param array $BigDealIds 大订单号
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
        if (array_key_exists("TranId",$param) and $param["TranId"] !== null) {
            $this->TranId = $param["TranId"];
        }

        if (array_key_exists("DealNames",$param) and $param["DealNames"] !== null) {
            $this->DealNames = $param["DealNames"];
        }

        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = $param["ResourceIds"];
        }

        if (array_key_exists("BigDealIds",$param) and $param["BigDealIds"] !== null) {
            $this->BigDealIds = $param["BigDealIds"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
