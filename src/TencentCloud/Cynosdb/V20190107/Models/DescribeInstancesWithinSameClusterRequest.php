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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstancesWithinSameCluster请求参数结构体
 *
 * @method string getUniqVpcId() 获取vpcId
 * @method void setUniqVpcId(string $UniqVpcId) 设置vpcId
 * @method string getVip() 获取vip
 * @method void setVip(string $Vip) 设置vip
 */
class DescribeInstancesWithinSameClusterRequest extends AbstractModel
{
    /**
     * @var string vpcId
     */
    public $UniqVpcId;

    /**
     * @var string vip
     */
    public $Vip;

    /**
     * @param string $UniqVpcId vpcId
     * @param string $Vip vip
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

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }
    }
}
