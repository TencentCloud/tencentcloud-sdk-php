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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeFastAnalysis请求参数结构体
 *
 * @method integer getFrom() 获取起始时间，单位ms
 * @method void setFrom(integer $From) 设置起始时间，单位ms
 * @method integer getTo() 获取结束时间，单位ms
 * @method void setTo(integer $To) 设置结束时间，单位ms
 * @method string getQuery() 获取查询语句，语句长度最大为4096
 * @method void setQuery(string $Query) 设置查询语句，语句长度最大为4096
 * @method string getFieldName() 获取日志字段名称
 * @method void setFieldName(string $FieldName) 设置日志字段名称
 */
class DescribeFastAnalysisRequest extends AbstractModel
{
    /**
     * @var integer 起始时间，单位ms
     */
    public $From;

    /**
     * @var integer 结束时间，单位ms
     */
    public $To;

    /**
     * @var string 查询语句，语句长度最大为4096
     */
    public $Query;

    /**
     * @var string 日志字段名称
     */
    public $FieldName;

    /**
     * @param integer $From 起始时间，单位ms
     * @param integer $To 结束时间，单位ms
     * @param string $Query 查询语句，语句长度最大为4096
     * @param string $FieldName 日志字段名称
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
        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }

        if (array_key_exists("To",$param) and $param["To"] !== null) {
            $this->To = $param["To"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("FieldName",$param) and $param["FieldName"] !== null) {
            $this->FieldName = $param["FieldName"];
        }
    }
}
