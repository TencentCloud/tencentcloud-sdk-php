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
namespace TencentCloud\Trp\V20210515\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTraceDataList请求参数结构体
 *
 * @method integer getCorpId() 获取企业ID
 * @method void setCorpId(integer $CorpId) 设置企业ID
 * @method string getBatchId() 获取批次ID
 * @method void setBatchId(string $BatchId) 设置批次ID
 * @method string getTaskId() 获取任务ID 用于外部溯源
 * @method void setTaskId(string $TaskId) 设置任务ID 用于外部溯源
 * @method integer getPageNumber() 获取页数
 * @method void setPageNumber(integer $PageNumber) 设置页数
 * @method string getCode() 获取二维码
 * @method void setCode(string $Code) 设置二维码
 * @method integer getPhase() 获取溯源阶段 0:商品 1:通用 2:内部溯源 3:外部溯源
 * @method void setPhase(integer $Phase) 设置溯源阶段 0:商品 1:通用 2:内部溯源 3:外部溯源
 * @method integer getPageSize() 获取数量
 * @method void setPageSize(integer $PageSize) 设置数量
 */
class DescribeTraceDataListRequest extends AbstractModel
{
    /**
     * @var integer 企业ID
     */
    public $CorpId;

    /**
     * @var string 批次ID
     */
    public $BatchId;

    /**
     * @var string 任务ID 用于外部溯源
     */
    public $TaskId;

    /**
     * @var integer 页数
     */
    public $PageNumber;

    /**
     * @var string 二维码
     */
    public $Code;

    /**
     * @var integer 溯源阶段 0:商品 1:通用 2:内部溯源 3:外部溯源
     */
    public $Phase;

    /**
     * @var integer 数量
     */
    public $PageSize;

    /**
     * @param integer $CorpId 企业ID
     * @param string $BatchId 批次ID
     * @param string $TaskId 任务ID 用于外部溯源
     * @param integer $PageNumber 页数
     * @param string $Code 二维码
     * @param integer $Phase 溯源阶段 0:商品 1:通用 2:内部溯源 3:外部溯源
     * @param integer $PageSize 数量
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
        if (array_key_exists("CorpId",$param) and $param["CorpId"] !== null) {
            $this->CorpId = $param["CorpId"];
        }

        if (array_key_exists("BatchId",$param) and $param["BatchId"] !== null) {
            $this->BatchId = $param["BatchId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Phase",$param) and $param["Phase"] !== null) {
            $this->Phase = $param["Phase"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
