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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云原生网关服务简洁预览信息
 *
 * @method string getID() 获取服务ID
 * @method void setID(string $ID) 设置服务ID
 * @method string getName() 获取服务名字
 * @method void setName(string $Name) 设置服务名字
 * @method KongUpstreamInfo getUpstreamInfo() 获取后端配置
 * @method void setUpstreamInfo(KongUpstreamInfo $UpstreamInfo) 设置后端配置
 * @method string getUpstreamType() 获取后端类型
 * @method void setUpstreamType(string $UpstreamType) 设置后端类型
 * @method string getCreatedTime() 获取创建时间
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间
 * @method string getPath() 获取请求路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPath(string $Path) 设置请求路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProtocol() 获取后端协议
 * @method void setProtocol(string $Protocol) 设置后端协议
 * @method integer getRetries() 获取重试次数
 * @method void setRetries(integer $Retries) 设置重试次数
 * @method integer getTimeout() 获取后端延时，单位ms
 * @method void setTimeout(integer $Timeout) 设置后端延时，单位ms
 */
class KongServiceLightPreview extends AbstractModel
{
    /**
     * @var string 服务ID
     */
    public $ID;

    /**
     * @var string 服务名字
     */
    public $Name;

    /**
     * @var KongUpstreamInfo 后端配置
     */
    public $UpstreamInfo;

    /**
     * @var string 后端类型
     */
    public $UpstreamType;

    /**
     * @var string 创建时间
     */
    public $CreatedTime;

    /**
     * @var string 请求路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Path;

    /**
     * @var string 后端协议
     */
    public $Protocol;

    /**
     * @var integer 重试次数
     */
    public $Retries;

    /**
     * @var integer 后端延时，单位ms
     */
    public $Timeout;

    /**
     * @param string $ID 服务ID
     * @param string $Name 服务名字
     * @param KongUpstreamInfo $UpstreamInfo 后端配置
     * @param string $UpstreamType 后端类型
     * @param string $CreatedTime 创建时间
     * @param string $Path 请求路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Protocol 后端协议
     * @param integer $Retries 重试次数
     * @param integer $Timeout 后端延时，单位ms
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("UpstreamInfo",$param) and $param["UpstreamInfo"] !== null) {
            $this->UpstreamInfo = new KongUpstreamInfo();
            $this->UpstreamInfo->deserialize($param["UpstreamInfo"]);
        }

        if (array_key_exists("UpstreamType",$param) and $param["UpstreamType"] !== null) {
            $this->UpstreamType = $param["UpstreamType"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Retries",$param) and $param["Retries"] !== null) {
            $this->Retries = $param["Retries"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }
    }
}
