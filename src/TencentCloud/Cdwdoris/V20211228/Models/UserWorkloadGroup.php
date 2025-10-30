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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户绑定资源组信息
 *
 * @method string getUserName() 获取test
 * @method void setUserName(string $UserName) 设置test
 * @method string getWorkloadGroupName() 获取normal
 * @method void setWorkloadGroupName(string $WorkloadGroupName) 设置normal
 */
class UserWorkloadGroup extends AbstractModel
{
    /**
     * @var string test
     */
    public $UserName;

    /**
     * @var string normal
     */
    public $WorkloadGroupName;

    /**
     * @param string $UserName test
     * @param string $WorkloadGroupName normal
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
        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("WorkloadGroupName",$param) and $param["WorkloadGroupName"] !== null) {
            $this->WorkloadGroupName = $param["WorkloadGroupName"];
        }
    }
}
