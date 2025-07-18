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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AssociateSecurityGroups请求参数结构体
 *
 * @method string getSecurityGroupId() 获取安全组 ID。可通过 [DescribeDBSecurityGroups](https://cloud.tencent.com/document/api/236/15854) 接口获取。
 * @method void setSecurityGroupId(string $SecurityGroupId) 设置安全组 ID。可通过 [DescribeDBSecurityGroups](https://cloud.tencent.com/document/api/236/15854) 接口获取。
 * @method array getInstanceIds() 获取实例 ID 列表，一个或者多个实例 ID 组成的数组。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
 * @method void setInstanceIds(array $InstanceIds) 设置实例 ID 列表，一个或者多个实例 ID 组成的数组。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
 * @method boolean getForReadonlyInstance() 获取当传入只读实例ID时，默认操作的是对应只读组的安全组。如果需要操作只读实例ID的安全组， 需要将该入参置为True
 * @method void setForReadonlyInstance(boolean $ForReadonlyInstance) 设置当传入只读实例ID时，默认操作的是对应只读组的安全组。如果需要操作只读实例ID的安全组， 需要将该入参置为True
 */
class AssociateSecurityGroupsRequest extends AbstractModel
{
    /**
     * @var string 安全组 ID。可通过 [DescribeDBSecurityGroups](https://cloud.tencent.com/document/api/236/15854) 接口获取。
     */
    public $SecurityGroupId;

    /**
     * @var array 实例 ID 列表，一个或者多个实例 ID 组成的数组。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
     */
    public $InstanceIds;

    /**
     * @var boolean 当传入只读实例ID时，默认操作的是对应只读组的安全组。如果需要操作只读实例ID的安全组， 需要将该入参置为True
     */
    public $ForReadonlyInstance;

    /**
     * @param string $SecurityGroupId 安全组 ID。可通过 [DescribeDBSecurityGroups](https://cloud.tencent.com/document/api/236/15854) 接口获取。
     * @param array $InstanceIds 实例 ID 列表，一个或者多个实例 ID 组成的数组。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
     * @param boolean $ForReadonlyInstance 当传入只读实例ID时，默认操作的是对应只读组的安全组。如果需要操作只读实例ID的安全组， 需要将该入参置为True
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
        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            $this->SecurityGroupId = $param["SecurityGroupId"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("ForReadonlyInstance",$param) and $param["ForReadonlyInstance"] !== null) {
            $this->ForReadonlyInstance = $param["ForReadonlyInstance"];
        }
    }
}
