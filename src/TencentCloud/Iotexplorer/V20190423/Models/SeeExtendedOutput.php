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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TWeSee 扩展输出字段
 *
 * @method string getKey() 获取<p>提示词标识符</p><p>枚举值：</p><ul><li>overview： 内容概述</li><li>scene： 场景关键词</li><li>events： 事件关键词</li><li>objects： 物品关键词</li></ul>
 * @method void setKey(string $Key) 设置<p>提示词标识符</p><p>枚举值：</p><ul><li>overview： 内容概述</li><li>scene： 场景关键词</li><li>events： 事件关键词</li><li>objects： 物品关键词</li></ul>
 * @method string getOutput() 获取<p>模型输出的扩展内容文本</p>
 * @method void setOutput(string $Output) 设置<p>模型输出的扩展内容文本</p>
 */
class SeeExtendedOutput extends AbstractModel
{
    /**
     * @var string <p>提示词标识符</p><p>枚举值：</p><ul><li>overview： 内容概述</li><li>scene： 场景关键词</li><li>events： 事件关键词</li><li>objects： 物品关键词</li></ul>
     */
    public $Key;

    /**
     * @var string <p>模型输出的扩展内容文本</p>
     */
    public $Output;

    /**
     * @param string $Key <p>提示词标识符</p><p>枚举值：</p><ul><li>overview： 内容概述</li><li>scene： 场景关键词</li><li>events： 事件关键词</li><li>objects： 物品关键词</li></ul>
     * @param string $Output <p>模型输出的扩展内容文本</p>
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = $param["Output"];
        }
    }
}
