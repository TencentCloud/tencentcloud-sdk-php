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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddOrganization请求参数结构体
 *
 * @method string getName() 获取组织名称（仅支持中文、英文、数字、_、-的组合，长度不超过16个字符，且组织名称不能重复）
 * @method void setName(string $Name) 设置组织名称（仅支持中文、英文、数字、_、-的组合，长度不超过16个字符，且组织名称不能重复）
 * @method string getParentId() 获取组织父节点 ID（从查询组织接口DescribeOrganization中获取，填0代表根组织）
 * @method void setParentId(string $ParentId) 设置组织父节点 ID（从查询组织接口DescribeOrganization中获取，填0代表根组织）
 */
class AddOrganizationRequest extends AbstractModel
{
    /**
     * @var string 组织名称（仅支持中文、英文、数字、_、-的组合，长度不超过16个字符，且组织名称不能重复）
     */
    public $Name;

    /**
     * @var string 组织父节点 ID（从查询组织接口DescribeOrganization中获取，填0代表根组织）
     */
    public $ParentId;

    /**
     * @param string $Name 组织名称（仅支持中文、英文、数字、_、-的组合，长度不超过16个字符，且组织名称不能重复）
     * @param string $ParentId 组织父节点 ID（从查询组织接口DescribeOrganization中获取，填0代表根组织）
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ParentId",$param) and $param["ParentId"] !== null) {
            $this->ParentId = $param["ParentId"];
        }
    }
}
