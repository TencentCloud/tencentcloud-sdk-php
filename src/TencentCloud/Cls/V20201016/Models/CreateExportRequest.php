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
 * @method string getTopicId() 获取<p>日志主题Id</p><ul><li>通过<a href="https://cloud.tencent.com/document/product/614/56454">获取日志主题列表</a>获取日志主题Id。</li></ul>
 * @method void setTopicId(string $TopicId) 设置<p>日志主题Id</p><ul><li>通过<a href="https://cloud.tencent.com/document/product/614/56454">获取日志主题列表</a>获取日志主题Id。</li></ul>
 * @method integer getCount() 获取<p>日志导出数量,  最大值5000万</p>
 * @method void setCount(integer $Count) 设置<p>日志导出数量,  最大值5000万</p>
 * @method string getQuery() 获取<p>日志导出检索语句，不支持<a href="https://cloud.tencent.com/document/product/614/44061" target="_blank">[SQL语句]</a></p>
 * @method void setQuery(string $Query) 设置<p>日志导出检索语句，不支持<a href="https://cloud.tencent.com/document/product/614/44061" target="_blank">[SQL语句]</a></p>
 * @method integer getFrom() 获取<p>日志导出起始时间，毫秒时间戳</p>
 * @method void setFrom(integer $From) 设置<p>日志导出起始时间，毫秒时间戳</p>
 * @method integer getTo() 获取<p>日志导出结束时间，毫秒时间戳</p>
 * @method void setTo(integer $To) 设置<p>日志导出结束时间，毫秒时间戳</p>
 * @method string getOrder() 获取<p>日志导出时间排序。desc，asc，默认为desc</p>
 * @method void setOrder(string $Order) 设置<p>日志导出时间排序。desc，asc，默认为desc</p>
 * @method string getFormat() 获取<p>日志导出数据格式。json，csv，默认为json</p>
 * @method void setFormat(string $Format) 设置<p>日志导出数据格式。json，csv，默认为json</p>
 * @method integer getSyntaxRule() 获取<p>检索语法规则，默认值为1，推荐使用1 。</p><ul><li>0：Lucene语法</li><li>1：CQL语法（CLS Query Language，日志服务专用检索语法）</li></ul><p>详细说明参见<a href="https://cloud.tencent.com/document/product/614/47044#RetrievesConditionalRules" target="_blank">检索条件语法规则</a>。</p>
 * @method void setSyntaxRule(integer $SyntaxRule) 设置<p>检索语法规则，默认值为1，推荐使用1 。</p><ul><li>0：Lucene语法</li><li>1：CQL语法（CLS Query Language，日志服务专用检索语法）</li></ul><p>详细说明参见<a href="https://cloud.tencent.com/document/product/614/47044#RetrievesConditionalRules" target="_blank">检索条件语法规则</a>。</p>
 * @method array getDerivedFields() 获取<p>导出字段</p>
 * @method void setDerivedFields(array $DerivedFields) 设置<p>导出字段</p>
 */
class CreateExportRequest extends AbstractModel
{
    /**
     * @var string <p>日志主题Id</p><ul><li>通过<a href="https://cloud.tencent.com/document/product/614/56454">获取日志主题列表</a>获取日志主题Id。</li></ul>
     */
    public $TopicId;

    /**
     * @var integer <p>日志导出数量,  最大值5000万</p>
     */
    public $Count;

    /**
     * @var string <p>日志导出检索语句，不支持<a href="https://cloud.tencent.com/document/product/614/44061" target="_blank">[SQL语句]</a></p>
     */
    public $Query;

    /**
     * @var integer <p>日志导出起始时间，毫秒时间戳</p>
     */
    public $From;

    /**
     * @var integer <p>日志导出结束时间，毫秒时间戳</p>
     */
    public $To;

    /**
     * @var string <p>日志导出时间排序。desc，asc，默认为desc</p>
     */
    public $Order;

    /**
     * @var string <p>日志导出数据格式。json，csv，默认为json</p>
     */
    public $Format;

    /**
     * @var integer <p>检索语法规则，默认值为1，推荐使用1 。</p><ul><li>0：Lucene语法</li><li>1：CQL语法（CLS Query Language，日志服务专用检索语法）</li></ul><p>详细说明参见<a href="https://cloud.tencent.com/document/product/614/47044#RetrievesConditionalRules" target="_blank">检索条件语法规则</a>。</p>
     */
    public $SyntaxRule;

    /**
     * @var array <p>导出字段</p>
     */
    public $DerivedFields;

    /**
     * @param string $TopicId <p>日志主题Id</p><ul><li>通过<a href="https://cloud.tencent.com/document/product/614/56454">获取日志主题列表</a>获取日志主题Id。</li></ul>
     * @param integer $Count <p>日志导出数量,  最大值5000万</p>
     * @param string $Query <p>日志导出检索语句，不支持<a href="https://cloud.tencent.com/document/product/614/44061" target="_blank">[SQL语句]</a></p>
     * @param integer $From <p>日志导出起始时间，毫秒时间戳</p>
     * @param integer $To <p>日志导出结束时间，毫秒时间戳</p>
     * @param string $Order <p>日志导出时间排序。desc，asc，默认为desc</p>
     * @param string $Format <p>日志导出数据格式。json，csv，默认为json</p>
     * @param integer $SyntaxRule <p>检索语法规则，默认值为1，推荐使用1 。</p><ul><li>0：Lucene语法</li><li>1：CQL语法（CLS Query Language，日志服务专用检索语法）</li></ul><p>详细说明参见<a href="https://cloud.tencent.com/document/product/614/47044#RetrievesConditionalRules" target="_blank">检索条件语法规则</a>。</p>
     * @param array $DerivedFields <p>导出字段</p>
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
