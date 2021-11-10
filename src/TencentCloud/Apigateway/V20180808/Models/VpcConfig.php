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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 独享实例vpc配置信息
 *
 * @method string getUniqVpcId() 获取vpcid
 * @method void setUniqVpcId(string $UniqVpcId) 设置vpcid
 * @method string getUniqSubnetId() 获取subnetid
 * @method void setUniqSubnetId(string $UniqSubnetId) 设置subnetid
 */
class VpcConfig extends AbstractModel
{
    /**
     * @var string vpcid
     */
    public $UniqVpcId;

    /**
     * @var string subnetid
     */
    public $UniqSubnetId;

    /**
     * @param string $UniqVpcId vpcid
     * @param string $UniqSubnetId subnetid
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
        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }
    }
}
