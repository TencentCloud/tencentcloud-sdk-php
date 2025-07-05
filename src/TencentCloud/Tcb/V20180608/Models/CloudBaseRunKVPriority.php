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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * KV参数的优先级
 *
 * @method string getKey() 获取参数的Key
 * @method void setKey(string $Key) 设置参数的Key
 * @method string getValue() 获取参数的Value
 * @method void setValue(string $Value) 设置参数的Value
 * @method integer getPriority() 获取优先级
 * @method void setPriority(integer $Priority) 设置优先级
 */
class CloudBaseRunKVPriority extends AbstractModel
{
    /**
     * @var string 参数的Key
     */
    public $Key;

    /**
     * @var string 参数的Value
     */
    public $Value;

    /**
     * @var integer 优先级
     */
    public $Priority;

    /**
     * @param string $Key 参数的Key
     * @param string $Value 参数的Value
     * @param integer $Priority 优先级
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

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }
    }
}
