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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyReplication请求参数结构体
 *
 * @method string getSourceRegistryId() 获取<p>复制源实例ID</p>
 * @method void setSourceRegistryId(string $SourceRegistryId) 设置<p>复制源实例ID</p>
 * @method string getRuleName() 获取<p>实例同步规则名称</p>
 * @method void setRuleName(string $RuleName) 设置<p>实例同步规则名称</p>
 * @method ModifyReplicationRule getRule() 获取<p>同步规则</p>
 * @method void setRule(ModifyReplicationRule $Rule) 设置<p>同步规则</p>
 * @method string getDescription() 获取<p>规则描述</p>
 * @method void setDescription(string $Description) 设置<p>规则描述</p>
 */
class ModifyReplicationRequest extends AbstractModel
{
    /**
     * @var string <p>复制源实例ID</p>
     */
    public $SourceRegistryId;

    /**
     * @var string <p>实例同步规则名称</p>
     */
    public $RuleName;

    /**
     * @var ModifyReplicationRule <p>同步规则</p>
     */
    public $Rule;

    /**
     * @var string <p>规则描述</p>
     */
    public $Description;

    /**
     * @param string $SourceRegistryId <p>复制源实例ID</p>
     * @param string $RuleName <p>实例同步规则名称</p>
     * @param ModifyReplicationRule $Rule <p>同步规则</p>
     * @param string $Description <p>规则描述</p>
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
        if (array_key_exists("SourceRegistryId",$param) and $param["SourceRegistryId"] !== null) {
            $this->SourceRegistryId = $param["SourceRegistryId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = new ModifyReplicationRule();
            $this->Rule->deserialize($param["Rule"]);
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
