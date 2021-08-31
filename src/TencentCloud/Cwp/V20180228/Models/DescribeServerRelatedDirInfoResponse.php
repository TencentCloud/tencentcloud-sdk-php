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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeServerRelatedDirInfo返回参数结构体
 *
 * @method string getHostName() 获取服务器名称
 * @method void setHostName(string $HostName) 设置服务器名称
 * @method string getHostIp() 获取服务器IP
 * @method void setHostIp(string $HostIp) 设置服务器IP
 * @method integer getProtectDirNum() 获取防护目录数量
 * @method void setProtectDirNum(integer $ProtectDirNum) 设置防护目录数量
 * @method integer getProtectFileNum() 获取防护文件数量
 * @method void setProtectFileNum(integer $ProtectFileNum) 设置防护文件数量
 * @method integer getProtectTamperNum() 获取防篡改数量
 * @method void setProtectTamperNum(integer $ProtectTamperNum) 设置防篡改数量
 * @method integer getProtectLinkNum() 获取防护软链数量
 * @method void setProtectLinkNum(integer $ProtectLinkNum) 设置防护软链数量
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeServerRelatedDirInfoResponse extends AbstractModel
{
    /**
     * @var string 服务器名称
     */
    public $HostName;

    /**
     * @var string 服务器IP
     */
    public $HostIp;

    /**
     * @var integer 防护目录数量
     */
    public $ProtectDirNum;

    /**
     * @var integer 防护文件数量
     */
    public $ProtectFileNum;

    /**
     * @var integer 防篡改数量
     */
    public $ProtectTamperNum;

    /**
     * @var integer 防护软链数量
     */
    public $ProtectLinkNum;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $HostName 服务器名称
     * @param string $HostIp 服务器IP
     * @param integer $ProtectDirNum 防护目录数量
     * @param integer $ProtectFileNum 防护文件数量
     * @param integer $ProtectTamperNum 防篡改数量
     * @param integer $ProtectLinkNum 防护软链数量
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("ProtectDirNum",$param) and $param["ProtectDirNum"] !== null) {
            $this->ProtectDirNum = $param["ProtectDirNum"];
        }

        if (array_key_exists("ProtectFileNum",$param) and $param["ProtectFileNum"] !== null) {
            $this->ProtectFileNum = $param["ProtectFileNum"];
        }

        if (array_key_exists("ProtectTamperNum",$param) and $param["ProtectTamperNum"] !== null) {
            $this->ProtectTamperNum = $param["ProtectTamperNum"];
        }

        if (array_key_exists("ProtectLinkNum",$param) and $param["ProtectLinkNum"] !== null) {
            $this->ProtectLinkNum = $param["ProtectLinkNum"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
