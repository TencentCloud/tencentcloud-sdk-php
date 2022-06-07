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
 * @method integer getDportEnd() 获取目的端口end
 * @method void setDportEnd(integer $DportEnd) 设置目的端口end
 * @method integer getDportStart() 获取目的端口start
 * @method void setDportStart(integer $DportStart) 设置目的端口start
 * @method integer getSportEnd() 获取源端口end
 * @method void setSportEnd(integer $SportEnd) 设置源端口end
 * @method integer getSportStart() 获取源端口start
 * @method void setSportStart(integer $SportStart) 设置源端口start
 * @method string getProtocol() 获取协议 'tcp', 'udp', 'all'
 * @method void setProtocol(string $Protocol) 设置协议 'tcp', 'udp', 'all'
 * @method string getAction() 获取动作  drop-丢弃,；transmit-放行； forward-继续防护
 * @method void setAction(string $Action) 设置动作  drop-丢弃,；transmit-放行； forward-继续防护
 * @method integer getDefault() 获取是否为系统配置 0-人工配置；1-系统配置
 * @method void setDefault(integer $Default) 设置是否为系统配置 0-人工配置；1-系统配置
 */
class DDoSAcl extends AbstractModel
{
    /**
     * @var integer 目的端口end
     */
    public $DportEnd;

    /**
     * @var integer 目的端口start
     */
    public $DportStart;

    /**
     * @var integer 源端口end
     */
    public $SportEnd;

    /**
     * @var integer 源端口start
     */
    public $SportStart;

    /**
     * @var string 协议 'tcp', 'udp', 'all'
     */
    public $Protocol;

    /**
     * @var string 动作  drop-丢弃,；transmit-放行； forward-继续防护
     */
    public $Action;

    /**
     * @var integer 是否为系统配置 0-人工配置；1-系统配置
     */
    public $Default;

    /**
     * @param integer $DportEnd 目的端口end
     * @param integer $DportStart 目的端口start
     * @param integer $SportEnd 源端口end
     * @param integer $SportStart 源端口start
     * @param string $Protocol 协议 'tcp', 'udp', 'all'
     * @param string $Action 动作  drop-丢弃,；transmit-放行； forward-继续防护
     * @param integer $Default 是否为系统配置 0-人工配置；1-系统配置
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
