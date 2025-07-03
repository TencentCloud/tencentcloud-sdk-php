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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Scf类型入参
 *
 * @method string getFunctionName() 获取SCF云函数函数名
 * @method void setFunctionName(string $FunctionName) 设置SCF云函数函数名
 * @method string getNamespace() 获取SCF云函数命名空间, 默认为default
 * @method void setNamespace(string $Namespace) 设置SCF云函数命名空间, 默认为default
 * @method string getQualifier() 获取SCF云函数版本及别名, 默认为$DEFAULT
 * @method void setQualifier(string $Qualifier) 设置SCF云函数版本及别名, 默认为$DEFAULT
 * @method integer getBatchSize() 获取每批最大发送消息数, 默认为1000
 * @method void setBatchSize(integer $BatchSize) 设置每批最大发送消息数, 默认为1000
 * @method integer getMaxRetries() 获取SCF调用失败后重试次数, 默认为5
 * @method void setMaxRetries(integer $MaxRetries) 设置SCF调用失败后重试次数, 默认为5
 */
class ScfParam extends AbstractModel
{
    /**
     * @var string SCF云函数函数名
     */
    public $FunctionName;

    /**
     * @var string SCF云函数命名空间, 默认为default
     */
    public $Namespace;

    /**
     * @var string SCF云函数版本及别名, 默认为$DEFAULT
     */
    public $Qualifier;

    /**
     * @var integer 每批最大发送消息数, 默认为1000
     */
    public $BatchSize;

    /**
     * @var integer SCF调用失败后重试次数, 默认为5
     */
    public $MaxRetries;

    /**
     * @param string $FunctionName SCF云函数函数名
     * @param string $Namespace SCF云函数命名空间, 默认为default
     * @param string $Qualifier SCF云函数版本及别名, 默认为$DEFAULT
     * @param integer $BatchSize 每批最大发送消息数, 默认为1000
     * @param integer $MaxRetries SCF调用失败后重试次数, 默认为5
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
        if (array_key_exists("FunctionName",$param) and $param["FunctionName"] !== null) {
            $this->FunctionName = $param["FunctionName"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Qualifier",$param) and $param["Qualifier"] !== null) {
            $this->Qualifier = $param["Qualifier"];
        }

        if (array_key_exists("BatchSize",$param) and $param["BatchSize"] !== null) {
            $this->BatchSize = $param["BatchSize"];
        }

        if (array_key_exists("MaxRetries",$param) and $param["MaxRetries"] !== null) {
            $this->MaxRetries = $param["MaxRetries"];
        }
    }
}
