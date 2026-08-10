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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTelCdr请求参数结构体
 *
 * @method integer getStartTimeStamp() 获取<p>起始时间戳，Unix 秒级时间戳，最大支持近180天。</p>
 * @method void setStartTimeStamp(integer $StartTimeStamp) 设置<p>起始时间戳，Unix 秒级时间戳，最大支持近180天。</p>
 * @method integer getEndTimeStamp() 获取<p>结束时间戳，Unix 秒级时间戳，结束时间与开始时间的区间范围小于90天。</p>
 * @method void setEndTimeStamp(integer $EndTimeStamp) 设置<p>结束时间戳，Unix 秒级时间戳，结束时间与开始时间的区间范围小于90天。</p>
 * @method integer getSdkAppId() 获取<p>应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc</p>
 * @method void setSdkAppId(integer $SdkAppId) 设置<p>应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc</p>
 * @method integer getPageSize() 获取<p>分页尺寸（必填），上限 100</p>
 * @method void setPageSize(integer $PageSize) 设置<p>分页尺寸（必填），上限 100</p>
 * @method integer getPageNumber() 获取<p>分页页码（必填），从 0 开始</p>
 * @method void setPageNumber(integer $PageNumber) 设置<p>分页页码（必填），从 0 开始</p>
 * @method integer getInstanceId() 获取<p>实例 ID（废弃）</p>
 * @method void setInstanceId(integer $InstanceId) 设置<p>实例 ID（废弃）</p>
 * @method integer getLimit() 获取<p>返回数据条数，上限（废弃）</p>
 * @method void setLimit(integer $Limit) 设置<p>返回数据条数，上限（废弃）</p>
 * @method integer getOffset() 获取<p>偏移（废弃）</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移（废弃）</p>
 * @method array getPhones() 获取<p>按手机号筛选</p>
 * @method void setPhones(array $Phones) 设置<p>按手机号筛选</p>
 * @method array getSessionIds() 获取<p>按SessionId筛选</p>
 * @method void setSessionIds(array $SessionIds) 设置<p>按SessionId筛选</p>
 */
class DescribeTelCdrRequest extends AbstractModel
{
    /**
     * @var integer <p>起始时间戳，Unix 秒级时间戳，最大支持近180天。</p>
     */
    public $StartTimeStamp;

    /**
     * @var integer <p>结束时间戳，Unix 秒级时间戳，结束时间与开始时间的区间范围小于90天。</p>
     */
    public $EndTimeStamp;

    /**
     * @var integer <p>应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc</p>
     */
    public $SdkAppId;

    /**
     * @var integer <p>分页尺寸（必填），上限 100</p>
     */
    public $PageSize;

    /**
     * @var integer <p>分页页码（必填），从 0 开始</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>实例 ID（废弃）</p>
     * @deprecated
     */
    public $InstanceId;

    /**
     * @var integer <p>返回数据条数，上限（废弃）</p>
     * @deprecated
     */
    public $Limit;

    /**
     * @var integer <p>偏移（废弃）</p>
     * @deprecated
     */
    public $Offset;

    /**
     * @var array <p>按手机号筛选</p>
     */
    public $Phones;

    /**
     * @var array <p>按SessionId筛选</p>
     */
    public $SessionIds;

    /**
     * @param integer $StartTimeStamp <p>起始时间戳，Unix 秒级时间戳，最大支持近180天。</p>
     * @param integer $EndTimeStamp <p>结束时间戳，Unix 秒级时间戳，结束时间与开始时间的区间范围小于90天。</p>
     * @param integer $SdkAppId <p>应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc</p>
     * @param integer $PageSize <p>分页尺寸（必填），上限 100</p>
     * @param integer $PageNumber <p>分页页码（必填），从 0 开始</p>
     * @param integer $InstanceId <p>实例 ID（废弃）</p>
     * @param integer $Limit <p>返回数据条数，上限（废弃）</p>
     * @param integer $Offset <p>偏移（废弃）</p>
     * @param array $Phones <p>按手机号筛选</p>
     * @param array $SessionIds <p>按SessionId筛选</p>
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
        if (array_key_exists("StartTimeStamp",$param) and $param["StartTimeStamp"] !== null) {
            $this->StartTimeStamp = $param["StartTimeStamp"];
        }

        if (array_key_exists("EndTimeStamp",$param) and $param["EndTimeStamp"] !== null) {
            $this->EndTimeStamp = $param["EndTimeStamp"];
        }

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Phones",$param) and $param["Phones"] !== null) {
            $this->Phones = $param["Phones"];
        }

        if (array_key_exists("SessionIds",$param) and $param["SessionIds"] !== null) {
            $this->SessionIds = $param["SessionIds"];
        }
    }
}
