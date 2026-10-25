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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 字段简要信息，用于批量修改表字段描述时传入
 *
 * @method string getName() 获取字段名称
 * @method void setName(string $Name) 设置字段名称
 * @method string getType() 获取字段类型
 * @method void setType(string $Type) 设置字段类型
 * @method string getComment() 获取描述配置
 * @method void setComment(string $Comment) 设置描述配置
 */
class ColumnBrief extends AbstractModel
{
    /**
     * @var string 字段名称
     */
    public $Name;

    /**
     * @var string 字段类型
     */
    public $Type;

    /**
     * @var string 描述配置
     */
    public $Comment;

    /**
     * @param string $Name 字段名称
     * @param string $Type 字段类型
     * @param string $Comment 描述配置
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }
    }
}
