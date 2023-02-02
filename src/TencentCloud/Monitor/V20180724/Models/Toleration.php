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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * kubernetes Taint
 *
 * @method string getKey() 获取容忍应用到的 taint key
 * @method void setKey(string $Key) 设置容忍应用到的 taint key
 * @method string getOperator() 获取键与值的关系
 * @method void setOperator(string $Operator) 设置键与值的关系
 * @method string getEffect() 获取要匹配的污点效果
 * @method void setEffect(string $Effect) 设置要匹配的污点效果
 */
class Toleration extends AbstractModel
{
    /**
     * @var string 容忍应用到的 taint key
     */
    public $Key;

    /**
     * @var string 键与值的关系
     */
    public $Operator;

    /**
     * @var string 要匹配的污点效果
     */
    public $Effect;

    /**
     * @param string $Key 容忍应用到的 taint key
     * @param string $Operator 键与值的关系
     * @param string $Effect 要匹配的污点效果
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

        if (array_key_exists("Effect",$param) and $param["Effect"] !== null) {
            $this->Effect = $param["Effect"];
        }
    }
}
