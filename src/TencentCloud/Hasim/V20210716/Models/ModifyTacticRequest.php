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
 * ModifyTactic请求参数结构体
 *
 * @method string getName() 获取策略名称
 * @method void setName(string $Name) 设置策略名称
 * @method integer getIsAuto() 获取是否自动执行
 * @method void setIsAuto(integer $IsAuto) 设置是否自动执行
 * @method integer getPingInterval() 获取心跳上报间隔(s)
 * @method void setPingInterval(integer $PingInterval) 设置心跳上报间隔(s)
 * @method integer getIsWeak() 获取是否开启弱信号检测
 * @method void setIsWeak(integer $IsWeak) 设置是否开启弱信号检测
 * @method integer getWeakThreshold() 获取弱信号阈值（-dbm）
 * @method void setWeakThreshold(integer $WeakThreshold) 设置弱信号阈值（-dbm）
 * @method integer getIsDelay() 获取是否开启时延切换
 * @method void setIsDelay(integer $IsDelay) 设置是否开启时延切换
 * @method integer getDelayThreshold() 获取网络时延阈值（ms）
 * @method void setDelayThreshold(integer $DelayThreshold) 设置网络时延阈值（ms）
 * @method integer getIsFake() 获取是否开启假信号检测
 * @method void setIsFake(integer $IsFake) 设置是否开启假信号检测
 * @method integer getFakeInterval() 获取假信号检测间隔（s）
 * @method void setFakeInterval(integer $FakeInterval) 设置假信号检测间隔（s）
 * @method integer getIsNet() 获取是否开启网络制式检测
 * @method void setIsNet(integer $IsNet) 设置是否开启网络制式检测
 * @method integer getNetwork() 获取网络回落制式 1 2G、 2 3G 、 3 2/3G
 * @method void setNetwork(integer $Network) 设置网络回落制式 1 2G、 2 3G 、 3 2/3G
 * @method integer getIsMove() 获取是否开启移动检测
 * @method void setIsMove(integer $IsMove) 设置是否开启移动检测
 * @method integer getTacticID() 获取策略ID
 * @method void setTacticID(integer $TacticID) 设置策略ID
 * @method integer getIsPriorityTele() 获取是否开启最优先运营商
 * @method void setIsPriorityTele(integer $IsPriorityTele) 设置是否开启最优先运营商
 * @method integer getPriorityTele() 获取最优先运营商 1 移动、 2 联通、 3 电信 4 上次在线运营商
 * @method void setPriorityTele(integer $PriorityTele) 设置最优先运营商 1 移动、 2 联通、 3 电信 4 上次在线运营商
 * @method integer getIsBottomTele() 获取是否开启最不优先运营商
 * @method void setIsBottomTele(integer $IsBottomTele) 设置是否开启最不优先运营商
 * @method integer getBottomTele() 获取最不优先运营商 1 移动、 2 联通、 3 电信
 * @method void setBottomTele(integer $BottomTele) 设置最不优先运营商 1 移动、 2 联通、 3 电信
 * @method integer getIsBestSignal() 获取是否最优先信号选取策略
 * @method void setIsBestSignal(integer $IsBestSignal) 设置是否最优先信号选取策略
 * @method string getFakeIP() 获取假信号检测IP字符串，用逗号分隔
 * @method void setFakeIP(string $FakeIP) 设置假信号检测IP字符串，用逗号分隔
 */
class ModifyTacticRequest extends AbstractModel
{
    /**
     * @var string 策略名称
     */
    public $Name;

    /**
     * @var integer 是否自动执行
     */
    public $IsAuto;

    /**
     * @var integer 心跳上报间隔(s)
     */
    public $PingInterval;

    /**
     * @var integer 是否开启弱信号检测
     */
    public $IsWeak;

    /**
     * @var integer 弱信号阈值（-dbm）
     */
    public $WeakThreshold;

    /**
     * @var integer 是否开启时延切换
     */
    public $IsDelay;

    /**
     * @var integer 网络时延阈值（ms）
     */
    public $DelayThreshold;

    /**
     * @var integer 是否开启假信号检测
     */
    public $IsFake;

    /**
     * @var integer 假信号检测间隔（s）
     */
    public $FakeInterval;

    /**
     * @var integer 是否开启网络制式检测
     */
    public $IsNet;

    /**
     * @var integer 网络回落制式 1 2G、 2 3G 、 3 2/3G
     */
    public $Network;

    /**
     * @var integer 是否开启移动检测
     */
    public $IsMove;

    /**
     * @var integer 策略ID
     */
    public $TacticID;

    /**
     * @var integer 是否开启最优先运营商
     */
    public $IsPriorityTele;

    /**
     * @var integer 最优先运营商 1 移动、 2 联通、 3 电信 4 上次在线运营商
     */
    public $PriorityTele;

    /**
     * @var integer 是否开启最不优先运营商
     */
    public $IsBottomTele;

    /**
     * @var integer 最不优先运营商 1 移动、 2 联通、 3 电信
     */
    public $BottomTele;

    /**
     * @var integer 是否最优先信号选取策略
     */
    public $IsBestSignal;

    /**
     * @var string 假信号检测IP字符串，用逗号分隔
     */
    public $FakeIP;

    /**
     * @param string $Name 策略名称
     * @param integer $IsAuto 是否自动执行
     * @param integer $PingInterval 心跳上报间隔(s)
     * @param integer $IsWeak 是否开启弱信号检测
     * @param integer $WeakThreshold 弱信号阈值（-dbm）
     * @param integer $IsDelay 是否开启时延切换
     * @param integer $DelayThreshold 网络时延阈值（ms）
     * @param integer $IsFake 是否开启假信号检测
     * @param integer $FakeInterval 假信号检测间隔（s）
     * @param integer $IsNet 是否开启网络制式检测
     * @param integer $Network 网络回落制式 1 2G、 2 3G 、 3 2/3G
     * @param integer $IsMove 是否开启移动检测
     * @param integer $TacticID 策略ID
     * @param integer $IsPriorityTele 是否开启最优先运营商
     * @param integer $PriorityTele 最优先运营商 1 移动、 2 联通、 3 电信 4 上次在线运营商
     * @param integer $IsBottomTele 是否开启最不优先运营商
     * @param integer $BottomTele 最不优先运营商 1 移动、 2 联通、 3 电信
     * @param integer $IsBestSignal 是否最优先信号选取策略
     * @param string $FakeIP 假信号检测IP字符串，用逗号分隔
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
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

        if (array_key_exists("TacticID",$param) and $param["TacticID"] !== null) {
            $this->TacticID = $param["TacticID"];
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

        if (array_key_exists("FakeIP",$param) and $param["FakeIP"] !== null) {
            $this->FakeIP = $param["FakeIP"];
        }
    }
}
