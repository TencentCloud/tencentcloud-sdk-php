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
namespace TencentCloud\Dbdc\V20201029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群节点 taint 信息。
 *
 * @method string getKey() 获取<p>Taint 的键，格式对齐 K8s 原生约束（prefix DNS 子域 ≤ 253 字符，name ≤ 63 字符），不可使用系统保留前缀</p>
 * @method void setKey(string $Key) 设置<p>Taint 的键，格式对齐 K8s 原生约束（prefix DNS 子域 ≤ 253 字符，name ≤ 63 字符），不可使用系统保留前缀</p>
 * @method string getEffect() 获取<p>污点效果</p><p>枚举值：</p><ul><li>NoSchedule： 不允许新 Pod 调度到该节点（已运行 Pod 不受影响）</li><li>PreferNoSchedule： 尽量不调度，无法满足时仍可调度</li><li>NoExecute： 不允许调度，且会驱逐已在节点上运行的不容忍该 Taint 的 Pod</li></ul>
 * @method void setEffect(string $Effect) 设置<p>污点效果</p><p>枚举值：</p><ul><li>NoSchedule： 不允许新 Pod 调度到该节点（已运行 Pod 不受影响）</li><li>PreferNoSchedule： 尽量不调度，无法满足时仍可调度</li><li>NoExecute： 不允许调度，且会驱逐已在节点上运行的不容忍该 Taint 的 Pod</li></ul>
 * @method string getValue() 获取<p>Taint 的值，≤ 63 字符，可为空</p>
 * @method void setValue(string $Value) 设置<p>Taint 的值，≤ 63 字符，可为空</p>
 */
class Taint extends AbstractModel
{
    /**
     * @var string <p>Taint 的键，格式对齐 K8s 原生约束（prefix DNS 子域 ≤ 253 字符，name ≤ 63 字符），不可使用系统保留前缀</p>
     */
    public $Key;

    /**
     * @var string <p>污点效果</p><p>枚举值：</p><ul><li>NoSchedule： 不允许新 Pod 调度到该节点（已运行 Pod 不受影响）</li><li>PreferNoSchedule： 尽量不调度，无法满足时仍可调度</li><li>NoExecute： 不允许调度，且会驱逐已在节点上运行的不容忍该 Taint 的 Pod</li></ul>
     */
    public $Effect;

    /**
     * @var string <p>Taint 的值，≤ 63 字符，可为空</p>
     */
    public $Value;

    /**
     * @param string $Key <p>Taint 的键，格式对齐 K8s 原生约束（prefix DNS 子域 ≤ 253 字符，name ≤ 63 字符），不可使用系统保留前缀</p>
     * @param string $Effect <p>污点效果</p><p>枚举值：</p><ul><li>NoSchedule： 不允许新 Pod 调度到该节点（已运行 Pod 不受影响）</li><li>PreferNoSchedule： 尽量不调度，无法满足时仍可调度</li><li>NoExecute： 不允许调度，且会驱逐已在节点上运行的不容忍该 Taint 的 Pod</li></ul>
     * @param string $Value <p>Taint 的值，≤ 63 字符，可为空</p>
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

        if (array_key_exists("Effect",$param) and $param["Effect"] !== null) {
            $this->Effect = $param["Effect"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
