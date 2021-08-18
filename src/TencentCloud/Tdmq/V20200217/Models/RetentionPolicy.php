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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 消息保留策略
 *
 * @method integer getTimeInMinutes() 获取消息保留时长
 * @method void setTimeInMinutes(integer $TimeInMinutes) 设置消息保留时长
 * @method integer getSizeInMB() 获取消息保留大小
 * @method void setSizeInMB(integer $SizeInMB) 设置消息保留大小
 */
class RetentionPolicy extends AbstractModel
{
    /**
     * @var integer 消息保留时长
     */
    public $TimeInMinutes;

    /**
     * @var integer 消息保留大小
     */
    public $SizeInMB;

    /**
     * @param integer $TimeInMinutes 消息保留时长
     * @param integer $SizeInMB 消息保留大小
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
        if (array_key_exists("TimeInMinutes",$param) and $param["TimeInMinutes"] !== null) {
            $this->TimeInMinutes = $param["TimeInMinutes"];
        }

        if (array_key_exists("SizeInMB",$param) and $param["SizeInMB"] !== null) {
            $this->SizeInMB = $param["SizeInMB"];
        }
    }
}
