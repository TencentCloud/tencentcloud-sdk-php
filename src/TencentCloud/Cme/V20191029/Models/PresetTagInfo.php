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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 预置标签信息
 *
 * @method string getId() 获取标签 Id 。
 * @method void setId(string $Id) 设置标签 Id 。
 * @method string getName() 获取标签名称。
 * @method void setName(string $Name) 设置标签名称。
 * @method string getParentTagId() 获取父级预设 Id。
 * @method void setParentTagId(string $ParentTagId) 设置父级预设 Id。
 */
class PresetTagInfo extends AbstractModel
{
    /**
     * @var string 标签 Id 。
     */
    public $Id;

    /**
     * @var string 标签名称。
     */
    public $Name;

    /**
     * @var string 父级预设 Id。
     */
    public $ParentTagId;

    /**
     * @param string $Id 标签 Id 。
     * @param string $Name 标签名称。
     * @param string $ParentTagId 父级预设 Id。
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

        if (array_key_exists("ParentTagId",$param) and $param["ParentTagId"] !== null) {
            $this->ParentTagId = $param["ParentTagId"];
        }
    }
}
