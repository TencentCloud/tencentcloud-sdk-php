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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListEmailIdentities请求参数结构体
 *
 * @method array getTagList() 获取tag 标签
 * @method void setTagList(array $TagList) 设置tag 标签
 * @method integer getLimit() 获取分页 limit
 * @method void setLimit(integer $Limit) 设置分页 limit
 * @method integer getOffset() 获取分页 offset
 * @method void setOffset(integer $Offset) 设置分页 offset
 */
class ListEmailIdentitiesRequest extends AbstractModel
{
    /**
     * @var array tag 标签
     */
    public $TagList;

    /**
     * @var integer 分页 limit
     */
    public $Limit;

    /**
     * @var integer 分页 offset
     */
    public $Offset;

    /**
     * @param array $TagList tag 标签
     * @param integer $Limit 分页 limit
     * @param integer $Offset 分页 offset
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
        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new TagList();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
