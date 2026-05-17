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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBillingSpecs请求参数结构体
 *
 * @method string getChargeType() 获取<p>付费模式：POSTPAID_BY_HOUR按量计费、PREPAID包年包月</p>
 * @method void setChargeType(string $ChargeType) 设置<p>付费模式：POSTPAID_BY_HOUR按量计费、PREPAID包年包月</p>
 * @method string getTiProjectId() 获取<p>TI工作空间ID</p><p>仅用于“工作空间”白名单功能。如需使用，请联系TI管理员开通白名单。</p>
 * @method void setTiProjectId(string $TiProjectId) 设置<p>TI工作空间ID</p><p>仅用于“工作空间”白名单功能。如需使用，请联系TI管理员开通白名单。</p>
 * @method string getTaskType() 获取<p>枚举值：空、TRAIN、NOTEBOOK、INFERENCE或EMS</p>
 * @method void setTaskType(string $TaskType) 设置<p>枚举值：空、TRAIN、NOTEBOOK、INFERENCE或EMS</p>
 * @method string getResourceType() 获取<p>资源类型：[&quot;&quot;, &quot;CALC&quot;, &quot;CPU&quot;, &quot;GPU&quot;, &quot;GPU-SW&quot;]</p>
 * @method void setResourceType(string $ResourceType) 设置<p>资源类型：[&quot;&quot;, &quot;CALC&quot;, &quot;CPU&quot;, &quot;GPU&quot;, &quot;GPU-SW&quot;]</p>
 */
class DescribeBillingSpecsRequest extends AbstractModel
{
    /**
     * @var string <p>付费模式：POSTPAID_BY_HOUR按量计费、PREPAID包年包月</p>
     */
    public $ChargeType;

    /**
     * @var string <p>TI工作空间ID</p><p>仅用于“工作空间”白名单功能。如需使用，请联系TI管理员开通白名单。</p>
     */
    public $TiProjectId;

    /**
     * @var string <p>枚举值：空、TRAIN、NOTEBOOK、INFERENCE或EMS</p>
     */
    public $TaskType;

    /**
     * @var string <p>资源类型：[&quot;&quot;, &quot;CALC&quot;, &quot;CPU&quot;, &quot;GPU&quot;, &quot;GPU-SW&quot;]</p>
     */
    public $ResourceType;

    /**
     * @param string $ChargeType <p>付费模式：POSTPAID_BY_HOUR按量计费、PREPAID包年包月</p>
     * @param string $TiProjectId <p>TI工作空间ID</p><p>仅用于“工作空间”白名单功能。如需使用，请联系TI管理员开通白名单。</p>
     * @param string $TaskType <p>枚举值：空、TRAIN、NOTEBOOK、INFERENCE或EMS</p>
     * @param string $ResourceType <p>资源类型：[&quot;&quot;, &quot;CALC&quot;, &quot;CPU&quot;, &quot;GPU&quot;, &quot;GPU-SW&quot;]</p>
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
        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("TiProjectId",$param) and $param["TiProjectId"] !== null) {
            $this->TiProjectId = $param["TiProjectId"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }
    }
}
