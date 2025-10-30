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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 账户信息
 *
 * @method string getDBInstanceId() 获取实例ID，形如postgres-lnp6j617
 * @method void setDBInstanceId(string $DBInstanceId) 设置实例ID，形如postgres-lnp6j617
 * @method string getUserName() 获取账号
 * @method void setUserName(string $UserName) 设置账号
 * @method string getRemark() 获取账号备注
 * @method void setRemark(string $Remark) 设置账号备注
 * @method integer getStatus() 获取账号状态。 1-创建中，2-正常，3-修改中，4-密码重置中，5-锁定中，-1-删除中
 * @method void setStatus(integer $Status) 设置账号状态。 1-创建中，2-正常，3-修改中，4-密码重置中，5-锁定中，-1-删除中
 * @method string getCreateTime() 获取账号创建时间
 * @method void setCreateTime(string $CreateTime) 设置账号创建时间
 * @method string getUpdateTime() 获取账号最后一次更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置账号最后一次更新时间
 * @method string getPasswordUpdateTime() 获取账号密码最近一次修改时间。

此字段只在2025-10-31后才生效，之前无论是否修改密码，该值统一为默认值：0000-00-00 00:00:00
同时仅通过云API或者管控控制台修改密码，才会更新该字段。
 * @method void setPasswordUpdateTime(string $PasswordUpdateTime) 设置账号密码最近一次修改时间。

此字段只在2025-10-31后才生效，之前无论是否修改密码，该值统一为默认值：0000-00-00 00:00:00
同时仅通过云API或者管控控制台修改密码，才会更新该字段。
 * @method string getUserType() 获取账号类型。支持normal、tencentDBSuper。normal指代普通用户，tencentDBSuper为拥有pg_tencentdb_superuser角色的账号。
 * @method void setUserType(string $UserType) 设置账号类型。支持normal、tencentDBSuper。normal指代普通用户，tencentDBSuper为拥有pg_tencentdb_superuser角色的账号。
 * @method boolean getOpenCam() 获取用户账号是否启用CAM验证
 * @method void setOpenCam(boolean $OpenCam) 设置用户账号是否启用CAM验证
 */
class AccountInfo extends AbstractModel
{
    /**
     * @var string 实例ID，形如postgres-lnp6j617
     */
    public $DBInstanceId;

    /**
     * @var string 账号
     */
    public $UserName;

    /**
     * @var string 账号备注
     */
    public $Remark;

    /**
     * @var integer 账号状态。 1-创建中，2-正常，3-修改中，4-密码重置中，5-锁定中，-1-删除中
     */
    public $Status;

    /**
     * @var string 账号创建时间
     */
    public $CreateTime;

    /**
     * @var string 账号最后一次更新时间
     */
    public $UpdateTime;

    /**
     * @var string 账号密码最近一次修改时间。

此字段只在2025-10-31后才生效，之前无论是否修改密码，该值统一为默认值：0000-00-00 00:00:00
同时仅通过云API或者管控控制台修改密码，才会更新该字段。
     */
    public $PasswordUpdateTime;

    /**
     * @var string 账号类型。支持normal、tencentDBSuper。normal指代普通用户，tencentDBSuper为拥有pg_tencentdb_superuser角色的账号。
     */
    public $UserType;

    /**
     * @var boolean 用户账号是否启用CAM验证
     */
    public $OpenCam;

    /**
     * @param string $DBInstanceId 实例ID，形如postgres-lnp6j617
     * @param string $UserName 账号
     * @param string $Remark 账号备注
     * @param integer $Status 账号状态。 1-创建中，2-正常，3-修改中，4-密码重置中，5-锁定中，-1-删除中
     * @param string $CreateTime 账号创建时间
     * @param string $UpdateTime 账号最后一次更新时间
     * @param string $PasswordUpdateTime 账号密码最近一次修改时间。

此字段只在2025-10-31后才生效，之前无论是否修改密码，该值统一为默认值：0000-00-00 00:00:00
同时仅通过云API或者管控控制台修改密码，才会更新该字段。
     * @param string $UserType 账号类型。支持normal、tencentDBSuper。normal指代普通用户，tencentDBSuper为拥有pg_tencentdb_superuser角色的账号。
     * @param boolean $OpenCam 用户账号是否启用CAM验证
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
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("PasswordUpdateTime",$param) and $param["PasswordUpdateTime"] !== null) {
            $this->PasswordUpdateTime = $param["PasswordUpdateTime"];
        }

        if (array_key_exists("UserType",$param) and $param["UserType"] !== null) {
            $this->UserType = $param["UserType"];
        }

        if (array_key_exists("OpenCam",$param) and $param["OpenCam"] !== null) {
            $this->OpenCam = $param["OpenCam"];
        }
    }
}
