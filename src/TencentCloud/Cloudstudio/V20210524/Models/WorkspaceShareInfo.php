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
namespace TencentCloud\Cloudstudio\V20210524\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户空间共享信息
 *
 * @method boolean getStatus() 获取共享或不共享状态
 * @method void setStatus(boolean $Status) 设置共享或不共享状态
 * @method boolean getWithMe() 获取是否与我共享
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWithMe(boolean $WithMe) 设置是否与我共享
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBeginDate() 获取开始共享的时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBeginDate(string $BeginDate) 设置开始共享的时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndDate() 获取停止共享的时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndDate(string $EndDate) 设置停止共享的时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getUsers() 获取停止共享的时间
 * @method void setUsers(array $Users) 设置停止共享的时间
 */
class WorkspaceShareInfo extends AbstractModel
{
    /**
     * @var boolean 共享或不共享状态
     */
    public $Status;

    /**
     * @var boolean 是否与我共享
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WithMe;

    /**
     * @var string 开始共享的时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BeginDate;

    /**
     * @var string 停止共享的时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndDate;

    /**
     * @var array 停止共享的时间
     */
    public $Users;

    /**
     * @param boolean $Status 共享或不共享状态
     * @param boolean $WithMe 是否与我共享
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BeginDate 开始共享的时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndDate 停止共享的时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Users 停止共享的时间
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("WithMe",$param) and $param["WithMe"] !== null) {
            $this->WithMe = $param["WithMe"];
        }

        if (array_key_exists("BeginDate",$param) and $param["BeginDate"] !== null) {
            $this->BeginDate = $param["BeginDate"];
        }

        if (array_key_exists("EndDate",$param) and $param["EndDate"] !== null) {
            $this->EndDate = $param["EndDate"];
        }

        if (array_key_exists("Users",$param) and $param["Users"] !== null) {
            $this->Users = [];
            foreach ($param["Users"] as $key => $value){
                $obj = new UserInfoRsp();
                $obj->deserialize($value);
                array_push($this->Users, $obj);
            }
        }
    }
}
