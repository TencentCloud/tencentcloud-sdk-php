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
 * @method string getAction() 获取执行动作，取值有：
<li>drop ：丢弃 ；</li>
<li>transmit ：放行 ；</li>
<li>drop_block ：丢弃并拉黑 ；</li>
<li>forward ：继续防护 。</li>
 * @method void setAction(string $Action) 设置执行动作，取值有：
<li>drop ：丢弃 ；</li>
<li>transmit ：放行 ；</li>
<li>drop_block ：丢弃并拉黑 ；</li>
<li>forward ：继续防护 。</li>
 * @method string getProtocol() 获取协议，取值有：
<li>tcp ：tcp协议 ；</li>
<li>udp ：udp协议 ；</li>
<li>icmp ：icmp协议 ；</li>
<li>all ：全部协议 。</li>
 * @method void setProtocol(string $Protocol) 设置协议，取值有：
<li>tcp ：tcp协议 ；</li>
<li>udp ：udp协议 ；</li>
<li>icmp ：icmp协议 ；</li>
<li>all ：全部协议 。</li>
 * @method integer getDportStart() 获取目标端口开始，取值范围0-65535。
 * @method void setDportStart(integer $DportStart) 设置目标端口开始，取值范围0-65535。
 * @method integer getDportEnd() 获取目标端口结束，取值范围0-65535。
 * @method void setDportEnd(integer $DportEnd) 设置目标端口结束，取值范围0-65535。
 * @method integer getPacketMin() 获取最小包长，取值范围0-1500。
 * @method void setPacketMin(integer $PacketMin) 设置最小包长，取值范围0-1500。
 * @method integer getPacketMax() 获取最大包长，取值范围0-1500。
 * @method void setPacketMax(integer $PacketMax) 设置最大包长，取值范围0-1500。
 * @method integer getSportStart() 获取源端口开始，取值范围0-65535。
 * @method void setSportStart(integer $SportStart) 设置源端口开始，取值范围0-65535。
 * @method integer getSportEnd() 获取源端口结束，取值范围0-65535。
 * @method void setSportEnd(integer $SportEnd) 设置源端口结束，取值范围0-65535。
 * @method string getMatchType() 获取匹配方式1，【特征1】，取值有：
<li>pcre ：正则匹配 ；</li>
<li>sunday ：字符串匹配 。</li>默认为空字符串。
 * @method void setMatchType(string $MatchType) 设置匹配方式1，【特征1】，取值有：
<li>pcre ：正则匹配 ；</li>
<li>sunday ：字符串匹配 。</li>默认为空字符串。
 * @method integer getIsNot() 获取取非判断，该参数对MatchType配合使用，【特征1】，取值有：
<li>0 ：匹配 ；</li>
<li>1 ：不匹配 。</li>
 * @method void setIsNot(integer $IsNot) 设置取非判断，该参数对MatchType配合使用，【特征1】，取值有：
<li>0 ：匹配 ；</li>
<li>1 ：不匹配 。</li>
 * @method integer getOffset() 获取偏移量1，【特征1】，取值范围0-1500。
 * @method void setOffset(integer $Offset) 设置偏移量1，【特征1】，取值范围0-1500。
 * @method integer getDepth() 获取检测包字符深度，【特征1】，取值范围1-1500。
 * @method void setDepth(integer $Depth) 设置检测包字符深度，【特征1】，取值范围1-1500。
 * @method string getMatchBegin() 获取匹配开始层级，层级参考计算机网络结构，取值有：
<li>begin_l5 ：载荷开始检测 ；</li>
<li>begin_l4 ：tcp/udp首部开始检测 ；</li>
<li>begin_l3 ：ip首部开始检测 。</li>
 * @method void setMatchBegin(string $MatchBegin) 设置匹配开始层级，层级参考计算机网络结构，取值有：
