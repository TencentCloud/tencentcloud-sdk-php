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
 * 云兔连接详细信息
 *
 * @method integer getID() 获取云兔连接ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setID(integer $ID) 设置云兔连接ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取卡片状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置卡片状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getActiveTime() 获取激活时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActiveTime(string $ActiveTime) 设置激活时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpireTime() 获取过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireTime(string $ExpireTime) 设置过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getDataUse() 获取数据用量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataUse(float $DataUse) 设置数据用量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAudioUse() 获取语音用量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAudioUse(integer $AudioUse) 设置语音用量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSmsUse() 获取短信用量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSmsUse(integer $SmsUse) 设置短信用量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLinkedState() 获取在线状态 0 未激活 1 在线 2 离线
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLinkedState(integer $LinkedState) 设置在线状态 0 未激活 1 在线 2 离线
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTacticID() 获取预期策略ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTacticID(integer $TacticID) 设置预期策略ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTacticStatus() 获取策略下发状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTacticStatus(integer $TacticStatus) 设置策略下发状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTacticExpireTime() 获取策略下发成功过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTacticExpireTime(string $TacticExpireTime) 设置策略下发成功过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsActiveLog() 获取高级日志预期状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsActiveLog(boolean $IsActiveLog) 设置高级日志预期状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTeleOperator() 获取运营商 1移动 2联通 3电信
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTeleOperator(integer $TeleOperator) 设置运营商 1移动 2联通 3电信
注意：此字段可能返回 null，表示取不到有效值。
 * @method DeviceReport getReport() 获取设备最新上报信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReport(DeviceReport $Report) 设置设备最新上报信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取标签列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置标签列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCards() 获取运营商ICCID信息集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCards(array $Cards) 设置运营商ICCID信息集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCardID() 获取云兔实际卡片ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCardID(string $CardID) 设置云兔实际卡片ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class LinkDetailInfo extends AbstractModel
{
    /**
     * @var integer 云兔连接ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ID;

    /**
     * @var integer 卡片状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 激活时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActiveTime;

    /**
     * @var string 过期时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireTime;

    /**
     * @var float 数据用量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataUse;

    /**
     * @var integer 语音用量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AudioUse;

    /**
     * @var integer 短信用量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SmsUse;

    /**
     * @var integer 在线状态 0 未激活 1 在线 2 离线
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LinkedState;

    /**
     * @var integer 预期策略ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TacticID;

    /**
     * @var integer 策略下发状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TacticStatus;

    /**
     * @var string 策略下发成功过期时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TacticExpireTime;

    /**
     * @var boolean 高级日志预期状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsActiveLog;

    /**
     * @var integer 运营商 1移动 2联通 3电信
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TeleOperator;

    /**
     * @var DeviceReport 设备最新上报信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Report;

    /**
     * @var array 标签列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var array 运营商ICCID信息集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cards;

    /**
     * @var string 云兔实际卡片ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CardID;

    /**
     * @param integer $ID 云兔连接ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 卡片状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ActiveTime 激活时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpireTime 过期时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $DataUse 数据用量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AudioUse 语音用量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SmsUse 短信用量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LinkedState 在线状态 0 未激活 1 在线 2 离线
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TacticID 预期策略ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TacticStatus 策略下发状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TacticExpireTime 策略下发成功过期时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsActiveLog 高级日志预期状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TeleOperator 运营商 1移动 2联通 3电信
注意：此字段可能返回 null，表示取不到有效值。
     * @param DeviceReport $Report 设备最新上报信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 标签列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Cards 运营商ICCID信息集合
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CardID 云兔实际卡片ID
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ActiveTime",$param) and $param["ActiveTime"] !== null) {
            $this->ActiveTime = $param["ActiveTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("DataUse",$param) and $param["DataUse"] !== null) {
            $this->DataUse = $param["DataUse"];
        }

        if (array_key_exists("AudioUse",$param) and $param["AudioUse"] !== null) {
            $this->AudioUse = $param["AudioUse"];
        }

        if (array_key_exists("SmsUse",$param) and $param["SmsUse"] !== null) {
            $this->SmsUse = $param["SmsUse"];
        }

        if (array_key_exists("LinkedState",$param) and $param["LinkedState"] !== null) {
            $this->LinkedState = $param["LinkedState"];
        }

        if (array_key_exists("TacticID",$param) and $param["TacticID"] !== null) {
            $this->TacticID = $param["TacticID"];
        }

        if (array_key_exists("TacticStatus",$param) and $param["TacticStatus"] !== null) {
            $this->TacticStatus = $param["TacticStatus"];
        }

        if (array_key_exists("TacticExpireTime",$param) and $param["TacticExpireTime"] !== null) {
            $this->TacticExpireTime = $param["TacticExpireTime"];
        }

        if (array_key_exists("IsActiveLog",$param) and $param["IsActiveLog"] !== null) {
            $this->IsActiveLog = $param["IsActiveLog"];
        }

        if (array_key_exists("TeleOperator",$param) and $param["TeleOperator"] !== null) {
            $this->TeleOperator = $param["TeleOperator"];
        }

        if (array_key_exists("Report",$param) and $param["Report"] !== null) {
            $this->Report = new DeviceReport();
            $this->Report->deserialize($param["Report"]);
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Cards",$param) and $param["Cards"] !== null) {
            $this->Cards = [];
            foreach ($param["Cards"] as $key => $value){
                $obj = new TeleOperatorCard();
                $obj->deserialize($value);
                array_push($this->Cards, $obj);
            }
        }

        if (array_key_exists("CardID",$param) and $param["CardID"] !== null) {
            $this->CardID = $param["CardID"];
        }
    }
}
