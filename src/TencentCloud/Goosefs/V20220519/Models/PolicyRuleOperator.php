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
namespace TencentCloud\Goosefs\V20220519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Policy扫描规则
 *
 * @method string getKey() 获取<p>规则名</p><p>枚举值：</p><ul><li>CREATION_TIME_DAYS： 创建时间，比较的value 是days，数字整数。判断条件均为与“今天”相差。例如 CREATION_TIME &gt; 5，指的是创建时间-今天大于5天，即5天前（以及更早）创建的文件</li><li>CHANGE_TIME_DAYS： 元数据修改时间，比较的value 是days，数字整数。判断条件均为与“今天”相差。例如 CHANGE_TIME &gt; 5，指的是元数据修改时间-今天大于5天，即5天前以及更早修改元数据的文件</li><li>MODIFICATION_TIME_DAYS： 数据修改时间，比较的value 是days，数字整数。判断条件均为与“今天”相差。例如 MODIFICATION_TIME &gt; 5，指的是数据修改时间-今天大于5天，即5天前（以及更早）修改的文件</li><li>ACCESS_TIME_DAYS： 访问时间，比较的value 是days，数字整数。判断条件均为与“今天”相差。例如 ACCESS_TIME &gt; 5，指的是访问时间-今天大于5天，即5天前（以及更早）访问的文件</li><li>CREATION_TIME_DATE： 创建时间，比较的value 是date,日期，格式为YYYY-MM-DD。判断条件均为与value对应的日期的对比。例如 CREATION_TIME &gt; 2026-06-01，指的是创建时间晚于2026年6月1日</li><li>CHANGE_TIME_DATE： 元数据修改时间，比较的value 是date,日期，格式为YYYY-MM-DD。判断条件均为与value对应的日期的对比。例如 CHANGE_TIME &gt; 2026-06-01，指的是元数据修改晚于2026年6月1日</li><li>MODIFICATION_TIME_DATE： 数据修改时间，比较的value 是date,日期，格式为YYYY-MM-DD。判断条件均为与value对应的日期的对比。例如 MODIFICATION_TIME &gt; 2026-06-01，指的是数据修改时间晚于2026年6月1日</li><li>ACCESS_TIME_DATE： 访问时间，比较的value 是date,日期，格式为YYYY-MM-DD。判断条件均为与value对应的日期的对比。例如 ACCESS_TIME &gt; 2026-06-01，指的是访问时间晚于2026年6月1日</li><li>FILE_SIZE： 文件大小，数字，单位byte，整数，0 ～ 64位整数最大值</li></ul>
 * @method void setKey(string $Key) 设置<p>规则名</p><p>枚举值：</p><ul><li>CREATION_TIME_DAYS： 创建时间，比较的value 是days，数字整数。判断条件均为与“今天”相差。例如 CREATION_TIME &gt; 5，指的是创建时间-今天大于5天，即5天前（以及更早）创建的文件</li><li>CHANGE_TIME_DAYS： 元数据修改时间，比较的value 是days，数字整数。判断条件均为与“今天”相差。例如 CHANGE_TIME &gt; 5，指的是元数据修改时间-今天大于5天，即5天前以及更早修改元数据的文件</li><li>MODIFICATION_TIME_DAYS： 数据修改时间，比较的value 是days，数字整数。判断条件均为与“今天”相差。例如 MODIFICATION_TIME &gt; 5，指的是数据修改时间-今天大于5天，即5天前（以及更早）修改的文件</li><li>ACCESS_TIME_DAYS： 访问时间，比较的value 是days，数字整数。判断条件均为与“今天”相差。例如 ACCESS_TIME &gt; 5，指的是访问时间-今天大于5天，即5天前（以及更早）访问的文件</li><li>CREATION_TIME_DATE： 创建时间，比较的value 是date,日期，格式为YYYY-MM-DD。判断条件均为与value对应的日期的对比。例如 CREATION_TIME &gt; 2026-06-01，指的是创建时间晚于2026年6月1日</li><li>CHANGE_TIME_DATE： 元数据修改时间，比较的value 是date,日期，格式为YYYY-MM-DD。判断条件均为与value对应的日期的对比。例如 CHANGE_TIME &gt; 2026-06-01，指的是元数据修改晚于2026年6月1日</li><li>MODIFICATION_TIME_DATE： 数据修改时间，比较的value 是date,日期，格式为YYYY-MM-DD。判断条件均为与value对应的日期的对比。例如 MODIFICATION_TIME &gt; 2026-06-01，指的是数据修改时间晚于2026年6月1日</li><li>ACCESS_TIME_DATE： 访问时间，比较的value 是date,日期，格式为YYYY-MM-DD。判断条件均为与value对应的日期的对比。例如 ACCESS_TIME &gt; 2026-06-01，指的是访问时间晚于2026年6月1日</li><li>FILE_SIZE： 文件大小，数字，单位byte，整数，0 ～ 64位整数最大值</li></ul>
 * @method string getOperator() 获取<p>比较关系</p><p>枚举值：</p><ul><li>&gt;：  大于</li><li>&gt;=： 大于等于</li><li>=： 相等</li><li>&lt;： 小于</li><li>&lt;=： 小于等于</li></ul>
 * @method void setOperator(string $Operator) 设置<p>比较关系</p><p>枚举值：</p><ul><li>&gt;：  大于</li><li>&gt;=： 大于等于</li><li>=： 相等</li><li>&lt;： 小于</li><li>&lt;=： 小于等于</li></ul>
 * @method string getValue() 获取<p>比较值</p><p>如果Key是CREATION_TIME_DAYS、CHANGE_TIME_DAYS、MODIFICATION_TIME_DAYS、ACCESS_TIME_DAYS时，值是整数；<br>如果Key是CREATION_TIME_DATE、CHANGE_TIME_DATE、MODIFICATION_TIME_DATE、ACCESS_TIME_DATE时，值是日期，格式是YYYY-MM-DD；<br>如果Key是FILE_SIZE，值是整数，单位是byte</p>
 * @method void setValue(string $Value) 设置<p>比较值</p><p>如果Key是CREATION_TIME_DAYS、CHANGE_TIME_DAYS、MODIFICATION_TIME_DAYS、ACCESS_TIME_DAYS时，值是整数；<br>如果Key是CREATION_TIME_DATE、CHANGE_TIME_DATE、MODIFICATION_TIME_DATE、ACCESS_TIME_DATE时，值是日期，格式是YYYY-MM-DD；<br>如果Key是FILE_SIZE，值是整数，单位是byte</p>
 */
