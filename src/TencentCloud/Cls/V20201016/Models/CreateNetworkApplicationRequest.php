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
 * CreateNetworkApplication请求参数结构体
 *
 * @method string getName() 获取<p>网络应用名称：长度不超过64字符，名称不能重复。</p><ul><li>只能包含以下字符：<ul><li>英文字母（大小写）</li><li>数字</li><li>下划线</li><li>连字符（减号）</li><li>汉字</li></ul></li><li>至少包含一个字符</li><li>不能包含空格</li><li>不能包含其他特殊字符（如 @、#、$、% 等）</li></ul>
 * @method void setName(string $Name) 设置<p>网络应用名称：长度不超过64字符，名称不能重复。</p><ul><li>只能包含以下字符：<ul><li>英文字母（大小写）</li><li>数字</li><li>下划线</li><li>连字符（减号）</li><li>汉字</li></ul></li><li>至少包含一个字符</li><li>不能包含空格</li><li>不能包含其他特殊字符（如 @、#、$、% 等）</li></ul>
 * @method string getLogsetId() 获取<p>日志集ID</p><ul><li>通过<a href="https://cloud.tencent.com/document/product/614/58624">获取日志集列表</a>获取日志集Id。</li></ul>
 * @method void setLogsetId(string $LogsetId) 设置<p>日志集ID</p><ul><li>通过<a href="https://cloud.tencent.com/document/product/614/58624">获取日志集列表</a>获取日志集Id。</li></ul>
 * @method string getTopicName() 获取<p>主题名称。名称限制如下：</p><ul><li>不能为空字符串</li><li>不能包含字符&#39;|&#39;</li><li>不能使用以下名称[&quot;cls_service_log&quot;,&quot;loglistener_status&quot;,&quot;loglistener_alarm&quot;,&quot;loglistener_business&quot;,&quot;cls_service_metric&quot;]</li></ul>
 * @method void setTopicName(string $TopicName) 设置<p>主题名称。名称限制如下：</p><ul><li>不能为空字符串</li><li>不能包含字符&#39;|&#39;</li><li>不能使用以下名称[&quot;cls_service_log&quot;,&quot;loglistener_status&quot;,&quot;loglistener_alarm&quot;,&quot;loglistener_business&quot;,&quot;cls_service_metric&quot;]</li></ul>
 */
class CreateNetworkApplicationRequest extends AbstractModel
{
    /**
     * @var string <p>网络应用名称：长度不超过64字符，名称不能重复。</p><ul><li>只能包含以下字符：<ul><li>英文字母（大小写）</li><li>数字</li><li>下划线</li><li>连字符（减号）</li><li>汉字</li></ul></li><li>至少包含一个字符</li><li>不能包含空格</li><li>不能包含其他特殊字符（如 @、#、$、% 等）</li></ul>
     */
    public $Name;

    /**
     * @var string <p>日志集ID</p><ul><li>通过<a href="https://cloud.tencent.com/document/product/614/58624">获取日志集列表</a>获取日志集Id。</li></ul>
     */
    public $LogsetId;

    /**
     * @var string <p>主题名称。名称限制如下：</p><ul><li>不能为空字符串</li><li>不能包含字符&#39;|&#39;</li><li>不能使用以下名称[&quot;cls_service_log&quot;,&quot;loglistener_status&quot;,&quot;loglistener_alarm&quot;,&quot;loglistener_business&quot;,&quot;cls_service_metric&quot;]</li></ul>
     */
    public $TopicName;

    /**
     * @param string $Name <p>网络应用名称：长度不超过64字符，名称不能重复。</p><ul><li>只能包含以下字符：<ul><li>英文字母（大小写）</li><li>数字</li><li>下划线</li><li>连字符（减号）</li><li>汉字</li></ul></li><li>至少包含一个字符</li><li>不能包含空格</li><li>不能包含其他特殊字符（如 @、#、$、% 等）</li></ul>
     * @param string $LogsetId <p>日志集ID</p><ul><li>通过<a href="https://cloud.tencent.com/document/product/614/58624">获取日志集列表</a>获取日志集Id。</li></ul>
     * @param string $TopicName <p>主题名称。名称限制如下：</p><ul><li>不能为空字符串</li><li>不能包含字符&#39;|&#39;</li><li>不能使用以下名称[&quot;cls_service_log&quot;,&quot;loglistener_status&quot;,&quot;loglistener_alarm&quot;,&quot;loglistener_business&quot;,&quot;cls_service_metric&quot;]</li></ul>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }
    }
}
