<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * DescribeResourceUsage返回参数结构体
 *
 * @method ResourceUsage getCRDUsage() 获取CRD使用量
 * @method void setCRDUsage(ResourceUsage $CRDUsage) 设置CRD使用量
 * @method integer getPodUsage() 获取Pod使用量
 * @method void setPodUsage(integer $PodUsage) 设置Pod使用量
 * @method integer getConfigMapUsage() 获取ConfigMap使用量
 * @method void setConfigMapUsage(integer $ConfigMapUsage) 设置ConfigMap使用量
 * @method ResourceUsage getOtherUsage() 获取其他资源使用量
 * @method void setOtherUsage(ResourceUsage $OtherUsage) 设置其他资源使用量
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeResourceUsageResponse extends AbstractModel
{
    /**
     * @var ResourceUsage CRD使用量
     */
    public $CRDUsage;

    /**
     * @var integer Pod使用量
     */
    public $PodUsage;

    /**
     * @var integer ConfigMap使用量
     */
    public $ConfigMapUsage;

    /**
     * @var ResourceUsage 其他资源使用量
     */
    public $OtherUsage;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param ResourceUsage $CRDUsage CRD使用量
     * @param integer $PodUsage Pod使用量
     * @param integer $ConfigMapUsage ConfigMap使用量
     * @param ResourceUsage $OtherUsage 其他资源使用量
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("CRDUsage",$param) and $param["CRDUsage"] !== null) {
            $this->CRDUsage = new ResourceUsage();
            $this->CRDUsage->deserialize($param["CRDUsage"]);
        }

        if (array_key_exists("PodUsage",$param) and $param["PodUsage"] !== null) {
            $this->PodUsage = $param["PodUsage"];
        }

        if (array_key_exists("ConfigMapUsage",$param) and $param["ConfigMapUsage"] !== null) {
            $this->ConfigMapUsage = $param["ConfigMapUsage"];
        }

        if (array_key_exists("OtherUsage",$param) and $param["OtherUsage"] !== null) {
            $this->OtherUsage = new ResourceUsage();
            $this->OtherUsage->deserialize($param["OtherUsage"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
