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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 指标列表简单结构
 *
 * @method integer getId() 获取ID
 * @method void setId(integer $Id) 设置ID
 * @method string getName() 获取名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMeasureUnit() 获取单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMeasureUnit(integer $MeasureUnit) 设置单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIndicatorCode() 获取编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndicatorCode(string $IndicatorCode) 设置编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBizOwnerName() 获取业务负责人名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBizOwnerName(string $BizOwnerName) 设置业务负责人名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTechOwnerName() 获取技术服务站名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTechOwnerName(string $TechOwnerName) 设置技术服务站名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBizCaliber() 获取业务口径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBizCaliber(string $BizCaliber) 设置业务口径
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIndicatorType() 获取指标类型（1-原子指标 2-衍生指标 3-复合指标）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndicatorType(integer $IndicatorType) 设置指标类型（1-原子指标 2-衍生指标 3-复合指标）
注意：此字段可能返回 null，表示取不到有效值。
 */
class IndicatorBaseSimpleInfo extends AbstractModel
{
    /**
     * @var integer ID
     */
    public $Id;

    /**
     * @var string 名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var integer 单位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MeasureUnit;

    /**
     * @var integer 状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 编码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndicatorCode;

    /**
     * @var string 业务负责人名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BizOwnerName;

    /**
     * @var string 技术服务站名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TechOwnerName;

    /**
     * @var string 业务口径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BizCaliber;

    /**
     * @var integer 指标类型（1-原子指标 2-衍生指标 3-复合指标）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndicatorType;

    /**
     * @param integer $Id ID
     * @param string $Name 名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MeasureUnit 单位
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IndicatorCode 编码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BizOwnerName 业务负责人名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TechOwnerName 技术服务站名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BizCaliber 业务口径
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IndicatorType 指标类型（1-原子指标 2-衍生指标 3-复合指标）
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("MeasureUnit",$param) and $param["MeasureUnit"] !== null) {
            $this->MeasureUnit = $param["MeasureUnit"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("IndicatorCode",$param) and $param["IndicatorCode"] !== null) {
            $this->IndicatorCode = $param["IndicatorCode"];
        }

        if (array_key_exists("BizOwnerName",$param) and $param["BizOwnerName"] !== null) {
            $this->BizOwnerName = $param["BizOwnerName"];
        }

        if (array_key_exists("TechOwnerName",$param) and $param["TechOwnerName"] !== null) {
            $this->TechOwnerName = $param["TechOwnerName"];
        }

        if (array_key_exists("BizCaliber",$param) and $param["BizCaliber"] !== null) {
            $this->BizCaliber = $param["BizCaliber"];
        }

        if (array_key_exists("IndicatorType",$param) and $param["IndicatorType"] !== null) {
            $this->IndicatorType = $param["IndicatorType"];
        }
    }
}
