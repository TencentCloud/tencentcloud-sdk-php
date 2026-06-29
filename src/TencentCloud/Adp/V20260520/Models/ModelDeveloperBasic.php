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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 模型作者信息
 *
 * @method string getName() 获取<p>作者标识</p>
 * @method void setName(string $Name) 设置<p>作者标识</p>
 * @method string getAlias() 获取<p>作者显示名称</p>
 * @method void setAlias(string $Alias) 设置<p>作者显示名称</p>
 */
class ModelDeveloperBasic extends AbstractModel
{
    /**
     * @var string <p>作者标识</p>
     */
    public $Name;

    /**
     * @var string <p>作者显示名称</p>
     */
    public $Alias;

    /**
     * @param string $Name <p>作者标识</p>
     * @param string $Alias <p>作者显示名称</p>
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

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }
    }
}
