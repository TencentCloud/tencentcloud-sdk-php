<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * 回源 URL 重写 配置参数。
 *
 * @method string getType() 获取回源 URL 重写类型，仅支持填写 Path。
 * @method void setType(string $Type) 设置回源 URL 重写类型，仅支持填写 Path。
 * @method string getAction() 获取回源 URL 重写动作。取值有：
<li>replace：替换路径前缀；</li>
<li>addPrefix：增加路径前缀；</li>
<li>rmvPrefix：移除路径前缀。</li>
 * @method void setAction(string $Action) 设置回源 URL 重写动作。取值有：
<li>replace：替换路径前缀；</li>
<li>addPrefix：增加路径前缀；</li>
<li>rmvPrefix：移除路径前缀。</li>
 * @method string getValue() 获取回源 URL 重写值，最大长度 1024，必须以 / 开头。<br>注意：当 Action 为 addPrefix 时，不能以 / 结尾；当 Action 为 rmvPrefix 时，不能存在 *。
 * @method void setValue(string $Value) 设置回源 URL 重写值，最大长度 1024，必须以 / 开头。<br>注意：当 Action 为 addPrefix 时，不能以 / 结尾；当 Action 为 rmvPrefix 时，不能存在 *。
 */
class UpstreamURLRewriteParameters extends AbstractModel
{
    /**
     * @var string 回源 URL 重写类型，仅支持填写 Path。
     */
    public $Type;

    /**
     * @var string 回源 URL 重写动作。取值有：
<li>replace：替换路径前缀；</li>
<li>addPrefix：增加路径前缀；</li>
<li>rmvPrefix：移除路径前缀。</li>
     */
    public $Action;

    /**
     * @var string 回源 URL 重写值，最大长度 1024，必须以 / 开头。<br>注意：当 Action 为 addPrefix 时，不能以 / 结尾；当 Action 为 rmvPrefix 时，不能存在 *。
     */
    public $Value;

    /**
     * @param string $Type 回源 URL 重写类型，仅支持填写 Path。
     * @param string $Action 回源 URL 重写动作。取值有：
<li>replace：替换路径前缀；</li>
<li>addPrefix：增加路径前缀；</li>
<li>rmvPrefix：移除路径前缀。</li>
     * @param string $Value 回源 URL 重写值，最大长度 1024，必须以 / 开头。<br>注意：当 Action 为 addPrefix 时，不能以 / 结尾；当 Action 为 rmvPrefix 时，不能存在 *。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
