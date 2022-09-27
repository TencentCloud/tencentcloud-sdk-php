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
 * DescribeUser请求参数结构体
 *
 * @method string getUserStoreId() 获取用户目录ID
 * @method void setUserStoreId(string $UserStoreId) 设置用户目录ID
 * @method Pageable getPageable() 获取分页数据
 * @method void setPageable(Pageable $Pageable) 设置分页数据
 * @method array getFilters() 获取查询条件，根据propertycode和propertykey
 * @method void setFilters(array $Filters) 设置查询条件，根据propertycode和propertykey
 * @method boolean getOriginal() 获取是否返回明文
 * @method void setOriginal(boolean $Original) 设置是否返回明文
 * @method Sort getSort() 获取排序设置
 * @method void setSort(Sort $Sort) 设置排序设置
 */
class DescribeUserRequest extends AbstractModel
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
     * @var array 查询条件，根据propertycode和propertykey
     */
    public $Filters;

    /**
     * @var boolean 是否返回明文
     */
    public $Original;

    /**
     * @var Sort 排序设置
     */
    public $Sort;

    /**
     * @param string $UserStoreId 用户目录ID
     * @param Pageable $Pageable 分页数据
     * @param array $Filters 查询条件，根据propertycode和propertykey
     * @param boolean $Original 是否返回明文
     * @param Sort $Sort 排序设置
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
                $obj = new QueryUserFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Original",$param) and $param["Original"] !== null) {
            $this->Original = $param["Original"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = new Sort();
            $this->Sort->deserialize($param["Sort"]);
        }
    }
}
