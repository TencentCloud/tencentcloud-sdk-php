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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyClusterReadOnly请求参数结构体
 *
 * @method array getClusterIds() 获取集群ID列表
 * @method void setClusterIds(array $ClusterIds) 设置集群ID列表
 * @method string getReadOnlyOperation() 获取集群只读开关，可选值：ON，OFF
 * @method void setReadOnlyOperation(string $ReadOnlyOperation) 设置集群只读开关，可选值：ON，OFF
 * @method string getIsInMaintainPeriod() 获取yes：在运维时间窗内修改，no：立即执行（默认值）
 * @method void setIsInMaintainPeriod(string $IsInMaintainPeriod) 设置yes：在运维时间窗内修改，no：立即执行（默认值）
 */
class ModifyClusterReadOnlyRequest extends AbstractModel
{
    /**
     * @var array 集群ID列表
     */
    public $ClusterIds;

    /**
     * @var string 集群只读开关，可选值：ON，OFF
     */
    public $ReadOnlyOperation;

    /**
     * @var string yes：在运维时间窗内修改，no：立即执行（默认值）
     */
    public $IsInMaintainPeriod;

    /**
     * @param array $ClusterIds 集群ID列表
     * @param string $ReadOnlyOperation 集群只读开关，可选值：ON，OFF
     * @param string $IsInMaintainPeriod yes：在运维时间窗内修改，no：立即执行（默认值）
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
        if (array_key_exists("ClusterIds",$param) and $param["ClusterIds"] !== null) {
            $this->ClusterIds = $param["ClusterIds"];
        }

        if (array_key_exists("ReadOnlyOperation",$param) and $param["ReadOnlyOperation"] !== null) {
            $this->ReadOnlyOperation = $param["ReadOnlyOperation"];
        }

        if (array_key_exists("IsInMaintainPeriod",$param) and $param["IsInMaintainPeriod"] !== null) {
            $this->IsInMaintainPeriod = $param["IsInMaintainPeriod"];
        }
    }
}
