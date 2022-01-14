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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * proxy代理组信息
 *
 * @method string getProxyGroupId() 获取代理组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProxyGroupId(string $ProxyGroupId) 设置代理组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNodeCount() 获取代理节点数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeCount(integer $NodeCount) 设置代理节点数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取状态：发货中（init）运行中（online）下线中（offline）销毁中（destroy）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置状态：发货中（init）运行中（online）下线中（offline）销毁中（destroy）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getZone() 获取可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZone(string $Zone) 设置可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getOpenRW() 获取是否开启读写分离
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOpenRW(boolean $OpenRW) 设置是否开启读写分离
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCurrentProxyVersion() 获取当前代理版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCurrentProxyVersion(string $CurrentProxyVersion) 设置当前代理版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSupportUpgradeProxyVersion() 获取支持升级版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSupportUpgradeProxyVersion(string $SupportUpgradeProxyVersion) 设置支持升级版本
注意：此字段可能返回 null，表示取不到有效值。
 */
class BaseGroupInfo extends AbstractModel
{
    /**
     * @var string 代理组ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProxyGroupId;

    /**
     * @var integer 代理节点数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeCount;

    /**
     * @var string 状态：发货中（init）运行中（online）下线中（offline）销毁中（destroy）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var string 可用区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Zone;

    /**
     * @var boolean 是否开启读写分离
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OpenRW;

    /**
     * @var string 当前代理版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CurrentProxyVersion;

    /**
     * @var string 支持升级版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SupportUpgradeProxyVersion;

    /**
     * @param string $ProxyGroupId 代理组ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $NodeCount 代理节点数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 状态：发货中（init）运行中（online）下线中（offline）销毁中（destroy）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region 地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Zone 可用区
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $OpenRW 是否开启读写分离
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CurrentProxyVersion 当前代理版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SupportUpgradeProxyVersion 支持升级版本
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
        if (array_key_exists("ProxyGroupId",$param) and $param["ProxyGroupId"] !== null) {
            $this->ProxyGroupId = $param["ProxyGroupId"];
        }

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("OpenRW",$param) and $param["OpenRW"] !== null) {
            $this->OpenRW = $param["OpenRW"];
        }

        if (array_key_exists("CurrentProxyVersion",$param) and $param["CurrentProxyVersion"] !== null) {
            $this->CurrentProxyVersion = $param["CurrentProxyVersion"];
        }

        if (array_key_exists("SupportUpgradeProxyVersion",$param) and $param["SupportUpgradeProxyVersion"] !== null) {
            $this->SupportUpgradeProxyVersion = $param["SupportUpgradeProxyVersion"];
        }
    }
}