<li>begin_l5 ：载荷开始检测 ；</li>
<li>begin_l4 ：tcp/udp首部开始检测 ；</li>
<li>begin_l3 ：ip首部开始检测 。</li>
 * @method string getStr() 获取正则或字符串匹配的内容，【特征1】。
 * @method void setStr(string $Str) 设置正则或字符串匹配的内容，【特征1】。
 * @method string getMatchType2() 获取匹配方式2，【特征2】，取值有：
<li>pcre ：正则匹配 ；</li>
<li>sunday ：字符串匹配 。</li>默认为空字符串。
 * @method void setMatchType2(string $MatchType2) 设置匹配方式2，【特征2】，取值有：
<li>pcre ：正则匹配 ；</li>
<li>sunday ：字符串匹配 。</li>默认为空字符串。
 * @method integer getIsNot2() 获取取非判断2，该参数对MatchType2配合使用，【特征2】，取值有：
<li>0 ：匹配 ；</li>
<li>1 ：不匹配 。</li>
 * @method void setIsNot2(integer $IsNot2) 设置取非判断2，该参数对MatchType2配合使用，【特征2】，取值有：
<li>0 ：匹配 ；</li>
<li>1 ：不匹配 。</li>
 * @method integer getOffset2() 获取偏移量2，【特征2】，取值范围0-1500。
 * @method void setOffset2(integer $Offset2) 设置偏移量2，【特征2】，取值范围0-1500。
 * @method integer getDepth2() 获取检测包字符深度，【特征2】，取值范围1-1500。
 * @method void setDepth2(integer $Depth2) 设置检测包字符深度，【特征2】，取值范围1-1500。
 * @method string getMatchBegin2() 获取匹配开始层级，层级参考计算机网络结构，取值有：
<li>begin_l5 ：载荷开始检测 ；</li>
<li>begin_l4 ：tcp/udp首部开始检测；</li>
<li>begin_l3 ：ip首部开始检测 。</li>
 * @method void setMatchBegin2(string $MatchBegin2) 设置匹配开始层级，层级参考计算机网络结构，取值有：
<li>begin_l5 ：载荷开始检测 ；</li>
<li>begin_l4 ：tcp/udp首部开始检测；</li>
<li>begin_l3 ：ip首部开始检测 。</li>
 * @method string getStr2() 获取正则或字符串匹配的内容，【特征2】。
 * @method void setStr2(string $Str2) 设置正则或字符串匹配的内容，【特征2】。
 * @method string getMatchLogic() 获取多特征关系，仅配置【特征1】时填 none，存在【特征2】配置可不填。
 * @method void setMatchLogic(string $MatchLogic) 设置多特征关系，仅配置【特征1】时填 none，存在【特征2】配置可不填。
 */
class DDoSFeaturesFilter extends AbstractModel
{
    /**
     * @var string 执行动作，取值有：
<li>drop ：丢弃 ；</li>
<li>transmit ：放行 ；</li>
<li>drop_block ：丢弃并拉黑 ；</li>
<li>forward ：继续防护 。</li>
     */
    public $Action;

    /**
     * @var string 协议，取值有：
<li>tcp ：tcp协议 ；</li>
<li>udp ：udp协议 ；</li>
<li>icmp ：icmp协议 ；</li>
<li>all ：全部协议 。</li>
     */
    public $Protocol;

    /**
     * @var integer 目标端口开始，取值范围0-65535。
     */
    public $DportStart;

    /**
     * @var integer 目标端口结束，取值范围0-65535。
     */
    public $DportEnd;

    /**
     * @var integer 最小包长，取值范围0-1500。
     */
    public $PacketMin;

    /**
     * @var integer 最大包长，取值范围0-1500。
     */
    public $PacketMax;

    /**
     * @var integer 源端口开始，取值范围0-65535。
     */
    public $SportStart;

    /**
     * @var integer 源端口结束，取值范围0-65535。
     */
    public $SportEnd;

