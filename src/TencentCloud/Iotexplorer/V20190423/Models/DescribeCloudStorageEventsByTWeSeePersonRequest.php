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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCloudStorageEventsByTWeSeePerson请求参数结构体
 *
 * @method string getProductId() 获取<p>产品 ID</p>
 * @method void setProductId(string $ProductId) 设置<p>产品 ID</p>
 * @method string getDeviceName() 获取<p>设备名称</p>
 * @method void setDeviceName(string $DeviceName) 设置<p>设备名称</p>
 * @method string getPersonId() 获取<p>人员 ID</p>
 * @method void setPersonId(string $PersonId) 设置<p>人员 ID</p>
 * @method integer getLimit() 获取<p>分页拉取数量，取值范围为 1-100</p>
 * @method void setLimit(integer $Limit) 设置<p>分页拉取数量，取值范围为 1-100</p>
 * @method integer getOffset() 获取<p>分页拉取偏移</p>
 * @method void setOffset(integer $Offset) 设置<p>分页拉取偏移</p>
 * @method integer getStartTime() 获取<p>起始时间（Unix 时间戳）</p><p>单位：秒</p>
 * @method void setStartTime(integer $StartTime) 设置<p>起始时间（Unix 时间戳）</p><p>单位：秒</p>
 * @method integer getEndTime() 获取<p>结束时间（Unix 时间戳）</p><p>单位：秒</p>
 * @method void setEndTime(integer $EndTime) 设置<p>结束时间（Unix 时间戳）</p><p>单位：秒</p>
 * @method integer getChannelId() 获取<p>通道 ID，非 NVR 设备不填，NVR 设备必填</p>
 * @method void setChannelId(integer $ChannelId) 设置<p>通道 ID，非 NVR 设备不填，NVR 设备必填</p>
 */
class DescribeCloudStorageEventsByTWeSeePersonRequest extends AbstractModel
{
    /**
     * @var string <p>产品 ID</p>
     */
    public $ProductId;

    /**
     * @var string <p>设备名称</p>
     */
    public $DeviceName;

    /**
     * @var string <p>人员 ID</p>
     */
    public $PersonId;

    /**
     * @var integer <p>分页拉取数量，取值范围为 1-100</p>
     */
    public $Limit;

    /**
     * @var integer <p>分页拉取偏移</p>
     */
    public $Offset;

    /**
     * @var integer <p>起始时间（Unix 时间戳）</p><p>单位：秒</p>
     */
    public $StartTime;

    /**
     * @var integer <p>结束时间（Unix 时间戳）</p><p>单位：秒</p>
     */
    public $EndTime;

    /**
     * @var integer <p>通道 ID，非 NVR 设备不填，NVR 设备必填</p>
     */
    public $ChannelId;

    /**
     * @param string $ProductId <p>产品 ID</p>
     * @param string $DeviceName <p>设备名称</p>
     * @param string $PersonId <p>人员 ID</p>
     * @param integer $Limit <p>分页拉取数量，取值范围为 1-100</p>
     * @param integer $Offset <p>分页拉取偏移</p>
     * @param integer $StartTime <p>起始时间（Unix 时间戳）</p><p>单位：秒</p>
     * @param integer $EndTime <p>结束时间（Unix 时间戳）</p><p>单位：秒</p>
     * @param integer $ChannelId <p>通道 ID，非 NVR 设备不填，NVR 设备必填</p>
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("PersonId",$param) and $param["PersonId"] !== null) {
            $this->PersonId = $param["PersonId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }
    }
}
