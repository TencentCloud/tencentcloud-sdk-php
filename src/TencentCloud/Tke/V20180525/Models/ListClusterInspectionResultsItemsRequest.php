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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListClusterInspectionResultsItems请求参数结构体
 *
 * @method string getClusterId() 获取目标集群ID
 * @method void setClusterId(string $ClusterId) 设置目标集群ID
 * @method string getStartTime() 获取查询历史结果的开始时间，Unix时间戳
 * @method void setStartTime(string $StartTime) 设置查询历史结果的开始时间，Unix时间戳
 * @method string getEndTime() 获取查询历史结果的结束时间，默认当前距离开始时间3天，Unix时间戳
 * @method void setEndTime(string $EndTime) 设置查询历史结果的结束时间，默认当前距离开始时间3天，Unix时间戳
 */
class ListClusterInspectionResultsItemsRequest extends AbstractModel
{
    /**
     * @var string 目标集群ID
     */
    public $ClusterId;

    /**
     * @var string 查询历史结果的开始时间，Unix时间戳
     */
    public $StartTime;

    /**
     * @var string 查询历史结果的结束时间，默认当前距离开始时间3天，Unix时间戳
     */
    public $EndTime;

    /**
     * @param string $ClusterId 目标集群ID
     * @param string $StartTime 查询历史结果的开始时间，Unix时间戳
     * @param string $EndTime 查询历史结果的结束时间，默认当前距离开始时间3天，Unix时间戳
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
