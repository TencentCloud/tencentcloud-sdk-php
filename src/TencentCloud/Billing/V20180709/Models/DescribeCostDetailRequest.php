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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCostDetail请求参数结构体
 *
 * @method integer getLimit() 获取<p>数量，最大值为100</p>
 * @method void setLimit(integer $Limit) 设置<p>数量，最大值为100</p>
 * @method integer getOffset() 获取<p>偏移量</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量</p>
 * @method string getBeginTime() 获取<p>周期开始时间，查询粒度为天级别，需传入时分秒参数，格式为yyyy-mm-dd hh:ii:ss，Month和BeginTime&amp;EndTime必传一个，如果有该字段则Month字段无效。BeginTime和EndTime必须一起传，且为同一月份，暂不支持跨月拉取。可拉取的数据是开通消耗账单后，且距今 18 个月内的数据。</p>
 * @method void setBeginTime(string $BeginTime) 设置<p>周期开始时间，查询粒度为天级别，需传入时分秒参数，格式为yyyy-mm-dd hh:ii:ss，Month和BeginTime&amp;EndTime必传一个，如果有该字段则Month字段无效。BeginTime和EndTime必须一起传，且为同一月份，暂不支持跨月拉取。可拉取的数据是开通消耗账单后，且距今 18 个月内的数据。</p>
 * @method string getEndTime() 获取<p>周期结束时间，查询粒度为天级别，需传入时分秒参数，格式为yyyy-mm-dd hh:ii:ss，Month和BeginTime&amp;EndTime必传一个，如果有该字段则Month字段无效。BeginTime和EndTime必须一起传，且为同一月份，暂不支持跨月拉取。可拉取的数据是开通消耗账单后，且距今 18 个月内的数据。</p>
 * @method void setEndTime(string $EndTime) 设置<p>周期结束时间，查询粒度为天级别，需传入时分秒参数，格式为yyyy-mm-dd hh:ii:ss，Month和BeginTime&amp;EndTime必传一个，如果有该字段则Month字段无效。BeginTime和EndTime必须一起传，且为同一月份，暂不支持跨月拉取。可拉取的数据是开通消耗账单后，且距今 18 个月内的数据。</p>
 * @method integer getNeedRecordNum() 获取<p>是否需要访问列表的总记录数，用于前端分页<br>1-表示需要， 0-表示不需要</p>
 * @method void setNeedRecordNum(integer $NeedRecordNum) 设置<p>是否需要访问列表的总记录数，用于前端分页<br>1-表示需要， 0-表示不需要</p>
 * @method string getMonth() 获取<p>月份，格式为yyyy-mm，Month和BeginTime&amp;EndTime必传一个，如果有传BeginTime&amp;EndTime则Month字段无效。不能早于开通消耗账单的月份，最多可拉取18个月内的数据。</p>
 * @method void setMonth(string $Month) 设置<p>月份，格式为yyyy-mm，Month和BeginTime&amp;EndTime必传一个，如果有传BeginTime&amp;EndTime则Month字段无效。不能早于开通消耗账单的月份，最多可拉取18个月内的数据。</p>
 * @method string getProductCode() 获取<p>查询指定产品信息</p>
 * @method void setProductCode(string $ProductCode) 设置<p>查询指定产品信息</p>
 * @method string getPayMode() 获取<p>付费模式 prePay/postPay</p>
 * @method void setPayMode(string $PayMode) 设置<p>付费模式 prePay/postPay</p>
 * @method string getResourceId() 获取<p>查询指定资源信息</p>
 * @method void setResourceId(string $ResourceId) 设置<p>查询指定资源信息</p>
 * @method string getBusinessCode() 获取<p>产品名称代码</p>
 * @method void setBusinessCode(string $BusinessCode) 设置<p>产品名称代码</p>
 * @method string getProjectId() 获取<p>项目ID:资源所属项目ID</p>
 * @method void setProjectId(string $ProjectId) 设置<p>项目ID:资源所属项目ID</p>
 * @method string getRegionId() 获取<p>地域ID</p>
 * @method void setRegionId(string $RegionId) 设置<p>地域ID</p>
 */
class DescribeCostDetailRequest extends AbstractModel
{
    /**
     * @var integer <p>数量，最大值为100</p>
     */
    public $Limit;

