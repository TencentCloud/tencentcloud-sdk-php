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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDynamicInstanceDetail请求参数结构体
 *
 * @method string getInstanceId() 获取<p>EMR 集群 id</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>EMR 集群 id</p>
 * @method integer getRayClusterId() 获取<p>Ray集群Id</p>
 * @method void setRayClusterId(integer $RayClusterId) 设置<p>Ray集群Id</p>
 */
class DescribeDynamicInstanceDetailRequest extends AbstractModel
{
    /**
     * @var string <p>EMR 集群 id</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>Ray集群Id</p>
     */
    public $RayClusterId;

    /**
     * @param string $InstanceId <p>EMR 集群 id</p>
     * @param integer $RayClusterId <p>Ray集群Id</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("RayClusterId",$param) and $param["RayClusterId"] !== null) {
            $this->RayClusterId = $param["RayClusterId"];
        }
    }
}
