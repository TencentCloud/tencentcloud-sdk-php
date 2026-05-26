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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 敏感数据加白字段模型
 *
 * @method string getFieldName() 获取<p>字段名称</p>
 * @method void setFieldName(string $FieldName) 设置<p>字段名称</p>
 * @method string getFieldType() 获取<p>字段位置</p>
 * @method void setFieldType(string $FieldType) 设置<p>字段位置</p>
 * @method array getSensitiveTypes() 获取<p>敏感数据类型列表</p>
 * @method void setSensitiveTypes(array $SensitiveTypes) 设置<p>敏感数据类型列表</p>
 */
class ApiSecSensitiveWhiteField extends AbstractModel
{
    /**
     * @var string <p>字段名称</p>
     */
    public $FieldName;

    /**
     * @var string <p>字段位置</p>
     */
    public $FieldType;

    /**
     * @var array <p>敏感数据类型列表</p>
     */
    public $SensitiveTypes;

    /**
     * @param string $FieldName <p>字段名称</p>
     * @param string $FieldType <p>字段位置</p>
     * @param array $SensitiveTypes <p>敏感数据类型列表</p>
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

        if (array_key_exists("SensitiveTypes",$param) and $param["SensitiveTypes"] !== null) {
            $this->SensitiveTypes = $param["SensitiveTypes"];
        }
    }
}
