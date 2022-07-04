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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DDoS协议防护+连接防护
 *
 * @method string getDropTcp() 获取tcp协议封禁 on-开；off-关
 * @method void setDropTcp(string $DropTcp) 设置tcp协议封禁 on-开；off-关
 * @method string getDropUdp() 获取udp协议封禁 on-开；off-关
 * @method void setDropUdp(string $DropUdp) 设置udp协议封禁 on-开；off-关
 * @method string getDropIcmp() 获取icmp协议封禁 on-开；off-关
 * @method void setDropIcmp(string $DropIcmp) 设置icmp协议封禁 on-开；off-关
 * @method string getDropOther() 获取其他协议封禁 on-开；off-关
 * @method void setDropOther(string $DropOther) 设置其他协议封禁 on-开；off-关
 * @method integer getSourceCreateLimit() 获取源每秒新建数限制  0-4294967295
 * @method void setSourceCreateLimit(integer $SourceCreateLimit) 设置源每秒新建数限制  0-4294967295
 * @method integer getSourceConnectLimit() 获取源并发连接控制 0-4294967295
 * @method void setSourceConnectLimit(integer $SourceConnectLimit) 设置源并发连接控制 0-4294967295
 * @method integer getDestinationCreateLimit() 获取目的每秒新建数限制 0-4294967295
 * @method void setDestinationCreateLimit(integer $DestinationCreateLimit) 设置目的每秒新建数限制 0-4294967295
 * @method integer getDestinationConnectLimit() 获取目的端口的并发连接控制 0-4294967295
 * @method void setDestinationConnectLimit(integer $DestinationConnectLimit) 设置目的端口的并发连接控制 0-4294967295
 * @method integer getAbnormalConnectNum() 获取异常连接数阈值  0-4294967295
 * @method void setAbnormalConnectNum(integer $AbnormalConnectNum) 设置异常连接数阈值  0-4294967295
 * @method integer getAbnormalSynRatio() 获取syn占比异常阈值 0-100
 * @method void setAbnormalSynRatio(integer $AbnormalSynRatio) 设置syn占比异常阈值 0-100
 * @method integer getAbnormalSynNum() 获取syn个数异常阈值 0-65535
 * @method void setAbnormalSynNum(integer $AbnormalSynNum) 设置syn个数异常阈值 0-65535
 * @method integer getConnectTimeout() 获取连接超时检测 0-65535
 * @method void setConnectTimeout(integer $ConnectTimeout) 设置连接超时检测 0-65535
 * @method string getEmptyConnectProtect() 获取空连接防护开启 0-1
 * @method void setEmptyConnectProtect(string $EmptyConnectProtect) 设置空连接防护开启 0-1
 * @method string getUdpShard() 获取UDP分片开关；off-关闭，on-开启
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUdpShard(string $UdpShard) 设置UDP分片开关；off-关闭，on-开启
注意：此字段可能返回 null，表示取不到有效值。
 */
class DDoSAntiPly extends AbstractModel
{
    /**
     * @var string tcp协议封禁 on-开；off-关
     */
    public $DropTcp;

    /**
     * @var string udp协议封禁 on-开；off-关
     */
    public $DropUdp;

    /**
     * @var string icmp协议封禁 on-开；off-关
     */
    public $DropIcmp;

    /**
     * @var string 其他协议封禁 on-开；off-关
     */
    public $DropOther;

    /**
     * @var integer 源每秒新建数限制  0-4294967295
     */
    public $SourceCreateLimit;

    /**
     * @var integer 源并发连接控制 0-4294967295
     */
    public $SourceConnectLimit;

    /**
     * @var integer 目的每秒新建数限制 0-4294967295
     */
    public $DestinationCreateLimit;

    /**
     * @var integer 目的端口的并发连接控制 0-4294967295
     */
    public $DestinationConnectLimit;

    /**
     * @var integer 异常连接数阈值  0-4294967295
     */
    public $AbnormalConnectNum;

    /**
     * @var integer syn占比异常阈值 0-100
     */
    public $AbnormalSynRatio;

    /**
     * @var integer syn个数异常阈值 0-65535
     */
    public $AbnormalSynNum;

    /**
     * @var integer 连接超时检测 0-65535
     */
    public $ConnectTimeout;

    /**
     * @var string 空连接防护开启 0-1
     */
    public $EmptyConnectProtect;

    /**
     * @var string UDP分片开关；off-关闭，on-开启
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UdpShard;

    /**
     * @param string $DropTcp tcp协议封禁 on-开；off-关
     * @param string $DropUdp udp协议封禁 on-开；off-关
     * @param string $DropIcmp icmp协议封禁 on-开；off-关
     * @param string $DropOther 其他协议封禁 on-开；off-关
     * @param integer $SourceCreateLimit 源每秒新建数限制  0-4294967295
     * @param integer $SourceConnectLimit 源并发连接控制 0-4294967295
     * @param integer $DestinationCreateLimit 目的每秒新建数限制 0-4294967295
     * @param integer $DestinationConnectLimit 目的端口的并发连接控制 0-4294967295
     * @param integer $AbnormalConnectNum 异常连接数阈值  0-4294967295
     * @param integer $AbnormalSynRatio syn占比异常阈值 0-100
     * @param integer $AbnormalSynNum syn个数异常阈值 0-65535
     * @param integer $ConnectTimeout 连接超时检测 0-65535
     * @param string $EmptyConnectProtect 空连接防护开启 0-1
     * @param string $UdpShard UDP分片开关；off-关闭，on-开启
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

        if (array_key_exists("SourceCreateLimit",$param) and $param["SourceCreateLimit"] !== null) {
            $this->SourceCreateLimit = $param["SourceCreateLimit"];
        }

        if (array_key_exists("SourceConnectLimit",$param) and $param["SourceConnectLimit"] !== null) {
            $this->SourceConnectLimit = $param["SourceConnectLimit"];
        }

        if (array_key_exists("DestinationCreateLimit",$param) and $param["DestinationCreateLimit"] !== null) {
            $this->DestinationCreateLimit = $param["DestinationCreateLimit"];
        }

        if (array_key_exists("DestinationConnectLimit",$param) and $param["DestinationConnectLimit"] !== null) {
            $this->DestinationConnectLimit = $param["DestinationConnectLimit"];
        }

        if (array_key_exists("AbnormalConnectNum",$param) and $param["AbnormalConnectNum"] !== null) {
            $this->AbnormalConnectNum = $param["AbnormalConnectNum"];
        }

        if (array_key_exists("AbnormalSynRatio",$param) and $param["AbnormalSynRatio"] !== null) {
            $this->AbnormalSynRatio = $param["AbnormalSynRatio"];
        }

        if (array_key_exists("AbnormalSynNum",$param) and $param["AbnormalSynNum"] !== null) {
            $this->AbnormalSynNum = $param["AbnormalSynNum"];
        }

        if (array_key_exists("ConnectTimeout",$param) and $param["ConnectTimeout"] !== null) {
            $this->ConnectTimeout = $param["ConnectTimeout"];
        }

        if (array_key_exists("EmptyConnectProtect",$param) and $param["EmptyConnectProtect"] !== null) {
            $this->EmptyConnectProtect = $param["EmptyConnectProtect"];
        }

        if (array_key_exists("UdpShard",$param) and $param["UdpShard"] !== null) {
            $this->UdpShard = $param["UdpShard"];
        }
    }
}
