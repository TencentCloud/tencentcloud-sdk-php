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
namespace TencentCloud\Aca\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 操作结果
 *
 * @method boolean getDummy() 获取操作结果
 * @method void setDummy(boolean $Dummy) 设置操作结果
 */
class OperateResp extends AbstractModel
{
    /**
     * @var boolean 操作结果
     */
    public $Dummy;

    /**
     * @param boolean $Dummy 操作结果
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
        if (array_key_exists("Dummy",$param) and $param["Dummy"] !== null) {
            $this->Dummy = $param["Dummy"];
        }
    }
}
