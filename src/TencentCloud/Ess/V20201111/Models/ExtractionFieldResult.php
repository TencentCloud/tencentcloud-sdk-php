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
 * 合同信息提取字段值信息。
 *
 * @method string getId() 获取字段ID
 * @method void setId(string $Id) 设置字段ID
 * @method string getName() 获取用于合同智能提取的字段名称。
 * @method void setName(string $Name) 设置用于合同智能提取的字段名称。
 * @method string getType() 获取合同智能提取的字段类型，目前仅支持TEXT、DATE、NUMBER、OPTION类型。

类型支持如下： 1、TEXT（文本） 2、DATE（日期） 3、NUMBER（数字） 4、OPTION（选项值）
 * @method void setType(string $Type) 设置合同智能提取的字段类型，目前仅支持TEXT、DATE、NUMBER、OPTION类型。

类型支持如下： 1、TEXT（文本） 2、DATE（日期） 3、NUMBER（数字） 4、OPTION（选项值）
 * @method array getValues() 获取提取出合同中的字段信息。
 * @method void setValues(array $Values) 设置提取出合同中的字段信息。
 * @method boolean getRequiresSemanticExtraction() 获取是否需要语义提取，默认为false
 * @method void setRequiresSemanticExtraction(boolean $RequiresSemanticExtraction) 设置是否需要语义提取，默认为false
 * @method array getPositions() 获取提取出值在合同中的坐标位置信息
 * @method void setPositions(array $Positions) 设置提取出值在合同中的坐标位置信息
 */
class ExtractionFieldResult extends AbstractModel
{
    /**
     * @var string 字段ID
     */
    public $Id;

    /**
     * @var string 用于合同智能提取的字段名称。
     */
    public $Name;

    /**
     * @var string 合同智能提取的字段类型，目前仅支持TEXT、DATE、NUMBER、OPTION类型。

类型支持如下： 1、TEXT（文本） 2、DATE（日期） 3、NUMBER（数字） 4、OPTION（选项值）
     */
    public $Type;

    /**
     * @var array 提取出合同中的字段信息。
     */
    public $Values;

    /**
     * @var boolean 是否需要语义提取，默认为false
     */
    public $RequiresSemanticExtraction;

    /**
     * @var array 提取出值在合同中的坐标位置信息
     */
    public $Positions;

    /**
     * @param string $Id 字段ID
     * @param string $Name 用于合同智能提取的字段名称。
     * @param string $Type 合同智能提取的字段类型，目前仅支持TEXT、DATE、NUMBER、OPTION类型。

类型支持如下： 1、TEXT（文本） 2、DATE（日期） 3、NUMBER（数字） 4、OPTION（选项值）
     * @param array $Values 提取出合同中的字段信息。
     * @param boolean $RequiresSemanticExtraction 是否需要语义提取，默认为false
     * @param array $Positions 提取出值在合同中的坐标位置信息
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }

        if (array_key_exists("RequiresSemanticExtraction",$param) and $param["RequiresSemanticExtraction"] !== null) {
            $this->RequiresSemanticExtraction = $param["RequiresSemanticExtraction"];
        }

        if (array_key_exists("Positions",$param) and $param["Positions"] !== null) {
            $this->Positions = [];
            foreach ($param["Positions"] as $key => $value){
                $obj = new PositionInfo();
                $obj->deserialize($value);
                array_push($this->Positions, $obj);
            }
        }
    }
}
