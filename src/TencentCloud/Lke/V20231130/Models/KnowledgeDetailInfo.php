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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 知识库详情信息
 *
 * @method KnowledgeBaseInfo getKnowledge() 获取知识库信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKnowledge(KnowledgeBaseInfo $Knowledge) 设置知识库信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAppList() 获取应用列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppList(array $AppList) 设置应用列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method UserBaseInfo getUser() 获取用户信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUser(UserBaseInfo $User) 设置用户信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPermissionIds() 获取权限位信息
 * @method void setPermissionIds(array $PermissionIds) 设置权限位信息
 */
class KnowledgeDetailInfo extends AbstractModel
{
    /**
     * @var KnowledgeBaseInfo 知识库信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Knowledge;

    /**
     * @var array 应用列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppList;

    /**
     * @var UserBaseInfo 用户信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $User;

    /**
     * @var array 权限位信息
     */
    public $PermissionIds;

    /**
     * @param KnowledgeBaseInfo $Knowledge 知识库信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AppList 应用列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param UserBaseInfo $User 用户信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PermissionIds 权限位信息
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
        if (array_key_exists("Knowledge",$param) and $param["Knowledge"] !== null) {
            $this->Knowledge = new KnowledgeBaseInfo();
            $this->Knowledge->deserialize($param["Knowledge"]);
        }

        if (array_key_exists("AppList",$param) and $param["AppList"] !== null) {
            $this->AppList = [];
            foreach ($param["AppList"] as $key => $value){
                $obj = new AppBaseInfo();
                $obj->deserialize($value);
                array_push($this->AppList, $obj);
            }
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = new UserBaseInfo();
            $this->User->deserialize($param["User"]);
        }

        if (array_key_exists("PermissionIds",$param) and $param["PermissionIds"] !== null) {
            $this->PermissionIds = $param["PermissionIds"];
        }
    }
}
