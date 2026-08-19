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
 * 单个资产上单个检测项的风险结果记录。
 *
 * @method integer getID() 获取<p>风险记录主键 ID。</p>
 * @method void setID(integer $ID) 设置<p>风险记录主键 ID。</p>
 * @method BaselineHostAsset getHostInfo() 获取<p>命中风险的主机资产信息，无数据时为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostInfo(BaselineHostAsset $HostInfo) 设置<p>命中风险的主机资产信息，无数据时为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method BaselineClusterAsset getClusterInfo() 获取<p>集群资产信息，无数据时为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterInfo(BaselineClusterAsset $ClusterInfo) 设置<p>集群资产信息，无数据时为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssetType() 获取<p>命中资产的资产类型。取值：</p><ul><li>HOST：主机</li><li>CLUSTER：集群</li><li>POD：Pod</li><li>CONTAINER：容器</li><li>IMAGE：镜像</li></ul>
 * @method void setAssetType(string $AssetType) 设置<p>命中资产的资产类型。取值：</p><ul><li>HOST：主机</li><li>CLUSTER：集群</li><li>POD：Pod</li><li>CONTAINER：容器</li><li>IMAGE：镜像</li></ul>
 * @method string getResultStatus() 获取<p>风险检测结果状态。取值：</p><ul><li>CHECKING：检测中</li><li>PASS：通过</li><li>NOT_PASS：未通过</li><li>CHECK_FAILED：检测失败</li><li>NOT_INVOLVED：不涉及</li><li>IGNORED：已忽略</li></ul>
 * @method void setResultStatus(string $ResultStatus) 设置<p>风险检测结果状态。取值：</p><ul><li>CHECKING：检测中</li><li>PASS：通过</li><li>NOT_PASS：未通过</li><li>CHECK_FAILED：检测失败</li><li>NOT_INVOLVED：不涉及</li><li>IGNORED：已忽略</li></ul>
 * @method string getLatestCheckTime() 获取<p>最近检查时间。</p>
 * @method void setLatestCheckTime(string $LatestCheckTime) 设置<p>最近检查时间。</p>
 * @method integer getItemID() 获取<p>基线检测项 ID。</p>
 * @method void setItemID(integer $ItemID) 设置<p>基线检测项 ID。</p>
 * @method string getRiskID() 获取<p>风险事件 ID，用于唯一标识该风险记录。</p>
 * @method void setRiskID(string $RiskID) 设置<p>风险事件 ID，用于唯一标识该风险记录。</p>
 * @method string getJobID() 获取<p>本次扫描的全局 JobID。</p>
 * @method void setJobID(string $JobID) 设置<p>本次扫描的全局 JobID。</p>
 */
class BaselineItemRiskRecord extends AbstractModel
{
    /**
     * @var integer <p>风险记录主键 ID。</p>
     */
    public $ID;

    /**
     * @var BaselineHostAsset <p>命中风险的主机资产信息，无数据时为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostInfo;

    /**
     * @var BaselineClusterAsset <p>集群资产信息，无数据时为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterInfo;

    /**
     * @var string <p>命中资产的资产类型。取值：</p><ul><li>HOST：主机</li><li>CLUSTER：集群</li><li>POD：Pod</li><li>CONTAINER：容器</li><li>IMAGE：镜像</li></ul>
     */
    public $AssetType;

    /**
     * @var string <p>风险检测结果状态。取值：</p><ul><li>CHECKING：检测中</li><li>PASS：通过</li><li>NOT_PASS：未通过</li><li>CHECK_FAILED：检测失败</li><li>NOT_INVOLVED：不涉及</li><li>IGNORED：已忽略</li></ul>
     */
    public $ResultStatus;

    /**
     * @var string <p>最近检查时间。</p>
     */
    public $LatestCheckTime;

    /**
     * @var integer <p>基线检测项 ID。</p>
     */
    public $ItemID;

    /**
     * @var string <p>风险事件 ID，用于唯一标识该风险记录。</p>
     */
    public $RiskID;

    /**
     * @var string <p>本次扫描的全局 JobID。</p>
     */
    public $JobID;

    /**
     * @param integer $ID <p>风险记录主键 ID。</p>
     * @param BaselineHostAsset $HostInfo <p>命中风险的主机资产信息，无数据时为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param BaselineClusterAsset $ClusterInfo <p>集群资产信息，无数据时为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssetType <p>命中资产的资产类型。取值：</p><ul><li>HOST：主机</li><li>CLUSTER：集群</li><li>POD：Pod</li><li>CONTAINER：容器</li><li>IMAGE：镜像</li></ul>
     * @param string $ResultStatus <p>风险检测结果状态。取值：</p><ul><li>CHECKING：检测中</li><li>PASS：通过</li><li>NOT_PASS：未通过</li><li>CHECK_FAILED：检测失败</li><li>NOT_INVOLVED：不涉及</li><li>IGNORED：已忽略</li></ul>
     * @param string $LatestCheckTime <p>最近检查时间。</p>
     * @param integer $ItemID <p>基线检测项 ID。</p>
     * @param string $RiskID <p>风险事件 ID，用于唯一标识该风险记录。</p>
     * @param string $JobID <p>本次扫描的全局 JobID。</p>
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("HostInfo",$param) and $param["HostInfo"] !== null) {
            $this->HostInfo = new BaselineHostAsset();
            $this->HostInfo->deserialize($param["HostInfo"]);
        }

        if (array_key_exists("ClusterInfo",$param) and $param["ClusterInfo"] !== null) {
            $this->ClusterInfo = new BaselineClusterAsset();
            $this->ClusterInfo->deserialize($param["ClusterInfo"]);
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("ResultStatus",$param) and $param["ResultStatus"] !== null) {
            $this->ResultStatus = $param["ResultStatus"];
        }

        if (array_key_exists("LatestCheckTime",$param) and $param["LatestCheckTime"] !== null) {
            $this->LatestCheckTime = $param["LatestCheckTime"];
        }

        if (array_key_exists("ItemID",$param) and $param["ItemID"] !== null) {
            $this->ItemID = $param["ItemID"];
        }

        if (array_key_exists("RiskID",$param) and $param["RiskID"] !== null) {
            $this->RiskID = $param["RiskID"];
        }

        if (array_key_exists("JobID",$param) and $param["JobID"] !== null) {
            $this->JobID = $param["JobID"];
        }
    }
}
