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
 * CheckTrafficMirror请求参数结构体
 *
 * @method string getVpcId() 获取流量镜像所属的vpc
 * @method void setVpcId(string $VpcId) 设置流量镜像所属的vpc
 * @method string getTrafficMirrorId() 获取流量镜像的实例id
 * @method void setTrafficMirrorId(string $TrafficMirrorId) 设置流量镜像的实例id
 * @method array getCollectorSources() 获取流量镜像的采集端IP列表
 * @method void setCollectorSources(array $CollectorSources) 设置流量镜像的采集端IP列表
 * @method string getSubnetId() 获取流量镜像的接收端的子网
 * @method void setSubnetId(string $SubnetId) 设置流量镜像的接收端的子网
 * @method array getCollectorTarget() 获取流量镜像采集端的
 * @method void setCollectorTarget(array $CollectorTarget) 设置流量镜像采集端的
 */
class CheckTrafficMirrorRequest extends AbstractModel
{
    /**
     * @var string 流量镜像所属的vpc
     */
    public $VpcId;

    /**
     * @var string 流量镜像的实例id
     */
    public $TrafficMirrorId;

    /**
     * @var array 流量镜像的采集端IP列表
     */
    public $CollectorSources;

    /**
     * @var string 流量镜像的接收端的子网
     */
    public $SubnetId;

    /**
     * @var array 流量镜像采集端的
     */
    public $CollectorTarget;

    /**
     * @param string $VpcId 流量镜像所属的vpc
     * @param string $TrafficMirrorId 流量镜像的实例id
     * @param array $CollectorSources 流量镜像的采集端IP列表
     * @param string $SubnetId 流量镜像的接收端的子网
     * @param array $CollectorTarget 流量镜像采集端的
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("TrafficMirrorId",$param) and $param["TrafficMirrorId"] !== null) {
            $this->TrafficMirrorId = $param["TrafficMirrorId"];
        }

        if (array_key_exists("CollectorSources",$param) and $param["CollectorSources"] !== null) {
            $this->CollectorSources = $param["CollectorSources"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("CollectorTarget",$param) and $param["CollectorTarget"] !== null) {
            $this->CollectorTarget = [];
            foreach ($param["CollectorTarget"] as $key => $value){
                $obj = new TrafficMirrorTarget();
                $obj->deserialize($value);
                array_push($this->CollectorTarget, $obj);
            }
        }
    }
}
