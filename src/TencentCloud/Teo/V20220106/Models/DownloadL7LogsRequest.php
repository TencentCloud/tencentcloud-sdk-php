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
 * DownloadL7Logs请求参数结构体
 *
 * @method string getStartTime() 获取起始时间(需严格按照RFC3339标准传参)
 * @method void setStartTime(string $StartTime) 设置起始时间(需严格按照RFC3339标准传参)
 * @method string getEndTime() 获取结束时间(需严格按照RFC3339标准传参)
 * @method void setEndTime(string $EndTime) 设置结束时间(需严格按照RFC3339标准传参)
 * @method integer getPageSize() 获取每页展示条数
 * @method void setPageSize(integer $PageSize) 设置每页展示条数
 * @method integer getPageNo() 获取当前页
 * @method void setPageNo(integer $PageNo) 设置当前页
 * @method array getZones() 获取站点名集合
 * @method void setZones(array $Zones) 设置站点名集合
 * @method array getDomains() 获取子域名集合
 * @method void setDomains(array $Domains) 设置子域名集合
 */
class DownloadL7LogsRequest extends AbstractModel
{
    /**
     * @var string 起始时间(需严格按照RFC3339标准传参)
     */
    public $StartTime;

    /**
     * @var string 结束时间(需严格按照RFC3339标准传参)
     */
    public $EndTime;

    /**
     * @var integer 每页展示条数
     */
    public $PageSize;

    /**
     * @var integer 当前页
     */
    public $PageNo;

    /**
     * @var array 站点名集合
     */
    public $Zones;

    /**
     * @var array 子域名集合
     */
    public $Domains;

    /**
     * @param string $StartTime 起始时间(需严格按照RFC3339标准传参)
     * @param string $EndTime 结束时间(需严格按照RFC3339标准传参)
     * @param integer $PageSize 每页展示条数
     * @param integer $PageNo 当前页
     * @param array $Zones 站点名集合
     * @param array $Domains 子域名集合
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

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNo",$param) and $param["PageNo"] !== null) {
            $this->PageNo = $param["PageNo"];
        }

        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = $param["Zones"];
        }

        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }
    }
}
