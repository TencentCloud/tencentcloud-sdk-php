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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 客户端规则信息
 *
 * @method string getClientIp() 获取客户端ip。
 * @method void setClientIp(string $ClientIp) 设置客户端ip。
 * @method string getRuleType() 获取规则类型。
 * @method void setRuleType(string $RuleType) 设置规则类型。
 * @method integer getRuleId() 获取规则id。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleId(integer $RuleId) 设置规则id。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取规则描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置规则描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIpStatus() 获取封禁状态，取值有：
<li>block ：封禁 ；</li>
<li>allow ：放行 。</li>
 * @method void setIpStatus(string $IpStatus) 设置封禁状态，取值有：
<li>block ：封禁 ；</li>
<li>allow ：放行 。</li>
 * @method integer getBlockTime() 获取封禁时间，采用unix秒级时间戳。
 * @method void setBlockTime(integer $BlockTime) 设置封禁时间，采用unix秒级时间戳。
 * @method string getId() 获取每条数据的唯一标识id。
 * @method void setId(string $Id) 设置每条数据的唯一标识id。
 */
class ClientRule extends AbstractModel
{
    /**
     * @var string 客户端ip。
     */
    public $ClientIp;

    /**
     * @var string 规则类型。
     */
    public $RuleType;

    /**
     * @var integer 规则id。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleId;

    /**
     * @var string 规则描述。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 封禁状态，取值有：
<li>block ：封禁 ；</li>
<li>allow ：放行 。</li>
     */
    public $IpStatus;

    /**
     * @var integer 封禁时间，采用unix秒级时间戳。
     */
    public $BlockTime;

    /**
     * @var string 每条数据的唯一标识id。
     */
    public $Id;

    /**
     * @param string $ClientIp 客户端ip。
     * @param string $RuleType 规则类型。
     * @param integer $RuleId 规则id。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 规则描述。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IpStatus 封禁状态，取值有：
<li>block ：封禁 ；</li>
<li>allow ：放行 。</li>
     * @param integer $BlockTime 封禁时间，采用unix秒级时间戳。
     * @param string $Id 每条数据的唯一标识id。
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
        if (array_key_exists("ClientIp",$param) and $param["ClientIp"] !== null) {
            $this->ClientIp = $param["ClientIp"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("IpStatus",$param) and $param["IpStatus"] !== null) {
            $this->IpStatus = $param["IpStatus"];
        }

        if (array_key_exists("BlockTime",$param) and $param["BlockTime"] !== null) {
            $this->BlockTime = $param["BlockTime"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
