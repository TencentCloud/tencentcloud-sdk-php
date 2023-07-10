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
namespace TencentCloud\Trp\V20210515\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRawScanLogs请求参数结构体
 *
 * @method integer getCorpId() 获取企业ID, 默认为当前企业
如果有渠道权限，可以传 0 会查渠道下所有的企业
 * @method void setCorpId(integer $CorpId) 设置企业ID, 默认为当前企业
如果有渠道权限，可以传 0 会查渠道下所有的企业
 * @method integer getPageSize() 获取分页数量，默认为 20，最大为 1000
 * @method void setPageSize(integer $PageSize) 设置分页数量，默认为 20，最大为 1000
 * @method integer getPageNumber() 获取当前分页，默认为 1
 * @method void setPageNumber(integer $PageNumber) 设置当前分页，默认为 1
 * @method integer getAfterLogId() 获取从哪个日志后查询
即: LogId > $AfterLogId
 * @method void setAfterLogId(integer $AfterLogId) 设置从哪个日志后查询
即: LogId > $AfterLogId
 * @method string getStartTime() 获取开始时间 >= StartTime
 * @method void setStartTime(string $StartTime) 设置开始时间 >= StartTime
 * @method string getEndTime() 获取结束时间 < EndTime
 * @method void setEndTime(string $EndTime) 设置结束时间 < EndTime
 */
class DescribeRawScanLogsRequest extends AbstractModel
{
    /**
     * @var integer 企业ID, 默认为当前企业
如果有渠道权限，可以传 0 会查渠道下所有的企业
     */
    public $CorpId;

    /**
     * @var integer 分页数量，默认为 20，最大为 1000
     */
    public $PageSize;

    /**
     * @var integer 当前分页，默认为 1
     */
    public $PageNumber;

    /**
     * @var integer 从哪个日志后查询
即: LogId > $AfterLogId
     */
    public $AfterLogId;

    /**
     * @var string 开始时间 >= StartTime
     */
    public $StartTime;

    /**
     * @var string 结束时间 < EndTime
     */
    public $EndTime;

    /**
     * @param integer $CorpId 企业ID, 默认为当前企业
如果有渠道权限，可以传 0 会查渠道下所有的企业
     * @param integer $PageSize 分页数量，默认为 20，最大为 1000
     * @param integer $PageNumber 当前分页，默认为 1
     * @param integer $AfterLogId 从哪个日志后查询
即: LogId > $AfterLogId
     * @param string $StartTime 开始时间 >= StartTime
     * @param string $EndTime 结束时间 < EndTime
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
        if (array_key_exists("CorpId",$param) and $param["CorpId"] !== null) {
            $this->CorpId = $param["CorpId"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("AfterLogId",$param) and $param["AfterLogId"] !== null) {
            $this->AfterLogId = $param["AfterLogId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
