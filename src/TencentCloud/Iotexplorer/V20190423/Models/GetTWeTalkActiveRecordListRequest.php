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
 * GetTWeTalkActiveRecordList请求参数结构体
 *
 * @method integer getStartTime() 获取最早的时间。
 * @method void setStartTime(integer $StartTime) 设置最早的时间。
 * @method integer getEndTime() 获取查询的最晚时间。
跟StartTime形成时间段，用于查询时间段中的记录。
 * @method void setEndTime(integer $EndTime) 设置查询的最晚时间。
跟StartTime形成时间段，用于查询时间段中的记录。
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method integer getLimit() 获取分页的大小。
默认为10，最大不超过500。
 * @method void setLimit(integer $Limit) 设置分页的大小。
默认为10，最大不超过500。
 * @method string getProductId() 获取产品ID
 * @method void setProductId(string $ProductId) 设置产品ID
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 * @method array getServiceType() 获取TWeTalk类型：1-基础版；2-高级版；3-多模态；
 * @method void setServiceType(array $ServiceType) 设置TWeTalk类型：1-基础版；2-高级版；3-多模态；
 */
class GetTWeTalkActiveRecordListRequest extends AbstractModel
{
    /**
     * @var integer 最早的时间。
     */
    public $StartTime;

    /**
     * @var integer 查询的最晚时间。
跟StartTime形成时间段，用于查询时间段中的记录。
     */
    public $EndTime;

    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var integer 分页的大小。
默认为10，最大不超过500。
     */
    public $Limit;

    /**
     * @var string 产品ID
     */
    public $ProductId;

    /**
     * @var string 设备名称
     */
    public $DeviceName;

    /**
     * @var array TWeTalk类型：1-基础版；2-高级版；3-多模态；
     */
    public $ServiceType;

    /**
     * @param integer $StartTime 最早的时间。
     * @param integer $EndTime 查询的最晚时间。
跟StartTime形成时间段，用于查询时间段中的记录。
     * @param integer $Offset 偏移量，默认为0。
     * @param integer $Limit 分页的大小。
默认为10，最大不超过500。
     * @param string $ProductId 产品ID
     * @param string $DeviceName 设备名称
     * @param array $ServiceType TWeTalk类型：1-基础版；2-高级版；3-多模态；
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }
    }
}
