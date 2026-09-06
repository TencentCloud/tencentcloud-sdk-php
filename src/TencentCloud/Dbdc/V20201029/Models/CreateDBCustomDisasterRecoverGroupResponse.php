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
 * CreateDBCustomDisasterRecoverGroup返回参数结构体
 *
 * @method string getDisasterRecoverGroupId() 获取<p>置放群组ID</p>
 * @method void setDisasterRecoverGroupId(string $DisasterRecoverGroupId) 设置<p>置放群组ID</p>
 * @method string getName() 获取<p>置放群组名称</p>
 * @method void setName(string $Name) 设置<p>置放群组名称</p>
 * @method string getType() 获取<p>置放群组类型</p><p>枚举值：</p><ul><li>HOST： 物理机</li></ul>
 * @method void setType(string $Type) 设置<p>置放群组类型</p><p>枚举值：</p><ul><li>HOST： 物理机</li></ul>
 * @method string getStatus() 获取<p>状态</p><p>枚举值：</p><ul><li>Creating： 创建中</li></ul>
 * @method void setStatus(string $Status) 设置<p>状态</p><p>枚举值：</p><ul><li>Creating： 创建中</li></ul>
 * @method integer getNodeQuotaTotal() 获取<p>置放群组内可容纳的节点数量</p>
 * @method void setNodeQuotaTotal(integer $NodeQuotaTotal) 设置<p>置放群组内可容纳的节点数量</p>
 * @method integer getCurrentNum() 获取<p>置放群组内已有节点数量</p>
 * @method void setCurrentNum(integer $CurrentNum) 设置<p>置放群组内已有节点数量</p>
 * @method string getCreatedTime() 获取<p>创建时间</p>
 * @method void setCreatedTime(string $CreatedTime) 设置<p>创建时间</p>
 * @method string getStrategy() 获取<p>置放群组策略</p><p>枚举值：</p><ul><li>SPREAD： 分散置放群组</li></ul>
 * @method void setStrategy(string $Strategy) 设置<p>置放群组策略</p><p>枚举值：</p><ul><li>SPREAD： 分散置放群组</li></ul>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateDBCustomDisasterRecoverGroupResponse extends AbstractModel
{
    /**
     * @var string <p>置放群组ID</p>
     */
    public $DisasterRecoverGroupId;

    /**
     * @var string <p>置放群组名称</p>
     */
    public $Name;

    /**
     * @var string <p>置放群组类型</p><p>枚举值：</p><ul><li>HOST： 物理机</li></ul>
     */
    public $Type;

    /**
     * @var string <p>状态</p><p>枚举值：</p><ul><li>Creating： 创建中</li></ul>
     */
    public $Status;

    /**
     * @var integer <p>置放群组内可容纳的节点数量</p>
     */
    public $NodeQuotaTotal;

    /**
     * @var integer <p>置放群组内已有节点数量</p>
     */
    public $CurrentNum;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreatedTime;

    /**
     * @var string <p>置放群组策略</p><p>枚举值：</p><ul><li>SPREAD： 分散置放群组</li></ul>
     */
    public $Strategy;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $DisasterRecoverGroupId <p>置放群组ID</p>
     * @param string $Name <p>置放群组名称</p>
     * @param string $Type <p>置放群组类型</p><p>枚举值：</p><ul><li>HOST： 物理机</li></ul>
     * @param string $Status <p>状态</p><p>枚举值：</p><ul><li>Creating： 创建中</li></ul>
     * @param integer $NodeQuotaTotal <p>置放群组内可容纳的节点数量</p>
     * @param integer $CurrentNum <p>置放群组内已有节点数量</p>
     * @param string $CreatedTime <p>创建时间</p>
     * @param string $Strategy <p>置放群组策略</p><p>枚举值：</p><ul><li>SPREAD： 分散置放群组</li></ul>
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
        if (array_key_exists("DisasterRecoverGroupId",$param) and $param["DisasterRecoverGroupId"] !== null) {
            $this->DisasterRecoverGroupId = $param["DisasterRecoverGroupId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("NodeQuotaTotal",$param) and $param["NodeQuotaTotal"] !== null) {
            $this->NodeQuotaTotal = $param["NodeQuotaTotal"];
        }

        if (array_key_exists("CurrentNum",$param) and $param["CurrentNum"] !== null) {
            $this->CurrentNum = $param["CurrentNum"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("Strategy",$param) and $param["Strategy"] !== null) {
            $this->Strategy = $param["Strategy"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
