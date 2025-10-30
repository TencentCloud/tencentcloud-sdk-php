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
namespace TencentCloud\Vcube\V20220410\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询返回的优图信息
 *
 * @method integer getId() 获取优图Id
 * @method void setId(integer $Id) 设置优图Id
 * @method string getCompanyName() 获取用户公司名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompanyName(string $CompanyName) 设置用户公司名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCompanyPermit() 获取https://cos.xxx
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompanyPermit(string $CompanyPermit) 设置https://cos.xxx
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCompanyType() 获取用户公司行业类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompanyType(string $CompanyType) 设置用户公司行业类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPlan() 获取优图套餐类型
 * @method void setPlan(string $Plan) 设置优图套餐类型
 * @method string getLicenseType() 获取测试版还是正式版 test | formal
 * @method void setLicenseType(string $LicenseType) 设置测试版还是正式版 test | formal
 * @method integer getStatus() 获取0: 预申请，需要补充申请信息
   1: 审批通过，xmagic已签发，正在生效中
    2: 提交完申请资料后待运营审核状态
    3: 申请被驳回，需要重新修改申请资料
    4: 应用包名被修改后触发xmagic审批，当前xmagic已暂停生效
    5: 应用修改包名后，审批未通过状态，可以重新修改应用PB，状态会回到4
 * @method void setStatus(integer $Status) 设置0: 预申请，需要补充申请信息
   1: 审批通过，xmagic已签发，正在生效中
    2: 提交完申请资料后待运营审核状态
    3: 申请被驳回，需要重新修改申请资料
    4: 应用包名被修改后触发xmagic审批，当前xmagic已暂停生效
    5: 应用修改包名后，审批未通过状态，可以重新修改应用PB，状态会回到4
 * @method boolean getUpdate() 获取测试license是否已经升级
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdate(boolean $Update) 设置测试license是否已经升级
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取优图生效开始时间 Status为1的时候
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置优图生效开始时间 Status为1的时候
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取优图生效结束时间 Status为1的时候
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置优图生效结束时间 Status为1的时候
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRenewalCount() 获取续期次数， LicenseType=test时有此字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRenewalCount(integer $RenewalCount) 设置续期次数， LicenseType=test时有此字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getReply() 获取历次审批的回复
 * @method void setReply(array $Reply) 设置历次审批的回复
 * @method string getCreatedAt() 获取创建时间
 * @method void setCreatedAt(string $CreatedAt) 设置创建时间
 * @method string getUpdatedAt() 获取修改时间
 * @method void setUpdatedAt(string $UpdatedAt) 设置修改时间
 * @method string getUpdateTime() 获取用户更新信息的时间
 * @method void setUpdateTime(string $UpdateTime) 设置用户更新信息的时间
 * @method boolean getExpired() 获取是否过期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpired(boolean $Expired) 设置是否过期
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRestTime() 获取返回还剩多少秒过期，过期后返回0
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRestTime(integer $RestTime) 设置返回还剩多少秒过期，过期后返回0
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getXMagicType() 获取single: 原子能力,combined:套餐
 * @method void setXMagicType(string $XMagicType) 设置single: 原子能力,combined:套餐
 * @method string getName() 获取优图模块名称，自动中英文
 * @method void setName(string $Name) 设置优图模块名称，自动中英文
 * @method RenewResource getResource() 获取优图资源信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResource(RenewResource $Resource) 设置优图资源信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsVest() 获取是否是马甲包
 * @method void setIsVest(boolean $IsVest) 设置是否是马甲包
 */
class XMagicInfo extends AbstractModel
{
    /**
     * @var integer 优图Id
     */
    public $Id;

    /**
     * @var string 用户公司名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CompanyName;

    /**
     * @var string https://cos.xxx
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CompanyPermit;

    /**
     * @var string 用户公司行业类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CompanyType;

    /**
     * @var string 优图套餐类型
     */
    public $Plan;

    /**
     * @var string 测试版还是正式版 test | formal
     */
    public $LicenseType;

    /**
     * @var integer 0: 预申请，需要补充申请信息
   1: 审批通过，xmagic已签发，正在生效中
    2: 提交完申请资料后待运营审核状态
    3: 申请被驳回，需要重新修改申请资料
    4: 应用包名被修改后触发xmagic审批，当前xmagic已暂停生效
    5: 应用修改包名后，审批未通过状态，可以重新修改应用PB，状态会回到4
     */
    public $Status;

