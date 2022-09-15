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
 * DDoS配置端口过滤
 *
 * @method integer getDportEnd() 获取目的端口结束，取值范围0-65535。
 * @method void setDportEnd(integer $DportEnd) 设置目的端口结束，取值范围0-65535。
 * @method integer getDportStart() 获取目的端口开始，取值范围0-65535。
 * @method void setDportStart(integer $DportStart) 设置目的端口开始，取值范围0-65535。
 * @method integer getSportEnd() 获取源端口结束，取值范围0-65535。
 * @method void setSportEnd(integer $SportEnd) 设置源端口结束，取值范围0-65535。
 * @method integer getSportStart() 获取源端口开始，取值范围0-65535。
 * @method void setSportStart(integer $SportStart) 设置源端口开始，取值范围0-65535。
 * @method string getProtocol() 获取协议，取值有：
<li>tcp ：tcp协议 ；</li>
<li>udp ：udp协议 ；</li>
<li>all ：全部协议 。</li>
 * @method void setProtocol(string $Protocol) 设置协议，取值有：
<li>tcp ：tcp协议 ；</li>
<li>udp ：udp协议 ；</li>
<li>all ：全部协议 。</li>
 * @method string getAction() 获取执行动作，取值为：
<li>drop ：丢弃 ；</li>
<li>transmit ：放行 ；</li>
<li>forward ：继续防护 。</li>
 * @method void setAction(string $Action) 设置执行动作，取值为：
<li>drop ：丢弃 ；</li>
<li>transmit ：放行 ；</li>
<li>forward ：继续防护 。</li>
 * @method integer getDefault() 获取是否为系统配置，取值为：
<li>0 ：修改配置 ；</li>
<li>1 ：系统默认配置 。</li>
 * @method void setDefault(integer $Default) 设置是否为系统配置，取值为：
<li>0 ：修改配置 ；</li>
<li>1 ：系统默认配置 。</li>
 */
class DDoSAcl extends AbstractModel
{
    /**
     * @var integer 目的端口结束，取值范围0-65535。
     */
    public $DportEnd;

    /**
     * @var integer 目的端口开始，取值范围0-65535。
     */
    public $DportStart;

    /**
     * @var integer 源端口结束，取值范围0-65535。
     */
    public $SportEnd;

    /**
     * @var integer 源端口开始，取值范围0-65535。
     */
    public $SportStart;

    /**
     * @var string 协议，取值有：
<li>tcp ：tcp协议 ；</li>
<li>udp ：udp协议 ；</li>
<li>all ：全部协议 。</li>
     */
    public $Protocol;

    /**
     * @var string 执行动作，取值为：
<li>drop ：丢弃 ；</li>
<li>transmit ：放行 ；</li>
<li>forward ：继续防护 。</li>
     */
    public $Action;

    /**
     * @var integer 是否为系统配置，取值为：
<li>0 ：修改配置 ；</li>
<li>1 ：系统默认配置 。</li>
     */
    public $Default;

    /**
     * @param integer $DportEnd 目的端口结束，取值范围0-65535。
     * @param integer $DportStart 目的端口开始，取值范围0-65535。
     * @param integer $SportEnd 源端口结束，取值范围0-65535。
     * @param integer $SportStart 源端口开始，取值范围0-65535。
     * @param string $Protocol 协议，取值有：
<li>tcp ：tcp协议 ；</li>
<li>udp ：udp协议 ；</li>
<li>all ：全部协议 。</li>
     * @param string $Action 执行动作，取值为：
<li>drop ：丢弃 ；</li>
<li>transmit ：放行 ；</li>
<li>forward ：继续防护 。</li>
     * @param integer $Default 是否为系统配置，取值为：
<li>0 ：修改配置 ；</li>
<li>1 ：系统默认配置 。</li>
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
        if (array_key_exists("DportEnd",$param) and $param["DportEnd"] !== null) {
            $this->DportEnd = $param["DportEnd"];
        }

        if (array_key_exists("DportStart",$param) and $param["DportStart"] !== null) {
            $this->DportStart = $param["DportStart"];
        }

        if (array_key_exists("SportEnd",$param) and $param["SportEnd"] !== null) {
            $this->SportEnd = $param["SportEnd"];
        }

        if (array_key_exists("SportStart",$param) and $param["SportStart"] !== null) {
            $this->SportStart = $param["SportStart"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Default",$param) and $param["Default"] !== null) {
            $this->Default = $param["Default"];
        }
    }
}
