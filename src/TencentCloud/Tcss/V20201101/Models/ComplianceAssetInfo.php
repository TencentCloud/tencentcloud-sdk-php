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
 * @method integer getCustomerAssetId() 获取<p>客户资产的ID。</p>
 * @method void setCustomerAssetId(integer $CustomerAssetId) 设置<p>客户资产的ID。</p>
 * @method string getAssetType() 获取<p>资产类别。</p>
 * @method void setAssetType(string $AssetType) 设置<p>资产类别。</p>
 * @method string getAssetName() 获取<p>资产的名称。</p>
 * @method void setAssetName(string $AssetName) 设置<p>资产的名称。</p>
 * @method string getImageTag() 获取<p>当资产为镜像时，这个字段为镜像Tag。</p>
 * @method void setImageTag(string $ImageTag) 设置<p>当资产为镜像时，这个字段为镜像Tag。</p>
 * @method string getHostIP() 获取<p>资产所在的主机IP。</p>
 * @method void setHostIP(string $HostIP) 设置<p>资产所在的主机IP。</p>
 * @method string getNodeName() 获取<p>资产所属的节点的名称</p>
 * @method void setNodeName(string $NodeName) 设置<p>资产所属的节点的名称</p>
 * @method string getCheckStatus() 获取<p>检测状态</p><p>CHECK_INIT, 待检测</p><p>CHECK_RUNNING, 检测中</p><p>CHECK_FINISHED, 检测完成</p><p>CHECK_FAILED, 检测失败</p>
 * @method void setCheckStatus(string $CheckStatus) 设置<p>检测状态</p><p>CHECK_INIT, 待检测</p><p>CHECK_RUNNING, 检测中</p><p>CHECK_FINISHED, 检测完成</p><p>CHECK_FAILED, 检测失败</p>
 * @method integer getPassedPolicyItemCount() 获取<p>此类资产通过的检测项的数目。</p>
 * @method void setPassedPolicyItemCount(integer $PassedPolicyItemCount) 设置<p>此类资产通过的检测项的数目。</p>
 * @method integer getFailedPolicyItemCount() 获取<p>此类资产未通过的检测的数目。</p>
 * @method void setFailedPolicyItemCount(integer $FailedPolicyItemCount) 设置<p>此类资产未通过的检测的数目。</p>
 * @method string getLastCheckTime() 获取<p>上次检测的时间。</p>
 * @method void setLastCheckTime(string $LastCheckTime) 设置<p>上次检测的时间。</p>
 * @method string getCheckResult() 获取<p>检测结果：<br>RESULT_FAILED: 未通过。<br>RESULT_PASSED: 通过。</p>
 * @method void setCheckResult(string $CheckResult) 设置<p>检测结果：<br>RESULT_FAILED: 未通过。<br>RESULT_PASSED: 通过。</p>
 * @method string getInstanceId() 获取<p>主机节点的实例id</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>主机节点的实例id</p>
 * @method ImageRegistryInfo getImageRegistryInfo() 获取<p>镜像仓库信息</p>
 * @method void setImageRegistryInfo(ImageRegistryInfo $ImageRegistryInfo) 设置<p>镜像仓库信息</p>
 * @method string getClusterID() 获取<p>集群id</p>
 * @method void setClusterID(string $ClusterID) 设置<p>集群id</p>
 * @method string getClusterName() 获取<p>集群名称</p>
 * @method void setClusterName(string $ClusterName) 设置<p>集群名称</p>
 * @method string getAssetUniqueID() 获取<p>资产唯一ID</p><p>默认值：-</p>
 * @method void setAssetUniqueID(string $AssetUniqueID) 设置<p>资产唯一ID</p><p>默认值：-</p>
 */
class ComplianceAssetInfo extends AbstractModel
{
    /**
     * @var integer <p>客户资产的ID。</p>
     */
    public $CustomerAssetId;

    /**
     * @var string <p>资产类别。</p>
     */
    public $AssetType;

    /**
     * @var string <p>资产的名称。</p>
     */
    public $AssetName;

    /**
     * @var string <p>当资产为镜像时，这个字段为镜像Tag。</p>
     */
    public $ImageTag;

    /**
     * @var string <p>资产所在的主机IP。</p>
     */
    public $HostIP;

    /**
     * @var string <p>资产所属的节点的名称</p>
     */
    public $NodeName;

    /**
     * @var string <p>检测状态</p><p>CHECK_INIT, 待检测</p><p>CHECK_RUNNING, 检测中</p><p>CHECK_FINISHED, 检测完成</p><p>CHECK_FAILED, 检测失败</p>
     */
    public $CheckStatus;

    /**
     * @var integer <p>此类资产通过的检测项的数目。</p>
     */
    public $PassedPolicyItemCount;

    /**
     * @var integer <p>此类资产未通过的检测的数目。</p>
     */
    public $FailedPolicyItemCount;

    /**
     * @var string <p>上次检测的时间。</p>
     */
    public $LastCheckTime;

    /**
     * @var string <p>检测结果：<br>RESULT_FAILED: 未通过。<br>RESULT_PASSED: 通过。</p>
     */
    public $CheckResult;

    /**
     * @var string <p>主机节点的实例id</p>
     */
    public $InstanceId;

    /**
     * @var ImageRegistryInfo <p>镜像仓库信息</p>
     */
    public $ImageRegistryInfo;

    /**
     * @var string <p>集群id</p>
     */
    public $ClusterID;

    /**
     * @var string <p>集群名称</p>
     */
    public $ClusterName;

    /**
     * @var string <p>资产唯一ID</p><p>默认值：-</p>
     */
    public $AssetUniqueID;

    /**
     * @param integer $CustomerAssetId <p>客户资产的ID。</p>
     * @param string $AssetType <p>资产类别。</p>
     * @param string $AssetName <p>资产的名称。</p>
     * @param string $ImageTag <p>当资产为镜像时，这个字段为镜像Tag。</p>
     * @param string $HostIP <p>资产所在的主机IP。</p>
     * @param string $NodeName <p>资产所属的节点的名称</p>
     * @param string $CheckStatus <p>检测状态</p><p>CHECK_INIT, 待检测</p><p>CHECK_RUNNING, 检测中</p><p>CHECK_FINISHED, 检测完成</p><p>CHECK_FAILED, 检测失败</p>
     * @param integer $PassedPolicyItemCount <p>此类资产通过的检测项的数目。</p>
     * @param integer $FailedPolicyItemCount <p>此类资产未通过的检测的数目。</p>
     * @param string $LastCheckTime <p>上次检测的时间。</p>
     * @param string $CheckResult <p>检测结果：<br>RESULT_FAILED: 未通过。<br>RESULT_PASSED: 通过。</p>
     * @param string $InstanceId <p>主机节点的实例id</p>
     * @param ImageRegistryInfo $ImageRegistryInfo <p>镜像仓库信息</p>
     * @param string $ClusterID <p>集群id</p>
     * @param string $ClusterName <p>集群名称</p>
     * @param string $AssetUniqueID <p>资产唯一ID</p><p>默认值：-</p>
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

        if (array_key_exists("AssetUniqueID",$param) and $param["AssetUniqueID"] !== null) {
            $this->AssetUniqueID = $param["AssetUniqueID"];
        }
    }
}
