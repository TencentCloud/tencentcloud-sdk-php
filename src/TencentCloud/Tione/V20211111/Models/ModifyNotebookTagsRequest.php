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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyNotebookTags请求参数结构体
 *
 * @method string getId() 获取Notebook Id
 * @method void setId(string $Id) 设置Notebook Id
 * @method array getTags() 获取Notebook修改标签集合
 * @method void setTags(array $Tags) 设置Notebook修改标签集合
 */
class ModifyNotebookTagsRequest extends AbstractModel
{
    /**
     * @var string Notebook Id
     */
    public $Id;

    /**
     * @var array Notebook修改标签集合
     */
    public $Tags;

    /**
     * @param string $Id Notebook Id
     * @param array $Tags Notebook修改标签集合
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
