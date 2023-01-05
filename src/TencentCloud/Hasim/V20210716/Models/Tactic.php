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
 * 策略信息
 *
 * @method integer getID() 获取策略ID
 * @method void setID(integer $ID) 设置策略ID
 * @method string getCreatedAt() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedAt(string $CreatedAt) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsAuto() 获取是否自动执行策略
 * @method void setIsAuto(integer $IsAuto) 设置是否自动执行策略
 * @method integer getPingInterval() 获取设备上报信息间隔
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPingInterval(integer $PingInterval) 设置设备上报信息间隔
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsWeak() 获取是否开启弱信号检查
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsWeak(integer $IsWeak) 设置是否开启弱信号检查
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWeakThreshold() 获取弱信号阈值（-dbm）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWeakThreshold(integer $WeakThreshold) 设置弱信号阈值（-dbm）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsDelay() 获取忘了时延切换
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsDelay(integer $IsDelay) 设置忘了时延切换
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDelayThreshold() 获取时延阈值（ms）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDelayThreshold(integer $DelayThreshold) 设置时延阈值（ms）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsFake() 获取是否开启假信号检测
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsFake(integer $IsFake) 设置是否开启假信号检测
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFakeIP() 获取假信号检测IP字符串，用逗号分隔
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFakeIP(string $FakeIP) 设置假信号检测IP字符串，用逗号分隔
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFakeInterval() 获取假信号检测间隔（s）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFakeInterval(integer $FakeInterval) 设置假信号检测间隔（s）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsNet() 获取是否开启网络制式检测
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsNet(integer $IsNet) 设置是否开启网络制式检测
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNetwork() 获取网络回落制式 1: 2G、 2: 3G 、 3: 2/3G
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNetwork(integer $Network) 设置网络回落制式 1: 2G、 2: 3G 、 3: 2/3G
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsMove() 获取是否开启移动检测
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsMove(integer $IsMove) 设置是否开启移动检测
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取策略名称
 * @method void setName(string $Name) 设置策略名称
 * @method integer getIsPriorityTele() 获取是否开启最优先运营商
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsPriorityTele(integer $IsPriorityTele) 设置是否开启最优先运营商
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPriorityTele() 获取最优先运营商 1 移动、 2 联通、 3 电信 4 上次在线运营商
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPriorityTele(integer $PriorityTele) 设置最优先运营商 1 移动、 2 联通、 3 电信 4 上次在线运营商
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsBottomTele() 获取是否开启最不优先运营商
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsBottomTele(integer $IsBottomTele) 设置是否开启最不优先运营商
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBottomTele() 获取最不优先运营商 1 移动、 2 联通、 3 电信
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBottomTele(integer $BottomTele) 设置最不优先运营商 1 移动、 2 联通、 3 电信
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsBestSignal() 获取是否开启最优先信号选取策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsBestSignal(integer $IsBestSignal) 设置是否开启最优先信号选取策略
注意：此字段可能返回 null，表示取不到有效值。
 */
class Tactic extends AbstractModel
{
    /**
     * @var integer 策略ID
     */
    public $ID;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedAt;

    /**
     * @var integer 是否自动执行策略
     */
    public $IsAuto;

    /**
     * @var integer 设备上报信息间隔
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PingInterval;

    /**
     * @var integer 是否开启弱信号检查
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsWeak;

    /**
     * @var integer 弱信号阈值（-dbm）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WeakThreshold;

    /**
     * @var integer 忘了时延切换
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsDelay;

    /**
     * @var integer 时延阈值（ms）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DelayThreshold;

    /**
     * @var integer 是否开启假信号检测
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsFake;

    /**
     * @var string 假信号检测IP字符串，用逗号分隔
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FakeIP;

    /**
     * @var integer 假信号检测间隔（s）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FakeInterval;

    /**
     * @var integer 是否开启网络制式检测
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsNet;

    /**
     * @var integer 网络回落制式 1: 2G、 2: 3G 、 3: 2/3G
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Network;

    /**
     * @var integer 是否开启移动检测
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsMove;

    /**
     * @var string 策略名称
     */
    public $Name;

