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
 * @method string getDescription() 获取<p>描述</p>
 * @method void setDescription(string $Description) 设置<p>描述</p>
 * @method string getId() 获取<p>数字 ID</p>
 * @method void setId(string $Id) 设置<p>数字 ID</p>
 * @method string getName() 获取<p>名称</p>
 * @method void setName(string $Name) 设置<p>名称</p>
 * @method string getStrId() 获取<p>字符串 ID</p>
 * @method void setStrId(string $StrId) 设置<p>字符串 ID</p>
 */
class Identity extends AbstractModel
{
    /**
     * @var string <p>描述</p>
     */
    public $Description;

    /**
     * @var string <p>数字 ID</p>
     */
    public $Id;

    /**
     * @var string <p>名称</p>
     */
    public $Name;

    /**
     * @var string <p>字符串 ID</p>
     */
    public $StrId;

    /**
     * @param string $Description <p>描述</p>
     * @param string $Id <p>数字 ID</p>
     * @param string $Name <p>名称</p>
     * @param string $StrId <p>字符串 ID</p>
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
