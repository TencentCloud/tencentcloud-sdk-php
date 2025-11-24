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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用于一致性校验的表配置
 *
 * @method string getTableName() 获取表名称
 * @method void setTableName(string $TableName) 设置表名称
 * @method string getColumnMode() 获取column 模式，all 为全部，partial 表示部分(该参数仅对数据同步任务有效)
 * @method void setColumnMode(string $ColumnMode) 设置column 模式，all 为全部，partial 表示部分(该参数仅对数据同步任务有效)
 * @method array getColumns() 获取当 ColumnMode 为 partial 时必填(该参数仅对数据同步任务有效)
 * @method void setColumns(array $Columns) 设置当 ColumnMode 为 partial 时必填(该参数仅对数据同步任务有效)
 * @method string getFilterCondition() 获取过滤条件
 * @method void setFilterCondition(string $FilterCondition) 设置过滤条件
 * @method string getFilterTimeZone() 获取时区选择。如 "+08:00", "-08:00", "+00:00"（空值等价于"+00:00"）	
 * @method void setFilterTimeZone(string $FilterTimeZone) 设置时区选择。如 "+08:00", "-08:00", "+00:00"（空值等价于"+00:00"）	
 */
class CompareTableItem extends AbstractModel
{
    /**
     * @var string 表名称
     */
    public $TableName;

    /**
     * @var string column 模式，all 为全部，partial 表示部分(该参数仅对数据同步任务有效)
     */
    public $ColumnMode;

    /**
     * @var array 当 ColumnMode 为 partial 时必填(该参数仅对数据同步任务有效)
     */
    public $Columns;

    /**
     * @var string 过滤条件
     */
    public $FilterCondition;

    /**
     * @var string 时区选择。如 "+08:00", "-08:00", "+00:00"（空值等价于"+00:00"）	
     */
    public $FilterTimeZone;

    /**
     * @param string $TableName 表名称
     * @param string $ColumnMode column 模式，all 为全部，partial 表示部分(该参数仅对数据同步任务有效)
     * @param array $Columns 当 ColumnMode 为 partial 时必填(该参数仅对数据同步任务有效)
     * @param string $FilterCondition 过滤条件
     * @param string $FilterTimeZone 时区选择。如 "+08:00", "-08:00", "+00:00"（空值等价于"+00:00"）	
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
        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("ColumnMode",$param) and $param["ColumnMode"] !== null) {
            $this->ColumnMode = $param["ColumnMode"];
        }

        if (array_key_exists("Columns",$param) and $param["Columns"] !== null) {
            $this->Columns = [];
            foreach ($param["Columns"] as $key => $value){
                $obj = new CompareColumnItem();
                $obj->deserialize($value);
                array_push($this->Columns, $obj);
            }
        }

        if (array_key_exists("FilterCondition",$param) and $param["FilterCondition"] !== null) {
            $this->FilterCondition = $param["FilterCondition"];
        }

        if (array_key_exists("FilterTimeZone",$param) and $param["FilterTimeZone"] !== null) {
            $this->FilterTimeZone = $param["FilterTimeZone"];
        }
    }
}
