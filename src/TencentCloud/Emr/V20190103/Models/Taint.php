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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Kubernetes Taint
 *
 * @method string getKey() 获取Taint Key
 * @method void setKey(string $Key) 设置Taint Key
 * @method string getValue() 获取Taint Value
 * @method void setValue(string $Value) 设置Taint Value
 * @method string getEffect() 获取Taint Effect
 * @method void setEffect(string $Effect) 设置Taint Effect
 */
class Taint extends AbstractModel
{
    /**
     * @var string Taint Key
     */
    public $Key;

    /**
     * @var string Taint Value
     */
    public $Value;

    /**
     * @var string Taint Effect
     */
    public $Effect;

    /**
     * @param string $Key Taint Key
     * @param string $Value Taint Value
     * @param string $Effect Taint Effect
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

        if (array_key_exists("Effect",$param) and $param["Effect"] !== null) {
            $this->Effect = $param["Effect"];
        }
    }
}
