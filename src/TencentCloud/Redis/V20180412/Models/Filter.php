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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 业务侧实例过滤参数
 *
 * @method string getName() 获取<p>过滤字段。</p><p>枚举值：</p><ul><li>InstanceId： 实例 ID。</li><li>InstanceName： 实例名称。</li><li>TagKey： 标签键。</li><li>InstanceTags： 实例标签键值，标签key值&amp;标签value值。</li></ul>
 * @method void setName(string $Name) 设置<p>过滤字段。</p><p>枚举值：</p><ul><li>InstanceId： 实例 ID。</li><li>InstanceName： 实例名称。</li><li>TagKey： 标签键。</li><li>InstanceTags： 实例标签键值，标签key值&amp;标签value值。</li></ul>
 * @method array getValues() 获取<p>过滤字段的值。</p>
 * @method void setValues(array $Values) 设置<p>过滤字段的值。</p>
 * @method boolean getExactMatch() 获取<p>精确匹配开关。</p><ul><li>false：关闭。</li><li>true：开启。</li></ul>
 * @method void setExactMatch(boolean $ExactMatch) 设置<p>精确匹配开关。</p><ul><li>false：关闭。</li><li>true：开启。</li></ul>
 */
class Filter extends AbstractModel
{
    /**
     * @var string <p>过滤字段。</p><p>枚举值：</p><ul><li>InstanceId： 实例 ID。</li><li>InstanceName： 实例名称。</li><li>TagKey： 标签键。</li><li>InstanceTags： 实例标签键值，标签key值&amp;标签value值。</li></ul>
     */
    public $Name;

    /**
     * @var array <p>过滤字段的值。</p>
     */
    public $Values;

    /**
     * @var boolean <p>精确匹配开关。</p><ul><li>false：关闭。</li><li>true：开启。</li></ul>
     */
    public $ExactMatch;

    /**
     * @param string $Name <p>过滤字段。</p><p>枚举值：</p><ul><li>InstanceId： 实例 ID。</li><li>InstanceName： 实例名称。</li><li>TagKey： 标签键。</li><li>InstanceTags： 实例标签键值，标签key值&amp;标签value值。</li></ul>
     * @param array $Values <p>过滤字段的值。</p>
     * @param boolean $ExactMatch <p>精确匹配开关。</p><ul><li>false：关闭。</li><li>true：开启。</li></ul>
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

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }

        if (array_key_exists("ExactMatch",$param) and $param["ExactMatch"] !== null) {
            $this->ExactMatch = $param["ExactMatch"];
        }
    }
}
