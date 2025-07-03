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
namespace TencentCloud\Tag\V20180813\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTagKeys请求参数结构体
 *
 * @method integer getCreateUin() 获取创建者用户 Uin，不传或为空只将 Uin 作为条件查询
 * @method void setCreateUin(integer $CreateUin) 设置创建者用户 Uin，不传或为空只将 Uin 作为条件查询
 * @method integer getOffset() 获取数据偏移量，默认为 0, 必须为Limit参数的整数倍
 * @method void setOffset(integer $Offset) 设置数据偏移量，默认为 0, 必须为Limit参数的整数倍
 * @method integer getLimit() 获取每页大小，默认为 15，最大1000
 * @method void setLimit(integer $Limit) 设置每页大小，默认为 15，最大1000
 * @method integer getShowProject() 获取是否展现项目。1:展示  0:不展示
 * @method void setShowProject(integer $ShowProject) 设置是否展现项目。1:展示  0:不展示
 * @method string getCategory() 获取标签类型。取值： Custom：自定义标签。 System：系统标签。 All：全部标签。 默认值：All。
 * @method void setCategory(string $Category) 设置标签类型。取值： Custom：自定义标签。 System：系统标签。 All：全部标签。 默认值：All。
 */
class DescribeTagKeysRequest extends AbstractModel
{
    /**
     * @var integer 创建者用户 Uin，不传或为空只将 Uin 作为条件查询
     */
    public $CreateUin;

    /**
     * @var integer 数据偏移量，默认为 0, 必须为Limit参数的整数倍
     */
    public $Offset;

    /**
     * @var integer 每页大小，默认为 15，最大1000
     */
    public $Limit;

    /**
     * @var integer 是否展现项目。1:展示  0:不展示
     */
    public $ShowProject;

    /**
     * @var string 标签类型。取值： Custom：自定义标签。 System：系统标签。 All：全部标签。 默认值：All。
     */
    public $Category;

    /**
     * @param integer $CreateUin 创建者用户 Uin，不传或为空只将 Uin 作为条件查询
     * @param integer $Offset 数据偏移量，默认为 0, 必须为Limit参数的整数倍
     * @param integer $Limit 每页大小，默认为 15，最大1000
     * @param integer $ShowProject 是否展现项目。1:展示  0:不展示
     * @param string $Category 标签类型。取值： Custom：自定义标签。 System：系统标签。 All：全部标签。 默认值：All。
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
        if (array_key_exists("CreateUin",$param) and $param["CreateUin"] !== null) {
            $this->CreateUin = $param["CreateUin"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ShowProject",$param) and $param["ShowProject"] !== null) {
            $this->ShowProject = $param["ShowProject"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }
    }
}
