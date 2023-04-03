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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 需要开启键值索引的字段的索引描述信息
 *
 * @method string getType() 获取字段类型，目前支持的类型有：long、text、double
 * @method void setType(string $Type) 设置字段类型，目前支持的类型有：long、text、double
 * @method string getTokenizer() 获取字段的分词符，其中的每个字符代表一个分词符；
仅支持英文符号、\n\t\r及转义符\；
long及double类型字段需为空；
注意：\n\t\r本身已被转义，直接使用双引号包裹即可作为入参，无需再次转义。使用API Explorer进行调试时请使用JSON参数输入方式，以避免\n\t\r被重复转义
 * @method void setTokenizer(string $Tokenizer) 设置字段的分词符，其中的每个字符代表一个分词符；
仅支持英文符号、\n\t\r及转义符\；
long及double类型字段需为空；
注意：\n\t\r本身已被转义，直接使用双引号包裹即可作为入参，无需再次转义。使用API Explorer进行调试时请使用JSON参数输入方式，以避免\n\t\r被重复转义
 * @method boolean getSqlFlag() 获取字段是否开启分析功能
 * @method void setSqlFlag(boolean $SqlFlag) 设置字段是否开启分析功能
 * @method boolean getContainZH() 获取是否包含中文，long及double类型字段需为false
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContainZH(boolean $ContainZH) 设置是否包含中文，long及double类型字段需为false
注意：此字段可能返回 null，表示取不到有效值。
 */
class ValueInfo extends AbstractModel
{
    /**
     * @var string 字段类型，目前支持的类型有：long、text、double
     */
    public $Type;

    /**
     * @var string 字段的分词符，其中的每个字符代表一个分词符；
仅支持英文符号、\n\t\r及转义符\；
long及double类型字段需为空；
注意：\n\t\r本身已被转义，直接使用双引号包裹即可作为入参，无需再次转义。使用API Explorer进行调试时请使用JSON参数输入方式，以避免\n\t\r被重复转义
     */
    public $Tokenizer;

    /**
     * @var boolean 字段是否开启分析功能
     */
    public $SqlFlag;

    /**
     * @var boolean 是否包含中文，long及double类型字段需为false
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContainZH;

    /**
     * @param string $Type 字段类型，目前支持的类型有：long、text、double
     * @param string $Tokenizer 字段的分词符，其中的每个字符代表一个分词符；
仅支持英文符号、\n\t\r及转义符\；
long及double类型字段需为空；
注意：\n\t\r本身已被转义，直接使用双引号包裹即可作为入参，无需再次转义。使用API Explorer进行调试时请使用JSON参数输入方式，以避免\n\t\r被重复转义
     * @param boolean $SqlFlag 字段是否开启分析功能
     * @param boolean $ContainZH 是否包含中文，long及double类型字段需为false
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Tokenizer",$param) and $param["Tokenizer"] !== null) {
            $this->Tokenizer = $param["Tokenizer"];
        }

        if (array_key_exists("SqlFlag",$param) and $param["SqlFlag"] !== null) {
            $this->SqlFlag = $param["SqlFlag"];
        }

        if (array_key_exists("ContainZH",$param) and $param["ContainZH"] !== null) {
            $this->ContainZH = $param["ContainZH"];
        }
    }
}
