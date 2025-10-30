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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * API 服务配置。
 *
 * @method string getId() 获取API 服务 ID。
 * @method void setId(string $Id) 设置API 服务 ID。
 * @method string getName() 获取API 服务名称。
 * @method void setName(string $Name) 设置API 服务名称。
 * @method string getBasePath() 获取基础路径。
 * @method void setBasePath(string $BasePath) 设置基础路径。
 */
class APIService extends AbstractModel
{
    /**
     * @var string API 服务 ID。
     */
    public $Id;

    /**
     * @var string API 服务名称。
     */
    public $Name;

    /**
     * @var string 基础路径。
     */
    public $BasePath;

    /**
     * @param string $Id API 服务 ID。
     * @param string $Name API 服务名称。
     * @param string $BasePath 基础路径。
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("BasePath",$param) and $param["BasePath"] !== null) {
            $this->BasePath = $param["BasePath"];
        }
    }
}
