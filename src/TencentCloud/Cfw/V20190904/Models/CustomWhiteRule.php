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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自定义白名单规则
 *
 * @method string getDstIP() 获取访问目的
 * @method void setDstIP(string $DstIP) 设置访问目的
 * @method string getIdsRuleId() 获取规则ID
 * @method void setIdsRuleId(string $IdsRuleId) 设置规则ID
 * @method string getIdsRuleName() 获取规则名称
 * @method void setIdsRuleName(string $IdsRuleName) 设置规则名称
 * @method string getSrcIP() 获取访问源
 * @method void setSrcIP(string $SrcIP) 设置访问源
 */
class CustomWhiteRule extends AbstractModel
{
    /**
     * @var string 访问目的
     */
    public $DstIP;

    /**
     * @var string 规则ID
     */
    public $IdsRuleId;

    /**
     * @var string 规则名称
     */
    public $IdsRuleName;

    /**
     * @var string 访问源
     */
    public $SrcIP;

    /**
     * @param string $DstIP 访问目的
     * @param string $IdsRuleId 规则ID
     * @param string $IdsRuleName 规则名称
     * @param string $SrcIP 访问源
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
        if (array_key_exists("DstIP",$param) and $param["DstIP"] !== null) {
            $this->DstIP = $param["DstIP"];
        }

        if (array_key_exists("IdsRuleId",$param) and $param["IdsRuleId"] !== null) {
            $this->IdsRuleId = $param["IdsRuleId"];
        }

        if (array_key_exists("IdsRuleName",$param) and $param["IdsRuleName"] !== null) {
            $this->IdsRuleName = $param["IdsRuleName"];
        }

        if (array_key_exists("SrcIP",$param) and $param["SrcIP"] !== null) {
            $this->SrcIP = $param["SrcIP"];
        }
    }
}
