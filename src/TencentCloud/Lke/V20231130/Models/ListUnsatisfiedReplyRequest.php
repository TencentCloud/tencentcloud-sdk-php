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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListUnsatisfiedReply请求参数结构体
 *
 * @method string getBotBizId() 获取应用ID，获取方法参看如何获取[BotBizId](https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa)
 * @method void setBotBizId(string $BotBizId) 设置应用ID，获取方法参看如何获取[BotBizId](https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa)
 * @method integer getPageNumber() 获取页码，取值范围：大于0
 * @method void setPageNumber(integer $PageNumber) 设置页码，取值范围：大于0
 * @method integer getPageSize() 获取分页数量，取值范围：大于0
 * @method void setPageSize(integer $PageSize) 设置分页数量，取值范围：大于0
 * @method string getLoginUin() 获取登录用户主账号(集成商模式必填)
 * @method void setLoginUin(string $LoginUin) 设置登录用户主账号(集成商模式必填)
 * @method string getLoginSubAccountUin() 获取登录用户子账号(集成商模式必填)
 * @method void setLoginSubAccountUin(string $LoginSubAccountUin) 设置登录用户子账号(集成商模式必填)
 * @method string getQuery() 获取用户请求(问题或答案)，按关键词检索，可匹配用户问题或答案
 * @method void setQuery(string $Query) 设置用户请求(问题或答案)，按关键词检索，可匹配用户问题或答案
 * @method array getReasons() 获取按错误类型检索
 * @method void setReasons(array $Reasons) 设置按错误类型检索
 * @method integer getStatus() 获取按操作状态检索  0-全部 1-待处理  2-已处理【包括答案纠错，拒答，忽略】，不填时默认值为0
 * @method void setStatus(integer $Status) 设置按操作状态检索  0-全部 1-待处理  2-已处理【包括答案纠错，拒答，忽略】，不填时默认值为0
 * @method array getHandlingStatuses() 获取处理状态 0-待处理 1-已拒答 2-已忽略 3-已添加为新问答 4-已添加为相似问
 * @method void setHandlingStatuses(array $HandlingStatuses) 设置处理状态 0-待处理 1-已拒答 2-已忽略 3-已添加为新问答 4-已添加为相似问
 */
class ListUnsatisfiedReplyRequest extends AbstractModel
{
    /**
     * @var string 应用ID，获取方法参看如何获取[BotBizId](https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa)
     */
    public $BotBizId;

    /**
     * @var integer 页码，取值范围：大于0
     */
    public $PageNumber;

    /**
     * @var integer 分页数量，取值范围：大于0
     */
    public $PageSize;

    /**
     * @var string 登录用户主账号(集成商模式必填)
     */
    public $LoginUin;

    /**
     * @var string 登录用户子账号(集成商模式必填)
     */
    public $LoginSubAccountUin;

    /**
     * @var string 用户请求(问题或答案)，按关键词检索，可匹配用户问题或答案
     */
    public $Query;

    /**
     * @var array 按错误类型检索
     */
    public $Reasons;

    /**
     * @var integer 按操作状态检索  0-全部 1-待处理  2-已处理【包括答案纠错，拒答，忽略】，不填时默认值为0
     */
    public $Status;

    /**
     * @var array 处理状态 0-待处理 1-已拒答 2-已忽略 3-已添加为新问答 4-已添加为相似问
     */
    public $HandlingStatuses;

    /**
     * @param string $BotBizId 应用ID，获取方法参看如何获取[BotBizId](https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa)
     * @param integer $PageNumber 页码，取值范围：大于0
     * @param integer $PageSize 分页数量，取值范围：大于0
     * @param string $LoginUin 登录用户主账号(集成商模式必填)
     * @param string $LoginSubAccountUin 登录用户子账号(集成商模式必填)
     * @param string $Query 用户请求(问题或答案)，按关键词检索，可匹配用户问题或答案
     * @param array $Reasons 按错误类型检索
     * @param integer $Status 按操作状态检索  0-全部 1-待处理  2-已处理【包括答案纠错，拒答，忽略】，不填时默认值为0
     * @param array $HandlingStatuses 处理状态 0-待处理 1-已拒答 2-已忽略 3-已添加为新问答 4-已添加为相似问
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
        if (array_key_exists("BotBizId",$param) and $param["BotBizId"] !== null) {
            $this->BotBizId = $param["BotBizId"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("LoginUin",$param) and $param["LoginUin"] !== null) {
            $this->LoginUin = $param["LoginUin"];
        }

        if (array_key_exists("LoginSubAccountUin",$param) and $param["LoginSubAccountUin"] !== null) {
            $this->LoginSubAccountUin = $param["LoginSubAccountUin"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("Reasons",$param) and $param["Reasons"] !== null) {
            $this->Reasons = $param["Reasons"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("HandlingStatuses",$param) and $param["HandlingStatuses"] !== null) {
            $this->HandlingStatuses = $param["HandlingStatuses"];
        }
    }
}
