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
namespace TencentCloud\Chc\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 通用服务的基本信息
 *
 * @method string getIdcName() 获取机房名称
 * @method void setIdcName(string $IdcName) 设置机房名称
 * @method string getContactName() 获取业务联系人
 * @method void setContactName(string $ContactName) 设置业务联系人
 * @method string getContactPhone() 获取联系人电话
 * @method void setContactPhone(string $ContactPhone) 设置联系人电话
 * @method string getInstructions() 获取操作说明
 * @method void setInstructions(string $Instructions) 设置操作说明
 * @method integer getServiceLevel() 获取1 、2 、3 分别代表 L1、L2、L3
 * @method void setServiceLevel(integer $ServiceLevel) 设置1 、2 、3 分别代表 L1、L2、L3
 * @method boolean getPreAuthorization() 获取操作预授权
 * @method void setPreAuthorization(boolean $PreAuthorization) 设置操作预授权
 */
class CommonServiceBaseInfo extends AbstractModel
{
    /**
     * @var string 机房名称
     */
    public $IdcName;

    /**
     * @var string 业务联系人
     */
    public $ContactName;

    /**
     * @var string 联系人电话
     */
    public $ContactPhone;

    /**
     * @var string 操作说明
     */
    public $Instructions;

    /**
     * @var integer 1 、2 、3 分别代表 L1、L2、L3
     */
    public $ServiceLevel;

    /**
     * @var boolean 操作预授权
     */
    public $PreAuthorization;

    /**
     * @param string $IdcName 机房名称
     * @param string $ContactName 业务联系人
     * @param string $ContactPhone 联系人电话
     * @param string $Instructions 操作说明
     * @param integer $ServiceLevel 1 、2 、3 分别代表 L1、L2、L3
     * @param boolean $PreAuthorization 操作预授权
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
        if (array_key_exists("IdcName",$param) and $param["IdcName"] !== null) {
            $this->IdcName = $param["IdcName"];
        }

        if (array_key_exists("ContactName",$param) and $param["ContactName"] !== null) {
            $this->ContactName = $param["ContactName"];
        }

        if (array_key_exists("ContactPhone",$param) and $param["ContactPhone"] !== null) {
            $this->ContactPhone = $param["ContactPhone"];
        }

        if (array_key_exists("Instructions",$param) and $param["Instructions"] !== null) {
            $this->Instructions = $param["Instructions"];
        }

        if (array_key_exists("ServiceLevel",$param) and $param["ServiceLevel"] !== null) {
            $this->ServiceLevel = $param["ServiceLevel"];
        }

        if (array_key_exists("PreAuthorization",$param) and $param["PreAuthorization"] !== null) {
            $this->PreAuthorization = $param["PreAuthorization"];
        }
    }
}
