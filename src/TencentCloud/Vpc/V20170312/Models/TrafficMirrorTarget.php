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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 流量镜像采集目标类型
 *
 * @method array getTargetIps() 获取流量镜像的接收IP
 * @method void setTargetIps(array $TargetIps) 设置流量镜像的接收IP
 * @method string getAlgHash() 获取流量镜像接收IP组，均衡规则，支持ENI/FIVE_TUPLE_FLOW（vpc），FIVE_TUPLE_FLOW（公网IP）
 * @method void setAlgHash(string $AlgHash) 设置流量镜像接收IP组，均衡规则，支持ENI/FIVE_TUPLE_FLOW（vpc），FIVE_TUPLE_FLOW（公网IP）
 * @method array getTargetEndPoints() 获取流量镜像的接收endpoint（公网IP）
 * @method void setTargetEndPoints(array $TargetEndPoints) 设置流量镜像的接收endpoint（公网IP）
 * @method string getTargetType() 获取流量镜像的接收类型，分别为：IP/ENI/CLB
 * @method void setTargetType(string $TargetType) 设置流量镜像的接收类型，分别为：IP/ENI/CLB
 */
class TrafficMirrorTarget extends AbstractModel
{
    /**
     * @var array 流量镜像的接收IP
     */
    public $TargetIps;

    /**
     * @var string 流量镜像接收IP组，均衡规则，支持ENI/FIVE_TUPLE_FLOW（vpc），FIVE_TUPLE_FLOW（公网IP）
     */
    public $AlgHash;

    /**
     * @var array 流量镜像的接收endpoint（公网IP）
     */
    public $TargetEndPoints;

    /**
     * @var string 流量镜像的接收类型，分别为：IP/ENI/CLB
     */
    public $TargetType;

    /**
     * @param array $TargetIps 流量镜像的接收IP
     * @param string $AlgHash 流量镜像接收IP组，均衡规则，支持ENI/FIVE_TUPLE_FLOW（vpc），FIVE_TUPLE_FLOW（公网IP）
     * @param array $TargetEndPoints 流量镜像的接收endpoint（公网IP）
     * @param string $TargetType 流量镜像的接收类型，分别为：IP/ENI/CLB
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
        if (array_key_exists("TargetIps",$param) and $param["TargetIps"] !== null) {
            $this->TargetIps = $param["TargetIps"];
        }

        if (array_key_exists("AlgHash",$param) and $param["AlgHash"] !== null) {
            $this->AlgHash = $param["AlgHash"];
        }

        if (array_key_exists("TargetEndPoints",$param) and $param["TargetEndPoints"] !== null) {
            $this->TargetEndPoints = $param["TargetEndPoints"];
        }

        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            $this->TargetType = $param["TargetType"];
        }
    }
}
