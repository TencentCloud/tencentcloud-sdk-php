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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 系统支持的模块
 *
 * @method string getIsDisable() 获取是否支持，可选值:yes,no
 * @method void setIsDisable(string $IsDisable) 设置是否支持，可选值:yes,no
 * @method string getModuleName() 获取模块名
 * @method void setModuleName(string $ModuleName) 设置模块名
 */
class Module extends AbstractModel
{
    /**
     * @var string 是否支持，可选值:yes,no
     */
    public $IsDisable;

    /**
     * @var string 模块名
     */
    public $ModuleName;

    /**
     * @param string $IsDisable 是否支持，可选值:yes,no
     * @param string $ModuleName 模块名
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
        if (array_key_exists("IsDisable",$param) and $param["IsDisable"] !== null) {
            $this->IsDisable = $param["IsDisable"];
        }

        if (array_key_exists("ModuleName",$param) and $param["ModuleName"] !== null) {
            $this->ModuleName = $param["ModuleName"];
        }
    }
}
