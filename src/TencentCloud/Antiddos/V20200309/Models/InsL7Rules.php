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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例7层规则
 *
 * @method integer getStatus() 获取规则在中间状态态不可修改，只可在（0， 2， 8）状态可编辑。
规则状态，0: 正常运行中, 1: 配置规则中(配置生效中), 2: 配置规则失败（配置生效失败）, 3: 删除规则中(删除生效中), 5: 删除规则失败(删除失败), 6: 等待添加规则, 7: 等待删除规则, 8: 等待上传证书, 9: 规则对应的资源不存在，被隔离, 10:等待修改规则, 11:配置修改中
 * @method void setStatus(integer $Status) 设置规则在中间状态态不可修改，只可在（0， 2， 8）状态可编辑。
规则状态，0: 正常运行中, 1: 配置规则中(配置生效中), 2: 配置规则失败（配置生效失败）, 3: 删除规则中(删除生效中), 5: 删除规则失败(删除失败), 6: 等待添加规则, 7: 等待删除规则, 8: 等待上传证书, 9: 规则对应的资源不存在，被隔离, 10:等待修改规则, 11:配置修改中
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getProtocol() 获取协议
 * @method void setProtocol(string $Protocol) 设置协议
 * @method string getInsId() 获取实例ID
 * @method void setInsId(string $InsId) 设置实例ID
 * @method string getAppId() 获取用户AppID
 * @method void setAppId(string $AppId) 设置用户AppID
 * @method string getVirtualPort() 获取高防端口
 * @method void setVirtualPort(string $VirtualPort) 设置高防端口
 * @method string getSSLId() 获取证书ID
 * @method void setSSLId(string $SSLId) 设置证书ID
 */
class InsL7Rules extends AbstractModel
{
    /**
     * @var integer 规则在中间状态态不可修改，只可在（0， 2， 8）状态可编辑。
规则状态，0: 正常运行中, 1: 配置规则中(配置生效中), 2: 配置规则失败（配置生效失败）, 3: 删除规则中(删除生效中), 5: 删除规则失败(删除失败), 6: 等待添加规则, 7: 等待删除规则, 8: 等待上传证书, 9: 规则对应的资源不存在，被隔离, 10:等待修改规则, 11:配置修改中
     */
    public $Status;

    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string 协议
     */
    public $Protocol;

    /**
     * @var string 实例ID
     */
    public $InsId;

    /**
     * @var string 用户AppID
     */
    public $AppId;

    /**
     * @var string 高防端口
     */
    public $VirtualPort;

    /**
     * @var string 证书ID
     */
    public $SSLId;

    /**
     * @param integer $Status 规则在中间状态态不可修改，只可在（0， 2， 8）状态可编辑。
规则状态，0: 正常运行中, 1: 配置规则中(配置生效中), 2: 配置规则失败（配置生效失败）, 3: 删除规则中(删除生效中), 5: 删除规则失败(删除失败), 6: 等待添加规则, 7: 等待删除规则, 8: 等待上传证书, 9: 规则对应的资源不存在，被隔离, 10:等待修改规则, 11:配置修改中
     * @param string $Domain 域名
     * @param string $Protocol 协议
     * @param string $InsId 实例ID
     * @param string $AppId 用户AppID
     * @param string $VirtualPort 高防端口
     * @param string $SSLId 证书ID
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("InsId",$param) and $param["InsId"] !== null) {
            $this->InsId = $param["InsId"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("VirtualPort",$param) and $param["VirtualPort"] !== null) {
            $this->VirtualPort = $param["VirtualPort"];
        }

        if (array_key_exists("SSLId",$param) and $param["SSLId"] !== null) {
            $this->SSLId = $param["SSLId"];
        }
    }
}
