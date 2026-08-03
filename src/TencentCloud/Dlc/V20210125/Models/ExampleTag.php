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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 案例标签返回值
 *
 * @method string getTag() 获取<p>案例标签名称</p>
 * @method void setTag(string $Tag) 设置<p>案例标签名称</p>
 * @method integer getCount() 获取<p>标签数量</p>
 * @method void setCount(integer $Count) 设置<p>标签数量</p>
 */
class ExampleTag extends AbstractModel
{
    /**
     * @var string <p>案例标签名称</p>
     */
    public $Tag;

    /**
     * @var integer <p>标签数量</p>
     */
    public $Count;

    /**
     * @param string $Tag <p>案例标签名称</p>
     * @param integer $Count <p>标签数量</p>
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
        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
