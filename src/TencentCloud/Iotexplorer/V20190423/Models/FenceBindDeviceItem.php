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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 围栏绑定的设备信息
 *
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 * @method string getAlertCondition() 获取告警条件(In，进围栏报警；Out，出围栏报警；InOrOut，进围栏或者出围栏均报警)
 * @method void setAlertCondition(string $AlertCondition) 设置告警条件(In，进围栏报警；Out，出围栏报警；InOrOut，进围栏或者出围栏均报警)
 * @method boolean getFenceEnable() 获取是否使能围栏(true，使能；false，禁用)
 * @method void setFenceEnable(boolean $FenceEnable) 设置是否使能围栏(true，使能；false，禁用)
 * @method string getMethod() 获取告警处理方法
 * @method void setMethod(string $Method) 设置告警处理方法
 */
class FenceBindDeviceItem extends AbstractModel
{
    /**
     * @var string 设备名称
     */
    public $DeviceName;

    /**
     * @var string 告警条件(In，进围栏报警；Out，出围栏报警；InOrOut，进围栏或者出围栏均报警)
     */
    public $AlertCondition;

    /**
     * @var boolean 是否使能围栏(true，使能；false，禁用)
     */
    public $FenceEnable;

    /**
     * @var string 告警处理方法
     */
    public $Method;

    /**
     * @param string $DeviceName 设备名称
     * @param string $AlertCondition 告警条件(In，进围栏报警；Out，出围栏报警；InOrOut，进围栏或者出围栏均报警)
     * @param boolean $FenceEnable 是否使能围栏(true，使能；false，禁用)
     * @param string $Method 告警处理方法
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
        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("AlertCondition",$param) and $param["AlertCondition"] !== null) {
            $this->AlertCondition = $param["AlertCondition"];
        }

        if (array_key_exists("FenceEnable",$param) and $param["FenceEnable"] !== null) {
            $this->FenceEnable = $param["FenceEnable"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }
    }
}
