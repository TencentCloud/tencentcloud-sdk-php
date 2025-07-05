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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 版本信息
 *
 * @method string getName() 获取版本名称
 * @method void setName(string $Name) 设置版本名称
 * @method string getVersion() 获取版本信息
 * @method void setVersion(string $Version) 设置版本信息
 * @method string getRemark() 获取Remark
 * @method void setRemark(string $Remark) 设置Remark
 */
class VersionInstance extends AbstractModel
{
    /**
     * @var string 版本名称
     */
    public $Name;

    /**
     * @var string 版本信息
     */
    public $Version;

    /**
     * @var string Remark
     */
    public $Remark;

    /**
     * @param string $Name 版本名称
     * @param string $Version 版本信息
     * @param string $Remark Remark
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

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
