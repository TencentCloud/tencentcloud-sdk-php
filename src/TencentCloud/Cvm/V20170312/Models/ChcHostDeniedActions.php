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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CHC物理服务器实例禁止操作的返回结构体
 *
 * @method string getChcId() 获取CHC物理服务器的实例id
 * @method void setChcId(string $ChcId) 设置CHC物理服务器的实例id
 * @method string getState() 获取CHC物理服务器的状态
 * @method void setState(string $State) 设置CHC物理服务器的状态
 * @method array getDenyActions() 获取当前CHC物理服务器禁止做的操作
 * @method void setDenyActions(array $DenyActions) 设置当前CHC物理服务器禁止做的操作
 */
class ChcHostDeniedActions extends AbstractModel
{
    /**
     * @var string CHC物理服务器的实例id
     */
    public $ChcId;

    /**
     * @var string CHC物理服务器的状态
     */
    public $State;

    /**
     * @var array 当前CHC物理服务器禁止做的操作
     */
    public $DenyActions;

    /**
     * @param string $ChcId CHC物理服务器的实例id
     * @param string $State CHC物理服务器的状态
     * @param array $DenyActions 当前CHC物理服务器禁止做的操作
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
        if (array_key_exists("ChcId",$param) and $param["ChcId"] !== null) {
            $this->ChcId = $param["ChcId"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("DenyActions",$param) and $param["DenyActions"] !== null) {
            $this->DenyActions = $param["DenyActions"];
        }
    }
}
