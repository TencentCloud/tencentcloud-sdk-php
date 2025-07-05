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
namespace TencentCloud\Icr\V20211014\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 获取成员列表回包DataList
 *
 * @method integer getEditTime() 获取修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEditTime(integer $EditTime) 设置修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method GetIndustryV1HomeMembersRespFeature getFeatureList() 获取功能列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFeatureList(GetIndustryV1HomeMembersRespFeature $FeatureList) 设置功能列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getID() 获取用户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setID(string $ID) 设置用户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIndustryType() 获取用户行业分类
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndustryType(string $IndustryType) 设置用户行业分类
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMemberNum() 获取子用户数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemberNum(integer $MemberNum) 设置子用户数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method GetIndustryV1HomeMembersRespProduct getProductList() 获取机器人列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductList(GetIndustryV1HomeMembersRespProduct $ProductList) 设置机器人列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemark() 获取备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取是否有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置是否有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method GetIndustryV1HomeMembersRespType getTypeList() 获取功能列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTypeList(GetIndustryV1HomeMembersRespType $TypeList) 设置功能列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserAccount() 获取用户账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserAccount(string $UserAccount) 设置用户账号
注意：此字段可能返回 null，表示取不到有效值。
 */
class GetIndustryV1HomeMembersRespData extends AbstractModel
{
    /**
     * @var integer 修改时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EditTime;

    /**
     * @var GetIndustryV1HomeMembersRespFeature 功能列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FeatureList;

    /**
     * @var string 用户ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ID;

    /**
     * @var string 用户行业分类
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndustryType;

    /**
     * @var integer 子用户数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MemberNum;

    /**
     * @var GetIndustryV1HomeMembersRespProduct 机器人列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductList;

    /**
     * @var string 备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var integer 是否有效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var GetIndustryV1HomeMembersRespType 功能列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TypeList;

    /**
     * @var string 用户账号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserAccount;

    /**
     * @param integer $EditTime 修改时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param GetIndustryV1HomeMembersRespFeature $FeatureList 功能列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ID 用户ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IndustryType 用户行业分类
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MemberNum 子用户数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param GetIndustryV1HomeMembersRespProduct $ProductList 机器人列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Remark 备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 是否有效
注意：此字段可能返回 null，表示取不到有效值。
     * @param GetIndustryV1HomeMembersRespType $TypeList 功能列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserAccount 用户账号
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
        if (array_key_exists("EditTime",$param) and $param["EditTime"] !== null) {
            $this->EditTime = $param["EditTime"];
        }

        if (array_key_exists("FeatureList",$param) and $param["FeatureList"] !== null) {
            $this->FeatureList = new GetIndustryV1HomeMembersRespFeature();
            $this->FeatureList->deserialize($param["FeatureList"]);
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("IndustryType",$param) and $param["IndustryType"] !== null) {
            $this->IndustryType = $param["IndustryType"];
        }

        if (array_key_exists("MemberNum",$param) and $param["MemberNum"] !== null) {
            $this->MemberNum = $param["MemberNum"];
        }

        if (array_key_exists("ProductList",$param) and $param["ProductList"] !== null) {
            $this->ProductList = new GetIndustryV1HomeMembersRespProduct();
            $this->ProductList->deserialize($param["ProductList"]);
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TypeList",$param) and $param["TypeList"] !== null) {
            $this->TypeList = new GetIndustryV1HomeMembersRespType();
            $this->TypeList->deserialize($param["TypeList"]);
        }

        if (array_key_exists("UserAccount",$param) and $param["UserAccount"] !== null) {
            $this->UserAccount = $param["UserAccount"];
        }
    }
}
