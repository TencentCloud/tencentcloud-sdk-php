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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询过滤参数
 *
 * @method string getType() 获取<p>过滤方式（=, !=, in）</p>
 * @method void setType(string $Type) 设置<p>过滤方式（=, !=, in）</p>
 * @method string getKey() 获取<p>过滤维度名</p><p>详情参考实际接口字段描述</p>
 * @method void setKey(string $Key) 设置<p>过滤维度名</p><p>详情参考实际接口字段描述</p>
 * @method string getValue() 获取<p>过滤值，in过滤方式用逗号分割多个值</p>
 * @method void setValue(string $Value) 设置<p>过滤值，in过滤方式用逗号分割多个值</p>
 */
class Filter extends AbstractModel
{
    /**
     * @var string <p>过滤方式（=, !=, in）</p>
     */
    public $Type;

    /**
     * @var string <p>过滤维度名</p><p>详情参考实际接口字段描述</p>
     */
    public $Key;

    /**
     * @var string <p>过滤值，in过滤方式用逗号分割多个值</p>
     */
    public $Value;

    /**
     * @param string $Type <p>过滤方式（=, !=, in）</p>
     * @param string $Key <p>过滤维度名</p><p>详情参考实际接口字段描述</p>
     * @param string $Value <p>过滤值，in过滤方式用逗号分割多个值</p>
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

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
