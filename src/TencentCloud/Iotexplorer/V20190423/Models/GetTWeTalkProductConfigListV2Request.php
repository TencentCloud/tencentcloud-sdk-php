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
 * GetTWeTalkProductConfigListV2请求参数结构体
 *
 * @method string getProductId() 获取产品ID
 * @method void setProductId(string $ProductId) 设置产品ID
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 * @method string getTargetLanguage() 获取支持的语言，zh-中文；en-英文；默认zh
 * @method void setTargetLanguage(string $TargetLanguage) 设置支持的语言，zh-中文；en-英文；默认zh
 * @method boolean getIncludeCredentials() 获取是否脱敏
 * @method void setIncludeCredentials(boolean $IncludeCredentials) 设置是否脱敏
 * @method integer getOffset() 获取页码
 * @method void setOffset(integer $Offset) 设置页码
 * @method integer getLimit() 获取每页数据大小， 10-100
 * @method void setLimit(integer $Limit) 设置每页数据大小， 10-100
 */
class GetTWeTalkProductConfigListV2Request extends AbstractModel
{
    /**
     * @var string 产品ID
     */
    public $ProductId;

    /**
     * @var string 设备名称
     */
    public $DeviceName;

    /**
     * @var string 支持的语言，zh-中文；en-英文；默认zh
     */
    public $TargetLanguage;

    /**
     * @var boolean 是否脱敏
     */
    public $IncludeCredentials;

    /**
     * @var integer 页码
     */
    public $Offset;

    /**
     * @var integer 每页数据大小， 10-100
     */
    public $Limit;

    /**
     * @param string $ProductId 产品ID
     * @param string $DeviceName 设备名称
     * @param string $TargetLanguage 支持的语言，zh-中文；en-英文；默认zh
     * @param boolean $IncludeCredentials 是否脱敏
     * @param integer $Offset 页码
     * @param integer $Limit 每页数据大小， 10-100
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("TargetLanguage",$param) and $param["TargetLanguage"] !== null) {
            $this->TargetLanguage = $param["TargetLanguage"];
        }

        if (array_key_exists("IncludeCredentials",$param) and $param["IncludeCredentials"] !== null) {
            $this->IncludeCredentials = $param["IncludeCredentials"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
