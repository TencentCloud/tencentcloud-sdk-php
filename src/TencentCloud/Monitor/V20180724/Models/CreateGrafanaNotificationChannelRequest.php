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
 * CreateGrafanaNotificationChannel请求参数结构体
 *
 * @method string getInstanceId() 获取<p>Grafana 实例 ID，例如：grafana-abcdefgh</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>Grafana 实例 ID，例如：grafana-abcdefgh</p>
 * @method string getChannelName() 获取<p>告警通道名称，例如：my-channel</p>
 * @method void setChannelName(string $ChannelName) 设置<p>告警通道名称，例如：my-channel</p>
 * @method array getReceivers() 获取<p>接受告警通道 ID 数组，值为告警管理/基础配置/通知模板中的模板 ID</p>
 * @method void setReceivers(array $Receivers) 设置<p>接受告警通道 ID 数组，值为告警管理/基础配置/通知模板中的模板 ID</p>
 * @method integer getOrgId() 获取<p>默认为1，建议使用 OrganizationIds</p>
 * @method void setOrgId(integer $OrgId) 设置<p>默认为1，建议使用 OrganizationIds</p>
 * @method array getExtraOrgIds() 获取<p>额外组织 ID 数组，已废弃，请使用 OrganizationIds</p>
 * @method void setExtraOrgIds(array $ExtraOrgIds) 设置<p>额外组织 ID 数组，已废弃，请使用 OrganizationIds</p>
 * @method array getOrganizationIds() 获取<p>生效的所有组织 ID 数组，默认为 [&quot;1&quot;]</p>
 * @method void setOrganizationIds(array $OrganizationIds) 设置<p>生效的所有组织 ID 数组，默认为 [&quot;1&quot;]</p>
 */
class CreateGrafanaNotificationChannelRequest extends AbstractModel
{
    /**
     * @var string <p>Grafana 实例 ID，例如：grafana-abcdefgh</p>
     */
    public $InstanceId;

    /**
     * @var string <p>告警通道名称，例如：my-channel</p>
     */
    public $ChannelName;

    /**
     * @var array <p>接受告警通道 ID 数组，值为告警管理/基础配置/通知模板中的模板 ID</p>
     */
    public $Receivers;

    /**
     * @var integer <p>默认为1，建议使用 OrganizationIds</p>
     */
    public $OrgId;

    /**
     * @var array <p>额外组织 ID 数组，已废弃，请使用 OrganizationIds</p>
     */
    public $ExtraOrgIds;

    /**
     * @var array <p>生效的所有组织 ID 数组，默认为 [&quot;1&quot;]</p>
     */
    public $OrganizationIds;

    /**
     * @param string $InstanceId <p>Grafana 实例 ID，例如：grafana-abcdefgh</p>
     * @param string $ChannelName <p>告警通道名称，例如：my-channel</p>
     * @param array $Receivers <p>接受告警通道 ID 数组，值为告警管理/基础配置/通知模板中的模板 ID</p>
     * @param integer $OrgId <p>默认为1，建议使用 OrganizationIds</p>
     * @param array $ExtraOrgIds <p>额外组织 ID 数组，已废弃，请使用 OrganizationIds</p>
     * @param array $OrganizationIds <p>生效的所有组织 ID 数组，默认为 [&quot;1&quot;]</p>
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

        if (array_key_exists("Receivers",$param) and $param["Receivers"] !== null) {
            $this->Receivers = $param["Receivers"];
        }

        if (array_key_exists("OrgId",$param) and $param["OrgId"] !== null) {
            $this->OrgId = $param["OrgId"];
        }

        if (array_key_exists("ExtraOrgIds",$param) and $param["ExtraOrgIds"] !== null) {
            $this->ExtraOrgIds = $param["ExtraOrgIds"];
        }

        if (array_key_exists("OrganizationIds",$param) and $param["OrganizationIds"] !== null) {
            $this->OrganizationIds = $param["OrganizationIds"];
        }
    }
}
