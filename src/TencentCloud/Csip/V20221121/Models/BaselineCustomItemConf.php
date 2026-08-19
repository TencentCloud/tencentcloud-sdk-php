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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 在策略上对内置检测项做自定义值覆盖的配置项。
 *
 * @method integer getRuleID() 获取<p>内置检测项规则 ID，与 CustomItemID 二选一传入。</p>
 * @method void setRuleID(integer $RuleID) 设置<p>内置检测项规则 ID，与 CustomItemID 二选一传入。</p>
 * @method array getCustomValueList() 获取<p>用户自定义的判定值列表，需符合检测项 WebEditParam 定义的取值约束。</p>
 * @method void setCustomValueList(array $CustomValueList) 设置<p>用户自定义的判定值列表，需符合检测项 WebEditParam 定义的取值约束。</p>
 * @method integer getCustomItemID() 获取<p>已存在的自定义配置 ID；新增时可不传，编辑时回填。</p>
 * @method void setCustomItemID(integer $CustomItemID) 设置<p>已存在的自定义配置 ID；新增时可不传，编辑时回填。</p>
 */
class BaselineCustomItemConf extends AbstractModel
{
    /**
     * @var integer <p>内置检测项规则 ID，与 CustomItemID 二选一传入。</p>
     */
    public $RuleID;

    /**
     * @var array <p>用户自定义的判定值列表，需符合检测项 WebEditParam 定义的取值约束。</p>
     */
    public $CustomValueList;

    /**
     * @var integer <p>已存在的自定义配置 ID；新增时可不传，编辑时回填。</p>
     */
    public $CustomItemID;

    /**
     * @param integer $RuleID <p>内置检测项规则 ID，与 CustomItemID 二选一传入。</p>
     * @param array $CustomValueList <p>用户自定义的判定值列表，需符合检测项 WebEditParam 定义的取值约束。</p>
     * @param integer $CustomItemID <p>已存在的自定义配置 ID；新增时可不传，编辑时回填。</p>
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
        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }

        if (array_key_exists("CustomValueList",$param) and $param["CustomValueList"] !== null) {
            $this->CustomValueList = $param["CustomValueList"];
        }

        if (array_key_exists("CustomItemID",$param) and $param["CustomItemID"] !== null) {
            $this->CustomItemID = $param["CustomItemID"];
        }
    }
}
