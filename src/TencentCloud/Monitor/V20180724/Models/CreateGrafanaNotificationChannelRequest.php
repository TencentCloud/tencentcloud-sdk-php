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
 * @method string getInstanceId() 获取实例名
 * @method void setInstanceId(string $InstanceId) 设置实例名
 * @method string getChannelName() 获取渠道名
 * @method void setChannelName(string $ChannelName) 设置渠道名
 * @method integer getOrgId() 获取组织 ID
 * @method void setOrgId(integer $OrgId) 设置组织 ID
 * @method array getReceivers() 获取接受告警通道 ID 数组
 * @method void setReceivers(array $Receivers) 设置接受告警通道 ID 数组
 * @method array getExtraOrgIds() 获取额外组织 ID 数组
 * @method void setExtraOrgIds(array $ExtraOrgIds) 设置额外组织 ID 数组
 */
class CreateGrafanaNotificationChannelRequest extends AbstractModel
{
    /**
     * @var string 实例名
     */
    public $InstanceId;

    /**
     * @var string 渠道名
     */
    public $ChannelName;

    /**
     * @var integer 组织 ID
     */
    public $OrgId;

    /**
     * @var array 接受告警通道 ID 数组
     */
    public $Receivers;

    /**
     * @var array 额外组织 ID 数组
     */
    public $ExtraOrgIds;

    /**
     * @param string $InstanceId 实例名
     * @param string $ChannelName 渠道名
     * @param integer $OrgId 组织 ID
     * @param array $Receivers 接受告警通道 ID 数组
     * @param array $ExtraOrgIds 额外组织 ID 数组
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
    }
}
