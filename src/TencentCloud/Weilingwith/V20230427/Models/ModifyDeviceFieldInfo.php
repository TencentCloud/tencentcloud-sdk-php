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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 设备自定义值修改信息入参
 *
 * @method string getWID() 获取设备id
 * @method void setWID(string $WID) 设置设备id
 * @method string getKey() 获取自定义字段key
 * @method void setKey(string $Key) 设置自定义字段key
 * @method string getVal() 获取自定义字段值
 * @method void setVal(string $Val) 设置自定义字段值
 */
class ModifyDeviceFieldInfo extends AbstractModel
{
    /**
     * @var string 设备id
     */
    public $WID;

    /**
     * @var string 自定义字段key
     */
    public $Key;

    /**
     * @var string 自定义字段值
     */
    public $Val;

    /**
     * @param string $WID 设备id
     * @param string $Key 自定义字段key
     * @param string $Val 自定义字段值
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
        if (array_key_exists("WID",$param) and $param["WID"] !== null) {
            $this->WID = $param["WID"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Val",$param) and $param["Val"] !== null) {
            $this->Val = $param["Val"];
        }
    }
}
