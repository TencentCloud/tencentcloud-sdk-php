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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RestoreMedia请求参数结构体
 *
 * @method array getFileIds() 获取媒体文件唯一标识列表。
 * @method void setFileIds(array $FileIds) 设置媒体文件唯一标识列表。
 * @method integer getRestoreDay() 获取解冻出的临时媒体文件的可访问持续时长，单位为“天”。
 * @method void setRestoreDay(integer $RestoreDay) 设置解冻出的临时媒体文件的可访问持续时长，单位为“天”。
 * @method string getRestoreTier() 获取解冻模式。当媒体文件当前的存储类型为归档存储时，有以下取值：
<li>极速模式：Expedited，解冻任务在5分钟后完成。</li>
<li>标准模式：Standard，解冻任务在5小时后完成 。</li>
<li>批量模式：Bulk，，解冻任务在12小时后完成。</li>
当媒体文件的存储类型为深度归档存储时，有以下取值：
<li>标准模式：Standard，解冻任务在24小时后完成。</li>
<li>批量模式：Bulk，解冻任务在48小时后完成。</li>
 * @method void setRestoreTier(string $RestoreTier) 设置解冻模式。当媒体文件当前的存储类型为归档存储时，有以下取值：
<li>极速模式：Expedited，解冻任务在5分钟后完成。</li>
<li>标准模式：Standard，解冻任务在5小时后完成 。</li>
<li>批量模式：Bulk，，解冻任务在12小时后完成。</li>
当媒体文件的存储类型为深度归档存储时，有以下取值：
<li>标准模式：Standard，解冻任务在24小时后完成。</li>
<li>批量模式：Bulk，解冻任务在48小时后完成。</li>
 * @method integer getSubAppId() 获取点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
 * @method void setSubAppId(integer $SubAppId) 设置点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
 */
class RestoreMediaRequest extends AbstractModel
{
    /**
     * @var array 媒体文件唯一标识列表。
     */
    public $FileIds;

    /**
     * @var integer 解冻出的临时媒体文件的可访问持续时长，单位为“天”。
     */
    public $RestoreDay;

    /**
     * @var string 解冻模式。当媒体文件当前的存储类型为归档存储时，有以下取值：
<li>极速模式：Expedited，解冻任务在5分钟后完成。</li>
<li>标准模式：Standard，解冻任务在5小时后完成 。</li>
<li>批量模式：Bulk，，解冻任务在12小时后完成。</li>
当媒体文件的存储类型为深度归档存储时，有以下取值：
<li>标准模式：Standard，解冻任务在24小时后完成。</li>
<li>批量模式：Bulk，解冻任务在48小时后完成。</li>
     */
    public $RestoreTier;

    /**
     * @var integer 点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
     */
    public $SubAppId;

    /**
     * @param array $FileIds 媒体文件唯一标识列表。
     * @param integer $RestoreDay 解冻出的临时媒体文件的可访问持续时长，单位为“天”。
     * @param string $RestoreTier 解冻模式。当媒体文件当前的存储类型为归档存储时，有以下取值：
<li>极速模式：Expedited，解冻任务在5分钟后完成。</li>
<li>标准模式：Standard，解冻任务在5小时后完成 。</li>
<li>批量模式：Bulk，，解冻任务在12小时后完成。</li>
当媒体文件的存储类型为深度归档存储时，有以下取值：
<li>标准模式：Standard，解冻任务在24小时后完成。</li>
<li>批量模式：Bulk，解冻任务在48小时后完成。</li>
     * @param integer $SubAppId 点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。
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
        if (array_key_exists("FileIds",$param) and $param["FileIds"] !== null) {
            $this->FileIds = $param["FileIds"];
        }

        if (array_key_exists("RestoreDay",$param) and $param["RestoreDay"] !== null) {
            $this->RestoreDay = $param["RestoreDay"];
        }

        if (array_key_exists("RestoreTier",$param) and $param["RestoreTier"] !== null) {
            $this->RestoreTier = $param["RestoreTier"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }
    }
}
