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
namespace TencentCloud\Tag\V20180813\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTagValues请求参数结构体
 *
 * @method array getTagKeys() 获取<p>标签键列表</p>
 * @method void setTagKeys(array $TagKeys) 设置<p>标签键列表</p>
 * @method integer getCreateUin() 获取<p>创建者用户 Uin，不传或为空只将 Uin 作为条件查询</p>
 * @method void setCreateUin(integer $CreateUin) 设置<p>创建者用户 Uin，不传或为空只将 Uin 作为条件查询</p>
 * @method integer getOffset() 获取<p>数据偏移量，默认为 0, 必须为Limit参数的整数倍</p>
 * @method void setOffset(integer $Offset) 设置<p>数据偏移量，默认为 0, 必须为Limit参数的整数倍</p>
 * @method integer getLimit() 获取<p>每页大小，默认为 15，最大1000</p>
 * @method void setLimit(integer $Limit) 设置<p>每页大小，默认为 15，最大1000</p>
 * @method string getCategory() 获取<p>标签类型。取值： Custom：自定义标签。 System：系统标签。 All：全部标签。 默认值：All。</p>
 * @method void setCategory(string $Category) 设置<p>标签类型。取值： Custom：自定义标签。 System：系统标签。 All：全部标签。 默认值：All。</p>
 */
class DescribeTagValuesRequest extends AbstractModel
{
    /**
     * @var array <p>标签键列表</p>
     */
    public $TagKeys;

    /**
     * @var integer <p>创建者用户 Uin，不传或为空只将 Uin 作为条件查询</p>
     */
    public $CreateUin;

    /**
     * @var integer <p>数据偏移量，默认为 0, 必须为Limit参数的整数倍</p>
     */
    public $Offset;

    /**
     * @var integer <p>每页大小，默认为 15，最大1000</p>
     */
    public $Limit;

    /**
     * @var string <p>标签类型。取值： Custom：自定义标签。 System：系统标签。 All：全部标签。 默认值：All。</p>
     */
    public $Category;

    /**
     * @param array $TagKeys <p>标签键列表</p>
     * @param integer $CreateUin <p>创建者用户 Uin，不传或为空只将 Uin 作为条件查询</p>
     * @param integer $Offset <p>数据偏移量，默认为 0, 必须为Limit参数的整数倍</p>
     * @param integer $Limit <p>每页大小，默认为 15，最大1000</p>
     * @param string $Category <p>标签类型。取值： Custom：自定义标签。 System：系统标签。 All：全部标签。 默认值：All。</p>
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
        if (array_key_exists("TagKeys",$param) and $param["TagKeys"] !== null) {
            $this->TagKeys = $param["TagKeys"];
        }

        if (array_key_exists("CreateUin",$param) and $param["CreateUin"] !== null) {
            $this->CreateUin = $param["CreateUin"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }
    }
}
