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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 扫描忽略的漏洞
 *
 * @method string getVulName() 获取漏洞名称
 * @method void setVulName(string $VulName) 设置漏洞名称
 * @method string getCVEID() 获取漏洞CVEID
 * @method void setCVEID(string $CVEID) 设置漏洞CVEID
 * @method string getPocID() 获取漏洞PocID
 * @method void setPocID(string $PocID) 设置漏洞PocID
 * @method integer getRegistryImageCount() 获取忽略的仓库镜像数
 * @method void setRegistryImageCount(integer $RegistryImageCount) 设置忽略的仓库镜像数
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method integer getIsIgnoreAll() 获取是否忽略所有镜像：0：否/1：是
 * @method void setIsIgnoreAll(integer $IsIgnoreAll) 设置是否忽略所有镜像：0：否/1：是
 * @method integer getLocalImageCount() 获取忽略的本地镜像数
 * @method void setLocalImageCount(integer $LocalImageCount) 设置忽略的本地镜像数
 */
class ScanIgnoreVul extends AbstractModel
{
    /**
     * @var string 漏洞名称
     */
    public $VulName;

    /**
     * @var string 漏洞CVEID
     */
    public $CVEID;

    /**
     * @var string 漏洞PocID
     */
    public $PocID;

    /**
     * @var integer 忽略的仓库镜像数
     */
    public $RegistryImageCount;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var integer 是否忽略所有镜像：0：否/1：是
     */
    public $IsIgnoreAll;

    /**
     * @var integer 忽略的本地镜像数
     */
    public $LocalImageCount;

    /**
     * @param string $VulName 漏洞名称
     * @param string $CVEID 漏洞CVEID
     * @param string $PocID 漏洞PocID
     * @param integer $RegistryImageCount 忽略的仓库镜像数
     * @param string $UpdateTime 更新时间
     * @param integer $IsIgnoreAll 是否忽略所有镜像：0：否/1：是
     * @param integer $LocalImageCount 忽略的本地镜像数
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
        if (array_key_exists("VulName",$param) and $param["VulName"] !== null) {
            $this->VulName = $param["VulName"];
        }

        if (array_key_exists("CVEID",$param) and $param["CVEID"] !== null) {
            $this->CVEID = $param["CVEID"];
        }

        if (array_key_exists("PocID",$param) and $param["PocID"] !== null) {
            $this->PocID = $param["PocID"];
        }

        if (array_key_exists("RegistryImageCount",$param) and $param["RegistryImageCount"] !== null) {
            $this->RegistryImageCount = $param["RegistryImageCount"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("IsIgnoreAll",$param) and $param["IsIgnoreAll"] !== null) {
            $this->IsIgnoreAll = $param["IsIgnoreAll"];
        }

        if (array_key_exists("LocalImageCount",$param) and $param["LocalImageCount"] !== null) {
            $this->LocalImageCount = $param["LocalImageCount"];
        }
    }
}
