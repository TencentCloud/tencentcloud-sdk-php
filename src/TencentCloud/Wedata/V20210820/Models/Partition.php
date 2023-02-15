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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 分区参数
 *
 * @method string getTransform() 获取分区转换策略
 * @method void setTransform(string $Transform) 设置分区转换策略
 * @method string getName() 获取分区字段名
 * @method void setName(string $Name) 设置分区字段名
 * @method array getTransformArgs() 获取策略参数
 * @method void setTransformArgs(array $TransformArgs) 设置策略参数
 */
class Partition extends AbstractModel
{
    /**
     * @var string 分区转换策略
     */
    public $Transform;

    /**
     * @var string 分区字段名
     */
    public $Name;

    /**
     * @var array 策略参数
     */
    public $TransformArgs;

    /**
     * @param string $Transform 分区转换策略
     * @param string $Name 分区字段名
     * @param array $TransformArgs 策略参数
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
        if (array_key_exists("Transform",$param) and $param["Transform"] !== null) {
            $this->Transform = $param["Transform"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("TransformArgs",$param) and $param["TransformArgs"] !== null) {
            $this->TransformArgs = $param["TransformArgs"];
        }
    }
}
