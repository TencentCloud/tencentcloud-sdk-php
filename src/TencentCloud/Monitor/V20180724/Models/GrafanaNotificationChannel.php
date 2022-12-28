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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Grafana 告警渠道
 *
 * @method string getChannelId() 获取渠道 ID
 * @method void setChannelId(string $ChannelId) 设置渠道 ID
 * @method string getChannelName() 获取渠道名
 * @method void setChannelName(string $ChannelName) 设置渠道名
 * @method array getReceivers() 获取告警通道模板 ID 数组
 * @method void setReceivers(array $Receivers) 设置告警通道模板 ID 数组
 * @method string getCreatedAt() 获取创建时间
 * @method void setCreatedAt(string $CreatedAt) 设置创建时间
 * @method string getUpdatedAt() 获取更新时间
 * @method void setUpdatedAt(string $UpdatedAt) 设置更新时间
 * @method string getOrgId() 获取默认生效组织，已废弃，请使用 OrganizationIds
 * @method void setOrgId(string $OrgId) 设置默认生效组织，已废弃，请使用 OrganizationIds
 * @method array getExtraOrgIds() 获取额外生效组织，已废弃，请使用 OrganizationIds
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtraOrgIds(array $ExtraOrgIds) 设置额外生效组织，已废弃，请使用 OrganizationIds
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getOrgIds() 获取生效组织，已废弃，请使用 OrganizationIds
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrgIds(array $OrgIds) 设置生效组织，已废弃，请使用 OrganizationIds
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getOrganizationIds() 获取告警渠道的所有生效组织
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrganizationIds(array $OrganizationIds) 设置告警渠道的所有生效组织
注意：此字段可能返回 null，表示取不到有效值。
 */
class GrafanaNotificationChannel extends AbstractModel
{
    /**
     * @var string 渠道 ID
     */
    public $ChannelId;

    /**
     * @var string 渠道名
     */
    public $ChannelName;

    /**
     * @var array 告警通道模板 ID 数组
     */
    public $Receivers;

    /**
     * @var string 创建时间
     */
    public $CreatedAt;

    /**
     * @var string 更新时间
     */
    public $UpdatedAt;

    /**
     * @var string 默认生效组织，已废弃，请使用 OrganizationIds
     */
    public $OrgId;

    /**
     * @var array 额外生效组织，已废弃，请使用 OrganizationIds
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtraOrgIds;

    /**
     * @var array 生效组织，已废弃，请使用 OrganizationIds
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrgIds;

    /**
     * @var array 告警渠道的所有生效组织
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrganizationIds;

    /**
     * @param string $ChannelId 渠道 ID
     * @param string $ChannelName 渠道名
     * @param array $Receivers 告警通道模板 ID 数组
     * @param string $CreatedAt 创建时间
     * @param string $UpdatedAt 更新时间
     * @param string $OrgId 默认生效组织，已废弃，请使用 OrganizationIds
     * @param array $ExtraOrgIds 额外生效组织，已废弃，请使用 OrganizationIds
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $OrgIds 生效组织，已废弃，请使用 OrganizationIds
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $OrganizationIds 告警渠道的所有生效组织
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
        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }

        if (array_key_exists("Receivers",$param) and $param["Receivers"] !== null) {
            $this->Receivers = $param["Receivers"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("OrgId",$param) and $param["OrgId"] !== null) {
            $this->OrgId = $param["OrgId"];
        }

        if (array_key_exists("ExtraOrgIds",$param) and $param["ExtraOrgIds"] !== null) {
            $this->ExtraOrgIds = $param["ExtraOrgIds"];
        }

        if (array_key_exists("OrgIds",$param) and $param["OrgIds"] !== null) {
            $this->OrgIds = $param["OrgIds"];
        }

        if (array_key_exists("OrganizationIds",$param) and $param["OrganizationIds"] !== null) {
            $this->OrganizationIds = $param["OrganizationIds"];
        }
    }
}
