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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeProjectUsers请求参数结构体
 *
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method integer getPageNumber() 获取分页号
 * @method void setPageNumber(integer $PageNumber) 设置分页号
 * @method integer getPageSize() 获取分页大小
 * @method void setPageSize(integer $PageSize) 设置分页大小
 * @method array getFilters() 获取【过滤参数】自定义条件查询
 * @method void setFilters(array $Filters) 设置【过滤参数】自定义条件查询
 * @method array getOrderFields() 获取【排序参数】排序字段
 * @method void setOrderFields(array $OrderFields) 设置【排序参数】排序字段
 * @method boolean getIsProjectAdmin() 获取是否项目管理员
 * @method void setIsProjectAdmin(boolean $IsProjectAdmin) 设置是否项目管理员
 */
class DescribeProjectUsersRequest extends AbstractModel
{
    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var integer 分页号
     */
    public $PageNumber;

    /**
     * @var integer 分页大小
     */
    public $PageSize;

    /**
     * @var array 【过滤参数】自定义条件查询
     */
    public $Filters;

    /**
     * @var array 【排序参数】排序字段
     */
    public $OrderFields;

    /**
     * @var boolean 是否项目管理员
     */
    public $IsProjectAdmin;

    /**
     * @param string $ProjectId 项目id
     * @param integer $PageNumber 分页号
     * @param integer $PageSize 分页大小
     * @param array $Filters 【过滤参数】自定义条件查询
     * @param array $OrderFields 【排序参数】排序字段
     * @param boolean $IsProjectAdmin 是否项目管理员
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new FilterOptional();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("OrderFields",$param) and $param["OrderFields"] !== null) {
            $this->OrderFields = [];
            foreach ($param["OrderFields"] as $key => $value){
                $obj = new OrderFieldOptional();
                $obj->deserialize($value);
                array_push($this->OrderFields, $obj);
            }
        }

        if (array_key_exists("IsProjectAdmin",$param) and $param["IsProjectAdmin"] !== null) {
            $this->IsProjectAdmin = $param["IsProjectAdmin"];
        }
    }
}
