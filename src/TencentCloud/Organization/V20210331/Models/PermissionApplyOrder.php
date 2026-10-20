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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 权限申请单，描述一张完整的权限申请工单，即谁（UserId/UserName）向哪个成员账号（TargetUin/TargetName）申请了哪些权限配置（RoleConfigurations），以及审批进展如何
 *
 * @method string getApplyId() 获取<p>申请单 ID</p>
 * @method void setApplyId(string $ApplyId) 设置<p>申请单 ID</p>
 * @method string getUserId() 获取<p>申请人用户 ID</p>
 * @method void setUserId(string $UserId) 设置<p>申请人用户 ID</p>
 * @method string getUserName() 获取<p>申请人用户名</p>
 * @method void setUserName(string $UserName) 设置<p>申请人用户名</p>
 * @method integer getTargetUin() 获取<p>目标成员账号 UIN</p>
 * @method void setTargetUin(integer $TargetUin) 设置<p>目标成员账号 UIN</p>
 * @method string getTargetName() 获取<p>目标成员账号名称</p>
 * @method void setTargetName(string $TargetName) 设置<p>目标成员账号名称</p>
 * @method array getRoleConfigurations() 获取<p>申请的权限配置</p>
 * @method void setRoleConfigurations(array $RoleConfigurations) 设置<p>申请的权限配置</p>
 * @method integer getStatus() 获取<p>申请单状态</p><p>枚举值：</p><ul><li>1： 待审核</li><li>2： 已通过 - 同步中</li><li>3： 已通过 - 同步成功</li><li>4： 已通过 - 同步失败</li><li>5： 已拒绝</li></ul>
 * @method void setStatus(integer $Status) 设置<p>申请单状态</p><p>枚举值：</p><ul><li>1： 待审核</li><li>2： 已通过 - 同步中</li><li>3： 已通过 - 同步成功</li><li>4： 已通过 - 同步失败</li><li>5： 已拒绝</li></ul>
 * @method string getCreateTime() 获取<p>创建时间</p><p>参数格式：YYYY-M-DD hh:mm:ss</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p><p>参数格式：YYYY-M-DD hh:mm:ss</p>
 * @method string getAuditOpinion() 获取<p>审批意见</p>
 * @method void setAuditOpinion(string $AuditOpinion) 设置<p>审批意见</p>
 * @method string getAuditTime() 获取<p>审批时间</p><p>参数格式：YYYY-M-DD hh:mm:ss</p><p>未审批为空</p>
 * @method void setAuditTime(string $AuditTime) 设置<p>审批时间</p><p>参数格式：YYYY-M-DD hh:mm:ss</p><p>未审批为空</p>
 */
class PermissionApplyOrder extends AbstractModel
{
    /**
     * @var string <p>申请单 ID</p>
     */
    public $ApplyId;

    /**
     * @var string <p>申请人用户 ID</p>
     */
    public $UserId;

    /**
     * @var string <p>申请人用户名</p>
     */
    public $UserName;

    /**
     * @var integer <p>目标成员账号 UIN</p>
     */
    public $TargetUin;

    /**
     * @var string <p>目标成员账号名称</p>
     */
    public $TargetName;

    /**
     * @var array <p>申请的权限配置</p>
     */
    public $RoleConfigurations;

    /**
     * @var integer <p>申请单状态</p><p>枚举值：</p><ul><li>1： 待审核</li><li>2： 已通过 - 同步中</li><li>3： 已通过 - 同步成功</li><li>4： 已通过 - 同步失败</li><li>5： 已拒绝</li></ul>
     */
    public $Status;

    /**
     * @var string <p>创建时间</p><p>参数格式：YYYY-M-DD hh:mm:ss</p>
     */
    public $CreateTime;

    /**
     * @var string <p>审批意见</p>
     */
    public $AuditOpinion;

    /**
     * @var string <p>审批时间</p><p>参数格式：YYYY-M-DD hh:mm:ss</p><p>未审批为空</p>
     */
    public $AuditTime;

    /**
     * @param string $ApplyId <p>申请单 ID</p>
     * @param string $UserId <p>申请人用户 ID</p>
     * @param string $UserName <p>申请人用户名</p>
     * @param integer $TargetUin <p>目标成员账号 UIN</p>
     * @param string $TargetName <p>目标成员账号名称</p>
     * @param array $RoleConfigurations <p>申请的权限配置</p>
     * @param integer $Status <p>申请单状态</p><p>枚举值：</p><ul><li>1： 待审核</li><li>2： 已通过 - 同步中</li><li>3： 已通过 - 同步成功</li><li>4： 已通过 - 同步失败</li><li>5： 已拒绝</li></ul>
     * @param string $CreateTime <p>创建时间</p><p>参数格式：YYYY-M-DD hh:mm:ss</p>
     * @param string $AuditOpinion <p>审批意见</p>
     * @param string $AuditTime <p>审批时间</p><p>参数格式：YYYY-M-DD hh:mm:ss</p><p>未审批为空</p>
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
        if (array_key_exists("ApplyId",$param) and $param["ApplyId"] !== null) {
            $this->ApplyId = $param["ApplyId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("TargetUin",$param) and $param["TargetUin"] !== null) {
            $this->TargetUin = $param["TargetUin"];
        }

        if (array_key_exists("TargetName",$param) and $param["TargetName"] !== null) {
            $this->TargetName = $param["TargetName"];
        }

        if (array_key_exists("RoleConfigurations",$param) and $param["RoleConfigurations"] !== null) {
            $this->RoleConfigurations = [];
            foreach ($param["RoleConfigurations"] as $key => $value){
                $obj = new ApplyRoleConfiguration();
                $obj->deserialize($value);
                array_push($this->RoleConfigurations, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("AuditOpinion",$param) and $param["AuditOpinion"] !== null) {
            $this->AuditOpinion = $param["AuditOpinion"];
        }

        if (array_key_exists("AuditTime",$param) and $param["AuditTime"] !== null) {
            $this->AuditTime = $param["AuditTime"];
        }
    }
}
