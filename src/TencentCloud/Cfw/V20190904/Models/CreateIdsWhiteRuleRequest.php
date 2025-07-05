<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateIdsWhiteRule请求参数结构体
 *
 * @method string getIdsRuleId() 获取入侵防御规则ID
 * @method void setIdsRuleId(string $IdsRuleId) 设置入侵防御规则ID
 * @method string getWhiteRuleType() 获取白名单类型：
src 针对源放通
dst 针对目的放通
srcdst 针对源和目的放通
 * @method void setWhiteRuleType(string $WhiteRuleType) 设置白名单类型：
src 针对源放通
dst 针对目的放通
srcdst 针对源和目的放通
 * @method integer getFwType() 获取白名单生效防火墙范围：
1 边界防火墙
2 nat防火墙
4 vpc防火墙
7 = 1+2+4  所有防火墙
 * @method void setFwType(integer $FwType) 设置白名单生效防火墙范围：
1 边界防火墙
2 nat防火墙
4 vpc防火墙
7 = 1+2+4  所有防火墙
 * @method string getSrcIp() 获取源IP
 * @method void setSrcIp(string $SrcIp) 设置源IP
 * @method string getDstIp() 获取目的IP
 * @method void setDstIp(string $DstIp) 设置目的IP
 */
class CreateIdsWhiteRuleRequest extends AbstractModel
{
    /**
     * @var string 入侵防御规则ID
     */
    public $IdsRuleId;

    /**
     * @var string 白名单类型：
src 针对源放通
dst 针对目的放通
srcdst 针对源和目的放通
     */
    public $WhiteRuleType;

    /**
     * @var integer 白名单生效防火墙范围：
1 边界防火墙
2 nat防火墙
4 vpc防火墙
7 = 1+2+4  所有防火墙
     */
    public $FwType;

    /**
     * @var string 源IP
     */
    public $SrcIp;

    /**
     * @var string 目的IP
     */
    public $DstIp;

    /**
     * @param string $IdsRuleId 入侵防御规则ID
     * @param string $WhiteRuleType 白名单类型：
src 针对源放通
dst 针对目的放通
srcdst 针对源和目的放通
     * @param integer $FwType 白名单生效防火墙范围：
1 边界防火墙
2 nat防火墙
4 vpc防火墙
7 = 1+2+4  所有防火墙
     * @param string $SrcIp 源IP
     * @param string $DstIp 目的IP
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
        if (array_key_exists("IdsRuleId",$param) and $param["IdsRuleId"] !== null) {
            $this->IdsRuleId = $param["IdsRuleId"];
        }

        if (array_key_exists("WhiteRuleType",$param) and $param["WhiteRuleType"] !== null) {
            $this->WhiteRuleType = $param["WhiteRuleType"];
        }

        if (array_key_exists("FwType",$param) and $param["FwType"] !== null) {
            $this->FwType = $param["FwType"];
        }

        if (array_key_exists("SrcIp",$param) and $param["SrcIp"] !== null) {
            $this->SrcIp = $param["SrcIp"];
        }

        if (array_key_exists("DstIp",$param) and $param["DstIp"] !== null) {
            $this->DstIp = $param["DstIp"];
        }
    }
}
