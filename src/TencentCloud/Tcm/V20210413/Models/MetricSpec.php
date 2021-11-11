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
namespace TencentCloud\Tcm\V20210413\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MetricSpec 描述如何通过指定指标进行自动扩缩容
 *
 * @method string getType() 获取指标来源类型，支持 Pods/Resource
 * @method void setType(string $Type) 设置指标来源类型，支持 Pods/Resource
 * @method PodsMetricSource getPods() 获取使用自定义指标扩进行自动扩缩容
 * @method void setPods(PodsMetricSource $Pods) 设置使用自定义指标扩进行自动扩缩容
 * @method ResourceMetricSource getResource() 获取使用资源指标扩进行自动扩缩容
 * @method void setResource(ResourceMetricSource $Resource) 设置使用资源指标扩进行自动扩缩容
 */
class MetricSpec extends AbstractModel
{
    /**
     * @var string 指标来源类型，支持 Pods/Resource
     */
    public $Type;

    /**
     * @var PodsMetricSource 使用自定义指标扩进行自动扩缩容
     */
    public $Pods;

    /**
     * @var ResourceMetricSource 使用资源指标扩进行自动扩缩容
     */
    public $Resource;

    /**
     * @param string $Type 指标来源类型，支持 Pods/Resource
     * @param PodsMetricSource $Pods 使用自定义指标扩进行自动扩缩容
     * @param ResourceMetricSource $Resource 使用资源指标扩进行自动扩缩容
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Pods",$param) and $param["Pods"] !== null) {
            $this->Pods = new PodsMetricSource();
            $this->Pods->deserialize($param["Pods"]);
        }

        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = new ResourceMetricSource();
            $this->Resource->deserialize($param["Resource"]);
        }
    }
}
