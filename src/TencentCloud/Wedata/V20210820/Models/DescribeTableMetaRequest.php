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
 * DescribeTableMeta请求参数结构体
 *
 * @method string getTableId() 获取表唯一id
 * @method void setTableId(string $TableId) 设置表唯一id
 * @method TableNameFilter getTableNameFilter() 获取按名称查询的条件
 * @method void setTableNameFilter(TableNameFilter $TableNameFilter) 设置按名称查询的条件
 * @method integer getTableFilterType() 获取查询条件类型0按id，1按名称，默认为0
 * @method void setTableFilterType(integer $TableFilterType) 设置查询条件类型0按id，1按名称，默认为0
 */
class DescribeTableMetaRequest extends AbstractModel
{
    /**
     * @var string 表唯一id
     */
    public $TableId;

    /**
     * @var TableNameFilter 按名称查询的条件
     */
    public $TableNameFilter;

    /**
     * @var integer 查询条件类型0按id，1按名称，默认为0
     */
    public $TableFilterType;

    /**
     * @param string $TableId 表唯一id
     * @param TableNameFilter $TableNameFilter 按名称查询的条件
     * @param integer $TableFilterType 查询条件类型0按id，1按名称，默认为0
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
        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }

        if (array_key_exists("TableNameFilter",$param) and $param["TableNameFilter"] !== null) {
            $this->TableNameFilter = new TableNameFilter();
            $this->TableNameFilter->deserialize($param["TableNameFilter"]);
        }

        if (array_key_exists("TableFilterType",$param) and $param["TableFilterType"] !== null) {
            $this->TableFilterType = $param["TableFilterType"];
        }
    }
}
