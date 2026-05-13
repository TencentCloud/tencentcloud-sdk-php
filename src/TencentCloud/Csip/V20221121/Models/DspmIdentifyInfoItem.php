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
 * Dspm身份信息
 *
 * @method string getIdentifyId() 获取身份id。
 * @method void setIdentifyId(string $IdentifyId) 设置身份id。
 * @method string getRemark() 获取备注。
 * @method void setRemark(string $Remark) 设置备注。
 * @method integer getIdentifyType() 获取身份类型。0-未定义 2-长期身份 3-临时身份
 * @method void setIdentifyType(integer $IdentifyType) 设置身份类型。0-未定义 2-长期身份 3-临时身份
 * @method DspmUinUser getOwnerUin() 获取所属云账号uin用户。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerUin(DspmUinUser $OwnerUin) 设置所属云账号uin用户。
注意：此字段可能返回 null，表示取不到有效值。
 * @method DspmUinUser getCreatorUin() 获取创建者账号uin用户。
 * @method void setCreatorUin(DspmUinUser $CreatorUin) 设置创建者账号uin用户。
 * @method integer getAssetCount() 获取关联资产。
 * @method void setAssetCount(integer $AssetCount) 设置关联资产。
 * @method string getCreateTime() 获取创建时间。
 * @method void setCreateTime(string $CreateTime) 设置创建时间。
 * @method integer getStatus() 获取状态。0-不活跃 1-活跃
 * @method void setStatus(integer $Status) 设置状态。0-不活跃 1-活跃
 * @method DspmPersonUser getPerson() 获取所属个人用户信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPerson(DspmPersonUser $Person) 设置所属个人用户信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method DspmIdentifyAssetStatistic getAssetStatistic() 获取关联数据资产统计信息。
 * @method void setAssetStatistic(DspmIdentifyAssetStatistic $AssetStatistic) 设置关联数据资产统计信息。
 * @method DspmRiskCount getRiskCount() 获取风险统计信息
 * @method void setRiskCount(DspmRiskCount $RiskCount) 设置风险统计信息
 * @method string getSafetyAdvice() 获取安全建议。 Resolve 立即解决 Reinforcement 加固 None 暂无异常
 * @method void setSafetyAdvice(string $SafetyAdvice) 设置安全建议。 Resolve 立即解决 Reinforcement 加固 None 暂无异常
 * @method integer getAppId() 获取资产所属账号app id
 * @method void setAppId(integer $AppId) 设置资产所属账号app id
 * @method string getNickName() 获取账号昵称
 * @method void setNickName(string $NickName) 设置账号昵称
 * @method string getUin() 获取资产所属账号uin
 * @method void setUin(string $Uin) 设置资产所属账号uin
 */
class DspmIdentifyInfoItem extends AbstractModel
{
    /**
     * @var string 身份id。
     */
    public $IdentifyId;

    /**
     * @var string 备注。
     */
    public $Remark;

    /**
     * @var integer 身份类型。0-未定义 2-长期身份 3-临时身份
     */
    public $IdentifyType;

    /**
     * @var DspmUinUser 所属云账号uin用户。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerUin;

    /**
     * @var DspmUinUser 创建者账号uin用户。
     */
    public $CreatorUin;

    /**
     * @var integer 关联资产。
     */
    public $AssetCount;

    /**
     * @var string 创建时间。
     */
    public $CreateTime;

    /**
     * @var integer 状态。0-不活跃 1-活跃
     */
    public $Status;

    /**
     * @var DspmPersonUser 所属个人用户信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Person;

    /**
     * @var DspmIdentifyAssetStatistic 关联数据资产统计信息。
     */
    public $AssetStatistic;

    /**
     * @var DspmRiskCount 风险统计信息
     */
    public $RiskCount;

    /**
     * @var string 安全建议。 Resolve 立即解决 Reinforcement 加固 None 暂无异常
     */
    public $SafetyAdvice;

    /**
     * @var integer 资产所属账号app id
     */
    public $AppId;

    /**
     * @var string 账号昵称
     */
    public $NickName;

    /**
     * @var string 资产所属账号uin
     */
    public $Uin;

    /**
     * @param string $IdentifyId 身份id。
     * @param string $Remark 备注。
     * @param integer $IdentifyType 身份类型。0-未定义 2-长期身份 3-临时身份
     * @param DspmUinUser $OwnerUin 所属云账号uin用户。
注意：此字段可能返回 null，表示取不到有效值。
     * @param DspmUinUser $CreatorUin 创建者账号uin用户。
     * @param integer $AssetCount 关联资产。
     * @param string $CreateTime 创建时间。
     * @param integer $Status 状态。0-不活跃 1-活跃
     * @param DspmPersonUser $Person 所属个人用户信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param DspmIdentifyAssetStatistic $AssetStatistic 关联数据资产统计信息。
     * @param DspmRiskCount $RiskCount 风险统计信息
     * @param string $SafetyAdvice 安全建议。 Resolve 立即解决 Reinforcement 加固 None 暂无异常
     * @param integer $AppId 资产所属账号app id
     * @param string $NickName 账号昵称
     * @param string $Uin 资产所属账号uin
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
        if (array_key_exists("IdentifyId",$param) and $param["IdentifyId"] !== null) {
            $this->IdentifyId = $param["IdentifyId"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("IdentifyType",$param) and $param["IdentifyType"] !== null) {
            $this->IdentifyType = $param["IdentifyType"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = new DspmUinUser();
            $this->OwnerUin->deserialize($param["OwnerUin"]);
        }

        if (array_key_exists("CreatorUin",$param) and $param["CreatorUin"] !== null) {
            $this->CreatorUin = new DspmUinUser();
            $this->CreatorUin->deserialize($param["CreatorUin"]);
        }

        if (array_key_exists("AssetCount",$param) and $param["AssetCount"] !== null) {
            $this->AssetCount = $param["AssetCount"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Person",$param) and $param["Person"] !== null) {
            $this->Person = new DspmPersonUser();
            $this->Person->deserialize($param["Person"]);
        }

        if (array_key_exists("AssetStatistic",$param) and $param["AssetStatistic"] !== null) {
            $this->AssetStatistic = new DspmIdentifyAssetStatistic();
            $this->AssetStatistic->deserialize($param["AssetStatistic"]);
        }

        if (array_key_exists("RiskCount",$param) and $param["RiskCount"] !== null) {
            $this->RiskCount = new DspmRiskCount();
            $this->RiskCount->deserialize($param["RiskCount"]);
        }

        if (array_key_exists("SafetyAdvice",$param) and $param["SafetyAdvice"] !== null) {
            $this->SafetyAdvice = $param["SafetyAdvice"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }
    }
}
