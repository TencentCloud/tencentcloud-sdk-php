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
 * 配置项（配置管理页）
 *
 * @method string getName() 获取配置项名称
 * @method void setName(string $Name) 设置配置项名称
 * @method string getValue() 获取配置项值
 * @method void setValue(string $Value) 设置配置项值
 * @method string getInFile() 获取所在的配置文件名
 * @method void setInFile(string $InFile) 设置所在的配置文件名
 */
class ConfigurationItem extends AbstractModel
{
    /**
     * @var string 配置项名称
     */
    public $Name;

    /**
     * @var string 配置项值
     */
    public $Value;

    /**
     * @var string 所在的配置文件名
     */
    public $InFile;

    /**
     * @param string $Name 配置项名称
     * @param string $Value 配置项值
     * @param string $InFile 所在的配置文件名
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("InFile",$param) and $param["InFile"] !== null) {
            $this->InFile = $param["InFile"];
        }
    }
}
