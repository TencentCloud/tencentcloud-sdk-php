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
namespace TencentCloud\Trp\V20210515\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCustomRule请求参数结构体
 *
 * @method string getCustomId() 获取码规则ID
 * @method void setCustomId(string $CustomId) 设置码规则ID
 * @method string getName() 获取规则名称
 * @method void setName(string $Name) 设置规则名称
 * @method integer getCodeLength() 获取码长度
 * @method void setCodeLength(integer $CodeLength) 设置码长度
 * @method array getCodeParts() 获取码段配置
 * @method void setCodeParts(array $CodeParts) 设置码段配置
 * @method integer getCorpId() 获取企业ID
 * @method void setCorpId(integer $CorpId) 设置企业ID
 */
class ModifyCustomRuleRequest extends AbstractModel
{
    /**
     * @var string 码规则ID
     */
    public $CustomId;

    /**
     * @var string 规则名称
     */
    public $Name;

    /**
     * @var integer 码长度
     */
    public $CodeLength;

    /**
     * @var array 码段配置
     */
    public $CodeParts;

    /**
     * @var integer 企业ID
     */
    public $CorpId;

    /**
     * @param string $CustomId 码规则ID
     * @param string $Name 规则名称
     * @param integer $CodeLength 码长度
     * @param array $CodeParts 码段配置
     * @param integer $CorpId 企业ID
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
        if (array_key_exists("CustomId",$param) and $param["CustomId"] !== null) {
            $this->CustomId = $param["CustomId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CodeLength",$param) and $param["CodeLength"] !== null) {
            $this->CodeLength = $param["CodeLength"];
        }

        if (array_key_exists("CodeParts",$param) and $param["CodeParts"] !== null) {
            $this->CodeParts = [];
            foreach ($param["CodeParts"] as $key => $value){
                $obj = new CodePart();
                $obj->deserialize($value);
                array_push($this->CodeParts, $obj);
            }
        }

        if (array_key_exists("CorpId",$param) and $param["CorpId"] !== null) {
            $this->CorpId = $param["CorpId"];
        }
    }
}
