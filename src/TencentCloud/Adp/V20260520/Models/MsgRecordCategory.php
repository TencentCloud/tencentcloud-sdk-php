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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MsgRecordCategory
 *
 * @method string getCategoryId() 获取<p>分类的业务 ID</p>
 * @method void setCategoryId(string $CategoryId) 设置<p>分类的业务 ID</p>
 * @method array getChildren() 获取<p>子分类列表，树形嵌套</p>
 * @method void setChildren(array $Children) 设置<p>子分类列表，树形嵌套</p>
 * @method string getName() 获取<p>分类名称</p>
 * @method void setName(string $Name) 设置<p>分类名称</p>
 * @method CategoryPermission getPermission() 获取<p>当前用户对该分类的操作权限</p>
 * @method void setPermission(CategoryPermission $Permission) 设置<p>当前用户对该分类的操作权限</p>
 * @method string getTotalCount() 获取<p>该分类下消息记录的数量</p>
 * @method void setTotalCount(string $TotalCount) 设置<p>该分类下消息记录的数量</p>
 */
class MsgRecordCategory extends AbstractModel
{
    /**
     * @var string <p>分类的业务 ID</p>
     */
    public $CategoryId;

    /**
     * @var array <p>子分类列表，树形嵌套</p>
     */
    public $Children;

    /**
     * @var string <p>分类名称</p>
     */
    public $Name;

    /**
     * @var CategoryPermission <p>当前用户对该分类的操作权限</p>
     */
    public $Permission;

    /**
     * @var string <p>该分类下消息记录的数量</p>
     */
    public $TotalCount;

    /**
     * @param string $CategoryId <p>分类的业务 ID</p>
     * @param array $Children <p>子分类列表，树形嵌套</p>
     * @param string $Name <p>分类名称</p>
     * @param CategoryPermission $Permission <p>当前用户对该分类的操作权限</p>
     * @param string $TotalCount <p>该分类下消息记录的数量</p>
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
        if (array_key_exists("CategoryId",$param) and $param["CategoryId"] !== null) {
            $this->CategoryId = $param["CategoryId"];
        }

        if (array_key_exists("Children",$param) and $param["Children"] !== null) {
            $this->Children = [];
            foreach ($param["Children"] as $key => $value){
                $obj = new MsgRecordCategory();
                $obj->deserialize($value);
                array_push($this->Children, $obj);
            }
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Permission",$param) and $param["Permission"] !== null) {
            $this->Permission = new CategoryPermission();
            $this->Permission->deserialize($param["Permission"]);
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
    }
}
