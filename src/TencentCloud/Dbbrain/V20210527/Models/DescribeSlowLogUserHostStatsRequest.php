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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSlowLogUserHostStats请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID。可通过 [DescribeDiagDBInstances](https://cloud.tencent.com/document/api/1130/57798) 接口获取。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID。可通过 [DescribeDiagDBInstances](https://cloud.tencent.com/document/api/1130/57798) 接口获取。
 * @method string getStartTime() 获取查询范围的开始时间，格式: "yyyy-MM-dd'T'HH:mm:ssXXX"。
 * @method void setStartTime(string $StartTime) 设置查询范围的开始时间，格式: "yyyy-MM-dd'T'HH:mm:ssXXX"。
 * @method string getEndTime() 获取查询范围的结束时间，格式: "yyyy-MM-dd'T'HH:mm:ssXXX"。
 * @method void setEndTime(string $EndTime) 设置查询范围的结束时间，格式: "yyyy-MM-dd'T'HH:mm:ssXXX"。
 * @method string getProduct() 获取服务产品类型，支持值："mysql" - 云数据库 MySQL；"cynosdb" - 云数据库 TDSQL-C for MySQL，默认为"mysql"。
 * @method void setProduct(string $Product) 设置服务产品类型，支持值："mysql" - 云数据库 MySQL；"cynosdb" - 云数据库 TDSQL-C for MySQL，默认为"mysql"。
 * @method string getMd5() 获取SQL模板的MD5值
 * @method void setMd5(string $Md5) 设置SQL模板的MD5值
 * @method string getInstanceProxyId() 获取仅Redis产品使用；实例Proxy ID。
 * @method void setInstanceProxyId(string $InstanceProxyId) 设置仅Redis产品使用；实例Proxy ID。
 * @method string getCmd() 获取仅Redis产品使用；命令。
 * @method void setCmd(string $Cmd) 设置仅Redis产品使用；命令。
 */
class DescribeSlowLogUserHostStatsRequest extends AbstractModel
{
    /**
     * @var string 实例 ID。可通过 [DescribeDiagDBInstances](https://cloud.tencent.com/document/api/1130/57798) 接口获取。
     */
    public $InstanceId;

    /**
     * @var string 查询范围的开始时间，格式: "yyyy-MM-dd'T'HH:mm:ssXXX"。
     */
    public $StartTime;

    /**
     * @var string 查询范围的结束时间，格式: "yyyy-MM-dd'T'HH:mm:ssXXX"。
     */
    public $EndTime;

    /**
     * @var string 服务产品类型，支持值："mysql" - 云数据库 MySQL；"cynosdb" - 云数据库 TDSQL-C for MySQL，默认为"mysql"。
     */
    public $Product;

    /**
     * @var string SQL模板的MD5值
     */
    public $Md5;

    /**
     * @var string 仅Redis产品使用；实例Proxy ID。
     */
    public $InstanceProxyId;

    /**
     * @var string 仅Redis产品使用；命令。
     */
    public $Cmd;

    /**
     * @param string $InstanceId 实例 ID。可通过 [DescribeDiagDBInstances](https://cloud.tencent.com/document/api/1130/57798) 接口获取。
     * @param string $StartTime 查询范围的开始时间，格式: "yyyy-MM-dd'T'HH:mm:ssXXX"。
     * @param string $EndTime 查询范围的结束时间，格式: "yyyy-MM-dd'T'HH:mm:ssXXX"。
     * @param string $Product 服务产品类型，支持值："mysql" - 云数据库 MySQL；"cynosdb" - 云数据库 TDSQL-C for MySQL，默认为"mysql"。
     * @param string $Md5 SQL模板的MD5值
     * @param string $InstanceProxyId 仅Redis产品使用；实例Proxy ID。
     * @param string $Cmd 仅Redis产品使用；命令。
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("Md5",$param) and $param["Md5"] !== null) {
            $this->Md5 = $param["Md5"];
        }

        if (array_key_exists("InstanceProxyId",$param) and $param["InstanceProxyId"] !== null) {
            $this->InstanceProxyId = $param["InstanceProxyId"];
        }

        if (array_key_exists("Cmd",$param) and $param["Cmd"] !== null) {
            $this->Cmd = $param["Cmd"];
        }
    }
}
