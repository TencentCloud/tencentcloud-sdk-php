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
 * 容器告警分组统计项（仅返回 TotalCount，不做告警大类拆分）
 *
 * @method string getClusterId() 获取<p>集群 ID（按集群分组时有值，否则空串）</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群 ID（按集群分组时有值，否则空串）</p>
 * @method string getContainerId() 获取<p>容器 ID（按容器分组时有值，否则空串）</p>
 * @method void setContainerId(string $ContainerId) 设置<p>容器 ID（按容器分组时有值，否则空串）</p>
 * @method integer getTotalCount() 获取<p>该集群/容器的告警总条数</p>
 * @method void setTotalCount(integer $TotalCount) 设置<p>该集群/容器的告警总条数</p>
 */
class EdrContainerAlertCountItem extends AbstractModel
{
    /**
     * @var string <p>集群 ID（按集群分组时有值，否则空串）</p>
     */
    public $ClusterId;

    /**
     * @var string <p>容器 ID（按容器分组时有值，否则空串）</p>
     */
    public $ContainerId;

    /**
     * @var integer <p>该集群/容器的告警总条数</p>
     */
    public $TotalCount;

    /**
     * @param string $ClusterId <p>集群 ID（按集群分组时有值，否则空串）</p>
     * @param string $ContainerId <p>容器 ID（按容器分组时有值，否则空串）</p>
     * @param integer $TotalCount <p>该集群/容器的告警总条数</p>
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ContainerId",$param) and $param["ContainerId"] !== null) {
            $this->ContainerId = $param["ContainerId"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
    }
}
