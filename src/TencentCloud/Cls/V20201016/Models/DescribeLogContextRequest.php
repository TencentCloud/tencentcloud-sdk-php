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
 * DescribeLogContext请求参数结构体
 *
 * @method string getTopicId() 获取<p>要查询的日志主题Id。</p><ul><li>通过 <a href="https://cloud.tencent.com/document/product/614/56454">获取日志主题列表</a> 获取日志主题Id。</li><li>通过 <a href="https://cloud.tencent.com/document/product/614/56456">创建日志主题</a> 获取日志主题Id。</li></ul>
 * @method void setTopicId(string $TopicId) 设置<p>要查询的日志主题Id。</p><ul><li>通过 <a href="https://cloud.tencent.com/document/product/614/56454">获取日志主题列表</a> 获取日志主题Id。</li><li>通过 <a href="https://cloud.tencent.com/document/product/614/56456">创建日志主题</a> 获取日志主题Id。</li></ul>
 * @method string getBTime() 获取<p>日志时间,  即 <a href="https://cloud.tencent.com/document/product/614/56447">检索分析日志</a> 接口返回信息中Results结构体中的Time，需按照 UTC+8 时区将该毫秒级Unix时间戳转换为 YYYY-mm-dd HH:MM:SS.FFF 格式的字符串。</p>
 * @method void setBTime(string $BTime) 设置<p>日志时间,  即 <a href="https://cloud.tencent.com/document/product/614/56447">检索分析日志</a> 接口返回信息中Results结构体中的Time，需按照 UTC+8 时区将该毫秒级Unix时间戳转换为 YYYY-mm-dd HH:MM:SS.FFF 格式的字符串。</p>
 * @method string getPkgId() 获取<p>日志包序号，即 <a href="https://cloud.tencent.com/document/product/614/56447">检索分析日志</a> 接口返回信息中Results结构体中的PkgId。</p>
 * @method void setPkgId(string $PkgId) 设置<p>日志包序号，即 <a href="https://cloud.tencent.com/document/product/614/56447">检索分析日志</a> 接口返回信息中Results结构体中的PkgId。</p>
 * @method integer getPkgLogId() 获取<p>日志包内一条日志的序号，即 <a href="https://cloud.tencent.com/document/product/614/56447">检索分析日志</a> 接口返回信息中Results结构中的PkgLogId。</p>
 * @method void setPkgLogId(integer $PkgLogId) 设置<p>日志包内一条日志的序号，即 <a href="https://cloud.tencent.com/document/product/614/56447">检索分析日志</a> 接口返回信息中Results结构中的PkgLogId。</p>
 * @method integer getPrevLogs() 获取<p>前${PrevLogs}条日志，默认值10，最大100。</p>
 * @method void setPrevLogs(integer $PrevLogs) 设置<p>前${PrevLogs}条日志，默认值10，最大100。</p>
 * @method integer getNextLogs() 获取<p>后${NextLogs}条日志，默认值10，最大100。</p>
 * @method void setNextLogs(integer $NextLogs) 设置<p>后${NextLogs}条日志，默认值10，最大100。</p>
 * @method string getQuery() 获取<p>检索语句，对日志上下文进行过滤，最大长度为12KB<br>语句由 <a href="https://cloud.tencent.com/document/product/614/47044" target="_blank">[检索条件]</a>构成，不支持SQL语句</p>
 * @method void setQuery(string $Query) 设置<p>检索语句，对日志上下文进行过滤，最大长度为12KB<br>语句由 <a href="https://cloud.tencent.com/document/product/614/47044" target="_blank">[检索条件]</a>构成，不支持SQL语句</p>
 * @method integer getFrom() 获取<p>上下文检索的开始时间，单位：毫秒级时间戳<br>注意：</p><ul><li>From为空时，表示上下文检索的开始时间不做限制</li><li>From和To非空时，From &lt; To</li></ul>
 * @method void setFrom(integer $From) 设置<p>上下文检索的开始时间，单位：毫秒级时间戳<br>注意：</p><ul><li>From为空时，表示上下文检索的开始时间不做限制</li><li>From和To非空时，From &lt; To</li></ul>
 * @method integer getTo() 获取<p>上下文检索的结束时间，单位：毫秒级时间戳。<br>注意：</p><ul><li>To为空时，表示上下文检索的结束时间不做限制</li><li>From和To非空时，From &lt; To</li></ul>
 * @method void setTo(integer $To) 设置<p>上下文检索的结束时间，单位：毫秒级时间戳。<br>注意：</p><ul><li>To为空时，表示上下文检索的结束时间不做限制</li><li>From和To非空时，From &lt; To</li></ul>
 */
class DescribeLogContextRequest extends AbstractModel
{
    /**
     * @var string <p>要查询的日志主题Id。</p><ul><li>通过 <a href="https://cloud.tencent.com/document/product/614/56454">获取日志主题列表</a> 获取日志主题Id。</li><li>通过 <a href="https://cloud.tencent.com/document/product/614/56456">创建日志主题</a> 获取日志主题Id。</li></ul>
     */
    public $TopicId;

