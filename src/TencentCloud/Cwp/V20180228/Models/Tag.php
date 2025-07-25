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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 标签信息
 *
 * @method integer getId() 获取标签ID
 * @method void setId(integer $Id) 设置标签ID
 * @method string getName() 获取标签名
 * @method void setName(string $Name) 设置标签名
 * @method integer getCount() 获取服务器数
 * @method void setCount(integer $Count) 设置服务器数
 */
class Tag extends AbstractModel
{
    /**
     * @var integer 标签ID
     */
    public $Id;

    /**
     * @var string 标签名
     */
    public $Name;

    /**
     * @var integer 服务器数
     */
    public $Count;

    /**
     * @param integer $Id 标签ID
     * @param string $Name 标签名
     * @param integer $Count 服务器数
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
