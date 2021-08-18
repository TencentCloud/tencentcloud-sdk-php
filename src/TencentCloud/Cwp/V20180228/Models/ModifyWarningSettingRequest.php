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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyWarningSetting请求参数结构体
 *
 * @method array getWarningObjects() 获取告警设置的修改内容
 * @method void setWarningObjects(array $WarningObjects) 设置告警设置的修改内容
 */
class ModifyWarningSettingRequest extends AbstractModel
{
    /**
     * @var array 告警设置的修改内容
     */
    public $WarningObjects;

    /**
     * @param array $WarningObjects 告警设置的修改内容
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
        if (array_key_exists("WarningObjects",$param) and $param["WarningObjects"] !== null) {
            $this->WarningObjects = [];
            foreach ($param["WarningObjects"] as $key => $value){
                $obj = new WarningObject();
                $obj->deserialize($value);
                array_push($this->WarningObjects, $obj);
            }
        }
    }
}
