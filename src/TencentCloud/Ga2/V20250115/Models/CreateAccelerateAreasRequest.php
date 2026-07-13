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
namespace TencentCloud\Ga2\V20250115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAccelerateAreas请求参数结构体
 *
 * @method string getGlobalAcceleratorId() 获取<p>全球加速实例ID。</p>
 * @method void setGlobalAcceleratorId(string $GlobalAcceleratorId) 设置<p>全球加速实例ID。</p>
 * @method array getAcceleratorAreas() 获取<p>加速地域信息。一次最多创建10组加速地域。</p>
 * @method void setAcceleratorAreas(array $AcceleratorAreas) 设置<p>加速地域信息。一次最多创建10组加速地域。</p>
 */
class CreateAccelerateAreasRequest extends AbstractModel
{
    /**
     * @var string <p>全球加速实例ID。</p>
     */
    public $GlobalAcceleratorId;

    /**
     * @var array <p>加速地域信息。一次最多创建10组加速地域。</p>
     */
    public $AcceleratorAreas;

    /**
     * @param string $GlobalAcceleratorId <p>全球加速实例ID。</p>
     * @param array $AcceleratorAreas <p>加速地域信息。一次最多创建10组加速地域。</p>
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
        if (array_key_exists("GlobalAcceleratorId",$param) and $param["GlobalAcceleratorId"] !== null) {
            $this->GlobalAcceleratorId = $param["GlobalAcceleratorId"];
        }

        if (array_key_exists("AcceleratorAreas",$param) and $param["AcceleratorAreas"] !== null) {
            $this->AcceleratorAreas = [];
            foreach ($param["AcceleratorAreas"] as $key => $value){
                $obj = new AcceleratorAreas();
                $obj->deserialize($value);
                array_push($this->AcceleratorAreas, $obj);
            }
        }
    }
}
