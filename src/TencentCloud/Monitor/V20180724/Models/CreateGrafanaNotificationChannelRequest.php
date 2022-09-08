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
 * CreateGrafanaNotificationChannel请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID
 * @method void setInstanceId(string $InstanceId) 设置实例 ID
 * @method string getChannelName() 获取渠道名
 * @method void setChannelName(string $ChannelName) 设置渠道名
 * @method integer getOrgId() 获取默认为1，已废弃，请使用 OrganizationIds
 * @method void setOrgId(integer $OrgId) 设置默认为1，已废弃，请使用 OrganizationIds
 * @method array getReceivers() 获取接受告警通道 ID 数组
 * @method void setReceivers(array $Receivers) 设置接受告警通道 ID 数组
 * @method array getExtraOrgIds() 获取额外组织 ID 数组，已废弃，请使用 OrganizationIds
 * @method void setExtraOrgIds(array $ExtraOrgIds) 设置额外组织 ID 数组，已废弃，请使用 OrganizationIds
 * @method array getOrganizationIds() 获取生效的所有组织 ID 数组，默认为 ["1"]
 * @method void setOrganizationIds(array $OrganizationIds) 设置生效的所有组织 ID 数组，默认为 ["1"]
 */
class CreateGrafanaNotificationChannelRequest extends AbstractModel
{
    /**
     * @var string 实例 ID
     */
    public $InstanceId;

    /**
     * @var string 渠道名
     */
    public $ChannelName;

    /**
     * @var integer 默认为1，已废弃，请使用 OrganizationIds
     */
    public $OrgId;

    /**
     * @var array 接受告警通道 ID 数组
     */
    public $Receivers;

    /**
     * @var array 额外组织 ID 数组，已废弃，请使用 OrganizationIds
     */
    public $ExtraOrgIds;

    /**
     * @var array 生效的所有组织 ID 数组，默认为 ["1"]
     */
    public $OrganizationIds;

    /**
     * @param string $InstanceId 实例 ID
     * @param string $ChannelName 渠道名
     * @param integer $OrgId 默认为1，已废弃，请使用 OrganizationIds
     * @param array $Receivers 接受告警通道 ID 数组
     * @param array $ExtraOrgIds 额外组织 ID 数组，已废弃，请使用 OrganizationIds
     * @param array $OrganizationIds 生效的所有组织 ID 数组，默认为 ["1"]
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }

        if (array_key_exists("OrgId",$param) and $param["OrgId"] !== null) {
            $this->OrgId = $param["OrgId"];
        }

        if (array_key_exists("Receivers",$param) and $param["Receivers"] !== null) {
            $this->Receivers = $param["Receivers"];
        }

        if (array_key_exists("ExtraOrgIds",$param) and $param["ExtraOrgIds"] !== null) {
            $this->ExtraOrgIds = $param["ExtraOrgIds"];
        }

        if (array_key_exists("OrganizationIds",$param) and $param["OrganizationIds"] !== null) {
            $this->OrganizationIds = $param["OrganizationIds"];
        }
    }
}
