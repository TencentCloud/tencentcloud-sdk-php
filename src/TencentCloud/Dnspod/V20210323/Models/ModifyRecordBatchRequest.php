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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyRecordBatch请求参数结构体
 *
 * @method array getRecordIdList() 获取<p>记录ID数组。可以通过接口DescribeRecordList查到所有的解析记录列表以及对应的RecordId。单次最多修改5000条记录。</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/1427/56166">DescribeRecordList</a></p>
 * @method void setRecordIdList(array $RecordIdList) 设置<p>记录ID数组。可以通过接口DescribeRecordList查到所有的解析记录列表以及对应的RecordId。单次最多修改5000条记录。</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/1427/56166">DescribeRecordList</a></p>
 * @method string getChange() 获取<p>要修改的字段，可选值为 [“sub_domain”、”record_type”、”area”、”value”、”mx”、”ttl”、”status”] 中的某一个。</p>
 * @method void setChange(string $Change) 设置<p>要修改的字段，可选值为 [“sub_domain”、”record_type”、”area”、”value”、”mx”、”ttl”、”status”] 中的某一个。</p>
 * @method string getChangeTo() 获取<p>修改为，具体依赖 change 字段，必填参数。</p>
 * @method void setChangeTo(string $ChangeTo) 设置<p>修改为，具体依赖 change 字段，必填参数。</p>
 * @method string getValue() 获取<p>要修改到的记录值，仅当 change 字段为 “record_type” 时为必填参数。</p>
 * @method void setValue(string $Value) 设置<p>要修改到的记录值，仅当 change 字段为 “record_type” 时为必填参数。</p>
 * @method string getMX() 获取<p>MX 优先级，当记录类型是 MX、HTTPS、SVCB 时必填，范围0-65535。</p>
 * @method void setMX(string $MX) 设置<p>MX 优先级，当记录类型是 MX、HTTPS、SVCB 时必填，范围0-65535。</p>
 */
class ModifyRecordBatchRequest extends AbstractModel
{
    /**
     * @var array <p>记录ID数组。可以通过接口DescribeRecordList查到所有的解析记录列表以及对应的RecordId。单次最多修改5000条记录。</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/1427/56166">DescribeRecordList</a></p>
     */
    public $RecordIdList;

    /**
     * @var string <p>要修改的字段，可选值为 [“sub_domain”、”record_type”、”area”、”value”、”mx”、”ttl”、”status”] 中的某一个。</p>
     */
    public $Change;

    /**
     * @var string <p>修改为，具体依赖 change 字段，必填参数。</p>
     */
    public $ChangeTo;

    /**
     * @var string <p>要修改到的记录值，仅当 change 字段为 “record_type” 时为必填参数。</p>
     */
    public $Value;

    /**
     * @var string <p>MX 优先级，当记录类型是 MX、HTTPS、SVCB 时必填，范围0-65535。</p>
     */
    public $MX;

    /**
     * @param array $RecordIdList <p>记录ID数组。可以通过接口DescribeRecordList查到所有的解析记录列表以及对应的RecordId。单次最多修改5000条记录。</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/1427/56166">DescribeRecordList</a></p>
     * @param string $Change <p>要修改的字段，可选值为 [“sub_domain”、”record_type”、”area”、”value”、”mx”、”ttl”、”status”] 中的某一个。</p>
     * @param string $ChangeTo <p>修改为，具体依赖 change 字段，必填参数。</p>
     * @param string $Value <p>要修改到的记录值，仅当 change 字段为 “record_type” 时为必填参数。</p>
     * @param string $MX <p>MX 优先级，当记录类型是 MX、HTTPS、SVCB 时必填，范围0-65535。</p>
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
        if (array_key_exists("RecordIdList",$param) and $param["RecordIdList"] !== null) {
            $this->RecordIdList = $param["RecordIdList"];
        }

        if (array_key_exists("Change",$param) and $param["Change"] !== null) {
            $this->Change = $param["Change"];
        }

        if (array_key_exists("ChangeTo",$param) and $param["ChangeTo"] !== null) {
            $this->ChangeTo = $param["ChangeTo"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("MX",$param) and $param["MX"] !== null) {
            $this->MX = $param["MX"];
        }
    }
}
