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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 商业化版本权限分组
 *
 * @method string getModuleGroup() 获取分组名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModuleGroup(string $ModuleGroup) 设置分组名
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getComponents() 获取权限列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComponents(array $Components) 设置权限列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class PermissionGroup extends AbstractModel
{
    /**
     * @var string 分组名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModuleGroup;

    /**
     * @var array 权限列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Components;

    /**
     * @param string $ModuleGroup 分组名
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Components 权限列表
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
        if (array_key_exists("ModuleGroup",$param) and $param["ModuleGroup"] !== null) {
            $this->ModuleGroup = $param["ModuleGroup"];
        }

        if (array_key_exists("Components",$param) and $param["Components"] !== null) {
            $this->Components = [];
            foreach ($param["Components"] as $key => $value){
                $obj = new PermissionComponent();
                $obj->deserialize($value);
                array_push($this->Components, $obj);
            }
        }
    }
}
