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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddRecordRetrieveTask请求参数结构体
 *
 * @method string getTaskName() 获取任务名称，仅支持中文、英文、数字、_、-，长度不超过32个字符，模板名称全局唯一，不能为空，不能重复
 * @method void setTaskName(string $TaskName) 设置任务名称，仅支持中文、英文、数字、_、-，长度不超过32个字符，模板名称全局唯一，不能为空，不能重复
 * @method integer getStartTime() 获取取回录像的开始时间，UTC秒数，例如：1662114146，开始和结束时间段最长为一天，且不能跨天
 * @method void setStartTime(integer $StartTime) 设置取回录像的开始时间，UTC秒数，例如：1662114146，开始和结束时间段最长为一天，且不能跨天
 * @method integer getEndTime() 获取取回录像的结束时间，UTC秒数，例如：1662114146，开始和结束时间段最长为一天，且不能跨天
 * @method void setEndTime(integer $EndTime) 设置取回录像的结束时间，UTC秒数，例如：1662114146，开始和结束时间段最长为一天，且不能跨天
 * @method integer getMode() 获取取回模式， 1:极速模式，其他暂不支持
 * @method void setMode(integer $Mode) 设置取回模式， 1:极速模式，其他暂不支持
 * @method integer getExpiration() 获取取回录像副本有效期，最小为1天，最大为365天
 * @method void setExpiration(integer $Expiration) 设置取回录像副本有效期，最小为1天，最大为365天
 * @method array getChannels() 获取设备通道，一个任务最多32个设备通道
 * @method void setChannels(array $Channels) 设置设备通道，一个任务最多32个设备通道
 * @method string getDescribe() 获取取回任务描述
 * @method void setDescribe(string $Describe) 设置取回任务描述
 */
class AddRecordRetrieveTaskRequest extends AbstractModel
{
    /**
     * @var string 任务名称，仅支持中文、英文、数字、_、-，长度不超过32个字符，模板名称全局唯一，不能为空，不能重复
     */
    public $TaskName;

    /**
     * @var integer 取回录像的开始时间，UTC秒数，例如：1662114146，开始和结束时间段最长为一天，且不能跨天
     */
    public $StartTime;

    /**
     * @var integer 取回录像的结束时间，UTC秒数，例如：1662114146，开始和结束时间段最长为一天，且不能跨天
     */
    public $EndTime;

    /**
     * @var integer 取回模式， 1:极速模式，其他暂不支持
     */
    public $Mode;

    /**
     * @var integer 取回录像副本有效期，最小为1天，最大为365天
     */
    public $Expiration;

    /**
     * @var array 设备通道，一个任务最多32个设备通道
     */
    public $Channels;

    /**
     * @var string 取回任务描述
     */
    public $Describe;

    /**
     * @param string $TaskName 任务名称，仅支持中文、英文、数字、_、-，长度不超过32个字符，模板名称全局唯一，不能为空，不能重复
     * @param integer $StartTime 取回录像的开始时间，UTC秒数，例如：1662114146，开始和结束时间段最长为一天，且不能跨天
     * @param integer $EndTime 取回录像的结束时间，UTC秒数，例如：1662114146，开始和结束时间段最长为一天，且不能跨天
     * @param integer $Mode 取回模式， 1:极速模式，其他暂不支持
     * @param integer $Expiration 取回录像副本有效期，最小为1天，最大为365天
     * @param array $Channels 设备通道，一个任务最多32个设备通道
     * @param string $Describe 取回任务描述
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
        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Expiration",$param) and $param["Expiration"] !== null) {
            $this->Expiration = $param["Expiration"];
        }

        if (array_key_exists("Channels",$param) and $param["Channels"] !== null) {
            $this->Channels = [];
            foreach ($param["Channels"] as $key => $value){
                $obj = new ChannelInfo();
                $obj->deserialize($value);
                array_push($this->Channels, $obj);
            }
        }

        if (array_key_exists("Describe",$param) and $param["Describe"] !== null) {
            $this->Describe = $param["Describe"];
        }
    }
}
