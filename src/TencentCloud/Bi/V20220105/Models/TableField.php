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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 表字段描述
 *
 * @method string getDbName() 获取db里的字段column名
 * @method void setDbName(string $DbName) 设置db里的字段column名
 * @method string getAliasName() 获取bi展示名
 * @method void setAliasName(string $AliasName) 设置bi展示名
 * @method string getDbType() 获取db里的字段类型
 * @method void setDbType(string $DbType) 设置db里的字段类型
 * @method string getFieldType() 获取BI归类后的抽象字段类型,比如字符串,数字,时间
 * @method void setFieldType(string $FieldType) 设置BI归类后的抽象字段类型,比如字符串,数字,时间
 * @method string getFieldComplexType() 获取字段组合计算公式后生成的复杂明细类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFieldComplexType(string $FieldComplexType) 设置字段组合计算公式后生成的复杂明细类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMark() 获取字段描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMark(string $Mark) 设置字段描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFormatRule() 获取字段计算公式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFormatRule(string $FormatRule) 设置字段计算公式
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsFilter() 获取数据字段是否过滤空值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsFilter(boolean $IsFilter) 设置数据字段是否过滤空值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCalcType() 获取计算字段类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCalcType(string $CalcType) 设置计算字段类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCalcFormula() 获取计算字段的公式内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCalcFormula(string $CalcFormula) 设置计算字段的公式内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCalcDesc() 获取计算字段的中文公式内容, 前端展示使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCalcDesc(string $CalcDesc) 设置计算字段的中文公式内容, 前端展示使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDictId() 获取关联字典表id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDictId(integer $DictId) 设置关联字典表id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDictName() 获取关联字典表名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDictName(string $DictName) 设置关联字典表名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableNodeId() 获取非必填, 多表关联新增字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableNodeId(string $TableNodeId) 设置非必填, 多表关联新增字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExcelName() 获取excel
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExcelName(string $ExcelName) 设置excel
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTableName() 获取非必填,多表关联新增字段,字段所属的表名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableName(string $TableName) 设置非必填,多表关联新增字段,字段所属的表名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getJsonPathName() 获取api数据源路径名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJsonPathName(string $JsonPathName) 设置api数据源路径名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGranularity() 获取地理字段标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGranularity(string $Granularity) 设置地理字段标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getGeoJsonId() 获取地图id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGeoJsonId(integer $GeoJsonId) 设置地图id
注意：此字段可能返回 null，表示取不到有效值。
 * @method EmptyValueConfig getEmptyValueConfig() 获取空值展示样式配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEmptyValueConfig(EmptyValueConfig $EmptyValueConfig) 设置空值展示样式配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDbFieldName() 获取原列名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDbFieldName(string $DbFieldName) 设置原列名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsCopyOperation() 获取是否是复制字段操作
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsCopyOperation(boolean $IsCopyOperation) 设置是否是复制字段操作
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsCopyFromNormal() 获取是否从普通字段复制
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsCopyFromNormal(boolean $IsCopyFromNormal) 设置是否从普通字段复制
注意：此字段可能返回 null，表示取不到有效值。
 */
class TableField extends AbstractModel
{
    /**
     * @var string db里的字段column名
     */
    public $DbName;

    /**
     * @var string bi展示名
     */
    public $AliasName;

    /**
     * @var string db里的字段类型
     */
    public $DbType;

    /**
     * @var string BI归类后的抽象字段类型,比如字符串,数字,时间
     */
    public $FieldType;

