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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ScaleOceanusCluster请求参数结构体
 *
 * @method string getClusterId() 获取<p>集群ID</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群ID</p>
 * @method integer getNewCU() 获取<p>集群的目标CU，需大于12CU，并且集群CU需要满足 12 + 7*n (n&gt;=0)</p>
 * @method void setNewCU(integer $NewCU) 设置<p>集群的目标CU，需大于12CU，并且集群CU需要满足 12 + 7*n (n&gt;=0)</p>
 * @method string getScaleMode() 获取<p>扩容集群或者缩容集群</p><p>枚举值：</p><ul><li>ScaleDown： 缩容集群</li><li>ScaleUp： 扩容集群</li></ul><p>默认值：ScaleUp</p>
 * @method void setScaleMode(string $ScaleMode) 设置<p>扩容集群或者缩容集群</p><p>枚举值：</p><ul><li>ScaleDown： 缩容集群</li><li>ScaleUp： 扩容集群</li></ul><p>默认值：ScaleUp</p>
 */
class ScaleOceanusClusterRequest extends AbstractModel
{
    /**
     * @var string <p>集群ID</p>
     */
    public $ClusterId;

    /**
     * @var integer <p>集群的目标CU，需大于12CU，并且集群CU需要满足 12 + 7*n (n&gt;=0)</p>
     */
    public $NewCU;

    /**
     * @var string <p>扩容集群或者缩容集群</p><p>枚举值：</p><ul><li>ScaleDown： 缩容集群</li><li>ScaleUp： 扩容集群</li></ul><p>默认值：ScaleUp</p>
     */
    public $ScaleMode;

    /**
     * @param string $ClusterId <p>集群ID</p>
     * @param integer $NewCU <p>集群的目标CU，需大于12CU，并且集群CU需要满足 12 + 7*n (n&gt;=0)</p>
     * @param string $ScaleMode <p>扩容集群或者缩容集群</p><p>枚举值：</p><ul><li>ScaleDown： 缩容集群</li><li>ScaleUp： 扩容集群</li></ul><p>默认值：ScaleUp</p>
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

        if (array_key_exists("NewCU",$param) and $param["NewCU"] !== null) {
            $this->NewCU = $param["NewCU"];
        }

        if (array_key_exists("ScaleMode",$param) and $param["ScaleMode"] !== null) {
            $this->ScaleMode = $param["ScaleMode"];
        }
    }
}
