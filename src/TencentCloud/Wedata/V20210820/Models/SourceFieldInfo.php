<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 上游节点字段信息
 *
 * @method string getFieldName() 获取字段名称
 * @method void setFieldName(string $FieldName) 设置字段名称
 * @method string getFieldType() 获取字段类型
 * @method void setFieldType(string $FieldType) 设置字段类型
 * @method string getAlias() 获取字段别名
 * @method void setAlias(string $Alias) 设置字段别名
 */
class SourceFieldInfo extends AbstractModel
{
    /**
     * @var string 字段名称
     */
    public $FieldName;

    /**
     * @var string 字段类型
     */
    public $FieldType;

    /**
     * @var string 字段别名
     */
    public $Alias;

    /**
     * @param string $FieldName 字段名称
     * @param string $FieldType 字段类型
     * @param string $Alias 字段别名
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
        if (array_key_exists("FieldName",$param) and $param["FieldName"] !== null) {
            $this->FieldName = $param["FieldName"];
        }

        if (array_key_exists("FieldType",$param) and $param["FieldType"] !== null) {
            $this->FieldType = $param["FieldType"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }
    }
}
