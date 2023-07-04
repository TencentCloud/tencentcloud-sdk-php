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
namespace TencentCloud\Ciam\V20220331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 删除用户组信息时返回的详情
 *
 * @method string getErrorMessage() 获取错误详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorMessage(string $ErrorMessage) 设置错误详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAppAssociatedUserGroupIds() 获取用户组关联的应用信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppAssociatedUserGroupIds(array $AppAssociatedUserGroupIds) 设置用户组关联的应用信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class UserGroupDeleteResp extends AbstractModel
{
    /**
     * @var string 错误详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorMessage;

    /**
     * @var array 用户组关联的应用信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppAssociatedUserGroupIds;

    /**
     * @param string $ErrorMessage 错误详情
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AppAssociatedUserGroupIds 用户组关联的应用信息
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
        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("AppAssociatedUserGroupIds",$param) and $param["AppAssociatedUserGroupIds"] !== null) {
            $this->AppAssociatedUserGroupIds = [];
            foreach ($param["AppAssociatedUserGroupIds"] as $key => $value){
                $obj = new AppAssociatedUserGroupIds();
                $obj->deserialize($value);
                array_push($this->AppAssociatedUserGroupIds, $obj);
            }
        }
    }
}
