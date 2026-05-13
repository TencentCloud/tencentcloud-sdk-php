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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 审批单信息
 *
 * @method string getOrderId() 获取对应申请单id
 * @method void setOrderId(string $OrderId) 设置对应申请单id
 * @method string getIdentifyId() 获取身份id。
 * @method void setIdentifyId(string $IdentifyId) 设置身份id。
 * @method DspmUinUser getApplicantUin() 获取申请人账号uin
 * @method void setApplicantUin(DspmUinUser $ApplicantUin) 设置申请人账号uin
 * @method string getAssetId() 获取资产id
 * @method void setAssetId(string $AssetId) 设置资产id
 * @method string getAssetName() 获取资产名
 * @method void setAssetName(string $AssetName) 设置资产名
 * @method integer getApplyType() 获取申请类型。0-关联身份 1-编辑身份 2-创建临时身份
 * @method void setApplyType(integer $ApplyType) 设置申请类型。0-关联身份 1-编辑身份 2-创建临时身份
 * @method DspmDbAccountPrivilege getPrivilege() 获取申请权限
 * @method void setPrivilege(DspmDbAccountPrivilege $Privilege) 设置申请权限
 * @method integer getValidatePeriod() 获取从审批完成后开始计算的访问权限失效时间，临时账号有效。单位毫秒。
 * @method void setValidatePeriod(integer $ValidatePeriod) 设置从审批完成后开始计算的访问权限失效时间，临时账号有效。单位毫秒。
 * @method string getReason() 获取申请原因
 * @method void setReason(string $Reason) 设置申请原因
 * @method integer getManagerType() 获取管理类型。0-普通成员 1-管理员
 * @method void setManagerType(integer $ManagerType) 设置管理类型。0-普通成员 1-管理员
 * @method DspmPersonUser getPerson() 获取个人用户信息
 * @method void setPerson(DspmPersonUser $Person) 设置个人用户信息
 * @method DspmUinUser getSubjectUser() 获取云账号用户信息
 * @method void setSubjectUser(DspmUinUser $SubjectUser) 设置云账号用户信息
 * @method string getCreateTime() 获取对应申请单创建时间。
 * @method void setCreateTime(string $CreateTime) 设置对应申请单创建时间。
 */
class DspmApproverOrder extends AbstractModel
{
    /**
     * @var string 对应申请单id
     */
    public $OrderId;

    /**
     * @var string 身份id。
     */
    public $IdentifyId;

    /**
     * @var DspmUinUser 申请人账号uin
     */
    public $ApplicantUin;

    /**
     * @var string 资产id
     */
    public $AssetId;

    /**
     * @var string 资产名
     */
    public $AssetName;

    /**
     * @var integer 申请类型。0-关联身份 1-编辑身份 2-创建临时身份
     */
    public $ApplyType;

    /**
     * @var DspmDbAccountPrivilege 申请权限
     */
    public $Privilege;

    /**
     * @var integer 从审批完成后开始计算的访问权限失效时间，临时账号有效。单位毫秒。
     */
    public $ValidatePeriod;

    /**
     * @var string 申请原因
     */
    public $Reason;

    /**
     * @var integer 管理类型。0-普通成员 1-管理员
     */
    public $ManagerType;

    /**
     * @var DspmPersonUser 个人用户信息
     */
    public $Person;

    /**
     * @var DspmUinUser 云账号用户信息
     */
    public $SubjectUser;

    /**
     * @var string 对应申请单创建时间。
     */
    public $CreateTime;

    /**
     * @param string $OrderId 对应申请单id
     * @param string $IdentifyId 身份id。
     * @param DspmUinUser $ApplicantUin 申请人账号uin
     * @param string $AssetId 资产id
     * @param string $AssetName 资产名
     * @param integer $ApplyType 申请类型。0-关联身份 1-编辑身份 2-创建临时身份
     * @param DspmDbAccountPrivilege $Privilege 申请权限
     * @param integer $ValidatePeriod 从审批完成后开始计算的访问权限失效时间，临时账号有效。单位毫秒。
     * @param string $Reason 申请原因
     * @param integer $ManagerType 管理类型。0-普通成员 1-管理员
     * @param DspmPersonUser $Person 个人用户信息
     * @param DspmUinUser $SubjectUser 云账号用户信息
     * @param string $CreateTime 对应申请单创建时间。
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
        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("IdentifyId",$param) and $param["IdentifyId"] !== null) {
            $this->IdentifyId = $param["IdentifyId"];
        }

        if (array_key_exists("ApplicantUin",$param) and $param["ApplicantUin"] !== null) {
            $this->ApplicantUin = new DspmUinUser();
            $this->ApplicantUin->deserialize($param["ApplicantUin"]);
        }

        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("AssetName",$param) and $param["AssetName"] !== null) {
            $this->AssetName = $param["AssetName"];
        }

        if (array_key_exists("ApplyType",$param) and $param["ApplyType"] !== null) {
            $this->ApplyType = $param["ApplyType"];
        }

        if (array_key_exists("Privilege",$param) and $param["Privilege"] !== null) {
            $this->Privilege = new DspmDbAccountPrivilege();
            $this->Privilege->deserialize($param["Privilege"]);
        }

        if (array_key_exists("ValidatePeriod",$param) and $param["ValidatePeriod"] !== null) {
            $this->ValidatePeriod = $param["ValidatePeriod"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("ManagerType",$param) and $param["ManagerType"] !== null) {
            $this->ManagerType = $param["ManagerType"];
        }

        if (array_key_exists("Person",$param) and $param["Person"] !== null) {
            $this->Person = new DspmPersonUser();
            $this->Person->deserialize($param["Person"]);
        }

        if (array_key_exists("SubjectUser",$param) and $param["SubjectUser"] !== null) {
            $this->SubjectUser = new DspmUinUser();
            $this->SubjectUser->deserialize($param["SubjectUser"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
