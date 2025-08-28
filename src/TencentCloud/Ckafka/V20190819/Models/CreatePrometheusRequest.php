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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreatePrometheus请求参数结构体
 *
 * @method string getInstanceId() 获取ckafka集群实例Id,可通过DescribeInstances接口获取
 * @method void setInstanceId(string $InstanceId) 设置ckafka集群实例Id,可通过DescribeInstances接口获取
 * @method string getVpcId() 获取私有网络Id
 * @method void setVpcId(string $VpcId) 设置私有网络Id
 * @method string getSubnetId() 获取子网Id
 * @method void setSubnetId(string $SubnetId) 设置子网Id
 */
class CreatePrometheusRequest extends AbstractModel
{
    /**
     * @var string ckafka集群实例Id,可通过DescribeInstances接口获取
     */
    public $InstanceId;

    /**
     * @var string 私有网络Id
     */
    public $VpcId;

    /**
     * @var string 子网Id
     */
    public $SubnetId;

    /**
     * @param string $InstanceId ckafka集群实例Id,可通过DescribeInstances接口获取
     * @param string $VpcId 私有网络Id
     * @param string $SubnetId 子网Id
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

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }
    }
}
