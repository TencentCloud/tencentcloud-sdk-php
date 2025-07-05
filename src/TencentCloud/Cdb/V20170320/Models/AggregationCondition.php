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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 审计日志聚合条件
 *
 * @method string getAggregationField() 获取聚合字段。目前仅支持host-源IP、user-用户名、dbName-数据库名、sqlType-sql类型。
 * @method void setAggregationField(string $AggregationField) 设置聚合字段。目前仅支持host-源IP、user-用户名、dbName-数据库名、sqlType-sql类型。
 * @method integer getOffset() 获取偏移量。
 * @method void setOffset(integer $Offset) 设置偏移量。
 * @method integer getLimit() 获取该聚合字段下要返回聚合桶的数量，最大100。
 * @method void setLimit(integer $Limit) 设置该聚合字段下要返回聚合桶的数量，最大100。
 */
class AggregationCondition extends AbstractModel
{
    /**
     * @var string 聚合字段。目前仅支持host-源IP、user-用户名、dbName-数据库名、sqlType-sql类型。
     */
    public $AggregationField;

    /**
     * @var integer 偏移量。
     */
    public $Offset;

    /**
     * @var integer 该聚合字段下要返回聚合桶的数量，最大100。
     */
    public $Limit;

    /**
     * @param string $AggregationField 聚合字段。目前仅支持host-源IP、user-用户名、dbName-数据库名、sqlType-sql类型。
     * @param integer $Offset 偏移量。
     * @param integer $Limit 该聚合字段下要返回聚合桶的数量，最大100。
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
        if (array_key_exists("AggregationField",$param) and $param["AggregationField"] !== null) {
            $this->AggregationField = $param["AggregationField"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
