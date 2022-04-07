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
 * BuildMessageRoute请求参数结构体
 *
 * @method string getRouteName() 获取路由名字
 * @method void setRouteName(string $RouteName) 设置路由名字
 * @method string getSourceProductID() 获取源产品id
 * @method void setSourceProductID(string $SourceProductID) 设置源产品id
 * @method array getSourceDeviceNameList() 获取源设备名列表
 * @method void setSourceDeviceNameList(array $SourceDeviceNameList) 设置源设备名列表
 * @method string getTopicFilter() 获取第一个字符为 "0"或"1"，"1"表示自定义topic
 * @method void setTopicFilter(string $TopicFilter) 设置第一个字符为 "0"或"1"，"1"表示自定义topic
 * @method string getMode() 获取http或mqtt-broker
 * @method void setMode(string $Mode) 设置http或mqtt-broker
 * @method array getSourceUnitIDList() 获取源单元id列表
 * @method void setSourceUnitIDList(array $SourceUnitIDList) 设置源单元id列表
 * @method string getDescript() 获取描述
 * @method void setDescript(string $Descript) 设置描述
 * @method string getTargetOptions() 获取无
 * @method void setTargetOptions(string $TargetOptions) 设置无
 */
class BuildMessageRouteRequest extends AbstractModel
{
    /**
     * @var string 路由名字
     */
    public $RouteName;

    /**
     * @var string 源产品id
     */
    public $SourceProductID;

    /**
     * @var array 源设备名列表
     */
    public $SourceDeviceNameList;

    /**
     * @var string 第一个字符为 "0"或"1"，"1"表示自定义topic
     */
    public $TopicFilter;

    /**
     * @var string http或mqtt-broker
     */
    public $Mode;

    /**
     * @var array 源单元id列表
     */
    public $SourceUnitIDList;

    /**
     * @var string 描述
     */
    public $Descript;

    /**
     * @var string 无
     */
    public $TargetOptions;

    /**
     * @param string $RouteName 路由名字
     * @param string $SourceProductID 源产品id
     * @param array $SourceDeviceNameList 源设备名列表
     * @param string $TopicFilter 第一个字符为 "0"或"1"，"1"表示自定义topic
     * @param string $Mode http或mqtt-broker
     * @param array $SourceUnitIDList 源单元id列表
     * @param string $Descript 描述
     * @param string $TargetOptions 无
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
        if (array_key_exists("RouteName",$param) and $param["RouteName"] !== null) {
            $this->RouteName = $param["RouteName"];
        }

        if (array_key_exists("SourceProductID",$param) and $param["SourceProductID"] !== null) {
            $this->SourceProductID = $param["SourceProductID"];
        }

        if (array_key_exists("SourceDeviceNameList",$param) and $param["SourceDeviceNameList"] !== null) {
            $this->SourceDeviceNameList = $param["SourceDeviceNameList"];
        }

        if (array_key_exists("TopicFilter",$param) and $param["TopicFilter"] !== null) {
            $this->TopicFilter = $param["TopicFilter"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("SourceUnitIDList",$param) and $param["SourceUnitIDList"] !== null) {
            $this->SourceUnitIDList = $param["SourceUnitIDList"];
        }

        if (array_key_exists("Descript",$param) and $param["Descript"] !== null) {
            $this->Descript = $param["Descript"];
        }

        if (array_key_exists("TargetOptions",$param) and $param["TargetOptions"] !== null) {
            $this->TargetOptions = $param["TargetOptions"];
        }
    }
}
