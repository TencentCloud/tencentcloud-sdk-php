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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 协议封禁配置
 *
 * @method integer getDropTcp() 获取TCP封禁，取值[0(封禁关)，1(封禁开)]
 * @method void setDropTcp(integer $DropTcp) 设置TCP封禁，取值[0(封禁关)，1(封禁开)]
 * @method integer getDropUdp() 获取UDP封禁，取值[0(封禁关)，1(封禁开)]
 * @method void setDropUdp(integer $DropUdp) 设置UDP封禁，取值[0(封禁关)，1(封禁开)]
 * @method integer getDropIcmp() 获取ICMP封禁，取值[0(封禁关)，1(封禁开)]
 * @method void setDropIcmp(integer $DropIcmp) 设置ICMP封禁，取值[0(封禁关)，1(封禁开)]
 * @method integer getDropOther() 获取其他协议封禁，取值[0(封禁关)，1(封禁开)]
 * @method void setDropOther(integer $DropOther) 设置其他协议封禁，取值[0(封禁关)，1(封禁开)]
 * @method integer getCheckExceptNullConnect() 获取异常空连接防护，取值[0(防护关)，1(防护开)]
 * @method void setCheckExceptNullConnect(integer $CheckExceptNullConnect) 设置异常空连接防护，取值[0(防护关)，1(防护开)]
 * @method integer getPingOfDeath() 获取ping of death防护，取值[0(防护关)，1(防护开)]
 * @method void setPingOfDeath(integer $PingOfDeath) 设置ping of death防护，取值[0(防护关)，1(防护开)]
 * @method integer getTearDrop() 获取tear drop防护，取值[0(防护关)，1(防护开)]
 * @method void setTearDrop(integer $TearDrop) 设置tear drop防护，取值[0(防护关)，1(防护开)]
 */
class ProtocolBlockConfig extends AbstractModel
{
    /**
     * @var integer TCP封禁，取值[0(封禁关)，1(封禁开)]
     */
    public $DropTcp;

    /**
     * @var integer UDP封禁，取值[0(封禁关)，1(封禁开)]
     */
    public $DropUdp;

    /**
     * @var integer ICMP封禁，取值[0(封禁关)，1(封禁开)]
     */
    public $DropIcmp;

    /**
     * @var integer 其他协议封禁，取值[0(封禁关)，1(封禁开)]
     */
    public $DropOther;

    /**
     * @var integer 异常空连接防护，取值[0(防护关)，1(防护开)]
     */
    public $CheckExceptNullConnect;

    /**
     * @var integer ping of death防护，取值[0(防护关)，1(防护开)]
     */
    public $PingOfDeath;

    /**
     * @var integer tear drop防护，取值[0(防护关)，1(防护开)]
     */
    public $TearDrop;

    /**
     * @param integer $DropTcp TCP封禁，取值[0(封禁关)，1(封禁开)]
     * @param integer $DropUdp UDP封禁，取值[0(封禁关)，1(封禁开)]
     * @param integer $DropIcmp ICMP封禁，取值[0(封禁关)，1(封禁开)]
     * @param integer $DropOther 其他协议封禁，取值[0(封禁关)，1(封禁开)]
     * @param integer $CheckExceptNullConnect 异常空连接防护，取值[0(防护关)，1(防护开)]
     * @param integer $PingOfDeath ping of death防护，取值[0(防护关)，1(防护开)]
     * @param integer $TearDrop tear drop防护，取值[0(防护关)，1(防护开)]
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
        if (array_key_exists("DropTcp",$param) and $param["DropTcp"] !== null) {
            $this->DropTcp = $param["DropTcp"];
        }

        if (array_key_exists("DropUdp",$param) and $param["DropUdp"] !== null) {
            $this->DropUdp = $param["DropUdp"];
        }

        if (array_key_exists("DropIcmp",$param) and $param["DropIcmp"] !== null) {
            $this->DropIcmp = $param["DropIcmp"];
        }

        if (array_key_exists("DropOther",$param) and $param["DropOther"] !== null) {
            $this->DropOther = $param["DropOther"];
        }

        if (array_key_exists("CheckExceptNullConnect",$param) and $param["CheckExceptNullConnect"] !== null) {
            $this->CheckExceptNullConnect = $param["CheckExceptNullConnect"];
        }

        if (array_key_exists("PingOfDeath",$param) and $param["PingOfDeath"] !== null) {
            $this->PingOfDeath = $param["PingOfDeath"];
        }

        if (array_key_exists("TearDrop",$param) and $param["TearDrop"] !== null) {
            $this->TearDrop = $param["TearDrop"];
        }
    }
}
