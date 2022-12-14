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
 * DescribeGrafanaChannels请求参数结构体
 *
 * @method string getInstanceId() 获取Grafana 实例 ID，例如：grafana-12345678
 * @method void setInstanceId(string $InstanceId) 设置Grafana 实例 ID，例如：grafana-12345678
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取查询数量
 * @method void setLimit(integer $Limit) 设置查询数量
 * @method string getChannelName() 获取告警通道名称，例如：test
 * @method void setChannelName(string $ChannelName) 设置告警通道名称，例如：test
 * @method array getChannelIds() 获取告警通道 ID，例如：nchannel-abcd1234
 * @method void setChannelIds(array $ChannelIds) 设置告警通道 ID，例如：nchannel-abcd1234
 * @method integer getChannelState() 获取告警通道状态
 * @method void setChannelState(integer $ChannelState) 设置告警通道状态
 */
class DescribeGrafanaChannelsRequest extends AbstractModel
{
    /**
     * @var string Grafana 实例 ID，例如：grafana-12345678
     */
    public $InstanceId;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 查询数量
     */
    public $Limit;

    /**
     * @var string 告警通道名称，例如：test
     */
    public $ChannelName;

    /**
     * @var array 告警通道 ID，例如：nchannel-abcd1234
     */
    public $ChannelIds;

    /**
     * @var integer 告警通道状态
     */
    public $ChannelState;

    /**
     * @param string $InstanceId Grafana 实例 ID，例如：grafana-12345678
     * @param integer $Offset 偏移量
     * @param integer $Limit 查询数量
     * @param string $ChannelName 告警通道名称，例如：test
     * @param array $ChannelIds 告警通道 ID，例如：nchannel-abcd1234
     * @param integer $ChannelState 告警通道状态
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

        if (array_key_exists("ChannelIds",$param) and $param["ChannelIds"] !== null) {
            $this->ChannelIds = $param["ChannelIds"];
        }

        if (array_key_exists("ChannelState",$param) and $param["ChannelState"] !== null) {
            $this->ChannelState = $param["ChannelState"];
        }
    }
}
