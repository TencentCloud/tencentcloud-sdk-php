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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDataServicePublishedApiList请求参数结构体
 *
 * @method integer getPageNumber() 获取页码
 * @method void setPageNumber(integer $PageNumber) 设置页码
 * @method integer getPageSize() 获取每页大小
 * @method void setPageSize(integer $PageSize) 设置每页大小
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method DataServicePublishedApiListFilter getFilters() 获取查询参数
 * @method void setFilters(DataServicePublishedApiListFilter $Filters) 设置查询参数
 * @method array getOrderFields() 获取排序配置
 * @method void setOrderFields(array $OrderFields) 设置排序配置
 */
class DescribeDataServicePublishedApiListRequest extends AbstractModel
{
    /**
     * @var integer 页码
     */
    public $PageNumber;

    /**
     * @var integer 每页大小
     */
    public $PageSize;

    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var DataServicePublishedApiListFilter 查询参数
     */
    public $Filters;

    /**
     * @var array 排序配置
     */
    public $OrderFields;

    /**
     * @param integer $PageNumber 页码
     * @param integer $PageSize 每页大小
     * @param string $ProjectId 项目ID
     * @param DataServicePublishedApiListFilter $Filters 查询参数
     * @param array $OrderFields 排序配置
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
        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = new DataServicePublishedApiListFilter();
            $this->Filters->deserialize($param["Filters"]);
        }

        if (array_key_exists("OrderFields",$param) and $param["OrderFields"] !== null) {
            $this->OrderFields = [];
            foreach ($param["OrderFields"] as $key => $value){
                $obj = new DataServiceRequestListOrder();
                $obj->deserialize($value);
                array_push($this->OrderFields, $obj);
            }
        }
    }
}
