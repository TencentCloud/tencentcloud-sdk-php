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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群Session配置信息.
 *
 * @method string getParameterId() 获取配置id
 * @method void setParameterId(string $ParameterId) 设置配置id
 * @method string getChildImageVersionId() 获取小版本镜像ID
 * @method void setChildImageVersionId(string $ChildImageVersionId) 设置小版本镜像ID
 * @method string getEngineType() 获取集群类型：SparkSQL/PrestoSQL/SparkBatch
 * @method void setEngineType(string $EngineType) 设置集群类型：SparkSQL/PrestoSQL/SparkBatch
 * @method string getKeyName() 获取参数key
 * @method void setKeyName(string $KeyName) 设置参数key
 * @method string getKeyDescription() 获取Key描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeyDescription(string $KeyDescription) 设置Key描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValueType() 获取value类型
 * @method void setValueType(string $ValueType) 设置value类型
 * @method string getValueLengthLimit() 获取value长度限制
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValueLengthLimit(string $ValueLengthLimit) 设置value长度限制
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValueRegexpLimit() 获取value正则限制
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValueRegexpLimit(string $ValueRegexpLimit) 设置value正则限制
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValueDefault() 获取value默认值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValueDefault(string $ValueDefault) 设置value默认值
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsPublic() 获取是否为公共版本：1：公共；2：私有
 * @method void setIsPublic(integer $IsPublic) 设置是否为公共版本：1：公共；2：私有
 * @method integer getParameterType() 获取配置类型：1：session配置（默认）；2：common配置；3：cluster配置
 * @method void setParameterType(integer $ParameterType) 设置配置类型：1：session配置（默认）；2：common配置；3：cluster配置
 * @method string getSubmitMethod() 获取提交方式：User(用户)、BackGround（后台）
 * @method void setSubmitMethod(string $SubmitMethod) 设置提交方式：User(用户)、BackGround（后台）
 * @method string getOperator() 获取操作者
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperator(string $Operator) 设置操作者
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInsertTime() 获取插入时间
 * @method void setInsertTime(string $InsertTime) 设置插入时间
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 */
class DataEngineImageSessionParameter extends AbstractModel
{
    /**
     * @var string 配置id
     */
    public $ParameterId;

    /**
     * @var string 小版本镜像ID
     */
    public $ChildImageVersionId;

    /**
     * @var string 集群类型：SparkSQL/PrestoSQL/SparkBatch
     */
    public $EngineType;

    /**
     * @var string 参数key
     */
    public $KeyName;

    /**
     * @var string Key描述信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KeyDescription;

    /**
     * @var string value类型
     */
    public $ValueType;

    /**
     * @var string value长度限制
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ValueLengthLimit;

    /**
     * @var string value正则限制
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ValueRegexpLimit;

    /**
     * @var string value默认值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ValueDefault;

    /**
     * @var integer 是否为公共版本：1：公共；2：私有
     */
    public $IsPublic;

    /**
     * @var integer 配置类型：1：session配置（默认）；2：common配置；3：cluster配置
     */
    public $ParameterType;

    /**
     * @var string 提交方式：User(用户)、BackGround（后台）
     */
    public $SubmitMethod;

    /**
     * @var string 操作者
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Operator;

    /**
     * @var string 插入时间
     */
    public $InsertTime;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @param string $ParameterId 配置id
     * @param string $ChildImageVersionId 小版本镜像ID
     * @param string $EngineType 集群类型：SparkSQL/PrestoSQL/SparkBatch
     * @param string $KeyName 参数key
     * @param string $KeyDescription Key描述信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ValueType value类型
     * @param string $ValueLengthLimit value长度限制
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ValueRegexpLimit value正则限制
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ValueDefault value默认值
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsPublic 是否为公共版本：1：公共；2：私有
     * @param integer $ParameterType 配置类型：1：session配置（默认）；2：common配置；3：cluster配置
     * @param string $SubmitMethod 提交方式：User(用户)、BackGround（后台）
     * @param string $Operator 操作者
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InsertTime 插入时间
     * @param string $UpdateTime 更新时间
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
        if (array_key_exists("ParameterId",$param) and $param["ParameterId"] !== null) {
            $this->ParameterId = $param["ParameterId"];
        }

        if (array_key_exists("ChildImageVersionId",$param) and $param["ChildImageVersionId"] !== null) {
            $this->ChildImageVersionId = $param["ChildImageVersionId"];
        }

        if (array_key_exists("EngineType",$param) and $param["EngineType"] !== null) {
            $this->EngineType = $param["EngineType"];
        }

        if (array_key_exists("KeyName",$param) and $param["KeyName"] !== null) {
            $this->KeyName = $param["KeyName"];
        }

        if (array_key_exists("KeyDescription",$param) and $param["KeyDescription"] !== null) {
            $this->KeyDescription = $param["KeyDescription"];
        }

        if (array_key_exists("ValueType",$param) and $param["ValueType"] !== null) {
            $this->ValueType = $param["ValueType"];
        }

        if (array_key_exists("ValueLengthLimit",$param) and $param["ValueLengthLimit"] !== null) {
            $this->ValueLengthLimit = $param["ValueLengthLimit"];
        }

        if (array_key_exists("ValueRegexpLimit",$param) and $param["ValueRegexpLimit"] !== null) {
            $this->ValueRegexpLimit = $param["ValueRegexpLimit"];
        }

        if (array_key_exists("ValueDefault",$param) and $param["ValueDefault"] !== null) {
            $this->ValueDefault = $param["ValueDefault"];
        }

        if (array_key_exists("IsPublic",$param) and $param["IsPublic"] !== null) {
            $this->IsPublic = $param["IsPublic"];
        }

        if (array_key_exists("ParameterType",$param) and $param["ParameterType"] !== null) {
            $this->ParameterType = $param["ParameterType"];
        }

        if (array_key_exists("SubmitMethod",$param) and $param["SubmitMethod"] !== null) {
            $this->SubmitMethod = $param["SubmitMethod"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("InsertTime",$param) and $param["InsertTime"] !== null) {
            $this->InsertTime = $param["InsertTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
