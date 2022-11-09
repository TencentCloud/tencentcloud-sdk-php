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
 * 特征过滤配置
 *
 * @method string getProtocol() 获取协议，取值[tcp udp icmp all]
 * @method void setProtocol(string $Protocol) 设置协议，取值[tcp udp icmp all]
 * @method integer getSportStart() 获取起始源端口，取值0~65535
 * @method void setSportStart(integer $SportStart) 设置起始源端口，取值0~65535
 * @method integer getSportEnd() 获取结束源端口，取值1~65535，必须大于等于起始源端口
 * @method void setSportEnd(integer $SportEnd) 设置结束源端口，取值1~65535，必须大于等于起始源端口
 * @method integer getDportStart() 获取起始目的端口，取值0~65535
 * @method void setDportStart(integer $DportStart) 设置起始目的端口，取值0~65535
 * @method integer getDportEnd() 获取结束目的端口，取值1~65535，必须大于等于起始目的端口
 * @method void setDportEnd(integer $DportEnd) 设置结束目的端口，取值1~65535，必须大于等于起始目的端口
 * @method integer getPktlenMin() 获取最小报文长度，取值1-1500
 * @method void setPktlenMin(integer $PktlenMin) 设置最小报文长度，取值1-1500
 * @method integer getPktlenMax() 获取最大报文长度，取值1-1500，必须大于等于最小报文长度
 * @method void setPktlenMax(integer $PktlenMax) 设置最大报文长度，取值1-1500，必须大于等于最小报文长度
 * @method string getAction() 获取动作，取值[
drop(丢弃)
transmit(放行)
drop_black(丢弃并拉黑)
drop_rst(拦截)
drop_black_rst(拦截并拉黑)
forward(继续防护)
]
 * @method void setAction(string $Action) 设置动作，取值[
drop(丢弃)
transmit(放行)
drop_black(丢弃并拉黑)
drop_rst(拦截)
drop_black_rst(拦截并拉黑)
forward(继续防护)
]
 * @method string getMatchBegin() 获取检测位置，取值[
begin_l3(IP头)
begin_l4(TCP/UDP头)
begin_l5(T载荷)
no_match(不匹配)
]
 * @method void setMatchBegin(string $MatchBegin) 设置检测位置，取值[
begin_l3(IP头)
begin_l4(TCP/UDP头)
begin_l5(T载荷)
no_match(不匹配)
]
 * @method string getMatchType() 获取检测类型，取值[
sunday(关键字)
pcre(正则表达式)
]
 * @method void setMatchType(string $MatchType) 设置检测类型，取值[
sunday(关键字)
pcre(正则表达式)
]
 * @method string getStr() 获取检测值，关键字符串或正则表达式,取值[
当检测类型为sunday时，请填写字符串或者16进制字节码，例如\x313233对应的是字符串"123"的16进制字节码;
当检测类型为pcre时, 请填写正则表达式字符串;
]
 * @method void setStr(string $Str) 设置检测值，关键字符串或正则表达式,取值[
当检测类型为sunday时，请填写字符串或者16进制字节码，例如\x313233对应的是字符串"123"的16进制字节码;
当检测类型为pcre时, 请填写正则表达式字符串;
]
 * @method integer getDepth() 获取从检测位置开始的检测深度，取值[0,1500]
 * @method void setDepth(integer $Depth) 设置从检测位置开始的检测深度，取值[0,1500]
 * @method integer getOffset() 获取从检测位置开始的偏移量，取值范围[0,Depth]
 * @method void setOffset(integer $Offset) 设置从检测位置开始的偏移量，取值范围[0,Depth]
 * @method integer getIsNot() 获取是否包含检测值，取值[
0(包含)
1(不包含)
]
 * @method void setIsNot(integer $IsNot) 设置是否包含检测值，取值[
0(包含)
1(不包含)
]
 * @method string getMatchLogic() 获取当有第二个检测条件时，与第一检测条件的且或关系，取值[
and(且的关系)
none(当没有第二个检测条件时填写此值)
]
 * @method void setMatchLogic(string $MatchLogic) 设置当有第二个检测条件时，与第一检测条件的且或关系，取值[
and(且的关系)
none(当没有第二个检测条件时填写此值)
]
 * @method string getMatchBegin2() 获取第二个检测位置，取值[
begin_l5(载荷)
no_match(不匹配)
]
 * @method void setMatchBegin2(string $MatchBegin2) 设置第二个检测位置，取值[
begin_l5(载荷)
no_match(不匹配)
]
 * @method string getMatchType2() 获取第二个检测类型，取值[
sunday(关键字)
pcre(正则表达式)
]
 * @method void setMatchType2(string $MatchType2) 设置第二个检测类型，取值[
sunday(关键字)
pcre(正则表达式)
]
 * @method string getStr2() 获取第二个检测值，关键字符串或正则表达式,取值[
当检测类型为sunday时，请填写字符串或者16进制字节码，例如\x313233对应的是字符串"123"的16进制字节码;
当检测类型为pcre时, 请填写正则表达式字符串;
]
 * @method void setStr2(string $Str2) 设置第二个检测值，关键字符串或正则表达式,取值[
当检测类型为sunday时，请填写字符串或者16进制字节码，例如\x313233对应的是字符串"123"的16进制字节码;
当检测类型为pcre时, 请填写正则表达式字符串;
]
 * @method integer getDepth2() 获取从第二个检测位置开始的第二个检测深度，取值[0,1500]
 * @method void setDepth2(integer $Depth2) 设置从第二个检测位置开始的第二个检测深度，取值[0,1500]
 * @method integer getOffset2() 获取从第二个检测位置开始的偏移量，取值范围[0,Depth2]
 * @method void setOffset2(integer $Offset2) 设置从第二个检测位置开始的偏移量，取值范围[0,Depth2]
 * @method integer getIsNot2() 获取第二个检测是否包含检测值，取值[
0(包含)
1(不包含)
]
 * @method void setIsNot2(integer $IsNot2) 设置第二个检测是否包含检测值，取值[
0(包含)
1(不包含)
]
 * @method string getId() 获取特征过滤配置添加成功后自动生成的规则ID，当添加新特征过滤配置时，此字段不用填写；
 * @method void setId(string $Id) 设置特征过滤配置添加成功后自动生成的规则ID，当添加新特征过滤配置时，此字段不用填写；
 * @method integer getPktLenGT() 获取大于报文长度，取值1+
 * @method void setPktLenGT(integer $PktLenGT) 设置大于报文长度，取值1+
 */
