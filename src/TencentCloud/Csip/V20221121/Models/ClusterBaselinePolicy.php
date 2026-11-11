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
 * 集群基线策略
 *
 * @method integer getPolicyID() 获取<p>基线策略 ID。</p>
 * @method void setPolicyID(integer $PolicyID) 设置<p>基线策略 ID。</p>
 * @method string getPolicyName() 获取<p>基线策略名称。</p>
 * @method void setPolicyName(string $PolicyName) 设置<p>基线策略名称。</p>
 * @method string getCheckAssetType() 获取<p>检测资产类型。<br>枚举值：<br>HOST：主机<br>CLUSTER：容器集群</p>
 * @method void setCheckAssetType(string $CheckAssetType) 设置<p>检测资产类型。<br>枚举值：<br>HOST：主机<br>CLUSTER：容器集群</p>
 * @method integer getParentCategoryID() 获取<p>基线系统父分类 ID。</p>
 * @method void setParentCategoryID(integer $ParentCategoryID) 设置<p>基线系统父分类 ID。</p>
 * @method boolean getIsSystem() 获取<p>是否为系统基线策略。true 表示系统策略，false 表示自定义策略。</p>
 * @method void setIsSystem(boolean $IsSystem) 设置<p>是否为系统基线策略。true 表示系统策略，false 表示自定义策略。</p>
 */
class ClusterBaselinePolicy extends AbstractModel
{
    /**
     * @var integer <p>基线策略 ID。</p>
     */
    public $PolicyID;

    /**
     * @var string <p>基线策略名称。</p>
     */
    public $PolicyName;

    /**
     * @var string <p>检测资产类型。<br>枚举值：<br>HOST：主机<br>CLUSTER：容器集群</p>
     */
    public $CheckAssetType;

    /**
     * @var integer <p>基线系统父分类 ID。</p>
     */
    public $ParentCategoryID;

    /**
     * @var boolean <p>是否为系统基线策略。true 表示系统策略，false 表示自定义策略。</p>
     */
    public $IsSystem;

    /**
     * @param integer $PolicyID <p>基线策略 ID。</p>
     * @param string $PolicyName <p>基线策略名称。</p>
     * @param string $CheckAssetType <p>检测资产类型。<br>枚举值：<br>HOST：主机<br>CLUSTER：容器集群</p>
     * @param integer $ParentCategoryID <p>基线系统父分类 ID。</p>
     * @param boolean $IsSystem <p>是否为系统基线策略。true 表示系统策略，false 表示自定义策略。</p>
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
        if (array_key_exists("PolicyID",$param) and $param["PolicyID"] !== null) {
            $this->PolicyID = $param["PolicyID"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("CheckAssetType",$param) and $param["CheckAssetType"] !== null) {
            $this->CheckAssetType = $param["CheckAssetType"];
        }

        if (array_key_exists("ParentCategoryID",$param) and $param["ParentCategoryID"] !== null) {
            $this->ParentCategoryID = $param["ParentCategoryID"];
        }

        if (array_key_exists("IsSystem",$param) and $param["IsSystem"] !== null) {
            $this->IsSystem = $param["IsSystem"];
        }
    }
}
