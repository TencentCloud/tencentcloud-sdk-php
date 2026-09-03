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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源配置（规格模式 BillingItem+Spec，或手动模式 PodCpu+PodMem，二选一）。" + "未传时使用默认值（4C8G）
 *
 * @method string getBillingItem() 获取<p>资源 ID（规格模式必填）</p>
 * @method void setBillingItem(string $BillingItem) 设置<p>资源 ID（规格模式必填）</p>
 * @method integer getSpec() 获取<p>购买份数（规格模式必填，每 Pod 的规格倍数）</p>
 * @method void setSpec(integer $Spec) 设置<p>购买份数（规格模式必填，每 Pod 的规格倍数）</p>
 * @method integer getPodCpu() 获取<p>pod CPU 核数（手动模式必填，单 Pod 粒度）</p>
 * @method void setPodCpu(integer $PodCpu) 设置<p>pod CPU 核数（手动模式必填，单 Pod 粒度）</p>
 * @method integer getPodMem() 获取<p>pod 内存大小 GB（手动模式必填，单 Pod 粒度）</p>
 * @method void setPodMem(integer $PodMem) 设置<p>pod 内存大小 GB（手动模式必填，单 Pod 粒度）</p>
 */
class MlFlowResourceConfig extends AbstractModel
{
    /**
     * @var string <p>资源 ID（规格模式必填）</p>
     */
    public $BillingItem;

    /**
     * @var integer <p>购买份数（规格模式必填，每 Pod 的规格倍数）</p>
     */
    public $Spec;

    /**
     * @var integer <p>pod CPU 核数（手动模式必填，单 Pod 粒度）</p>
     */
    public $PodCpu;

    /**
     * @var integer <p>pod 内存大小 GB（手动模式必填，单 Pod 粒度）</p>
     */
    public $PodMem;

    /**
     * @param string $BillingItem <p>资源 ID（规格模式必填）</p>
     * @param integer $Spec <p>购买份数（规格模式必填，每 Pod 的规格倍数）</p>
     * @param integer $PodCpu <p>pod CPU 核数（手动模式必填，单 Pod 粒度）</p>
     * @param integer $PodMem <p>pod 内存大小 GB（手动模式必填，单 Pod 粒度）</p>
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
        if (array_key_exists("BillingItem",$param) and $param["BillingItem"] !== null) {
            $this->BillingItem = $param["BillingItem"];
        }

        if (array_key_exists("Spec",$param) and $param["Spec"] !== null) {
            $this->Spec = $param["Spec"];
        }

        if (array_key_exists("PodCpu",$param) and $param["PodCpu"] !== null) {
            $this->PodCpu = $param["PodCpu"];
        }

        if (array_key_exists("PodMem",$param) and $param["PodMem"] !== null) {
            $this->PodMem = $param["PodMem"];
        }
    }
}
