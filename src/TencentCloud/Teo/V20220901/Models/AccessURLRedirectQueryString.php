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
 * 访问 URL 重定向 配置参数。
 *
 * @method string getAction() 获取执行动作，取值有：
<li>full：全部保留；</li>
<li>ignore：全部忽略。</li>
 * @method void setAction(string $Action) 设置执行动作，取值有：
<li>full：全部保留；</li>
<li>ignore：全部忽略。</li>
 */
class AccessURLRedirectQueryString extends AbstractModel
{
    /**
     * @var string 执行动作，取值有：
<li>full：全部保留；</li>
<li>ignore：全部忽略。</li>
     */
    public $Action;

    /**
     * @param string $Action 执行动作，取值有：
<li>full：全部保留；</li>
<li>ignore：全部忽略。</li>
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
        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }
    }
}
