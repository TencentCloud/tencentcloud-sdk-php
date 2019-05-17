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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getProductId() 获取产品ID
 * @method void setProductId(string $ProductId) 设置产品ID
 * @method string getModelDefine() 获取模型定义
 * @method void setModelDefine(string $ModelDefine) 设置模型定义
 * @method integer getUpdateTime() 获取更新时间，秒级时间戳
 * @method void setUpdateTime(integer $UpdateTime) 设置更新时间，秒级时间戳
 * @method integer getCreateTime() 获取创建时间，秒级时间戳
 * @method void setCreateTime(integer $CreateTime) 设置创建时间，秒级时间戳
 */

/**
 *产品模型定义
 */
class ProductModelDefinition extends AbstractModel
{
    /**
     * @var string 产品ID
     */
    public $ProductId;

    /**
     * @var string 模型定义
     */
    public $ModelDefine;

    /**
     * @var integer 更新时间，秒级时间戳
     */
    public $UpdateTime;

    /**
     * @var integer 创建时间，秒级时间戳
     */
    public $CreateTime;
    /**
     * @param string $ProductId 产品ID
     * @param string $ModelDefine 模型定义
     * @param integer $UpdateTime 更新时间，秒级时间戳
     * @param integer $CreateTime 创建时间，秒级时间戳
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("ModelDefine",$param) and $param["ModelDefine"] !== null) {
            $this->ModelDefine = $param["ModelDefine"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