class PolicyRuleOperator extends AbstractModel
{
    /**
     * @var string <p>规则名</p><p>枚举值：</p><ul><li>CREATION_TIME_DAYS： 创建时间，比较的value 是days，数字整数。判断条件均为与“今天”相差。例如 CREATION_TIME &gt; 5，指的是创建时间-今天大于5天，即5天前（以及更早）创建的文件</li><li>CHANGE_TIME_DAYS： 元数据修改时间，比较的value 是days，数字整数。判断条件均为与“今天”相差。例如 CHANGE_TIME &gt; 5，指的是元数据修改时间-今天大于5天，即5天前以及更早修改元数据的文件</li><li>MODIFICATION_TIME_DAYS： 数据修改时间，比较的value 是days，数字整数。判断条件均为与“今天”相差。例如 MODIFICATION_TIME &gt; 5，指的是数据修改时间-今天大于5天，即5天前（以及更早）修改的文件</li><li>ACCESS_TIME_DAYS： 访问时间，比较的value 是days，数字整数。判断条件均为与“今天”相差。例如 ACCESS_TIME &gt; 5，指的是访问时间-今天大于5天，即5天前（以及更早）访问的文件</li><li>CREATION_TIME_DATE： 创建时间，比较的value 是date,日期，格式为YYYY-MM-DD。判断条件均为与value对应的日期的对比。例如 CREATION_TIME &gt; 2026-06-01，指的是创建时间晚于2026年6月1日</li><li>CHANGE_TIME_DATE： 元数据修改时间，比较的value 是date,日期，格式为YYYY-MM-DD。判断条件均为与value对应的日期的对比。例如 CHANGE_TIME &gt; 2026-06-01，指的是元数据修改晚于2026年6月1日</li><li>MODIFICATION_TIME_DATE： 数据修改时间，比较的value 是date,日期，格式为YYYY-MM-DD。判断条件均为与value对应的日期的对比。例如 MODIFICATION_TIME &gt; 2026-06-01，指的是数据修改时间晚于2026年6月1日</li><li>ACCESS_TIME_DATE： 访问时间，比较的value 是date,日期，格式为YYYY-MM-DD。判断条件均为与value对应的日期的对比。例如 ACCESS_TIME &gt; 2026-06-01，指的是访问时间晚于2026年6月1日</li><li>FILE_SIZE： 文件大小，数字，单位byte，整数，0 ～ 64位整数最大值</li></ul>
     */
    public $Key;