    /**
     * @var string 匹配方式1，【特征1】，取值有：
<li>pcre ：正则匹配 ；</li>
<li>sunday ：字符串匹配 。</li>默认为空字符串。
     */
    public $MatchType;

    /**
     * @var integer 取非判断，该参数对MatchType配合使用，【特征1】，取值有：
<li>0 ：匹配 ；</li>
<li>1 ：不匹配 。</li>
     */
    public $IsNot;

    /**
     * @var integer 偏移量1，【特征1】，取值范围0-1500。
     */
    public $Offset;

    /**
     * @var integer 检测包字符深度，【特征1】，取值范围1-1500。
     */
    public $Depth;

    /**
     * @var string 匹配开始层级，层级参考计算机网络结构，取值有：
<li>begin_l5 ：载荷开始检测 ；</li>
<li>begin_l4 ：tcp/udp首部开始检测 ；</li>
<li>begin_l3 ：ip首部开始检测 。</li>
     */
    public $MatchBegin;

    /**
     * @var string 正则或字符串匹配的内容，【特征1】。
     */
    public $Str;

    /**
     * @var string 匹配方式2，【特征2】，取值有：
<li>pcre ：正则匹配 ；</li>
<li>sunday ：字符串匹配 。</li>默认为空字符串。
     */
    public $MatchType2;

    /**
     * @var integer 取非判断2，该参数对MatchType2配合使用，【特征2】，取值有：
<li>0 ：匹配 ；</li>
<li>1 ：不匹配 。</li>
     */
    public $IsNot2;

    /**
     * @var integer 偏移量2，【特征2】，取值范围0-1500。
     */
    public $Offset2;

    /**
     * @var integer 检测包字符深度，【特征2】，取值范围1-1500。
     */
    public $Depth2;

    /**
     * @var string 匹配开始层级，层级参考计算机网络结构，取值有：
<li>begin_l5 ：载荷开始检测 ；</li>
<li>begin_l4 ：tcp/udp首部开始检测；</li>
<li>begin_l3 ：ip首部开始检测 。</li>
     */
    public $MatchBegin2;

    /**
     * @var string 正则或字符串匹配的内容，【特征2】。
     */
    public $Str2;

    /**
     * @var string 多特征关系，仅配置【特征1】时填 none，存在【特征2】配置可不填。
     */
    public $MatchLogic;

