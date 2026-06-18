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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTagTable请求参数结构体
 *
 * @method string getName() 获取标签表名
 * @method void setName(string $Name) 设置标签表名
 * @method integer getAutoImportProjectId() 获取标签表关联的项目id
 * @method void setAutoImportProjectId(integer $AutoImportProjectId) 设置标签表关联的项目id
 * @method integer getAutoImportTableId() 获取标签表关联的数据表id
 * @method void setAutoImportTableId(integer $AutoImportTableId) 设置标签表关联的数据表id
 * @method string getAutoImportUinField() 获取uin对应字段
 * @method void setAutoImportUinField(string $AutoImportUinField) 设置uin对应字段
 */
class CreateTagTableRequest extends AbstractModel
{
    /**
     * @var string 标签表名
     */
    public $Name;

    /**
     * @var integer 标签表关联的项目id
     */
    public $AutoImportProjectId;

    /**
     * @var integer 标签表关联的数据表id
     */
    public $AutoImportTableId;

    /**
     * @var string uin对应字段
     */
    public $AutoImportUinField;

    /**
     * @param string $Name 标签表名
     * @param integer $AutoImportProjectId 标签表关联的项目id
     * @param integer $AutoImportTableId 标签表关联的数据表id
     * @param string $AutoImportUinField uin对应字段
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

        if (array_key_exists("AutoImportProjectId",$param) and $param["AutoImportProjectId"] !== null) {
            $this->AutoImportProjectId = $param["AutoImportProjectId"];
        }

        if (array_key_exists("AutoImportTableId",$param) and $param["AutoImportTableId"] !== null) {
            $this->AutoImportTableId = $param["AutoImportTableId"];
        }

        if (array_key_exists("AutoImportUinField",$param) and $param["AutoImportUinField"] !== null) {
            $this->AutoImportUinField = $param["AutoImportUinField"];
        }
    }
}
