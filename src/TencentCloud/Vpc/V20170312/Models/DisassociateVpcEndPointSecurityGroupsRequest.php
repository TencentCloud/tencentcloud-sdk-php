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
 * DisassociateVpcEndPointSecurityGroups请求参数结构体
 *
 * @method array getSecurityGroupIds() 获取安全组ID数组。可通过[DescribeSecurityGroups](https://cloud.tencent.com/document/product/215/15808)接口获取。
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置安全组ID数组。可通过[DescribeSecurityGroups](https://cloud.tencent.com/document/product/215/15808)接口获取。
 * @method string getEndPointId() 获取终端节点ID。可通过[DescribeVpcEndPoint](https://cloud.tencent.com/document/product/215/54679) 获取。
 * @method void setEndPointId(string $EndPointId) 设置终端节点ID。可通过[DescribeVpcEndPoint](https://cloud.tencent.com/document/product/215/54679) 获取。
 */
class DisassociateVpcEndPointSecurityGroupsRequest extends AbstractModel
{
    /**
     * @var array 安全组ID数组。可通过[DescribeSecurityGroups](https://cloud.tencent.com/document/product/215/15808)接口获取。
     */
    public $SecurityGroupIds;

    /**
     * @var string 终端节点ID。可通过[DescribeVpcEndPoint](https://cloud.tencent.com/document/product/215/54679) 获取。
     */
    public $EndPointId;

    /**
     * @param array $SecurityGroupIds 安全组ID数组。可通过[DescribeSecurityGroups](https://cloud.tencent.com/document/product/215/15808)接口获取。
     * @param string $EndPointId 终端节点ID。可通过[DescribeVpcEndPoint](https://cloud.tencent.com/document/product/215/54679) 获取。
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
        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("EndPointId",$param) and $param["EndPointId"] !== null) {
            $this->EndPointId = $param["EndPointId"];
        }
    }
}