    /**
     * @param string $Action 执行动作，取值有：
<li>drop ：丢弃 ；</li>
<li>transmit ：放行 ；</li>
<li>drop_block ：丢弃并拉黑 ；</li>
<li>forward ：继续防护 。</li>
     * @param string $Protocol 协议，取值有：
<li>tcp ：tcp协议 ；</li>
<li>udp ：udp协议 ；</li>
<li>icmp ：icmp协议 ；</li>
<li>all ：全部协议 。</li>
     * @param integer $DportStart 目标端口开始，取值范围0-65535。
     * @param integer $DportEnd 目标端口结束，取值范围0-65535。
     * @param integer $PacketMin 最小包长，取值范围0-1500。
     * @param integer $PacketMax 最大包长，取值范围0-1500。
     * @param integer $SportStart 源端口开始，取值范围0-65535。
     * @param integer $SportEnd 源端口结束，取值范围0-65535。
     * @param string $MatchType 匹配方式1，【特征1】，取值有：
<li>pcre ：正则匹配 ；</li>
<li>sunday ：字符串匹配 。</li>默认为空字符串。
     * @param integer $IsNot 取非判断，该参数对MatchType配合使用，【特征1】，取值有：
<li>0 ：匹配 ；</li>
<li>1 ：不匹配 。</li>
     * @param integer $Offset 偏移量1，【特征1】，取值范围0-1500。
     * @param integer $Depth 检测包字符深度，【特征1】，取值范围1-1500。
     * @param string $MatchBegin 匹配开始层级，层级参考计算机网络结构，取值有：
<li>begin_l5 ：载荷开始检测 ；</li>
<li>begin_l4 ：tcp/udp首部开始检测 ；</li>
<li>begin_l3 ：ip首部开始检测 。</li>
     * @param string $Str 正则或字符串匹配的内容，【特征1】。
     * @param string $MatchType2 匹配方式2，【特征2】，取值有：
<li>pcre ：正则匹配 ；</li>
<li>sunday ：字符串匹配 。</li>默认为空字符串。
     * @param integer $IsNot2 取非判断2，该参数对MatchType2配合使用，【特征2】，取值有：
<li>0 ：匹配 ；</li>
<li>1 ：不匹配 。</li>
     * @param integer $Offset2 偏移量2，【特征2】，取值范围0-1500。
     * @param integer $Depth2 检测包字符深度，【特征2】，取值范围1-1500。
     * @param string $MatchBegin2 匹配开始层级，层级参考计算机网络结构，取值有：
<li>begin_l5 ：载荷开始检测 ；</li>
<li>begin_l4 ：tcp/udp首部开始检测；</li>
<li>begin_l3 ：ip首部开始检测 。</li>
     * @param string $Str2 正则或字符串匹配的内容，【特征2】。
     * @param string $MatchLogic 多特征关系，仅配置【特征1】时填 none，存在【特征2】配置可不填。
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

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("DportStart",$param) and $param["DportStart"] !== null) {
            $this->DportStart = $param["DportStart"];
        }

        if (array_key_exists("DportEnd",$param) and $param["DportEnd"] !== null) {
            $this->DportEnd = $param["DportEnd"];
        }

        if (array_key_exists("PacketMin",$param) and $param["PacketMin"] !== null) {
            $this->PacketMin = $param["PacketMin"];
        }

        if (array_key_exists("PacketMax",$param) and $param["PacketMax"] !== null) {
            $this->PacketMax = $param["PacketMax"];
        }

        if (array_key_exists("SportStart",$param) and $param["SportStart"] !== null) {
            $this->SportStart = $param["SportStart"];
        }

        if (array_key_exists("SportEnd",$param) and $param["SportEnd"] !== null) {
            $this->SportEnd = $param["SportEnd"];
        }

        if (array_key_exists("MatchType",$param) and $param["MatchType"] !== null) {
            $this->MatchType = $param["MatchType"];
        }

        if (array_key_exists("IsNot",$param) and $param["IsNot"] !== null) {
            $this->IsNot = $param["IsNot"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Depth",$param) and $param["Depth"] !== null) {
            $this->Depth = $param["Depth"];
        }

        if (array_key_exists("MatchBegin",$param) and $param["MatchBegin"] !== null) {
            $this->MatchBegin = $param["MatchBegin"];
        }

        if (array_key_exists("Str",$param) and $param["Str"] !== null) {
            $this->Str = $param["Str"];
        }

        if (array_key_exists("MatchType2",$param) and $param["MatchType2"] !== null) {
            $this->MatchType2 = $param["MatchType2"];
        }

        if (array_key_exists("IsNot2",$param) and $param["IsNot2"] !== null) {
            $this->IsNot2 = $param["IsNot2"];
        }

        if (array_key_exists("Offset2",$param) and $param["Offset2"] !== null) {
            $this->Offset2 = $param["Offset2"];
        }

        if (array_key_exists("Depth2",$param) and $param["Depth2"] !== null) {
            $this->Depth2 = $param["Depth2"];
        }

        if (array_key_exists("MatchBegin2",$param) and $param["MatchBegin2"] !== null) {
            $this->MatchBegin2 = $param["MatchBegin2"];
        }

        if (array_key_exists("Str2",$param) and $param["Str2"] !== null) {
            $this->Str2 = $param["Str2"];
        }

        if (array_key_exists("MatchLogic",$param) and $param["MatchLogic"] !== null) {
            $this->MatchLogic = $param["MatchLogic"];
        }
    }
}
