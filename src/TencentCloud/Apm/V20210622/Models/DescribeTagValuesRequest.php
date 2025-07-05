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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTagValues请求参数结构体
 *
 * @method string getInstanceId() 获取业务系统 ID
 * @method void setInstanceId(string $InstanceId) 设置业务系统 ID
 * @method string getTagKey() 获取维度名
 * @method void setTagKey(string $TagKey) 设置维度名
 * @method integer getStartTime() 获取开始时间（单位为秒）
 * @method void setStartTime(integer $StartTime) 设置开始时间（单位为秒）
 * @method integer getEndTime() 获取结束时间（单位为秒）
 * @method void setEndTime(integer $EndTime) 设置结束时间（单位为秒）
 * @method array getFilters() 获取过滤条件
 * @method void setFilters(array $Filters) 设置过滤条件
 * @method array getOrFilters() 获取Or 过滤条件
 * @method void setOrFilters(array $OrFilters) 设置Or 过滤条件
 * @method string getType() 获取使用类型
 * @method void setType(string $Type) 设置使用类型
 */
class DescribeTagValuesRequest extends AbstractModel
{
    /**
     * @var string 业务系统 ID
     */
    public $InstanceId;

    /**
     * @var string 维度名
     */
    public $TagKey;

    /**
     * @var integer 开始时间（单位为秒）
     */
    public $StartTime;

    /**
     * @var integer 结束时间（单位为秒）
     */
    public $EndTime;

    /**
     * @var array 过滤条件
     */
    public $Filters;

    /**
     * @var array Or 过滤条件
     */
    public $OrFilters;

    /**
     * @var string 使用类型
     */
    public $Type;

    /**
     * @param string $InstanceId 业务系统 ID
     * @param string $TagKey 维度名
     * @param integer $StartTime 开始时间（单位为秒）
     * @param integer $EndTime 结束时间（单位为秒）
     * @param array $Filters 过滤条件
     * @param array $OrFilters Or 过滤条件
     * @param string $Type 使用类型
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

        if (array_key_exists("TagKey",$param) and $param["TagKey"] !== null) {
            $this->TagKey = $param["TagKey"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("OrFilters",$param) and $param["OrFilters"] !== null) {
            $this->OrFilters = [];
            foreach ($param["OrFilters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->OrFilters, $obj);
            }
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
