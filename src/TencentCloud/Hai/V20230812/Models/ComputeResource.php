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
namespace TencentCloud\Hai\V20230812\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 推理服务的算力资源
 *
 * @method string getBundleType() 获取算力套餐的类型
 * @method void setBundleType(string $BundleType) 设置算力套餐的类型
 * @method integer getCount() 获取节点数量
 * @method void setCount(integer $Count) 设置节点数量
 */
class ComputeResource extends AbstractModel
{
    /**
     * @var string 算力套餐的类型
     */
    public $BundleType;

    /**
     * @var integer 节点数量
     */
    public $Count;

    /**
     * @param string $BundleType 算力套餐的类型
     * @param integer $Count 节点数量
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
        if (array_key_exists("BundleType",$param) and $param["BundleType"] !== null) {
            $this->BundleType = $param["BundleType"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
