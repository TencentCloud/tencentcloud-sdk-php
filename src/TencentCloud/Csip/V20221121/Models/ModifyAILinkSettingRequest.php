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
 * ModifyAILinkSetting请求参数结构体
 *
 * @method integer getAILinkEnable() 获取<p>0 关闭AI-Link智链引擎，1 开启AI-Link智链引擎</p>
 * @method void setAILinkEnable(integer $AILinkEnable) 设置<p>0 关闭AI-Link智链引擎，1 开启AI-Link智链引擎</p>
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method integer getRuleScopeDeep() 获取<p>深度模式 0-关闭 1-开启</p>
 * @method void setRuleScopeDeep(integer $RuleScopeDeep) 设置<p>深度模式 0-关闭 1-开启</p>
 * @method integer getRuleScopeBalanced() 获取<p>均衡模式 0-关闭 1-开启</p>
 * @method void setRuleScopeBalanced(integer $RuleScopeBalanced) 设置<p>均衡模式 0-关闭 1-开启</p>
 * @method integer getRuleScopePrecise() 获取<p>精准模式 0-关闭 1-开启</p>
 * @method void setRuleScopePrecise(integer $RuleScopePrecise) 设置<p>精准模式 0-关闭 1-开启</p>
 * @method integer getScope() 获取<p>1 全部专业/旗舰版主机，0 自选主机列表</p>
 * @method void setScope(integer $Scope) 设置<p>1 全部专业/旗舰版主机，0 自选主机列表</p>
 * @method array getQuuids() 获取<p>自选主机Quuid列表（Scope=0时必填）</p>
 * @method void setQuuids(array $Quuids) 设置<p>自选主机Quuid列表（Scope=0时必填）</p>
 * @method array getExcludeQuuids() 获取<p>排除主机Quuid列表（Scope=1时生效）</p>
 * @method void setExcludeQuuids(array $ExcludeQuuids) 设置<p>排除主机Quuid列表（Scope=1时生效）</p>
 * @method integer getAutoInclude() 获取<p>新增资产自动包含 0 不包含 1包含</p>
 * @method void setAutoInclude(integer $AutoInclude) 设置<p>新增资产自动包含 0 不包含 1包含</p>
 * @method array getTagIDs() 获取<p>标签ID</p>
 * @method void setTagIDs(array $TagIDs) 设置<p>标签ID</p>
 * @method integer getTCSSScope() 获取<p>0,1</p><p>枚举值：</p><ul><li>0： 部分</li><li>1： 全部</li></ul>
 * @method void setTCSSScope(integer $TCSSScope) 设置<p>0,1</p><p>枚举值：</p><ul><li>0： 部分</li><li>1： 全部</li></ul>
 * @method array getClusterIDs() 获取<p>集群ID</p>
 * @method void setClusterIDs(array $ClusterIDs) 设置<p>集群ID</p>
 * @method array getExcludeClusterIDs() 获取<p>排除集群ID</p>
 * @method void setExcludeClusterIDs(array $ExcludeClusterIDs) 设置<p>排除集群ID</p>
 * @method array getInstanceIds() 获取<p>实例ID</p>
 * @method void setInstanceIds(array $InstanceIds) 设置<p>实例ID</p>
 * @method array getExcludeInstanceIds() 获取<p>排除实例ID</p>
 * @method void setExcludeInstanceIds(array $ExcludeInstanceIds) 设置<p>排除实例ID</p>
 */
class ModifyAILinkSettingRequest extends AbstractModel
{
    /**
     * @var integer <p>0 关闭AI-Link智链引擎，1 开启AI-Link智链引擎</p>
     */
    public $AILinkEnable;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var integer <p>深度模式 0-关闭 1-开启</p>
     */
    public $RuleScopeDeep;

    /**
     * @var integer <p>均衡模式 0-关闭 1-开启</p>
     */
    public $RuleScopeBalanced;

    /**
     * @var integer <p>精准模式 0-关闭 1-开启</p>
     */
    public $RuleScopePrecise;

    /**
     * @var integer <p>1 全部专业/旗舰版主机，0 自选主机列表</p>
     */
    public $Scope;

    /**
     * @var array <p>自选主机Quuid列表（Scope=0时必填）</p>
     * @deprecated
     */
    public $Quuids;

