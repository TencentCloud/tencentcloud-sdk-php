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
namespace TencentCloud\Ciam\V20220331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListJobs请求参数结构体
 *
 * @method string getUserStoreId() 获取用户目录ID
 * @method void setUserStoreId(string $UserStoreId) 设置用户目录ID
 * @method array getJobIds() 获取任务ID列表，为空时返回全部任务
 * @method void setJobIds(array $JobIds) 设置任务ID列表，为空时返回全部任务
 */
class ListJobsRequest extends AbstractModel
{
    /**
     * @var string 用户目录ID
     */
    public $UserStoreId;

    /**
     * @var array 任务ID列表，为空时返回全部任务
     */
    public $JobIds;

    /**
     * @param string $UserStoreId 用户目录ID
     * @param array $JobIds 任务ID列表，为空时返回全部任务
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
        if (array_key_exists("UserStoreId",$param) and $param["UserStoreId"] !== null) {
            $this->UserStoreId = $param["UserStoreId"];
        }

        if (array_key_exists("JobIds",$param) and $param["JobIds"] !== null) {
            $this->JobIds = $param["JobIds"];
        }
    }
}
