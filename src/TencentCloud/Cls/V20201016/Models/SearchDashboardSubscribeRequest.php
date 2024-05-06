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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SearchDashboardSubscribe请求参数结构体
 *
 * @method string getDashboardId() 获取仪表盘id。
 * @method void setDashboardId(string $DashboardId) 设置仪表盘id。
 * @method DashboardSubscribeData getSubscribeData() 获取仪表盘订阅数据。
 * @method void setSubscribeData(DashboardSubscribeData $SubscribeData) 设置仪表盘订阅数据。
 * @method integer getId() 获取仪表盘订阅Id。
 * @method void setId(integer $Id) 设置仪表盘订阅Id。
 * @method string getName() 获取仪表盘订阅名称。
 * @method void setName(string $Name) 设置仪表盘订阅名称。
 */
class SearchDashboardSubscribeRequest extends AbstractModel
{
    /**
     * @var string 仪表盘id。
     */
    public $DashboardId;

    /**
     * @var DashboardSubscribeData 仪表盘订阅数据。
     */
    public $SubscribeData;

    /**
     * @var integer 仪表盘订阅Id。
     */
    public $Id;

    /**
     * @var string 仪表盘订阅名称。
     */
    public $Name;

    /**
     * @param string $DashboardId 仪表盘id。
     * @param DashboardSubscribeData $SubscribeData 仪表盘订阅数据。
     * @param integer $Id 仪表盘订阅Id。
     * @param string $Name 仪表盘订阅名称。
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
        if (array_key_exists("DashboardId",$param) and $param["DashboardId"] !== null) {
            $this->DashboardId = $param["DashboardId"];
        }

        if (array_key_exists("SubscribeData",$param) and $param["SubscribeData"] !== null) {
            $this->SubscribeData = new DashboardSubscribeData();
            $this->SubscribeData->deserialize($param["SubscribeData"]);
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
