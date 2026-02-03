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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IsolateLibraDBInstance请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method array getInstanceIdList() 获取只读分析引擎实例 ID 列表
 * @method void setInstanceIdList(array $InstanceIdList) 设置只读分析引擎实例 ID 列表
 * @method boolean getForceIsolate() 获取是否是强制隔离
 * @method void setForceIsolate(boolean $ForceIsolate) 设置是否是强制隔离
 * @method array getIsolateReasonTypes() 获取隔离原因类型
 * @method void setIsolateReasonTypes(array $IsolateReasonTypes) 设置隔离原因类型
 * @method string getIsolateReason() 获取隔离原因
 * @method void setIsolateReason(string $IsolateReason) 设置隔离原因
 */
class IsolateLibraDBInstanceRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var array 只读分析引擎实例 ID 列表
     */
    public $InstanceIdList;

    /**
     * @var boolean 是否是强制隔离
     */
    public $ForceIsolate;

    /**
     * @var array 隔离原因类型
     */
    public $IsolateReasonTypes;

    /**
     * @var string 隔离原因
     */
    public $IsolateReason;

    /**
     * @param string $ClusterId 集群ID
     * @param array $InstanceIdList 只读分析引擎实例 ID 列表
     * @param boolean $ForceIsolate 是否是强制隔离
     * @param array $IsolateReasonTypes 隔离原因类型
     * @param string $IsolateReason 隔离原因
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("InstanceIdList",$param) and $param["InstanceIdList"] !== null) {
            $this->InstanceIdList = $param["InstanceIdList"];
        }

        if (array_key_exists("ForceIsolate",$param) and $param["ForceIsolate"] !== null) {
            $this->ForceIsolate = $param["ForceIsolate"];
        }

        if (array_key_exists("IsolateReasonTypes",$param) and $param["IsolateReasonTypes"] !== null) {
            $this->IsolateReasonTypes = $param["IsolateReasonTypes"];
        }

        if (array_key_exists("IsolateReason",$param) and $param["IsolateReason"] !== null) {
            $this->IsolateReason = $param["IsolateReason"];
        }
    }
}
