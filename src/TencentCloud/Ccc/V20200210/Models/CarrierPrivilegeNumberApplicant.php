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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 运营商白名单号码申请单
 *
 * @method integer getSdkAppId() 获取实例Id
 * @method void setSdkAppId(integer $SdkAppId) 设置实例Id
 * @method integer getApplicantId() 获取申请单Id
 * @method void setApplicantId(integer $ApplicantId) 设置申请单Id
 * @method array getCallers() 获取主叫号码列表
 * @method void setCallers(array $Callers) 设置主叫号码列表
 * @method array getCallees() 获取被叫号码列表
 * @method void setCallees(array $Callees) 设置被叫号码列表
 * @method string getDescription() 获取描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getState() 获取审批状态:1 待审核、2 通过、3 拒绝
 * @method void setState(integer $State) 设置审批状态:1 待审核、2 通过、3 拒绝
 * @method integer getCreateTime() 获取创建时间，unix时间戳(秒)
 * @method void setCreateTime(integer $CreateTime) 设置创建时间，unix时间戳(秒)
 * @method integer getUpdateTime() 获取更新时间，unix时间戳(秒)
 * @method void setUpdateTime(integer $UpdateTime) 设置更新时间，unix时间戳(秒)
 */
class CarrierPrivilegeNumberApplicant extends AbstractModel
{
    /**
     * @var integer 实例Id
     */
    public $SdkAppId;

    /**
     * @var integer 申请单Id
     */
    public $ApplicantId;

    /**
     * @var array 主叫号码列表
     */
    public $Callers;

    /**
     * @var array 被叫号码列表
     */
    public $Callees;

    /**
     * @var string 描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var integer 审批状态:1 待审核、2 通过、3 拒绝
     */
    public $State;

    /**
     * @var integer 创建时间，unix时间戳(秒)
     */
    public $CreateTime;

    /**
     * @var integer 更新时间，unix时间戳(秒)
     */
    public $UpdateTime;

    /**
     * @param integer $SdkAppId 实例Id
     * @param integer $ApplicantId 申请单Id
     * @param array $Callers 主叫号码列表
     * @param array $Callees 被叫号码列表
     * @param string $Description 描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $State 审批状态:1 待审核、2 通过、3 拒绝
     * @param integer $CreateTime 创建时间，unix时间戳(秒)
     * @param integer $UpdateTime 更新时间，unix时间戳(秒)
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("ApplicantId",$param) and $param["ApplicantId"] !== null) {
            $this->ApplicantId = $param["ApplicantId"];
        }

        if (array_key_exists("Callers",$param) and $param["Callers"] !== null) {
            $this->Callers = $param["Callers"];
        }

        if (array_key_exists("Callees",$param) and $param["Callees"] !== null) {
            $this->Callees = $param["Callees"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
