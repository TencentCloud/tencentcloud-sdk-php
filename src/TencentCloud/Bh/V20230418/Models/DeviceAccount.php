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
namespace TencentCloud\Bh\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 主机账号
 *
 * @method integer getId() 获取账号ID
 * @method void setId(integer $Id) 设置账号ID
 * @method integer getDeviceId() 获取主机ID
 * @method void setDeviceId(integer $DeviceId) 设置主机ID
 * @method string getAccount() 获取账号名
 * @method void setAccount(string $Account) 设置账号名
 * @method boolean getBoundPassword() 获取true-已托管密码，false-未托管密码
 * @method void setBoundPassword(boolean $BoundPassword) 设置true-已托管密码，false-未托管密码
 * @method boolean getBoundPrivateKey() 获取true-已托管私钥，false-未托管私钥
 * @method void setBoundPrivateKey(boolean $BoundPrivateKey) 设置true-已托管私钥，false-未托管私钥
 * @method boolean getBoundKubeconfig() 获取是否托管凭证, true-托管，false-未托管
 * @method void setBoundKubeconfig(boolean $BoundKubeconfig) 设置是否托管凭证, true-托管，false-未托管
 * @method boolean getIsK8SManageAccount() 获取是否为k8s资产管理账号	
 * @method void setIsK8SManageAccount(boolean $IsK8SManageAccount) 设置是否为k8s资产管理账号	
 */
class DeviceAccount extends AbstractModel
{
    /**
     * @var integer 账号ID
     */
    public $Id;

    /**
     * @var integer 主机ID
     */
    public $DeviceId;

    /**
     * @var string 账号名
     */
    public $Account;

    /**
     * @var boolean true-已托管密码，false-未托管密码
     */
    public $BoundPassword;

    /**
     * @var boolean true-已托管私钥，false-未托管私钥
     */
    public $BoundPrivateKey;

    /**
     * @var boolean 是否托管凭证, true-托管，false-未托管
     */
    public $BoundKubeconfig;

    /**
     * @var boolean 是否为k8s资产管理账号	
     */
    public $IsK8SManageAccount;

    /**
     * @param integer $Id 账号ID
     * @param integer $DeviceId 主机ID
     * @param string $Account 账号名
     * @param boolean $BoundPassword true-已托管密码，false-未托管密码
     * @param boolean $BoundPrivateKey true-已托管私钥，false-未托管私钥
     * @param boolean $BoundKubeconfig 是否托管凭证, true-托管，false-未托管
     * @param boolean $IsK8SManageAccount 是否为k8s资产管理账号	
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("Account",$param) and $param["Account"] !== null) {
            $this->Account = $param["Account"];
        }

        if (array_key_exists("BoundPassword",$param) and $param["BoundPassword"] !== null) {
            $this->BoundPassword = $param["BoundPassword"];
        }

        if (array_key_exists("BoundPrivateKey",$param) and $param["BoundPrivateKey"] !== null) {
            $this->BoundPrivateKey = $param["BoundPrivateKey"];
        }

        if (array_key_exists("BoundKubeconfig",$param) and $param["BoundKubeconfig"] !== null) {
            $this->BoundKubeconfig = $param["BoundKubeconfig"];
        }

        if (array_key_exists("IsK8SManageAccount",$param) and $param["IsK8SManageAccount"] !== null) {
            $this->IsK8SManageAccount = $param["IsK8SManageAccount"];
        }
    }
}
