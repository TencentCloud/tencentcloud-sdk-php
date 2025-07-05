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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 设备标签修改信息入参
 *
 * @method string getWID() 获取设备id
 * @method void setWID(string $WID) 设置设备id
 * @method array getNameSet() 获取设备标签名称集合
 * @method void setNameSet(array $NameSet) 设置设备标签名称集合
 */
class ModifyDeviceTagInfo extends AbstractModel
{
    /**
     * @var string 设备id
     */
    public $WID;

    /**
     * @var array 设备标签名称集合
     */
    public $NameSet;

    /**
     * @param string $WID 设备id
     * @param array $NameSet 设备标签名称集合
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

        if (array_key_exists("NameSet",$param) and $param["NameSet"] !== null) {
            $this->NameSet = $param["NameSet"];
        }
    }
}
