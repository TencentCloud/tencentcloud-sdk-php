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
namespace TencentCloud\Kms\V20190118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 独享版集群
 *
 * @method string getHsmClusterId() 获取独享集群Id
 * @method void setHsmClusterId(string $HsmClusterId) 设置独享集群Id
 * @method string getHsmClusterName() 获取独享集群名称
 * @method void setHsmClusterName(string $HsmClusterName) 设置独享集群名称
 */
class ExclusiveHSM extends AbstractModel
{
    /**
     * @var string 独享集群Id
     */
    public $HsmClusterId;

    /**
     * @var string 独享集群名称
     */
    public $HsmClusterName;

    /**
     * @param string $HsmClusterId 独享集群Id
     * @param string $HsmClusterName 独享集群名称
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
        if (array_key_exists("HsmClusterId",$param) and $param["HsmClusterId"] !== null) {
            $this->HsmClusterId = $param["HsmClusterId"];
        }

        if (array_key_exists("HsmClusterName",$param) and $param["HsmClusterName"] !== null) {
            $this->HsmClusterName = $param["HsmClusterName"];
        }
    }
}
