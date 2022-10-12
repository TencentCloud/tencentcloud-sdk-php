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
namespace TencentCloud\Bma\V20210624\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCRMonitor请求参数结构体
 *
 * @method integer getWorkId() 获取作品ID
 * @method void setWorkId(integer $WorkId) 设置作品ID
 * @method string getMonitorStatus() 获取监测状态：1-开启监测 2-关闭监测
 * @method void setMonitorStatus(string $MonitorStatus) 设置监测状态：1-开启监测 2-关闭监测
 * @method string getMonitorEnd() 获取监测截止时间
 * @method void setMonitorEnd(string $MonitorEnd) 设置监测截止时间
 */
class ModifyCRMonitorRequest extends AbstractModel
{
    /**
     * @var integer 作品ID
     */
    public $WorkId;

    /**
     * @var string 监测状态：1-开启监测 2-关闭监测
     */
    public $MonitorStatus;

    /**
     * @var string 监测截止时间
     */
    public $MonitorEnd;

    /**
     * @param integer $WorkId 作品ID
     * @param string $MonitorStatus 监测状态：1-开启监测 2-关闭监测
     * @param string $MonitorEnd 监测截止时间
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
        if (array_key_exists("WorkId",$param) and $param["WorkId"] !== null) {
            $this->WorkId = $param["WorkId"];
        }

        if (array_key_exists("MonitorStatus",$param) and $param["MonitorStatus"] !== null) {
            $this->MonitorStatus = $param["MonitorStatus"];
        }

        if (array_key_exists("MonitorEnd",$param) and $param["MonitorEnd"] !== null) {
            $this->MonitorEnd = $param["MonitorEnd"];
        }
    }
}
