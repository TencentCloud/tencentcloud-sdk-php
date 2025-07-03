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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 配置内容
 *
 * @method string getUconfigId() 获取配置ID
 * @method void setUconfigId(string $UconfigId) 设置配置ID
 * @method string getConfigType() 获取配置类型， 可选值：CLB（实例维度配置）， SERVER（服务维度配置），LOCATION（规则维度配置）
 * @method void setConfigType(string $ConfigType) 设置配置类型， 可选值：CLB（实例维度配置）， SERVER（服务维度配置），LOCATION（规则维度配置）
 * @method string getConfigName() 获取配置名字
 * @method void setConfigName(string $ConfigName) 设置配置名字
 * @method string getConfigContent() 获取配置内容
 * @method void setConfigContent(string $ConfigContent) 设置配置内容
 * @method string getCreateTimestamp() 获取配置的创建时间。
格式：YYYY-MM-DD HH:mm:ss
 * @method void setCreateTimestamp(string $CreateTimestamp) 设置配置的创建时间。
格式：YYYY-MM-DD HH:mm:ss
 * @method string getUpdateTimestamp() 获取配置的修改时间。
格式：YYYY-MM-DD HH:mm:ss
 * @method void setUpdateTimestamp(string $UpdateTimestamp) 设置配置的修改时间。
格式：YYYY-MM-DD HH:mm:ss
 */
class ConfigListItem extends AbstractModel
{
    /**
     * @var string 配置ID
     */
    public $UconfigId;

    /**
     * @var string 配置类型， 可选值：CLB（实例维度配置）， SERVER（服务维度配置），LOCATION（规则维度配置）
     */
    public $ConfigType;

    /**
     * @var string 配置名字
     */
    public $ConfigName;

    /**
     * @var string 配置内容
     */
    public $ConfigContent;

    /**
     * @var string 配置的创建时间。
格式：YYYY-MM-DD HH:mm:ss
     */
    public $CreateTimestamp;

    /**
     * @var string 配置的修改时间。
格式：YYYY-MM-DD HH:mm:ss
     */
    public $UpdateTimestamp;

    /**
     * @param string $UconfigId 配置ID
     * @param string $ConfigType 配置类型， 可选值：CLB（实例维度配置）， SERVER（服务维度配置），LOCATION（规则维度配置）
     * @param string $ConfigName 配置名字
     * @param string $ConfigContent 配置内容
     * @param string $CreateTimestamp 配置的创建时间。
格式：YYYY-MM-DD HH:mm:ss
     * @param string $UpdateTimestamp 配置的修改时间。
格式：YYYY-MM-DD HH:mm:ss
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
        if (array_key_exists("UconfigId",$param) and $param["UconfigId"] !== null) {
            $this->UconfigId = $param["UconfigId"];
        }

        if (array_key_exists("ConfigType",$param) and $param["ConfigType"] !== null) {
            $this->ConfigType = $param["ConfigType"];
        }

        if (array_key_exists("ConfigName",$param) and $param["ConfigName"] !== null) {
            $this->ConfigName = $param["ConfigName"];
        }

        if (array_key_exists("ConfigContent",$param) and $param["ConfigContent"] !== null) {
            $this->ConfigContent = $param["ConfigContent"];
        }

        if (array_key_exists("CreateTimestamp",$param) and $param["CreateTimestamp"] !== null) {
            $this->CreateTimestamp = $param["CreateTimestamp"];
        }

        if (array_key_exists("UpdateTimestamp",$param) and $param["UpdateTimestamp"] !== null) {
            $this->UpdateTimestamp = $param["UpdateTimestamp"];
        }
    }
}
