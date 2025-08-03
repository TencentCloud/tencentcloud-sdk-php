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
 * SearchDashboardSubscribe请求参数结构体
 *
 * @method string getDashboardId() 获取仪表盘id。通过 [获取仪表盘](https://cloud.tencent.com/document/api/614/95636)接口获取DashboardId。
 * @method void setDashboardId(string $DashboardId) 设置仪表盘id。通过 [获取仪表盘](https://cloud.tencent.com/document/api/614/95636)接口获取DashboardId。
 * @method DashboardSubscribeData getSubscribeData() 获取仪表盘订阅数据。
 * @method void setSubscribeData(DashboardSubscribeData $SubscribeData) 设置仪表盘订阅数据。
 * @method integer getId() 获取仪表盘订阅Id。通过 [获取仪表盘订阅列表](https://cloud.tencent.com/document/api/614/105779)接口获取Id。
 * @method void setId(integer $Id) 设置仪表盘订阅Id。通过 [获取仪表盘订阅列表](https://cloud.tencent.com/document/api/614/105779)接口获取Id。
 * @method string getName() 获取仪表盘订阅名称。通过 [获取仪表盘订阅列表](https://cloud.tencent.com/document/api/614/105779)接口获取Name。
 * @method void setName(string $Name) 设置仪表盘订阅名称。通过 [获取仪表盘订阅列表](https://cloud.tencent.com/document/api/614/105779)接口获取Name。
 */
class SearchDashboardSubscribeRequest extends AbstractModel
{
    /**
     * @var string 仪表盘id。通过 [获取仪表盘](https://cloud.tencent.com/document/api/614/95636)接口获取DashboardId。
     */
    public $DashboardId;

    /**
     * @var DashboardSubscribeData 仪表盘订阅数据。
     */
    public $SubscribeData;

    /**
     * @var integer 仪表盘订阅Id。通过 [获取仪表盘订阅列表](https://cloud.tencent.com/document/api/614/105779)接口获取Id。
     */
    public $Id;

    /**
     * @var string 仪表盘订阅名称。通过 [获取仪表盘订阅列表](https://cloud.tencent.com/document/api/614/105779)接口获取Name。
     */
    public $Name;

    /**
     * @param string $DashboardId 仪表盘id。通过 [获取仪表盘](https://cloud.tencent.com/document/api/614/95636)接口获取DashboardId。
     * @param DashboardSubscribeData $SubscribeData 仪表盘订阅数据。
     * @param integer $Id 仪表盘订阅Id。通过 [获取仪表盘订阅列表](https://cloud.tencent.com/document/api/614/105779)接口获取Id。
     * @param string $Name 仪表盘订阅名称。通过 [获取仪表盘订阅列表](https://cloud.tencent.com/document/api/614/105779)接口获取Name。
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
