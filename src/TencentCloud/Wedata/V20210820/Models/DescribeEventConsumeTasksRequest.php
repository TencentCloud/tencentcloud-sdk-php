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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEventConsumeTasks请求参数结构体
 *
 * @method string getEventCaseId() 获取事件实例ID
 * @method void setEventCaseId(string $EventCaseId) 设置事件实例ID
 * @method integer getPageNumber() 获取页码
 * @method void setPageNumber(integer $PageNumber) 设置页码
 * @method integer getPageSize() 获取每页数目
 * @method void setPageSize(integer $PageSize) 设置每页数目
 */
class DescribeEventConsumeTasksRequest extends AbstractModel
{
    /**
     * @var string 事件实例ID
     */
    public $EventCaseId;

    /**
     * @var integer 页码
     */
    public $PageNumber;

    /**
     * @var integer 每页数目
     */
    public $PageSize;

    /**
     * @param string $EventCaseId 事件实例ID
     * @param integer $PageNumber 页码
     * @param integer $PageSize 每页数目
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
        if (array_key_exists("EventCaseId",$param) and $param["EventCaseId"] !== null) {
            $this->EventCaseId = $param["EventCaseId"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
