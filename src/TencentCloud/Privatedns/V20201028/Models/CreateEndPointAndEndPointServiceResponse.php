<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Privatedns\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateEndPointAndEndPointService返回参数结构体
 *
 * @method string getEndPointId() 获取终端节点id
 * @method void setEndPointId(string $EndPointId) 设置终端节点id
 * @method string getEndPointName() 获取终端节点名
 * @method void setEndPointName(string $EndPointName) 设置终端节点名
 * @method string getEndPointServiceId() 获取终端节点服务ID
 * @method void setEndPointServiceId(string $EndPointServiceId) 设置终端节点服务ID
 * @method array getEndPointVipSet() 获取终端节点的IP列表
 * @method void setEndPointVipSet(array $EndPointVipSet) 设置终端节点的IP列表
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateEndPointAndEndPointServiceResponse extends AbstractModel
{
    /**
     * @var string 终端节点id
     */
    public $EndPointId;

    /**
     * @var string 终端节点名
     */
    public $EndPointName;

    /**
     * @var string 终端节点服务ID
     */
    public $EndPointServiceId;

    /**
     * @var array 终端节点的IP列表
     */
    public $EndPointVipSet;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $EndPointId 终端节点id
     * @param string $EndPointName 终端节点名
     * @param string $EndPointServiceId 终端节点服务ID
     * @param array $EndPointVipSet 终端节点的IP列表
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
        if (array_key_exists("EndPointId",$param) and $param["EndPointId"] !== null) {
            $this->EndPointId = $param["EndPointId"];
        }

        if (array_key_exists("EndPointName",$param) and $param["EndPointName"] !== null) {
            $this->EndPointName = $param["EndPointName"];
        }

        if (array_key_exists("EndPointServiceId",$param) and $param["EndPointServiceId"] !== null) {
            $this->EndPointServiceId = $param["EndPointServiceId"];
        }

        if (array_key_exists("EndPointVipSet",$param) and $param["EndPointVipSet"] !== null) {
            $this->EndPointVipSet = $param["EndPointVipSet"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
