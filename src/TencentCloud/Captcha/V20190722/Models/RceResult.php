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
namespace TencentCloud\Captcha\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 验证码拼装Rce结果，Rce结果部分
 *
 * @method string getUserId() 获取用户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserId(string $UserId) 设置用户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPostTime() 获取操作时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPostTime(integer $PostTime) 设置操作时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssociateAccount() 获取业务参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssociateAccount(string $AssociateAccount) 设置业务参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserIp() 获取用户Ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserIp(string $UserIp) 设置用户Ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRiskLevel() 获取风险等级
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskLevel(string $RiskLevel) 设置风险等级
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRiskType() 获取风险类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskType(array $RiskType) 设置风险类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConstId() 获取设备唯一ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConstId(string $ConstId) 设置设备唯一ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRiskInformation() 获取风险扩展参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskInformation(string $RiskInformation) 设置风险扩展参数
注意：此字段可能返回 null，表示取不到有效值。
 */
class RceResult extends AbstractModel
{
    /**
     * @var string 用户ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserId;

    /**
     * @var integer 操作时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PostTime;

    /**
     * @var string 业务参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssociateAccount;

    /**
     * @var string 用户Ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserIp;

    /**
     * @var string 风险等级
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskLevel;

    /**
     * @var array 风险类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskType;

    /**
     * @var string 设备唯一ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConstId;

    /**
     * @var string 风险扩展参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskInformation;

    /**
     * @param string $UserId 用户ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PostTime 操作时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssociateAccount 业务参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserIp 用户Ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RiskLevel 风险等级
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RiskType 风险类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConstId 设备唯一ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RiskInformation 风险扩展参数
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("PostTime",$param) and $param["PostTime"] !== null) {
            $this->PostTime = $param["PostTime"];
        }

        if (array_key_exists("AssociateAccount",$param) and $param["AssociateAccount"] !== null) {
            $this->AssociateAccount = $param["AssociateAccount"];
        }

        if (array_key_exists("UserIp",$param) and $param["UserIp"] !== null) {
            $this->UserIp = $param["UserIp"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("RiskType",$param) and $param["RiskType"] !== null) {
            $this->RiskType = $param["RiskType"];
        }

        if (array_key_exists("ConstId",$param) and $param["ConstId"] !== null) {
            $this->ConstId = $param["ConstId"];
        }

        if (array_key_exists("RiskInformation",$param) and $param["RiskInformation"] !== null) {
            $this->RiskInformation = $param["RiskInformation"];
        }
    }
}
