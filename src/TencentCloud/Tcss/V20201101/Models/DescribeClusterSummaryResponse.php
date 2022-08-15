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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClusterSummary返回参数结构体
 *
 * @method integer getTotalCount() 获取集群总数
 * @method void setTotalCount(integer $TotalCount) 设置集群总数
 * @method integer getRiskClusterCount() 获取有风险的集群数量
 * @method void setRiskClusterCount(integer $RiskClusterCount) 设置有风险的集群数量
 * @method integer getUncheckClusterCount() 获取未检查的集群数量
 * @method void setUncheckClusterCount(integer $UncheckClusterCount) 设置未检查的集群数量
 * @method integer getManagedClusterCount() 获取托管集群数量
 * @method void setManagedClusterCount(integer $ManagedClusterCount) 设置托管集群数量
 * @method integer getIndependentClusterCount() 获取独立集群数量
 * @method void setIndependentClusterCount(integer $IndependentClusterCount) 设置独立集群数量
 * @method integer getNoRiskClusterCount() 获取无风险的集群数量
 * @method void setNoRiskClusterCount(integer $NoRiskClusterCount) 设置无风险的集群数量
 * @method integer getCheckedClusterCount() 获取已经检查集群数
 * @method void setCheckedClusterCount(integer $CheckedClusterCount) 设置已经检查集群数
 * @method integer getAutoCheckClusterCount() 获取自动检查集群数
 * @method void setAutoCheckClusterCount(integer $AutoCheckClusterCount) 设置自动检查集群数
 * @method integer getManualCheckClusterCount() 获取手动检查集群数
 * @method void setManualCheckClusterCount(integer $ManualCheckClusterCount) 设置手动检查集群数
 * @method integer getFailedClusterCount() 获取检查失败集群数
 * @method void setFailedClusterCount(integer $FailedClusterCount) 设置检查失败集群数
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeClusterSummaryResponse extends AbstractModel
{
    /**
     * @var integer 集群总数
     */
    public $TotalCount;

    /**
     * @var integer 有风险的集群数量
     */
    public $RiskClusterCount;

    /**
     * @var integer 未检查的集群数量
     */
    public $UncheckClusterCount;

    /**
     * @var integer 托管集群数量
     */
    public $ManagedClusterCount;

    /**
     * @var integer 独立集群数量
     */
    public $IndependentClusterCount;

    /**
     * @var integer 无风险的集群数量
     */
    public $NoRiskClusterCount;

    /**
     * @var integer 已经检查集群数
     */
    public $CheckedClusterCount;

    /**
     * @var integer 自动检查集群数
     */
    public $AutoCheckClusterCount;

    /**
     * @var integer 手动检查集群数
     */
    public $ManualCheckClusterCount;

    /**
     * @var integer 检查失败集群数
     */
    public $FailedClusterCount;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 集群总数
     * @param integer $RiskClusterCount 有风险的集群数量
     * @param integer $UncheckClusterCount 未检查的集群数量
     * @param integer $ManagedClusterCount 托管集群数量
     * @param integer $IndependentClusterCount 独立集群数量
     * @param integer $NoRiskClusterCount 无风险的集群数量
     * @param integer $CheckedClusterCount 已经检查集群数
     * @param integer $AutoCheckClusterCount 自动检查集群数
     * @param integer $ManualCheckClusterCount 手动检查集群数
     * @param integer $FailedClusterCount 检查失败集群数
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("RiskClusterCount",$param) and $param["RiskClusterCount"] !== null) {
            $this->RiskClusterCount = $param["RiskClusterCount"];
        }

        if (array_key_exists("UncheckClusterCount",$param) and $param["UncheckClusterCount"] !== null) {
            $this->UncheckClusterCount = $param["UncheckClusterCount"];
        }

        if (array_key_exists("ManagedClusterCount",$param) and $param["ManagedClusterCount"] !== null) {
            $this->ManagedClusterCount = $param["ManagedClusterCount"];
        }

        if (array_key_exists("IndependentClusterCount",$param) and $param["IndependentClusterCount"] !== null) {
            $this->IndependentClusterCount = $param["IndependentClusterCount"];
        }

        if (array_key_exists("NoRiskClusterCount",$param) and $param["NoRiskClusterCount"] !== null) {
            $this->NoRiskClusterCount = $param["NoRiskClusterCount"];
        }

        if (array_key_exists("CheckedClusterCount",$param) and $param["CheckedClusterCount"] !== null) {
            $this->CheckedClusterCount = $param["CheckedClusterCount"];
        }

        if (array_key_exists("AutoCheckClusterCount",$param) and $param["AutoCheckClusterCount"] !== null) {
            $this->AutoCheckClusterCount = $param["AutoCheckClusterCount"];
        }

        if (array_key_exists("ManualCheckClusterCount",$param) and $param["ManualCheckClusterCount"] !== null) {
            $this->ManualCheckClusterCount = $param["ManualCheckClusterCount"];
        }

        if (array_key_exists("FailedClusterCount",$param) and $param["FailedClusterCount"] !== null) {
            $this->FailedClusterCount = $param["FailedClusterCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
