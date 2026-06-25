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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 模型路由集群信息
 *
 * @method string getClusterId() 获取<p>独占集群ID</p>
 * @method void setClusterId(string $ClusterId) 设置<p>独占集群ID</p>
 * @method string getType() 获取<p>集群类型</p><p>枚举值：</p><ul><li>Public： 公有云集群</li><li>Exclusive： 独占集群</li></ul><p>默认值：Public</p>
 * @method void setType(string $Type) 设置<p>集群类型</p><p>枚举值：</p><ul><li>Public： 公有云集群</li><li>Exclusive： 独占集群</li></ul><p>默认值：Public</p>
 */
class ClusterInfo extends AbstractModel
{
    /**
     * @var string <p>独占集群ID</p>
     */
    public $ClusterId;

    /**
     * @var string <p>集群类型</p><p>枚举值：</p><ul><li>Public： 公有云集群</li><li>Exclusive： 独占集群</li></ul><p>默认值：Public</p>
     */
    public $Type;

    /**
     * @param string $ClusterId <p>独占集群ID</p>
     * @param string $Type <p>集群类型</p><p>枚举值：</p><ul><li>Public： 公有云集群</li><li>Exclusive： 独占集群</li></ul><p>默认值：Public</p>
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
