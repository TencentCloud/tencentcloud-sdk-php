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
 * 用户管理中用户的简要信息
 *
 * @method string getUserName() 获取用户名
 * @method void setUserName(string $UserName) 设置用户名
 * @method string getUserGroup() 获取用户所属的组
 * @method void setUserGroup(string $UserGroup) 设置用户所属的组
 * @method string getUserType() 获取Manager表示管理员、NormalUser表示普通用户
 * @method void setUserType(string $UserType) 设置Manager表示管理员、NormalUser表示普通用户
 * @method string getCreateTime() 获取用户创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置用户创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSupportDownLoadKeyTab() 获取是否可以下载用户对应的keytab文件，对开启kerberos的集群才有意义
 * @method void setSupportDownLoadKeyTab(boolean $SupportDownLoadKeyTab) 设置是否可以下载用户对应的keytab文件，对开启kerberos的集群才有意义
 * @method string getDownLoadKeyTabUrl() 获取keytab文件的下载地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDownLoadKeyTabUrl(string $DownLoadKeyTabUrl) 设置keytab文件的下载地址
注意：此字段可能返回 null，表示取不到有效值。
 */
class UserManagerUserBriefInfo extends AbstractModel
{
    /**
     * @var string 用户名
     */
    public $UserName;

    /**
     * @var string 用户所属的组
     */
    public $UserGroup;

    /**
     * @var string Manager表示管理员、NormalUser表示普通用户
     */
    public $UserType;

    /**
     * @var string 用户创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var boolean 是否可以下载用户对应的keytab文件，对开启kerberos的集群才有意义
     */
    public $SupportDownLoadKeyTab;

    /**
     * @var string keytab文件的下载地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DownLoadKeyTabUrl;

    /**
     * @param string $UserName 用户名
     * @param string $UserGroup 用户所属的组
     * @param string $UserType Manager表示管理员、NormalUser表示普通用户
     * @param string $CreateTime 用户创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $SupportDownLoadKeyTab 是否可以下载用户对应的keytab文件，对开启kerberos的集群才有意义
     * @param string $DownLoadKeyTabUrl keytab文件的下载地址
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
        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("UserGroup",$param) and $param["UserGroup"] !== null) {
            $this->UserGroup = $param["UserGroup"];
        }

        if (array_key_exists("UserType",$param) and $param["UserType"] !== null) {
            $this->UserType = $param["UserType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("SupportDownLoadKeyTab",$param) and $param["SupportDownLoadKeyTab"] !== null) {
            $this->SupportDownLoadKeyTab = $param["SupportDownLoadKeyTab"];
        }

        if (array_key_exists("DownLoadKeyTabUrl",$param) and $param["DownLoadKeyTabUrl"] !== null) {
            $this->DownLoadKeyTabUrl = $param["DownLoadKeyTabUrl"];
        }
    }
}
