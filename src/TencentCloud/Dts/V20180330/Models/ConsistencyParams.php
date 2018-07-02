<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Dts\V20180330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getSelectRowsPerTable() 获取1-100的整数值，select(*)对比时每张表的抽样行数比例
 * @method void setSelectRowsPerTable(integer $SelectRowsPerTable) 设置1-100的整数值，select(*)对比时每张表的抽样行数比例
 * @method integer getTablesSelectAll() 获取1-100的整数值，select(*)对比的表的比例
 * @method void setTablesSelectAll(integer $TablesSelectAll) 设置1-100的整数值，select(*)对比的表的比例
 * @method integer getTablesSelectCount() 获取1-100的整数值，select count(*)对比的表的比例
 * @method void setTablesSelectCount(integer $TablesSelectCount) 设置1-100的整数值，select count(*)对比的表的比例
 */

/**
 *抽样检验时的抽样参数
 */
class ConsistencyParams extends AbstractModel
{
    /**
     * @var integer 1-100的整数值，select(*)对比时每张表的抽样行数比例
     */
    public $SelectRowsPerTable;

    /**
     * @var integer 1-100的整数值，select(*)对比的表的比例
     */
    public $TablesSelectAll;

    /**
     * @var integer 1-100的整数值，select count(*)对比的表的比例
     */
    public $TablesSelectCount;
    /**
     * @param integer $SelectRowsPerTable 1-100的整数值，select(*)对比时每张表的抽样行数比例
     * @param integer $TablesSelectAll 1-100的整数值，select(*)对比的表的比例
     * @param integer $TablesSelectCount 1-100的整数值，select count(*)对比的表的比例
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("SelectRowsPerTable",$param) and $param["SelectRowsPerTable"] !== null) {
            $this->SelectRowsPerTable = $param["SelectRowsPerTable"];
        }

        if (array_key_exists("TablesSelectAll",$param) and $param["TablesSelectAll"] !== null) {
            $this->TablesSelectAll = $param["TablesSelectAll"];
        }

        if (array_key_exists("TablesSelectCount",$param) and $param["TablesSelectCount"] !== null) {
            $this->TablesSelectCount = $param["TablesSelectCount"];
        }
    }
}
