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
 * UpdateOrganization请求参数结构体
 *
 * @method string getOrganizationId() 获取组织ID（从查询组织接口DescribeOrganization中获取）
 * @method void setOrganizationId(string $OrganizationId) 设置组织ID（从查询组织接口DescribeOrganization中获取）
 * @method string getName() 获取组织名称
 * @method void setName(string $Name) 设置组织名称
 */
class UpdateOrganizationRequest extends AbstractModel
{
    /**
     * @var string 组织ID（从查询组织接口DescribeOrganization中获取）
     */
    public $OrganizationId;

    /**
     * @var string 组织名称
     */
    public $Name;

    /**
     * @param string $OrganizationId 组织ID（从查询组织接口DescribeOrganization中获取）
     * @param string $Name 组织名称
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
        if (array_key_exists("OrganizationId",$param) and $param["OrganizationId"] !== null) {
            $this->OrganizationId = $param["OrganizationId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
