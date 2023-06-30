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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 网关版本详情
 *
 * @method string getVersionName() 获取版本名
 * @method void setVersionName(string $VersionName) 设置版本名
 * @method integer getWeight() 获取版本流量权重
 * @method void setWeight(integer $Weight) 设置版本流量权重
 * @method string getStatus() 获取创建状态
 * @method void setStatus(string $Status) 设置创建状态
 * @method string getCreatedTime() 获取创建时间
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间
 * @method string getUpdatedTime() 获取更新时间
 * @method void setUpdatedTime(string $UpdatedTime) 设置更新时间
 * @method integer getBuildId() 获取构建ID
 * @method void setBuildId(integer $BuildId) 设置构建ID
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method integer getPriority() 获取优先级
 * @method void setPriority(integer $Priority) 设置优先级
 * @method boolean getIsDefault() 获取是否默认版本
 * @method void setIsDefault(boolean $IsDefault) 设置是否默认版本
 * @method WxGatewayCustomConfig getCustomConfig() 获取网关版本自定义配置
 * @method void setCustomConfig(WxGatewayCustomConfig $CustomConfig) 设置网关版本自定义配置
 */
class GatewayVersionItem extends AbstractModel
{
    /**
     * @var string 版本名
     */
    public $VersionName;

    /**
     * @var integer 版本流量权重
     */
    public $Weight;

    /**
     * @var string 创建状态
     */
    public $Status;

    /**
     * @var string 创建时间
     */
    public $CreatedTime;

    /**
     * @var string 更新时间
     */
    public $UpdatedTime;

    /**
     * @var integer 构建ID
     */
    public $BuildId;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var integer 优先级
     */
    public $Priority;

    /**
     * @var boolean 是否默认版本
     */
    public $IsDefault;

    /**
     * @var WxGatewayCustomConfig 网关版本自定义配置
     */
    public $CustomConfig;

    /**
     * @param string $VersionName 版本名
     * @param integer $Weight 版本流量权重
     * @param string $Status 创建状态
     * @param string $CreatedTime 创建时间
     * @param string $UpdatedTime 更新时间
     * @param integer $BuildId 构建ID
     * @param string $Remark 备注
     * @param integer $Priority 优先级
     * @param boolean $IsDefault 是否默认版本
     * @param WxGatewayCustomConfig $CustomConfig 网关版本自定义配置
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
        if (array_key_exists("VersionName",$param) and $param["VersionName"] !== null) {
            $this->VersionName = $param["VersionName"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("UpdatedTime",$param) and $param["UpdatedTime"] !== null) {
            $this->UpdatedTime = $param["UpdatedTime"];
        }

        if (array_key_exists("BuildId",$param) and $param["BuildId"] !== null) {
            $this->BuildId = $param["BuildId"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("CustomConfig",$param) and $param["CustomConfig"] !== null) {
            $this->CustomConfig = new WxGatewayCustomConfig();
            $this->CustomConfig->deserialize($param["CustomConfig"]);
        }
    }
}
