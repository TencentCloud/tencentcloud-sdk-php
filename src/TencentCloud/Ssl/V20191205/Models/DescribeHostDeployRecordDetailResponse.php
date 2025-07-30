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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeHostDeployRecordDetail返回参数结构体
 *
 * @method integer getTotalCount() 获取部署记录总数
 * @method void setTotalCount(integer $TotalCount) 设置部署记录总数
 * @method array getDeployRecordDetailList() 获取证书部署记录列表
 * @method void setDeployRecordDetailList(array $DeployRecordDetailList) 设置证书部署记录列表
 * @method integer getSuccessTotalCount() 获取成功总数
 * @method void setSuccessTotalCount(integer $SuccessTotalCount) 设置成功总数
 * @method integer getFailedTotalCount() 获取失败总数
 * @method void setFailedTotalCount(integer $FailedTotalCount) 设置失败总数
 * @method integer getRunningTotalCount() 获取部署中总数
 * @method void setRunningTotalCount(integer $RunningTotalCount) 设置部署中总数
 * @method integer getPendingTotalCount() 获取待部署总数
 * @method void setPendingTotalCount(integer $PendingTotalCount) 设置待部署总数
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeHostDeployRecordDetailResponse extends AbstractModel
{
    /**
     * @var integer 部署记录总数
     */
    public $TotalCount;

    /**
     * @var array 证书部署记录列表
     */
    public $DeployRecordDetailList;

    /**
     * @var integer 成功总数
     */
    public $SuccessTotalCount;

    /**
     * @var integer 失败总数
     */
    public $FailedTotalCount;

    /**
     * @var integer 部署中总数
     */
    public $RunningTotalCount;

    /**
     * @var integer 待部署总数
     */
    public $PendingTotalCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 部署记录总数
     * @param array $DeployRecordDetailList 证书部署记录列表
     * @param integer $SuccessTotalCount 成功总数
     * @param integer $FailedTotalCount 失败总数
     * @param integer $RunningTotalCount 部署中总数
     * @param integer $PendingTotalCount 待部署总数
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

        if (array_key_exists("DeployRecordDetailList",$param) and $param["DeployRecordDetailList"] !== null) {
            $this->DeployRecordDetailList = [];
            foreach ($param["DeployRecordDetailList"] as $key => $value){
                $obj = new DeployRecordDetail();
                $obj->deserialize($value);
                array_push($this->DeployRecordDetailList, $obj);
            }
        }

        if (array_key_exists("SuccessTotalCount",$param) and $param["SuccessTotalCount"] !== null) {
            $this->SuccessTotalCount = $param["SuccessTotalCount"];
        }

        if (array_key_exists("FailedTotalCount",$param) and $param["FailedTotalCount"] !== null) {
            $this->FailedTotalCount = $param["FailedTotalCount"];
        }

        if (array_key_exists("RunningTotalCount",$param) and $param["RunningTotalCount"] !== null) {
            $this->RunningTotalCount = $param["RunningTotalCount"];
        }

        if (array_key_exists("PendingTotalCount",$param) and $param["PendingTotalCount"] !== null) {
            $this->PendingTotalCount = $param["PendingTotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