class PacketFilterConfig extends AbstractModel
{
    /**
     * @var string 协议，取值[tcp udp icmp all]
     */
    public $Protocol;

    /**
     * @var integer 起始源端口，取值0~65535
     */
    public $SportStart;

    /**
     * @var integer 结束源端口，取值1~65535，必须大于等于起始源端口
     */
    public $SportEnd;

    /**
     * @var integer 起始目的端口，取值0~65535
     */
    public $DportStart;

    /**
     * @var integer 结束目的端口，取值1~65535，必须大于等于起始目的端口
     */
    public $DportEnd;

    /**
     * @var integer 最小报文长度，取值1-1500
     */
    public $PktlenMin;

    /**
     * @var integer 最大报文长度，取值1-1500，必须大于等于最小报文长度
     */
    public $PktlenMax;

    /**
     * @var string 动作，取值[
drop(丢弃)
transmit(放行)
drop_black(丢弃并拉黑)
drop_rst(拦截)
drop_black_rst(拦截并拉黑)
forward(继续防护)
]
     */
    public $Action;

    /**
     * @var string 检测位置，取值[
begin_l3(IP头)
begin_l4(TCP/UDP头)
begin_l5(T载荷)
no_match(不匹配)
]
     */
    public $MatchBegin;

    /**
     * @var string 检测类型，取值[
sunday(关键字)
pcre(正则表达式)
]
     */
    public $MatchType;

