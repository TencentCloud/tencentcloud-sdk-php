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
namespace TencentCloud\Ic\V20190307\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PayForExtendData请求参数结构体
 *
 * @method string getIccid() 获取卡片ICCID
 * @method void setIccid(string $Iccid) 设置卡片ICCID
 * @method integer getExtentData() 获取套外流量,单位MB
 * @method void setExtentData(integer $ExtentData) 设置套外流量,单位MB
 * @method integer getSdkappid() 获取应用ID
 * @method void setSdkappid(integer $Sdkappid) 设置应用ID
 */
class PayForExtendDataRequest extends AbstractModel
{
    /**
     * @var string 卡片ICCID
     */
    public $Iccid;

    /**
     * @var integer 套外流量,单位MB
     */
    public $ExtentData;

    /**
     * @var integer 应用ID
     */
    public $Sdkappid;

    /**
     * @param string $Iccid 卡片ICCID
     * @param integer $ExtentData 套外流量,单位MB
     * @param integer $Sdkappid 应用ID
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
        if (array_key_exists("Iccid",$param) and $param["Iccid"] !== null) {
            $this->Iccid = $param["Iccid"];
        }

        if (array_key_exists("ExtentData",$param) and $param["ExtentData"] !== null) {
            $this->ExtentData = $param["ExtentData"];
        }

        if (array_key_exists("Sdkappid",$param) and $param["Sdkappid"] !== null) {
            $this->Sdkappid = $param["Sdkappid"];
        }
    }
}
