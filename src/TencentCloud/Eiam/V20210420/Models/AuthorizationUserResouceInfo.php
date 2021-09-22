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
namespace TencentCloud\Eiam\V20210420\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 返回符合条件的用户数据列表
 *
 * @method string getResourceId() 获取资源ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceId(string $ResourceId) 设置资源ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceType() 获取资源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceType(string $ResourceType) 设置资源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResource() 获取授权资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResource(string $Resource) 设置授权资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method InheritedForm getInheritedForm() 获取继承关系
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInheritedForm(InheritedForm $InheritedForm) 设置继承关系
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getApplicationAccounts() 获取应用账户
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationAccounts(array $ApplicationAccounts) 设置应用账户
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceName() 获取资源名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceName(string $ResourceName) 设置资源名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class AuthorizationUserResouceInfo extends AbstractModel
{
    /**
     * @var string 资源ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceId;

    /**
     * @var string 资源类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceType;

    /**
     * @var string 授权资源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Resource;

    /**
     * @var InheritedForm 继承关系
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InheritedForm;

    /**
     * @var array 应用账户
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicationAccounts;

    /**
     * @var string 资源名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceName;

    /**
     * @param string $ResourceId 资源ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceType 资源类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Resource 授权资源
注意：此字段可能返回 null，表示取不到有效值。
     * @param InheritedForm $InheritedForm 继承关系
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ApplicationAccounts 应用账户
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceName 资源名称
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = $param["Resource"];
        }

        if (array_key_exists("InheritedForm",$param) and $param["InheritedForm"] !== null) {
            $this->InheritedForm = new InheritedForm();
            $this->InheritedForm->deserialize($param["InheritedForm"]);
        }

        if (array_key_exists("ApplicationAccounts",$param) and $param["ApplicationAccounts"] !== null) {
            $this->ApplicationAccounts = $param["ApplicationAccounts"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }
    }
}
