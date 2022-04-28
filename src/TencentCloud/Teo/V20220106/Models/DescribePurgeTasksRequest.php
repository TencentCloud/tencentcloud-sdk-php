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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePurgeTasks请求参数结构体
 *
 * @method string getJobId() 获取任务ID
 * @method void setJobId(string $JobId) 设置任务ID
 * @method string getType() 获取类型
 * @method void setType(string $Type) 设置类型
 * @method string getStartTime() 获取查询起始时间
 * @method void setStartTime(string $StartTime) 设置查询起始时间
 * @method string getEndTime() 获取查询结束时间
 * @method void setEndTime(string $EndTime) 设置查询结束时间
 * @method integer getOffset() 获取查询起始偏移量
 * @method void setOffset(integer $Offset) 设置查询起始偏移量
 * @method integer getLimit() 获取查询最大返回的结果条数
 * @method void setLimit(integer $Limit) 设置查询最大返回的结果条数
 * @method array getStatuses() 获取查询的状态
允许的值为：processing、success、failed、timeout、invalid
 * @method void setStatuses(array $Statuses) 设置查询的状态
允许的值为：processing、success、failed、timeout、invalid
 * @method string getZoneId() 获取zone id
 * @method void setZoneId(string $ZoneId) 设置zone id
 * @method array getDomains() 获取查询的域名列表
 * @method void setDomains(array $Domains) 设置查询的域名列表
 * @method string getTarget() 获取查询内容
 * @method void setTarget(string $Target) 设置查询内容
 */
class DescribePurgeTasksRequest extends AbstractModel
{
    /**
     * @var string 任务ID
     */
    public $JobId;

    /**
     * @var string 类型
     */
    public $Type;

    /**
     * @var string 查询起始时间
     */
    public $StartTime;

    /**
     * @var string 查询结束时间
     */
    public $EndTime;

    /**
     * @var integer 查询起始偏移量
     */
    public $Offset;

    /**
     * @var integer 查询最大返回的结果条数
     */
    public $Limit;

    /**
     * @var array 查询的状态
允许的值为：processing、success、failed、timeout、invalid
     */
    public $Statuses;

    /**
     * @var string zone id
     */
    public $ZoneId;

    /**
     * @var array 查询的域名列表
     */
    public $Domains;

    /**
     * @var string 查询内容
     */
    public $Target;

    /**
     * @param string $JobId 任务ID
     * @param string $Type 类型
     * @param string $StartTime 查询起始时间
     * @param string $EndTime 查询结束时间
     * @param integer $Offset 查询起始偏移量
     * @param integer $Limit 查询最大返回的结果条数
     * @param array $Statuses 查询的状态
允许的值为：processing、success、failed、timeout、invalid
     * @param string $ZoneId zone id
     * @param array $Domains 查询的域名列表
     * @param string $Target 查询内容
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
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

        if (array_key_exists("Statuses",$param) and $param["Statuses"] !== null) {
            $this->Statuses = $param["Statuses"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = $param["Target"];
        }
    }
}
