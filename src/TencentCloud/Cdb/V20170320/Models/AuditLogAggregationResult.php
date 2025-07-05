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
 * 审计日志分析结果
 *
 * @method string getAggregationField() 获取聚合维度
 * @method void setAggregationField(string $AggregationField) 设置聚合维度
 * @method array getBuckets() 获取聚合桶的结果集
 * @method void setBuckets(array $Buckets) 设置聚合桶的结果集
 */
class AuditLogAggregationResult extends AbstractModel
{
    /**
     * @var string 聚合维度
     */
    public $AggregationField;

    /**
     * @var array 聚合桶的结果集
     */
    public $Buckets;

    /**
     * @param string $AggregationField 聚合维度
     * @param array $Buckets 聚合桶的结果集
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

        if (array_key_exists("Buckets",$param) and $param["Buckets"] !== null) {
            $this->Buckets = [];
            foreach ($param["Buckets"] as $key => $value){
                $obj = new Bucket();
                $obj->deserialize($value);
                array_push($this->Buckets, $obj);
            }
        }
    }
}
