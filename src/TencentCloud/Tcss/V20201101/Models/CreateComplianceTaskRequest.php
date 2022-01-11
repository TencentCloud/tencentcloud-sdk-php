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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateComplianceTask请求参数结构体
 *
 * @method array getAssetTypeSet() 获取指定要扫描的资产类型列表。
ASSET_CONTAINER, 容器
ASSET_IMAGE, 镜像
ASSET_HOST, 主机
ASSET_K8S, K8S资产
AssetTypeSet, PolicySetId, PeriodTaskId三个参数，必须要给其中一个参数填写有效的值。
 * @method void setAssetTypeSet(array $AssetTypeSet) 设置指定要扫描的资产类型列表。
ASSET_CONTAINER, 容器
ASSET_IMAGE, 镜像
ASSET_HOST, 主机
ASSET_K8S, K8S资产
AssetTypeSet, PolicySetId, PeriodTaskId三个参数，必须要给其中一个参数填写有效的值。
 * @method integer getPolicySetId() 获取按照策略集ID指定的策略执行合规检查。
 * @method void setPolicySetId(integer $PolicySetId) 设置按照策略集ID指定的策略执行合规检查。
 * @method integer getPeriodTaskId() 获取按照定时任务ID指定的策略执行合规检查。
 * @method void setPeriodTaskId(integer $PeriodTaskId) 设置按照定时任务ID指定的策略执行合规检查。
 */
class CreateComplianceTaskRequest extends AbstractModel
{
    /**
     * @var array 指定要扫描的资产类型列表。
ASSET_CONTAINER, 容器
ASSET_IMAGE, 镜像
ASSET_HOST, 主机
ASSET_K8S, K8S资产
AssetTypeSet, PolicySetId, PeriodTaskId三个参数，必须要给其中一个参数填写有效的值。
     */
    public $AssetTypeSet;

    /**
     * @var integer 按照策略集ID指定的策略执行合规检查。
     */
    public $PolicySetId;

    /**
     * @var integer 按照定时任务ID指定的策略执行合规检查。
     */
    public $PeriodTaskId;

    /**
     * @param array $AssetTypeSet 指定要扫描的资产类型列表。
ASSET_CONTAINER, 容器
ASSET_IMAGE, 镜像
ASSET_HOST, 主机
ASSET_K8S, K8S资产
AssetTypeSet, PolicySetId, PeriodTaskId三个参数，必须要给其中一个参数填写有效的值。
     * @param integer $PolicySetId 按照策略集ID指定的策略执行合规检查。
     * @param integer $PeriodTaskId 按照定时任务ID指定的策略执行合规检查。
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
        if (array_key_exists("AssetTypeSet",$param) and $param["AssetTypeSet"] !== null) {
            $this->AssetTypeSet = $param["AssetTypeSet"];
        }

        if (array_key_exists("PolicySetId",$param) and $param["PolicySetId"] !== null) {
            $this->PolicySetId = $param["PolicySetId"];
        }

        if (array_key_exists("PeriodTaskId",$param) and $param["PeriodTaskId"] !== null) {
            $this->PeriodTaskId = $param["PeriodTaskId"];
        }
    }
}
