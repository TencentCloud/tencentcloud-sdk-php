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
 * 应用信息列表。
 *
 * @method array getApplicationAccounts() 获取用户在被授权应用下对应的账号列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationAccounts(array $ApplicationAccounts) 设置用户在被授权应用下对应的账号列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApplicationId() 获取应用ID，是应用的全局唯一标识。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationId(string $ApplicationId) 设置应用ID，是应用的全局唯一标识。
注意：此字段可能返回 null，表示取不到有效值。
 * @method InheritedForm getInheritedForm() 获取展示用户所在的用户组、机构节点拥有该应用的访问权限的ID信息列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInheritedForm(InheritedForm $InheritedForm) 设置展示用户所在的用户组、机构节点拥有该应用的访问权限的ID信息列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApplicationName() 获取应用名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationName(string $ApplicationName) 设置应用名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedDate() 获取应用创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedDate(string $CreatedDate) 设置应用创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 */
class ApplicationAuthorizationInfo extends AbstractModel
{
    /**
     * @var array 用户在被授权应用下对应的账号列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicationAccounts;

    /**
     * @var string 应用ID，是应用的全局唯一标识。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicationId;

    /**
     * @var InheritedForm 展示用户所在的用户组、机构节点拥有该应用的访问权限的ID信息列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InheritedForm;

    /**
     * @var string 应用名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicationName;

    /**
     * @var string 应用创建时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedDate;

    /**
     * @param array $ApplicationAccounts 用户在被授权应用下对应的账号列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApplicationId 应用ID，是应用的全局唯一标识。
注意：此字段可能返回 null，表示取不到有效值。
     * @param InheritedForm $InheritedForm 展示用户所在的用户组、机构节点拥有该应用的访问权限的ID信息列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApplicationName 应用名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedDate 应用创建时间。
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
        if (array_key_exists("ApplicationAccounts",$param) and $param["ApplicationAccounts"] !== null) {
            $this->ApplicationAccounts = $param["ApplicationAccounts"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("InheritedForm",$param) and $param["InheritedForm"] !== null) {
            $this->InheritedForm = new InheritedForm();
            $this->InheritedForm->deserialize($param["InheritedForm"]);
        }

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }

        if (array_key_exists("CreatedDate",$param) and $param["CreatedDate"] !== null) {
            $this->CreatedDate = $param["CreatedDate"];
        }
    }
}
