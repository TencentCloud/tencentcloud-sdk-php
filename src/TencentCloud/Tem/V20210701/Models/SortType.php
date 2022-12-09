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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询过滤器
 *
 * @method string getKey() 获取排序字段名称
 * @method void setKey(string $Key) 设置排序字段名称
 * @method integer getType() 获取0：升序，1：倒序
 * @method void setType(integer $Type) 设置0：升序，1：倒序
 */
class SortType extends AbstractModel
{
    /**
     * @var string 排序字段名称
     */
    public $Key;

    /**
     * @var integer 0：升序，1：倒序
     */
    public $Type;

    /**
     * @param string $Key 排序字段名称
     * @param integer $Type 0：升序，1：倒序
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
