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
 * ModifyNetworkApplication请求参数结构体
 *
 * @method string getNetworkAppId() 获取<p>网络应用id</p>
 * @method void setNetworkAppId(string $NetworkAppId) 设置<p>网络应用id</p>
 * @method string getName() 获取<p>网络应用名称：长度不超过64字符，名称不能重复。</p><ul><li>只能包含以下字符：<ul><li>英文字母（大小写）</li><li>数字</li><li>下划线</li><li>连字符（减号）</li><li>汉字</li></ul></li><li>至少包含一个字符</li><li>不能包含空格</li><li>不能包含其他特殊字符（如 @、#、$、% 等）</li></ul>
 * @method void setName(string $Name) 设置<p>网络应用名称：长度不超过64字符，名称不能重复。</p><ul><li>只能包含以下字符：<ul><li>英文字母（大小写）</li><li>数字</li><li>下划线</li><li>连字符（减号）</li><li>汉字</li></ul></li><li>至少包含一个字符</li><li>不能包含空格</li><li>不能包含其他特殊字符（如 @、#、$、% 等）</li></ul>
 */
class ModifyNetworkApplicationRequest extends AbstractModel
{
    /**
     * @var string <p>网络应用id</p>
     */
    public $NetworkAppId;

    /**
     * @var string <p>网络应用名称：长度不超过64字符，名称不能重复。</p><ul><li>只能包含以下字符：<ul><li>英文字母（大小写）</li><li>数字</li><li>下划线</li><li>连字符（减号）</li><li>汉字</li></ul></li><li>至少包含一个字符</li><li>不能包含空格</li><li>不能包含其他特殊字符（如 @、#、$、% 等）</li></ul>
     */
    public $Name;

    /**
     * @param string $NetworkAppId <p>网络应用id</p>
     * @param string $Name <p>网络应用名称：长度不超过64字符，名称不能重复。</p><ul><li>只能包含以下字符：<ul><li>英文字母（大小写）</li><li>数字</li><li>下划线</li><li>连字符（减号）</li><li>汉字</li></ul></li><li>至少包含一个字符</li><li>不能包含空格</li><li>不能包含其他特殊字符（如 @、#、$、% 等）</li></ul>
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
        if (array_key_exists("NetworkAppId",$param) and $param["NetworkAppId"] !== null) {
            $this->NetworkAppId = $param["NetworkAppId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
