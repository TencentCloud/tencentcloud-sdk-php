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
 * DescribeGrafanaNotificationChannels请求参数结构体
 *
 * @method string getInstanceId() 获取<p>Grafana 实例 ID，例如：grafana-12345678</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>Grafana 实例 ID，例如：grafana-12345678</p>
 * @method integer getOffset() 获取<p>偏移量</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量</p>
 * @method integer getLimit() 获取<p>查询数量</p>
 * @method void setLimit(integer $Limit) 设置<p>查询数量</p>
 * @method string getChannelName() 获取<p>告警通道名称，例如：test</p>
 * @method void setChannelName(string $ChannelName) 设置<p>告警通道名称，例如：test</p>
 * @method array getChannelIDs() 获取<p>告警通道 ID，例如：nchannel-abcd1234</p>
 * @method void setChannelIDs(array $ChannelIDs) 设置<p>告警通道 ID，例如：nchannel-abcd1234</p>
 * @method integer getChannelState() 获取<p>告警通道状态</p>
 * @method void setChannelState(integer $ChannelState) 设置<p>告警通道状态</p>
 */
class DescribeGrafanaNotificationChannelsRequest extends AbstractModel
{
    /**
     * @var string <p>Grafana 实例 ID，例如：grafana-12345678</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>偏移量</p>
     */
    public $Offset;

    /**
     * @var integer <p>查询数量</p>
     */
    public $Limit;

    /**
     * @var string <p>告警通道名称，例如：test</p>
     */
    public $ChannelName;

    /**
     * @var array <p>告警通道 ID，例如：nchannel-abcd1234</p>
     */
    public $ChannelIDs;

    /**
     * @var integer <p>告警通道状态</p>
     */
    public $ChannelState;

    /**
     * @param string $InstanceId <p>Grafana 实例 ID，例如：grafana-12345678</p>
     * @param integer $Offset <p>偏移量</p>
     * @param integer $Limit <p>查询数量</p>
     * @param string $ChannelName <p>告警通道名称，例如：test</p>
     * @param array $ChannelIDs <p>告警通道 ID，例如：nchannel-abcd1234</p>
     * @param integer $ChannelState <p>告警通道状态</p>
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }

        if (array_key_exists("ChannelIDs",$param) and $param["ChannelIDs"] !== null) {
            $this->ChannelIDs = $param["ChannelIDs"];
        }

        if (array_key_exists("ChannelState",$param) and $param["ChannelState"] !== null) {
            $this->ChannelState = $param["ChannelState"];
        }
    }
}
