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
 * 定义工具的回复参数
 *
 * @method string getDescription() 获取变量描述
 * @method void setDescription(string $Description) 设置变量描述
 * @method string getName() 获取参数名称
 * @method void setName(string $Name) 设置参数名称
 * @method integer getType() 获取参数类型

枚举值:
| uint | 描述 |
| --- | --- |
| 0 | 默认值是string，如果不填就按string处理 |
| 1 |  |
| 2 |  |
| 3 |  |
| 4 |  |
| 5 |  |
| 6 |  |
| 7 |  |
| 8 |  |
| 9 |  |
| 20 |  |
| 99 | 空值 |
| 100 | 未指定类型，用于类型为OneOf和AnyOf的场景 |
 * @method void setType(integer $Type) 设置参数类型

枚举值:
| uint | 描述 |
| --- | --- |
| 0 | 默认值是string，如果不填就按string处理 |
| 1 |  |
| 2 |  |
| 3 |  |
| 4 |  |
| 5 |  |
| 6 |  |
| 7 |  |
| 8 |  |
| 9 |  |
| 20 |  |
| 99 | 空值 |
| 100 | 未指定类型，用于类型为OneOf和AnyOf的场景 |
 * @method integer getRenderMode() 获取
枚举值:
| uint | 描述 |
| --- | --- |
| 0 | 覆盖（全量替换） |
| 1 | 增量追加 |
 * @method void setRenderMode(integer $RenderMode) 设置
枚举值:
| uint | 描述 |
| --- | --- |
| 0 | 覆盖（全量替换） |
| 1 | 增量追加 |
 * @method array getSubParams() 获取只对 OBJECT 或 ARRAY_OBJECT 类型有用
 * @method void setSubParams(array $SubParams) 设置只对 OBJECT 或 ARRAY_OBJECT 类型有用
 */
class ResponseParam extends AbstractModel
{
    /**
     * @var string 变量描述
     */
    public $Description;

    /**
     * @var string 参数名称
     */
    public $Name;

    /**
     * @var integer 参数类型

枚举值:
| uint | 描述 |
| --- | --- |
| 0 | 默认值是string，如果不填就按string处理 |
| 1 |  |
| 2 |  |
| 3 |  |
| 4 |  |
| 5 |  |
| 6 |  |
| 7 |  |
| 8 |  |
| 9 |  |
| 20 |  |
| 99 | 空值 |
| 100 | 未指定类型，用于类型为OneOf和AnyOf的场景 |
     */
    public $Type;

    /**
     * @var integer 
枚举值:
| uint | 描述 |
| --- | --- |
| 0 | 覆盖（全量替换） |
| 1 | 增量追加 |
     */
    public $RenderMode;

    /**
     * @var array 只对 OBJECT 或 ARRAY_OBJECT 类型有用
     */
    public $SubParams;

    /**
     * @param string $Description 变量描述
     * @param string $Name 参数名称
     * @param integer $Type 参数类型

枚举值:
| uint | 描述 |
| --- | --- |
| 0 | 默认值是string，如果不填就按string处理 |
| 1 |  |
| 2 |  |
| 3 |  |
| 4 |  |
| 5 |  |
| 6 |  |
| 7 |  |
| 8 |  |
| 9 |  |
| 20 |  |
| 99 | 空值 |
| 100 | 未指定类型，用于类型为OneOf和AnyOf的场景 |
     * @param integer $RenderMode 
枚举值:
| uint | 描述 |
| --- | --- |
| 0 | 覆盖（全量替换） |
| 1 | 增量追加 |
     * @param array $SubParams 只对 OBJECT 或 ARRAY_OBJECT 类型有用
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("RenderMode",$param) and $param["RenderMode"] !== null) {
            $this->RenderMode = $param["RenderMode"];
        }

        if (array_key_exists("SubParams",$param) and $param["SubParams"] !== null) {
            $this->SubParams = [];
            foreach ($param["SubParams"] as $key => $value){
                $obj = new ResponseParam();
                $obj->deserialize($value);
                array_push($this->SubParams, $obj);
            }
        }
    }
}
