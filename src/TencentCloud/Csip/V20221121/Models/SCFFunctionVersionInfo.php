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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SCF 函数版本精简信息
 *
 * @method string getVersion() 获取函数版本名称
参数格式：$LATEST 或数字版本号，如 1、2、3
 * @method void setVersion(string $Version) 设置函数版本名称
参数格式：$LATEST 或数字版本号，如 1、2、3
 * @method string getStatus() 获取版本状态。当前实现与 Version 字段同值返回
 * @method void setStatus(string $Status) 设置版本状态。当前实现与 Version 字段同值返回
 */
class SCFFunctionVersionInfo extends AbstractModel
{
    /**
     * @var string 函数版本名称
参数格式：$LATEST 或数字版本号，如 1、2、3
     */
    public $Version;

    /**
     * @var string 版本状态。当前实现与 Version 字段同值返回
     */
    public $Status;

    /**
     * @param string $Version 函数版本名称
参数格式：$LATEST 或数字版本号，如 1、2、3
     * @param string $Status 版本状态。当前实现与 Version 字段同值返回
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
        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
