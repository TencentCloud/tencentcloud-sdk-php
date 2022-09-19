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
 * 用户信息
 *
 * @method integer getId() 获取用户ID
 * @method void setId(integer $Id) 设置用户ID
 * @method UserSubInfo getAuthenticationUserInfo() 获取用户验证信息
 * @method void setAuthenticationUserInfo(UserSubInfo $AuthenticationUserInfo) 设置用户验证信息
 * @method string getAvatar() 获取头像地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAvatar(string $Avatar) 设置头像地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFeatures() 获取介绍
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFeatures(string $Features) 设置介绍
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPreviewStatus() 获取状况
 * @method void setPreviewStatus(integer $PreviewStatus) 设置状况
 */
class UserInfoRsp extends AbstractModel
{
    /**
     * @var integer 用户ID
     */
    public $Id;

    /**
     * @var UserSubInfo 用户验证信息
     */
    public $AuthenticationUserInfo;

    /**
     * @var string 头像地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Avatar;

    /**
     * @var string 介绍
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Features;

    /**
     * @var integer 状况
     */
    public $PreviewStatus;

    /**
     * @param integer $Id 用户ID
     * @param UserSubInfo $AuthenticationUserInfo 用户验证信息
     * @param string $Avatar 头像地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Features 介绍
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PreviewStatus 状况
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("AuthenticationUserInfo",$param) and $param["AuthenticationUserInfo"] !== null) {
            $this->AuthenticationUserInfo = new UserSubInfo();
            $this->AuthenticationUserInfo->deserialize($param["AuthenticationUserInfo"]);
        }

        if (array_key_exists("Avatar",$param) and $param["Avatar"] !== null) {
            $this->Avatar = $param["Avatar"];
        }

        if (array_key_exists("Features",$param) and $param["Features"] !== null) {
            $this->Features = $param["Features"];
        }

        if (array_key_exists("PreviewStatus",$param) and $param["PreviewStatus"] !== null) {
            $this->PreviewStatus = $param["PreviewStatus"];
        }
    }
}
