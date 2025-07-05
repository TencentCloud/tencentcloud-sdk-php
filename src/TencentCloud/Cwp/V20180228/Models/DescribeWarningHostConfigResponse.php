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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeWarningHostConfig返回参数结构体
 *
 * @method integer getHostRange() 获取告警主机范围类型，0:全部主机，1:按所属项目选，2:按腾讯云标签选，3:按主机安全标签选，4:自选主机
 * @method void setHostRange(integer $HostRange) 设置告警主机范围类型，0:全部主机，1:按所属项目选，2:按腾讯云标签选，3:按主机安全标签选，4:自选主机
 * @method array getItemLabels() 获取项目或标签的名称列表，自选主机时为空
 * @method void setItemLabels(array $ItemLabels) 设置项目或标签的名称列表，自选主机时为空
 * @method array getQuuids() 获取机器列表
 * @method void setQuuids(array $Quuids) 设置机器列表
 * @method integer getTotalCount() 获取机器列表总数量
 * @method void setTotalCount(integer $TotalCount) 设置机器列表总数量
 * @method array getItemLabelIds() 获取项目或标签的id列表，自选主机时为空
 * @method void setItemLabelIds(array $ItemLabelIds) 设置项目或标签的id列表，自选主机时为空
 * @method array getExcludedQuuids() 获取需排除的机器列表
 * @method void setExcludedQuuids(array $ExcludedQuuids) 设置需排除的机器列表
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeWarningHostConfigResponse extends AbstractModel
{
    /**
     * @var integer 告警主机范围类型，0:全部主机，1:按所属项目选，2:按腾讯云标签选，3:按主机安全标签选，4:自选主机
     */
    public $HostRange;

    /**
     * @var array 项目或标签的名称列表，自选主机时为空
     */
    public $ItemLabels;

    /**
     * @var array 机器列表
     */
    public $Quuids;

    /**
     * @var integer 机器列表总数量
     */
    public $TotalCount;

    /**
     * @var array 项目或标签的id列表，自选主机时为空
     */
    public $ItemLabelIds;

    /**
     * @var array 需排除的机器列表
     */
    public $ExcludedQuuids;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $HostRange 告警主机范围类型，0:全部主机，1:按所属项目选，2:按腾讯云标签选，3:按主机安全标签选，4:自选主机
     * @param array $ItemLabels 项目或标签的名称列表，自选主机时为空
     * @param array $Quuids 机器列表
     * @param integer $TotalCount 机器列表总数量
     * @param array $ItemLabelIds 项目或标签的id列表，自选主机时为空
     * @param array $ExcludedQuuids 需排除的机器列表
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
        if (array_key_exists("HostRange",$param) and $param["HostRange"] !== null) {
            $this->HostRange = $param["HostRange"];
        }

        if (array_key_exists("ItemLabels",$param) and $param["ItemLabels"] !== null) {
            $this->ItemLabels = $param["ItemLabels"];
        }

        if (array_key_exists("Quuids",$param) and $param["Quuids"] !== null) {
            $this->Quuids = $param["Quuids"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("ItemLabelIds",$param) and $param["ItemLabelIds"] !== null) {
            $this->ItemLabelIds = $param["ItemLabelIds"];
        }

        if (array_key_exists("ExcludedQuuids",$param) and $param["ExcludedQuuids"] !== null) {
            $this->ExcludedQuuids = $param["ExcludedQuuids"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
