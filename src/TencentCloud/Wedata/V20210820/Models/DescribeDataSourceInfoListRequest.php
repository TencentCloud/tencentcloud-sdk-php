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
 * DescribeDataSourceInfoList请求参数结构体
 *
 * @method string getProjectId() 获取工作空间id
 * @method void setProjectId(string $ProjectId) 设置工作空间id
 * @method integer getPageNumber() 获取页码
 * @method void setPageNumber(integer $PageNumber) 设置页码
 * @method integer getPageSize() 获取页数
 * @method void setPageSize(integer $PageSize) 设置页数
 * @method Filter getFilters() 获取可选过滤条件，Filter可选配置(参考): "Name": { "type": "string", "description": "数据源名称" }, "Type": { "type": "string", "description": "类型" }, "ClusterId": { "type": "string", "description": "集群id" }, "CategoryId": { "type": "string", "description": "分类，项目或空间id" }
 * @method void setFilters(Filter $Filters) 设置可选过滤条件，Filter可选配置(参考): "Name": { "type": "string", "description": "数据源名称" }, "Type": { "type": "string", "description": "类型" }, "ClusterId": { "type": "string", "description": "集群id" }, "CategoryId": { "type": "string", "description": "分类，项目或空间id" }
 * @method OrderField getOrderFields() 获取排序配置
 * @method void setOrderFields(OrderField $OrderFields) 设置排序配置
 * @method string getType() 获取数据源类型
 * @method void setType(string $Type) 设置数据源类型
 * @method string getDatasourceName() 获取数据源名称过滤用
 * @method void setDatasourceName(string $DatasourceName) 设置数据源名称过滤用
 */
class DescribeDataSourceInfoListRequest extends AbstractModel
{
    /**
     * @var string 工作空间id
     */
    public $ProjectId;

    /**
     * @var integer 页码
     */
    public $PageNumber;

    /**
     * @var integer 页数
     */
    public $PageSize;

    /**
     * @var Filter 可选过滤条件，Filter可选配置(参考): "Name": { "type": "string", "description": "数据源名称" }, "Type": { "type": "string", "description": "类型" }, "ClusterId": { "type": "string", "description": "集群id" }, "CategoryId": { "type": "string", "description": "分类，项目或空间id" }
     */
    public $Filters;

    /**
     * @var OrderField 排序配置
     */
    public $OrderFields;

    /**
     * @var string 数据源类型
     */
    public $Type;

    /**
     * @var string 数据源名称过滤用
     */
    public $DatasourceName;

    /**
     * @param string $ProjectId 工作空间id
     * @param integer $PageNumber 页码
     * @param integer $PageSize 页数
     * @param Filter $Filters 可选过滤条件，Filter可选配置(参考): "Name": { "type": "string", "description": "数据源名称" }, "Type": { "type": "string", "description": "类型" }, "ClusterId": { "type": "string", "description": "集群id" }, "CategoryId": { "type": "string", "description": "分类，项目或空间id" }
     * @param OrderField $OrderFields 排序配置
     * @param string $Type 数据源类型
     * @param string $DatasourceName 数据源名称过滤用
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
            $this->Filters = new Filter();
            $this->Filters->deserialize($param["Filters"]);
        }

        if (array_key_exists("OrderFields",$param) and $param["OrderFields"] !== null) {
            $this->OrderFields = new OrderField();
            $this->OrderFields->deserialize($param["OrderFields"]);
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("DatasourceName",$param) and $param["DatasourceName"] !== null) {
            $this->DatasourceName = $param["DatasourceName"];
        }
    }
}
