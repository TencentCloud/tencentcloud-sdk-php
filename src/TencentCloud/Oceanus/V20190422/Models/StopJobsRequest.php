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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * StopJobs请求参数结构体
 *
 * @method array getStopJobDescriptions() 获取批量停止作业的描述信息
 * @method void setStopJobDescriptions(array $StopJobDescriptions) 设置批量停止作业的描述信息
 * @method string getWorkSpaceId() 获取工作空间 SerialId
 * @method void setWorkSpaceId(string $WorkSpaceId) 设置工作空间 SerialId
 */
class StopJobsRequest extends AbstractModel
{
    /**
     * @var array 批量停止作业的描述信息
     */
    public $StopJobDescriptions;

    /**
     * @var string 工作空间 SerialId
     */
    public $WorkSpaceId;

    /**
     * @param array $StopJobDescriptions 批量停止作业的描述信息
     * @param string $WorkSpaceId 工作空间 SerialId
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
        if (array_key_exists("StopJobDescriptions",$param) and $param["StopJobDescriptions"] !== null) {
            $this->StopJobDescriptions = [];
            foreach ($param["StopJobDescriptions"] as $key => $value){
                $obj = new StopJobDescription();
                $obj->deserialize($value);
                array_push($this->StopJobDescriptions, $obj);
            }
        }

        if (array_key_exists("WorkSpaceId",$param) and $param["WorkSpaceId"] !== null) {
            $this->WorkSpaceId = $param["WorkSpaceId"];
        }
    }
}
