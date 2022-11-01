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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 框架版本以及对应的训练模式
 *
 * @method string getVersion() 获取框架版本
 * @method void setVersion(string $Version) 设置框架版本
 * @method array getTrainingModes() 获取训练模式
 * @method void setTrainingModes(array $TrainingModes) 设置训练模式
 * @method string getEnvironment() 获取框架运行环境
 * @method void setEnvironment(string $Environment) 设置框架运行环境
 */
class FrameworkVersion extends AbstractModel
{
    /**
     * @var string 框架版本
     */
    public $Version;

    /**
     * @var array 训练模式
     */
    public $TrainingModes;

    /**
     * @var string 框架运行环境
     */
    public $Environment;

    /**
     * @param string $Version 框架版本
     * @param array $TrainingModes 训练模式
     * @param string $Environment 框架运行环境
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
        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("TrainingModes",$param) and $param["TrainingModes"] !== null) {
            $this->TrainingModes = $param["TrainingModes"];
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = $param["Environment"];
        }
    }
}