    /**
     * @var array <p>排除主机Quuid列表（Scope=1时生效）</p>
     * @deprecated
     */
    public $ExcludeQuuids;

    /**
     * @var integer <p>新增资产自动包含 0 不包含 1包含</p>
     */
    public $AutoInclude;

    /**
     * @var array <p>标签ID</p>
     */
    public $TagIDs;

    /**
     * @var integer <p>0,1</p><p>枚举值：</p><ul><li>0： 部分</li><li>1： 全部</li></ul>
     */
    public $TCSSScope;

    /**
     * @var array <p>集群ID</p>
     */
    public $ClusterIDs;

    /**
     * @var array <p>排除集群ID</p>
     */
    public $ExcludeClusterIDs;

    /**
     * @var array <p>实例ID</p>
     */
    public $InstanceIds;

    /**
     * @var array <p>排除实例ID</p>
     */
    public $ExcludeInstanceIds;

    /**
     * @param integer $AILinkEnable <p>0 关闭AI-Link智链引擎，1 开启AI-Link智链引擎</p>
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param integer $RuleScopeDeep <p>深度模式 0-关闭 1-开启</p>
     * @param integer $RuleScopeBalanced <p>均衡模式 0-关闭 1-开启</p>
     * @param integer $RuleScopePrecise <p>精准模式 0-关闭 1-开启</p>
     * @param integer $Scope <p>1 全部专业/旗舰版主机，0 自选主机列表</p>
     * @param array $Quuids <p>自选主机Quuid列表（Scope=0时必填）</p>
     * @param array $ExcludeQuuids <p>排除主机Quuid列表（Scope=1时生效）</p>
     * @param integer $AutoInclude <p>新增资产自动包含 0 不包含 1包含</p>
     * @param array $TagIDs <p>标签ID</p>
     * @param integer $TCSSScope <p>0,1</p><p>枚举值：</p><ul><li>0： 部分</li><li>1： 全部</li></ul>
     * @param array $ClusterIDs <p>集群ID</p>
     * @param array $ExcludeClusterIDs <p>排除集群ID</p>
     * @param array $InstanceIds <p>实例ID</p>
     * @param array $ExcludeInstanceIds <p>排除实例ID</p>
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
        if (array_key_exists("AILinkEnable",$param) and $param["AILinkEnable"] !== null) {
            $this->AILinkEnable = $param["AILinkEnable"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("RuleScopeDeep",$param) and $param["RuleScopeDeep"] !== null) {
            $this->RuleScopeDeep = $param["RuleScopeDeep"];
        }

        if (array_key_exists("RuleScopeBalanced",$param) and $param["RuleScopeBalanced"] !== null) {
            $this->RuleScopeBalanced = $param["RuleScopeBalanced"];
        }

        if (array_key_exists("RuleScopePrecise",$param) and $param["RuleScopePrecise"] !== null) {
            $this->RuleScopePrecise = $param["RuleScopePrecise"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("Quuids",$param) and $param["Quuids"] !== null) {
            $this->Quuids = $param["Quuids"];
        }

        if (array_key_exists("ExcludeQuuids",$param) and $param["ExcludeQuuids"] !== null) {
            $this->ExcludeQuuids = $param["ExcludeQuuids"];
        }

        if (array_key_exists("AutoInclude",$param) and $param["AutoInclude"] !== null) {
            $this->AutoInclude = $param["AutoInclude"];
        }

        if (array_key_exists("TagIDs",$param) and $param["TagIDs"] !== null) {
            $this->TagIDs = $param["TagIDs"];
        }

        if (array_key_exists("TCSSScope",$param) and $param["TCSSScope"] !== null) {
            $this->TCSSScope = $param["TCSSScope"];
        }

        if (array_key_exists("ClusterIDs",$param) and $param["ClusterIDs"] !== null) {
            $this->ClusterIDs = $param["ClusterIDs"];
        }

        if (array_key_exists("ExcludeClusterIDs",$param) and $param["ExcludeClusterIDs"] !== null) {
            $this->ExcludeClusterIDs = $param["ExcludeClusterIDs"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("ExcludeInstanceIds",$param) and $param["ExcludeInstanceIds"] !== null) {
            $this->ExcludeInstanceIds = $param["ExcludeInstanceIds"];
        }
    }
}
