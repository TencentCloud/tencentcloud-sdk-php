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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 带宽上下限。
 *
 * @method string getResourceId() 获取资源ID。
 * @method void setResourceId(string $ResourceId) 设置资源ID。
 * @method integer getBandwidthLowerLimit() 获取带宽下限，单位：Mbps。
 * @method void setBandwidthLowerLimit(integer $BandwidthLowerLimit) 设置带宽下限，单位：Mbps。
 * @method integer getBandwidthUpperLimit() 获取带宽上限，单位：Mbps。
 * @method void setBandwidthUpperLimit(integer $BandwidthUpperLimit) 设置带宽上限，单位：Mbps。
 */
class BandwidthRange extends AbstractModel
{
    /**
     * @var string 资源ID。
     */
    public $ResourceId;

    /**
     * @var integer 带宽下限，单位：Mbps。
     */
    public $BandwidthLowerLimit;

    /**
     * @var integer 带宽上限，单位：Mbps。
     */
    public $BandwidthUpperLimit;

    /**
     * @param string $ResourceId 资源ID。
     * @param integer $BandwidthLowerLimit 带宽下限，单位：Mbps。
     * @param integer $BandwidthUpperLimit 带宽上限，单位：Mbps。
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("BandwidthLowerLimit",$param) and $param["BandwidthLowerLimit"] !== null) {
            $this->BandwidthLowerLimit = $param["BandwidthLowerLimit"];
        }

        if (array_key_exists("BandwidthUpperLimit",$param) and $param["BandwidthUpperLimit"] !== null) {
            $this->BandwidthUpperLimit = $param["BandwidthUpperLimit"];
        }
    }
}
