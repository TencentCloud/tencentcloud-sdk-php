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
 * ListReleaseConfigPreview请求参数结构体
 *
 * @method string getBotBizId() 获取应用ID（获取方法参看如何获取   [BotBizId](https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa)）
 * @method void setBotBizId(string $BotBizId) 设置应用ID（获取方法参看如何获取   [BotBizId](https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa)）
 * @method integer getPageNumber() 获取页码（必须大于0）
 * @method void setPageNumber(integer $PageNumber) 设置页码（必须大于0）
 * @method integer getPageSize() 获取每页数量（取值范围为1-200）
 * @method void setPageSize(integer $PageSize) 设置每页数量（取值范围为1-200）
 * @method string getQuery() 获取查询内容关键字，用于模糊查询，若未提供该参数，默认为查询全部。
 * @method void setQuery(string $Query) 设置查询内容关键字，用于模糊查询，若未提供该参数，默认为查询全部。
 * @method string getReleaseBizId() 获取发布单ID（可以通过[ListRelease](https://cloud.tencent.com/document/product/1759/105077)获得）
 * @method void setReleaseBizId(string $ReleaseBizId) 设置发布单ID（可以通过[ListRelease](https://cloud.tencent.com/document/product/1759/105077)获得）
 * @method array getActions() 获取状态(1新增2更新3删除)
 * @method void setActions(array $Actions) 设置状态(1新增2更新3删除)
 * @method string getStartTime() 获取开始时间。Unix 时间戳，单位是秒，默认为空。
 * @method void setStartTime(string $StartTime) 设置开始时间。Unix 时间戳，单位是秒，默认为空。
 * @method string getEndTime() 获取结束时间。Unix 时间戳，单位是秒，默认为空。
 * @method void setEndTime(string $EndTime) 设置结束时间。Unix 时间戳，单位是秒，默认为空。
 * @method array getReleaseStatus() 获取发布状态(2 待发布 3 发布中 4 已发布 5 发布失败)，默认为空
 * @method void setReleaseStatus(array $ReleaseStatus) 设置发布状态(2 待发布 3 发布中 4 已发布 5 发布失败)，默认为空
 */
class ListReleaseConfigPreviewRequest extends AbstractModel
{
    /**
     * @var string 应用ID（获取方法参看如何获取   [BotBizId](https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa)）
     */
    public $BotBizId;

    /**
     * @var integer 页码（必须大于0）
     */
    public $PageNumber;

    /**
     * @var integer 每页数量（取值范围为1-200）
     */
    public $PageSize;

    /**
     * @var string 查询内容关键字，用于模糊查询，若未提供该参数，默认为查询全部。
     */
    public $Query;

    /**
     * @var string 发布单ID（可以通过[ListRelease](https://cloud.tencent.com/document/product/1759/105077)获得）
     */
    public $ReleaseBizId;

    /**
     * @var array 状态(1新增2更新3删除)
     */
    public $Actions;

    /**
     * @var string 开始时间。Unix 时间戳，单位是秒，默认为空。
     */
    public $StartTime;

    /**
     * @var string 结束时间。Unix 时间戳，单位是秒，默认为空。
     */
    public $EndTime;

    /**
     * @var array 发布状态(2 待发布 3 发布中 4 已发布 5 发布失败)，默认为空
     */
    public $ReleaseStatus;

    /**
     * @param string $BotBizId 应用ID（获取方法参看如何获取   [BotBizId](https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa)）
     * @param integer $PageNumber 页码（必须大于0）
     * @param integer $PageSize 每页数量（取值范围为1-200）
     * @param string $Query 查询内容关键字，用于模糊查询，若未提供该参数，默认为查询全部。
     * @param string $ReleaseBizId 发布单ID（可以通过[ListRelease](https://cloud.tencent.com/document/product/1759/105077)获得）
     * @param array $Actions 状态(1新增2更新3删除)
     * @param string $StartTime 开始时间。Unix 时间戳，单位是秒，默认为空。
     * @param string $EndTime 结束时间。Unix 时间戳，单位是秒，默认为空。
     * @param array $ReleaseStatus 发布状态(2 待发布 3 发布中 4 已发布 5 发布失败)，默认为空
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

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("ReleaseBizId",$param) and $param["ReleaseBizId"] !== null) {
            $this->ReleaseBizId = $param["ReleaseBizId"];
        }

        if (array_key_exists("Actions",$param) and $param["Actions"] !== null) {
            $this->Actions = $param["Actions"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ReleaseStatus",$param) and $param["ReleaseStatus"] !== null) {
            $this->ReleaseStatus = $param["ReleaseStatus"];
        }
    }
}
