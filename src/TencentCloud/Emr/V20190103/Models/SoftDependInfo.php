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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 体外客户端组件依赖信息
 *
 * @method string getSoftName() 获取组件名称
 * @method void setSoftName(string $SoftName) 设置组件名称
 * @method boolean getRequired() 获取是否必选
 * @method void setRequired(boolean $Required) 设置是否必选
 */
class SoftDependInfo extends AbstractModel
{
    /**
     * @var string 组件名称
     */
    public $SoftName;

    /**
     * @var boolean 是否必选
     */
    public $Required;

    /**
     * @param string $SoftName 组件名称
     * @param boolean $Required 是否必选
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
        if (array_key_exists("SoftName",$param) and $param["SoftName"] !== null) {
            $this->SoftName = $param["SoftName"];
        }

        if (array_key_exists("Required",$param) and $param["Required"] !== null) {
            $this->Required = $param["Required"];
        }
    }
}
