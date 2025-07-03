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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCpuExpandHistory请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID
 * @method void setInstanceId(string $InstanceId) 设置实例 ID
 * @method string getExpandStrategy() 获取扩容策略，值包括：all，manual，auto
 * @method void setExpandStrategy(string $ExpandStrategy) 设置扩容策略，值包括：all，manual，auto
 * @method string getStatus() 获取扩容状态，值包括：all，extend，reduce，extend_failed
 * @method void setStatus(string $Status) 设置扩容状态，值包括：all，extend，reduce，extend_failed
 * @method integer getStartTime() 获取查询的开始时间。只能查看30天内的扩容历史
 * @method void setStartTime(integer $StartTime) 设置查询的开始时间。只能查看30天内的扩容历史
 * @method integer getEndTime() 获取查询的结束时间。只能查看30天内的扩容历史
 * @method void setEndTime(integer $EndTime) 设置查询的结束时间。只能查看30天内的扩容历史
 * @method integer getOffset() 获取分页入参
 * @method void setOffset(integer $Offset) 设置分页入参
 * @method integer getLimit() 获取分页入参
 * @method void setLimit(integer $Limit) 设置分页入参
 */
class DescribeCpuExpandHistoryRequest extends AbstractModel
{
    /**
     * @var string 实例 ID
     */
    public $InstanceId;

    /**
     * @var string 扩容策略，值包括：all，manual，auto
     */
    public $ExpandStrategy;

    /**
     * @var string 扩容状态，值包括：all，extend，reduce，extend_failed
     */
    public $Status;

    /**
     * @var integer 查询的开始时间。只能查看30天内的扩容历史
     */
    public $StartTime;

    /**
     * @var integer 查询的结束时间。只能查看30天内的扩容历史
     */
    public $EndTime;

    /**
     * @var integer 分页入参
     */
    public $Offset;

    /**
     * @var integer 分页入参
     */
    public $Limit;

    /**
     * @param string $InstanceId 实例 ID
     * @param string $ExpandStrategy 扩容策略，值包括：all，manual，auto
     * @param string $Status 扩容状态，值包括：all，extend，reduce，extend_failed
     * @param integer $StartTime 查询的开始时间。只能查看30天内的扩容历史
     * @param integer $EndTime 查询的结束时间。只能查看30天内的扩容历史
     * @param integer $Offset 分页入参
     * @param integer $Limit 分页入参
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ExpandStrategy",$param) and $param["ExpandStrategy"] !== null) {
            $this->ExpandStrategy = $param["ExpandStrategy"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
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
    }
}
