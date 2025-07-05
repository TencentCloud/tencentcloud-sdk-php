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
 * 增值服务数量统计
 *
 * @method string getLicenseType() 获取服务类型
 * @method void setLicenseType(string $LicenseType) 设置服务类型
 * @method integer getTotalNum() 获取授权总数
 * @method void setTotalNum(integer $TotalNum) 设置授权总数
 * @method integer getUsedNum() 获取已使用授权数
 * @method void setUsedNum(integer $UsedNum) 设置已使用授权数
 * @method array getTWeCallLicense() 获取TWeCall激活码
 * @method void setTWeCallLicense(array $TWeCallLicense) 设置TWeCall激活码
 */
class LicenseServiceNumInfo extends AbstractModel
{
    /**
     * @var string 服务类型
     */
    public $LicenseType;

    /**
     * @var integer 授权总数
     */
    public $TotalNum;

    /**
     * @var integer 已使用授权数
     */
    public $UsedNum;

    /**
     * @var array TWeCall激活码
     */
    public $TWeCallLicense;

    /**
     * @param string $LicenseType 服务类型
     * @param integer $TotalNum 授权总数
     * @param integer $UsedNum 已使用授权数
     * @param array $TWeCallLicense TWeCall激活码
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
        if (array_key_exists("LicenseType",$param) and $param["LicenseType"] !== null) {
            $this->LicenseType = $param["LicenseType"];
        }

        if (array_key_exists("TotalNum",$param) and $param["TotalNum"] !== null) {
            $this->TotalNum = $param["TotalNum"];
        }

        if (array_key_exists("UsedNum",$param) and $param["UsedNum"] !== null) {
            $this->UsedNum = $param["UsedNum"];
        }

        if (array_key_exists("TWeCallLicense",$param) and $param["TWeCallLicense"] !== null) {
            $this->TWeCallLicense = [];
            foreach ($param["TWeCallLicense"] as $key => $value){
                $obj = new TWeCallLicenseInfo();
                $obj->deserialize($value);
                array_push($this->TWeCallLicense, $obj);
            }
        }
    }
}
