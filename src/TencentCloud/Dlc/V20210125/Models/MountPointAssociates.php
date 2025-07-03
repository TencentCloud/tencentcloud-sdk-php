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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 绑定融合桶信息
 *
 * @method string getBucketId() 获取桶Id
 * @method void setBucketId(string $BucketId) 设置桶Id
 * @method string getVpcId() 获取vpcId
 * @method void setVpcId(string $VpcId) 设置vpcId
 * @method string getVpcCidrBlock() 获取子网地址
 * @method void setVpcCidrBlock(string $VpcCidrBlock) 设置子网地址
 * @method string getAccessGroupId() 获取权限组Id
 * @method void setAccessGroupId(string $AccessGroupId) 设置权限组Id
 * @method integer getAccessRuleId() 获取权限规则Id
 * @method void setAccessRuleId(integer $AccessRuleId) 设置权限规则Id
 */
class MountPointAssociates extends AbstractModel
{
    /**
     * @var string 桶Id
     */
    public $BucketId;

    /**
     * @var string vpcId
     */
    public $VpcId;

    /**
     * @var string 子网地址
     */
    public $VpcCidrBlock;

    /**
     * @var string 权限组Id
     */
    public $AccessGroupId;

    /**
     * @var integer 权限规则Id
     */
    public $AccessRuleId;

    /**
     * @param string $BucketId 桶Id
     * @param string $VpcId vpcId
     * @param string $VpcCidrBlock 子网地址
     * @param string $AccessGroupId 权限组Id
     * @param integer $AccessRuleId 权限规则Id
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
        if (array_key_exists("BucketId",$param) and $param["BucketId"] !== null) {
            $this->BucketId = $param["BucketId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("VpcCidrBlock",$param) and $param["VpcCidrBlock"] !== null) {
            $this->VpcCidrBlock = $param["VpcCidrBlock"];
        }

        if (array_key_exists("AccessGroupId",$param) and $param["AccessGroupId"] !== null) {
            $this->AccessGroupId = $param["AccessGroupId"];
        }

        if (array_key_exists("AccessRuleId",$param) and $param["AccessRuleId"] !== null) {
            $this->AccessRuleId = $param["AccessRuleId"];
        }
    }
}
