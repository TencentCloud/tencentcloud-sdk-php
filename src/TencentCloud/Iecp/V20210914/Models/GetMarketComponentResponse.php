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
 * GetMarketComponent返回参数结构体
 *
 * @method integer getID() 获取组件ID
 * @method void setID(integer $ID) 设置组件ID
 * @method string getAppName() 获取组件名称
 * @method void setAppName(string $AppName) 设置组件名称
 * @method string getAuthor() 获取发行组织
 * @method void setAuthor(string $Author) 设置发行组织
 * @method string getReleaseTime() 获取发布时间
 * @method void setReleaseTime(string $ReleaseTime) 设置发布时间
 * @method string getOutline() 获取组件简介
 * @method void setOutline(string $Outline) 设置组件简介
 * @method string getDetail() 获取详细介绍链接
 * @method void setDetail(string $Detail) 设置详细介绍链接
 * @method string getIcon() 获取图标连接
 * @method void setIcon(string $Icon) 设置图标连接
 * @method string getVersion() 获取组件版本
 * @method void setVersion(string $Version) 设置组件版本
 * @method string getWorkloadVisualConfig() 获取组件可视化配置
 * @method void setWorkloadVisualConfig(string $WorkloadVisualConfig) 设置组件可视化配置
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class GetMarketComponentResponse extends AbstractModel
{
    /**
     * @var integer 组件ID
     */
    public $ID;

    /**
     * @var string 组件名称
     */
    public $AppName;

    /**
     * @var string 发行组织
     */
    public $Author;

    /**
     * @var string 发布时间
     */
    public $ReleaseTime;

    /**
     * @var string 组件简介
     */
    public $Outline;

    /**
     * @var string 详细介绍链接
     */
    public $Detail;

    /**
     * @var string 图标连接
     */
    public $Icon;

    /**
     * @var string 组件版本
     */
    public $Version;

    /**
     * @var string 组件可视化配置
     */
    public $WorkloadVisualConfig;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $ID 组件ID
     * @param string $AppName 组件名称
     * @param string $Author 发行组织
     * @param string $ReleaseTime 发布时间
     * @param string $Outline 组件简介
     * @param string $Detail 详细介绍链接
     * @param string $Icon 图标连接
     * @param string $Version 组件版本
     * @param string $WorkloadVisualConfig 组件可视化配置
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("Author",$param) and $param["Author"] !== null) {
            $this->Author = $param["Author"];
        }

        if (array_key_exists("ReleaseTime",$param) and $param["ReleaseTime"] !== null) {
            $this->ReleaseTime = $param["ReleaseTime"];
        }

        if (array_key_exists("Outline",$param) and $param["Outline"] !== null) {
            $this->Outline = $param["Outline"];
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = $param["Detail"];
        }

        if (array_key_exists("Icon",$param) and $param["Icon"] !== null) {
            $this->Icon = $param["Icon"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("WorkloadVisualConfig",$param) and $param["WorkloadVisualConfig"] !== null) {
            $this->WorkloadVisualConfig = $param["WorkloadVisualConfig"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
