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
namespace TencentCloud\Rce\V20260130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 设备风险评估基础版返回结果
 *
 * @method DataScore getScore() 获取<p>设备风险分信息</p>
 * @method void setScore(DataScore $Score) 设置<p>设备风险分信息</p>
 * @method Device getDevice() 获取<p>设备基础信息</p>
 * @method void setDevice(Device $Device) 设置<p>设备基础信息</p>
 */
class AssessDeviceRiskRsp extends AbstractModel
{
    /**
     * @var DataScore <p>设备风险分信息</p>
     */
    public $Score;

    /**
     * @var Device <p>设备基础信息</p>
     */
    public $Device;

    /**
     * @param DataScore $Score <p>设备风险分信息</p>
     * @param Device $Device <p>设备基础信息</p>
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
        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = new DataScore();
            $this->Score->deserialize($param["Score"]);
        }

        if (array_key_exists("Device",$param) and $param["Device"] !== null) {
            $this->Device = new Device();
            $this->Device->deserialize($param["Device"]);
        }
    }
}
