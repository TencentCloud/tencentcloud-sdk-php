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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreatePrometheus请求参数结构体
 *
 * @method string getInstanceId() 获取ckafka实例id
 * @method void setInstanceId(string $InstanceId) 设置ckafka实例id
 * @method string getVpcId() 获取vpc地址
 * @method void setVpcId(string $VpcId) 设置vpc地址
 * @method string getSubnetId() 获取子网地址
 * @method void setSubnetId(string $SubnetId) 设置子网地址
 */
class CreatePrometheusRequest extends AbstractModel
{
    /**
     * @var string ckafka实例id
     */
    public $InstanceId;

    /**
     * @var string vpc地址
     */
    public $VpcId;

    /**
     * @var string 子网地址
     */
    public $SubnetId;

    /**
     * @param string $InstanceId ckafka实例id
     * @param string $VpcId vpc地址
     * @param string $SubnetId 子网地址
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
