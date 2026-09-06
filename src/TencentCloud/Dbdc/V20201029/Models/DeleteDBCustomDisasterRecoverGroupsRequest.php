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
namespace TencentCloud\Dbdc\V20201029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteDBCustomDisasterRecoverGroups请求参数结构体
 *
 * @method array getDisasterRecoverGroupIds() 获取<p>置放群组ID</p><p>入参限制：数量上限为10。若置放群组内有节点，需要先移除。</p>
 * @method void setDisasterRecoverGroupIds(array $DisasterRecoverGroupIds) 设置<p>置放群组ID</p><p>入参限制：数量上限为10。若置放群组内有节点，需要先移除。</p>
 */
class DeleteDBCustomDisasterRecoverGroupsRequest extends AbstractModel
{
    /**
     * @var array <p>置放群组ID</p><p>入参限制：数量上限为10。若置放群组内有节点，需要先移除。</p>
     */
    public $DisasterRecoverGroupIds;

    /**
     * @param array $DisasterRecoverGroupIds <p>置放群组ID</p><p>入参限制：数量上限为10。若置放群组内有节点，需要先移除。</p>
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
        if (array_key_exists("DisasterRecoverGroupIds",$param) and $param["DisasterRecoverGroupIds"] !== null) {
            $this->DisasterRecoverGroupIds = $param["DisasterRecoverGroupIds"];
        }
    }
}
