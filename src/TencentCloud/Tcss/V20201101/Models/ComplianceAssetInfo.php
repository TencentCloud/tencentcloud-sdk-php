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
 * 表示一项资产的信息。
 *
 * @method integer getCustomerAssetId() 获取客户资产的ID。
 * @method void setCustomerAssetId(integer $CustomerAssetId) 设置客户资产的ID。
 * @method string getAssetType() 获取资产类别。
 * @method void setAssetType(string $AssetType) 设置资产类别。
 * @method string getAssetName() 获取资产的名称。
 * @method void setAssetName(string $AssetName) 设置资产的名称。
 * @method string getImageTag() 获取当资产为镜像时，这个字段为镜像Tag。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageTag(string $ImageTag) 设置当资产为镜像时，这个字段为镜像Tag。
注意：此字段可能返回 null，表示取不到有效值。
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
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPassedPolicyItemCount(integer $PassedPolicyItemCount) 设置此类资产通过的检测项的数目。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFailedPolicyItemCount() 获取此类资产未通过的检测的数目。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailedPolicyItemCount(integer $FailedPolicyItemCount) 设置此类资产未通过的检测的数目。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastCheckTime() 获取上次检测的时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastCheckTime(string $LastCheckTime) 设置上次检测的时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCheckResult() 获取检测结果：
RESULT_FAILED: 未通过。
RESULT_PASSED: 通过。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCheckResult(string $CheckResult) 设置检测结果：
RESULT_FAILED: 未通过。
RESULT_PASSED: 通过。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取主机节点的实例id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置主机节点的实例id
注意：此字段可能返回 null，表示取不到有效值。
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
注意：此字段可能返回 null，表示取不到有效值。
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
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PassedPolicyItemCount;

    /**
     * @var integer 此类资产未通过的检测的数目。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailedPolicyItemCount;

    /**
     * @var string 上次检测的时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastCheckTime;

    /**
     * @var string 检测结果：
RESULT_FAILED: 未通过。
RESULT_PASSED: 通过。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CheckResult;

    /**
     * @var string 主机节点的实例id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @param integer $CustomerAssetId 客户资产的ID。
     * @param string $AssetType 资产类别。
     * @param string $AssetName 资产的名称。
     * @param string $ImageTag 当资产为镜像时，这个字段为镜像Tag。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HostIP 资产所在的主机IP。
     * @param string $NodeName 资产所属的节点的名称
     * @param string $CheckStatus 检测状态

CHECK_INIT, 待检测

CHECK_RUNNING, 检测中

CHECK_FINISHED, 检测完成

CHECK_FAILED, 检测失败
     * @param integer $PassedPolicyItemCount 此类资产通过的检测项的数目。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FailedPolicyItemCount 此类资产未通过的检测的数目。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastCheckTime 上次检测的时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CheckResult 检测结果：
RESULT_FAILED: 未通过。
RESULT_PASSED: 通过。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId 主机节点的实例id
注意：此字段可能返回 null，表示取不到有效值。
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
    }
}
