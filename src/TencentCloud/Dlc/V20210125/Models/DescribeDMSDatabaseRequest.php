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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDMSDatabase请求参数结构体
 *
 * @method string getName() 获取数据库名称
 * @method void setName(string $Name) 设置数据库名称
 * @method string getSchemaName() 获取schema名称
 * @method void setSchemaName(string $SchemaName) 设置schema名称
 * @method string getPattern() 获取匹配规则
 * @method void setPattern(string $Pattern) 设置匹配规则
 */
class DescribeDMSDatabaseRequest extends AbstractModel
{
    /**
     * @var string 数据库名称
     */
    public $Name;

    /**
     * @var string schema名称
     */
    public $SchemaName;

    /**
     * @var string 匹配规则
     */
    public $Pattern;

    /**
     * @param string $Name 数据库名称
     * @param string $SchemaName schema名称
     * @param string $Pattern 匹配规则
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

        if (array_key_exists("SchemaName",$param) and $param["SchemaName"] !== null) {
            $this->SchemaName = $param["SchemaName"];
        }

        if (array_key_exists("Pattern",$param) and $param["Pattern"] !== null) {
            $this->Pattern = $param["Pattern"];
        }
    }
}
