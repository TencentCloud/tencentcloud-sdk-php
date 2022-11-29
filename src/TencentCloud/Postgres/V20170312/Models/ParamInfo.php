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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 参数详情
 *
 * @method integer getID() 获取参数ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setID(integer $ID) 设置参数ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取参数名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置参数名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParamValueType() 获取参数值类型：integer（整型）、real（浮点型）、bool（布尔型）、enum（枚举类型）、mutil_enum（枚举类型、支持多选）。
当参数类型为integer（整型）、real（浮点型）时，参数的取值范围根据返回值的Max、Min确定； 
当参数类型为bool（布尔型）时，参数设置值取值范围是true | false； 
当参数类型为enum（枚举类型）、mutil_enum（多枚举类型）时，参数的取值范围由返回值中的EnumValue确定。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParamValueType(string $ParamValueType) 设置参数值类型：integer（整型）、real（浮点型）、bool（布尔型）、enum（枚举类型）、mutil_enum（枚举类型、支持多选）。
当参数类型为integer（整型）、real（浮点型）时，参数的取值范围根据返回值的Max、Min确定； 
当参数类型为bool（布尔型）时，参数设置值取值范围是true | false； 
当参数类型为enum（枚举类型）、mutil_enum（多枚举类型）时，参数的取值范围由返回值中的EnumValue确定。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUnit() 获取参数值 单位。参数没有单位时，该字段返回空
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnit(string $Unit) 设置参数值 单位。参数没有单位时，该字段返回空
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDefaultValue() 获取参数默认值。以字符串形式返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDefaultValue(string $DefaultValue) 设置参数默认值。以字符串形式返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCurrentValue() 获取参数当前运行值。以字符串形式返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCurrentValue(string $CurrentValue) 设置参数当前运行值。以字符串形式返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getMax() 获取数值类型（integer、real）参数，取值下界
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMax(float $Max) 设置数值类型（integer、real）参数，取值下界
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getEnumValue() 获取枚举类型参数，取值范围
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnumValue(array $EnumValue) 设置枚举类型参数，取值范围
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getMin() 获取数值类型（integer、real）参数，取值上界
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMin(float $Min) 设置数值类型（integer、real）参数，取值上界
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParamDescriptionCH() 获取参数中文描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParamDescriptionCH(string $ParamDescriptionCH) 设置参数中文描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParamDescriptionEN() 获取参数英文描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParamDescriptionEN(string $ParamDescriptionEN) 设置参数英文描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getNeedReboot() 获取参数修改，是否重启生效。（true为需要，false为不需要）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNeedReboot(boolean $NeedReboot) 设置参数修改，是否重启生效。（true为需要，false为不需要）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClassificationCN() 获取参数中文分类
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClassificationCN(string $ClassificationCN) 设置参数中文分类
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClassificationEN() 获取参数英文分类
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClassificationEN(string $ClassificationEN) 设置参数英文分类
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSpecRelated() 获取是否和规格相关。（true为相关，false为不想关）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpecRelated(boolean $SpecRelated) 设置是否和规格相关。（true为相关，false为不想关）
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getAdvanced() 获取是否为重点参数。（true为重点参数，修改是需要重点关注，可能会影响实例性能）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdvanced(boolean $Advanced) 设置是否为重点参数。（true为重点参数，修改是需要重点关注，可能会影响实例性能）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastModifyTime() 获取参数最后一次修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastModifyTime(string $LastModifyTime) 设置参数最后一次修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStandbyRelated() 获取参数存在主备制约，0：无主备制约关系，1:备机参数值需比主机大，2:主机参数值需比备机大
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStandbyRelated(integer $StandbyRelated) 设置参数存在主备制约，0：无主备制约关系，1:备机参数值需比主机大，2:主机参数值需比备机大
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getVersionRelationSet() 获取参数版本关联信息，存储具体内核版本下的具体参数信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionRelationSet(array $VersionRelationSet) 设置参数版本关联信息，存储具体内核版本下的具体参数信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSpecRelationSet() 获取参数规格关联信息，存储具体规格下具体的参数信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpecRelationSet(array $SpecRelationSet) 设置参数规格关联信息，存储具体规格下具体的参数信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class ParamInfo extends AbstractModel
{
    /**
     * @var integer 参数ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ID;

    /**
     * @var string 参数名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 参数值类型：integer（整型）、real（浮点型）、bool（布尔型）、enum（枚举类型）、mutil_enum（枚举类型、支持多选）。
当参数类型为integer（整型）、real（浮点型）时，参数的取值范围根据返回值的Max、Min确定； 
当参数类型为bool（布尔型）时，参数设置值取值范围是true | false； 
当参数类型为enum（枚举类型）、mutil_enum（多枚举类型）时，参数的取值范围由返回值中的EnumValue确定。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParamValueType;

    /**
     * @var string 参数值 单位。参数没有单位时，该字段返回空
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Unit;

    /**
     * @var string 参数默认值。以字符串形式返回
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DefaultValue;

    /**
     * @var string 参数当前运行值。以字符串形式返回
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CurrentValue;

    /**
     * @var float 数值类型（integer、real）参数，取值下界
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Max;

    /**
     * @var array 枚举类型参数，取值范围
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnumValue;

    /**
     * @var float 数值类型（integer、real）参数，取值上界
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Min;

    /**
     * @var string 参数中文描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParamDescriptionCH;

    /**
     * @var string 参数英文描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParamDescriptionEN;

    /**
     * @var boolean 参数修改，是否重启生效。（true为需要，false为不需要）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NeedReboot;

    /**
     * @var string 参数中文分类
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClassificationCN;

    /**
     * @var string 参数英文分类
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClassificationEN;

    /**
     * @var boolean 是否和规格相关。（true为相关，false为不想关）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SpecRelated;

    /**
     * @var boolean 是否为重点参数。（true为重点参数，修改是需要重点关注，可能会影响实例性能）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Advanced;

    /**
     * @var string 参数最后一次修改时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastModifyTime;

    /**
     * @var integer 参数存在主备制约，0：无主备制约关系，1:备机参数值需比主机大，2:主机参数值需比备机大
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StandbyRelated;

    /**
     * @var array 参数版本关联信息，存储具体内核版本下的具体参数信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VersionRelationSet;

    /**
     * @var array 参数规格关联信息，存储具体规格下具体的参数信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SpecRelationSet;

    /**
     * @param integer $ID 参数ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 参数名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParamValueType 参数值类型：integer（整型）、real（浮点型）、bool（布尔型）、enum（枚举类型）、mutil_enum（枚举类型、支持多选）。
当参数类型为integer（整型）、real（浮点型）时，参数的取值范围根据返回值的Max、Min确定； 
当参数类型为bool（布尔型）时，参数设置值取值范围是true | false； 
当参数类型为enum（枚举类型）、mutil_enum（多枚举类型）时，参数的取值范围由返回值中的EnumValue确定。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Unit 参数值 单位。参数没有单位时，该字段返回空
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DefaultValue 参数默认值。以字符串形式返回
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CurrentValue 参数当前运行值。以字符串形式返回
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Max 数值类型（integer、real）参数，取值下界
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $EnumValue 枚举类型参数，取值范围
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Min 数值类型（integer、real）参数，取值上界
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParamDescriptionCH 参数中文描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParamDescriptionEN 参数英文描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $NeedReboot 参数修改，是否重启生效。（true为需要，false为不需要）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClassificationCN 参数中文分类
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClassificationEN 参数英文分类
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $SpecRelated 是否和规格相关。（true为相关，false为不想关）
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Advanced 是否为重点参数。（true为重点参数，修改是需要重点关注，可能会影响实例性能）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastModifyTime 参数最后一次修改时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StandbyRelated 参数存在主备制约，0：无主备制约关系，1:备机参数值需比主机大，2:主机参数值需比备机大
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $VersionRelationSet 参数版本关联信息，存储具体内核版本下的具体参数信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SpecRelationSet 参数规格关联信息，存储具体规格下具体的参数信息
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ParamValueType",$param) and $param["ParamValueType"] !== null) {
            $this->ParamValueType = $param["ParamValueType"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }

        if (array_key_exists("DefaultValue",$param) and $param["DefaultValue"] !== null) {
            $this->DefaultValue = $param["DefaultValue"];
        }

        if (array_key_exists("CurrentValue",$param) and $param["CurrentValue"] !== null) {
            $this->CurrentValue = $param["CurrentValue"];
        }

        if (array_key_exists("Max",$param) and $param["Max"] !== null) {
            $this->Max = $param["Max"];
        }

        if (array_key_exists("EnumValue",$param) and $param["EnumValue"] !== null) {
            $this->EnumValue = $param["EnumValue"];
        }

        if (array_key_exists("Min",$param) and $param["Min"] !== null) {
            $this->Min = $param["Min"];
        }

        if (array_key_exists("ParamDescriptionCH",$param) and $param["ParamDescriptionCH"] !== null) {
            $this->ParamDescriptionCH = $param["ParamDescriptionCH"];
        }

        if (array_key_exists("ParamDescriptionEN",$param) and $param["ParamDescriptionEN"] !== null) {
            $this->ParamDescriptionEN = $param["ParamDescriptionEN"];
        }

        if (array_key_exists("NeedReboot",$param) and $param["NeedReboot"] !== null) {
            $this->NeedReboot = $param["NeedReboot"];
        }

        if (array_key_exists("ClassificationCN",$param) and $param["ClassificationCN"] !== null) {
            $this->ClassificationCN = $param["ClassificationCN"];
        }

        if (array_key_exists("ClassificationEN",$param) and $param["ClassificationEN"] !== null) {
            $this->ClassificationEN = $param["ClassificationEN"];
        }

        if (array_key_exists("SpecRelated",$param) and $param["SpecRelated"] !== null) {
            $this->SpecRelated = $param["SpecRelated"];
        }

        if (array_key_exists("Advanced",$param) and $param["Advanced"] !== null) {
            $this->Advanced = $param["Advanced"];
        }

        if (array_key_exists("LastModifyTime",$param) and $param["LastModifyTime"] !== null) {
            $this->LastModifyTime = $param["LastModifyTime"];
        }

        if (array_key_exists("StandbyRelated",$param) and $param["StandbyRelated"] !== null) {
            $this->StandbyRelated = $param["StandbyRelated"];
        }

        if (array_key_exists("VersionRelationSet",$param) and $param["VersionRelationSet"] !== null) {
            $this->VersionRelationSet = [];
            foreach ($param["VersionRelationSet"] as $key => $value){
                $obj = new ParamVersionRelation();
                $obj->deserialize($value);
                array_push($this->VersionRelationSet, $obj);
            }
        }

        if (array_key_exists("SpecRelationSet",$param) and $param["SpecRelationSet"] !== null) {
            $this->SpecRelationSet = [];
            foreach ($param["SpecRelationSet"] as $key => $value){
                $obj = new ParamSpecRelation();
                $obj->deserialize($value);
                array_push($this->SpecRelationSet, $obj);
            }
        }
    }
}
