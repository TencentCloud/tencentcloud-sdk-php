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
 * ModifyTagRetentionRule请求参数结构体
 *
 * @method string getRegistryId() 获取<p>主实例iD</p>
 * @method void setRegistryId(string $RegistryId) 设置<p>主实例iD</p>
 * @method integer getNamespaceId() 获取<p>命名空间的Id，必须填写原有的命名空间id</p>
 * @method void setNamespaceId(integer $NamespaceId) 设置<p>命名空间的Id，必须填写原有的命名空间id</p>
 * @method string getCronSetting() 获取<p>执行周期，必须填写为原来的设置</p>
 * @method void setCronSetting(string $CronSetting) 设置<p>执行周期，必须填写为原来的设置</p>
 * @method integer getRetentionId() 获取<p>规则Id</p>
 * @method void setRetentionId(integer $RetentionId) 设置<p>规则Id</p>
 * @method RetentionRule getRetentionRule() 获取<p>保留策略，当基本保留策略和高级保留策略同时配置时，优先使用高级保留策略</p>
 * @method void setRetentionRule(RetentionRule $RetentionRule) 设置<p>保留策略，当基本保留策略和高级保留策略同时配置时，优先使用高级保留策略</p>
 * @method array getAdvancedRuleItems() 获取<p>高级保留策略，当基本保留策略和高级保留策略同时配置时，优先使用高级保留策略</p>
 * @method void setAdvancedRuleItems(array $AdvancedRuleItems) 设置<p>高级保留策略，当基本保留策略和高级保留策略同时配置时，优先使用高级保留策略</p>
 * @method boolean getDisabled() 获取<p>是否禁用规则</p>
 * @method void setDisabled(boolean $Disabled) 设置<p>是否禁用规则</p>
 */
class ModifyTagRetentionRuleRequest extends AbstractModel
{
    /**
     * @var string <p>主实例iD</p>
     */
    public $RegistryId;

    /**
     * @var integer <p>命名空间的Id，必须填写原有的命名空间id</p>
     */
    public $NamespaceId;

    /**
     * @var string <p>执行周期，必须填写为原来的设置</p>
     */
    public $CronSetting;

    /**
     * @var integer <p>规则Id</p>
     */
    public $RetentionId;

    /**
     * @var RetentionRule <p>保留策略，当基本保留策略和高级保留策略同时配置时，优先使用高级保留策略</p>
     */
    public $RetentionRule;

    /**
     * @var array <p>高级保留策略，当基本保留策略和高级保留策略同时配置时，优先使用高级保留策略</p>
     */
    public $AdvancedRuleItems;

    /**
     * @var boolean <p>是否禁用规则</p>
     */
    public $Disabled;

    /**
     * @param string $RegistryId <p>主实例iD</p>
     * @param integer $NamespaceId <p>命名空间的Id，必须填写原有的命名空间id</p>
     * @param string $CronSetting <p>执行周期，必须填写为原来的设置</p>
     * @param integer $RetentionId <p>规则Id</p>
     * @param RetentionRule $RetentionRule <p>保留策略，当基本保留策略和高级保留策略同时配置时，优先使用高级保留策略</p>
     * @param array $AdvancedRuleItems <p>高级保留策略，当基本保留策略和高级保留策略同时配置时，优先使用高级保留策略</p>
     * @param boolean $Disabled <p>是否禁用规则</p>
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

        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("CronSetting",$param) and $param["CronSetting"] !== null) {
            $this->CronSetting = $param["CronSetting"];
        }

        if (array_key_exists("RetentionId",$param) and $param["RetentionId"] !== null) {
            $this->RetentionId = $param["RetentionId"];
        }

        if (array_key_exists("RetentionRule",$param) and $param["RetentionRule"] !== null) {
            $this->RetentionRule = new RetentionRule();
            $this->RetentionRule->deserialize($param["RetentionRule"]);
        }

        if (array_key_exists("AdvancedRuleItems",$param) and $param["AdvancedRuleItems"] !== null) {
            $this->AdvancedRuleItems = [];
            foreach ($param["AdvancedRuleItems"] as $key => $value){
                $obj = new RetentionRuleItem();
                $obj->deserialize($value);
                array_push($this->AdvancedRuleItems, $obj);
            }
        }

        if (array_key_exists("Disabled",$param) and $param["Disabled"] !== null) {
            $this->Disabled = $param["Disabled"];
        }
    }
}
