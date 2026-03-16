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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据源挂载配置
 *
 * @method string getWorkDir() 获取数据源的相对路径，支持<@subaccount>这样的占位符
 * @method void setWorkDir(string $WorkDir) 设置数据源的相对路径，支持<@subaccount>这样的占位符
 */
class MountConfigureInfo extends AbstractModel
{
    /**
     * @var string 数据源的相对路径，支持<@subaccount>这样的占位符
     */
    public $WorkDir;

    /**
     * @param string $WorkDir 数据源的相对路径，支持<@subaccount>这样的占位符
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
        if (array_key_exists("WorkDir",$param) and $param["WorkDir"] !== null) {
            $this->WorkDir = $param["WorkDir"];
        }
    }
}
