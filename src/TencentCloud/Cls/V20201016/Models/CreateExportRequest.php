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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateExport请求参数结构体
 *
 * @method string getTopicId() 获取日志主题ID
 * @method void setTopicId(string $TopicId) 设置日志主题ID
 * @method integer getCount() 获取日志导出数量,  最大值5000万
 * @method void setCount(integer $Count) 设置日志导出数量,  最大值5000万
 * @method string getQuery() 获取日志导出检索语句，不支持<a href="https://cloud.tencent.com/document/product/614/44061" target="_blank">[SQL语句]</a>
 * @method void setQuery(string $Query) 设置日志导出检索语句，不支持<a href="https://cloud.tencent.com/document/product/614/44061" target="_blank">[SQL语句]</a>
 * @method integer getFrom() 获取日志导出起始时间，毫秒时间戳
 * @method void setFrom(integer $From) 设置日志导出起始时间，毫秒时间戳
 * @method integer getTo() 获取日志导出结束时间，毫秒时间戳
 * @method void setTo(integer $To) 设置日志导出结束时间，毫秒时间戳
 * @method string getOrder() 获取日志导出时间排序。desc，asc，默认为desc
 * @method void setOrder(string $Order) 设置日志导出时间排序。desc，asc，默认为desc
 * @method string getFormat() 获取日志导出数据格式。json，csv，默认为json
 * @method void setFormat(string $Format) 设置日志导出数据格式。json，csv，默认为json
 * @method integer getSyntaxRule() 获取语法规则,  默认值为0。
0：Lucene语法，1：CQL语法。
 * @method void setSyntaxRule(integer $SyntaxRule) 设置语法规则,  默认值为0。
0：Lucene语法，1：CQL语法。
 * @method array getDerivedFields() 获取导出字段
 * @method void setDerivedFields(array $DerivedFields) 设置导出字段
 */
class CreateExportRequest extends AbstractModel
{
    /**
     * @var string 日志主题ID
     */
    public $TopicId;

    /**
     * @var integer 日志导出数量,  最大值5000万
     */
    public $Count;

    /**
     * @var string 日志导出检索语句，不支持<a href="https://cloud.tencent.com/document/product/614/44061" target="_blank">[SQL语句]</a>
     */
    public $Query;

    /**
     * @var integer 日志导出起始时间，毫秒时间戳
     */
    public $From;

    /**
     * @var integer 日志导出结束时间，毫秒时间戳
     */
    public $To;

    /**
     * @var string 日志导出时间排序。desc，asc，默认为desc
     */
    public $Order;

    /**
     * @var string 日志导出数据格式。json，csv，默认为json
     */
    public $Format;

    /**
     * @var integer 语法规则,  默认值为0。
0：Lucene语法，1：CQL语法。
     */
    public $SyntaxRule;

    /**
     * @var array 导出字段
     */
    public $DerivedFields;

    /**
     * @param string $TopicId 日志主题ID
     * @param integer $Count 日志导出数量,  最大值5000万
     * @param string $Query 日志导出检索语句，不支持<a href="https://cloud.tencent.com/document/product/614/44061" target="_blank">[SQL语句]</a>
     * @param integer $From 日志导出起始时间，毫秒时间戳
     * @param integer $To 日志导出结束时间，毫秒时间戳
     * @param string $Order 日志导出时间排序。desc，asc，默认为desc
     * @param string $Format 日志导出数据格式。json，csv，默认为json
     * @param integer $SyntaxRule 语法规则,  默认值为0。
0：Lucene语法，1：CQL语法。
     * @param array $DerivedFields 导出字段
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }

        if (array_key_exists("To",$param) and $param["To"] !== null) {
            $this->To = $param["To"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("SyntaxRule",$param) and $param["SyntaxRule"] !== null) {
            $this->SyntaxRule = $param["SyntaxRule"];
        }

        if (array_key_exists("DerivedFields",$param) and $param["DerivedFields"] !== null) {
            $this->DerivedFields = $param["DerivedFields"];
        }
    }
}
