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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PeakPoints数组项
 *
 * @method integer getTime() 获取秒级别时间戳
 * @method void setTime(integer $Time) 设置秒级别时间戳
 * @method integer getAccess() 获取QPS
 * @method void setAccess(integer $Access) 设置QPS
 * @method integer getUp() 获取上行带宽峰值，单位B
 * @method void setUp(integer $Up) 设置上行带宽峰值，单位B
 * @method integer getDown() 获取下行带宽峰值，单位B
 * @method void setDown(integer $Down) 设置下行带宽峰值，单位B
 * @method integer getAttack() 获取Web攻击次数
 * @method void setAttack(integer $Attack) 设置Web攻击次数
 * @method integer getCc() 获取CC攻击次数
 * @method void setCc(integer $Cc) 设置CC攻击次数
 * @method integer getBotAccess() 获取Bot qps
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBotAccess(integer $BotAccess) 设置Bot qps
注意：此字段可能返回 null，表示取不到有效值。
 */
class PeakPointsItem extends AbstractModel
{
    /**
     * @var integer 秒级别时间戳
     */
    public $Time;

    /**
     * @var integer QPS
     */
    public $Access;

    /**
     * @var integer 上行带宽峰值，单位B
     */
    public $Up;

    /**
     * @var integer 下行带宽峰值，单位B
     */
    public $Down;

    /**
     * @var integer Web攻击次数
     */
    public $Attack;

    /**
     * @var integer CC攻击次数
     */
    public $Cc;

    /**
     * @var integer Bot qps
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BotAccess;

    /**
     * @param integer $Time 秒级别时间戳
     * @param integer $Access QPS
     * @param integer $Up 上行带宽峰值，单位B
     * @param integer $Down 下行带宽峰值，单位B
     * @param integer $Attack Web攻击次数
     * @param integer $Cc CC攻击次数
     * @param integer $BotAccess Bot qps
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Access",$param) and $param["Access"] !== null) {
            $this->Access = $param["Access"];
        }

        if (array_key_exists("Up",$param) and $param["Up"] !== null) {
            $this->Up = $param["Up"];
        }

        if (array_key_exists("Down",$param) and $param["Down"] !== null) {
            $this->Down = $param["Down"];
        }

        if (array_key_exists("Attack",$param) and $param["Attack"] !== null) {
            $this->Attack = $param["Attack"];
        }

        if (array_key_exists("Cc",$param) and $param["Cc"] !== null) {
            $this->Cc = $param["Cc"];
        }

        if (array_key_exists("BotAccess",$param) and $param["BotAccess"] !== null) {
            $this->BotAccess = $param["BotAccess"];
        }
    }
}
