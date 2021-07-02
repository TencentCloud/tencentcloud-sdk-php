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
namespace TencentCloud\Dtf\V20200506\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTransactions请求参数结构体
 *
 * @method string getGroupId() 获取事务分组ID
 * @method void setGroupId(string $GroupId) 设置事务分组ID
 * @method integer getTransactionBeginFrom() 获取事务开始时间查询起始时间戳，UTC，精确到毫秒
 * @method void setTransactionBeginFrom(integer $TransactionBeginFrom) 设置事务开始时间查询起始时间戳，UTC，精确到毫秒
 * @method integer getTransactionBeginTo() 获取事务开始时间查询截止时间戳，UTC，精确到毫秒
 * @method void setTransactionBeginTo(integer $TransactionBeginTo) 设置事务开始时间查询截止时间戳，UTC，精确到毫秒
 * @method boolean getSearchError() 获取仅查询异常状态的事务，true：仅查询异常，false或不传入：查询所有
 * @method void setSearchError(boolean $SearchError) 设置仅查询异常状态的事务，true：仅查询异常，false或不传入：查询所有
 * @method integer getTransactionId() 获取主事务ID，不传入时查询全量，高优先级
 * @method void setTransactionId(integer $TransactionId) 设置主事务ID，不传入时查询全量，高优先级
 * @method array getTransactionIdList() 获取主事务ID列表，不传入时查询全量，低优先级
 * @method void setTransactionIdList(array $TransactionIdList) 设置主事务ID列表，不传入时查询全量，低优先级
 * @method integer getLimit() 获取每页数量
 * @method void setLimit(integer $Limit) 设置每页数量
 * @method integer getOffset() 获取起始偏移量
 * @method void setOffset(integer $Offset) 设置起始偏移量
 */
class DescribeTransactionsRequest extends AbstractModel
{
    /**
     * @var string 事务分组ID
     */
    public $GroupId;

    /**
     * @var integer 事务开始时间查询起始时间戳，UTC，精确到毫秒
     */
    public $TransactionBeginFrom;

    /**
     * @var integer 事务开始时间查询截止时间戳，UTC，精确到毫秒
     */
    public $TransactionBeginTo;

    /**
     * @var boolean 仅查询异常状态的事务，true：仅查询异常，false或不传入：查询所有
     */
    public $SearchError;

    /**
     * @var integer 主事务ID，不传入时查询全量，高优先级
     */
    public $TransactionId;

    /**
     * @var array 主事务ID列表，不传入时查询全量，低优先级
     */
    public $TransactionIdList;

    /**
     * @var integer 每页数量
     */
    public $Limit;

    /**
     * @var integer 起始偏移量
     */
    public $Offset;

    /**
     * @param string $GroupId 事务分组ID
     * @param integer $TransactionBeginFrom 事务开始时间查询起始时间戳，UTC，精确到毫秒
     * @param integer $TransactionBeginTo 事务开始时间查询截止时间戳，UTC，精确到毫秒
     * @param boolean $SearchError 仅查询异常状态的事务，true：仅查询异常，false或不传入：查询所有
     * @param integer $TransactionId 主事务ID，不传入时查询全量，高优先级
     * @param array $TransactionIdList 主事务ID列表，不传入时查询全量，低优先级
     * @param integer $Limit 每页数量
     * @param integer $Offset 起始偏移量
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("TransactionBeginFrom",$param) and $param["TransactionBeginFrom"] !== null) {
            $this->TransactionBeginFrom = $param["TransactionBeginFrom"];
        }

        if (array_key_exists("TransactionBeginTo",$param) and $param["TransactionBeginTo"] !== null) {
            $this->TransactionBeginTo = $param["TransactionBeginTo"];
        }

        if (array_key_exists("SearchError",$param) and $param["SearchError"] !== null) {
            $this->SearchError = $param["SearchError"];
        }

        if (array_key_exists("TransactionId",$param) and $param["TransactionId"] !== null) {
            $this->TransactionId = $param["TransactionId"];
        }

        if (array_key_exists("TransactionIdList",$param) and $param["TransactionIdList"] !== null) {
            $this->TransactionIdList = $param["TransactionIdList"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
