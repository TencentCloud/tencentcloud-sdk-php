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
 * ModifyWebPageProtectDir请求参数结构体
 *
 * @method string getProtectDirAddr() 获取网站防护目录地址
 * @method void setProtectDirAddr(string $ProtectDirAddr) 设置网站防护目录地址
 * @method string getProtectDirName() 获取网站防护目录名称
 * @method void setProtectDirName(string $ProtectDirName) 设置网站防护目录名称
 * @method string getProtectFileType() 获取防护文件类型,分号分割 ;
 * @method void setProtectFileType(string $ProtectFileType) 设置防护文件类型,分号分割 ;
 * @method array getHostConfig() 获取防护机器列表信息
 * @method void setHostConfig(array $HostConfig) 设置防护机器列表信息
 */
class ModifyWebPageProtectDirRequest extends AbstractModel
{
    /**
     * @var string 网站防护目录地址
     */
    public $ProtectDirAddr;

    /**
     * @var string 网站防护目录名称
     */
    public $ProtectDirName;

    /**
     * @var string 防护文件类型,分号分割 ;
     */
    public $ProtectFileType;

    /**
     * @var array 防护机器列表信息
     */
    public $HostConfig;

    /**
     * @param string $ProtectDirAddr 网站防护目录地址
     * @param string $ProtectDirName 网站防护目录名称
     * @param string $ProtectFileType 防护文件类型,分号分割 ;
     * @param array $HostConfig 防护机器列表信息
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
        if (array_key_exists("ProtectDirAddr",$param) and $param["ProtectDirAddr"] !== null) {
            $this->ProtectDirAddr = $param["ProtectDirAddr"];
        }

        if (array_key_exists("ProtectDirName",$param) and $param["ProtectDirName"] !== null) {
            $this->ProtectDirName = $param["ProtectDirName"];
        }

        if (array_key_exists("ProtectFileType",$param) and $param["ProtectFileType"] !== null) {
            $this->ProtectFileType = $param["ProtectFileType"];
        }

        if (array_key_exists("HostConfig",$param) and $param["HostConfig"] !== null) {
            $this->HostConfig = [];
            foreach ($param["HostConfig"] as $key => $value){
                $obj = new ProtectHostConfig();
                $obj->deserialize($value);
                array_push($this->HostConfig, $obj);
            }
        }
    }
}
