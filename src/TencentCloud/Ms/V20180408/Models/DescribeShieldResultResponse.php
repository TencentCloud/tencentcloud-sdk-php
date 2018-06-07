<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Ms\V20180408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getTaskStatus() 获取任务状态: 1-已完成,2-处理中,3-处理出错,4-处理超时
 * @method void setTaskStatus(integer $TaskStatus) 设置任务状态: 1-已完成,2-处理中,3-处理出错,4-处理超时
 * @method AppDetailInfo getAppDetailInfo() 获取app加固前的详细信息
 * @method void setAppDetailInfo(AppDetailInfo $AppDetailInfo) 设置app加固前的详细信息
 * @method ShieldInfo getShieldInfo() 获取app加固后的详细信息
 * @method void setShieldInfo(ShieldInfo $ShieldInfo) 设置app加固后的详细信息
 * @method string getRequestId() 获取唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
 */

/**
 *DescribeShieldResult返回参数结构体
 */
class DescribeShieldResultResponse extends AbstractModel
{
    /**
     * @var integer 任务状态: 1-已完成,2-处理中,3-处理出错,4-处理超时
     */
    public $TaskStatus;

    /**
     * @var AppDetailInfo app加固前的详细信息
     */
    public $AppDetailInfo;

    /**
     * @var ShieldInfo app加固后的详细信息
     */
    public $ShieldInfo;

    /**
     * @var string 唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
     */
    public $RequestId;
    /**
     * @param integer $TaskStatus 任务状态: 1-已完成,2-处理中,3-处理出错,4-处理超时
     * @param AppDetailInfo $AppDetailInfo app加固前的详细信息
     * @param ShieldInfo $ShieldInfo app加固后的详细信息
     * @param string $RequestId 唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("AppDetailInfo",$param) and $param["AppDetailInfo"] !== null) {
            $this->AppDetailInfo = new AppDetailInfo();
            $this->AppDetailInfo->deserialize($param["AppDetailInfo"]);
        }

        if (array_key_exists("ShieldInfo",$param) and $param["ShieldInfo"] !== null) {
            $this->ShieldInfo = new ShieldInfo();
            $this->ShieldInfo->deserialize($param["ShieldInfo"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
