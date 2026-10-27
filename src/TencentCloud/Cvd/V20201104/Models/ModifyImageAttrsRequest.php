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
namespace TencentCloud\Cvd\V20201104\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyImageAttrs请求参数结构体
 *
 * @method string getImageId() 获取<p>镜像id</p>
 * @method void setImageId(string $ImageId) 设置<p>镜像id</p>
 * @method array getAttrs() 获取<p>支持修改的属性列表为：{ImageName}</p>
 * @method void setAttrs(array $Attrs) 设置<p>支持修改的属性列表为：{ImageName}</p>
 */
class ModifyImageAttrsRequest extends AbstractModel
{
    /**
     * @var string <p>镜像id</p>
     */
    public $ImageId;

    /**
     * @var array <p>支持修改的属性列表为：{ImageName}</p>
     */
    public $Attrs;

    /**
     * @param string $ImageId <p>镜像id</p>
     * @param array $Attrs <p>支持修改的属性列表为：{ImageName}</p>
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
        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("Attrs",$param) and $param["Attrs"] !== null) {
            $this->Attrs = [];
            foreach ($param["Attrs"] as $key => $value){
                $obj = new AttributeInfo();
                $obj->deserialize($value);
                array_push($this->Attrs, $obj);
            }
        }
    }
}
