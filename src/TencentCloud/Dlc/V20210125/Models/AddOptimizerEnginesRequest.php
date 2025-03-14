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
 * AddOptimizerEngines请求参数结构体
 *
 * @method string getCatalog() 获取数据目录名称
 * @method void setCatalog(string $Catalog) 设置数据目录名称
 * @method array getEngines() 获取引擎信息列表
 * @method void setEngines(array $Engines) 设置引擎信息列表
 * @method string getDatabase() 获取数据库名称
 * @method void setDatabase(string $Database) 设置数据库名称
 * @method string getTable() 获取数据表名称
 * @method void setTable(string $Table) 设置数据表名称
 */
class AddOptimizerEnginesRequest extends AbstractModel
{
    /**
     * @var string 数据目录名称
     */
    public $Catalog;

    /**
     * @var array 引擎信息列表
     */
    public $Engines;

    /**
     * @var string 数据库名称
     */
    public $Database;

    /**
     * @var string 数据表名称
     */
    public $Table;

    /**
     * @param string $Catalog 数据目录名称
     * @param array $Engines 引擎信息列表
     * @param string $Database 数据库名称
     * @param string $Table 数据表名称
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
        if (array_key_exists("Catalog",$param) and $param["Catalog"] !== null) {
            $this->Catalog = $param["Catalog"];
        }

        if (array_key_exists("Engines",$param) and $param["Engines"] !== null) {
            $this->Engines = [];
            foreach ($param["Engines"] as $key => $value){
                $obj = new OptimizerEngineInfo();
                $obj->deserialize($value);
                array_push($this->Engines, $obj);
            }
        }

        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }

        if (array_key_exists("Table",$param) and $param["Table"] !== null) {
            $this->Table = $param["Table"];
        }
    }
}
