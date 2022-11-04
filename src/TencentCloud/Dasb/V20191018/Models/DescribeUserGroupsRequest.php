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
namespace TencentCloud\Dasb\V20191018\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUserGroups请求参数结构体
 *
 * @method array getIdSet() 获取用户组ID集合
 * @method void setIdSet(array $IdSet) 设置用户组ID集合
 * @method string getName() 获取用户组名，模糊查询,长度：0-64字符
 * @method void setName(string $Name) 设置用户组名，模糊查询,长度：0-64字符
 * @method integer getOffset() 获取分页偏移位置，默认值为0
 * @method void setOffset(integer $Offset) 设置分页偏移位置，默认值为0
 * @method integer getLimit() 获取每页条目数量，缺省20，最大500
 * @method void setLimit(integer $Limit) 设置每页条目数量，缺省20，最大500
 * @method string getDepartmentId() 获取部门ID，用于过滤属于某个部门的用户组
 * @method void setDepartmentId(string $DepartmentId) 设置部门ID，用于过滤属于某个部门的用户组
 */
class DescribeUserGroupsRequest extends AbstractModel
{
    /**
     * @var array 用户组ID集合
     */
    public $IdSet;

    /**
     * @var string 用户组名，模糊查询,长度：0-64字符
     */
    public $Name;

    /**
     * @var integer 分页偏移位置，默认值为0
     */
    public $Offset;

    /**
     * @var integer 每页条目数量，缺省20，最大500
     */
    public $Limit;

    /**
     * @var string 部门ID，用于过滤属于某个部门的用户组
     */
    public $DepartmentId;

    /**
     * @param array $IdSet 用户组ID集合
     * @param string $Name 用户组名，模糊查询,长度：0-64字符
     * @param integer $Offset 分页偏移位置，默认值为0
     * @param integer $Limit 每页条目数量，缺省20，最大500
     * @param string $DepartmentId 部门ID，用于过滤属于某个部门的用户组
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
        if (array_key_exists("IdSet",$param) and $param["IdSet"] !== null) {
            $this->IdSet = $param["IdSet"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("DepartmentId",$param) and $param["DepartmentId"] !== null) {
            $this->DepartmentId = $param["DepartmentId"];
        }
    }
}
