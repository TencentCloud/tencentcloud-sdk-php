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
namespace TencentCloud\Bmlb\V20180625\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTrafficMirrorReceiverHealthStatus请求参数结构体
 *
 * @method string getTrafficMirrorId() 获取查询所在的流量镜像ID。
 * @method void setTrafficMirrorId(string $TrafficMirrorId) 设置查询所在的流量镜像ID。
 * @method array getReceiverSet() 获取流量镜像接收机实例ID和端口数组。
 * @method void setReceiverSet(array $ReceiverSet) 设置流量镜像接收机实例ID和端口数组。
 */
class DescribeTrafficMirrorReceiverHealthStatusRequest extends AbstractModel
{
    /**
     * @var string 查询所在的流量镜像ID。
     */
    public $TrafficMirrorId;

    /**
     * @var array 流量镜像接收机实例ID和端口数组。
     */
    public $ReceiverSet;

    /**
     * @param string $TrafficMirrorId 查询所在的流量镜像ID。
     * @param array $ReceiverSet 流量镜像接收机实例ID和端口数组。
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
        if (array_key_exists("TrafficMirrorId",$param) and $param["TrafficMirrorId"] !== null) {
            $this->TrafficMirrorId = $param["TrafficMirrorId"];
        }

        if (array_key_exists("ReceiverSet",$param) and $param["ReceiverSet"] !== null) {
            $this->ReceiverSet = [];
            foreach ($param["ReceiverSet"] as $key => $value){
                $obj = new DescribeTrafficMirrorReceiver();
                $obj->deserialize($value);
                array_push($this->ReceiverSet, $obj);
            }
        }
    }
}
