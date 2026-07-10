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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDataEngineEvents请求参数结构体
 *
 * @method string getDataEngineName() 获取<p>虚拟集群名称</p>
 * @method void setDataEngineName(string $DataEngineName) 设置<p>虚拟集群名称</p>
 * @method integer getLimit() 获取<p>返回数量，默认为10，最大为100</p>
 * @method void setLimit(integer $Limit) 设置<p>返回数量，默认为10，最大为100</p>
 * @method integer getOffset() 获取<p>偏移量，默认为0</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，默认为0</p>
 * @method string getSessionId() 获取<p>资源组id</p>
 * @method void setSessionId(string $SessionId) 设置<p>资源组id</p>
 * @method string getStartTime() 获取<p>查询开始时间，用于筛选资源组启停事件的时间范围，不传则不限制开始时间</p><p>参数格式：YYYY-mm-dd HH:MM:SS</p>
 * @method void setStartTime(string $StartTime) 设置<p>查询开始时间，用于筛选资源组启停事件的时间范围，不传则不限制开始时间</p><p>参数格式：YYYY-mm-dd HH:MM:SS</p>
 * @method string getEndTime() 获取<p>查询结束时间，用于筛选资源组启停事件的时间范围，不传则不限制结束时间。需大于等于 StartTime</p><p>参数格式：YYYY-mm-dd HH:MM:SS</p>
 * @method void setEndTime(string $EndTime) 设置<p>查询结束时间，用于筛选资源组启停事件的时间范围，不传则不限制结束时间。需大于等于 StartTime</p><p>参数格式：YYYY-mm-dd HH:MM:SS</p>
 */
class DescribeDataEngineEventsRequest extends AbstractModel
{
    /**
     * @var string <p>虚拟集群名称</p>
     */
    public $DataEngineName;

    /**
     * @var integer <p>返回数量，默认为10，最大为100</p>
     */
    public $Limit;

    /**
     * @var integer <p>偏移量，默认为0</p>
     */
    public $Offset;

    /**
     * @var string <p>资源组id</p>
     */
    public $SessionId;

    /**
     * @var string <p>查询开始时间，用于筛选资源组启停事件的时间范围，不传则不限制开始时间</p><p>参数格式：YYYY-mm-dd HH:MM:SS</p>
     */
    public $StartTime;

    /**
     * @var string <p>查询结束时间，用于筛选资源组启停事件的时间范围，不传则不限制结束时间。需大于等于 StartTime</p><p>参数格式：YYYY-mm-dd HH:MM:SS</p>
     */
    public $EndTime;

    /**
     * @param string $DataEngineName <p>虚拟集群名称</p>
     * @param integer $Limit <p>返回数量，默认为10，最大为100</p>
     * @param integer $Offset <p>偏移量，默认为0</p>
     * @param string $SessionId <p>资源组id</p>
     * @param string $StartTime <p>查询开始时间，用于筛选资源组启停事件的时间范围，不传则不限制开始时间</p><p>参数格式：YYYY-mm-dd HH:MM:SS</p>
     * @param string $EndTime <p>查询结束时间，用于筛选资源组启停事件的时间范围，不传则不限制结束时间。需大于等于 StartTime</p><p>参数格式：YYYY-mm-dd HH:MM:SS</p>
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
        if (array_key_exists("DataEngineName",$param) and $param["DataEngineName"] !== null) {
            $this->DataEngineName = $param["DataEngineName"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
