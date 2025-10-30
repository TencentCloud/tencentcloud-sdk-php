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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListTaskInstanceExecutions请求参数结构体
 *
 * @method string getProjectId() 获取所属项目id
 * @method void setProjectId(string $ProjectId) 设置所属项目id
 * @method string getInstanceKey() 获取实例唯一标识，可以通过ListInstances获取
 * @method void setInstanceKey(string $InstanceKey) 设置实例唯一标识，可以通过ListInstances获取
 * @method string getTimeZone() 获取**时区**timeZone, 传入的时间字符串的所在时区，默认UTC+8
 * @method void setTimeZone(string $TimeZone) 设置**时区**timeZone, 传入的时间字符串的所在时区，默认UTC+8
 * @method integer getPageSize() 获取每页大小，默认10, 最大200
 * @method void setPageSize(integer $PageSize) 设置每页大小，默认10, 最大200
 * @method integer getPageNumber() 获取分页页码，默认1
 * @method void setPageNumber(integer $PageNumber) 设置分页页码，默认1
 */
class ListTaskInstanceExecutionsRequest extends AbstractModel
{
    /**
     * @var string 所属项目id
     */
    public $ProjectId;

    /**
     * @var string 实例唯一标识，可以通过ListInstances获取
     */
    public $InstanceKey;

    /**
     * @var string **时区**timeZone, 传入的时间字符串的所在时区，默认UTC+8
     */
    public $TimeZone;

    /**
     * @var integer 每页大小，默认10, 最大200
     */
    public $PageSize;

    /**
     * @var integer 分页页码，默认1
     */
    public $PageNumber;

    /**
     * @param string $ProjectId 所属项目id
     * @param string $InstanceKey 实例唯一标识，可以通过ListInstances获取
     * @param string $TimeZone **时区**timeZone, 传入的时间字符串的所在时区，默认UTC+8
     * @param integer $PageSize 每页大小，默认10, 最大200
     * @param integer $PageNumber 分页页码，默认1
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("InstanceKey",$param) and $param["InstanceKey"] !== null) {
            $this->InstanceKey = $param["InstanceKey"];
        }

        if (array_key_exists("TimeZone",$param) and $param["TimeZone"] !== null) {
            $this->TimeZone = $param["TimeZone"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }
    }
}
