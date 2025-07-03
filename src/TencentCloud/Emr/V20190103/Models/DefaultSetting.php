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
 * 资源调度的默认设置
 *
 * @method string getName() 获取名称，作为入参的key
 * @method void setName(string $Name) 设置名称，作为入参的key
 * @method string getDesc() 获取描述
 * @method void setDesc(string $Desc) 设置描述
 * @method string getPrompt() 获取提示
 * @method void setPrompt(string $Prompt) 设置提示
 * @method string getKey() 获取key，用于展示，该配置对应与配置文件中的配置项
 * @method void setKey(string $Key) 设置key，用于展示，该配置对应与配置文件中的配置项
 * @method string getValue() 获取Name对应的值
 * @method void setValue(string $Value) 设置Name对应的值
 */
class DefaultSetting extends AbstractModel
{
    /**
     * @var string 名称，作为入参的key
     */
    public $Name;

    /**
     * @var string 描述
     */
    public $Desc;

    /**
     * @var string 提示
     */
    public $Prompt;

    /**
     * @var string key，用于展示，该配置对应与配置文件中的配置项
     */
    public $Key;

    /**
     * @var string Name对应的值
     */
    public $Value;

    /**
     * @param string $Name 名称，作为入参的key
     * @param string $Desc 描述
     * @param string $Prompt 提示
     * @param string $Key key，用于展示，该配置对应与配置文件中的配置项
     * @param string $Value Name对应的值
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

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
