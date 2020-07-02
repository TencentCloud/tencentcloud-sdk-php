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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstancesAttribute请求参数结构体
 *
 * @method array getInstanceIdSet() 获取待修改的实例ID列表。在单次请求的过程中，请求实例数上限为100。
 * @method void setInstanceIdSet(array $InstanceIdSet) 设置待修改的实例ID列表。在单次请求的过程中，请求实例数上限为100。
 * @method string getInstanceName() 获取修改成功后显示的实例名称，不得超过60个字符，不传则名称显示为空。
 * @method void setInstanceName(string $InstanceName) 设置修改成功后显示的实例名称，不得超过60个字符，不传则名称显示为空。
 */
class ModifyInstancesAttributeRequest extends AbstractModel
{
    /**
     * @var array 待修改的实例ID列表。在单次请求的过程中，请求实例数上限为100。
     */
    public $InstanceIdSet;

    /**
     * @var string 修改成功后显示的实例名称，不得超过60个字符，不传则名称显示为空。
     */
    public $InstanceName;

    /**
     * @param array $InstanceIdSet 待修改的实例ID列表。在单次请求的过程中，请求实例数上限为100。
     * @param string $InstanceName 修改成功后显示的实例名称，不得超过60个字符，不传则名称显示为空。
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
        if (array_key_exists('InstanceIdSet',$param) and $param['InstanceIdSet'] !== null) {
            $this->InstanceIdSet = $param['InstanceIdSet'];
        }

        if (array_key_exists('InstanceName',$param) and $param['InstanceName'] !== null) {
            $this->InstanceName = $param['InstanceName'];
        }
    }
}
