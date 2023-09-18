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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Kerberos详细信息
 *
 * @method string getKrb5Conf() 获取Krb5Conf文件值
 * @method void setKrb5Conf(string $Krb5Conf) 设置Krb5Conf文件值
 * @method string getKeyTab() 获取KeyTab文件值
 * @method void setKeyTab(string $KeyTab) 设置KeyTab文件值
 * @method string getServicePrincipal() 获取服务主体
 * @method void setServicePrincipal(string $ServicePrincipal) 设置服务主体
 */
class KerberosInfo extends AbstractModel
{
    /**
     * @var string Krb5Conf文件值
     */
    public $Krb5Conf;

    /**
     * @var string KeyTab文件值
     */
    public $KeyTab;

    /**
     * @var string 服务主体
     */
    public $ServicePrincipal;

    /**
     * @param string $Krb5Conf Krb5Conf文件值
     * @param string $KeyTab KeyTab文件值
     * @param string $ServicePrincipal 服务主体
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
        if (array_key_exists("Krb5Conf",$param) and $param["Krb5Conf"] !== null) {
            $this->Krb5Conf = $param["Krb5Conf"];
        }

        if (array_key_exists("KeyTab",$param) and $param["KeyTab"] !== null) {
            $this->KeyTab = $param["KeyTab"];
        }

        if (array_key_exists("ServicePrincipal",$param) and $param["ServicePrincipal"] !== null) {
            $this->ServicePrincipal = $param["ServicePrincipal"];
        }
    }
}
