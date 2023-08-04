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
 * DescribeAITaskResult请求参数结构体
 *
 * @method string getTaskId() 获取AI 任务 ID
 * @method void setTaskId(string $TaskId) 设置AI 任务 ID
 * @method string getChannelId() 获取通道ID
 * @method void setChannelId(string $ChannelId) 设置通道ID
 * @method string getObject() 获取桶内文件的路径。
 * @method void setObject(string $Object) 设置桶内文件的路径。
 * @method string getDetectType() 获取AI 任务识别类型。可选值为 Facemask(口罩识别)、Chefhat(厨师帽识别)、Smoking(抽烟检测)、Chefcloth(厨师服识别)、PhoneCall(接打电话识别)、Pet(宠物识别)、Body(人体识别)和 Car(车辆车牌识别)
 * @method void setDetectType(string $DetectType) 设置AI 任务识别类型。可选值为 Facemask(口罩识别)、Chefhat(厨师帽识别)、Smoking(抽烟检测)、Chefcloth(厨师服识别)、PhoneCall(接打电话识别)、Pet(宠物识别)、Body(人体识别)和 Car(车辆车牌识别)
 * @method string getBeginTime() 获取开始时间时间。秒级时间戳。开始时间和结束时间跨度小于等于30天
 * @method void setBeginTime(string $BeginTime) 设置开始时间时间。秒级时间戳。开始时间和结束时间跨度小于等于30天
 * @method string getEndTime() 获取结束时间时间。秒级时间戳。开始时间和结束时间跨度小于等于30天
 * @method void setEndTime(string $EndTime) 设置结束时间时间。秒级时间戳。开始时间和结束时间跨度小于等于30天
 * @method integer getPageNumber() 获取页码。默认为1
 * @method void setPageNumber(integer $PageNumber) 设置页码。默认为1
 * @method integer getPageSize() 获取每页 AI 识别结果数量。可选值1～100，默认为10（按时间倒序显示识别结果）
 * @method void setPageSize(integer $PageSize) 设置每页 AI 识别结果数量。可选值1～100，默认为10（按时间倒序显示识别结果）
 */
class DescribeAITaskResultRequest extends AbstractModel
{
    /**
     * @var string AI 任务 ID
     */
    public $TaskId;

    /**
     * @var string 通道ID
     */
    public $ChannelId;

    /**
     * @var string 桶内文件的路径。
     */
    public $Object;

    /**
     * @var string AI 任务识别类型。可选值为 Facemask(口罩识别)、Chefhat(厨师帽识别)、Smoking(抽烟检测)、Chefcloth(厨师服识别)、PhoneCall(接打电话识别)、Pet(宠物识别)、Body(人体识别)和 Car(车辆车牌识别)
     */
    public $DetectType;

    /**
     * @var string 开始时间时间。秒级时间戳。开始时间和结束时间跨度小于等于30天
     */
    public $BeginTime;

    /**
     * @var string 结束时间时间。秒级时间戳。开始时间和结束时间跨度小于等于30天
     */
    public $EndTime;

    /**
     * @var integer 页码。默认为1
     */
    public $PageNumber;

    /**
     * @var integer 每页 AI 识别结果数量。可选值1～100，默认为10（按时间倒序显示识别结果）
     */
    public $PageSize;

    /**
     * @param string $TaskId AI 任务 ID
     * @param string $ChannelId 通道ID
     * @param string $Object 桶内文件的路径。
     * @param string $DetectType AI 任务识别类型。可选值为 Facemask(口罩识别)、Chefhat(厨师帽识别)、Smoking(抽烟检测)、Chefcloth(厨师服识别)、PhoneCall(接打电话识别)、Pet(宠物识别)、Body(人体识别)和 Car(车辆车牌识别)
     * @param string $BeginTime 开始时间时间。秒级时间戳。开始时间和结束时间跨度小于等于30天
     * @param string $EndTime 结束时间时间。秒级时间戳。开始时间和结束时间跨度小于等于30天
     * @param integer $PageNumber 页码。默认为1
     * @param integer $PageSize 每页 AI 识别结果数量。可选值1～100，默认为10（按时间倒序显示识别结果）
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("Object",$param) and $param["Object"] !== null) {
            $this->Object = $param["Object"];
        }

        if (array_key_exists("DetectType",$param) and $param["DetectType"] !== null) {
            $this->DetectType = $param["DetectType"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
