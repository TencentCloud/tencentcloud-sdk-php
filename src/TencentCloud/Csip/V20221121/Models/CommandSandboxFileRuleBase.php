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
 * 命令沙箱文件访问规则基础信息
 *
 * @method string getRuleName() 获取<p>规则名称</p>
 * @method void setRuleName(string $RuleName) 设置<p>规则名称</p>
 * @method string getBelongAssetType() 获取<p>规则资产范围类型</p><p>枚举值：</p><ul><li>HOST： 主机</li><li>CONTAINER： 容器</li></ul>
 * @method void setBelongAssetType(string $BelongAssetType) 设置<p>规则资产范围类型</p><p>枚举值：</p><ul><li>HOST： 主机</li><li>CONTAINER： 容器</li></ul>
 * @method TrafficSandboxEffectScope getEffectScope() 获取<p>规则生效范围</p>
 * @method void setEffectScope(TrafficSandboxEffectScope $EffectScope) 设置<p>规则生效范围</p>
 * @method string getAction() 获取<p>规则行为类型</p><p>枚举值：</p><ul><li>RO： 只读</li><li>RW： 可读写</li></ul>
 * @method void setAction(string $Action) 设置<p>规则行为类型</p><p>枚举值：</p><ul><li>RO： 只读</li><li>RW： 可读写</li></ul>
 * @method array getPathWhitelist() 获取<p>白名单路径</p>
 * @method void setPathWhitelist(array $PathWhitelist) 设置<p>白名单路径</p>
 * @method string getStatus() 获取<p>规则状态</p><p>枚举值：</p><ul><li>ON ： 启用</li><li>OFF ： 禁用</li></ul>
 * @method void setStatus(string $Status) 设置<p>规则状态</p><p>枚举值：</p><ul><li>ON ： 启用</li><li>OFF ： 禁用</li></ul>
 */
class CommandSandboxFileRuleBase extends AbstractModel
{
    /**
     * @var string <p>规则名称</p>
     */
    public $RuleName;

    /**
     * @var string <p>规则资产范围类型</p><p>枚举值：</p><ul><li>HOST： 主机</li><li>CONTAINER： 容器</li></ul>
     */
    public $BelongAssetType;

    /**
     * @var TrafficSandboxEffectScope <p>规则生效范围</p>
     */
    public $EffectScope;

    /**
     * @var string <p>规则行为类型</p><p>枚举值：</p><ul><li>RO： 只读</li><li>RW： 可读写</li></ul>
     */
    public $Action;

    /**
     * @var array <p>白名单路径</p>
     */
    public $PathWhitelist;

    /**
     * @var string <p>规则状态</p><p>枚举值：</p><ul><li>ON ： 启用</li><li>OFF ： 禁用</li></ul>
     */
    public $Status;

    /**
     * @param string $RuleName <p>规则名称</p>
     * @param string $BelongAssetType <p>规则资产范围类型</p><p>枚举值：</p><ul><li>HOST： 主机</li><li>CONTAINER： 容器</li></ul>
     * @param TrafficSandboxEffectScope $EffectScope <p>规则生效范围</p>
     * @param string $Action <p>规则行为类型</p><p>枚举值：</p><ul><li>RO： 只读</li><li>RW： 可读写</li></ul>
     * @param array $PathWhitelist <p>白名单路径</p>
     * @param string $Status <p>规则状态</p><p>枚举值：</p><ul><li>ON ： 启用</li><li>OFF ： 禁用</li></ul>
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
        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("BelongAssetType",$param) and $param["BelongAssetType"] !== null) {
            $this->BelongAssetType = $param["BelongAssetType"];
        }

        if (array_key_exists("EffectScope",$param) and $param["EffectScope"] !== null) {
            $this->EffectScope = new TrafficSandboxEffectScope();
            $this->EffectScope->deserialize($param["EffectScope"]);
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("PathWhitelist",$param) and $param["PathWhitelist"] !== null) {
            $this->PathWhitelist = $param["PathWhitelist"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