    /**
     * @var string 检测值，关键字符串或正则表达式,取值[
当检测类型为sunday时，请填写字符串或者16进制字节码，例如\x313233对应的是字符串"123"的16进制字节码;
当检测类型为pcre时, 请填写正则表达式字符串;
]
     */
    public $Str;

    /**
     * @var integer 从检测位置开始的检测深度，取值[0,1500]
     */
    public $Depth;

    /**
     * @var integer 从检测位置开始的偏移量，取值范围[0,Depth]
     */
    public $Offset;

    /**
     * @var integer 是否包含检测值，取值[
0(包含)
1(不包含)
]
     */
    public $IsNot;

    /**
     * @var string 当有第二个检测条件时，与第一检测条件的且或关系，取值[
and(且的关系)
none(当没有第二个检测条件时填写此值)
]
     */
    public $MatchLogic;

    /**
     * @var string 第二个检测位置，取值[
begin_l5(载荷)
no_match(不匹配)
]
     */
    public $MatchBegin2;

    /**
     * @var string 第二个检测类型，取值[
sunday(关键字)
pcre(正则表达式)
]
     */
    public $MatchType2;

    /**
     * @var string 第二个检测值，关键字符串或正则表达式,取值[
当检测类型为sunday时，请填写字符串或者16进制字节码，例如\x313233对应的是字符串"123"的16进制字节码;
当检测类型为pcre时, 请填写正则表达式字符串;
]
     */
    public $Str2;

    /**
     * @var integer 从第二个检测位置开始的第二个检测深度，取值[0,1500]
     */
    public $Depth2;

    /**
     * @var integer 从第二个检测位置开始的偏移量，取值范围[0,Depth2]
     */
    public $Offset2;

    /**
     * @var integer 第二个检测是否包含检测值，取值[
0(包含)
1(不包含)
]
     */
    public $IsNot2;

    /**
     * @var string 特征过滤配置添加成功后自动生成的规则ID，当添加新特征过滤配置时，此字段不用填写；
     */
    public $Id;

    /**
     * @var integer 大于报文长度，取值1+
     */
    public $PktLenGT;

