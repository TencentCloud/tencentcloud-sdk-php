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
namespace TencentCloud\Mqtt\V20240516\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClientList请求参数结构体
 *
 * @method string getInstanceId() 获取腾讯云MQTT实例ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1778/111029)接口或控制台获得。
 * @method void setInstanceId(string $InstanceId) 设置腾讯云MQTT实例ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1778/111029)接口或控制台获得。
 * @method string getClientId() 获取客户端ID
 * @method void setClientId(string $ClientId) 设置客户端ID
 * @method string getNumber() 获取客户端数量限制,最大1024，默认1024
 * @method void setNumber(string $Number) 设置客户端数量限制,最大1024，默认1024
 * @method integer getOnlineStatus() 获取0:查询在线和离线客户端（默认值）
1:查询在线客户端
2:查询离线客户端
 * @method void setOnlineStatus(integer $OnlineStatus) 设置0:查询在线和离线客户端（默认值）
1:查询在线客户端
2:查询离线客户端
 * @method integer getMaxTimestamp() 获取在线连接：表示最后的连接时间
离线连接：表示最后的断开连接时间
 * @method void setMaxTimestamp(integer $MaxTimestamp) 设置在线连接：表示最后的连接时间
离线连接：表示最后的断开连接时间
 */
class DescribeClientListRequest extends AbstractModel
{
    /**
     * @var string 腾讯云MQTT实例ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1778/111029)接口或控制台获得。
     */
    public $InstanceId;

    /**
     * @var string 客户端ID
     */
    public $ClientId;

    /**
     * @var string 客户端数量限制,最大1024，默认1024
     */
    public $Number;

    /**
     * @var integer 0:查询在线和离线客户端（默认值）
1:查询在线客户端
2:查询离线客户端
     */
    public $OnlineStatus;

    /**
     * @var integer 在线连接：表示最后的连接时间
离线连接：表示最后的断开连接时间
     */
    public $MaxTimestamp;

    /**
     * @param string $InstanceId 腾讯云MQTT实例ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1778/111029)接口或控制台获得。
     * @param string $ClientId 客户端ID
     * @param string $Number 客户端数量限制,最大1024，默认1024
     * @param integer $OnlineStatus 0:查询在线和离线客户端（默认值）
1:查询在线客户端
2:查询离线客户端
     * @param integer $MaxTimestamp 在线连接：表示最后的连接时间
离线连接：表示最后的断开连接时间
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

        if (array_key_exists("ClientId",$param) and $param["ClientId"] !== null) {
            $this->ClientId = $param["ClientId"];
        }

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("OnlineStatus",$param) and $param["OnlineStatus"] !== null) {
            $this->OnlineStatus = $param["OnlineStatus"];
        }

        if (array_key_exists("MaxTimestamp",$param) and $param["MaxTimestamp"] !== null) {
            $this->MaxTimestamp = $param["MaxTimestamp"];
        }
    }
}
