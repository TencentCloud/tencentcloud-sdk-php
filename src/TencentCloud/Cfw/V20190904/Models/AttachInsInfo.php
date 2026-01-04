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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 关联实例信息
 *
 * @method string getInsId() 获取实例对象可以是cvm类型:ins-ad21xuds1形式;路由表类型:rtb-da12daxd形式;vpc类型:vpc-1dxdad2d形式
 * @method void setInsId(string $InsId) 设置实例对象可以是cvm类型:ins-ad21xuds1形式;路由表类型:rtb-da12daxd形式;vpc类型:vpc-1dxdad2d形式
 * @method string getInsName() 获取实例对象名称
 * @method void setInsName(string $InsName) 设置实例对象名称
 * @method string getCidr() 获取实例的cidr
 * @method void setCidr(string $Cidr) 设置实例的cidr
 */
class AttachInsInfo extends AbstractModel
{
    /**
     * @var string 实例对象可以是cvm类型:ins-ad21xuds1形式;路由表类型:rtb-da12daxd形式;vpc类型:vpc-1dxdad2d形式
     */
    public $InsId;

    /**
     * @var string 实例对象名称
     */
    public $InsName;

    /**
     * @var string 实例的cidr
     */
    public $Cidr;

    /**
     * @param string $InsId 实例对象可以是cvm类型:ins-ad21xuds1形式;路由表类型:rtb-da12daxd形式;vpc类型:vpc-1dxdad2d形式
     * @param string $InsName 实例对象名称
     * @param string $Cidr 实例的cidr
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
        if (array_key_exists("InsId",$param) and $param["InsId"] !== null) {
            $this->InsId = $param["InsId"];
        }

        if (array_key_exists("InsName",$param) and $param["InsName"] !== null) {
            $this->InsName = $param["InsName"];
        }

        if (array_key_exists("Cidr",$param) and $param["Cidr"] !== null) {
            $this->Cidr = $param["Cidr"];
        }
    }
}
