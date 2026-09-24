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
 * @method string getInstanceId() 获取<p>实例 ID。可通过 <a href="https://cloud.tencent.com/document/api/1130/57798">DescribeDiagDBInstances</a> 接口获取。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID。可通过 <a href="https://cloud.tencent.com/document/api/1130/57798">DescribeDiagDBInstances</a> 接口获取。</p>
 * @method string getStartTime() 获取<p>查询范围的开始时间，格式: &quot;yyyy-MM-dd&#39;T&#39;HH:mm:ssXXX&quot;。</p>
 * @method void setStartTime(string $StartTime) 设置<p>查询范围的开始时间，格式: &quot;yyyy-MM-dd&#39;T&#39;HH:mm:ssXXX&quot;。</p>
 * @method string getEndTime() 获取<p>查询范围的结束时间，格式: &quot;yyyy-MM-dd&#39;T&#39;HH:mm:ssXXX&quot;。</p>
 * @method void setEndTime(string $EndTime) 设置<p>查询范围的结束时间，格式: &quot;yyyy-MM-dd&#39;T&#39;HH:mm:ssXXX&quot;。</p>
 * @method string getProduct() 获取<p>服务产品类型，支持值：&quot;mysql&quot; - 云数据库 MySQL；&quot;cynosdb&quot; - 云数据库 TDSQL-C for MySQL，&quot;sqlserver&quot; - 云数据库 SQL Server，默认为&quot;mysql&quot;。</p>
 * @method void setProduct(string $Product) 设置<p>服务产品类型，支持值：&quot;mysql&quot; - 云数据库 MySQL；&quot;cynosdb&quot; - 云数据库 TDSQL-C for MySQL，&quot;sqlserver&quot; - 云数据库 SQL Server，默认为&quot;mysql&quot;。</p>
 * @method string getMd5() 获取<p>SQL模板的MD5值</p>
 * @method void setMd5(string $Md5) 设置<p>SQL模板的MD5值</p>
 * @method string getInstanceProxyId() 获取<p>仅Redis产品使用；实例Proxy ID。</p>
 * @method void setInstanceProxyId(string $InstanceProxyId) 设置<p>仅Redis产品使用；实例Proxy ID。</p>
 * @method string getCmd() 获取<p>仅Redis产品使用；命令。</p>
 * @method void setCmd(string $Cmd) 设置<p>仅Redis产品使用；命令。</p>
 */
class DescribeSlowLogUserHostStatsRequest extends AbstractModel
{
    /**
     * @var string <p>实例 ID。可通过 <a href="https://cloud.tencent.com/document/api/1130/57798">DescribeDiagDBInstances</a> 接口获取。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>查询范围的开始时间，格式: &quot;yyyy-MM-dd&#39;T&#39;HH:mm:ssXXX&quot;。</p>
     */
    public $StartTime;

    /**
     * @var string <p>查询范围的结束时间，格式: &quot;yyyy-MM-dd&#39;T&#39;HH:mm:ssXXX&quot;。</p>
     */
    public $EndTime;

    /**
     * @var string <p>服务产品类型，支持值：&quot;mysql&quot; - 云数据库 MySQL；&quot;cynosdb&quot; - 云数据库 TDSQL-C for MySQL，&quot;sqlserver&quot; - 云数据库 SQL Server，默认为&quot;mysql&quot;。</p>
     */
    public $Product;

    /**
     * @var string <p>SQL模板的MD5值</p>
     */
    public $Md5;

    /**
     * @var string <p>仅Redis产品使用；实例Proxy ID。</p>
     */
    public $InstanceProxyId;

    /**
     * @var string <p>仅Redis产品使用；命令。</p>
     */
    public $Cmd;

    /**
     * @param string $InstanceId <p>实例 ID。可通过 <a href="https://cloud.tencent.com/document/api/1130/57798">DescribeDiagDBInstances</a> 接口获取。</p>
     * @param string $StartTime <p>查询范围的开始时间，格式: &quot;yyyy-MM-dd&#39;T&#39;HH:mm:ssXXX&quot;。</p>
     * @param string $EndTime <p>查询范围的结束时间，格式: &quot;yyyy-MM-dd&#39;T&#39;HH:mm:ssXXX&quot;。</p>
     * @param string $Product <p>服务产品类型，支持值：&quot;mysql&quot; - 云数据库 MySQL；&quot;cynosdb&quot; - 云数据库 TDSQL-C for MySQL，&quot;sqlserver&quot; - 云数据库 SQL Server，默认为&quot;mysql&quot;。</p>
     * @param string $Md5 <p>SQL模板的MD5值</p>
     * @param string $InstanceProxyId <p>仅Redis产品使用；实例Proxy ID。</p>
     * @param string $Cmd <p>仅Redis产品使用；命令。</p>
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
