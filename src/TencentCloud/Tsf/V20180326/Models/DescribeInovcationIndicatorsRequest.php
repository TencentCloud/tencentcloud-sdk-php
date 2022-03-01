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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInovcationIndicators请求参数结构体
 *
 * @method string getDimension() 获取维度
 * @method void setDimension(string $Dimension) 设置维度
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method string getNamespaceId() 获取命名空间ID
 * @method void setNamespaceId(string $NamespaceId) 设置命名空间ID
 * @method string getServiceId() 获取微服务ID
 * @method void setServiceId(string $ServiceId) 设置微服务ID
 * @method string getCallerServiceName() 获取调用方服务名
 * @method void setCallerServiceName(string $CallerServiceName) 设置调用方服务名
 * @method string getCalleeServiceName() 获取被调方服务名
 * @method void setCalleeServiceName(string $CalleeServiceName) 设置被调方服务名
 * @method string getCallerInterfaceName() 获取调用方接口名
 * @method void setCallerInterfaceName(string $CallerInterfaceName) 设置调用方接口名
 * @method string getCalleeInterfaceName() 获取被调方接口名
 * @method void setCalleeInterfaceName(string $CalleeInterfaceName) 设置被调方接口名
 * @method string getApplicationId() 获取应用ID
 * @method void setApplicationId(string $ApplicationId) 设置应用ID
 * @method string getGroupId() 获取部署组ID
 * @method void setGroupId(string $GroupId) 设置部署组ID
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 */
class DescribeInovcationIndicatorsRequest extends AbstractModel
{
    /**
     * @var string 维度
     */
    public $Dimension;

    /**
     * @var string 开始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var string 命名空间ID
     */
    public $NamespaceId;

    /**
     * @var string 微服务ID
     */
    public $ServiceId;

    /**
     * @var string 调用方服务名
     */
    public $CallerServiceName;

    /**
     * @var string 被调方服务名
     */
    public $CalleeServiceName;

    /**
     * @var string 调用方接口名
     */
    public $CallerInterfaceName;

    /**
     * @var string 被调方接口名
     */
    public $CalleeInterfaceName;

    /**
     * @var string 应用ID
     */
    public $ApplicationId;

    /**
     * @var string 部署组ID
     */
    public $GroupId;

    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @param string $Dimension 维度
     * @param string $StartTime 开始时间
     * @param string $EndTime 结束时间
     * @param string $NamespaceId 命名空间ID
     * @param string $ServiceId 微服务ID
     * @param string $CallerServiceName 调用方服务名
     * @param string $CalleeServiceName 被调方服务名
     * @param string $CallerInterfaceName 调用方接口名
     * @param string $CalleeInterfaceName 被调方接口名
     * @param string $ApplicationId 应用ID
     * @param string $GroupId 部署组ID
     * @param string $InstanceId 实例ID
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
        if (array_key_exists("Dimension",$param) and $param["Dimension"] !== null) {
            $this->Dimension = $param["Dimension"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("CallerServiceName",$param) and $param["CallerServiceName"] !== null) {
            $this->CallerServiceName = $param["CallerServiceName"];
        }

        if (array_key_exists("CalleeServiceName",$param) and $param["CalleeServiceName"] !== null) {
            $this->CalleeServiceName = $param["CalleeServiceName"];
        }

        if (array_key_exists("CallerInterfaceName",$param) and $param["CallerInterfaceName"] !== null) {
            $this->CallerInterfaceName = $param["CallerInterfaceName"];
        }

        if (array_key_exists("CalleeInterfaceName",$param) and $param["CalleeInterfaceName"] !== null) {
            $this->CalleeInterfaceName = $param["CalleeInterfaceName"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
