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
namespace TencentCloud\Lowcode\V20210108\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据源关联的的信息
 *
 * @method string getField() 获取关联关系字段
 * @method void setField(string $Field) 设置关联关系字段
 * @method string getFormat() 获取关联关系格式
 * @method void setFormat(string $Format) 设置关联关系格式
 * @method string getRelateDataSourceName() 获取关联数据源名称
 * @method void setRelateDataSourceName(string $RelateDataSourceName) 设置关联数据源名称
 */
class RelationField extends AbstractModel
{
    /**
     * @var string 关联关系字段
     */
    public $Field;

    /**
     * @var string 关联关系格式
     */
    public $Format;

    /**
     * @var string 关联数据源名称
     */
    public $RelateDataSourceName;

    /**
     * @param string $Field 关联关系字段
     * @param string $Format 关联关系格式
     * @param string $RelateDataSourceName 关联数据源名称
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
        if (array_key_exists("Field",$param) and $param["Field"] !== null) {
            $this->Field = $param["Field"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("RelateDataSourceName",$param) and $param["RelateDataSourceName"] !== null) {
            $this->RelateDataSourceName = $param["RelateDataSourceName"];
        }
    }
}