    /**
     * @var integer <p>偏移量</p>
     */
    public $Offset;

    /**
     * @var string <p>周期开始时间，查询粒度为天级别，需传入时分秒参数，格式为yyyy-mm-dd hh:ii:ss，Month和BeginTime&amp;EndTime必传一个，如果有该字段则Month字段无效。BeginTime和EndTime必须一起传，且为同一月份，暂不支持跨月拉取。可拉取的数据是开通消耗账单后，且距今 18 个月内的数据。</p>
     */
    public $BeginTime;

    /**
     * @var string <p>周期结束时间，查询粒度为天级别，需传入时分秒参数，格式为yyyy-mm-dd hh:ii:ss，Month和BeginTime&amp;EndTime必传一个，如果有该字段则Month字段无效。BeginTime和EndTime必须一起传，且为同一月份，暂不支持跨月拉取。可拉取的数据是开通消耗账单后，且距今 18 个月内的数据。</p>
     */
    public $EndTime;

    /**
     * @var integer <p>是否需要访问列表的总记录数，用于前端分页<br>1-表示需要， 0-表示不需要</p>
     */
    public $NeedRecordNum;

    /**
     * @var string <p>月份，格式为yyyy-mm，Month和BeginTime&amp;EndTime必传一个，如果有传BeginTime&amp;EndTime则Month字段无效。不能早于开通消耗账单的月份，最多可拉取18个月内的数据。</p>
     */
    public $Month;

    /**
     * @var string <p>查询指定产品信息</p>
     */
    public $ProductCode;

    /**
     * @var string <p>付费模式 prePay/postPay</p>
     */
    public $PayMode;

    /**
     * @var string <p>查询指定资源信息</p>
     */
    public $ResourceId;

    /**
     * @var string <p>产品名称代码</p>
     */
    public $BusinessCode;

    /**
     * @var string <p>项目ID:资源所属项目ID</p>
     */
    public $ProjectId;

    /**
     * @var string <p>地域ID</p>
     */
    public $RegionId;

    /**
     * @param integer $Limit <p>数量，最大值为100</p>
     * @param integer $Offset <p>偏移量</p>
     * @param string $BeginTime <p>周期开始时间，查询粒度为天级别，需传入时分秒参数，格式为yyyy-mm-dd hh:ii:ss，Month和BeginTime&amp;EndTime必传一个，如果有该字段则Month字段无效。BeginTime和EndTime必须一起传，且为同一月份，暂不支持跨月拉取。可拉取的数据是开通消耗账单后，且距今 18 个月内的数据。</p>
     * @param string $EndTime <p>周期结束时间，查询粒度为天级别，需传入时分秒参数，格式为yyyy-mm-dd hh:ii:ss，Month和BeginTime&amp;EndTime必传一个，如果有该字段则Month字段无效。BeginTime和EndTime必须一起传，且为同一月份，暂不支持跨月拉取。可拉取的数据是开通消耗账单后，且距今 18 个月内的数据。</p>
     * @param integer $NeedRecordNum <p>是否需要访问列表的总记录数，用于前端分页<br>1-表示需要， 0-表示不需要</p>
     * @param string $Month <p>月份，格式为yyyy-mm，Month和BeginTime&amp;EndTime必传一个，如果有传BeginTime&amp;EndTime则Month字段无效。不能早于开通消耗账单的月份，最多可拉取18个月内的数据。</p>
     * @param string $ProductCode <p>查询指定产品信息</p>
     * @param string $PayMode <p>付费模式 prePay/postPay</p>
     * @param string $ResourceId <p>查询指定资源信息</p>
     * @param string $BusinessCode <p>产品名称代码</p>
     * @param string $ProjectId <p>项目ID:资源所属项目ID</p>
     * @param string $RegionId <p>地域ID</p>
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("NeedRecordNum",$param) and $param["NeedRecordNum"] !== null) {
            $this->NeedRecordNum = $param["NeedRecordNum"];
        }

        if (array_key_exists("Month",$param) and $param["Month"] !== null) {
            $this->Month = $param["Month"];
        }

        if (array_key_exists("ProductCode",$param) and $param["ProductCode"] !== null) {
            $this->ProductCode = $param["ProductCode"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("BusinessCode",$param) and $param["BusinessCode"] !== null) {
            $this->BusinessCode = $param["BusinessCode"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }
    }
}
