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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ResetTrafficMirrorTarget请求参数结构体
 *
 * @method string getTrafficMirrorId() 获取流量镜像实例ID
 * @method void setTrafficMirrorId(string $TrafficMirrorId) 设置流量镜像实例ID
 * @method TrafficMirrorTarget getCollectorTarget() 获取流量镜像的接收目的信息
 * @method void setCollectorTarget(TrafficMirrorTarget $CollectorTarget) 设置流量镜像的接收目的信息
 * @method string getSubnetId() 获取公网IP类型的流量镜像采集流量的发送端所属子网
 * @method void setSubnetId(string $SubnetId) 设置公网IP类型的流量镜像采集流量的发送端所属子网
 */
class ResetTrafficMirrorTargetRequest extends AbstractModel
{
    /**
     * @var string 流量镜像实例ID
     */
    public $TrafficMirrorId;

    /**
     * @var TrafficMirrorTarget 流量镜像的接收目的信息
     */
    public $CollectorTarget;

    /**
     * @var string 公网IP类型的流量镜像采集流量的发送端所属子网
     */
    public $SubnetId;

    /**
     * @param string $TrafficMirrorId 流量镜像实例ID
     * @param TrafficMirrorTarget $CollectorTarget 流量镜像的接收目的信息
     * @param string $SubnetId 公网IP类型的流量镜像采集流量的发送端所属子网
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

        if (array_key_exists("CollectorTarget",$param) and $param["CollectorTarget"] !== null) {
            $this->CollectorTarget = new TrafficMirrorTarget();
            $this->CollectorTarget->deserialize($param["CollectorTarget"]);
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }
    }
}
