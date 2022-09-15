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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryFlexSettlementOrderList请求参数结构体
 *
 * @method string getPayeeId() 获取收款用户ID
 * @method void setPayeeId(string $PayeeId) 设置收款用户ID
 * @method string getStartTime() 获取开始时间，格式"yyyy-MM-dd hh:mm:ss"
 * @method void setStartTime(string $StartTime) 设置开始时间，格式"yyyy-MM-dd hh:mm:ss"
 * @method string getEndTime() 获取结束时间，格式"yyyy-MM-dd hh:mm:ss"
 * @method void setEndTime(string $EndTime) 设置结束时间，格式"yyyy-MM-dd hh:mm:ss"
 * @method Paging getPageNumber() 获取分页
 * @method void setPageNumber(Paging $PageNumber) 设置分页
 * @method string getOperationType() 获取操作类型。
ENABLE_SETTLE: 正常结算
DISABLE_SETTLE: 停用结算
UNFREEZE_SETTLE: 解冻结算
若需要支持多个操作类型，则以;分隔
 * @method void setOperationType(string $OperationType) 设置操作类型。
ENABLE_SETTLE: 正常结算
DISABLE_SETTLE: 停用结算
UNFREEZE_SETTLE: 解冻结算
若需要支持多个操作类型，则以;分隔
 * @method string getEnvironment() 获取环境类型
__release__:生产环境
__sandbox__:沙箱环境
__test__:测试环境
缺省默认为生产环境
 * @method void setEnvironment(string $Environment) 设置环境类型
__release__:生产环境
__sandbox__:沙箱环境
__test__:测试环境
缺省默认为生产环境
 */
class QueryFlexSettlementOrderListRequest extends AbstractModel
{
    /**
     * @var string 收款用户ID
     */
    public $PayeeId;

    /**
     * @var string 开始时间，格式"yyyy-MM-dd hh:mm:ss"
     */
    public $StartTime;

    /**
     * @var string 结束时间，格式"yyyy-MM-dd hh:mm:ss"
     */
    public $EndTime;

    /**
     * @var Paging 分页
     */
    public $PageNumber;

    /**
     * @var string 操作类型。
ENABLE_SETTLE: 正常结算
DISABLE_SETTLE: 停用结算
UNFREEZE_SETTLE: 解冻结算
若需要支持多个操作类型，则以;分隔
     */
    public $OperationType;

    /**
     * @var string 环境类型
__release__:生产环境
__sandbox__:沙箱环境
__test__:测试环境
缺省默认为生产环境
     */
    public $Environment;

    /**
     * @param string $PayeeId 收款用户ID
     * @param string $StartTime 开始时间，格式"yyyy-MM-dd hh:mm:ss"
     * @param string $EndTime 结束时间，格式"yyyy-MM-dd hh:mm:ss"
     * @param Paging $PageNumber 分页
     * @param string $OperationType 操作类型。
ENABLE_SETTLE: 正常结算
DISABLE_SETTLE: 停用结算
UNFREEZE_SETTLE: 解冻结算
若需要支持多个操作类型，则以;分隔
     * @param string $Environment 环境类型
__release__:生产环境
__sandbox__:沙箱环境
__test__:测试环境
缺省默认为生产环境
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
        if (array_key_exists("PayeeId",$param) and $param["PayeeId"] !== null) {
            $this->PayeeId = $param["PayeeId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = new Paging();
            $this->PageNumber->deserialize($param["PageNumber"]);
        }

        if (array_key_exists("OperationType",$param) and $param["OperationType"] !== null) {
            $this->OperationType = $param["OperationType"];
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = $param["Environment"];
        }
    }
}
