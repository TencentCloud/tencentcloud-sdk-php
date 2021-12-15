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
namespace TencentCloud\Eiam\V20210420\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteUsers请求参数结构体
 *
 * @method array getDeleteIdList() 获取被删除用户的ID列表。DeleteIdList 和 DeleteNameList 需至少一个不为空；都不为空时优先使用 DeleteNameList。
 * @method void setDeleteIdList(array $DeleteIdList) 设置被删除用户的ID列表。DeleteIdList 和 DeleteNameList 需至少一个不为空；都不为空时优先使用 DeleteNameList。
 * @method array getDeleteNameList() 获取被删除用户的名称列表。DeleteIdList 和 DeleteNameList 需至少一个不为空；都不为空时优先使用 DeleteNameList。
 * @method void setDeleteNameList(array $DeleteNameList) 设置被删除用户的名称列表。DeleteIdList 和 DeleteNameList 需至少一个不为空；都不为空时优先使用 DeleteNameList。
 */
class DeleteUsersRequest extends AbstractModel
{
    /**
     * @var array 被删除用户的ID列表。DeleteIdList 和 DeleteNameList 需至少一个不为空；都不为空时优先使用 DeleteNameList。
     */
    public $DeleteIdList;

    /**
     * @var array 被删除用户的名称列表。DeleteIdList 和 DeleteNameList 需至少一个不为空；都不为空时优先使用 DeleteNameList。
     */
    public $DeleteNameList;

    /**
     * @param array $DeleteIdList 被删除用户的ID列表。DeleteIdList 和 DeleteNameList 需至少一个不为空；都不为空时优先使用 DeleteNameList。
     * @param array $DeleteNameList 被删除用户的名称列表。DeleteIdList 和 DeleteNameList 需至少一个不为空；都不为空时优先使用 DeleteNameList。
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
        if (array_key_exists("DeleteIdList",$param) and $param["DeleteIdList"] !== null) {
            $this->DeleteIdList = $param["DeleteIdList"];
        }

        if (array_key_exists("DeleteNameList",$param) and $param["DeleteNameList"] !== null) {
            $this->DeleteNameList = $param["DeleteNameList"];
        }
    }
}
