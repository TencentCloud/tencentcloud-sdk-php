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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 微服务引擎实例的VPC信息
 *
 * @method string getVpcID() 获取微服务引擎VPC信息
 * @method void setVpcID(string $VpcID) 设置微服务引擎VPC信息
 * @method string getSubnetID() 获取微服务引擎子网信息
 * @method void setSubnetID(string $SubnetID) 设置微服务引擎子网信息
 */
class SourceInstanceVpcInfo extends AbstractModel
{
    /**
     * @var string 微服务引擎VPC信息
     */
    public $VpcID;

    /**
     * @var string 微服务引擎子网信息
     */
    public $SubnetID;

    /**
     * @param string $VpcID 微服务引擎VPC信息
     * @param string $SubnetID 微服务引擎子网信息
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
        if (array_key_exists("VpcID",$param) and $param["VpcID"] !== null) {
            $this->VpcID = $param["VpcID"];
        }

        if (array_key_exists("SubnetID",$param) and $param["SubnetID"] !== null) {
            $this->SubnetID = $param["SubnetID"];
        }
    }
}
