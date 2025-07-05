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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 非DLC产品CHDFS绑定
 *
 * @method string getProductName() 获取产品名称
 * @method void setProductName(string $ProductName) 设置产品名称
 * @method array getSuperUser() 获取用户名称（该字段已废弃）
 * @method void setSuperUser(array $SuperUser) 设置用户名称（该字段已废弃）
 * @method array getVpcInfo() 获取vpc配置信息
 * @method void setVpcInfo(array $VpcInfo) 设置vpc配置信息
 * @method boolean getIsBind() 获取是否与该桶绑定（该字段已废弃）
 * @method void setIsBind(boolean $IsBind) 设置是否与该桶绑定（该字段已废弃）
 */
class OtherCHDFSBinding extends AbstractModel
{
    /**
     * @var string 产品名称
     */
    public $ProductName;

    /**
     * @var array 用户名称（该字段已废弃）
     */
    public $SuperUser;

    /**
     * @var array vpc配置信息
     */
    public $VpcInfo;

    /**
     * @var boolean 是否与该桶绑定（该字段已废弃）
     */
    public $IsBind;

    /**
     * @param string $ProductName 产品名称
     * @param array $SuperUser 用户名称（该字段已废弃）
     * @param array $VpcInfo vpc配置信息
     * @param boolean $IsBind 是否与该桶绑定（该字段已废弃）
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
        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("SuperUser",$param) and $param["SuperUser"] !== null) {
            $this->SuperUser = $param["SuperUser"];
        }

        if (array_key_exists("VpcInfo",$param) and $param["VpcInfo"] !== null) {
            $this->VpcInfo = [];
            foreach ($param["VpcInfo"] as $key => $value){
                $obj = new CHDFSProductVpcInfo();
                $obj->deserialize($value);
                array_push($this->VpcInfo, $obj);
            }
        }

        if (array_key_exists("IsBind",$param) and $param["IsBind"] !== null) {
            $this->IsBind = $param["IsBind"];
        }
    }
}
