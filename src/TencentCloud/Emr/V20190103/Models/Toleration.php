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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Tolerations
 *
 * @method string getKey() 获取键
 * @method void setKey(string $Key) 设置键
 * @method string getValue() 获取值
 * @method void setValue(string $Value) 设置值
 * @method string getOperator() 获取操作符
 * @method void setOperator(string $Operator) 设置操作符
 * @method string getEffect() 获取污点排斥效果
 * @method void setEffect(string $Effect) 设置污点排斥效果
 * @method integer getTolerationSeconds() 获取驱逐等待时间
 * @method void setTolerationSeconds(integer $TolerationSeconds) 设置驱逐等待时间
 */
class Toleration extends AbstractModel
{
    /**
     * @var string 键
     */
    public $Key;

    /**
     * @var string 值
     */
    public $Value;

    /**
     * @var string 操作符
     */
    public $Operator;

    /**
     * @var string 污点排斥效果
     */
    public $Effect;

    /**
     * @var integer 驱逐等待时间
     */
    public $TolerationSeconds;

    /**
     * @param string $Key 键
     * @param string $Value 值
     * @param string $Operator 操作符
     * @param string $Effect 污点排斥效果
     * @param integer $TolerationSeconds 驱逐等待时间
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

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("Effect",$param) and $param["Effect"] !== null) {
            $this->Effect = $param["Effect"];
        }

        if (array_key_exists("TolerationSeconds",$param) and $param["TolerationSeconds"] !== null) {
            $this->TolerationSeconds = $param["TolerationSeconds"];
        }
    }
}
