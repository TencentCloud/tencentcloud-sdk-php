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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteCodePermissions请求参数结构体
 *
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method array getRecyclePolicySet() 获取回收的权限列表
 * @method void setRecyclePolicySet(array $RecyclePolicySet) 设置回收的权限列表
 */
class DeleteCodePermissionsRequest extends AbstractModel
{
    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var array 回收的权限列表
     */
    public $RecyclePolicySet;

    /**
     * @param string $ProjectId 项目id
     * @param array $RecyclePolicySet 回收的权限列表
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("RecyclePolicySet",$param) and $param["RecyclePolicySet"] !== null) {
            $this->RecyclePolicySet = [];
            foreach ($param["RecyclePolicySet"] as $key => $value){
                $obj = new ExploreAuthorizationRecycleObject();
                $obj->deserialize($value);
                array_push($this->RecyclePolicySet, $obj);
            }
        }
    }
}