    /**
     * @var boolean 测试license是否已经升级
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Update;

    /**
     * @var string 优图生效开始时间 Status为1的时候
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 优图生效结束时间 Status为1的时候
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var integer 续期次数， LicenseType=test时有此字段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RenewalCount;

    /**
     * @var array 历次审批的回复
     */
    public $Reply;

    /**
     * @var string 创建时间
     */
    public $CreatedAt;

    /**
     * @var string 修改时间
     */
    public $UpdatedAt;

    /**
     * @var string 用户更新信息的时间
     */
    public $UpdateTime;

    /**
     * @var boolean 是否过期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Expired;

    /**
     * @var integer 返回还剩多少秒过期，过期后返回0
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RestTime;

    /**
     * @var string single: 原子能力,combined:套餐
     */
    public $XMagicType;

    /**
     * @var string 优图模块名称，自动中英文
     */
    public $Name;

    /**
     * @var RenewResource 优图资源信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Resource;

    /**
     * @var boolean 是否是马甲包
     */
    public $IsVest;

    /**
     * @param integer $Id 优图Id
     * @param string $CompanyName 用户公司名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CompanyPermit https://cos.xxx
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CompanyType 用户公司行业类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Plan 优图套餐类型
     * @param string $LicenseType 测试版还是正式版 test | formal
     * @param integer $Status 0: 预申请，需要补充申请信息
   1: 审批通过，xmagic已签发，正在生效中
    2: 提交完申请资料后待运营审核状态
    3: 申请被驳回，需要重新修改申请资料
    4: 应用包名被修改后触发xmagic审批，当前xmagic已暂停生效
    5: 应用修改包名后，审批未通过状态，可以重新修改应用PB，状态会回到4
     * @param boolean $Update 测试license是否已经升级
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime 优图生效开始时间 Status为1的时候
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 优图生效结束时间 Status为1的时候
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RenewalCount 续期次数， LicenseType=test时有此字段
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Reply 历次审批的回复
     * @param string $CreatedAt 创建时间
     * @param string $UpdatedAt 修改时间
     * @param string $UpdateTime 用户更新信息的时间
     * @param boolean $Expired 是否过期
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RestTime 返回还剩多少秒过期，过期后返回0
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $XMagicType single: 原子能力,combined:套餐
     * @param string $Name 优图模块名称，自动中英文
     * @param RenewResource $Resource 优图资源信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsVest 是否是马甲包
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

        if (array_key_exists("CompanyName",$param) and $param["CompanyName"] !== null) {
            $this->CompanyName = $param["CompanyName"];
        }

        if (array_key_exists("CompanyPermit",$param) and $param["CompanyPermit"] !== null) {
            $this->CompanyPermit = $param["CompanyPermit"];
        }

        if (array_key_exists("CompanyType",$param) and $param["CompanyType"] !== null) {
            $this->CompanyType = $param["CompanyType"];
        }

        if (array_key_exists("Plan",$param) and $param["Plan"] !== null) {
            $this->Plan = $param["Plan"];
        }

        if (array_key_exists("LicenseType",$param) and $param["LicenseType"] !== null) {
            $this->LicenseType = $param["LicenseType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Update",$param) and $param["Update"] !== null) {
            $this->Update = $param["Update"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("RenewalCount",$param) and $param["RenewalCount"] !== null) {
            $this->RenewalCount = $param["RenewalCount"];
        }

        if (array_key_exists("Reply",$param) and $param["Reply"] !== null) {
            $this->Reply = $param["Reply"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Expired",$param) and $param["Expired"] !== null) {
            $this->Expired = $param["Expired"];
        }

        if (array_key_exists("RestTime",$param) and $param["RestTime"] !== null) {
            $this->RestTime = $param["RestTime"];
        }

        if (array_key_exists("XMagicType",$param) and $param["XMagicType"] !== null) {
            $this->XMagicType = $param["XMagicType"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = new RenewResource();
            $this->Resource->deserialize($param["Resource"]);
        }

        if (array_key_exists("IsVest",$param) and $param["IsVest"] !== null) {
            $this->IsVest = $param["IsVest"];
        }
    }
}
