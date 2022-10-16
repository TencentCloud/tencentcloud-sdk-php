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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GenerateReflectSequence请求参数结构体
 *
 * @method string getDeviceDataUrl() 获取SDK生成的打包数据的资源链接。
 * @method void setDeviceDataUrl(string $DeviceDataUrl) 设置SDK生成的打包数据的资源链接。
 * @method string getDeviceDataMd5() 获取SDK生成的打包数据的MD5值。
 * @method void setDeviceDataMd5(string $DeviceDataMd5) 设置SDK生成的打包数据的MD5值。
 * @method string getSecurityLevel() 获取1-静默
2-眨眼
3-光线
4-眨眼+光线 （默认）
 * @method void setSecurityLevel(string $SecurityLevel) 设置1-静默
2-眨眼
3-光线
4-眨眼+光线 （默认）
 */
class GenerateReflectSequenceRequest extends AbstractModel
{
    /**
     * @var string SDK生成的打包数据的资源链接。
     */
    public $DeviceDataUrl;

    /**
     * @var string SDK生成的打包数据的MD5值。
     */
    public $DeviceDataMd5;

    /**
     * @var string 1-静默
2-眨眼
3-光线
4-眨眼+光线 （默认）
     */
    public $SecurityLevel;

    /**
     * @param string $DeviceDataUrl SDK生成的打包数据的资源链接。
     * @param string $DeviceDataMd5 SDK生成的打包数据的MD5值。
     * @param string $SecurityLevel 1-静默
2-眨眼
3-光线
4-眨眼+光线 （默认）
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
        if (array_key_exists("DeviceDataUrl",$param) and $param["DeviceDataUrl"] !== null) {
            $this->DeviceDataUrl = $param["DeviceDataUrl"];
        }

        if (array_key_exists("DeviceDataMd5",$param) and $param["DeviceDataMd5"] !== null) {
            $this->DeviceDataMd5 = $param["DeviceDataMd5"];
        }

        if (array_key_exists("SecurityLevel",$param) and $param["SecurityLevel"] !== null) {
            $this->SecurityLevel = $param["SecurityLevel"];
        }
    }
}