    /**
     * @var string 字段组合计算公式后生成的复杂明细类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FieldComplexType;

    /**
     * @var string 字段描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Mark;

    /**
     * @var string 字段计算公式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FormatRule;

    /**
     * @var boolean 数据字段是否过滤空值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsFilter;

    /**
     * @var string 计算字段类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CalcType;

    /**
     * @var string 计算字段的公式内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CalcFormula;

    /**
     * @var string 计算字段的中文公式内容, 前端展示使用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CalcDesc;

    /**
     * @var integer 关联字典表id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DictId;

    /**
     * @var string 关联字典表名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DictName;

    /**
     * @var string 非必填, 多表关联新增字段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableNodeId;

    /**
     * @var string excel
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExcelName;

    /**
     * @var string 非必填,多表关联新增字段,字段所属的表名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableName;

    /**
     * @var string api数据源路径名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JsonPathName;

    /**
     * @var string 地理字段标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Granularity;

    /**
     * @var integer 地图id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GeoJsonId;

    /**
     * @var EmptyValueConfig 空值展示样式配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EmptyValueConfig;

    /**
     * @var string 原列名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DbFieldName;

    /**
     * @var boolean 是否是复制字段操作
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsCopyOperation;

    /**
     * @var boolean 是否从普通字段复制
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsCopyFromNormal;

    /**
     * @param string $DbName db里的字段column名
     * @param string $AliasName bi展示名
     * @param string $DbType db里的字段类型
     * @param string $FieldType BI归类后的抽象字段类型,比如字符串,数字,时间
     * @param string $FieldComplexType 字段组合计算公式后生成的复杂明细类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Mark 字段描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FormatRule 字段计算公式
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsFilter 数据字段是否过滤空值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CalcType 计算字段类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CalcFormula 计算字段的公式内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CalcDesc 计算字段的中文公式内容, 前端展示使用
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DictId 关联字典表id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DictName 关联字典表名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableNodeId 非必填, 多表关联新增字段
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExcelName excel
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TableName 非必填,多表关联新增字段,字段所属的表名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $JsonPathName api数据源路径名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Granularity 地理字段标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $GeoJsonId 地图id
注意：此字段可能返回 null，表示取不到有效值。
     * @param EmptyValueConfig $EmptyValueConfig 空值展示样式配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DbFieldName 原列名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsCopyOperation 是否是复制字段操作
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsCopyFromNormal 是否从普通字段复制
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
        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("AliasName",$param) and $param["AliasName"] !== null) {
            $this->AliasName = $param["AliasName"];
        }

        if (array_key_exists("DbType",$param) and $param["DbType"] !== null) {
            $this->DbType = $param["DbType"];
        }

        if (array_key_exists("FieldType",$param) and $param["FieldType"] !== null) {
            $this->FieldType = $param["FieldType"];
        }

        if (array_key_exists("FieldComplexType",$param) and $param["FieldComplexType"] !== null) {
            $this->FieldComplexType = $param["FieldComplexType"];
        }

        if (array_key_exists("Mark",$param) and $param["Mark"] !== null) {
            $this->Mark = $param["Mark"];
        }

        if (array_key_exists("FormatRule",$param) and $param["FormatRule"] !== null) {
            $this->FormatRule = $param["FormatRule"];
        }

        if (array_key_exists("IsFilter",$param) and $param["IsFilter"] !== null) {
            $this->IsFilter = $param["IsFilter"];
        }

        if (array_key_exists("CalcType",$param) and $param["CalcType"] !== null) {
            $this->CalcType = $param["CalcType"];
        }

        if (array_key_exists("CalcFormula",$param) and $param["CalcFormula"] !== null) {
            $this->CalcFormula = $param["CalcFormula"];
        }

        if (array_key_exists("CalcDesc",$param) and $param["CalcDesc"] !== null) {
            $this->CalcDesc = $param["CalcDesc"];
        }

        if (array_key_exists("DictId",$param) and $param["DictId"] !== null) {
            $this->DictId = $param["DictId"];
        }

        if (array_key_exists("DictName",$param) and $param["DictName"] !== null) {
            $this->DictName = $param["DictName"];
        }

        if (array_key_exists("TableNodeId",$param) and $param["TableNodeId"] !== null) {
            $this->TableNodeId = $param["TableNodeId"];
        }

        if (array_key_exists("ExcelName",$param) and $param["ExcelName"] !== null) {
            $this->ExcelName = $param["ExcelName"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("JsonPathName",$param) and $param["JsonPathName"] !== null) {
            $this->JsonPathName = $param["JsonPathName"];
        }

        if (array_key_exists("Granularity",$param) and $param["Granularity"] !== null) {
            $this->Granularity = $param["Granularity"];
        }

        if (array_key_exists("GeoJsonId",$param) and $param["GeoJsonId"] !== null) {
            $this->GeoJsonId = $param["GeoJsonId"];
        }

        if (array_key_exists("EmptyValueConfig",$param) and $param["EmptyValueConfig"] !== null) {
            $this->EmptyValueConfig = new EmptyValueConfig();
            $this->EmptyValueConfig->deserialize($param["EmptyValueConfig"]);
        }

        if (array_key_exists("DbFieldName",$param) and $param["DbFieldName"] !== null) {
            $this->DbFieldName = $param["DbFieldName"];
        }

        if (array_key_exists("IsCopyOperation",$param) and $param["IsCopyOperation"] !== null) {
            $this->IsCopyOperation = $param["IsCopyOperation"];
        }

        if (array_key_exists("IsCopyFromNormal",$param) and $param["IsCopyFromNormal"] !== null) {
            $this->IsCopyFromNormal = $param["IsCopyFromNormal"];
        }
    }
}
