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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Kind=exception_dimension时返回；Rows为同一次聚合的有界排行及完整分类向量，成功空结果返回空数组。
 *
 * @method array getRows() 获取<p>按 TotalCount 降序、归一化值升序返回的完整维度行，行数不超过Limit；无数据返回空数组。</p>
 * @method void setRows(array $Rows) 设置<p>按 TotalCount 降序、归一化值升序返回的完整维度行，行数不超过Limit；无数据返回空数组。</p>
 */
class ExceptionDistribution extends AbstractModel
{
    /**
     * @var array <p>按 TotalCount 降序、归一化值升序返回的完整维度行，行数不超过Limit；无数据返回空数组。</p>
     */
    public $Rows;

    /**
     * @param array $Rows <p>按 TotalCount 降序、归一化值升序返回的完整维度行，行数不超过Limit；无数据返回空数组。</p>
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
        if (array_key_exists("Rows",$param) and $param["Rows"] !== null) {
            $this->Rows = [];
            foreach ($param["Rows"] as $key => $value){
                $obj = new ExceptionDimensionRow();
                $obj->deserialize($value);
                array_push($this->Rows, $obj);
            }
        }
    }
}
