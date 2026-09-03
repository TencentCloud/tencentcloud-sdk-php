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
 * 评测容器自身资源规格
 *
 * @method string getResourcePartitionId() 获取<p>评测容器所在资源包 ID</p>
 * @method void setResourcePartitionId(string $ResourcePartitionId) 设置<p>评测容器所在资源包 ID</p>
 * @method string getQueue() 获取<p>评测容器所在资源组</p>
 * @method void setQueue(string $Queue) 设置<p>评测容器所在资源组</p>
 * @method string getBillingItem() 获取<p>评测容器计费项（规格）</p>
 * @method void setBillingItem(string $BillingItem) 设置<p>评测容器计费项（规格）</p>
 * @method integer getSpec() 获取<p>规格数量</p>
 * @method void setSpec(integer $Spec) 设置<p>规格数量</p>
 */
class BenchmarkResourceInfo extends AbstractModel
{
    /**
     * @var string <p>评测容器所在资源包 ID</p>
     */
    public $ResourcePartitionId;

    /**
     * @var string <p>评测容器所在资源组</p>
     */
    public $Queue;

    /**
     * @var string <p>评测容器计费项（规格）</p>
     */
    public $BillingItem;

    /**
     * @var integer <p>规格数量</p>
     */
    public $Spec;

    /**
     * @param string $ResourcePartitionId <p>评测容器所在资源包 ID</p>
     * @param string $Queue <p>评测容器所在资源组</p>
     * @param string $BillingItem <p>评测容器计费项（规格）</p>
     * @param integer $Spec <p>规格数量</p>
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
        if (array_key_exists("ResourcePartitionId",$param) and $param["ResourcePartitionId"] !== null) {
            $this->ResourcePartitionId = $param["ResourcePartitionId"];
        }

        if (array_key_exists("Queue",$param) and $param["Queue"] !== null) {
            $this->Queue = $param["Queue"];
        }

        if (array_key_exists("BillingItem",$param) and $param["BillingItem"] !== null) {
            $this->BillingItem = $param["BillingItem"];
        }

        if (array_key_exists("Spec",$param) and $param["Spec"] !== null) {
            $this->Spec = $param["Spec"];
        }
    }
}
