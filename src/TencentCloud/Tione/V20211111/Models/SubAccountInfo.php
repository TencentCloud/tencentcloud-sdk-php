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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 子账号信息
 *
 * @method string getUin() 获取腾讯云主账号UIN
 * @method void setUin(string $Uin) 设置腾讯云主账号UIN
 * @method string getSubUin() 获取腾讯云子账号UIN
 * @method void setSubUin(string $SubUin) 设置腾讯云子账号UIN
 * @method string getSubUinName() 获取子账号名称
 * @method void setSubUinName(string $SubUinName) 设置子账号名称
 * @method integer getLinuxUid() 获取子账号在Linux下的UID
 * @method void setLinuxUid(integer $LinuxUid) 设置子账号在Linux下的UID
 * @method integer getLinuxGid() 获取子账号在Linux下的GID
 * @method void setLinuxGid(integer $LinuxGid) 设置子账号在Linux下的GID
 */
class SubAccountInfo extends AbstractModel
{
    /**
     * @var string 腾讯云主账号UIN
     */
    public $Uin;

    /**
     * @var string 腾讯云子账号UIN
     */
    public $SubUin;

    /**
     * @var string 子账号名称
     */
    public $SubUinName;

    /**
     * @var integer 子账号在Linux下的UID
     */
    public $LinuxUid;

    /**
     * @var integer 子账号在Linux下的GID
     */
    public $LinuxGid;

    /**
     * @param string $Uin 腾讯云主账号UIN
     * @param string $SubUin 腾讯云子账号UIN
     * @param string $SubUinName 子账号名称
     * @param integer $LinuxUid 子账号在Linux下的UID
     * @param integer $LinuxGid 子账号在Linux下的GID
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
        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("SubUin",$param) and $param["SubUin"] !== null) {
            $this->SubUin = $param["SubUin"];
        }

        if (array_key_exists("SubUinName",$param) and $param["SubUinName"] !== null) {
            $this->SubUinName = $param["SubUinName"];
        }

        if (array_key_exists("LinuxUid",$param) and $param["LinuxUid"] !== null) {
            $this->LinuxUid = $param["LinuxUid"];
        }

        if (array_key_exists("LinuxGid",$param) and $param["LinuxGid"] !== null) {
            $this->LinuxGid = $param["LinuxGid"];
        }
    }
}
