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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 爆款复刻产品信息
 *
 * @method array getImages() 获取<p>产品图</p>
 * @method void setImages(array $Images) 设置<p>产品图</p>
 * @method string getName() 获取<p>产品名</p>
 * @method void setName(string $Name) 设置<p>产品名</p>
 * @method string getDescription() 获取<p>产品描述</p>
 * @method void setDescription(string $Description) 设置<p>产品描述</p>
 */
class CloneViralProduct extends AbstractModel
{
    /**
     * @var array <p>产品图</p>
     */
    public $Images;

    /**
     * @var string <p>产品名</p>
     */
    public $Name;

    /**
     * @var string <p>产品描述</p>
     */
    public $Description;

    /**
     * @param array $Images <p>产品图</p>
     * @param string $Name <p>产品名</p>
     * @param string $Description <p>产品描述</p>
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
        if (array_key_exists("Images",$param) and $param["Images"] !== null) {
            $this->Images = $param["Images"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
