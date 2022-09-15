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
 * ModifyTraceDataRanks请求参数结构体
 *
 * @method integer getCorpId() 获取企业ID
 * @method void setCorpId(integer $CorpId) 设置企业ID
 * @method string getBatchId() 获取批次ID
 * @method void setBatchId(string $BatchId) 设置批次ID
 * @method string getTaskId() 获取生产任务ID
 * @method void setTaskId(string $TaskId) 设置生产任务ID
 * @method array getTraceIds() 获取溯源ID
 * @method void setTraceIds(array $TraceIds) 设置溯源ID
 */
class ModifyTraceDataRanksRequest extends AbstractModel
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
     * @var string 生产任务ID
     */
    public $TaskId;

    /**
     * @var array 溯源ID
     */
    public $TraceIds;

    /**
     * @param integer $CorpId 企业ID
     * @param string $BatchId 批次ID
     * @param string $TaskId 生产任务ID
     * @param array $TraceIds 溯源ID
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

        if (array_key_exists("TraceIds",$param) and $param["TraceIds"] !== null) {
            $this->TraceIds = $param["TraceIds"];
        }
    }
}
