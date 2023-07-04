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
namespace TencentCloud\Ciam\V20220331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListUserGroups请求参数结构体
 *
 * @method string getUserStoreId() 获取用户目录ID
 * @method void setUserStoreId(string $UserStoreId) 设置用户目录ID
 * @method Pageable getPageable() 获取分页数据
 * @method void setPageable(Pageable $Pageable) 设置分页数据
 * @method array getFilters() 获取Key可选值为condition

<li> **condition** </li>	Values = 查询条件，用户组ID或用户组名称
 * @method void setFilters(array $Filters) 设置Key可选值为condition

<li> **condition** </li>	Values = 查询条件，用户组ID或用户组名称
 */
class ListUserGroupsRequest extends AbstractModel
{
    /**
     * @var string 用户目录ID
     */
    public $UserStoreId;

    /**
     * @var Pageable 分页数据
     */
    public $Pageable;

    /**
     * @var array Key可选值为condition

<li> **condition** </li>	Values = 查询条件，用户组ID或用户组名称
     */
    public $Filters;

    /**
     * @param string $UserStoreId 用户目录ID
     * @param Pageable $Pageable 分页数据
     * @param array $Filters Key可选值为condition

<li> **condition** </li>	Values = 查询条件，用户组ID或用户组名称
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
        if (array_key_exists("UserStoreId",$param) and $param["UserStoreId"] !== null) {
            $this->UserStoreId = $param["UserStoreId"];
        }

        if (array_key_exists("Pageable",$param) and $param["Pageable"] !== null) {
            $this->Pageable = new Pageable();
            $this->Pageable->deserialize($param["Pageable"]);
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
