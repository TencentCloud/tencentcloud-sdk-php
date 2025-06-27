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
namespace TencentCloud\Ctem\V20231128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * StopJobRecord请求参数结构体
 *
 * @method integer getCustomerId() 获取企业ID
 * @method void setCustomerId(integer $CustomerId) 设置企业ID
 * @method integer getJobRecordId() 获取任务ID
 * @method void setJobRecordId(integer $JobRecordId) 设置任务ID
 */
class StopJobRecordRequest extends AbstractModel
{
    /**
     * @var integer 企业ID
     */
    public $CustomerId;

    /**
     * @var integer 任务ID
     */
    public $JobRecordId;

    /**
     * @param integer $CustomerId 企业ID
     * @param integer $JobRecordId 任务ID
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
        if (array_key_exists("CustomerId",$param) and $param["CustomerId"] !== null) {
            $this->CustomerId = $param["CustomerId"];
        }

        if (array_key_exists("JobRecordId",$param) and $param["JobRecordId"] !== null) {
            $this->JobRecordId = $param["JobRecordId"];
        }
    }
}
