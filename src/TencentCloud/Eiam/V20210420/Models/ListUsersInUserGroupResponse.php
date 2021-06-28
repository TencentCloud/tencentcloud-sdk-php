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
 * ListUsersInUserGroup返回参数结构体
 *
 * @method string getUserGroupId() 获取用户组ID，是用户组的全局唯一标识。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserGroupId(string $UserGroupId) 设置用户组ID，是用户组的全局唯一标识。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getUserInfo() 获取返回的用户信息列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserInfo(array $UserInfo) 设置返回的用户信息列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalNum() 获取返回的用户信息总数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalNum(integer $TotalNum) 设置返回的用户信息总数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class ListUsersInUserGroupResponse extends AbstractModel
{
    /**
     * @var string 用户组ID，是用户组的全局唯一标识。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserGroupId;

    /**
     * @var array 返回的用户信息列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserInfo;

    /**
     * @var integer 返回的用户信息总数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalNum;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $UserGroupId 用户组ID，是用户组的全局唯一标识。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $UserInfo 返回的用户信息列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalNum 返回的用户信息总数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("UserGroupId",$param) and $param["UserGroupId"] !== null) {
            $this->UserGroupId = $param["UserGroupId"];
        }

        if (array_key_exists("UserInfo",$param) and $param["UserInfo"] !== null) {
            $this->UserInfo = [];
            foreach ($param["UserInfo"] as $key => $value){
                $obj = new UserInfo();
                $obj->deserialize($value);
                array_push($this->UserInfo, $obj);
            }
        }

        if (array_key_exists("TotalNum",$param) and $param["TotalNum"] !== null) {
            $this->TotalNum = $param["TotalNum"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
