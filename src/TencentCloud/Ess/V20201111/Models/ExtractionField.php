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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 合同智能提取字段信息
 *
 * @method string getName() 获取用于合同智能提取的字段名称。

注意: `长度不能超过30个字符`
 * @method void setName(string $Name) 设置用于合同智能提取的字段名称。

注意: `长度不能超过30个字符`
 * @method string getType() 获取指定合同智能提取的字段类型，目前仅支持`TEXT`、`DATE`、`NUMBER`、`OPTION`类型。

类型支持如下：
1、TEXT（文本）
2、DATE（日期）
3、NUMBER（数字）
4、OPTION（选项值）
 * @method void setType(string $Type) 设置指定合同智能提取的字段类型，目前仅支持`TEXT`、`DATE`、`NUMBER`、`OPTION`类型。

类型支持如下：
1、TEXT（文本）
2、DATE（日期）
3、NUMBER（数字）
4、OPTION（选项值）
 * @method string getDescription() 获取用于描述字段信息。

注意：
1、描述字段不能超过100个字符
 * @method void setDescription(string $Description) 设置用于描述字段信息。

注意：
1、描述字段不能超过100个字符
 * @method array getValues() 获取提取出合同中的字段信息。
 * @method void setValues(array $Values) 设置提取出合同中的字段信息。
 * @method array getChoiceList() 获取当字段类型`Type`为OPTION时为必输项，输入选项值
 * @method void setChoiceList(array $ChoiceList) 设置当字段类型`Type`为OPTION时为必输项，输入选项值
 */
class ExtractionField extends AbstractModel
{
    /**
     * @var string 用于合同智能提取的字段名称。

注意: `长度不能超过30个字符`
     */
    public $Name;

    /**
     * @var string 指定合同智能提取的字段类型，目前仅支持`TEXT`、`DATE`、`NUMBER`、`OPTION`类型。

类型支持如下：
1、TEXT（文本）
2、DATE（日期）
3、NUMBER（数字）
4、OPTION（选项值）
     */
    public $Type;

    /**
     * @var string 用于描述字段信息。

注意：
1、描述字段不能超过100个字符
     */
    public $Description;

    /**
     * @var array 提取出合同中的字段信息。
     */
    public $Values;

    /**
     * @var array 当字段类型`Type`为OPTION时为必输项，输入选项值
     */
    public $ChoiceList;

    /**
     * @param string $Name 用于合同智能提取的字段名称。

注意: `长度不能超过30个字符`
     * @param string $Type 指定合同智能提取的字段类型，目前仅支持`TEXT`、`DATE`、`NUMBER`、`OPTION`类型。

类型支持如下：
1、TEXT（文本）
2、DATE（日期）
3、NUMBER（数字）
4、OPTION（选项值）
     * @param string $Description 用于描述字段信息。

注意：
1、描述字段不能超过100个字符
     * @param array $Values 提取出合同中的字段信息。
     * @param array $ChoiceList 当字段类型`Type`为OPTION时为必输项，输入选项值
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }

        if (array_key_exists("ChoiceList",$param) and $param["ChoiceList"] !== null) {
            $this->ChoiceList = $param["ChoiceList"];
        }
    }
}
