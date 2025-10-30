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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 浏览器伪造识别规则（原主动特征识别规则）。
 *
 * @method string getId() 获取浏览器伪造识别规则的 ID。<br>通过规则 ID 可支持不同的规则配置操作：<br> <li> <b>增加</b>新规则：ID 为空或不指定 ID 参数；</li><li><b>修改</b>已有规则：指定需要更新/修改的规则 ID；</li><li><b>删除</b>已有规则：BrowserImpersonationDetection 参数中，Rules 列表中未包含的已有规则将被删除。</li>
 * @method void setId(string $Id) 设置浏览器伪造识别规则的 ID。<br>通过规则 ID 可支持不同的规则配置操作：<br> <li> <b>增加</b>新规则：ID 为空或不指定 ID 参数；</li><li><b>修改</b>已有规则：指定需要更新/修改的规则 ID；</li><li><b>删除</b>已有规则：BrowserImpersonationDetection 参数中，Rules 列表中未包含的已有规则将被删除。</li>
 * @method string getName() 获取浏览器伪造识别规则的名称。
 * @method void setName(string $Name) 设置浏览器伪造识别规则的名称。
 * @method string getEnabled() 获取浏览器伪造识别规则是否开启。取值有：<li>on：开启；</li><li>off：关闭。</li>
 * @method void setEnabled(string $Enabled) 设置浏览器伪造识别规则是否开启。取值有：<li>on：开启；</li><li>off：关闭。</li>
 * @method string getCondition() 获取浏览器伪造识别规则的具体内容，其中仅支持请求方式（Method）、请求路径（Path）和请求 URL 的配置，需符合表达式语法，详细规范参见产品文档。
 * @method void setCondition(string $Condition) 设置浏览器伪造识别规则的具体内容，其中仅支持请求方式（Method）、请求路径（Path）和请求 URL 的配置，需符合表达式语法，详细规范参见产品文档。
 * @method BrowserImpersonationDetectionAction getAction() 获取浏览器伪造识别规则的处置方式，包括 Cookie 校验和会话跟踪配置以及客户端行为校验配置。
 * @method void setAction(BrowserImpersonationDetectionAction $Action) 设置浏览器伪造识别规则的处置方式，包括 Cookie 校验和会话跟踪配置以及客户端行为校验配置。
 */
class BrowserImpersonationDetectionRule extends AbstractModel
{
    /**
     * @var string 浏览器伪造识别规则的 ID。<br>通过规则 ID 可支持不同的规则配置操作：<br> <li> <b>增加</b>新规则：ID 为空或不指定 ID 参数；</li><li><b>修改</b>已有规则：指定需要更新/修改的规则 ID；</li><li><b>删除</b>已有规则：BrowserImpersonationDetection 参数中，Rules 列表中未包含的已有规则将被删除。</li>
     */
    public $Id;

    /**
     * @var string 浏览器伪造识别规则的名称。
     */
    public $Name;

    /**
     * @var string 浏览器伪造识别规则是否开启。取值有：<li>on：开启；</li><li>off：关闭。</li>
     */
    public $Enabled;

    /**
     * @var string 浏览器伪造识别规则的具体内容，其中仅支持请求方式（Method）、请求路径（Path）和请求 URL 的配置，需符合表达式语法，详细规范参见产品文档。
     */
    public $Condition;

    /**
     * @var BrowserImpersonationDetectionAction 浏览器伪造识别规则的处置方式，包括 Cookie 校验和会话跟踪配置以及客户端行为校验配置。
     */
    public $Action;

    /**
     * @param string $Id 浏览器伪造识别规则的 ID。<br>通过规则 ID 可支持不同的规则配置操作：<br> <li> <b>增加</b>新规则：ID 为空或不指定 ID 参数；</li><li><b>修改</b>已有规则：指定需要更新/修改的规则 ID；</li><li><b>删除</b>已有规则：BrowserImpersonationDetection 参数中，Rules 列表中未包含的已有规则将被删除。</li>
     * @param string $Name 浏览器伪造识别规则的名称。
     * @param string $Enabled 浏览器伪造识别规则是否开启。取值有：<li>on：开启；</li><li>off：关闭。</li>
     * @param string $Condition 浏览器伪造识别规则的具体内容，其中仅支持请求方式（Method）、请求路径（Path）和请求 URL 的配置，需符合表达式语法，详细规范参见产品文档。
     * @param BrowserImpersonationDetectionAction $Action 浏览器伪造识别规则的处置方式，包括 Cookie 校验和会话跟踪配置以及客户端行为校验配置。
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = $param["Condition"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = new BrowserImpersonationDetectionAction();
            $this->Action->deserialize($param["Action"]);
        }
    }
}
