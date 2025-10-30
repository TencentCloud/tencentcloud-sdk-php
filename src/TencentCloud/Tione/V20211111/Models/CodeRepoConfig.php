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
 * 代码仓库配置
 *
 * @method string getId() 获取代码仓库Id
 * @method void setId(string $Id) 设置代码仓库Id
 * @method string getTargetPath() 获取代码仓下载目标地址
 * @method void setTargetPath(string $TargetPath) 设置代码仓下载目标地址
 */
class CodeRepoConfig extends AbstractModel
{
    /**
     * @var string 代码仓库Id
     */
    public $Id;

    /**
     * @var string 代码仓下载目标地址
     */
    public $TargetPath;

    /**
     * @param string $Id 代码仓库Id
     * @param string $TargetPath 代码仓下载目标地址
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("TargetPath",$param) and $param["TargetPath"] !== null) {
            $this->TargetPath = $param["TargetPath"];
        }
    }
}
