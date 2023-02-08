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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateInternalTable请求参数结构体
 *
 * @method TableBaseInfo getTableBaseInfo() 获取表基本信息
 * @method void setTableBaseInfo(TableBaseInfo $TableBaseInfo) 设置表基本信息
 * @method array getColumns() 获取表字段信息
 * @method void setColumns(array $Columns) 设置表字段信息
 * @method array getPartitions() 获取表分区信息
 * @method void setPartitions(array $Partitions) 设置表分区信息
 * @method array getProperties() 获取表属性信息
 * @method void setProperties(array $Properties) 设置表属性信息
 */
class CreateInternalTableRequest extends AbstractModel
{
    /**
     * @var TableBaseInfo 表基本信息
     */
    public $TableBaseInfo;

    /**
     * @var array 表字段信息
     */
    public $Columns;

    /**
     * @var array 表分区信息
     */
    public $Partitions;

    /**
     * @var array 表属性信息
     */
    public $Properties;

    /**
     * @param TableBaseInfo $TableBaseInfo 表基本信息
     * @param array $Columns 表字段信息
     * @param array $Partitions 表分区信息
     * @param array $Properties 表属性信息
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
        if (array_key_exists("TableBaseInfo",$param) and $param["TableBaseInfo"] !== null) {
            $this->TableBaseInfo = new TableBaseInfo();
            $this->TableBaseInfo->deserialize($param["TableBaseInfo"]);
        }

        if (array_key_exists("Columns",$param) and $param["Columns"] !== null) {
            $this->Columns = [];
            foreach ($param["Columns"] as $key => $value){
                $obj = new TColumn();
                $obj->deserialize($value);
                array_push($this->Columns, $obj);
            }
        }

        if (array_key_exists("Partitions",$param) and $param["Partitions"] !== null) {
            $this->Partitions = [];
            foreach ($param["Partitions"] as $key => $value){
                $obj = new TPartition();
                $obj->deserialize($value);
                array_push($this->Partitions, $obj);
            }
        }

        if (array_key_exists("Properties",$param) and $param["Properties"] !== null) {
            $this->Properties = [];
            foreach ($param["Properties"] as $key => $value){
                $obj = new Property();
                $obj->deserialize($value);
                array_push($this->Properties, $obj);
            }
        }
    }
}
