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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeFenceEventList请求参数结构体
 *
 * @method integer getStartTime() 获取围栏告警信息的查询起始时间，Unix时间，单位为毫秒
 * @method void setStartTime(integer $StartTime) 设置围栏告警信息的查询起始时间，Unix时间，单位为毫秒
 * @method integer getEndTime() 获取围栏告警信息的查询结束时间，Unix时间，单位为毫秒
 * @method void setEndTime(integer $EndTime) 设置围栏告警信息的查询结束时间，Unix时间，单位为毫秒
 * @method integer getFenceId() 获取围栏Id
 * @method void setFenceId(integer $FenceId) 设置围栏Id
 * @method integer getOffset() 获取翻页偏移量，0起始
 * @method void setOffset(integer $Offset) 设置翻页偏移量，0起始
 * @method integer getLimit() 获取最大返回结果数
 * @method void setLimit(integer $Limit) 设置最大返回结果数
 * @method string getProductId() 获取告警对应的产品Id
 * @method void setProductId(string $ProductId) 设置告警对应的产品Id
 * @method string getDeviceName() 获取告警对应的设备名称
 * @method void setDeviceName(string $DeviceName) 设置告警对应的设备名称
 */
class DescribeFenceEventListRequest extends AbstractModel
{
    /**
     * @var integer 围栏告警信息的查询起始时间，Unix时间，单位为毫秒
     */
    public $StartTime;

    /**
     * @var integer 围栏告警信息的查询结束时间，Unix时间，单位为毫秒
     */
    public $EndTime;

    /**
     * @var integer 围栏Id
     */
    public $FenceId;

    /**
     * @var integer 翻页偏移量，0起始
     */
    public $Offset;

    /**
     * @var integer 最大返回结果数
     */
    public $Limit;

    /**
     * @var string 告警对应的产品Id
     */
    public $ProductId;

    /**
     * @var string 告警对应的设备名称
     */
    public $DeviceName;

    /**
     * @param integer $StartTime 围栏告警信息的查询起始时间，Unix时间，单位为毫秒
     * @param integer $EndTime 围栏告警信息的查询结束时间，Unix时间，单位为毫秒
     * @param integer $FenceId 围栏Id
     * @param integer $Offset 翻页偏移量，0起始
     * @param integer $Limit 最大返回结果数
     * @param string $ProductId 告警对应的产品Id
     * @param string $DeviceName 告警对应的设备名称
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

        if (array_key_exists("FenceId",$param) and $param["FenceId"] !== null) {
            $this->FenceId = $param["FenceId"];
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
    }
}
