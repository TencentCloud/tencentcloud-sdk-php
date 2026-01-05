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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ip 分析
 *
 * @method integer getStatus() 获取0 安全
1 可疑
2 恶意
3 未知
 * @method void setStatus(integer $Status) 设置0 安全
1 可疑
2 恶意
3 未知
 * @method array getTags() 获取标签特征
 * @method void setTags(array $Tags) 设置标签特征
 * @method array getFamily() 获取家族信息
 * @method void setFamily(array $Family) 设置家族信息
 * @method array getProfile() 获取画像
 * @method void setProfile(array $Profile) 设置画像
 * @method string getIsp() 获取运营商
 * @method void setIsp(string $Isp) 设置运营商
 */
class IPAnalyse extends AbstractModel
{
    /**
     * @var integer 0 安全
1 可疑
2 恶意
3 未知
     */
    public $Status;

    /**
     * @var array 标签特征
     */
    public $Tags;

    /**
     * @var array 家族信息
     */
    public $Family;

    /**
     * @var array 画像
     */
    public $Profile;

    /**
     * @var string 运营商
     */
    public $Isp;

    /**
     * @param integer $Status 0 安全
1 可疑
2 恶意
3 未知
     * @param array $Tags 标签特征
     * @param array $Family 家族信息
     * @param array $Profile 画像
     * @param string $Isp 运营商
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("Family",$param) and $param["Family"] !== null) {
            $this->Family = $param["Family"];
        }

        if (array_key_exists("Profile",$param) and $param["Profile"] !== null) {
            $this->Profile = $param["Profile"];
        }

        if (array_key_exists("Isp",$param) and $param["Isp"] !== null) {
            $this->Isp = $param["Isp"];
        }
    }
}
