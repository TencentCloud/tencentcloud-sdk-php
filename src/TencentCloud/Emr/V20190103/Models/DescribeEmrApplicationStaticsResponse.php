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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEmrApplicationStatics返回参数结构体
 *
 * @method array getStatics() 获取作业统计信息
 * @method void setStatics(array $Statics) 设置作业统计信息
 * @method integer getTotalCount() 获取总数
 * @method void setTotalCount(integer $TotalCount) 设置总数
 * @method array getQueues() 获取可选择的队列名
 * @method void setQueues(array $Queues) 设置可选择的队列名
 * @method array getUsers() 获取可选择的用户名
 * @method void setUsers(array $Users) 设置可选择的用户名
 * @method array getApplicationTypes() 获取可选择的作业类型
 * @method void setApplicationTypes(array $ApplicationTypes) 设置可选择的作业类型
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeEmrApplicationStaticsResponse extends AbstractModel
{
    /**
     * @var array 作业统计信息
     */
    public $Statics;

    /**
     * @var integer 总数
     */
    public $TotalCount;

    /**
     * @var array 可选择的队列名
     */
    public $Queues;

    /**
     * @var array 可选择的用户名
     */
    public $Users;

    /**
     * @var array 可选择的作业类型
     */
    public $ApplicationTypes;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Statics 作业统计信息
     * @param integer $TotalCount 总数
     * @param array $Queues 可选择的队列名
     * @param array $Users 可选择的用户名
     * @param array $ApplicationTypes 可选择的作业类型
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Statics",$param) and $param["Statics"] !== null) {
            $this->Statics = [];
            foreach ($param["Statics"] as $key => $value){
                $obj = new ApplicationStatics();
                $obj->deserialize($value);
                array_push($this->Statics, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("Queues",$param) and $param["Queues"] !== null) {
            $this->Queues = $param["Queues"];
        }

        if (array_key_exists("Users",$param) and $param["Users"] !== null) {
            $this->Users = $param["Users"];
        }

        if (array_key_exists("ApplicationTypes",$param) and $param["ApplicationTypes"] !== null) {
            $this->ApplicationTypes = $param["ApplicationTypes"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
