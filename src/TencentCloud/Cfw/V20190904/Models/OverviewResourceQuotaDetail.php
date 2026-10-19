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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 概览资源与配额详情字段
 *
 * @method OverviewNorthSouthDetail getNorthSouthDetail() 获取<p>南北向带宽与流量详情数据。</p>
 * @method void setNorthSouthDetail(OverviewNorthSouthDetail $NorthSouthDetail) 设置<p>南北向带宽与流量详情数据。</p>
 * @method OverviewEastWestDetail getEastWestDetail() 获取<p>东西向带宽与流量详情数据。</p>
 * @method void setEastWestDetail(OverviewEastWestDetail $EastWestDetail) 设置<p>东西向带宽与流量详情数据。</p>
 * @method OverviewNDRDetail getNDRDetail() 获取<p>NDR 带宽与流量详情数据。</p>
 * @method void setNDRDetail(OverviewNDRDetail $NDRDetail) 设置<p>NDR 带宽与流量详情数据。</p>
 * @method OverviewQuotaDetail getQuotaDetail() 获取<p>账号下资源、实例、规则和扩容配额详情数据。</p>
 * @method void setQuotaDetail(OverviewQuotaDetail $QuotaDetail) 设置<p>账号下资源、实例、规则和扩容配额详情数据。</p>
 * @method OverviewLogStorageDetail getLogStorageDetail() 获取<p>日志存储使用量、保留天数和各类日志容量详情数据。</p>
 * @method void setLogStorageDetail(OverviewLogStorageDetail $LogStorageDetail) 设置<p>日志存储使用量、保留天数和各类日志容量详情数据。</p>
 */
class OverviewResourceQuotaDetail extends AbstractModel
{
    /**
     * @var OverviewNorthSouthDetail <p>南北向带宽与流量详情数据。</p>
     */
    public $NorthSouthDetail;

    /**
     * @var OverviewEastWestDetail <p>东西向带宽与流量详情数据。</p>
     */
    public $EastWestDetail;

    /**
     * @var OverviewNDRDetail <p>NDR 带宽与流量详情数据。</p>
     */
    public $NDRDetail;

    /**
     * @var OverviewQuotaDetail <p>账号下资源、实例、规则和扩容配额详情数据。</p>
     */
    public $QuotaDetail;

    /**
     * @var OverviewLogStorageDetail <p>日志存储使用量、保留天数和各类日志容量详情数据。</p>
     */
    public $LogStorageDetail;

    /**
     * @param OverviewNorthSouthDetail $NorthSouthDetail <p>南北向带宽与流量详情数据。</p>
     * @param OverviewEastWestDetail $EastWestDetail <p>东西向带宽与流量详情数据。</p>
     * @param OverviewNDRDetail $NDRDetail <p>NDR 带宽与流量详情数据。</p>
     * @param OverviewQuotaDetail $QuotaDetail <p>账号下资源、实例、规则和扩容配额详情数据。</p>
     * @param OverviewLogStorageDetail $LogStorageDetail <p>日志存储使用量、保留天数和各类日志容量详情数据。</p>
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
        if (array_key_exists("NorthSouthDetail",$param) and $param["NorthSouthDetail"] !== null) {
            $this->NorthSouthDetail = new OverviewNorthSouthDetail();
            $this->NorthSouthDetail->deserialize($param["NorthSouthDetail"]);
        }

        if (array_key_exists("EastWestDetail",$param) and $param["EastWestDetail"] !== null) {
            $this->EastWestDetail = new OverviewEastWestDetail();
            $this->EastWestDetail->deserialize($param["EastWestDetail"]);
        }

        if (array_key_exists("NDRDetail",$param) and $param["NDRDetail"] !== null) {
            $this->NDRDetail = new OverviewNDRDetail();
            $this->NDRDetail->deserialize($param["NDRDetail"]);
        }

        if (array_key_exists("QuotaDetail",$param) and $param["QuotaDetail"] !== null) {
            $this->QuotaDetail = new OverviewQuotaDetail();
            $this->QuotaDetail->deserialize($param["QuotaDetail"]);
        }

        if (array_key_exists("LogStorageDetail",$param) and $param["LogStorageDetail"] !== null) {
            $this->LogStorageDetail = new OverviewLogStorageDetail();
            $this->LogStorageDetail->deserialize($param["LogStorageDetail"]);
        }
    }
}
