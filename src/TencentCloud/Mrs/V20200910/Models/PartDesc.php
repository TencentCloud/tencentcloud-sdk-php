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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 部位描述
 *
 * @method string getMainDir() 获取主要部位
 * @method void setMainDir(string $MainDir) 设置主要部位
 * @method string getPart() 获取部位
 * @method void setPart(string $Part) 设置部位
 * @method string getSecondaryDir() 获取次要部位
 * @method void setSecondaryDir(string $SecondaryDir) 设置次要部位
 * @method string getType() 获取类型
 * @method void setType(string $Type) 设置类型
 */
class PartDesc extends AbstractModel
{
    /**
     * @var string 主要部位
     */
    public $MainDir;

    /**
     * @var string 部位
     */
    public $Part;

    /**
     * @var string 次要部位
     */
    public $SecondaryDir;

    /**
     * @var string 类型
     */
    public $Type;

    /**
     * @param string $MainDir 主要部位
     * @param string $Part 部位
     * @param string $SecondaryDir 次要部位
     * @param string $Type 类型
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
        if (array_key_exists("MainDir",$param) and $param["MainDir"] !== null) {
            $this->MainDir = $param["MainDir"];
        }

        if (array_key_exists("Part",$param) and $param["Part"] !== null) {
            $this->Part = $param["Part"];
        }

        if (array_key_exists("SecondaryDir",$param) and $param["SecondaryDir"] !== null) {
            $this->SecondaryDir = $param["SecondaryDir"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
