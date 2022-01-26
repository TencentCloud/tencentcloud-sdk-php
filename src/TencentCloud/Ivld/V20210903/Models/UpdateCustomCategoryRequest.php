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
namespace TencentCloud\Ivld\V20210903\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateCustomCategory请求参数结构体
 *
 * @method string getCategoryId() 获取自定义人物类型Id
 * @method void setCategoryId(string $CategoryId) 设置自定义人物类型Id
 * @method string getL1Category() 获取一级自定义人物类型
 * @method void setL1Category(string $L1Category) 设置一级自定义人物类型
 * @method string getL2Category() 获取二级自定义人物类型
 * @method void setL2Category(string $L2Category) 设置二级自定义人物类型
 */
class UpdateCustomCategoryRequest extends AbstractModel
{
    /**
     * @var string 自定义人物类型Id
     */
    public $CategoryId;

    /**
     * @var string 一级自定义人物类型
     */
    public $L1Category;

    /**
     * @var string 二级自定义人物类型
     */
    public $L2Category;

    /**
     * @param string $CategoryId 自定义人物类型Id
     * @param string $L1Category 一级自定义人物类型
     * @param string $L2Category 二级自定义人物类型
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

        if (array_key_exists("L1Category",$param) and $param["L1Category"] !== null) {
            $this->L1Category = $param["L1Category"];
        }

        if (array_key_exists("L2Category",$param) and $param["L2Category"] !== null) {
            $this->L2Category = $param["L2Category"];
        }
    }
}
