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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 支持下载的类型
 *
 * @method boolean getNGINX() 获取是否可以下载nginx可用格式
 * @method void setNGINX(boolean $NGINX) 设置是否可以下载nginx可用格式
 * @method boolean getAPACHE() 获取是否可以下载apache可用格式
 * @method void setAPACHE(boolean $APACHE) 设置是否可以下载apache可用格式
 * @method boolean getTOMCAT() 获取是否可以下载tomcat可用格式
 * @method void setTOMCAT(boolean $TOMCAT) 设置是否可以下载tomcat可用格式
 * @method boolean getIIS() 获取是否可以下载iis可用格式
 * @method void setIIS(boolean $IIS) 设置是否可以下载iis可用格式
 * @method boolean getJKS() 获取是否可以下载JKS可用格式
 * @method void setJKS(boolean $JKS) 设置是否可以下载JKS可用格式
 * @method boolean getOTHER() 获取是否可以下载其他格式
 * @method void setOTHER(boolean $OTHER) 设置是否可以下载其他格式
 * @method boolean getROOT() 获取是否可以下载根证书
 * @method void setROOT(boolean $ROOT) 设置是否可以下载根证书
 */
class SupportDownloadType extends AbstractModel
{
    /**
     * @var boolean 是否可以下载nginx可用格式
     */
    public $NGINX;

    /**
     * @var boolean 是否可以下载apache可用格式
     */
    public $APACHE;

    /**
     * @var boolean 是否可以下载tomcat可用格式
     */
    public $TOMCAT;

    /**
     * @var boolean 是否可以下载iis可用格式
     */
    public $IIS;

    /**
     * @var boolean 是否可以下载JKS可用格式
     */
    public $JKS;

    /**
     * @var boolean 是否可以下载其他格式
     */
    public $OTHER;

    /**
     * @var boolean 是否可以下载根证书
     */
    public $ROOT;

    /**
     * @param boolean $NGINX 是否可以下载nginx可用格式
     * @param boolean $APACHE 是否可以下载apache可用格式
     * @param boolean $TOMCAT 是否可以下载tomcat可用格式
     * @param boolean $IIS 是否可以下载iis可用格式
     * @param boolean $JKS 是否可以下载JKS可用格式
     * @param boolean $OTHER 是否可以下载其他格式
     * @param boolean $ROOT 是否可以下载根证书
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
        if (array_key_exists("NGINX",$param) and $param["NGINX"] !== null) {
            $this->NGINX = $param["NGINX"];
        }

        if (array_key_exists("APACHE",$param) and $param["APACHE"] !== null) {
            $this->APACHE = $param["APACHE"];
        }

        if (array_key_exists("TOMCAT",$param) and $param["TOMCAT"] !== null) {
            $this->TOMCAT = $param["TOMCAT"];
        }

        if (array_key_exists("IIS",$param) and $param["IIS"] !== null) {
            $this->IIS = $param["IIS"];
        }

        if (array_key_exists("JKS",$param) and $param["JKS"] !== null) {
            $this->JKS = $param["JKS"];
        }

        if (array_key_exists("OTHER",$param) and $param["OTHER"] !== null) {
            $this->OTHER = $param["OTHER"];
        }

        if (array_key_exists("ROOT",$param) and $param["ROOT"] !== null) {
            $this->ROOT = $param["ROOT"];
        }
    }
}
