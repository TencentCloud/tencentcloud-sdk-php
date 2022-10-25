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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSREInstanceAccessAddress请求参数结构体
 *
 * @method string getInstanceId() 获取注册引擎实例Id
 * @method void setInstanceId(string $InstanceId) 设置注册引擎实例Id
 * @method string getVpcId() 获取VPC ID
 * @method void setVpcId(string $VpcId) 设置VPC ID
 * @method string getSubnetId() 获取子网ID
 * @method void setSubnetId(string $SubnetId) 设置子网ID
 * @method string getWorkload() 获取引擎其他组件名称（pushgateway、polaris-limiter）
 * @method void setWorkload(string $Workload) 设置引擎其他组件名称（pushgateway、polaris-limiter）
 * @method string getEngineRegion() 获取部署地域
 * @method void setEngineRegion(string $EngineRegion) 设置部署地域
 */
class DescribeSREInstanceAccessAddressRequest extends AbstractModel
{
    /**
     * @var string 注册引擎实例Id
     */
    public $InstanceId;

    /**
     * @var string VPC ID
     */
    public $VpcId;

    /**
     * @var string 子网ID
     */
    public $SubnetId;

    /**
     * @var string 引擎其他组件名称（pushgateway、polaris-limiter）
     */
    public $Workload;

    /**
     * @var string 部署地域
     */
    public $EngineRegion;

    /**
     * @param string $InstanceId 注册引擎实例Id
     * @param string $VpcId VPC ID
     * @param string $SubnetId 子网ID
     * @param string $Workload 引擎其他组件名称（pushgateway、polaris-limiter）
     * @param string $EngineRegion 部署地域
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

        if (array_key_exists("Workload",$param) and $param["Workload"] !== null) {
            $this->Workload = $param["Workload"];
        }

        if (array_key_exists("EngineRegion",$param) and $param["EngineRegion"] !== null) {
            $this->EngineRegion = $param["EngineRegion"];
        }
    }
}