    /**
     * @var integer 是否开启最优先运营商
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsPriorityTele;

    /**
     * @var integer 最优先运营商 1 移动、 2 联通、 3 电信 4 上次在线运营商
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PriorityTele;

    /**
     * @var integer 是否开启最不优先运营商
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsBottomTele;

    /**
     * @var integer 最不优先运营商 1 移动、 2 联通、 3 电信
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BottomTele;

    /**
     * @var integer 是否开启最优先信号选取策略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsBestSignal;

    /**
     * @param integer $ID 策略ID
     * @param string $CreatedAt 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsAuto 是否自动执行策略
     * @param integer $PingInterval 设备上报信息间隔
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsWeak 是否开启弱信号检查
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $WeakThreshold 弱信号阈值（-dbm）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsDelay 忘了时延切换
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DelayThreshold 时延阈值（ms）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsFake 是否开启假信号检测
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FakeIP 假信号检测IP字符串，用逗号分隔
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FakeInterval 假信号检测间隔（s）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsNet 是否开启网络制式检测
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Network 网络回落制式 1: 2G、 2: 3G 、 3: 2/3G
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsMove 是否开启移动检测
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 策略名称
     * @param integer $IsPriorityTele 是否开启最优先运营商
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PriorityTele 最优先运营商 1 移动、 2 联通、 3 电信 4 上次在线运营商
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsBottomTele 是否开启最不优先运营商
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BottomTele 最不优先运营商 1 移动、 2 联通、 3 电信
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsBestSignal 是否开启最优先信号选取策略
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

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("IsAuto",$param) and $param["IsAuto"] !== null) {
            $this->IsAuto = $param["IsAuto"];
        }

        if (array_key_exists("PingInterval",$param) and $param["PingInterval"] !== null) {
            $this->PingInterval = $param["PingInterval"];
        }

        if (array_key_exists("IsWeak",$param) and $param["IsWeak"] !== null) {
            $this->IsWeak = $param["IsWeak"];
        }

        if (array_key_exists("WeakThreshold",$param) and $param["WeakThreshold"] !== null) {
            $this->WeakThreshold = $param["WeakThreshold"];
        }

        if (array_key_exists("IsDelay",$param) and $param["IsDelay"] !== null) {
            $this->IsDelay = $param["IsDelay"];
        }

        if (array_key_exists("DelayThreshold",$param) and $param["DelayThreshold"] !== null) {
            $this->DelayThreshold = $param["DelayThreshold"];
        }

        if (array_key_exists("IsFake",$param) and $param["IsFake"] !== null) {
            $this->IsFake = $param["IsFake"];
        }

        if (array_key_exists("FakeIP",$param) and $param["FakeIP"] !== null) {
            $this->FakeIP = $param["FakeIP"];
        }

        if (array_key_exists("FakeInterval",$param) and $param["FakeInterval"] !== null) {
            $this->FakeInterval = $param["FakeInterval"];
        }

        if (array_key_exists("IsNet",$param) and $param["IsNet"] !== null) {
            $this->IsNet = $param["IsNet"];
        }

        if (array_key_exists("Network",$param) and $param["Network"] !== null) {
            $this->Network = $param["Network"];
        }

        if (array_key_exists("IsMove",$param) and $param["IsMove"] !== null) {
            $this->IsMove = $param["IsMove"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("IsPriorityTele",$param) and $param["IsPriorityTele"] !== null) {
            $this->IsPriorityTele = $param["IsPriorityTele"];
        }

        if (array_key_exists("PriorityTele",$param) and $param["PriorityTele"] !== null) {
            $this->PriorityTele = $param["PriorityTele"];
        }

        if (array_key_exists("IsBottomTele",$param) and $param["IsBottomTele"] !== null) {
            $this->IsBottomTele = $param["IsBottomTele"];
        }

        if (array_key_exists("BottomTele",$param) and $param["BottomTele"] !== null) {
            $this->BottomTele = $param["BottomTele"];
        }

        if (array_key_exists("IsBestSignal",$param) and $param["IsBestSignal"] !== null) {
            $this->IsBestSignal = $param["IsBestSignal"];
        }
    }
}
