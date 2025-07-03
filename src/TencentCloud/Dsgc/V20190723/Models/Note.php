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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据资产报告-各种key-value的展示数据结构
 *
 * @method string getKey() 获取通用key，例如分类名称
 * @method void setKey(string $Key) 设置通用key，例如分类名称
 * @method integer getValue() 获取通用value，例如分类个数
 * @method void setValue(integer $Value) 设置通用value，例如分类个数
 */
class Note extends AbstractModel
{
    /**
     * @var string 通用key，例如分类名称
     */
    public $Key;

    /**
     * @var integer 通用value，例如分类个数
     */
    public $Value;

    /**
     * @param string $Key 通用key，例如分类名称
     * @param integer $Value 通用value，例如分类个数
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
