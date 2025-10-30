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
namespace TencentCloud\Ctem\V20231128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 仿冒网站详情
 *
 * @method integer getId() 获取主键ID
 * @method void setId(integer $Id) 设置主键ID
 * @method DisplayToolCommon getDisplayToolCommon() 获取公共字段
 * @method void setDisplayToolCommon(DisplayToolCommon $DisplayToolCommon) 设置公共字段
 * @method string getWebsite() 获取仿冒网站
 * @method void setWebsite(string $Website) 设置仿冒网站
 * @method string getIPLocation() 获取ip位置
 * @method void setIPLocation(string $IPLocation) 设置ip位置
 * @method string getScreenshot() 获取截图
 * @method void setScreenshot(string $Screenshot) 设置截图
 * @method integer getHandlingStatus() 获取处置状态：0-待处理 1-处理中 2-已处理
 * @method void setHandlingStatus(integer $HandlingStatus) 设置处置状态：0-待处理 1-处理中 2-已处理
 * @method integer getShutdownStatus() 获取关停状态：0-(默认状态) 1-关停审核中 2-已拦截 3-已拒绝 4-下线流程中 5-已下线 6-下线失败
 * @method void setShutdownStatus(integer $ShutdownStatus) 设置关停状态：0-(默认状态) 1-关停审核中 2-已拦截 3-已拒绝 4-下线流程中 5-已下线 6-下线失败
 * @method string getShutdownTime() 获取关停时间
 * @method void setShutdownTime(string $ShutdownTime) 设置关停时间
 */
class DisplayFakeWebsite extends AbstractModel
{
    /**
     * @var integer 主键ID
     */
    public $Id;

    /**
     * @var DisplayToolCommon 公共字段
     */
    public $DisplayToolCommon;

    /**
     * @var string 仿冒网站
     */
    public $Website;

    /**
     * @var string ip位置
     */
    public $IPLocation;

    /**
     * @var string 截图
     */
    public $Screenshot;

    /**
     * @var integer 处置状态：0-待处理 1-处理中 2-已处理
     */
    public $HandlingStatus;

    /**
     * @var integer 关停状态：0-(默认状态) 1-关停审核中 2-已拦截 3-已拒绝 4-下线流程中 5-已下线 6-下线失败
     */
    public $ShutdownStatus;

    /**
     * @var string 关停时间
     */
    public $ShutdownTime;

    /**
     * @param integer $Id 主键ID
     * @param DisplayToolCommon $DisplayToolCommon 公共字段
     * @param string $Website 仿冒网站
     * @param string $IPLocation ip位置
     * @param string $Screenshot 截图
     * @param integer $HandlingStatus 处置状态：0-待处理 1-处理中 2-已处理
     * @param integer $ShutdownStatus 关停状态：0-(默认状态) 1-关停审核中 2-已拦截 3-已拒绝 4-下线流程中 5-已下线 6-下线失败
     * @param string $ShutdownTime 关停时间
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("DisplayToolCommon",$param) and $param["DisplayToolCommon"] !== null) {
            $this->DisplayToolCommon = new DisplayToolCommon();
            $this->DisplayToolCommon->deserialize($param["DisplayToolCommon"]);
        }

        if (array_key_exists("Website",$param) and $param["Website"] !== null) {
            $this->Website = $param["Website"];
        }

        if (array_key_exists("IPLocation",$param) and $param["IPLocation"] !== null) {
            $this->IPLocation = $param["IPLocation"];
        }

        if (array_key_exists("Screenshot",$param) and $param["Screenshot"] !== null) {
            $this->Screenshot = $param["Screenshot"];
        }

        if (array_key_exists("HandlingStatus",$param) and $param["HandlingStatus"] !== null) {
            $this->HandlingStatus = $param["HandlingStatus"];
        }

        if (array_key_exists("ShutdownStatus",$param) and $param["ShutdownStatus"] !== null) {
            $this->ShutdownStatus = $param["ShutdownStatus"];
        }

        if (array_key_exists("ShutdownTime",$param) and $param["ShutdownTime"] !== null) {
            $this->ShutdownTime = $param["ShutdownTime"];
        }
    }
}
