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
 * @method string getTopicId() 获取要查询的日志主题Id。
- 通过 [获取日志主题列表](https://cloud.tencent.com/document/product/614/56454) 获取日志主题Id。
- 通过 [创建日志主题](https://cloud.tencent.com/document/product/614/56456) 获取日志主题Id。
 * @method void setTopicId(string $TopicId) 设置要查询的日志主题Id。
- 通过 [获取日志主题列表](https://cloud.tencent.com/document/product/614/56454) 获取日志主题Id。
- 通过 [创建日志主题](https://cloud.tencent.com/document/product/614/56456) 获取日志主题Id。
 * @method string getBTime() 获取日志时间,  即 [检索分析日志](https://cloud.tencent.com/document/product/614/56447) 接口返回信息中Results结构体中的Time，需按照 UTC+8 时区将该毫秒级Unix时间戳转换为 YYYY-mm-dd HH:MM:SS.FFF 格式的字符串。
 * @method void setBTime(string $BTime) 设置日志时间,  即 [检索分析日志](https://cloud.tencent.com/document/product/614/56447) 接口返回信息中Results结构体中的Time，需按照 UTC+8 时区将该毫秒级Unix时间戳转换为 YYYY-mm-dd HH:MM:SS.FFF 格式的字符串。
 * @method string getPkgId() 获取日志包序号，即 [检索分析日志](https://cloud.tencent.com/document/product/614/56447) 接口返回信息中Results结构体中的PkgId。
 * @method void setPkgId(string $PkgId) 设置日志包序号，即 [检索分析日志](https://cloud.tencent.com/document/product/614/56447) 接口返回信息中Results结构体中的PkgId。
 * @method integer getPkgLogId() 获取日志包内一条日志的序号，即 [检索分析日志](https://cloud.tencent.com/document/product/614/56447) 接口返回信息中Results结构中的PkgLogId。
 * @method void setPkgLogId(integer $PkgLogId) 设置日志包内一条日志的序号，即 [检索分析日志](https://cloud.tencent.com/document/product/614/56447) 接口返回信息中Results结构中的PkgLogId。
 * @method integer getPrevLogs() 获取前${PrevLogs}条日志，默认值10。
 * @method void setPrevLogs(integer $PrevLogs) 设置前${PrevLogs}条日志，默认值10。
 * @method integer getNextLogs() 获取后${NextLogs}条日志，默认值10。
 * @method void setNextLogs(integer $NextLogs) 设置后${NextLogs}条日志，默认值10。
 * @method string getQuery() 获取检索语句，对日志上下文进行过滤，最大长度为12KB
语句由 <a href="https://cloud.tencent.com/document/product/614/47044" target="_blank">[检索条件]</a>构成，不支持SQL语句
 * @method void setQuery(string $Query) 设置检索语句，对日志上下文进行过滤，最大长度为12KB
语句由 <a href="https://cloud.tencent.com/document/product/614/47044" target="_blank">[检索条件]</a>构成，不支持SQL语句
 * @method integer getFrom() 获取上下文检索的开始时间，单位：毫秒级时间戳
注意：
- From为空时，表示上下文检索的开始时间不做限制
- From和To非空时，From < To
- 暂时仅支持上海 / 弗吉尼亚/ 新加坡地域
 * @method void setFrom(integer $From) 设置上下文检索的开始时间，单位：毫秒级时间戳
注意：
- From为空时，表示上下文检索的开始时间不做限制
- From和To非空时，From < To
- 暂时仅支持上海 / 弗吉尼亚/ 新加坡地域
 * @method integer getTo() 获取上下文检索的结束时间，单位：毫秒级时间戳。
注意：
- To为空时，表示上下文检索的结束时间不做限制
- From和To非空时，From < To
- 暂时仅支持上海 / 弗吉尼亚/ 新加坡地域
 * @method void setTo(integer $To) 设置上下文检索的结束时间，单位：毫秒级时间戳。
注意：
- To为空时，表示上下文检索的结束时间不做限制
- From和To非空时，From < To
- 暂时仅支持上海 / 弗吉尼亚/ 新加坡地域
 */
class DescribeLogContextRequest extends AbstractModel
{
    /**
     * @var string 要查询的日志主题Id。
- 通过 [获取日志主题列表](https://cloud.tencent.com/document/product/614/56454) 获取日志主题Id。
- 通过 [创建日志主题](https://cloud.tencent.com/document/product/614/56456) 获取日志主题Id。
     */
    public $TopicId;

    /**
     * @var string 日志时间,  即 [检索分析日志](https://cloud.tencent.com/document/product/614/56447) 接口返回信息中Results结构体中的Time，需按照 UTC+8 时区将该毫秒级Unix时间戳转换为 YYYY-mm-dd HH:MM:SS.FFF 格式的字符串。
     */
    public $BTime;

    /**
     * @var string 日志包序号，即 [检索分析日志](https://cloud.tencent.com/document/product/614/56447) 接口返回信息中Results结构体中的PkgId。
     */
    public $PkgId;

    /**
     * @var integer 日志包内一条日志的序号，即 [检索分析日志](https://cloud.tencent.com/document/product/614/56447) 接口返回信息中Results结构中的PkgLogId。
     */
    public $PkgLogId;

    /**
     * @var integer 前${PrevLogs}条日志，默认值10。
     */
    public $PrevLogs;

    /**
     * @var integer 后${NextLogs}条日志，默认值10。
     */
    public $NextLogs;

    /**
     * @var string 检索语句，对日志上下文进行过滤，最大长度为12KB
语句由 <a href="https://cloud.tencent.com/document/product/614/47044" target="_blank">[检索条件]</a>构成，不支持SQL语句
     */
    public $Query;

    /**
     * @var integer 上下文检索的开始时间，单位：毫秒级时间戳
注意：
- From为空时，表示上下文检索的开始时间不做限制
- From和To非空时，From < To
- 暂时仅支持上海 / 弗吉尼亚/ 新加坡地域
     */
    public $From;

    /**
     * @var integer 上下文检索的结束时间，单位：毫秒级时间戳。
注意：
- To为空时，表示上下文检索的结束时间不做限制
- From和To非空时，From < To
- 暂时仅支持上海 / 弗吉尼亚/ 新加坡地域
     */
    public $To;

    /**
     * @param string $TopicId 要查询的日志主题Id。
- 通过 [获取日志主题列表](https://cloud.tencent.com/document/product/614/56454) 获取日志主题Id。
- 通过 [创建日志主题](https://cloud.tencent.com/document/product/614/56456) 获取日志主题Id。
     * @param string $BTime 日志时间,  即 [检索分析日志](https://cloud.tencent.com/document/product/614/56447) 接口返回信息中Results结构体中的Time，需按照 UTC+8 时区将该毫秒级Unix时间戳转换为 YYYY-mm-dd HH:MM:SS.FFF 格式的字符串。
     * @param string $PkgId 日志包序号，即 [检索分析日志](https://cloud.tencent.com/document/product/614/56447) 接口返回信息中Results结构体中的PkgId。
     * @param integer $PkgLogId 日志包内一条日志的序号，即 [检索分析日志](https://cloud.tencent.com/document/product/614/56447) 接口返回信息中Results结构中的PkgLogId。
     * @param integer $PrevLogs 前${PrevLogs}条日志，默认值10。
     * @param integer $NextLogs 后${NextLogs}条日志，默认值10。
     * @param string $Query 检索语句，对日志上下文进行过滤，最大长度为12KB
语句由 <a href="https://cloud.tencent.com/document/product/614/47044" target="_blank">[检索条件]</a>构成，不支持SQL语句
     * @param integer $From 上下文检索的开始时间，单位：毫秒级时间戳
注意：
- From为空时，表示上下文检索的开始时间不做限制
- From和To非空时，From < To
- 暂时仅支持上海 / 弗吉尼亚/ 新加坡地域
     * @param integer $To 上下文检索的结束时间，单位：毫秒级时间戳。
注意：
- To为空时，表示上下文检索的结束时间不做限制
- From和To非空时，From < To
- 暂时仅支持上海 / 弗吉尼亚/ 新加坡地域
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