    /**
     * @var string <p>比较关系</p><p>枚举值：</p><ul><li>&gt;：  大于</li><li>&gt;=： 大于等于</li><li>=： 相等</li><li>&lt;： 小于</li><li>&lt;=： 小于等于</li></ul>
     */
    public $Operator;

    /**
     * @var string <p>比较值</p><p>如果Key是CREATION_TIME_DAYS、CHANGE_TIME_DAYS、MODIFICATION_TIME_DAYS、ACCESS_TIME_DAYS时，值是整数；<br>如果Key是CREATION_TIME_DATE、CHANGE_TIME_DATE、MODIFICATION_TIME_DATE、ACCESS_TIME_DATE时，值是日期，格式是YYYY-MM-DD；<br>如果Key是FILE_SIZE，值是整数，单位是byte</p>
     */
    public $Value;

    /**
     * @param string $Key <p>规则名</p><p>枚举值：</p><ul><li>CREATION_TIME_DAYS： 创建时间，比较的value 是days，数字整数。判断条件均为与“今天”相差。例如 CREATION_TIME &gt; 5，指的是创建时间-今天大于5天，即5天前（以及更早）创建的文件</li><li>CHANGE_TIME_DAYS： 元数据修改时间，比较的value 是days，数字整数。判断条件均为与“今天”相差。例如 CHANGE_TIME &gt; 5，指的是元数据修改时间-今天大于5天，即5天前以及更早修改元数据的文件</li><li>MODIFICATION_TIME_DAYS： 数据修改时间，比较的value 是days，数字整数。判断条件均为与“今天”相差。例如 MODIFICATION_TIME &gt; 5，指的是数据修改时间-今天大于5天，即5天前（以及更早）修改的文件</li><li>ACCESS_TIME_DAYS： 访问时间，比较的value 是days，数字整数。判断条件均为与“今天”相差。例如 ACCESS_TIME &gt; 5，指的是访问时间-今天大于5天，即5天前（以及更早）访问的文件</li><li>CREATION_TIME_DATE： 创建时间，比较的value 是date,日期，格式为YYYY-MM-DD。判断条件均为与value对应的日期的对比。例如 CREATION_TIME &gt; 2026-06-01，指的是创建时间晚于2026年6月1日</li><li>CHANGE_TIME_DATE： 元数据修改时间，比较的value 是date,日期，格式为YYYY-MM-DD。判断条件均为与value对应的日期的对比。例如 CHANGE_TIME &gt; 2026-06-01，指的是元数据修改晚于2026年6月1日</li><li>MODIFICATION_TIME_DATE： 数据修改时间，比较的value 是date,日期，格式为YYYY-MM-DD。判断条件均为与value对应的日期的对比。例如 MODIFICATION_TIME &gt; 2026-06-01，指的是数据修改时间晚于2026年6月1日</li><li>ACCESS_TIME_DATE： 访问时间，比较的value 是date,日期，格式为YYYY-MM-DD。判断条件均为与value对应的日期的对比。例如 ACCESS_TIME &gt; 2026-06-01，指的是访问时间晚于2026年6月1日</li><li>FILE_SIZE： 文件大小，数字，单位byte，整数，0 ～ 64位整数最大值</li></ul>
     * @param string $Operator <p>比较关系</p><p>枚举值：</p><ul><li>&gt;：  大于</li><li>&gt;=： 大于等于</li><li>=： 相等</li><li>&lt;： 小于</li><li>&lt;=： 小于等于</li></ul>
     * @param string $Value <p>比较值</p><p>如果Key是CREATION_TIME_DAYS、CHANGE_TIME_DAYS、MODIFICATION_TIME_DAYS、ACCESS_TIME_DAYS时，值是整数；<br>如果Key是CREATION_TIME_DATE、CHANGE_TIME_DATE、MODIFICATION_TIME_DATE、ACCESS_TIME_DATE时，值是日期，格式是YYYY-MM-DD；<br>如果Key是FILE_SIZE，值是整数，单位是byte</p>
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

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
