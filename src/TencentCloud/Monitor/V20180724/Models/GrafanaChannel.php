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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Grafana 告警渠道
 *
 * @method string getChannelId() 获取<p>渠道 ID</p>
 * @method void setChannelId(string $ChannelId) 设置<p>渠道 ID</p>
 * @method string getChannelName() 获取<p>渠道名</p>
 * @method void setChannelName(string $ChannelName) 设置<p>渠道名</p>
 * @method array getReceivers() 获取<p>告警通道模板 ID 数组</p>
 * @method void setReceivers(array $Receivers) 设置<p>告警通道模板 ID 数组</p>
 * @method string getCreatedAt() 获取<p>创建时间</p>
 * @method void setCreatedAt(string $CreatedAt) 设置<p>创建时间</p>
 * @method string getUpdatedAt() 获取<p>更新时间</p>
 * @method void setUpdatedAt(string $UpdatedAt) 设置<p>更新时间</p>
 * @method array getOrganizationIds() 获取<p>告警渠道的所有生效组织</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrganizationIds(array $OrganizationIds) 设置<p>告警渠道的所有生效组织</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class GrafanaChannel extends AbstractModel
{
    /**
     * @var string <p>渠道 ID</p>
     */
    public $ChannelId;

    /**
     * @var string <p>渠道名</p>
     */
    public $ChannelName;

    /**
     * @var array <p>告警通道模板 ID 数组</p>
     */
    public $Receivers;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreatedAt;

    /**
     * @var string <p>更新时间</p>
     */
    public $UpdatedAt;

    /**
     * @var array <p>告警渠道的所有生效组织</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrganizationIds;

    /**
     * @param string $ChannelId <p>渠道 ID</p>
     * @param string $ChannelName <p>渠道名</p>
     * @param array $Receivers <p>告警通道模板 ID 数组</p>
     * @param string $CreatedAt <p>创建时间</p>
     * @param string $UpdatedAt <p>更新时间</p>
     * @param array $OrganizationIds <p>告警渠道的所有生效组织</p>
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

        if (array_key_exists("OrganizationIds",$param) and $param["OrganizationIds"] !== null) {
            $this->OrganizationIds = $param["OrganizationIds"];
        }
    }
}
