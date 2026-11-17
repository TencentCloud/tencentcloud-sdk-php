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
 * 知识库容量信息
 *
 * @method string getMaxCapacity() 获取<p>最大容量</p>
 * @method void setMaxCapacity(string $MaxCapacity) 设置<p>最大容量</p>
 * @method string getExceededInvalidCapacity() 获取<p>超量失效容量</p>
 * @method void setExceededInvalidCapacity(string $ExceededInvalidCapacity) 设置<p>超量失效容量</p>
 * @method string getUsedCapacity() 获取<p>已使用容量</p>
 * @method void setUsedCapacity(string $UsedCapacity) 设置<p>已使用容量</p>
 */
class ByteCapacity extends AbstractModel
{
    /**
     * @var string <p>最大容量</p>
     */
    public $MaxCapacity;

    /**
     * @var string <p>超量失效容量</p>
     */
    public $ExceededInvalidCapacity;

    /**
     * @var string <p>已使用容量</p>
     */
    public $UsedCapacity;

    /**
     * @param string $MaxCapacity <p>最大容量</p>
     * @param string $ExceededInvalidCapacity <p>超量失效容量</p>
     * @param string $UsedCapacity <p>已使用容量</p>
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
        if (array_key_exists("MaxCapacity",$param) and $param["MaxCapacity"] !== null) {
            $this->MaxCapacity = $param["MaxCapacity"];
        }

        if (array_key_exists("ExceededInvalidCapacity",$param) and $param["ExceededInvalidCapacity"] !== null) {
            $this->ExceededInvalidCapacity = $param["ExceededInvalidCapacity"];
        }

        if (array_key_exists("UsedCapacity",$param) and $param["UsedCapacity"] !== null) {
            $this->UsedCapacity = $param["UsedCapacity"];
        }
    }
}
