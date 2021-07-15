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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 需要过滤日志的key，及其对应的regex
 *
 * @method string getKey() 获取需要过滤日志的key
 * @method void setKey(string $Key) 设置需要过滤日志的key
 * @method string getRegex() 获取key对应的过滤规则regex
 * @method void setRegex(string $Regex) 设置key对应的过滤规则regex
 */
class KeyRegexInfo extends AbstractModel
{
    /**
     * @var string 需要过滤日志的key
     */
    public $Key;

    /**
     * @var string key对应的过滤规则regex
     */
    public $Regex;

    /**
     * @param string $Key 需要过滤日志的key
     * @param string $Regex key对应的过滤规则regex
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

        if (array_key_exists("Regex",$param) and $param["Regex"] !== null) {
            $this->Regex = $param["Regex"];
        }
    }
}
