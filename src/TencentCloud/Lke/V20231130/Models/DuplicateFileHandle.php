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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 重复文档处理方式
 *
 * @method integer getCheckType() 获取重复文档判断方式，1：按文档内容，即cos_hash字段判断是否重复
 * @method void setCheckType(integer $CheckType) 设置重复文档判断方式，1：按文档内容，即cos_hash字段判断是否重复
 * @method integer getHandleType() 获取重复文档处理方式，1：返回报错，2：跳过，返回重复的文档业务ID
 * @method void setHandleType(integer $HandleType) 设置重复文档处理方式，1：返回报错，2：跳过，返回重复的文档业务ID
 */
class DuplicateFileHandle extends AbstractModel
{
    /**
     * @var integer 重复文档判断方式，1：按文档内容，即cos_hash字段判断是否重复
     */
    public $CheckType;

    /**
     * @var integer 重复文档处理方式，1：返回报错，2：跳过，返回重复的文档业务ID
     */
    public $HandleType;

    /**
     * @param integer $CheckType 重复文档判断方式，1：按文档内容，即cos_hash字段判断是否重复
     * @param integer $HandleType 重复文档处理方式，1：返回报错，2：跳过，返回重复的文档业务ID
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
        if (array_key_exists("CheckType",$param) and $param["CheckType"] !== null) {
            $this->CheckType = $param["CheckType"];
        }

        if (array_key_exists("HandleType",$param) and $param["HandleType"] !== null) {
            $this->HandleType = $param["HandleType"];
        }
    }
}
