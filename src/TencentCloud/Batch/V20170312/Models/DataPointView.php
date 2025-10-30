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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 监控采集的数据。
 *
 * @method array getTimestamps() 获取监控数据采集的时间

 * @method void setTimestamps(array $Timestamps) 设置监控数据采集的时间

 * @method array getValues() 获取监控指标数据; 如果涉及到多个实例的监控数据的间隙时间，取值会为null

 * @method void setValues(array $Values) 设置监控指标数据; 如果涉及到多个实例的监控数据的间隙时间，取值会为null
 */
class DataPointView extends AbstractModel
{
    /**
     * @var array 监控数据采集的时间

     */
    public $Timestamps;

    /**
     * @var array 监控指标数据; 如果涉及到多个实例的监控数据的间隙时间，取值会为null

     */
    public $Values;

    /**
     * @param array $Timestamps 监控数据采集的时间

     * @param array $Values 监控指标数据; 如果涉及到多个实例的监控数据的间隙时间，取值会为null
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
        if (array_key_exists("Timestamps",$param) and $param["Timestamps"] !== null) {
            $this->Timestamps = $param["Timestamps"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
