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
 * 表字段额外属性
 *
 * @method string getTransform() 获取DLC专用：分区字段转换策略
 * @method void setTransform(string $Transform) 设置DLC专用：分区字段转换策略
 * @method string getTransformArgs() 获取DLC专用：分区字段策略参数
 * @method void setTransformArgs(string $TransformArgs) 设置DLC专用：分区字段策略参数
 */
class Params extends AbstractModel
{
    /**
     * @var string DLC专用：分区字段转换策略
     */
    public $Transform;

    /**
     * @var string DLC专用：分区字段策略参数
     */
    public $TransformArgs;

    /**
     * @param string $Transform DLC专用：分区字段转换策略
     * @param string $TransformArgs DLC专用：分区字段策略参数
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

        if (array_key_exists("TransformArgs",$param) and $param["TransformArgs"] !== null) {
            $this->TransformArgs = $param["TransformArgs"];
        }
    }
}
