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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyUserGroup请求参数结构体
 *
 * @method array getUpdateList() 获取<p>用户组更新list</p>
 * @method void setUpdateList(array $UpdateList) 设置<p>用户组更新list</p>
 */
class ModifyUserGroupRequest extends AbstractModel
{
    /**
     * @var array <p>用户组更新list</p>
     */
    public $UpdateList;

    /**
     * @param array $UpdateList <p>用户组更新list</p>
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
        if (array_key_exists("UpdateList",$param) and $param["UpdateList"] !== null) {
            $this->UpdateList = [];
            foreach ($param["UpdateList"] as $key => $value){
                $obj = new UserGroupUpdateDTO();
                $obj->deserialize($value);
                array_push($this->UpdateList, $obj);
            }
        }
    }
}
