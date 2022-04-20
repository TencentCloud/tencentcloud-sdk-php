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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户部分信息
 *
 * @method string getUserId() 获取用户Id，和CAM侧子用户Uin匹配
 * @method void setUserId(string $UserId) 设置用户Id，和CAM侧子用户Uin匹配
 * @method string getUserDescription() 获取用户描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserDescription(string $UserDescription) 设置用户描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreator() 获取当前用户的创建者
 * @method void setCreator(string $Creator) 设置当前用户的创建者
 * @method string getCreateTime() 获取当前用户的创建时间，形如2021-07-28 16:19:32
 * @method void setCreateTime(string $CreateTime) 设置当前用户的创建时间，形如2021-07-28 16:19:32
 * @method string getUserAlias() 获取用户别名
 * @method void setUserAlias(string $UserAlias) 设置用户别名
 */
class UserMessage extends AbstractModel
{
    /**
     * @var string 用户Id，和CAM侧子用户Uin匹配
     */
    public $UserId;

    /**
     * @var string 用户描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserDescription;

    /**
     * @var string 当前用户的创建者
     */
    public $Creator;

    /**
     * @var string 当前用户的创建时间，形如2021-07-28 16:19:32
     */
    public $CreateTime;

    /**
     * @var string 用户别名
     */
    public $UserAlias;

    /**
     * @param string $UserId 用户Id，和CAM侧子用户Uin匹配
     * @param string $UserDescription 用户描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Creator 当前用户的创建者
     * @param string $CreateTime 当前用户的创建时间，形如2021-07-28 16:19:32
     * @param string $UserAlias 用户别名
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("UserDescription",$param) and $param["UserDescription"] !== null) {
            $this->UserDescription = $param["UserDescription"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UserAlias",$param) and $param["UserAlias"] !== null) {
            $this->UserAlias = $param["UserAlias"];
        }
    }
}
