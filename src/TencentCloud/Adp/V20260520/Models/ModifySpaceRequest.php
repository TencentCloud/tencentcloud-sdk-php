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
 * ModifySpace请求参数结构体
 *
 * @method string getName() 获取工作空间名称,长度最大30个字符
 * @method void setName(string $Name) 设置工作空间名称,长度最大30个字符
 * @method string getDescription() 获取空间描述，长度最大150个字符
 * @method void setDescription(string $Description) 设置空间描述，长度最大150个字符
 * @method string getSpaceId() 获取空间id
 * @method void setSpaceId(string $SpaceId) 设置空间id
 * @method FieldMask getFieldMask() 获取指定需要更新的字段，支持name和description
 * @method void setFieldMask(FieldMask $FieldMask) 设置指定需要更新的字段，支持name和description
 */
class ModifySpaceRequest extends AbstractModel
{
    /**
     * @var string 工作空间名称,长度最大30个字符
     */
    public $Name;

    /**
     * @var string 空间描述，长度最大150个字符
     */
    public $Description;

    /**
     * @var string 空间id
     */
    public $SpaceId;

    /**
     * @var FieldMask 指定需要更新的字段，支持name和description
     */
    public $FieldMask;

    /**
     * @param string $Name 工作空间名称,长度最大30个字符
     * @param string $Description 空间描述，长度最大150个字符
     * @param string $SpaceId 空间id
     * @param FieldMask $FieldMask 指定需要更新的字段，支持name和description
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
        }

        if (array_key_exists("FieldMask",$param) and $param["FieldMask"] !== null) {
            $this->FieldMask = new FieldMask();
            $this->FieldMask->deserialize($param["FieldMask"]);
        }
    }
}
