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
 * @method string getInstanceId() 获取<p>腾讯云MQTT实例ID，从 <a href="https://cloud.tencent.com/document/api/1778/111029">DescribeInstanceList</a>接口或控制台获得。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>腾讯云MQTT实例ID，从 <a href="https://cloud.tencent.com/document/api/1778/111029">DescribeInstanceList</a>接口或控制台获得。</p>
 * @method string getClientId() 获取<p>客户端ID</p>
 * @method void setClientId(string $ClientId) 设置<p>客户端ID</p>
 * @method string getNumber() 获取<p>客户端数量限制,最大1024，默认1024</p>
 * @method void setNumber(string $Number) 设置<p>客户端数量限制,最大1024，默认1024</p>
 * @method integer getOnlineStatus() 获取<p>0:查询在线和离线客户端（默认值）<br>1:查询在线客户端<br>2:查询离线客户端</p>
 * @method void setOnlineStatus(integer $OnlineStatus) 设置<p>0:查询在线和离线客户端（默认值）<br>1:查询在线客户端<br>2:查询离线客户端</p>
 * @method integer getMaxTimestamp() 获取<p>在线连接：表示最后的连接时间<br>离线连接：表示最后的断开连接时间</p>
 * @method void setMaxTimestamp(integer $MaxTimestamp) 设置<p>在线连接：表示最后的连接时间<br>离线连接：表示最后的断开连接时间</p>
 */
class DescribeClientListRequest extends AbstractModel
{
    /**
     * @var string <p>腾讯云MQTT实例ID，从 <a href="https://cloud.tencent.com/document/api/1778/111029">DescribeInstanceList</a>接口或控制台获得。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>客户端ID</p>
     */
    public $ClientId;

    /**
     * @var string <p>客户端数量限制,最大1024，默认1024</p>
     */
    public $Number;

    /**
     * @var integer <p>0:查询在线和离线客户端（默认值）<br>1:查询在线客户端<br>2:查询离线客户端</p>
     */
    public $OnlineStatus;

    /**
     * @var integer <p>在线连接：表示最后的连接时间<br>离线连接：表示最后的断开连接时间</p>
     */
    public $MaxTimestamp;

    /**
     * @param string $InstanceId <p>腾讯云MQTT实例ID，从 <a href="https://cloud.tencent.com/document/api/1778/111029">DescribeInstanceList</a>接口或控制台获得。</p>
     * @param string $ClientId <p>客户端ID</p>
     * @param string $Number <p>客户端数量限制,最大1024，默认1024</p>
     * @param integer $OnlineStatus <p>0:查询在线和离线客户端（默认值）<br>1:查询在线客户端<br>2:查询离线客户端</p>
     * @param integer $MaxTimestamp <p>在线连接：表示最后的连接时间<br>离线连接：表示最后的断开连接时间</p>
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
