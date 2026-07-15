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
 * CreateAgentApplication请求参数结构体
 *
 * @method string getApplicationName() 获取<p>应用名称</p><p>入参限制：</p><ul><li>不能为空字符串</li><li>不能包含字符<code>|</code></li><li>不能超过64字符</li></ul>
 * @method void setApplicationName(string $ApplicationName) 设置<p>应用名称</p><p>入参限制：</p><ul><li>不能为空字符串</li><li>不能包含字符<code>|</code></li><li>不能超过64字符</li></ul>
 * @method string getAccessType() 获取<p>接入类型</p><p>枚举值：</p><ul><li>Langfuse： Langfuse 是一款开源的 LLM（大语言模型）工程与可观测性平台（LLMOps Tool）</li></ul>
 * @method void setAccessType(string $AccessType) 设置<p>接入类型</p><p>枚举值：</p><ul><li>Langfuse： Langfuse 是一款开源的 LLM（大语言模型）工程与可观测性平台（LLMOps Tool）</li></ul>
 * @method string getLogsetId() 获取<p>日志集Id。通过 <a href="https://cloud.tencent.com/document/product/614/58624">获取日志集列表</a>获取日志集Id。</p>
 * @method void setLogsetId(string $LogsetId) 设置<p>日志集Id。通过 <a href="https://cloud.tencent.com/document/product/614/58624">获取日志集列表</a>获取日志集Id。</p>
 */
class CreateAgentApplicationRequest extends AbstractModel
{
    /**
     * @var string <p>应用名称</p><p>入参限制：</p><ul><li>不能为空字符串</li><li>不能包含字符<code>|</code></li><li>不能超过64字符</li></ul>
     */
    public $ApplicationName;

    /**
     * @var string <p>接入类型</p><p>枚举值：</p><ul><li>Langfuse： Langfuse 是一款开源的 LLM（大语言模型）工程与可观测性平台（LLMOps Tool）</li></ul>
     */
    public $AccessType;

    /**
     * @var string <p>日志集Id。通过 <a href="https://cloud.tencent.com/document/product/614/58624">获取日志集列表</a>获取日志集Id。</p>
     */
    public $LogsetId;

    /**
     * @param string $ApplicationName <p>应用名称</p><p>入参限制：</p><ul><li>不能为空字符串</li><li>不能包含字符<code>|</code></li><li>不能超过64字符</li></ul>
     * @param string $AccessType <p>接入类型</p><p>枚举值：</p><ul><li>Langfuse： Langfuse 是一款开源的 LLM（大语言模型）工程与可观测性平台（LLMOps Tool）</li></ul>
     * @param string $LogsetId <p>日志集Id。通过 <a href="https://cloud.tencent.com/document/product/614/58624">获取日志集列表</a>获取日志集Id。</p>
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
        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }

        if (array_key_exists("AccessType",$param) and $param["AccessType"] !== null) {
            $this->AccessType = $param["AccessType"];
        }

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }
    }
}
