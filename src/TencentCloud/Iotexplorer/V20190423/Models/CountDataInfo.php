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
 * 云存上报统计信息
 *
 * @method integer getVideoExceptionNum() 获取视频上报异常次数
 * @method void setVideoExceptionNum(integer $VideoExceptionNum) 设置视频上报异常次数
 * @method integer getVideoSuccessNum() 获取视频上报成功次数
 * @method void setVideoSuccessNum(integer $VideoSuccessNum) 设置视频上报成功次数
 * @method string getVideoSuccessRate() 获取视频上报成功率

 * @method void setVideoSuccessRate(string $VideoSuccessRate) 设置视频上报成功率

 * @method integer getEventExceptionNum() 获取事件上报异常次数
 * @method void setEventExceptionNum(integer $EventExceptionNum) 设置事件上报异常次数
 * @method integer getEventSuccessNum() 获取事件上报成功次数
 * @method void setEventSuccessNum(integer $EventSuccessNum) 设置事件上报成功次数
 * @method string getEventSuccessRate() 获取事件上报成功率
 * @method void setEventSuccessRate(string $EventSuccessRate) 设置事件上报成功率
 */
class CountDataInfo extends AbstractModel
{
    /**
     * @var integer 视频上报异常次数
     */
    public $VideoExceptionNum;

    /**
     * @var integer 视频上报成功次数
     */
    public $VideoSuccessNum;

    /**
     * @var string 视频上报成功率

     */
    public $VideoSuccessRate;

    /**
     * @var integer 事件上报异常次数
     */
    public $EventExceptionNum;

    /**
     * @var integer 事件上报成功次数
     */
    public $EventSuccessNum;

    /**
     * @var string 事件上报成功率
     */
    public $EventSuccessRate;

    /**
     * @param integer $VideoExceptionNum 视频上报异常次数
     * @param integer $VideoSuccessNum 视频上报成功次数
     * @param string $VideoSuccessRate 视频上报成功率

     * @param integer $EventExceptionNum 事件上报异常次数
     * @param integer $EventSuccessNum 事件上报成功次数
     * @param string $EventSuccessRate 事件上报成功率
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
        if (array_key_exists("VideoExceptionNum",$param) and $param["VideoExceptionNum"] !== null) {
            $this->VideoExceptionNum = $param["VideoExceptionNum"];
        }

        if (array_key_exists("VideoSuccessNum",$param) and $param["VideoSuccessNum"] !== null) {
            $this->VideoSuccessNum = $param["VideoSuccessNum"];
        }

        if (array_key_exists("VideoSuccessRate",$param) and $param["VideoSuccessRate"] !== null) {
            $this->VideoSuccessRate = $param["VideoSuccessRate"];
        }

        if (array_key_exists("EventExceptionNum",$param) and $param["EventExceptionNum"] !== null) {
            $this->EventExceptionNum = $param["EventExceptionNum"];
        }

        if (array_key_exists("EventSuccessNum",$param) and $param["EventSuccessNum"] !== null) {
            $this->EventSuccessNum = $param["EventSuccessNum"];
        }

        if (array_key_exists("EventSuccessRate",$param) and $param["EventSuccessRate"] !== null) {
            $this->EventSuccessRate = $param["EventSuccessRate"];
        }
    }
}
