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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 支持的操作系统类型，根据Windows和Linux分类。
 *
 * @method array getWindows() 获取支持的Windows操作系统。
 * @method void setWindows(array $Windows) 设置支持的Windows操作系统。
 * @method array getLinux() 获取支持的Linux操作系统
 * @method void setLinux(array $Linux) 设置支持的Linux操作系统
 */
class ImageOsList extends AbstractModel
{
    /**
     * @var array 支持的Windows操作系统。
     */
    public $Windows;

    /**
     * @var array 支持的Linux操作系统
     */
    public $Linux;

    /**
     * @param array $Windows 支持的Windows操作系统。
     * @param array $Linux 支持的Linux操作系统
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
        if (array_key_exists("Windows",$param) and $param["Windows"] !== null) {
            $this->Windows = $param["Windows"];
        }

        if (array_key_exists("Linux",$param) and $param["Linux"] !== null) {
            $this->Linux = $param["Linux"];
        }
    }
}
