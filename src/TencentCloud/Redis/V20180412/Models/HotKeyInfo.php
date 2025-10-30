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
 * 热Key详细信息
 *
 * @method string getKey() 获取热 Key 的名称。
 * @method void setKey(string $Key) 设置热 Key 的名称。
 * @method string getType() 获取Key 类型。
 * @method void setType(string $Type) 设置Key 类型。
 * @method integer getCount() 获取某段时间内热 Key 的访问次数
 * @method void setCount(integer $Count) 设置某段时间内热 Key 的访问次数
 */
class HotKeyInfo extends AbstractModel
{
    /**
     * @var string 热 Key 的名称。
     */
    public $Key;

    /**
     * @var string Key 类型。
     */
    public $Type;

    /**
     * @var integer 某段时间内热 Key 的访问次数
     */
    public $Count;

    /**
     * @param string $Key 热 Key 的名称。
     * @param string $Type Key 类型。
     * @param integer $Count 某段时间内热 Key 的访问次数
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
