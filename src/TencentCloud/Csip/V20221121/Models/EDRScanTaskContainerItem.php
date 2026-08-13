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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 容器资产扫描详情项
 *
 * @method string getContainerID() 获取<p>容器ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContainerID(string $ContainerID) 设置<p>容器ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContainerName() 获取<p>容器名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContainerName(string $ContainerName) 设置<p>容器名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPodName() 获取<p>Pod名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPodName(string $PodName) 设置<p>Pod名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterID() 获取<p>集群ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterID(string $ClusterID) 设置<p>集群ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterName() 获取<p>集群名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterName(string $ClusterName) 设置<p>集群名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterType() 获取<p>集群类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterType(string $ClusterType) 设置<p>集群类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAccountName() 获取<p>资产所属账号名称（后端富化）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountName(string $AccountName) 设置<p>资产所属账号名称（后端富化）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAppId() 获取<p>所属账号AppId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(integer $AppId) 设置<p>所属账号AppId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCloudType() 获取<p>云类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCloudType(integer $CloudType) 设置<p>云类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取<p>扫描状态：WAIT/SCANNING/FINISHED/FAILED</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置<p>扫描状态：WAIT/SCANNING/FINISHED/FAILED</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRiskCount() 获取<p>告警数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskCount(integer $RiskCount) 设置<p>告警数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFailReason() 获取<p>失败原因</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailReason(string $FailReason) 设置<p>失败原因</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFixSuggestion() 获取<p>解决方案</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFixSuggestion(string $FixSuggestion) 设置<p>解决方案</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class EDRScanTaskContainerItem extends AbstractModel
{
    /**
     * @var string <p>容器ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContainerID;

    /**
     * @var string <p>容器名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContainerName;

    /**
     * @var string <p>Pod名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PodName;

    /**
     * @var string <p>集群ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterID;

    /**
     * @var string <p>集群名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterName;

    /**
     * @var string <p>集群类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterType;

    /**
     * @var string <p>资产所属账号名称（后端富化）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountName;

    /**
     * @var integer <p>所属账号AppId</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var integer <p>云类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CloudType;

    /**
     * @var string <p>扫描状态：WAIT/SCANNING/FINISHED/FAILED</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer <p>告警数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskCount;

    /**
     * @var string <p>失败原因</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailReason;

    /**
     * @var string <p>解决方案</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FixSuggestion;

    /**
     * @param string $ContainerID <p>容器ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContainerName <p>容器名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PodName <p>Pod名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterID <p>集群ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterName <p>集群名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterType <p>集群类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AccountName <p>资产所属账号名称（后端富化）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AppId <p>所属账号AppId</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CloudType <p>云类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status <p>扫描状态：WAIT/SCANNING/FINISHED/FAILED</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RiskCount <p>告警数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FailReason <p>失败原因</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FixSuggestion <p>解决方案</p>
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
        if (array_key_exists("ContainerID",$param) and $param["ContainerID"] !== null) {
            $this->ContainerID = $param["ContainerID"];
        }

        if (array_key_exists("ContainerName",$param) and $param["ContainerName"] !== null) {
            $this->ContainerName = $param["ContainerName"];
        }

        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }

        if (array_key_exists("ClusterID",$param) and $param["ClusterID"] !== null) {
            $this->ClusterID = $param["ClusterID"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("AccountName",$param) and $param["AccountName"] !== null) {
            $this->AccountName = $param["AccountName"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("CloudType",$param) and $param["CloudType"] !== null) {
            $this->CloudType = $param["CloudType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RiskCount",$param) and $param["RiskCount"] !== null) {
            $this->RiskCount = $param["RiskCount"];
        }

        if (array_key_exists("FailReason",$param) and $param["FailReason"] !== null) {
            $this->FailReason = $param["FailReason"];
        }

        if (array_key_exists("FixSuggestion",$param) and $param["FixSuggestion"] !== null) {
            $this->FixSuggestion = $param["FixSuggestion"];
        }
    }
}
