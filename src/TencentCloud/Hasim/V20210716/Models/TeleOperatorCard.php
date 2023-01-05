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
namespace TencentCloud\Hasim\V20210716\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 运营商卡片信息
 *
 * @method string getAccountTime() 获取开户时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountTime(string $AccountTime) 设置开户时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getActiveTime() 获取激活时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActiveTime(string $ActiveTime) 设置激活时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getICCID() 获取运营商ICCID
 * @method void setICCID(string $ICCID) 设置运营商ICCID
 * @method integer getLinkID() 获取云兔卡ID
 * @method void setLinkID(integer $LinkID) 设置云兔卡ID
 * @method string getMsisdn() 获取电话号码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMsisdn(string $Msisdn) 设置电话号码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIMSI() 获取移动用户识别码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIMSI(string $IMSI) 设置移动用户识别码
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTeleOperator() 获取运营商: 1 移动 2 联通 3 电信
 * @method void setTeleOperator(integer $TeleOperator) 设置运营商: 1 移动 2 联通 3 电信
 */
class TeleOperatorCard extends AbstractModel
{
    /**
     * @var string 开户时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountTime;

    /**
     * @var string 激活时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActiveTime;

    /**
     * @var string 运营商ICCID
     */
    public $ICCID;

    /**
     * @var integer 云兔卡ID
     */
    public $LinkID;

    /**
     * @var string 电话号码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Msisdn;

    /**
     * @var string 移动用户识别码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IMSI;

    /**
     * @var integer 运营商: 1 移动 2 联通 3 电信
     */
    public $TeleOperator;

    /**
     * @param string $AccountTime 开户时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ActiveTime 激活时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ICCID 运营商ICCID
     * @param integer $LinkID 云兔卡ID
     * @param string $Msisdn 电话号码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IMSI 移动用户识别码
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TeleOperator 运营商: 1 移动 2 联通 3 电信
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
        if (array_key_exists("AccountTime",$param) and $param["AccountTime"] !== null) {
            $this->AccountTime = $param["AccountTime"];
        }

        if (array_key_exists("ActiveTime",$param) and $param["ActiveTime"] !== null) {
            $this->ActiveTime = $param["ActiveTime"];
        }

        if (array_key_exists("ICCID",$param) and $param["ICCID"] !== null) {
            $this->ICCID = $param["ICCID"];
        }

        if (array_key_exists("LinkID",$param) and $param["LinkID"] !== null) {
            $this->LinkID = $param["LinkID"];
        }

        if (array_key_exists("Msisdn",$param) and $param["Msisdn"] !== null) {
            $this->Msisdn = $param["Msisdn"];
        }

        if (array_key_exists("IMSI",$param) and $param["IMSI"] !== null) {
            $this->IMSI = $param["IMSI"];
        }

        if (array_key_exists("TeleOperator",$param) and $param["TeleOperator"] !== null) {
            $this->TeleOperator = $param["TeleOperator"];
        }
    }
}
