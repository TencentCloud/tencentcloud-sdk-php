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
 * @method string getDBInstanceId() 获取<p>实例ID，形如postgres-lnp6j617</p>
 * @method void setDBInstanceId(string $DBInstanceId) 设置<p>实例ID，形如postgres-lnp6j617</p>
 * @method string getUserName() 获取<p>账号</p>
 * @method void setUserName(string $UserName) 设置<p>账号</p>
 * @method string getRemark() 获取<p>账号备注</p>
 * @method void setRemark(string $Remark) 设置<p>账号备注</p>
 * @method integer getStatus() 获取<p>账号状态。 1-创建中，2-正常，3-修改中，4-密码重置中，5-锁定中，-1-删除中</p>
 * @method void setStatus(integer $Status) 设置<p>账号状态。 1-创建中，2-正常，3-修改中，4-密码重置中，5-锁定中，-1-删除中</p>
 * @method string getCreateTime() 获取<p>账号创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>账号创建时间</p>
 * @method string getUpdateTime() 获取<p>账号最后一次更新时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>账号最后一次更新时间</p>
 * @method string getPasswordUpdateTime() 获取<p>账号密码最近一次修改时间。</p><p>此字段只在2025-10-31后才生效，之前无论是否修改密码，该值统一为默认值：0000-00-00 00:00:00<br>同时仅通过云API或者管控控制台修改密码，才会更新该字段。</p>
 * @method void setPasswordUpdateTime(string $PasswordUpdateTime) 设置<p>账号密码最近一次修改时间。</p><p>此字段只在2025-10-31后才生效，之前无论是否修改密码，该值统一为默认值：0000-00-00 00:00:00<br>同时仅通过云API或者管控控制台修改密码，才会更新该字段。</p>
 * @method string getUserType() 获取<p>账号类型。支持normal、tencentDBSuper。normal指代普通用户，tencentDBSuper为拥有pg_tencentdb_superuser角色的账号。</p>
 * @method void setUserType(string $UserType) 设置<p>账号类型。支持normal、tencentDBSuper。normal指代普通用户，tencentDBSuper为拥有pg_tencentdb_superuser角色的账号。</p>
 * @method boolean getOpenCam() 获取<p>用户账号是否启用CAM验证</p>
 * @method void setOpenCam(boolean $OpenCam) 设置<p>用户账号是否启用CAM验证</p>
 * @method array getPGRoles() 获取<p>该账号实际加入了哪些预设角色</p>
 * @method void setPGRoles(array $PGRoles) 设置<p>该账号实际加入了哪些预设角色</p>
 */
class AccountInfo extends AbstractModel
{
    /**
     * @var string <p>实例ID，形如postgres-lnp6j617</p>
     */
    public $DBInstanceId;

    /**
     * @var string <p>账号</p>
     */
    public $UserName;

    /**
     * @var string <p>账号备注</p>
     */
    public $Remark;

    /**
     * @var integer <p>账号状态。 1-创建中，2-正常，3-修改中，4-密码重置中，5-锁定中，-1-删除中</p>
     */
    public $Status;

    /**
     * @var string <p>账号创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>账号最后一次更新时间</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>账号密码最近一次修改时间。</p><p>此字段只在2025-10-31后才生效，之前无论是否修改密码，该值统一为默认值：0000-00-00 00:00:00<br>同时仅通过云API或者管控控制台修改密码，才会更新该字段。</p>
     */
    public $PasswordUpdateTime;

    /**
     * @var string <p>账号类型。支持normal、tencentDBSuper。normal指代普通用户，tencentDBSuper为拥有pg_tencentdb_superuser角色的账号。</p>
     */
    public $UserType;

    /**
     * @var boolean <p>用户账号是否启用CAM验证</p>
     */
    public $OpenCam;

    /**
     * @var array <p>该账号实际加入了哪些预设角色</p>
     */
    public $PGRoles;

    /**
     * @param string $DBInstanceId <p>实例ID，形如postgres-lnp6j617</p>
     * @param string $UserName <p>账号</p>
     * @param string $Remark <p>账号备注</p>
     * @param integer $Status <p>账号状态。 1-创建中，2-正常，3-修改中，4-密码重置中，5-锁定中，-1-删除中</p>
     * @param string $CreateTime <p>账号创建时间</p>
     * @param string $UpdateTime <p>账号最后一次更新时间</p>
     * @param string $PasswordUpdateTime <p>账号密码最近一次修改时间。</p><p>此字段只在2025-10-31后才生效，之前无论是否修改密码，该值统一为默认值：0000-00-00 00:00:00<br>同时仅通过云API或者管控控制台修改密码，才会更新该字段。</p>
     * @param string $UserType <p>账号类型。支持normal、tencentDBSuper。normal指代普通用户，tencentDBSuper为拥有pg_tencentdb_superuser角色的账号。</p>
     * @param boolean $OpenCam <p>用户账号是否启用CAM验证</p>
     * @param array $PGRoles <p>该账号实际加入了哪些预设角色</p>
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

        if (array_key_exists("PGRoles",$param) and $param["PGRoles"] !== null) {
            $this->PGRoles = $param["PGRoles"];
        }
    }
}
