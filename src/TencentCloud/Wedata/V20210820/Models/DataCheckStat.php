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
 * 数据监测情况结果
 *
 * @method integer getTableTotal() 获取表总数
 * @method void setTableTotal(integer $TableTotal) 设置表总数
 * @method integer getColumnTotal() 获取字段总数
 * @method void setColumnTotal(integer $ColumnTotal) 设置字段总数
 * @method integer getTableConfig() 获取表配置检测数
 * @method void setTableConfig(integer $TableConfig) 设置表配置检测数
 * @method integer getColumnConfig() 获取字段配置检测数
 * @method void setColumnConfig(integer $ColumnConfig) 设置字段配置检测数
 * @method integer getTableExec() 获取表实际检测数
 * @method void setTableExec(integer $TableExec) 设置表实际检测数
 * @method integer getColumnExec() 获取字段实际检测数
 * @method void setColumnExec(integer $ColumnExec) 设置字段实际检测数
 */
class DataCheckStat extends AbstractModel
{
    /**
     * @var integer 表总数
     */
    public $TableTotal;

    /**
     * @var integer 字段总数
     */
    public $ColumnTotal;

    /**
     * @var integer 表配置检测数
     */
    public $TableConfig;

    /**
     * @var integer 字段配置检测数
     */
    public $ColumnConfig;

    /**
     * @var integer 表实际检测数
     */
    public $TableExec;

    /**
     * @var integer 字段实际检测数
     */
    public $ColumnExec;

    /**
     * @param integer $TableTotal 表总数
     * @param integer $ColumnTotal 字段总数
     * @param integer $TableConfig 表配置检测数
     * @param integer $ColumnConfig 字段配置检测数
     * @param integer $TableExec 表实际检测数
     * @param integer $ColumnExec 字段实际检测数
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
        if (array_key_exists("TableTotal",$param) and $param["TableTotal"] !== null) {
            $this->TableTotal = $param["TableTotal"];
        }

        if (array_key_exists("ColumnTotal",$param) and $param["ColumnTotal"] !== null) {
            $this->ColumnTotal = $param["ColumnTotal"];
        }

        if (array_key_exists("TableConfig",$param) and $param["TableConfig"] !== null) {
            $this->TableConfig = $param["TableConfig"];
        }

        if (array_key_exists("ColumnConfig",$param) and $param["ColumnConfig"] !== null) {
            $this->ColumnConfig = $param["ColumnConfig"];
        }

        if (array_key_exists("TableExec",$param) and $param["TableExec"] !== null) {
            $this->TableExec = $param["TableExec"];
        }

        if (array_key_exists("ColumnExec",$param) and $param["ColumnExec"] !== null) {
            $this->ColumnExec = $param["ColumnExec"];
        }
    }
}
