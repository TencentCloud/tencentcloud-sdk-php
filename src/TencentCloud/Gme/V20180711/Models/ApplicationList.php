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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 获取应用列表返回
 *
 * @method ServiceStatus getServiceConf() 获取服务开关状态
 * @method void setServiceConf(ServiceStatus $ServiceConf) 设置服务开关状态
 * @method integer getBizId() 获取应用ID(AppID)
 * @method void setBizId(integer $BizId) 设置应用ID(AppID)
 * @method string getAppName() 获取应用名称
 * @method void setAppName(string $AppName) 设置应用名称
 * @method integer getProjectId() 获取项目ID，默认为0
 * @method void setProjectId(integer $ProjectId) 设置项目ID，默认为0
 * @method integer getAppStatus() 获取应用状态，返回0表示正常，1表示关闭，2表示欠费停服，3表示欠费回收
 * @method void setAppStatus(integer $AppStatus) 设置应用状态，返回0表示正常，1表示关闭，2表示欠费停服，3表示欠费回收
 * @method integer getCreateTime() 获取创建时间，Unix时间戳格式
 * @method void setCreateTime(integer $CreateTime) 设置创建时间，Unix时间戳格式
 * @method integer getAppType() 获取应用类型，无需关注此数值
 * @method void setAppType(integer $AppType) 设置应用类型，无需关注此数值
 */
class ApplicationList extends AbstractModel
{
    /**
     * @var ServiceStatus 服务开关状态
     */
    public $ServiceConf;

    /**
     * @var integer 应用ID(AppID)
     */
    public $BizId;

    /**
     * @var string 应用名称
     */
    public $AppName;

    /**
     * @var integer 项目ID，默认为0
     */
    public $ProjectId;

    /**
     * @var integer 应用状态，返回0表示正常，1表示关闭，2表示欠费停服，3表示欠费回收
     */
    public $AppStatus;

    /**
     * @var integer 创建时间，Unix时间戳格式
     */
    public $CreateTime;

    /**
     * @var integer 应用类型，无需关注此数值
     */
    public $AppType;

    /**
     * @param ServiceStatus $ServiceConf 服务开关状态
     * @param integer $BizId 应用ID(AppID)
     * @param string $AppName 应用名称
     * @param integer $ProjectId 项目ID，默认为0
     * @param integer $AppStatus 应用状态，返回0表示正常，1表示关闭，2表示欠费停服，3表示欠费回收
     * @param integer $CreateTime 创建时间，Unix时间戳格式
     * @param integer $AppType 应用类型，无需关注此数值
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
        if (array_key_exists("ServiceConf",$param) and $param["ServiceConf"] !== null) {
            $this->ServiceConf = new ServiceStatus();
            $this->ServiceConf->deserialize($param["ServiceConf"]);
        }

        if (array_key_exists("BizId",$param) and $param["BizId"] !== null) {
            $this->BizId = $param["BizId"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("AppStatus",$param) and $param["AppStatus"] !== null) {
            $this->AppStatus = $param["AppStatus"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("AppType",$param) and $param["AppType"] !== null) {
            $this->AppType = $param["AppType"];
        }
    }
}
