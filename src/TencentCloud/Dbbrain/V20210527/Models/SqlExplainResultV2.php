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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EXPLAIN 输出结果。Names 为 EXPLAIN 列名顺序，Data 为按行展开的执行计划数据。
 *
 * @method array getNames() 获取<p>EXPLAIN 列名顺序，与 Data 中每一行的字段一一对应。</p>
 * @method void setNames(array $Names) 设置<p>EXPLAIN 列名顺序，与 Data 中每一行的字段一一对应。</p>
 * @method array getData() 获取<p>执行计划行列表。</p>
 * @method void setData(array $Data) 设置<p>执行计划行列表。</p>
 */
class SqlExplainResultV2 extends AbstractModel
{
    /**
     * @var array <p>EXPLAIN 列名顺序，与 Data 中每一行的字段一一对应。</p>
     */
    public $Names;

    /**
     * @var array <p>执行计划行列表。</p>
     */
    public $Data;

    /**
     * @param array $Names <p>EXPLAIN 列名顺序，与 Data 中每一行的字段一一对应。</p>
     * @param array $Data <p>执行计划行列表。</p>
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
        if (array_key_exists("Names",$param) and $param["Names"] !== null) {
            $this->Names = $param["Names"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new SqlExplainRowV2();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }
    }
}
