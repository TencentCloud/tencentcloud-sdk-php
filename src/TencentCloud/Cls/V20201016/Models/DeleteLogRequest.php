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
 * DeleteLog请求参数结构体
 *
 * @method string getTopicId() 获取<p>日志主题id</p><p>仅在创建日志主题时，开启了日志修改/删除开关的主题，支持日志修改/删除。该功能暂时仅面向白名单内客户使用。</p>
 * @method void setTopicId(string $TopicId) 设置<p>日志主题id</p><p>仅在创建日志主题时，开启了日志修改/删除开关的主题，支持日志修改/删除。该功能暂时仅面向白名单内客户使用。</p>
 * @method integer getFrom() 获取<p>检索时间范围-开始时间</p><p>单位：ms</p>
 * @method void setFrom(integer $From) 设置<p>检索时间范围-开始时间</p><p>单位：ms</p>
 * @method integer getTo() 获取<p>检索时间范围-结束时间</p><p>单位：ms</p>
 * @method void setTo(integer $To) 设置<p>检索时间范围-结束时间</p><p>单位：ms</p>
 * @method string getQueryString() 获取<p>日志检索条件，仅支持 CQL 语法，不支持 Lucene 语法</p><p>对符合检索条件的日志进行删除</p>
 * @method void setQueryString(string $QueryString) 设置<p>日志检索条件，仅支持 CQL 语法，不支持 Lucene 语法</p><p>对符合检索条件的日志进行删除</p>
 */
class DeleteLogRequest extends AbstractModel
{
    /**
     * @var string <p>日志主题id</p><p>仅在创建日志主题时，开启了日志修改/删除开关的主题，支持日志修改/删除。该功能暂时仅面向白名单内客户使用。</p>
     */
    public $TopicId;

    /**
     * @var integer <p>检索时间范围-开始时间</p><p>单位：ms</p>
     */
    public $From;

    /**
     * @var integer <p>检索时间范围-结束时间</p><p>单位：ms</p>
     */
    public $To;

    /**
     * @var string <p>日志检索条件，仅支持 CQL 语法，不支持 Lucene 语法</p><p>对符合检索条件的日志进行删除</p>
     */
    public $QueryString;

    /**
     * @param string $TopicId <p>日志主题id</p><p>仅在创建日志主题时，开启了日志修改/删除开关的主题，支持日志修改/删除。该功能暂时仅面向白名单内客户使用。</p>
     * @param integer $From <p>检索时间范围-开始时间</p><p>单位：ms</p>
     * @param integer $To <p>检索时间范围-结束时间</p><p>单位：ms</p>
     * @param string $QueryString <p>日志检索条件，仅支持 CQL 语法，不支持 Lucene 语法</p><p>对符合检索条件的日志进行删除</p>
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

        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }

        if (array_key_exists("To",$param) and $param["To"] !== null) {
            $this->To = $param["To"];
        }

        if (array_key_exists("QueryString",$param) and $param["QueryString"] !== null) {
            $this->QueryString = $param["QueryString"];
        }
    }
}
