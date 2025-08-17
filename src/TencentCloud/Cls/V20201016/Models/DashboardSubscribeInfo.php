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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 仪表盘订阅信息
 *
 * @method integer getId() 获取仪表盘订阅id。
 * @method void setId(integer $Id) 设置仪表盘订阅id。
 * @method string getName() 获取仪表盘订阅名称。
 * @method void setName(string $Name) 设置仪表盘订阅名称。
 * @method string getDashboardId() 获取仪表盘id。
 * @method void setDashboardId(string $DashboardId) 设置仪表盘id。
 * @method string getCron() 获取仪表盘订阅时间。
 * @method void setCron(string $Cron) 设置仪表盘订阅时间。
 * @method DashboardSubscribeData getSubscribeData() 获取仪表盘订阅数据。
 * @method void setSubscribeData(DashboardSubscribeData $SubscribeData) 设置仪表盘订阅数据。
 * @method string getCreateTime() 获取仪表盘订阅记录创建时间。格式：`YYYY-MM-DD HH:MM:SS`
 * @method void setCreateTime(string $CreateTime) 设置仪表盘订阅记录创建时间。格式：`YYYY-MM-DD HH:MM:SS`
 * @method string getUpdateTime() 获取仪表盘订阅记录更新时间。格式：`YYYY-MM-DD HH:MM:SS`
 * @method void setUpdateTime(string $UpdateTime) 设置仪表盘订阅记录更新时间。格式：`YYYY-MM-DD HH:MM:SS`
 * @method string getLastTime() 获取仪表盘订阅记录最后一次发送成功时间。格式：`YYYY-MM-DD HH:MM:SS`
 * @method void setLastTime(string $LastTime) 设置仪表盘订阅记录最后一次发送成功时间。格式：`YYYY-MM-DD HH:MM:SS`
 * @method integer getUin() 获取腾讯云主账号Id。
 * @method void setUin(integer $Uin) 设置腾讯云主账号Id。
 * @method integer getSubUin() 获取腾讯云主账号下的子账号Id。
 * @method void setSubUin(integer $SubUin) 设置腾讯云主账号下的子账号Id。
 * @method string getLastStatus() 获取仪表盘订阅记录最后一次发送的状态。success：全部发送成功，fail：未发送， partialSuccess：部分发送成功。
 * @method void setLastStatus(string $LastStatus) 设置仪表盘订阅记录最后一次发送的状态。success：全部发送成功，fail：未发送， partialSuccess：部分发送成功。
 */
class DashboardSubscribeInfo extends AbstractModel
{
    /**
     * @var integer 仪表盘订阅id。
     */
    public $Id;

    /**
     * @var string 仪表盘订阅名称。
     */
    public $Name;

    /**
     * @var string 仪表盘id。
     */
    public $DashboardId;

    /**
     * @var string 仪表盘订阅时间。
     */
    public $Cron;

    /**
     * @var DashboardSubscribeData 仪表盘订阅数据。
     */
    public $SubscribeData;

    /**
     * @var string 仪表盘订阅记录创建时间。格式：`YYYY-MM-DD HH:MM:SS`
     */
    public $CreateTime;

    /**
     * @var string 仪表盘订阅记录更新时间。格式：`YYYY-MM-DD HH:MM:SS`
     */
    public $UpdateTime;

    /**
     * @var string 仪表盘订阅记录最后一次发送成功时间。格式：`YYYY-MM-DD HH:MM:SS`
     */
    public $LastTime;

    /**
     * @var integer 腾讯云主账号Id。
     */
    public $Uin;

    /**
     * @var integer 腾讯云主账号下的子账号Id。
     */
    public $SubUin;

    /**
     * @var string 仪表盘订阅记录最后一次发送的状态。success：全部发送成功，fail：未发送， partialSuccess：部分发送成功。
     */
    public $LastStatus;

    /**
     * @param integer $Id 仪表盘订阅id。
     * @param string $Name 仪表盘订阅名称。
     * @param string $DashboardId 仪表盘id。
     * @param string $Cron 仪表盘订阅时间。
     * @param DashboardSubscribeData $SubscribeData 仪表盘订阅数据。
     * @param string $CreateTime 仪表盘订阅记录创建时间。格式：`YYYY-MM-DD HH:MM:SS`
     * @param string $UpdateTime 仪表盘订阅记录更新时间。格式：`YYYY-MM-DD HH:MM:SS`
     * @param string $LastTime 仪表盘订阅记录最后一次发送成功时间。格式：`YYYY-MM-DD HH:MM:SS`
     * @param integer $Uin 腾讯云主账号Id。
     * @param integer $SubUin 腾讯云主账号下的子账号Id。
     * @param string $LastStatus 仪表盘订阅记录最后一次发送的状态。success：全部发送成功，fail：未发送， partialSuccess：部分发送成功。
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DashboardId",$param) and $param["DashboardId"] !== null) {
            $this->DashboardId = $param["DashboardId"];
        }

        if (array_key_exists("Cron",$param) and $param["Cron"] !== null) {
            $this->Cron = $param["Cron"];
        }

        if (array_key_exists("SubscribeData",$param) and $param["SubscribeData"] !== null) {
            $this->SubscribeData = new DashboardSubscribeData();
            $this->SubscribeData->deserialize($param["SubscribeData"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("LastTime",$param) and $param["LastTime"] !== null) {
            $this->LastTime = $param["LastTime"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("SubUin",$param) and $param["SubUin"] !== null) {
            $this->SubUin = $param["SubUin"];
        }

        if (array_key_exists("LastStatus",$param) and $param["LastStatus"] !== null) {
            $this->LastStatus = $param["LastStatus"];
        }
    }
}
