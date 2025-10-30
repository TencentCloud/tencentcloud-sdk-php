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
namespace TencentCloud\Thpc\V20230321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 容器配置信息。
 *
 * @method string getImage() 获取容器镜像地址
 * @method void setImage(string $Image) 设置容器镜像地址
 * @method array getRunArgs() 获取容器运行参数
 * @method void setRunArgs(array $RunArgs) 设置容器运行参数
 */
class Docker extends AbstractModel
{
    /**
     * @var string 容器镜像地址
     */
    public $Image;

    /**
     * @var array 容器运行参数
     */
    public $RunArgs;

    /**
     * @param string $Image 容器镜像地址
     * @param array $RunArgs 容器运行参数
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
        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = $param["Image"];
        }

        if (array_key_exists("RunArgs",$param) and $param["RunArgs"] !== null) {
            $this->RunArgs = $param["RunArgs"];
        }
    }
}
