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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 服务契约版本信息
 *
 * @method string getVersion() 获取契约版本
 * @method void setVersion(string $Version) 设置契约版本
 * @method string getName() 获取契约名称
 * @method void setName(string $Name) 设置契约名称
 * @method string getKey() 获取唯一名称
 * @method void setKey(string $Key) 设置唯一名称
 */
class GovernanceServiceContractVersion extends AbstractModel
{
    /**
     * @var string 契约版本
     */
    public $Version;

    /**
     * @var string 契约名称
     */
    public $Name;

    /**
     * @var string 唯一名称
     */
    public $Key;

    /**
     * @param string $Version 契约版本
     * @param string $Name 契约名称
     * @param string $Key 唯一名称
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }
    }
}
