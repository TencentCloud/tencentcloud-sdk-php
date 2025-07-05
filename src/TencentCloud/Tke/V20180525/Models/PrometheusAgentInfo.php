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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 托管Prometheus agent信息
 *
 * @method string getClusterType() 获取集群类型
 * @method void setClusterType(string $ClusterType) 设置集群类型
 * @method string getClusterId() 获取集群id
 * @method void setClusterId(string $ClusterId) 设置集群id
 * @method string getDescribe() 获取备注
 * @method void setDescribe(string $Describe) 设置备注
 * @method string getRegion() 获取集群所在地域
 * @method void setRegion(string $Region) 设置集群所在地域
 */
class PrometheusAgentInfo extends AbstractModel
{
    /**
     * @var string 集群类型
     */
    public $ClusterType;

    /**
     * @var string 集群id
     */
    public $ClusterId;

    /**
     * @var string 备注
     */
    public $Describe;

    /**
     * @var string 集群所在地域
     */
    public $Region;

    /**
     * @param string $ClusterType 集群类型
     * @param string $ClusterId 集群id
     * @param string $Describe 备注
     * @param string $Region 集群所在地域
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
        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Describe",$param) and $param["Describe"] !== null) {
            $this->Describe = $param["Describe"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}
