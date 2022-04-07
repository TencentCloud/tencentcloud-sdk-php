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
 * 消息路由
 *
 * @method integer getRouteID() 获取无
 * @method void setRouteID(integer $RouteID) 设置无
 * @method string getRouteName() 获取无
 * @method void setRouteName(string $RouteName) 设置无
 * @method string getSourceProductID() 获取无
 * @method void setSourceProductID(string $SourceProductID) 设置无
 * @method string getTopicFilter() 获取无
 * @method void setTopicFilter(string $TopicFilter) 设置无
 * @method string getMode() 获取无
 * @method void setMode(string $Mode) 设置无
 * @method string getTargetOptions() 获取无
 * @method void setTargetOptions(string $TargetOptions) 设置无
 * @method string getCreateTime() 获取无
 * @method void setCreateTime(string $CreateTime) 设置无
 * @method string getDescript() 获取无
 * @method void setDescript(string $Descript) 设置无
 * @method string getHealthy() 获取无
 * @method void setHealthy(string $Healthy) 设置无
 * @method string getStatus() 获取无
 * @method void setStatus(string $Status) 设置无
 * @method integer getMessageCount() 获取无
 * @method void setMessageCount(integer $MessageCount) 设置无
 * @method string getMessageLastTime() 获取无
 * @method void setMessageLastTime(string $MessageLastTime) 设置无
 * @method string getSourceProductName() 获取无
 * @method void setSourceProductName(string $SourceProductName) 设置无
 * @method array getSourceUnitIDList() 获取无
 * @method void setSourceUnitIDList(array $SourceUnitIDList) 设置无
 * @method array getSourceUnitNameList() 获取无
 * @method void setSourceUnitNameList(array $SourceUnitNameList) 设置无
 * @method array getSourceDeviceNameList() 获取无
 * @method void setSourceDeviceNameList(array $SourceDeviceNameList) 设置无
 */
class RouteInfo extends AbstractModel
{
    /**
     * @var integer 无
     */
    public $RouteID;

    /**
     * @var string 无
     */
    public $RouteName;

    /**
     * @var string 无
     */
    public $SourceProductID;

    /**
     * @var string 无
     */
    public $TopicFilter;

    /**
     * @var string 无
     */
    public $Mode;

    /**
     * @var string 无
     */
    public $TargetOptions;

    /**
     * @var string 无
     */
    public $CreateTime;

    /**
     * @var string 无
     */
    public $Descript;

    /**
     * @var string 无
     */
    public $Healthy;

    /**
     * @var string 无
     */
    public $Status;

    /**
     * @var integer 无
     */
    public $MessageCount;

    /**
     * @var string 无
     */
    public $MessageLastTime;

    /**
     * @var string 无
     */
    public $SourceProductName;

    /**
     * @var array 无
     */
    public $SourceUnitIDList;

    /**
     * @var array 无
     */
    public $SourceUnitNameList;

    /**
     * @var array 无
     */
    public $SourceDeviceNameList;

    /**
     * @param integer $RouteID 无
     * @param string $RouteName 无
     * @param string $SourceProductID 无
     * @param string $TopicFilter 无
     * @param string $Mode 无
     * @param string $TargetOptions 无
     * @param string $CreateTime 无
     * @param string $Descript 无
     * @param string $Healthy 无
     * @param string $Status 无
     * @param integer $MessageCount 无
     * @param string $MessageLastTime 无
     * @param string $SourceProductName 无
     * @param array $SourceUnitIDList 无
     * @param array $SourceUnitNameList 无
     * @param array $SourceDeviceNameList 无
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
        if (array_key_exists("RouteID",$param) and $param["RouteID"] !== null) {
            $this->RouteID = $param["RouteID"];
        }

        if (array_key_exists("RouteName",$param) and $param["RouteName"] !== null) {
            $this->RouteName = $param["RouteName"];
        }

        if (array_key_exists("SourceProductID",$param) and $param["SourceProductID"] !== null) {
            $this->SourceProductID = $param["SourceProductID"];
        }

        if (array_key_exists("TopicFilter",$param) and $param["TopicFilter"] !== null) {
            $this->TopicFilter = $param["TopicFilter"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("TargetOptions",$param) and $param["TargetOptions"] !== null) {
            $this->TargetOptions = $param["TargetOptions"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Descript",$param) and $param["Descript"] !== null) {
            $this->Descript = $param["Descript"];
        }

        if (array_key_exists("Healthy",$param) and $param["Healthy"] !== null) {
            $this->Healthy = $param["Healthy"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("MessageCount",$param) and $param["MessageCount"] !== null) {
            $this->MessageCount = $param["MessageCount"];
        }

        if (array_key_exists("MessageLastTime",$param) and $param["MessageLastTime"] !== null) {
            $this->MessageLastTime = $param["MessageLastTime"];
        }

        if (array_key_exists("SourceProductName",$param) and $param["SourceProductName"] !== null) {
            $this->SourceProductName = $param["SourceProductName"];
        }

        if (array_key_exists("SourceUnitIDList",$param) and $param["SourceUnitIDList"] !== null) {
            $this->SourceUnitIDList = $param["SourceUnitIDList"];
        }

        if (array_key_exists("SourceUnitNameList",$param) and $param["SourceUnitNameList"] !== null) {
            $this->SourceUnitNameList = $param["SourceUnitNameList"];
        }

        if (array_key_exists("SourceDeviceNameList",$param) and $param["SourceDeviceNameList"] !== null) {
            $this->SourceDeviceNameList = $param["SourceDeviceNameList"];
        }
    }
}
