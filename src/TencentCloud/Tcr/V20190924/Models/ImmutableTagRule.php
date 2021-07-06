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
 * 镜像 tag 不可变规则
 *
 * @method string getRepositoryPattern() 获取仓库匹配规则
 * @method void setRepositoryPattern(string $RepositoryPattern) 设置仓库匹配规则
 * @method string getTagPattern() 获取Tag 匹配规则
 * @method void setTagPattern(string $TagPattern) 设置Tag 匹配规则
 * @method string getRepositoryDecoration() 获取repoMatches或repoExcludes
 * @method void setRepositoryDecoration(string $RepositoryDecoration) 设置repoMatches或repoExcludes
 * @method string getTagDecoration() 获取matches或excludes
 * @method void setTagDecoration(string $TagDecoration) 设置matches或excludes
 * @method boolean getDisabled() 获取禁用规则
 * @method void setDisabled(boolean $Disabled) 设置禁用规则
 * @method integer getRuleId() 获取规则 Id
 * @method void setRuleId(integer $RuleId) 设置规则 Id
 * @method string getNsName() 获取命名空间
 * @method void setNsName(string $NsName) 设置命名空间
 */
class ImmutableTagRule extends AbstractModel
{
    /**
     * @var string 仓库匹配规则
     */
    public $RepositoryPattern;

    /**
     * @var string Tag 匹配规则
     */
    public $TagPattern;

    /**
     * @var string repoMatches或repoExcludes
     */
    public $RepositoryDecoration;

    /**
     * @var string matches或excludes
     */
    public $TagDecoration;

    /**
     * @var boolean 禁用规则
     */
    public $Disabled;

    /**
     * @var integer 规则 Id
     */
    public $RuleId;

    /**
     * @var string 命名空间
     */
    public $NsName;

    /**
     * @param string $RepositoryPattern 仓库匹配规则
     * @param string $TagPattern Tag 匹配规则
     * @param string $RepositoryDecoration repoMatches或repoExcludes
     * @param string $TagDecoration matches或excludes
     * @param boolean $Disabled 禁用规则
     * @param integer $RuleId 规则 Id
     * @param string $NsName 命名空间
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
        if (array_key_exists("RepositoryPattern",$param) and $param["RepositoryPattern"] !== null) {
            $this->RepositoryPattern = $param["RepositoryPattern"];
        }

        if (array_key_exists("TagPattern",$param) and $param["TagPattern"] !== null) {
            $this->TagPattern = $param["TagPattern"];
        }

        if (array_key_exists("RepositoryDecoration",$param) and $param["RepositoryDecoration"] !== null) {
            $this->RepositoryDecoration = $param["RepositoryDecoration"];
        }

        if (array_key_exists("TagDecoration",$param) and $param["TagDecoration"] !== null) {
            $this->TagDecoration = $param["TagDecoration"];
        }

        if (array_key_exists("Disabled",$param) and $param["Disabled"] !== null) {
            $this->Disabled = $param["Disabled"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("NsName",$param) and $param["NsName"] !== null) {
            $this->NsName = $param["NsName"];
        }
    }
}
