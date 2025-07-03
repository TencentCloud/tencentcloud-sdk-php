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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBizTrend请求参数结构体
 *
 * @method string getStatistics() 获取统计方式，可取值max, min, avg, sum, 如统计纬度是流量速率或包量速率，仅可取值max
 * @method void setStatistics(string $Statistics) 设置统计方式，可取值max, min, avg, sum, 如统计纬度是流量速率或包量速率，仅可取值max
 * @method string getBusiness() 获取DDoS防护子产品代号（bgpip表示高防IP）
 * @method void setBusiness(string $Business) 设置DDoS防护子产品代号（bgpip表示高防IP）
 * @method integer getPeriod() 获取统计周期，可取值60，300，1800，3600，21600，86400，单位秒
 * @method void setPeriod(integer $Period) 设置统计周期，可取值60，300，1800，3600，21600，86400，单位秒
 * @method string getStartTime() 获取统计开始时间。 例：“2020-09-22 00:00:00”
 * @method void setStartTime(string $StartTime) 设置统计开始时间。 例：“2020-09-22 00:00:00”
 * @method string getEndTime() 获取统计结束时间。 例：“2020-09-22 00:00:00”
 * @method void setEndTime(string $EndTime) 设置统计结束时间。 例：“2020-09-22 00:00:00”
 * @method string getId() 获取资源实例ID
 * @method void setId(string $Id) 设置资源实例ID
 * @method string getMetricName() 获取统计纬度，可取值connum, new_conn, inactive_conn, intraffic, outtraffic, inpkg, outpkg, qps
 * @method void setMetricName(string $MetricName) 设置统计纬度，可取值connum, new_conn, inactive_conn, intraffic, outtraffic, inpkg, outpkg, qps
 * @method string getDomain() 获取统计纬度为qps时，可选特定域名查询
 * @method void setDomain(string $Domain) 设置统计纬度为qps时，可选特定域名查询
 * @method array getProtoInfo() 获取协议及端口列表，协议可取值TCP, UDP, HTTP, HTTPS，仅统计纬度为连接数时有效
 * @method void setProtoInfo(array $ProtoInfo) 设置协议及端口列表，协议可取值TCP, UDP, HTTP, HTTPS，仅统计纬度为连接数时有效
 * @method string getBusinessType() 获取业务类型：</br>
port：端口业务
domain：域名业务
 * @method void setBusinessType(string $BusinessType) 设置业务类型：</br>
port：端口业务
domain：域名业务
 */
class DescribeBizTrendRequest extends AbstractModel
{
    /**
     * @var string 统计方式，可取值max, min, avg, sum, 如统计纬度是流量速率或包量速率，仅可取值max
     */
    public $Statistics;

    /**
     * @var string DDoS防护子产品代号（bgpip表示高防IP）
     */
    public $Business;

    /**
     * @var integer 统计周期，可取值60，300，1800，3600，21600，86400，单位秒
     */
    public $Period;

    /**
     * @var string 统计开始时间。 例：“2020-09-22 00:00:00”
     */
    public $StartTime;

    /**
     * @var string 统计结束时间。 例：“2020-09-22 00:00:00”
     */
    public $EndTime;

    /**
     * @var string 资源实例ID
     */
    public $Id;

    /**
     * @var string 统计纬度，可取值connum, new_conn, inactive_conn, intraffic, outtraffic, inpkg, outpkg, qps
     */
    public $MetricName;

    /**
     * @var string 统计纬度为qps时，可选特定域名查询
     */
    public $Domain;

    /**
     * @var array 协议及端口列表，协议可取值TCP, UDP, HTTP, HTTPS，仅统计纬度为连接数时有效
     */
    public $ProtoInfo;

    /**
     * @var string 业务类型：</br>
port：端口业务
domain：域名业务
     */
    public $BusinessType;

    /**
     * @param string $Statistics 统计方式，可取值max, min, avg, sum, 如统计纬度是流量速率或包量速率，仅可取值max
     * @param string $Business DDoS防护子产品代号（bgpip表示高防IP）
     * @param integer $Period 统计周期，可取值60，300，1800，3600，21600，86400，单位秒
     * @param string $StartTime 统计开始时间。 例：“2020-09-22 00:00:00”
     * @param string $EndTime 统计结束时间。 例：“2020-09-22 00:00:00”
     * @param string $Id 资源实例ID
     * @param string $MetricName 统计纬度，可取值connum, new_conn, inactive_conn, intraffic, outtraffic, inpkg, outpkg, qps
     * @param string $Domain 统计纬度为qps时，可选特定域名查询
     * @param array $ProtoInfo 协议及端口列表，协议可取值TCP, UDP, HTTP, HTTPS，仅统计纬度为连接数时有效
     * @param string $BusinessType 业务类型：</br>
port：端口业务
domain：域名业务
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
        if (array_key_exists("Statistics",$param) and $param["Statistics"] !== null) {
            $this->Statistics = $param["Statistics"];
        }

        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("ProtoInfo",$param) and $param["ProtoInfo"] !== null) {
            $this->ProtoInfo = [];
            foreach ($param["ProtoInfo"] as $key => $value){
                $obj = new ProtocolPort();
                $obj->deserialize($value);
                array_push($this->ProtoInfo, $obj);
            }
        }

        if (array_key_exists("BusinessType",$param) and $param["BusinessType"] !== null) {
            $this->BusinessType = $param["BusinessType"];
        }
    }
}
