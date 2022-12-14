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
 * DeleteGrafanaNotificationChannel请求参数结构体
 *
 * @method array getChannelIDs() 获取通道 ID 数组。例如：nchannel-abcd1234
 * @method void setChannelIDs(array $ChannelIDs) 设置通道 ID 数组。例如：nchannel-abcd1234
 * @method string getInstanceId() 获取Grafana 实例 ID，例如：grafana-abcdefgh
 * @method void setInstanceId(string $InstanceId) 设置Grafana 实例 ID，例如：grafana-abcdefgh
 */
class DeleteGrafanaNotificationChannelRequest extends AbstractModel
{
    /**
     * @var array 通道 ID 数组。例如：nchannel-abcd1234
     */
    public $ChannelIDs;

    /**
     * @var string Grafana 实例 ID，例如：grafana-abcdefgh
     */
    public $InstanceId;

    /**
     * @param array $ChannelIDs 通道 ID 数组。例如：nchannel-abcd1234
     * @param string $InstanceId Grafana 实例 ID，例如：grafana-abcdefgh
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
        if (array_key_exists("ChannelIDs",$param) and $param["ChannelIDs"] !== null) {
            $this->ChannelIDs = $param["ChannelIDs"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
