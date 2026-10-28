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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateWorkspaceUsersTags请求参数结构体
 *
 * @method array getUserUins() 获取<p>必填，用户UIN列表，单次最多100个</p>
 * @method void setUserUins(array $UserUins) 设置<p>必填，用户UIN列表，单次最多100个</p>
 * @method string getWorkspaceId() 获取<p>必填，工作空间ID</p>
 * @method void setWorkspaceId(string $WorkspaceId) 设置<p>必填，工作空间ID</p>
 * @method array getTags() 获取<p>待更新的标签集合（标签维度及标签值通过 ID 指定），覆盖更新语义：传入后将被覆盖为目标用户的全部直绑标签，不传或传空数组则清空目标用户的所有直绑标签。每个元素中 TagId 必填，Values[].TagValueId 必填；传入的 TagValue、Source、GroupNames 服务端不读取，无需传入。标签维度与标签值可先通过 CreateTags / CreateTagValues 创建，再通过 ListTags 获取 ID（TagId 取 Items[].TagId，TagValueId 取 Items[].TagValues[].TagValueId）。</p>
 * @method void setTags(array $Tags) 设置<p>待更新的标签集合（标签维度及标签值通过 ID 指定），覆盖更新语义：传入后将被覆盖为目标用户的全部直绑标签，不传或传空数组则清空目标用户的所有直绑标签。每个元素中 TagId 必填，Values[].TagValueId 必填；传入的 TagValue、Source、GroupNames 服务端不读取，无需传入。标签维度与标签值可先通过 CreateTags / CreateTagValues 创建，再通过 ListTags 获取 ID（TagId 取 Items[].TagId，TagValueId 取 Items[].TagValues[].TagValueId）。</p>
 */
class UpdateWorkspaceUsersTagsRequest extends AbstractModel
{
    /**
     * @var array <p>必填，用户UIN列表，单次最多100个</p>
     */
    public $UserUins;

    /**
     * @var string <p>必填，工作空间ID</p>
     */
    public $WorkspaceId;

    /**
     * @var array <p>待更新的标签集合（标签维度及标签值通过 ID 指定），覆盖更新语义：传入后将被覆盖为目标用户的全部直绑标签，不传或传空数组则清空目标用户的所有直绑标签。每个元素中 TagId 必填，Values[].TagValueId 必填；传入的 TagValue、Source、GroupNames 服务端不读取，无需传入。标签维度与标签值可先通过 CreateTags / CreateTagValues 创建，再通过 ListTags 获取 ID（TagId 取 Items[].TagId，TagValueId 取 Items[].TagValues[].TagValueId）。</p>
     */
    public $Tags;

    /**
     * @param array $UserUins <p>必填，用户UIN列表，单次最多100个</p>
     * @param string $WorkspaceId <p>必填，工作空间ID</p>
     * @param array $Tags <p>待更新的标签集合（标签维度及标签值通过 ID 指定），覆盖更新语义：传入后将被覆盖为目标用户的全部直绑标签，不传或传空数组则清空目标用户的所有直绑标签。每个元素中 TagId 必填，Values[].TagValueId 必填；传入的 TagValue、Source、GroupNames 服务端不读取，无需传入。标签维度与标签值可先通过 CreateTags / CreateTagValues 创建，再通过 ListTags 获取 ID（TagId 取 Items[].TagId，TagValueId 取 Items[].TagValues[].TagValueId）。</p>
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
        if (array_key_exists("UserUins",$param) and $param["UserUins"] !== null) {
            $this->UserUins = $param["UserUins"];
        }

        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new UserTagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
