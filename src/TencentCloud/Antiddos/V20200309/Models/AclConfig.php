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
 * 基于端口的acl策略
 *
 * @method string getForwardProtocol() 获取协议类型, 可取值tcp, udp, all
 * @method void setForwardProtocol(string $ForwardProtocol) 设置协议类型, 可取值tcp, udp, all
 * @method integer getDPortStart() 获取目的端口起始，可取值范围0~65535
 * @method void setDPortStart(integer $DPortStart) 设置目的端口起始，可取值范围0~65535
 * @method integer getDPortEnd() 获取目的端口结束，可取值范围0~65535
 * @method void setDPortEnd(integer $DPortEnd) 设置目的端口结束，可取值范围0~65535
 * @method integer getSPortStart() 获取来源端口起始，可取值范围0~65535
 * @method void setSPortStart(integer $SPortStart) 设置来源端口起始，可取值范围0~65535
 * @method integer getSPortEnd() 获取来源端口结束，可取值范围0~65535
 * @method void setSPortEnd(integer $SPortEnd) 设置来源端口结束，可取值范围0~65535
 * @method string getAction() 获取动作，可取值：drop， transmit， forward
 * @method void setAction(string $Action) 设置动作，可取值：drop， transmit， forward
 * @method integer getPriority() 获取策略优先级，数字越小，级别越高，该规则越靠前匹配，取值1-1000
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPriority(integer $Priority) 设置策略优先级，数字越小，级别越高，该规则越靠前匹配，取值1-1000
注意：此字段可能返回 null，表示取不到有效值。
 */
class AclConfig extends AbstractModel
{
    /**
     * @var string 协议类型, 可取值tcp, udp, all
     */
    public $ForwardProtocol;

    /**
     * @var integer 目的端口起始，可取值范围0~65535
     */
    public $DPortStart;

    /**
     * @var integer 目的端口结束，可取值范围0~65535
     */
    public $DPortEnd;

    /**
     * @var integer 来源端口起始，可取值范围0~65535
     */
    public $SPortStart;

    /**
     * @var integer 来源端口结束，可取值范围0~65535
     */
    public $SPortEnd;

    /**
     * @var string 动作，可取值：drop， transmit， forward
     */
    public $Action;

    /**
     * @var integer 策略优先级，数字越小，级别越高，该规则越靠前匹配，取值1-1000
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Priority;

    /**
     * @param string $ForwardProtocol 协议类型, 可取值tcp, udp, all
     * @param integer $DPortStart 目的端口起始，可取值范围0~65535
     * @param integer $DPortEnd 目的端口结束，可取值范围0~65535
     * @param integer $SPortStart 来源端口起始，可取值范围0~65535
     * @param integer $SPortEnd 来源端口结束，可取值范围0~65535
     * @param string $Action 动作，可取值：drop， transmit， forward
     * @param integer $Priority 策略优先级，数字越小，级别越高，该规则越靠前匹配，取值1-1000
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
        if (array_key_exists("ForwardProtocol",$param) and $param["ForwardProtocol"] !== null) {
            $this->ForwardProtocol = $param["ForwardProtocol"];
        }

        if (array_key_exists("DPortStart",$param) and $param["DPortStart"] !== null) {
            $this->DPortStart = $param["DPortStart"];
        }

        if (array_key_exists("DPortEnd",$param) and $param["DPortEnd"] !== null) {
            $this->DPortEnd = $param["DPortEnd"];
        }

        if (array_key_exists("SPortStart",$param) and $param["SPortStart"] !== null) {
            $this->SPortStart = $param["SPortStart"];
        }

        if (array_key_exists("SPortEnd",$param) and $param["SPortEnd"] !== null) {
            $this->SPortEnd = $param["SPortEnd"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }
    }
}
