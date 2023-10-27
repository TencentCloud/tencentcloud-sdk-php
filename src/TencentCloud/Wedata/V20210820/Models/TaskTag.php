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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务标签，可用于检索任务的条件
 *
 * @method string getTagName() 获取标签名称
 * @method void setTagName(string $TagName) 设置标签名称
 * @method array getTagValues() 获取标签值列表
 * @method void setTagValues(array $TagValues) 设置标签值列表
 */
class TaskTag extends AbstractModel
{
    /**
     * @var string 标签名称
     */
    public $TagName;

    /**
     * @var array 标签值列表
     */
    public $TagValues;

    /**
     * @param string $TagName 标签名称
     * @param array $TagValues 标签值列表
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
        if (array_key_exists("TagName",$param) and $param["TagName"] !== null) {
            $this->TagName = $param["TagName"];
        }

        if (array_key_exists("TagValues",$param) and $param["TagValues"] !== null) {
            $this->TagValues = $param["TagValues"];
        }
    }
}
