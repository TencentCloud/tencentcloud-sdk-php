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
 * DDoS特征过滤
 *
 * @method string getAction() 获取动作 drop-丢弃；transmit-放行；drop_block-丢弃并拉黑；forward-继续防护
 * @method void setAction(string $Action) 设置动作 drop-丢弃；transmit-放行；drop_block-丢弃并拉黑；forward-继续防护
 * @method integer getDepth() 获取深度值1
 * @method void setDepth(integer $Depth) 设置深度值1
 * @method integer getDepth2() 获取深度值2
 * @method void setDepth2(integer $Depth2) 设置深度值2
 * @method integer getDportEnd() 获取目标端口结束
 * @method void setDportEnd(integer $DportEnd) 设置目标端口结束
 * @method integer getDportStart() 获取目标端口开始
 * @method void setDportStart(integer $DportStart) 设置目标端口开始
 * @method integer getIsNot() 获取取非判断1
 * @method void setIsNot(integer $IsNot) 设置取非判断1
 * @method integer getIsNot2() 获取取非判断2
 * @method void setIsNot2(integer $IsNot2) 设置取非判断2
 * @method string getMatchLogic() 获取多特征关系（单特征时(none)，第二特征相关配置可不填） none；and；or
 * @method void setMatchLogic(string $MatchLogic) 设置多特征关系（单特征时(none)，第二特征相关配置可不填） none；and；or
 * @method string getMatchType() 获取匹配方式1 pcre-正则匹配, sunday-字符串匹配
 * @method void setMatchType(string $MatchType) 设置匹配方式1 pcre-正则匹配, sunday-字符串匹配
 * @method string getMatchType2() 获取匹配方式2 pcre-正则匹配, sunday-字符串匹配
 * @method void setMatchType2(string $MatchType2) 设置匹配方式2 pcre-正则匹配, sunday-字符串匹配
 * @method integer getOffset() 获取偏移量1
 * @method void setOffset(integer $Offset) 设置偏移量1
 * @method integer getOffset2() 获取偏移量2
 * @method void setOffset2(integer $Offset2) 设置偏移量2
 * @method integer getPacketMax() 获取最大包长
 * @method void setPacketMax(integer $PacketMax) 设置最大包长
 * @method integer getPacketMin() 获取最小包长
 * @method void setPacketMin(integer $PacketMin) 设置最小包长
 * @method string getProtocol() 获取协议 tcp；udp；icmp；all
 * @method void setProtocol(string $Protocol) 设置协议 tcp；udp；icmp；all
 * @method integer getSportEnd() 获取源端口结束
 * @method void setSportEnd(integer $SportEnd) 设置源端口结束
 * @method integer getSportStart() 获取源端口开始
 * @method void setSportStart(integer $SportStart) 设置源端口开始
 * @method string getStr() 获取匹配字符串1
 * @method void setStr(string $Str) 设置匹配字符串1
 * @method string getStr2() 获取匹配字符串2
 * @method void setStr2(string $Str2) 设置匹配字符串2
 * @method string getMatchBegin() 获取匹配开始层级，层级参考计算机网络结构 begin_l5, no_match, begin_l3, begin_l4
 * @method void setMatchBegin(string $MatchBegin) 设置匹配开始层级，层级参考计算机网络结构 begin_l5, no_match, begin_l3, begin_l4
 * @method string getMatchBegin2() 获取匹配开始层级，层级参考计算机网络结构 begin_l5, no_match, begin_l3, begin_l4
 * @method void setMatchBegin2(string $MatchBegin2) 设置匹配开始层级，层级参考计算机网络结构 begin_l5, no_match, begin_l3, begin_l4
 */
class DDoSFeaturesFilter extends AbstractModel
{
    /**
     * @var string 动作 drop-丢弃；transmit-放行；drop_block-丢弃并拉黑；forward-继续防护
     */
    public $Action;

    /**
     * @var integer 深度值1
     */
    public $Depth;

    /**
     * @var integer 深度值2
     */
    public $Depth2;

    /**
     * @var integer 目标端口结束
     */
    public $DportEnd;

    /**
     * @var integer 目标端口开始
     */
    public $DportStart;

    /**
     * @var integer 取非判断1
     */
    public $IsNot;

    /**
     * @var integer 取非判断2
     */
    public $IsNot2;

    /**
     * @var string 多特征关系（单特征时(none)，第二特征相关配置可不填） none；and；or
     */
    public $MatchLogic;

    /**
     * @var string 匹配方式1 pcre-正则匹配, sunday-字符串匹配
     */
    public $MatchType;

    /**
     * @var string 匹配方式2 pcre-正则匹配, sunday-字符串匹配
     */
    public $MatchType2;

    /**
     * @var integer 偏移量1
     */
    public $Offset;

    /**
     * @var integer 偏移量2
     */
    public $Offset2;

