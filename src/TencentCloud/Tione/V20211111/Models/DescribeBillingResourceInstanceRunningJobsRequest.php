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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBillingResourceInstanceRunningJobs请求参数结构体
 *
 * @method string getResourceGroupId() 获取资源组id
 * @method void setResourceGroupId(string $ResourceGroupId) 设置资源组id
 * @method string getResourceInstanceId() 获取资源组节点id
 * @method void setResourceInstanceId(string $ResourceInstanceId) 设置资源组节点id
 */
class DescribeBillingResourceInstanceRunningJobsRequest extends AbstractModel
{
    /**
     * @var string 资源组id
     */
    public $ResourceGroupId;

    /**
     * @var string 资源组节点id
     */
    public $ResourceInstanceId;

    /**
     * @param string $ResourceGroupId 资源组id
     * @param string $ResourceInstanceId 资源组节点id
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
        if (array_key_exists("ResourceGroupId",$param) and $param["ResourceGroupId"] !== null) {
            $this->ResourceGroupId = $param["ResourceGroupId"];
        }

        if (array_key_exists("ResourceInstanceId",$param) and $param["ResourceInstanceId"] !== null) {
            $this->ResourceInstanceId = $param["ResourceInstanceId"];
        }
    }
}
