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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ActivateTWeCallLicense请求参数结构体
 *
 * @method integer getPkgType() 获取TWecall类型：0-体验套餐；1-基础版；3-高级版；
 * @method void setPkgType(integer $PkgType) 设置TWecall类型：0-体验套餐；1-基础版；3-高级版；
 * @method string getMiniProgramAppId() 获取参数已弃用，不用传参
 * @method void setMiniProgramAppId(string $MiniProgramAppId) 设置参数已弃用，不用传参
 * @method array getDeviceList() 获取设备列表
 * @method void setDeviceList(array $DeviceList) 设置设备列表
 */
class ActivateTWeCallLicenseRequest extends AbstractModel
{
    /**
     * @var integer TWecall类型：0-体验套餐；1-基础版；3-高级版；
     */
    public $PkgType;

    /**
     * @var string 参数已弃用，不用传参
     * @deprecated
     */
    public $MiniProgramAppId;

    /**
     * @var array 设备列表
     */
    public $DeviceList;

    /**
     * @param integer $PkgType TWecall类型：0-体验套餐；1-基础版；3-高级版；
     * @param string $MiniProgramAppId 参数已弃用，不用传参
     * @param array $DeviceList 设备列表
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
        if (array_key_exists("PkgType",$param) and $param["PkgType"] !== null) {
            $this->PkgType = $param["PkgType"];
        }

        if (array_key_exists("MiniProgramAppId",$param) and $param["MiniProgramAppId"] !== null) {
            $this->MiniProgramAppId = $param["MiniProgramAppId"];
        }

        if (array_key_exists("DeviceList",$param) and $param["DeviceList"] !== null) {
            $this->DeviceList = [];
            foreach ($param["DeviceList"] as $key => $value){
                $obj = new TWeCallInfo();
                $obj->deserialize($value);
                array_push($this->DeviceList, $obj);
            }
        }
    }
}
