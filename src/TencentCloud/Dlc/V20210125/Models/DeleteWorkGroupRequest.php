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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteWorkGroup请求参数结构体
 *
 * @method array getWorkGroupIds() 获取要删除的工作组Id集合
 * @method void setWorkGroupIds(array $WorkGroupIds) 设置要删除的工作组Id集合
 */
class DeleteWorkGroupRequest extends AbstractModel
{
    /**
     * @var array 要删除的工作组Id集合
     */
    public $WorkGroupIds;

    /**
     * @param array $WorkGroupIds 要删除的工作组Id集合
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
        if (array_key_exists("WorkGroupIds",$param) and $param["WorkGroupIds"] !== null) {
            $this->WorkGroupIds = $param["WorkGroupIds"];
        }
    }
}
