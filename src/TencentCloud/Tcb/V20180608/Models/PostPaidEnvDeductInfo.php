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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 后付费计费详情
 *
 * @method string getResourceType() 获取资源方
 * @method void setResourceType(string $ResourceType) 设置资源方
 * @method string getMetricName() 获取指标名
 * @method void setMetricName(string $MetricName) 设置指标名
 * @method float getResQuota() 获取按量计费详情
 * @method void setResQuota(float $ResQuota) 设置按量计费详情
 * @method float getPkgQuota() 获取资源包抵扣详情
 * @method void setPkgQuota(float $PkgQuota) 设置资源包抵扣详情
 * @method float getFreeQuota() 获取免费额度抵扣详情
 * @method void setFreeQuota(float $FreeQuota) 设置免费额度抵扣详情
 * @method string getEnvId() 获取环境id
 * @method void setEnvId(string $EnvId) 设置环境id
 */
class PostPaidEnvDeductInfo extends AbstractModel
{
    /**
     * @var string 资源方
     */
    public $ResourceType;

    /**
     * @var string 指标名
     */
    public $MetricName;

    /**
     * @var float 按量计费详情
     */
    public $ResQuota;

    /**
     * @var float 资源包抵扣详情
     */
    public $PkgQuota;

    /**
     * @var float 免费额度抵扣详情
     */
    public $FreeQuota;

    /**
     * @var string 环境id
     */
    public $EnvId;

    /**
     * @param string $ResourceType 资源方
     * @param string $MetricName 指标名
     * @param float $ResQuota 按量计费详情
     * @param float $PkgQuota 资源包抵扣详情
     * @param float $FreeQuota 免费额度抵扣详情
     * @param string $EnvId 环境id
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
        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("ResQuota",$param) and $param["ResQuota"] !== null) {
            $this->ResQuota = $param["ResQuota"];
        }

        if (array_key_exists("PkgQuota",$param) and $param["PkgQuota"] !== null) {
            $this->PkgQuota = $param["PkgQuota"];
        }

        if (array_key_exists("FreeQuota",$param) and $param["FreeQuota"] !== null) {
            $this->FreeQuota = $param["FreeQuota"];
        }

        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }
    }
}
