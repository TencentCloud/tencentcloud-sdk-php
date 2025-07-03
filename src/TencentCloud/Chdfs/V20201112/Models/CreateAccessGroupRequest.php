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
namespace TencentCloud\Chdfs\V20201112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAccessGroup请求参数结构体
 *
 * @method string getAccessGroupName() 获取权限组名称
 * @method void setAccessGroupName(string $AccessGroupName) 设置权限组名称
 * @method integer getVpcType() 获取VPC网络类型（1：CVM）
 * @method void setVpcType(integer $VpcType) 设置VPC网络类型（1：CVM）
 * @method string getVpcId() 获取VPC网络ID
 * @method void setVpcId(string $VpcId) 设置VPC网络ID
 * @method string getDescription() 获取权限组描述，默认为空字符串
 * @method void setDescription(string $Description) 设置权限组描述，默认为空字符串
 */
class CreateAccessGroupRequest extends AbstractModel
{
    /**
     * @var string 权限组名称
     */
    public $AccessGroupName;

    /**
     * @var integer VPC网络类型（1：CVM）
     */
    public $VpcType;

    /**
     * @var string VPC网络ID
     */
    public $VpcId;

    /**
     * @var string 权限组描述，默认为空字符串
     */
    public $Description;

    /**
     * @param string $AccessGroupName 权限组名称
     * @param integer $VpcType VPC网络类型（1：CVM）
     * @param string $VpcId VPC网络ID
     * @param string $Description 权限组描述，默认为空字符串
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
        if (array_key_exists("AccessGroupName",$param) and $param["AccessGroupName"] !== null) {
            $this->AccessGroupName = $param["AccessGroupName"];
        }

        if (array_key_exists("VpcType",$param) and $param["VpcType"] !== null) {
            $this->VpcType = $param["VpcType"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