    /**
     * @param string $Protocol 协议，取值[tcp udp icmp all]
     * @param integer $SportStart 起始源端口，取值0~65535
     * @param integer $SportEnd 结束源端口，取值1~65535，必须大于等于起始源端口
     * @param integer $DportStart 起始目的端口，取值0~65535
     * @param integer $DportEnd 结束目的端口，取值1~65535，必须大于等于起始目的端口
     * @param integer $PktlenMin 最小报文长度，取值1-1500
     * @param integer $PktlenMax 最大报文长度，取值1-1500，必须大于等于最小报文长度
     * @param string $Action 动作，取值[
drop(丢弃)
transmit(放行)
drop_black(丢弃并拉黑)
drop_rst(拦截)
drop_black_rst(拦截并拉黑)
forward(继续防护)
]
     * @param string $MatchBegin 检测位置，取值[
begin_l3(IP头)
begin_l4(TCP/UDP头)
begin_l5(T载荷)
no_match(不匹配)
]
     * @param string $MatchType 检测类型，取值[
sunday(关键字)
pcre(正则表达式)
]
     * @param string $Str 检测值，关键字符串或正则表达式,取值[
当检测类型为sunday时，请填写字符串或者16进制字节码，例如\x313233对应的是字符串"123"的16进制字节码;
当检测类型为pcre时, 请填写正则表达式字符串;
]
     * @param integer $Depth 从检测位置开始的检测深度，取值[0,1500]
     * @param integer $Offset 从检测位置开始的偏移量，取值范围[0,Depth]
     * @param integer $IsNot 是否包含检测值，取值[
0(包含)
1(不包含)
]
     * @param string $MatchLogic 当有第二个检测条件时，与第一检测条件的且或关系，取值[
and(且的关系)
none(当没有第二个检测条件时填写此值)
]
     * @param string $MatchBegin2 第二个检测位置，取值[
begin_l5(载荷)
no_match(不匹配)
]
     * @param string $MatchType2 第二个检测类型，取值[
sunday(关键字)
pcre(正则表达式)
]
     * @param string $Str2 第二个检测值，关键字符串或正则表达式,取值[
当检测类型为sunday时，请填写字符串或者16进制字节码，例如\x313233对应的是字符串"123"的16进制字节码;
当检测类型为pcre时, 请填写正则表达式字符串;
]
     * @param integer $Depth2 从第二个检测位置开始的第二个检测深度，取值[0,1500]
     * @param integer $Offset2 从第二个检测位置开始的偏移量，取值范围[0,Depth2]
     * @param integer $IsNot2 第二个检测是否包含检测值，取值[
0(包含)
1(不包含)
]
     * @param string $Id 特征过滤配置添加成功后自动生成的规则ID，当添加新特征过滤配置时，此字段不用填写；
     * @param integer $PktLenGT 大于报文长度，取值1+
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
        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("SportStart",$param) and $param["SportStart"] !== null) {
            $this->SportStart = $param["SportStart"];
        }

        if (array_key_exists("SportEnd",$param) and $param["SportEnd"] !== null) {
            $this->SportEnd = $param["SportEnd"];
        }

        if (array_key_exists("DportStart",$param) and $param["DportStart"] !== null) {
            $this->DportStart = $param["DportStart"];
        }

        if (array_key_exists("DportEnd",$param) and $param["DportEnd"] !== null) {
            $this->DportEnd = $param["DportEnd"];
        }

        if (array_key_exists("PktlenMin",$param) and $param["PktlenMin"] !== null) {
            $this->PktlenMin = $param["PktlenMin"];
        }

        if (array_key_exists("PktlenMax",$param) and $param["PktlenMax"] !== null) {
            $this->PktlenMax = $param["PktlenMax"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("MatchBegin",$param) and $param["MatchBegin"] !== null) {
            $this->MatchBegin = $param["MatchBegin"];
        }

        if (array_key_exists("MatchType",$param) and $param["MatchType"] !== null) {
            $this->MatchType = $param["MatchType"];
        }

        if (array_key_exists("Str",$param) and $param["Str"] !== null) {
            $this->Str = $param["Str"];
        }

        if (array_key_exists("Depth",$param) and $param["Depth"] !== null) {
            $this->Depth = $param["Depth"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("IsNot",$param) and $param["IsNot"] !== null) {
            $this->IsNot = $param["IsNot"];
        }

        if (array_key_exists("MatchLogic",$param) and $param["MatchLogic"] !== null) {
            $this->MatchLogic = $param["MatchLogic"];
        }

        if (array_key_exists("MatchBegin2",$param) and $param["MatchBegin2"] !== null) {
            $this->MatchBegin2 = $param["MatchBegin2"];
        }

        if (array_key_exists("MatchType2",$param) and $param["MatchType2"] !== null) {
            $this->MatchType2 = $param["MatchType2"];
        }

        if (array_key_exists("Str2",$param) and $param["Str2"] !== null) {
            $this->Str2 = $param["Str2"];
        }

        if (array_key_exists("Depth2",$param) and $param["Depth2"] !== null) {
            $this->Depth2 = $param["Depth2"];
        }

        if (array_key_exists("Offset2",$param) and $param["Offset2"] !== null) {
            $this->Offset2 = $param["Offset2"];
        }

        if (array_key_exists("IsNot2",$param) and $param["IsNot2"] !== null) {
            $this->IsNot2 = $param["IsNot2"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("PktLenGT",$param) and $param["PktLenGT"] !== null) {
            $this->PktLenGT = $param["PktLenGT"];
        }
    }
}
