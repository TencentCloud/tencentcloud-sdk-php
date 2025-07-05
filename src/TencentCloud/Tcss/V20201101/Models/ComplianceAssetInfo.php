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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 表示一项资产的信息。
 *
 * @method integer getCustomerAssetId() 获取客户资产的ID。
 * @method void setCustomerAssetId(integer $CustomerAssetId) 设置客户资产的ID。
 * @method string getAssetType() 获取资产类别。
 * @method void setAssetType(string $AssetType) 设置资产类别。
 * @method string getAssetName() 获取资产的名称。
 * @method void setAssetName(string $AssetName) 设置资产的名称。
 * @method string getImageTag() 获取当资产为镜像时，这个字段为镜像Tag。
 * @method void setImageTag(string $ImageTag) 设置当资产为镜像时，这个字段为镜像Tag。
 * @method string getHostIP() 获取资产所在的主机IP。
 * @method void setHostIP(string $HostIP) 设置资产所在的主机IP。
 * @method string getNodeName() 获取资产所属的节点的名称
 * @method void setNodeName(string $NodeName) 设置资产所属的节点的名称
 * @method string getCheckStatus() 获取检测状态

CHECK_INIT, 待检测

CHECK_RUNNING, 检测中

CHECK_FINISHED, 检测完成

CHECK_FAILED, 检测失败
 * @method void setCheckStatus(string $CheckStatus) 设置检测状态

CHECK_INIT, 待检测

CHECK_RUNNING, 检测中

CHECK_FINISHED, 检测完成

CHECK_FAILED, 检测失败
 * @method integer getPassedPolicyItemCount() 获取此类资产通过的检测项的数目。
 * @method void setPassedPolicyItemCount(integer $PassedPolicyItemCount) 设置此类资产通过的检测项的数目。
 * @method integer getFailedPolicyItemCount() 获取此类资产未通过的检测的数目。
 * @method void setFailedPolicyItemCount(integer $FailedPolicyItemCount) 设置此类资产未通过的检测的数目。
 * @method string getLastCheckTime() 获取上次检测的时间。
 * @method void setLastCheckTime(string $LastCheckTime) 设置上次检测的时间。
 * @method string getCheckResult() 获取检测结果：
RESULT_FAILED: 未通过。
RESULT_PASSED: 通过。
 * @method void setCheckResult(string $CheckResult) 设置检测结果：
RESULT_FAILED: 未通过。
RESULT_PASSED: 通过。
 * @method string getInstanceId() 获取主机节点的实例id
 * @method void setInstanceId(string $InstanceId) 设置主机节点的实例id
 * @method ImageRegistryInfo getImageRegistryInfo() 获取镜像仓库信息
 * @method void setImageRegistryInfo(ImageRegistryInfo $ImageRegistryInfo) 设置镜像仓库信息
 * @method string getClusterID() 获取集群id
 * @method void setClusterID(string $ClusterID) 设置集群id
 * @method string getClusterName() 获取集群名称
 * @method void setClusterName(string $ClusterName) 设置集群名称
 */
class ComplianceAssetInfo extends AbstractModel
{
    /**
     * @var integer 客户资产的ID。
     */
    public $CustomerAssetId;

    /**
     * @var string 资产类别。
     */
    public $AssetType;

    /**
     * @var string 资产的名称。
     */
    public $AssetName;

    /**
     * @var string 当资产为镜像时，这个字段为镜像Tag。
     */
    public $ImageTag;

    /**
     * @var string 资产所在的主机IP。
     */
    public $HostIP;

    /**
     * @var string 资产所属的节点的名称
     */
    public $NodeName;

    /**
     * @var string 检测状态

CHECK_INIT, 待检测

CHECK_RUNNING, 检测中

CHECK_FINISHED, 检测完成

CHECK_FAILED, 检测失败
     */
    public $CheckStatus;

    /**
     * @var integer 此类资产通过的检测项的数目。
     */
    public $PassedPolicyItemCount;

    /**
     * @var integer 此类资产未通过的检测的数目。
     */
    public $FailedPolicyItemCount;

    /**
     * @var string 上次检测的时间。
     */
    public $LastCheckTime;

    /**
     * @var string 检测结果：
RESULT_FAILED: 未通过。
RESULT_PASSED: 通过。
     */
    public $CheckResult;

    /**
     * @var string 主机节点的实例id
     */
    public $InstanceId;

    /**
     * @var ImageRegistryInfo 镜像仓库信息
     */
    public $ImageRegistryInfo;

    /**
     * @var string 集群id
     */
    public $ClusterID;

    /**
     * @var string 集群名称
     */
    public $ClusterName;

    /**
     * @param integer $CustomerAssetId 客户资产的ID。
     * @param string $AssetType 资产类别。
     * @param string $AssetName 资产的名称。
     * @param string $ImageTag 当资产为镜像时，这个字段为镜像Tag。
     * @param string $HostIP 资产所在的主机IP。
     * @param string $NodeName 资产所属的节点的名称
     * @param string $CheckStatus 检测状态

CHECK_INIT, 待检测

CHECK_RUNNING, 检测中

CHECK_FINISHED, 检测完成

CHECK_FAILED, 检测失败
     * @param integer $PassedPolicyItemCount 此类资产通过的检测项的数目。
     * @param integer $FailedPolicyItemCount 此类资产未通过的检测的数目。
     * @param string $LastCheckTime 上次检测的时间。
     * @param string $CheckResult 检测结果：
RESULT_FAILED: 未通过。
RESULT_PASSED: 通过。
     * @param string $InstanceId 主机节点的实例id
     * @param ImageRegistryInfo $ImageRegistryInfo 镜像仓库信息
     * @param string $ClusterID 集群id
     * @param string $ClusterName 集群名称
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
        if (array_key_exists("CustomerAssetId",$param) and $param["CustomerAssetId"] !== null) {
            $this->CustomerAssetId = $param["CustomerAssetId"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("AssetName",$param) and $param["AssetName"] !== null) {
            $this->AssetName = $param["AssetName"];
        }

        if (array_key_exists("ImageTag",$param) and $param["ImageTag"] !== null) {
            $this->ImageTag = $param["ImageTag"];
        }

        if (array_key_exists("HostIP",$param) and $param["HostIP"] !== null) {
            $this->HostIP = $param["HostIP"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("CheckStatus",$param) and $param["CheckStatus"] !== null) {
            $this->CheckStatus = $param["CheckStatus"];
        }

        if (array_key_exists("PassedPolicyItemCount",$param) and $param["PassedPolicyItemCount"] !== null) {
            $this->PassedPolicyItemCount = $param["PassedPolicyItemCount"];
        }

        if (array_key_exists("FailedPolicyItemCount",$param) and $param["FailedPolicyItemCount"] !== null) {
            $this->FailedPolicyItemCount = $param["FailedPolicyItemCount"];
        }

        if (array_key_exists("LastCheckTime",$param) and $param["LastCheckTime"] !== null) {
            $this->LastCheckTime = $param["LastCheckTime"];
        }

        if (array_key_exists("CheckResult",$param) and $param["CheckResult"] !== null) {
            $this->CheckResult = $param["CheckResult"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ImageRegistryInfo",$param) and $param["ImageRegistryInfo"] !== null) {
            $this->ImageRegistryInfo = new ImageRegistryInfo();
            $this->ImageRegistryInfo->deserialize($param["ImageRegistryInfo"]);
        }

        if (array_key_exists("ClusterID",$param) and $param["ClusterID"] !== null) {
            $this->ClusterID = $param["ClusterID"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }
    }
}
