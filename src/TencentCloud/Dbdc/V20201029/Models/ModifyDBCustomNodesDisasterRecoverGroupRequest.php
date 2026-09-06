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
namespace TencentCloud\Dbdc\V20201029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBCustomNodesDisasterRecoverGroup请求参数结构体
 *
 * @method array getNodeIds() 获取<p>节点ID</p><p>入参限制：单次数量上限为100</p>
 * @method void setNodeIds(array $NodeIds) 设置<p>节点ID</p><p>入参限制：单次数量上限为100</p>
 * @method array getDisasterRecoverGroupIds() 获取<p>置放群组ID</p><p>入参限制：支持传一个ID</p>
 * @method void setDisasterRecoverGroupIds(array $DisasterRecoverGroupIds) 设置<p>置放群组ID</p><p>入参限制：支持传一个ID</p>
 * @method boolean getForce() 获取<p>是否强制更换节点宿主机</p><p>枚举值：</p><ul><li>true： 表示允许节点更换宿主机，允许重启。本地盘节点不支持指定此参数。</li><li>false： 不允许节点更换宿主机，只在当前宿主机上加入置放群组。这可能导致更换置放群组失败。</li></ul><p>默认值：false</p>
 * @method void setForce(boolean $Force) 设置<p>是否强制更换节点宿主机</p><p>枚举值：</p><ul><li>true： 表示允许节点更换宿主机，允许重启。本地盘节点不支持指定此参数。</li><li>false： 不允许节点更换宿主机，只在当前宿主机上加入置放群组。这可能导致更换置放群组失败。</li></ul><p>默认值：false</p>
 */
class ModifyDBCustomNodesDisasterRecoverGroupRequest extends AbstractModel
{
    /**
     * @var array <p>节点ID</p><p>入参限制：单次数量上限为100</p>
     */
    public $NodeIds;

    /**
     * @var array <p>置放群组ID</p><p>入参限制：支持传一个ID</p>
     */
    public $DisasterRecoverGroupIds;

    /**
     * @var boolean <p>是否强制更换节点宿主机</p><p>枚举值：</p><ul><li>true： 表示允许节点更换宿主机，允许重启。本地盘节点不支持指定此参数。</li><li>false： 不允许节点更换宿主机，只在当前宿主机上加入置放群组。这可能导致更换置放群组失败。</li></ul><p>默认值：false</p>
     */
    public $Force;

    /**
     * @param array $NodeIds <p>节点ID</p><p>入参限制：单次数量上限为100</p>
     * @param array $DisasterRecoverGroupIds <p>置放群组ID</p><p>入参限制：支持传一个ID</p>
     * @param boolean $Force <p>是否强制更换节点宿主机</p><p>枚举值：</p><ul><li>true： 表示允许节点更换宿主机，允许重启。本地盘节点不支持指定此参数。</li><li>false： 不允许节点更换宿主机，只在当前宿主机上加入置放群组。这可能导致更换置放群组失败。</li></ul><p>默认值：false</p>
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
        if (array_key_exists("NodeIds",$param) and $param["NodeIds"] !== null) {
            $this->NodeIds = $param["NodeIds"];
        }

        if (array_key_exists("DisasterRecoverGroupIds",$param) and $param["DisasterRecoverGroupIds"] !== null) {
            $this->DisasterRecoverGroupIds = $param["DisasterRecoverGroupIds"];
        }

        if (array_key_exists("Force",$param) and $param["Force"] !== null) {
            $this->Force = $param["Force"];
        }
    }
}
