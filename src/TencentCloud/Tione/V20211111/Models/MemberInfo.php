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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 空间成员信息
 *
 * @method array getSuperAdmins() 获取<p>超管成员列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuperAdmins(array $SuperAdmins) 设置<p>超管成员列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAdmins() 获取<p>空间内管理员列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdmins(array $Admins) 设置<p>空间内管理员列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class MemberInfo extends AbstractModel
{
    /**
     * @var array <p>超管成员列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SuperAdmins;

    /**
     * @var array <p>空间内管理员列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Admins;

    /**
     * @param array $SuperAdmins <p>超管成员列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Admins <p>空间内管理员列表</p>
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
        if (array_key_exists("SuperAdmins",$param) and $param["SuperAdmins"] !== null) {
            $this->SuperAdmins = [];
            foreach ($param["SuperAdmins"] as $key => $value){
                $obj = new UserBriefInfo();
                $obj->deserialize($value);
                array_push($this->SuperAdmins, $obj);
            }
        }

        if (array_key_exists("Admins",$param) and $param["Admins"] !== null) {
            $this->Admins = [];
            foreach ($param["Admins"] as $key => $value){
                $obj = new UserBriefInfo();
                $obj->deserialize($value);
                array_push($this->Admins, $obj);
            }
        }
    }
}
