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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ResumeInstance请求参数结构体
 *
 * @method string getInstanceId() 获取需要恢复的实例id
 * @method void setInstanceId(string $InstanceId) 设置需要恢复的实例id
 * @method boolean getIsModifyAll() 获取修改是否包括白名单
 * @method void setIsModifyAll(boolean $IsModifyAll) 设置修改是否包括白名单
 */
class ResumeInstanceRequest extends AbstractModel
{
    /**
     * @var string 需要恢复的实例id
     */
    public $InstanceId;

    /**
     * @var boolean 修改是否包括白名单
     */
    public $IsModifyAll;

    /**
     * @param string $InstanceId 需要恢复的实例id
     * @param boolean $IsModifyAll 修改是否包括白名单
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("IsModifyAll",$param) and $param["IsModifyAll"] !== null) {
            $this->IsModifyAll = $param["IsModifyAll"];
        }
    }
}
