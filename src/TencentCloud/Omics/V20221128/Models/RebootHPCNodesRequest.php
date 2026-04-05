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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RebootHPCNodes请求参数结构体
 *
 * @method string getClusterId() 获取<p>集群Id</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群Id</p>
 * @method array getNodeIds() 获取<p>节点Id，例如ins-d1fc42ss</p>
 * @method void setNodeIds(array $NodeIds) 设置<p>节点Id，例如ins-d1fc42ss</p>
 * @method string getStopType() 获取<p>重启的关机类型。</p><p>枚举值：</p><ul><li>SOFT： 软关机</li><li>HARD： 硬关机</li><li>SOFT_FIRST： 优先软关机，失败再执行硬关机</li></ul><p>默认值：SOFT</p>
 * @method void setStopType(string $StopType) 设置<p>重启的关机类型。</p><p>枚举值：</p><ul><li>SOFT： 软关机</li><li>HARD： 硬关机</li><li>SOFT_FIRST： 优先软关机，失败再执行硬关机</li></ul><p>默认值：SOFT</p>
 */
class RebootHPCNodesRequest extends AbstractModel
{
    /**
     * @var string <p>集群Id</p>
     */
    public $ClusterId;

    /**
     * @var array <p>节点Id，例如ins-d1fc42ss</p>
     */
    public $NodeIds;

    /**
     * @var string <p>重启的关机类型。</p><p>枚举值：</p><ul><li>SOFT： 软关机</li><li>HARD： 硬关机</li><li>SOFT_FIRST： 优先软关机，失败再执行硬关机</li></ul><p>默认值：SOFT</p>
     */
    public $StopType;

    /**
     * @param string $ClusterId <p>集群Id</p>
     * @param array $NodeIds <p>节点Id，例如ins-d1fc42ss</p>
     * @param string $StopType <p>重启的关机类型。</p><p>枚举值：</p><ul><li>SOFT： 软关机</li><li>HARD： 硬关机</li><li>SOFT_FIRST： 优先软关机，失败再执行硬关机</li></ul><p>默认值：SOFT</p>
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

        if (array_key_exists("NodeIds",$param) and $param["NodeIds"] !== null) {
            $this->NodeIds = $param["NodeIds"];
        }

        if (array_key_exists("StopType",$param) and $param["StopType"] !== null) {
            $this->StopType = $param["StopType"];
        }
    }
}
