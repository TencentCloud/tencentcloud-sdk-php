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
 * 通用身份信息（支持数字 ID 与字符串 ID 两种形态）
 *
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 * @method string getId() 获取数字 ID
 * @method void setId(string $Id) 设置数字 ID
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method string getStrId() 获取字符串 ID
 * @method void setStrId(string $StrId) 设置字符串 ID
 */
class Identity extends AbstractModel
{
    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @var string 数字 ID
     */
    public $Id;

    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var string 字符串 ID
     */
    public $StrId;

    /**
     * @param string $Description 描述
     * @param string $Id 数字 ID
     * @param string $Name 名称
     * @param string $StrId 字符串 ID
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
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("StrId",$param) and $param["StrId"] !== null) {
            $this->StrId = $param["StrId"];
        }
    }
}
