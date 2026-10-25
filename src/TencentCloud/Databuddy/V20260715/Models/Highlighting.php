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
 * 搜索命中的高亮
 *
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method string getComment() 获取描述
 * @method void setComment(string $Comment) 设置描述
 * @method array getTextFragments() 获取片段
 * @method void setTextFragments(array $TextFragments) 设置片段
 */
class Highlighting extends AbstractModel
{
    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var string 描述
     */
    public $Comment;

    /**
     * @var array 片段
     */
    public $TextFragments;

    /**
     * @param string $Name 名称
     * @param string $Comment 描述
     * @param array $TextFragments 片段
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("TextFragments",$param) and $param["TextFragments"] !== null) {
            $this->TextFragments = [];
            foreach ($param["TextFragments"] as $key => $value){
                $obj = new Fragment();
                $obj->deserialize($value);
                array_push($this->TextFragments, $obj);
            }
        }
    }
}
