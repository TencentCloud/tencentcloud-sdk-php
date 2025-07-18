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
namespace TencentCloud\Hasim\V20210716\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeOrders请求参数结构体
 *
 * @method string getDealName() 获取子订单ID
 * @method void setDealName(string $DealName) 设置子订单ID
 * @method integer getAuditStatus() 获取审批状态 0全部 1通过 2驳回 3待审核
 * @method void setAuditStatus(integer $AuditStatus) 设置审批状态 0全部 1通过 2驳回 3待审核
 * @method integer getLimit() 获取翻页大小
 * @method void setLimit(integer $Limit) 设置翻页大小
 * @method integer getOffset() 获取翻页偏移
 * @method void setOffset(integer $Offset) 设置翻页偏移
 * @method string getBeginTime() 获取开始时间,例如2022-06-30 00:00:00
 * @method void setBeginTime(string $BeginTime) 设置开始时间,例如2022-06-30 00:00:00
 * @method string getEndTime() 获取结束时间,例如2022-06-30 00:00:00
 * @method void setEndTime(string $EndTime) 设置结束时间,例如2022-06-30 00:00:00
 */
class DescribeOrdersRequest extends AbstractModel
{
    /**
     * @var string 子订单ID
     */
    public $DealName;

    /**
     * @var integer 审批状态 0全部 1通过 2驳回 3待审核
     */
    public $AuditStatus;

    /**
     * @var integer 翻页大小
     */
    public $Limit;

    /**
     * @var integer 翻页偏移
     */
    public $Offset;

    /**
     * @var string 开始时间,例如2022-06-30 00:00:00
     */
    public $BeginTime;

    /**
     * @var string 结束时间,例如2022-06-30 00:00:00
     */
    public $EndTime;

    /**
     * @param string $DealName 子订单ID
     * @param integer $AuditStatus 审批状态 0全部 1通过 2驳回 3待审核
     * @param integer $Limit 翻页大小
     * @param integer $Offset 翻页偏移
     * @param string $BeginTime 开始时间,例如2022-06-30 00:00:00
     * @param string $EndTime 结束时间,例如2022-06-30 00:00:00
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
        if (array_key_exists("DealName",$param) and $param["DealName"] !== null) {
            $this->DealName = $param["DealName"];
        }

        if (array_key_exists("AuditStatus",$param) and $param["AuditStatus"] !== null) {
            $this->AuditStatus = $param["AuditStatus"];
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
    }
}
