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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeResourceSchedule返回参数结构体
 *
 * @method boolean getOpenSwitch() 获取资源调度功能是否开启
 * @method void setOpenSwitch(boolean $OpenSwitch) 设置资源调度功能是否开启
 * @method string getScheduler() 获取正在使用的资源调度器
 * @method void setScheduler(string $Scheduler) 设置正在使用的资源调度器
 * @method string getFSInfo() 获取公平调度器的信息
 * @method void setFSInfo(string $FSInfo) 设置公平调度器的信息
 * @method string getCSInfo() 获取容量调度器的信息
 * @method void setCSInfo(string $CSInfo) 设置容量调度器的信息
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeResourceScheduleResponse extends AbstractModel
{
    /**
     * @var boolean 资源调度功能是否开启
     */
    public $OpenSwitch;

    /**
     * @var string 正在使用的资源调度器
     */
    public $Scheduler;

    /**
     * @var string 公平调度器的信息
     */
    public $FSInfo;

    /**
     * @var string 容量调度器的信息
     */
    public $CSInfo;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param boolean $OpenSwitch 资源调度功能是否开启
     * @param string $Scheduler 正在使用的资源调度器
     * @param string $FSInfo 公平调度器的信息
     * @param string $CSInfo 容量调度器的信息
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
        if (array_key_exists("OpenSwitch",$param) and $param["OpenSwitch"] !== null) {
            $this->OpenSwitch = $param["OpenSwitch"];
        }

        if (array_key_exists("Scheduler",$param) and $param["Scheduler"] !== null) {
            $this->Scheduler = $param["Scheduler"];
        }

        if (array_key_exists("FSInfo",$param) and $param["FSInfo"] !== null) {
            $this->FSInfo = $param["FSInfo"];
        }

        if (array_key_exists("CSInfo",$param) and $param["CSInfo"] !== null) {
            $this->CSInfo = $param["CSInfo"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
