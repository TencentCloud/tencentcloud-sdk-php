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
 * 库/表/视图级别的 DDL/DML 白名单
 *
 * @method string getDbName() 获取规则生效的库名
 * @method void setDbName(string $DbName) 设置规则生效的库名
 * @method OpFilter getOpFilter() 获取库级 DDL/DML 过滤规则
 * @method void setOpFilter(OpFilter $OpFilter) 设置库级 DDL/DML 过滤规则
 * @method array getTables() 获取表级 DDL/DML 过滤信息
 * @method void setTables(array $Tables) 设置表级 DDL/DML 过滤信息
 * @method array getViews() 获取视图级 DDL/DML 过滤信息
 * @method void setViews(array $Views) 设置视图级 DDL/DML 过滤信息
 */
class DBOpFilter extends AbstractModel
{
    /**
     * @var string 规则生效的库名
     */
    public $DbName;

    /**
     * @var OpFilter 库级 DDL/DML 过滤规则
     */
    public $OpFilter;

    /**
     * @var array 表级 DDL/DML 过滤信息
     */
    public $Tables;

    /**
     * @var array 视图级 DDL/DML 过滤信息
     */
    public $Views;

    /**
     * @param string $DbName 规则生效的库名
     * @param OpFilter $OpFilter 库级 DDL/DML 过滤规则
     * @param array $Tables 表级 DDL/DML 过滤信息
     * @param array $Views 视图级 DDL/DML 过滤信息
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
        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("OpFilter",$param) and $param["OpFilter"] !== null) {
            $this->OpFilter = new OpFilter();
            $this->OpFilter->deserialize($param["OpFilter"]);
        }

        if (array_key_exists("Tables",$param) and $param["Tables"] !== null) {
            $this->Tables = [];
            foreach ($param["Tables"] as $key => $value){
                $obj = new TableFilter();
                $obj->deserialize($value);
                array_push($this->Tables, $obj);
            }
        }

        if (array_key_exists("Views",$param) and $param["Views"] !== null) {
            $this->Views = [];
            foreach ($param["Views"] as $key => $value){
                $obj = new ViewFilter();
                $obj->deserialize($value);
                array_push($this->Views, $obj);
            }
        }
    }
}
