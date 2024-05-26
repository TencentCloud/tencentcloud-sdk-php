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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ActivateTWeCallLicense请求参数结构体
 *
 * @method integer getPkgType() 获取voip类型
 * @method void setPkgType(integer $PkgType) 设置voip类型
 * @method string getMiniProgramAppId() 获取appId
 * @method void setMiniProgramAppId(string $MiniProgramAppId) 设置appId
 * @method array getDeviceList() 获取设备列表
 * @method void setDeviceList(array $DeviceList) 设置设备列表
 */
class ActivateTWeCallLicenseRequest extends AbstractModel
{
    /**
     * @var integer voip类型
     */
    public $PkgType;

    /**
     * @var string appId
     */
    public $MiniProgramAppId;

    /**
     * @var array 设备列表
     */
    public $DeviceList;

    /**
     * @param integer $PkgType voip类型
     * @param string $MiniProgramAppId appId
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
