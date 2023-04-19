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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeXEvents请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getEventType() 获取事件类型，slow-慢SQL事件，blocked-阻塞事件，deadlock-死锁事件
 * @method void setEventType(string $EventType) 设置事件类型，slow-慢SQL事件，blocked-阻塞事件，deadlock-死锁事件
 * @method string getStartTime() 获取扩展文件生成开始时间
 * @method void setStartTime(string $StartTime) 设置扩展文件生成开始时间
 * @method string getEndTime() 获取扩展文件生成结束时间
 * @method void setEndTime(string $EndTime) 设置扩展文件生成结束时间
 * @method integer getOffset() 获取分页返回，页编号，默认值为第0页
 * @method void setOffset(integer $Offset) 设置分页返回，页编号，默认值为第0页
 * @method integer getLimit() 获取分页返回，每页返回的数目，取值为1~100，默认值为20
 * @method void setLimit(integer $Limit) 设置分页返回，每页返回的数目，取值为1~100，默认值为20
 */
class DescribeXEventsRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 事件类型，slow-慢SQL事件，blocked-阻塞事件，deadlock-死锁事件
     */
    public $EventType;

    /**
     * @var string 扩展文件生成开始时间
     */
    public $StartTime;

    /**
     * @var string 扩展文件生成结束时间
     */
    public $EndTime;

    /**
     * @var integer 分页返回，页编号，默认值为第0页
     */
    public $Offset;

    /**
     * @var integer 分页返回，每页返回的数目，取值为1~100，默认值为20
     */
    public $Limit;

    /**
     * @param string $InstanceId 实例ID
     * @param string $EventType 事件类型，slow-慢SQL事件，blocked-阻塞事件，deadlock-死锁事件
     * @param string $StartTime 扩展文件生成开始时间
     * @param string $EndTime 扩展文件生成结束时间
     * @param integer $Offset 分页返回，页编号，默认值为第0页
     * @param integer $Limit 分页返回，每页返回的数目，取值为1~100，默认值为20
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

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
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
