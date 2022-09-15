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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUsersForUserManager返回参数结构体
 *
 * @method integer getTotalCnt() 获取总数
 * @method void setTotalCnt(integer $TotalCnt) 设置总数
 * @method array getUserManagerUserList() 获取用户信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserManagerUserList(array $UserManagerUserList) 设置用户信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeUsersForUserManagerResponse extends AbstractModel
{
    /**
     * @var integer 总数
     */
    public $TotalCnt;

    /**
     * @var array 用户信息列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserManagerUserList;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCnt 总数
     * @param array $UserManagerUserList 用户信息列表
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
        if (array_key_exists("TotalCnt",$param) and $param["TotalCnt"] !== null) {
            $this->TotalCnt = $param["TotalCnt"];
        }

        if (array_key_exists("UserManagerUserList",$param) and $param["UserManagerUserList"] !== null) {
            $this->UserManagerUserList = [];
            foreach ($param["UserManagerUserList"] as $key => $value){
                $obj = new UserManagerUserBriefInfo();
                $obj->deserialize($value);
                array_push($this->UserManagerUserList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
