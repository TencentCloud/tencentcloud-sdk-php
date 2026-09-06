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
namespace TencentCloud\Dbdc\V20201029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBCustomDisasterRecoverGroupQuota返回参数结构体
 *
 * @method integer getGroupQuota() 获取<p>可创建置放群组数量的上限</p>
 * @method void setGroupQuota(integer $GroupQuota) 设置<p>可创建置放群组数量的上限</p>
 * @method integer getCurrentNum() 获取<p>已经创建的置放群组数量</p>
 * @method void setCurrentNum(integer $CurrentNum) 设置<p>已经创建的置放群组数量</p>
 * @method integer getNodeInHostGroupQuota() 获取<p>物理机类型置放群组内节点的配额数</p>
 * @method void setNodeInHostGroupQuota(integer $NodeInHostGroupQuota) 设置<p>物理机类型置放群组内节点的配额数</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDBCustomDisasterRecoverGroupQuotaResponse extends AbstractModel
{
    /**
     * @var integer <p>可创建置放群组数量的上限</p>
     */
    public $GroupQuota;

    /**
     * @var integer <p>已经创建的置放群组数量</p>
     */
    public $CurrentNum;

    /**
     * @var integer <p>物理机类型置放群组内节点的配额数</p>
     */
    public $NodeInHostGroupQuota;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $GroupQuota <p>可创建置放群组数量的上限</p>
     * @param integer $CurrentNum <p>已经创建的置放群组数量</p>
     * @param integer $NodeInHostGroupQuota <p>物理机类型置放群组内节点的配额数</p>
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
        if (array_key_exists("GroupQuota",$param) and $param["GroupQuota"] !== null) {
            $this->GroupQuota = $param["GroupQuota"];
        }

        if (array_key_exists("CurrentNum",$param) and $param["CurrentNum"] !== null) {
            $this->CurrentNum = $param["CurrentNum"];
        }

        if (array_key_exists("NodeInHostGroupQuota",$param) and $param["NodeInHostGroupQuota"] !== null) {
            $this->NodeInHostGroupQuota = $param["NodeInHostGroupQuota"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
