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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeResourceToShareMember请求参数结构体
 *
 * @method string getArea() 获取地域
 * @method void setArea(string $Area) 设置地域
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取每页条数
 * @method void setLimit(integer $Limit) 设置每页条数
 * @method string getSearchKey() 获取搜索关键字，支持业务资源ID搜索
 * @method void setSearchKey(string $SearchKey) 设置搜索关键字，支持业务资源ID搜索
 * @method string getType() 获取资源类型
 * @method void setType(string $Type) 设置资源类型
 * @method array getProductResourceIds() 获取业务资源ID。最大50个
 * @method void setProductResourceIds(array $ProductResourceIds) 设置业务资源ID。最大50个
 */
class DescribeResourceToShareMemberRequest extends AbstractModel
{
    /**
     * @var string 地域
     */
    public $Area;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 每页条数
     */
    public $Limit;

    /**
     * @var string 搜索关键字，支持业务资源ID搜索
     */
    public $SearchKey;

    /**
     * @var string 资源类型
     */
    public $Type;

    /**
     * @var array 业务资源ID。最大50个
     */
    public $ProductResourceIds;

    /**
     * @param string $Area 地域
     * @param integer $Offset 偏移量
     * @param integer $Limit 每页条数
     * @param string $SearchKey 搜索关键字，支持业务资源ID搜索
     * @param string $Type 资源类型
     * @param array $ProductResourceIds 业务资源ID。最大50个
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
        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SearchKey",$param) and $param["SearchKey"] !== null) {
            $this->SearchKey = $param["SearchKey"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ProductResourceIds",$param) and $param["ProductResourceIds"] !== null) {
            $this->ProductResourceIds = $param["ProductResourceIds"];
        }
    }
}