    /**
     * @var integer 最大包长
     */
    public $PacketMax;

    /**
     * @var integer 最小包长
     */
    public $PacketMin;

    /**
     * @var string 协议 tcp；udp；icmp；all
     */
    public $Protocol;

    /**
     * @var integer 源端口结束
     */
    public $SportEnd;

    /**
     * @var integer 源端口开始
     */
    public $SportStart;

    /**
     * @var string 匹配字符串1
     */
    public $Str;

    /**
     * @var string 匹配字符串2
     */
    public $Str2;

    /**
     * @var string 匹配开始层级，层级参考计算机网络结构 begin_l5, no_match, begin_l3, begin_l4
     */
    public $MatchBegin;

    /**
     * @var string 匹配开始层级，层级参考计算机网络结构 begin_l5, no_match, begin_l3, begin_l4
     */
    public $MatchBegin2;

    /**
     * @param string $Action 动作 drop-丢弃；transmit-放行；drop_block-丢弃并拉黑；forward-继续防护
     * @param integer $Depth 深度值1
     * @param integer $Depth2 深度值2
     * @param integer $DportEnd 目标端口结束
     * @param integer $DportStart 目标端口开始
     * @param integer $IsNot 取非判断1
     * @param integer $IsNot2 取非判断2
     * @param string $MatchLogic 多特征关系（单特征时(none)，第二特征相关配置可不填） none；and；or
     * @param string $MatchType 匹配方式1 pcre-正则匹配, sunday-字符串匹配
     * @param string $MatchType2 匹配方式2 pcre-正则匹配, sunday-字符串匹配
     * @param integer $Offset 偏移量1
     * @param integer $Offset2 偏移量2
     * @param integer $PacketMax 最大包长
     * @param integer $PacketMin 最小包长
     * @param string $Protocol 协议 tcp；udp；icmp；all
     * @param integer $SportEnd 源端口结束
     * @param integer $SportStart 源端口开始
     * @param string $Str 匹配字符串1
     * @param string $Str2 匹配字符串2
     * @param string $MatchBegin 匹配开始层级，层级参考计算机网络结构 begin_l5, no_match, begin_l3, begin_l4
     * @param string $MatchBegin2 匹配开始层级，层级参考计算机网络结构 begin_l5, no_match, begin_l3, begin_l4
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
        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Depth",$param) and $param["Depth"] !== null) {
            $this->Depth = $param["Depth"];
        }

        if (array_key_exists("Depth2",$param) and $param["Depth2"] !== null) {
            $this->Depth2 = $param["Depth2"];
        }

        if (array_key_exists("DportEnd",$param) and $param["DportEnd"] !== null) {
            $this->DportEnd = $param["DportEnd"];
        }

        if (array_key_exists("DportStart",$param) and $param["DportStart"] !== null) {
            $this->DportStart = $param["DportStart"];
        }

        if (array_key_exists("IsNot",$param) and $param["IsNot"] !== null) {
            $this->IsNot = $param["IsNot"];
        }

        if (array_key_exists("IsNot2",$param) and $param["IsNot2"] !== null) {
            $this->IsNot2 = $param["IsNot2"];
        }

        if (array_key_exists("MatchLogic",$param) and $param["MatchLogic"] !== null) {
            $this->MatchLogic = $param["MatchLogic"];
        }

        if (array_key_exists("MatchType",$param) and $param["MatchType"] !== null) {
            $this->MatchType = $param["MatchType"];
        }

        if (array_key_exists("MatchType2",$param) and $param["MatchType2"] !== null) {
            $this->MatchType2 = $param["MatchType2"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Offset2",$param) and $param["Offset2"] !== null) {
            $this->Offset2 = $param["Offset2"];
        }

        if (array_key_exists("PacketMax",$param) and $param["PacketMax"] !== null) {
            $this->PacketMax = $param["PacketMax"];
        }

        if (array_key_exists("PacketMin",$param) and $param["PacketMin"] !== null) {
            $this->PacketMin = $param["PacketMin"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("SportEnd",$param) and $param["SportEnd"] !== null) {
            $this->SportEnd = $param["SportEnd"];
        }

        if (array_key_exists("SportStart",$param) and $param["SportStart"] !== null) {
            $this->SportStart = $param["SportStart"];
        }

        if (array_key_exists("Str",$param) and $param["Str"] !== null) {
            $this->Str = $param["Str"];
        }

        if (array_key_exists("Str2",$param) and $param["Str2"] !== null) {
            $this->Str2 = $param["Str2"];
        }

        if (array_key_exists("MatchBegin",$param) and $param["MatchBegin"] !== null) {
            $this->MatchBegin = $param["MatchBegin"];
        }

        if (array_key_exists("MatchBegin2",$param) and $param["MatchBegin2"] !== null) {
            $this->MatchBegin2 = $param["MatchBegin2"];
        }
    }
}