    /**
     * @var string <p>日志时间,  即 <a href="https://cloud.tencent.com/document/product/614/56447">检索分析日志</a> 接口返回信息中Results结构体中的Time，需按照 UTC+8 时区将该毫秒级Unix时间戳转换为 YYYY-mm-dd HH:MM:SS.FFF 格式的字符串。</p>
     */
    public $BTime;

    /**
     * @var string <p>日志包序号，即 <a href="https://cloud.tencent.com/document/product/614/56447">检索分析日志</a> 接口返回信息中Results结构体中的PkgId。</p>
     */
    public $PkgId;

    /**
     * @var integer <p>日志包内一条日志的序号，即 <a href="https://cloud.tencent.com/document/product/614/56447">检索分析日志</a> 接口返回信息中Results结构中的PkgLogId。</p>
     */
    public $PkgLogId;

    /**
     * @var integer <p>前${PrevLogs}条日志，默认值10，最大100。</p>
     */
    public $PrevLogs;

    /**
     * @var integer <p>后${NextLogs}条日志，默认值10，最大100。</p>
     */
    public $NextLogs;

    /**
     * @var string <p>检索语句，对日志上下文进行过滤，最大长度为12KB<br>语句由 <a href="https://cloud.tencent.com/document/product/614/47044" target="_blank">[检索条件]</a>构成，不支持SQL语句</p>
     */
    public $Query;

    /**
     * @var integer <p>上下文检索的开始时间，单位：毫秒级时间戳<br>注意：</p><ul><li>From为空时，表示上下文检索的开始时间不做限制</li><li>From和To非空时，From &lt; To</li></ul>
     */
    public $From;

    /**
     * @var integer <p>上下文检索的结束时间，单位：毫秒级时间戳。<br>注意：</p><ul><li>To为空时，表示上下文检索的结束时间不做限制</li><li>From和To非空时，From &lt; To</li></ul>
     */
    public $To;

    /**
     * @param string $TopicId <p>要查询的日志主题Id。</p><ul><li>通过 <a href="https://cloud.tencent.com/document/product/614/56454">获取日志主题列表</a> 获取日志主题Id。</li><li>通过 <a href="https://cloud.tencent.com/document/product/614/56456">创建日志主题</a> 获取日志主题Id。</li></ul>
     * @param string $BTime <p>日志时间,  即 <a href="https://cloud.tencent.com/document/product/614/56447">检索分析日志</a> 接口返回信息中Results结构体中的Time，需按照 UTC+8 时区将该毫秒级Unix时间戳转换为 YYYY-mm-dd HH:MM:SS.FFF 格式的字符串。</p>
     * @param string $PkgId <p>日志包序号，即 <a href="https://cloud.tencent.com/document/product/614/56447">检索分析日志</a> 接口返回信息中Results结构体中的PkgId。</p>
     * @param integer $PkgLogId <p>日志包内一条日志的序号，即 <a href="https://cloud.tencent.com/document/product/614/56447">检索分析日志</a> 接口返回信息中Results结构中的PkgLogId。</p>
     * @param integer $PrevLogs <p>前${PrevLogs}条日志，默认值10，最大100。</p>
     * @param integer $NextLogs <p>后${NextLogs}条日志，默认值10，最大100。</p>
     * @param string $Query <p>检索语句，对日志上下文进行过滤，最大长度为12KB<br>语句由 <a href="https://cloud.tencent.com/document/product/614/47044" target="_blank">[检索条件]</a>构成，不支持SQL语句</p>
     * @param integer $From <p>上下文检索的开始时间，单位：毫秒级时间戳<br>注意：</p><ul><li>From为空时，表示上下文检索的开始时间不做限制</li><li>From和To非空时，From &lt; To</li></ul>
     * @param integer $To <p>上下文检索的结束时间，单位：毫秒级时间戳。<br>注意：</p><ul><li>To为空时，表示上下文检索的结束时间不做限制</li><li>From和To非空时，From &lt; To</li></ul>
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

        if (array_key_exists("BTime",$param) and $param["BTime"] !== null) {
            $this->BTime = $param["BTime"];
        }

        if (array_key_exists("PkgId",$param) and $param["PkgId"] !== null) {
            $this->PkgId = $param["PkgId"];
        }

        if (array_key_exists("PkgLogId",$param) and $param["PkgLogId"] !== null) {
            $this->PkgLogId = $param["PkgLogId"];
        }

        if (array_key_exists("PrevLogs",$param) and $param["PrevLogs"] !== null) {
            $this->PrevLogs = $param["PrevLogs"];
        }

        if (array_key_exists("NextLogs",$param) and $param["NextLogs"] !== null) {
            $this->NextLogs = $param["NextLogs"];
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
    }
}
