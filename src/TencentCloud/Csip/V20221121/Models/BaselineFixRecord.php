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
 * 基线风险修复历史记录
 *
 * @method integer getID() 获取<p>修复记录主键 ID。</p>
 * @method void setID(integer $ID) 设置<p>修复记录主键 ID。</p>
 * @method integer getAppID() 获取<p>租户 AppID。</p>
 * @method void setAppID(integer $AppID) 设置<p>租户 AppID。</p>
 * @method BaselineItem getItemInfo() 获取<p>被修复的检测项基础信息。</p>
 * @method void setItemInfo(BaselineItem $ItemInfo) 设置<p>被修复的检测项基础信息。</p>
 * @method BaselineHostAsset getHostInfo() 获取<p>本次修复涉及的主机资产信息，无数据时为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostInfo(BaselineHostAsset $HostInfo) 设置<p>本次修复涉及的主机资产信息，无数据时为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method BaselineClusterAsset getClusterInfo() 获取<p>集群资产信息，无数据时为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterInfo(BaselineClusterAsset $ClusterInfo) 设置<p>集群资产信息，无数据时为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssetType() 获取<p>资产类型：HOST（主机）、CLUSTER（容器集群）。</p>
 * @method void setAssetType(string $AssetType) 设置<p>资产类型：HOST（主机）、CLUSTER（容器集群）。</p>
 * @method string getFixTime() 获取<p>修复完成时间。</p>
 * @method void setFixTime(string $FixTime) 设置<p>修复完成时间。</p>
 * @method string getDiscoveryTime() 获取<p>该风险首次被发现的时间。</p>
 * @method void setDiscoveryTime(string $DiscoveryTime) 设置<p>该风险首次被发现的时间。</p>
 */
class BaselineFixRecord extends AbstractModel
{
    /**
     * @var integer <p>修复记录主键 ID。</p>
     */
    public $ID;

    /**
     * @var integer <p>租户 AppID。</p>
     */
    public $AppID;

    /**
     * @var BaselineItem <p>被修复的检测项基础信息。</p>
     */
    public $ItemInfo;

    /**
     * @var BaselineHostAsset <p>本次修复涉及的主机资产信息，无数据时为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostInfo;

    /**
     * @var BaselineClusterAsset <p>集群资产信息，无数据时为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterInfo;

    /**
     * @var string <p>资产类型：HOST（主机）、CLUSTER（容器集群）。</p>
     */
    public $AssetType;

    /**
     * @var string <p>修复完成时间。</p>
     */
    public $FixTime;

    /**
     * @var string <p>该风险首次被发现的时间。</p>
     */
    public $DiscoveryTime;

    /**
     * @param integer $ID <p>修复记录主键 ID。</p>
     * @param integer $AppID <p>租户 AppID。</p>
     * @param BaselineItem $ItemInfo <p>被修复的检测项基础信息。</p>
     * @param BaselineHostAsset $HostInfo <p>本次修复涉及的主机资产信息，无数据时为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param BaselineClusterAsset $ClusterInfo <p>集群资产信息，无数据时为 null。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssetType <p>资产类型：HOST（主机）、CLUSTER（容器集群）。</p>
     * @param string $FixTime <p>修复完成时间。</p>
     * @param string $DiscoveryTime <p>该风险首次被发现的时间。</p>
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

        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("ItemInfo",$param) and $param["ItemInfo"] !== null) {
            $this->ItemInfo = new BaselineItem();
            $this->ItemInfo->deserialize($param["ItemInfo"]);
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

        if (array_key_exists("FixTime",$param) and $param["FixTime"] !== null) {
            $this->FixTime = $param["FixTime"];
        }

        if (array_key_exists("DiscoveryTime",$param) and $param["DiscoveryTime"] !== null) {
            $this->DiscoveryTime = $param["DiscoveryTime"];
        }
    }
}
