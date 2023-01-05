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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSnapshotPolicies请求参数结构体
 *
 * @method array getSnapshotPolicies() 获取快照策略详情。
 * @method void setSnapshotPolicies(array $SnapshotPolicies) 设置快照策略详情。
 */
class CreateSnapshotPoliciesRequest extends AbstractModel
{
    /**
     * @var array 快照策略详情。
     */
    public $SnapshotPolicies;

    /**
     * @param array $SnapshotPolicies 快照策略详情。
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
        if (array_key_exists("SnapshotPolicies",$param) and $param["SnapshotPolicies"] !== null) {
            $this->SnapshotPolicies = [];
            foreach ($param["SnapshotPolicies"] as $key => $value){
                $obj = new SnapshotPolicy();
                $obj->deserialize($value);
                array_push($this->SnapshotPolicies, $obj);
            }
        }
    }
}
