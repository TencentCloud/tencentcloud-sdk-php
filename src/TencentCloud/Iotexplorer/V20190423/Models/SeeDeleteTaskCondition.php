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
 * TWeSee 任务删除条件
 *
 * @method string getType() 获取<p>条件类型。</p><p>枚举值：</p><ul><li>TaskId： 精确匹配任务 ID</li><li>TimeRange： 匹配任务时间范围与指定范围有重合的任务。值的格式为 <code>UnixTimestampStart,UnixTimestampEnd</code>，其中起止时间均为秒级 UNIX 时间戳，且结束时间不早于起始时间</li><li>CreateTimeBefore： 匹配在指定时间前创建的任务。值为秒级 UNIX 时间戳</li><li>COSURI： 精确匹配任务来源 COS URI，值必须以 <code>cos://</code> 开头</li><li>COSURIPrefix： 按前缀匹配任务来源 COS URI，值必须以 <code>cos://</code> 开头</li></ul>
 * @method void setType(string $Type) 设置<p>条件类型。</p><p>枚举值：</p><ul><li>TaskId： 精确匹配任务 ID</li><li>TimeRange： 匹配任务时间范围与指定范围有重合的任务。值的格式为 <code>UnixTimestampStart,UnixTimestampEnd</code>，其中起止时间均为秒级 UNIX 时间戳，且结束时间不早于起始时间</li><li>CreateTimeBefore： 匹配在指定时间前创建的任务。值为秒级 UNIX 时间戳</li><li>COSURI： 精确匹配任务来源 COS URI，值必须以 <code>cos://</code> 开头</li><li>COSURIPrefix： 按前缀匹配任务来源 COS URI，值必须以 <code>cos://</code> 开头</li></ul>
 * @method array getValues() 获取<p>条件值列表。同一条件内的多个值之间为 OR 关系，至少传入一个非空值。</p>
 * @method void setValues(array $Values) 设置<p>条件值列表。同一条件内的多个值之间为 OR 关系，至少传入一个非空值。</p>
 */
class SeeDeleteTaskCondition extends AbstractModel
{
    /**
     * @var string <p>条件类型。</p><p>枚举值：</p><ul><li>TaskId： 精确匹配任务 ID</li><li>TimeRange： 匹配任务时间范围与指定范围有重合的任务。值的格式为 <code>UnixTimestampStart,UnixTimestampEnd</code>，其中起止时间均为秒级 UNIX 时间戳，且结束时间不早于起始时间</li><li>CreateTimeBefore： 匹配在指定时间前创建的任务。值为秒级 UNIX 时间戳</li><li>COSURI： 精确匹配任务来源 COS URI，值必须以 <code>cos://</code> 开头</li><li>COSURIPrefix： 按前缀匹配任务来源 COS URI，值必须以 <code>cos://</code> 开头</li></ul>
     */
    public $Type;

    /**
     * @var array <p>条件值列表。同一条件内的多个值之间为 OR 关系，至少传入一个非空值。</p>
     */
    public $Values;

    /**
     * @param string $Type <p>条件类型。</p><p>枚举值：</p><ul><li>TaskId： 精确匹配任务 ID</li><li>TimeRange： 匹配任务时间范围与指定范围有重合的任务。值的格式为 <code>UnixTimestampStart,UnixTimestampEnd</code>，其中起止时间均为秒级 UNIX 时间戳，且结束时间不早于起始时间</li><li>CreateTimeBefore： 匹配在指定时间前创建的任务。值为秒级 UNIX 时间戳</li><li>COSURI： 精确匹配任务来源 COS URI，值必须以 <code>cos://</code> 开头</li><li>COSURIPrefix： 按前缀匹配任务来源 COS URI，值必须以 <code>cos://</code> 开头</li></ul>
     * @param array $Values <p>条件值列表。同一条件内的多个值之间为 OR 关系，至少传入一个非空值。</p>
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

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
