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
namespace TencentCloud\Tcm\V20210413\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ResourceRequirements 描述了计算资源需求。
 *
 * @method array getLimits() 获取Limits 描述了允许的最大计算资源量。
 * @method void setLimits(array $Limits) 设置Limits 描述了允许的最大计算资源量。
 * @method array getRequests() 获取Requests 描述所需的最小计算资源量。
 * @method void setRequests(array $Requests) 设置Requests 描述所需的最小计算资源量。
 */
class ResourceRequirements extends AbstractModel
{
    /**
     * @var array Limits 描述了允许的最大计算资源量。
     */
    public $Limits;

    /**
     * @var array Requests 描述所需的最小计算资源量。
     */
    public $Requests;

    /**
     * @param array $Limits Limits 描述了允许的最大计算资源量。
     * @param array $Requests Requests 描述所需的最小计算资源量。
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
        if (array_key_exists("Limits",$param) and $param["Limits"] !== null) {
            $this->Limits = [];
            foreach ($param["Limits"] as $key => $value){
                $obj = new Resource();
                $obj->deserialize($value);
                array_push($this->Limits, $obj);
            }
        }

        if (array_key_exists("Requests",$param) and $param["Requests"] !== null) {
            $this->Requests = [];
            foreach ($param["Requests"] as $key => $value){
                $obj = new Resource();
                $obj->deserialize($value);
                array_push($this->Requests, $obj);
            }
        }
    }
}
