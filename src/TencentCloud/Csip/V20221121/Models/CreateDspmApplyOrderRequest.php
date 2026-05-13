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
 * CreateDspmApplyOrder请求参数结构体
 *
 * @method string getAssetId() 获取资产id
 * @method void setAssetId(string $AssetId) 设置资产id
 * @method integer getApplyType() 获取申请类型。0-子账号授权 1-访客授权。
 * @method void setApplyType(integer $ApplyType) 设置申请类型。0-子账号授权 1-访客授权。
 * @method DspmDbAccountPrivilege getPrivilege() 获取权限信息。
 * @method void setPrivilege(DspmDbAccountPrivilege $Privilege) 设置权限信息。
 * @method string getHost() 获取主机地址。当前仅支持'%'。默认'%'。
 * @method void setHost(string $Host) 设置主机地址。当前仅支持'%'。默认'%'。
 * @method integer getValidatePeriod() 获取从审批完成后开始计算的访问权限失效时间，临时账号有效。单位毫秒。
 * @method void setValidatePeriod(integer $ValidatePeriod) 设置从审批完成后开始计算的访问权限失效时间，临时账号有效。单位毫秒。
 * @method array getApproverUin() 获取审批人列表。为空使用资产全部管理员。
 * @method void setApproverUin(array $ApproverUin) 设置审批人列表。为空使用资产全部管理员。
 * @method string getReason() 获取申请原因
 * @method void setReason(string $Reason) 设置申请原因
 * @method integer getManagerType() 获取管理类型。0-普通成员 1-管理员
 * @method void setManagerType(integer $ManagerType) 设置管理类型。0-普通成员 1-管理员
 * @method string getSubject() 获取被授权者。子账号授权时，传目标uin，为空时默认使用当前uin；访客授权时传访客身份id。
 * @method void setSubject(string $Subject) 设置被授权者。子账号授权时，传目标uin，为空时默认使用当前uin；访客授权时传访客身份id。
 */
class CreateDspmApplyOrderRequest extends AbstractModel
{
    /**
     * @var string 资产id
     */
    public $AssetId;

    /**
     * @var integer 申请类型。0-子账号授权 1-访客授权。
     */
    public $ApplyType;

    /**
     * @var DspmDbAccountPrivilege 权限信息。
     */
    public $Privilege;

    /**
     * @var string 主机地址。当前仅支持'%'。默认'%'。
     */
    public $Host;

    /**
     * @var integer 从审批完成后开始计算的访问权限失效时间，临时账号有效。单位毫秒。
     */
    public $ValidatePeriod;

    /**
     * @var array 审批人列表。为空使用资产全部管理员。
     */
    public $ApproverUin;

    /**
     * @var string 申请原因
     */
    public $Reason;

    /**
     * @var integer 管理类型。0-普通成员 1-管理员
     */
    public $ManagerType;

    /**
     * @var string 被授权者。子账号授权时，传目标uin，为空时默认使用当前uin；访客授权时传访客身份id。
     */
    public $Subject;

    /**
     * @param string $AssetId 资产id
     * @param integer $ApplyType 申请类型。0-子账号授权 1-访客授权。
     * @param DspmDbAccountPrivilege $Privilege 权限信息。
     * @param string $Host 主机地址。当前仅支持'%'。默认'%'。
     * @param integer $ValidatePeriod 从审批完成后开始计算的访问权限失效时间，临时账号有效。单位毫秒。
     * @param array $ApproverUin 审批人列表。为空使用资产全部管理员。
     * @param string $Reason 申请原因
     * @param integer $ManagerType 管理类型。0-普通成员 1-管理员
     * @param string $Subject 被授权者。子账号授权时，传目标uin，为空时默认使用当前uin；访客授权时传访客身份id。
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
        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("ApplyType",$param) and $param["ApplyType"] !== null) {
            $this->ApplyType = $param["ApplyType"];
        }

        if (array_key_exists("Privilege",$param) and $param["Privilege"] !== null) {
            $this->Privilege = new DspmDbAccountPrivilege();
            $this->Privilege->deserialize($param["Privilege"]);
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("ValidatePeriod",$param) and $param["ValidatePeriod"] !== null) {
            $this->ValidatePeriod = $param["ValidatePeriod"];
        }

        if (array_key_exists("ApproverUin",$param) and $param["ApproverUin"] !== null) {
            $this->ApproverUin = $param["ApproverUin"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("ManagerType",$param) and $param["ManagerType"] !== null) {
            $this->ManagerType = $param["ManagerType"];
        }

        if (array_key_exists("Subject",$param) and $param["Subject"] !== null) {
            $this->Subject = $param["Subject"];
        }
    }
}
