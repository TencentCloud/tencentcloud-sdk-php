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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 检验指标内容
 *
 * @method integer getID() 获取标准名称编号，利用该编号可以获取详细的指标含义和解释
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setID(integer $ID) 设置标准名称编号，利用该编号可以获取详细的指标含义和解释
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCode() 获取英文名称或简称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCode(string $Code) 设置英文名称或简称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取项目指标名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置项目指标名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResult() 获取检验结果值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResult(string $Result) 设置检验结果值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRange() 获取正常结果范围
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRange(string $Range) 设置正常结果范围
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUtil() 获取指标单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUtil(string $Util) 设置指标单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsNormal() 获取是否正常
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsNormal(boolean $IsNormal) 设置是否正常
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsExceed() 获取是否超标
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsExceed(boolean $IsExceed) 设置是否超标
注意：此字段可能返回 null，表示取不到有效值。
 */
class TestItem extends AbstractModel
{
    /**
     * @var integer 标准名称编号，利用该编号可以获取详细的指标含义和解释
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ID;

    /**
     * @var string 英文名称或简称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Code;

    /**
     * @var string 项目指标名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 检验结果值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Result;

    /**
     * @var string 正常结果范围
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Range;

    /**
     * @var string 指标单位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Util;

    /**
     * @var boolean 是否正常
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsNormal;

    /**
     * @var boolean 是否超标
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsExceed;

    /**
     * @param integer $ID 标准名称编号，利用该编号可以获取详细的指标含义和解释
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Code 英文名称或简称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 项目指标名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Result 检验结果值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Range 正常结果范围
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Util 指标单位
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsNormal 是否正常
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsExceed 是否超标
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Range",$param) and $param["Range"] !== null) {
            $this->Range = $param["Range"];
        }

        if (array_key_exists("Util",$param) and $param["Util"] !== null) {
            $this->Util = $param["Util"];
        }

        if (array_key_exists("IsNormal",$param) and $param["IsNormal"] !== null) {
            $this->IsNormal = $param["IsNormal"];
        }

        if (array_key_exists("IsExceed",$param) and $param["IsExceed"] !== null) {
            $this->IsExceed = $param["IsExceed"];
        }
    }
}
