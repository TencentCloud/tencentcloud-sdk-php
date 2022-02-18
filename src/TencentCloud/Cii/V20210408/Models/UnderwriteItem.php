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
namespace TencentCloud\Cii\V20210408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 机器核保结论子项
 *
 * @method string getName() 获取字段名
 * @method void setName(string $Name) 设置字段名
 * @method string getResult() 获取结果
 * @method void setResult(string $Result) 设置结果
 * @method string getValue() 获取风险值或者说明
 * @method void setValue(string $Value) 设置风险值或者说明
 * @method string getRange() 获取参考范围
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRange(string $Range) 设置参考范围
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getReportDate() 获取报告时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReportDate(array $ReportDate) 设置报告时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileType() 获取文件类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileType(string $FileType) 设置文件类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInspectProject() 获取检查项目
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInspectProject(string $InspectProject) 设置检查项目
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUnit() 获取单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnit(string $Unit) 设置单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOriginName() 获取原名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOriginName(string $OriginName) 设置原名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getYinYang() 获取阴阳性
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setYinYang(string $YinYang) 设置阴阳性
注意：此字段可能返回 null，表示取不到有效值。
 */
class UnderwriteItem extends AbstractModel
{
    /**
     * @var string 字段名
     */
    public $Name;

    /**
     * @var string 结果
     */
    public $Result;

    /**
     * @var string 风险值或者说明
     */
    public $Value;

    /**
     * @var string 参考范围
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Range;

    /**
     * @var array 报告时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReportDate;

    /**
     * @var string 文件类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileType;

    /**
     * @var string 检查项目
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InspectProject;

    /**
     * @var string 单位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Unit;

    /**
     * @var string 原名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OriginName;

    /**
     * @var string 阴阳性
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $YinYang;

    /**
     * @param string $Name 字段名
     * @param string $Result 结果
     * @param string $Value 风险值或者说明
     * @param string $Range 参考范围
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ReportDate 报告时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileType 文件类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InspectProject 检查项目
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Unit 单位
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OriginName 原名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $YinYang 阴阳性
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Range",$param) and $param["Range"] !== null) {
            $this->Range = $param["Range"];
        }

        if (array_key_exists("ReportDate",$param) and $param["ReportDate"] !== null) {
            $this->ReportDate = $param["ReportDate"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("InspectProject",$param) and $param["InspectProject"] !== null) {
            $this->InspectProject = $param["InspectProject"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }

        if (array_key_exists("OriginName",$param) and $param["OriginName"] !== null) {
            $this->OriginName = $param["OriginName"];
        }

        if (array_key_exists("YinYang",$param) and $param["YinYang"] !== null) {
            $this->YinYang = $param["YinYang"];
        }
    }
}
