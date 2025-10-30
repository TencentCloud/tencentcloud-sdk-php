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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeOrganizationGroupOrganizations请求参数结构体
 *
 * @method UserInfo getOperator() 获取执行本接口操作的员工信息,userId必填。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。
 * @method void setOperator(UserInfo $Operator) 设置执行本接口操作的员工信息,userId必填。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。
 * @method integer getLimit() 获取指定分页每页返回的数据条数，单页最大1000
 * @method void setLimit(integer $Limit) 设置指定分页每页返回的数据条数，单页最大1000
 * @method integer getOffset() 获取指定分页返回第几页的数据，如果不传默认返回第一页，页码从 0 开始，即首页为 0
 * @method void setOffset(integer $Offset) 设置指定分页返回第几页的数据，如果不传默认返回第一页，页码从 0 开始，即首页为 0
 * @method string getName() 获取查询成员企业的企业名，模糊匹配
 * @method void setName(string $Name) 设置查询成员企业的企业名，模糊匹配
 * @method integer getStatus() 获取成员企业加入集团的当前状态
<ul><li> **1**：待授权</li>
<li> **2**：已授权待激活</li>
<li> **3**：拒绝授权</li>
<li> **4**：已解除</li>
<li> **5**：已加入</li>
</ul>
 * @method void setStatus(integer $Status) 设置成员企业加入集团的当前状态
<ul><li> **1**：待授权</li>
<li> **2**：已授权待激活</li>
<li> **3**：拒绝授权</li>
<li> **4**：已解除</li>
<li> **5**：已加入</li>
</ul>
 * @method boolean getExport() 获取是否导出当前成员企业数据
<ul><li> **false**：不导出（默认值）</li>
<li> **true**：导出</li></ul>
 * @method void setExport(boolean $Export) 设置是否导出当前成员企业数据
<ul><li> **false**：不导出（默认值）</li>
<li> **true**：导出</li></ul>
 * @method string getId() 获取成员企业机构 ID，32 位字符串，在PC控制台 集团管理可获取
 * @method void setId(string $Id) 设置成员企业机构 ID，32 位字符串，在PC控制台 集团管理可获取
 */
class DescribeOrganizationGroupOrganizationsRequest extends AbstractModel
{
    /**
     * @var UserInfo 执行本接口操作的员工信息,userId必填。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。
     */
    public $Operator;

    /**
     * @var integer 指定分页每页返回的数据条数，单页最大1000
     */
    public $Limit;

    /**
     * @var integer 指定分页返回第几页的数据，如果不传默认返回第一页，页码从 0 开始，即首页为 0
     */
    public $Offset;

    /**
     * @var string 查询成员企业的企业名，模糊匹配
     */
    public $Name;

    /**
     * @var integer 成员企业加入集团的当前状态
<ul><li> **1**：待授权</li>
<li> **2**：已授权待激活</li>
<li> **3**：拒绝授权</li>
<li> **4**：已解除</li>
<li> **5**：已加入</li>
</ul>
     */
    public $Status;

    /**
     * @var boolean 是否导出当前成员企业数据
<ul><li> **false**：不导出（默认值）</li>
<li> **true**：导出</li></ul>
     */
    public $Export;

    /**
     * @var string 成员企业机构 ID，32 位字符串，在PC控制台 集团管理可获取
     */
    public $Id;

    /**
     * @param UserInfo $Operator 执行本接口操作的员工信息,userId必填。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。
     * @param integer $Limit 指定分页每页返回的数据条数，单页最大1000
     * @param integer $Offset 指定分页返回第几页的数据，如果不传默认返回第一页，页码从 0 开始，即首页为 0
     * @param string $Name 查询成员企业的企业名，模糊匹配
     * @param integer $Status 成员企业加入集团的当前状态
<ul><li> **1**：待授权</li>
<li> **2**：已授权待激活</li>
<li> **3**：拒绝授权</li>
<li> **4**：已解除</li>
<li> **5**：已加入</li>
</ul>
     * @param boolean $Export 是否导出当前成员企业数据
<ul><li> **false**：不导出（默认值）</li>
<li> **true**：导出</li></ul>
     * @param string $Id 成员企业机构 ID，32 位字符串，在PC控制台 集团管理可获取
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
        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Export",$param) and $param["Export"] !== null) {
            $this->Export = $param["Export"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
