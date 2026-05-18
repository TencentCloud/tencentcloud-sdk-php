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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 变量信息列表
 *
 * @method string getSerialId() 获取<p>变量id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSerialId(string $SerialId) 设置<p>变量id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取<p>变量名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置<p>变量名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValue() 获取<p>变量值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(string $Value) 设置<p>变量值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getValueType() 获取<p>变量值类型</p><p>枚举值：</p><ul><li>0： 自定义变量</li><li>1： 凭据值</li></ul>
 * @method void setValueType(integer $ValueType) 设置<p>变量值类型</p><p>枚举值：</p><ul><li>0： 自定义变量</li><li>1： 凭据值</li></ul>
 * @method string getSecretRegion() 获取<p>凭据所在地域</p>
 * @method void setSecretRegion(string $SecretRegion) 设置<p>凭据所在地域</p>
 * @method string getSecretName() 获取<p>凭据名称</p>
 * @method void setSecretName(string $SecretName) 设置<p>凭据名称</p>
 * @method string getSecretVersionId() 获取<p>凭据版本</p>
 * @method void setSecretVersionId(string $SecretVersionId) 设置<p>凭据版本</p>
 * @method integer getType() 获取<p>变量值是否隐藏</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(integer $Type) 设置<p>变量值是否隐藏</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemark() 获取<p>变量描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置<p>变量描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取<p>变量创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置<p>变量创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatorUin() 获取<p>变量创建人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatorUin(string $CreatorUin) 设置<p>变量创建人</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class VariableItem extends AbstractModel
{
    /**
     * @var string <p>变量id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SerialId;

    /**
     * @var string <p>变量名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string <p>变量值</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @var integer <p>变量值类型</p><p>枚举值：</p><ul><li>0： 自定义变量</li><li>1： 凭据值</li></ul>
     */
    public $ValueType;

    /**
     * @var string <p>凭据所在地域</p>
     */
    public $SecretRegion;

    /**
     * @var string <p>凭据名称</p>
     */
    public $SecretName;

    /**
     * @var string <p>凭据版本</p>
     */
    public $SecretVersionId;

    /**
     * @var integer <p>变量值是否隐藏</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string <p>变量描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var string <p>变量创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string <p>变量创建人</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatorUin;

    /**
     * @param string $SerialId <p>变量id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name <p>变量名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Value <p>变量值</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ValueType <p>变量值类型</p><p>枚举值：</p><ul><li>0： 自定义变量</li><li>1： 凭据值</li></ul>
     * @param string $SecretRegion <p>凭据所在地域</p>
     * @param string $SecretName <p>凭据名称</p>
     * @param string $SecretVersionId <p>凭据版本</p>
     * @param integer $Type <p>变量值是否隐藏</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Remark <p>变量描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>变量创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatorUin <p>变量创建人</p>
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
        if (array_key_exists("SerialId",$param) and $param["SerialId"] !== null) {
            $this->SerialId = $param["SerialId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("ValueType",$param) and $param["ValueType"] !== null) {
            $this->ValueType = $param["ValueType"];
        }

        if (array_key_exists("SecretRegion",$param) and $param["SecretRegion"] !== null) {
            $this->SecretRegion = $param["SecretRegion"];
        }

        if (array_key_exists("SecretName",$param) and $param["SecretName"] !== null) {
            $this->SecretName = $param["SecretName"];
        }

        if (array_key_exists("SecretVersionId",$param) and $param["SecretVersionId"] !== null) {
            $this->SecretVersionId = $param["SecretVersionId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("CreatorUin",$param) and $param["CreatorUin"] !== null) {
            $this->CreatorUin = $param["CreatorUin"];
        }
    }
}
