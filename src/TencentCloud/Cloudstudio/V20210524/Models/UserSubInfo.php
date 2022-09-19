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
 * 用户验证信息
 *
 * @method string getTeam() 获取团队名称
 * @method void setTeam(string $Team) 设置团队名称
 * @method string getUserName() 获取用户名
 * @method void setUserName(string $UserName) 设置用户名
 * @method string getNickName() 获取昵称
 * @method void setNickName(string $NickName) 设置昵称
 * @method boolean getIsAdmin() 获取是否为管理员
 * @method void setIsAdmin(boolean $IsAdmin) 设置是否为管理员
 * @method boolean getIsTrial() 获取xxx
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsTrial(boolean $IsTrial) 设置xxx
注意：此字段可能返回 null，表示取不到有效值。
 */
class UserSubInfo extends AbstractModel
{
    /**
     * @var string 团队名称
     */
    public $Team;

    /**
     * @var string 用户名
     */
    public $UserName;

    /**
     * @var string 昵称
     */
    public $NickName;

    /**
     * @var boolean 是否为管理员
     */
    public $IsAdmin;

    /**
     * @var boolean xxx
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsTrial;

    /**
     * @param string $Team 团队名称
     * @param string $UserName 用户名
     * @param string $NickName 昵称
     * @param boolean $IsAdmin 是否为管理员
     * @param boolean $IsTrial xxx
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
        if (array_key_exists("Team",$param) and $param["Team"] !== null) {
            $this->Team = $param["Team"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }

        if (array_key_exists("IsAdmin",$param) and $param["IsAdmin"] !== null) {
            $this->IsAdmin = $param["IsAdmin"];
        }

        if (array_key_exists("IsTrial",$param) and $param["IsTrial"] !== null) {
            $this->IsTrial = $param["IsTrial"];
        }
    }
}
