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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据处理——Value处理参数——替换参数
 *
 * @method string getOldValue() 获取被替换值
 * @method void setOldValue(string $OldValue) 设置被替换值
 * @method string getNewValue() 获取替换值
 * @method void setNewValue(string $NewValue) 设置替换值
 */
class ReplaceParam extends AbstractModel
{
    /**
     * @var string 被替换值
     */
    public $OldValue;

    /**
     * @var string 替换值
     */
    public $NewValue;

    /**
     * @param string $OldValue 被替换值
     * @param string $NewValue 替换值
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
        if (array_key_exists("OldValue",$param) and $param["OldValue"] !== null) {
            $this->OldValue = $param["OldValue"];
        }

        if (array_key_exists("NewValue",$param) and $param["NewValue"] !== null) {
            $this->NewValue = $param["NewValue"];
        }
    }
}
