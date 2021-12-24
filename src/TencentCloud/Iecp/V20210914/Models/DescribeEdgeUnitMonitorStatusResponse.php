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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEdgeUnitMonitorStatus返回参数结构体
 *
 * @method string getMonitorStatus() 获取监控状态描述：
"running" 单元监控正常运行
"deploying" 单元监控部署中
"norsc" 单元需要可用节点以部署监控
"abnormal" 单元监控异常
"none" 单元监控不可用
 * @method void setMonitorStatus(string $MonitorStatus) 设置监控状态描述：
"running" 单元监控正常运行
"deploying" 单元监控部署中
"norsc" 单元需要可用节点以部署监控
"abnormal" 单元监控异常
"none" 单元监控不可用
 * @method boolean getIsAvailable() 获取监控是否就绪
 * @method void setIsAvailable(boolean $IsAvailable) 设置监控是否就绪
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeEdgeUnitMonitorStatusResponse extends AbstractModel
{
    /**
     * @var string 监控状态描述：
"running" 单元监控正常运行
"deploying" 单元监控部署中
"norsc" 单元需要可用节点以部署监控
"abnormal" 单元监控异常
"none" 单元监控不可用
     */
    public $MonitorStatus;

    /**
     * @var boolean 监控是否就绪
     */
    public $IsAvailable;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $MonitorStatus 监控状态描述：
"running" 单元监控正常运行
"deploying" 单元监控部署中
"norsc" 单元需要可用节点以部署监控
"abnormal" 单元监控异常
"none" 单元监控不可用
     * @param boolean $IsAvailable 监控是否就绪
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
        if (array_key_exists("MonitorStatus",$param) and $param["MonitorStatus"] !== null) {
            $this->MonitorStatus = $param["MonitorStatus"];
        }

        if (array_key_exists("IsAvailable",$param) and $param["IsAvailable"] !== null) {
            $this->IsAvailable = $param["IsAvailable"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
