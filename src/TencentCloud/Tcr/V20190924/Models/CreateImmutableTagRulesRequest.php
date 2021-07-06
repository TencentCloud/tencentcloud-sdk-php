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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateImmutableTagRules请求参数结构体
 *
 * @method string getRegistryId() 获取实例 Id
 * @method void setRegistryId(string $RegistryId) 设置实例 Id
 * @method string getNamespaceName() 获取命名空间
 * @method void setNamespaceName(string $NamespaceName) 设置命名空间
 * @method ImmutableTagRule getRule() 获取规则
 * @method void setRule(ImmutableTagRule $Rule) 设置规则
 */
class CreateImmutableTagRulesRequest extends AbstractModel
{
    /**
     * @var string 实例 Id
     */
    public $RegistryId;

    /**
     * @var string 命名空间
     */
    public $NamespaceName;

    /**
     * @var ImmutableTagRule 规则
     */
    public $Rule;

    /**
     * @param string $RegistryId 实例 Id
     * @param string $NamespaceName 命名空间
     * @param ImmutableTagRule $Rule 规则
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
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("NamespaceName",$param) and $param["NamespaceName"] !== null) {
            $this->NamespaceName = $param["NamespaceName"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = new ImmutableTagRule();
            $this->Rule->deserialize($param["Rule"]);
        }
    }
}
