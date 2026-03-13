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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 注册模型别名
 *
 * @method string getAlias() 获取别名的名称
 * @method void setAlias(string $Alias) 设置别名的名称
 * @method string getVersion() 获取别名指向的模型版本号
 * @method void setVersion(string $Version) 设置别名指向的模型版本号
 */
class RegisteredModelAlias extends AbstractModel
{
    /**
     * @var string 别名的名称
     */
    public $Alias;

    /**
     * @var string 别名指向的模型版本号
     */
    public $Version;

    /**
     * @param string $Alias 别名的名称
     * @param string $Version 别名指向的模型版本号
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
        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }
    }
}
